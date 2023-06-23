@extends('frontend.layout.main-layout',['data' => 'data'])

@section('page-title', 'Companies')

@section('content')
    @include('frontend.layout.header-bg-image-section-town', ['data' => 'data'])

    @include('frontend.layout.company-listing-section', ['data' => 'data'])


    

@endsection
