<!--  section  -->
<section class="parallax-section single-par" data-scrollax-parent="true">
    <div class="bg par-elem "  data-bg="{{ asset('frontend/images/bg/localizeur-hero-slide/2.jpeg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    <div class="overlay op7"></div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>{{ __('all-our-companies') }}</span></h2>
            <span class="section-separator"></span>
            <div class="breadcrumbs fl-wrap"><a href="{{route('index', app()->getLocale())}}">{{ __('menu-home') }}</a><span>{{ __('company-listing') }}</span></div>
        </div>
    </div>
    <div class="header-sec-link">
        <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
    </div>
</section>
<!--  section  end-->
