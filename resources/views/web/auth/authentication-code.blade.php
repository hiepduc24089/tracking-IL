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
                            <img src="{{asset('assets/images/web/arrow-back.png')}}" alt="Arrow Back" width="26px"
                                 height="26px"/>
                            <span class="text-color-primary text-size-normal mx-1 text-hover-third-color">Quay lại</span>
                        </a>
                        <div class="text-end">
                            <a href="{{route('login')}}" class="text-color-primary text-size-normal text-decoration-underline text-hover-third-color">Đăng nhập</a>
                        </div>
                    </div>
                    <form action="{{route('authenticationCode.submit')}}" method="POST" class="form-wrapper" id="authentication-code-form">
                        @csrf
                        <h2 class="title text-color-secondary mb-0">NHẬP MÃ XÁC NHẬN</h2>
                        <h5 class="text-size-normal text-color-secondary" style="margin-bottom: 30px">Mã xác nhận đã được gửi qua email/ SĐT</h5>
                        <div class="input-wrapper">
                            <div class="input-field-wrapper">
                                <label for="authentication_code" class="input-label text-size-bold-normal text-color-primary">Mã xác nhận</label>
                                <input type="text" name="authentication_code" placeholder="Mã xác nhận"
                                       class="input-field w-100 {{ $errors->has('authentication_code') ? 'input-field-error' : '' }}"
                                       value="{{ old('authentication_code') }}" />
                                @error('authentication_code')
                                    <label for="authentication_code" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        <div class="text-end mt-3">
                            <p class="text-color-secondary text-size-normal">Chưa nhận được?</p>
                            <a href="{{route('forgetPassword')}}" class="text-color-primary text-size-normal text-decoration-underline">Gửi lại mã</a>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="submit-btn submit-btn-done text-color-secondary text-size-normal">Tiếp theo</button>
                            <button class="submit-btn submit-btn-not-done text-size-normal" disabled>Tiếp theo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
