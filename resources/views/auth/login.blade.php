@extends('layouts.layout')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container" style="margin-top:50px ; margin-bottom: 50px">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex ">
                    <div class="img col-6"
                        style="width:100%;background-size: cover; background-repeat: no-repeat; background-image: url(https://i.pinimg.com/736x/9d/30/d8/9d30d845773e4bfb594151783170c804.jpg);">
                    </div>
                    <div class="login-wrap p-4 p-md-5 col-6" style="min-height: 670px">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4 d-block text-center">Đăng nhập</h3>
                            </div>
                        </div>
                        <form action="{{route("login")}}" class="signin-form" method="POST">
                            @csrf
                            <div class="form-group my-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" 
                                placeholder="Nhập email của bạn" required="" id="email" name="email">
                            </div>
                            <div class="form-group my-4">
                                <label class="label" for="password">Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Vui lòng nhập mật khẩu" required="" name="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                    Đăng nhập
                                </button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50 text-left">
                                    <label class="checkbox-wrap checkbox-primary mb-0 d-flex">Remember Me
                                        <input type="checkbox" checked="" class="mx-2">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="{{route("password.request")}}">Quên mật khẩu</a>
                                </div>
                            </div>
                        </form>
                        <p class="text-center d-block my-5">Bạn mới biết đến Tshop ? <a  href="{{route('register')}}">Đăng kí</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
