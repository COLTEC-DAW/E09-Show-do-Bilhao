$(document).ready(function() {
    $('#btn-login').click(function() {
        $.post('../controllers/login.php', {
            'user': $('#username').val(),
            'pass': $('#password').val()
        }).done(function(result) {
            var erro = parseInt(result);
            if(erro == 1) {
                $('#erro-login').removeClass('d-none')
            } else {
                $('#erro-login').addClass('d-none')
                $(location).attr('href', '../pages/quiz.php?id=0')
            }
        })
    })
})