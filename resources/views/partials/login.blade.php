@extends('layout.master')
@section('content')

<section class="py-3 mb-5 mx-3 login-page">
    <div class="login-container animated fadeInDown bootstrap snippets bootdeys">
        <div class="loginbox bg-white">
            <div class="loginbox-title my-5">SIGN IN</div>
            <div class="loginbox-textbox">
                <input type="text" class="form-control" placeholder="Email">
            </div>
            <div class="loginbox-textbox">
                <input type="text" class="form-control" placeholder="Password">
            </div>
            <div class="loginbox-forgot">
                <a href="">Forgot Password?</a>
            </div>
            <div class="loginbox-submit">
                <input type="button" class="btn btn-primary btn-block" value="Login">
            </div>

        </div>
        <div class="logobox overflow-hidden text-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="" srcset="" style="width:80px; margn:auto;">
        </div>
    </div>

</section>
@endsection