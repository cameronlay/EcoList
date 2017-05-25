
var winSize = window.innerWidth;

var config = {
    apiKey: "AIzaSyC82ZRbf--52RkwFWRCvCBRN7zLSMCAqV8",
    authDomain: "ecolist-d3e23.firebaseapp.com",
    databaseURL: "https://ecolist-d3e23.firebaseio.com",
    projectId: "ecolist-d3e23",
    storageBucket: "ecolist-d3e23.appspot.com",
    messagingSenderId: "347349975058"
};
firebase.initializeApp(config);


firebase.auth().onAuthStateChanged( function() {
	let user = firebase.auth().currentUser;
		if(user != null) {
			firebase.database().ref("users/" + user.uid).set({name:user.displayName});
            document.getElementById("logIn").style.display="none";
            document.getElementById("logOut").style.display="block";
            if(winSize > 768) {
                document.getElementById("p").style.display = "block";
                document.getElementById("p").innerHTML = "Welcome, " + user.displayName;
        } else if(winSize < 768) {
                document.getElementById("p").style.display = "none";
                document.getElementById("t").innerHTML = "Hey, " + user.displayName;
        }
        }            
        else {
            console.log("not signed in");
            document.getElementById("logOut").style.display="none";
            document.getElementById("logIn").style.display="block";
        }
        
        
			
});
        
function logOut() {
    firebase.auth().signOut();
}

