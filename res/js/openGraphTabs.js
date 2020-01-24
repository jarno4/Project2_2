
$("button").click(function(){
	    if($(this).hasClass('active')) {
	        $(this).removeClass('active');
	        $("canvas"+("id", this.id)).hide();
	    } else {
	    	$("button").removeClass('active');
	        $(this).addClass('active');
	        $("canvas"+("id", this.id)).show();
	    }
	}
);
