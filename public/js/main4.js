$(document).ready(function() {
    var flag = true;
    var type;
    $('.link-type').click(function (e) {
        e.preventDefault(e);
        $(this).find('img').toggleClass('icon-toggle', 200)
        if(flag===false)
        {
            flag=true;
        }
        else if(flag===true)
        {
            flag=false;
            $.ajax({
                url: '/sort/' + this.id,
                type: 'get',
                dataType: 'json',
                success: function (data) {
                    alert(data.centers[0].id)
                }
        });
        }
        $(this).toggleClass('mx-1', 200)


    })


})
