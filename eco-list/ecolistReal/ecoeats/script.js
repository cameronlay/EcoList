/**
 * Pseudo:
 *        check all other elements that have active class
 *        remove them
 *        add active class to one that has been clicked
 * <p></p>
 * @author Edmund
 */
function classicPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    var classicList = document.getElementById('classicList').getElementsByTagName('li');
    for (var i = 0; i < classicList.length; i++) {
        classicList[i].classList.remove('active');
    }

    var classicListContent = document.getElementById('classicListContent').getElementsByClassName('row');
    for (var i = 0; i < classicListContent.length; i++) {
        classicListContent[i].classList.remove('displayBlock');
    }

    x.classList.add("active");
    y.classList.add("displayBlock");
}

function vegetarianPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    var vegetarianList = document.getElementById('vegetarianList').getElementsByTagName('li');
    for (var i = 0; i < vegetarianList.length; i++) {
        vegetarianList[i].classList.remove('active');
    }

    var vegetarianListContent = document.getElementById('vegetarianListContent').getElementsByClassName('row');
    for (var i = 0; i < vegetarianListContent.length; i++) {
        vegetarianListContent[i].classList.remove('displayBlock');
    }

    x.classList.add("active");
    y.classList.add("displayBlock");
}

function ketoPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    var ketoList = document.getElementById('ketoList').getElementsByTagName('li');
    for (var i = 0; i < ketoList.length; i++) {
        ketoList[i].classList.remove('active');
    }
    
    var ketoListContent = document.getElementById('ketoListContent').getElementsByClassName('row');
    for (var i = 0; i < ketoListContent.length; i++) {
        ketoListContent[i].classList.remove('displayBlock');
    }

    x.classList.add("active");
    y.classList.add("displayBlock");
}

function paleoPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    var paleoList = document.getElementById('paleoList').getElementsByTagName('li');
    for (var i = 0; i < paleoList.length; i++) {
        paleoList[i].classList.remove('active');
    }

    var paleoListContent = document.getElementById('paleoListContent').getElementsByClassName('row');
    for (var i = 0; i < paleoListContent.length; i++) {
        paleoListContent[i].classList.remove('displayBlock');
    }

    x.classList.add("active");
    y.classList.add("displayBlock");
}

function proteinPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    var proteinList = document.getElementById('proteinList').getElementsByTagName('li');
    for (var i = 0; i < proteinList.length; i++) {
        proteinList[i].classList.remove('active');
    }
    
    var proteinListContent = document.getElementById('proteinListContent').getElementsByClassName('row');
    for (var i = 0; i < proteinListContent.length; i++) {
        proteinListContent[i].classList.remove('displayBlock');
    }

    x.classList.add("active");
    y.classList.add("displayBlock");
}

function culturalPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    var culturalList = document.getElementById('culturalList').getElementsByTagName('li');
    for (var i = 0; i < culturalList.length; i++) {
        culturalList[i].classList.remove('active');
    }
    
    var culturalListContent = document.getElementById('culturalListContent').getElementsByClassName('row');
    for (var i = 0; i < culturalListContent.length; i++) {
        culturalListContent[i].classList.remove('displayBlock');
    }
    
    x.classList.add("active");
    y.classList.add("displayBlock");
}

function userPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    var userList = document.getElementById('userList').getElementsByTagName('li');
    for (var i = 0; i < userList.length; i++) {
        userList[i].classList.remove('active');
    }
    
    var userListContent = document.getElementById('userListContent').getElementsByClassName('row');
    for (var i = 0; i < userListContent.length; i++) {
        userListContent[i].classList.remove('displayBlock');
    }

    x.classList.add("active");
    y.classList.add("displayBlock");
}

/* Pseudo:
 *      1. Remove all active from tabs
 *      2. Remove all lists
 *      3. Remove all contents
 *      4. Add active and displayblock to the clicked tabs
 */
