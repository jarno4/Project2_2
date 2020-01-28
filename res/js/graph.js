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



$(".tab").click(function(){
	var t = $(this).attr('id');
	$("canvas").hide();
	$("li").children("a").css('background', '#fff');
	$("li").children("a").css('border-bottom-color', '#CCC');
		switch (t){
			case "tab1":
				$("#temperatuurg").show();
				$(this).children("a").css('background', '#f1f1f1');
				$(this).children("a").css('border-bottom-color', '#f1f1f1');
			    break;
			case "tab2":
			    $("#regenvalg").show();
			    $(this).children("a").css('background', '#f1f1f1');
			    $(this).children("a").css('border-bottom-color', '#f1f1f1');
			    break;
			case "tab3":
			    $("#windsterkteg").show();
			    $(this).children("a").css('background', '#f1f1f1');
			    $(this).children("a").css('border-bottom-color', '#f1f1f1');
			    break;
		}
	}
);


var ctx = document.getElementById('temperatuurg').getContext('2d');
var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'line',

	// The data for our dataset
	data: {
		labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
		datasets: [{
			label: 'My First dataset',
			backgroundColor: 'rgb(194, 236, 255)',
			borderColor: 'rgb(245, 5, 121)',
			data: [0, 10, 5, 2, 20, 30, 45]
		}]
	},

	// Configuration options go here
	options: {}
});


var ctx = document.getElementById('regenvalg').getContext('2d');
var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'line',

	// The data for our dataset
	data: {
		labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
		datasets: [{
			label: 'My First dataset',
			backgroundColor: 'rgb(294, 236, 215)',
			borderColor: 'rgb(245, 5, 121)',
			data: [0, 10, 5, 2, 20, 30, 45]
		}]
	},

	// Configuration options go here
	options: {}
});


var ctx = document.getElementById('windsterkteg').getContext('2d');
var chart = new Chart(ctx, {
	// The type of chart we want to create
	type: 'line',

	// The data for our dataset
	data: {
		labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
		datasets: [{
			label: 'My First dataset',
			backgroundColor: 'rgb(56, 236, 225)',
			borderColor: 'rgb(245, 5, 121)',
			data: [0, 10, 5, 2, 20, 30, 45]
		}]
	},

	// Configuration options go here
	options: {}
});


$("canvas").hide();



