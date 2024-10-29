@extends('web.master')
@section('title','Thông Tin Cá Nhân')
@section('style_page')
    <link rel="stylesheet" href="{{ asset('assets/css/web/profile-page.css') }}">
@stop

@section('content')
    <div class="profile-wrapper">
        <div class="profile-popup">
            <div class="position-close">
                <div class="close-wrapper">
                    <div class="profile-close">
                        <img src="{{asset('assets/images/web/sample-image.png')}}" class="avatar-close" alt="Avatar" />
                    </div>
                </div>
            </div>
            <div class="profile-open">
                <img src="{{asset('assets/images/web/2-arrow-left.png')}}" alt="close-icon" class="close-icon" />
                <img src="{{asset('assets/images/web/sample-image.png')}}" class="avatar-open" alt="Avatar" />
                <h5 class="text-color-secondary text-size-large mt-2 text-center">Truong Nguyen Hiep Duc</h5>
                <ul class="list-tab-title">
                    <li id="account-tab">
                        <div class="account-item">
                            <img src="{{asset('assets/images/web/account-icon.png')}}" alt="account icon" class="account-icon"/>
                            <span class="text-color-secondary text-size-normal text-hover-white-color">Tài khoản</span>
                        </div>
                    </li>
                    <li id="history-tab">
                        <div class="account-item">
                            <img src="{{asset('assets/images/web/account-icon.png')}}" alt="account icon" class="account-icon"/>
                            <span class="text-color-secondary text-size-normal text-hover-white-color">Lịch sử khoá học</span>
                        </div>
                    </li>
                    <li id="settings-tab">
                        <div class="account-item">
                            <img src="{{asset('assets/images/web/account-icon.png')}}" alt="account icon" class="account-icon"/>
                            <span class="text-color-secondary text-size-normal text-hover-white-color">Cài đặt tài khoản</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="profile-tab-wrapper">
            <div id="account-info">
                @include('web.profile.partials.information')
            </div>
            <div id="history-info" style="display:none">
                @include('web.profile.partials.history')
            </div>
            <div id="settings-info" style="display:none;">
                @include('web.profile.partials.setting')
            </div>
            <div id="activity-page" style="display:none;">
                @include('web.profile.partials.activity')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/web/profile-page.js') }}"></script>

    <script>
        var showPasswordImg = "{{asset('assets/images/web/hide-password.png')}}";
    </script>
@endpush

@section('footer')
@endsection
