/*$(document).ready(function () {

    $('#link').click(function (e) {
        e.preventDefault(e);
        $('.modal-form').empty();

        $.ajax({
           type: "GET",
           url: "/products/" + $('#id').val(),
           success: function (data) {
             $('.modal-form').append('<img src="/uploads/images/products/' + data.img_path + '" style="height: 500px; width: auto;">').append('<br>' + data.name);
               //alert(data.name);
           },
           error: function () {
               alert('ERROR');
           },
           dataType: "json"
        });

        $('.modal-form').fadeIn(100);
    });

});*/