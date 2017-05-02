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
    document.getElementById("classicList1").classList.remove("active");
    document.getElementById("classicList2").classList.remove("active");
    document.getElementById("classicList3").classList.remove("active");
    document.getElementById("classicList4").classList.remove("active");
    document.getElementById("classicList5").classList.remove("active");
    document.getElementById("classicList6").classList.remove("active");
    document.getElementById("classicList7").classList.remove("active");
    document.getElementById("classicList8").classList.remove("active");
    document.getElementById("classicList9").classList.remove("active");
    document.getElementById("classicListContent1").classList.remove("displayBlock");
    document.getElementById("classicListContent2").classList.remove("displayBlock");
    document.getElementById("classicListContent3").classList.remove("displayBlock");
    document.getElementById("classicListContent4").classList.remove("displayBlock");
    document.getElementById("classicListContent5").classList.remove("displayBlock");
    document.getElementById("classicListContent6").classList.remove("displayBlock");
    document.getElementById("classicListContent7").classList.remove("displayBlock");
    document.getElementById("classicListContent8").classList.remove("displayBlock");
    document.getElementById("classicListContent9").classList.remove("displayBlock");
    x.classList.add("active");
    y.classList.add("displayBlock");
}

function vegetarianPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    document.getElementById("vegetarianList1").classList.remove("active");
    document.getElementById("vegetarianList2").classList.remove("active");
    document.getElementById("vegetarianList3").classList.remove("active");
    document.getElementById("vegetarianList4").classList.remove("active");
    document.getElementById("vegetarianList5").classList.remove("active");
    document.getElementById("vegetarianList6").classList.remove("active");
    document.getElementById("vegetarianList7").classList.remove("active");
    document.getElementById("vegetarianList8").classList.remove("active");
    document.getElementById("vegetarianList9").classList.remove("active");
    // var z = document.querySelectorAll('div[id^="vegetarianListContent"]');
    // for (var i = 0; i < z.length; i++) {
    //     z[i].classList.remove("displayBlock");
    // }
    document.getElementById("vegetarianListContent1").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent2").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent3").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent4").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent5").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent6").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent7").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent8").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent9").classList.remove("displayBlock");
    x.classList.add("active");
    y.classList.add("displayBlock");
}

function ketoPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    document.getElementById("ketoList1").classList.remove("active");
    document.getElementById("ketoList2").classList.remove("active");
    document.getElementById("ketoList3").classList.remove("active");
    document.getElementById("ketoList4").classList.remove("active");
    document.getElementById("ketoList5").classList.remove("active");
    document.getElementById("ketoList6").classList.remove("active");
    document.getElementById("ketoList7").classList.remove("active");
    document.getElementById("ketoList8").classList.remove("active");
    document.getElementById("ketoList9").classList.remove("active");
    document.getElementById("ketoListContent1").classList.remove("displayBlock");
    document.getElementById("ketoListContent2").classList.remove("displayBlock");
    document.getElementById("ketoListContent3").classList.remove("displayBlock");
    document.getElementById("ketoListContent4").classList.remove("displayBlock");
    document.getElementById("ketoListContent5").classList.remove("displayBlock");
    document.getElementById("ketoListContent6").classList.remove("displayBlock");
    document.getElementById("ketoListContent7").classList.remove("displayBlock");
    document.getElementById("ketoListContent8").classList.remove("displayBlock");
    document.getElementById("ketoListContent9").classList.remove("displayBlock");
    x.classList.add("active");
    y.classList.add("displayBlock");
}

function paleoPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    document.getElementById("paleoList1").classList.remove("active");
    document.getElementById("paleoList2").classList.remove("active");
    document.getElementById("paleoList3").classList.remove("active");
    document.getElementById("paleoList4").classList.remove("active");
    document.getElementById("paleoList5").classList.remove("active");
    document.getElementById("paleoList6").classList.remove("active");
    document.getElementById("paleoList7").classList.remove("active");
    document.getElementById("paleoList8").classList.remove("active");
    document.getElementById("paleoList9").classList.remove("active");
    document.getElementById("paleoListContent1").classList.remove("displayBlock");
    document.getElementById("paleoListContent2").classList.remove("displayBlock");
    document.getElementById("paleoListContent3").classList.remove("displayBlock");
    document.getElementById("paleoListContent4").classList.remove("displayBlock");
    document.getElementById("paleoListContent5").classList.remove("displayBlock");
    document.getElementById("paleoListContent6").classList.remove("displayBlock");
    document.getElementById("paleoListContent7").classList.remove("displayBlock");
    document.getElementById("paleoListContent8").classList.remove("displayBlock");
    document.getElementById("paleoListContent9").classList.remove("displayBlock");
    x.classList.add("active");
    y.classList.add("displayBlock");
}

