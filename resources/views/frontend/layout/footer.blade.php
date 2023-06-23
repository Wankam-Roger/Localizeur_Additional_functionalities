<footer class="main-footer fl-wrap">
    <!-- footer-header-->
    <div class="footer-header fl-wrap grad ient-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="subscribe-header">
                        <h3>@lang("subscribe-for") <span>@lang("newsletter")</span></h3>
                        <p>@lang("subscribe-for-newsletter-text")</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="subscribe-widget">
                        <div class="subcribe-form">
                            <form id="subscribe" method="POST"
                                  action="{{ route('admin_store_ajax_subscriber_mail_page', app()->getLocale()) }}"
                                  class="form-ajax">

                                <input class="enteremail fl-wrap form-value" name="email" id="email"
                                       placeholder="@lang("enter-your-mail")" spellcheck="false" type="email" required>
                                <input class="hidden form-value" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" id="subscribe-button" class="subscribe-button"><i
                                        class="fal fa-envelope"></i></button>
                                <label id="subscribe-message-id" for="subscribe-email" class="subscribe-message" hidden>@lang("Mail Sent")</label>
                            </form>
                        </div>
                    </div>"
                </div>
            </div>
        </div>
    </div>
    <!-- footer-header end-->
    <!--footer-inner-->
    <div class="footer-inner   fl-wrap">
        <div class="container">
            <div class="row">
                <!-- footer-widget-->
                <div class="col-md-4">
                    <div class="footer-widget fl-wrap">
                        <div class="footer-logo"><a href="index.html"><img src = "{{ asset('frontend/images/logo4.png')}}" alt=""></a></div>
                        <div class="footer-contacts-widget fl-wrap">
                            <p>@lang("Faites-vous distinguer dans votre secteur, positionnez-vous par rapport à la concurrence")</p>
                            <ul  class="footer-contacts fl-wrap no-list-style">
                                <li><span><i class="fal fa-envelope"></i>@lang(" Mail :")</span><a href="#" target="_blank">info@localizeur.com</a></li>
                                <li> <span><i class="fal fa-map-marker"></i> @lang("Adress :")</span><a href="#" target="_blank">Cameroon Douala, Bonanjo</a></li>
                                <li><span><i class="fal fa-phone"></i> @lang("Phone :")</span><a href="#">+237 697 885 512</a></li>
                            </ul>
                            <div class="footer-social">
                                <span>@lang("Find  us on: ")</span>
                                <ul class="no-list-style">
                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>

                                    <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-widget end-->
                <!-- footer-widget-->
                <div class="col-md-4">
                    <div class="footer-widget fl-wrap">
                        <h3>@lang('recent-compagnies')</h3>

                        <div class="footer-widget-posts fl-wrap">
                            <ul class="no-list-style">
                                @for ($i = 0; $i < 3; $i++)
                                    <li class="clearfix">
                                        <a href="{{ route('single-company',[app()->getLocale(), $entreprises[$i]->id]) }}"
                                           class="widget-posts-img"><img src="{{ asset($entreprises[$i]->photo_path) }}"
                                                                         class="respimg" alt=""></a>
                                        <div class="widget-posts-descr">
                                            <a href="{{ route('single-company',[app()->getLocale(), $entreprises[$i]->id]) }}"
                                               title="">{{$entreprises[$i]->raison_social}}</a>
                                            <span class="widget-posts-date"><i class="fal fa-calendar"></i> {{$entreprises[$i]->created_at}} </span>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                            <a href="{{ route('single-company',[app()->getLocale(), $entreprises[$i]->id]) }}"
                               class="footer-link">@lang("Read all")<i class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- footer-widget end-->
                <!-- footer-widget  -->
                <div class="col-md-4">
                    <div class="footer-widget fl-wrap ">
                        <h3>Our Twitter</h3>
                        <div class="twitter-holder fl-wrap scrollbar-inner2" data-simplebar
                             data-simplebar-auto-hide="false">
                            <div id="footer-twiit"></div>
                        </div>
                        <a href="#" class="footer-link twitter-link" target="_blank">@lang("Follow us ")<i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- footer-widget end-->
            </div>
        </div>
        <!-- footer bg-->
        <div class="footer-bg" data-ran="4"></div>
        <div class="footer-wave">
            <svg viewbox="0 0 100 25">
                <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z"/>
            </svg>
        </div>
        <!-- footer bg  end-->
    </div>
    <!--footer-inner end -->
    <!--sub-footer-->
    <div class="sub-footer  fl-wrap">
        <div class="container">
            <div class="copyright"> &#169; @lang("Localizeur 2022 . All rights reserved.")</div>
            <div class="lang-wrap">
                <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>En</strong></span><i
                        class="fa fa-caret-down arrlan"></i></div>
                <ul class="lang-tooltip lang-action no-list-style">
                    <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                    <li><a href="#" data-lantext="Fr">@lang("Francais")</a></li>
                    <li><a href="#" data-lantext="Es">@lang("Espaol")</a></li>"
                    <li><a href="#" data-lantext="De">@lang("Deutsch")</a></li>
            
            </div>
            <div class="subfooter-nav">
                <ul class="no-list-style">
                    <li><a href="#">@lang("Terms of use")</a></li>
                    <li><a href="#">@lang("Privacy Policy")</a></li>
                    <li><a href="#">@lang("Blog")</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--sub-footer end -->
</footer>
