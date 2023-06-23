@extends('frontend.layout.main-layout')

@section('content')
    <!--  section  -->
    <section class="parallax-section single-par" data-scrollax-parent="true">
                <div class="bg par-elem " data-bg="{{ asset("frontend/images/bg/5.jpg")}}" data-scrollax="properties: { translateY: '30%' }" style="background-image: url({{ asset("frontend/images/bg/5.jpg")}}); transform: translateZ(0px) translateY(-3.04183%);"></div>
                <div class="overlay op7"></div>
                <div class="container">
                    <div class="section-title center-align big-title">
                        <h2><span>{{ __('community-main-header') }}</span></h2>
                        <span class="section-separator"></span>
                    </div>
                </div>
                <div class="header-sec-link">
                    <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
                </div>
            </section>

            <div class="clear-fix">

            </div>

    {{-- <section class="hero-section" data-scrollax-parent="true">
        <div class="bg-tabs-wrap">

            <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
                <div class="video-container">
                    <video autoplay loop muted class="bgvid">
                        <source src="{{ asset('frontend/video/1.mp4') }}" type="video/mp4">
                    </video>
                </div>
                <!--
                                Vimeo code

                                 <div  class="background-vimeo" data-vim="97871257"> </div> -->
                <!--
                                Youtube code

                                 <div  class="background-youtube-wrapper" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
                <div class="bg mob_bg" data-bg="images/bg/8.jpg"></div>
                <div class="overlay op7"></div>
            </div>
        </div>
        <div class="container small-container">
            <div class="intro-item fl-wrap">
                <span class="section-separator"></span>
                <div class="bubbles">
                    <h1>{{ __('community-main-header') }}</h1>
                </div>
                 <h2 style="color: whitesmoke">{{ __('community-main-sub-header') }}</h2>
            </div>

        </div>
        <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
        </div>
    </section> --}}





    @include('frontend.layout.top-ranking-section')

    @include('frontend.layout.community-section', ['data' => 'data'])
@endsection
