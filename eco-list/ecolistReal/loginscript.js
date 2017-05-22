// Initialize Firebase
/*var config = {
    apiKey: "AIzaSyC82ZRbf--52RkwFWRCvCBRN7zLSMCAqV8",
    authDomain: "ecolist-d3e23.firebaseapp.com",
    databaseURL: "https://ecolist-d3e23.firebaseio.com",
    projectId: "ecolist-d3e23",
    storageBucket: "ecolist-d3e23.appspot.com",
    messagingSenderId: "347349975058"
};
firebase.initializeApp(config);*/

// Initialize Firebase Karanveer
var config = {
    apiKey: "AIzaSyDbbQhEgMs6GJhDRccVTWk5ibUNgzGhE2s",
    authDomain: "comp2910-9d392.firebaseapp.com",
    databaseURL: "https://comp2910-9d392.firebaseio.com",
    projectId: "comp2910-9d392",
    storageBucket: "comp2910-9d392.appspot.com",
    messagingSenderId: "758365219906"
};
firebase.initializeApp(config);
  
firebase.auth().onAuthStateChanged( function() {
	const user = firebase.auth().currentUser;
		if(user != null) {
			firebase.database().ref("users/" + user.uid).set({name:user.displayName});
		} 
        else 
            console.log("not signed in");
			
});
        
function logOut() {
    firebase.auth().signOut();
}
        
var winSize = window.innerWidth;
    
firebase.auth().onAuthStateChanged(function(user) {
  
if (user) {
    document.getElementById("logIn").style.display="none";
    document.getElementById("logOut").style.display="block";
    console.log("signin");
} else {
    document.getElementById("logOut").style.display="none";
    document.getElementById("logIn").style.display="block";
    console.log("out");
}
 
if(user && winSize > 786) {
    document.getElementById("p").style.display = "block";
    document.getElementById("p").innerHTML = "Welcome, " + user.displayName;
} else {
    document.getElementById("p").style.display = "none";
    document.getElementById("t").innerHTML = "Hey, " + user.displayName;
}  
});
