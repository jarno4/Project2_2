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

