<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{route('admin.index')}}">
            <img src="/assets/images/admin/logo-white.png" alt="Logo White" />
        </a>
    </div>
    <div class="app-sidebar3">
        <div class="main-menu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/>
                </svg>
            </div>
            <ul class="side-menu">
                @foreach (config('menu_aside.admin') as $menu)
                    <li class="slide">
                        <a class="side-menu__item" href="{{ $menu['route'] ? route($menu['route'], $menu['params'] ?? []) : 'javascript:void(0);' }}" data-bs-toggle="slide">
                            <i class="{{ $menu['icon'] }} sidemenu_icon"></i>
                            <span class="side-menu__label">{{ $menu['title'] }}</span>
                            @if (!empty($menu['submenu']))
                                <i class="angle fas fa-angle-right"></i>
                            @endif
                        </a>
                        @if (!empty($menu['submenu']))
                            <ul class="slide-menu">
                                @foreach ($menu['submenu'] as $submenu)
                                    <li class="sub-slide">
                                        <a class="sub-side-menu__item" href="{{ route($submenu['route'], $submenu['params'] ?? []) }}">
                                            <span class="sub-side-menu__label">{{ $submenu['title'] }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</aside>
