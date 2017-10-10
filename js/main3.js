$(document).ready(function() {

    $('#body-content').css('height', $(window).height());
    $('#login-page').css('height', $(window).height() - $('footer').height() - $('#navbar-top').height());
    $('#nav-mobile').css('height', $(window).height());
    $('#backdrop').css('height', $(window).height());

    $('#nav-mobile').css('marginLeft', - $('#nav-mobile').width() - 50)

    $('#menu-mobile').click(function () {



        $('#nav-mobile').animate({
            marginLeft: 0,
        }, 400)
        $('#backdrop').show()
    })

    $('.fa-times').click(function () {
        $('#backdrop').hide()

        $('#nav-mobile').animate({
            marginLeft: - $('#nav-mobile').width() -50,
        }, 400)
    })
    $('#backdrop').click(function () {
        $('#backdrop').hide()

        $('#nav-mobile').animate({
            marginLeft: - $('#nav-mobile').width() - 50,
        }, 400)

    })





    // $(function(){
    //     $(window).resize(function() {
    //         $('#body-content').css('height', $(window).height());
    //         $('#login-page').css('height', $(window).height());
    //     })
    // });




});