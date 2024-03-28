 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
     <div class="carousel-inner">
         <div class="carousel-item active" style="background-image: url('{{ asset('assets/images/slider2.jpg') }}')">
             <div class="backdrop"></div>
             <div class="carousel-caption">
                 <div class="carousel-caption-left">
                     <h1>First slide label</h1>
                     <p>Some representative placeholder content for the first slide.</p>
                 </div>
                 <div class="carousel-caption-right">
                     <img src="{{ asset('assets/images/orion-13w.jpg') }}" alt="Product 1">
                 </div>
             </div>
         </div>
         <div class="carousel-item" style="background-image: url('{{ asset('assets/images/slider1.jpeg') }}')">
             <div class="backdrop"></div>
             <div class="carousel-caption">
                 <div class="carousel-caption-left">
                     <h1>First slide label</h1>
                     <p>Some representative placeholder content for the first slide.</p>
                 </div>
                 <div class="carousel-caption-right">
                     <img src="{{ asset('assets/images/orion-30W-t-shape.jpg') }}" alt="Product 2">
                 </div>
             </div>
         </div>
         <div class="carousel-item" style="background-image: url('{{ asset('assets/images/slider3.jpeg') }}')">
             <div class="backdrop"></div>
             <div class="carousel-caption">
                 <div class="carousel-caption-left">
                     <h1>First slide label</h1>
                     <p>Some representative placeholder content for the first slide.</p>
                 </div>
                 <div class="carousel-caption-right">
                     <img src="{{ asset('assets/images/orion-40W.jpg') }}" alt="Product 2">
                 </div>
             </div>
         </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
         <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
         <img src="{{ asset('assets/images/left.svg') }}" alt="">
         <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
         <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
         <img src="{{ asset('assets/images/left.svg') }}" alt="" class="right-svg">
         <span class="visually-hidden">Next</span>
     </button>
 </div>