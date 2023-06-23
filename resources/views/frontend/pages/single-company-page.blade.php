@extends('frontend.layout.main-layout')

@section('content')

    @include('frontend.layout.hero-carousel-image-section', ['data' => 'data'])
    @include('frontend.layout.single-company-page-scroll-nav-section')
    @include('frontend.layout.single-company-presentation-section', ['data' => 'data'])

@endsection
