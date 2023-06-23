<!--  section  -->
<section class="parallax-section single-par" data-scrollax-parent="true">
    <div class="bg par-elem "  data-bg="{{ asset('frontend/images/bg/localizeur-hero-slide/2.jpeg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    <div class="overlay op7"></div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>{{ $secteur->titre  }}</span></h2>
            <span class="section-separator"></span>
            <div class="breadcrumbs fl-wrap"><a href="{{route('index', app()->getLocale())}}">{{ __('menu-home') }}</a><span>{{ __('menu-secteur-activite')}}</span></div>
        </div>
    </div>
    <div class="header-sec-link">
        <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
    </div>
</section>
<!--  section  end-->
<section class="gray-bg small-padding no-top-padding-sec" id="sec1">
    <div class="container">
        <!-- list-main-wrap-header-->
        <div class="list-main-wrap-header fl-wrap   block_box no-vis-shadow no-bg-header fixed-listing-header">
            <!-- list-main-wrap-title-->
            <div class="list-main-wrap-title">
                <h2>@lang("Results For : ")<span>{{ $secteur->titre  }} </span></h2>
            </div>
            <!-- list-main-wrap-title end-->
            <!-- list-main-wrap-opt-->
            <div class="list-main-wrap-opt">

                <!-- price-opt-->
                <div class="grid-opt">
                    <ul class="no-list-style">
                        <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="fal fa-th"></i></span></li>
                        <li class="grid-opt_act"><span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="fal fa-list"></i></span></li>
                    </ul>
                </div>
                <!-- price-opt end-->
            </div>
            <!-- list-main-wrap-opt end-->
        </div>
        <!-- list-main-wrap-header end-->

    </div>
</section>
