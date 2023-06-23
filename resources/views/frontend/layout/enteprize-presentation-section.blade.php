<section>
    <div class="container big-container">
        <div class="section-title">
            <h2><span>{{ __('most-popular-place') }}</span></h2>
            <div class="section-subtitle">Best Listings</div>
            <span class="section-separator"></span>
            <p>{{ __('most-popular-place-text') }}</p>
        </div>
        <div class="listing-filters gallery-filters fl-wrap">
            <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">@lang("All Categories")</a>
            <a href="#" class="gallery-filter" data-filter=".res">@lang("Restaurants") </a>
            <a href="#" class="gallery-filter" data-filter=".hot">@lang("Hotels")</a>
            <a href="#" class="gallery-filter" data-filter=".tra">@lang("Transport")</a>"
            <a href="#" class="gallery-filter" data-filter=".avo">@lang("Avocats")</a>
        </div>
        <div class="grid-item-holder gallery-items fl-wrap">


            @for ($i = 0; $i < 8 && $i < sizeof($top_entreprises); $i++)

                <!-- gallery-item  -->"
                <div
                    class="gallery-item {{ $top_entreprises[$i]->secteur ? substr(strtolower($top_entreprises[$i]->secteur->titre), 0, 3) : ''}}">
                    <!-- listing-item  -->
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">

                                <a href="{{ route('single-company',[app()->getLocale(), $top_entreprises[$i]->id]) }}"
                                   class="geodir-category-img-wrap fl-wrap">
                                    <img src="{{ asset($top_entreprises[$i]->photo_path)}}" alt=""
                                         style="object-fit: cover">
                                </a>
                                @if($top_entreprises[$i]->logo !== null)
                                    <div class="listing-avatar"><a
                                            href="{{ route('single-company',[app()->getLocale(), $top_entreprises[$i]->id]) }}"><img
                                                src="{{ asset($top_entreprises[$i]->logo)}}" alt=""></a>
                                        <span class="avatar-tooltip">@lang("Added By") <strong>Localizeur</strong></span>
                                    </div>
                                @endif

                                <div class="geodir-category-opt">
                                    <div class="listing-rating-count-wrap">
                                        <div class="review-score">3.8</div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>
                                        <br>
                                        <div class="reviews-count">4 @lang("reviews")</div>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap title-sin_item">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a
                                                href="{{ route('single-company',[app()->getLocale(), $top_entreprises[$i]->id]) }}">{{$top_entreprises[$i]->raison_social}}</a><span
                                                class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                    class="fas fa-map-marker-alt"></i> {{$top_entreprises[$i]->localisation_adresse}}
                                            </a></div>
                                    </div>
                                </div>
                                <div class="geodir-category-text fl-wrap" style="height: 60px;">
                                    <p class="small-text">{{$top_entreprises[$i]->short_description}}</p>

                                </div>
                                <div class="geodir-category-footer fl-wrap">
                                    <a class="listing-item-category-wrap">
                                        <span>{{$top_entreprises[$i]->secteur ? $top_entreprises[$i]->secteur->titre : ''}}</span>
                                    </a>
                                    <div class="geodir-opt-list">
                                        <ul class="no-list-style">
                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span
                                                        class="geodir-opt-tooltip">@lang("Contact Info")</span></a></li>
                                            <li>
                                                <div class="dynamic-gal gdop-list-link"
                                                     data-dynamicPath="[{'src': '{{ asset($top_entreprises[$i]->photo_path2)}}'},{'src': '{{ asset($top_entreprises[$i]->photo_path3)}}'}, {'src': '{{ asset($top_entreprises[$i]->photo_path4)}}'}]">
                                                    <i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">@lang("Gallery")</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="geodir-category_contacts">
                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                        <ul class="no-list-style">
                                            <li><span><i class="fal fa-phone"></i> @lang("Call : ")</span><a
                                                    href="#">{{$top_entreprises[$i]->localisation_tel}}</a></li>
                                            <li><span><i class="fal fa-envelope"></i> @lang(" Write : ")</span><a href="#">yourmail@domain.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- listing-item end -->"
                </div>"
                <!-- gallery-item  end-->

            @endfor


        </div>
        <a href="{{ route('companies',[app()->getLocale()])}}" class="btn  dec_btn  color2-bg">
            @lang("Check Out All Listings")<i class="fal fa-arrow-alt-right"></i></a>
    </div>
</section>

