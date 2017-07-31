

    <div class="row">
        @foreach($products as $product)

            <div class="col-lg-3">
                <input type="hidden" value="{{ $product->id }}" id="id">
                <a href="{{ route('showProduct', $product->id) }}" id="link"><img src="/uploads/images/products/{{ $product->img_path }}" alt=""></a>
                <br>
                {{ $product->name }}
                <br>

                {{ $product->brand->name }}
                <br>
                {{ $product->cat->name }}
                <br>
                {{ $product->color->name }}
                <br>
                {{ $product->size->name }}
                <br>

                <br>
                <br>
            </div>


        @endforeach
    </div>


