<section class="gray-bg small-padding no-top-padding-sec" id="sec1">
    <div class="container">

        <!-- list-main-wrap-header end-->
        <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i> @lang('Filters')</div>
        <div class="fl-wrap">

            <!-- listing-item-container -->
            <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
                {{--<!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">

                            <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                <img src="{{ asset('frontend/images/all/1.jpg')}}" alt="">
                            </a>


                            <div class="geodir-category-opt">
                                <div class="listing-rating-count-wrap">
                                    <div class="review-score">4.8</div>
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                    <br>
                                    <div class="reviews-count">12 @lang('reviews')</div>
                                </div>
                            </div>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="listing-single.html">@lang('Luxary Resaturant')</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text"> @lang('Our carefully curated list features the finest dining establishments that offer an extraordinary gastronomic experience. From innovative fusion cuisine to classic fine dining, each restaurant showcases exceptional craftsmanship and an unwavering commitment to culinary artistry. ')</p>

                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                    <span>Restaurants</span>
                                </a>
                                <div class="geodir-opt-list">
                                    <ul class="no-list-style">
                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                        <li>
                                            <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/1.jpg'},{'src': 'images/all/24.jpg'}, {'src': 'images/all/12.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="price-level geodir-category_price">
                                    <span class="price-level-item" data-pricerating="3"></span>
                                    <span class="price-name-tooltip">@lang('Pricey')</span>
                                </div>
                                <div class="geodir-category_contacts">
                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-phone"></i> @lang('Call :'  )</span><a href="#">+38099231212</a></li>
                                        <li><span><i class="fal fa-envelope"></i> @lang('Write :' ) </span><a href="#">yourmail@domain.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->--}}

                @if(isset($searched_entreprises))

                    @foreach($searched_entreprises as $entreprise)
                            <!-- listing-item  -->
                                <div class="listing-item" style="margin-bottom: 40px">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">

                                            <a href="{{ route('single-company',[app()->getLocale(), $entreprise->id]) }}"
                                               class="geodir-category-img-wrap fl-wrap">
                                                <img src="{{ asset($entreprise->photo_path)}}" alt="">
                                            </a>
                                            @if($entreprise->id == 12)
                                                <div class="geodir_status_date gsd_close"><i>@lang( "Relevant Partner ")</i></div>
                                            @endif

                                            @if($entreprise->logo !== null)
                                                <div class="listing-avatar"><a href="author-single.html"><img
                                                            src="{{ asset($entreprise->logo)}}" alt=""></a>
                                                    <span
                                                        class="avatar-tooltip">@lang( "Added By " )<strong>Localizeur</strong></span>
                                                </div>
                                            @endif


                                            <div class="geodir-category-opt">
                                                <div class="listing-rating-count-wrap">
                                                    <div class="review-score">4.8</div>
                                                    <div class="listing-rating card-popup-rainingvis"
                                                         data-starrating2="5"></div>
                                                    <br>
                                                    <div class="reviews-count">12 @lang( "reviews ")</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                            <div class="geodir-category-content-title fl-wrap" style="height: 60px;">
                                                <div class="geodir-category-content-title-item">
                                                    <h3 class="title-sin_map"><a
                                                            href="listing-single.html">{{$entreprise->raison_social}}</a><span
                                                            class="verified-badge"><i class="fal fa-check"></i></span>
                                                    </h3>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                class="fas fa-map-marker-alt"></i> {{$entreprise->localisation_adresse}}
                                                        </a></div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-text fl-wrap" style="height: 60px;">
                                                <p class="small-text">{{$entreprise->description}}</p>

                                            </div>
                                            <div class="geodir-category-footer fl-wrap">
                                                <a class="listing-item-category-wrap">
                                                    {{-- <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>--}}
                                                    <span>{{$entreprise->secteur ? $entreprise->secteur->titre : ""}}</span>
                                                </a>
                                                <div class="geodir-opt-list">
                                                    <ul class="no-list-style">
                                                        <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span
                                                                    class="geodir-opt-tooltip">@lang( "Contact Info ")</span></a>
                                                        </li>
                                                        <li>
                                                            <div class="dynamic-gal gdop-list-link"
                                                                 data-dynamicPath="[{'src': '{{ asset($entreprise->photo_path2)}}' },{'src': 'images/all/24.jpg'}, {'src': 'images/all/12.jpg'}]">
                                                                <i class="fal fa-search-plus"></i><span
                                                                    class="geodir-opt-tooltip">@lang( "Gallery ")</span></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                {{-- <div class="price-level geodir-category_price">
                                                     <span class="price-level-item" data-pricerating="3"></span>
                                                     <span class="price-name-tooltip">@lang(Price)</span>
                                                 </div>--}}
                                                <div class="geodir-category_contacts">
                                                    <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                                    <ul class="no-list-style">
                                                        <li><span><i class="fal fa-phone"></i> @lang( "Call :  ")</span><a
                                                                href="#">{{$entreprise->localisation_tel}}</a></li>
                                                        <li><span><i class="fal fa-envelope"></i>  @lang("Write :  ")</span><a
                                                                href="#">yourmail@domain.com</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                        <!-- listing-item end -->
                    @endforeach
                @else

                    @foreach($entreprises as $entreprise)
                        <!-- listing-item  -->
                        <div class="listing-item" style="margin-bottom: 40px">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">

                                    <a href="{{ route('single-company',[app()->getLocale(), $entreprise->id]) }}"
                                       class="geodir-category-img-wrap fl-wrap">
                                        <img src="{{ asset($entreprise->photo_path)}}" alt="">
                                    </a>
                                    @if($entreprise->id == 12)
                                        <div class="geodir_status_date gsd_close"><i>
                                                @lang( "Relevant Partners ")</i></div>
                                                        @endif

                                                        @if($entreprise->logo !== null)
                                                            <div class="listing-avatar"><a
                                                                    href="author-single.html"><img
                                                                        src="{{ asset($entreprise->logo)}}" alt=""></a>
                                                                <span class="avatar-tooltip">@lang( "Added By ")<strong>Localizeur</strong></span>
                                                            </div>
                                                        @endif


                                                        <div class="geodir-category-opt">
                                                            <div class="listing-rating-count-wrap">
                                                                <div class="review-score">4.8</div>
                                                                <div class="listing-rating card-popup-rainingvis"
                                                                     data-starrating2="5"></div>
                                                                <br>
                                                                <div class="reviews-count">12 @lang( "reviews ")</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                                        <div class="geodir-category-content-title fl-wrap"
                                                             style="height: 60px;">
                                                            <div class="geodir-category-content-title-item">
                                                                <h3 class="title-sin_map"><a
                                                                        href="listing-single.html">{{$entreprise->raison_social}}</a><span
                                                                        class="verified-badge"><i
                                                                            class="fal fa-check"></i></span></h3>
                                                                <div class="geodir-category-location fl-wrap"><a
                                                                        href="#"><i
                                                                            class="fas fa-map-marker-alt"></i> {{$entreprise->localisation_adresse}}
                                                                    </a></div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-text fl-wrap" style="height: 60px;">
                                                            <p class="small-text">{{$entreprise->description}}</p>

                                                        </div>
                                                        <div class="geodir-category-footer fl-wrap">
                                                            <a class="listing-item-category-wrap">
                                                                {{-- <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>--}}
                                                                <span>{{$entreprise->secteur ? $entreprise->secteur->titre : ""}}</span>
                                                            </a>
                                                            <div class="geodir-opt-list">
                                                                <ul class="no-list-style">
                                                                    <li><a href="#" class="show_gcc"><i
                                                                                class="fal fa-envelope"></i><span
                                                                                class="geodir-opt-tooltip">Contact Info@lang( "Contact Info ")</span></a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="dynamic-gal gdop-list-link"
                                                                             data-dynamicPath="[{'src': '{{ asset($entreprise->photo_path2)}}' },{'src': 'images/all/24.jpg'}, {'src': 'images/all/12.jpg'}]">
                                                                            <i class="fal fa-search-plus"></i><span
                                                                                class="geodir-opt-tooltip">@lang( "Gallery ")</span>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            {{-- <div class="price-level geodir-category_price">
                                                                 <span class="price-level-item" data-pricerating="3"></span>
                                                                 <span class="price-name-tooltip">@lang( "Privacy " )</span>
                                                             </div>--}}
                                                            <div class="geodir-category_contacts">
                                                                <div class="close_gcc"><i
                                                                        class="fal fa-times-circle"></i></div>
                                                                <ul class="no-list-style">
                                                                    <li><span><i
                                                                                class="fal fa-phone"></i>@lang( "Call : ")</span><a
                                                                            href="#">{{$entreprise->localisation_tel}}</a>
                                                                    </li>
                                                                    <li><span><i
                                                                                class="fal fa-envelope"></i>@lang( "Write : ")</span><a
                                                                            href="#">yourmail@domain.com</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                    @endforeach
                @endif


                <div class="pagination fwmpag">
                    <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>@lang( "Prev ")</span></a>
                    <a href="#" class="current-page">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">...</a>
                    <a href="#">7</a>
                    <a href="#" class="nextposts-link"><span>@lang( "Next ")</span><i
                                                    class="fas fa-caret-right"></i></a>
                </div>
            </div>
            <!-- listing-item-container end -->
        </div>
    </div>
</section>
