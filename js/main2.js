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
                cents = data.Success;
                for (var i = 0; i <= cents.length - 1; i++) {
                    if ((i + 1) % 2 != 0) {
                        $('#ajax-centers').append("<a href='/center/" + cents[i].id + "' class='col-12 my-4'>" +
                            "<span class='row'>" +
                            "<span class='col-auto pr-0'>" +
                            "<img src='/uploads/centers/" + cents[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                            "</span>" +
                            "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                            "<h4 class='px-4 py-1 w-100' style='background-color: #ECECE9; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + cents[i].name + "</h4>" +
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
                            "<h4 class='px-4 py-1 w-100' style='background-color: #ECECE9; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + cents[i].name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>");
                    }

                };
                // for (var i = 0; i <= data.Success.length - 1; i++) {
                //     $('#ajax-home').append( "<a href='/center/" + data.Success[i].id + "' class='col-12 my-4'>" +
                //         "<span class='row'>" +
                //         "<span class='col-auto pr-0'>" +
                //         "<img src='/uploads/centers/" + data.Success[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                //         "</span>" +
                //         "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                //         "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + data.Success[i].name + "</h4>" +
                //         "</span>" +
                //         "</span>" +
                //         "</a>");
                // };
            }
        });



        // $.ajax({
        //     type: 'GET',
        //     url: '/boutics',
        //     dataType: 'json',
        //     success: function (data) {
        //         allboutics = data.Success;
        //         for (var i = 0; i <= data.Success.length - 1; i++) {
        //             $('#ajax-home2').append( "<a href='/profile/" + data.Success[i].user_id + "' class='col-12 my-4 pr-0'>" +
        //                 "<span class='d-flex flex-row-reverse'>" +
        //                 "<div class='col-auto pl-0'>" +
        //                 "<img src='/uploads/boutic/avatars/" + data.Success[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
        //                 "</div>" +
        //                 "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
        //                 "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + data.Success[i].name + "</h4>" +
        //                 "</span>" +
        //                 "</span>" +
        //                 "</a>" );
        //         };
        //     }
        // });

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
                    "<h4 class='px-4 py-1 w-100' style='background-color: #ECECE9; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + bouts[i].name + "</h4>" +
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
                    "<h4 class='px-4 py-1 w-100' style='background-color: #ECECE9; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + bouts[i].name + "</h4>" +
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
                    "<h4 class='px-4 py-1 w-100' style='background-color: #ECECE9; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + cents[i].name + "</h4>" +
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
                    "<h4 class='px-4 py-1 w-100' style='background-color: #ECECE9; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + cents[i].name + "</h4>" +
                    "</span>" +
                    "</span>" +
                    "</a>");
            }

        };
    }


    function appendItems() {
        for (var i = 0; i <= cents.length - 1; i++) {
            if ((i + 1) % 2 != 0) {
                $('#ajax-centers').append("<a href='/center/" + cents[i].id + "' class='col-12 my-4'>" +
                    "<span class='row'>" +
                    "<span class='col-auto pr-0'>" +
                    "<img src='/uploads/centers/" + cents[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    "</span>" +
                    "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                    "<h4 class='px-4 py-1 w-100' style='background-color: #ECECE9; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + cents[i].name + "</h4>" +
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
                    "<h4 class='px-4 py-1 w-100' style='background-color: #ECECE9; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + cents[i].name + "</h4>" +
                    "</span>" +
                    "</span>" +
                    "</a>");
            }

        };
    }


    $('#female').click(function(e) {

        e.preventDefault(e);
        if (flag === false) {
            $('#ajax-centers').empty();
            $('#ajax-centers2').empty();
            $('#femalecol').fadeOut(400, function () {
                $(this).fadeIn(500)
            });
            $('#malecol').fadeOut(400);
            $("#childcol").fadeOut(400);

            if($(document).width() < 800) {
                $('.female-slide').show();
            }
            else  {
                $('.second-slide').show();
            }
            $('.static-slider').removeClass('d-block');
            $('.static-slider').addClass('d-none');
            $('div#carouselExampleIndicators.carousel.slide').removeClass('d-md-block');

            $('.cats').animate({
                backgroundColor: '#e19075'
            }, 300);
            $('.rounded-circle').animate({
                borderColor: '#c26343'
            },300);
            $('.input-group-addon').animate({
                borderColor: '#c26343'
            },300);
            $('.rounded-circle-our').animate({
                backgroundColor: '#f6b9a4'
            },300);
            $('.user-drop').animate({
                borderColor: '#c26343',
                backgroundColor: '#f6b9a4'
            },300);
            $('.user-drop').removeClass('text-standard');
            $('.user-drop').addClass('text-female');
            $('.logo').addClass('d-none');
            $('.logof').removeClass('d-none');
            $('.menu').addClass('d-none');
            $('.menuf').removeClass('d-none');
            $('.search').addClass('d-none');
            $('.searchf').removeClass('d-none');
            $('.home').addClass('d-none');
            $('.homef').removeClass('d-none');
            $('.percent').addClass('d-none');
            $('.percentf').removeClass('d-none');
            $('.profile').addClass('d-none');
            $('.profilef').removeClass('d-none');
            catId = 2;
            $.ajax({
                type: 'GET',
                url: '/cat/2',
                dataType: 'json',
                success: function (data) {
                    var centers = data.centers;
                    appendItemsCenters(centers)
                    // bouticfemale = data.boutics;
                    // for (var val of data.centers) {
                    //     $('#ajax-home').append( "<a href='/center/" + val.id + "' class='col-12 my-4'>" +
                    //         "<span class='row'>" +
                    //         "<span class='col-auto pr-0'>" +
                    //         "<img src='/uploads/centers/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    //         "</span>" +
                    //         "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                    //         "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + val.name + "</h4>" +
                    //         "</span>" +
                    //         "</span>" +
                    //         "</a>");
                    // }
                    // for (var val of data.boutics) {
                    //     $('#ajax-home2').append( "<a href='/profile/" + val.user_id + "' class='col-12 my-4 pr-0'>" +
                    //         "<span class='d-flex flex-row-reverse'>" +
                    //         "<div class='col-auto pl-0'>" +
                    //         "<img src='/uploads/boutic/avatars/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    //         "</div>" +
                    //         "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                    //         "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + val.name + "</h4>" +
                    //         "</span>" +
                    //         "</span>" +
                    //         "</a>" );
                    // }
                }
            });


        }
        else if (flag === true) {
            ajax0();
            $('#ajax-centers').empty();
            $('#ajax-centers2').empty();
            $('#femalecol').fadeOut(100,function () {
                $('#femalecol').fadeIn(500),
                $('#malecol').fadeIn(500),
                $("#childcol").fadeIn(500)
            });

            $('.cats').animate({
                backgroundColor: '#fefefe'
            }, 500);
            $('.rounded-circle').animate({
                borderColor: '#5b5b5b'
            },300);
            $('.input-group-addon').animate({
                borderColor: '#5b5b5b'
            },300);
            $('.rounded-circle-our').animate({
                backgroundColor: '#ebedec'
            },300);
            $('.user-drop').animate({
                borderColor: '#5b5b5b',
                backgroundColor: '#ebedec'
            },300);
            $('.user-drop').addClass('text-standard');
            $('.user-drop').removeClass('text-female');
            $('.logof').addClass('d-none');
            $('.logo').removeClass('d-none');
            $('.menuf').addClass('d-none');
            $('.menu').removeClass('d-none');
            $('.searchf').addClass('d-none');
            $('.search').removeClass('d-none');
            $('.homef').addClass('d-none');
            $('.home').removeClass('d-none');
            $('.percentf').addClass('d-none');
            $('.percent').removeClass('d-none');
            $('.profilef').addClass('d-none');
            $('.profile').removeClass('d-none');
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
            $('#ajax-centers').empty();
            $('#ajax-centers2').empty();
            $('#childcol').fadeOut(400, function () {
                $(this).fadeIn(500)
            });
            $('#malecol').fadeOut(400);
            $("#femalecol").fadeOut(400);
            $('div#carouselExampleIndicators.carousel.slide').removeClass('d-md-block');

            $('.static-slider').removeClass('d-block');
            $('.static-slider').addClass('d-none');
            if($(document).width() < 800) {
                $('.child-slide').show();
            }
            else {
                $('.third-slide').show();
            }

            $('.cats').animate({
                backgroundColor: '#c46fa8'
            }, 300);
            $('.rounded-circle').animate({
                borderColor: '#6e2b57'
            },300);
            $('.input-group-addon').animate({
                borderColor: '#6e2b57'
            },300);
            $('.rounded-circle-our').animate({
                backgroundColor: '#e0b9d8'
            },300);
            $('.user-drop').animate({
                borderColor: '#6e2b57',
                backgroundColor: '#e0b9d8'
            },300);
            $('.user-drop').removeClass('text-standard');
            $('.user-drop').addClass('text-child');
            $('.logo').addClass('d-none');
            $('.logoc').removeClass('d-none');
            $('.menu').addClass('d-none');
            $('.menuc').removeClass('d-none');
            $('.search').addClass('d-none');
            $('.searchc').removeClass('d-none');
            $('.home').addClass('d-none');
            $('.homec').removeClass('d-none');
            $('.percent').addClass('d-none');
            $('.percentc').removeClass('d-none');
            $('.profile').addClass('d-none');
            $('.profilec').removeClass('d-none');
            catId = 3;
            $.ajax({
                type: 'GET',
                url: '/cat/3',
                dataType: 'json',
                success: function (data) {
                    var centers  = data.centers;
                    appendItemsCenters(centers)
                    // for (var val of data.centers) {
                    //     $('#ajax-home').append( "<a href='/center/" + val.id + "' class='col-12 my-4'>" +
                    //         "<span class='row'>" +
                    //         "<span class='col-auto pr-0'>" +
                    //         "<img src='/uploads/centers/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    //         "</span>" +
                    //         "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                    //         "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + val.name + "</h4>" +
                    //         "</span>" +
                    //         "</span>" +
                    //         "</a>");
                    // }
                    // for (var val of data.boutics) {
                    //     $('#ajax-home2').append( "<a href='/profile/" + val.user_id + "' class='col-12 my-4 pr-0'>" +
                    //         "<span class='d-flex flex-row-reverse'>" +
                    //         "<div class='col-auto pl-0'>" +
                    //         "<img src='/uploads/boutic/avatars/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    //         "</div>" +
                    //         "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                    //         "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + val.name + "</h4>" +
                    //         "</span>" +
                    //         "</span>" +
                    //         "</a>" );
                    // }
                }
            });
        }
        else {
            ajax0();
            $('#ajax-centers').empty();
            $('#ajax-centers2').empty();
            $('#childcol').fadeOut(100,function () {
                $('#femalecol').fadeIn(500),
                $('#malecol').fadeIn(500),
                $("#childcol").fadeIn(500)
            });
            $('.cats').animate({
                backgroundColor: '#fefefe'
            }, 500);
            $('.rounded-circle').animate({
                borderColor: '#5b5b5b'
            },300);
            $('.input-group-addon').animate({
                borderColor: '#5b5b5b'
            },300);
            $('.rounded-circle-our').animate({
                backgroundColor: '#ebedec'
            },300);
            $('.user-drop').animate({
                borderColor: '#5b5b5b',
                backgroundColor: '#ebedec'
            },300);
            $('.user-drop').addClass('text-standard');
            $('.user-drop').removeClass('text-child');
            $('.logoc').addClass('d-none');
            $('.logo').removeClass('d-none');
            $('.menuc').addClass('d-none');
            $('.menu').removeClass('d-none');
            $('.searchc').addClass('d-none');
            $('.search').removeClass('d-none');
            $('.homec').addClass('d-none');
            $('.home').removeClass('d-none');
            $('.percentc').addClass('d-none');
            $('.percent').removeClass('d-none');
            $('.profilec').addClass('d-none');
            $('.profile').removeClass('d-none');

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

            $('#ajax-centers').empty();
            $('#ajax-centers2').empty();
            $('#malecol').fadeOut(400, function () {
                $(this).fadeIn(500)
            });
            $('#femalecol').fadeOut(400);
            $("#childcol").fadeOut(400);
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

            $('.cats').animate({
                backgroundColor: '#27a8e1'
            }, 300);
            // $('.logo').hide();
            $('.rounded-circle').animate({
                borderColor: '#135168'
            },300);
            $('.input-group-addon').animate({
                borderColor: '#135168'
            },300);
            $('.rounded-circle-our').animate({
                backgroundColor: '#c0e4fa'
            },300);
            $('.user-drop').animate({
                borderColor: '#135168',
                backgroundColor: '#c0e4fa',
            },300);
            $('.user-drop').removeClass('text-standard');
            $('.user-drop').addClass('text-male');
            $('.logo').addClass('d-none');
            $('.logom').removeClass('d-none');
            $('.menu').addClass('d-none');
            $('.menum').removeClass('d-none');
            $('.search').addClass('d-none');
            $('.searchm').removeClass('d-none');
            $('.home').addClass('d-none');
            $('.homem').removeClass('d-none');
            $('.percent').addClass('d-none');
            $('.percentm').removeClass('d-none');
            $('.profile').addClass('d-none');
            $('.profilem').removeClass('d-none');

            catId = 1;
            $.ajax({
                type: 'GET',
                url: '/cat/1',
                dataType: 'json',
                success: function (data) {
                    var centers = data.centers;
                    appendItemsCenters(centers)
                    // centermale = data.centers;
                    // bouticmale = data.boutics;
                    // for (var val of data.centers) {
                    //     $('#ajax-home').append( "<a href='/center/" + val.id + "' class='col-12 my-4'>" +
                    //         "<span class='row'>" +
                    //         "<span class='col-auto pr-0'>" +
                    //         "<img src='/uploads/centers/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    //         "</span>" +
                    //         "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                    //         "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + val.name + "</h4>" +
                    //         "</span>" +
                    //         "</span>" +
                    //         "</a>");
                    // };
                    // for (var val of data.boutics) {
                    //     $('#ajax-home2').append( "<a href='/profile/" + val.user_id + "' class='col-12 my-4 pr-0'>" +
                    //         "<span class='d-flex flex-row-reverse'>" +
                    //         "<div class='col-auto pl-0'>" +
                    //         "<img src='/uploads/boutic/avatars/" + val.img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #5B5B5B;'>" +
                    //         "</div>" +
                    //         "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                    //         "<h4 class='px-4 py-1 w-100' style='background-color: #D9DBDA; border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + val.name + "</h4>" +
                    //         "</span>" +
                    //         "</span>" +
                    //         "</a>" );
                    // }
                }
            });
        }
        else {
            ajax0();
            $('#ajax-centers').empty();
            $('#ajax-centers2').empty();
            $('#malecol').fadeOut(100,function () {
                $('#femalecol').fadeIn(500),
                    $('#malecol').fadeIn(500),
                    $("#childcol").fadeIn(500)
            });
            $('div#carouselExampleIndicators.carousel.slide').addClass('d-md-block');
            $('.static-slider').removeClass('d-none');
            $('.static-slider').addClass('d-block');
            $('.first-slide').hide();
            $('.male-slide').hide();
            $('.cats').animate({
                backgroundColor: '#fefefe'
            }, 500);
            $('.rounded-circle').animate({
                borderColor: '#5b5b5b'
            },300);
            $('.input-group-addon').animate({
                borderColor: '#5b5b5b'
            },300);
            $('.rounded-circle-our').animate({
                backgroundColor: '#ebedec'
            },300);
            $('.user-drop').animate({
                borderColor: '#5b5b5b',
                backgroundColor: '#ebedec'
            },300);
            $('.user-drop').addClass('text-standard');
            $('.user-drop').removeClass('text-male');
            $('.logom').addClass('d-none');
            $('.logo').removeClass('d-none');
            $('.menum').addClass('d-none');
            $('.menu').removeClass('d-none');
            $('.searchm').addClass('d-none');
            $('.search').removeClass('d-none');
            $('.homem').addClass('d-none');
            $('.home').removeClass('d-none');
            $('.percentm').addClass('d-none');
            $('.percent').removeClass('d-none');
            $('.profilem').addClass('d-none');
            $('.profile').removeClass('d-none');
            catId = 0;

            appendItems();
        }
        flag = !flag;
    });

    //
    // $('#centers').click(function (e) {
    //    e.preventDefault(e);
    //        $('#sectionRightAndLeft').hide(500);
    //    $('#containerWithCenters').show(500);
    //        $('#ajax-centers').empty();
    //        $('#ajax-centers2').empty();
    //        if (catId === 1)
    //            appendItemsCenters(centermale);
    //        if (catId === 2)
    //            appendItemsCenters(centerfemale);
    //        if (catId === 3)
    //            appendItemsCenters(centerchild);
    //        if (catId === 0)
    //            appendItemsCenters(allcenters);
    // });
    //
    // $('#backToAll').click(function (e) {
    //     e.preventDefault(e);
    //         $('#containerWithCenters').hide(500);
    //     $('#sectionRightAndLeft').show(500);
    //
    // });
    //
    //
    //
    //
    // $('#boutics').click(function (e) {
    //     e.preventDefault(e);
    //         $('#sectionRightAndLeft').hide(500);
    //     $('#containerWithBoutics').show(500);
    //         $('#ajax-boutics').empty();
    //         $('#ajax-boutics2').empty();
    //         if (catId === 1)
    //             appendItemsBoutics(bouticmale);
    //         if (catId === 2)
    //             appendItemsBoutics(bouticfemale);
    //         if (catId === 3)
    //             appendItemsBoutics(bouticchild);
    //         if (catId === 0)
    //             appendItemsBoutics(allboutics);
    //
    //     });
    //
    // $('#backToAll2').click(function (e) {
    //     e.preventDefault(e);
    //
    //
    //         $('#containerWithBoutics').hide(500);
    //     $('#sectionRightAndLeft').show(500);
    //     });


});