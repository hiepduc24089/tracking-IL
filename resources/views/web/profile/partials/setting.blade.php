<form class="form-wrapper" action="" method="POST">
    @csrf
    <div class="input-wrapper">
        <div>
            <h5 class="text-size-large text-color-secondary information-title">Đổi mật khẩu</h5>
            <p class="text-size-s-small text-color-secondary ">Mật khẩu nên có tối thiểu 6 ký tự, đồng thời bao gồm cả chữ số, chữ cái và ký tự đặc biệt (!$@%). </p>
        </div>
        <div class="row">
            <div class="col-xl-6 col-12 input-field-wrapper">
                <label for="current_password" class="w-100 text-size-normal-light text-color-secondary mb-1">Mật khẩu hiện tại</label>
                <input type="password" id="current-password" name="current_password" placeholder="Nhập mật khẩu hiện tại"
                       class="input-field w-100 {{ $errors->has('current_password') ? 'input-field-error' : '' }}"
                       value="{{ old('current_password') }}" />
                <img src="{{asset('assets/images/web/hide-password.png')}}" alt="Show Hide Password" width="20px" height="20px" class="toggle-password" data-target="current-password" />
                @error('current_password')
                <label for="current_password" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                @enderror
            </div>
        </div>
        <div class="row profile-column-gap">
            <div class="col-xl-6 input-field-wrapper">
                <label for="password" class="w-100 text-size-normal-light text-color-secondary mb-1">Mật khẩu mới</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu mới"
                       class="input-field w-100 {{ $errors->has('password') ? 'input-field-error' : '' }}"
                       value="{{ old('password') }}" />
                <img src="{{asset('assets/images/web/hide-password.png')}}" alt="Show Hide Password" width="20px" height="20px" class="toggle-password" data-target="password" />
                @error('password')
                <label for="password" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                @enderror
            </div>
            <div class="col-xl-6 input-field-wrapper">
                <label for="password_confirmation" class="w-100 text-size-normal-light text-color-secondary mb-1">Nhập lại mật khẩu mới</label>
                <input type="password" id="password-again" name="password_confirmation" placeholder="Nhập mật khẩu mới"
                       class="input-field w-100 {{ $errors->has('password_confirmation') ? 'input-field-error' : '' }}"
                       value="{{ old('password_confirmation') }}" />
                <img src="{{asset('assets/images/web/hide-password.png')}}" alt="Show Hide Password" width="20px" height="20px" class="toggle-password" data-target="password-again" />
                @error('password_confirmation')
                <label for="password_confirmation" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                @enderror
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('forgetPassword')}}" class="text-color-primary text-size-normal text-decoration-underline text-hover-secondary-color pointer-event">Quên mật khẩu hiện tại?</a>
            <div>
                <button class="text-size-normal text-color-secondary submit-change-pass submit-btn-done" id="btnChangePassDone">
                    Lưu
                </button>
                <button class="text-size-normal text-color-secondary submit-change-pass submit-btn-not-done" id="btnChangePassNotDone" disabled>
                    Lưu
                </button>
            </div>
        </div>
    </div>
</form>

<div class="activity-wrapper">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="text-size-large text-color-secondary information-title">Nhật ký hoạt động</h5>
        <a href="#" id="seeActivityPage" class="text-color-primary text-size-normal text-decoration-underline text-hover-secondary-color pointer-event">
            Xem thêm
        </a>
    </div>
    <div class="activity-date-wrapper">
        <p class="text-color-secondary text-size-normal-light mb-2">20 tháng 9, 2024</p>
        <div class="activity-list">
            <div class="activity-detail">
                <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Sample" class="activity-image" />
                <div class="text-color-secondary text-size-normal-light">
                    <span>Bạn đã thích </span>
                    <span class="text-decoration-underline fw-800">bài viết</span>
                    <span>trên </span>
                    <span class="text-decoration-underline fw-800">Góc cha mẹ</span>
                </div>
            </div>
            <div class="activity-detail">
                <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Sample" class="activity-image" />
                <div class="text-color-secondary text-size-normal-light">
                    <span>Bạn đã thích </span>
                    <span class="text-decoration-underline fw-800">bài viết</span>
                    <span>trên </span>
                    <span class="text-decoration-underline fw-800">Góc cha mẹ</span>
                </div>
            </div>
            <div class="activity-detail">
                <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Sample" class="activity-image" />
                <div class="text-color-secondary text-size-normal-light">
                    <span>Bạn đã thích </span>
                    <span class="text-decoration-underline fw-800">bài viết</span>
                    <span>trên </span>
                    <span class="text-decoration-underline fw-800">Góc cha mẹ</span>
                </div>
            </div>
            <div class="activity-detail">
                <img src="{{asset('assets/images/web/sample-image.png')}}" alt="Sample" class="activity-image" />
                <div class="text-color-secondary text-size-normal-light">
                    <span>Bạn đã thích </span>
                    <span class="text-decoration-underline fw-800">bài viết</span>
                    <span>trên </span>
                    <span class="text-decoration-underline fw-800">Góc cha mẹ</span>
                </div>
            </div>
        </div>
    </div>
</div>
