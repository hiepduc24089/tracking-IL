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
                            <span class="text-color-primary text-size-normal mx-1">Quay lại</span>
                        </a>
                        <div class="text-end">
                            <a href="#" class="text-color-primary text-size-normal text-decoration-underline">Đăng nhập</a>
                        </div>
                    </div>
                    <form action="{{route('forgetPassword.submit')}}" method="POST" class="form-wrapper" id="forget-password-form">
                        @csrf
                        <h2 class="title text-color-secondary">CẤP LẠI MẬT KHẨU</h2>
                        <div class="input-wrapper">
                            <div class="input-field-wrapper">
                                <label for="email" class="input-label text-size-bold-normal text-color-primary">Email</label>
                                <input type="text" name="email" placeholder="Email" class="input-field w-100" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-2">
                            <button type="submit" class="submit-btn submit-btn-done text-color-secondary text-size-normal">Tiếp theo</button>
                            <button class="submit-btn submit-btn-not-done text-size-normal" disabled>Tiếp theo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

