<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<title>Apps Home</title>
		<link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="../footer.css"/>
        <link rel="stylesheet" href="../navButton.css"/>
        <link rel="stylesheet" href="../navMenu.css">
        <script src="navScript.js"></script>
        <link rel="stylesheet" href="../fonts/font.css">
        <script src="../functionHiding.js" id="SelfDestruct"></script>
	</head>
	<body>
		<div id="GUI">
            <?php
                include('../navButton.html');
            	include('../navMenu.html');
            ?>
        </div>
		<div class="wrapper">
			<div id="AppsHomeHeader">
				<img src="../LOGO/Logo2.png" alt="EcoList"></img>
			</div>
            
			<!--our app start-->
			<div class="appsContent">
			<h2>Our Apps</h2>
			<!-- single app-->
				<div class="app">
					<div class="content">
						<table>
							<tr>
                                <td><img src="../images/cutlery1.png" alt="appicon" width=500 height=500/></td>
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
                                <td><img src="../images/calandar1.png" alt="appicon" width=500 height=500/></td>
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
                                <td><img src="../images/location1.png" alt="appicon" width=500 height=500/></td>
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
							<td><img src="..images/FreshnessLogo.png" alt="appicon" width=500 height=500/></td>
							<td><h2>Freshness</h2><p>
							If you have any excess ingredients you can head over to our friends at Take 2. Their app allows you to input two ingredients and they will try to give you recipe recommendations that incorporates both of those ingredients.
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
							<td><img src="images/Take2Logo.png" alt="appicon" width=500 height=500/></td>
							<td><h2>Take2</h2><p>
							If you have any excess ingredients you can head over to our friends at Take 2. Their app allows you to input two ingredients and they will try to give you recipe recommendations that incorporates both of those ingredients.
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
							<td><img src="images/RefrigdateLogo.png" alt="appicon" width=500 height=500/></td>
							<td><h2>Refrigdate</h2><p>
							If you are worried about keeping track of your leftovers and how old they may be we highly recommend checking out our friends at Refrigedate. Their app tracks how long your it has been since you stored your leftovers and lets you assign ownership to your food if you find your roommates are often eating your leftovers!
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
		<?php
			include('../footer.html');
		?>
	</body>
</html>