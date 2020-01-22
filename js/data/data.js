$("path").click( function(){
    var active_province = $(this);
    if($(this).hasClass('active')){
        $(this).removeClass('active');
    } else {
        $(this).addClass('active');
    }

    if(active_province.attr('id') !== $(this).attr('id')) $(this).removeClass('active');

    if(active_province){
        $("#sideheader").html('Data of '+active_province.attr('title'));
        $("#datatable").css('display','table');
        //document.getElementById(active_province).classList.add("active");
    } else {
        $("#sideheader").html('Please select a province');
        $("#datatable").css('display','none');
    }
});
