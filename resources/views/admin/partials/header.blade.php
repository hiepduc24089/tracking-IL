<!-- APP-HEADER -->
<style>
    #logo-mobile{
        display: none;
    }
    @media (max-width: 992px) {
        #logo-mobile{
            display: block;
        }
        #date-time-show {
            display: none;
        }
    }
</style>
<div class="app-header header sticky">
    <div class="container-fluid main-container">
        <div class="d-flex justify-content-between align-items-center">
            <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                <a class="open-toggle"  href="javascript:void(0);">
                    <i class="feather feather-menu"></i>
                </a>
                <a class="close-toggle"  href="javascript:void(0);">
                    <i class="feather feather-x"></i>
                </a>
            </div>
            <div id="logo-mobile">
                <a href="{{route('admin.index')}}">
                    <img src="/assets/images/admin/logo.png" alt="Logo" height="50px"/>
                </a>
            </div>
            <div class="mt-0" id="date-time-show">
                @php
                    use Carbon\Carbon;
                @endphp
                <div class="page-rightheader ms-md-auto">
                    <div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
                        <div class="d-flex">
                            <div class="header-datepicker me-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text header_icon">
                                            <i class="feather feather-calendar"></i>
                                        </div>
                                    </div><input class="form-control fc-datepicker" value="{{ Carbon::now('UTC')->addHours(7)->format('d M Y') }}" type="text" disabled>
                                </div>
                            </div>
                            <div class="header-datepicker me-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text header_icon">
                                            <i class="feather feather-clock"></i>
                                        </div>
                                    </div><!-- input-group-prepend -->
                                    <input id="tpBasic" type="text" value="{{ Carbon::now('UTC')->addHours(7)->format('h:ia') }}" class="form-control input-small" disabled>
                                </div>
                            </div><!-- wd-150 -->
                        </div>
                    </div>
                </div>
            </div><!-- SEARCH -->
            <div class="d-flex order-lg-2 my-auto">
                <button class="navbar-toggler nav-link icon navresponsive-toggler vertical-icon ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                </button>
                <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex ms-auto">
                            <div class="dropdown header-fullscreen">
                                <a class="nav-link icon full-screen-link">
                                    <i class="feather feather-maximize fullscreen-button fullscreen header-icons"></i>
                                    <i class="feather feather-minimize fullscreen-button exit-fullscreen header-icons"></i>
                                </a>
                            </div>
{{--                            @if(isset($user))--}}
{{--                                <div class="dropdown profile-dropdown">--}}
{{--                                    <a  href="{{route('admin.profile.show', [$user->id])}}" class="nav-link pe-1 ps-0 leading-none" data-bs-toggle="dropdown">--}}
{{--                                    <span>--}}
{{--                                        <img src="{{ $user->photo ? Storage::url($user->photo) : asset('images/default-user.png') }}" alt="img" class="avatar avatar-md bradius">--}}
{{--                                    </span>--}}
{{--                                    </a>--}}
{{--                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">--}}
{{--                                        <div class="p-3 text-center border-bottom">--}}
{{--                                            <a href="{{route('admin.profile.show', [$user->id])}}" class="text-center user pb-0 font-weight-bold">{{$user->full_name ?? ''}}</a>--}}
{{--                                            <p class="text-center user-semi-title">{{$user->position ?? ''}}</p>--}}
{{--                                        </div>--}}
{{--                                        <a class="dropdown-item d-flex" href="{{route('admin.profile.show', [$user->id])}}">--}}
{{--                                            <i class="feather feather-user me-3 fs-16 my-auto"></i>--}}
{{--                                            <div class="mt-1">Profile</div>--}}
{{--                                        </a>--}}
{{--                                        <a class="dropdown-item d-flex" href="{{route('admin.fb_access_token.index')}}">--}}
{{--                                            <i class="feather feather-user me-3 fs-16 my-auto"></i>--}}
{{--                                            <div class="mt-1">FB Access Token</div>--}}
{{--                                        </a>--}}
{{--                                        @foreach($kpis as $kpi)--}}
{{--                                            <a class="dropdown-item d-flex" href="{{route('admin.kpi.show', [$kpi->id])}}">--}}
{{--                                                <i class="feather feather-briefcase me-3 fs-16 my-auto"></i>--}}
{{--                                                <div class="mt-1">Your KPI</div>--}}
{{--                                            </a>--}}
{{--                                        @endforeach--}}
{{--                                        <a class="dropdown-item d-flex"  href="{{route('password.change')}}">--}}
{{--                                            <i class="feather feather-edit-2 me-3 fs-16 my-auto"></i>--}}
{{--                                            <div class="mt-1">Change Password</div>--}}
{{--                                        </a>--}}
{{--                                        <form action="{{ route('logout') }}" method="POST" id="logout-form" class="dropdown-item d-flex">--}}
{{--                                            @csrf--}}
{{--                                            <button type="submit" class="dropdown-item d-flex" style="background: none; border: none; padding: 0; margin: 0; display: block; width: 100%; text-align: left;">--}}
{{--                                                <i class="feather feather-power me-3 fs-16 my-auto"></i>--}}
{{--                                                <div class="mt-1">Sign Out</div>--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endif--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- APP-HEADER CLOSED -->
