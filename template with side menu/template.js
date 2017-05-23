let winHeight = window.innerHeight;

//Top Elements
topElement1 = null;
topElement2 = null;
titleElement = null;
let offsetAmount = 30; //percentage x/100
let passedFlag = false;
let passedFlag2 = false;
//MiniNav
renderedNav = null;
var renderingLine = null;
    

window.onresize = function sizeRefactor() {
    winHeight = window.innerHeight;
    setHeight();
}

function setHeight(runOnce){
    if(runOnce) {
        topElement1 = document.getElementById("Top");
        topElement2 = document.getElementById("Top").firstElementChild;
        setElements();
    }
    topElement1.style.height=winHeight + "px";
    topElement2.style.top = offsetAmount + "%";
}


function setElements() {
    titleElement = document.getElementById("Title");
    renderedNav = document.getElementsByClassName("miniNav")[0];
    renderingLine = renderedNav.offsetHeight;
}


window.onscroll = function runScroll() {
    var scrollLevel = window.scrollY;
    var titleLevel = winHeight * offsetAmount / 100;
    if(scrollLevel > titleLevel && !passedFlag) {
        renderedNav.style.visibility = "visible";
        titleElement.style.visibility = "hidden";
        passedFlag = true;
    } else if(passedFlag) {
        if(scrollLevel < titleLevel) {
            renderedNav.style.visibility = "hidden";
            titleElement.style.visibility = "visible";
            passedFlag = false;
        }

        if(scrollLevel >= winHeight - renderingLine * 3) {
            var distanceRatio =  ((renderingLine * 2) - (winHeight - scrollLevel))/renderingLine
            if(distanceRatio <= 0.7) {
                renderedNav.style.backgroundColor = "rgba(255,255,255," +  distanceRatio + ")";
                renderedNav.style.borderBottomColor = "rgba(0,0,0," + (distanceRatio + distanceRatio / 2) + ")";
            } else {
                renderedNav.style.backgroundColor = "rgba(255,255,255,0.7)";
                renderedNav.style.borderBottomColor = "black";
            }
        } else {
            renderedNav.style.backgroundColor = "rgba(0,0,0,0)";
        }
    }
}
