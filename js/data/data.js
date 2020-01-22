$("path").click( function(){
    if($(this).hasClass('active')) {
        $(this).removeClass('active');
        $("#sideheader").html('Please select a province');
        $("#datatable").css('display', 'none');
    } else {
        $(this).addClass('active');
        $("#sideheader").html('Data of ' + $(this).attr('title'));
        $("#datatable").css('display', 'table');
    }

    if($(this).attr('id') !== $(this).attr('id')) $(this).removeClass('active');
});