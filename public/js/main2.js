$(document).ready(function() {

    $.ajax({
        type: 'GET',
        url: '/centers',
        dataType: 'json',
        success: function (data) {
            for (var i = 0; i <= data.Success.length - 1; i++) {
                $('#ajax-home').append( "<a href='/center/" + data.Success[i].id + "' class='col-12 my-4'>" +
                                        "<span class='row'>" +
                                        "<span class='col-auto pr-0'>" +
                                        "<img src='/uploads/centers/" + data.Success[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                                        "</span>" +
                                        "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                                        "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + data.Success[i].name + "</h4>" +
                                        "</span>" +
                                        "</span>" +
                                        "</a>");
            };
        }
    });




    $.ajax({
        type: 'GET',
        url: '/boutics',
        dataType: 'json',
        success: function (data) {
            for (var i = 0; i <= data.Success.length - 1; i++) {
                $('#ajax-home2').append( "<a href='/profile/" + data.Success[i].user_id + "' class='col-12 my-4 pr-0'>" +
                    "<span class='d-flex flex-row-reverse'>" +
                    "<div class='col-auto pl-0'>" +
                    "<img src='/uploads/avatars/" + data.Success[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                    "</div>" +
                    "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                    "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + data.Success[i].name + "</h4>" +
                    "</span>" +
                    "</span>" +
                    "</a>" );
            };
        }
    });




    var flag = false;
    $('#female').click(function(e) {

        e.preventDefault(e);
        if (flag === false) {
            $('#femalecol').addClass('mx-auto');
            $('#sort1').show(600);
            $('#sort2').show(600);
            $('#malecol').hide();
            $("#childcol").hide();
            $('#body').animate({
                backgroundColor: '#E69275'
            }, 500);
            $('#body2').animate({
                backgroundColor: '#E69275'
            }, 500);
            $('#body3').animate({
                backgroundColor: '#E69275'
            }, 500);
            $.ajax({
                type: 'GET',
                url: '/cat/2',
                dataType: 'json',
                success: function (data) {
                    alert('it works!' + data.Success);
                }
            });
        }
        else if (flag === true) {
            $('#femalecol').removeClass('mx-auto');
            $('#sort1').hide();
            $('#sort2').hide();
            $('#malecol').show();
            $("#childcol").show();
            $('#body').animate({
                backgroundColor: '#fff'
            }, 500);
            $('#body2').animate({
                backgroundColor: '#fff'
            }, 500);
            $('#body3').animate({
                backgroundColor: '#fff'
            }, 500);
        }
        flag = !flag;

    });
    
    $('#child').click(function(e) {
        e.preventDefault(e);
        if (!flag) {
            $('#childcol').addClass('mx-auto');
            $('#sort1').show(600);
            $('#sort2').show(600);
            $('#femalecol').hide();
            $("#malecol").hide();
            $('#body').animate({
                backgroundColor: '#C69DB9'
            }, 1000);
            $('#body2').animate({
                backgroundColor: '#C69DB9'
            }, 1000);
            $('#body3').animate({
                backgroundColor: '#C69DB9'
            }, 1000);
        }
        else {
            $('#childcol').removeClass('mx-auto');
            $('#sort1').hide();
            $('#sort2').hide();
            $('#femalecol').show();
            $("#malecol").show();
            $('#body').animate({
                backgroundColor: '#fff'
            }, 1000);
            $('#body2').animate({
                backgroundColor: '#fff'
            }, 1000);
            $('#body3').animate({
                backgroundColor: '#fff'
            }, 1000);
        }
        flag = !flag;
    });
    
    $('#male').click(function(e) {
        e.preventDefault(e);
        if (!flag) {
            $('#malecol').addClass('mx-auto');
            $('#sort1').show(600);
            $('#sort2').show(600);
            $('#femalecol').hide();
            $("#childcol").hide();
            $('#body').animate({
                backgroundColor: '#86C4DF'
            }, 1000);
            $('#body2').animate({
                backgroundColor: '#86C4DF'
            }, 1000);
            $('#body3').animate({
                backgroundColor: '#86C4DF'
            }, 1000);
        }
        else {
            $('#malecol').removeClass('mx-auto');
            $('#sort1').hide();
            $('#sort2').hide();
            $('#femalecol').show();
            $("#childcol").show();
            $('#body').animate({
                backgroundColor: '#fff'
            }, 1000);
            $('#body2').animate({
                backgroundColor: '#fff'
            }, 1000);
            $('#body3').animate({
                backgroundColor: '#fff'
            }, 1000);
        }
        flag = !flag;
    });
    
    
});