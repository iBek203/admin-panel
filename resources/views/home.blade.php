@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($products as $product)
        <div class="col" style="width: 400px">
            <div class="card shadow-sm">
                <img src="{{$product->img}}" alt="" style="">
                <div class="card-body">
                    <p class="card-text h3 text-bold">{{ $product['title'] }}</p>
                        <p class="text-dark">{{ $product->category['title'] }}</p>

                    <div class="">
                        <p class="card-text h4">{{ $product['short_description'] }}</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="/home/{{$product->id}}" class="btn btn-sm btn-outline-secondary">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
