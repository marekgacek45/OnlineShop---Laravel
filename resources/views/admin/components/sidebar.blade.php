<aside class="asside">
    <div class="asside__top">
        <div class="asside__top-logo">
            <img src="{{asset('images/logo.png')}}" alt="">
            <h2>IceThreads</h2>
            <button class="asside__top-closeBtn">
                <i class="uil uil-times"></i>

            </button>
        </div>
        <div class="asside__top-hamburger">
            <button class="hamburger hamburger--boring sidebar__hamburger" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="sidebar">

        <a href="{{ route('home') }}" class="sidebar__item ">
            <i class="uil uil-home"></i>
            <h3>Strona główna</h3>
        </a>
        <a href="{{ route('admin.dashboard') }}" class="sidebar__item">
            <i class="uil uil-user"></i>
            <h3>Dashboard</h3>
        </a>


        <a href="{{ route('admin.products') }}" class="sidebar__item">
            <i class="uil uil-clipboard-notes"></i>
            <h3>Produkty</h3>



            <a href="{{ route('admin.categories') }}" class="sidebar__item">
                <i class="uil uil-clipboard"></i>
                <h3>Kategorie</h3>
            </a>
            <a href="{{ route('admin.teams') }}" class="sidebar__item">
                <i class="uil uil-clipboard"></i>
                <h3>Drużyny</h3>
            </a>
            {{-- <a href="{{ route('admin.colors') }}" class="sidebar__item">
                <i class="uil uil-palette"></i>
                <h3>Kolory</h3>
            </a> --}}
            <a href="{{ route('admin.sizes') }}" class="sidebar__item">
                <i class="uil uil-palette"></i>
                <h3>Rozmiary</h3>
            </a>


            <a href="{{ route('admin.product.create') }}" class="sidebar__item">
                <i class="uil uil-plus-circle"></i>
                <h3>Dodaj Produkt</h3>
            </a>

            <a href="{{ route('postLogout') }}" class="sidebar__item">
                <i class="uil uil-sign-out-alt"></i>
                <h3>Wyloguj się</h3>
            </a>

    </div>
</aside>
