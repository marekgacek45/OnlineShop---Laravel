@extends('layout/master')
@section('subtitle', 'Strona Główna')

@section('content')
    <header>
        <div class="header"
            style="background-image:url(https://images.unsplash.com/photo-1625616254558-e1c0c67cde9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=929&q=80)">
            <div class="opacity"></div>
            <h1>IceThreads</h1>
            <h2>Najlepsze ciuchy w jendym miejscu</h2>
        </div>
    </header>
    <section class="products section">
        <h2 class="section__heading">Najnowsze</h2>
        <div class="products__container wrapper">
            @foreach ($products as $product)
            <div class="product__card">
                    <a href="{{route('product',$product->id)}}">
                    <div class="product__card-img">

                        <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="" style="width:150px">
                    </div>
                    <div class="product__card-text">
                        <h2>{{ $product->title }}</h2>
                        <h3>{{ $product->price }} zł</h3>
                    </div>
                    <div class="product__card-actions">
                        <button class="add"><i class="uil uil-plus-circle"></i></button>
                        <button class="fav"><i class="uil uil-heart"></i></button>
                    </div>
                </a>
                </div>
            @endforeach

        </div>
    </section>
    <section class="section wrapper heroImg">
        <img src="https://shop.international.nhl.com/content/ws/all/49f53e3b-932c-4550-a2fb-823ee813c569__1600X683.jpg"
            alt="">
    </section>
    <section class="teams section">
        <div class="teams__container wrapper">
            <h2>Wszytkie drużyny</h2>
            <div class="teams__box">

                @foreach ($teams as $team)
                    <div class="team"><img src="{{ asset('storage/' . $team->logo) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="products section">
        <h2 class="section__heading">Najczęściej kupowane</h2>
        <div class="products__container wrapper">
            @foreach ($products as $product)
                <div class="product__card">
                    <div class="product__card-img">

                        <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="" style="width:150px">
                    </div>
                    <div class="product__card-text">
                        <h2>{{ $product->title }}</h2>
                        <h3>{{ $product->price }} zł</h3>
                    </div>
                    <div class="product__card-actions">
                        <button class="add"><i class="uil uil-plus-circle"></i></button>
                        <button class="fav"><i class="uil uil-heart"></i></button>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <section class="section wrapper heroImg">
        <img src="https://images.unsplash.com/photo-1547054731-f9974ff86ece?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
            alt="">
    </section>
    <section class="products section">
        <h2 class="section__heading">Koszulki</h2>
        <div class="products__container wrapper">
            @foreach ($products as $product)
                <div class="product__card">
                    <div class="product__card-img">

                        <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="" style="width:150px">
                    </div>
                    <div class="product__card-text">
                        <h2>{{ $product->title }}</h2>
                        <h3>{{ $product->price }} zł</h3>
                    </div>
                    <div class="product__card-actions">
                        <button class="add"><i class="uil uil-plus-circle"></i></button>
                        <button class="fav"><i class="uil uil-heart"></i></button>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    <section class="products section">
        <h2 class="section__heading">Czapki</h2>
        <div class="products__container wrapper">
            
            @foreach ($products as $product)
            <div class="product__card">
                    <div class="product__card-img">

                        <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="" style="width:150px">
                    </div>
                    <div class="product__card-text">
                        <h2>{{ $product->title }}</h2>
                        <h3>{{ $product->price }} zł</h3>
                    </div>
                    <div class="product__card-actions">
                        <button class="add"><i class="uil uil-plus-circle"></i></button>
                        <button class="fav"><i class="uil uil-heart"></i></button>
                    </div>
               
                </div>
            @endforeach

        </div>
    </section>


@endsection
