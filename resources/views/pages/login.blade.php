@extends('layout/master')
@section('subtitle', 'Zaloguj się')

@section('content')

    <main class="login">
        <div class="login__container">
            <div class="login__box">

            
            <div class="login__form">
                <h1>Zaloguj się</h1>
                <p>Witamy ponownie</p>
                <form action="{{ route('postLogin') }}" method="post">
                    @csrf
                    @error('loginError')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    </div>
                    <div>
                        <label for="password">Hasło</label>
                        <input type="password" name="password" id="password" placeholder="Hasło">
                        @error('password')
                        <span style="color: red">{{ $message }}</span>
                    @enderror
                    </div>
                    <button type="submit">Zaloguj się</button>
                </form>
                <p>Nie masz konta? <a href="{{ route('showRegister') }}">Stwórz je</a></p>
            </div>
            <div class="login__image">
                <img src="{{asset('images/login.jpg')}}" alt="">
            </div>
        </div>
    </div>
    </main>
@endsection
