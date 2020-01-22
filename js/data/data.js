
    function changeTitle(event) {
      	var countryId = event.target.id;
      	var countryName = event.target.getAttribute("title");
        var idlist = document.getElementsByTagName('path')

        for(var i=0; i<idlist.length; i++){
          document.getElementById(idlist[i].id).classList.remove('active');
        }

      	if(countryId){
        	document.getElementById("sideheader").innerHTML = " Data of " + countryName;
        	document.getElementById("datatable").style.display = "table";
          document.getElementById(countryId).classList.add("active");      
      	}
      	else{
        	document.getElementById("sideheader").innerHTML = "Please select a province";
        	document.getElementById("datatable").style.display = "none";
      	}

    }
  

  