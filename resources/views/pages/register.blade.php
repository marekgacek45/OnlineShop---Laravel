@extends('layout/master')
@section('subtitle', 'login-register')
@section('content')

<div class="login__container">
    <div class="login__box">


        <div class="login__form">
            {{-- <h1>Nazwa firmy</h1> --}}
            <h2>Swtórz konto</h2>
            <p>Załóż konto i dołącz do nas</p>
            <form action="{{route('postRegister')}}" method="post">
                @csrf
                @error('loginError')
                    <span class="error-text">{{ $message }}</span>
                @enderror
                <div class="login__form-box">
                    <label for="name">Imię</label>
                    <input type="text" name="name" id="name" placeholder="Imię" value="{{ old('name') }}">
                    @error('name')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                <div class="login__form-box">
                    <label for="name">Email</label>
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
                    <label for="password_confirmation">Powtórz hasło</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Hasło">
                    @error('password_confirmation')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                </div>
                <div class="login__form-box">
                    <button type="submit">Stwórz konto</button>

                </div>
            </form>
            <p class="login__form-register">Maszkonto? <a href="{{ route('showLogin') }}">Zaloguj się!</a></p>
        </div>
        <div class="login__image" style="background-image: url({{asset('images/login.jpg')}})">
<p>test</p>
        </div>
    </div>
</div>
@endsection
