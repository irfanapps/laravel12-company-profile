@include('frontend.applications.partials.main')

<head>
    @include('frontend.applications.partials.title-meta')

    @include('frontend.applications.partials.head-css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('frontend.applications.partials.body')
<!-- NavBar -->
@include('frontend.applications.partials.navbar.nav-center-light')
<!-- Header -->
@include('frontend.applications.partials.header.header')

<!-- Page Content -->

@yield('content')

<!-- End Page Content -->

<!-- Footer -->
@include('frontend.applications.partials.footer.footer')

<!-- JAVASCRIPTS -->
@include('frontend.applications.partials.footer.footer-script')

</body>

</html>
