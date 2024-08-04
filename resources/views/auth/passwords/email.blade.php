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
                                <h3 class="mb-4 d-block text-center">Đặt lại mật khẩu</h3>
                            </div>
                        </div>
                        <form action="{{route("password.email")}}" class="signin-form" method="POST">
                            @csrf
                            <div class="form-group my-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                placeholder="Nhập email của bạn" required="" id="email" name="email" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                    Gửi link đặt lại mật khẩu
                                </button>
                            </div>
                        </form>
                        <p class="text-center d-block my-5">Bạn đã biết đến Tshop ? <a  href="{{route('login')}}">Đăng nhập</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
