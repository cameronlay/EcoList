// <!-- EDMUND, EMAIL LOGIN AND SIGNUP -->

// EDMUND, WRITE USER INFO IN DATABASE
function writeUserData(userId, userName, userEmail) {
    firebase.database().ref('users/' + userId).set({
        name: userName,
        email: userEmail,
    });
}

// EDMUND, ADD LOGIN EVENT
document.getElementById('LoginButton').onclick(function() {

    // GET ID FROM HTML
    var emailLogInEmail = document.getElementById('LoginUsername');
    var emailLogInPassword = document.getElementById('Password');
    var emailLogInBtn = document.getElementById('LoginButton');

    // GET VALUE FROM ID
    var email = emailLogInEmail.value;
    var password = emailLogInPassword.value;

    // GET AUTH FROM FIREBASE
    var auth = firebase.auth();

    // SIGN IN
    auth.signInWithEmailAndPassword(email, password).catch(function(error) {
        // IF THERE'S AN ERROR, SHOW LOG IN FAILED MESSAGE
        document.getElementsByClassName('spacingRow')[0].style.display = "block";
    });

    auth.onAuthStateChanged(function(user) {
        if (user) {
            window.location.href = '../';
        }
    })

});

// EDMUND, ADD SIGNUP EVENT
document.getElementById('SignupButton').onclick(function() {

    // GET ID FROM HTML
    var emailSignUpEmail = document.getElementById('Email');
    var emailSignUpName = document.getElementById('SignupUsername');
    var emailSignUpPassword = document.getElementById('SignupPassword');

    // GET VALUE FROM ID
    var email = emailSignUpEmail.value;
    var password = emailSignUpPassword.value;

    // GET AUTH FROM FIREBASE
    var auth = firebase.auth();

    // SIGN IN
    auth.createUserWithEmailAndPassword(email, password).catch(function(error) {
        // IF THERE'S AN ERROR, SHOW SIGN UP FAILED MESSAGE
        document.getElementsByClassName('spacingRow')[3].style.display = "block";
    });

    // AFTER SIGN UP, STORE USER DATE INTO DATABASE WITH NAME, EMAIL, USERID(random)
    auth.onAuthStateChanged(function(user) {
        if (user) {
            // GET INFO OF CURRENT USER
            var curUser = auth.currentUser;
            var curUserID = curUser.uid;

            // PUT INFORMATINON INTO DATABASE, FUNCTION IS DEFINED ON LINE 4
            writeUserData(curUserID, emailSignUpName, emailSignUpEmail);
            
            // AFTER PUTTING INFO IN DATABASE, LET USER GO TO OUR INDEX PAGE.
            window.location.href = '../';
        }

    });

});