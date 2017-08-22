$(document).ready(function () {


    $('#like').click(function (e) {
        e.preventDefault(e);
        $.ajax({
            type: 'GET',
            url: '/like',
            data: {
               'id': $('#lid').val(),
               'u_id': $('#lu_id').val()
            },
            dataType: 'json',
            success: function (data) {
               alert('it works!' + data.Success);
            },
            /*error: function () {
               alert('it doesn`t work!');
            }*/
        });
    });

    $('#buy').click(function (e) {
        e.preventDefault(e);
        $.ajax({
            type: 'GET',
            url: '/buy',
            data: {
                'id': $('#bid').val(),
                'u_id': $('#bu_id').val()
            },
            dataType: 'json',
            success: function (data) {
                alert('it works!' + data.Success);
            },
            /*error: function () {
             alert('it doesn`t work!');
             }*/
        });
    });

    $('#subscribe').click(function (e) {
        e.preventDefault(e);
        $.ajax({
            type: 'POST',
            url: '/subscribe',
            data: {
                'id': $('#sid').val(),
                'b_id': $('#sb_id').val(),
                'u_id': $('#su_id').val()
            },
            dataType: 'json',
            success: function (data) {
                alert('it works!' + data.Success);
            },
            /*error: function () {
             alert('it doesn`t work!');
             }*/
        });
    });

});