$(document).ready(function() {
    $('#btn-signup').click(function() {
        $.post('../controllers/signup.php', {
            'name': $('#name').val(),
            'email': $('#email').val(),
            'user': $('#user').val(),
            'pass': $('#pass').val(),
            'confirm': $('#confirm').val()
        }).done(function(result) {
            if(result == '0') {
                $(location).attr('href','../index.php');
            } else {
                console.log(result);
            }
        })
    })
})