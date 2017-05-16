(function () {
    

// Initialize Firebase
var config = {
    apiKey: "AIzaSyC82ZRbf--52RkwFWRCvCBRN7zLSMCAqV8",
    authDomain: "ecolist-d3e23.firebaseapp.com",
    databaseURL: "https://ecolist-d3e23.firebaseio.com",
    projectId: "ecolist-d3e23",
    storageBucket: "ecolist-d3e23.appspot.com",
    messagingSenderId: "347349975058"
};
firebase.initializeApp(config);

// get elements

    const listObject = document.getElementById('listContainer');
    const cartList = document.getElementById('cartItem');

// create references
    const dbRefList = firebase.database().ref().child('list');
    const dbRefCart = dbRefList.child('cartItems');

// sync object changes
    dbRefList.on('value', snap => {
        listObject.innerText = JSON.stringify(snap.val(), null, 3)
    });

    //sync list changes
    dbRefCart.on('child_added', snap => console.log(snap.val()));
});