<nav class="navbar navbar-expand-lg " style="background-color: #f7a600;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="/assets/images/admin/logo-white.png" alt="Fun Academy Logo" class="logo me-2">
        </a>
        <div class="icon-list-wrapper d-flex align-items-center">
            @if(\Illuminate\Support\Facades\Auth::user())
                <div class="d-flex align-items-center header-icon-wrapper" >
                    <a href="#" class="">
                        <img src="{{asset('assets/images/web/shopping-cart.png')}}" alt="Shopping Cart" width="30px" height="30px">
                    </a>
                    <a href="#" class="">
                        <img src="{{asset('assets/images/web/user-icon.png')}}" alt="User Icon" width="30px" height="30px">
                    </a>
                </div>
            @else
                <div>
                    <a href="{{route('login')}}" class="login-button text-color-primary text-size-normal text-hover-secondary-color">Đăng nhập</a>
                </div>
            @endif
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="header-list-item navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="#">Khóa học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="#">Góc cha mẹ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="#">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="#">Liên hệ</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
