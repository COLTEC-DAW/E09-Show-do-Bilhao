$(document).ready(function() {
    $('#btn-login').click(function() {
        $.post('../controllers/signinController.php', {
            'user': $('#username').val(),
            'pass': $('#password').val()
        }).done(function(result) {
            var erro = parseInt(result);
            if(erro == 0) {
                $('#erro-login').addClass('d-none')
                $(location).attr('href', '../pages/quiz.php?id=0')
            } else {
                $('#erro-login').removeClass('d-none')
            }
        })
    })
})