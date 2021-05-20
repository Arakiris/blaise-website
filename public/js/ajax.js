// JavaScript Document
	if (document.layers) {browserType = "nn4"}
	if (document.all) {browserType = "ie"}
	if (window.navigator.userAgent.toLowerCase().match("gecko")) {browserType= "gecko"}

	function showhide(strDiv) {
	  if (browserType == "gecko" )
	     document.poppedLayer = eval('document.getElementById(\'' + strDiv + '\')');
	  else if (browserType == "ie")
	     document.poppedLayer = eval('document.all[\'' + strDiv + '\']');
	  else
	     document.poppedLayer = eval('document.layers[\'`' + strDiv + '\']');
	     
	  	if (document.poppedLayer.style.display != "block"){
	  		document.poppedLayer.style.display = "block";
		}else{
			document.poppedLayer.style.display = "none";
		}
	}
	
	
	function hide(strDiv) {
	  if (browserType == "gecko" )
	     document.poppedLayer = eval('document.getElementById(\'' + strDiv + '\')');
	  else if (browserType == "ie")
	     document.poppedLayer = eval('document.all[\'' + strDiv + '\']');
	  else
	     document.poppedLayer = eval('document.layers[\'`' + strDiv + '\']');
		 document.poppedLayer.style.display = "none";
	}
	
	function show(strDiv) {
	  if (browserType == "gecko" )
	     document.poppedLayer = eval('document.getElementById(\'' + strDiv + '\')');
	  else if (browserType == "ie")
	     document.poppedLayer = eval('document.all[\'' + strDiv + '\']');
	  else
	     document.poppedLayer = eval('document.layers[\'`' + strDiv + '\']');
		 document.poppedLayer.style.display = "block";
	}