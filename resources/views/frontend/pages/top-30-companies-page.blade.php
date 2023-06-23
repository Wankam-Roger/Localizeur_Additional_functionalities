@extends('frontend.layout.main-layout')

@section('content')
    @include('frontend.layout.header-bg-image-section-general',['page_title'=>"TOP 30", 'page_sub_tile'=>"TOP 30"])

    @include('frontend.layout.top-30-section')

@endsection
