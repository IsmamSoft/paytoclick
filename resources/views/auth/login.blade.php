@extends('layouts.log')

@section('content')
<style>
body{
    font-family: "Work Sans", sans-serif;
    box-sizing: border-box;
}
:focus{
    outline: none;
}
.holder{
    width: 440px;
    background: #2196f3;
    height: 600px;
    margin: 50px auto;
    outline: 5px solid #f2f2f2;
}
.holder .parent{
    background-color: white;
    width: calc(100% - 50px);
    height: calc(100% - 50px);
    display: inline-block;
    margin-left: 25px;
    margin-top: 25px;
    border-radius: 7px;
}
.holder .parent h3{
    text-align: center;
    font-size: 25px;
    margin-bottom: 0;
}
form{
    display: block;
    border-bottom: 1px dashed #ccc;
    margin-left: 20px;
    margin-right: 20px;
}
form > div{
    margin: 20px;
    padding: 10px;
    border-bottom: 1px solid #ccc;
    position: relative;
}
form > div::before{
    content:"\f2c1";
    font-weight: 900;
    font-family: "Font Awesome 5 Free";
    position: absolute;
    color: #777;
    left: -1px;
}
form > div:nth-child(2):before{
    content:"\f007";
}
form > div:nth-child(3):before{
    content:"\f658";
}
form > div:nth-child(4):before{
    content:"\f023";
}

form div input{
    border: none;
    font-family: "Work Sans", sans-serif;
    font-size: 15px;
    margin-left: 10px;
}
div input + .border{
    position: absolute;
    left: 50%;
    bottom: -1px;
    background-color: #3498db;
    height: 1px;
    width: 0;
    transition: .3s;
    display: block;
}
div input:focus + .border{
    width: 100%;
    left: 0;
}
form .private-inp{
    border: none;
    font-family: "work sans",sans-serif;
    display: block;
    margin: auto;
    background: #2196f3;
    width: 90%;
    padding: 10px;
    border-radius: 7px;
    margin-bottom: 10px;
    color: white;
    font-size: 15px;
    font-weight: bold;
    cursor: pointer;
}
form p{
    margin: 20px;
    text-align: center;
    font-size: 12px;
    color: #777;
    padding: 15px;
}
form p a{
    text-decoration: none;
    font-weight: bold;
    color: #2196f3ed;
}
.parent h4{
    text-align: center;
    color: #777;
}
.social{
    text-align: center;
    margin-top: -8px;
}
.social i{
    width: 20px;
    height: 20px;
    background: #3B5998;
    display: inline-block;
    padding: 10px;
    border-radius: 50%;
    color: white;
}
.social i:nth-child(2){
    background: #1DA1F2;
}
.social i:nth-child(3){
    background: #DB4437;
}
:focus::placeholder{
    opacity: 0;
    transition: .5s;
}

</style>



<div class="holder">
    <div class="parent">
        <h3>Login</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            {{-- <div>
                <input type="text" placeholder="SponsorID *">
                <span class="border"></span>
            </div>

            <div>
                <input type="text" placeholder="User Name *" required>
                <span class="border"></span>
            </div> --}}

            <div>
                <input type="email" placeholder="Email *" class="email" name="email" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input type="password" placeholder="Password *" class="password" name="password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div>
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <input type="submit" value="LOGIN" class="private-inp">
            <p>
                You Have No Account?
                <a href="{{route('register')}}">Sign Up Now</a>
            </p>
        </form>
        @if (Route::has('password.request'))
        <a class="btn btn-link" style="color: #000000; float:right;" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif

    </div>
</div>

@endsection
