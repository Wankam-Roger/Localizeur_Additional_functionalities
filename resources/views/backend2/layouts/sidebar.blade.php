<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin_panel', app()->getLocale() ) }}">
                <i class="bi bi-grid"></i>
                <span>@lang('Tableau de Bord')</span>
            </a>
        </li><!-- End Dashboard Nav -->


        <li class="nav-heading">@lang('Utilisateurs')</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>@lang('Utilisateurs')</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="users-nav"
                class="nav-content collapse {{ str_contains(Route::currentRouteName(), "users") ? 'show' : '' }} "
                data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ route('users.index', app()->getLocale())  }}"
                       class="{{ str_contains(Route::currentRouteName(), "users") ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('Utilisateurs')</span>
                    </a>
                </li>


            </ul>


        </li><!-- End Tables Nav -->

        <li class="nav-heading">@lang('Entreprises')</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#enterprise-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>@lang('Entreprises')</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="enterprise-nav"
                class="nav-content collapse {{ str_contains(Route::currentRouteName(), "enterprises")||  str_contains(Route::currentRouteName(), "advideos") ||Route::currentRouteName() == 'bcomments.index' ? 'show' : '' }} "
                data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ route('advideos.index', app()->getLocale())  }}"
                       class="{{ str_contains(Route::currentRouteName(), "advideos") ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('Videos Publicitaires')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('enterprises.index', app()->getLocale())  }}"
                       class="{{ str_contains(Route::currentRouteName(), "enterprises") ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('Gestion des Enterprises')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('streets.index', app()->getLocale())  }}"
                       class="{{ str_contains(Route::currentRouteName(), "streets") ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('Rues/Quartiers')</span>
                    </a>
                </li>

            </ul>


        </li><!-- End Tables Nav -->

        {{-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>@lang('dash-sidebar.nav-blog')</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="blog-nav" class="nav-content collapse {{ Route::currentRouteName() == 'bcategories.index'|| Route::currentRouteName() == 'btags.index'||Route::currentRouteName() == 'blogs.index'||Route::currentRouteName() == 'bcomments.index' ? 'show' : '' }} " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('bcategories.index', app()->getLocale())  }}" class="{{ Route::currentRouteName() == 'bcategories.index' ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-bcategories')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('btags.index', app()->getLocale())  }}" class="{{ Route::currentRouteName() == 'btags.index' ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-btags')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blogs.index', app()->getLocale())  }}" class="{{ Route::currentRouteName() == 'blogs.index' ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-posts')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('bcomments.index', app()->getLocale())  }}" class="{{ Route::currentRouteName() == 'bcomments.index' ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-bcomments')</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#product-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-shop"></i><span>@lang('dash-sidebar.nav-shop')</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="product-nav" class="nav-content collapse {{ Route::currentRouteName() == 'pcategories.index'|| Route::currentRouteName() == 'ptags.index'||Route::currentRouteName() == 'products.index'||Route::currentRouteName() == 'pcomments.index' ? 'show' : '' }} " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('pcategories.index', app()->getLocale())  }}" class="{{ Route::currentRouteName() == 'pcategories.index' ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-bcategories')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('ptags.index', app()->getLocale())  }}" class="{{ Route::currentRouteName() == 'ptags.index' ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-btags')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('products.index', app()->getLocale())  }}" class="{{ Route::currentRouteName() == 'products.index' ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-posts')</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pcomments.index', app()->getLocale())  }}" class="{{ Route::currentRouteName() == 'pcomments.index' ? 'active': ''  }}">
                        <i class="bi bi-circle"></i><span>@lang('dash-sidebar.nav-bcomments')</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav --> --}}


    </ul>

</aside><!-- End Sidebar-->
