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
        $.get("/res/php/getdata.php", function(response) {
            var provinces = ["CN-54_3","NP-BA","NP-BH","NP-DH","NP-GA","NP-JA","NP-KA","NP-KO","NP-LU","NP-MA","NP-ME","NP-NA","NP-RA","NP-SA","NP-SE","BT-11","BT-12","BT-13","BT-14","BT-15","BT-22","BT-23","BT-24","BT-GA","BT-14","IN-WB","IN-UT","IN-UP","IN-SK","IN-ML","IN-BR","IN-AS","IN-BD","BD-C","BD-E","BD-F"]
            var index = provinces.indexOf($(this).attr('id'));
            var data = $.parseJSON(response)[index];
            $(".temp").find("span").html(data[3]);
            $(".wind_speed").find("span").html(data[8]);
            $(".rain").find("span").html(data[9]);
            $(".wind_direction").find("span").html(data[13]);
        });
    }
});