@extends('frontend.layout.main-layout')

@section('content')
    @include('frontend.layout.header-bg-image-section')

    @include('frontend.layout.company-listing-section', ['data' => 'data'])


@endsection
