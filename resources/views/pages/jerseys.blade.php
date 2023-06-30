@extends('layout/master')
@section('subtitle', 'Strona Główna')

@section('content')
<section class="section wrapper">
    <h1>Koszulki i bluzy hokejowe</h1>
    <div>
    <div class="category__container ">
        @foreach ($jerseys as $jersey)
        <div class="product">
        
        
            <div class="product__thumbnail" style="background-image: url({{asset('storage/'.$jersey->thumbnail)}})"></div>
            <div class="product__text">
                <h2>{{$jersey->title}}</h2>
                <p class="desc">{{$jersey->description}}</p>
                <p>{{$jersey->team->name}}</p>
                
                
                
                <div class="product__images" style="background-image: url({{asset('storage/'.$jersey->thumbnail)}})"></div>
                <h2>{{$jersey->price}} zł</h2>
                <div class="product__actions">
                    <a href="{{route('product',$jersey->id)}}"></a><button>zobacz</button>
                    <button>dodaj do koszyka</button>
                </div>
            </div>
        </div>
    
        @endforeach
    </div>
</section>
@endsection