<section>
    <div class="container big-container">
        <div class="section-title">
            <h2><span>{{ __('most-popular-place') }}</span></h2>
            <div class="section-subtitle">Best Listings</div>
            <span class="section-separator"></span>
            <p>{{ __('most-popular-place-text') }}</p>
        </div>
        <div class="listing-filters gallery-filters fl-wrap">
            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*"> @lang( "All Categories ")</a>
            @for ($i = 0; $i < 4; $i++)
                <a href="#" class="gallery-filter" data-filter=".{{ $secteurs[$random_secteurs[$i]]->titre }}">{{ $secteurs[$random_secteurs[$i]]->titre }} </a>
            @endfor

        </div>
        <div class="grid-item-holder gallery-items fl-wrap">

            @for ($i = 0; $i < 8; $i++)
                <div class="gallery-item {{ $entreprises[$i]->secteur->titre }}">
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span> @lang("Save ")</span></div>
                                <a href="listing-single.html" class="geodir-category-img-wrap fl-wrap">
                                    <img src="{{ asset($entreprises[$i]->photo_path) }}" alt="">
                                </a>
                                @if($entreprises[$i]->id == 12)
                                    <div class="geodir_status_date gsd_close"><i >@lang( "Relevant Partner ")</i></div>
                                @endif

                                <div class="listing-avatar"><a href="author-single.html"><img src="{{ asset($entreprises[$i]->photo_path) }}" alt=""></a>
                                    <span class="avatar-tooltip">@lang("Added By")<strong>Nasty Wood</strong></span>
                                </div>
                                <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>@lang("Open Now")</div>
                                <div class="geodir-category-opt">
                                    <div class="listing-rating-count-wrap">
                                        <div class="review-score">4.7</div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        <br>
                                        <div class="reviews-count">9 @lang("reviews")</div>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a href="listing-single.html">{{ $entreprises[$i]->raison_social }}</a></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  34-42 Montgomery St , NY, USA</a></div>
                                    </div>
                                </div>
                                <div class="geodir-category-text fl-wrap">
                                    <p class="small-text"> @lang("Explore this category to find trusted companies that excel in their respective fields and are dedicated to delivering excellence at every step")</p>
                                    <div class="facilities-list fl-wrap">
                                        <div class="facilities-list-title">@lang("Facilities :")</div>
                                        <ul class="no-list-style">
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                            <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="geodir-category-footer fl-wrap">
                                    <a class="listing-item-category-wrap">
                                        <div class="listing-item-category green-bg"><i class="fal fa-cart-arrow-down"></i></div>
                                        <span>@lang("Shopping")</span>
                                    </a>
                                    <div class="geodir-opt-list">
                                        <ul class="no-list-style">
                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang("Contact Info")</span></a></li>
                                            <li><a href="#" class="single-map-item" data-newlatitude="40.88496706" data-newlongitude="-73.88191222"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>5</strong></span> </a></li>
                                            <li>
                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': '{{ asset('frontend/images/all/28.jpg')}}'},{'src': '{{ asset('frontend/images/all/29.jpg')}}'}, {'src': '{{ asset('frontend/images/all/30.jpg')}}'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-level geodir-category_price">
                                        <span class="price-level-item" data-pricerating="3"></span>
                                        <span class="price-name-tooltip">@lang("Pricey")</span>
                                    </div>
                                    <div class="geodir-category_contacts">
                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                        <ul class="no-list-style">
                                            <li><span><i class="fal fa-phone"></i> @lang("Call : ")</span><a href="#">+38099231212</a></li>
                                            <li><span><i class="fal fa-envelope"></i> @lang("Write :") </span><a href="#">yourmail@domain.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->
                </div>
            @endfor
        </div>
        <a href="listing.html" class="btn  dec_btn  color2-bg">@lang("Check Out All Listings")<i class="fal fa-arrow-alt-right"></i></a>
    </div>
</section>
