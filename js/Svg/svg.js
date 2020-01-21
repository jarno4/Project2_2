    function handleMouseMove(event) {
      var countryId = event.target.id;
      var countryName = event.target.getAttribute('title');
      var tooltip = document.getElementById("tip");

      if(countryId){
        var x = event.clientX;
        var y = event.clientY;

        tooltip.style.left = (x + 20) + "px";
        tooltip.style.top = (y - 20) + "px";
        tooltip.innerHTML = countryName;
        tooltip.classList.add("active");
      }

      else{
        return tooltip.classList.remove("active");
      }
    }
