var user = null;
var recipeList = null;
var listref = null;
let loadedOnceAlready = false;
firebase.auth().onAuthStateChanged( () => {
	user = firebase.auth().currentUser;
	if(user != null){
		firebase.database().ref("users/" + user.uid).set({name: user.displayName});
		listref = firebase.database().ref("shoppinglist/" + user.uid + "/");
		recipeList = firebase.database().ref("customrecipes/" + user.uid + "/");
		console.log("logged in");
		if(!loadedOnceAlready){
			recipeList.once("value").then( snapshot => {
				if(snapshot.exists() && snapshot.hasChildren()){
					snapshot.forEach( childSnapshot => {
						recipeName = childSnapshot.key;
						recipeID = recipeName.replace(/\b/,"") + "content";
						dbDescription = childSnapshot.child("description").val();
						a = 0;
						dbIngredients = [];
						b = 0;
						dbSteps = [];
						childSnapshot.child("ingredients").forEach( ing => {
							dbIngredients[a++] = ing.val();
						});
						childSnapshot.child("steps").forEach( stp =>{
							dbSteps[b++] = stp.val();
						});
						template.createListEntry(recipeName, recipeID);
						template.createFromTemplate(recipeID,recipeName,dbDescription,
						dbSteps,dbIngredients);
					});
				} 
				else {
					recipeList.parent.update({[user.uid]: "empty"});
					console.log("created " + user.uid + "'s custom recipes folder");
				};
			});
			listref.once("value").then(snapshot => {
				if(!snapshot.exists() || !snapshot.hasChildren()){
					firebase.database().ref("shoppinglist/").update({[user.uid]: "empty"});
					console.log("created " + user.uid + "'s shopping list");
				};
			});
			loadedOnceAlready = true;
		};
	}
	else {
		console.log("not signed in");
	};
});

$(document).ready(() =>{
	$('.saveBtn').click(function() {
		if(user != null){
			currentList = $(this).parent()[0];
			numIngredients = currentList.getElementsByClassName("ingredientCheckbox").length;
			includeIngredients = [];
			trigger = false;
			ingredientName = [];
			for(i=0;i<numIngredients;++i){
				includeIngredients[i] = currentList.getElementsByClassName("ingredientCheckbox")[i].checked;
				ingredientName[i] = currentList.getElementsByTagName("label")[i].innerText.match(/[A-Z]{1}.+$/g);
			};
			if(includeIngredients.every(item =>{return item == false})){
				alert("you have not selected any ingredients to add to your shopping list yet.");
			} else {
				while(numIngredients --> 0){
					if(includeIngredients[numIngredients]){
						listref.update({[ingredientName[numIngredients]] : 1});
					};
				};
				location.reload();
			};
		} else {
			alert("you must be logged in to perform this action");
		};
	});
});





