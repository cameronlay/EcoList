<!DOCTYPE html>
<html lang="en">
<!-- 
    ====================================================
    PLEASE READ!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    WHEN YOU ARE ADDING RECIPES,
    THERE MIGHT BE A MERGE CONFLICT, SO JUST BE AWARE OF
    THAT.
    ADD EACH RECIPE STEP IN ONE LINE PLEASE!
    IF RECIPE STEPS ARE NOT EXACTLY 5, THERE MUST BE A 
    MERGE CONFLICT.
    OR INGREDIENTS AS WELL.
    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    ====================================================


     data-toggle="tooltip" title="Optional"
-->
    <head>
        <title>EcoList - Eco Eats</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Sunguk (Edmund) Ham">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <link rel="stylesheet" href="../Burgers.css"/>
        <script src="../hamburger.js"></script>
        <link rel="stylesheet" href="../index.css"/>
        <!-- making  -->
        <script>
            $(window).on("load", function() {
                $("#backgroundRecipe").fadeOut("fast");
                $(".wholeBody").fadeIn("fast");
            })

            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip(); 
            })
        </script>
    </head>
    <body onload="widthLessThan768();setBurger(true);">
    <div id="GUI">
        <?php
            include('../burgerMenuGUI.html');
        ?>
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
                    <h1>Eco Eats</h1>
                </div>
            </div>
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
                    <li id="classicList2" onclick="classicPillsClicked('classicList2', 'classicListContent2')"><a href="javascript:void(0);">ClassicLIST2</a></li>
                    <li id="classicList3" onclick="classicPillsClicked('classicList3', 'classicListContent3')"><a href="javascript:void(0);">ClassicLIST3</a></li>
                    <li id="classicList4" onclick="classicPillsClicked('classicList4', 'classicListContent4')"><a href="javascript:void(0);">ClassicLIST4</a></li>
                    <li id="classicList5" onclick="classicPillsClicked('classicList5', 'classicListContent5')"><a href="javascript:void(0);">ClassicLIST5</a></li>
                    <li id="classicList6" onclick="classicPillsClicked('classicList6', 'classicListContent6')"><a href="javascript:void(0);">ClassicLIST6</a></li>
                    <li id="classicList7" onclick="classicPillsClicked('classicList7', 'classicListContent7')"><a href="javascript:void(0);">ClassicLIST7</a></li>
                    <li id="classicList8" onclick="classicPillsClicked('classicList8', 'classicListContent8')"><a href="javascript:void(0);">ClassicLIST8</a></li>
                    <li id="classicList9" onclick="classicPillsClicked('classicList9', 'classicListContent9')"><a href="javascript:void(0);">ClassicLIST9</a></li>
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
                    <li id="vegetarianList6" onclick="vegetarianPillsClicked('vegetarianList6', 'vegetarianListContent6')"><a href="javascript:void(0);">VegetarianLIST6</a></li>
                    <li id="vegetarianList7" onclick="vegetarianPillsClicked('vegetarianList7', 'vegetarianListContent7')"><a href="javascript:void(0);">VegetarianLIST7</a></li>
                    <li id="vegetarianList8" onclick="vegetarianPillsClicked('vegetarianList8', 'vegetarianListContent8')"><a href="javascript:void(0);">VegetarianLIST8</a></li>
                    <li id="vegetarianList9" onclick="vegetarianPillsClicked('vegetarianList9', 'vegetarianListContent9')"><a href="javascript:void(0);">VegetarianLIST9</a></li>
                </ul>
            </div>
            <!--Keto List-->
            <div class="col-md-3 displayNone" id="ketoList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="ketoList1" class="active" onclick="ketoPillsClicked('ketoList1', 'ketoListContent1')"><a href="javascript:void(0);">Bacon Avocado Salad</a></li>
                    <li id="ketoList2" onclick="ketoPillsClicked('ketoList2', 'ketoListContent2')"><a href="javascript:void(0);">Baked Salmon</a></li>
                    <li id="ketoList3" onclick="ketoPillsClicked('ketoList3', 'ketoListContent3')"><a href="javascript:void(0);">Scrambled Eggs</a></li>
                    <li id="ketoList4" onclick="ketoPillsClicked('ketoList4', 'ketoListContent4')"><a href="javascript:void(0);">KetoLIST4</a></li>
                    <li id="ketoList5" onclick="ketoPillsClicked('ketoList5', 'ketoListContent5')"><a href="javascript:void(0);">KetoLIST5</a></li>
                    <li id="ketoList6" onclick="ketoPillsClicked('ketoList6', 'ketoListContent6')"><a href="javascript:void(0);">KetoLIST6</a></li>
                    <li id="ketoList7" onclick="ketoPillsClicked('ketoList7', 'ketoListContent7')"><a href="javascript:void(0);">KetoLIST7</a></li>
                    <li id="ketoList8" onclick="ketoPillsClicked('ketoList8', 'ketoListContent8')"><a href="javascript:void(0);">KetoLIST8</a></li>
                    <li id="ketoList9" onclick="ketoPillsClicked('ketoList9', 'ketoListContent9')"><a href="javascript:void(0);">KetoLIST9</a></li>
                </ul>
            </div>
            <!--Paleo List-->
            <div class="col-md-3 displayNone" id="paleoList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="paleoList1" class="active" onclick="paleoPillsClicked('paleoList1', 'paleoListContent1')"><a href="javascript:void(0);">Salmon with Vegetables</a></li>
                    <li id="paleoList2" onclick="paleoPillsClicked('paleoList2', 'paleoListContent2')"><a href="javascript:void(0);">paleoLIST2</a></li>
                    <li id="paleoList3" onclick="paleoPillsClicked('paleoList3', 'paleoListContent3')"><a href="javascript:void(0);">paleoLIST3</a></li>
                    <li id="paleoList4" onclick="paleoPillsClicked('paleoList4', 'paleoListContent4')"><a href="javascript:void(0);">paleoLIST4</a></li>
                    <li id="paleoList5" onclick="paleoPillsClicked('paleoList5', 'paleoListContent5')"><a href="javascript:void(0);">paleoLIST5</a></li>
                    <li id="paleoList6" onclick="paleoPillsClicked('paleoList6', 'paleoListContent6')"><a href="javascript:void(0);">paleoLIST6</a></li>
                    <li id="paleoList7" onclick="paleoPillsClicked('paleoList7', 'paleoListContent7')"><a href="javascript:void(0);">paleoLIST7</a></li>
                    <li id="paleoList8" onclick="paleoPillsClicked('paleoList8', 'paleoListContent8')"><a href="javascript:void(0);">paleoLIST8</a></li>
                    <li id="paleoList9" onclick="paleoPillsClicked('paleoList9', 'paleoListContent9')"><a href="javascript:void(0);">paleoLIST9</a></li>
                </ul>
            </div>
            <!--Protein Rich List-->
            <div class="col-md-3 displayNone" id="proteinList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="proteinList1" class="active" onclick="proteinPillsClicked('proteinList1', 'proteinListContent1')"><a href="javascript:void(0);">Mac and Cheese</a></li>
                    <li id="proteinList2" onclick="proteinPillsClicked('proteinList2', 'proteinListContent2')"><a href="javascript:void(0);">Braised Paprika Chicken</a></li>
                    <li id="proteinList3" onclick="proteinPillsClicked('proteinList3', 'proteinListContent3')"><a href="javascript:void(0);">proteinLIST3</a></li>
                    <li id="proteinList4" onclick="proteinPillsClicked('proteinList4', 'proteinListContent4')"><a href="javascript:void(0);">proteinLIST4</a></li>
                    <li id="proteinList5" onclick="proteinPillsClicked('proteinList5', 'proteinListContent5')"><a href="javascript:void(0);">proteinLIST5</a></li>
                    <li id="proteinList6" onclick="proteinPillsClicked('proteinList6', 'proteinListContent6')"><a href="javascript:void(0);">proteinLIST6</a></li>
                    <li id="proteinList7" onclick="proteinPillsClicked('proteinList7', 'proteinListContent7')"><a href="javascript:void(0);">proteinLIST7</a></li>
                    <li id="proteinList8" onclick="proteinPillsClicked('proteinList8', 'proteinListContent8')"><a href="javascript:void(0);">proteinLIST8</a></li>
                    <li id="proteinList9" onclick="proteinPillsClicked('proteinList9', 'proteinListContent9')"><a href="javascript:void(0);">proteinLIST9</a></li>
                </ul>
            </div>
		    <!-- Cultural List -->
		    <div class="col-md-3 displayNone" id="culturalList">
                <ul class="nav nav-pills nav-stacked">
                    <li id="culturalList1" class="active" onclick="culturalPillsClicked('culturalList1', 'culturalListContent1')"><a href="javascript:void(0);">Chicken Tikka - Punjabi</a></li>
                    <li id="culturalList2" onclick="culturalPillsClicked('culturalList2', 'culturalListContent2')"><a href="javascript:void(0);">Butter Chicken - Punjabi</a></li>
                    <li id="culturalList3" onclick="culturalPillsClicked('culturalList3', 'culturalListContent3')"><a href="javascript:void(0);">Yang Chow - Hong Kong</a></li>
                    <li id="culturalList4" onclick="culturalPillsClicked('culturalList4', 'culturalListContent4')"><a href="javascript:void(0);">Chow Mien - Hong Kong</a></li>
                    <li id="culturalList5" onclick="culturalPillsClicked('culturalList5', 'culturalListContent5')"><a href="javascript:void(0);">culturalLIST5</a></li>
                    <li id="culturalList6" onclick="culturalPillsClicked('culturalList6', 'culturalListContent6')"><a href="javascript:void(0);">culturalLIST6</a></li>
                    <li id="culturalList7" onclick="culturalPillsClicked('culturalList7', 'culturalListContent7')"><a href="javascript:void(0);">culturalLIST7</a></li>
                    <li id="culturalList8" onclick="culturalPillsClicked('culturalList8', 'culturalListContent8')"><a href="javascript:void(0);">culturalLIST8</a></li>
                    <li id="culturalList9" onclick="culturalPillsClicked('culturalList9', 'culturalListContent9')"><a href="javascript:void(0);">culturalLIST9</a></li>
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Gordon Ramsay’s method for cooking a perfect, yet simple fillet that pairs well with many sides of your liking.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="1classic1" class="ingredientCheckbox"><label for="1classic1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Fillet Steak</label><br>
                                        <input type="checkbox" id="1classic2" class="ingredientCheckbox"><label for="1classic2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="1classic3" class="ingredientCheckbox"><label for="1classic3" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Whole Garlic Clove</label><br>
                                        <input type="checkbox" id="1classic4" class="ingredientCheckbox"><label for="1classic4" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Herb Sprig</label><br>
                                        <input type="checkbox" id="1classic5" class="ingredientCheckbox"><label for="1classic5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="1classic6" class="ingredientCheckbox"><label for="1classic6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <h2>List 2</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstClassic1" class="ingredientCheckbox"><label for="firstClassic1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List2 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>List 3</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstClassic3" class="ingredientCheckbox"><label for="firstClassic3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List3 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>List 4</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstClassic4" class="ingredientCheckbox"><label for="firstClassic4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List4 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>List 5</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstClassic5" class="ingredientCheckbox"><label for="firstClassic5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="classicListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>List 6</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstClassic6" class="ingredientCheckbox"><label for="firstClassic6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstClassic7" class="ingredientCheckbox"><label for="firstClassic7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="classicListContent8">
                    <div class="col-md-8 borderLeft">
                        <h2>List 8</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstClassic8" class="ingredientCheckbox"><label for="firstClassic8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List8 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="classicListContent9">
                    <div class="col-md-8 borderLeft">
                        <h2>List 9</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstClassic9" class="ingredientCheckbox"><label for="firstClassic9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Sprout Salad is a very easy as well as a very healthy salad recipe. This salad made from moong sprouts is specially good for people who does not have much time for cooking or who does not know much.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="1Vegetarian1" class="ingredientCheckbox"><label for="1Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 cups Sprouted Mung Beans</label><br>
                                        <input type="checkbox" id="1Vegetarian2" class="ingredientCheckbox"><label for="1Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Finely Chopped Onion</label><br>
                                        <input type="checkbox" id="1Vegetarian3" class="ingredientCheckbox"><label for="1Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Finely Chopped Tomato</label><br>
                                        <input type="checkbox" id="1Vegetarian4" class="ingredientCheckbox"><label for="1Vegetarian4" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Finely Chopped Green Chilli</label><br>
                                        <input type="checkbox" id="1Vegetarian5" class="ingredientCheckbox"><label for="1Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Red Chilli Powder</label><br>
                                        <input type="checkbox" id="1Vegetarian6" class="ingredientCheckbox"><label for="1Vegetarian6" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 tsp Chaat Masala</label><br>
                                        <input type="checkbox" id="1Vegetarian7" class="ingredientCheckbox"><label for="1Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tsp Lemon Juice</label><br>
                                        <input type="checkbox" id="1Vegetarian8" class="ingredientCheckbox"><label for="1Vegetarian8" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Boiled Potato</label><br>
                                        <input type="checkbox" id="1Vegetarian9" class="ingredientCheckbox"><label for="1Vegetarian9" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Boiled Sweet Potato</label><br>
                                        <input type="checkbox" id="1Vegetarian10" class="ingredientCheckbox"><label for="1Vegetarian10" class="ingredientLabel" data-toggle="tooltip" title="Optional"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Coriander Leaves and Lemon Slices</label><br>
                                        <input type="checkbox" id="1Vegetarian11" class="ingredientCheckbox"><label for="1Vegetarian11" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">This egg curry is made by giving tempering and then adding ingredients like chopped onions and coconut paste and making a wonderful south indian egg curry that is perfect with rice or chapathi or paratha.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="2Vegetarian1" class="ingredientCheckbox"><label for="2Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;4 Boiled Eggs</label><br>
                                        <input type="checkbox" id="2Vegetarian2" class="ingredientCheckbox"><label for="2Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 Finely Chopped Onions</label><br>
                                        <input type="checkbox" id="2Vegetarian3" class="ingredientCheckbox"><label for="2Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 tbsp Oil</label><br>
                                        <input type="checkbox" id="2Vegetarian4" class="ingredientCheckbox"><label for="2Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 tsp Turmeric Powder</label><br>
                                        <input type="checkbox" id="2Vegetarian5" class="ingredientCheckbox"><label for="2Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 tsp Kashmiri Red Chilli Powder</label><br>
                                        <input type="checkbox" id="2Vegetarian6" class="ingredientCheckbox"><label for="2Vegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tsp Coriander Powder</label><br>
                                        <input type="checkbox" id="2Vegetarian7" class="ingredientCheckbox"><label for="2Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tbsp Ginger-garlic Paste</label><br>
                                        <input type="checkbox" id="2Vegetarian8" class="ingredientCheckbox"><label for="2Vegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3 Pureed Tomatoes</label><br>
                                        <input type="checkbox" id="2Vegetarian9" class="ingredientCheckbox"><label for="2Vegetarian9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 tbsp Finely Chopped Fresh coriander leaves</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Quiche is a quick and versatile dish that is so easy to make. Fresh wild fiddle heads are in season and go really well in a quiche, or simply add any veggies you have laying around!<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="3Vegetarian1" class="ingredientCheckbox"><label for="3Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1x9" unbaked deep dish pie crust</label><br>
                                        <input type="checkbox" id="3Vegetarian2" class="ingredientCheckbox"><label for="3Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="3Vegetarian3" class="ingredientCheckbox"><label for="3Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 cup Sliced Onions</label><br>
                                        <input type="checkbox" id="3Vegetarian4" class="ingredientCheckbox"><label for="3Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 cup Chopped Green Bell Peppers</label><br>
                                        <input type="checkbox" id="3Vegetarian5" class="ingredientCheckbox"><label for="3Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 cup Sliced Mushrooms</label><br>
                                        <input type="checkbox" id="3Vegetarian6" class="ingredientCheckbox"><label for="3Vegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 cup Sliced Zucchini</label><br>
                                        <input type="checkbox" id="3Vegetarian7" class="ingredientCheckbox"><label for="3Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Sliced Tomato</label><br>
                                        <input type="checkbox" id="3Vegetarian8" class="ingredientCheckbox"><label for="3Vegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 tbsp All-purpose Flour</label><br>
                                        <input type="checkbox" id="3Vegetarian9" class="ingredientCheckbox"><label for="3Vegetarian9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 tbsp Dried Basil</label><br>
                                        <input type="checkbox" id="3Vegetarian10" class="ingredientCheckbox"><label for="3Vegetarian10" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3 Beaten Eggs</label><br>
                                        <input type="checkbox" id="3Vegetarian11" class="ingredientCheckbox"><label for="3Vegetarian11" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 cup Milk</label><br>
                                        <input type="checkbox" id="3Vegetarian12" class="ingredientCheckbox"><label for="3Vegetarian12" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 1/2 Shredded Colby-Monterey Jack Cheese</label><br>
                                        <input type="checkbox" id="3Vegetarian13" class="ingredientCheckbox"><label for="3Vegetarian13" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="3Vegetarian14" class="ingredientCheckbox"><label for="3Vegetarian14" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">This quick and easy side dish is a real delight. Frozen spinach is suggested here as it is more economical and speedy to prepare, but you can substitute it with finely chopped fresh spinach, if you prefer.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="4Vegetarian1" class="ingredientCheckbox"><label for="4Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 oz Spinach</label><br>
                                        <input type="checkbox" id="4Vegetarian2" class="ingredientCheckbox"><label for="4Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 clove Garlic</label><br>
                                        <input type="checkbox" id="4Vegetarian3" class="ingredientCheckbox"><label for="4Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3 oz Greek Yoghurt</label><br>
                                        <input type="checkbox" id="4Vegetarian4" class="ingredientCheckbox"><label for="4Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Olive Oil</label><br>
                                        <input type="checkbox" id="4Vegetarian5" class="ingredientCheckbox"><label for="4Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 oz raisins</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Using a variety of tomatoes brings a depth of flavour and great colour to this dish. This dish is very simple, harmonizing the flavour of tomatoes, garlic, basil and olive oil. Courtesy of Kristen Eppich.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="5Vegetarian1" class="ingredientCheckbox"><label for="5Vegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 lb Tomatoes</label><br>
                                        <input type="checkbox" id="5Vegetarian2" class="ingredientCheckbox"><label for="5Vegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 clove Sliced Garlic</label><br>
                                        <input type="checkbox" id="5Vegetarian3" class="ingredientCheckbox"><label for="5Vegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Chili Flakes</label><br>
                                        <input type="checkbox" id="5Vegetarian4" class="ingredientCheckbox"><label for="5Vegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 Olive Oil</label><br>
                                        <input type="checkbox" id="5Vegetarian5" class="ingredientCheckbox"><label for="5Vegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 cup Basil Leaves</label><br>
                                        <input type="checkbox" id="5Vegetarian6" class="ingredientCheckbox"><label for="5Vegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;5 oz Fettuccine</label><br>
                                        <input type="checkbox" id="5Vegetarian7" class="ingredientCheckbox"><label for="5Vegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="5Vegetarian8" class="ingredientCheckbox"><label for="5Vegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <h2>List 6</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstVegetarian6" class="ingredientCheckbox"><label for="firstVegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="vegetarianListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>List 7</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstVegetarian7" class="ingredientCheckbox"><label for="firstVegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="vegetarianListContent8">
                    <div class="col-md-8 borderLeft">
                        <h2>List 8</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstVegetarian8" class="ingredientCheckbox"><label for="firstVegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List8 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="vegetarianListContent9">
                    <div class="col-md-8 borderLeft">
                        <h2>List 9</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                                <li class="">This is Vegetarian Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstVegetarian9" class="ingredientCheckbox"><label for="firstVegetarian9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">A delicious and strict low-carb salad for those who love avocados, goat cheese and nuts. Great for lunch or as a light dinner.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="1Keto1" class="ingredientCheckbox"><label for="1Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 oz Goat Cheese</label><br>
                                        <input type="checkbox" id="1Keto2" class="ingredientCheckbox"><label for="1Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 oz Bacon</label><br>
                                        <input type="checkbox" id="1Keto3" class="ingredientCheckbox"><label for="1Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 Avocado</label><br>
                                        <input type="checkbox" id="1Keto4" class="ingredientCheckbox"><label for="1Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 oz Walnuts</label><br>
                                        <input type="checkbox" id="1Keto5" class="ingredientCheckbox"><label for="1Keto5" class="ingredientLabel" data-toggle="tooltip" title="Or just Lettuce"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 oz Arugula Lettuce</label><br>
                                        <input type="checkbox" id="1Keto6" class="ingredientCheckbox"><label for="1Keto6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/8 Lemon Juice</label><br>
                                        <input type="checkbox" id="1Keto7" class="ingredientCheckbox"><label for="1Keto7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 3/4 tbsp Mayonnaise</label><br>
                                        <input type="checkbox" id="1Keto8" class="ingredientCheckbox"><label for="1Keto8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 3/4 tbsp Olive Oil</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">This lip-smacking Lemon Butter Salmon from Karla Seville of Waynesboro, Pennsylvania makes for an easy, breezy supper to serve family or friends out on the patio some warm night. As an extra-special touch, you might add a 4-ounce package of salad shrimp to the remaining lemon butter, then spoon over the salmon before serving.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="2Keto1" class="ingredientCheckbox"><label for="2Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 tsp Olive Oil</label><br>
                                        <input type="checkbox" id="2Keto2" class="ingredientCheckbox"><label for="2Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;6-8 oz Salmon</label><br>
                                        <input type="checkbox" id="2Keto3" class="ingredientCheckbox"><label for="2Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 1/4 oz Butter</label><br>
                                        <input type="checkbox" id="2Keto4" class="ingredientCheckbox"><label for="2Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/6 Lemon</label><br>
                                        <input type="checkbox" id="2Keto5" class="ingredientCheckbox"><label for="2Keto5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="2Keto6" class="ingredientCheckbox"><label for="2Keto6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Butter plus eggs equals the perfect breakfast. Start your day off right with our especially buttery and satisfying version of this breakfast classic. Ready in minutes!<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="3Keto1" class="ingredientCheckbox"><label for="3Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3 Eggs</label><br>
                                        <input type="checkbox" id="3Keto2" class="ingredientCheckbox"><label for="3Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 oz Butter</label><br>
                                        <input type="checkbox" id="3Keto3" class="ingredientCheckbox"><label for="3Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/6 Lemon</label><br>
                                        <input type="checkbox" id="3Keto4" class="ingredientCheckbox"><label for="3Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="3Keto5" class="ingredientCheckbox"><label for="3Keto5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="images/keto3.jpg" alt="List3 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="ketoListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>List 4</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstKeto4" class="ingredientCheckbox"><label for="firstKeto4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List4 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="ketoListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>List 5</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstKeto5" class="ingredientCheckbox"><label for="firstKeto5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="ketoListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>List 6</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstKeto6" class="ingredientCheckbox"><label for="firstKeto6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="ketoListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>List 7</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstKeto7" class="ingredientCheckbox"><label for="firstKeto7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="ketoListContent8">
                    <div class="col-md-8 borderLeft">
                        <h2>List 8</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstKeto8" class="ingredientCheckbox"><label for="firstKeto8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List8 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="ketoListContent9">
                    <div class="col-md-8 borderLeft">
                        <h2>List 9</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstKeto9" class="ingredientCheckbox"><label for="firstKeto9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Chopped cucumbers, tomatoes, and crunchy red onions are a classic chopped salad base for a simple vinaigrette and some fresh herbs. But top them off here with some smoked salmon for even more flavor: the fish has an intensity that goes nicely with the vegetables, and the color is striking.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="1paleo1" class="ingredientCheckbox"><label for="1paleo1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;4 oz Smoked Salmon</label><br>
                                        <input type="checkbox" id="1paleo2" class="ingredientCheckbox"><label for="1paleo2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 cup Tomatoes</label><br>
                                        <input type="checkbox" id="1paleo3" class="ingredientCheckbox"><label for="1paleo3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 Chopped Cucumber</label><br>
                                        <input type="checkbox" id="1paleo4" class="ingredientCheckbox"><label for="1paleo4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 Sliced Onion</label><br>
                                        <input type="checkbox" id="1paleo5" class="ingredientCheckbox"><label for="1paleo5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="1paleo6" class="ingredientCheckbox"><label for="1paleo6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tbsp Lemon Juice</label><br>
                                        <input type="checkbox" id="1paleo7" class="ingredientCheckbox"><label for="1paleo7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp minced Garlic</label><br>
                                        <input type="checkbox" id="1paleo8" class="ingredientCheckbox"><label for="1paleo8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 tsp Balsamic Vinegar</label><br>
                                        <input type="checkbox" id="1paleo9" class="ingredientCheckbox"><label for="1paleo9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Dried Oregano</label><br>
                                        <input type="checkbox" id="1paleo10" class="ingredientCheckbox"><label for="1paleo10" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Minced Dill</label><br>
                                        <input type="checkbox" id="1paleo11" class="ingredientCheckbox"><label for="1paleo11" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="1paleo12" class="ingredientCheckbox"><label for="1paleo12" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <h2>List 2</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstPaleo2" class="ingredientCheckbox"><label for="firstPaleo2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List2 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>List 3</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstPaleo3" class="ingredientCheckbox"><label for="firstPaleo3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List3 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>List 1</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstPaleo4" class="ingredientCheckbox"><label for="firstPaleo4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List4 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>List 5</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstPaleo5" class="ingredientCheckbox"><label for="firstPaleo5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="paleoListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>List 6</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstPaleo6" class="ingredientCheckbox"><label for="firstPaleo6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="paleoListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>List 7</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstPaleo7" class="ingredientCheckbox"><label for="firstPaleo7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="paleoListContent8">
                    <div class="col-md-8 borderLeft">
                        <h2>List 8</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstPaleo8" class="ingredientCheckbox"><label for="firstPaleo8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List8 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="paleoListContent9">
                    <div class="col-md-8 borderLeft">
                        <h2>List 9</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                                <li class="">This is Paleo Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstPaleo9" class="ingredientCheckbox"><label for="firstPaleo9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Mac and cheese can be a true comfort on a gloomy day, and our healthy update takes advantage of extra-sharp Cheddar balanced with creamy low-fat cottage cheese and tucks a layer of spinach into the middle, which may help picky eaters down their vegetables. Whole-wheat pasta adds robust flavor and extra fiber.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="1protein1" class="ingredientCheckbox"><label for="1protein1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tbsp Dry Breadcrumbs</label><br>
                                        <input type="checkbox" id="1protein2" class="ingredientCheckbox"><label for="1protein2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Olive Oil</label><br>
                                        <input type="checkbox" id="1protein3" class="ingredientCheckbox"><label for="1protein3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Paprika</label><br>
                                        <input type="checkbox" id="1protein4" class="ingredientCheckbox"><label for="1protein4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3 oz Frozen Spinach</label><br>
                                        <input type="checkbox" id="1protein5" class="ingredientCheckbox"><label for="1protein5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 cup Milk</label><br>
                                        <input type="checkbox" id="1protein6" class="ingredientCheckbox"><label for="1protein6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tbsp All-purpose Flour</label><br>
                                        <input type="checkbox" id="1protein7" class="ingredientCheckbox"><label for="1protein7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 cup Shredded Cheddar Cheese</label><br>
                                        <input type="checkbox" id="1protein8" class="ingredientCheckbox"><label for="1protein8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 cup Cottage Cheese</label><br>
                                        <input type="checkbox" id="1protein9" class="ingredientCheckbox"><label for="1protein9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 cups Macaroni or Penne</label><br>
                                        <input type="checkbox" id="1protein10" class="ingredientCheckbox"><label for="1protein10" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="1protein11" class="ingredientCheckbox"><label for="1protein11" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Sweet Hungarian paprika gives this creamy braised chicken the best flavor. This is a good “pantry dish” since you should have the basics on hand and only need to purchase the chicken. You may vary the recipe by using cubed veal shoulder instead of chicken and mushrooms instead of peppers. Serve with whole-wheat orzo flavored with minced parsley or dill.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="2protein1" class="ingredientCheckbox"><label for="2protein1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 lb Chicken</label><br>
                                        <input type="checkbox" id="2protein2" class="ingredientCheckbox"><label for="2protein2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 tbsp Olive Oil</label><br>
                                        <input type="checkbox" id="2protein3" class="ingredientCheckbox"><label for="2protein3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tbsp Butter</label><br>
                                        <input type="checkbox" id="2protein4" class="ingredientCheckbox"><label for="2protein4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 cup Finely Diced Onion</label><br>
                                        <input type="checkbox" id="2protein5" class="ingredientCheckbox"><label for="2protein5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Pinch of Sugar</label><br>
                                        <input type="checkbox" id="2protein6" class="ingredientCheckbox"><label for="2protein6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 cup Diced Red Bell Pepper</label><br>
                                        <input type="checkbox" id="2protein7" class="ingredientCheckbox"><label for="2protein7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/8 cup Diced Green Bell Pepper</label><br>
                                        <input type="checkbox" id="2protein8" class="ingredientCheckbox"><label for="2protein8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tbsp Tomato Paste</label><br>
                                        <input type="checkbox" id="2protein9" class="ingredientCheckbox"><label for="2protein9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tbsp Sweet Paprika</label><br>
                                        <input type="checkbox" id="2protein10" class="ingredientCheckbox"><label for="2protein10" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Cushed Red Pepper</label><br>
                                        <input type="checkbox" id="2protein11" class="ingredientCheckbox"><label for="2protein11" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Dried Marjoram</label><br>
                                        <input type="checkbox" id="2protein12" class="ingredientCheckbox"><label for="2protein12" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 cup Chicken Broth</label><br>
                                        <input type="checkbox" id="2protein13" class="ingredientCheckbox"><label for="2protein13" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/8 cup Sour Cream</label><br>
                                        <input type="checkbox" id="2protein14" class="ingredientCheckbox"><label for="2protein14" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tbsp All-purpose Flour</label><br>
                                        <input type="checkbox" id="2protein15" class="ingredientCheckbox"><label for="2protein15" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tbsp Finely Minced Parsley, Dill or Chives</label><br>
                                        <input type="checkbox" id="2protein16" class="ingredientCheckbox"><label for="2protein16" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="2protein17" class="ingredientCheckbox"><label for="2protein17" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <h2>List 3</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstProtein3" class="ingredientCheckbox"><label for="firstProtein3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List3 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="proteinListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>List 4</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstProtein4" class="ingredientCheckbox"><label for="firstProtein4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List4 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="proteinListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>List 5</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstProtein5" class="ingredientCheckbox"><label for="firstProtein5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <h2>List 6</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstProtein6" class="ingredientCheckbox"><label for="firstProtein6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <h2>List 7</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstProtein7" class="ingredientCheckbox"><label for="firstProtein7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="proteinListContent8">
                    <div class="col-md-8 borderLeft">
                        <h2>List 8</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstProtein8" class="ingredientCheckbox"><label for="firstProtein8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List8 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="proteinListContent9">
                    <div class="col-md-8 borderLeft">
                        <h2>List 9</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                                <li class="">This is Protein Content</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="firstProtein9" class="ingredientCheckbox"><label for="firstProtein9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">This is an easy recipe for Chicken Tikka, marinated chicken in yogurt and spices and then served in a tomato cream sauce. Serve with rice or warm pita bread.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="1Cultural1" class="ingredientCheckbox"><label for="1Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 Cup Yogurt</label><br>
                                        <input type="checkbox" id="1Cultural2" class="ingredientCheckbox"><label for="1Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3/4 tsp Lemon Juice</label><br>
                                        <input type="checkbox" id="1Cultural3" class="ingredientCheckbox"><label for="1Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 tsp Fresh Ground Cumin</label><br>
                                        <input type="checkbox" id="1Cultural4" class="ingredientCheckbox"><label for="1Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Ground Cinnamon</label><br>
                                        <input type="checkbox" id="1Cultural5" class="ingredientCheckbox"><label for="1Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 tsp Cayenne Pepper</label><br>
                                        <input type="checkbox" id="1Cultural6" class="ingredientCheckbox"><label for="1Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3/4 tsp Minced Fresh Ginger</label><br>
                                        <input type="checkbox" id="1Cultural7" class="ingredientCheckbox"><label for="1Cultural7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3/4 Chicken Breasts</label><br>
                                        <input type="checkbox" id="1Cultural8" class="ingredientCheckbox"><label for="1Cultural8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Long Skewers</label><br>
                                        <input type="checkbox" id="1Cultural9" class="ingredientCheckbox"><label for="1Cultural9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3/4 tsp Butter</label><br>
                                        <input type="checkbox" id="1Cultural10" class="ingredientCheckbox"><label for="1Cultural10" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 Minced Garlic</label><br>
                                        <input type="checkbox" id="1Cultural11" class="ingredientCheckbox"><label for="1Cultural11" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 Finely Chopped Jalapeno Pepper</label><br>
                                        <input type="checkbox" id="1Cultural12" class="ingredientCheckbox"><label for="1Cultural12" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 tsp Paprika</label><br>
                                        <input type="checkbox" id="1Cultural13" class="ingredientCheckbox"><label for="1Cultural13" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 can Tomato Sauce</label><br>
                                        <input type="checkbox" id="1Cultural14" class="ingredientCheckbox"><label for="1Cultural14" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 cup Heavy Cream</label><br>
                                        <input type="checkbox" id="1Cultural15" class="ingredientCheckbox"><label for="1Cultural15" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tbsp Chopped Fresh Cilantro</label><br>
                                        <input type="checkbox" id="1Cultural16" class="ingredientCheckbox"><label for="1Cultural16" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="1Cultural17" class="ingredientCheckbox"><label for="1Cultural17" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Butter chicken or murgh makhani is an Indian dish of chicken in a mildly spiced curry sauce. It is served in India and abroad. The dish has its roots in Punjabi cuisine and was developed by the Moti Mahal restaurant in Daryaganj Delhi, India.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="2Cultural1" class="ingredientCheckbox"><label for="2Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 1/2 tbsp Butter</label><br>
                                        <input type="checkbox" id="2Cultural2" class="ingredientCheckbox"><label for="2Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/2 lbs Chicken Breast</label><br>
                                        <input type="checkbox" id="2Cultural3" class="ingredientCheckbox"><label for="2Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 Diced Yellow Onion</label><br>
                                        <input type="checkbox" id="2Cultural4" class="ingredientCheckbox"><label for="2Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 Minced Garlic Clove</label><br>
                                        <input type="checkbox" id="2Cultural5" class="ingredientCheckbox"><label for="2Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tsp Garam Masala</label><br>
                                        <input type="checkbox" id="2Cultural6" class="ingredientCheckbox"><label for="2Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tsp Fresh Grated Ginger</label><br>
                                        <input type="checkbox" id="2Cultural7" class="ingredientCheckbox"><label for="2Cultural7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Chili Powder</label><br>
                                        <input type="checkbox" id="2Cultural8" class="ingredientCheckbox"><label for="2Cultural8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Ground Cumin</label><br>
                                        <input type="checkbox" id="2Cultural9" class="ingredientCheckbox"><label for="2Cultural9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1/4 tsp Cayenne Pepper</label><br>
                                        <input type="checkbox" id="2Cultural0" class="ingredientCheckbox"><label for="2Cultural0" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 1/2 cups Tomato Sauce</label><br>
                                        <input type="checkbox" id="2Cultural1" class="ingredientCheckbox"><label for="2Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 cups Cream</label><br>
                                        <input type="checkbox" id="2Cultural2" class="ingredientCheckbox"><label for="2Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;lime and cilantro, for garnish</label><br>
                                        <input type="checkbox" id="2Cultural3" class="ingredientCheckbox"><label for="2Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="checkbox" id="2Cultural4" class="ingredientCheckbox"><label for="2Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Ground Black Pepper</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Yangzhou fried rice or Yang Chow fried rice is a popular Chinese-style wok fried rice dish in many Chinese restaurants throughout the world. It is commonly sold in the UK as special fried rice and in the US as house fried rice.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="3Cultural1" class="ingredientCheckbox"><label for="3Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;10 oz Diced BBQ Pork</label><br>
                                        <input type="checkbox" id="3Cultural2" class="ingredientCheckbox"><label for="3Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;30 Frozen Shrimp</label><br>
                                        <input type="checkbox" id="3Cultural3" class="ingredientCheckbox"><label for="3Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;4 cups Cooked Rice</label><br>
                                        <input type="checkbox" id="3Cultural4" class="ingredientCheckbox"><label for="3Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 Finely Chopped Green Onions</label><br>
                                        <input type="checkbox" id="3Cultural5" class="ingredientCheckbox"><label for="3Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;3 oz Green Peas</label><br>
                                        <input type="checkbox" id="3Cultural6" class="ingredientCheckbox"><label for="3Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;5 Beaten Eggs</label><br>
                                        <input type="checkbox" id="3Cultural7" class="ingredientCheckbox"><label for="3Cultural7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 tsp Soy Sauce</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">Chow mein and in Chinese and Chinese English are stir-fried noodles, the name being the romanization of the Taishanese chāu-mèing. The dish is popular throughout the Chinese diaspora and appears on the menus of Chinese restaurants.<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="4Cultural1" class="ingredientCheckbox"><label for="4Cultural1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;7 oz Sliced Ko-Le Cabbage</label><br>
                                        <input type="checkbox" id="4Cultural2" class="ingredientCheckbox"><label for="4Cultural2" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;10 oz Sliced Chicken Thigh</label><br>
                                        <input type="checkbox" id="4Cultural3" class="ingredientCheckbox"><label for="4Cultural3" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;20 oz Shanghai Noodles</label><br>
                                        <input type="checkbox" id="4Cultural4" class="ingredientCheckbox"><label for="4Cultural4" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tsp Sugar</label><br>
                                        <input type="checkbox" id="4Cultural5" class="ingredientCheckbox"><label for="4Cultural5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;1 tsp Soy Sauce</label><br>
                                        <input type="checkbox" id="4Cultural6" class="ingredientCheckbox"><label for="4Cultural6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;2 tbsp Oyster Sauce</label><br>
                                        <input type="checkbox" id="4Cultural7" class="ingredientCheckbox"><label for="4Cultural7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;4 tsp Oil</label><br>
                                        <input type="checkbox" id="4Cultural8" class="ingredientCheckbox"><label for="4Cultural8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;Sea Salt</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <h2>List 5</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstCultural5" class="ingredientCheckbox"><label for="firstCultural5" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="culturalListContent6">
                    <div class="col-md-8 borderLeft">
                        <h2>List 6</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstCultural6" class="ingredientCheckbox"><label for="firstCultural6" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="culturalListContent7">
                    <div class="col-md-8 borderLeft">
                        <h2>List 7</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstCultural7" class="ingredientCheckbox"><label for="firstCultural7" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                <div class="row displayNone" id="culturalListContent8">
                    <div class="col-md-8 borderLeft">
                        <h2>List 8</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstCultural8" class="ingredientCheckbox"><label for="firstCultural8" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List8 Image">
                        </div>
                    </div>
                </div>
                <div class="row displayNone" id="culturalListContent9">
                    <div class="col-md-8 borderLeft">
                        <h2>List 9</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstCultural9" class="ingredientCheckbox"><label for="firstCultural9" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
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
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
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
                                        <input type="checkbox" id="firstUser1" class="ingredientCheckbox"><label for="firstUser1" class="ingredientLabel"><span class="glyphicon glyphicon-remove-circle"></span><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-info" value="Save">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <img class="recipeImage" src="haha.jpg" alt="List1 Image">
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

        </main>
    </section>
    </body>
</html>