function TabClicked(id, id2, list, contentBlock, content) {
    var tab = document.getElementById(id);
    var firstlist = document.getElementById(id2);
    var listblock = document.getElementById(list);
    var listcontent = document.getElementById(content);
    var listcontentblock = document.getElementById(contentBlock);

    var navTabs = document.getElementById('navTabs').getElementsByTagName('li');
    for (var i = 0; i < navTabs.length; i++) {
        navTabs[i].classList.remove("active");
    }
    tab.classList.add("active");
    
    document.getElementById("classicList").classList.remove("displayBlock");
    document.getElementById("vegetarianList").classList.remove("displayBlock");
    document.getElementById("ketoList").classList.remove("displayBlock");
    document.getElementById("paleoList").classList.remove("displayBlock");
    document.getElementById("proteinList").classList.remove("displayBlock");
	document.getElementById("culturalList").classList.remove("displayBlock");
    document.getElementById("userList").classList.remove("displayBlock");
    listblock.classList.add("displayBlock");

// =========================================
// Classic
// =========================================
    var classicList = document.getElementById('classicList').getElementsByTagName('li');
    for (var i = 0; i < classicList.length; i++) {
        classicList[i].classList.remove('active');
    }

    var classicListContent = document.getElementById('classicListContent').getElementsByClassName('row');
    for (var i = 0; i < classicListContent.length; i++) {
        classicListContent[i].classList.remove('displayBlock');
    }

    document.getElementById("classicListContent").classList.add("displayNone");

// =========================================
// Vegetarian
// =========================================
    var vegetarianList = document.getElementById('vegetarianList').getElementsByTagName('li');
    for (var i = 0; i < vegetarianList.length; i++) {
        vegetarianList[i].classList.remove('active');
    }
    
    var vegetarianListContent = document.getElementById('vegetarianListContent').getElementsByClassName('row');
    for (var i = 0; i < vegetarianListContent.length; i++) {
        vegetarianListContent[i].classList.remove('displayBlock');
    }

    document.getElementById("vegetarianListContent").classList.add("displayNone");

// =========================================
// Keto
// =========================================
    var ketoList = document.getElementById('ketoList').getElementsByTagName('li');
    for (var i = 0; i < ketoList.length; i++) {
        ketoList[i].classList.remove('active');
    }
    
    var ketoListContent = document.getElementById('ketoListContent').getElementsByClassName('row');
    for (var i = 0; i < ketoListContent.length; i++) {
        ketoListContent[i].classList.remove('displayBlock');
    }

    document.getElementById("ketoListContent").classList.add("displayNone");

// =========================================
// Paleo
// =========================================
    var paleoList = document.getElementById('paleoList').getElementsByTagName('li');
    for (var i = 0; i < paleoList.length; i++) {
        paleoList[i].classList.remove('active');
    }

    var paleoListContent = document.getElementById('paleoListContent').getElementsByClassName('row');
    for (var i = 0; i < paleoListContent.length; i++) {
        paleoListContent[i].classList.remove('displayBlock');
    }

    document.getElementById("paleoListContent").classList.add("displayNone");

// =========================================
// Protein Rich
// =========================================
    var proteinList = document.getElementById('proteinList').getElementsByTagName('li');
    for (var i = 0; i < proteinList.length; i++) {
        proteinList[i].classList.remove('active');
    }
   
    var proteinListContent = document.getElementById('proteinListContent').getElementsByClassName('row');
    for (var i = 0; i < proteinListContent.length; i++) {
        proteinListContent[i].classList.remove('displayBlock');
    }
    
    document.getElementById("proteinListContent").classList.add("displayNone");
	
// =========================================
// Cultural
// =========================================
	var culturalList = document.getElementById('culturalList').getElementsByTagName('li');
    for (var i = 0; i < culturalList.length; i++) {
        culturalList[i].classList.remove('active');
    }
    
    var culturalListContent = document.getElementById('culturalListContent').getElementsByClassName('row');
    for (var i = 0; i < culturalListContent.length; i++) {
        culturalListContent[i].classList.remove('displayBlock');
    }
    
    document.getElementById("culturalListContent").classList.add("displayNone");

// =========================================
// User
// =========================================
    var userList = document.getElementById('userList').getElementsByTagName('li');
    for (var i = 0; i < userList.length; i++) {
        userList[i].classList.remove('active');
    }
    
    var userListContent = document.getElementById('userListContent').getElementsByClassName('row');
    for (var i = 0; i < userListContent.length; i++) {
        userListContent[i].classList.remove('displayBlock');
    }
    
    document.getElementById("userListContent").classList.add("displayNone");

// ====================================
// variables from the parameters
//=====================================
    listblock.classList.add("displayBlock");
    tab.classList.add("active");
    firstlist.classList.add("active");
    listcontentblock.classList.add("displayBlock");
    listcontent.classList.add("displayBlock");
//END OF FUNCTION
}

// ADDING INPUTS
$(document).ready(function() {
    $("#addStepId").click(function() {
        $("#addStepId").before(GetInputRecipe());
    });
    $("#removeStepId").click(function() {
        var inputArray = document.getElementsByClassName("inputSteps");
        inputArray[inputArray.length - 1].remove();
    });
    $("#addIngredientId").click(function() {
        $("#addIngredientId").before(GetIngredientsRecipe());
    });
    $("#removeIngredientId").click(function() {
        var inputArray = document.getElementsByClassName("inputIngredients");
        inputArray[inputArray.length - 1].remove();
    })
});

