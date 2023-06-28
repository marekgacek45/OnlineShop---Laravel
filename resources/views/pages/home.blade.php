@extends('layout/master')
@section('subtitle', 'Strona Główna')

@section('content')
    <header>
        <div class="header"
            style="background-image:url(https://images.unsplash.com/photo-1625616254558-e1c0c67cde9c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=929&q=80)">
            <div class="header__opacity"></div>
            <div class="header__text">
                <h2>Najlepsze ciuchy w jendym miejscu</h2>
                <h1>IceThreads</h1>
                <h2>Najlepsze ciuchy w jendym miejscu</h2>
            </div>
            <button class="header__btn">PROMOCJE</button>
        </div>
    </header>

    <section class="about section">
        <div class="about__container wrapper">
            <div class="about__text">
                <img src="{{ asset('images/logo.png') }}" alt="">
                <h2>IceThreads</h2>
                <h4>Najlepsze gadżety dla fana hokeja</h4>
                <p>Nasz sklep to doskonałe miejsce dla wszystkich miłośników hokeja, którzy pragną wyrazić swoją pasję na
                    najwyższym poziomie.<br> Nasze koszulki hokejowe zapewniają nie tylko komfort podczas gry, ale także
                    wyróżniają się unikalnym designem, który z pewnością przyciągnie uwagę każdego fana tej dyscypliny.</p>
            </div>
            <div class="about__boxes">
                <div class="about__box about__box--one">
                    <div class="header__opacity"></div>
                    <a href="">
                    <h2>Koszulki</h2>
                    <p>Największy wybór świetnych koszulek i bluz hokejowych</p>
                </a>
                </div>
                
                <div class="about__box about__box--two">
                    <div class="header__opacity"></div>
                    <a href="">
                    <h2>Czapki</h2>
                    <p>Największy wybór świetnych czapek Twoich ulubionych drużyn</p>
                </a>
                </div>
            

            </div>
        </div>
    </section>

    <section class="products section">
        <div class="section__heading">
            <h2>Bestsellery</h2>
            <p>Najpopularniejsze wśród fanów hokeja</p>
        </div>
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
                        <button class="add">Dodaj do koszyka</button>
                        
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    {{-- <section class="products section">
        <h2 class="section__heading">Najnowsze</h2>
        <div class="products__container wrapper">
            @foreach ($products as $product)
                <div class="product__card">
                    <a href="{{ route('product', $product->id) }}">
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
    </section> --}}
    <section class="section heroImg">
        <img src="https://shop.international.nhl.com/content/ws/all/49f53e3b-932c-4550-a2fb-823ee813c569__1600X683.jpg"
            alt="">
    </section>

    <section class="teams section">
        <div class="section__heading">
            <h2>Wszystkie drużyny NHL</h2>
            <p>Wybierz swoją ulubioną drużynę i wyposaż się w jej koszulkę</p>
        </div>
        <div class="teams__container wrapper">
            <div class="teams__box">

                @foreach ($teams as $team)
                    <div class="team"><a href=""><img src="{{ asset('storage/' . $team->logo) }}" alt=""></a>
                    </div>
                @endforeach
            </div>
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
