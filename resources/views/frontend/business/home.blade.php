@extends('frontend.business.layouts.app')
@section('content')
    <!-- Start Hero -->
    <main class="main relative">
        <!-- Hero section -->
        <section id="home"
            class="relative overflow-hidden bg-primary text-primary-color pt-[120px] md:pt-[130px] lg:pt-[160px]">
            <div class="container">
                <div class="-mx-5 flex flex-wrap items-center">
                    <div class="w-full px-5">
                        <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                            <h1
                                class="mb-6 text-3xl font-bold leading-snug text-primary-color sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight">
                                Tailwind CSS Company Profile
                            </h1>

                            <p class="mx-auto mb-9 max-w-[600px] text-base text-primary-color sm:text-lg sm:leading-normal">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Possimus qui impedit veniam, nesciunt nostrum vel repellat
                                reprehenderit dignissimos harum, iste ex sit illo?
                            </p>

                            <ul class="mb-10 flex flex-wrap items-center justify-center gap-4 md:gap-5">
                                <li>
                                    <a href="javascript:void(0)"
                                        class="inline-flex items-center justify-center rounded-md bg-primary-color text-primary px-5 py-3 text-center text-base font-medium shadow-md hover:bg-primary-light-5 md:px-7 md:py-[14px]"
                                        role="button">Get Started</a>
                                </li>

                                <li>
                                    <a href="javascript:boid(0)"
                                        class="video-popup flex items-center gap-4 rounded-md bg-primary-color/[0.15] px-5 py-3 text-base font-medium text-primary-color hover:bg-primary-color hover:text-primary md:px-7 md:py-[14px]"
                                        role="button"><i class="lni lni-play text-lg/none"></i> Watch Intro</a>
                                </li>
                            </ul>

                            <div>
                                <p class="mb-4 text-center text-primary-color">Powered by</p>

                                <div class="scroll-revealed flex items-center justify-center gap-4 text-center">
                                    <a href="https://tailwindcss.com/" target="_blank"
                                        class="text-primary-color/60 hover:text-primary-color">
                                        <svg class="fill-current" height="26" viewBox=".16 .18 799.8 98.72"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m248.04 41.78h-14.42v27.79c0 7.41 4.89 7.29 14.42 6.83v11.23c-19.3 2.32-26.98-3.01-26.98-18.06v-27.79h-10.7v-12.05h10.7v-15.55l12.56-3.7v19.25h14.42zm54.98-12.05h12.56v57.9h-12.56v-8.34c-4.42 6.14-11.29 9.85-20.36 9.85-15.81 0-28.95-13.32-28.95-30.46 0-17.25 13.14-30.45 28.95-30.45 9.07 0 15.94 3.7 20.36 9.72zm-18.38 47.48c10.47 0 18.38-7.76 18.38-18.53s-7.91-18.53-18.38-18.53-18.37 7.76-18.37 18.53 7.9 18.53 18.37 18.53zm51.87-56.16c-4.42 0-8.03-3.71-8.03-7.99.01-1.05.22-2.09.62-3.06a7.997 7.997 0 0 1 4.34-4.32c.97-.4 2.02-.61 3.07-.61s2.09.21 3.07.61c.97.4 1.85.99 2.6 1.73.74.75 1.33 1.63 1.74 2.59.4.97.61 2.01.61 3.06 0 4.28-3.6 7.99-8.02 7.99zm-6.28 66.58v-57.9h12.56v57.9zm27.1 0v-84.53h12.56v84.53zm94.08-57.9h13.26l-18.26 57.9h-12.33l-12.09-39.02-12.21 39.02h-12.33l-18.26-57.9h13.26l11.28 39.95 12.21-39.95h11.98l12.09 39.95zm28.84-8.68c-4.42 0-8.02-3.71-8.02-7.99 0-1.05.21-2.09.61-3.06.41-.96 1-1.84 1.74-2.59.75-.74 1.63-1.33 2.6-1.73.98-.4 2.02-.61 3.07-.61a8.044 8.044 0 0 1 5.67 2.34c.75.75 1.34 1.63 1.74 2.59.41.97.62 2.01.62 3.06 0 4.28-3.61 7.99-8.03 7.99zm-6.28 66.58v-57.9h12.56v57.9zm80.02-35.55v35.55h-12.56v-34.27c0-8.81-5.12-13.44-13.03-13.44-8.26 0-14.77 4.87-14.77 16.68v31.03h-12.56v-57.9h12.56v7.41c3.84-6.02 10.12-8.91 18.03-8.91 13.02 0 22.33 8.8 22.33 23.85zm59.54-45.51h12.56v81.06h-12.56v-8.34c-4.42 6.14-11.28 9.85-20.35 9.85-15.82 0-28.96-13.32-28.96-30.46 0-17.25 13.14-30.45 28.96-30.45 9.07 0 15.93 3.7 20.35 9.72zm-18.37 70.64c10.46 0 18.37-7.76 18.37-18.53s-7.91-18.53-18.37-18.53c-10.47 0-18.38 7.76-18.38 18.53s7.91 18.53 18.38 18.53zm42.33-18.53c0-17.25 13.14-30.45 30.7-30.45 11.4 0 21.28 5.9 25.93 14.94l-10.81 6.25c-2.56-5.44-8.26-8.92-15.24-8.92-10.23 0-18.02 7.76-18.02 18.18s7.79 18.18 18.02 18.18c6.98 0 12.68-3.59 15.47-8.91l10.82 6.13c-4.89 9.15-14.77 15.06-26.17 15.06-17.56 0-30.7-13.32-30.7-30.46zm108.85 12.62c0 11.58-10.12 17.84-22.68 17.84-11.63 0-20-5.22-23.72-13.55l10.81-6.26c1.87 5.22 6.52 8.34 12.91 8.34 5.59 0 9.89-1.85 9.89-6.48 0-10.31-31.28-4.52-31.28-25.25 0-10.88 9.42-17.71 21.28-17.71 9.53 0 17.44 4.4 21.51 12.04l-10.58 5.91c-2.09-4.52-6.16-6.6-10.93-6.6-4.54 0-8.49 1.96-8.49 6.13 0 10.54 31.28 4.17 31.28 25.59zm53.62 0c0 11.58-10.12 17.84-22.68 17.84-11.63 0-20.01-5.22-23.73-13.55l10.82-6.26c1.86 5.22 6.51 8.34 12.91 8.34 5.58 0 9.88-1.85 9.88-6.48 0-10.31-31.28-4.52-31.28-25.25 0-10.88 9.42-17.71 21.28-17.71 9.54 0 17.45 4.4 21.52 12.04l-10.59 5.91c-2.09-4.52-6.16-6.6-10.93-6.6-4.53 0-8.49 1.96-8.49 6.13 0 10.54 31.29 4.17 31.29 25.59z" />
                                            <path
                                                d="m82.79.18c-22.03 0-35.81 10.97-41.32 32.91 8.27-10.97 17.91-15.09 28.93-12.35 6.28 1.57 10.77 6.11 15.75 11.14 8.1 8.18 17.48 17.66 37.96 17.66 22.03 0 35.8-10.97 41.31-32.91-8.26 10.97-17.9 15.08-28.92 12.34-6.28-1.56-10.78-6.11-15.75-11.13-8.1-8.19-17.48-17.66-37.96-17.66zm-41.32 49.36c-22.03 0-35.8 10.97-41.31 32.91 8.26-10.97 17.9-15.08 28.92-12.34 6.29 1.56 10.78 6.11 15.75 11.13 8.1 8.19 17.48 17.66 37.96 17.66 22.04 0 35.81-10.97 41.32-32.91-8.27 10.97-17.91 15.09-28.92 12.35-6.29-1.57-10.78-6.11-15.76-11.14-8.1-8.18-17.48-17.66-37.96-17.66z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-5">
                        <div class="scroll-revealed relative z-10 mx-auto max-w-[845px]">
                            <figure class="mt-16">
                                <img src="{{ asset('img/hero.png') }}" alt="Hero image"
                                    class="mx-auto max-w-full rounded-t-xl rounded-tr-xl" />
                            </figure>

                            <div class="absolute -left-9 bottom-0 z-[-1]">
                                <img src="{{ asset('img/dots.svg') }}" alt class="w-[120px] opacity-75" />
                            </div>

                            <div class="absolute -right-6 -top-6 z-[-1]">
                                <img src="{{ asset('img/dots.svg') }}" alt class="w-[120px] opacity-75" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About section -->
        <section id="about" class="section-area">
            <div class="container">
                <div class="grid grid-cols-1 gap-14 lg:grid-cols-2">
                    <div class="w-full">
                        <figure class="scroll-revealed max-w-[480px] mx-auto">
                            <img src="{{ asset('img/about-img.jpg') }}" alt="About image" class="rounded-xl" />
                        </figure>
                    </div>

                    <div class="w-full">
                        <div class="scroll-revealed">
                            <h6 class="mb-2 block text-lg font-semibold text-primary">
                                About Us
                            </h6>
                            <h2 class="mb-6">
                                Our team comes with the experience and knowledge
                            </h2>
                        </div>

                        <div class="tabs scroll-revealed">
                            @include('frontend.business.partials.navbar.nav-center-light')

                            <div class="tabs-content mt-4" id="tabs-panel-profile" tabindex="-1" role="tabpanel"
                                aria-labelledby="tabs-list-profile">
                                <p>
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking at
                                    its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, look like
                                    readable English.
                                </p>
                                <p>
                                    There are many variations of passages of Lorem Ipsum
                                    available, but the majority have in some form, by injected
                                    humour.
                                </p>
                            </div>

                            <div class="tabs-content mt-4" id="tabs-panel-vision" tabindex="-1" role="tabpanel"
                                aria-labelledby="tabs-list-vision">
                                <p>
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking at
                                    its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, look like
                                    readable English.
                                </p>
                                <p>
                                    There are many variations of passages of Lorem Ipsum
                                    available, but the majority have in some form, by injected
                                    humour.
                                </p>
                            </div>

                            <div class="tabs-content mt-4" id="tabs-panel-history" tabindex="-1" role="tabpanel"
                                aria-labelledby="tabs-list-history">
                                <p>
                                    It is a long established fact that a reader will be
                                    distracted by the readable content of a page when looking at
                                    its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, look like
                                    readable English.
                                </p>
                                <p>
                                    There are many variations of passages of Lorem Ipsum
                                    available, but the majority have in some form, by injected
                                    humour.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services section -->
        <section id="services" class="section-area">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">
                        Services
                    </h6>
                    <h2 class="mb-6">Our Best Services</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available but
                        the majority have suffered alteration in some form.
                    </p>
                </div>

                <div class="row">
                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <div class="group hover:-translate-y-1">
                            <div
                                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                                <i class="lni lni-capsule"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                                    Refreshing Design
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                                    Rem.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <div class="group hover:-translate-y-1">
                            <div
                                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                                <i class="lni lni-tailwindcss"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                                    Solid Tailwind CSS
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                                    Rem.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <div class="group hover:-translate-y-1">
                            <div
                                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                                <i class="lni lni-gift"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                                    Free and Open-Source
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                                    Rem.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <div class="group hover:-translate-y-1">
                            <div
                                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                                <i class="lni lni-layout"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                                    Multipurpose Template
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                                    Rem.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <div class="group hover:-translate-y-1">
                            <div
                                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                                <i class="lni lni-layers"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                                    Fully Customizable
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                                    Rem.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <div class="group hover:-translate-y-1">
                            <div
                                class="w-[70px] h-[70px] rounded-2xl mb-6 flex items-center justify-center text-[37px]/none bg-primary text-primary-color">
                                <i class="lni lni-grid-alt"></i>
                            </div>
                            <div class="w-full">
                                <h4 class="text-[1.25rem]/tight font-semibold mb-5">
                                    All Essential Elements
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptatum dolores autem quidem odit beatae perspiciatis!
                                    Rem.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Intro video section -->
        <section id="intro" class="section-area">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">
                        Intro Video
                    </h6>
                    <h2 class="mb-6">Watch Our Intro Video</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available but
                        the majority have suffered alteration in some form.
                    </p>
                </div>

                <div class="scroll-revealed relative max-w-[900px] mx-auto">
                    <img src="{{ asset('img/intro-video.jpg') }}" alt="Intro video"
                        class="w-full h-full aspect-video rounded-xl object-cover" />
                    <a href="javascript:void(0)"
                        class="video-popup w-[80px] h-[80px] rounded-full inline-flex items-center justify-center bg-primary text-primary-color text-[1.875rem] absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 shadow-md hover:bg-primary-color hover:text-primary hover:shadow-xl focus:bg-primary-color focus:text-primary focus:shadow-xl">
                        <i class="lni lni-play"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Portfolio section -->
        <section id="portfolio" class="section-area">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">
                        Portfolio
                    </h6>
                    <h2 class="mb-6">Our Recent Works</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available but
                        the majority have suffered alteration in some form.
                    </p>
                </div>

                <nav class="scroll-revealed portfolio-menu mb-[3.750rem] text-center" aria-label="Portfolio filter">
                    <button type="button"
                        class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color active"
                        data-filter="all">
                        All Work
                    </button>
                    <button type="button"
                        class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                        data-filter="branding">
                        Branding
                    </button>
                    <button type="button"
                        class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                        data-filter="marketing">
                        Marketing
                    </button>
                    <button type="button"
                        class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                        data-filter="planning">
                        Planning
                    </button>
                    <button type="button"
                        class="font-semibold px-5 py-2 rounded-md text-body-light-11 dark:text-body-dark-11 hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color"
                        data-filter="research">
                        Research
                    </button>
                </nav>

                <div class="scroll-revealed portfolio-grid row">
                    <div class="portfolio col-12 sm:col-6 lg:col-4">
                        <article class="group" data-filter="branding">
                            <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                                <img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" alt="Graphics Design"
                                    class="w-full h-full object-cover" />
                                <div
                                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                                    <div class="flex flex-wrap gap-2 p-4">
                                        <div class="inline-block relative">
                                            <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}"
                                                class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-icon">
                                            <a href="javascript:void(0)"
                                                class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <h4 class="mb-2">
                                    <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">Graphics
                                        Design</a>
                                </h4>
                                <p>
                                    Short description for the ones who look for something new.
                                    Awesome!
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="portfolio col-12 sm:col-6 lg:col-4">
                        <article class="group" data-filter="research">
                            <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                                <img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" alt="Web Development"
                                    class="w-full h-full object-cover" />
                                <div
                                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                                    <div class="flex flex-wrap gap-2 p-4">
                                        <div class="inline-block relative">
                                            <a href="{{ asset('img/portfolio/portfolio-2.jpg') }}"
                                                class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-icon">
                                            <a href="javascript:void(0)"
                                                class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <h4 class="mb-2">
                                    <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">Web
                                        Development</a>
                                </h4>
                                <p>
                                    Short description for the ones who look for something new.
                                    Awesome!
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="portfolio col-12 sm:col-6 lg:col-4">
                        <article class="group" data-filter="marketing">
                            <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                                <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" alt="App Development"
                                    class="w-full h-full object-cover" />
                                <div
                                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                                    <div class="flex flex-wrap gap-2 p-4">
                                        <div class="inline-block relative">
                                            <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}"
                                                class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-icon">
                                            <a href="javascript:void(0)"
                                                class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <h4 class="mb-2">
                                    <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">App
                                        Development</a>
                                </h4>
                                <p>
                                    Short description for the ones who look for something new.
                                    Awesome!
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="portfolio col-12 sm:col-6 lg:col-4">
                        <article class="group" data-filter="planning">
                            <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                                <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" alt="Digital Marketing"
                                    class="w-full h-full object-cover" />
                                <div
                                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                                    <div class="flex flex-wrap gap-2 p-4">
                                        <div class="inline-block relative">
                                            <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}"
                                                class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-icon">
                                            <a href="javascript:void(0)"
                                                class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <h4 class="mb-2">
                                    <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">Digital
                                        Marketing</a>
                                </h4>
                                <p>
                                    Short description for the ones who look for something new.
                                    Awesome!
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="portfolio col-12 sm:col-6 lg:col-4">
                        <article class="group" data-filter="branding">
                            <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                                <img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" alt="SEO Services"
                                    class="w-full h-full object-cover" />
                                <div
                                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                                    <div class="flex flex-wrap gap-2 p-4">
                                        <div class="inline-block relative">
                                            <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}"
                                                class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-icon">
                                            <a href="javascript:void(0)"
                                                class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <h4 class="mb-2">
                                    <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">SEO
                                        Services</a>
                                </h4>
                                <p>
                                    Short description for the ones who look for something new.
                                    Awesome!
                                </p>
                            </div>
                        </article>
                    </div>

                    <div class="portfolio col-12 sm:col-6 lg:col-4">
                        <article class="group" data-filter="marketing">
                            <div class="relative overflow-hidden w-full aspect-[4/3] rounded-xl">
                                <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" alt="Product Design"
                                    class="w-full h-full object-cover" />
                                <div
                                    class="absolute top-0 left-0 w-full aspect-[4/3] flex items-center justify-center bg-body-light-1/75 scale-[0.15] rounded-xl opacity-0 invisible group-hover:scale-95 group-hover:opacity-100 group-hover:visible">
                                    <div class="flex flex-wrap gap-2 p-4">
                                        <div class="inline-block relative">
                                            <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}"
                                                class="portfolio-box text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-zoom-in"></i>
                                            </a>
                                        </div>
                                        <div class="portfolio-icon">
                                            <a href="javascript:void(0)"
                                                class="text-[1.75rem] text-primary-color bg-primary z-10 w-[60px] aspect-square rounded-lg text-center inline-flex items-center justify-center hover:bg-primary-light-10 hover:text-primary-color dark:hover:bg-primary-dark-10 dark:hover:text-primary-color focus:bg-primary-light-10 focus:text-primary-color dark:focus:bg-primary-dark-10 dark:focus:text-primary-color">
                                                <i class="lni lni-link"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <h4 class="mb-2">
                                    <a href="javascript:void(0)" class="text-[1.5rem] leading-tight text-inherit">Product
                                        Design</a>
                                </h4>
                                <p>
                                    Short description for the ones who look for something new.
                                    Awesome!
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing section -->
        <section id="pricing" class="section-area">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">
                        Pricing
                    </h6>
                    <h2 class="mb-6">Pricing & Plans</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available but
                        the majority have suffered alteration in some form.
                    </p>
                </div>

                <div class="row">
                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <div
                            class="rounded-xl py-12 px-9 bg-body-light-1 dark:bg-body-dark-12/10 text-center shadow-card-1 hover:shadow-lg">
                            <div>
                                <h6
                                    class="inline-block font-medium text-base mb-6 text-primary bg-primary/10 rounded-md py-2 px-8 pricing-title">
                                    Starter
                                </h6>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Iste, similique ea.
                                </p>
                                <div class="pt-8">
                                    <h2 class="font-semibold inline-block relative pl-4 text-[55px]">
                                        <span
                                            class="font-normal text-body-light-11 dark:text-body-dark-11 text-[1.25rem] absolute left-0 top-1.5">$</span>0<span
                                            class="text-[1.125rem] inline-block text-body-light-11 dark:text-body-dark-11 font-normal">/mo</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="pt-8 pb-10">
                                <a href="javascript:void(0)"
                                    class="inline-block font-medium px-6 py-3 rounded-md bg-primary/10 text-primary hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">Start
                                    Free Trial</a>
                            </div>
                            <div>
                                <ul>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i class="lni lni-checkmark-circle text-primary text-base leading-[24px]"></i>
                                        <span>Cras justo odio.</span>
                                    </li>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i class="lni lni-checkmark-circle text-primary text-base leading-[24px]"></i>
                                        <span>Dapibus ac facilisis in.</span>
                                    </li>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i
                                            class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"></i>
                                        <span>Morbi leo risus.</span>
                                    </li>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i
                                            class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"></i>
                                        <span>Excepteur sint occaecat velit.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <div class="rounded-xl py-12 px-9 bg-body-light-1 dark:bg-body-dark-12/10 text-center shadow-lg">
                            <div>
                                <h6
                                    class="inline-block font-medium text-base mb-6 text-primary-color bg-primary rounded-md py-2 px-8 pricing-title">
                                    Exclusive
                                </h6>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Iste, similique ea.
                                </p>
                                <div class="pt-8">
                                    <h2 class="font-semibold inline-block relative pl-4 text-[55px]">
                                        <span
                                            class="font-normal text-body-light-11 dark:text-body-dark-11 text-[1.25rem] absolute left-0 top-1.5">$</span>99<span
                                            class="text-[1.125rem] inline-block text-body-light-11 dark:text-body-dark-11 font-normal">/mo</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="pt-8 pb-10">
                                <a href="javascript:void(0)"
                                    class="inline-block font-medium px-6 py-3 rounded-md bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 hover:text-primary-color focus:bg-primary-light-10 dark:focus:bg-primary-dark-10 focus:text-primary-color">Purchase
                                    Now</a>
                            </div>
                            <div>
                                <ul>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i class="lni lni-checkmark-circle text-primary text-base leading-[24px]"></i>
                                        <span>Cras justo odio.</span>
                                    </li>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i class="lni lni-checkmark-circle text-primary text-base leading-[24px]"></i>
                                        <span>Dapibus ac facilisis in.</span>
                                    </li>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i class="lni lni-checkmark-circle text-primary text-base leading-[24px]"></i>
                                        <span>Morbi leo risus.</span>
                                    </li>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i
                                            class="lni lni-checkmark-circle text-body-light-11 dark:text-body-dark-11 text-base leading-[24px]"></i>
                                        <span>Excepteur sint occaecat velit.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <div
                            class="rounded-xl py-12 px-9 bg-body-light-1 dark:bg-body-dark-12/10 text-center shadow-card-1 hover:shadow-lg">
                            <div>
                                <h6
                                    class="inline-block font-medium text-base mb-6 text-primary bg-primary/10 rounded-md py-2 px-8 pricing-title">
                                    Premium
                                </h6>
                                <p>
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                    Iste, similique ea.
                                </p>
                                <div class="pt-8">
                                    <h2 class="font-semibold inline-block relative pl-4 text-[55px]">
                                        <span
                                            class="font-normal text-body-light-11 dark:text-body-dark-11 text-[1.25rem] absolute left-0 top-1.5">$</span>150<span
                                            class="text-[1.125rem] inline-block text-body-light-11 dark:text-body-dark-11 font-normal">/mo</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="pt-8 pb-10">
                                <a href="javascript:void(0)"
                                    class="inline-block font-medium px-6 py-3 rounded-md bg-primary/10 text-primary hover:bg-primary hover:text-primary-color focus:bg-primary focus:text-primary-color">Purchase
                                    Now</a>
                            </div>
                            <div>
                                <ul>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i class="lni lni-checkmark-circle text-primary text-base leading-[24px]"></i>
                                        <span>Cras justo odio.</span>
                                    </li>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i class="lni lni-checkmark-circle text-primary text-base leading-[24px]"></i>
                                        <span>Dapibus ac facilisis in.</span>
                                    </li>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i class="lni lni-checkmark-circle text-primary text-base leading-[24px]"></i>
                                        <span>Morbi leo risus.</span>
                                    </li>
                                    <li class="text-left relative mb-3 inline-flex gap-3 w-full">
                                        <i class="lni lni-checkmark-circle text-primary text-base leading-[24px]"></i>
                                        <span>Excepteur sint occaecat velit.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call action section -->
        <section id="call-action" class="section-area !bg-primary !text-primary-color">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto">
                    <h2 class="mb-8 text-inherit">
                        We love to make perfect solutions for your business
                    </h2>
                    <p>
                        Why I say old chap that is, spiffing off his nut cor blimey
                        guvnords geeza bloke knees up bobby, sloshed arse William cack
                        Richard. Bloke fanny around chesed of bum bag old lost the pilot
                        say there spiffing off his nut.
                    </p>
                    <a href="javascript:void(0)"
                        class="inline-block px-5 py-3 rounded-md mt-11 bg-green-400 text-white hover:bg-green-500 hover:text-white focus:bg-green-500 focus:text-white"
                        role="button">Get Started Now</a>
                </div>
            </div>
        </section>

        <!-- Team section -->
        <section id="team" class="section-area">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">Team</h6>
                    <h2 class="mb-6">Our Creative Team</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available but
                        the majority have suffered alteration in some form.
                    </p>
                </div>

                <div class="row">
                    <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
                        <figure
                            class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="{{ asset('img/avatar/avatar-1.jpg') }}" alt="Team picture"
                                    class="h-full w-full rounded-full object-cover" />
                                <span
                                    class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                                <span
                                    class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
                            </div>
                            <figcaption class="text-center block">
                                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                                    Garret Edwards
                                </h4>
                                <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">
                                    Art Director
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)"
                                        class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                                        <i class="lni lni-facebook-fill"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                                        <i class="lni lni-twitter-original"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                                        <i class="lni lni-instagram-original"></i>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
                        <figure
                            class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="{{ asset('img/avatar/avatar-2.jpg') }}" alt="Team picture"
                                    class="h-full w-full rounded-full object-cover" />
                                <span
                                    class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                                <span
                                    class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
                            </div>
                            <figcaption class="text-center block">
                                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                                    Jonathan Leeson
                                </h4>
                                <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">
                                    Web Developer
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)"
                                        class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                                        <i class="lni lni-facebook-fill"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                                        <i class="lni lni-twitter-original"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                                        <i class="lni lni-instagram-original"></i>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 md:col-4 lg:col-3">
                        <figure
                            class="group rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 pb-10 pt-12 shadow-card-2 hover:shadow-lg hover:-translate-y-1">
                            <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                                <img src="{{ asset('img/avatar/avatar-3.jpg') }}" alt="Team picture"
                                    class="h-full w-full rounded-full object-cover" />
                                <span
                                    class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-red-500 opacity-0 group-hover:opacity-100"></span>
                                <span
                                    class="absolute top-0 right-0 -z-10 h-10 w-10 rounded-full bg-blue-500 opacity-0 group-hover:opacity-100"></span>
                            </div>
                            <figcaption class="text-center block">
                                <h4 class="mb-1 text-lg font-semibold text-body-light-12 dark:text-body-dark-12">
                                    Joe Russell
                                </h4>
                                <p class="mb-5 text-sm text-body-light-11 dark:text-body-dark-11">
                                    UX Designer
                                </p>
                                <div class="flex items-center justify-center gap-5">
                                    <a href="javascript:void(0)"
                                        class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                                        <i class="lni lni-facebook-fill"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                                        <i class="lni lni-twitter-original"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="text-body-light-10 dark:text-body-dark-10 hover:text-primary">
                                        <i class="lni lni-instagram-original"></i>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials section -->
        <section id="testimonials" class="section-area">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">
                        Client Reviews
                    </h6>
                    <h2 class="mb-6">Our Testimonials</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available but
                        the majority have suffered alteration in some form.
                    </p>
                </div>

                <div class="swiper testimonial-carousel common-carousel scroll-revealed">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8">
                                <p class="mb-6 text-base text-body-light-11 dark:text-body-dark-11">
                                    "Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community."
                                </p>
                                <figure class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden">
                                        <img src="{{ asset('img/avatar/avatar-4.jpg') }}" alt="Testimonial picture"
                                            class="h-full w-full rounded-full object-cover" />
                                    </div>
                                    <figcaption class="flex-grow">
                                        <h3 class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11">
                                            Ralf Nacht
                                        </h3>
                                        <p class="text-xs text-body-light-10 dark:text-body-dark-10">
                                            Web Entrepreneur
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div
                                class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8">
                                <p class="mb-6 text-base text-body-light-11 dark:text-body-dark-11">
                                    "Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community."
                                </p>
                                <figure class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden">
                                        <img src="{{ asset('img/avatar/avatar-5.jpg') }}" alt="Testimonial picture"
                                            class="h-full w-full rounded-full object-cover" />
                                    </div>
                                    <figcaption class="flex-grow">
                                        <h3 class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11">
                                            Sebastian Toft
                                        </h3>
                                        <p class="text-xs text-body-light-10 dark:text-body-dark-10">
                                            Web Developer
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div
                                class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8">
                                <p class="mb-6 text-base text-body-light-11 dark:text-body-dark-11">
                                    "Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community."
                                </p>
                                <figure class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden">
                                        <img src="{{ asset('img/avatar/avatar-6.jpg') }}" alt="Testimonial picture"
                                            class="h-full w-full rounded-full object-cover" />
                                    </div>
                                    <figcaption class="flex-grow">
                                        <h3 class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11">
                                            Bao Shen
                                        </h3>
                                        <p class="text-xs text-body-light-10 dark:text-body-dark-10">
                                            UI/UX Designer
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div
                                class="rounded-xl bg-body-light-1 dark:bg-body-dark-12/10 px-5 py-8 shadow-card-2 sm:px-8">
                                <p class="mb-6 text-base text-body-light-11 dark:text-body-dark-11">
                                    "Our members are so impressed. It's intuitive. It's clean.
                                    It's distraction free. If you're building a community."
                                </p>
                                <figure class="flex items-center gap-4">
                                    <div class="h-[50px] w-[50px] overflow-hidden">
                                        <img src="{{ asset('img/avatar/avatar-7.jpg') }}" alt="Testimonial picture"
                                            class="h-full w-full rounded-full object-cover" />
                                    </div>
                                    <figcaption class="flex-grow">
                                        <h3 class="text-sm font-semibold text-body-light-11 dark:text-body-dark-11">
                                            Emanuel Velzeboer
                                        </h3>
                                        <p class="text-xs text-body-light-10 dark:text-body-dark-10">
                                            Graphics Designer
                                        </p>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="mt-[60px] flex items-center justify-center gap-1">
                        <div class="swiper-button-prev">
                            <i class="lni lni-arrow-left"></i>
                        </div>
                        <div class="swiper-button-next">
                            <i class="lni lni-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ section -->
        <section id="faq" class="section-area relative">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">FAQ</h6>
                    <h2 class="mb-6">Any Questions? Look Here</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available but
                        the majority have suffered alteration in some form.
                    </p>
                </div>

                <div class="grid gap-x-8 gap-y-12 grid-cols-1 lg:grid-cols-2">
                    <div class="scroll-revealed flex">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]">
                            <i class="lni lni-question-circle"></i>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl">
                                Lorem ipsum dolor sit amet?
                            </h3>
                            <p class="text-body-light-11 dark:text-body-dark-11">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Corrupti minus a eaque labore delectus quas exercitationem
                                iusto doloribus blanditiis assumenda.
                            </p>
                        </div>
                    </div>

                    <div class="scroll-revealed flex">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]">
                            <i class="lni lni-question-circle"></i>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl">
                                Lorem ipsum dolor sit amet?
                            </h3>
                            <p class="text-body-light-11 dark:text-body-dark-11">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Corrupti minus a eaque labore delectus quas exercitationem
                                iusto doloribus blanditiis assumenda.
                            </p>
                        </div>
                    </div>

                    <div class="scroll-revealed flex">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]">
                            <i class="lni lni-question-circle"></i>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl">
                                Lorem ipsum dolor sit amet?
                            </h3>
                            <p class="text-body-light-11 dark:text-body-dark-11">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Corrupti minus a eaque labore delectus quas exercitationem
                                iusto doloribus blanditiis assumenda.
                            </p>
                        </div>
                    </div>

                    <div class="scroll-revealed flex">
                        <div
                            class="mr-4 flex h-[50px] w-full max-w-[50px] items-center justify-center rounded-xl bg-primary text-primary-color text-[28px] sm:mr-6 sm:h-[60px] sm:max-w-[60px] sm:text-[32px]">
                            <i class="lni lni-question-circle"></i>
                        </div>
                        <div class="w-full">
                            <h3
                                class="mb-6 text-xl font-semibold text-body-light-12 dark:text-body-dark-12 sm:text-2xl lg:text-xl xl:text-2xl">
                                Lorem ipsum dolor sit amet?
                            </h3>
                            <p class="text-body-light-11 dark:text-body-dark-11">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Corrupti minus a eaque labore delectus quas exercitationem
                                iusto doloribus blanditiis assumenda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <span class="absolute left-5 top-5 -z-[1]">
                    <svg class="w-20 h-auto fill-teal-500" version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="1280.000000pt" height="1280.000000pt" viewBox="0 0 1280.000000 1280.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" stroke="none">
                            <path
                                d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
                                                                                -255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
                                                                                16z" />
                            <path
                                d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
                                                                                -319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
                                                                                -319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
                                                                                -255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
                                                                                16z" />
                            <path
                                d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
                                                                                -319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
                                                                                -319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                        </g>
                    </svg>
                </span>
                <span class="absolute right-5 bottom-5 -z-[1]">
                    <svg class="w-20 h-auto fill-indigo-500" version="1.0" xmlns="http://www.w3.org/2000/svg"
                        width="1280.000000pt" height="1280.000000pt" viewBox="0 0 1280.000000 1280.000000"
                        preserveAspectRatio="xMidYMid meet">
                        <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" stroke="none">
                            <path
                                d="M550 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path d="M1830 12465 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
                                                                                -255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
                                                                                16z" />
                            <path
                                d="M3110 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 12465 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
                                                                                -319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M12070 12465 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
                                                                                -319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M550 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path d="M1830 11185 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 254
                                                                                -255 194 -41 395 142 375 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217
                                                                                16z" />
                            <path
                                d="M3110 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 11185 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
                                                                                -319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M12070 11185 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142
                                                                                -319 107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M550 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 9905 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 8625 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 7345 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 6065 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M4390 4785 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M5670 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 4785 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 4785 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M4390 3505 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M5670 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 3505 c-151 -50 -253 -216 -222 -362 25 -119 136 -230 255 -255
                                                                                193 -41 394 142 374 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 3505 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M4390 2225 c-105 -35 -200 -141 -222 -248 -25 -117 32 -244 142 -319
                                                                                107 -74 229 -75 337 -3 177 118 201 338 53 485 -85 86 -207 119 -310 85z" />
                            <path
                                d="M5670 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 2225 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M550 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M1830 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M3110 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M4390 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M5670 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M6950 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M8230 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M9510 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369 -369
                                                                                155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M10790 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                            <path
                                d="M12070 945 c-105 -35 -200 -141 -222 -248 -43 -206 163 -412 369
                                                                                -369 155 32 275 190 260 339 -11 105 -90 213 -190 262 -61 29 -155 36 -217 16z" />
                        </g>
                    </svg>
                </span>
            </div>
        </section>

        <!-- Blog section -->
        <section id="blog" class="section-area">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">Blog</h6>
                    <h2 class="mb-6">Latest News & Blog</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available but
                        the majority have suffered alteration in some form.
                    </p>
                </div>

                <div class="row">
                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <article class="group">
                            <div class="relative">
                                <a href="javascript:void(0)" class="w-full aspect-[3/2] rounded-xl overflow-hidden block">
                                    <img src="{{ asset('img/thumbnail/thumbnail-1.jpg') }}" alt="Thumbnail"
                                        class="w-full h-full object-cover group-hover:scale-[1.05] group-hover:rotate-[2deg]" />
                                </a>
                            </div>
                            <span class="block mt-6 w-full text-sm text-body-light-10 dark:text-body-dark-10">Joe Russell -
                                17 Agt 2024</span>
                            <h4 class="mb-6 mt-3 font-semibold text-[1.5rem]">
                                <a href="javascript:void(0)" class="text-body-light-12 dark:text-body-dark-12">Make your
                                    team a Design driven company</a>
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard.
                            </p>
                        </article>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <article class="group">
                            <div class="relative">
                                <a href="javascript:void(0)" class="w-full aspect-[3/2] rounded-xl overflow-hidden block">
                                    <img src="{{ asset('img/thumbnail/thumbnail-2.jpg') }}" alt="Thumbnail"
                                        class="w-full h-full object-cover group-hover:scale-[1.05] group-hover:rotate-[2deg]" />
                                </a>
                            </div>
                            <span class="block mt-6 w-full text-sm text-body-light-10 dark:text-body-dark-10">Joe Russell -
                                17 Agt 2024</span>
                            <h4 class="mb-6 mt-3 font-semibold text-[1.5rem]">
                                <a href="javascript:void(0)" class="text-body-light-12 dark:text-body-dark-12">The newest
                                    web framework that changed the world</a>
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard.
                            </p>
                        </article>
                    </div>

                    <div class="scroll-revealed col-12 sm:col-6 lg:col-4">
                        <article class="group">
                            <div class="relative">
                                <a href="javascript:void(0)" class="w-full aspect-[3/2] rounded-xl overflow-hidden block">
                                    <img src="{{ asset('img/thumbnail/thumbnail-3.jpg') }}" alt="Thumbnail"
                                        class="w-full h-full object-cover group-hover:scale-[1.05] group-hover:rotate-[2deg]" />
                                </a>
                            </div>
                            <span class="block mt-6 w-full text-sm text-body-light-10 dark:text-body-dark-10">Joe Russell -
                                17 Agt 2024</span>
                            <h4 class="mb-6 mt-3 font-semibold text-[1.5rem]">
                                <a href="javascript:void(0)" class="text-body-light-12 dark:text-body-dark-12">5 ways to
                                    improve user retention for your startup</a>
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients section -->
        <section id="clients" class="section-area">
            <div class="container">
                <div class="scroll-revealed text-center max-w-[550px] mx-auto mb-12">
                    <h6 class="mb-2 block text-lg font-semibold text-primary">
                        Clients
                    </h6>
                    <h2 class="mb-6">Our Awesome Clients</h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available but
                        the majority have suffered alteration in some form.
                    </p>
                </div>

                <div class="">
                    <div class="row">
                        <div class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3">
                            <img src="{{ asset('img/brand/airbnb.svg') }}" alt="Brand Logo Image"
                                class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0" />
                        </div>
                        <div class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3">
                            <img src="{{ asset('img/brand/coca-cola.svg') }}" alt="Brand Logo Image"
                                class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0" />
                        </div>
                        <div class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3">
                            <img src="{{ asset('img/brand/facebook.svg') }}" alt="Brand Logo Image"
                                class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0" />
                        </div>
                        <div class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3">
                            <img src="{{ asset('img/brand/mandiri.svg') }}" alt="Brand Logo Image"
                                class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0" />
                        </div>
                        <div class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3">
                            <img src="{{ asset('img/brand/shopware.svg') }}" alt="Brand Logo Image"
                                class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0" />
                        </div>
                        <div class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3">
                            <img src="{{ asset('img/brand/spotify.svg') }}" alt="Brand Logo Image"
                                class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0" />
                        </div>
                        <div class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3">
                            <img src="{{ asset('img/brand/tunnel-id.svg') }}" alt="Brand Logo Image"
                                class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0" />
                        </div>
                        <div class="scroll-revealed text-center p-4 col-12 sm:col-6 md:col-4 lg:col-3">
                            <img src="{{ asset('img/brand/walmart.svg') }}" alt="Brand Logo Image"
                                class="h-[40px] inline-block grayscale dark:invert hover:grayscale-0 hover:invert-0" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact section -->
        <section id="contact" class="section-area">
            <div class="container">
                <div class="row">
                    <div class="col-12 xl:col-4">
                        <div class="row">
                            <div class="col-12 md:col-6 xl:col-12">
                                <div
                                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg">
                                    <div>
                                        <i
                                            class="lni lni-phone w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-[1.25rem] text-primary mb-3">Contact</h4>
                                        <p class="m-0">0984537278623</p>
                                        <p class="m-0">yourmail@gmail.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 md:col-6 xl:col-12">
                                <div
                                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg">
                                    <div>
                                        <i
                                            class="lni lni-map-marker w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-[1.25rem] text-primary mb-3">Address</h4>
                                        <p class="m-0">175 5th Ave, New York, NY 10010</p>
                                        <p class="m-0">United States</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 md:col-6 xl:col-12">
                                <div
                                    class="scroll-revealed py-5 px-6 rounded-xl shadow-card-1 bg-body-light-1 dark:bg-primary-dark-2 flex gap-6 hover:shadow-lg">
                                    <div>
                                        <i
                                            class="lni lni-alarm-clock w-[50px] h-[50px] inline-flex items-center justify-center rounded-lg text-[1.25rem] bg-primary text-primary-color"></i>
                                    </div>
                                    <div>
                                        <h4 class="text-[1.25rem] text-primary mb-3">Schedule</h4>
                                        <p class="m-0">24 Hours / 7 Days Open</p>
                                        <p class="m-0">Office time: 10:00 AM - 5:30 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 xl:col-8">
                        <div
                            class="scroll-revealed bg-body-light-1 dark:bg-primary-dark-2 rounded-xl py-8 sm:py-12 px-6 sm:px-10 z-10 relative shadow-card-1 hover:shadow-lg">
                            <div class="text-center max-w-[550px] mx-auto mb-12">
                                <h6 class="mb-2 block text-lg font-semibold text-primary">
                                    Get in Touch
                                </h6>
                                <h2 class="mb-3">Ready to Get Started</h2>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus
                                    quiblanditiis praesentium
                                </p>
                            </div>

                            <form action="#" method="POST" class="flex flex-col gap-6">
                                <div class="row">
                                    <div class="col-12 md:col-6">
                                        <input type="text" name="name"
                                            class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                                            placeholder="Name" required />
                                    </div>

                                    <div class="col-12 md:col-6">
                                        <input type="email" name="email"
                                            class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                                            placeholder="Email" required />
                                    </div>

                                    <div class="col-12 md:col-6">
                                        <input type="text" name="phone"
                                            class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                                            placeholder="Phone" required />
                                    </div>

                                    <div class="col-12 md:col-6">
                                        <input type="text" name="subject"
                                            class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                                            placeholder="Subject" required />
                                    </div>

                                    <div class="col-12">
                                        <textarea name="message" rows="5"
                                            class="block w-full px-5 py-3 rounded-md border border-solid border-alpha-light dark:border-alpha-dark text-inherit text-base focus:border-primary"
                                            placeholder="Type your message" required></textarea>
                                    </div>

                                    <div class="col-12">
                                        <div class="w-full text-center">
                                            <button type="submit"
                                                class="inline-block px-5 py-3 rounded-md text-base bg-primary text-primary-color hover:bg-primary-light-10 dark:hover:bg-primary-dark-10 focus:bg-primary-light-10 dark:focus:bg-primary-dark-10">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map section -->
        <section id="map" class="w-full h-[500px] overflow-hidden -mt-[12rem]">
            <object
                data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.0094028113572!2d98.67188956289421!3d3.583155328672593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cc1c3eb2fd%3A0x23d431c8a6908262!2sMedan%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1723787393945!5m2!1sid!2sid"
                class="border-0 w-full h-full"></object>
        </section>
    </main>
    <!-- End -->
@endsection
