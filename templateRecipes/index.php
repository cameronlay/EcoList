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
-->
    <head>
        <title>EcoList - Meal Plan</title>
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
                    <li id="classicList1" class="active" onclick="classicPillsClicked('classicList1', 'classicListContent1')"><a href="javascript:void(0);">ClassicLIST1</a></li>
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
                    <li id="vegetarianList1" class="active" onclick="vegetarianPillsClicked('vegetarianList1', 'vegetarianListContent1')"><a href="javascript:void(0);">VegetarianLIST1</a></li>
                    <li id="vegetarianList2" onclick="vegetarianPillsClicked('vegetarianList2', 'vegetarianListContent2')"><a href="javascript:void(0);">VegetarianLIST2</a></li>
                    <li id="vegetarianList3" onclick="vegetarianPillsClicked('vegetarianList3', 'vegetarianListContent3')"><a href="javascript:void(0);">VegetarianLIST3</a></li>
                    <li id="vegetarianList4" onclick="vegetarianPillsClicked('vegetarianList4', 'vegetarianListContent4')"><a href="javascript:void(0);">VegetarianLIST4</a></li>
                    <li id="vegetarianList5" onclick="vegetarianPillsClicked('vegetarianList5', 'vegetarianListContent5')"><a href="javascript:void(0);">VegetarianLIST5</a></li>
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
                    <li id="paleoList1" class="active" onclick="paleoPillsClicked('paleoList1', 'paleoListContent1')"><a href="javascript:void(0);">paleoLIST1</a></li>
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
                    <li id="proteinList1" class="active" onclick="proteinPillsClicked('proteinList1', 'proteinListContent1')"><a href="javascript:void(0);">proteinLIST1</a></li>
                    <li id="proteinList2" onclick="proteinPillsClicked('proteinList2', 'proteinListContent2')"><a href="javascript:void(0);">proteinLIST2</a></li>
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
                    <li id="culturalList1" class="active" onclick="culturalPillsClicked('culturalList1', 'culturalListContent1')"><a href="javascript:void(0);">culturalLIST1</a></li>
                    <li id="culturalList2" onclick="culturalPillsClicked('culturalList2', 'culturalListContent2')"><a href="javascript:void(0);">culturalLIST2</a></li>
                    <li id="culturalList3" onclick="culturalPillsClicked('culturalList3', 'culturalListContent3')"><a href="javascript:void(0);">culturalLIST3</a></li>
                    <li id="culturalList4" onclick="culturalPillsClicked('culturalList4', 'culturalListContent4')"><a href="javascript:void(0);">culturalLIST4</a></li>
                    <li id="culturalList5" onclick="culturalPillsClicked('culturalList5', 'culturalListContent5')"><a href="javascript:void(0);">culturalLIST5</a></li>
                    <li id="culturalList6" onclick="culturalPillsClicked('culturalList6', 'culturalListContent6')"><a href="javascript:void(0);">culturalLIST6</a></li>
                    <li id="culturalList7" onclick="culturalPillsClicked('culturalList7', 'culturalListContent7')"><a href="javascript:void(0);">culturalLIST7</a></li>
                    <li id="culturalList8" onclick="culturalPillsClicked('culturalList8', 'culturalListContent8')"><a href="javascript:void(0);">culturalLIST8</a></li>
                    <li id="culturalList9" onclick="culturalPillsClicked('culturalList9', 'culturalListContent9')"><a href="javascript:void(0);">culturalLIST9</a></li>
                </ul>
            </div>
            <!-- user List -->
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
                        <h2>List 1</h2>
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
                                        <input type="checkbox" id="first" class="ingredientCheckbox"><label for="first" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstClassic1" class="ingredientCheckbox"><label for="firstClassic1" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstClassic3" class="ingredientCheckbox"><label for="firstClassic3" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstClassic4" class="ingredientCheckbox"><label for="firstClassic4" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstClassic5" class="ingredientCheckbox"><label for="firstClassic5" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstClassic6" class="ingredientCheckbox"><label for="firstClassic6" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstClassic7" class="ingredientCheckbox"><label for="firstClassic7" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstClassic8" class="ingredientCheckbox"><label for="firstClassic8" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstClassic9" class="ingredientCheckbox"><label for="firstClassic9" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                        <h2>List 1</h2>
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
                                        <input type="checkbox" id="firstVegetarian1" class="ingredientCheckbox"><label for="firstVegetarian1" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="vegetarianListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>List 2</h2>
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
                                        <input type="checkbox" id="firstVegetarian2" class="ingredientCheckbox"><label for="firstVegetarian2" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="vegetarianListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>List 3</h2>
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
                                        <input type="checkbox" id="firstVegetarian3" class="ingredientCheckbox"><label for="firstVegetarian3" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="vegetarianListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>List 4</h2>
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
                                        <input type="checkbox" id="firstVegetarian4" class="ingredientCheckbox"><label for="firstVegetarian4" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="vegetarianListContent5">
                    <div class="col-md-8 borderLeft">
                        <h2>List 5</h2>
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
                                        <input type="checkbox" id="firstVegetarian5" class="ingredientCheckbox"><label for="firstVegetarian5" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstVegetarian6" class="ingredientCheckbox"><label for="firstVegetarian6" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstVegetarian7" class="ingredientCheckbox"><label for="firstVegetarian7" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstVegetarian8" class="ingredientCheckbox"><label for="firstVegetarian8" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstVegetarian9" class="ingredientCheckbox"><label for="firstVegetarian9" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="1Keto1" class="ingredientCheckbox"><label for="1Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;2 oz goat cheese</label><br>
                                        <input type="checkbox" id="1Keto2" class="ingredientCheckbox"><label for="1Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;2 oz bacon</label><br>
                                        <input type="checkbox" id="1Keto3" class="ingredientCheckbox"><label for="1Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;1/2 avocado</label><br>
                                        <input type="checkbox" id="1Keto4" class="ingredientCheckbox"><label for="1Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;1 oz walnuts</label><br>
                                        <input type="checkbox" id="1Keto5" class="ingredientCheckbox"><label for="1Keto5" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;2 oz arugula lettuce</label><br>
                                        <input type="checkbox" id="1Keto6" class="ingredientCheckbox"><label for="1Keto6" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;1/8 lemon juice</label><br>
                                        <input type="checkbox" id="1Keto7" class="ingredientCheckbox"><label for="1Keto7" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;1 3/4 tbsp mayonnaise</label><br>
                                        <input type="checkbox" id="1Keto8" class="ingredientCheckbox"><label for="1Keto8" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;1 3/4 tbsp olive oil</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="ketoListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>Baked Salmon</h2>
                        <div class="col-md-6">
                            <h4 class="h4margin">Recipe Description</h4>
                            <dd class="ddmargin">I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description I am a description<br><br><br></dd>
                            <ol class="">
                                <li class="">Preheat oven to 400 degrees fahrenheit (200 celsius)</li>
                                <li class="">Place the salmon with the skin down in a greased baking dish, salt and pepper generously</li>
                                <li class="">Slice the lemon thinly and place on top of the salmon. Cover with half of the butter in think slices</li>
                                <li class="">Bake on the middle rack for about 20-30 minutes, depending on size.</li>
                                <li class="">Heat the rest of the butter in a small sauce pan until it starts to bubble. Remove from heat and let cool a little and add some lemon juice</li>
                                <li>Serve the fish with the lemon butter and a side dish of choice (garden salad)</li>
                            </ol>
                            <br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <form action="" method="post">
                                        <input type="checkbox" id="2Keto1" class="ingredientCheckbox"><label for="2Keto1" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;1/2 tsp olive oil</label><br>
                                        <input type="checkbox" id="2Keto2" class="ingredientCheckbox"><label for="2Keto2" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;6-8 oz salmon</label><br>
                                        <input type="checkbox" id="2Keto3" class="ingredientCheckbox"><label for="2Keto3" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;1/6 tsp sea salt</label><br>
                                        <input type="checkbox" id="2Keto4" class="ingredientCheckbox"><label for="2Keto4" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;Ground black pepper</label><br>
                                        <input type="checkbox" id="2Keto5" class="ingredientCheckbox"><label for="2Keto5" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;1 1/4 oz butter</label><br>
                                        <input type="checkbox" id="2Keto6" class="ingredientCheckbox"><label for="2Keto5" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;1/6 lemon</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="ketoListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>List 3</h2>
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
                                        <input type="checkbox" id="firstKeto3" class="ingredientCheckbox"><label for="firstKeto3" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstKeto4" class="ingredientCheckbox"><label for="firstKeto4" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstKeto5" class="ingredientCheckbox"><label for="firstKeto5" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstKeto6" class="ingredientCheckbox"><label for="firstKeto6" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstKeto7" class="ingredientCheckbox"><label for="firstKeto7" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstKeto8" class="ingredientCheckbox"><label for="firstKeto8" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstKeto9" class="ingredientCheckbox"><label for="firstKeto9" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstPaleo1" class="ingredientCheckbox"><label for="firstPaleo1" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstPaleo2" class="ingredientCheckbox"><label for="firstPaleo2" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstPaleo3" class="ingredientCheckbox"><label for="firstPaleo3" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstPaleo4" class="ingredientCheckbox"><label for="firstPaleo4" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstPaleo5" class="ingredientCheckbox"><label for="firstPaleo5" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstPaleo6" class="ingredientCheckbox"><label for="firstPaleo6" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstPaleo7" class="ingredientCheckbox"><label for="firstPaleo7" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstPaleo8" class="ingredientCheckbox"><label for="firstPaleo8" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstPaleo9" class="ingredientCheckbox"><label for="firstPaleo9" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                        <h2>List 1</h2>
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
                                        <input type="checkbox" id="firstProtein1" class="ingredientCheckbox"><label for="firstProtein1" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="proteinListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>List 2</h2>
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
                                        <input type="checkbox" id="firstProtein2" class="ingredientCheckbox"><label for="firstProtein2" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstProtein3" class="ingredientCheckbox"><label for="firstProtein3" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstProtein4" class="ingredientCheckbox"><label for="firstProtein4" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstProtein5" class="ingredientCheckbox"><label for="firstProtein5" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstProtein6" class="ingredientCheckbox"><label for="firstProtein6" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstProtein7" class="ingredientCheckbox"><label for="firstProtein7" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstProtein8" class="ingredientCheckbox"><label for="firstProtein8" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstProtein9" class="ingredientCheckbox"><label for="firstProtein9" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                        <h2>List 1</h2>
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
                                        <input type="checkbox" id="firstCultural1" class="ingredientCheckbox"><label for="firstCultural1" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="culturalListContent2">
                    <div class="col-md-8 borderLeft">
                        <h2>List 2</h2>
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
                                        <input type="checkbox" id="firstCultural2" class="ingredientCheckbox"><label for="firstCultural2" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="culturalListContent3">
                    <div class="col-md-8 borderLeft">
                        <h2>List 3</h2>
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
                                        <input type="checkbox" id="firstCultural3" class="ingredientCheckbox"><label for="firstCultural3" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="culturalListContent4">
                    <div class="col-md-8 borderLeft">
                        <h2>List 4</h2>
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
                                        <input type="checkbox" id="firstCultural4" class="ingredientCheckbox"><label for="firstCultural4" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstCultural5" class="ingredientCheckbox"><label for="firstCultural5" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstCultural6" class="ingredientCheckbox"><label for="firstCultural6" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstCultural7" class="ingredientCheckbox"><label for="firstCultural7" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstCultural8" class="ingredientCheckbox"><label for="firstCultural8" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstCultural9" class="ingredientCheckbox"><label for="firstCultural9" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                                        <input type="checkbox" id="firstUser1" class="ingredientCheckbox"><label for="firstUser1" class="ingredientLabel"><span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-minus-sign"></span>&nbsp;ingredient1</label><br>
                                        <input type="submit" class="btn btn-primary" value="Save">
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
                <div class="row displayNone" id="userListContentCreate">
                    <form action="" method="post">
                    <div class="col-md-8 borderLeft">
                        <h2><input type="text" class="form-control" placeholder="Recipe Name"></h2>
                        <div class="col-md-12">
                            <textarea class="recipetextarea form-control" placeholder="Short Recipe Description" rows="8"></textarea>
                                <input class="recipetextarea form-control inputSteps" type="text" placeholder="Enter the simple step">
                                <input class="recipetextarea form-control inputSteps" type="text" placeholder="Enter the simple step">
                                <input class="recipetextarea form-control inputSteps" type="text" placeholder="Enter the simple step">
                                <button type="button" id="addStepId" class="btn btn-primary" data-toggle="tooltip"><i class="glyphicon glyphicon-plus-sign-sign"></i>&nbsp;&nbsp;Add Step</button>
                                <button type="button" id="removeStepId" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i>&nbsp;&nbsp;Delete Step</button>
                            <br><br>
                            <table class="table table-condensed">
                                <tr>
                                    <th colspan="3" class="centered">Ingredients</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="recipetextarea form-control inputIngredients" type="text" placeholder="Enter the ingredient">
                                        <input class="recipetextarea form-control inputIngredients" type="text" placeholder="Enter the ingredient">
                                        <input class="recipetextarea form-control inputIngredients" type="text" placeholder="Enter the ingredient">
                                        <button type="button" id="addIngredientId" class="btn btn-primary" data-toggle="tooltip"><i class="glyphicon glyphicon-plus-sign-sign"></i>&nbsp;&nbsp;Add Ingredient</button>
                                        <button type="button" id="removeIngredientId" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove-sign"></i>&nbsp;&nbsp;Delete Ingredient</button>
                                    </td>
                                </tr>
                            </table>
                                        <input type="submit" class="btn btn-primary" value="Save">
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