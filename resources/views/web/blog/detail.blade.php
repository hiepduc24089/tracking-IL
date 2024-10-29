@extends('web.master')
@section('title','Góc Cha Mẹ')
@section('style_page')
    <link rel="stylesheet" href="{{ asset('assets/css/web/blog-page.css') }}">
@stop

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8">
                @include('web.blog.partials.detail-post')
            </div>

            <div class="col-lg-4">
                @include('web.blog.partials.detail-side-bar')
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/web/blog-page.js') }}"></script>
@endpush

@section('footer')
    @include('web.partials.footer')
@endsection
