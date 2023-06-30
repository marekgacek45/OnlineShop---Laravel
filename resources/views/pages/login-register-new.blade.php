@extends('layout/log-reg-new')
@section('subtitle', 'Fajnie, że jesteś z nami')

@section('content')

    <div class="form">
        <input class="form__cover-input" type="checkbox" name="" id="flip">
        <div class="form__cover">
            <img src="{{asset('images/login.jpg')}}" alt="">
        </div>
        <div class="form__box form--login ">
            <div class="form__box-title">
                <h2>IceThreads</h2>
            </div>
            <div class="form__box-content">
                <h2>Zaloguj się</h2>
                <p>Witamy ponownie</p>
                <form action="{{ route('postLogin') }}" method="post" id="login">
                    @csrf
                    @error('loginError')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                    <div class="form__field">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field">
                        <label for="password">Hasło</label>
                        <input type="password" name="password" id="password" placeholder="Hasło">
                        @error('password')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
    
                    </div>
                    <div class="form__field">
                        <button type="submit" form="login">Zaloguj się</button>
    
                    </div>
                </form>
            </div>
            <div class="form__box-link">
                <p>Nie masz konta?<label for="flip">stwórz je</label></p>
            </div>

           
        </div>
        @php
            
        @endphp
        <div class="form__box form--register" >
            <div class="form__box-title">
                <h2>IceThreads</h2>
            </div>
            <div class="form__box-content">
                <h2>Zarejestruj się</h2>
                <p>Fajnie ze jestes</p>
                <form action="{{ route('postRegister') }}" method="post" id="register">
                    @csrf
                    @error('loginError')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                    <div class="form__field">
                        <label for="name">Imię</label>
                        <input type="text" name="name" id="name" placeholder="Imię" value="{{ old('name') }}">
                        @error('name')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field">
                        <label for="password">Hasło</label>
                        <input type="password" name="password" id="password" placeholder="Hasło">
                        @error('password')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field">
                        <label for="password_confirmation">Powtórz hasło</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Hasło">
                        @error('password_confirmation')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field">
                        <button type="submit" form="register" id="registerBtn">Stwórz konto</button>
    
                    </div>
                </form>
            </div>
            <div class="form__box-link">
                <p>Masz konto?<label for="flip">zaloguj się</label></p>
            </div>
        </div>
        {{-- <div class="cover"> --}}
        {{-- <div class="front">
            <img src="{{asset('images/login.jpg')}}" alt="">
            <div class="text">
                <span class="text-1">siemka witamy serdecznie </span>
                <span class="text-2">siemka witamy serdecznie </span>

            </div>
        </div> --}}
        {{-- <div class="back">
            <img class="back-img" src="{{asset('images/login.jpg')}}" alt="">
            <div class="text">
                <span class="text-1">kładniam sie nisko </span>
                <span class="text-2">kładniam sie nisko  </span>

            </div>
        </div> --}}
        {{-- </div>
    <div class="form__box">
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
    </div>
    <div class="form__box">
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
    </div>
</div> --}}
    @endsection
