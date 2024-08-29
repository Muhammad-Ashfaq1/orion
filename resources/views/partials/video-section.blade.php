<div class="container-fluid videos ps-0" id="videos">
    <div class="p-0">
        <div class="row pt-5">
            <div class="col-lg-12 pe-0">
                <div class="video-container">
                    <video id="main-video" src="{{ asset('assets/videos/video1.mp4') }}" controls muted
                        autoplay></video>
                </div>
            </div>
            <div class="col-lg-12 p-0">
                <div class="row video-thumbnail-container multi-video-carousel w-100">
                    <div class="col-md-3">
                        <div class="video-thumbnail" data-src="{{ asset('assets/videos/video2.mp4') }}">
                            <img src="{{ asset('assets/images/thumbnail.png') }}" class="img-fluid" alt="Thumbnail 5">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="video-thumbnail" data-src="{{ asset('assets/videos/video3.mp4') }}">
                            <img src="{{ asset('assets/images/thumbnail.png') }}" class="img-fluid" alt="Thumbnail 5">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="video-thumbnail" data-src="{{ asset('assets/videos/video4.mp4') }}">
                            <img src="{{ asset('assets/images/thumbnail.png') }}" class="img-fluid" alt="Thumbnail 5">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="video-thumbnail" data-src="{{ asset('assets/videos/Video5.mp4') }}">
                            <img src="{{ asset('assets/images/thumbnail.png') }}" class="img-fluid" alt="Thumbnail 5">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="video-thumbnail" data-src="{{ asset('assets/videos/video6.mp4') }}">
                            <img src="{{ asset('assets/images/thumbnail.png') }}" class="img-fluid" alt="Thumbnail 5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function() {
    $('.video-thumbnail').click(function() {
        var videoSrc = $(this).data('src');
        console.log('videoSrc', videoSrc)
        $('#main-video').attr('src', videoSrc);
    });

    $('.multi-video-carousel').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
});

</script>
