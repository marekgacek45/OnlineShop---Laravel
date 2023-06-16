@extends('layout/log-reg')
@section('subtitle', 'Zaloguj się')

@section('content')

    <div class="container">
        <input type="checkbox" name="" id="flip">
        <div class="cover">
            <div class="front">
                <img src="{{asset('images/login.jpg')}}" alt="">
            </div>
        </div>
        <form action="#">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="uil uil-envelope"></i>
                            <input type="text">
                        </div>
                        <div class="input-box">
                            <i class="uil uil-envelope"></i>
                            <input type="text">
                        </div>
                        <div><a href="#">Forgot password?</a></div>
                        <div class="input-box">
                            
                            <button>Submit</button>
                        </div>
                        <div class="text">dont have an account?<label for="flip">signup now</label></div>
                    </div>
                </div>

                <div class="signup-form">
                    <div class="title">Register</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="uil uil-envelope"></i>
                            <input type="text">
                        </div>
                        <div class="input-box">
                            <i class="uil uil-envelope"></i>
                            <input type="text" placeholder="test">
                        </div>
                        <div class="input-box">
                            <i class="uil uil-envelope"></i>
                            <input type="text">
                        </div>
                        <div><a href="#">Forgot password?</a></div>
                        <div class="input-box">
                            
                            <button>Submit</button>
                        </div>
                        <div class="text">already have an account?<label for="flip">login now</label></div>
                    </div>
                </div>


            </div>
        </form>

    </div>
@endsection
