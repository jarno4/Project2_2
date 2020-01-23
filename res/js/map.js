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

$("path").click( function(){
    if($(this).hasClass('active')) {
        $(this).removeClass('active');
        $("#sideheader").html('Please select a province');
        $("#datatable").css('display', 'none');
    } else {
        $("path").removeClass('active');
        $(this).addClass('active');
        $("#sideheader").html('Data of ' + $(this).attr('title'));
        $("#datatable").css('display', 'table');
    }
});