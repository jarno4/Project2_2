
    function changeTitle(event) {
      	var countryId = event.target.id;
      	var countryName = event.target.getAttribute('title');

      	if(countryId){
        	document.getElementById("sideheader").innerHTML = " Data of " + countryName;
        	document.getElementById("datatable").style.display = "table";

      	}
      	else{
        	document.getElementById("sideheader").innerHTML = "Please select a province";
        	document.getElementById("datatable").style.display = "none";
      	}
    }
  

  