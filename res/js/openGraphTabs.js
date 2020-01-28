$(document).ready(function(){
  $("canvas").hide();
});


$("#tabs li a").click(function(){
	var g = $(this).attr('id');

	    if($(this).hasClass('active')) {
	        $(this).removeClass('active');
	        $("canvascontainer").hide();
	        $("#" + g + "g").hide();
	    } else {
	    	$("button").removeClass('active');
	        $(this).addClass('active');
	        $("#" + g + "g").show();
	    }
	}
);
