<section class="slw-sec" id="sec1">
    <div class="section-title">
        <h2>{{ __('top-ranking-localizer') }}</h2>
        <div class="section-subtitle">{{ __('top-ranking-localizer') }}</div>
        <span class="section-separator"></span>
        <p style="font-size: 17.5px"> {{ __('leader-or-follower') }}</p>
    </div>
    <div class="listing-slider-wrap fl-wrap">
        <div class="listing-slider fl-wrap">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!--  swiper-slide  -->
                    <div class="swiper-slide">
                        <div class="listing-slider-item fl-wrap">
                            <!-- listing-item  -->
                            <div class="listing-item listing_carditem">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">

                                        <a href="{{ route('pricing_page',[app()->getLocale()]) }}" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('frontend/images/all/64.jpeg')}}" alt="">
                                        </a>
                                        <div class="geodir_status_date gsd_open"><i>Top 10</i>
                                        </div>
                                        <div class="geodir-category-opt">
                                            <div class="geodir-category-opt_title">
                                                <h4><a href="{{ route('pricing_page',[app()->getLocale()]) }}">{{ __('entreprises-leaders') }} :  Top 10</a></h4>
                                                <div class="geodir-category-location"><a href="#"> </a></div>
                                            </div>


                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                    </div>
                    <!--  swiper-slide end  -->
                    <!--  swiper-slide  -->
                    <div class="swiper-slide">
                        <div class="listing-slider-item fl-wrap">
                            <!-- listing-item  -->
                            <div class="listing-item listing_carditem">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <a href="{{ route('pricing_page',[app()->getLocale()]) }}" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('frontend/images/all/63.jpeg')}}" alt="">
                                        </a>
                                        <div class="geodir_status_date gsd_close"><i >Top 50</i></div>
                                        <div class="geodir-category-opt">
                                            <div class="geodir-category-opt_title">
                                                <h4><a href="{{ route('pricing_page',[app()->getLocale()]) }}">{{ __('best-50') }}</a></h4>
                                                <div class="geodir-category-location"><a href="#">  </a></div>
                                            </div>

                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                    </div>
                    <!--  swiper-slide end  -->
                    <!--  swiper-slide  -->
                    <div class="swiper-slide">
                        <div class="listing-slider-item fl-wrap">
                            <!-- listing-item  -->
                            <div class="listing-item listing_carditem">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <a href="{{ route('top_30_companies_page',[app()->getLocale()]) }}" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{ asset('frontend/images/all/65.jpeg')}}" alt="">
                                        </a>
                                        <div class="geodir_status_date gsd_close"><i>Top 30</i></div>
                                        <div class="geodir-category-opt">
                                            <div class="geodir-category-opt_title">
                                                <h4><a href="{{ route('top_30_companies_page',[app()->getLocale()]) }}">{{ __('best-30') }}</a></h4>
                                                <div class="geodir-category-location"><a href="#"> </a></div>
                                            </div>

                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                    </div>
                    <!--  swiper-slide end  -->


                    <section>

                    </section>


                </div>
            </div>
            <div class="listing-carousel-button listing-carousel-button-next2"><i class="fas fa-caret-right"></i></div>
            <div class="listing-carousel-button listing-carousel-button-prev2"><i class="fas fa-caret-left"></i></div>
        </div>
        <div class="tc-pagination_wrap">
            <div class="tc-pagination2"></div>
        </div>
    </div>
</section>