// NEED TO ADD NAME FOR SERVER
function GetInputRecipe() {
    return '<input class="recipetextarea form-control inputSteps" type="text" placeholder="Enter the simple step" required>';
}

// NEED TO ADD NAME FOR SERVER
function GetIngredientsRecipe() {
    return '<input class="recipetextarea form-control inputIngredients" type="text" placeholder="Enter the ingredient" required>';
}

// RESET ALL CHECKBOXES IN INGREDIENTS
$(document).ready(function() {
    var checkBox = $('.ingredientCheckbox');
    $(".resetBtn").on("click", function() {
        checkBox.prop('checked', false);
        $(".glyphicon-unchecked").classList.add("displayInline");
        $(".glyphicon-check").classList.add('displayNone');
    });
});

function recipeTimerInformation() {
    var timer = setInterval(infoFunction1, 1500, infoFunction2, infoFunction3);
}

function infoFunction1() {
    $('#recipeInformation').innerHTML = "47% of food waste is coming from household!"
}

function infoFunction2() {
    $('#recipeInformation').innerHTML = "Try our intuitive shopping list!"
}

function infoFunction3() {
    $('#recipeInformation').innerHTML = "You can save $700 per year not wasting food!"
}

/**
 * FUNCTION THAT OVERRIDE ALL FUNCTIONS IF THE BROWSER
 * WIDTH IS LESS THAN 768
 */
