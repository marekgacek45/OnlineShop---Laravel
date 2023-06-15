@extends('layout/master')
@section('subtitle', 'Zaloguj się')

@section('content')


    <div class="login__container">
        <div class="login__box">


            <div class="login__form">
                {{-- <h1>Nazwa firmy</h1> --}}
                <h2>Zaloguj się</h2>
                <p>Witamy ponownie</p>
                <form action="{{ route('postLogin') }}" method="post">
                    @csrf
                    @error('loginError')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                    <div class="login__form-box">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="login__form-box">
                        <label for="password">Hasło</label>
                        <input type="password" name="password" id="password" placeholder="Hasło">
                        @error('password')
                            <span class="error-text">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="login__form-box">
                        <button type="submit">Zaloguj się</button>

                    </div>
                </form>
                <p class="login__form-register">Nie masz konta? <a href="{{ route('showRegister') }}">Stwórz je!</a></p>
            </div>
            <div class="login__image" style="background-image: url({{asset('images/login.jpg')}})">
<p>test</p>
            </div>
        </div>
    </div>


@endsection
