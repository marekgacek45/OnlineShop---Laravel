@extends('layout/master')
@section('subtitle', 'Strona Główna')

@section('content')
<section class="section wrapper">
    <h1>Czapki</h1>
    <div>
    <div class="category__container ">
        @foreach ($hats as $hat)
        <div class="product">
        
        
            <div class="product__thumbnail" style="background-image: url({{asset('storage/'.$hat->thumbnail)}})"></div>
            <div class="product__text">
                <h2>{{$hat->title}}</h2>
                <p class="desc">{{$hat->description}}</p>
                <p>{{$hat->team->name}}</p>
                
                
                
                <div class="product__images" style="background-image: url({{asset('storage/'.$hat->thumbnail)}})"></div>
                <h2>{{$hat->price}} zł</h2>
                <div class="product__actions">
                    <a href="{{route('product',$hat->id)}}"><button>zobacz</button></a>
                    <button>dodaj do koszyka</button>
                </div>
            </div>
        </div>
    
        @endforeach
    </div>
</section>
@endsection