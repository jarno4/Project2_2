$("path").mousemove(function(e){
    if($(this).attr('id')){
        $("#tip").css('left', (e.pageX - 60) + "px");
        $("#tip").css('top', (e.pageY - 50) + "px");
        $("#tip").html($(this).attr('title'));
        $("#tip").addClass("active");
    } else {
        $("#tip").removeClass("active");
    }
}).mouseleave(function(){
    $("#tip").removeClass("active");
}).click( function(){
    if($(this).hasClass('active')) {
        $(this).removeClass('active');
        $("#sideheader").html('Please select a province');
        $("canvas").hide();
        $(".tab").hide();
        $("#tabs").css('border-bottom', 'none');
    } else {
        $("path").removeClass('active');
        $("#tabs").css('border-bottom', '1px solid #CCC');
        $("canvas").hide();
        $("li").children("a").css('background', '#fff');
        $("li").children("a").css('border-bottom-color', '#ccc');
        $(this).addClass('active'); 
        $("#sideheader").html('Data of ' + $(this).attr('title'));
        $(".tab").show();
        $("#tab1").children("a").css('background', '#f1f1f1');
        $("#tab1").children("a").css('border-bottom-color', '#f1f1f1');
        $("#temperatuurg").show();
    }
});