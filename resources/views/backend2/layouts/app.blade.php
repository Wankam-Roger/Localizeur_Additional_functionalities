<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend2.layouts.meta')

    @include('backend2.layouts.css')

    <!-- =======================================================
    * Template Name: NiceAdmin - v2.4.1
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
@include('backend2.layouts.header')

<!-- ======= Sidebar ======= -->
@include('backend2.layouts.sidebar')

<main id="main" class="main">

    @yield('content')

</main><!-- End #main -->

@include('backend2.layouts.footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

@include('backend2.layouts.scripts')

</body>

</html>
