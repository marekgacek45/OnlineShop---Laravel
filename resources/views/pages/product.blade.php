@extends('layout/master')
@section('subtitle', 'Strona Główna')

@section('content')

    <div class="product__container">
        <div><img src="{{ asset('storage/' . $product->thumbnail) }}" alt=""></div>
        <div>
            <div>
                <h1>{{ $product->title }}</h1>
                <p>{{ $product->description }}</p>
            </div>
        </div>
    </div>

@endsection
