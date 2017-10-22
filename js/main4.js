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


                    var l = 0;
                    var active = 0;
                    $('#myTab').empty();
                    $('#myTabContent').empty();
                    for (var i = 0; i < data.center.max_stages; i++) {
                        for (var z = 0; z < data.boutics.length; z++) {
                            if(l === 0 && i + 1 === data.boutics[z].stage) {
                                $('#myTab').append(
                                    '<li class="nav-item">' +
                                        '<a class="nav-link active" id="home-tab" data-toggle="tab" href="#' + i + '-show" role="tab" aria-controls="home" aria-expanded="true">' + (i + 1) + '</a>' +
                                    '</li>'
                                );
                                l = 1;
                                active = i;

                                break;

                            }
                            else if (i + 1 === data.boutics[z].stage && l === 1) {
                                $('#myTab').append(
                                    '<li class="nav-item">' +
                                        '<a class="nav-link" id="profile-tab" data-toggle="tab" href="#' + i + '-show" role="tab" aria-controls="profile">' + (i + 1) + '</a>' +
                                    '</li>'
                                );
                                break;
                            }
                        }
                    }

                    // for (var j = 0; j < data.center.max_stages; j++) {
                    //
                    //     if(j == active) {
                    //         $('#myTabContent').append(
                    //             '<div class="tab-pane fade show active" id="' + j + '-show" role="tabpanel" aria-labelledby="home-tab">' +
                    //                 '<div class="row">' +
                    //                 '</div>' +
                    //             '</div>'
                    //         );
                    //         for (var boutic of data.boutics) {
                    //             console.log(boutic.stage === j + 1);
                    //             console.log(boutic.stage);
                    //
                    //             if (boutic.stage == (j + 1)) {
                    //
                    //                     $('#myTabContent .tab-pane.active .row').append(
                    //                         '<div class="col-4 p-2 col-md-3 my-4 my-md-5">' +
                    //                         '<a class="boutic-in-center" href="/profile/' + boutic.user_id + '"><img style="width: 100%; height: auto;" class=""  src="/uploads/boutic/avatars/' + boutic.img_path + '" alt="">' +
                    //                         '<p class="text-center text-dark">' + boutic.name + '</p>' +
                    //                         '</a>' +
                    //                         '</div>'
                    //                     );
                    //
                    //             }
                    //             else {
                    //             }
                    //
                    //         }
                    //     }
                    //     else {
                    //         $('#myTabContent').append(
                    //             '<div class="tab-pane fade non-active" id="' + j + '-show" role="tabpanel" aria-labelledby="profile-tab">' +
                    //                 '<div class="row">' +
                    //                 '</div>' +
                    //             '</div>'
                    //         );
                    //         for (var boutic of data.boutics) {
                    //
                    //             console.log(boutic.stage == j + 1);
                    //             if (boutic.stage == (j + 1)) {
                    //
                    //                     $('#myTabContent .tab-pane.non-active .row').append(
                    //                         '<div class="col-4 p-2 col-md-3 my-4 my-md-5">' +
                    //                         '<a class="boutic-in-center" href="/profile/' + boutic.user_id + '"><img style="width: 100%; height: auto;" class=""  src="/uploads/boutic/avatars/' + boutic.img_path + '" alt="">' +
                    //                         '<p class="text-center text-dark">' + boutic.name + '</p>' +
                    //                         '</a>' +
                    //                         '</div>'
                    //                     );
                    //
                    //
                    //             }
                    //             else{
                    //
                    //             }
                    //         }
                    //     }
                    // }



                    $('footer').append('Hello')




                    console.log('Access in');
                    alert('Access in');
                },
                error: function () {
                    alert('ERROR!');
                }
            });
        }

        if (!flag) {
            for (var i = 0; i < arr.length; i++) {
                if (arr[i] === this.id) {
                    arr.splice(i, 1);
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

                    var l = 0;
                    var active = 0;
                    $('#myTab').empty();
                    $('#myTabContent').empty();
                    for (var i = 0; i < data.center.max_stages; i++) {
                        for (var x = 0; x < data.boutics.length; x++) {
                            if(l === 0 && i + 1 === data.boutics[x].stage) {
                                $('#myTab').append(
                                    '<li class="nav-item">' +
                                    '<a class="nav-link active" id="home-tab" data-toggle="tab" href="#' + i + '-show" role="tab" aria-controls="home" aria-expanded="true">' + (i + 1) + '</a>' +
                                    '</li>'
                                );
                                l = 1;
                                active = i;
                                break;

                            }
                            else if (i + 1 === data.boutics[x].stage && l === 1) {
                                $('#myTab').append(
                                    '<li class="nav-item">' +
                                    '<a class="nav-link" id="profile-tab" data-toggle="tab" href="#' + i + '-show" role="tab" aria-controls="profile">' + (i + 1) + '</a>' +
                                    '</li>'
                                );
                                break;
                            }
                        }
                    }
                    //
                    // for (var j = 0; j < data.center.max_stages; j++) {
                    //     if(j == active) {
                    //         $('#myTabContent').append(
                    //             '<div class="tab-pane fade show active" id="' + j + '-show" role="tabpanel" aria-labelledby="home-tab">' +
                    //             '<div class="row">' +
                    //             '</div>' +
                    //             '</div>'
                    //         );
                    //         for (var boutic of data.boutics) {
                    //             if (boutic.stage == j + 1) {
                    //                 $('#myTabContent .tab-pane.active .row').append(
                    //                     '<div class="col-4 p-2 col-md-3 my-4 my-md-5">' +
                    //                         '<a class="boutic-in-center" href="/profile/' + boutic.user_id + '"><img style="width: 100%; height: auto;" class=""  src="/uploads/boutic/avatars/' + boutic.img_path + '" alt="">' +
                    //                             '<p class="text-center text-dark">' + boutic.name + '</p>' +
                    //                         '</a>' +
                    //                     '</div>'
                    //                 );
                    //             }
                    //         }
                    //     }
                    //     else {
                    //         $('#myTabContent').append(
                    //             '<div class="tab-pane fade non-active" id="' + j + '-show" role="tabpanel" aria-labelledby="profile-tab">' +
                    //             '<div class="row">' +
                    //             '</div>' +
                    //             '</div>'
                    //         );
                    //         for (var boutic of data.boutics) {
                    //             if (boutic.stage == j + 1) {
                    //                 $('#myTabContent .tab-pane.non-active .row').append(
                    //                     '<div class="col-4 p-2 col-md-3 my-4 my-md-5">' +
                    //                     '<a class="boutic-in-center" href="/profile/' + boutic.user_id + '"><img style="width: 100%; height: auto;" class=""  src="/uploads/boutic/avatars/' + boutic.img_path + '" alt="">' +
                    //                     '<p class="text-center text-dark">' + boutic.name + '</p>' +
                    //                     '</a>' +
                    //                     '</div>'
                    //                 );
                    //             }
                    //         }
                    //     }
                    // }



                    console.log('Access out');
                    alert('Access out');
                    $('footer').append('Bye')
                },
                error: function () {
                    alert('ERROR');
                }
            });
        }


        console.log(arr);

        $(this).toggleClass('mx-1', 200);
    });


});
