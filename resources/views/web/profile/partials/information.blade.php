<form class="form-wrapper" action="" method="POST">
    @csrf
    <div class="information-wrapper">
        <div class="input-wrapper">
            <h5 class="text-size-large text-color-secondary information-title">Thông tin cha/mẹ</h5>
            <div class="row profile-column-gap">
                <div class="col-xl-6 col-12 input-field-wrapper">
                    <label for="full_name" class="w-100 text-size-normal-light text-color-secondary mb-1">Họ và tên</label>
                    <label for="sub_full_name" class="w-100 text-size-s-small text-color-secondary text-truncate">Theo thông tin đã đăng kí ban đầu</label>
                    <input type="text" name="full_name" placeholder="Nhập họ và tên"
                           class="input-field w-100 {{ $errors->has('full_name') ? 'input-field-error' : '' }}"
                           value="{{ old('full_name') }}" />
                    @error('full_name')
                    <label for="full_name" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                    @enderror
                </div>
                <div class="col-xl-6 col-12 input-field-wrapper">
                    <label for="current_name" class="w-100 text-size-normal-light text-color-secondary mb-1">Tên hiển thị</label>
                    <label for="sub_current_name" class="w-100 text-size-s-small text-color-secondary text-truncate">Tên này sẽ được hiển thị khi cha/mẹ tham gia diễn đàn, đánh giá sản phẩm, ...</label>
                    <input type="text" name="current_name" placeholder="Tên đã đăng kí"
                           class="input-field w-100 {{ $errors->has('full_name') ? 'input-field-error' : '' }}"
                           value="{{ old('current_name') }}" />
                    @error('current_name')
                    <label for="current_name" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                    @enderror
                </div>
            </div>
            <div class="row profile-column-gap">
                <div class="col-xl-6 input-field-wrapper">
                    <label for="phone" class="w-100 text-size-normal-light text-color-secondary mb-1">Số điện thoại</label>
                    <input type="text" name="phone" placeholder="Số điện thoại đã đăng kí"
                           class="input-field w-100 {{ $errors->has('phone') ? 'input-field-error' : '' }}"
                           value="{{ old('phone') }}" />
                    @error('phone')
                    <label for="phone" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                    @enderror
                </div>
                <div class="col-xl-6 input-field-wrapper">
                    <label for="email" class="w-100 text-size-normal-light text-color-secondary mb-1">Email</label>
                    <input type="text" name="email" placeholder="Email đã đăng kí"
                           class="input-field w-100 {{ $errors->has('email') ? 'input-field-error' : '' }}"
                           value="{{ old('email') }}" />
                    @error('email')
                    <label for="email" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                    @enderror
                </div>
            </div>
        </div>

        <div class="input-wrapper">
            <h5 class="text-size-large text-color-secondary information-title">Thông tin của bé</h5>
            <div class="row profile-column-gap">
                <div class="col-xl-6 col-12 input-field-wrapper">
                    <label for="full_name_child" class="w-100 text-size-normal-light text-color-secondary mb-1">Họ và tên của bé</label>
                    <input type="text" name="full_name_child" placeholder="Tên của bé"
                           class="input-field w-100 {{ $errors->has('full_name_child') ? 'input-field-error' : '' }}"
                           value="{{ old('full_name_child') }}" />
                    @error('full_name_child')
                    <label for="full_name_child" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                    @enderror
                </div>
                <div class="col-xl-6">
                    <div class="row ">
                        <div class="col-6">
                            <label for="year_of_birth" class="w-100 text-size-normal-light text-color-secondary mb-1">Năm sinh</label>
                            <select name="year_of_birth" class="select-field w-100 {{ $errors->has('year_of_birth') ? 'input-field-error' : '' }}">
                                <option value="" disabled selected>Chọn năm sinh</option>
                                @for ($year = date('Y'); $year >= 2000; $year--)
                                    <option value="{{ $year }}" {{ old('year_of_birth') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                @endfor
                            </select>
                            @error('year_of_birth')
                            <label for="year_of_birth" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label for="gender" class="w-100 text-size-normal-light text-color-secondary mb-1">Giới tính</label>
                            <select name="gender" class="select-field w-100 {{ $errors->has('gender') ? 'input-field-error' : '' }}">
                                <option value="" disabled selected>Chọn giới tính</option>
                                <option value="Nam" {{ old('gender') == 'Nam' ? 'selected' : '' }}>Nam</option>
                                <option value="Nữ" {{ old('gender') == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                                <option value="Khác" {{ old('gender') == 'Khác' ? 'selected' : '' }}>Khác</option>
                            </select>
                            @error('gender')
                            <label for="gender" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="input-wrapper">
            <h5 class="text-size-large text-color-secondary information-title">Địa chỉ thanh toán/giao hàng</h5>
            <div class="input-field-wrapper">
                <label for="address" class="w-100 text-size-normal-light text-color-secondary mb-1">Địa chỉ</label>
                <input type="text" name="address" placeholder="Nhập địa chỉ"
                       class="input-field w-100 {{ $errors->has('address') ? 'input-field-error' : '' }}"
                       value="{{ old('address') }}" />
                @error('address')
                <label for="address" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                @enderror
            </div>
        </div>

        <div class="d-flex align-items-center justify-content-end mt-4">
            <div class="me-3">
                <button type="button" class="text-size-normal text-color-secondary submit-edit" id="btnEdit">
                    Chỉnh sửa
                </button>
                <button type="button" class="text-size-normal text-color-secondary submit-edit" id="btnCancelEdit" >
                    Huỷ chỉnh sửa
                </button>
            </div>
            <div>
                <button class="text-size-normal text-color-secondary submit-profile submit-btn-done" id="btnProfileDone">
                    Lưu
                </button>
                <button class="text-size-normal text-color-secondary submit-profile submit-btn-not-done" id="btnProfileNotDone" disabled>
                    Lưu
                </button>
            </div>
        </div>
    </div>
</form>
