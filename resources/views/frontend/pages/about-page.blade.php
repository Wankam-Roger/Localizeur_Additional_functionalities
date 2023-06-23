@extends('frontend.layout.main-layout')
@section('page-title', 'About')

@section('content')
    <div class="page-scroll-nav">
        <nav class="scroll-init color2-bg">
            <ul class="no-list-style">
                <li><a class="act-scrlink tolt" href="#sec1" data-microtip-position="left" data-tooltip="Our story"><i class="fal fa-building"></i></a></li>
                <li><a href="#sec2" class="tolt" data-microtip-position="left" data-tooltip="Promo Video"><i class="fal fa-video"></i></a></li>
                <li><a href="#sec3" class="tolt" data-microtip-position="left" data-tooltip="Our team"><i class="far fa-users-crown"></i></a></li>
                <li><a href="#sec4" class="tolt" data-microtip-position="left" data-tooltip="Why us"><i class="fal fa-user-astronaut"></i></a></li>
                <li><a href="#sec5" class="tolt" data-microtip-position="left" data-tooltip="Testimonials"><i class="fal fa-comment-alt-smile"></i></a></li>
            </ul>
        </nav>
    </div>
    <!--  section  -->
    <section class="parallax-section single-par" data-scrollax-parent="true">
        <div class="bg par-elem "  data-bg="{{ asset('frontend/images/bg/30.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay op7"></div>
        <div class="container">
            <div class="section-title center-align big-title">
                <h2><span>{{ __('about-us-main-header') }}</span></h2>
                <span class="section-separator"></span>
                <div class="breadcrumbs fl-wrap"><a href="{{route('index', app()->getLocale())}}">@lang("Home")</a><span>@lang("About us")</span></div>
            </div>
        </div>
        <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
        </div>
    </section>
    <!--  section  end-->
    <section   id="sec1" data-scrollax-parent="true">
        <div class="container">
            <div class="section-title">
                <h2>{{ __('about-us-who-we-are') }}</h2>
                <div class="section-subtitle">@lang("who we")</div>
                <span class="section-separator"></span>
                <p style="font-size: 20px; max-width: none">{{ __('about-us-who-we-are-text') }}</p>
            </div>
            <!--about-wrap -->
            <div class="about-wrap">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-single-main-media fl-wrap" style="box-shadow: 0 9px 26px rgba(58, 87, 135, 0.2);">
                            <img src="{{ asset('frontend/images/all/55.jpg')}}" class="respimg" alt="">
                            <a href="https://vimeo.com/70851162" class="promo-link   image-popup"><i class="fal fa-video"></i><span>Our Story</span></a>
                        </div>"
                    </div>
                    <div class="col-md-6">
                        <div class="ab_text">
                            <div class="ab_text-title fl-wrap">
                                <h3> {{ __('about-us-what-we-do') }} <span></span></h3>
                                <span class="section-separator fl-sec-sep"></span>
                            </div>
                            <div class="justify-center" style="text-align: justify; font-size: 17.5px">
                                <ul>
                                    <li style="margin-bottom: 10px">{{ __("about-text-list-1") }}</li>
                                    <li style="margin-bottom: 10px">{{ __("about-text-list-2") }}</li>
                                    <li style="margin-bottom: 10px">{{ __("about-text-list-3") }}</li>
                                    <li style="margin-bottom: 10px">{{ __("about-text-list-4") }}</li>
                                    <li style="margin-bottom: 10px">{{ __("about-text-list-5") }}</li>
                                    <li style="margin-bottom: 10px">{{ __("about-text-list-6") }}</li>
                                    <li style="margin-bottom: 10px">{{ __("about-text-list-7") }}</li>
                                </ul>
                            </div>

                            <a href="#sec3" class="btn color2-bg float-btn custom-scroll-link">@lang("Our Team") <i class="fal fa-users"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-wrap end  -->
            {{--<span class="fw-separator"></span>--}}
           {{-- <div class=" single-facts bold-facts fl-wrap">
                <!-- inline-facts -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="1254">1254</div>
                            </div>
                        </div>
                        <h6>@lang("New Visitors Every Week")</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="12168">12168</div>
                            </div>
                        </div>
                        <h6>@lang("Happy customers every year")</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="2172">2172</div>
                            </div>
                        </div>
                        <h6>@lang("Won Awards")</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
                <!-- inline-facts  -->
                <div class="inline-facts-wrap">
                    <div class="inline-facts">
                        <div class="milestone-counter">
                            <div class="stats animaper">
                                <div class="num" data-content="0" data-num="732">732</div>
                            </div>
                        </div>
                        <h6>@lang("New Listing Every Week")</h6>
                    </div>
                </div>
                <!-- inline-facts end -->
            </div>--}}
        </div>
    </section>
    <!--section end-->

    <!--section  -->
    <section class="parallax-section video-section" data-scrollax-parent="true" id="sec2">
        <div class="bg par-elem "  data-bg="{{ asset('frontend/images/bg/34.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay op7"></div>
        <!--container-->
        <div class="container">
            <div class="video_section-title fl-wrap">
                <h3 style="color: whitesmoke">{{ __('reference-your-business') }}</h3>
                <h2>@lang("Etes-vous un leader ou un") ? <br> @lang("Entrez dans le") TOP 50, TOP 20, le TOP 10</h2>
            </div>
            {{--
                        <a href="https://vimeo.com/70851162" class="promo-link big_prom   image-popup"><i class="fal fa-play"></i><span>Promo Video</span></a>
            --}}
        </div>
    </section>
    <!--section end-->

    <!--section  -->
    <section class="gray-bg particles-wrapper">
        <div class="container">
            <div class="section-title">
                <h2> {{ __('working-process') }}</h2>
                <div class="section-subtitle">@lang("How we work")</div>
                <span class="section-separator"></span>
                <p>{{ __('working-process-sub-text') }}</p>
            </div>
            <div class="process-wrap_time-line fl-wrap">
                <!--process-item-->
                <div class="process-item_time-line">
                    <div class="pi_head color-bg">1</div>
                    <div class="pi-text fl-wrap">
                        <h4>{{ __('working-process-step-one') }}</h4>
                        <p>{{ __('working-process-step-one-text') }}</p>
                    </div>
                </div>
                <!--process-item end-->
                <!--process-item-->
                <div class="process-item_time-line">
                    <div class="pi_head color-bg">2</div>
                    <div class="pi-text fl-wrap">
                        <h4>{{ __('working-process-step-two') }}</h4>
                        <p>{{ __('working-process-step-two-text') }}.</p>
                    </div>
                </div>
                <!--process-item end-->
                <!--process-item-->
                <div class="process-item_time-line">
                    <div class="pi_head color-bg">3</div>
                    <div class="pi-text fl-wrap">
                        <h4>{{ __('working-process-step-three') }}</h4>
                        <p>{{ __('working-process-step-three-text') }}.</p>
                    </div>
                </div>
                <!--process-item end-->
                <div class="process-item_time-line">
                    <div class="pi_head color-bg">4</div>
                    <div class="pi-text fl-wrap">
                        <h4>{{ __('working-process-step-four') }}</h4>
                        <p>{{ __('working-process-step-four-text') }}.</p>
                    </div>
                </div>

            </div>
{{--
            <a href="#" class="btn color2-bg">@lang("View More Details")<i class="fal fa-angle-right"></i></a>
--}}
        </div>
        <div id="particles-js" class="particles-js"></div>
    </section>
    <!--section end-->

    <!--section -->
   {{-- <section id="sec3">
        <div class="container">
            <div class="section-title">
                <h2> @lang("Our Team")</h2>
                <div class="section-subtitle">@lang("the crew")</div>
                <span class="section-separator"></span>
                <p>@lang("Explore some of the best tips from around the city from our partners and friends.")</p>
            </div>
            <div class="about-wrap team-box2 fl-wrap">
                <!-- team-item -->
                <div class="team-box">
                    <div class="team-photo">
                        <img src="{{ asset('frontend/images/team/2.jpg')}}" alt="" class="respimg">
                    </div>
                    <div class="team-info fl-wrap">
                        <h3><a href="#">Alisa Gray</a></h3>
                        <h4>Business consultant</h4>
                        <p>@lang("What sets our business consultants apart is their dedication to your success.
                             They are committed to building a long-term relationship with you and will go the extra 
                             mile to ensure your business thrives.")</p>
                        <div class="team-social">
                            <ul class="no-list-style">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- team-item  end-->
                <!-- team-item -->
                <div class="team-box">
                    <div class="team-photo">
                        <img src="{{ asset('frontend/images/team/3.jpg')}}" alt="" class="respimg">
                    </div>
                    <div class="team-info fl-wrap">
                        <h3><a href="#">Austin Evon</a></h3>
                        <h4>@lang("Photographer")</h4>
                        <p>@lang("Capturing life's precious moments is both an art and a passion. As a photographer with years of experience, I have honed my craft to perfection, ready to freeze those fleeting moments in time and transform them into everlasting memories.")</p>
                        <div class="team-social">
                            <ul class="no-list-style">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- team-item end  -->
                <!-- team-item -->
                <div class="team-box">
                    <div class="team-photo">
                        <img src="{{ asset('frontend/images/team/4.jpg')}}" alt="" class="respimg">
                    </div>
                    <div class="team-info fl-wrap">
                        <h3><a href="#">Taylor Roberts</a></h3>
                        <h4>Co-manager @lang("associated")</h4>
                        <p>@lang("As a co-manager, I thrive on challenges and am constantly seeking ways to improve and adapt to a rapidly evolving business landscape. By leveraging my expertise in market research, trend analysis, and competitive intelligence, I help steer teams towards informed decision-making and successful outcomes.")</p>
                        <div class="team-social">
                            <ul class="no-list-style">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- team-item end  -->
            </div>
        </div>
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgMiddle">
                <div class="wave-bg-anim waveMiddle" style="background-image: url({{asset('frontend/images/wave-top.png')}}"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave-bg-anim waveBottom" style="background-image: url({{asset('frontend/images/wave-top.png')}}"></div>
            </div>
        </div>
    </section>--}}
    <!--section end-->
    <!--section  -->
   {{-- <section class="gray-bg">
        <div class="container">
            <div class="clients-carousel-wrap fl-wrap">
                <div class="cc-btn   cc-prev"><i class="fal fa-angle-left"></i></div>
                <div class="cc-btn cc-next"><i class="fal fa-angle-right"></i></div>
                <div class="clients-carousel">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="{{ asset('frontend/images/clients/1.png')}}" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="{{ asset('frontend/images/clients/2.png')}}" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="{{ asset('frontend/images/clients/3.png')}}" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="{{ asset('frontend/images/clients/1.png')}}" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="{{ asset('frontend/images/clients/2.png')}}" alt=""></a>
                            </div>
                            <!--client-item end-->
                            <!--client-item-->
                            <div class="swiper-slide">
                                <a href="#" class="client-item"><img src="{{ asset('frontend/images/clients/3.png')}}" alt=""></a>
                            </div>
                            <!--client-item end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!--section end-->
    <!--section  -->
   <section class="parallax-section" data-scrollax-parent="true" id="sec4">
        <div class="bg par-elem "  data-bg="{{ asset('frontend/images/bg/33.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay op7"></div>
        <!--container-->
        <div class="container">
            <div class="section-title center-align big-title">
                <h2><span>{{ __('about-us-why-choose-us') }}</span></h2>
                <span class="section-separator"></span>
                <h4>@lang("certainly")</h4>
            </div>
        </div>
    </section>
    <!--section end-->
    <!--section  -->
    <section class="gray-bg absolute-wrap_section">
        <div class="container">
            <div class="absolute-wrap fl-wrap">
                <!-- features-box-container -->
                <div class="features-box-container fl-wrap">
                    <div class="row">
                        <!--features-box -->
                        <div class="col-md-4">
                            <div class="features-box">
                                <div class="time-line-icon">
                                    <i class="fal fa-headset"></i>
                                </div>
                                <h3>@lang("support")</h3>

                                <p>@lang("support_text")</p>
                            </div>
                        </div>
                        <!-- features-box end  -->
                        <!--features-box -->
                        <div class="col-md-4">
                            <div class="features-box gray-bg">
                                <div class="time-line-icon">
                                    <i class="fal fa-users-cog"></i>
                                </div>
                                <h3>@lang('Admin_panel')</h3>

                                <p>@lang('Admin_panel_text')</p>
                            </div>
                        </div>
                        <!-- features-box end  -->
                        <!--features-box -->
                        <div class="col-md-4">
                            <div class="features-box ">
                                <div class="time-line-icon">
                                    <i class="fal fa-mobile"></i>
                                </div>
                                <h3> @lang('user_friendly') </h3>

                                <p> @lang('user_friendly_text') </p>
                            </div>
                        </div>
                        <!-- features-box end  -->
                    </div>
                </div>
                <!-- features-box-container end  -->
            </div>
            <div class="section-separator"></div>
        </div>
    </section>
    <!--section end-->
    <!--section  -->
    {{--<section id="sec5">
        <div class="container">
            <div class="section-title">
                <h2>@lang(" Testimonilas" )</h2>
                <div class="section-subtitle">@lang("Clients Reviews")</div>
                <span class="section-separator"></span>
                <p>@lang("Explore some of the best tips from around the city from our partners and friends.")</p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="testimonilas-carousel-wrap fl-wrap">
            <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
            <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
            <div class="testimonilas-carousel">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="{{ asset('frontend/images/avatar/4.jpg')}}" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>@lang("We couldn't be happier with the services provided by Localizeur. Their attention to detail, creative solutions, and exceptional customer service have exceeded our expectations. They took the time to understand our unique needs and delivered a customized strategy that helped us expand our reach and boost our brand visibility. The team's expertise and professionalism have been invaluable to our success." - Sarah Thompson, Marketing Director of Elegant Company.)</p>
                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Centa Simpson</h3>
                                        <h4>@lang("Restaurant Owner")</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="{{ asset('frontend/images/avatar/4.jpg')}}" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>@lang("I can't thank Localizeur enough for their outstanding work. Their team went above and beyond to ensure our project's success. From the initial consultation to the final implementation, their expertise and dedication were evident at every step. Their innovative approach and attention to detail brought our vision to life, resulting in a remarkable outcome. We highly recommend Localizeur for their exceptional service and remarkable results." - David Johnson, Founder of McAir-point Startup.")</p>
                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Centa Simpson</h3>
                                        <h4>Restaurant Owner</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="{{ asset('frontend/images/avatar/4.jpg')}}" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>@lang("testimonial2")</p>
                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Centa Simpson</h3>
                                        <h4>@lang("Restaurant Owner")</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="{{ asset('frontend/images/avatar/4.jpg')}}" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>@lang("testimonial1")</p>
                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Centa Simpson</h3>
                                        <h4>Restaurant Owner</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                        <!--testi-item-->
                        <div class="swiper-slide">
                            <div class="testi-item fl-wrap">
                                <div class="testi-avatar"><img src="{{ asset('frontend/images/avatar/4.jpg')}}" alt=""></div>
                                <div class="testimonilas-text fl-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <p>@lang("testimonial")</p>
                                    <a href="#" class="testi-link" target="_blank">Via Facebook</a>
                                    <div class="testimonilas-avatar fl-wrap">
                                        <h3>Centa Simpson</h3>   
                                        <h4>Restaurant Owner</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--testi-item end-->
                    </div>
                </div>
            </div>
            <div class="tc-pagination"></div>
        </div>
    </section>--}}
    <!--section end-->
@endsection
