@extends('layout/master')
@section('subtitle', 'Zarejestruj się')
@section('content')

    <main>
        <div>
            <div>
                <h1>Swtórz konto</h1>
                <p>Załóż konto i dołącz do nas</p>
                <form action="{{route('postRegister')}}" method="post">
                    @csrf
                    <div>
                        <label for="name">Imię</label>
                        <input type="name" name="name" id="name" placeholder="Imię">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div>
                        <label for="password">Hasło</label>
                        <input type="password" name="password" id="password" placeholder="Hasło">
                    </div>
                    <div>
                        <label for="password_confirmation">Powtórz hasło</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Powtórz hasło">
                    </div>
                    <div>
                        <button type="submit">Stwórz konto</button>
                    </div>

                </form>
                <p>Masz już konto? <a href="{{ route('showLogin') }}">Zaloguj się</a></p>
            </div>



            <div></div>
        </div>
    </main>
@endsection
