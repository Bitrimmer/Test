
$( "#user_form" ).on( 'beforeSubmit', function(e) {

    e.preventDefault();
    var form = $(this).serialize();

    var id = $('.user-form').attr('id');

    $.ajax({
        type: 'GET',
        url: '/user/update/?id=' + id,
        data: form,
        success: function () {

            alert('Данные пользователя обновлены')
            $('.confirm').html('Данные пользователя обновлены');
        },
        error: function () {
            $('.confirm').html('Ошибка');
        }

    });
});














       // $('.confirm').html(data);
