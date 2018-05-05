

  function verifsupp(){
       
       msg = "Voulez-vous vraiment confirmer cette suppression ?"
  return confirm(msg);}
  
   function confirmajout(){
       
       alert("Ajout Valide .");
  }
   function confirmmodif(){
       
       alert("Modification Valide .");
  }
  
//babel color cycle
var lien = "";
function rand(max) {
  return (Math.floor(Math.random() * max));
}

function initaec() {
	for (var i=0;i<document.links.length;i++) {
		if (document.links[i].className == "aec") {
			document.links[i].onmouseover = aec;
			document.links[i].onmouseout = unaec;
			document.links[i].aecTimer = null;
		}
	}
}

function aec(isFF) {
	if (isFF) {
		lien = isFF.target;
		isFF.target.aecTimer = setInterval('lien.style.color = "rgb("+rand(256)+","+rand(256)+","+rand(256)+")";',100);
	}
}

function unaec(isFF) {
	if (isFF) { 
		clearInterval(isFF.target.aecTimer);
		isFF.target.aecTimer = null;
		isFF.target.style.color = "white";
	}
}

 window.onload = initaec;
 
  
 