function proteinPillsClicked(id, content) {
    var x = document.getElementById(id);
    var y = document.getElementById(content);
    document.getElementById("proteinList1").classList.remove("active");
    document.getElementById("proteinList2").classList.remove("active");
    document.getElementById("proteinList3").classList.remove("active");
    document.getElementById("proteinList4").classList.remove("active");
    document.getElementById("proteinList5").classList.remove("active");
    document.getElementById("proteinList6").classList.remove("active");
    document.getElementById("proteinList7").classList.remove("active");
    document.getElementById("proteinList8").classList.remove("active");
    document.getElementById("proteinList9").classList.remove("active");
    document.getElementById("proteinListContent1").classList.remove("displayBlock");
    document.getElementById("proteinListContent2").classList.remove("displayBlock");
    document.getElementById("proteinListContent3").classList.remove("displayBlock");
    document.getElementById("proteinListContent4").classList.remove("displayBlock");
    document.getElementById("proteinListContent5").classList.remove("displayBlock");
    document.getElementById("proteinListContent6").classList.remove("displayBlock");
    document.getElementById("proteinListContent7").classList.remove("displayBlock");
    document.getElementById("proteinListContent8").classList.remove("displayBlock");
    document.getElementById("proteinListContent9").classList.remove("displayBlock");
    x.classList.add("active");
    y.classList.add("displayBlock");
}

