<div class="container comment-bar px-4 py-3 h-100 mx-3 my-3">
    <div id="style-1">
        <p class="col-12">Comment</p>


    </div>
    <form class="col-12 mt-3" id="comment_form" action="" method="POST">
        {{ csrf_field() }}

        <input type="hidden" id="id_product">
        <input type="hidden" id="id_user" value="{{ Auth::user()->id }}">

        <input type="text" class="w-100 text-center" placeholder="Комментарии" style="border-radius: 30px;">

        <button type="submit" class="" style="opacity: 0; margin-left: -9999px;" id="commentbutton"></button>

    </form>
</div>