var template = {
	createListEntry: (NAME, LIST) => {$("#UserCustomRecipes").prepend('<li id=' + NAME + ' onclick="userPillsClicked(\'' + NAME +'\', \'' + LIST + '\')"><a href="javascript:void(0);">'+ NAME + '</a></li>');},
	list: step => {return "<li class=''>"+ step +"</li>"},
	ingredient: item => {return '<input type="checkbox" id="' + (item + "zgh")  +'" class="ingredientCheckbox"><label for="' + (item + "zgh") + '" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;' + item + '</label><br>'},
	createListItem: listSteps => {
		htmlstr = "";
		for(i = 0; i< listSteps.length; ++i){
			htmlstr += template.list(listSteps[i]);
		};
		return htmlstr;
	},
	createIngredientItem: listIng => {
		htmlstr = "";
		for(i = 0; i< listIng.length; ++i){
			htmlstr += template.ingredient(listIng[i]);
		};
		return htmlstr;
	}, 
	createFromTemplate: (LIST, recipeName, recipeDescription, listItems, ingredients) => {
		$('#userListContent').append( '<div class="row displayNone recipeContent" id="' + LIST + '"><div class="col-md-8 borderLeft">' +
                        "<h2>" + recipeName + "</h2>" +
                        '<div class="col-md-12">' +
                            '<h4 class="h4margin">Recipe Description</h4>' +
                            '<div class="ddmargin">' + recipeDescription + '<br><br><br></div>' +
                            '<ol class="lessPadding">' +
                                template.createListItem(listItems) +
                            '</ol><br><table class="table table-condensed"><tr><th colspan="3" class="centered">Ingredients</th></tr><tr><td><div>'+
                                        template.createIngredientItem(ingredients) +
                                        '<input type="submit" class="btn btn-info saveBtn" value="Add Items to List">'+
                                        '<button type="button" class="resetBtn btn btn-danger">Reset Checkboxes</button></div></td></tr></table></div></div></div>');
										var checkBox = $('.ingredientCheckbox');
										$(".resetBtn").unbind("click");
										$(".resetBtn").on("click", function() {
											checkBox.prop('checked', false);
											$(".glyphicon-unchecked").classList.add("displayInline");
											$(".glyphicon-check").classList.add('displayNone');
										});
										$('.saveBtn').unbind("click");
										$('.saveBtn').click(function() {
											if(user != null){
												currentList = $(this).parent()[0];
												numIngredients = currentList.getElementsByClassName("ingredientCheckbox").length;
												includeIngredients = [];
												trigger = false;
												ingredientName = [];
												for(i=0;i<numIngredients;++i){
													includeIngredients[i] = currentList.getElementsByClassName("ingredientCheckbox")[i].checked;
													ingredientName[i] = currentList.getElementsByTagName("label")[i].innerText.match(/[A-Z]{1}.+$/g);
												};
												if(includeIngredients.every(item =>{return item == false})){
													alert("you have not selected any ingredients to add to your shopping list yet.");
												} else {
													while(numIngredients --> 0){
														if(includeIngredients[numIngredients]){
															listref.update({[ingredientName[numIngredients]] : 1});
														};
													};
													location.reload();
												};
											} else {
												alert("you must be logged in to perform this action");
											};
										});
	}
};
function makeRecipe(){
	if(user != null){
		var Title = $("#CustomRecipeName")[0].value;
		Title = Title.replace(/\//g,"\\");
		Title = Title.replace(/\[/g,"(");
		Title = Title.replace(/\]/g,")");
		Title = Title.replace(/(\.|#|\$)/g,"");
		Title = Title.replace(/\s{2,}/g," ");
		Title = Title.replace(/(^\s*\(\s*$|^\s*\)\s*$|^\s*\\\s*$)/g,"");
		Title = Title.replace(/\\\s*\\/g,"");
		Title = Title.replace(/\(\s*\)/g,"");
		Title = Title.replace(/userListContentCreate/ig, "");
		Title = Title.toLowerCase();
		Title = Title.replace(/\b[a-z]/g,function(f){return f.toUpperCase();});
		$("#CustomRecipeName")[0].value = Title;
		if(Title != "" && Title != undefined && Title != null){
			var Description = $("#CustomRecipeDesc")[0].value;
			var Steps = $(".inputSteps");
			var Ingreds = $(".inputIngredients");
			recipeList.once("value").then( snapshot => {
				if(snapshot.hasChild(Title)){
					if(confirm("You already have a recipe called '" + Title + "' do you wish to write over it?")){
						write();
					} else {
						alert("please change the title of your recipe");
					};
				} else {
					write();
				};
				function write(){
					recipeList.child(Title + "/").update({description: [Description]});
					for(i = 0;i < Steps.length; ++i){
						if(Steps[i].value != "" && Steps[i].value != null && Steps[i].value != undefined){
							recipeList.child(Title + "/steps/").update({[i]:Steps[i].value});
						};
					};
					for(j = 0;j < Ingreds.length; ++j){
						if(Ingreds[j].value != "" && Ingreds[j].value != null && Ingreds[j].value != undefined){
							currentIngredient = Ingreds[j].value.toLowerCase();
							currentIngredient = currentIngredient.replace(/\b[a-z]/g,function(f){return f.toUpperCase();});
							recipeList.child(Title + "/ingredients/").update({[j]:currentIngredient});
						};
					};
					location.reload();
				};
			});
		};
	} else{
		alert("you must be logged in to perform this action");
	};
}