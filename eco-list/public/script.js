			//initialize variable scope outside to null, so errors don't occur
			winHeight = window.innerHeight;
            winWidth = window.innerWidth;
			isNotIndex = null;
            let imagebuffer = 30;
            //Top Elements
            topElement1 = null;
            topElement2 = null;
            titleElement = null;
            let offsetAmount = 30; //percentage x/100
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
            
			//reize all relative functions when the window resizes
            window.onresize = function sizeRefactor() {
                winHeight = window.innerHeight;
                winWidth = window.innerWidth;
				if(isNotIndex != null){
					setHeight();
				}
            }
            
			//initialize the element references and set relative heights based on the screen
			//runOnce : (single time initialization, true or false)
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
            
            //called when setHeight is run to create references required
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
            
            //runs runscroll when event of window scrolling occurs
            window.onscroll = function(){
                runScroll();
            }
            
			/*initialize scrolling events
			test 1: make visible nav and logo stay always at top
			test 2:  change the color of the GUI nav(renderedNav) as the page passes a rendering line
					relative to the browser window height and top section screen
			test 3: test for if paralax scrolling occurs based on scroll positions for all sections of the page*/
            function runScroll() {
                var scrollLevel = window.scrollY;
                var titleLevel = winHeight * offsetAmount / 100;
				//test 1:
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
					//test 2:
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
                    //test 3:
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
			//mouse event for app drawer appearing when mouse is over the chevron to prevent mouse cursor conflics of
			//default css:hover pseudo
            function setDrawer(){
                appdrawer.addEventListener(mouse-over, function() {
                    setHeight(false);
                },true);
                appdrawer.addEventListener(mouse-out, function() {
                    appdrawer.style.height = 0;
                },true);
            }
			//temporary self destruct on nav -- unused
            function hide_function() {
                document.getElementsByTagName("body")[0].removeAttribute("onLoad");
                document.getElementById("SelfDestruct").remove();
            }