@extends('frontend.layout.main-layout')

@section('content')

    @include('frontend.layout.header-bg-image-section-sector', ['data' => 'data'])

    @include('frontend.layout.company-listing-section', ['data' => 'data'])

@endsection