function TabClicked(id, id2, list, contentBlock, content) {
    var tab = document.getElementById(id);
    var firstlist = document.getElementById(id2);
    var listblock = document.getElementById(list);
    var listcontent = document.getElementById(content);
    var listcontentblock = document.getElementById(contentBlock);

    document.getElementById("classic").classList.remove("active");
    document.getElementById("vegetarian").classList.remove("active");
    document.getElementById("keto").classList.remove("active");
    document.getElementById("paleo").classList.remove("active");
    document.getElementById("proteinRich").classList.remove("active");
    tab.classList.add("active");
    
    document.getElementById("classicList").classList.remove("displayBlock");
    document.getElementById("vegetarianList").classList.remove("displayBlock");
    document.getElementById("ketoList").classList.remove("displayBlock");
    document.getElementById("paleoList").classList.remove("displayBlock");
    document.getElementById("proteinList").classList.remove("displayBlock");
    listblock.classList.add("displayBlock");

    document.getElementById("classicList1").classList.remove("active");
    document.getElementById("classicList2").classList.remove("active");
    document.getElementById("classicList3").classList.remove("active");
    document.getElementById("classicList4").classList.remove("active");
    document.getElementById("classicList5").classList.remove("active");
    document.getElementById("classicList6").classList.remove("active");
    document.getElementById("classicList7").classList.remove("active");
    document.getElementById("classicList8").classList.remove("active");
    document.getElementById("classicList9").classList.remove("active");
    document.getElementById("classicListContent1").classList.remove("displayBlock");
    document.getElementById("classicListContent2").classList.remove("displayBlock");
    document.getElementById("classicListContent3").classList.remove("displayBlock");
    document.getElementById("classicListContent4").classList.remove("displayBlock");
    document.getElementById("classicListContent5").classList.remove("displayBlock");
    document.getElementById("classicListContent6").classList.remove("displayBlock");
    document.getElementById("classicListContent7").classList.remove("displayBlock");
    document.getElementById("classicListContent8").classList.remove("displayBlock");
    document.getElementById("classicListContent9").classList.remove("displayBlock");
    document.getElementById("classicListContent").classList.remove("displayBlock");
    document.getElementById("classicListContent").classList.add("displayNone");

    document.getElementById("vegetarianList1").classList.remove("active");
    document.getElementById("vegetarianList2").classList.remove("active");
    document.getElementById("vegetarianList3").classList.remove("active");
    document.getElementById("vegetarianList4").classList.remove("active");
    document.getElementById("vegetarianList5").classList.remove("active");
    document.getElementById("vegetarianList6").classList.remove("active");
    document.getElementById("vegetarianList7").classList.remove("active");
    document.getElementById("vegetarianList8").classList.remove("active");
    document.getElementById("vegetarianList9").classList.remove("active");
    document.getElementById("vegetarianListContent1").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent2").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent3").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent4").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent5").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent6").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent7").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent8").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent9").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent").classList.remove("displayBlock");
    document.getElementById("vegetarianListContent").classList.add("displayNone");

    document.getElementById("ketoList1").classList.remove("active");
    document.getElementById("ketoList2").classList.remove("active");
    document.getElementById("ketoList3").classList.remove("active");
    document.getElementById("ketoList4").classList.remove("active");
    document.getElementById("ketoList5").classList.remove("active");
    document.getElementById("ketoList6").classList.remove("active");
    document.getElementById("ketoList7").classList.remove("active");
    document.getElementById("ketoList8").classList.remove("active");
    document.getElementById("ketoList9").classList.remove("active");
    document.getElementById("ketoListContent1").classList.remove("displayBlock");
    document.getElementById("ketoListContent2").classList.remove("displayBlock");
    document.getElementById("ketoListContent3").classList.remove("displayBlock");
    document.getElementById("ketoListContent4").classList.remove("displayBlock");
    document.getElementById("ketoListContent5").classList.remove("displayBlock");
    document.getElementById("ketoListContent6").classList.remove("displayBlock");
    document.getElementById("ketoListContent7").classList.remove("displayBlock");
    document.getElementById("ketoListContent8").classList.remove("displayBlock");
    document.getElementById("ketoListContent9").classList.remove("displayBlock");
    document.getElementById("ketoListContent").classList.remove("displayBlock");
    document.getElementById("ketoListContent").classList.add("displayNone");

    document.getElementById("paleoList1").classList.remove("active");
    document.getElementById("paleoList2").classList.remove("active");
    document.getElementById("paleoList3").classList.remove("active");
    document.getElementById("paleoList4").classList.remove("active");
    document.getElementById("paleoList5").classList.remove("active");
    document.getElementById("paleoList6").classList.remove("active");
    document.getElementById("paleoList7").classList.remove("active");
    document.getElementById("paleoList8").classList.remove("active");
    document.getElementById("paleoList9").classList.remove("active");
    document.getElementById("paleoListContent1").classList.remove("displayBlock");
    document.getElementById("paleoListContent2").classList.remove("displayBlock");
    document.getElementById("paleoListContent3").classList.remove("displayBlock");
    document.getElementById("paleoListContent4").classList.remove("displayBlock");
    document.getElementById("paleoListContent5").classList.remove("displayBlock");
    document.getElementById("paleoListContent6").classList.remove("displayBlock");
    document.getElementById("paleoListContent7").classList.remove("displayBlock");
    document.getElementById("paleoListContent8").classList.remove("displayBlock");
    document.getElementById("paleoListContent9").classList.remove("displayBlock");
    document.getElementById("paleoListContent").classList.remove("displayBlock");
    document.getElementById("paleoListContent").classList.add("displayNone");

    document.getElementById("proteinList1").classList.remove("active");
    document.getElementById("proteinList2").classList.remove("active");
    document.getElementById("proteinList3").classList.remove("active");
    document.getElementById("proteinList4").classList.remove("active");
    document.getElementById("proteinList5").classList.remove("active");
    document.getElementById("proteinList6").classList.remove("active");
    document.getElementById("proteinList7").classList.remove("active");
    document.getElementById("proteinList8").classList.remove("active");
    document.getElementById("proteinList9").classList.remove("active");
    document.getElementById("proteinListContent1").classList.remove("displayBlock");
    document.getElementById("proteinListContent2").classList.remove("displayBlock");
    document.getElementById("proteinListContent3").classList.remove("displayBlock");
    document.getElementById("proteinListContent4").classList.remove("displayBlock");
    document.getElementById("proteinListContent5").classList.remove("displayBlock");
    document.getElementById("proteinListContent6").classList.remove("displayBlock");
    document.getElementById("proteinListContent7").classList.remove("displayBlock");
    document.getElementById("proteinListContent8").classList.remove("displayBlock");
    document.getElementById("proteinListContent9").classList.remove("displayBlock");
    document.getElementById("proteinListContent").classList.remove("displayBlock");
    document.getElementById("proteinListContent").classList.add("displayNone");

    listblock.classList.add("displayBlock");
    tab.classList.add("active");
    firstlist.classList.add("active");
    listcontentblock.classList.add("displayBlock");
    listcontent.classList.add("displayBlock");
}