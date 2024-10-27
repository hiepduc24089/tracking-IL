@extends('web.master')
@section('title','Liên Hệ')
@section('style_page')
    <link rel="stylesheet" href="{{ asset('assets/css/web/contact-page.css') }}">
@stop

@section('content')
    <div class="container">
        <div class="page-contact-wrapper">
            <div class="contact-question box-wrapper">
                @include('web.contact.partials.question')
            </div>
            <div class="contact-guide box-wrapper">
                @include('web.contact.partials.guide')
            </div>
            <div class="contact-additional box-wrapper">
                @include('web.contact.partials.additional')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/web/contact-page.js') }}"></script>
@endpush

@section('footer')
    @include('web.partials.footer')
@endsection
