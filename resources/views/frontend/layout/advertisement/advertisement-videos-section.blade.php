<!--  section  -->
<section style="padding: 50px" data-scrollax-parent="true">
    <div class="container">
        <div class="section-title">
            <h2> @lang('advertising-space')</h2>
            <div class="section-subtitle">@lang('our-reels') </div>
            <span class="section-separator"></span>
            <p> @lang('our-companies-present-their-services-through-short-videos').</p>
        </div>
        <!--about-wrap -->
        <div class="about-wrap">
            <div class="row">
                <div class="col-md-6">
                    <div class="list-single-main-media fl-wrap">
                        <div class="single-slider-wrap">
                            <div class="single-slider fl-wrap">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper lightgallery">

                                        <div class="swiper-slide hov_zoom">
                                            <img
                                                src="{{ asset('frontend/images/advertisement-images/belavita.webp')}}"
                                                class="respimg"
                                                alt="">
                                            <a href="https://youtu.be/c25dl8gnWfc" class="promo-link   image-popup"><i
                                                    class="fal fa-video"></i><span>@lang("New Adds")</span></a>
                                        </div>

                                        <div class="swiper-slide hov_zoom">
                                            <img
                                                src="{{ asset('frontend/images/advertisement-images/winsdom.jpeg')}}"
                                                class="respimg"
                                                alt="">
                                            <a href="https://youtu.be/BbO1CteKqnw" class="promo-link   image-popup"><i
                                                    class="fal fa-video"></i><span>@lang("Winsdom")</span></a>
                                        </div>

                                        @foreach($advideos as $advideo)
                                            <div class="swiper-slide hov_zoom">
                                                <img
                                                    src='{{ asset($advideo->image_path ?  : "/frontend/images/advertisement-images/default.jpeg")}}'
                                                    class="respimg"
                                                    alt="">
                                                <a href="https://youtu.be/{{ substr($advideo->youtube_link, -11) }}"
                                                   class="promo-link   image-popup"><i
                                                        class="fal fa-video"></i><span>{{ $advideo->enterprise ? $advideo->enterprise->raison_social : '' }}</span></a>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="listing-carousel_pagination">
                                <div class="listing-carousel_pagination-wrap">
                                    <div class="ss-slider-pagination"></div>
                                </div>
                            </div>
                            <div class="ss-slider-cont ss-slider-cont-prev color2-bg"><i
                                    class="fal fa-long-arrow-left"></i></div>
                            <div class="ss-slider-cont ss-slider-cont-next color2-bg"><i
                                    class="fal fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ab_text">
                        <div class="ab_text-title fl-wrap">
                            <h3>@lang('discover-the-services-and-products-of-the-companies-around-you')</h3>
                            <h4>@lang('a-picture-is-worth-a-thousand-words')</h4>
                            <span class="section-separator fl-sec-sep"></span>
                        </div>
                        <p class="text-justify" style="font-size: 14px"> @lang('reel-text-des-1') </p>
                        <p class="text-justify" style="font-size: 14px">
                            @lang('reel-text-des-2')
                        </p>
                        <a href="{{route('about', app()->getLocale())}}"
                           class="btn color2-bg float-btn custom-scroll-link">@lang('contact-us')<i
                                class="fal fa-users"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--section end-->
