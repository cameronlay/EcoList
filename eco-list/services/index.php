<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Apps Home</title>
		<link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="../footer.css"/>
        <link rel="stylesheet" href="../navButton.css"/>
        <link rel="stylesheet" href="../navMenu.css">
        <link rel="stylesheet" href="../fonts/font.css">
        <script src="/navScript.js"></script>
        <script src="/functionHiding.js" id="SelfDestruct"></script>
	</head>
	<body>
    <div id="GUI">
        <?php include('../navMenu.html');?>
        <?php include('../navButton.html');?>
    </div>
		<div class="wrapper">
			<div id="AppsHomeHeader">
				<img src="/images/realLogo.png" alt="EcoList"></img>
			</div>
            
			<!--our app start-->
			<div class="appsContent">
			<h2>Our Apps</h2>
			<!-- single app-->
				<div class="app">
					<div class="content">
						<table>
							<tr>
                                <td><img src="/images/cutlery1.png" alt="appicon" width=500 height=500/></td>
                                <td><h2>EcoList</h2>
                                    <p>EcoList is a shopping list which enables you to add items and quantities to your list and check them off as you go.
                                        When an item has been checked it moves down to a separate list where you can double click or swipe to delete it.</p>
                                </td>
							</tr>
						</table>
					</div>
				</div>
			<!--end of single app -->
			<!-- single app-->
				<div class="app">
					<div class="content">
						<table>
							<tr>
                                <td><img src="/images/calandar1.png" alt="appicon" width=500 height=500/></td>
                                <td><h2>EcoEats</h2>
                                    <p>EcoEats is a meal planner that features seven different diets that you can choose from each with many simple yet
                                        delicious recipes to choose from. The ingredients on that page can be added to your shopping list with just a couple clicks.
                                        You are also able to make your own meal plans and save them on our site.</p>
                                </td>
							</tr>
						</table>
					</div>
				</div>
			<!--end of single app -->
			<!-- single app-->
				<div class="app" id="w">
					<div class="content">
						<table>
							<tr>
                                <td><img src="/images/location1.png" alt="appicon" width=500 height=500/></td>
                                <td><h2>Donation</h2>
                                    <p>We also feature a donations page where you can find all the places in the Vancouver area where you can go to donate food.</p>
                                </td>
							</tr>
						</table>
					</div>
				</div>
			<!--end of single app -->
			</div>
			<!--end of our apps-->
            
			<!--start of our friends-->
			<div class="appsContent">
			<h2>Our Friends</h2>
			<!-- single app-->
				<div class="app">
					<div class="content">
						<table>
							<tr>
							<td><img href="https://freshness.000webhostapp.com/" src="/images/FreshnessLogo.png" alt="appicon" width=500 height=500/></td>
							<td><h2 href="https://freshness.000webhostapp.com/">Freshness</h2><p>
							If you have any excess ingredients you can head over to our friends at Take 2. Their app allows you to input two ingredients
                                    and they will try to give you recipe recommendations that incorporates both of those ingredients.
							</p>
							</td>
							</tr>
						</table>
					</div>
				</div>
			<!--end of single app -->
			
			<!-- single app-->
				<div class="app">
					<div class="content">
						<table>
							<tr>
							<td><img href="http://take2foods.com" src="/images/Take2Logo.png" alt="appicon" width=500 height=500/></td>
							<td><h2 href="http://take2foods.com">Take2</h2><p>
							If you have any excess ingredients you can head over to our friends at Take 2. Their app allows you to input two ingredients
                                    and they will try to give you recipe recommendations that incorporates both of those ingredients.
							</p>
							</td>
							</tr>
						</table>
					</div>
				</div>
			<!--end of single app -->
            <!-- single app-->
				<div class="app">
					<div class="content">
						<table>
							<tr>
							<td><img href="http://refrigedate.me/" src="/images/RefrigdateLogo.png" alt="appicon" width=500 height=500/></td>
							<td><h2 href="http://refrigedate.me/">Refrigdate</h2><p>
							If you are worried about keeping track of your leftovers and how old they may be we highly recommend checking out our friends at
                                    Refrigedate. Their app tracks how long your it has been since you stored your leftovers and lets you assign ownership to
                                    your food if you find your roommates are often eating your leftovers!
							</p>
							</td>
							</tr>
						</table>
					</div>
				</div>
			<!--end of single app -->
			</div>
			<!--end of our friends-->
		</div>
    <!--<div class="home-footer mobileContentless">
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
    </div>-->
	</body>
</html>