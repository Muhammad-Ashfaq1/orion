<div class="container-fluid videos" id="videos">
    <div class="container">
        <div class="row py-5 my-5 mx-2">
            <div class="col-lg-6">
                <div class="video-container">
                    <video id="main-video" src="{{ asset('assets/videos/video1.mp4') }}" controls muted
                        autoplay></video>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="row video-thumbnail-container">
                    <div class="col-md-6 col-12 mb-2">
                        <div class="video-thumbnail" data-src="{{ asset('assets/videos/video2.mp4') }}">
                            <img src="{{ asset('assets/images/thumbnail.png') }}" class="img-fluid" alt="Thumbnail 5">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <div class="video-thumbnail" data-src="{{ asset('assets/videos/video1.mp4') }}">
                            <img src="{{ asset('assets/images/thumbnail.png') }}" class="img-fluid" alt="Thumbnail 5">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <div class="video-thumbnail" data-src="{{ asset('assets/videos/video2.mp4') }}">
                            <img src="{{ asset('assets/images/thumbnail.png') }}" class="img-fluid" alt="Thumbnail 5">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mb-2">
                        <div class="video-thumbnail" data-src="{{ asset('assets/videos/video1.mp4') }}">
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