@extends('layout/master')
@section('subtitle', 'Zaloguj się')

@section('content')

    <main>
        <div>
            <div>
                <h1>Zaloguj się na swoje konto</h1>
                <p>Witamy ponownie</p>
                <form action="{{route('postLogin')}}" method="post">
                    @csrf
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div>
                        <label for="password">Hasło</label>
                        <input type="password" name="password" id="password" placeholder="Hasło">
                    </div>
                    <button type="submit">Zaloguj się</button>
                </form>
                <p>Nie masz konta? <a href="{{route('showRegister')}}">Stwórz je</a></p>
            </div>



            <div></div>
        </div>
    </main>



@endsection
