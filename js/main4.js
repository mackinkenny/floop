$(document).ready(function() {

    $('.link-type').click(function (e) {
        e.preventDefault(e);
        var flag = $(this).hasClass('active');
        $(this).find('img').toggleClass('icon-toggle', 200);
        $(this).toggleClass('active', function () {
            flag = !flag;
        });

        alert(flag);

        if (flag) {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/sorttype/' + this.id,
                success: function (data) {
                    alert('Success');
                }
            });
        }

        $(this).toggleClass('mx-1', 200);
    });


});
