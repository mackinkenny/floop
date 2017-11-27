$(document).ready(function() {



    var html1 = $('#ajax-home').html();
    var html2 = $('#ajax-home2').html();

    var allcenters;
    var allboutics;
    var centermale;
    var centerchild;
    var centerfemale;
    var bouticchild;
    var bouticmale;
    var bouticfemale;

    var catId = 0;

    var flag = false;

    function ajax0() {
        $.ajax({
            type: 'GET',
            url: '/cat/0',
            dataType: 'json'
        });
    }


    if(!flag) {

        $.ajax({
            type: 'GET',
            url: '/centers',
            dataType: 'json',
            success: function (data) {
                allcenters = data.Success;
                for (var i = 0; i <= data.Success.length - 1; i++) {
                    $('#ajax-home').append( "<a href='/center/" + data.Success[i].id + "' class='col-12 my-4'>" +
                        "<span class='row'>" +
                        "<span class='col-auto pr-0'>" +
                        "<img src='/uploads/centers/" + data.Success[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                        "</span>" +
                        "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                        "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + data.Success[i].name + "</h4>" +
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
                allboutics = data.Success;
                for (var i = 0; i <= data.Success.length - 1; i++) {
                    $('#ajax-home2').append( "<a href='/profile/" + data.Success[i].user_id + "' class='col-12 my-4 pr-0'>" +
                        "<span class='d-flex flex-row-reverse'>" +
                        "<div class='col-auto pl-0'>" +
                        "<img src='/uploads/boutic/avatars/" + data.Success[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                        "</div>" +
                        "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                        "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + data.Success[i].name + "</h4>" +
                        "</span>" +
                        "</span>" +
                        "</a>" );
                };
            }
        });

    }

    function appendItemsBoutics(bouts) {
        for (var i = 0; i <= bouts.length - 1; i++) {
            if ((i + 1) % 2 != 0) {
                $('#ajax-boutics').append("<a href='/profile/" + bouts[i].user_id + "' class='col-12 my-4'>" +
                    "<span class='row'>" +
                    "<span class='col-auto pr-0'>" +
                    "<img src='/uploads/boutic/avatars/" + bouts[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    "</span>" +
                    "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                    "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + bouts[i].name + "</h4>" +
                    "</span>" +
                    "</span>" +
                    "</a>");
            }
            else {
                $('#ajax-boutics2').append("<a href='/profile/" + bouts[i].user_id + "' class='col-12 my-4 pr-0'>" +
                    "<span class='d-flex flex-row-reverse'>" +
                    "<div class='col-auto pl-0'>" +
                    "<img src='/uploads/boutic/avatars/" + bouts[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    "</div>" +
                    "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                    "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + bouts[i].name + "</h4>" +
                    "</span>" +
                    "</span>" +
                    "</a>");
            }


        };
    }

    function appendItemsCenters(cents) {
        for (var i = 0; i <= cents.length - 1; i++) {
            if ((i + 1) % 2 != 0) {
                $('#ajax-centers').append("<a href='/center/" + cents[i].id + "' class='col-12 my-4'>" +
                    "<span class='row'>" +
                    "<span class='col-auto pr-0'>" +
                    "<img src='/uploads/centers/" + cents[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    "</span>" +
                    "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                    "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + cents[i].name + "</h4>" +
                    "</span>" +
                    "</span>" +
                    "</a>");
            }
            else {
                $('#ajax-centers2').append("<a href='/center/" + cents[i].id + "' class='col-12 my-4 pr-0'>" +
                    "<span class='d-flex flex-row-reverse'>" +
                    "<div class='col-auto pl-0'>" +
                    "<img src='/uploads/centers/" + cents[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    "</div>" +
                    "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                    "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + cents[i].name + "</h4>" +
                    "</span>" +
                    "</span>" +
                    "</a>");
            }

        };
    }


    function appendItems() {
        for (var i = 0; i <= allcenters.length - 1; i++) {
            $('#ajax-home').append( "<a href='/center/" + allcenters[i].id + "' class='col-12 my-4'>" +
                "<span class='row'>" +
                "<span class='col-auto pr-0'>" +
                "<img src='/uploads/centers/" + allcenters[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                "</span>" +
                "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + allcenters[i].name + "</h4>" +
                "</span>" +
                "</span>" +
                "</a>");
        };

        for (var i = 0; i <= allboutics.length - 1; i++) {
            $('#ajax-home2').append( "<a href='/profile/" + allboutics[i].user_id + "' class='col-12 my-4 pr-0'>" +
                "<span class='d-flex flex-row-reverse'>" +
                "<div class='col-auto pl-0'>" +
                "<img src='/uploads/boutic/avatars/" + allboutics[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                "</div>" +
                "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + allboutics[i].name + "</h4>" +
                "</span>" +
                "</span>" +
                "</a>" );
        };
    }


    $('#female').click(function(e) {

        e.preventDefault(e);
        if (flag === false) {
            $('#ajax-home').find('a.col-12').remove();
            $('#ajax-home2').find('a.col-12').remove();
            $('#femalecol').addClass('mx-auto');
            $('#malecol').fadeOut(300);
            $("#childcol").fadeOut(300);

            if($(document).width() < 800) {
                $('.female-slide').show();
            }
            else  {
                $('.second-slide').show();
            }
            $('.static-slider').removeClass('d-block');
            $('.static-slider').addClass('d-none');
            $('div#carouselExampleIndicators.carousel.slide').removeClass('d-md-block');


            $('#body').animate({
                backgroundColor: '#E19075'
            }, 500);
            $('#body2').animate({
                backgroundColor: '#E19075'
            }, 500);
            $('#body3').animate({
                backgroundColor: '#E19075'
            }, 500);
            catId = 2;
            $.ajax({
                type: 'GET',
                url: '/cat/2',
                dataType: 'json',
                success: function (data) {
                    centerfemale = data.centers;
                    bouticfemale = data.boutics;
                    for (var val of data.centers) {
                        $('#ajax-home').append( "<a href='/center/" + val.id + "' class='col-12 my-4'>" +
                            "<span class='row'>" +
                            "<span class='col-auto pr-0'>" +
                            "<img src='/uploads/centers/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                            "</span>" +
                            "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                            "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + val.name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>");
                    }
                    for (var val of data.boutics) {
                        $('#ajax-home2').append( "<a href='/profile/" + val.user_id + "' class='col-12 my-4 pr-0'>" +
                            "<span class='d-flex flex-row-reverse'>" +
                            "<div class='col-auto pl-0'>" +
                            "<img src='/uploads/boutic/avatars/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                            "</div>" +
                            "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                            "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + val.name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>" );
                    }
                }
            });


        }
        else if (flag === true) {
            ajax0();
            $('#ajax-home').find('a.col-12').remove();
            $('#ajax-home2').find('a.col-12').remove();
            $('#femalecol').removeClass('mx-auto');
            $('#malecol').fadeIn(500);
            $("#childcol").fadeIn(500);
            $('#body').animate({
                backgroundColor: '#D8D9D9'
            }, 500);
            $('#body2').animate({
                backgroundColor: '#C3C4C4'
            }, 500);
            $('#body3').animate({
                backgroundColor: '#C3C4C4'
            }, 500);

            $('div#carouselExampleIndicators.carousel.slide').addClass('d-md-block');
            $('.static-slider').removeClass('d-none');
            $('.static-slider').addClass('d-block');
            $('.second-slide').hide();
            $('.female-slide').hide();
            catId = 0;
            appendItems();

        }
        flag = !flag;

    });

    $('#child').click(function(e) {
        e.preventDefault(e);
        if (!flag) {
            $('#ajax-home').find('a.col-12').remove();
            $('#ajax-home2').find('a.col-12').remove();
            $('#childcol').addClass('mx-auto');
            $('#femalecol').fadeOut(300);
            $("#malecol").fadeOut(300);
            $('div#carouselExampleIndicators.carousel.slide').removeClass('d-md-block');

            $('.static-slider').removeClass('d-block');
            $('.static-slider').addClass('d-none');
            if($(document).width() < 800) {
                $('.child-slide').show();
            }
            else {
                $('.third-slide').show();
            }

            $('#body').animate({
                backgroundColor: '#C46FA8'
            }, 1000);
            $('#body2').animate({
                backgroundColor: '#C46FA8'
            }, 1000);
            $('#body3').animate({
                backgroundColor: '#C46FA8'
            }, 1000);
            catId = 3;
            $.ajax({
                type: 'GET',
                url: '/cat/3',
                dataType: 'json',
                success: function (data) {
                    centerchild = data.centers;
                    bouticchild = data.boutics;
                    for (var val of data.centers) {
                        $('#ajax-home').append( "<a href='/center/" + val.id + "' class='col-12 my-4'>" +
                            "<span class='row'>" +
                            "<span class='col-auto pr-0'>" +
                            "<img src='/uploads/centers/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                            "</span>" +
                            "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                            "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + val.name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>");
                    }
                    for (var val of data.boutics) {
                        $('#ajax-home2').append( "<a href='/profile/" + val.user_id + "' class='col-12 my-4 pr-0'>" +
                            "<span class='d-flex flex-row-reverse'>" +
                            "<div class='col-auto pl-0'>" +
                            "<img src='/uploads/boutic/avatars/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                            "</div>" +
                            "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                            "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + val.name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>" );
                    }
                }
            });
        }
        else {
            ajax0();
            $('#ajax-home').find('a.col-12').remove();
            $('#ajax-home2').find('a.col-12').remove();
            $('#childcol').removeClass('mx-auto');
            $('#femalecol').fadeIn(500);
            $("#malecol").fadeIn(500);
            $('#body').animate({
                backgroundColor: '#D8D9D9'
            }, 1000);
            $('#body2').animate({
                backgroundColor: '#C3C4C4'
            }, 1000);
            $('#body3').animate({
                backgroundColor: '#C3C4C4'
            }, 1000);

            $('div#carouselExampleIndicators.carousel.slide').addClass('d-md-block');
            $('.static-slider').removeClass('d-none');
            $('.static-slider').addClass('d-block');
            $('.third-slide').hide();
            $('.child-slide').hide();
            catId = 0;

            appendItems();
        }
        flag = !flag;
    });

    $('#male').click(function(e) {
        e.preventDefault(e);
        if (!flag) {

            $('#ajax-home').find('a.col-12').remove();
            $('#ajax-home2').find('a.col-12').remove();
            $('#malecol').addClass('mx-auto');
            $('#femalecol').fadeOut(300);
            $("#childcol").fadeOut(300);
            $('div#carouselExampleIndicators.carousel.slide').removeClass('d-md-block');

            $('.static-slider').removeClass('d-block');
            $('.static-slider').addClass('d-none');
            if($(document).width() < 800) {
                console.log($(document).width())
                $('.male-slide').show();
            }
            else {
                console.log($(document).width())
                $('.first-slide').show();
            }

            $('#body').animate({
                backgroundColor: '#86C4DF'
            }, 1000);
            $('#body2').animate({
                backgroundColor: '#86C4DF'
            }, 1000);
            $('#body3').animate({
                backgroundColor: '#86C4DF'
            }, 1000);
            catId = 1;
            $.ajax({
                type: 'GET',
                url: '/cat/1',
                dataType: 'json',
                success: function (data) {
                    centermale = data.centers;
                    bouticmale = data.boutics;
                    for (var val of data.centers) {
                        $('#ajax-home').append( "<a href='/center/" + val.id + "' class='col-12 my-4'>" +
                            "<span class='row'>" +
                            "<span class='col-auto pr-0'>" +
                            "<img src='/uploads/centers/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                            "</span>" +
                            "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                            "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + val.name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>");
                    };
                    for (var val of data.boutics) {
                        $('#ajax-home2').append( "<a href='/profile/" + val.user_id + "' class='col-12 my-4 pr-0'>" +
                            "<span class='d-flex flex-row-reverse'>" +
                            "<div class='col-auto pl-0'>" +
                            "<img src='/uploads/boutic/avatars/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                            "</div>" +
                            "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                            "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + val.name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>" );
                    }
                }
            });
        }
        else {
            ajax0();
            $('#ajax-home').find('a.col-12').remove();
            $('#ajax-home2').find('a.col-12').remove();
            $('#malecol').removeClass('mx-auto');
            $('#femalecol').fadeIn(500);
            $("#childcol").fadeIn(500);
            $('div#carouselExampleIndicators.carousel.slide').addClass('d-md-block');
            $('.static-slider').removeClass('d-none');
            $('.static-slider').addClass('d-block');
            $('.first-slide').hide();
            $('.male-slide').hide();
            $('#body').animate({
                backgroundColor: '#D8D9D9'
            }, 1000);
            $('#body2').animate({
                backgroundColor: '#C3C4C4'
            }, 1000);
            $('#body3').animate({
                backgroundColor: '#C3C4C4'
            }, 1000);
            catId = 0;

            appendItems();
        }
        flag = !flag;
    });


    $('#centers').click(function (e) {
       e.preventDefault(e);
           $('#sectionRightAndLeft').hide(500);
       $('#containerWithCenters').show(500);
           $('#ajax-centers').empty();
           $('#ajax-centers2').empty();
           if (catId === 1)
               appendItemsCenters(centermale);
           if (catId === 2)
               appendItemsCenters(centerfemale);
           if (catId === 3)
               appendItemsCenters(centerchild);
           if (catId === 0)
               appendItemsCenters(allcenters);
    });

    $('#backToAll').click(function (e) {
        e.preventDefault(e);
            $('#containerWithCenters').hide(500);
        $('#sectionRightAndLeft').show(500);

    });




    $('#boutics').click(function (e) {
        e.preventDefault(e);
            $('#sectionRightAndLeft').hide(500);
        $('#containerWithBoutics').show(500);
            $('#ajax-boutics').empty();
            $('#ajax-boutics2').empty();
            if (catId === 1)
                appendItemsBoutics(bouticmale);
            if (catId === 2)
                appendItemsBoutics(bouticfemale);
            if (catId === 3)
                appendItemsBoutics(bouticchild);
            if (catId === 0)
                appendItemsBoutics(allboutics);

        });

    $('#backToAll2').click(function (e) {
        e.preventDefault(e);


            $('#containerWithBoutics').hide(500);
        $('#sectionRightAndLeft').show(500);
        });


});