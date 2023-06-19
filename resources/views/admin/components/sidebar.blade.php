




<aside class="asside">
    <div class="asside__top">
        <div class="asside__top-logo">
            <img src="{{ asset('images/logo.png') }}" alt="">
            <h2>FASHION DESIGN</h2>
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

        <a href="{{route('home')}}" class="sidebar__item ">
            <i class="uil uil-home"></i>
            <h3>Strona główna</h3>
        </a>
        <a href="{{route('admin.dashboard')}}" class="sidebar__item active">
            <i class="uil uil-user"></i>
            <h3>Dashboard</h3>
        </a>


        <a href="{{route('admin.products')}}" class="sidebar__item">
            <i class="uil uil-clipboard-notes"></i>
            <h3>Produkty</h3>



            <a href="{{route('admin.categories')}}" class="sidebar__item">
                <i class="uil uil-clipboard"></i>
                <h3>Kategorie</h3>
            </a>


            <a href="" class="sidebar__item">
                <i class="uil uil-plus-circle"></i>
                <h3>Dodaj Produkt</h3>
            </a>

            <a href="" class="sidebar__item">
                <i class="uil uil-sign-out-alt"></i>
                <h3>Wyloguj się</h3>
            </a>

    </div>
</aside>
