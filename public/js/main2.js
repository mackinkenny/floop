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
                allboutics = data.Success;
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

    }

    function appendItemsBoutics(bouts) {
        for (var i = 0; i <= bouts.length - 1; i++) {
            $('#ajax-boutics').append("<a href='/profile/" + bouts[i].user_id + "' class='col-12 my-4'>" +
                "<span class='row'>" +
                "<span class='col-auto pr-0'>" +
                "<img src='/uploads/avatars/" + bouts[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                "</span>" +
                "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + bouts[i].name + "</h4>" +
                "</span>" +
                "</span>" +
                "</a>");
            $('#ajax-boutics2').append("<a href='/profile/" + bouts[i].user_id + "' class='col-12 my-4 pr-0'>" +
                "<span class='d-flex flex-row-reverse'>" +
                "<div class='col-auto pl-0'>" +
                "<img src='/uploads/avatars/" + bouts[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                "</div>" +
                "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + bouts[i].name + "</h4>" +
                "</span>" +
                "</span>" +
                "</a>");
        };
    }

    function appendItemsCenters(cents) {
        for (var i = 0; i <= cents.length - 1; i++) {
            $('#ajax-centers').append("<a href='/center/" + cents[i].id + "' class='col-12 my-4'>" +
                "<span class='row'>" +
                "<span class='col-auto pr-0'>" +
                "<img src='/uploads/centers/" + cents[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                "</span>" +
                "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + cents[i].name + "</h4>" +
                "</span>" +
                "</span>" +
                "</a>");
            $('#ajax-centers2').append("<a href='/center/" + cents[i].id + "' class='col-12 my-4 pr-0'>" +
                "<span class='d-flex flex-row-reverse'>" +
                "<div class='col-auto pl-0'>" +
                "<img src='/uploads/centers/" + cents[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                "</div>" +
                "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + cents[i].name + "</h4>" +
                "</span>" +
                "</span>" +
                "</a>");
        };
    }


    function appendItems() {
        for (var i = 0; i <= allcenters.length - 1; i++) {
            $('#ajax-home').append( "<a href='/center/" + allcenters[i].id + "' class='col-12 my-4'>" +
                "<span class='row'>" +
                "<span class='col-auto pr-0'>" +
                "<img src='/uploads/centers/" + allcenters[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                "</span>" +
                "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + allcenters[i].name + "</h4>" +
                "</span>" +
                "</span>" +
                "</a>");
        };

        for (var i = 0; i <= allboutics.length - 1; i++) {
            $('#ajax-home2').append( "<a href='/profile/" + allboutics[i].user_id + "' class='col-12 my-4 pr-0'>" +
                "<span class='d-flex flex-row-reverse'>" +
                "<div class='col-auto pl-0'>" +
                "<img src='/uploads/avatars/" + allboutics[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                "</div>" +
                "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + allboutics[i].name + "</h4>" +
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
            catId = 2;
            $.ajax({
                type: 'GET',
                url: '/cat/2',
                dataType: 'json',
                success: function (data) {
                    centerfemale = data.centers;
                    bouticfemale = data.boutics;
                    alert(data.centers.length);
                    alert(data.boutics.length);
                    for (var i = 0; i <= data.centers.length - 1; i++) {
                        $('#ajax-home').append( "<a href='/center/" + data.centers[i].id + "' class='col-12 my-4'>" +
                            "<span class='row'>" +
                            "<span class='col-auto pr-0'>" +
                            "<img src='/uploads/centers/" + data.centers[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                            "</span>" +
                            "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                            "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + data.centers[i].name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>");
                    };
                    for (var i = 0; i <= data.boutics.length - 1; i++) {
                        $('#ajax-home2').append( "<a href='/profile/" + data.boutics[i].user_id + "' class='col-12 my-4 pr-0'>" +
                            "<span class='d-flex flex-row-reverse'>" +
                            "<div class='col-auto pl-0'>" +
                            "<img src='/uploads/avatars/" + data.boutics[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                            "</div>" +
                            "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                            "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + data.boutics[i].name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>" );
                    };
                }
            });


        }
        else if (flag === true) {
            $('#ajax-home').find('a.col-12').remove();
            $('#ajax-home2').find('a.col-12').remove();
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
            catId = 3;
            $.ajax({
                type: 'GET',
                url: '/cat/3',
                dataType: 'json',
                success: function (data) {
                    centerchild = data.centers;
                    bouticchild = data.boutics;
                    alert(data.centers.length);
                    alert(data.boutics.length);
                    for (var i = 0; i <= data.centers.length - 1; i++) {
                        $('#ajax-home').append( "<a href='/center/" + data.centers[i].id + "' class='col-12 my-4'>" +
                            "<span class='row'>" +
                            "<span class='col-auto pr-0'>" +
                            "<img src='/uploads/centers/" + data.centers[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                            "</span>" +
                            "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                            "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + data.centers[i].name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>");
                    };
                    for (var i = 0; i <= data.boutics.length - 1; i++) {
                        $('#ajax-home2').append( "<a href='/profile/" + data.boutics[i].user_id + "' class='col-12 my-4 pr-0'>" +
                            "<span class='d-flex flex-row-reverse'>" +
                            "<div class='col-auto pl-0'>" +
                            "<img src='/uploads/avatars/" + data.boutics[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                            "</div>" +
                            "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                            "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + data.boutics[i].name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>" );
                    };
                }
            });
        }
        else {
            $('#ajax-home').find('a.col-12').remove();
            $('#ajax-home2').find('a.col-12').remove();
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
            catId = 1;
            $.ajax({
                type: 'GET',
                url: '/cat/1',
                dataType: 'json',
                success: function (data) {
                    centermale = data.centers;
                    bouticmale = data.boutics;
                    alert(data.centers.length);
                    alert(data.boutics.length);
                    for (var i = 0; i <= data.centers.length - 1; i++) {
                        $('#ajax-home').append( "<a href='/center/" + data.centers[i].id + "' class='col-12 my-4'>" +
                            "<span class='row'>" +
                            "<span class='col-auto pr-0'>" +
                            "<img src='/uploads/centers/" + data.centers[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                            "</span>" +
                            "<span class='col pl-0 d-flex align-items-center' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px; margin-left: -10px;'>" +
                            "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-right-radius: 30px; border-bottom-right-radius: 30px;'>" + data.centers[i].name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>");
                    };
                    for (var i = 0; i <= data.boutics.length - 1; i++) {
                        $('#ajax-home2').append( "<a href='/profile/" + data.boutics[i].user_id + "' class='col-12 my-4 pr-0'>" +
                            "<span class='d-flex flex-row-reverse'>" +
                            "<div class='col-auto pl-0'>" +
                            "<img src='/uploads/avatars/" + data.boutics[i].img_path + "' width='100' height='100' class='rounded-circle' style='position:relative; z-index: 100; border: 3px solid #fff;'>" +
                            "</div>" +
                            "<span class='col px-0 d-flex align-items-center' style='margin-right: -10px;'>" +
                            "<h4 class='bg-secondary px-4 py-1 w-100' style='border-top-left-radius: 30px; border-bottom-left-radius: 30px;'>" + data.boutics[i].name + "</h4>" +
                            "</span>" +
                            "</span>" +
                            "</a>" );
                    };
                }
            });
        }
        else {
            $('#ajax-home').find('a.col-12').remove();
            $('#ajax-home2').find('a.col-12').remove();
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
            catId = 0;

            appendItems();
        }
        flag = !flag;
    });


    $('#centers').click(function (e) {
       e.preventDefault(e);

       $('#sectionRightAndLeft').animate({
           marginLeft: 4999,
       }, 1000, "", function () {
           $('#sectionRightAndLeft').hide(500);
       });
        $('#containerWithCenters').show(500);
       $('#containerWithCenters').animate({
           marginLeft: ''
       }, 500, "", function () {
           $(this).removeAttr('style');
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
    });

    $('#backToAll').click(function (e) {
        e.preventDefault(e);

        $('#containerWithCenters').animate({
            marginLeft: 4999,
        }, 1000, "", function () {
            $('#containerWithCenters').hide(500);
        });
        $('#sectionRightAndLeft').show(500);
        $('#sectionRightAndLeft').animate({
            marginLeft: ''
        }, 500, "", function () {
            $(this).removeAttr('style');
        });
    });




    $('#boutics').click(function (e) {
        e.preventDefault(e);

        $('#sectionRightAndLeft').animate({
            marginLeft: 4999,
        }, 1000, "", function () {
            $('#sectionRightAndLeft').hide(500);
        });
        $('#containerWithBoutics').show(500);
        $('#containerWithBoutics').animate({
            marginLeft: ''
        }, 500, "", function () {
            $(this).removeAttr('style');
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
    });

    $('#backToAll2').click(function (e) {
        e.preventDefault(e);

        $('#containerWithBoutics').animate({
            marginLeft: 4999,
        }, 1000, "", function () {
            $('#containerWithBoutics').hide(500);
        });
        $('#sectionRightAndLeft').show(500);
        $('#sectionRightAndLeft').animate({
            marginLeft: ''
        }, 500, "", function () {
            $(this).removeAttr('style');
        });
    });
    

});