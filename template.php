<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8"/>
        <title>template</title>
        <link rel="stylesheet" href="index.css"/>
		<link rel="stylesheet" href="Burgers.css"/>
        <script src="index.js"></script>
        <script src="hamburger.js"></script>
		<script src="functionHiding.js" id="SelfDestruct"></script>
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
			<?php include('burgerMenuGUI.html');?>
        </div>
        <div class="wrapper">
            <div id="Top">
                <div class="box" draggable="false">
                    <h1 id="Title">EcoList</h1>
                    <table>
                        <tr>
                            <td>
                                <div class="icon">
                                    <img height="300" width="300" src="images/shoppingcart.png"draggable="false"/>
                                    <span>Shopping Cart</span>
                                </div>
                            </td>
                            <td>
                                <div class="icon">
                                    <img height="300" width="300" src="images/calandar.png"draggable="false"/>
                                    <span>Planner</span>
                                </div>
                            </td>
                            <td>
                                <div class="icon">
                                    <img height="300" width="300" src="images/cutlery.png"draggable="false"/>
                                    <span>Recipes</span>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        <div class="below" style="background-color: black">
            <section>
                <div class="descriptions">
                <h2>About Title</h2>
                    <p>
                        Lorem ipsum dolor sit amet, a egestas nonummy congue. In magnis nam nunc purus eget ridiculus. Fusce nibh laoreet interdum posuere elit urna, tellus vestibulum lobortis nulla ligula, vulputate eu varius urna dui sem. Consectetuer a lorem faucibus tortor donec id, mattis sem enim urna et, pellentesque vitae eu lobortis urna molestie maecenas, mi duis euismod molestie quis sagittis interdum, nec neque. Morbi orci mauris, a erat et praesent tellus, ac wisi at ut scelerisque aptent, nunc justo et dis rerum et. Amet aliquam vitae mauris vestibulum eu, id scelerisque, nulla elit urna a nec risus pulvinar. Ridiculus leo velit elementum, id neque habitant ac, odio suspendisse arcu turpis libero, leo non purus ipsum, per at per aliquam.
    Egestas lacus arcu gravida, dui viverra sit tincidunt nisl in libero. Eros dapibus voluptate nascetur, pellentesque quisque, diam et phasellus, neque aliquet nibh faucibus nulla accumsan donec, nec eleifend id. Placerat diam aliquet in, tortor ullamco justo et, vitae odio mi integer pellentesque lobortis vel, turpis imperdiet dui tellus lectus ut. Praesent placerat venenatis id, sit commodo felis faucibus molestie conubia, dictumst in. Nunc in amet elementum. Massa tempus nam tristique amet elementum in, tristique at vivamus pellentesque. Amet blandit sit magna, erat laoreet, at varius sodales ligula.
                    </p>
                </div>
            </section>
            <section>
                <div class="descriptions">
                <h2>Our Apps</h2>
                    <p>
                        Lorem ipsum dolor sit amet, a egestas nonummy congue. In magnis nam nunc purus eget ridiculus. Fusce nibh laoreet interdum posuere elit urna, tellus vestibulum lobortis nulla ligula, vulputate eu varius urna dui sem. Consectetuer a lorem faucibus tortor donec id, mattis sem enim urna et, pellentesque vitae eu lobortis urna molestie maecenas, mi duis euismod molestie quis sagittis interdum, nec neque. Morbi orci mauris, a erat et praesent tellus, ac wisi at ut scelerisque aptent, nunc justo et dis rerum et. Amet aliquam vitae mauris vestibulum eu, id scelerisque, nulla elit urna a nec risus pulvinar. Ridiculus leo velit elementum, id neque habitant ac, odio suspendisse arcu turpis libero, leo non purus ipsum, per at per aliquam.
    Egestas lacus arcu gravida, dui viverra sit tincidunt nisl in libero. Eros dapibus voluptate nascetur, pellentesque quisque, diam et phasellus, neque aliquet nibh faucibus nulla accumsan donec, nec eleifend id. Placerat diam aliquet in, tortor ullamco justo et, vitae odio mi integer pellentesque lobortis vel, turpis imperdiet dui tellus lectus ut. Praesent placerat venenatis id, sit commodo felis faucibus molestie conubia, dictumst in. Nunc in amet elementum. Massa tempus nam tristique amet elementum in, tristique at vivamus pellentesque. Amet blandit sit magna, erat laoreet, at varius sodales ligula.
                    </p>
                </div>
            </section>
            </section>
            <section>
                <div class="descriptions">
                <h2>Topic3</h2>
                    <p>
                        Lorem ipsum dolor sit amet, a egestas nonummy congue. In magnis nam nunc purus eget ridiculus. Fusce nibh laoreet interdum posuere elit urna, tellus vestibulum lobortis nulla ligula, vulputate eu varius urna dui sem. Consectetuer a lorem faucibus tortor donec id, mattis sem enim urna et, pellentesque vitae eu lobortis urna molestie maecenas, mi duis euismod molestie quis sagittis interdum, nec neque. Morbi orci mauris, a erat et praesent tellus, ac wisi at ut scelerisque aptent, nunc justo et dis rerum et. Amet aliquam vitae mauris vestibulum eu, id scelerisque, nulla elit urna a nec risus pulvinar. Ridiculus leo velit elementum, id neque habitant ac, odio suspendisse arcu turpis libero, leo non purus ipsum, per at per aliquam.
    Egestas lacus arcu gravida, dui viverra sit tincidunt nisl in libero. Eros dapibus voluptate nascetur, pellentesque quisque, diam et phasellus, neque aliquet nibh faucibus nulla accumsan donec, nec eleifend id. Placerat diam aliquet in, tortor ullamco justo et, vitae odio mi integer pellentesque lobortis vel, turpis imperdiet dui tellus lectus ut. Praesent placerat venenatis id, sit commodo felis faucibus molestie conubia, dictumst in. Nunc in amet elementum. Massa tempus nam tristique amet elementum in, tristique at vivamus pellentesque. Amet blandit sit magna, erat laoreet, at varius sodales ligula.
                    </p>
                </div>
            </section>
            <section>
                <div class="descriptions">
                <h2>Other Topics here(template)</h2>
                    <p>
                        Lorem ipsum dolor sit amet, a egestas nonummy congue. In magnis nam nunc purus eget ridiculus. Fusce nibh laoreet interdum posuere elit urna, tellus vestibulum lobortis nulla ligula, vulputate eu varius urna dui sem. Consectetuer a lorem faucibus tortor donec id, mattis sem enim urna et, pellentesque vitae eu lobortis urna molestie maecenas, mi duis euismod molestie quis sagittis interdum, nec neque. Morbi orci mauris, a erat et praesent tellus, ac wisi at ut scelerisque aptent, nunc justo et dis rerum et. Amet aliquam vitae mauris vestibulum eu, id scelerisque, nulla elit urna a nec risus pulvinar. Ridiculus leo velit elementum, id neque habitant ac, odio suspendisse arcu turpis libero, leo non purus ipsum, per at per aliquam.
    Egestas lacus arcu gravida, dui viverra sit tincidunt nisl in libero. Eros dapibus voluptate nascetur, pellentesque quisque, diam et phasellus, neque aliquet nibh faucibus nulla accumsan donec, nec eleifend id. Placerat diam aliquet in, tortor ullamco justo et, vitae odio mi integer pellentesque lobortis vel, turpis imperdiet dui tellus lectus ut. Praesent placerat venenatis id, sit commodo felis faucibus molestie conubia, dictumst in. Nunc in amet elementum. Massa tempus nam tristique amet elementum in, tristique at vivamus pellentesque. Amet blandit sit magna, erat laoreet, at varius sodales ligula.
                    </p>
                </div>
            </section>
        </div>
        <div class="home-footer">
            Footer content &copy;
        </div>
    </body>
</html>