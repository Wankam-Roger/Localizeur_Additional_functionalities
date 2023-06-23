<!--section -->
<section   class="gray-bg hidden-section particles-wrapper">
    <div class="container" style="max-width: unset;width: 95%;">



        <div class="section-title">
            <h2>{{ __('explore-sectors') }}</h2>
            <div class="section-subtitle">{{ __('explore-best-cities-bg') }}</div>
            <span class="section-separator"></span>
            <p style="font-size: 17.5px">{{ __('explore-best-cities-text') }}</p>
        </div>
        <div class="fl-wrap">
        <div class="tabs-container fl-wrap">
            <div class="tab" style="padding: 35px 30px 0;
border-radius: 0 0 6px 6px;
background: #fff;
border: 1px solid #e5e7f2;
  border-top-color: rgb(229, 231, 242);
margin-bottom: 30px;
border-top: none;">
        <div id="filters-search" class="tab-content  first-tab ">
            <div class="fl-wrap">
                <div class="row">
                    <form action="{{route('search-sector', app()->getLocale())}}" type="get">
                        <div class="col-md-10">
                            <div class="listsearch-input-item">
                                <span class="iconn-dec"><i class="far fa-search"></i></span>
                                <input type="text" placeholder="What are you looking for ?" name="search-sector" id="search-sector" />
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="listsearch-input-item">
                                <button type='submit' class="header-search-button color-bg" onclick="window.location.href='listing.html'"><i class="far fa-search"></i><span>@lang( "Search ")</span></button>
                            </div>
                        </div>
                    </form>
                    <!-- listsearch-input-item-->

                    <!-- listsearch-input-item end-->
                </div>
                <!-- hidden-listing-filter -->

                <!-- hidden-listing-filter end -->

            </div>
        </div>
        </div>
        </div>
        </div>
        <br>
        <br>



        <div class="listing-item-grid_container fl-wrap">

            <div class="row" id="all-sectors">

                @if($found_secteurs == null)
                    @foreach($secteurs as $secteur)
                        <!--  listing-item-grid  -->
                            <div class="col-sm-3">
                                <div class="listing-item-grid">
                                    @if($secteur->banner)
                                    <div class="bg"  data-bg="{{ asset($secteur->banner)}}"></div>
                                    @else
                                        <div class="bg"  data-bg="{{ asset('frontend/images/all/84.jpg')}}"></div>
                                    @endif
                                    <div class="d-gr-sec"></div>
                                    <div class="listing-counter color2-bg"><span>{{sizeof($secteur->enterprises)}} </span> Locations</div>
                                    <div class="listing-item-grid_title">
                                        <h3><a href="{{ route('sector-company',[app()->getLocale(), $secteur->id]) }}">{{$secteur->titre}}</a></h3>

                                    </div>
                                </div>
                            </div>
                            <!--  listing-item-grid end  -->
                        @endforeach
                @else
                    @foreach($found_secteurs as $secteur)
                        <!--  listing-item-grid  -->
                            <div class="col-sm-3">
                                <div class="listing-item-grid">
                                    <div class="bg"  data-bg="{{ asset($secteur->banner)}}"></div>
                                    <div class="d-gr-sec"></div>
                                    <div class="listing-counter color2-bg"><span>{{sizeof($secteur->enterprises)}} </span> Locations</div>
                                    <div class="listing-item-grid_title">
                                        <h3><a href="{{ route('sector-company',[app()->getLocale(), $secteur->id]) }}">{{$secteur->titre}}</a></h3>

                                    </div>
                                </div>
                            </div>
                            <!--  listing-item-grid end  -->
                        @endforeach
                @endif


            </div>
        </div>

    </div>
</section>

{{--<script>

    $(document).ready(function(){

        fetch_customer_data();

        function fetch_customer_data(query = '')
        {

            $.ajax({
                url:"{{route('search-sector-ajax', app()->getLocale())}}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                    $('#all-sectors').html(data);
                }
            })
        }

        $(document).on('keyup', '#search-sector', function(){

            var query = $(this).val();
            fetch_customer_data(query);
        });
    });
</script>--}}
<!--  section  -->
