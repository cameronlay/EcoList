<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eco List - Site Map</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Cameron Lay">
		<link rel="shortcut icon" href="/LOGO/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/LOGO/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="/css/Burgers.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="/javascript/hamburger.js"></script>
		<script src="/javascript/functionHiding.js" id="SelfDestruct"></script>
    </head>
	<body onload="setBurger(true);hide_function()">
		<div id="GUI">
			<?php include('burgerMenuGUI.html');?>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-med-3">
					<h1>Site Map</h1>
				</div>
			</div>
			<div id="SiteMap">
				<div class="row" >
					<div class="col-med-4"></div>
					<div class="siteMapBlock col-med-3">
						<h2><a href="#">Home</a></h2>
						<ul>
							<li><a href="#">About Project</a></li>
							<li class="alt"><a href="#">Why it is Important</a></li>
							<li><a href="#">About Us</a></li>
							<li class="alt"><a href="#">Affiliated Apps</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-med-4"></div>
					<div class="siteMapBlock col-med-3">
						<h2><a href="#">Shopping List</a></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-med-4"></div>
					<div class="siteMapBlock col-med-3">
						<h2><a href="#">Meal Plans</a></h2>
						<ul>
							<li><a href="#">Clasic</a></li>
							<li class="alt"><a href="#">Vegetarian</a></li>
							<li><a href="#">Keto</a></li>
							<li class="alt"><a href="#">Paleo</a></li>
							<li><a href="#">Protein Rich</a></li>
							<li class="alt"><a href="#">Cultural</a></li>
							<li><a href="#">Create your Own</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
			
					
				