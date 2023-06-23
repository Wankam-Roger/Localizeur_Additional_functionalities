<!-- listing-carousel-wrap -->
<div class="listing-carousel-wrap fl-wrap" id="sec1">
    <div class="listing-carousel fl-wrap full-height lightgallery">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                @if($company->photo_path)
                    <!-- swiper-slide-->
                    <div class="swiper-slide hov_zoom">
                        <img  src="{{ asset($company->photo_path)}}"   alt="">
                        <a href="{{ asset($company->photo_path)}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                    </div>
                    <!-- swiper-slide end-->
                @endif


                @if($company->photo_path2)
                    <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <img  src="{{ asset($company->photo_path2)}}"   alt="">
                            <a href="{{ asset($company->photo_path2)}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        </div>
                        <!-- swiper-slide end-->
                @endif

                @if($company->photo_path3)
                    <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <img  src="{{ asset($company->photo_path3)}}"   alt="">
                            <a href="{{ asset($company->photo_path3)}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        </div>
                        <!-- swiper-slide end-->
                    @endif

                @if($company->photo_path4)
                    <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <img  src="{{ asset($company->photo_path4)}}"   alt="">
                            <a href="{{ asset($company->photo_path4)}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        </div>
                        <!-- swiper-slide end-->
                    @endif

                @if($company->photo_path5)
                    <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <img  src="{{ asset($company->photo_path5)}}"   alt="">
                            <a href="{{ asset($company->photo_path5)}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        </div>
                        <!-- swiper-slide end-->
                    @endif

                @if($company->photo_path6)
                    <!-- swiper-slide-->
                        <div class="swiper-slide hov_zoom">
                            <img  src="{{ asset($company->photo_path6)}}"   alt="">
                            <a href="{{ asset($company->photo_path6)}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                        </div>
                        <!-- swiper-slide end-->
                    @endif


            </div>
        </div>
    </div>
    <div class="listing-carousel_pagination">
        <div class="listing-carousel_pagination-wrap"></div>
    </div>
    <div class="listing-carousel-button listing-carousel-button-next"><i class="fas fa-caret-right"></i></div>
    <div class="listing-carousel-button listing-carousel-button-prev"><i class="fas fa-caret-left"></i></div>
</div>
<!-- listing-carousel-wrap end-->
