@extends('frontend.layout.main-layout',['data' => 'data'])

@section('content')
    @include('frontend.layout.header-bg-image-section-street', ['data' => 'data'])

    @include('frontend.layout.company-listing-section', ['data' => 'data'])

@endsection
