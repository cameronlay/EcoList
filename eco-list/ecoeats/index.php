<!DOCTYPE html>
<html lang="en">
<!-- 
    ====================================================
    PLEASE READ!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    THINGS YOU NEED TO FIX:
    1. LISTS FOR EACH DIET TO RECIPE NAME
    2. RECIPE CONTENT
    3. INGREDIENTS ID SHOULD BE #DIET#. FIRST NUMBER REPRESENTS
    THE ORDER OF RECIPES. SECOND NUMBER REPRESENTS THE ORDER OF
    INGREDIENTS.
    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    ====================================================


     data-toggle="tooltip" title="Optional"
-->
    <head>
        <title>EcoList - EcoEats</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Sunguk (Edmund) Ham">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <!-- OUTSOURCING -->
        <link rel="stylesheet" href="../footer.css"/>
        <link rel="stylesheet" href="../navButton.css"/>
        <link rel="stylesheet" href="../navMenu.css">
        <script src="../navScript.js"></script>
        <link rel="stylesheet" href="../fonts/font.css">
        <script src="../functionHiding.js" id="SelfDestruct"></script>
        <!-- JQUERY INSTEAD OF AJAX -->
        <script>
            $(window).on("load", function() {
                $("#backgroundRecipe").fadeOut("fast");
                $(".wholeBody").fadeIn("slow");
            })
            // INFO OF INGREDIENTS
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip(); 
            })
        </script>
    </head>
    <body onload="widthLessThan768();setBurger(true);">
    <div id="GUI">
        <?php include('../navMenu.html');?>
        <?php include('../navButton.html');?>
    </div>
    <div id="backgroundRecipe">
        <div id="loader"></div>
        <span>Loading Recipes...<br>Some Information</span>
    </div>
    <section class="wholeBody">
        <div class="col-md-2">
        </div>
        <main class="col-md-8">
            <div class="row">
                <div>
                    <h1>EcoEats</h1>
                </div>
            </div>
            <!-- TABS -->
            <div class="panel panel-default">
            <ul class="nav nav-tabs" id="navTabs">
                <li id="classic" class="active" onclick="TabClicked('classic', 'classicList1', 'classicList', 'classicListContent', 'classicListContent1')"><a href="javascript:void(0);">Classic</a></li>
                <li id="vegetarian" onclick="TabClicked('vegetarian', 'vegetarianList1', 'vegetarianList', 'vegetarianListContent', 'vegetarianListContent1')"><a href="javascript:void(0);">Vegetarian</a></li>
                <li id="keto" onclick="TabClicked('keto', 'ketoList1', 'ketoList', 'ketoListContent', 'ketoListContent1')"><a href="javascript:void(0);">Keto</a></li>
                <li id="paleo" onclick="TabClicked('paleo', 'paleoList1', 'paleoList', 'paleoListContent', 'paleoListContent1')"><a href="javascript:void(0);">Paleo</a></li>
                <li id="proteinRich" onclick="TabClicked('proteinRich', 'proteinList1', 'proteinList', 'proteinListContent', 'proteinListContent1')"><a href="javascript:void(0);">Protein Rich</a></li>
                <li id="cultural" onclick="TabClicked('cultural', 'culturalList1', 'culturalList', 'culturalListContent', 'culturalListContent1')"><a href="javascript:void(0);">Cultural</a></li>
                <li id="user" onclick="TabClicked('user', 'userList1', 'userList', 'userListContent', 'userListContent1')"><a href="javascript:void(0);">Create your Own</a></li>
            </ul>
            <!--Classic List-->
            <div class="col-md-3 displayNone displayBlock" id="classicList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="classicList1" class="active" onclick="classicPillsClicked('classicList1', 'classicListContent1')"><a href="javascript:void(0);">Steak</a></li>
                    <li id="classicList2" onclick="classicPillsClicked('classicList2', 'classicListContent2')"><a href="javascript:void(0);">Curry Korokke</a></li>
                    <li id="classicList3" onclick="classicPillsClicked('classicList3', 'classicListContent3')"><a href="javascript:void(0);">Gnocchi with Tomato</a></li>
                    <li id="classicList4" onclick="classicPillsClicked('classicList4', 'classicListContent4')"><a href="javascript:void(0);">Chicken Tetrazzini</a></li>
                    <li id="classicList5" onclick="classicPillsClicked('classicList5', 'classicListContent5')"><a href="javascript:void(0);">Southern Fried Chicken</a></li>
                    <li id="classicList6" onclick="classicPillsClicked('classicList6', 'classicListContent6')"><a href="javascript:void(0);">ClassicLIST6</a></li>
                    <li id="classicList7" onclick="classicPillsClicked('classicList7', 'classicListContent7')"><a href="javascript:void(0);">ClassicLIST7</a></li>
                </ul>
            </div>
            <!--Vegetarian List-->
            <div class="col-md-3 displayNone" id="vegetarianList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="vegetarianList1" class="active" onclick="vegetarianPillsClicked('vegetarianList1', 'vegetarianListContent1')"><a href="javascript:void(0);">Mung Sprout Salad</a></li>
                    <li id="vegetarianList2" onclick="vegetarianPillsClicked('vegetarianList2', 'vegetarianListContent2')"><a href="javascript:void(0);">Egg curry</a></li>
                    <li id="vegetarianList3" onclick="vegetarianPillsClicked('vegetarianList3', 'vegetarianListContent3')"><a href="javascript:void(0);">Vegetarian Quiche</a></li>
                    <li id="vegetarianList4" onclick="vegetarianPillsClicked('vegetarianList4', 'vegetarianListContent4')"><a href="javascript:void(0);">Spinach with Yoghurt</a></li>
                    <li id="vegetarianList5" onclick="vegetarianPillsClicked('vegetarianList5', 'vegetarianListContent5')"><a href="javascript:void(0);">Tomato Fettuccine</a></li>
                    <li id="vegetarianList6" onclick="vegetarianPillsClicked('vegetarianList6', 'vegetarianListContent6')"><a href="javascript:void(0);">Mushroom Soup</a></li>
                    <li id="vegetarianList7" onclick="vegetarianPillsClicked('vegetarianList7', 'vegetarianListContent7')"><a href="javascript:void(0);">Butternut Squash Porter Chilli</a></li>
                </ul>
            </div>
            <!--Keto List-->
            <div class="col-md-3 displayNone" id="ketoList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="ketoList1" class="active" onclick="ketoPillsClicked('ketoList1', 'ketoListContent1')"><a href="javascript:void(0);">Bacon Avocado Salad</a></li>
                    <li id="ketoList2" onclick="ketoPillsClicked('ketoList2', 'ketoListContent2')"><a href="javascript:void(0);">Baked Salmon</a></li>
                    <li id="ketoList3" onclick="ketoPillsClicked('ketoList3', 'ketoListContent3')"><a href="javascript:void(0);">Scrambled Eggs</a></li>
                    <li id="ketoList4" onclick="ketoPillsClicked('ketoList4', 'ketoListContent4')"><a href="javascript:void(0);">Chicken with Spinach Pizza</a></li>
                    <li id="ketoList5" onclick="ketoPillsClicked('ketoList5', 'ketoListContent5')"><a href="javascript:void(0);">Cinnamon Butter Bites</a></li>
                    <li id="ketoList6" onclick="ketoPillsClicked('ketoList6', 'ketoListContent6')"><a href="javascript:void(0);">Grilled Cheese Sandwiches</a></li>
                    <li id="ketoList7" onclick="ketoPillsClicked('ketoList7', 'ketoListContent7')"><a href="javascript:void(0);">KetoLIST7</a></li>
                </ul>
            </div>
            <!--Paleo List-->
            <div class="col-md-3 displayNone" id="paleoList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="paleoList1" class="active" onclick="paleoPillsClicked('paleoList1', 'paleoListContent1')"><a href="javascript:void(0);">Salmon with Vegetables</a></li>
                    <li id="paleoList2" onclick="paleoPillsClicked('paleoList2', 'paleoListContent2')"><a href="javascript:void(0);">Tomato Basil Frittata</a></li>
                    <li id="paleoList3" onclick="paleoPillsClicked('paleoList3', 'paleoListContent3')"><a href="javascript:void(0);">Crock Pot Chili</a></li>
                    <li id="paleoList4" onclick="paleoPillsClicked('paleoList4', 'paleoListContent4')"><a href="javascript:void(0);">Chipotle Chicken Wings</a></li>
                    <li id="paleoList5" onclick="paleoPillsClicked('paleoList5', 'paleoListContent5')"><a href="javascript:void(0);">Beets &amp; Berry Smoothie</a></li>
                    <li id="paleoList6" onclick="paleoPillsClicked('paleoList6', 'paleoListContent6')"><a href="javascript:void(0);">Chipotle Lime Salmon</a></li>
                    <li id="paleoList7" onclick="paleoPillsClicked('paleoList7', 'paleoListContent7')"><a href="javascript:void(0);">Baked chicken on Cauliflower</a></li>
                </ul>
            </div>
            <!--Protein Rich List-->
            <div class="col-md-3 displayNone" id="proteinList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="proteinList1" class="active" onclick="proteinPillsClicked('proteinList1', 'proteinListContent1')"><a href="javascript:void(0);">Mac and Cheese</a></li>
                    <li id="proteinList2" onclick="proteinPillsClicked('proteinList2', 'proteinListContent2')"><a href="javascript:void(0);">Braised Paprika Chicken</a></li>
                    <li id="proteinList3" onclick="proteinPillsClicked('proteinList3', 'proteinListContent3')"><a href="javascript:void(0);">Spiced Scrambled Eggs</a></li>
                    <li id="proteinList4" onclick="proteinPillsClicked('proteinList4', 'proteinListContent4')"><a href="javascript:void(0);">Fruit &amp; Nut Yogurt</a></li>
                    <li id="proteinList5" onclick="proteinPillsClicked('proteinList5', 'proteinListContent5')"><a href="javascript:void(0);">Corned Beef and Cabbage</a></li>
                    <li id="proteinList6" onclick="proteinPillsClicked('proteinList6', 'proteinListContent6')"><a href="javascript:void(0);">Griddled Chicken with Greek Salad</a></li>
                    <li id="proteinList7" onclick="proteinPillsClicked('proteinList7', 'proteinListContent7')"><a href="javascript:void(0);">Thai Salmon Kebabs &amp; Lime Dip</a></li>
                </ul>
            </div>
            <!-- Cultural List -->
            <div class="col-md-3 displayNone" id="culturalList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="culturalList1" class="active" onclick="culturalPillsClicked('culturalList1', 'culturalListContent1')"><a href="javascript:void(0);">Chicken Tikka - Punjabi</a></li>
                    <li id="culturalList2" onclick="culturalPillsClicked('culturalList2', 'culturalListContent2')"><a href="javascript:void(0);">Butter Chicken - Punjabi</a></li>
                    <li id="culturalList3" onclick="culturalPillsClicked('culturalList3', 'culturalListContent3')"><a href="javascript:void(0);">Yang Chow - Hong Kong</a></li>
                    <li id="culturalList4" onclick="culturalPillsClicked('culturalList4', 'culturalListContent4')"><a href="javascript:void(0);">Chow Mien - Hong Kong</a></li>
                    <li id="culturalList5" onclick="culturalPillsClicked('culturalList5', 'culturalListContent5')"><a href="javascript:void(0);">Bannock - Inuvialuit</a></li>
                    <li id="culturalList6" onclick="culturalPillsClicked('culturalList6', 'culturalListContent6')"><a href="javascript:void(0);">Quaq - Inuvialuit</a></li>
                    <li id="culturalList7" onclick="culturalPillsClicked('culturalList7', 'culturalListContent7')"><a href="javascript:void(0);">Eggs with Tomatoes - China</a></li>
                    <li id="culturalList8" onclick="culturalPillsClicked('culturalList8', 'culturalListContent8')"><a href="javascript:void(0);">Yakisoba Chicken - Japan</a></li>
                    <li id="culturalList9" onclick="culturalPillsClicked('culturalList9', 'culturalListContent9')"><a href="javascript:void(0);">culturalLIST9</a></li>
                    <li id="culturalList10" onclick="culturalPillsClicked('culturalList10', 'culturalListContent10')"><a href="javascript:void(0);">culturalLIST10</a></li>
                </ul>
            </div>
            <!-- user List -->
            <!-- NEED TO FIX FOR USER INTERACTION -->
            <div class="col-md-3 displayNone" id="userList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="userList1" class="active" onclick="userPillsClicked('userList1', 'userListContent1')"><a href="javascript:void(0);">userLIST1</a></li>
                    <li id="userList9" onclick="userPillsClicked('userList9', 'userListContentCreate')"><a href="javascript:void(0);">Create</a></li>
                </ul>
            </div>
            <!-- 
            ===============================================
            Classic
            ===============================================
            -->
            <div id="classicListContent">
                <div class="row displayNone displayBlock" id="classicListContent1">
                    <div class="col-md-8 borderLeft borderLeft">
                        <h2>Steak</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Gordon Ramsay’s method for cooking a perfect, yet simple fillet that pairs well with many sides of your liking.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Prepare 1 fillet of steak at room temperature.</li>
                                <li class="">Heat frying pan to medium heat.</li>
                                <li class="">Add 15ml oil, whole garlic clove, and herb sprig.</li>
                                <li class="">Season both sides of fillet with salt and pepper.</li>
                                <li class="">Cook each side for 2-3 minutes.</li>
                                <li class="">Sear the rounded edges and add a knob of butter.</li>
                                <li class="">Allow the butter to foam and baste both sides of steak thoroughly.</li>
                                <li class="">Move steak to a plate and allow it to rest for at least 5 minutes.</li>
                                <li class="">Serve along with any sides of your liking.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="1classic1" class="ingredientCheckbox"><label for="1classic1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Fillet Steak</label><br>
                                        <input type="checkbox" id="1classic2" class="ingredientCheckbox"><label for="1classic2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="1classic3" class="ingredientCheckbox"><label for="1classic3" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Whole Garlic Clove</label><br>
                                        <input type="checkbox" id="1classic4" class="ingredientCheckbox"><label for="1classic4" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Herb Sprig</label><br>
                                        <input type="checkbox" id="1classic5" class="ingredientCheckbox"><label for="1classic5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="1classic6" class="ingredientCheckbox"><label for="1classic6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/classic1.jpg" alt="Steak">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>Curry Korokke</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">For a tasty dinner with plenty of crispy crunch, look no further than korokke. Based on French croquettes, korokke are patties of seasoned meats and/or starchy vegetables crumbed in panko breadcrumbs and deep fried a golden brown. This variety uses Japanese curry sauce to for a distinctly spicy, mouthwatering flavour. Enjoy for dinner or pack into a bento lunch.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Peel and chop the potato and onion.</li>
                                <li class="">Boil the potatoes until soft. Drain and let cool.</li>
                                <li class="">Saute the onions in butter until browned. Set aside and let cool.</li>
                                <li class="">Mash the potatoes, then mix in the onion, curry powder, salt and pepper.</li>
                                <li class="">Shape the potatoes into 6 to 8 patties.</li>
                                <li class="">Dip the patties in flour, egg, and panko.</li>
                                <li class="">Fry until golden.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="2classic1" class="ingredientCheckbox"><label for="2classic1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 Potatoes</label><br>
                                        <input type="checkbox" id="2classic2" class="ingredientCheckbox"><label for="2classic2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Oil for Frying</label><br>
                                        <input type="checkbox" id="2classic3" class="ingredientCheckbox"><label for="2classic3" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 Onion</label><br>
                                        <input type="checkbox" id="2classic4" class="ingredientCheckbox"><label for="2classic4" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Butter</label><br>
                                        <input type="checkbox" id="2classic5" class="ingredientCheckbox"><label for="2classic5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tsp Curry Powder</label><br>
                                        <input type="checkbox" id="2classic6" class="ingredientCheckbox"><label for="2classic6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 cup All-purpose Flour</label><br>
                                        <input type="checkbox" id="2classic7" class="ingredientCheckbox"><label for="2classic7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 Eggs</label><br>
                                        <input type="checkbox" id="2classic8" class="ingredientCheckbox"><label for="2classic8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 cup Panko</label><br>
                                        <input type="checkbox" id="2classic9" class="ingredientCheckbox"><label for="2classic9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="2classic10" class="ingredientCheckbox"><label for="2classic10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/classic2.jpg" alt="Curry Korokke">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>Gnocchi with Tomato</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Ready-made gnocchi in a spicy tomato sauce makes a change from pasta and is just as easy to prepare.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Cook the Gnocchi according to the packet instructions or until blanched, set aside.</li>
                                <li class="">For the arrabbiata sauce, heat the oil in a frying pan and gently fry the onion and garlic until soft. Add the chilli, vinegar and sugar and stir well.</li>
                                <li class="">Add the chopped tomatoes and simmer until the tomatoes break down and go mushy. Season with salt and pepper.</li>
                                <li class="">Put the gnocchi in a serving bowl and drizzle with oil. Season with salt and pepper and stir.</li>
                                <li class="">Pour the sauce over the gnocchi and serve.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="3classic1" class="ingredientCheckbox"><label for="3classic1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;7 oz Ready-made Gnocchi</label><br>
                                        <input type="checkbox" id="3classic2" class="ingredientCheckbox"><label for="3classic2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="3classic3" class="ingredientCheckbox"><label for="3classic3" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 Chopped Onion</label><br>
                                        <input type="checkbox" id="3classic4" class="ingredientCheckbox"><label for="3classic4" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 clove Chopped Garlic</label><br>
                                        <input type="checkbox" id="3classic5" class="ingredientCheckbox"><label for="3classic5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Chopped Green Chilli</label><br>
                                        <input type="checkbox" id="3classic6" class="ingredientCheckbox"><label for="3classic6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp White Wine Vinegar</label><br>
                                        <input type="checkbox" id="3classic7" class="ingredientCheckbox"><label for="3classic7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Caster Sugar</label><br>
                                        <input type="checkbox" id="3classic8" class="ingredientCheckbox"><label for="3classic8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp; 1 Chopped Tomatoes</label><br>
                                        <input type="checkbox" id="3classic9" class="ingredientCheckbox"><label for="3classic9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="3classic10" class="ingredientCheckbox"><label for="3classic10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/classic3.jpg" alt="Gnocchi with Tomato">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>Chicken Tetrazzini</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Tetrazzini is an American dish made with diced poultry or seafood and mushroom in a butter/cream and parmesan sauce flavored with wine or sherry. It is served hot over linguine, spaghetti, or some similarly thin pasta, garnished with parsley, and sometimes topped with almonds and/or Parmesan cheese.The chicken tetrazzini was made famous by chef Louis Paquet.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Heat oven to 350°F. Spray 13x9-inch (3-quart) glass baking dish with cooking spray.</li>
                                <li class="">Cook spaghetti as directed on package, omitting salt and oil, and using minimum cook time; drain.</li>
                                <li class="">Meanwhile, in 10-inch nonstick skillet, melt butter over medium-high heat. Cook mushrooms in butter 4 minutes, stirring occasionally, until tender.</li>
                                <li class="">In large bowl, mix cooked spaghetti, mushrooms, chicken, soup, sour cream and pepper. Pour mixture into baking dish. Sprinkle with cheese.</li>
                                <li class="">Bake uncovered 55 minutes or until bubbly. Let stand 5 minutes before serving. Sprinkle with parsley.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="4classic1" class="ingredientCheckbox"><label for="4classic1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;12 oz Spaghetti</label><br>
                                        <input type="checkbox" id="4classic2" class="ingredientCheckbox"><label for="4classic2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tbsp Butter</label><br>
                                        <input type="checkbox" id="4classic3" class="ingredientCheckbox"><label for="4classic3" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;8 oz sliced Mushrooms</label><br>
                                        <input type="checkbox" id="4classic4" class="ingredientCheckbox"><label for="4classic4" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 cups Chopped Chicken Breast</label><br>
                                        <input type="checkbox" id="4classic5" class="ingredientCheckbox"><label for="4classic5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 cans Mushroom Soup</label><br>
                                        <input type="checkbox" id="4classic6" class="ingredientCheckbox"><label for="4classic6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 cups Sour Cream</label><br>
                                        <input type="checkbox" id="4classic7" class="ingredientCheckbox"><label for="4classic7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/3 cup Parmesan Cheese</label><br>
                                        <input type="checkbox" id="4classic8" class="ingredientCheckbox"><label for="4classic8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp; Chopped Parsley</label><br>
                                        <input type="checkbox" id="4classic9" class="ingredientCheckbox"><label for="4classic9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/classic4.jpg" alt="Chicken Tetrazzini">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>Southern Fried Chicken</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Cindy Garricks’ recipe from Alabama combines simple ingredients yet a perfect and simple technique for making the crispiest southern fried chicken that anyone at home can make. You can also add garlic powder and cayenne to spice things up.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Make sure chicken is completely dry.</li>
                                <li class="">Roll chicken pieces in combined flour and seasoning.</li>
                                <li class="">Add 1/2 to 3/4 inch oil to a large, heavy skillet.</li>
                                <li class="">Heat to approximately 365 degrees F (185 degrees C).</li>
                                <li class="">Place chicken pieces in hot oil. Cover, and fry until golden, turning once, 15 to 20 minutes.</li>
                                <li class="">Drain on paper towels.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="5classic1" class="ingredientCheckbox"><label for="5classic1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Chicken</label><br>
                                        <input type="checkbox" id="5classic2" class="ingredientCheckbox"><label for="5classic2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 cup All-purpose Flour</label><br>
                                        <input type="checkbox" id="5classic3" class="ingredientCheckbox"><label for="5classic3" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Paprika</label><br>
                                        <input type="checkbox" id="5classic4" class="ingredientCheckbox"><label for="5classic4" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="5classic5" class="ingredientCheckbox"><label for="5classic5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/classic6.jpg" alt="Southern Fried Chicken">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>List 6</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">This is Classic Content</li>
                                <li class="">This is Classic Content</li>
                                <li class="">This is Classic Content</li>
                                <li class="">This is Classic Content</li>
                                <li class="">This is Classic Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstClassic6" class="ingredientCheckbox"><label for="firstClassic6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List6 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>List 7</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">This is Classic Content</li>
                                <li class="">This is Classic Content</li>
                                <li class="">This is Classic Content</li>
                                <li class="">This is Classic Content</li>
                                <li class="">This is Classic Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstClassic7" class="ingredientCheckbox"><label for="firstClassic7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List7 Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
            ===============================================
            Vegetarian
            ===============================================
            -->
            <div id="vegetarianListContent">
                <div class="row displayNone" id="vegetarianListContent1">
                    <div class="col-md-8 borderLeft">
                        <h2>Mung Sprout Salad</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Sprout Salad is a very easy as well as a very healthy salad recipe. This salad made from moong sprouts is specially good for people who does not have much time for cooking or who does not know much.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Rinse the sprouted mung beans in water.</li>
                                <li class="">You can either steam them or boil them till they are completely cooked.</li>
                                <li class="">Strain the cooked sprouts.</li>
                                <li class="">Mix all the ingredients except the salt and lemon juice in a bowl.</li>
                                <li class="">Season with salt and add a few drops of lemon juice. Garnish with lemon slices and coriander leaves.</li>
                                <li class="">Serve immediately.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="1Vegetarian1" class="ingredientCheckbox"><label for="1Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 cups Sprouted Mung Beans</label><br>
                                        <input type="checkbox" id="1Vegetarian2" class="ingredientCheckbox"><label for="1Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Finely Chopped Onion</label><br>
                                        <input type="checkbox" id="1Vegetarian3" class="ingredientCheckbox"><label for="1Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Finely Chopped Tomato</label><br>
                                        <input type="checkbox" id="1Vegetarian4" class="ingredientCheckbox"><label for="1Vegetarian4" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Finely Chopped Green Chilli</label><br>
                                        <input type="checkbox" id="1Vegetarian5" class="ingredientCheckbox"><label for="1Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Red Chilli Powder</label><br>
                                        <input type="checkbox" id="1Vegetarian6" class="ingredientCheckbox"><label for="1Vegetarian6" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Chaat Masala</label><br>
                                        <input type="checkbox" id="1Vegetarian7" class="ingredientCheckbox"><label for="1Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Lemon Juice</label><br>
                                        <input type="checkbox" id="1Vegetarian8" class="ingredientCheckbox"><label for="1Vegetarian8" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Boiled Potato</label><br>
                                        <input type="checkbox" id="1Vegetarian9" class="ingredientCheckbox"><label for="1Vegetarian9" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Boiled Sweet Potato</label><br>
                                        <input type="checkbox" id="1Vegetarian10" class="ingredientCheckbox"><label for="1Vegetarian10" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Coriander Leaves and Lemon Slices</label><br>
                                        <input type="checkbox" id="1Vegetarian11" class="ingredientCheckbox"><label for="1Vegetarian11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/vege1.jpg" alt="Mung Sprout Salad">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="vegetarianListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>Egg Curry</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">This egg curry is made by giving tempering and then adding ingredients like chopped onions and coconut paste and making a wonderful south indian egg curry that is perfect with rice or chapathi or paratha.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Heat oil in a non-stick pan, add onions and sauté till brown.</li>
                                <li class="">Add turmeric powder, red chilli powder, coriander powder and ginger-garlic paste and sauté for 1/2 minute.</li>
                                <li class="">Add tomato puree and salt and sauté till oil separates.</li>
                                <li class="">Add sufficient water and eggs and cover and cook for 10 minutes.</li>
                                <li class="">Serve hot garnished with coriander leaves.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="2Vegetarian1" class="ingredientCheckbox"><label for="2Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 Boiled Eggs</label><br>
                                        <input type="checkbox" id="2Vegetarian2" class="ingredientCheckbox"><label for="2Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 Finely Chopped Onions</label><br>
                                        <input type="checkbox" id="2Vegetarian3" class="ingredientCheckbox"><label for="2Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tbsp Oil</label><br>
                                        <input type="checkbox" id="2Vegetarian4" class="ingredientCheckbox"><label for="2Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Turmeric Powder</label><br>
                                        <input type="checkbox" id="2Vegetarian5" class="ingredientCheckbox"><label for="2Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Kashmiri Red Chilli Powder</label><br>
                                        <input type="checkbox" id="2Vegetarian6" class="ingredientCheckbox"><label for="2Vegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Coriander Powder</label><br>
                                        <input type="checkbox" id="2Vegetarian7" class="ingredientCheckbox"><label for="2Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Ginger-garlic Paste</label><br>
                                        <input type="checkbox" id="2Vegetarian8" class="ingredientCheckbox"><label for="2Vegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 Pureed Tomatoes</label><br>
                                        <input type="checkbox" id="2Vegetarian9" class="ingredientCheckbox"><label for="2Vegetarian9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tbsp Finely Chopped Fresh coriander leaves</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/vege2.jpg" alt="Egg Curry">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="vegetarianListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>Vegetarian quiche</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Quiche is a quick and versatile dish that is so easy to make. Fresh wild fiddle heads are in season and go really well in a quiche, or simply add any veggies you have laying around!<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Preheat oven to 400 degrees fahrenheit (200 celsius).</li>
                                <li class="">Bake pie crust until firm (~8 minutes).</li>
                                <li class="">Reduce oven heat to  350 degrees fahrenheit (175 celsius).</li>
                                <li class="">Heat olive oil in a large skillet;cook the onions, green bell peppers, mushrooms and zucchini in the oil until soft for 5-7 minutes. Remove vegetables from skillet and set aside.</li>
                                <li class="">sprinkle flour and basil on tomato slices, cook in skillet for 1 minute each side.</li>
                                <li class="">Whisk eggs, milk, salt, and ground pepper together in a small bowl.</li>
                                <li class="">Spread 1 cup cheese in the bottom of the pie crust and layer vegtable mixture over the cheese.</li>
                                <li class="">Top with the tomatoes, pour egg mixture into the pie shell and spinkle the remaining cheese a top.</li>
                                <li class="">Bake for 40-45 minutes or until it passes the cake test.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="3Vegetarian1" class="ingredientCheckbox"><label for="3Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1x9" unbaked deep dish pie crust</label><br>
                                        <input type="checkbox" id="3Vegetarian2" class="ingredientCheckbox"><label for="3Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="3Vegetarian3" class="ingredientCheckbox"><label for="3Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Sliced Onions</label><br>
                                        <input type="checkbox" id="3Vegetarian4" class="ingredientCheckbox"><label for="3Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Chopped Green Bell Peppers</label><br>
                                        <input type="checkbox" id="3Vegetarian5" class="ingredientCheckbox"><label for="3Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Sliced Mushrooms</label><br>
                                        <input type="checkbox" id="3Vegetarian6" class="ingredientCheckbox"><label for="3Vegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Sliced Zucchini</label><br>
                                        <input type="checkbox" id="3Vegetarian7" class="ingredientCheckbox"><label for="3Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Sliced Tomato</label><br>
                                        <input type="checkbox" id="3Vegetarian8" class="ingredientCheckbox"><label for="3Vegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tbsp All-purpose Flour</label><br>
                                        <input type="checkbox" id="3Vegetarian9" class="ingredientCheckbox"><label for="3Vegetarian9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tbsp Dried Basil</label><br>
                                        <input type="checkbox" id="3Vegetarian10" class="ingredientCheckbox"><label for="3Vegetarian10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 Beaten Eggs</label><br>
                                        <input type="checkbox" id="3Vegetarian11" class="ingredientCheckbox"><label for="3Vegetarian11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Milk</label><br>
                                        <input type="checkbox" id="3Vegetarian12" class="ingredientCheckbox"><label for="3Vegetarian12" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 1/2 Shredded Colby-Monterey Jack Cheese</label><br>
                                        <input type="checkbox" id="3Vegetarian13" class="ingredientCheckbox"><label for="3Vegetarian13" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="3Vegetarian14" class="ingredientCheckbox"><label for="3Vegetarian14" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/vege3.jpg" alt="Vegetarian Quiche">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="vegetarianListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>Spinach with Yoghurt</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">This quick and easy side dish is a real delight. Frozen spinach is suggested here as it is more economical and speedy to prepare, but you can substitute it with finely chopped fresh spinach, if you prefer.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Place the spinach in a saucepan with a few tablespoons of water and cook over a medium heat for a few minutes, or until defrosted (if using frozen) and just cooked. Take off the heat and leave to cool.</li>
                                <li class="">Peel and crush the garlic and mix with the yoghurt, 1/4  of a teaspoon of sea salt and a generous grind of black pepper. Stir in the cooled spinach.</li>
                                <li class="">Heat 1/4 tablespoon of oil in a small pan and fry the raisins for 1 to 2 minutes, or until starting to plump up.</li>
                                <li class="">Scatter over the spinach and finish with a drizzle of extra virgin olive oil just before serving.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="4Vegetarian1" class="ingredientCheckbox"><label for="4Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 oz Spinach</label><br>
                                        <input type="checkbox" id="4Vegetarian2" class="ingredientCheckbox"><label for="4Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 clove Garlic</label><br>
                                        <input type="checkbox" id="4Vegetarian3" class="ingredientCheckbox"><label for="4Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 oz Greek Yoghurt</label><br>
                                        <input type="checkbox" id="4Vegetarian4" class="ingredientCheckbox"><label for="4Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Olive Oil</label><br>
                                        <input type="checkbox" id="4Vegetarian5" class="ingredientCheckbox"><label for="4Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 oz raisins</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/vege4.jpg" alt="Spinach with Yoghurt">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="vegetarianListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>Tomato Fettuccine</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Using a variety of tomatoes brings a depth of flavour and great colour to this dish. This dish is very simple, harmonizing the flavour of tomatoes, garlic, basil and olive oil. Courtesy of Kristen Eppich.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Preheat oven to 400 degrees fahrenheit (200 celsius).</li>
                                <li class="">Rinse tomatoes and pat dry. Leave cherry tomatoes whole and chop larger tomatoes into 1 to 1 1/2-inch chunks. Place tomatoes and garlic in a 9 x 9-inch baking dish and sprinkle with salt, pepper and chili flakes. Toss to coat. Pour in enough oil to reach halfway up the tomatoes, about 1 cup. Stir to ensure all the tomatoes are coated.</li>
                                <li class="">Bake for 1 hour, stirring halfway through, or until tomatoes are very tender. Remove from oven. Stir in ½ cup torn basil leaves and let rest for 20 minutes.</li>
                                <li class="">Bring a large pot of salted water to a boil. Cook fettuccine according to package directions, about 8 minutes. Drain and return to pasta pot.</li>
                                <li class="">Lift tomatoes from oil using a slotted spoon and add to pasta. Toss the pasta, adding tomato oil by the tablespoon until the pasta is coated and flavourful, up to 1/3 cup. Season with salt and pepper to taste.</li>
                                <li class="">Spoon into pasta bowls. Sprinkle with Parmigiano-Reggiano if desired. Garnish with remaining basil.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="5Vegetarian1" class="ingredientCheckbox"><label for="5Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 lb Tomatoes</label><br>
                                        <input type="checkbox" id="5Vegetarian2" class="ingredientCheckbox"><label for="5Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 clove Sliced Garlic</label><br>
                                        <input type="checkbox" id="5Vegetarian3" class="ingredientCheckbox"><label for="5Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Chili Flakes</label><br>
                                        <input type="checkbox" id="5Vegetarian4" class="ingredientCheckbox"><label for="5Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 Olive Oil</label><br>
                                        <input type="checkbox" id="5Vegetarian5" class="ingredientCheckbox"><label for="5Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 cup Basil Leaves</label><br>
                                        <input type="checkbox" id="5Vegetarian6" class="ingredientCheckbox"><label for="5Vegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;5 oz Fettuccine</label><br>
                                        <input type="checkbox" id="5Vegetarian7" class="ingredientCheckbox"><label for="5Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="5Vegetarian8" class="ingredientCheckbox"><label for="5Vegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/vege5.jpg" alt="Tomato Fettuccine">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="vegetarianListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>Mushroom Soup</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Creamy mushroom soup that is not full of crazy ingredients can be hard to come by. Trying to find a vegan version is pretty much impossible. Even if you do, it’s likely full of salt and preservatives. Well not anymore! This vegan mushroom soup is quite honestly the best mushroom soup I’ve ever had. Hands down, no contest.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">In a large saucepan, over medium heat, add the diced onions. Allow to sweat while slicing the mushrooms. About 5-7 minutes.</li>
                                <li class="">Move onions to the sides of the saucepan and add mushrooms, allow to cook 5 minutes uncovered.</li>
                                <li class="">Stir the onions and mushrooms together. Add fresh thyme and allow to continue to cook, at least 10 minutes.</li>
                                <li class="">You will notice a substantial amount of water has come out of the mushrooms, and they are reduced in volume by half.</li>
                                <li class="">Add the bay leaf, the salt and the liquid aminos to the mushrooms.</li>
                                <li class="">Stir the 1 tbs. of tapioca starch into the organic broth. Add to mushrooms and stir. Add almond milk.</li>
                                <li class="">Allow to cook for at least 15 minutes, stirring occasionally. Taste and add freshly ground black pepper to taste.</li>
                                <li class="">This soup is amazing the next day as well and can easily be doubled.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="6Vegetarian1" class="ingredientCheckbox"><label for="6Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Diced White Onion</label><br>
                                        <input type="checkbox" id="6Vegetarian2" class="ingredientCheckbox"><label for="6Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;10 oz Sliced White Button Mushrooms</label><br>
                                        <input type="checkbox" id="6Vegetarian3" class="ingredientCheckbox"><label for="6Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;10 oz Sliced Portobello Mushrooms</label><br>
                                        <input type="checkbox" id="6Vegetarian4" class="ingredientCheckbox"><label for="6Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;10 stalks Thyme</label><br>
                                        <input type="checkbox" id="6Vegetarian5" class="ingredientCheckbox"><label for="6Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 cup Vegetable Broth</label><br>
                                        <input type="checkbox" id="6Vegetarian6" class="ingredientCheckbox"><label for="6Vegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Tapioca Flour</label><br>
                                        <input type="checkbox" id="6Vegetarian7" class="ingredientCheckbox"><label for="6Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 cup Almond Milk</label><br>
                                        <input type="checkbox" id="6Vegetarian8" class="ingredientCheckbox"><label for="6Vegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Dried Bay Leaf</label><br>
                                        <input type="checkbox" id="6Vegetarian9" class="ingredientCheckbox"><label for="6Vegetarian9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tbsp Soy Sauce</label><br>
                                        <input type="checkbox" id="6Vegetarian10" class="ingredientCheckbox"><label for="6Vegetarian10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="6Vegetarian11" class="ingredientCheckbox"><label for="6Vegetarian11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/vege6.jpg" alt="Mushroom Soup">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="vegetarianListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>Slow cooker butternut squash porter chilli</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">This version takes a cozy cue from fall, with butternut squash, black beans and a jolt of straight-up beer. I chose porter because of its chocolate and coffee notes, both welcome flavors in dark, hearty chili. If you can’t find a good porter, its cousin the stout should work nicely instead. There are optional toppings such as sour cream, yogurt, cheese, cilantro and avocado that goes very well with this dish.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Add all ingredients (except toppings) to the slow cooker.</li>
                                <li class="">Cook on low for 8-10 hours.</li>
                                <li class="">Taste and add additional salt and pepper if desired. Serve with assorted optional toppings.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="7Vegetarian1" class="ingredientCheckbox"><label for="7Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 medium onions, diced</label><br>
                                        <input type="checkbox" id="7Vegetarian2" class="ingredientCheckbox"><label for="7Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 jalapeno pepper, seeded and minced</label><br>
                                        <input type="checkbox" id="7Vegetarian3" class="ingredientCheckbox"><label for="7Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 tablespoons chilli powder</label><br>
                                        <input type="checkbox" id="7Vegetarian4" class="ingredientCheckbox"><label for="7Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tablespoon ground cumin</label><br>
                                        <input type="checkbox" id="7Vegetarian5" class="ingredientCheckbox"><label for="7Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 teaspoon ground coriander</label><br>
                                        <input type="checkbox" id="7Vegetarian6" class="ingredientCheckbox"><label for="7Vegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 cup porter beer</label><br>
                                        <input type="checkbox" id="7Vegetarian7" class="ingredientCheckbox"><label for="7Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 can diced tomatoes </label><br>
                                        <input type="checkbox" id="7Vegetarian8" class="ingredientCheckbox"><label for="7Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;6 cups cooked black beans, rinsed and drained (or about 4 cans)</label><br>
                                        <input type="checkbox" id="7Vegetarian9" class="ingredientCheckbox"><label for="7Vegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 small butternut squash (3 pounds), peeled, seeded and cubed</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List7 Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
            ===============================================
            Keto
            ===============================================
            -->
            <div id="ketoListContent">
                <div class="row displayNone" id="ketoListContent1">
                    <div class="col-md-8 borderLeft">
                        <h2>Bacon Avocado Salad</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">A delicious and strict low-carb salad for those who love avocados, goat cheese and nuts. Great for lunch or as a light dinner.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Preheat oven to 400 degrees fahrenheit (200 celsius) and place parchment paper in a baking dish.</li>
                                <li class="">Cut the goat cheese into round half inch slices and place in the baking dish. Bake on upper rack until golden.</li>
                                <li class="">Fry bacon in a pan until crispy</li>
                                <li class="">Cut the avocado into pieces and put on top of the arugula lettuce. Add the fried bacon and goat cheese. Sprinkle nuts on top.</li>
                                <li class="">Make a salad dressing with the juice from the lemon, mayo and olive oil. Salt and pepper to taste. You can also add fresh herbs.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="1Keto1" class="ingredientCheckbox"><label for="1Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 oz Goat Cheese</label><br>
                                        <input type="checkbox" id="1Keto2" class="ingredientCheckbox"><label for="1Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 oz Bacon</label><br>
                                        <input type="checkbox" id="1Keto3" class="ingredientCheckbox"><label for="1Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 Avocado</label><br>
                                        <input type="checkbox" id="1Keto4" class="ingredientCheckbox"><label for="1Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 oz Walnuts</label><br>
                                        <input type="checkbox" id="1Keto5" class="ingredientCheckbox"><label for="1Keto5" class="ingredientLabel" data-toggle="tooltip" title="Or just Lettuce"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 oz Arugula Lettuce</label><br>
                                        <input type="checkbox" id="1Keto6" class="ingredientCheckbox"><label for="1Keto6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/8 Lemon Juice</label><br>
                                        <input type="checkbox" id="1Keto7" class="ingredientCheckbox"><label for="1Keto7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 3/4 tbsp Mayonnaise</label><br>
                                        <input type="checkbox" id="1Keto8" class="ingredientCheckbox"><label for="1Keto8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 3/4 tbsp Olive Oil</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/keto1.jpg" alt="Bacon Avocado Salad">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="ketoListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>Baked Salmon</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">This lip-smacking Lemon Butter Salmon from Karla Seville of Waynesboro, Pennsylvania makes for an easy, breezy supper to serve family or friends out on the patio some warm night. As an extra-special touch, you might add a 4-ounce package of salad shrimp to the remaining lemon butter, then spoon over the salmon before serving.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Preheat oven to 400 degrees fahrenheit (200 celsius).</li>
                                <li class="">Place the salmon with the skin down in a greased baking dish, salt and pepper generously.</li>
                                <li class="">Slice the lemon thinly and place on top of the salmon. Cover with half of the butter in think slices.</li>
                                <li class="">Bake on the middle rack for about 20-30 minutes, depending on size.</li>
                                <li class="">Heat the rest of the butter in a small sauce pan until it starts to bubble. Remove from heat and let cool a little and add some lemon juice.</li>
                                <li>Serve the fish with the lemon butter and a side dish of choice (garden salad).</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="2Keto1" class="ingredientCheckbox"><label for="2Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Olive Oil</label><br>
                                        <input type="checkbox" id="2Keto2" class="ingredientCheckbox"><label for="2Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;6-8 oz Salmon</label><br>
                                        <input type="checkbox" id="2Keto3" class="ingredientCheckbox"><label for="2Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 1/4 oz Butter</label><br>
                                        <input type="checkbox" id="2Keto4" class="ingredientCheckbox"><label for="2Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/6 Lemon</label><br>
                                        <input type="checkbox" id="2Keto5" class="ingredientCheckbox"><label for="2Keto5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="2Keto6" class="ingredientCheckbox"><label for="2Keto6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/keto2.jpg" alt="Baked Salmon">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="ketoListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>Scrambled Eggs</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Butter plus eggs equals the perfect breakfast. Start your day off right with our especially buttery and satisfying version of this breakfast classic. Ready in minutes!<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Whisk the eggs together with some salt and pepper using a fork.</li>
                                <li class="">Melt the butter in a non-stick skillet over medium heat. Watch carefully — the butter shouldn’t turn brown!</li>
                                <li class="">Pour the eggs into the skillet and stir for 1–2 minutes, until they are creamy and cooked just shy of how you like them. Remember that the eggs will still be cooking even after you’ve put them on your plate.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="3Keto1" class="ingredientCheckbox"><label for="3Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 Eggs</label><br>
                                        <input type="checkbox" id="3Keto2" class="ingredientCheckbox"><label for="3Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 oz Butter</label><br>
                                        <input type="checkbox" id="3Keto3" class="ingredientCheckbox"><label for="3Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/6 Lemon</label><br>
                                        <input type="checkbox" id="3Keto4" class="ingredientCheckbox"><label for="3Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="3Keto5" class="ingredientCheckbox"><label for="3Keto5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/keto3.jpg" alt="Scrambled Eggs">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="ketoListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>Chicken with Spinach Pizza</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">If you are not familiar with the keto way of eating, in short –  Keto or Ketosis is a process in which you train your body to burn fat for fuel instead of carbs (sugar/insulin etc) by eating a low carb, higher fat diet. This IS NOT a fad. This is NOT unhealthy, regardless of the fact that it is high fat.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Preheat the oven to 425°</li>
                                <li class="">In a small bowl, add cream cheese and mozzarella. Microwave on high for 20 seconds at a time until melted.</li>
                                <li class="">Add remaining ingredients to the melted cheese.</li>
                                <li class="">Mix as well as you can. It does get a tad bit odd here, because mozzarella turns to a big glob when melted. It is ok, it will work together.</li>
                                <li class="">Grease a pizza pan, spread dough out into a 1/2″ thick circle.</li>
                                <li class="">Bake for 12-14 minutes or until golden brown.</li>
                                <li class="">Saute the chicken in a skillet over medium heat until done. Remove, set aside.</li>
                                <li class="">Add garlic plus the xantham gum with half and half to the skillet and bring to a boil. Reduce to simmer when sauce starts to thicken.</li>
                                <li class="">Fold in spinach, cook just until wilted.</li>
                                <li class="">Spread sauce/spinach mixture onto your cooked pizza crust. Top with chicken and shredded cheese.</li>
                                <li class="">Bake 5 minutes or until cheese is melted.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="4Keto1" class="ingredientCheckbox"><label for="4Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 oz Cream Cheese</label><br>
                                        <input type="checkbox" id="4Keto2" class="ingredientCheckbox"><label for="4Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3/4 cup Shredded Mozzarella</label><br>
                                        <input type="checkbox" id="4Keto3" class="ingredientCheckbox"><label for="4Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Beaten Egg</label><br>
                                        <input type="checkbox" id="4Keto4" class="ingredientCheckbox"><label for="4Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Garlic Powder</label><br>
                                        <input type="checkbox" id="4Keto5" class="ingredientCheckbox"><label for="4Keto5" class="ingredientLabel" data-toggle="tooltip" title="Or just Lettuce"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/3 cup Almond Flour</label><br>
                                        <input type="checkbox" id="4Keto6" class="ingredientCheckbox"><label for="4Keto6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Chicken Breast</label><br>
                                        <input type="checkbox" id="4Keto7" class="ingredientCheckbox"><label for="4Keto7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="4Keto8" class="ingredientCheckbox"><label for="4Keto8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 clove Minced Garlic</label><br>
                                        <input type="checkbox" id="4Keto9" class="ingredientCheckbox"><label for="4Keto9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Whipping Cream</label><br>
                                        <input type="checkbox" id="4Keto10" class="ingredientCheckbox"><label for="4Keto10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Xanthan Gum</label><br>
                                        <input type="checkbox" id="4Keto11" class="ingredientCheckbox"><label for="4Keto11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 cup Chopped Spinach</label><br>
                                        <input type="checkbox" id="4Keto12" class="ingredientCheckbox"><label for="4Keto12" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Shredded Mozzarella</label><br>
                                        <input type="checkbox" id="4Keto13" class="ingredientCheckbox"><label for="4Keto13" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="4Keto14" class="ingredientCheckbox"><label for="4Keto14" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/keto4.jpg" alt="Chicken with Spinach Pizza">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="ketoListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>Cinnamon Butter Bites</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Flavorful, slightly sweet, and with a whipped taste vaguely reminiscent of frosting, these cinnamon butter bites are a delicious way to eat your healthy fats.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Allow butter to soften on your counter until it is slightly squishy.</li>
                                <li class="">Add butter, cinnamon, honey/stevia, and vanilla extract to your food processor. Process for a couple of minutes to mix ingredients and achieve slightly whipped taste. Stop food processor as necessary to scrape down the bowl and reincorporate ingredients.</li>
                                <li class=""> Spoon butter mixture into silicone molds, Alternatively, you can line a cutting board or other flat surface with parchment paper and then spoon dollops of butter mixture onto the parchment paper.</li>
                                <li class=""> Freeze for an hour or two, then remove from parchment paper or molds and store in a container in your freezer.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="5Keto1" class="ingredientCheckbox"><label for="5Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 lb Butter</label><br>
                                        <input type="checkbox" id="5Keto2" class="ingredientCheckbox"><label for="5Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Honey</label><br>
                                        <input type="checkbox" id="5Keto3" class="ingredientCheckbox"><label for="5Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Cinnamon</label><br>
                                        <input type="checkbox" id="5Keto4" class="ingredientCheckbox"><label for="5Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 1/2 tsp Vanilla Extract</label><br>
                                        <input type="checkbox" id="5Keto5" class="ingredientCheckbox"><label for="5Keto5" class="ingredientLabel" data-toggle="tooltip" title="Or just Lettuce"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/keto5.jpg" alt="Cinnamon Butter Bites">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="ketoListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>Grilled Cheese Sandwiches</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">This is a great low carb solution that still allows you to enjoy a comforting grilled cheese sandwich.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Preheat oven to 450F. Place cauliflower into food processor and pulse until crumbs about half the size of a grain of rice.</li>
                                <li class="">Place cauliflower into large microwave safe bowl and microwave for 2 minutes. Your cauliflower should be soft and tender (and hot!).</li>
                                <li class="">Stir cauliflower to mix up the bottom and top cauliflower. Place back into the microwave and cook for another 3 minutes. Remove and stir again so that all the cauliflower cooks evenly. Place back into microwave and cook for 5 minutes. At this point, you should see the cauliflower is starting to become more dry. Microwave for another 5 minutes. Cauliflower should still be slightly moist to the touch, but should look dry and clumped up (like photo above; similar to as if someone had chewed it up and spit it back out.) If you've made cauliflower pizza or breadsticks with the cloth wringing dry method, it should look the same.</li>
                                <li class="">Allow cauliflower to cool for a few minutes. Then add in egg, parmesan and seasoning. Stir to combine until smooth paste forms. Divide dough into 4 equal parts. Place onto large baking sheet lined with parchment paper or silpat mat. Using your knuckles and fingers, shape into square bread slices about 1/2 inch thick. Bake cauliflower bread for about 15-18 minutes or until golden brown. Remove from oven and let cool a few minutes.</li>
                                <li class="">Using a good spatula, carefully slide cauliflower bread off of parchment paper. Now you are ready to assemble your sandwiches. Normally I make grilled cheese sandwiches on a pan, but since the cauliflower crust is more delicate, I didn't want to risk it breaking with too many flips on the stove. Instead, make 2 cauliflower sandwiches by adding a slice of cheese in between each pair of bread slices. Place sandwiches into toaster oven and broil for several minutes (5-10) until cheese is completely melted and bread is toasty.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="6Keto1" class="ingredientCheckbox"><label for="6Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 head Cauliflower</label><br>
                                        <input type="checkbox" id="6Keto2" class="ingredientCheckbox"><label for="6Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Egg</label><br>
                                        <input type="checkbox" id="6Keto3" class="ingredientCheckbox"><label for="6Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Shredded Parmesan Cheese</label><br>
                                        <input type="checkbox" id="6Keto4" class="ingredientCheckbox"><label for="6Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Herb Seasoning</label><br>
                                        <input type="checkbox" id="6Keto5" class="ingredientCheckbox"><label for="6Keto5" class="ingredientLabel" data-toggle="tooltip" title="Or just Lettuce"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 slices White Cheddar Cheese</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/keto6.jpg" alt="Grilled Cheese Sandwiches">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="ketoListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>List 7</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">This is Keto Content</li>
                                <li class="">This is Keto Content</li>
                                <li class="">This is Keto Content</li>
                                <li class="">This is Keto Content</li>
                                <li class="">This is Keto Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstKeto7" class="ingredientCheckbox"><label for="firstKeto7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List7 Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
            ===============================================
            Paleo
            ===============================================
            -->
            <div id="paleoListContent">
                <div class="row displayNone" id="paleoListContent1">
                    <div class="col-md-8 borderLeft">
                        <h2>Salmon with Vegetables</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Chopped cucumbers, tomatoes, and crunchy red onions are a classic chopped salad base for a simple vinaigrette and some fresh herbs. But top them off here with some smoked salmon for even more flavor: the fish has an intensity that goes nicely with the vegetables, and the color is striking.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">In a small bowl, whisk together the olive oil, lemon juice, garlic, balsamic vinegar, and oregano.</li>
                                <li class="">Season the dressing to taste with salt and freshly ground black pepper.</li>
                                <li class="">Combine the tomatoes, cucumber, and onion in a bowl.</li>
                                <li class="">Drizzle the vegetables with the dressing and gently toss.</li>
                                <li class="">Roll the smoked salmon slices, and place on top of the fresh vegetables.</li>
                                <li class="">Sprinkle some fresh dill to taste on top before serving.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="1paleo1" class="ingredientCheckbox"><label for="1paleo1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 oz Smoked Salmon</label><br>
                                        <input type="checkbox" id="1paleo2" class="ingredientCheckbox"><label for="1paleo2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 cup Tomatoes</label><br>
                                        <input type="checkbox" id="1paleo3" class="ingredientCheckbox"><label for="1paleo3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 Chopped Cucumber</label><br>
                                        <input type="checkbox" id="1paleo4" class="ingredientCheckbox"><label for="1paleo4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 Sliced Onion</label><br>
                                        <input type="checkbox" id="1paleo5" class="ingredientCheckbox"><label for="1paleo5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="1paleo6" class="ingredientCheckbox"><label for="1paleo6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Lemon Juice</label><br>
                                        <input type="checkbox" id="1paleo7" class="ingredientCheckbox"><label for="1paleo7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp minced Garlic</label><br>
                                        <input type="checkbox" id="1paleo8" class="ingredientCheckbox"><label for="1paleo8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Balsamic Vinegar</label><br>
                                        <input type="checkbox" id="1paleo9" class="ingredientCheckbox"><label for="1paleo9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Dried Oregano</label><br>
                                        <input type="checkbox" id="1paleo10" class="ingredientCheckbox"><label for="1paleo10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Minced Dill</label><br>
                                        <input type="checkbox" id="1paleo11" class="ingredientCheckbox"><label for="1paleo11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="1paleo12" class="ingredientCheckbox"><label for="1paleo12" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/paleo1.jpg" alt="Salmon with Vegetables">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>Tomato Basil Frittata</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">You’ll need an ovenproof skillet for this recipe: don’t try it with a pan that has a plastic or rubber handle! Like all frittatas, this one is endlessly versatile. The recipe here is very simple and minimalist, and really brings out the flavor of the tomatoes, but you can switch it up a little with other vegetables as well.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Preheat your oven to 176 celsius (350 fahrenheit)</li>
                                <li class="">Whisk the eggs and mustard in a bowl add salt and pepper to taste</li>
                                <li class="">Heat the coconut oil in an oven proof skillet over medium heat. Cook the bacon and onion until the onion is golden (5-6 minutes).</li>
                                <li class="">Add the spinach to the skillet cook for an additional 1-2 minutes till spinach has wilted.</li>
                                <li class="">Pour egg mixture into the skillet. Cook until it just starts to harden and place tomatoes on top.</li>
                                <li class="">Once it has set around the edges but still runny in the middle, place into the oven and bake for 30 minutes or until the frittata turns a golden colour.</li>
                                <li class="">Sprinkle basil leaves on top and enjoy!</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="2paleo1" class="ingredientCheckbox"><label for="2paleo1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 Eggs</label><br>
                                        <input type="checkbox" id="2paleo2" class="ingredientCheckbox"><label for="2paleo2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 Chopped Bacon Slices</label><br>
                                        <input type="checkbox" id="2paleo3" class="ingredientCheckbox"><label for="2paleo3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 Chopped Red Onion</label><br>
                                        <input type="checkbox" id="2paleo4" class="ingredientCheckbox"><label for="2paleo4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 oz Baby Spinach</label><br>
                                        <input type="checkbox" id="2paleo5" class="ingredientCheckbox"><label for="2paleo5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Sliced Ripe Tomato</label><br>
                                        <input type="checkbox" id="2paleo6" class="ingredientCheckbox"><label for="2paleo6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Basil Leaves</label><br>
                                        <input type="checkbox" id="2paleo7" class="ingredientCheckbox"><label for="2paleo7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 tsp Wholegrain Mustard</label><br>
                                        <input type="checkbox" id="2paleo8" class="ingredientCheckbox"><label for="2paleo8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Coconut Oil</label><br>
                                        <input type="checkbox" id="2paleo9" class="ingredientCheckbox"><label for="2paleo9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="2paleo10" class="ingredientCheckbox"><label for="2paleo10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/paleo2.jpg" alt="Tomato Basil Frittata">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>Crock Pot Chili</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Crock pot chili is a super simple yet warm and comforting dish. It is something that you can put on in the morning and just leave all day so you will have something warm to eat when you get home with no hassle! Although beans aren’t included in this recipe feel free to add a can of beans in as well. Feel free to substitute other meats such as bison, elk, venison or turkey as this recipe is very versatile.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Brown beef in a pan.</li>
                                <li class="">Combine everything in your crock pot.</li>
                                <li class="">Cook on low for 8+ hours.</li>
                                <li class="">Garnish with cheese, sour cream, avocado, chopped onions as desired.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="3paleo1" class="ingredientCheckbox"><label for="3paleo1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;16 oz Ground Beef</label><br>
                                        <input type="checkbox" id="3paleo2" class="ingredientCheckbox"><label for="3paleo2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;32 oz Chopped Tomatoes</label><br>
                                        <input type="checkbox" id="3paleo3" class="ingredientCheckbox"><label for="3paleo3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1.5 L Tomato Juice</label><br>
                                        <input type="checkbox" id="3paleo4" class="ingredientCheckbox"><label for="3paleo4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 Chopped Green Peppers</label><br>
                                        <input type="checkbox" id="3paleo5" class="ingredientCheckbox"><label for="3paleo5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 stalks Chopped Celery</label><br>
                                        <input type="checkbox" id="3paleo6" class="ingredientCheckbox"><label for="3paleo6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Chopped Onion</label><br>
                                        <input type="checkbox" id="3paleo7" class="ingredientCheckbox"><label for="3paleo7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 tbsp Chili Powder</label><br>
                                        <input type="checkbox" id="3paleo8" class="ingredientCheckbox"><label for="3paleo8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Cumin</label><br>
                                        <input type="checkbox" id="3paleo9" class="ingredientCheckbox"><label for="3paleo9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="3paleo10" class="ingredientCheckbox"><label for="3paleo10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/paleo3.jpg" alt="Crock Pot Chili">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>Chipotle Chicken Wings</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">This wing recipe is the perfect thing to prepare for a ton of events whether it’s a night in with the family or a party with friends. Feel free to increase or decrease the amount of chipotle powder to your desired heat.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Preheat a grill to medium-high heat</li>
                                <li class="">In a bowl, mix the chipotle powder, cumin, paprika, onion powder, garlic powder and add salt and pepper to taste</li>
                                <li class="">Rub the spice mixture all over the wings, make sure to coat evenly</li>
                                <li class="">Place the wings on the grill and cook for 20-25 minutes turning every 5 to 6 minutes</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="4paleo1" class="ingredientCheckbox"><label for="4paleo1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 lbs Chicken Wings</label><br>
                                        <input type="checkbox" id="4paleo2" class="ingredientCheckbox"><label for="4paleo2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Chipotle Powder</label><br>
                                        <input type="checkbox" id="4paleo3" class="ingredientCheckbox"><label for="4paleo3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Cumin</label><br>
                                        <input type="checkbox" id="4paleo4" class="ingredientCheckbox"><label for="4paleo4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Paprika</label><br>
                                        <input type="checkbox" id="4paleo5" class="ingredientCheckbox"><label for="4paleo5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Onion Powder</label><br>
                                        <input type="checkbox" id="4paleo6" class="ingredientCheckbox"><label for="4paleo6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Garlic Powder</label><br>
                                        <input type="checkbox" id="4paleo7" class="ingredientCheckbox"><label for="4paleo7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="4paleo8" class="ingredientCheckbox"><label for="4paleo8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/paleo4.jpg" alt="Chipotle Chicken Wings">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>Beets &amp; Berry Smoothie</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">A smoothie (occasionally spelled smoothee or smoothy) is a thick beverage made from blended raw fruit or vegetables with other ingredients such as water, ice, dairy products or sweeteners.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Put all of the ingredients in a blender and blend until smooth and creamy, adjusting consistency with cold water if necessary. Serve immediately.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="5paleo1" class="ingredientCheckbox"><label for="5paleo1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Frozen Banana</label><br>
                                        <input type="checkbox" id="5paleo2" class="ingredientCheckbox"><label for="5paleo2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 cups Frozen Strawberries</label><br>
                                        <input type="checkbox" id="5paleo3" class="ingredientCheckbox"><label for="5paleo3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 Avocado</label><br>
                                        <input type="checkbox" id="5paleo4" class="ingredientCheckbox"><label for="5paleo4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Peeled Beet</label><br>
                                        <input type="checkbox" id="5paleo5" class="ingredientCheckbox"><label for="5paleo5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 cup Almond Milk</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/paleo5.jpg" alt="Beets &amp; Berry Smoothie">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>Chipotle Lime Salmon</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Chipotle, lime and honey come together in a glaze for this salmon.  It’s smoky, spicy and sweet and has that kick of citrus that may trick your brain into thinking you’re vacationing in the tropics.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Preheat oven to 350 F.</li>
                                <li class="">Rinse salmon, pat dry, and place on a metal baking sheet.</li>
                                <li class="">Rub each fillet with olive oil or fat of choice, and squeeze the juice from one-half lime onto each fillet.</li>
                                <li class="">Sprinkle fillets with sea salt (if desired) and chipotle, then place a half lime on top of each fillet.</li>
                                <li class="">Cook salmon for 12-15 minutes, or until it flakes easily with a fork.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="6paleo1" class="ingredientCheckbox"><label for="6paleo1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 lb Salmon Fillets</label><br>
                                        <input type="checkbox" id="6paleo2" class="ingredientCheckbox"><label for="6paleo2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="6paleo3" class="ingredientCheckbox"><label for="6paleo3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 limes</label><br>
                                        <input type="checkbox" id="6paleo4" class="ingredientCheckbox"><label for="6paleo4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Chipotle Powder</label><br>
                                        <input type="checkbox" id="6paleo5" class="ingredientCheckbox"><label for="6paleo5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/paleo6.jpg" alt="Chipotle Lime Salmon">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>Baked chicken on cauliflower rice </h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">This baked chicken on cauliflower rice dish is a perfect meal for paleo diets. It’s dairy free, egg free, nut free, grain free, gluten free, and 100% delicious. This easy to make dish combines simple ingredients for an unforgettable and healthy dish that will have your friends coming back for more. This dish is customizable so season the rice and baked chicken as you like! <br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Combine all the cauliflower rice ingredients together in a large bowl and mix thoroughly. Spread out in a 13 x 9 baking dish.</li>
                                <li class="">Combine all the chicken seasonings in a small bowl. Rub all over the chicken pieces. Place the chicken pieces on top of the cauliflower rice. Sprinkle any remaining seasoning over the top.</li>
                                <li class="">Bake at 375 degrees for 45 minutes, or until the chicken is cooked through and the skin is crisp. Serve hot.</li>
                                <li class=""> Alternatively, you could put all of this in a crockpot and cook it on low for 6 hours.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="7Paleo1" class="ingredientCheckbox"><label for="7Paleo1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;14 cups finely chopped raw cauliflower</label><br>
                                        <input type="checkbox" id="7Paleo2" class="ingredientCheckbox"><label for="7Paleo2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup chopped parsley</label><br>
                                        <input type="checkbox" id="7Paleo3" class="ingredientCheckbox"><label for="7Paleo3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 cup pitted green olives (I used Castelanata), quartered</label><br>
                                        <input type="checkbox" id="7Paleo4" class="ingredientCheckbox"><label for="7Paleo4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 Tbsp lemon zest</label><br>
                                        <input type="checkbox" id="7Paleo5" class="ingredientCheckbox"><label for="7Paleo5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 Tbsp lemon juice</label><br>
                                        <input type="checkbox" id="7Paleo6" class="ingredientCheckbox"><label for="7Paleo6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 cup chicken stock</label><br>
                                        <input type="checkbox" id="7Paleo7" class="ingredientCheckbox"><label for="7Paleo7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp garlic powder</label><br>
                                        <input type="checkbox" id="7Paleo8" class="ingredientCheckbox"><label for="7Paleo8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 Tbsp olive oil</label><br>
                                        <input type="checkbox" id="7Paleo9" class="ingredientCheckbox"><label for="7Paleo9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 lbs chicken pieces (drumsticks, thighs, or breasts)</label><br>
                                        <input type="checkbox" id="7Paleo10" class="ingredientCheckbox"><label for="7Paleo10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tsp garlic powder</label><br>
                                        <input type="checkbox" id="7Paleo11" class="ingredientCheckbox"><label for="7Paleo11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tsp onion powder</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List7 Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
            ===============================================
            ProteinRich
            ===============================================
            -->
            <div id="proteinListContent">
                <div class="row displayNone" id="proteinListContent1">
                    <div class="col-md-8 borderLeft">
                        <h2>Mac and Cheese</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Mac and cheese can be a true comfort on a gloomy day, and our healthy update takes advantage of extra-sharp Cheddar balanced with creamy low-fat cottage cheese and tucks a layer of spinach into the middle, which may help picky eaters down their vegetables. Whole-wheat pasta adds robust flavor and extra fiber.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Put a large pot of water on to boil. Preheat oven to 450 degrees fahrenheit (230 celsius). Coat an 8-inch-square (2-quart) baking dish with cooking spray.</li>
                                <li class="">Mix breadcrumbs, oil and paprika in a small bowl. Place spinach in a fine-mesh strainer and press out excess moisture.</li>
                                <li class="">Heat 1 1/2 cups milk in a large heavy saucepan over medium-high heat until steaming. Whisk remaining 1/4 cup milk and flour in a small bowl until smooth; add to the hot milk and cook, whisking constantly, until the sauce simmers and thickens, 2 to 3 minutes. Remove from heat and stir in Cheddar until melted. Stir in cottage cheese, nutmeg, salt and pepper.</li>
                                <li class="">Cook pasta for 4 minutes, or until not quite tender. (It will continue to cook during baking.) Drain and add to the cheese sauce; mix well. Spread half the pasta mixture in the prepared baking dish. Spoon the spinach on top. Top with the remaining pasta; sprinkle with the breadcrumb mixture.</li>
                                <li class="">Bake the casserole until bubbly and golden, 25 to 30 minutes.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="1protein1" class="ingredientCheckbox"><label for="1protein1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Dry Breadcrumbs</label><br>
                                        <input type="checkbox" id="1protein2" class="ingredientCheckbox"><label for="1protein2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Olive Oil</label><br>
                                        <input type="checkbox" id="1protein3" class="ingredientCheckbox"><label for="1protein3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Paprika</label><br>
                                        <input type="checkbox" id="1protein4" class="ingredientCheckbox"><label for="1protein4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 oz Frozen Spinach</label><br>
                                        <input type="checkbox" id="1protein5" class="ingredientCheckbox"><label for="1protein5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Milk</label><br>
                                        <input type="checkbox" id="1protein6" class="ingredientCheckbox"><label for="1protein6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp All-purpose Flour</label><br>
                                        <input type="checkbox" id="1protein7" class="ingredientCheckbox"><label for="1protein7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Shredded Cheddar Cheese</label><br>
                                        <input type="checkbox" id="1protein8" class="ingredientCheckbox"><label for="1protein8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 cup Cottage Cheese</label><br>
                                        <input type="checkbox" id="1protein9" class="ingredientCheckbox"><label for="1protein9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 cups Macaroni or Penne</label><br>
                                        <input type="checkbox" id="1protein10" class="ingredientCheckbox"><label for="1protein10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="1protein11" class="ingredientCheckbox"><label for="1protein11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/protein1.jpg" alt="Mac and Cheese">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="proteinListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>Braised Paprika Chicken</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Sweet Hungarian paprika gives this creamy braised chicken the best flavor. This is a good “pantry dish” since you should have the basics on hand and only need to purchase the chicken. You may vary the recipe by using cubed veal shoulder instead of chicken and mushrooms instead of peppers. Serve with whole-wheat orzo flavored with minced parsley or dill.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Pat chicken pieces dry with paper towels and season with ½ teaspoon salt and pepper.</li>
                                <li class="">Heat oil and butter in a large heavy casserole or Dutch oven over medium heat. Add onions and sprinkle with sugar. Cook, stirring frequently, until the onions are very soft and light brown, 10 to 15 minutes.</li>
                                <li class="">Stir in bell peppers, tomato paste, paprika and crushed red pepper. Add the chicken and stir it gently into the onion mixture. Sprinkle with marjoram and add broth. Cover the pot with a tight-fitting lid and simmer over medium-low heat until the chicken is very tender, about 50 minutes.</li>
                                <li class="">Just before the chicken is done, whisk sour cream, flour and the remaining 1/4  teaspoon salt in a small bowl until smooth.</li>
                                <li class="">When the chicken is done, remove it to a plate. Stir the sour cream mixture into the sauce; return to a simmer and cook, stirring, until the sauce coats the spoon. Reduce heat to low, return the chicken to the sauce and reheat, about 1 minute. Serve garnished with parsley, dill and/or chives, if desired.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="2protein1" class="ingredientCheckbox"><label for="2protein1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 lb Chicken</label><br>
                                        <input type="checkbox" id="2protein2" class="ingredientCheckbox"><label for="2protein2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="2protein3" class="ingredientCheckbox"><label for="2protein3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tbsp Butter</label><br>
                                        <input type="checkbox" id="2protein4" class="ingredientCheckbox"><label for="2protein4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 cup Finely Diced Onion</label><br>
                                        <input type="checkbox" id="2protein5" class="ingredientCheckbox"><label for="2protein5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Pinch of Sugar</label><br>
                                        <input type="checkbox" id="2protein6" class="ingredientCheckbox"><label for="2protein6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 cup Diced Red Bell Pepper</label><br>
                                        <input type="checkbox" id="2protein7" class="ingredientCheckbox"><label for="2protein7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/8 cup Diced Green Bell Pepper</label><br>
                                        <input type="checkbox" id="2protein8" class="ingredientCheckbox"><label for="2protein8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tbsp Tomato Paste</label><br>
                                        <input type="checkbox" id="2protein9" class="ingredientCheckbox"><label for="2protein9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tbsp Sweet Paprika</label><br>
                                        <input type="checkbox" id="2protein10" class="ingredientCheckbox"><label for="2protein10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Cushed Red Pepper</label><br>
                                        <input type="checkbox" id="2protein11" class="ingredientCheckbox"><label for="2protein11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Dried Marjoram</label><br>
                                        <input type="checkbox" id="2protein12" class="ingredientCheckbox"><label for="2protein12" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 cup Chicken Broth</label><br>
                                        <input type="checkbox" id="2protein13" class="ingredientCheckbox"><label for="2protein13" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/8 cup Sour Cream</label><br>
                                        <input type="checkbox" id="2protein14" class="ingredientCheckbox"><label for="2protein14" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tbsp All-purpose Flour</label><br>
                                        <input type="checkbox" id="2protein15" class="ingredientCheckbox"><label for="2protein15" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tbsp Finely Minced Parsley, Dill or Chives</label><br>
                                        <input type="checkbox" id="2protein16" class="ingredientCheckbox"><label for="2protein16" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="2protein17" class="ingredientCheckbox"><label for="2protein17" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/protein2.jpg" alt="Braised Paprika Chicken">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="proteinListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>Spiced Scrambled Eggs</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Scrambled eggs is a dish made from whites and yolks of eggs (usually chicken eggs) stirred or beaten together in a pan while being gently heated, typically with salt and butter and variable other ingredients.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Fry the onion, garlic and chilli until the onions are translucent.</li>
                                <li class="">Add mustard seeds, turmeric and garam masala and stir fry for 2-3 minutes.</li>
                                <li class="">Add the chopped tomatoes and keep cooking, stirring regularly, until tomatoes start to break up.</li>
                                <li class="">Pour beaten eggs into the pan, season with salt and cook, stirring constantly, until they are done.</li>
                                <li class="">You can serve this garnished with fresh, finely chopped coriander leaves.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="3protein1" class="ingredientCheckbox"><label for="3protein1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 Beaten Eggs</label><br>
                                        <input type="checkbox" id="3protein2" class="ingredientCheckbox"><label for="3protein2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Chopped Onion</label><br>
                                        <input type="checkbox" id="3protein3" class="ingredientCheckbox"><label for="3protein3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;5 cloves Finely Chopped Garlic</label><br>
                                        <input type="checkbox" id="3protein4" class="ingredientCheckbox"><label for="3protein4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Finely Chopped Chili Pepper</label><br>
                                        <input type="checkbox" id="3protein5" class="ingredientCheckbox"><label for="3protein5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 Chopped Tomatoes</label><br>
                                        <input type="checkbox" id="3protein6" class="ingredientCheckbox"><label for="3protein6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Turmeric</label><br>
                                        <input type="checkbox" id="3protein7" class="ingredientCheckbox"><label for="3protein7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Mustard Seeds</label><br>
                                        <input type="checkbox" id="3protein8" class="ingredientCheckbox"><label for="3protein8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Garam Masala</label><br>
                                        <input type="checkbox" id="3protein9" class="ingredientCheckbox"><label for="3protein9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/protein3.jpg" alt="Spiced scrambled eggs">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="proteinListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>Fruit &amp; Nut Yogurt</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">An energy-boosting breakfast pot that makes a great alternative to cereal and will keep you full until lunch.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Mix the nuts, sunflower seeds and pumpkin seeds. Mix the sliced banana and berries. Layer up in a bowl with yoghurt and enjoy.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="4protein1" class="ingredientCheckbox"><label for="4protein1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 tbsp Chopped Mixed Nut</label><br>
                                        <input type="checkbox" id="4protein2" class="ingredientCheckbox"><label for="4protein2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Sunflower Seeds</label><br>
                                        <input type="checkbox" id="4protein3" class="ingredientCheckbox"><label for="4protein3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Pumpkin Seeds</label><br>
                                        <input type="checkbox" id="4protein4" class="ingredientCheckbox"><label for="4protein4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Sliced Banana</label><br>
                                        <input type="checkbox" id="4protein5" class="ingredientCheckbox"><label for="4protein5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 Handfuls Berries</label><br>
                                        <input type="checkbox" id="4protein6" class="ingredientCheckbox"><label for="4protein6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;7 oz Vanilla Yogurt</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/protein4.jpg" alt="Fruit &amp; Nut Yogurt">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="proteinListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>Corned Beef and Cabbage</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Inexpensive, easy to cook, and delightfully tender and satisfying, Corned Beef and Cabbage proves a pleasing meal any time—not just on St. Patrick’s Day. At the grocery, look for corned beef brisket. In some cases, the meat will come with a spice packet, which you’ll add to the slow cooker. But some brands cure the meat before packaging; if it’s labeled as “corned,” you’re set. We developed a recipe that cooks over 7 or 8 hours on low, but is also ready after 4 to 5 hours of cooking on high, for quicker preparation, or even a warming Sunday supper.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Combine the thyme, caraway seeds, beef (cut in half to fit if necessary) with spice packet, carrots, cabbage, potatoes, and ½ cup water in a 5- to 6-quart slow cooker. Cook, covered, until the beef is tender, on low for 7 to 8 hours or on high for 4 to 5 hours (this will shorten total recipe time).</li>
                                <li class="">Transfer the beef to a cutting board and thinly slice.</li>
                                <li class="">Serve warm with the carrots, cabbage, potatoes, and mustard, sprinkled with fresh thyme leaves.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="5Protein1" class="ingredientCheckbox"><label for="5Protein1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 fresh thyme sprigs, plus leaves for serving</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        <input type="checkbox" id="5Protein2" class="ingredientCheckbox"><label for="5Protein2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 teaspoon caraway seeds</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        <input type="checkbox" id="5Protein3" class="ingredientCheckbox"><label for="5Protein3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 3-pound piece corned beef brisket (with spice packet, if included)</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        <input type="checkbox" id="5Protein4" class="ingredientCheckbox"><label for="5Protein4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 pound carrots, cut in half crosswise (and in half lengthwise if thick)</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        <input type="checkbox" id="5Protein5" class="ingredientCheckbox"><label for="5Protein5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;½ small green cabbage, cut into thin wedges</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        <input type="checkbox" id="5Protein6" class="ingredientCheckbox"><label for="5Protein6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 pound small red potatoes</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        <input type="checkbox" id="5Protein7" class="ingredientCheckbox"><label for="5Protein7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Dijon mustard, for serving</label><br>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List5 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="proteinListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>Griddled chicken with Greek salad</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">A light dish of grilled chicken fillets and authentic salad with Kalamata olives, feta cheese, tomato and mint<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Cook the quinoa following the pack instructions, then rinse in cold water and drain thoroughly.</li>
                                <li class="">Meanwhile, mix the butter, chilli and garlic into a paste. Toss the chicken fillets in 2 tsp of the olive oil with some seasoning.</li>
                                <li class="">Lay in a hot griddle pan and cook for 3-4 mins each side or until cooked through. </li>
                                <li class="">Transfer to a plate, dot with the spicy butter and set aside to melt.</li>
                                <li class="">Next, tip the tomatoes, olives, onion, feta and mint into a bowl. Toss in the cooked quinoa. Stir through the remaining olive oil, lemon juice and zest, and season well. Serve with the chicken fillets on top, drizzled with any buttery chicken juices.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="6Protein1" class="ingredientCheckbox"><label for="6Protein1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;225g quinoa</label><br>
                                        <input type="checkbox" id="6Protein2" class="ingredientCheckbox"><label for="6Protein2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;25g butter</label><br>
                                        <input type="checkbox" id="6Protein3" class="ingredientCheckbox"><label for="6Protein3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 red chilli, deseeded and finely chopped</label><br>
                                        <input type="checkbox" id="6Protein4" class="ingredientCheckbox"><label for="6Protein4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 garlic clove, crushed</label><br>
                                        <input type="checkbox" id="6Protein5" class="ingredientCheckbox"><label for="6Protein5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;400g chicken</label><br>
                                        <input type="checkbox" id="6Protein6" class="ingredientCheckbox"><label for="6Protein6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1½ tbsp extra-virgin olive oil</label><br>
                                        <input type="checkbox" id="6Protein7" class="ingredientCheckbox"><label for="6Protein7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;300g vine tomato, roughly chopped</label><br>
                                        <input type="checkbox" id="6Protein8" class="ingredientCheckbox"><label for="6Protein8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;handful pitted black kalamata olives</label><br>
                                        <input type="checkbox" id="6Protein9" class="ingredientCheckbox"><label for="6Protein9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 red onion, finely sliced</label><br>
                                        <input type="checkbox" id="6Protein10" class="ingredientCheckbox"><label for="6Protein10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;100g feta cheese, crumbled</label><br>
                                        <input type="checkbox" id="6Protein11" class="ingredientCheckbox"><label for="6Protein11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;small bunch mint</label><br>
                                        <input type="checkbox" id="6Protein12" class="ingredientCheckbox"><label for="6Protein12" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;juice and zest ½ lemon</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List6 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="proteinListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>Thai salmon kebabs &amp; lime dip</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">These Asian inspired salmon kebabs are a simple, easy to make, protein rich dish that is great for all occasions.If you’re not a fan of salmon then chicken works perfectly fine as well! Serve on a bed of rice or eat it right off the griddle (when it cools of course).<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Combine the sweet chilli sauce and lime juice in a bowl. Pour half the mixture into a bowl for serving. Thread the salmon onto 4 skewers and brush with the remaining chilli sauce. Marinate for 20 mins.</li>
                                <li class="">Heat a griddle pan until very hot. Shake excess marinade from the kebabs, then drizzle with oil, season and griddle for 8 mins, turning occasionally until the salmon is opaque and comes away easily from the pan. Serve hot with the dipping sauce.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="7Protein1" class="ingredientCheckbox"><label for="7Protein1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 tablespoon sweet chili sauce</label><br>
                                        <input type="checkbox" id="7Protein2" class="ingredientCheckbox"><label for="7Protein2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;juice of 1 lime</label><br>
                                        <input type="checkbox" id="7Protein3" class="ingredientCheckbox"><label for="7Protein3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 140g skinless salmon fillet, cut into large chunks</label><br>
                                        <input type="checkbox" id="7Protein4" class="ingredientCheckbox"><label for="7Protein4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;oil, for drizzling</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List7 Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
            ===============================================
            Cultural
            ===============================================
            -->
            <div id="culturalListContent">
                <div class="row displayNone" id="culturalListContent1">
                    <div class="col-md-8 borderLeft">
                        <h2>Chicken Tikka</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">This is an easy recipe for Chicken Tikka, marinated chicken in yogurt and spices and then served in a tomato cream sauce. Serve with rice or warm pita bread.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">In a large bowl, combine yogurt, lemon juice, 2 teaspoons cumin, cinnamon, cayenne, black pepper, ginger, and salt. Stir in chicken, cover, and refrigerate for 1 hour.</li>
                                <li class="">Preheat a grill for high heat.</li>
                                <li class="">Lightly oil the grill grate. Thread chicken onto skewers, and discard marinade. Grill until juices run clear, about 5 minutes on each side.</li>
                                <li class="">Melt butter in a large heavy skillet over medium heat. Saute garlic and jalapeno for 1 minute. Season with 2 teaspoons cumin, paprika, and 3 teaspoons salt. Stir in tomato sauce and cream. Simmer on low heat until sauce thickens, about 20 minutes. Add grilled chicken, and simmer for 10 minutes. Transfer to a serving platter, and garnish with fresh cilantro.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="1Cultural1" class="ingredientCheckbox"><label for="1Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 Cup Yogurt</label><br>
                                        <input type="checkbox" id="1Cultural2" class="ingredientCheckbox"><label for="1Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3/4 tsp Lemon Juice</label><br>
                                        <input type="checkbox" id="1Cultural3" class="ingredientCheckbox"><label for="1Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Fresh Ground Cumin</label><br>
                                        <input type="checkbox" id="1Cultural4" class="ingredientCheckbox"><label for="1Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Ground Cinnamon</label><br>
                                        <input type="checkbox" id="1Cultural5" class="ingredientCheckbox"><label for="1Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Cayenne Pepper</label><br>
                                        <input type="checkbox" id="1Cultural6" class="ingredientCheckbox"><label for="1Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3/4 tsp Minced Fresh Ginger</label><br>
                                        <input type="checkbox" id="1Cultural7" class="ingredientCheckbox"><label for="1Cultural7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3/4 Chicken Breasts</label><br>
                                        <input type="checkbox" id="1Cultural8" class="ingredientCheckbox"><label for="1Cultural8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Long Skewers</label><br>
                                        <input type="checkbox" id="1Cultural9" class="ingredientCheckbox"><label for="1Cultural9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3/4 tsp Butter</label><br>
                                        <input type="checkbox" id="1Cultural10" class="ingredientCheckbox"><label for="1Cultural10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 Minced Garlic</label><br>
                                        <input type="checkbox" id="1Cultural11" class="ingredientCheckbox"><label for="1Cultural11" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 Finely Chopped Jalapeno Pepper</label><br>
                                        <input type="checkbox" id="1Cultural12" class="ingredientCheckbox"><label for="1Cultural12" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Paprika</label><br>
                                        <input type="checkbox" id="1Cultural13" class="ingredientCheckbox"><label for="1Cultural13" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 can Tomato Sauce</label><br>
                                        <input type="checkbox" id="1Cultural14" class="ingredientCheckbox"><label for="1Cultural14" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 cup Heavy Cream</label><br>
                                        <input type="checkbox" id="1Cultural15" class="ingredientCheckbox"><label for="1Cultural15" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Chopped Fresh Cilantro</label><br>
                                        <input type="checkbox" id="1Cultural16" class="ingredientCheckbox"><label for="1Cultural16" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="1Cultural17" class="ingredientCheckbox"><label for="1Cultural17" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/culture1.jpg" alt="Chicken Tikka">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>Butter Chicken</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Butter chicken or murgh makhani is an Indian dish of chicken in a mildly spiced curry sauce. It is served in India and abroad. The dish has its roots in Punjabi cuisine and was developed by the Moti Mahal restaurant in Daryaganj Delhi, India.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Using 1/2 Tbsp of butter in a large skillet over medium-high heat, brown the pieces of the chicken so each side is browned. They do not need to be fully cooked all the way through. Work in batches, and set aside when you’re done.</li>
                                <li class="">Melt another 1/22 Tbsp of butter in the pan over medium heat. Add the onion, and cook until beginning to soften — about three minutes. Add the garlic, garam masala, ginger, chili powder, cumin, and cayenne. Stir to combine, and cook for about 45 seconds before adding the tomato sauce.</li>
                                <li class="">Bring the mixture to a simmer and let cook for five minutes before adding the cream. Bring the mixture back to a simmer, add the browned chicken, and let simmer for 10-15 minutes. Keep the heat low here — not a rolling boil.</li>
                                <li class="">Stir in the remaining 1/2 Tbsp of butter, and season with salt and pepper, to taste.</li>
                                <li class="">Serve garnished with lime and cilantro, alongside rice and naan.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="2Cultural1" class="ingredientCheckbox"><label for="2Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 1/2 tbsp Butter</label><br>
                                        <input type="checkbox" id="2Cultural2" class="ingredientCheckbox"><label for="2Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 lbs Chicken Breast</label><br>
                                        <input type="checkbox" id="2Cultural3" class="ingredientCheckbox"><label for="2Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 Diced Yellow Onion</label><br>
                                        <input type="checkbox" id="2Cultural4" class="ingredientCheckbox"><label for="2Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Minced Garlic Clove</label><br>
                                        <input type="checkbox" id="2Cultural5" class="ingredientCheckbox"><label for="2Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Garam Masala</label><br>
                                        <input type="checkbox" id="2Cultural6" class="ingredientCheckbox"><label for="2Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Fresh Grated Ginger</label><br>
                                        <input type="checkbox" id="2Cultural7" class="ingredientCheckbox"><label for="2Cultural7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Chili Powder</label><br>
                                        <input type="checkbox" id="2Cultural8" class="ingredientCheckbox"><label for="2Cultural8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Ground Cumin</label><br>
                                        <input type="checkbox" id="2Cultural9" class="ingredientCheckbox"><label for="2Cultural9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 tsp Cayenne Pepper</label><br>
                                        <input type="checkbox" id="2Cultural0" class="ingredientCheckbox"><label for="2Cultural0" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 1/2 cups Tomato Sauce</label><br>
                                        <input type="checkbox" id="2Cultural1" class="ingredientCheckbox"><label for="2Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 cups Cream</label><br>
                                        <input type="checkbox" id="2Cultural2" class="ingredientCheckbox"><label for="2Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;lime and cilantro, for garnish</label><br>
                                        <input type="checkbox" id="2Cultural3" class="ingredientCheckbox"><label for="2Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="2Cultural4" class="ingredientCheckbox"><label for="2Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/culture2.jpg" alt="Butter Chicken">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>Yang Chow</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Yangzhou fried rice or Yang Chow fried rice is a popular Chinese-style wok fried rice dish in many Chinese restaurants throughout the world. It is commonly sold in the UK as special fried rice and in the US as house fried rice.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Heat 2 tbsp of oil medium high heat in a wok. Add eggs and immedieately add 4 cups of cooked rice to the eggs.</li>
                                <li class="">Stir and cover each grain of rice with the egg, and continue to stir fry on high heat for 5 minutes or until the rice is seperated into individual grains.</li>
                                <li class="">Add the BBQ pork, shrimps, green onions and peas to the rice and continue to stir fry for 3 minutes.</li>
                                <li class="">Add light soy sauce and mix well. Serve immediately.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="3Cultural1" class="ingredientCheckbox"><label for="3Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;10 oz Diced BBQ Pork</label><br>
                                        <input type="checkbox" id="3Cultural2" class="ingredientCheckbox"><label for="3Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;30 Frozen Shrimp</label><br>
                                        <input type="checkbox" id="3Cultural3" class="ingredientCheckbox"><label for="3Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 cups Cooked Rice</label><br>
                                        <input type="checkbox" id="3Cultural4" class="ingredientCheckbox"><label for="3Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 Finely Chopped Green Onions</label><br>
                                        <input type="checkbox" id="3Cultural5" class="ingredientCheckbox"><label for="3Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 oz Green Peas</label><br>
                                        <input type="checkbox" id="3Cultural6" class="ingredientCheckbox"><label for="3Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;5 Beaten Eggs</label><br>
                                        <input type="checkbox" id="3Cultural7" class="ingredientCheckbox"><label for="3Cultural7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tsp Soy Sauce</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/culture3.jpg" alt="Yang Chow Fried Rice">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>Chow Mien</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Chow mein and in Chinese and Chinese English are stir-fried noodles, the name being the romanization of the Taishanese chāu-mèing. The dish is popular throughout the Chinese diaspora and appears on the menus of Chinese restaurants.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Marinate the chicken slices with 1 tsp of sugar and 1 tsp of dark soy sauce, for 1 hour. Keep in the refrigerator until later.</li>
                                <li class="">In a large pot, boil water and put noodles in and cook for 3 minutes. Drain and put aside.</li>
                                <li class="">In a wok, heat 2 tsp of oil and add in Ko-Le cabbege to cook until soft. Add 1/8 tsp of salt and stir fry for 2 minutes. Remove to a plate for later.</li>
                                <li class="">In the same wok, heat 2 tsp of oil and add the chicken slices and cooked on medium high heat for 7 minutes or until no more pink.</li>
                                <li class="">Add noodles to the wok and stir fry a bit. Add 2 tbsp of oyster to the noodles and chicken and stir fry for 2 minutes. Then add the cabbage and mix well. Serve immedietely.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="4Cultural1" class="ingredientCheckbox"><label for="4Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;7 oz Sliced Ko-Le Cabbage</label><br>
                                        <input type="checkbox" id="4Cultural2" class="ingredientCheckbox"><label for="4Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;10 oz Sliced Chicken Thigh</label><br>
                                        <input type="checkbox" id="4Cultural3" class="ingredientCheckbox"><label for="4Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;20 oz Shanghai Noodles</label><br>
                                        <input type="checkbox" id="4Cultural4" class="ingredientCheckbox"><label for="4Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Sugar</label><br>
                                        <input type="checkbox" id="4Cultural5" class="ingredientCheckbox"><label for="4Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Soy Sauce</label><br>
                                        <input type="checkbox" id="4Cultural6" class="ingredientCheckbox"><label for="4Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tbsp Oyster Sauce</label><br>
                                        <input type="checkbox" id="4Cultural7" class="ingredientCheckbox"><label for="4Cultural7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 tsp Oil</label><br>
                                        <input type="checkbox" id="4Cultural8" class="ingredientCheckbox"><label for="4Cultural8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/culture4.jpg" alt="Chow Mien">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>Bannock</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Bannock is a traditional Inuvialuit bread often served with butter and/or jam. You can try adding berries or raisins for added flavor. Pairs very well with soup or black tea.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Add flour, salt and baking powder into a large bowl and stir to mix.</li>
                                <li class="">Pour melted butter and water over flour mixture and stir with a fork to make a ball.</li>
                                <li class="">Turn dough out on a lightly floured surface and knead gently for approximately 10 times.</li>
                                <li class="">Shape into a circle about an inch thick.</li>
                                <li class="">Cook in a greased frying pan over medium heat for about 30 minutes, flip halfway through. It may also be baked on a greased baking sheet at 175 celsius for 25-30 minutes.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="5Cultural1" class="ingredientCheckbox"><label for="5Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;3 cups All-purpose Flour</label><br>
                                        <input type="checkbox" id="5Cultural2" class="ingredientCheckbox"><label for="5Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tbsp Baking Powder</label><br>
                                        <input type="checkbox" id="5Cultural3" class="ingredientCheckbox"><label for="5Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/4 cup Melted Butter</label><br>
                                        <input type="checkbox" id="5Cultural4" class="ingredientCheckbox"><label for="5Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 1/2 cups Water</label><br>
                                        <input type="checkbox" id="5Cultural5" class="ingredientCheckbox"><label for="5Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Salt</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/culture5.jpg" alt="List5 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>Quaq</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Quaq  is a inuvialuit traditional meal which consists of frozen meat usually caribou or fish. For the sake of availability this recipe will be using salmon. Traditionally a large piece of frozen fish/caribou is placed on a piece cardboard on the floor where anyone can come cut a piece off.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Place the salmon fillet in the freezer until it is completely frozen</li>
                                <li class="">Slice into thin strips and salt or dip into soy sauce to taste</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="6Cultural1" class="ingredientCheckbox"><label for="6Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 fillet Salmon</label><br>
                                        <input type="checkbox" id="6Cultural2" class="ingredientCheckbox"><label for="6Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Soy Sauce</label><br>
                                        <input type="checkbox" id="6Cultural3" class="ingredientCheckbox"><label for="6Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;Sea Salt</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/culture6.jpg" alt="Quaq">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>Eggs with Tomatoes</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">My parents being from China brought a lot of their knowledge of many traditional Chinese dishes to Canada. There were simple recipes and difficult recipes that included very foreign ingredients, but this dish is one of the best that anyone at home could make. It’s personally one of my favourites and a great dish to quickly make whenever I wanted to be reminded of my mother’s cooking.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">Beat eggs and add salt, pepper, sesame oil, and white half of green onion.</li>
                                <li class="">Add olive oil to pan and heat to medium.</li>
                                <li class="">Scramble eggs until they are still very runny (about 1 minute).</li>
                                <li class="">Take out the eggs and add olive oil and tomatoes to the pan.</li>
                                <li class="">Season tomatoes, add rice vinegar, a little sugar, cornstarch, and cook until there is a strong smell of tomatoes.</li>
                                <li class="">Add green half of green onions, the eggs, and toss with a little water.</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="7Cultural1" class="ingredientCheckbox"><label for="7Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 Sliced Tomatoes</label><br>
                                        <input type="checkbox" id="7Cultural2" class="ingredientCheckbox"><label for="7Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 Eggs</label><br>
                                        <input type="checkbox" id="7Cultural3" class="ingredientCheckbox"><label for="7Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Sesame Oil</label><br>
                                        <input type="checkbox" id="7Cultural4" class="ingredientCheckbox"><label for="7Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tsp Rice Vinegar</label><br>
                                        <input type="checkbox" id="7Cultural5" class="ingredientCheckbox"><label for="7Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tsp Cornstarch</label><br>
                                        <input type="checkbox" id="7Cultural6" class="ingredientCheckbox"><label for="7Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Chopped Green Onion</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/culture7.jpg" alt="Eggs with Tomatoes">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent8">
                    <div class="col-md-8 borderLeft">
                        <h2>Yakisoba Chicken</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">Japanese buckwheat flour noodles with chicken at their best! Noodles can be found in an Asian foods market.<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">1. In a large skillet combine sesame oil, canola oil and chili paste; stir-fry 30 seconds. Add garlic and stir fry an additional 30 seconds. Add chicken and 1/4 cup of the soy sauce and stir fry until chicken is no longer pink, about 5 minutes. Remove mixture from pan, set aside, and keep warm.</li>
                                <li class="">2. In the emptied pan combine the onion, cabbage, and carrots. Stir-fry until cabbage begins to wilt, 2 to 3 minutes. Stir in the remaining soy sauce, cooked noodles, and the chicken mixture to pan and mix to blend. Serve and enjoy!</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="8Cultural1" class="ingredientCheckbox"><label for="8Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;4 Cubed Chicken Breast</label><br>
                                        <input type="checkbox" id="8Cultural2" class="ingredientCheckbox"><label for="8Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 tsp Sesame Oil</label><br>
                                        <input type="checkbox" id="8Cultural3" class="ingredientCheckbox"><label for="8Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 tbsp Canola Oil</label><br>
                                        <input type="checkbox" id="8Cultural4" class="ingredientCheckbox"><label for="8Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 tbsp Chili Paste</label><br>
                                        <input type="checkbox" id="8Cultural5" class="ingredientCheckbox"><label for="8Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 cloves Chopped Garlic</label><br>
                                        <input type="checkbox" id="8Cultural6" class="ingredientCheckbox"><label for="8Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 cup Soy Sauce</label><br>
                                        <input type="checkbox" id="8Cultural7" class="ingredientCheckbox"><label for="8Cultural7" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1 Sliced Onion</label><br>
                                        <input type="checkbox" id="8Cultural8" class="ingredientCheckbox"><label for="8Cultural8" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;1/2 Chopped Cabbage</label><br>
                                        <input type="checkbox" id="8Cultural9" class="ingredientCheckbox"><label for="8Cultural9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;2 chopped Carrots</label><br>
                                        <input type="checkbox" id="8Cultural10" class="ingredientCheckbox"><label for="8Cultural10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;8 oz Soba Noodles</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/culture8.jpg" alt="Yakisoba Chicken">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent9">
                    <div class="col-md-8 borderLeft">
                        <h2>List 9</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">This is Cultural Content</li>
                                <li class="">This is Cultural Content</li>
                                <li class="">This is Cultural Content</li>
                                <li class="">This is Cultural Content</li>
                                <li class="">This is Cultural Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstCultural9" class="ingredientCheckbox"><label for="firstCultural9" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List9 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent10">
                    <div class="col-md-8 borderLeft">
                        <h2>List 10</h2>
                        <div class="col-md-6 noMargin">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">This is Cultural Content</li>
                                <li class="">This is Cultural Content</li>
                                <li class="">This is Cultural Content</li>
                                <li class="">This is Cultural Content</li>
                                <li class="">This is Cultural Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstCultural10" class="ingredientCheckbox"><label for="firstCultural10" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List10 Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- 
            ====================================
            Users Own
            ====================================
            -->
            <div id="userListContent">
                <div class="row displayNone" id="userListContent1">
                    <div class="col-md-8 borderLeft">
                        <h2>List 1</h2>
                        <div class="col-md-12">
                            <h4 class="h4margin">Recipe Description</h4>
                            <div class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></div>
                            <ol class="lessPadding">
                                <li class="">This is User Content</li>
                                <li class="">This is User Content</li>
                                <li class="">This is User Content</li>
                                <li class="">This is User Content</li>
                                <li class="">This is User Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstUser1" class="ingredientCheckbox"><label for="firstUser1" class="ingredientLabel"><span class="glyphicon glyphicon-unchecked"></span><span class="glyphicon glyphicon-check"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Add Items to List">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- NEED TO ADD NAME FOR EACH INPUT!!!!! -->
                <div class="row displayNone" id="userListContentCreate">
                    <form action="" method="post">
                    <div class="col-md-8 borderLeft">
                        <h2><input type="text" class="form-control" placeholder="Recipe Name" required></h2>
                        <div class="col-md-12">
                            <textarea class="recipetextarea form-control" placeholder="Short Recipe Description" rows="8"></textarea>
                                <input class="recipetextarea form-control inputSteps" type="text" placeholder="Enter the simple step" required>
                                <input class="recipetextarea form-control inputSteps" type="text" placeholder="Enter the simple step" required>
                                <input class="recipetextarea form-control inputSteps" type="text" placeholder="Enter the simple step" required>
                                <button type="button" id="addStepId" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;&nbsp;Add Step</button>
                                <button type="button" id="removeStepId" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i>&nbsp;&nbsp;Delete Step</button>
                            <br><br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="recipetextarea form-control inputIngredients" type="text" placeholder="Enter the ingredient" required>
                                        <input class="recipetextarea form-control inputIngredients" type="text" placeholder="Enter the ingredient" required>
                                        <input class="recipetextarea form-control inputIngredients" type="text" placeholder="Enter the ingredient" required>
                                        <button type="button" id="addIngredientId" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;&nbsp;Add Ingredient</button>
                                        <button type="button" id="removeIngredientId" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i>&nbsp;&nbsp;Delete Ingredient</button>
                                    </td>
                                </tr>
                            </table>
                                        <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </div>
                    </form>
                </div>
                <!-- END OF USER CONTENT BOX -->
            </div>

            </div>
        </main>
    </section>
    <!--<div class="home-footer mobileContentless">
            <div class="footerconstraint">
                <div class="bottomleftcolumn">
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../index.php#OurPurpose">Our Purpose</a></li>
                        <li><a href="../index.php#OurApps">About our Apps</a></li>

                    </ul>
                </div>
                <div class="middleleftcolumn">
                    <ul>
                        <li><a href="../ecolist/index.php">Shopping List</a></li>
                        <li><a href="../ecoeats/index.php">Meal Planner</a></li>
                        <li><a href="../donation/index.php">Donate Food</a></li>
                    </ul>
                </div>
                <div class="middlerightcolumn">
                    <ul>
                        <li><a href="../services/index.php">Affiliated Apps</a></li>
                        <li><a href="../index.php#AboutUs">About Us</a></li>
                        <li><a href="../index.php#AboutProject">About the Project</a></li>
                    </ul>
                </div>
                <div class="bottomrightcolumn">
                    <ul>
                        <li><a href="../users/index.php">Login</a></li>
                        <li><a href="../sitemap/index.php">Sitemap</a></li>
                    </ul>
                </div>
                <p>&copy; Copyright 2017 | EcoList, All Rights Reserved </p>
            </div>
        </div>-->
    </body>
</html>