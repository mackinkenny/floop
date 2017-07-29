@extends('layouts.app')

@section('content')

    <div class="col-md-10 col-md-offset-1">
        <form action="{{ route('storeProduct') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="text" name="name">

            <select name="brand_id">
                @foreach($brands as $brand)

                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>

                @endforeach
            </select>

            <select name="cat_id">
                @foreach($cats as $cat)

                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>

                @endforeach
            </select>

            <select name="color_id">
                @foreach($colors as $color)

                    <option value="{{ $color->id }}">{{ $color->name }}</option>

                @endforeach
            </select>

            <select name="size_id">
                @foreach($sizes as $size)

                    <option value="{{ $size->id }}">{{ $size->name }}</option>

                @endforeach
            </select>

            <input type="file" name="img_path">

            <button type="submit">Create</button>
        </form>
    </div>

@endsection