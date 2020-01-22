$("path").click( function(){
    var active_province = $(this);
    if($(this).hasClass('active')){
        $(this).removeClass('active');
    } else {
        $(this).addClass('active');
    }

    if(active_province.attr('id') !== $(this).attr('id')) $(this).removeClass('active');




    if(active_province){
        document.getElementById("sideheader").innerHTML = " Data of " + active_province.attr('title');
        document.getElementById("datatable").style.display = "table";
        document.getElementById(active_province).classList.add("active");
    }


    else {
        document.getElementById("sideheader").innerHTML = "Please select a province";
        document.getElementById("datatable").style.display = "none";
    }

});
