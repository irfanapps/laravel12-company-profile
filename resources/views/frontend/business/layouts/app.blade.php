@include('frontend.business.partials.main')

<head>
    @include('frontend.business.partials.title-meta')

    @include('frontend.business.partials.head-css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

@include('frontend.business.partials.body')
<!-- Header -->
@include('frontend.business.partials.header.header')

<!-- Page Content -->

@yield('content')

<!-- End Page Content -->

<!-- Footer -->
@include('frontend.business.partials.footer.footer')

<!-- Back to top -->
<button type="button"
    class="inline-flex w-12 h-12 rounded-md items-center justify-center text-lg/none bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 fixed bottom-[117px] right-[20px] hover:-translate-y-1 opacity-100 visible z-50 is-hided"
    data-web-trigger="scroll-top" aria-label="Scroll to top">
    <i class="lni lni-chevron-up"></i>
</button>
<!-- Back to top -->

<!-- JAVASCRIPTS -->
@include('frontend.business.partials.footer.footer-script')

</body>

</html>
