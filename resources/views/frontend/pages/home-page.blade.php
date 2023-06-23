@extends('frontend.layout.main-layout')
@section('page-title', 'Home')

@section('content')
    <!--section hero-section -->
    @include('frontend.layout.hero-section', ['some' => 'data'])
    <!--section end-->




    <!--section latest listing  -->
    @include('frontend.layout.top-ranking-section')
    <!--section end-->
    <div class="sec-circle fl-wrap"></div>

    <!--section  -->
    <section class="gradient-bg hidden-section" data-scrollax-parent="true">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="colomn-text  pad-top-column-text fl-wrap " >
                        <div class="colomn-text-title">
                            <h3>@lang("Posh Beauty, American SPA & Beauty concept in Douala")</h3>
                            <p>@lang('reel-text-des-1').</p>
                            <a href="https://youtu.be/jBvUq3A6VCA" class=" down-btn color3-bg"><i
                                    class="fab fa-youtube"></i> Youtube Chanel </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list-single-main-media fl-wrap">

                        <img src="{{ asset('frontend/images/advertisement-images/posh.jpeg')}}" class="respimg"
                             alt="">
                        <a href="https://youtu.be/jBvUq3A6VCA" class="promo-link   image-popup"><i
                                class="fal fa-video"></i><span>@lang("Click Here")</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gradient-bg-figure" style="right:-30px;top:10px;"></div>
        <div class="gradient-bg-figure" style="left:-20px;bottom:30px;"></div>
        <div class="circle-wrap" style="left:270px;top:120px;" data-scrollax="properties: { translateY: '-200px' }">
            <div class="circle_bg-bal circle_bg-bal_small"></div>
        </div>
        <div class="circle-wrap" style="right:420px;bottom:-70px;" data-scrollax="properties: { translateY: '150px' }">
            <div class="circle_bg-bal circle_bg-bal_big"></div>
        </div>
        <div class="circle-wrap" style="left:420px;top:-70px;" data-scrollax="properties: { translateY: '100px' }">
            <div class="circle_bg-bal circle_bg-bal_big"></div>
        </div>
        <div class="circle-wrap" style="left:40%;bottom:-70px;">
            <div class="circle_bg-bal circle_bg-bal_middle"></div>
        </div>
        <div class="circle-wrap" style="right:40%;top:-10px;">
            <div class="circle_bg-bal circle_bg-bal_versmall"
                 data-scrollax="properties: { translateY: '-350px' }"></div>
        </div>
        <div class="circle-wrap" style="right:55%;top:90px;">
            <div class="circle_bg-bal circle_bg-bal_versmall"
                 data-scrollax="properties: { translateY: '-350px' }"></div>
        </div>
    </section>
    <!--section end-->





    <!--section  -->
    @include('frontend.layout.video-text-section')
    <!--section end-->

    <!--section -->
    @include('frontend.layout.best-cities-section')
    <!--  section  -->

    @include('frontend.layout.advertisement.advertisement-videos-section')

    @include('frontend.layout.counting-section', ['data' => 'data'])
    <!--section end-->
    <!--section  -->
    @include('frontend.layout.enteprize-presentation-section', ['data' => 'data'] )
    <!--section end-->

    <!--section  -->
    <section class="parallax-section video-section" data-scrollax-parent="true" id="sec2">
        <div class="bg par-elem " data-bg="{{ asset('frontend/images/bg/home/1.jpg')}}"
             data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay op7"></div>
        <!--container-->
        <div class="container">
            <div class="video_section-title fl-wrap">
                <h3 style="color: whitesmoke">{{ __('reference-your-business') }}</h3>
                <h2>@lang("Etes-vous un leader ou un Suiveur ? ")<br> Entrez dans le TOP 50, TOP 20, le TOP 10</h2>
            </div>
            {{--
                        <a href="https://vimeo.com/70851162" class="promo-link big_prom   image-popup"><i class="fal fa-play"></i><span>Promo Video</span></a>
            --}}
        </div>
    </section>
    <!--section end-->

    <!--section  -->
    @include('frontend.layout.how-it-works-section')
    <!--section end-->

    {{-- <!--section  -->
    @include('frontend.layout.mobile-app-section')
    <!--section end--> --}}

    <!--section  -->
    {{--@include('frontend.layout.partners-section')--}}
    <!--section end-->


@endsection
