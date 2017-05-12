<!DOCTYPE html>
<html>
    <head>
        <title>Donation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="/footer.css"/>
        <link rel="stylesheet" href="/navButton.css"/>
        <link rel="stylesheet" href="/navMenu.css">
        <script src="/navScript.js"></script>
        <link rel="stylesheet" href="/fonts/font.css">
        <script src="/functionHiding.js" id="SelfDestruct"></script>
    </head>
    
    <body>

    <div id="GUI">
        <?php include('../navMenu.html');?>
        <?php include('../navButton.html');?>
    </div>
        
    
        <header>
                <h1>Donate Today</h1>
        </header>
        
        <main>
        <div class="row">
            <div class="col-sm-16">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae lobortis est. Sed mattis pretium nibh, quis sodales eros elementum ornare. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum elit urna, ornare vel aliquet eget, laoreet non lectus. Pellentesque vulputate ultrices leo eu pharetra. Duis rhoncus arcu enim, et ornare ipsum aliquam id. Aliquam ante magna, pretium in ante blandit, vehicula porttitor felis. Mauris a libero mollis, luctus augue non, tempor turpis. Fusce eget hendrerit leo, vel semper erat. Fusce convallis finibus velit non sollicitudin.
            </div>
        </div>
                <div class="row">     
                    <div class="col-sm-4" id="sideList">
                        <p onmouseover="bounceMarker('m')" onmouseout="stopBounce()" class="well well-sm" id="1"><b>Surrey Food bank society</b><br>10732 City Pkwy<br>Surrey, BC V3T 4C7</p>
                        <p onmouseover="bounceMarker('m1')" onmouseout="stopBounce()" class="well well-sm" ><b>Covenant House</b><br>575 Drake St<br>Vancouver, BC V6B 4K8</p>
                        <p onmouseover="bounceMarker('m2')" onmouseout="stopBounce()" class="well well-sm" ><b>Langley Food Bank</b><br>5768 203 St<br>Langley, BC V3A 1W3</p>
                        <p onmouseover="bounceMarker('m3')" onmouseout="stopBounce()" class="well well-sm" ><b>Quest Food Exchange</b><br>7753 Sixth St<br>New Westminster, BC V3L 3C8</p>
                        <p onmouseover="bounceMarker('m4')" onmouseout="stopBounce()" class="well well-sm" ><b>Quest Outreach Society</b><br>346 E Hastings St<br>Vancouver, BC V6A 1P4</p>
                        <p onmouseover="bounceMarker('m5')" onmouseout="stopBounce()" class="well well-sm" ><b>Richmond Food Bank Society</b><br>5800 Cedarbridge Way #100<br>Richmond, BC V6X 2A7</p>
                        <p onmouseover="bounceMarker('m')" onmouseout="stopBounce()" class="well well-sm" ><b>Surrey Food bank society</b><br>10732 City Pkwy<br>Surrey, BC V3T 4C7</p>
                    </div>
                    <div class="col-sm-8" id="googleMap">
                        <div id="map" style="height:400px;"></div>
                        <script src="script.js"></script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1ypP9TWn_8TSLnbX3PyCCyE9jc_eFS7A&callback=myMap"></script>
                    </div>
                </div>
                </main>
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