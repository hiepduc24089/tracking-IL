@extends('web.master')
@section('title','Giỏ hàng')
@section('style_page')
    <link rel="stylesheet" href="{{ asset('assets/css/web/cart-page.css') }}">
@stop

@section('content')
    <div class="cart-wrapper">
        <div class="container">
            <h5 class="text-size-large text-color-secondary cart-page-title">Giỏ hàng</h5>
            <table class="cart-table">
                <thead>
                <tr>
                    <th class="text-white text-size-normal-light">Tên khóa học</th>
                    <th class="text-white text-size-normal-light">Giá</th>
                    <th class="text-white text-size-normal-light">Số lượng</th>
                    <th class="text-white text-size-normal-light">Thành tiền</th>
                    <th class="text-white text-size-normal-light">Thao tác</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            <input type="checkbox" class="course-checkbox">
                            <label class="text-color-secondary text-size-small-light">Matific - Toán tư duy</label>
                        </div>
                    </td>
                    <td><label class="text-color-secondary text-size-small-light">800.000₫</label></td>
                    <td>
                        <button class="quantity-btn">-</button>
                        <input type="number" value="1" class="quantity-input text-color-secondary text-size-small-light">
                        <button class="quantity-btn">+</button>
                    </td>
                    <td><label class="text-color-secondary text-size-small-light">800.000₫</label></td>
                    <td>
                        <a href="#" class="remove-link text-size-small-light">Xóa</a>
                        <br>
                        <a href="#" class="similar-link text-color-secondary text-decoration-underline">Tìm khóa học tương tự</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex justify-content-center align-items-center">
                            <input type="checkbox" class="course-checkbox">
                            <label class="text-color-secondary text-size-small-light">Matific - Toán tư duy</label>
                        </div>
                    </td>
                    <td><label class="text-color-secondary text-size-small-light">800.000₫</label></td>
                    <td>
                        <button class="quantity-btn">-</button>
                        <input type="number" value="1" class="quantity-input text-color-secondary text-size-small-light">
                        <button class="quantity-btn">+</button>
                    </td>
                    <td><label class="text-color-secondary text-size-small-light">800.000₫</label></td>
                    <td>
                        <a href="#" class="remove-link text-size-small-light">Xóa</a>
                        <br>
                        <a href="#" class="similar-link text-color-secondary text-decoration-underline">Tìm khóa học tương tự</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="cart-total-price-wrapper">
            <div class="container">
                <div class="cart-total-price">
                    <div class="cart-option">
                        <div class="cart-select-all">
                            <input type="checkbox" class="cart-select-all-checkbox">
                            <label class="text-color-secondary text-size-small-light">Chọn tất cả</label>
                        </div>
                        <input type="text" class="discount-code text-size-small-light text-color-secondary" placeholder="Nhập mã khuyến mãi (nếu có)"/>
                    </div>
                    <div class="price-wrapper">
                        <span class="text-color-secondary text-size-small-light">
                            Tổng đơn:
                            <span class="text-color-primary text-size-large">800.000đ</span>
                        </span>
                        <button class="text-size-normal text-color-secondary submit-cart">Thanh toán</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/web/cart-page.js') }}"></script>
@endpush

@section('footer')
@endsection
