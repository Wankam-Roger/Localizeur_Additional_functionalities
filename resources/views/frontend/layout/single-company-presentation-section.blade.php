<section class="gray-bg no-top-padding">
    <div class="container">
        <div class="breadcrumbs inline-breadcrumbs fl-wrap">
            <a href="#">@lang("Home")</a><a href="#">{{ $company->town->titre }}</a><a href="#">{{ $company->street->titre }}</a><span>{{ $company->raison_social }}</span>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <!-- list-single-main-wrapper-col -->
            @include('frontend.layout.single-company-presnetation-detail-section',['data' => 'data'])
            <!-- list-single-main-wrapper-col end -->
            <!-- list-single-sidebar -->
            <div class="col-md-4">
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>@lang("Working Hours")</h3>
                    </div>

                </div>
                <!--box-widget-item end -->
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Location / Contacts  </h3>
                    </div>
                    <div class="box-widget">

                        <div class="box-widget-content bwc-nopad">
                            <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                <ul class="no-list-style">
                                    <li><span><i class="fal fa-map-marker"></i> @lang("Adress : ") </span> <span style="color : #878C9F">{{$company->localisation_adresse}}</span></li>
                                    <li><span><i class="fal fa-phone"></i>@lang(" Phone :")</span> <a href="#">{{$company->localisation_tel}}</a></li>
                                    <li><span><i class="fal fa-envelope"></i> @lang("Mail :")</span> <a href="#">{{$company->localisation_email}}</a></li>
                                    <li><span><i class="fal fa-browser"></i> @lang("Website :")</span> <a href="#">{{$company->localisation_siteweb}}</a></li>
                                </ul>
                            </div>
                            <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                <ul class="no-list-style">
                                    <li><a href="#" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank" ><i class="fab fa-vk"></i></a></li>
                                    <li><a href="#" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <div class="bottom-bcw-box_link"><a href="#" class="show-single-contactform tolt" data-microtip-position="top" data-tooltip="Write Message"><i class="fal fa-envelope"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--box-widget-item end -->
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">

                </div>
                <!--box-widget-item end -->
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>@lang( "Price Range ")</h3>
                    </div>
                    <div class="box-widget">
                        <div class="box-widget-content">
                            <div class="claim-price-wdget fl-wrap">
                                <div class="claim-price-wdget-content fl-wrap">
                                    <div class="pricerange fl-wrap"><span>@lang("Price :" )</span> 81$ - 320$ </div>
                                    <div class="claim-widget-link fl-wrap"><span>@lang("Own or work here?")</span><a href="#">@lang("Claim Now!")</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--box-widget-item end -->
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Hosted by :</h3>
                    </div>
                    <div class="box-widget">
                        <div class="box-widget-author fl-wrap">
                            <div class="box-widget-author-title">
                                <div class="box-widget-author-title-img">
                                    <img src='{{ asset('frontend/images/localizeur.png')}}'alt="">
                                </div>
                                <div class="box-widget-author-title_content">
                                    <a href="user-single.html">Localizeur</a>
                                    <span>{{ sizeof($entreprises) }} Hosted</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!--box-widget-item end -->
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>@lang("Similar listings :")</h3>
                    </div>
                    <div class="box-widget  fl-wrap">
                        <div class="box-widget-content">
                            <!--widget-posts-->
                            <div class="widget-posts  fl-wrap">
                                <ul class="no-list-style">
                                    <li>
                                        <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a>
                                        </div>
                                        <div class="widget-posts-descr">
                                            <h4><a href="listing-single.html">@lang("Iconic Cafe")</a></h4>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 Journal Square Plaza, NJ, USA</a></div>
                                            <div class="widget-posts-descr-link"><a href="listing.html" >@lang("Restaurants ")</a>   <a href="listing.html">Cafe</a></div>
                                            <div class="widget-posts-descr-score">4.1</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/2.png" alt=""></a>
                                        </div>
                                        <div class="widget-posts-descr">
                                            <h4><a href="listing-single.html">MontePlaza Hotel</a></h4>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA </a></div>
                                            <div class="widget-posts-descr-link"><a href="listing.html" >Hotels </a>  </div>
                                            <div class="widget-posts-descr-score">5.0</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/3.png" alt=""></a>
                                        </div>
                                        <div class="widget-posts-descr">
                                            <h4><a href="listing-single.html">@lang("Rocko Band in Marquee Club")</a></h4>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                            <div class="widget-posts-descr-link"><a href="listing.html" >@lang("Events")</a> </div>
                                            <div class="widget-posts-descr-score">4.2</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-posts-img"><a href="listing-single.html"><img src="images/gallery/thumbnail/4.png" alt=""></a>
                                        </div>
                                        <div class="widget-posts-descr">
                                            <h4><a href="listing-single.html">@lang("Premium Fitness Gym")</a></h4>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> W 85th St, New York, USA</a></div>
                                            <div class="widget-posts-descr-link"><a href="listing.html" >@lang("Fitness")</a> <a href="listing.html" >Gym</a> </div>
                                            <div class="widget-posts-descr-score">5.0</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- widget-posts end-->
                        </div>
                    </div>
                </div>
                <!--box-widget-item end -->
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Tags</h3>
                    </div>
                    <div class="box-widget opening-hours fl-wrap">
                        <div class="box-widget-content">
                            <div class="list-single-tags tags-stylwrap">
                                <a href="#">Hotel</a>
                                <a href="#">Hostel</a>
                                <a href="#">@lang("Room")</a>
                                <a href="#">Spa</a>
                                <a href="#">Restourant</a>
                                <a href="#">Parking</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div >

                </div>

                
                <!--box-widget-item end -->
            </div>
            <!-- list-single-sidebar end -->
        </div>
    </div>      
</section>
<!-- <div class="limit-box fl-wrap"></div> -->
