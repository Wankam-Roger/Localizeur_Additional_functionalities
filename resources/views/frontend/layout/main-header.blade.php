<header class="main-header">
    <!-- logo-->
    <a href="{{ route('index',[app()->getLocale()]) }}" class="logo-holder"><img src="{{ asset('frontend/images/logo4.png')}}" alt=""></a>
    <!-- logo end-->
    <!-- header-search_btn-->
    <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>{{ __('search') }}</span></div>
    <!-- header-search_btn end-->
    <!-- header opt -->
    {{--
        <a href="dashboard-add-listing.html" class="add-list color-bg">@lang("Add Listing")<span><i class="fal fa-layer-plus"></i></span></a>
    --}}"
    {{--
        <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip" aria-label="Your Wishlist"><i class="fal fa-heart"></i><span class="cart-counter green-bg"></span> </div>
    --}}
    <div class="show-reg-form modal-open avatar-img" data-srcav="{{ asset('frontend/images/avatar/3.jpg')}}"><i
            class="fal fa-user"></i>{{ __('sign-in') }}</div>
    <!-- header opt end-->
    <!-- lang-wrap-->
    <div class="lang-wrap">

        @if(app()->getLocale() == 'en')
            <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>En</strong></span><i
                    class="fa fa-caret-down arrlan"></i></div>
            <ul class="lang-tooltip  no-list-style">
                <li><a href="{{ route(Route::currentRouteName(), ['en',Route::current()->Parameter('companyID','sectorId','streetId', 'townId')]) }}" class="current-lan"
                       data-lantext="En">{{ __('english') }}</a></li>
                <li><a href="{{ route(Route::currentRouteName(), ['fr',Route::current()->Parameter('companyID','sectorId','streetId', 'townId')]) }}" data-lantext="Fr">{{ __('french') }}</a></li>
            </ul>
        @endif
        @if(app()->getLocale() == 'fr')
            <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>Fr</strong></span><i
                    class="fa fa-caret-down arrlan"></i></div>
            <ul class="lang-tooltip  no-list-style">
                <li><a href="{{ route(Route::currentRouteName(),  ['fr',Route::current()->Parameter('companyID','sectorId','streetId', 'townId')]) }}" class="current-lan" data-lantext="Fr">{{ __('french') }}</a>
                </li>

                <li><a href="{{ route(Route::currentRouteName(), ['en',Route::current()->Parameter('companyID','sectorId','streetId', 'townId')]) }}" data-lantext="En">{{ __('english') }}</a></li>
            </ul>
        @endif

    </div>
    <!-- lang-wrap end-->
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap color-bg">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->

    <!--  navigation -->

@include('frontend.layout.main-header-nav',['data' => 'data'])

<!-- navigation  end -->

    <!-- header-search_container -->
    <div class="header-search_container header-search vis-search">
        <div class="container small-container">
            <div class="header-search-input-wrap fl-wrap">
                <!-- header-search-input -->
                <div class="header-search-input">
                    <label><i class="fal fa-keyboard"></i></label>
                    <input type="text" placeholder="What are you looking for ?" value=""/>
                </div>
                <!-- header-search-input end -->
                <!-- header-search-input -->
                <div class="header-search-input location autocomplete-container">
                    <label><i class="fal fa-map-marker"></i></label>
                    <input type="text" placeholder="Location..." class="autocomplete-input" id="autocompleteid2"
                           value=""/>
                    <a href="#"><i class="fal fa-dot-circle"></i></a>
                </div>
                <!-- header-search-input end -->
                <!-- header-search-input -->"
                <div class="header-search-input header-search_selectinpt ">
                    <select data-placeholder="Category" class="chosen-select no-radius">
                        <option>@lang("All Categories")</option>
                        <option>@lang("All Categories")</option>
                        <option>@lang("Shops")</option>
                        <option>@lang("Hotels")</option>
                        <option>@lang("Restaurants")</option>
                        <option>@lang("Fitness")</option>
                        <option>@lang("Events")</option>
                    </select>
                </div>
                <!-- header-search-input end -->
                <button class="header-search-button green-bg" onclick="window.location.href='listing.html'"><i
                        class="far fa-search"></i> Search
                </button>
            </div>
            <div class="header-search_close color-bg"><i class="fal fa-long-arrow-up"></i></div>
        </div>
    </div>
    <!-- header-search_container  end -->
    <!-- wishlist-wrap-->
    <div class="header-modal novis_wishlist">
        <!-- header-modal-container-->
        <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
            <!--widget-posts-->
            <div class="widget-posts  fl-wrap">
                <ul class="no-list-style">
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img
                                    src="{{ asset('frontend/images/gallery/thumbnail/1.png')}}" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">Iconic Cafe</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i
                                        class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html">Restaurants </a> <a
                                    href="listing.html">Cafe</a></div>
                            <div class="widget-posts-descr-score">4.1</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img
                                    src="{{ asset('frontend/images/gallery/thumbnail/2.png')}}" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i
                                        class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html">Hotels </a></div>
                            <div class="widget-posts-descr-score">5.0</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img
                                    src="{{ asset('frontend/images/gallery/thumbnail/3.png')}}" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">Rocko Band in Marquee Club</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i
                                        class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html">Events</a></div>
                            <div class="widget-posts-descr-score">4.2</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                    <li>
                        <div class="widget-posts-img"><a href="listing-single.html"><img
                                    src="{{ asset('frontend/images/gallery/thumbnail/4.png')}}" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                            <h4><a href="listing-single.html">Premium Fitness Gym</a></h4>
                            <div class="geodir-category-location fl-wrap"><a href="#"><i
                                        class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                            <div class="widget-posts-descr-link"><a href="listing.html">Fitness</a> <a
                                    href="listing.html">Gym</a></div>
                            <div class="widget-posts-descr-score">5.0</div>
                            <div class="clear-wishlist"><i class="fal fa-times-circle"></i></div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- widget-posts end-->
        </div>
        <!-- header-modal-container end-->
        <div class="header-modal-top fl-wrap">
            <h4>@lang("Your Wishlist : ")<span><strong></strong> Locations</span></h4>
            <div class="close-header-modal"><i class="far fa-times"></i></div>
        </div>
    </div>
    <!--wishlist-wrap end -->
</header>
