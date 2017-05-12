function $(id){
    var element = document.getElementById(id);
    if( element == null )
        alert( 'Programmer error: ' + id + ' does not exist.' );
    return element;
}


function $$(className) {
    var element = document.getElementsByClassName(className);

    if (element == null) {
        alert('Programmer error (class): ' + className + 'does not exist.');
    }
    return element;
}

function testUsername(){
    var x = $("SignupUsername").value;
    var patt = /^(?:\S\w*_*)$/i;
    var res = patt.test(x);
//        will return true if input is valid
    return res;
}

function warnUsername() {
    if(!testUsername()){
        $("ErrUsername").style.visibility = 'visible';
    } else {
        $("ErrUsername").style.visibility = 'hidden';
    }
}

function testPassword(){
    var x = $("SignupPassword").value.length;
//        will return true if input is valid
    return 8 <= x && x <= 128;
}

function warnPassword() {
    if(!testPassword()){
        $("ErrPassword").style.visibility = 'visible';
    } else {
        $("ErrPassword").style.visibility = 'hidden';
    }
}

function testConfirm() {
    var x = $("Password2").value === $("SignupPassword").value;
//    will return true if input is valid
    return x;
}

function warnConfirm() {
    if(!testConfirm()){
        $("ErrConfirm").style.visibility = 'visible';
    } else {
        $("ErrConfirm").style.visibility = 'hidden';
    }
}

function testEmailValid(){
    var x = $("Email").value;
    var patt = /(\w+)(@)(\w+)(\.com$|\.co$|\.org$|\.ca$|\.net$)/;
    var res = patt.test(x);
//        will return true if input is valid
    return res;
}

function warnEmailType(id) {
    if(!testEmailValid(id)){
        $("ErrEmail").style.visibility = 'visible';
    } else {
        $("ErrEmail").style.visibility = 'hidden';
    }
}

function formValidate() {
    if (testEmailValid() && testUsername()
        && testPassword() && testConfirm()) {
        return true;
    }   else {
        if (!testEmailValid()) {
            $("ErrEmail").style.visibility = 'visible';
        }   else {
            $("ErrEmail").style.visibility = 'hidden';
        }
        if (!testUsername()) {
            $("ErrUsername").style.visibility = 'visible';
        }   else {
            $("ErrUsername").style.visibility = 'hidden';
        }
        if (!testPassword()) {
            $("ErrPassword").style.visibility = 'visible';
        }   else {
            $("ErrPassword").style.visibility = 'hidden';
        }
        if (!testConfirm()) {
            $("ErrConfirm").style.visibility = 'visible';
        }   else {
            $("ErrConfirm").style.visibility = 'hidden';
        }
        return false;
    }
}

function SignUpShow() {
    document.getElementsByClassName('toggleForm')[1].style.display = 'block';
    document.getElementsByClassName('toggleForm')[0].style.display = 'none';
}

function LoginShow() {
    document.getElementsByClassName('toggleForm')[1].style.display = 'none';
    document.getElementsByClassName('toggleForm')[0].style.display = 'block';
}

function windowResize(){

    var winSize = window.innerWidth;
    if (winSize > 991.5) {
        document.getElementsByClassName('toggleForm')[1].style.display = 'block';
        document.getElementsByClassName('toggleForm')[0].style.display = 'block';
    }
    if (winSize < 991.5) {
        document.getElementsByClassName('toggleForm')[0].style.display = 'none';
    }
}

window.onresize = function() { windowResize()};
