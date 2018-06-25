window.onload = function(){

    var len = $("#curtain1").css('width');

    $("#curtain1").animate({width:'12%'},2000);
    $("#curtain2").animate({
        width:'12%'
    },2000, function (){
        $("#boardScore").css("display", "block");
    });

    soundManager.setup({
        // where to find flash audio SWFs, as needed
        url: '/path/to/swf-files/',

        onready: function() {

            var sound = soundManager.createSound({
                id: "mySound",
                volume: 50,
                autoPlay: true,
                url: "../sound/win.mp3"
            });

            //soundManager.play('mySound');
        }
    });
}
