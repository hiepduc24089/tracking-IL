@extends('web.master')
@section('title','Fun Academy')
@section('style_page')
    <link rel="stylesheet" href="{{ asset('assets/css/web/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/web/home-contact.css') }}">
@stop

@section('content')
    <div class="home-banner">
        @include('web.home.partials.banner')
    </div>
    <div class="container">
        @include('web.home.partials.course')
    </div>
    <div class="why-choose-wrapper">
        @include('web.home.partials.why_choose')
    </div>
    <div class="target-wrapper">
        @include('web.home.partials.target')
    </div>
    <div class="parent-wrapper">
        @include('web.home.partials.parent')
    </div>
    <div class="contact-wrapper">
        @include('web.home.partials.contact')
    </div>
    <div class="blog-wrapper">
        @include('web.home.partials.blog')
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/web/home.js') }}"></script>
@endpush

@section('footer')
    @include('web.partials.footer')
@endsection
