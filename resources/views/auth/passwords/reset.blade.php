@extends('layouts.layout')

@section('content')

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
                        <form action="{{ route('password.update') }}" class="signin-form" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group my-4">
                                <label class="form-label" for="email">Email</label>
                                <input disabled type="email" class="form-control"  value="{{ $email ?? old('email') }}" >
                                <input id="email" name="email"  type="hidden"  value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group my-4">
                                <label class="label" for="password">Mật khẩu</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group my-4">
                                <label class="label" for="password">Đặt lại mật khẩu</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">
                                    Đăng nhập
                                </button>
                            </div>
                         
                        </form>
                        <p class="text-center d-block my-5">Bạn đã biết đến Tshop ? <a href="{{ route('login') }}">Đăng
                                nhập</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
