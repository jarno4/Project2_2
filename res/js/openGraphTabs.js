$(document).ready(function(){
  $("canvas").hide();
});


$("button").click(function(){
	var g = $(this).attr('id');

	    if($(this).hasClass('active')) {
	        $(this).removeClass('active');
	        $("tabcontent").hide();
	        $("#" + g + "g").hide();
	    } else {
	    	$("button").removeClass('active');
	        $(this).addClass('active');
	        $("#" + g + "g").show();
	    }
	}
);
