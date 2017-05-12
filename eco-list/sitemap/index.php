<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Eco List - Site Map</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Cameron Lay">
		<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="../navMenu.css"/>
        <link rel="stylesheet" href="../navButton.css"/>
        <link rel="stylesheet" href="../fonts/font.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="../navScript.js"></script>
		<script src="../functionHiding.js" id="SelfDestruct"></script>
    </head>
	<body onload="setBurger(true);hide_function()">
    <div id="GUI">
        <?php include('../navMenu.html');?>
        <?php include('../navButton.html');?>
    </div>
		<div class="container">
			<div class="row">
                <div class="col-md-1"></div>
				<div class="col-md-3">
					<h1>Site Map</h1>
				</div>
			</div>
			<div id="SiteMap">
				<div class="row" >
                    <div class="col-md-1"></div>
					<div class="siteMapBlock col-md-3">
                        <h2><a href="../users/index.php">Login/Sign-Up</a></h2>
						<h2><a href="../index.php">Home</a></h2>
						<ul>
							<li><a href="../index.php#OurPurpose">Our Purpose</a></li>
							<li class="alt"><a href="../index.php#OurApps">Our Apps</a></li>
							<li><a href="../index.php#AboutUs">About us</a></li>
							<li class="alt"><a href="../index.php#AboutProject">About the Project</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
                    <div class="col-md-1"></div>
					<div class="siteMapBlock col-md-3">
						<h2><a href="../ecolist/index.php">Shopping List</a></h2>
					</div>
				</div>
				<div class="row">
                    <div class="col-md-1"></div>
					<div class="siteMapBlock col-md-3">
						<h2><a href="../ecoeats/index.php">Meal Plans</a></h2>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="siteMapBlock col-md-3">
                        <h2><a href="../donation/index.php">Donation</a></h2>
                    </div>
                </div>
			</div>
		</div>
	</body>
</html>
			
					
				