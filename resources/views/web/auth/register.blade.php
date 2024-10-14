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
                            <span class="text-color-primary text-size-normal mx-1 text-hover-third-color">Quay lại</span>
                        </a>
                        <div class="text-end">
                            <p class="text-color-secondary text-size-normal">Đã có tài khoản?</p>
                            <a href="{{route('login')}}" class="text-color-primary text-size-normal text-decoration-underline text-hover-third-color">Đăng nhập ngay</a>
                        </div>
                    </div>
                    <form action="{{route('register.submit')}}" method="POST" class="form-wrapper" id="register-form">
                        @csrf
                        <h2 class="title text-color-secondary">ĐĂNG KÍ TÀI KHOẢN</h2>
                        <div class="input-wrapper">
                            <div class="input-field-wrapper">
                                <label for="email" class="input-label text-size-bold-normal text-color-primary">Email</label>
                                <input type="text" name="email" placeholder="Email"
                                       class="input-field w-100 {{ $errors->has('email') ? 'input-field-error' : '' }}"
                                       value="{{ old('email') }}" />
                                @error('email')
                                    <label for="email" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="input-field-wrapper">
                                <label for="phone" class="input-label text-size-bold-normal text-color-primary">Số điện thoại</label>
                                <input type="text" name="phone" placeholder="Số điện thoại"
                                       class="input-field w-100 {{ $errors->has('phone') ? 'input-field-error' : '' }}"
                                       value="{{ old('phone') }}" />
                                @error('phone')
                                    <label for="phone" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="input-field-wrapper">
                                <label for="full_name" class="input-label text-size-bold-normal text-color-primary">Họ và tên</label>
                                <input type="text" name="full_name" placeholder="Họ và tên"
                                       class="input-field w-100 {{ $errors->has('full_name') ? 'input-field-error' : '' }}"
                                       value="{{ old('full_name') }}" />
                                @error('full_name')
                                    <label for="full_name" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
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
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="submit-btn submit-btn-done text-color-secondary text-size-normal">Đăng ký</button>
                            <button class="submit-btn submit-btn-not-done text-size-normal" disabled>Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/web/register.js') }}"></script>
<script>
    var showPasswordImg = "{{asset('assets/images/web/hide-password.png')}}";
</script>
@endpush
