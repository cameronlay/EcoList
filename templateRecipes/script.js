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

$(document).ready(function() {
    $("#addStepId").click(function() {
        $("#addStepId").before(GetInputRecipe());
    })
    $("#removeStepId").click(function() {
        var inputArray = document.getElementsByClassName("inputSteps");
        inputArray[inputArray.length - 1].remove();
    })
    $("#addIngredientId").click(function() {
        $("#addIngredientId").before(GetIngredientsRecipe());
    })
    $("#removeIngredientId").click(function() {
        var inputArray = document.getElementsByClassName("inputIngredients");
        inputArray[inputArray.length - 1].remove();
    })
})

function GetInputRecipe() {
    return '<input class="recipetextarea form-control inputSteps" type="text" placeholder="Enter the simple step">';
}

function GetIngredientsRecipe() {
    return '<input class="recipetextarea form-control inputIngredients" type="text" placeholder="Enter the ingredient">';
}

/**
 * FUNCTION THAT OVERRIDE ALL FUNCTIONS IF THE BROWSER
 * WIDTH IS LESS THAN 768
 */
function widthLessThan768() {
    var width = window.innerWidth
        || document.documentElement.clientWidth
        || document.body.clientWidth;

    if (width <= 768) {
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
         */
        classicPillsClicked = function(id, content) {
            var x = document.getElementById(id);
            var y = document.getElementById(content);

            if (x.classList.contains('active')) {
                x.classList.remove('active');
                y.classList.remove('displayBlock');
            } else {

                var classicList = document.getElementById('classicList').getElementsByTagName('li');
                for (var i = 0; i < classicList.length; i++) {
                    classicList[i].classList.remove('active');
                }

                var classicListContent = document.getElementById('classicListContent').getElementsByClassName('row');
                for (var i = 0; i < classicListContent.length; i++) {
                    classicListContent[i].classList.remove('displayBlock');
                }
                //========================
                //bring the lists right after the tab!!
                //========================
                x.classList.add('active');
                y.classList.add('displayBlock');
                x.after(y);
            }
        }
    
        vegetarianPillsClicked = function(id, content) {
                        
        }

        ketoPillsClicked = function(id, content) {
                        
        }

        paleoPillsClicked = function(id, content) {
                        
        }

        proteinPillsClicked = function(id, content) {
                        
        }

        culturalPillsClicked = function(id, content) {
                        
        }

        userPillsClicked = function(id, content) {
                        
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

            if (tab.classList.contains('active')) {
                tab.classList.remove('active');
                listblock.classList.remove('displayBlock');
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
