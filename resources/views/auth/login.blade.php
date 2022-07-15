
@extends('layout')
@section('content')
{{ Auth::user() }}
<main class="site-main" style="background-color: #78909c;">
    <div class="site-main signup-wrapper">
        <div class="container">
            <div class="row" style="">
                    <div class="col-lg-5 col-sm-12 col-md-8 col-12 m-auto">
                         @include('flash-messages')
                        <div class="form-wrapper">
                            <form name="form" method="POST" action="{{url('login')}}">
                            @csrf
                            <h1 class="signup-heading">Login</h1>
                            <h1><span style="color:red">Construct</span><span style="color:black"> Smartly</span></h1>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Username" required name="email" id="username" value="{{old('email')}}">
                                @if ($errors->has('email'))
                                <span class="text-error">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value=""required>
                                @if ($errors->has('password'))
                                <span class="text-error">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="checkbox-wrapper">
                                <div class="form-check">
                                    <input type="checkbox" id="remember_me" name="remember_me" class="form-check-input" >
                                    <label class="form-check-label" for="exampleCheck1">Remember Me </label>
                                    </div>
                                    <div class="forgot-password">
                                        <a href="" class="forgot-pass">Forgot Password ?</a>
                                    </div>
                            </div>
                            <button type="submit" name="loginbtn" value="Login" class="btn btn-primary">Login</button>
                            <p class="text">or</p>
                            <a href="https://getworktraining.co.uk/" class="register-bttn">Visit Site</a>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</main>
@endsection
   
