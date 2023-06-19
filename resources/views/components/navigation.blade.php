<nav class="nav">
    <div class="nav__container">
        <div style="display:flex">


            <a href="{{ route('home') }}">
                <div class="nav__logo-container">
                    {{-- <img src="../dist/img/logo.png" alt="logo" class="nav__logo-img"> --}}

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
            

            <a href="{{route('adminPanel')}}"><i class="uil uil-apps"></i></a>
           
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
</nav>
