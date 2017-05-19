var listref = null;
var user = null;
firebase.auth().onAuthStateChanged(function () {
    user = firebase.auth().currentUser;
    if (user != null) {
        firebase.database().ref("users/" + user.uid).set({name: user.displayName});
        listref = firebase.database().ref("shoppinglist/" + user.uid + "/");
        console.log("logged in");
    } else console.log("not signed in");
});
function updateList() {
    var currentList = document.getElementsByClassName("form-control");
    var currentListLength = currentList.length - 1;
    var dblist = [];
    listref.once("value").then(snapshot = > {
        if(snapshot.exists() && snapshot.hasChildren()){
        snapshot.forEach(childSnapshot = > {
            dblist[dblist.length] = childSnapshot.key;
    });
        for (a = 0; a < dblist.length; a++) {
            for (j = 0; j < currentListLength; j += 2) {
                if (j % 2 == 0) {
                    if (dblist[a] == currentList[j].value) {
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
    for (i = 0; i < currentListLength; i += 2) {
        if (user != null) {
            if (currentList[i].value != "" && currentList[i].value != null &&
                currentList[i + 1].value != "" && currentList[i + 1].value != null) {
                listref.update({[currentList[i].value]: currentList[i + 1].value});
                console.log("ran");
            }
        }
    }
    console.log("saved");
};