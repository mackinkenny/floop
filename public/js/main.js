$(document).ready(function () {

    $('#like').click(function (e) {
       e.preventDefault(e);
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
       });
       $.ajax({
           type: 'POST',
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
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



});