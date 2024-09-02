@extends('layout.master')

@section('content')
@include('partials.banner')
@include('partials.video-section')
@endsection
@section('extra-js')

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function() {
    // $('.video-thumbnail').click(function() {
    //     var videoSrc = $(this).data('src');
    //     console.log('videoSrc', videoSrc)
    //     $('#main-video').attr('src', videoSrc);
    // });
    // $('.swiper-wrapper').slick({
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
    //   arrows: false,
    //   fade: true,
    //   asNavFor: '.multi-video-carousel'
    // });

    $('.multi-video-carousel').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        // asNavFor: '.swiper-wrapper',
        // dots: true,
        // centerMode: true,
        // focusOnSelect: true
    });
});

// <script type="text/javascript">
//   $(document).ready(function(){
//     $('.slider-for').slick({
//       slidesToShow: 1,
//       slidesToScroll: 1,
//       arrows: false,
//       fade: true,
//       asNavFor: '.slider-nav'
//     });
//     $('.multi-video-carousel').slick({
//         slidesToShow: 4,
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 2000,
//         asNavFor: '.slider-for',
//         dots: true,
//         centerMode: true,
//         focusOnSelect: true
//     });
//   });
</script>

@endsection