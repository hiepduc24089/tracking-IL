@extends('web.master')
@section('title','Về Chúng Tôi')
@section('style_page')
    <link rel="stylesheet" href="{{ asset('assets/css/web/about-page.css') }}">
@stop

@section('content')
    <div class="about-banner-wrapper">
        @include('web.about-us.partials.banner')
    </div>
    <div class="container">
        <div class="about-why-choose">
            @include('web.about-us.partials.why-choose')
        </div>
    </div>
    <div class="philosophy-wrapper">
        <div class="container">
            @include('web.about-us.partials.philosophy')
        </div>
    </div>
    <div class="container">
        <div class="mission-wrapper">
            @include('web.about-us.partials.mission')
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/web/about-page.js') }}"></script>
@endpush

@section('footer')
    @include('web.partials.footer')
@endsection
