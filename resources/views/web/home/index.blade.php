@extends('web.master')
@section('title','Fun Academy')
@section('style_page')
    <link rel="stylesheet" href="{{ asset('assets/css/web/home.css') }}">
@stop

@section('content')
<div class="home-banner">
    <img src="{{asset('assets/images/web/test-banner.png')}}" alt="banner" />
</div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/web/home.js') }}"></script>
@endpush
