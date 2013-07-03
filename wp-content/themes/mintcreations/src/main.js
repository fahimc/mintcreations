(function(window) {
	function Main() {
		if (window.addEventListener) {
			window.addEventListener("load", onLoad);
		} else {
			window.attachEvent("onload", onLoad);
		}

	};

	function onLoad() {
		Parallax.init();
		//Parallax.addListener("view1","VIEW_OUT",view1Scroll);
		//Parallax.addListener("view2","VIEW_IN",view2Scroll);
		//Parallax.addListener("parallaxHolder","ON_CHANGE",onChange);
		
		//Parallax.setStartPoint("view2","slideIn",{left:"-300px"})
		//Parallax.setStartPoint("view2","slideBack",{left:"100%",fontSize:"10px",top:"50%",opacity:"0px"})
		//Parallax.setStartPoint("view3","girl",{left:"60%"})
		
		
		//document.getElementById("parallaxHolder").style.visibility="visible";
		
		
	};
	function view1Scroll(percent)
	{
		//console.log("view 1",percent);
	};
	function view2Scroll(percent)
	{
		//console.log("view 2",percent);
		
	};
	function onChange(index)
	{
		
		
	};
	Main();
}
)(window); 