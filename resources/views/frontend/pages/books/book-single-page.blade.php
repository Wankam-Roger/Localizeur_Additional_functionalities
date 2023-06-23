@extends('frontend.layout.main-layout')

@section('content')

    <section class="gray-bg no-top-padding-sec" id="sec1">
        <div class="container">
            <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                <a href="{{ route('index',[app()->getLocale()]) }}">@lang('Home')</a><a
                    href="{{ route('books_page',[app()->getLocale()]) }}">@lang('Livres')</a> <span>{{ $book->title_fr }}</span>
                <div class="showshare brd-show-share color2-bg"><i class="fas fa-share"></i> @lang('Share')</div>
            </div>
            <div class="share-holder hid-share sing-page-share top_sing-page-share">
                <div class="share-container  isShare"></div>
            </div>
            <div class="post-container fl-wrap">
                <div class="row">
                    <!-- blog content-->
                    <div class="col-md-8">
                        <!-- article> -->
                        <article class="post-article single-post-article">
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
                                                            src="{{ asset($book->image_path2) }}" alt=""><a
                                                            href="{{ asset($book->image_path) }}"
                                                            class="box-media-zoom   popup-image"><i
                                                                class="fal fa-search"></i></a></div>
                                                @endif
                                                @if($book->image_path3)
                                                    <div class="swiper-slide hov_zoom"><img
                                                            src="{{ asset($book->image_path3) }}" alt=""><a
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
                                <div class="post-author"><a href="#"><img
                                            src="{{ asset('frontend/images/localizeur.png')}}" alt=""><span>@lang('By') , Localizeur</span></a>
                                </div>
                                <div class="post-opt">
                                    <ul class="no-list-style">
                                        <li><i class="fal fa-calendar"></i> <span>{{ $book->created_at }}</span></li>
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
                                <span class="fw-separator"></span>
                                <div class="clearfix"></div>
                                <p>{{ $book->short_description_fr }}</p>
                                <hr>

                                {!! $book->description_fr !!}
                                <span class="fw-separator"></span>
                                <div class="list-single-tags tags-stylwrap">
                                    <span class="tags-title"><i class="fas fa-tag"></i> @lang('Tags :')</span>

                                    @if($book->tags != null)
                                        @foreach($book->tags as $tag)
                                            <a href="#">{{ $tag->name_fr }}</a>
                                        @endforeach
                                    @endif

                                </div>'
                            </div>
                        </article>
                        <!-- article end -->
                        <!-- post nav -->
                        <div class="post-nav-wrap fl-wrap">
                            @if(isset($prev_book))
                                <a class="post-nav post-nav-prev"
                                   href="{{ route('single_book_page',[app()->getLocale(), $prev_book->id]) }}"><span
                                        class="post-nav-img"><img src="{{ asset($prev_book->image_path) }}"
                                                                  alt=""></span><span class="post-nav-text"><strong>@lang('Prec Livre')</strong> <br>{{ $prev_book->title_fr }}</span></a>
                            @endif
                            @if(isset($next_book))
                                <a class="post-nav post-nav-next"
                                   href="{{ route('single_book_page',[app()->getLocale(), $next_book->id]) }}"><span
                                        class="post-nav-img"><img src="{{ asset($next_book->image_path) }}"
                                                                  alt=""></span><span class="post-nav-text"><strong>@lang('Proc Livre')</strong><br>{{ $next_book->title_fr }}</span></a>
                            @endif
                        </div>
                        <!-- post nav end -->

                        <!-- list-single-main-item -->
                        <div class="list-single-main-item fl-wrap block_box" id="sec9">

                            <div class="list-single-main-item-title fl-wrap">

                                <h3 style="text-align: center; font-size: 20px">@lang('Déjà')<span
                                        class=""><strong>{{ sizeof($book->subscribers) }}</strong></span> copie(s)
                                    @lang('commandé!')</h3>
                            </div>

                        </div>
                        <!-- list-single-main-item end -->

                        <!-- list-single-main-item -->
                        <div class="list-single-main-item fl-wrap block_box" id="sec10">

                            <div class="list-single-main-item-title fl-wrap">
                                @if(session()->exists('subscriber'))
                                    <h3 style="text-align: center; font-size: 20px">@lang('Vous avez été ajouté sur la liste
d'attente. Merci Beaucoup Monsieur/Madame.')</h3>
                                @else
                                    <h3>@lang('Demander la votre')</h3>
                                @endif


                            </div>
                            <!-- Add Review Box -->
                            @if(session()->exists('subscriber'))

                            @else
                                <div id="add-review" class="add-review-box">
                                    <!-- Review Comment -->
                                    <form method="post"
                                          action="{{ route('store_book_subscriber_page',[app()->getLocale()]) }}"
                                          id="add-comment" class="add-comment  custom-form" name="rangeCalc">
                                        @csrf
                                        <fieldset>
                                            <div class="list-single-main-item_content fl-wrap">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label><i class="fal fa-user"></i></label>
                                                        <input type="text" name="name"
                                                               placeholder="@lang('book-subs-enter-your-name')"
                                                               value=""/>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label><i class="fal fa-envelope"></i> </label>
                                                        <input type="text" name="email"
                                                               placeholder="@lang('book-subs-enter-your-mail')"
                                                               value=""/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label><i class="fal fa-phone"></i></label>
                                                        <input type="text" name="phonenumber"
                                                               placeholder="@lang('book-subs-enter-your-phone')"
                                                               value=""/>
                                                        <input type="hidden" name="book_id"
                                                               value="{{ $book->id }}"/>
                                                    </div>

                                                </div>

                                                <div class="clearfix"></div>
                                                <button class="btn  color2-bg  float-btn" style="margin-top:30px;">
                                                   @lang( 'Commander ')<i class="fal fa-paper-plane"></i></button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                        @endif

                        <!-- Add Review Box / End -->
                        </div>
                        <!-- list-single-main-item end -->
                    </div>
                    <!-- blog conten end-->
                    <!-- blog sidebar -->
                    <div class="col-md-4">
                        <div class="box-widget-wrap fl-wrap fixed-bar">

                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>@lang('Livres Populaires')</h3>
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
                                    <div class="bg" data-bg="{{ asset('frontend/images/bg/13.jpg')}}"></div>
                                    <div class="banner-wdget-content fl-wrap">
                                        <h4>@lang('Want to be notified about new post and news ? Subscribe For a
                                            Newsletter.')</h4>
                                        <a href="#subscribe" class="custom-scroll-link color-bg"> Sign up</a>
                                    </div>
                                </div>
                            </div>
                            <!--box-widget-item end -->
                            <!--box-widget-item -->
                            <div class="box-widget-item fl-wrap block_box">
                                <div class="box-widget-item-header">
                                    <h3>@lang('Popular Tags')</h3>
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
                                    <h3>@lang('Popular Categories')</h3>
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

