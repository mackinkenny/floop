$(document).ready(function () {

    $.ajax({
        type: 'GET',
        url: '/is-subs',
        data: {
            'id': $('#sid').val(),
            'b_id': $('#sb_id').val(),
            'u_id': $('#su_id').val()
        },
        dataType: 'json',
        success: function (data) {
            if (data.subs_flag) {
                $('#subs-flag').text('Отписаться')
            }
            else {
                $('#subs-flag').text('Подписаться')
            }
            $('.sub-badge').text(data.subs_count)
            if (data.subs_count >= 10000) {
                $('.sub-badge').text('к')
            }
        }
    })

    
    $('.modal.fade').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        // alert(button.data('id'))
        var modal = $(this)
        $.ajax({
            url: '/products/' + button.data('id'),
            type: 'GET',
            success: function (data) {
                var i = 0
                modal.find('.carousel-inner').empty()
                modal.find('.carousel-indicators').empty()
                for (var photo of data.photos) {
                    if (i === 0) {
                        modal.find('.carousel-inner').append(
                            '<div class="carousel-item active">' +
                            '<img style="border: 8px solid #fff;" class="d-block w-100" src="/uploads/images/products/' + photo.img_path + '">' +
                            '</div>'
                        )
                        modal.find('.carousel-indicators').append(
                            '<li data-target="#carouselExampleIndicators" data-slide-to="' + i + '" class="active"></li>'
                        )
                    }
                    else {
                        modal.find('.carousel-inner').append(
                            '<div class="carousel-item">' +
                            '<img style="border: 8px solid #fff;" class="d-block w-100" src="/uploads/images/products/' + photo.img_path + '">' +
                            '</div>'
                        )
                        modal.find('.carousel-indicators').append(
                            '<li data-target="#carouselExampleIndicators" data-slide-to="' + i + '"></li>'
                        )
                    }
                    i++

                }
                modal.find('.h4-text').text(data.boutic.name)
                modal.find('.size-text').text(' ' + data.size)
                modal.find('.brand-text').text(' ' + data.brand)
                modal.find('.color-text').text(' ' + data.color)
                modal.find('.product-boutic').text(data.product.name + ' ОТ ' + data.boutic.name)
                modal.find('#lid').val(data.product.id)
                modal.find('#lu_id').val(data.user)
                modal.find('#bid').val(data.product.id)
                modal.find('#style-1').text('')
                modal.find('.like_count').text('| ' + data.like_count)
                for (var val of data.comments) {
                    modal.find('#style-1').append(
                        '<p class="col-12">' + val.comment + '</p>'
                    )
                }
                var div = $("#style-1");
                div.scrollTop(div.prop('scrollHeight'));
                modal.find('#bu_id').val(data.user)
                if(data.is_percent) {
                    modal.find('.price-text').text(data.product.price - (data.product.price * data.discount / 100))
                }
                else
                {
                    modal.find('.price-text').text(data.product.price)
                }

            }
        })
    })


    $('#commentbutton').click(function (e) {
        e.preventDefault(e)


        $.ajax({
            url: '/comment/' + $('#lid').val() + '/' + $('#lu_id').val(),
            type: 'GET',
            dataType: 'json',
            data: {
                'comment': $('#comment_form input.text-center').val(),
            },
            success: function (data) {

                $('#style-1').append(
                    '<p class="col-12">' + $('#comment_form input.text-center').val() + '</p>'
                )
                $('#comment_form input.text-center').val('')
                var div = $("#style-1");
                div.scrollTop(div.prop('scrollHeight'));
            }
        })
    })

    $('#like').click(function (e) {
        e.preventDefault(e);
        $.ajax({
            type: 'POST',
            url: '/like',
            data: {
               'id': $('#lid').val(),
               'u_id': $('#lu_id').val()
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (data) {
               $('.like_count').text('| ' + data.like_count)
            },
        });
    });

    $('#buy').click(function (e) {
        e.preventDefault(e);
        $.ajax({
            type: 'POST',
            url: '/buy',
            data: {
                'id': $('#bid').val(),
                'u_id': $('#bu_id').val()
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (data) {
            },
        });
    });


    $('#sub').click(function (e) {
        e.preventDefault(e);
        $.ajax({
            type: 'POST',
            url: '/subscribe',
            data: {
                'id': $('#sid').val(),
                'b_id': $('#sb_id').val(),
                'u_id': $('#su_id').val()
            },
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
            success: function (data) {
                if (!data.subs_flag) {
                    $('#subs-flag').text('Отписаться')
                }
                else {
                    $('#subs-flag').text('Подписаться')
                }
                $('.sub-badge').text(data.subs_count)
            },
        });
    });

});