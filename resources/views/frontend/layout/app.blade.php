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

    <!-- header -->"
    @include('frontend.layout.main-header')
    <!-- header end-->

    <!-- wrapper-->
    <div id="wrapper">
        <!-- content-->
        <div class="content">

            <!--section hero-section -->
                @include('frontend.layout.hero-section')
            <!--section end-->

            <!--section latest listing  -->
                @include('frontend.layout.top-ranking-section')
            <!--section end-->


            <div class="sec-circle fl-wrap"></div>
            <!--section -->
        @include('frontend.layout.best-cities-section')
            <!--  section  -->
            <!--section end-->
        @include('frontend.layout.counting-section')
            <!--section end-->
            <!--section  -->
        @include('frontend.layout.enteprize-presentation-section')
            <!--section end-->
            <!--section  -->
        @include('frontend.layout.video-text-section')
            <!--section end-->
            <!--section  -->
        @include('frontend.layout.how-it-works-section')
            <!--section end-->
            <!--section  -->
        @include('frontend.layout.mobile-app-section')
            <!--section end-->
            <!--section  -->
        @include('frontend.layout.testimonial-section')
        <!--section end-->
            <!--section  -->
        @include('frontend.layout.partners-section')
            <!--section end-->
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
                <h3><span>Location for : </span><a href="#">@lang("Listing Title")</a></h3>
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
                <div class="main-register_title">@lang("Welcome to")<span><strong>Loca</strong>Lizeur<strong>.</strong></span></div>
                <div class="close-reg"><i class="fal fa-times"></i></div>
                <ul class="tabs-menu fl-wrap no-list-style">
                    <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> @lang("Log In")</a></li>
                    <li><a href="#tab-2"><i class="fal fa-user-plus"></i> @lang("Register") </a></li>
                </ul>
                <!--tabs -->
                <div class="tabs-container">
                    <div class="tab">
                        <!--tab -->
                        <div id="tab-1" class="tab-content first-tab">
                            <div class="custom-form">
                                <form method="post"  name="registerform">
                                    <label>@lang("Username or Email Address ")<span>*</span> </label>
                                    <input name="email" type="text"   onClick="this.select()" value="">
                                        <label >@lang("Password" )<span>*</span></label>
                                    <label ><span>*</span> </label>
                                    <input name="password" type="password" onClick="this.select()" value="" >
                                    <button type="submit"  class="btn float-btn color2-bg">@lang("Log In") <i class="fas fa-caret-right"></i></button>
                                    <div class="clearfix"></div>
                                    <div class="filter-tags">
                                        <input id="check-a3" type="checkbox" name="check">
                                        <label for="check-a3">@lang("Remember me")</label>
                                    </div>
                                </form>
                                <div class="lost_password">
                                    <a href="#">@lang("Lost Your Password?")</a>
                                </div>
                            </div>
                        </div>
                        <!--tab end -->
                        <!--tab -->
                        <div class="tab">
                            <div id="tab-2" class="tab-content">
                                <div class="custom-form">
                                    <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                        <label >@lang("Full Name" )<span>*</span> </label>
                                        <input name="name" type="text"   onClick="this.select()" value="">
                                        <label>@lang("Email Address ")<span>*</span></label>
                                        <input name="email" type="text"  onClick="this.select()" value="">
                                        <label >@lang("Password" )<span>*</span></label>
                                        <input name="password" type="password"   onClick="this.select()" value="" >
                                        <div class="filter-tags ft-list">
                                            <input id="check-a2" type="checkbox" name="check">
                                            <label for="check-a2">@lang("I agree to the ")<a href="#">@lang("Privacy Policy")</a></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags ft-list">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">@lang(I agree to the )<a href="#">@lang("Terms and Conditions")</a></label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <button type="submit"     class="btn float-btn color2-bg"> @lang("Register") <i class="fas fa-caret-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--tab end -->
                    </div>
                    <!--tabs end -->
                    <div class="log-separator fl-wrap"><span>or</span></div>
                    <div class="soc-log fl-wrap">
                        <p>@lang("For faster login or register use your social account.")</p>
                        <a href="#" class="facebook-log"> Facebook</a>
                    </div>
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
<!--=============== scripts  ===============-->
<script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/js/plugins.js')}}"></script>
<script src="{{ asset('frontend/js/scripts.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>
<script src="{{ asset('frontend/js/map-single.js')}}"></script>
</body>

<!-- Mirrored from townhub.kwst.net/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jan 2022 11:41:25 GMT -->
</html>