function widthLessThan767() {
    var width = window.innerWidth
        || document.documentElement.clientWidth
        || document.body.clientWidth;

    if (width <= 767) {
        var active = document.getElementsByClassName('active');
        for (var i = 0; i < active.length; i++) {
            active[i].classList.remove('active');
        }
        var displayBlock = document.getElementsByClassName('displayBlock');
        for (var i = displayBlock.length - 1; i >= 0; i--) {
            displayBlock[i].classList.remove('displayBlock');
        }
    
        /*
         * 1. if pill clicked, bring that specific content
         * right after the pill and remove all current
         * active and displayBlock
         * 2. if click again, disappeared.

         * ADDED, BRING PICTURES LOCATED ABOVE THE CONTENT
         */
        classicPillsClicked = function(id, content) {
            var x = document.getElementById(id);
            var y = document.getElementById(content);

            if (x.classList.contains('active')) {
                x.classList.remove('active');
                y.classList.remove('displayBlock');

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            } else {

                var classicList = document.getElementById('classicList').getElementsByTagName('li');
                for (var i = 0; i < classicList.length; i++) {
                    classicList[i].classList.remove('active');
                }

                document.getElementById('classicListContent1').classList.remove('displayBlock');
                document.getElementById('classicListContent2').classList.remove('displayBlock');
                document.getElementById('classicListContent3').classList.remove('displayBlock');
                document.getElementById('classicListContent4').classList.remove('displayBlock');
                document.getElementById('classicListContent5').classList.remove('displayBlock');
                document.getElementById('classicListContent6').classList.remove('displayBlock');
                document.getElementById('classicListContent7').classList.remove('displayBlock');

                //========================
                //bring the lists right after the tab!!
                //========================
                x.classList.add('active');
                y.classList.add('displayBlock');
                x.after(y);

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            }

        }
    
        vegetarianPillsClicked = function(id, content) {
            var x = document.getElementById(id);
            var y = document.getElementById(content);

            if (x.classList.contains('active')) {
                x.classList.remove('active');
                y.classList.remove('displayBlock');

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            } else {

                var vegetarianList = document.getElementById('vegetarianList').getElementsByTagName('li');
                for (var i = 0; i < vegetarianList.length; i++) {
                    vegetarianList[i].classList.remove('active');
                }

                document.getElementById('vegetarianListContent1').classList.remove('displayBlock');
                document.getElementById('vegetarianListContent2').classList.remove('displayBlock');
                document.getElementById('vegetarianListContent3').classList.remove('displayBlock');
                document.getElementById('vegetarianListContent4').classList.remove('displayBlock');
                document.getElementById('vegetarianListContent5').classList.remove('displayBlock');
                document.getElementById('vegetarianListContent6').classList.remove('displayBlock');
                document.getElementById('vegetarianListContent7').classList.remove('displayBlock');

                //========================
                //bring the lists right after the tab!!
                //========================
                x.classList.add('active');
                y.classList.add('displayBlock');
                x.after(y);

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            }
        }

        ketoPillsClicked = function(id, content) {
            var x = document.getElementById(id);
            var y = document.getElementById(content);

            if (x.classList.contains('active')) {
                x.classList.remove('active');
                y.classList.remove('displayBlock');

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            } else {

                var ketoList = document.getElementById('ketoList').getElementsByTagName('li');
                for (var i = 0; i < ketoList.length; i++) {
                    ketoList[i].classList.remove('active');
                }

                document.getElementById('ketoListContent1').classList.remove('displayBlock');
                document.getElementById('ketoListContent2').classList.remove('displayBlock');
                document.getElementById('ketoListContent3').classList.remove('displayBlock');
                document.getElementById('ketoListContent4').classList.remove('displayBlock');
                document.getElementById('ketoListContent5').classList.remove('displayBlock');
                document.getElementById('ketoListContent6').classList.remove('displayBlock');
                document.getElementById('ketoListContent7').classList.remove('displayBlock');

                //========================
                //bring the lists right after the tab!!
                //========================
                x.classList.add('active');
                y.classList.add('displayBlock');
                x.after(y);

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            }
        }

        paleoPillsClicked = function(id, content) {
            var x = document.getElementById(id);
            var y = document.getElementById(content);

            if (x.classList.contains('active')) {
                x.classList.remove('active');
                y.classList.remove('displayBlock');

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            } else {

                var paleoList = document.getElementById('paleoList').getElementsByTagName('li');
                for (var i = 0; i < paleoList.length; i++) {
                    paleoList[i].classList.remove('active');
                }

                document.getElementById('paleoListContent1').classList.remove('displayBlock');
                document.getElementById('paleoListContent2').classList.remove('displayBlock');
                document.getElementById('paleoListContent3').classList.remove('displayBlock');
                document.getElementById('paleoListContent4').classList.remove('displayBlock');
                document.getElementById('paleoListContent5').classList.remove('displayBlock');
                document.getElementById('paleoListContent6').classList.remove('displayBlock');
                document.getElementById('paleoListContent7').classList.remove('displayBlock');

                //========================
                //bring the lists right after the tab!!
                //========================
                x.classList.add('active');
                y.classList.add('displayBlock');
                x.after(y);

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            }
        }

        proteinPillsClicked = function(id, content) {
            var x = document.getElementById(id);
            var y = document.getElementById(content);

            if (x.classList.contains('active')) {
                x.classList.remove('active');
                y.classList.remove('displayBlock');

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            } else {

                var proteinList = document.getElementById('proteinList').getElementsByTagName('li');
                for (var i = 0; i < proteinList.length; i++) {
                    proteinList[i].classList.remove('active');
                }

                document.getElementById('proteinListContent1').classList.remove('displayBlock');
                document.getElementById('proteinListContent2').classList.remove('displayBlock');
                document.getElementById('proteinListContent3').classList.remove('displayBlock');
                document.getElementById('proteinListContent4').classList.remove('displayBlock');
                document.getElementById('proteinListContent5').classList.remove('displayBlock');
                document.getElementById('proteinListContent6').classList.remove('displayBlock');
                document.getElementById('proteinListContent7').classList.remove('displayBlock');

                //========================
                //bring the lists right after the tab!!
                //========================
                x.classList.add('active');
                y.classList.add('displayBlock');
                x.after(y);

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            }
        }

        culturalPillsClicked = function(id, content) {
            var x = document.getElementById(id);
            var y = document.getElementById(content);

            if (x.classList.contains('active')) {
                x.classList.remove('active');
                y.classList.remove('displayBlock');

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            } else {

                var culturalList = document.getElementById('culturalList').getElementsByTagName('li');
                for (var i = 0; i < culturalList.length; i++) {
                    culturalList[i].classList.remove('active');
                }

                document.getElementById('culturalListContent1').classList.remove('displayBlock');
                document.getElementById('culturalListContent2').classList.remove('displayBlock');
                document.getElementById('culturalListContent3').classList.remove('displayBlock');
                document.getElementById('culturalListContent4').classList.remove('displayBlock');
                document.getElementById('culturalListContent5').classList.remove('displayBlock');
                document.getElementById('culturalListContent6').classList.remove('displayBlock');
                document.getElementById('culturalListContent7').classList.remove('displayBlock');
                document.getElementById('culturalListContent8').classList.remove('displayBlock');
                document.getElementById('culturalListContent9').classList.remove('displayBlock');
                document.getElementById('culturalListContent10').classList.remove('displayBlock');

                //========================
                //bring the lists right after the tab!!
                //========================
                x.classList.add('active');
                y.classList.add('displayBlock');
                x.after(y);

                // BRING IMAGE
                var content0Img1 = y.getElementsByClassName('col-md-6');
                content0Img1[0].before(content0Img1[1]);
            }
        }

        //NEED TO FIX FOR INTERACTIVE!!!!!!!!!!!!!!!!!!!
         userPillsClicked = function(id, content) {
             var x = document.getElementById(id);
             var y = document.getElementById(content);

             if (x.classList.contains('active')) {
                 x.classList.remove('active');
                 y.classList.remove('displayBlock');
             } else {

                 var userList = document.getElementById('userList').getElementsByTagName('li');
                 for (var i = 0; i < userList.length; i++) {
                     userList[i].classList.remove('active');
                }

                var recipeContent = $('.recipeContent');
                for (var i = 0; i < recipeContent.length; i++) {
                    recipeContent[i].classList.remove('displayBlock');
                }

                // ========================
                // bring the lists right after the tab!!
                // ========================
                x.classList.add('active');
                y.classList.add('displayBlock');
                x.after(y);
            }
        }

        /**
         * 1. if tab clicked, bring the specific lists of that tab
         * and remove all current active and displayBlock
         * 2. if it clicked again, disappered
         */

        TabClicked = function(id, id2, list, contentBlock, content) {
            var tab = document.getElementById(id);
            var firstlist = document.getElementById(id2);
            var listblock = document.getElementById(list);
            var listcontent = document.getElementById(content);
            var listcontentblock = document.getElementById(contentBlock);
    
            document.getElementById("classicList").classList.remove("displayBlock");
            document.getElementById("vegetarianList").classList.remove("displayBlock");
            document.getElementById("ketoList").classList.remove("displayBlock");
            document.getElementById("paleoList").classList.remove("displayBlock");
            document.getElementById("proteinList").classList.remove("displayBlock");
            document.getElementById("culturalList").classList.remove("displayBlock");
            document.getElementById("userList").classList.remove("displayBlock");

            var recipeContent = $('.recipeContent');
            for (var i = 0; i < recipeContent.length; i++) {
                recipeContent[i].classList.remove('displayBlock');
            }

            // =========================================
            // Classic
            // =========================================
            var classicList = document.getElementById('classicList').getElementsByTagName('li');
            for (var i = 0; i < classicList.length; i++) {
                classicList[i].classList.remove('active');
            }


            // =========================================
            // Vegetarian
            // =========================================
            var vegetarianList = document.getElementById('vegetarianList').getElementsByTagName('li');
            for (var i = 0; i < vegetarianList.length; i++) {
                vegetarianList[i].classList.remove('active');
            }

            // =========================================
            // Keto
            // =========================================
            var ketoList = document.getElementById('ketoList').getElementsByTagName('li');
            for (var i = 0; i < ketoList.length; i++) {
                ketoList[i].classList.remove('active');
            }

            // =========================================
            // Paleo
            // =========================================
            var paleoList = document.getElementById('paleoList').getElementsByTagName('li');
            for (var i = 0; i < paleoList.length; i++) {
                paleoList[i].classList.remove('active');
            }

            // =========================================
            // Protein Rich
            // =========================================
            var proteinList = document.getElementById('proteinList').getElementsByTagName('li');
            for (var i = 0; i < proteinList.length; i++) {
                proteinList[i].classList.remove('active');
            }

            // =========================================
            // Cultural
            // =========================================
            var culturalList = document.getElementById('culturalList').getElementsByTagName('li');
            for (var i = 0; i < culturalList.length; i++) {
                culturalList[i].classList.remove('active');
            }

            // =========================================
            // User
            // =========================================
            var userList = document.getElementById('userList').getElementsByTagName('li');
            for (var i = 0; i < userList.length; i++) {
                userList[i].classList.remove('active');
            }

            if (tab.classList.contains('active')) {
                tab.classList.remove('active');
            } else {

                var navTabs = document.getElementById('navTabs').getElementsByTagName('li');
                for (var i = 0; i < navTabs.length; i++) {
                    navTabs[i].classList.remove("active");
                }
                //========================
                //bring the lists right after the tab!!
                //========================
                tab.classList.add('active');
                listblock.classList.add('displayBlock');
                tab.after(listblock);
            }





        //END OF TABCLICKED FUNCTION OVERRIDING
        }


    //END OF IF STATEMENT
    }
//END OF FUNCTION
}
