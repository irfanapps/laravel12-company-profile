 <!-- Header -->
 <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
     <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
         <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
             <h1 class="h1-large mb-5">Team management mobile application</h1>
             <p class="p-large mb-8">Start getting things done together with your team based on Pavo's revolutionary team
                 management features</p>
             <a class="btn-solid-lg" href="{{ route('business') }}">
                 {{-- <i class="fab fa-apple"></i> --}}
                 Business</a>
             <a class="btn-solid-lg secondary" href="#your-link">
                 {{-- <i class="fab fa-google-play"></i> --}}
                 Download</a>
         </div>

         <div class="xl:text-right">
             <img class="inline" src="{{ asset('images/header-smartphone.png') }}" alt="alternative" />
         </div>

     </div> <!-- end of container -->
 </header> <!-- end of header -->
 <!-- end of header -->
