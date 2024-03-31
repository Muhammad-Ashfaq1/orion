 <div class="">
     <div class="swiper-container">
         <!-- Additional required wrapper -->
         <div class="swiper-wrapper">
             <!-- Slides -->
             <div class="swiper-slide">
                 <div class="backdrop"></div>
                 <img src="{{ asset('assets/images/banner1.jpeg') }}" alt="" class="mainImg">
                 <div class="swiper-caption">
                     <div class="row ">
                         <div class="col-md-6 col-12">
                             <!-- <h1>New Panel Range</h1>
                             <h3>FIALUX BACKLIT PANEL</h3>
                             <a href="">More Detail</a> -->
                         </div>
                         <div class="col-md-6 col-12 text-center">
                             <!-- <img src="{{ asset('assets/images/orion-30W-t-shape.jpg') }}" alt="Product 2"> -->
                         </div>
                     </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="backdrop"></div>
                 <img src="{{ asset('assets/images/slider4.jpeg') }}" alt="" class="mainImg">
                 <div class="swiper-caption">
                     <div class="row ">
                         <div class="col-md-6 col-12">
                             <!-- <h1>New Panel Range</h1>
                             <h3>FIALUX BACKLIT PANEL</h3>
                             <a href="">More Detail</a> -->
                         </div>
                         <div class="col-md-6 col-12 text-center">
                             <!-- <img src="{{ asset('assets/images/orion-30W-t-shape.jpg') }}" alt="Product 2"> -->
                         </div>
                     </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="backdrop"></div>
                 <img src="{{ asset('assets/images/slider5.jpeg') }}" alt="" class="mainImg">
                 <div class="swiper-caption">
                     <div class="row ">
                         <div class="col-md-6 col-12 ">
                             <!-- <h1>New Panel Range</h1>
                             <h3>FIALUX BACKLIT PANEL</h3>
                             <a href="">More Detail</a> -->
                         </div>
                         <div class="col-md-6 col-12  text-center">
                             <!-- <img src="{{ asset('assets/images/orion-13w.jpg') }}" alt="Product 2"> -->
                         </div>
                     </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="backdrop"></div>
                 <img src="{{ asset('assets/images/slider1.jpeg') }}" alt="" class="mainImg">
                 <div class="swiper-caption">
                     <div class="row ">
                         <div class="col-md-6 col-12 ">
                             <!-- <h1>New Panel Range</h1>
                             <h3>FIALUX BACKLIT PANEL</h3>
                             <a href="">More Detail</a> -->
                         </div>
                         <div class="col-md-6 col-12  text-center">
                             <!-- <img src="{{ asset('assets/images/orion-40W.jpg') }}" alt="Product 2"> -->
                         </div>
                     </div>
                 </div>
             </div>
             <div class="swiper-slide">
                 <div class="backdrop"></div>
                 <img src="{{ asset('assets/images/slider3.jpeg') }}" alt="" class="mainImg">
                 <div class="swiper-caption">
                     <div class="row ">
                         <div class="col-md-6 col-12 ">
                             <!-- <h1>New Panel Range</h1>
                             <h3>FIALUX BACKLIT PANEL</h3>
                             <a href="">More Detail</a> -->
                         </div>
                         <div class="col-md-6 col-12  text-center">
                             <!-- <img src="{{ asset('assets/images/orion-40W.jpg') }}" alt="Product 2"> -->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

         <div class="scroll-down">
             <a class="" href="#videos">
                 '
             </a>
             <div>
                 scroll for more
             </div>
         </div>
     </div>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

     <script>
     const mySwiper = new Swiper('.swiper-container', {
         direction: 'horizontal',
         loop: true,
         speed: 800,
         autoplay: {
             delay: 3000,
             disableOnInteraction: false,
         },

         // Navigation arrows
         navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
         },
     })
     </script>