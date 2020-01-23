$("svg").mousemove(function(){
    //alert("d");
    var countryId = $(this).attr('id');
    var countryName = $(this).attr('title');
    var tooltip = $("#tip");

    if(countryId){
        var x = $(this).offset().left;
        var y = $(this).offset().top;
        tooltip.css('left', (x - 20) + "px");
        tooltip.css('top', (y - 20) + "px");
        tooltip.html(countryName);
        tooltip.addClass("active");
      } else {
        return tooltip.removeClass("active");
      }
});
