<div class="container-fluid videos ps-0" id="videos">
    <div class="p-0">
        <div class="row pt-5">
            <div class="col-lg-12 pe-0">
                <div class="video-container">
                    <video id="main-video" src="{{ asset('assets/videos/video1.mp4') }}" controls muted
                        autoplay></video>
                </div>
            </div>
            <div class="col-lg-12 ps-0">
                <div class="row video-thumbnail-container">
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

<script>
$(document).ready(function() {
    $('.video-thumbnail').click(function() {
        var videoSrc = $(this).data('src');
        console.log('videoSrc', videoSrc)
        $('#main-video').attr('src', videoSrc);
    });
});
</script>