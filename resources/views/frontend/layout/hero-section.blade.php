<section class="hero-section"   data-scrollax-parent="true">
    <div class="bg-tabs-wrap">
        <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">

            <!--ms-container-->
             <div class="slideshow-container" data-scrollax="properties: { translateY: '300px' }" >
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!--ms_item-->
                        <div class="swiper-slide">
                            <div class="ms-item_fs fl-wrap full-height">
                                <div class="bg" data-bg="{{ asset('frontend/images/bg/localizeur-hero-slide/1.jpeg') }}"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <!--ms_item end-->
                        <!--ms_item-->
                        <div class="swiper-slide ">
                            <div class="ms-item_fs fl-wrap full-height">
                                <div class="bg" data-bg="{{ asset('frontend/images/bg/localizeur-hero-slide/2.jpeg') }}"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <!--ms_item end-->
                        <!--ms_item-->
                        <div class="swiper-slide">
                            <div class="ms-item_fs fl-wrap full-height">
                                <div class="bg" data-bg="{{ asset('frontend/images/bg/localizeur-hero-slide/3.jpeg') }}"></div>
                                <div class="overlay op7"></div>
                            </div>
                        </div>
                        <!--ms_item end-->
                    </div>
                </div>
            </div>
            <!--ms-container end-->
         </div>
        {{-- <div class="bg-parallax-wrap" data-scrollax="properties: { translateY: '200px' }">
            <div class="video-container">
                <video autoplay  loop muted  class="bgvid">
                    <source src="{{ asset('frontend/video/1.mp4')}}" type="video/mp4">
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
        </div> --}}
    </div>
    <div class="container small-container">
        <div class="intro-item fl-wrap">
            <span class="section-separator"></span>
            <div class="bubbles">
                <h1>{{ __('hero-main-header') }}</h1>
            </div>
            <h2 style="color: whitesmoke">{{ __('hero-main-sub-header') }}</h2>
        </div>
        <!-- main-search-input-tabs-->
        <div class="main-search-input-tabs  tabs-act fl-wrap">
            <ul class="tabs-menu  no-list-style">
                <li class="current"><a href="#tab-inpt1"> {{ __('menu-secteur-activite') }}</a></li>
                <li><a href="#tab-inpt2"> {{ __('entreprise') }}</a></li>
                <li><a href="#tab-inpt3"> {{ __('country') }}</a></li>
                <li><a href="#tab-inpt4"> {{ __('localisation_street') }}</a></li>

            </ul>
            <!--tabs -->
            <div class="tabs-container fl-wrap  ">
                <!--tab -->
                <div class="tab">
                    <div id="tab-inpt1" class="tab-content first-tab">
                        <div class="main-search-input-wrap fl-wrap">
                            <div class="main-search-input fl-wrap">

                                {{--<form action="">--}}

                                <div class="main-search-input-item" style="width: 100%">
                                    <select data-placeholder="All Categories" class="chosen-select" id="secteur-select">

                                        @foreach($secteurs as $secteur)
                                            <option value="{{$secteur->id}}">{{$secteur->titre}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <button class="main-search-button color2-bg"
                                        onclick="window.location.href='{{app()->getLocale()}}'+'/sector/'+document.getElementById('secteur-select').value">
                                    Search <i class="far fa-search"></i></button>
                                {{-- </form>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab end-->
                <!--tab -->
                <div class="tab">
                    <div id="tab-inpt2" class="tab-content">
                        <div class="main-search-input-wrap fl-wrap">
                            <div class="main-search-input fl-wrap">
                                {{--<form action="">--}}

                                <div class="main-search-input-item" style="width: 100%">
                                    <select data-placeholder="All Categories" class="chosen-select"
                                            id="entreprise-select">

                                        @foreach($entreprises as $entreprise)
                                            <option value="{{$entreprise->id}}">{{$entreprise->raison_social}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <button class="main-search-button color2-bg"
                                        onclick="window.location.href='{{app()->getLocale()}}'+'/company/'+document.getElementById('entreprise-select').value">
                                    Search <i class="far fa-search"></i></button>
                                {{-- </form>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab end-->
                <!--tab -->
                <div class="tab">
                    <div id="tab-inpt3" class="tab-content">
                        <div class="main-search-input-wrap fl-wrap">
                            <div class="main-search-input fl-wrap">

                                {{--<form action="">--}}

                                <div class="main-search-input-item" style="width: 100%">
                                    <select data-placeholder="All Categories" class="chosen-select" id="country-select">

                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->titre}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <button class="main-search-button color2-bg"
                                        onclick="window.location.href='{{app()->getLocale()}}'+'/country/'+document.getElementById('country-select').value">
                                  Search<i class="far fa-search"></i></button>
                                {{-- </form>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab end-->
                <!--tab -->
                <div class="tab">
                    <div id="tab-inpt4" class="tab-content">
                        <div class="main-search-input-wrap fl-wrap">
                            <div class="main-search-input fl-wrap">

                                {{--<form action="">--}}

                                <div class="main-search-input-item" style="width: 100%">
                                    <select data-placeholder="" class="chosen-select" id="street-select">

                                        @foreach($streets as $street)
                                            <option value="{{$street->id}}">{{$street->titre}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <button class="main-search-button color2-bg"
                                        onclick="window.location.href='{{app()->getLocale()}}'+'/street/'+document.getElementById('street-select').value">
                                        Search <i class="far fa-search"></i></button>
                                {{-- </form>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab end-->


            </div>
            <!--tabs end-->
        </div>
        <!-- main-search-input-tabs end-->
        <div class="hero-categories fl-wrap">
            <h4 class="hero-categories_title">{{ __('just-looking-around') }}</h4>
            <ul class="no-list-style">
                <li><a href="{{route('sector-company', [app()->getLocale(), 2 ])}}"><i class="far fa-cheeseburger"></i><span>{{ __('restaurant') }}</span></a></li>
                <li><a href="{{route('sector-company', [app()->getLocale(), 2 ])}}"><i class="far fa-bed"></i><span>{{ __('hotel') }}</span></a></li>
                <li><a href="{{route('sector-company', [app()->getLocale(), 2 ])}}"><i class="far fa-shopping-bag"></i><span>{{ __('shop') }}</span></a></li>
                <li><a href="listing.html"><i class="far fa-dumbbell"></i><span>{{ __('fitness') }}</span></a></li>
                <li><a href="listing.html"><i class="far fa-cocktail"></i><span>{{ __('event') }}</span></a></li>
            </ul>
        </div>
    </div>
    <div class="header-sec-link">
        <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
    </div>
</section>
