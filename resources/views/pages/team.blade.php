@extends('layout/master')
@section('subtitle', 'Strona Główna')

@section('content')
<section class="section wrapper">
    <h1>Nowości</h1>
    <div>
    <div class="category__container ">
        @foreach ($products as $product)
        <div class="product">
        
        
            <div class="product__thumbnail" style="background-image: url({{asset('storage/'.$product->thumbnail)}})"></div>
            <div class="product__text">
                <h2>{{$product->title}}</h2>
                <p class="desc">{{$product->description}}</p>
                <p>{{$product->team->name}}</p>
                
                
                
                <div class="product__images" style="background-image: url({{asset('storage/'.$product->thumbnail)}})"></div>
                <h2>{{$product->price}} zł</h2>
                <div class="product__actions">
                    <a href="{{route('product',$product->id)}}"><button>zobacz</button></a>
                    <button>dodaj do koszyka</button>
                </div>
            </div>
        </div>
    
        @endforeach
    </div>
</section>
@endsection