<section class="gray-bg small-padding no-top-padding-sec" id="sec1">
    <div class="container">

        <!-- list-main-wrap-header end-->
        <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>@lang('Filters')</div>
        <div class="fl-wrap">

            <!-- listing-item-container -->
            <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">


                @foreach($posts as $post)
                    <!-- listing-item  -->
                        <div class="listing-item" style="margin-bottom: 40px">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">

                                    <a href="#" class="geodir-category-img-wrap fl-wrap">
                                        <img src="{{ asset($post->banner) }}" style="object-fit: cover; height: 100%" alt="">
                                    </a>



                                    <div class="geodir-category-opt">
                                        <div class="listing-rating-count-wrap">

                                            {{-- <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div> --}}


                                        </div>
                                    </div>
                                </div>

                                <div class="geodir-category-content fl-wrap title-sin_item">
                                    <div class="geodir-category-content-title fl-wrap" style="height: 60px;">
                                        <div class="geodir-category-content-title-item">
                                            <h3 class="title-sin_map"><a href="listing-single.html">{{$post->title_fr}}</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                            <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-map-marker-alt"></i> {{$post->address}}</a></div>
                                        </div>

                                    </div>
                                    <div class="geodir-category-text fl-wrap" style="height: 60px;">
                                        <p class="small-text">{{$post->short_description_fr}}</p>

                                    </div>
                                    <div class="geodir-category-footer fl-wrap">
                                        <a class="listing-item-category-wrap">
                                           {{-- <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>--}}
                                           <span>{{$post->enterprise_name}}</span>
                                        </a>

                                        <a href="{ { url('frontend.pages.massager/index ') }}">

                                      <!--Button to Start Chatting with other people-->

                <div class="box-widget-item fl-wrap block_box  btn  color2-bg float-btn" style='padding:14px; display:flex; text-align: center; margin-top:20px;'   >
                   
                     <h2 style=' padding-left:50px; text-align: center; ' >@lang( "Ecrivez a d'autres entreprise ")<h2>
                            
                     <i class="fal fa-paper-plane"></i>
                </div>
                </a>
                                        <div class="geodir-opt-list">
                                            <ul class="no-list-style">
                                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">@lang('Contact Info')</span></a></li>

                                            </ul>
                                        </div>

                                       {{-- <div class="price-level geodir-category_price">
                                            <span class="price-level-item" data-pricerating="3"></span>
                                            <span class="price-name-tooltip">@lang('Price')</span>
                                        </div>--}}
                                        <div class="geodir-category_contacts">
                                            <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                            <ul class="no-list-style">
                                                <li><span><i class="fal fa-phone"></i>@lang('Call :')</span><a href="#">{{$post->phonenumber}}</a></li>
                                                <li><span><i class="fal fa-envelope"></i>@lang('Write :')</span><a href="#">{{$post->email}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end -->
                @endforeach

                <div class="pagination fwmpag">
                    <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>@lang('Prev')</span></a>
                    <a href="#" class="current-page">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">...</a>
                    <a href="#">7</a>
                    <a href="#" class="nextposts-link"><span>@lang('Next')</span><i class="fas fa-caret-right"></i></a>
                </div>
            </div>
            <!-- listing-item-container end -->
        </div>
    </div>
</section>
