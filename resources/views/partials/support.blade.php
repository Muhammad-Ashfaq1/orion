@extends('layout.master')
@section('content')
    <div class="container-fluid full-screen d-flex justify-content-center align-items-center flex-column my-5">
        <video id="video" width="400" height="300" autoplay></video>
        <canvas id="canvas" width="400" height="300"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsqr@1.0.0/dist/jsQR.min.js"></script>
    <script>
        $(document).ready(function() {
            const video = document.getElementById('video');
            const canvas = document.getElementById('canvas');
            const context = canvas.getContext('2d', { willReadFrequently: true });

            navigator.mediaDevices.getUserMedia({ video: true })
                .then(function(stream) {
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
            const video = document.getElementById('video');
            const canvas = document.getElementById('canvas');
            const context = canvas.getContext('2d');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
            const qrCodeRegion = detectQRCodeRegion(imageData);

            if (qrCodeRegion) {
                const qrCode = jsQR(qrCodeRegion.data, qrCodeRegion.width, qrCodeRegion.height);
                if (qrCode) {
                    try {
                        const qrData = JSON.parse(qrCode.data);
                        if (isOrionPvtQRCode(qrData)) {
                            // Process valid Orion Pvt QR code
                            const validUpto = new Date(qrData.Valid_Upto);
                            const currentDate = new Date();

                            let message;
                            let icon;
                            if (validUpto > currentDate) {
                                message = `Congratulations! Your warranty is valid until ${formatDate(validUpto)}.`;
                                icon = 'success';
                            } else {
                                message = `Sorry, your warranty expired on ${formatDate(validUpto)}.`;
                                icon = 'error';
                            }

                            // Show SweetAlert message
                            Swal.fire({
                                icon: icon,
                                title: message,
                                showConfirmButton: false,
                                timer: 5000, // Adjust as needed
                                allowOutsideClick: false,
                                showCloseButton: true,
                                closeButtonHtml: '&times;',
                                customClass: {
                                    popup: 'larger-swal'
                                }
                            });
                        } else {
                            // Show message for invalid QR code data from Orion Pvt
                            showInvalidQRCodeMessage();
                        }
                    } catch (error) {
                        // Show message for invalid JSON format
                        showInvalidQRCodeMessage();
                    }
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

        function formatDate(date) {
            const options = { day: 'numeric', month: 'long', year: 'numeric' };
            return date.toLocaleDateString(undefined, options);
        }

        function isOrionPvtQRCode(qrData) {
            return qrData.Product_Name && qrData.Warranty_Start && qrData.Valid_Upto;
        }

        function showInvalidQRCodeMessage() {
            Swal.fire({
                icon: 'error',
                title: 'Invalid QR Code',
                text: 'Please use a valid QR code from Orion Pvt.',
                confirmButtonText: 'Close',
                customClass: {
                    popup: 'larger-swal'
                }
            });
        }
    </script>

    <style>
        .larger-swal {
            font-size: 1.5rem;
        }
    </style>
@endsection
