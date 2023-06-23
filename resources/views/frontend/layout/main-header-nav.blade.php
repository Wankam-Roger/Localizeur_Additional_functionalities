<div class="nav-holder main-menu">
    <nav>
        <ul class="no-list-style">

            <li>
                <a href="{{route('index', app()->getLocale())}}">{{ __('menu-home') }}</a>
            </li>

            <li>
                <a href="{{route('about', app()->getLocale())}}">{{ __('menu-about-us') }}</a>
            </li>

            <li>
                <a href="#" >{{ __('menu-secteur-activite') }}<i class="fa fa-caret-down"></i></a>
                <!--second level -->
                <ul>
                    @foreach($random_secteurs as $rs)
                        <li>
                            <a href="{{ route('sector-company',[app()->getLocale(), $secteurs[$rs]->id]) }}">{{$secteurs[$rs]->titre}}</a>
                        </li>
                    @endforeach

                    <li><a href="{{ route('business-sectors',[app()->getLocale()]) }}">Autres</a></li>
                </ul>
                <!--second level end-->
            </li>

            <li>
                <a href="{{ route('books_page',[app()->getLocale()]) }}">{{ __('books-main-header') }}</a>
            </li>

            <li>
                <a href="{{ route('community-page', [app()->getLocale()] )}} ">{{ __('community-page') }}</a>
            </li>
            {{--<li>
                <a href="#">@lang('Pages')<i class="fa fa-caret-down"></i></a>
<!--second level -->
<ul>
    <li>
        <a href="#">@lang('Shop')<i class="fa fa-caret-down"></i></a>
        <!--third  level  -->
        <ul>
            <li><a href="shop.html">@lang('Products')</a></li>
            <li><a href="product-single.html">@lang('Product single')</a></li>
            <li><a href="cart.html">@lang('Cart')</a></li>
        </ul>
        <!--third  level end-->
    </li>
    <li><a href="about.html">@lang('About')</a></li>
    <li><a href="contacts.html">@lang('Contacts')</a></li>
    <li><a href="author-single.html">@lang('User single')</a></li>
    <li><a href="help.html">@lang('How it Works')</a></li>
    <li><a href="booking.html">@lang('Booking')</a></li>
    <li><a href="pricing-tables.html">@lang('Pricing')</a></li>
    <li><a href="dashboard.html">@lang('User Dashboard')</a></li>
    <li><a href="blog-single.html">@lang('Blog Single')</a></li>
    <li><a href="dashboard-add-listing.html">@lang('Add Listing')</a></li>
    <li><a href="invoice.html">@lang('Invoice')</a></li>
    <li><a href="login-sign.html">@lang('Login Sign')</a></li>
    <li><a href="404.html">@lang('404')</a></li>
</ul>

                <!--second level end-->
            </li>--}}
        </ul>
    </nav>
</div>
