<!-- list-single-main-wrapper-col -->
<div class="col-md-8">
    <!-- list-single-main-wrapper -->
    <div class="list-single-main-wrapper fl-wrap" id="sec2">
        <!-- list-single-header -->
        <div class="list-single-header list-single-header-inside block_box fl-wrap">
            <div class="list-single-header-item  fl-wrap">
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{ $company->raison_social }} <span class="verified-badge"><i
                                    class="fal fa-check"></i></span></h1>
                        <div class="geodir-category-location fl-wrap">
                            <a href="#"><i class="fas fa-map-marker-alt"></i> {{ $company->localisation_adresse }}</a>
                            <br>
                            <br>
                            <a href="#"> <i class="fal fa-phone"></i>{{ $company->localisation_tel }}</a>
                            <br>
                            <br>
                            <a href="mailto:{{$company->localisation_email}}"><i class="fal fa-envelope"></i> {{ $company->localisation_email }}</a></div>
                    </div>
                    <div class="col-md-4">
                        <h3 style='text-align:center'> Rate Us </h3>  <br><br> 
                        <div class="fl-wrap list-single-header-column  block_box">
                            <div class="listing-rating-count-wrap single-list-count">
                                <div class="review-score">4.6</div>
                                <div class="review-score">4.6</div>
                                <div class="review-score" style='z-index:1000; opacity:9; "'>4.6</div>
                                <!-- <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div> -->
                                
                                <!-- <div class="reviews-count">{{sizeOf($company->comments)}} {{ __("reviews")}}</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-single-header_bottom fl-wrap">
                <a class="listing-item-category-wrap" href="#">

                    <span>{{ $company->secteur->titre }}</span>
                </a>
                <div class="list-single-author"><a href="author-single.html"><span class="author_avatar"> <img alt=''
                                                                                                               src='{{ asset('frontend/images/localizeur.png')}}'>  </span>Localizeur</a>
                </div>
                <div class="list-single-stats">
                    <ul class="no-list-style">
                        <li><span class="viewed-counter"><i class="fas fa-eye"></i> {{__('viewed')}}-  {{ $company->number_visits }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- list-single-header end -->
        <!-- list-single-main-item -->
        <div class="list-single-main-item fl-wrap block_box">
            <div class="list-single-main-item-title">
                <h3>@lang("Description")</h3>
            </div>
            <div class="list-single-main-item_content fl-wrap">
                @if($company->short_description)
                    <p>{{$company->description}}</p>"
                    <br>
                @endif
                <p>{{$company->description}}</p>
                @if($company->localisation_siteweb)
                <a href="http://{{$company->localisation_siteweb}}" class="btn color2-bg float-btn">{{__("visit-Website")}}<i
                        class="fal fa-chevron-right"></i></a>
                @endif
            </div>
        </div>
        <!-- list-single-main-item end -->
        <!-- list-single-main-item -->
        @if($company->services)
            <div class="list-single-main-item fl-wrap block_box">
                <div class="list-single-main-item-title">
                    <h3>@lang("Services")</h3>
                </div>
                <div class="list-single-main-item_content fl-wrap">
                    <div class="listing-features fl-wrap">
                        <p>{{$company->services}}</p>
                        {{--<ul class="no-list-style">
                            <li><a href="#"><i class="fa fa-rocket"></i> @lang("Elevator in building ")</a></li>
                            <li><a href="#"><i class="fa fa-wifi"></i>@lang( Free Wi Fi)</a></li>
                            <li><a href="#"><i class="fa fa-motorcycle"></i> @lang("Free Parking")</a></li>
                            <li><a href="#"><i class="fa fa-cloud"></i> @lang("Air Conditioned")</a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i> @lang("Online Ordering")</a></li>
                            <li><a href="#"><i class="fa fa-paw"></i> @lang("Pet Friendly")</a></li>
                        </ul>--}}
                    </div>
               </div>
            </div>
        @endif

        <!-- list-single-main-item end -->
        <!-- list-single-main-item-->
        <div class="list-single-main-item fl-wrap block_box" id="sec3">

        </div>
        <!-- list-single-main-item end -->
        <!-- list-single-facts -->
        <div class="list-single-facts fl-wrap">

        </div>
        <!-- list-single-facts end -->
        <!-- list-single-main-item-->
        <div class="list-single-main-item fl-wrap block_box" id="sec4">
            <div class="list-single-main-item-title">
                <h3>@lang("Gallery") / Photos </h3>
            </div>
            <div class="list-single-main-item_content fl-wrap">
                <div class="single-carousel-wrap fl-wrap lightgallery">
                    <div class="sc-next sc-btn color2-bg"><i class="fas fa-caret-right"></i></div>
                    <div class="sc-prev sc-btn color2-bg"><i class="fas fa-caret-left"></i></div>
                    <div class="single-carousel fl-wrap full-height">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                            @if($company->photo_path)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path)}}" alt="">
                                            <a href="{{ asset($company->photo_path)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path2)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path2)}}" alt="">
                                            <a href="{{ asset($company->photo_path2)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path3)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path3)}}" alt="">
                                            <a href="{{ asset($company->photo_path3)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path4)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path4)}}" alt="">
                                            <a href="{{ asset($company->photo_path4)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path5)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path5)}}" alt="">
                                            <a href="{{ asset($company->photo_path5)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path6)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path6)}}" alt="">
                                            <a href="{{ asset($company->photo_path6)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path7)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path7)}}" alt="">
                                            <a href="{{ asset($company->photo_path7)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path8)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path8)}}" alt="">
                                            <a href="{{ asset($company->photo_path8)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path9)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path9)}}" alt="">
                                            <a href="{{ asset($company->photo_path9)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path10)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path10)}}" alt="">
                                            <a href="{{ asset($company->photo_path10)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path11)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path11)}}" alt="">
                                            <a href="{{ asset($company->photo_path11)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                            @endif
                            @if($company->photo_path12)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path12)}}" alt="">
                                            <a href="{{ asset($company->photo_path12)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                @endif
                            @if($company->photo_path13)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path13)}}" alt="">
                                            <a href="{{ asset($company->photo_path13)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                @endif
                            @if($company->photo_path14)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path14)}}" alt="">
                                            <a href="{{ asset($company->photo_path14)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                @endif
                            @if($company->photo_path15)
                                <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <div class="box-item">
                                            <img src="{{ asset($company->photo_path15)}}" alt="">
                                            <a href="{{ asset($company->photo_path15)}}" class="gal-link popup-image"><i
                                                    class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <!-- swiper-slide end-->
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(sizeof($company->comments)>0)
            <!-- list-single-main-item end -->
            <!-- list-single-main-item -->
            <div class="list-single-main-item fl-wrap block_box" id="sec5">
                <div class="list-single-main-item-title">
                    <h3>Commentaires<span> {{sizeof($company->comments)}} </span></h3>
                </div>
                <!--reviews-score-wrap-->
            {{--<div class="reviews-score-wrap fl-wrap">
                <div class="review-score-total">
                                                    <span class="review-score-total-item">
                                                    4.6
                                                    </span>
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                </div>
                <div class="review-score-detail">
                    <!-- review-score-detail-list-->
                    <div class="review-score-detail-list">
                        <!-- rate item-->
                        <div class="rate-item">
                            <div class="rate-item-title"><span>@lang("Quality")</span></div>
                            <div class="rate-item-bg" data-percent="100%">
                                <div class="rate-item-line gradient-bg"></div>
                            </div>
                            <div class="rate-item-percent">5.0</div>
                        </div>
                        <!-- rate item end-->
                        <!-- rate item-->
                        <div class="rate-item">
                            <div class="rate-item-title"><span>Location</span></div>
                            <div class="rate-item-bg" data-percent="100%">
                                <div class="rate-item-line gradient-bg"></div>
                            </div>
                            <div class="rate-item-percent">5.0</div>
                        </div>
                        <!-- rate item end-->
                        <!-- rate item-->
                        <div class="rate-item">
                            <div class="rate-item-title"><span>@lang("Price")</span></div>
                            <div class="rate-item-bg" data-percent="80%">
                                <div class="rate-item-line gradient-bg"></div>
                            </div>
                            <div class="rate-item-percent">4.0</div>
                        </div>
                        <!-- rate item end-->

                        <!-- rate item-->
                        <div class="rate-item">
                            <div class="rate-item-title"><span>@lang("Service")</span></div>
                            <div class="rate-item-bg" data-percent="90%">
                                <div class="rate-item-line gradient-bg"></div>
                            </div>
                            <div class="rate-item-percent">4.5</div>
                        </div>
                        <!-- rate item end-->
                    </div>
                    <!-- review-score-detail-list end-->
                </div>
            </div>--}}
            <!-- reviews-score-wrap end -->

                <div class="list-single-main-item_content fl-wrap">
                    <div class="reviews-comments-wrap" style="display: block">

                        <!-- reviews-comments-item -->
                        <div class="reviews-comments-item">

                            <div class="reviews-comments-item-text fl-wrap">
                                <div class="reviews-comments-header fl-wrap">
                                    <h4><a href="#">{{$company->comments[0]->name}}</a></h4>
                                    <div class="review-score-user">
                                        <span class="review-score-user_item">4.2</span>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                    </div>
                                </div>
                                <p> {{$company->comments[0]->comment}}</p>
                                <div class="reviews-comments-item-footer fl-wrap">
                                    <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>{{$company->comments[0]->created_at}}</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--reviews-comments-item end-->
                            @if(sizeof($company->comments)>1)
                            <!-- reviews-comments-item -->
                                <div class="reviews-comments-item">

                                    <div class="reviews-comments-item-text fl-wrap">
                                        <div class="reviews-comments-header fl-wrap">
                                            <h4><a href="#">{{$company->comments[1]->name}}</a></h4>
                                            <div class="review-score-user">
                                                <span class="review-score-user_item">4.2</span>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                            </div>
                                        </div>
                                        <p>" {{$company->comments[1]->comment}}"</p>
                                        <div class="reviews-comments-item-footer fl-wrap">
                                            <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>{{$company->comments[1]->created_at}}</span>
                                            </div>
                                            <a href="#" class="rate-review"><i class="fal fa-thumbs-up"></i> @lang("Helpful Review")
                                                <span>2</span> </a>
                                        </div>
                                    </div>
                                </div>
                            <!--reviews-comments-item end-->
                            @endif
                    </div>"
                </div>
            </div>
            <!-- list-single-main-item end -->
            <!-- list-single-main-item -->
        @endif



        <div class="list-single-main-item fl-wrap block_box" id="sec6">
            <div class="list-single-main-item-title fl-wrap">
                <h3>@lang("Add Review")</h3>
            </div>
            <!-- Add Review Box -->
            <div id="add-review" class="add-review-box">
                <!-- Review Comment -->
                <form id="add-comment" class="add-comment  custom-form" name="rangeCalc" method="POST" action="{{ route('store-comment',[app()->getLocale()] ) }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{$company->id}}" name="company_id">

                    <fieldset>
                        <div class="review-score-form fl-wrap">
                            <div class="review-range-container">


                                @for ($i = 0; $i < sizeof($company->criteres); $i++)
                                <!-- review-range-item-->
                                <div class="review-range-item">
                                    <div class="range-slider-title">{{ $company->criteres[$i]->titre }}</div>
                                    <div class="range-slider-wrap ">
                                        <input type="hidden" value="{{$company->criteres[$i]->id}}" name="{{ 'critere_id_'.$i }}">
                                        <input type="text" class="rate-range" data-min="0" data-max="5"
                                               data-step="1" value="0" name="{{ 'critere_'.$i }}">
                                    </div>
                                </div>
                                <!-- review-range-item end -->
                                @endfor





                                {{-- <!-- review-range-item-->
                                <div class="review-range-item">
                                    <div class="range-slider-title">{{ __('product-quality') }}</div>
                                    <div class="range-slider-wrap ">
                                        <input type="text" class="rate-range" data-min="0" data-max="5" name="product-quality"
                                               data-step="1" value="1">
                                    </div>
                                </div>
                                <!-- review-range-item end -->
                                <!-- review-range-item-->
                                <div class="review-range-item">
                                    <div class="range-slider-title">{{ __('welcome-orientation') }}</div>
                                    <div class="range-slider-wrap ">
                                        <input type="text" class="rate-range" data-min="0" data-max="10" name="welcome-orientation" data-step="1" value="5">
                                    </div>
                                </div>
                                <!-- review-range-item end -->
                                <!-- review-range-item-->
                                <div class="review-range-item">
                                    <div class="range-slider-title">{{ __('professionalism') }}</div>
                                    <div class="range-slider-wrap">
                                        <input type="text" class="rate-range" data-min="0" data-max="5" name="professionalism"
                                               data-step="1" value="0">
                                    </div>
                                </div>
                                <!-- review-range-item end --> --}}

                            </div>
                            {{--<div class="review-total">
                                <span><input type="text" name="rg_total" data-form="AVG({rgcl})" value="0"></span>

                                <strong>@lang( "Your Score ")</strong>
                            </div>--}}
                        </div>
                        <div class="list-single-main-item_content fl-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <label><i class="fal fa-user"></i></label>
                                    <input type="text" placeholder="Your Name *" value="" name="name"/>
                                </div>
                                <div class="col-md-6">
                                    <label><i class="fal fa-envelope"></i> </label>
                                    <input type="text" placeholder="Email Address*" value="" name="email"/>
                                </div>
                            </div>
                            <textarea cols="40" rows="3" placeholder="Your Review:" name="comment"></textarea>

                            <div class="clearfix"></div>
                            <button type="submit" class="btn  color2-bg float-btn">@lang("Submit Review")<i class="fal fa-paper-plane"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- Add Review Box / End -->
        </div>
        <!-- list-single-main-item end -->
    </div>
</div>
<!-- list-single-main-wrapper-col end -->
