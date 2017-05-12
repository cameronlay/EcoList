<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>template</title>
        <link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="navButton.css"/>
        <link rel="stylesheet" href="footer.css"/>
		<link rel="stylesheet" href="navMenu.css"/>
        <link rel="stylesheet" href="fonts/font.css">
        <script src="script.js"></script>
        <script src="navScript.js"></script>
		<script src="functionHiding.js" id="SelfDestruct"></script>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body onload="setHeight(true);setBurger(true);hide_function()">
        <div id="GUI">
            <div class="miniNav">
                <div class="miniNav-box">
                    <h1>EcoList</h1>
                </div>
                <div id="Dropdown" class="chevronHolder dropdown">
                    <div class="chevron down"></div>
                    <div id="AppDrawer">Our Apps</div>
                </div>
            </div>
			<?php include('/navButton.html');?>
			<?php include('/navMenu.html');?>
        </div>
        <div class="wrapper">
            <div id="Top">
                <div class="box" draggable="false">
                    <h1 id="Title">EcoList</h1>
                    <table>
                        <tr>
                            <td>
                                <div class="icon">
                                    <img height="300" width="300" src="images/shoppingcart1.png"draggable="false"/>
                                    <span>Shopping Cart</span>
                                </div>
                            </td>
                            <td>
                                <div class="icon">
                                    <img height="300" width="300" src="images/cutlery1.png"draggable="false"/>
                                    <span>Recipes</span>
                                </div>
                            </td>
                            <td>
                                <div class="icon">
                                    <img height="300" width="300" src="images/location1.png"draggable="false"/>
                                    <span>Donation</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        <div class="below mobileContentless" style="background-color: black">
            <section>
                <div class="descriptions" id="OurPurpose">
                <h2>Our Purpose</h2>
                    <p>The purpose of this project to us was to help reduce food waste through planning and organization.
                        We felt that this was a reachable goal through meal planning and shopping list organization.</p>
                </div>
            </section>
            <section>
                <div class="descriptions" id="OurApps">
                <h2>Our Apps</h2>
                    <p>Our site features two main apps; EcoEats, a meal planner where you are able to choose recipes from a few premade diet plans or add
                        your own recipes to our site. From each recipe you can add the ingredients directly to our second app EcoList, which is a simple
                        shopping list app that allows you to add items and quantity. Once an item is on your list you will be able to check it off, delete
                        items or edit existing items. When an item has been checked it will move to a different list at the bottom of the page that contains
                        all the checked items.</p>
                </div>
            </section>
            <section>
                <div class="descriptions" id="AboutUs">
                <h2>About Us</h2>
                    <p>We are five level one  Computer Systems Technology students studying at BCIT. For the majority of us this is our first time
                        working on a project of this scale with minimal amounts of direction. Our group consists of Cameron Lay, Sunguk ‘Edmund’ Ham,
                        Jason Huang, Ian Lo, and Karanveer Singh Khanna. If you have any questions or comments feel free to send us an email at
                        ecolist2017@gmail.com</p>
                </div>
            </section>
            <section>
                <div class="descriptions" id="AboutProject">
                <h2>About the Project</h2>
                    <p>Over the course of five weeks we were tasked with building a web app to help reduce or inform people about food waste and
                        Metro Vancouver’s goal to reach zero food waste. For our group we felt that the best option to reach our target audience
                        of students and parents was through proper planning and organization.</p>
                </div>
            </section>
        </div>
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
                            <li><a href="/list/index.php">Shopping List</a></li>
                            <li><a href="/planner/index.php">Meal Planner</a></li>
                            <li><a href="/donations/index.php">Donate Food</a></li>
                        </ul>
                    </div>
                    <div class="middlerightcolumn">
                        <ul>
                            <li><a href="/appshome/index.php">Affiliated Apps</a></li>
                            <li><a href="/index.php#AboutUs">About Us</a></li>
                            <li><a href="/index.php#AboutProject">About the Project</a></li>
                        </ul>
                    </div>
                    <div class="bottomrightcolumn">
                        <ul>
                            <li><a href="/login/index.php">Login</a></li>
                            <li><a href="/sitemap/index.php">Sitemap</a></li>
                        </ul>
                    </div>
                    <p>&copy; Copyright 2017 | EcoList, All Rights Reserved </p>
                </div>
            </div>
    </body>
</html>