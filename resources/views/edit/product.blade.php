@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <form action="/update/product" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $product->id }}">
                {{ $product->name }}
                <select name="discount_id">
                    @foreach(Auth::user()->boutic->discounts as $discount)

                        <option value="{{ $discount->id }}">{{ $discount->percent }}%</option>

                    @endforeach
                </select>
                <button type="submit">Save</button>
            </form>
            <form action="/reset/product" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $product->id }}">
                <button type="submit">Reset</button>
            </form>
        </div>
    </div>

@endsection