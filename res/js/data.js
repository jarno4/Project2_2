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