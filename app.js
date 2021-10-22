$( document ).ready(function() {
    var progress = $("#progress-bar").attr("data-attr");
    $("#progress-bar").css("width", progress);

    $('.option input').change(function(ev) {
        if ( $(this).is(':checked') ){
            setTimeout(function (){
                $("#sub-answer").trigger("click", false);
            }, 1500);
        } 
    });
})