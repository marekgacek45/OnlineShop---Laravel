<nav>
    <ul>
        <li>test</li>
        <li>test2</li>
    </ul>


    <a href="{{route('showLogin')}}">Zaloguj się </a>

    @auth
    <form action="{{ route('postLogout') }}" method="post">
        @csrf
        <button type="submit">Wyloguj się</button>
    </form>
    @endauth
</nav>
