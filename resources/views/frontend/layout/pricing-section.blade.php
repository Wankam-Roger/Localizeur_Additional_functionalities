<!--  section  -->
<section class="parallax-section single-par" data-scrollax-parent="true">
    <div class="bg par-elem "  data-bg="{{ asset('frontend/images/bg/38.jpg') }}" data-scrollax="properties: { translateY: '30%' }"></div>
    <div class="overlay op7"></div>
    <div class="container">
        <div class="section-title center-align big-title">
            <h2><span>{{ __('our-tarification') }}</span></h2>
            <span class="section-separator"></span>
            <div class="breadcrumbs fl-wrap"><a href="#">@lang("Home")</a><span>@lang("Pricing Tables")</span></div>
        </div>
    </div>"
    <div class="header-sec-link">
        <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
    </div>
</section>
<!--  section  end-->
<section id="sec1" data-scrollax-parent="true">
    <div class="container">
        <div class="section-title">
            <h2> {{ __('tarification') }}</h2>
            <div class="section-subtitle">{{ __('cost-of-services') }}</div>
            <span class="section-separator"></span>
            <p>{{ __('tarification-text') }}</p>
        </div>
        <div class="pricing-switcher">
            <div class="fieldset color-bg">
                <input type="radio" name="duration-1" id="monthly-1" class="tariff-toggle">
                <label for="monthly-1">{{ __('yearly-tarif') }}</label>


            </div>
        </div>
        <div class="pricing-wrap fl-wrap">
            <!-- price-item-->
            <div class="price-item">
                <div class="price-head  purp-gradient-bg">
                    <h3>Top 30</h3>
                    <div class="price-num col-dec-1 fl-wrap">
                        <div class="price-num-item"><span class="mouth-cont">1 300<span
                                    class="curen">USD</span></span><span class="year-cont">650000<span class="curen">FCFA</span></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="price-num-desc"><span class="mouth-cont">{{ __('per-year') }}</span><span
                                class="year-cont">{{ __('per-year') }}</span></div>
                    </div>
                    <div class="circle-wrap" style="right:20%;top:50px;">
                        <div class="circle_bg-bal circle_bg-bal_versmall"
                             data-scrollax="properties: { translateY: '50px' }"></div>
                    </div>
                    <div class="circle-wrap" style="right:75%;top:90px;">
                        <div class="circle_bg-bal circle_bg-bal_versmall"></div>
                    </div>
                    <div class="footer-wave">
                        <svg viewbox="0 0 100 25">
                            <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"/>
                        </svg>
                    </div>"
                    <div class="footer-wave footer-wave2">
                        <svg viewbox="0 0 100 25">
                            <path fill="#fff" d="M0 90 V12 Q30 7 45 12 T100 11 V30z"/>
                        </svg>
                    </div>
                </div>
                <div class="price-content fl-wrap">
                    <div class="price-desc fl-wrap">"
                        <ul class="no-list-style">
                            <li>@lang("Inscription :") 200 USD</li>
                            <li>@lang("Insertion dans le Business Magazine: LOCALIZER")</li>
                            <li>@lang("Audit SC/PE")</li>
                            <li>@lang("Referencement SEO")</li>
                        </ul>
                        <a href="#" class="price-link purp-bg">@lang("Choose Professional")</a>
                    </div>
                </div>
            </div>
            <!-- price-item end-->
            <!-- price-item-->
            <div class="price-item best-price">
                <div class="price-head   gradient-bg">
                    <h3>Top 10</h3>
                    <div class="price-num col-dec-2 fl-wrap">
                        <div class="price-num-item"><span class="mouth-cont">2 000<span
                                    class="curen">USD</span></span><span class="year-cont">1000000<span class="curen">FCFA</span></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="price-num-desc"><span class="mouth-cont">{{ __('per-year') }}</span><span
                                class="year-cont">{{ __('per-year') }}</span></div>
                    </div>
                    <div class="circle-wrap" style="right:20%;top:70px;">
                        <div class="circle_bg-bal circle_bg-bal_versmall"></div>
                    </div>
                    <div class="circle-wrap" style="right:70%;top:40px;">
                        <div class="circle_bg-bal circle_bg-bal_versmall"
                             data-scrollax="properties: { translateY: '-150px' }"></div>
                    </div>
                    <div class="footer-wave">
                        <svg viewbox="0 0 100 25">
                            <path fill="#fff" d="M0 60 V2 Q30 17 55 12 T100 11 V30z"/>
                        </svg>
                    </div>
                    <div class="footer-wave footer-wave2">
                        <svg viewbox="0 0 100 25">
                            <path fill="#fff" d="M0 90 V16 Q30 7 45 12 T100 5 V30z"/>
                        </svg>
                    </div>
                </div>
                <div class="price-content fl-wrap">
                    <div class="price-desc fl-wrap">
                        <ul class="no-list-style">
                            <li>@lang("Inscription :") 200 USD</li>
                            <li>@lang("Insertion dans le Business Magazine: LOCALIZER")</li>
                            <li>@lang("Audit SC/PE")</li>
                            <li>@lang("Referencement SEO , IOS")</li>
