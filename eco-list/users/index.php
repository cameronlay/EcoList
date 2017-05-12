<!DOCTYPE html>
<html lang="en">
<head>
    <title>EcoList - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Cameron Lay">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/navMenu.css"/>
    <link rel="stylesheet" href="/navButton.css"/>
    <link rel="stylesheet" href="/footer.css"/>
    <link rel="stylesheet" href="/fonts/font.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/navScript.js"></script>
    <script src="/functionHiding.js" id="SelfDestruct"></script>
</head>
<body onload="setBurger(true);hide_function()">
<main>
<div class="col-md-12">
    <div id="GUI">
        <?php include('../navMenu.html');?>
        <?php include('../navButton.html');?>
    </div>
    <div class="container panel panel-default">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="LoginLogo">
                <a href="#"><img src ="../images/realLogo.png" alt="Logo"/></a>
            </div>
        </div>
        <div class="row" id="FormContent">
            <div class="col-md-2"></div>
            <div class="col-md-4 toggleForm" id="LoginLeft">
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
                            <td><input type="button" value="Sign-Up" onclick="SignUpShow()" id="RegisterButton" class="btn btn-info"/></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="col-md-5 toggleForm"  id="SignupRight">
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
                            <td><input type="button" value="Sign-In" onclick="LoginShow()" id="SignInButton" class="btn btn-info"/></td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
</main>
<div class="home-footer mobileContentless">
    <div class="footerconstraint">
        <div class="bottomleftcolumn">
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="/index.php#OurPurpose">Our Purpose</a></li>
                <li><a href="/index.php#OurApps">About our Apps</a></li>

            </ul>
        </div>
        <div class="middleleftcolumn">
            <ul>
                <li><a href="/ecolist/index.php">Shopping List</a></li>
                <li><a href="/ecoeats/index.php">Meal Planner</a></li>
                <li><a href="/donation/index.php">Donate Food</a></li>
            </ul>
        </div>
        <div class="middlerightcolumn">
            <ul>
                <li><a href="/services/index.php">Affiliated Apps</a></li>
                <li><a href="/index.php#AboutUs">About Us</a></li>
                <li><a href="/index.php#AboutProject">About the Project</a></li>
            </ul>
        </div>
        <div class="bottomrightcolumn">
            <ul>
                <li><a href="/users/index.php">Login</a></li>
                <li><a href="/sitemap/index.php">Sitemap</a></li>
            </ul>
        </div>
        <p>&copy; Copyright 2017 | EcoList, All Rights Reserved </p>
    </div>
</div>
