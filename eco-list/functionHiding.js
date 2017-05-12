//remove functions from body when loading the page to hide functions in inspector
function hide_function() {
	document.getElementsByTagName("body")[0].removeAttribute("onLoad");
	document.getElementById("SelfDestruct").remove();
}