  // Initialize Firebase
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
			} else console.log("not signed in");
			
		});
        
        function logOut() {
            firebase.auth().signOut();
        }
        
        
            var user = firebase.auth().currentUser;
    firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
          document.getElementById("logIn").style.display="none";
          document.getElementById("logOut").style.display="block";
         // document.getElementById("p").style.display="block";
          //document.getElementById("p").innerHTML="Welcome, " + user.displayName;
          console.log("signin");
  } else {
    document.getElementById("logOut").style.display="none";
          document.getElementById("logIn").style.display="block";
          //document.getElementById("p").style.display="none";
          console.log("out");
  }
});