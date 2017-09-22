
    <div class="col-md-10 col-md-offset-1">
        <form action="{{ route('storeDiscount') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="boutic_id" value="{{ Auth::user()->boutic->id }}">
            <input type="text" name="percent">

            <button type="submit">Create</button>
        </form>
    </div>
