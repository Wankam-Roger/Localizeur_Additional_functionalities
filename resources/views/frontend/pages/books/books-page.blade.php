@extends('frontend.layout.main-layout')

@section('content')

    <!--  section  -->
    <section class="parallax-section single-par" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="{{ asset("frontend/images/bg/39.jpg")}}"
             data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay op7"></div>
        <div class="container">
            <div class="section-title center-align big-title">
                <h2><span>{{ __('books-main-header') }}</span></h2>
                <span class="section-separator"></span>
                <h4>@lang("No book lover's collection is complete without new additions! Our virtual shelves are lined with both contemporary bestsellers and timeless classics. Whether 
                    you're seeking a riveting page-turner or a literary masterpiece, you'll find endless options to satisfy your literary cravings.")@lang(</h4>
            </div>s
        </div>
        <div class="header-sec-link">
            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a>
        </div>
    </section>
    <!--  section  end-->
    <section class="gray-bg no-top-padding-sec" id="sec1">
        <div class="container">
            <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                <a href="{{ route('index',[app()->getLocale()]) }}">@lang("Home")</a> <span>{{ __('books-main-header') }}</span>
                <div class="showshare brd-show-share color2-bg"><i class="fas fa-share"></i> @lang("Share")</div>
            </div>
            <div class="share-holder hid-share sing-page-share top_sing-page-share">
                <div class="share-container  isShare"></div>
            </div>
            <div class="post-container fl-wrap">
                <div class="row">
                    <!-- blog content-->
                    <div class="col-md-8">
                    @foreach($books as $book)
                        <!-- article> -->
                            <article class="post-article">
                                <div class="list-single-main-media fl-wrap">
                                    <div class="single-slider-wrap">
                                        <div class="single-slider fl-wrap">
                                            <div class="swiper-container">
                                                <div class="swiper-wrapper lightgallery">
                                                    <div class="swiper-slide hov_zoom"><img
                                                            src="{{ asset($book->image_path) }}" alt=""><a
                                                            href="{{ asset($book->image_path) }}"
                                                            class="box-media-zoom   popup-image"><i
                                                                class="fal fa-search"></i></a></div>
                                                    @if($book->image_path2)
                                                        <div class="swiper-slide hov_zoom"><img
                                                                src="{{ asset($book->image_path) }}" alt=""><a
                                                                href="{{ asset($book->image_path) }}"
                                                                class="box-media-zoom   popup-image"><i
                                                                    class="fal fa-search"></i></a></div>
                                                    @endif
                                                    @if($book->image_path3)
                                                        <div class="swiper-slide hov_zoom"><img
                                                                src="{{ asset($book->image_path) }}" alt=""><a
                                                                href="{{ asset($book->image_path) }}"
                                                                class="box-media-zoom   popup-image"><i
                                                                    class="fal fa-search"></i></a></div>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                        <div class="listing-carousel_pagination">
                                            <div class="listing-carousel_pagination-wrap">
                                                <div class="ss-slider-pagination"></div>
                                            </div>
                                        </div>
                                        <div class="ss-slider-cont ss-slider-cont-prev color2-bg"><i
                                                class="fal fa-long-arrow-left"></i></div>
                                        <div class="ss-slider-cont ss-slider-cont-next color2-bg"><i
                                                class="fal fa-long-arrow-right"></i></div>
                                    </div>
                                </div>
                                <div class="list-single-main-item fl-wrap block_box">
                                    <h2 class="post-opt-title"><a
                                            href="{{ route('single_book_page',[app()->getLocale(), $book->id]) }}">{{ $book->title_fr }}</a>
                                    </h2>
                                    <p>{{ $book->short_description_fr }}</p>

                                    {{-- <p>@lang("Books have the magical ability to transport us into the lives of fascinating characters. 
                                        From brave heroes embarking on epic quests to introspective individuals navigating the complexities of the human condition, 
                                        you'll find unforgettable companions within the pages of our books. 
                                        Let their stories inspire and captivate you.")</p>--}}
                                    <span class="fw-separator"></span>
                                    <div class="post-author"><a href="#"><img
                                                src="{{ asset('frontend/images/localizeur.png')}}" alt=""><span>@lang("By"), Localizeur</span></a>
                                    </div>
                                    <div class="post-opt">
                                        <ul class="no-list-style">
                                            <li><i class="fal fa-calendar"></i> <span>{{ $book->created_at }}</span>
                                            </li>
                                            <li><i class="fal fa-eye"></i> <span>{{ $book->number_visits }}</span></li>
                                            <li><i class="fal fa-tags"></i>
                                                @if($book->tags != null)
                                                    @foreach($book->tags as $tag)
                                                        <a href="#">{{ $tag->name_fr }}</a> ,
                                                    @endforeach
                                                @endif

                                            </li>
                                        </ul>
                                    </div>
                                    <a href="{{ route('single_book_page',[app()->getLocale(), $book->id]) }}"
                                       class="btn color2-bg  float-btn">@lang("En savoir plus")<i class="fal fa-angle-right"></i></a>
                                </div>
                            </article>
                            <!-- article end -->
                        @endforeach


                        {{--<div class="pagination">
                        <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>@lang("Prev")</span></a>
                        <a href="#">1</a>
                        <a href="#" class="current-page">2</a>
                       <a href="#">3</a>
                        <a href="#">...</a>
                        <a href="#">7</a>
                        <a href="#" class="nextposts-link"><span>@lang("Next")</span><i class="fas fa-caret-right"></i></a>
                   </div>--}}
                    </div>
                    <!-- blog conten end-->
                    <!-- blog sidebar -->
                    <div class="col-md-4">
                        <div class="box-widget-wrap fl-wrap fixed-bar">

                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>@lang("Livres Populaires")</h3>
                                </div>
                                <div class="box-widget  fl-wrap">
                                    <div class="box-widget-content">
                                        <!--widget-posts-->
                                        <div class="widget-posts  fl-wrap">
                                            <ul class="no-list-style">
                                                @foreach($popular_books as $pop_book)
                                                    <li>
                                                        <div class="widget-posts-img"><a
                                                                href="{{ route('single_book_page',[app()->getLocale(), $pop_book->id]) }}"><img
                                                                    src="{{ asset($pop_book->image_path) }}" alt=""></a>
                                                        </div>
                                                        <div class="widget-posts-descr">
                                                            <h4>
                                                                <a href="{{ route('single_book_page',[app()->getLocale(), $pop_book->id]) }}">{{ $pop_book->title_fr }}</a>
                                                            </h4>
                                                            <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                                        class="fal fa-calendar"></i> {{ $pop_book->created_at }}
                                                                </a></div>
                                                        </div>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        </div>
                                        <!-- widget-posts end-->
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap">
                                <div class="banner-wdget fl-wrap">
                                    <div class="overlay"></div>
                                    <div class="bg" data-bg="{{ asset('frontend/images/bg/40.jpg')}}"></div>
                                    <div class="banner-wdget-content fl-wrap">
                                        <h4>@lang("Want to be notified about new post and news ? Subscribe For a Newsletter.")</h4>
                                        <a href="#subscribe" class="custom-scroll-link color-bg"> @lang("Sign up")</a>
                                    </div>
                                </div>
                            </div>
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
                                    <h3>@lang("Categories")</h3>
                                </div>
                                <div class="box-widget fl-wrap">
                                    <div class="box-widget-content">
                                        <ul class="cat-item no-list-style">
                                            @foreach($categories as $category)
                                                <li><a href="#">{{ $category->name_fr }}</a>
                                                    <span>{{ sizeof($category->books) }}</span></li>
                                            @endforeach


                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                        </div>
                    </div>
                    <!-- blog sidebar end -->
                </div>
            </div>
        </div>
    </section>
    <div class="limit-box fl-wrap"></div>

@endsection

