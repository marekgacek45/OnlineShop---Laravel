@extends('layout/master')
@section('subtitle', 'Strona Główna')

@section('content')

    <div class="product__container">
        <div class="product__container-images"><img src="{{ asset('storage/' . $product->thumbnail) }}" alt=""></div>
        <div class="product__container-info">
            <div class="top">
                <img src="{{ asset('storage/' . $product->team->logo) }}" alt="">
                <h1>{{ $product->title }}</h1>
                <p>{{ $product->description }}</p>
            </div>
            <div class="other">
                <h3>Koszulki tej drużyny</h3>
                <div class="other__container">
                    @foreach ($products as $other_products)
                        <div class="other__box">
                            <a href="{{ route('product', $other_products->id) }}"><img
                                    src="{{ asset('storage/' . $other_products->thumbnail) }}" alt=""
                                    style="width:50px"></a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="sizes__container">
                <h3>Rozmiary:</h3>
                <div class="sizes__box">
                @foreach ($product->sizes as $size)
                    <div>{{$size->name}}</div>
                @endforeach
            </div>
            </div>
            <div class="actions">
                <button>Dodaj do koszyka</button>
                <button>ulubione</button>
            </div>
        </div>
    </div>

@endsection
