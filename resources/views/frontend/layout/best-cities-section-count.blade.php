<!--section -->
<section   class="gray-bg hidden-section particles-wrapper">
    <div class="container">
        <div class="section-title">
            <h2>{{ __('explore-best-cities') }}</h2>
            <div class="section-subtitle">{{ __('explore-best-cities-bg') }}</div>
            <span class="section-separator"></span>
            <p style="font-size: 17.5px">{{ __('explore-best-cities-text') }}</p>
        </div>
        <div class="listing-item-grid_container fl-wrap">
            <div class="row">

                @foreach($streets as $street)
                <!--  listing-item-grid  -->
                <div class="col-sm-4">
                    <div class="listing-item-grid">
                        <div class="bg"  data-bg="{{ asset('frontend/images/all/78.jpg')}}"></div>
                        <div class="d-gr-sec"></div>
                        <div class="listing-counter color2-bg"><span>{{sizeof($street->enterprises ? $street->enterprises : [])}} </span> @lang("Entreprises")</div>
                        <div class="listing-item-grid_title">
                            <h3><a href="">{{$street->titre}}</a></h3>
                            <p>{{ __('bonanjo-sub-text') }}</p>
                        </div>
                    </div>
                </div>
                <!--  listing-item-grid end  -->
                @endforeach

            </div>
        </div>
        <a href="" style="margin-right: 20px;" class="btn dec_btn   color2-bg">@lang("View All Cities")<i class="fal fa-arrow-alt-right"></i></a>
        <a href="" style="margin-right: 20px;" class="btn dec_btn   color2-bg">@lang("View All Cities")<i class="fal fa-arrow-alt-right"></i></a>
        <a href="" style="margin-right: 20px;" class="btn dec_btn   color2-bg">@lang("View All Cities")<i class="fal fa-arrow-alt-right"></i></a>

    </div>
</section>
<!--  section  -->
