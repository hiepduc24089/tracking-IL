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
                    <form action="{{route('newPassword.submit')}}" method="POST" class="form-wrapper" id="new-password-form">
                        @csrf
                        <h2 class="title text-color-secondary mb-0">THIẾT LẬP MẬT KHẨU</h2>
                        <h5 class="text-size-normal text-color-secondary" style="margin-bottom: 30px">Mật khẩu mới cho tài khoản [Email/SĐT]</h5>
                        <div class="input-wrapper">
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
                            <div class="input-field-wrapper">
                                <label for="password_confirmation" class="input-label text-size-bold-normal text-color-primary">Nhập lại mật khẩu</label>
                                <input type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu"
                                       class="input-field w-100 {{ $errors->has('password_confirmation') ? 'input-field-error' : '' }}"
                                       id="password-again">
                                <img src="{{asset('assets/images/web/hide-password.png')}}" alt="Show Hide Password" width="20px" height="20px" class="toggle-password" data-target="password-again" />
                                @error('password_confirmation')
                                <label for="password_confirmation" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                                @enderror
                            </div>
                        </div>
                        @include('web.auth.partials.success-modal')
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="submit-btn submit-btn-done text-color-secondary text-size-normal">Tiếp theo</button>
                            <button class="submit-btn submit-btn-not-done text-size-normal" disabled>Tiếp theo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/web/new-password.js') }}"></script>
    <script>
        var showPasswordImg = "{{asset('assets/images/web/hide-password.png')}}"
    </script>
@endpush
