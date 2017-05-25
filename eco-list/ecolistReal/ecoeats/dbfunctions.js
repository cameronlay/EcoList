/**
 * Created by Cameron on 2017-05-18.
 * MODIFIED BY EDMUND
 */
// var listref = null;
// var user = null;
// var itemName = null;

// DELETED BY EDMUND
// firebase.auth().onAuthStateChanged(function () {

    // WITHOUT ONAUTHSTATECHANGED FUNCTION, JUST GET USER'S INFO USING DOCUMENT READY FUNCTION
    // ASSUME THAT WHEN USER GOES TO ECOEATS PAGE, USER HAS ALREADY BEEN LOGGED IN
    // OTHERWISE NOT SHOWING CREATE USERS OWN TAB
    window.addEventListener('load', function() {

        // GET USERS INFO, LOCAL VAR
        var user = firebase.auth().currentUser;

        // GET RECIPE NAME, LOCAL VAR
        var itemName = document.getElementById("CustomRecipeName").value;

        // IF USER IS LOGGED IN,
        // 1, SHOW USERS LIST TAB (PURE JAVASCRIPT, DISPLAY YES)
        // 2, GET RECIPES FROM USER'S DATABASE
        // 3, IF USER HAS RECIPES ALREADY,
        // 4, SHOW RECIPES NAME ON THE PILLS 
        // 5, DISPLAY RECIPE NAME, DESCRIPTION, STEPS, INGREDIENTS (ADDING INGREDIENTS WILL SHARE IAN'S CODE)
        // 6, CREATE USERS
        if (user != null) {

            // THIS LINE IS ALREADY IN LOGINSCRIPT JS, ALSO NOT USING ONAUTHSTATECHANGED FUNCTION CURRENTLY
            // firebase.database().ref("users/" + user.uid).set({name: user.displayName});
            var listref = firebase.database().ref("mealplanner/" + user.uid + "/" + itemName);
            console.log("logged in");
        } else console.log("not signed in");

    });

// });

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
        snapshot.forEach(childSnapshot => {
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










































































/*$(document).ready(function() {
    $('input.saveBtn').click(function() {

        // GET FIREBASE REFERENCE
        var fbRefList = firebase.database().ref("shoppinglist/" + user.uid);//.set({name:user.displayName});

        // GET CHECKBOXES WHICH IS SIBLINGS OF SAVE BUTTON
        // CURRENTLY, IT'S AN ARRAY WITH 400+ ELEMENTS
        var arrayOfSiblings = $(this).siblings('.ingredientCheckbox');
        var trueArrayOfSiblings = undefined;

        // FOR LOOP FIRST
        // IF CHECKBOXES ARE TRUE ORGANIZE ITEMS USING NAME AND QUANTITY
        // NAME OF CHECKBOXES WILL BE #.###NAME
        for (var i = 0; i < arrayOfSiblings.length; i++) {
            if (arrayOfSiblings[i] == true) {
                trueArrayOfSiblings[i] = arrayOfSiblings[i];
            }
        }

        // IF SUCCESS TO ORGANIZE ITEMS, SEND TO FIREBASE REF

    })
})*/