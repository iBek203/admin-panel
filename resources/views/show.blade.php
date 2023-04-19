@extends('layouts.app')

@section('content')
    <a href="/home" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="img-md">
        <img src="../{{$product->img}}" alt="" style="width: 500px">
    </div>
    <div class="card shadow-sm">

        <div class="card-body">
            <p class="card-text h3 text-bold">{{ $product['title'] }}</p>
            <p class="text-dark">Category: {{ $product->category['title'] }}</p>

            <div class="">
                <p class="card-text h4">{{ $product['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
