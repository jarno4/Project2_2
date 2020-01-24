
$("button").click(function(){
	var g = $(this).attr('id');

	    if($(this).hasClass('active')) {
	        $(this).removeClass('active');
	        $("canvas").hide();
	    } else {
	    	console.log("#" + g + "g");
	    	$("button").removeClass('active');
	        $(this).addClass('active');
	        $("#" + g + "g").show();
	    }
	}
);
