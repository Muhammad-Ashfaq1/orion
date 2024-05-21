@extends('layout.master')
@section('content')
<div class="container-fluid full-screen d-flex justify-content-center align-items-center flex-column my-5">
    <video id="video" width="400" height="300" autoplay></video>
    <canvas id="canvas" style="display:none;"></canvas>
</div>

<script>
$(document).ready(function() {
    navigator.mediaDevices.getUserMedia({
            video: true
        })
        .then(function(stream) {
            const video = $('#video')[0];
            video.srcObject = stream;
            video.onloadedmetadata = function() {
                video.play();
            };
        })
        .catch(function(err) {
            console.error('Error accessing camera:', err);
        });

    // Call captureImage every 2 seconds
    setInterval(captureImage, 2000);
});

function captureImage() {
    const video = $('#video')[0];
    const canvas = $('#canvas')[0];
    const context = canvas.getContext('2d');
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;
    context.drawImage(video, 0, 0, canvas.width, canvas.height);

    const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
    const qrCodeRegion = detectQRCodeRegion(imageData);

    if (qrCodeRegion) {
        const qrCode = jsQR(qrCodeRegion.data, qrCodeRegion.width, qrCodeRegion.height);
        if (qrCode) {
            console.log('QR Code detected:', qrCode.data);
            const base64Image = canvas.toDataURL('image/jpeg');
            console.log('Base64 Image:', base64Image);
            const qrCodeDetail = {
                data: qrCode.data,
                base64Image: base64Image
            };
            console.log('QR Code Detail:', qrCodeDetail);
        } else {
            console.log('No QR Code found in the isolated region.');
        }
    } else {
        console.log('No QR Code found.');
    }
}

function detectQRCodeRegion(imageData) {
    return {
        data: imageData.data,
        width: imageData.width,
        height: imageData.height
    };
}
</script>
@endsection