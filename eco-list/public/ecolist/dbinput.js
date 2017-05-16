(function () {


// Initialize Firebase
    var config = {
        apiKey: "AIzaSyCFV9ueKtaYkvl14ZkklYtHpdXJJ-ODpiI",
        authDomain: "ecolist-bc2f6.firebaseapp.com",
        databaseURL: "https://ecolist-bc2f6.firebaseio.com",
        projectId: "ecolist-bc2f6",
        storageBucket: "ecolist-bc2f6.appspot.com",
        messagingSenderId: "954845578727"
    };
    var firebase = new Firebase('https://ecolist-bc2f6.firebaseio.com');
    firebase.initializeApp(config);

// get elements

    const listObject = document.getElementById('listContainer');
    const cartList = document.getElementById('cartItems');

// create references
    const dbRefList = firebase.database().ref().child('list');
    const dbRefCart = dbRefList.child('cartItems');

// sync object changes
    dbRefList.on('value', function(snap) {
        listObject.innerText = JSON.stringify(snap.val(), null, 1)
    });

    //sync list changes
    dbRefCart.on('child_added', function(snap) {
        const li = document.createElement('li');
        li.innerText = snap.val();
        li.id = snap.key;
        cartList.appendChild(li);
    });

    dbRefCart.on('child_changed', function(snap) {
        const liChanged = document.getElementById(snap.key);
        liChanged.innerText = snap.val();
    });

    dbRefCart.on('child_removed', function(snap) {
        const liToRemove = document.getElementById(snap.key);
        liToRemove.remove();
    });
});