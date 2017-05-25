var user = null;
var recipeList = null;
var listref = null;
firebase.auth().onAuthStateChanged( () => {
	user = firebase.auth().currentUser;
	if(user != null){
		firebase.database().ref("users/" + user.uid).set({name: user.displayName});
		listref = firebase.database().ref("shoppinglist/" + user.uid + "/");
		recipeList = firebase.database().ref("customrecipes/" + user.uid + "/");
		console.log("logged in");
		recipeList.once("value").then( snapshot => {
			if(snapshot.exists() /*&& snapshot.hasChildren()*/){ //CHECK FOR CHILDREN LATER
				console.log("hello");
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
			};
		} else {
			alert("you must be logged in to perform this action");
		};
	});
});





/*
var template = {
	list: step => {return "<li class=''>"+ step +"</li>"},
	createListItem: recipeName => {},
	createFromTemplate: (recipeName, recipeDescription, listItems, ingredients) => {
		return '<div class="col-md-8 borderLeft">' +
                        //'<h2>List 1</h2>' +
                        '<div class="col-md-12">' +
                            '<h4 class="h4margin">Recipe Description</h4>' +
                            //'<div class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></div>' +
                            '<ol class="lessPadding">' +
                                '<li class="">This is User Content</li>'+
                                '<li class="">This is User Content</li>'+
                            '</ol><br><table class="table table-condensed"><tr><th colspan="3" class="centered">Ingredients</th></tr><tr><td><form action="" method="post">'+
                                        '<input type="checkbox" id="firstUser1" class="ingredientCheckbox"><label for="firstUser1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;ingredient1</label><br>'+
                                        //<input type="submit" class="btn btn-info saveBtn" value="Add Items to List">
                                        '<button type="button" class="resetBtn btn btn-danger">Reset Checkboxes</button></form></td></tr></table></div></div>';
	}
};*/