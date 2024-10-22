<nav class="navbar navbar-expand-lg nav-bar-wrapper">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="/assets/images/admin/logo-white.png" alt="Fun Academy Logo" class="logo me-2">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="header-list-item navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="#">Khóa học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="{{route('blog.index')}}">Góc cha mẹ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="{{route('about.index')}}">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-size-normal text-color-white text-hover-secondary-color" href="#">Liên hệ</a>
                </li>
            </ul>
        </div>
        <div class="icon-list-wrapper d-flex align-items-center">
            @if(\Illuminate\Support\Facades\Auth::user())
                <div class="d-flex align-items-center header-icon-wrapper" >
                    <a href="#" class="">
                        <img src="{{asset('assets/images/web/shopping-cart.png')}}" alt="Shopping Cart" class="header-icon-item">
                    </a>
                    <a href="#" class="">
                        <img src="{{asset('assets/images/web/user-icon.png')}}" alt="User Icon" class="header-icon-item">
                    </a>
                </div>
            @else
                <div>
                    <a href="{{route('login')}}" class="login-button text-color-primary text-size-normal text-hover-secondary-color">Đăng nhập</a>
                </div>
            @endif
        </div>

    </div>
</nav>
<div class="list-menu-mobile" id="mobile-only">
    <div class="container">
        <ul class="header-list-item mx-auto">
            <li class="nav-item">
                <a class="text-size-normal text-color-white text-hover-secondary-color" href="#">
                    <img src="{{asset('assets/images/web/home-icon.png')}}" alt="Home icon" class="m-auto mb-1"/>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class=" text-size-normal text-color-white text-hover-secondary-color" href="#">
                    <img src="{{asset('assets/images/web/course-icon.png')}}" alt="Course icon" class="m-auto mb-1"/>
                    <span>Khóa học</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="text-size-normal text-color-white text-hover-secondary-color" href="{{route('blog.index')}}">
                    <img src="{{asset('assets/images/web/book-icon.png')}}" alt="Book icon" class="m-auto mb-1"/>
                    <span>Góc cha mẹ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="text-size-normal text-color-white text-hover-secondary-color" href="{{route('about.index')}}">
                    <img src="{{asset('assets/images/web/info-icon.png')}}" alt="Information icon" class="m-auto mb-1"/>
                    <span>Về chúng tôi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="text-size-normal text-color-white text-hover-secondary-color" href="#">
                    <img src="{{asset('assets/images/web/user-icon-mobile.png')}}" alt="User icon" class="m-auto mb-1"/>
                    <span>Tài khoản</span>
                </a>
            </li>
        </ul>
    </div>
</div>
