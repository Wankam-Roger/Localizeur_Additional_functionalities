@extends('frontend.layout.main-layout')

@section('page-title', 'Blog')

@section('content')


    <!--  section  -->
    <section class="parallax-section single-par" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="{{ asset("frontend/images/bg/5.jpg")}}"
             data-scrollax="properties: { translateY: '30%' }"
             style="background-image: url({{ asset("frontend/images/bg/5.jpg")}}); transform: translateZ(0px) translateY(-3.04183%);"></div>
        <div class="overlay op7"></div>
        <div class="container">
            <div class="section-title center-align big-title">
                        <h2><span>@lang("Our Community")</span></h2>
                        <span class="section-separator"></span>
                    </div>
                </div>
                <div class="header-sec-link">
                    <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
                </div>
            </section>

            <!--  section  end-->
            <section class="gray-bg no-top-padding-sec" id="sec1">
                <div class="container">
                    <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                        <a href="#">Home</a> <span>Community</span>
                        <div class="showshare brd-show-share color2-bg"> <i class="fas fa-share"></i> Share </div>
                    </div>
                    <div class="share-holder hid-share sing-page-share top_sing-page-share">
                        <div class="share-container  isShare"><a href="http://www.facebook.com/share.php?u=https%3A%2F%2Ftownhub.kwst.net%2Fblog.html" title="Share this page on facebook" class="pop share-icon share-icon-facebook"></a><a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Ftownhub.kwst.net%2Fblog.html&amp;media=&amp;description=" title="Share this page on pinterest" class="pop share-icon share-icon-pinterest"></a><a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=https%3A%2F%2Ftownhub.kwst.net%2Fblog.html" title="Share this page on googleplus" class="pop share-icon share-icon-googleplus"></a><a href="https://twitter.com/share?via=in1.com&amp;text=Townhub - Directory Listing Template" title="Share this page on twitter" class="pop share-icon share-icon-twitter"></a><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Ftownhub.kwst.net%2Fblog.html&amp;title=Townhub - Directory Listing Template&amp;summary=&amp;source=in1.com" title="Share this page on linkedin" class="pop share-icon share-icon-linkedin"></a></div>
                    </div>
                    <div class="post-container fl-wrap">
                        <div class="row">
                            <!-- blog content-->
                            <div class="col-md-8">
                                <!-- article> -->
                            @foreach($posts as $post)
                                @if($post->status == 1)
                                        <article class="post-article">
                                            <div class="list-single-main-media fl-wrap">
                                                <img src="{{ asset($post->banner) }}" class="respimg" alt="">
                                            </div>
                                            <div class="list-single-main-item fl-wrap block_box">
                                                <h2 class="post-opt-title"><a href="blog-single.html">{{ $post->title_fr}}</a></h2>
                                                <p>{{ $post->short_description_fr}}</p>

                                                <span class="fw-separator"></span>
                                                <div class="post-author"><a href="#"><img src="{{ asset('frontend/images/avatar/5.jpg')}}" alt=""><span>By ,Localizeur</span></a></div>
                                                <div class="post-opt">
                                                    <ul class="no-list-style">
                                                        <li><i class="fal fa-map-marker"></i> <span>Douala Cameroun</span></li>
                                                        <li><i class="fal fa-phone"></i> <span>+237</span> 697 88 55 12</li>
                                                        <li><i class="fal fa-envelope"></i> <a href="#">Cafe</a> , <a href="#">info@localizeur.com</a> </li>
                                                    </ul>
                                                </div>
                                                <a href="#" class="btn  color2-bg float-btn">@lang("En Savoir Plus")<i class="fal fa-angle-right"></i></a>
                                            </div>
                                        </article>
                                @endif
                            @endforeach
                                {{--<article class="post-article">
                                    <div class="list-single-main-media fl-wrap">
                                        <div class="single-slider-wrap">
                                            <div class="single-slider fl-wrap">
                                                <div class="swiper-container swiper-container-horizontal swiper-container-autoheight" style="cursor: grab;">
                                                    <div class="swiper-wrapper lightgallery" style="transition-duration: 0ms; transform: translate3d(-806px, 0px, 0px); height: 537px;"><div class="swiper-slide hov_zoom swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" style="width: 806px;"><img src="images/all/17.jpg" alt=""><a href="images/all/17.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        <div class="swiper-slide hov_zoom swiper-slide-active" data-swiper-slide-index="0" style="width: 806px;"><img src="images/all/7.jpg" alt=""><a href="images/all/7.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        <div class="swiper-slide hov_zoom swiper-slide-next" data-swiper-slide-index="1" style="width: 806px;"><img src="images/all/6.jpg" alt=""><a href="images/all/6.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        <div class="swiper-slide hov_zoom swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 806px;"><img src="images/all/17.jpg" alt=""><a href="images/all/17.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        <div class="swiper-slide hov_zoom swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 806px;"><img src="images/all/7.jpg" alt=""><a href="images/all/7.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div></div>
                                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                            </div>
                                            <div class="listing-carousel_pagination">
                                                <div class="listing-carousel_pagination-wrap">
                                                    <div class="ss-slider-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                                                </div>
                                            </div>
                                            <div class="ss-slider-cont ss-slider-cont-prev color2-bg" tabindex="0" role="button" aria-label="Previous slide"><i class="fal fa-long-arrow-left"></i></div>
                                            <div class="ss-slider-cont ss-slider-cont-next color2-bg" tabindex="0" role="button" aria-label="Next slide"><i class="fal fa-long-arrow-right"></i></div>
                                        </div>
                                    </div>
                                    <div class="list-single-main-item fl-wrap block_box">
                                        <h2 class="post-opt-title"><a href="blog-single.html">@lang(" Here’s What People Are Saying About Us.")</a></h2>
                                        <p> @lang("Working with Localizeur has been an absolute pleasure. Their team's expertise and professionalism exceeded our expectations. 
                                            They took the time to understand our unique needs and provided tailored solutions that helped us achieve our goals. 
                                            Their attention to detail and commitment to delivering exceptional results made them a trusted partner. 
                                            We highly recommend Localizeur to anyone looking for top-notch services.") - John Smith</p>
                                        <span class="fw-separator"></span>
                                        <div class="post-author"><a href="#"><img src="images/avatar/5.jpg" alt=""><span>By , Alisa Noory</span></a></div>
                                        <div class="post-opt">
                                            <ul class="no-list-style">
                                                <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                <li><i class="fal fa-tags"></i> <a href="#">Photography</a> , <a href="#">Design</a> </li>
                                            </ul>
                                        </div>
                                        <a href="blog-single.html" class="btn color2-bg  float-btn">@alng("Read more")<i class="fal fa-angle-right"></i></a>
                                    </div>
                                </article>
                                <!-- article end -->
                                <!-- article> -->
                                <article class="post-article">
                                    <div class="list-single-main-media fl-wrap">
                                        <img src="images/all/29.jpg" class="respimg" alt="">
                                    </div>
                                    <div class="list-single-main-item fl-wrap block_box">
                                        <h2 class="post-opt-title"><a href="blog-single.html">@lang("How to choose the right store.")</a></h2>
                                        <p>@lang("Loyalty Programs and Rewards: Some stores offer loyalty programs or rewards programs that can provide additional benefits and savings. 
                                            Consider stores that offer such programs if you are a frequent shopper in that particular category.")</p>
                                        <span class="fw-separator"></span>
                                        <div class="post-author"><a href="#"><img src="images/avatar/5.jpg" alt=""><span>By , Alisa Noory</span></a></div>
                                        <div class="post-opt">
                                            <ul class="no-list-style">
                                                <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                <li><i class="fal fa-tags"></i> <a href="#">Photography</a> , <a href="#">Design</a> </li>
                                            </ul>
                                        </div>
                                        <a href="blog-single.html" class="btn  color2-bg float-btn">@lang("Read more")<i class="fal fa-angle-right"></i></a>
                                    </div>
                                </article>
                                <!-- article end -->
                                <!-- article> -->
                                <article class="post-article">
                                    <div class="list-single-main-media fl-wrap">
                                        <img src="images/all/43.jpg" class="respimg" alt="">
                                    </div>
                                    <div class="list-single-main-item fl-wrap block_box">
                                        <h2 class="post-opt-title"><a href="blog-single.html">@lang("Best Hotel to Your Family .")</a></h2>
                                        <p>@lang("We invite you to support these local gems and create cherished memories as you explore the heart and soul of our family shops.")</p>
                                        <span class="fw-separator"></span>
                                        <div class="post-author"><a href="#"><img src="images/avatar/5.jpg" alt=""><span>By , Alisa Noory</span></a></div>
                                        <div class="post-opt">
                                            <ul class="no-list-style">
                                                <li><i class="fal fa-calendar"></i> <span>15 April 2019</span></li>
                                                <li><i class="fal fa-eye"></i> <span>164</span></li>
                                                <li><i class="fal fa-tags"></i> <a href="#">Shop</a> , <a href="#">Hotels</a> </li>
                                            </ul>
                                        </div>
                                        <a href="blog-single.html" class="btn  color2-bg  float-btn">@lang("Read more")<i class="fal fa-angle-right"></i></a>
                                    </div>
                                </article>--}}
                                <!-- article end -->
                                <!-- article> -->
                                {{--
                                <article class="post-article">
                                    <div class="list-single-main-media fl-wrap">
                                        <img src="images/all/1.jpg" class="respimg" alt="">
                                    </div>
                                    <div class="list-single-main-item fl-wrap block_box">
                                        <h2 class="post-opt-title"><a href="blog-single.html">@lang("Best Restaurants in London.")</a></h2>
                                        <p>@lang(" Our carefully curated list features the finest dining establishments that offer an extraordinary gastronomic experience. From innovative fusion cuisine to 
                                            classic fine dining, each restaurant showcases exceptional craftsmanship and an unwavering commitment to culinary artistry. ")</p>
                                        <span class="fw-separator"></span>
                                        <div class="post-author"><a href="#"><img src="images/avatar/5.jpg" alt=""><span>@lang("By"), Alisa Noory</span></a></div>
                                        <div class="post-opt">
                                            <ul class="no-list-style">
                                                <li><i class="fal fa-calendar"></i> <span>27 December 2017</span></li>
                                                <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                <li><i class="fal fa-tags"></i> <a href="#">Cafe</a> , <a href="#">Travel</a> </li>
                                            </ul>
                                        </div>
                                        <a href="blog-single.html" class="btn  color2-bg float-btn">@lang("Read more")<i class="fal fa-angle-right"></i></a>
                                    </div>
                                </article>
                                --}}
                                <!-- article end -->
                               {{-- <div class="pagination">
                                    <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>@lang("Prev")</span></a>
                                    <a href="#">1</a>
                                    <a href="#" class="current-page">2</a>
                                    <a href="#">3</a>
                                    <a href="#">...</a>
                                    <a href="#">7</a>
                                    <a href="#" class="nextposts-link"><span>@lang("Next")</span><i class="fas fa-caret-right"></i></a>
                                </div> --}}
                            </div>
                            <!-- blog conten end-->
                            <!-- blog sidebar -->
                            <div class="col-md-4">
                                <div class="box-widget-wrap fl-wrap fixed-bar fixbar-action" style="z-index: 12;">
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap block_box">
                                        <div class="box-widget-item-header">
                                            <h3>@lang("Search People")</h3>
                                        </div>
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="search-widget">
                                                    <form action="#" class="fl-wrap">
                                                        <input name="se" id="se" type="text" class="search" placeholder="Search.." value="">
                                                        <button class="search-submit color2-bg" id="submit_btn"><i class="fal fa-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap block_box">
                                        <div class="box-widget-item-header">
                                            <h3>{{ __('popular-post')}}</h3>
                                        </div>
                                        <div class="box-widget  fl-wrap">
                                            <div class="box-widget-content">
                                                <!--widget-posts-->
                                                <div class="widget-posts  fl-wrap">
                                                    <ul class="no-list-style">
                                                        {{--<li>
                                                            <div class="widget-posts-img"><a href="blog-single.html"><img src="images/gallery/thumbnail/1.png" alt=""></a></div>
                                                            <div class="widget-posts-descr">
                                                                <h4><a href="listing-single.html">@lang("Events Scheduled for")</a></h4>
                                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i> 27 Mar 2022</a></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="widget-posts-img"><a href="blog-single.html"><img src="images/gallery/thumbnail/2.png" alt=""></a></div>
                                                            <div class="widget-posts-descr">
                                                                <h4><a href="listing-single.html">@lang("Events Scheduled for")</a></h4>
                                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i> 12 May 2018</a></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="widget-posts-img"><a href="blog-single.html"><img src="images/gallery/thumbnail/3.png" alt=""></a> </div>
                                                            <div class="widget-posts-descr">
                                                                <h4><a href="listing-single.html">@lang("Events Scheduled for")</a></h4>
                                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i>22 Feb  2018</a></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="widget-posts-img"><a href="blog-single.html"><img src="images/gallery/thumbnail/4.png" alt=""></a> </div>
                                                            <div class="widget-posts-descr">
                                                                <h4><a href="listing-single.html">@lang("Events Scheduled for")</a></h4>
                                                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i> 7 Mar 2017</a></div>
                                                            </div>
                                                        </li>--}}
                                                    </ul>
                                                </div>
                                                <!-- widget-posts end-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->
                                    {{--<div class="box-widget-item fl-wrap">
                                        <div class="banner-wdget fl-wrap">
                                            <div class="overlay"></div>
                                            <div class="bg" data-bg="images/bg/13.jpg" style="background-image: url(&quot;images/bg/13.jpg&quot;);"></div>
                                            <div class="banner-wdget-content fl-wrap">
                                                <h4>("Whant to be notified about new post and news ? Subscribe For a Newsletter.")</h4>
                                                <a href="#subscribe" class="custom-scroll-link color-bg"> Sign up</a>
                                            </div>
                                        </div>
                                    </div>--}}
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap block_box">
                                        <div class="box-widget-item-header">
                                            <h3>Tags</h3>
                                        </div>
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="list-single-tags tags-stylwrap">
                                                    @foreach($tags as $tag)
                                                        <a href="#">{{ $tag->name_fr }}</a>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget-item end -->
                                    <!--box-widget-item -->
                                    <div class="box-widget-item fl-wrap block_box">
                                        <div class="box-widget-item-header">
                                            <h3>Categories</h3>
                                        </div>
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <ul class="cat-item no-list-style">
                                                    @foreach($categories as $category)
                                                        <li><a href="#">{{ $category->name_fr }}</a> <span>{{ sizeof($category->posts) }}</span></li>

                                                    @endforeach

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--box-widget-item end -->
                                </div><div></div>
                            </div>
                            <!-- blog sidebar end -->
                        </div>
                    </div>
                </div>
            </section>
            <div class="limit-box fl-wrap"></div>


@endsection

