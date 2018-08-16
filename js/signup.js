$(document).ready(function() {
    $('#btn-signup').click(function() {
        $.post('../controllers/signup.php', {
            'name': $('#name').val(),
            'email': $('#email').val(),
            'user': $('#user').val(),
            'pass': $('#pass').val(),
            'confirm': $('#confirm').val()
        }).done(function(result) {
            var erro = parseInt(result)

            if(erro == 0) {
                $(location).attr('href', '../index.php')
                return;
            }

            if(erro >= 2) {
                $('#erro-cadastro-usuario').removeClass('d-none')
                erro -= 2;
            } else {
                $('#erro-cadastro-usuario').addClass('d-none')
            }

            if(erro >= 1) {
                $('#erro-cadastro-senha').removeClass('d-none')
                erro -= 1;
            } else {
                $('#erro-cadastro-senha').addClass('d-none')
            }
        })
    })
})