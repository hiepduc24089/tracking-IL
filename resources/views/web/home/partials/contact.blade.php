<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 d-none d-lg-block">
            <img src="{{asset('assets/images/web/sample-image.png')}}" alt="sample" class="contact-image" />
        </div>
        <div class="col-lg-6">
            <form action="" method="POST" class="form-wrapper" id="contact-form">
                @csrf
            <h2 class="contact-title">
                ĐĂNG KÝ TƯ VẤN
            </h2>
                <h5 class="text-size-normal-light text-black mb-4">
                    Nếu phụ huynh cần hỗ trợ hoặc tìm hiểu thêm thông tin về khoá học, vui lòng để lại thông tin tại đây cho Fun Academy.
                </h5>
                <div class="input-wrapper">
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
                </div>
                @include('web.auth.partials.success-modal')
                <div class="d-flex justify-content-center">
                    <button type="submit" class="submit-btn submit-btn-done text-color-secondary text-size-normal">Đăng ký ngay</button>
                    <button class="submit-btn submit-btn-not-done text-size-normal" disabled>Đăng ký ngay</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.querySelector('.form-wrapper');
        const inputs = form.querySelectorAll('.input-field');
        const submitBtnDone = form.querySelector('.submit-btn-done');
        const submitBtnNotDone = form.querySelector('.submit-btn-not-done');

        function checkInputs() {
            let allFilled = true;
            inputs.forEach(input => {
                if (input.value.trim() === '') {
                    allFilled = false;
                }
            });

            if (allFilled) {
                submitBtnDone.style.display = 'block';
                submitBtnNotDone.style.display = 'none';
                submitBtnDone.disabled = false;
            } else {
                submitBtnDone.style.display = 'none';
                submitBtnNotDone.style.display = 'block';
                submitBtnNotDone.disabled = true;
            }
        }

        checkInputs();

        inputs.forEach(input => {
            input.addEventListener('input', checkInputs);
        });
    })
</script>
