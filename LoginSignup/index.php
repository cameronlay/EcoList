<!DOCTYPE html>
<html lang="en">
<head>
    <title>EcoList - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Cameron Lay">
    <link rel="shortcut icon" href="/LOGO/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/LOGO/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Burgers.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../hamburger.js"></script>
    <script src="../functionHiding.js" id="SelfDestruct"></script>
</head>
<body onload="setBurger(true);hide_function()">
<div class="col-md-12">
    <div id="GUI">
        <?php include('/burgerMenuGUI.html');?>
    </div>
    <div class="container panel panel-default">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="LoginLogo">
                <a href="#"><img src ="LOGO2.png" alt="Logo"/></a>
            </div>
        </div>
        <div class="row" id="FormContent">
            <div class="col-md-2"></div>
            <div class="col-md-4" id="LoginLeft">
                <form id="LoginForm" name="LoginForm" method="post">
                    <table id="LoginTable">
                        <tbody>
                        <tr>
                            <td><input type="text" id="LoginUsername" name="username" placeholder="Username" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td class="spacingRow">Just here for spacing</td>
                        </tr>
                        <tr>
                            <td><input type="password" placeholder="Password" id="Password" name="password" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td class="spacingRow">Just here for spacing</td>
                        </tr>
                        <tr class="submitButton">
                            <td><input id="LoginButton" name="submit" value="Login" type="submit" class="btn btn-info"/></td>
                        </tr>
                        <tr>
                            <td class="spacingRow">Just here for spacing</td>
                        </tr>
                        <tr>
                            <td><input type="button" value="Sign-Up" onmousedown="SignUpShow()" id="RegisterButton" class="btn btn-info"/></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="col-md-5"  id="SignupRight">
                <form id="SignupForm" name="signupform" method="post" onsubmit="return formValidate()">
                    <table id="SignupTable">
                        <tbody>
                        <tr>
                            <td><input type="email" placeholder="Email" onblur="warnEmailType()" id="Email" name="email" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td id="ErrEmail">Please enter a valid email</td>
                        </tr>
                        <tr>
                            <td><input type="text" id="SignupUsername" placeholder="Username" name="username" onblur="warnUsername()" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td id="ErrUsername">Please enter a valid username</td>
                        </tr>
                        <tr>
                            <td><input type="password" placeholder="Password" onblur="warnPassword()" id="SignupPassword" name="password" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td id="ErrPassword">Password must be between 8 and 16 characters in length</td>
                        </tr>
                        <tr>
                            <td><input type="password" placeholder="Confirm Password" onblur="warnConfirm()" id="Password2" name="password" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td id="ErrConfirm">Does not match password</td>
                        </tr>
                        <tr class="submitButton">
                            <td><input id="SignupButton" name="submit" value="Register" type="submit" class="btn btn-info"/></td>
                        </tr>
                        <tr>
                            <td class="spacingRow">Just here for spacing</td>
                        </tr>
                        <tr>
                            <td><input type="button" value="Sign-In" onmousedown="LoginShow()" id="SignInButton" class="btn btn-info"/></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

