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
}
