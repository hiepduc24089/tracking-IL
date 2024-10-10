@extends('web.auth.app')

@section('content')
    <div class="login-page">
        <div class="background-primary">

        </div>
        <div class="container">
            <div class="login-wrapper">
                <div class="image-banner">
                    <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Sample Image"/>
                </div>
                <div class="right-wrapper">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="javascript:void(0);" class="d-flex align-items-center" onclick="window.history.back();">
                            <img src="{{asset('assets/images/web/arrow-back.png')}}" alt="Arrow Back" width="26px" height="26px"/>
                            <span class="text-color-primary text-size-normal mx-1">Quay lại</span>
                        </a>
                        <div class="text-end">
                            <p class="text-color-secondary text-size-normal">Chưa có tài khoản?</p>
                            <a href="{{route('register')}}" class="text-color-primary text-size-normal text-decoration-underline">Đăng ký ngay</a>
                        </div>
                    </div>
                    <form action="{{route('login.submit')}}" method="POST" class="form-wrapper" id="login-form">
                        @csrf
                        <h5 class="text-size-normal text-color-secondary">Chào mừng cha mẹ đến với Fun Academy</h5>
                        <h2 class="title text-color-secondary">ĐĂNG NHẬP</h2>
                        <div class="input-wrapper">
                            <div class="input-field-wrapper">
                                <label for="email_phone" class="input-label text-size-bold-normal text-color-primary">Email hoặc số điện thoại</label>
                                <input type="text" name="email_phone" placeholder="Email hoặc số điện thoại"
                                       class="input-field w-100 {{ $errors->has('email_phone') ? 'input-field-error' : '' }}" value="{{ old('email_phone') }}"/>
                                @error('email_phone')
                                    <label for="email_phone" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="input-field-wrapper">
                                <label for="password" class="input-label text-size-bold-normal text-color-primary">Mật khẩu</label>
                                <input type="password" name="password" placeholder="Mật khẩu"
                                       class="input-field w-100 {{ $errors->has('password') ? 'input-field-error' : '' }}"
                                       id="password">
                                <img src="{{asset('assets/images/web/hide-password.png')}}" alt="Show Hide Password" width="20px" height="20px" class="toggle-password" data-target="password" />
                                @error('password')
                                    <label for="password" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" name="remember" class="checkbox-remember mx-1">
                                <label class="text-color-primary text-size-normal">Nhớ tài khoản</label>
                            </div>
                            <a href="{{route('forgetPassword')}}" class="text-color-primary text-size-large text-decoration-underline">Quên mật khẩu?</a>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="submit-btn submit-btn-done text-color-secondary text-size-normal">Đăng nhập</button>
                            <button class="submit-btn submit-btn-not-done text-size-normal" disabled>Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    var showPasswordImg = "{{asset('assets/images/web/hide-password.png')}}"
</script>
