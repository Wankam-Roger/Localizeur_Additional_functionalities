<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from townhub.kwst.net/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jan 2022 11:41:23 GMT -->
<head>
@include('frontend.layout.meta')
@include('frontend.layout.css')
<!--=============== favicons ===============-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/localizeur.png')}}">
</head>
<body>
@include('frontend.layout.loader')

<!-- main start  -->
<div id="main">

    <!-- header -->
@include('frontend.layout.main-header',['data' => 'data'])
<!-- header end-->

    <!-- wrapper-->
    <div id="wrapper">
        <!-- content-->
        <div class="content">


            @yield('content')



        </div>
        <!--content end-->
    </div>
    <!-- wrapper end-->
    <!--footer -->
@include('frontend.layout.footer')
<!--footer end -->
    <!--map-modal -->
    <div class="map-modal-wrap">
        <div class="map-modal-wrap-overlay"></div>
        <div class="map-modal-item">
            <div class="map-modal-container fl-wrap">
                <div class="map-modal fl-wrap">
                    <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                </div>
                <h3><span>Location for : </span><a href="#">Listing Title)</a></h3>
                <div class="map-modal-close"><i class="fal fa-times"></i></div>
            </div>
        </div>
    </div>
    <!--map-modal end -->

    <!--register form -->
    <div class="main-register-wrap modal">
        <div class="reg-overlay"></div>
        <div class="main-register-holder tabs-act">
            <div class="main-register fl-wrap  modal_main">
                <div class="main-register_title">{{__('welcome-to' )}} <span><strong>Loca</strong>Lizeur<strong>.</strong></span></div>
                <div class="close-reg"><i class="fal fa-times"></i></div>
                <ul class="tabs-menu fl-wrap no-list-style">
                    <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> {{ __('login')}}</a></li>
                    <li><a href="#tab-2"><i class="fal fa-user-plus"></i> {{ __('register')}}</a></li>
                </ul>
                <!--tabs -->
                <div class="tabs-container">
                    <div class="tab">
                        <!--tab -->
                        <div id="tab-1" class="tab-content first-tab">
                            <div class="custom-form">
                                <form method="POST" action="{{ route('register') }}">
                                    <label>@lang("Email Address" )<span>*</span> </label>
                                    <input name="email" type="text"   onClick="this.select()" value="">
                                    <label>@lang("Password" )<span>*</span> </label>
                                    <input name="password" type="password"   onClick="this.select()" value="" >
                                    <button type="submit"  class="btn float-btn color2-bg"> @lang("Log In ")<i class="fas fa-caret-right"></i></button>
                                    <div class="clearfix"></div>
                                    <div class="filter-tags">
                                        <input id="check-a3" type="checkbox" name="check">
                                        <label for="check-a3">@lang("Remember me")</label>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <!--tab end -->
                        <!--tab -->
                        <div class="tab">
                            <div id="tab-2" class="tab-content">
                                <div class="custom-form">
                                    <form method="POST" action="{{ route('register_user') }}"   name="registerform" class="main-register-form" id="main-register-form2">
                                        @csrf
                                        <label >@lang("Full Name") <span>*</span> </label>
                                        <input name="name" type="text"   onClick="this.select()" value="">
                                        <label>@lang("Email Address") <span>*</span></label>
                                        <input name="email" type="text"  onClick="this.select()" value="">
                                        <label >@lang("Password") <span>*</span></label>
                                        <input name="password" type="password"   onClick="this.select()" value="" >
                                        <label > @lang("Confirm Password ")<span>*</span></label>
                                        <input name="password_confirmation" type="password"   onClick="this.select()" value="" >
                                        <div class="filter-tags ft-list">
                                            <input id="check-a2" type="checkbox" name="check" required>
                                            <label for="check-a2">@lang("I agree to the" )<a href="#">@lang("Privacy Policy")</a></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags ft-list">"
                                            <input id="check-a" type="checkbox" name="check" required>
                                            <label for="check-a">@lang("I agree to the") <a href="#">@lang("Terms and Conditions")</a></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit"     class="btn float-btn color2-bg">@lang(" Register") <i class="fas fa-caret-right"></i></button>
                                    </form>
                                </div>
                            </div>"
                        </div>
                        <!--tab end -->
                    </div>
                    <!--tabs end -->
                    <div class="log-separator fl-wrap"><span></span></div>

                    <div class="wave-bg">
                        <div class='wave -one'></div>
                        <div class='wave -two'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->

    <a class="to-top"><i class="fas fa-caret-up"></i></a>
</div>
<!-- Main end -->
<div class="limit-box fl-wrap"></div>
<!--=============== scripts  ===============-->
@include('frontend.layout.scripts')
</body>

<!-- Mirrored from townhub.kwst.net/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jan 2022 11:41:25 GMT -->
</html>
