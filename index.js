$(document).ready(function () { 
    $("div a").click(function() {
        var active = $(".active");
        $(active).removeClass("active");
        $(this).addClass("active");
    });

    $('.ui.radio.checkbox').checkbox();
});