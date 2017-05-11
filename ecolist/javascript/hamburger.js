//burger Elements
var burgerMenu = null;
window.onload = function() {
	setBurger(true);
}
function setBurger(init) {
			winHeight = window.innerHeight;
            winWidth = window.innerWidth;
			var toggle = false;
			var position = -70;
			var lastXPos = 0;
			var lastX = 0;
			var slideAmount;
			var isOpen = false;
			var numTouchLogged = 0;
			var lastKnownTouch = 0;
			
				if(init) {
					burgerMenu = document.getElementById("Hamburger");
					winHeight = window.innerHeight;
					winWidth = window.innerWidth;
					window.addEventListener("touchstart",function(event){
						openBurger(event);
					},false);
					window.addEventListener("touchmove",function(event){
						slideBurger(toggle, event);
					},false);
					window.addEventListener("touchend",function(event){
						closeBurger(event);
					}, false);
					window.addEventListener("touchcancel",function(event){
						closeBurger(event);
					}, false);
				}
				function openBurger(event) {
					numTouchLogged = event.touches.length;
					for(i=0;i<numTouchLogged;++i){
						lastXPos = event.touches[i].clientX/winWidth;
						lastX = true;
						lastKnownTouch = lastX;
					}
					toggle = true;
				}
				function closeBurger(event) {
					toggle = false;
					if(isOpen){
						if (lastXPos > 0.8){
							for(i=0;i<numTouchLogged;++i){
								if(lastKnownTouch == lastX){burgerMenu.style.left = "-80%";isOpen=false;slideAmount=-80;};
							}
							numTouchLogged = 0;
						}
						
						if(slideAmount < -15){burgerMenu.style.left = "-80%";isOpen=false;slideAmount=-80;}
						else{burgerMenu.style.left = "0%";isOpen=true;slideAmount=0;};
					} else {
					
					if(slideAmount >= -43) {burgerMenu.style.left = "0%";isOpen=true;slideAmount=0;};
					if(slideAmount < -43){burgerMenu.style.left = "-80%";isOpen=false;slideAmount=-80;};
					}
				}
				function slideBurger(isHeld, event) {
					if(lastXPos<0.35 && !isOpen){
						for(i=0;i<event.touches.length;++i){
							interactionX = event.touches[i].clientX;
							if((interactionX/winWidth - lastXPos) > 0.10){
								slideAmount = interactionX/winWidth*100 - 80;
								if(isHeld) {
									position = slideAmount;
									if(position > 0) {position = 0; isOpen=true}
									burgerMenu.style.left = position + "%";
								}
							}
						}
					} else if(lastXPos > 0.45 && isOpen){
						for(i=0;i<event.touches.length;++i){
							interactionX = event.touches[i].clientX;
							slideAmount = interactionX/winWidth*100 - 80;
							lastKnownTouch = false;
							if(isHeld) {
								position = slideAmount;
								if(position > 0) {position = 0; isOpen=true}
								burgerMenu.style.left = position + "%";
							}
						}
					}
				}

			}