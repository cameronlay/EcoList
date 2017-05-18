/**
 * Created by Cameron on 2017-05-18.
 */
var listref = null;
var user = null;
var itemName = null;
firebase.auth().onAuthStateChanged(function () {
    user = firebase.auth().currentUser;
    itemName = document.getElementById("CustomRecipeName").value;
    if (user != null) {
        firebase.database().ref("users/" + user.uid).set({name: user.displayName});
        listref = firebase.database().ref("mealplanner/" + user.uid + "/" + itemName);
        console.log("logged in");
    } else console.log("not signed in");
});

function updateList() {
    var recipeDescrip = document.getElementById("CustomRecipeDesc").value;
    var stepsList = document.getElementsByClassName("inputSteps");
    var ingredientsList = document.getElementsByClassName("inputIngredients");
    var stepsListLength = stepsList.length - 1;
    var ingredientsListLength = ingredientsList.length - 1;
    var dblist = [];
    var counterSteps = 0;
    var counterIngredients = 0;
    listref.once("value").then(snapshot => {
        if(snapshot.exists() && snapshot.hasChildren()){
        snapshot.forEach(childSnapshot = > {
            dblist[dblist.length] = childSnapshot.key;
    });
        listref.update({
            description: recipeDescrip
        });
        console.log("ran");
        for (a = 0; a < dblist.length; a++) {
            for (j = 0; j < stepsListLength; j += 2) {
                if (j % 2 == 0) {
                    if (dblist[a] == stepsList[j].value) {
                        dblist[a] = true;
                    }
                }
            }
        }
        for (var key of dblist) {
            console.log(key);
            if (key !== true) {
                listref.child(key).remove();
            }
        }
    }
});
    for (i = 0; i < stepsListLength; i += 2) {
        if (user != null) {
            if (stepsList[i].value != "" && stepsList[i].value != null) {
                listref.update({[++counterSteps]: stepsList[i].value});
                console.log("ran");
            }
        }
    }
    console.log("saved");
};
        for (a = 0; a < dblist.length; a++) {
            for (j = 0; j < ingredientsListLength; j += 2) {
                if (j % 2 == 0) {
                    if (dblist[a] == ingredientsList[j].value) {
                        dblist[a] = true;
                    }
                }
            }
        }
        for (var key of dblist) {
            console.log(key);
            if (key !== true) {
                listref.child(key).remove();
            }
        }
    }
});
    for (i = 0; i < ingredientsListLength; i += 2) {
        if (user != null) {
            if (ingredientsList[i].value != "" && ingredientsList[i].value != null) {
                listref.update({[++counterIngredients]: ingredientsList[i].value});
                console.log("ran");
            }
        }
    }
    console.log("saved");
};
