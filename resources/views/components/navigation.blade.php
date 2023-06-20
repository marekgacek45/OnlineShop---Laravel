{{-- <nav class="nav">
    <div class="nav__container">
        <div style="display:flex">


            <a href="{{ route('home') }}">
                <div class="nav__logo-container">
                 

                    <h2 class="nav__logo-title">Online Shop</h2>
                </div>
            </a>

            <div class="nav__collapse">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#" class="nav__link">Kategorie</a>
                    </li>
                    <li class="nav__item"><a href="#" class="nav__link">Nowości</a></li>
                    <li class="nav__item"><a href="#" class="nav__link">Kontakt</a></li>
                </ul>
            </div>
        </div>
        <div class="nav__actions">
            <i class="uil uil-search"></i>
            

            <a href="{{route('admin.dashboard')}}"><i class="uil uil-apps"></i></a>
           
            @auth
                <a href="{{ route('userPanel') }}"><i class="uil uil-user-circle"></i></a>
            @else
                <a href="{{ route('showLogin') }}"><i class="uil uil-user-circle"></i></a>
            @endauth

            <i class="uil uil-heart"></i>
            <i class="uil uil-shopping-cart-alt"></i>

            <button class="hamburger hamburger--boring nav__hamburger" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>

    </div>
</nav> --}}


<nav class="navbar">
    <div class="navbar__logo">
        <a href="{{ route('home') }}">TrendSetter</a>
    </div>
    <ul class="navbar__links">
        <li><a href=""></a>Item1</li>
        <li><a href=""></a>Item2</li>
        <li><a href=""></a>Item3</li>
    </ul>
    <ul class="navbar__actions">
        <li><i class="uil uil-heart"></i></li>
        <li><i class="uil uil-shopping-cart-alt"></i></li>
    </ul>
    <button class="hamburger hamburger--boring navbar__hamburger" type="button">
        <span class="hamburger-box">
            <span class="hamburger-inner"></span>
        </span>
    </button>

    <div class="navbar__dropdown-menu">
        <li><a href=""></a>Item1</li>
        <li><a href=""></a>Item2</li>
        <li><a href=""></a>Item3</li>
        <div class="navbar__dropdown-menu__actions">
            <li><i class="uil uil-heart"></i></li>
            <li><i class="uil uil-shopping-cart-alt"></i></li>
        </div>
    </div>
</nav>