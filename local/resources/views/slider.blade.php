
@if(Session::get('catId') == 0)

    <img src="/img/slider/male.jpg" alt="" class="static-slider w-100 d-block d-md-none">

<div id="carouselExampleIndicators" class="d-none d-md-block carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" style="height: 320px">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/img/slider/14.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/slider/12.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/img/slider/13.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="static-slide">

    <img src="/img/slider/12.jpg" alt="" class="third-slide w-100" style="display:none;">
    <img src="/img/slider/14.jpg" alt="" class="first-slide w-100" style="display:none;">
    <img src="/img/slider/13.jpg" alt="" class="second-slide w-100" style="display:none;">


    <img src="/img/slider/male.jpg" alt="" class="male-slide w-100" style="display:none;">
    <img src="/img/slider/female.jpg" alt="" class="female-slide w-100" style="display:none;">
    <img src="/img/slider/child.jpg" alt="" class="child-slide w-100" style="display:none;">


</div>

<div class="static-slide">
    @elseif(Session::get('catId') == 1)
        <img src="/img/slider/male.jpg" alt="" class="w-100 d-md-none d-block">
        <img src="/img/slider/14.jpg" alt="" class="w-100 d-none d-md-block">

    @elseif(Session::get('catId') == 2)
        <img src="/img/slider/female.jpg" alt="" class="w-100 d-md-none d-block">
        <img src="/img/slider/13.jpg" alt="" class="w-100 d-md-block d-none">

    @elseif(Session::get('catId') == 3)
        <img src="/img/slider/child.jpg" alt="" class="w-100 d-md-none d-block">
        <img src="/img/slider/12.jpg" alt="" class="w-100 d-md-block d-none">

    @endif
</div>