			winHeight = window.innerHeight;
            winWidth = window.innerWidth;
			isNotIndex = null;
            let imagebuffer = 30;
            //Top Elements
            topElement1 = null;
            topElement2 = null;
            titleElement = null;
            let offsetAmount = 15; //percentage x/100
            let topheight = null;
            let passedFlag = false;
            let passedFlag2 = false;
            //MiniNav
            renderedNav = null;
            renderedDropdown = null;
            appdrawer = null;
            var renderingLine = null;
            
            //Bottom Elements
            var numberOfSections = null;
            section = [];
            
            window.onresize = function sizeRefactor() {
                winHeight = window.innerHeight;
                winWidth = window.innerWidth;
				if(isNotIndex != null){
					setHeight();
				}
            }
            
            function setHeight(runOnce){
                if(runOnce) {
                    topElement1 = document.getElementById("Top");
                    topElement2 = document.getElementById("Top").firstElementChild;
					isNotIndex = true;
                    setElements();
                }
                topElement1.style.height=winHeight + "px";
                topElement2.style.top = offsetAmount + "%";
                topheight = topElement2.clientHeight;
                appdrawer.style.width = winWidth/2 + "px";
                appdrawer.style.height = winHeight/2 + "px";
                appdrawer.style.left = (-winWidth/4 + 18) + "px";
            }
            
            
            function setElements() {
                titleElement = document.getElementById("Title");
                renderedNav = document.getElementsByClassName("miniNav")[0].firstElementChild;
                renderedDropdown = document.getElementById("Dropdown");
                appdrawer = document.getElementById("AppDrawer");
                numberOfSections = document.getElementsByTagName('section').length - 1;
                for(i = 0;i < numberOfSections; ++i){
                    section[i] = document.querySelector('section:nth-of-type('+ ( 2 + i ) +')');
                }
                renderingLine = renderedNav.offsetHeight;
				
            }
            
            
            window.onscroll = function(){
                runScroll();
            }
            
            function runScroll() {
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
                    
                    if(scrollLevel > titleLevel + topheight - imagebuffer) {
                        renderedDropdown.classList.add("dropdown-active");
                        renderedDropdown.style.visibility = "visible";
                    } else {
                        renderedDropdown.classList.remove("dropdown-active");
                    }
                    for(i = 0;i < numberOfSections; ++i){
                        if(scrollLevel > (section[i].getBoundingClientRect().top - section[i].clientHeight + 200) && section[i].clientHeight <= 1440){
                        var paralaxAmount = (scrollLevel - section[i].offsetHeight)/3 - (200 * ((i+1) * 1.5)) - 50;
                                section[i].style.backgroundPosition = "30% "+ paralaxAmount + "px";
                        } else {
							section[i].style.backgroundPosition = "30% 0px";
						}
                    }
                }
            }
            function setDrawer(){
                appdrawer.addEventListener(mouse-over, function() {
                    setHeight(false);
                },true);
                appdrawer.addEventListener(mouse-out, function() {
                    appdrawer.style.height = 0;
                },true);
            }