"
                        </ul>
                        <a href="#" class="price-link rec-link color-bg">@lang("Choose Extended")</a>
                        <div class="recomm-price">
                            <i class="fal fa-check"></i>
                           @lang(" Recommended")
                        </div>
                    </div>
                </div>
            </div>
            <!-- price-item end-->
            <!-- price-item-->
            <div class="price-item">
                <div class="price-head green-gradient-bg  ">
                    <h3>Top 50</h3>
                    <div class="price-num col-dec-1 fl-wrap">
                        <div class="price-num-item"><span class="mouth-cont">800<span
                                    class="curen">USD</span></span><span class="year-cont">400000<span class="curen">FCFA</span></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="price-num-desc"><span class="mouth-cont">{{ __('per-year') }}</span><span
                                class="year-cont">@lang(Per Year)</span></div>
                    </div>
                    <div class="circle-wrap" style="right:20%;top:50px;">
                        <div class="circle_bg-bal circle_bg-bal_versmall"
                             data-scrollax="properties: { translateY: '50px' }"></div>
                    </div>
                    <div class="circle-wrap" style="right:75%;top:90px;">
                        <div class="circle_bg-bal circle_bg-bal_versmall"></div>
                    </div>
                    <div class="footer-wave">
                        <svg viewbox="0 0 100 25">
                            <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"/>
                        </svg>
                    </div>
                    <div class="footer-wave footer-wave2">
                        <svg viewbox="0 0 100 25">
                            <path fill="#fff" d="M0 90 V12 Q30 7 45 12 T100 11 V30z"/>
                        </svg>
                    </div>
                </div>
                <div class="price-content fl-wrap">
                    <div class="price-desc fl-wrap">
                        <ul class="no-list-style">
                            <li>@lang(Inscription :) 200 USD</li>
                            <li>@lang(Insertion dans le Business Magazine: LOCALIZER)</li>

                        </ul>
                        <a href="#" class="price-link green-bg">@lang(Choose Professional)</a>
                    </div>
                </div>
            </div>
            <!-- price-item end-->
        </div>
        <span class="section-separator"></span>
        <!-- features-box-container -->
        <div class="features-box-container fl-wrap">
            <div class="row">
                <!--features-box -->
                <div class="col-md-4">
                    <div class="features-box">
                        <div class="time-line-icon">
                            <i class="fal fa-headset"></i>
                        </div>
                        <h3>@lang("Support")</h3>
                        <p>@lang("Support_text")</p>
                    </div>
                </div>
                <!-- features-box end  -->
                <!--features-box -->
                <div class="col-md-4">
                    <div class="features-box">
                        <div class="time-line-icon">
                            <i class="fal fa-users-cog"></i>
                        </div>
                        <h3>@lang( "Admin_Panel")</h3>
                        <p>@lang( "Admin_panel_text ")</p>
                    </div>
                </div>
                <!-- features-box end  -->
                <!--features-box -->
                <div class="col-md-4">
                    <div class="features-box ">
                        <div class="time-line-icon">
                            <i class="fal fa-mobile"></i>
                        </div>
                        <h3>@lang( "Mobile Friendly ")</h3>
                        <p>@lang( "Mobile_text ")</p>
                    </div>
                </div>
                <!-- features-box end  -->
            </div>
        </div>
        <!-- features-box-container end  -->
    </div>
</section>
