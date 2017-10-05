$(document).ready(function() {

    var arr = [];




    $('.link-type').click(function (e) {
        e.preventDefault(e);
        var flag = $(this).hasClass('active');
        $(this).find('img').toggleClass('icon-toggle', 200);
        $(this).toggleClass('active', function () {
            flag = !flag;
        });




        if (flag) {

            arr.push(this.id);

            $.ajax({
                type: 'GET',
                dataType: 'json',
                data: {
                    'types': arr,
                },
                url: '/sorttype/' + $('#idcenter').val(),
                success: function (data) {
                    console.log('Access in')
                },
                error: function () {
                    alert('ERROR!')
                }
            });
        }

        if (!flag) {
            for (var i = 0; i < arr.length; i++) {
                if (arr[i] === this.id) {
                    arr.splice(i, 1)
                }
            }
            $.ajax({
                type: 'GET',
                dataType: 'json',
                data: {
                    'types': arr,
                },
                url: '/sorttype/' + $('#idcenter').val(),
                success: function (data) {
                    console.log('Access out')
                }
            });
        }


        console.log(arr)

        $(this).toggleClass('mx-1', 200);
    });


});
