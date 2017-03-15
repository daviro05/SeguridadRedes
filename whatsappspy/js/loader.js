$(document).ready(function() {
    /*setTimeout(function() {
        $(".loader").fadeOut(3500);
    },10000);*/
	setTimeout(function() {
        $(".download").fadeOut(3500);
		$("#myProgress").fadeOut(3500);
    },9000);
    setTimeout(function() {
        $(".mostrar").fadeIn(3500);
    },12000);
	
	if (document.getElementById('myBar') !=null){ 
		var elem = document.getElementById("myBar");   
		var width = 10;
		var id = setInterval(frame, 100);
		function frame() {
			if (width >= 100) {
				clearInterval(id);
			} else {
				width++; 
				elem.style.width = width + '%'; 
				document.getElementById("label").innerHTML = width * 1  + '%';
			}
		}
	}
  
});
