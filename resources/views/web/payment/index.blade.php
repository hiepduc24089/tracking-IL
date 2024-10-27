@extends('web.master')
@section('title','Thanh toán')
@section('style_page')
    <link rel="stylesheet" href="{{ asset('assets/css/web/payment-page.css') }}">
@stop

@section('content')
    <div class="payment-wrapper">
        <form action="" method="POST" class="form-wrapper" id="payment-form">
            @csrf
            <div class="container">
                <h5 class="text-size-large text-color-secondary payment-page-title">Thông tin thanh toán</h5>
                <div class="d-flex align-items-center">
                    <div class="payment-default-information">
                        <input type="checkbox" class="payment-default-checkbox" id="default" checked onchange="handleCheckboxToggle(this, 'change')">
                        <label for="default" class="text-color-secondary text-size-normal-light">
                            Mặc định
                        </label>
                    </div>
                    <div class="payment-change-information">
                        <input type="checkbox" class="payment-change-checkbox" id="change" onchange="handleCheckboxToggle(this, 'default')">
                        <label for="change" class="text-color-secondary text-size-normal-light">
                            Tuỳ chỉnh
                        </label>
                    </div>
                </div>
                <div class="input-wrapper">
                    <div class="input-field-wrapper">
                        <label for="full_name" class="w-100 text-size-normal-light text-color-secondary mb-1">Họ và tên</label>
                        <input type="text" name="full_name" placeholder="Nhập họ và tên"
                               class="input-field w-100 {{ $errors->has('full_name') ? 'input-field-error' : '' }}"
                               value="{{ old('full_name') }}" />
                        @error('full_name')
                        <label for="full_name" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="input-field-wrapper">
                        <label for="phone" class="w-100 text-size-normal-light text-color-secondary mb-1">Số điện thoại</label>
                        <input type="text" name="phone" placeholder="Nhập số điện thoại"
                               class="input-field w-100 {{ $errors->has('phone') ? 'input-field-error' : '' }}"
                               value="{{ old('phone') }}" />
                        @error('phone')
                        <label for="phone" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="input-field-wrapper">
                        <label for="address" class="w-100 text-size-normal-light text-color-secondary mb-1">Địa chỉ</label>
                        <input type="text" name="address" placeholder="Nhập địa chỉ"
                               class="input-field w-100 {{ $errors->has('address') ? 'input-field-error' : '' }}"
                               value="{{ old('address') }}" />
                        @error('address')
                        <label for="address" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                        @enderror
                    </div>
                    <div class="input-field-wrapper">
                        <label for="note" class="w-100 text-size-normal-light text-color-secondary mb-1">Ghi chú đơn hàng</label>
                        <textarea rows="5" name="note" placeholder="Nếu cha mẹ gia hạn tài khoản, hãy note lại email và tên đăng nhập"
                                  class="input-field w-100 {{ $errors->has('note') ? 'input-field-error' : '' }}">{{ old('note') }}</textarea>
                        @error('note')
                        <label for="note" class="input-label-error text-size-bold-normal text-color-error">{{ $message }}</label>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="payment-total-price-wrapper">
                <div class="container">
                    <div class="payment-total-price">
                        <div class="payment-option">
                            <a href="{{route('cart.index')}}" class="text-color-secondary text-size-normal-light text-decoration-underline fw-800 text-hover-primary-color">
                                Xem lại đơn hàng
                            </a>
                            <div class="payment-select-all">
                                <input type="checkbox" class="payment-select-all-checkbox" id="agreeTerm">
                                <label class="text-color-secondary text-size-normal-light">
                                    Tôi đã đọc và đồng ý với
                                    <a href="#" class="text-decoration-underline fw-800 text-hover-primary-color">điều khoản và điều kiện</a>
                                    của website
                                </label>
                            </div>
                        </div>
                        <div class="price-wrapper">
                            <span class="text-color-secondary text-size-normal-light">
                                Tổng đơn:
                                <span class="text-color-primary text-size-large">800.000đ</span>
                            </span>
                            <button class="text-size-normal text-color-secondary submit-payment submit-btn-done" id="btnDone">
                                Thanh toán qua VNPay
                            </button>
                            <button class="text-size-normal text-color-secondary submit-payment submit-btn-not-done" id="btnNotDone" disabled>
                                Thanh toán qua VNPay
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/web/payment-page.js') }}"></script>
@endpush

@section('footer')
@endsection
