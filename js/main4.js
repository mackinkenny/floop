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

                    var l = 0
                    var active = 0
                    $('#myTab').empty()
                    $('#myTabContent').empty()
                    for (var i = 0; i < data.center.max_stages; i++) {
                        for (var boutic of data.boutics) {
                            if(l === 0 && i + 1 === boutic.stage) {
                                $('#myTab').append(
                                    '<li class="nav-item">' +
                                        '<a class="nav-link active" id="home-tab" data-toggle="tab" href="#' + i + '" role="tab" aria-controls="home" aria-expanded="true">' + (i + 1) + '</a>' +
                                    '</li>'
                                )

                                return false
                                l = 1
                                active = i
                            }
                            else if (i + 1 === boutic.stage && l === 1) {
                                $('#myTab').append(
                                    '<li class="nav-item">' +
                                        '<a class="nav-link" id="profile-tab" data-toggle="tab" href="#' + i + '" role="tab" aria-controls="profile">' + (i + 1) + '</a>' +
                                    '</li>'
                                )
                                return false
                            }
                        }
                    }

                    for (var j = 0; j < data.center.max_stages; j++) {
                        if(j === active) {
                            $('#myTabContent').append(
                                '<div class="tab-pane fade show active" id="' + j + '" role="tabpanel" aria-labelledby="home-tab">' +
                                    '<div class="row">' +
                                    '</div>' +
                                '</div>'
                            )
                            for (var boutic of data.boutics) {
                                if (boutic.stage === j + 1) {
                                    $('#myTabContent .tab-pane .row').append(
                                        '<div class="col-4 p-2 col-md-3 my-4 my-md-5">' +
                                            '<a class="boutic-in-center" href="/profile/' + boutic.user_id + '"><img style="width: 100%; height: auto;" class=""  src="/uploads/boutic/avatars/' + boutic.img_path + '" alt="">' +
                                                '<p class="text-center text-dark">' + boutic.name + '</p>' +
                                            '</a>' +
                                        '</div>'
                                    )
                                }
                            }
                        }
                        else {
                            $('#myTabContent').append(
                                '<div class="tab-pane fade" id="' + j + '" role="tabpanel" aria-labelledby="profile-tab">' +
                                    '<div class="row">' +
                                    '</div>' +
                                '</div>'
                            )
                            for (var boutic of data.boutics) {
                                if (boutic.stage === j + 1) {
                                    $('#myTabContent .tab-pane .row').append(
                                        '<div class="col-4 p-2 col-md-3 my-4 my-md-5">' +
                                            '<a class="boutic-in-center" href="/profile/' + boutic.user_id + '"><img style="width: 100%; height: auto;" class=""  src="/uploads/boutic/avatars/' + boutic.img_path + '" alt="">' +
                                                '<p class="text-center text-dark">' + boutic.name + '</p>' +
                                            '</a>' +
                                        '</div>'
                                    )
                                }
                            }
                        }
                    }

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
