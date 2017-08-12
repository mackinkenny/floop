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
               'id': $('#id').val(),
               'u_id': $('#u_id').val()
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