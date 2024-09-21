// $(document).ready(function() {


// });
// // function toggleFormElements() {
// //     var selectedType = $('#js-product-type-name-dropdown').val();

// //     var showFields = [];
// //     var hideFields = [];

// //     if (selectedType == 1 || selectedType == 13) {
// //         showFields = ['#model-name-container', '#wattage-container', '#initial-lumen-container', '#stable-lumen-container', '#ra-container', '#beam-angle-container', '#life-container', '#guarantee-container', '#lamp-size-h1-container', '#lamp-size-h2-container', '#lamp-size-d-container'];
// //         hideFields = ['#shape-container', '#inch-container', '#d-round-container', '#d-square-container', '#cut-round-container', '#cut-square-container', '#h-container', '#lamp-size-w-container', '#lamp-size-l-container', '#lamp-size-i-container', '#lamp-size-t-container'];
// //     } else if (selectedType == 3) {
// //         showFields = ['#model-name-container', '#shape-container', '#inch-container', '#wattage-container', '#initial-lumen-container', '#stable-lumen-container', '#ra-container', '#life-container', '#guarantee-container', '#d-round-container', '#d-square-container', '#cut-round-container', '#cut-square-container', '#h-container'];
// //         hideFields = ['#beam-angle-container', '#lamp-size-h1-container', '#lamp-size-h2-container', '#lamp-size-d-container', '#lamp-size-w-container', '#lamp-size-l-container', '#lamp-size-i-container', '#lamp-size-t-container'];
// //     } else if (selectedType == 2) {
// //         showFields = ['#model-name-container', '#shape-container', '#inch-container', '#wattage-container', '#initial-lumen-container', '#stable-lumen-container', '#ra-container', '#life-container', '#guarantee-container', '#d-round-container', '#cut-round-container', '#cut-square-container', '#h-container'];
// //         hideFields = ['#beam-angle-container', '#lamp-size-h1-container', '#lamp-size-h2-container', '#lamp-size-d-container', '#lamp-size-w-container', '#lamp-size-l-container', '#lamp-size-i-container', '#lamp-size-t-container', '#d-square-container', '#cut-square-container'];
// //     } else if (selectedType == 7 || selectedType == 12) {
// //         showFields = ['#model-name-container', '#wattage-container', '#initial-lumen-container', '#stable-lumen-container', '#ra-container', '#life-container', '#guarantee-container', '#lamp-size-l-container', '#lamp-size-w-container'];
// //         hideFields = ['#shape-container', '#inch-container', '#d-round-container', '#d-square-container', '#cut-round-container', '#cut-square-container', '#h-container', '#beam-angle-container', '#lamp-size-h1-container', '#lamp-size-h2-container', '#lamp-size-d-container', '#lamp-size-i-container', '#lamp-size-t-container'];
// //     } else if (selectedType == 15 || selectedType == 8) {
// //         showFields = ['#model-name-container', '#wattage-container', '#initial-lumen-container', '#stable-lumen-container', '#ra-container', '#life-container', '#guarantee-container', '#lamp-size-i-container', '#lamp-size-l-container'];
// //         hideFields = ['#shape-container', '#inch-container', '#d-round-container', '#d-square-container', '#cut-round-container', '#cut-square-container', '#h-container', '#beam-angle-container', '#lamp-size-h1-container', '#lamp-size-h2-container', '#lamp-size-d-container', '#lamp-size-w-container', '#lamp-size-t-container'];
// //     } else if (selectedType == 12) {
// //         showFields = ['#model-name-container', '#wattage-container', '#initial-lumen-container', '#stable-lumen-container', '#ra-container', '#life-container', '#guarantee-container', '#lamp-size-l-container', '#lamp-size-w-container'];
// //         hideFields = ['#shape-container', '#inch-container', '#d-round-container', '#d-square-container', '#cut-round-container', '#cut-square-container', '#h-container', '#beam-angle-container', '#lamp-size-h1-container', '#lamp-size-h2-container', '#lamp-size-d-container', '#lamp-size-i-container', '#lamp-size-t-container'];
// //     } else {
// //         showFields = ['#model-name-container', '#wattage-container', '#initial-lumen-container', '#stable-lumen-container', '#ra-container', '#beam-angle-container', '#life-container', '#guarantee-container', '#lamp-size-h1-container', '#lamp-size-h2-container', '#lamp-size-d-container', '#shape-container', '#inch-container', '#d-round-container', '#d-square-container', '#cut-round-container', '#cut-square-container', '#h-container', '#lamp-size-w-container', '#lamp-size-l-container', '#lamp-size-i-container', '#lamp-size-t-container'];
// //     }

// //     showFields.forEach(function(field) {
// //         $(field).show();
// //     });

// //     hideFields.forEach(function(field) {
// //         $(field).hide();
// //         $(field).find('input').val('');
// //     });
// // }

// // toggleFormElements();

// $('#js-product-type-name-dropdown').change(function() {
//     toggleFormElements();
// });

// $(document).on('click', '.js-add-product', function(el) {
//     $('#js-add-product-modal').modal('show');
//     getAllProductType();
//     Product_models(productTypeId);

// });


// $('#js-product-form').validate({
//     submitHandler: function(form) {
//         event.preventDefault();
//         var formData = new FormData($('#js-product-form')[0]);
//         $.ajax({

//             url: '/product/add',
//             type: 'POST',
//             data: formData,
//             cache: false,
//             contentType: false,
//             processData: false,
//             beforeSend: function(xhr) {
//                 xhr.setRequestHeader('Accept', 'application/json');
//                 xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));

//             },

//             success: function(data) {
//                 $('#js-add-product-modal').modal('hide');
//                 $('#js-product-form')[0].reset();
//                 toastr.success('Product saved successfully');
//                 location.reload();
//             },
//             error: function(xhr, status, error) {
//                 handleAjaxError(xhr);
//             }
//         });
//     }
// });
// //product types

// function getAllProductType() {

//     $.ajax({
//         url: '/product/get-all-product-type',
//         method: 'GET',
//         dataType: 'json',
//         async: false,
//         success: function(data) {

//             $('#js-product-type-name-dropdown').empty();

//             $('#js-product-type-name-dropdown').append('<option value="">Choose...</option>');
//             if (Array.isArray(data)) {
//                 $.each(data, function(index, value) {
//                     $('#js-product-type-name-dropdown').append(
//                         '<option value="' + value.id + '">' + value.type_name + '</option>'
//                     );
//                 });
//             } else if (typeof data === 'object') {
//                 $('#js-product-type-name-dropdown').append('<option value="' + data.id + '">' + value.type_name + '</option>');
//             }
//         },
//         error: function(xhr, status, error) {
//             console.error('Error fetching data:', error);
//         }
//     });
// }






// $(document).ready(function() {
//     // Binding change event on product type dropdown
//     $('#js-product-type-name-dropdown').change(function() {
//         console.log("ncjdndknfc")
//         toggleFormElements(); // Ensure the elements are toggled based on the selected product type
//         let productTypeId = $(this).val(); // Get selected product type ID
//         if (productTypeId) {
//             Product_models(productTypeId); // Call the function to load product models
//         } else {
//             $('#product_model').empty().append('<option value="">Select Product Model</option>');
//         }
//     });

//     function Product_models(productTypeId) {
//         $.ajax({
//             url: '/specification/models',
//             method: 'GET',
//             dataType: 'json',
//             data: { product_type_id: productTypeId },
//             async: false,
//             success: function(data) {
//                 $('#product_model').empty(); // Clear existing options
//                 $('#product_model').append('<option value="">Choose...</option>');
//                 if (Array.isArray(data)) {
//                     $.each(data, function(index, value) {
//                         $('#product_model').append(
//                             '<option value="' + value.id + '">' + value.product_model + '</option>'
//                         );
//                     });
//                 } else if (typeof data === 'object') {
//                     $('#product_model').append('<option value="' + data.id + '">' + data.product_model + '</option>');
//                 }
//             },
//             error: function(xhr, status, error) {
//                 console.error('Error fetching product models:', error);
//             }
//         });
//     }

//     // Other existing code ...
// });





// // function Product_models(productTypeId) {

// //     $.ajax({
// //         url: '/specification/models',
// //         method: 'GET',
// //         dataType: 'json',
// //         data: { product_type_id: productTypeId },
// //         async: false,
// //         success: function(data) {

// //             $('#product_model').empty();

// //             $('#product_model').append('<option value="">Choose...</option>');
// //             if (Array.isArray(data)) {
// //                 $.each(data, function(index, value) {
// //                     $('#product_model').append(
// //                         '<option value="' + value.id + '">' + value.product_model + '</option>'
// //                     );
// //                 });
// //             } else if (typeof data === 'object') {
// //                 $('#product_model').append('<option value="' + data.id + '">' + value.product_model + '</option>');
// //             }
// //         },
// //         error: function(xhr, status, error) {
// //             console.error('Error fetching data:', error);
// //         }
// //     });
// // }


// $(document).on('click', '.js-delete-product', function(el) {
//     let id = $(this).data('id');
//     showDeleteAlert(function(isConfirmed) {
//         if (isConfirmed) {
//             $.ajax({
//                 url: '/product/delete/' + id,
//                 method: 'GET',
//                 async: false,
//                 beforeSend: function(xhr) {
//                     xhr.setRequestHeader('Accept', 'application/json');
//                     xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
//                 },
//                 success: function(response) {
//                     toastr.success("Product deleted successfully!");
//                     $('#js-add-product-table').html(response);
//                     $('#js-add-product-modal').modal('hide');
//                     $('#js-product-form')[0].reset();
//                 },
//                 error: function(xhr, status, error) {
//                     let errorMessage = "Error deleting the record.";
//                     if (xhr.responseJSON && xhr.responseJSON.message) {
//                         errorMessage = xhr.responseJSON.message;
//                     }
//                     toastr.error(errorMessage);
//                     console.error(xhr.responseText);
//                 }
//             });
//         }
//     });
// });

// function showDeleteAlert(callback, message = null, title = null) {
//     Swal.fire({
//         title: title || "Are you sure to delete?",
//         text: message || "You will not be able to recover this!!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#DD6B55",
//         confirmButtonText: "Confirm",
//         cancelButtonText: "Cancel",
//         allowOutsideClick: false,
//         allowEscapeKey: false
//     }).then(function(result) {
//         if (result.isConfirmed) {
//             callback(true);
//         } else {
//             callback(false);
//         }
//     });
// }

// function showSuccessAlert() {
//     Swal.fire({
//         title: "Success",
//         text: "Action performs Successfully",
//         icon: "success",
//         confirmButtonText: "Ok",
//     });
// }

// $(document).on('click', '.js-edit-asset-register', function(el) {
//     let id = $(this).data('id');
//     $.ajax({
//         url: '/product/edit/' + id,
//         method: 'GET',
//         success: function(data) {
//             getAllProductType();
//             $('#product-id').val(data.id);
//             $('#js-product-type-name-dropdown').val(data.product_type_id);
//             $('input[name="product_model"]').val(data.product_model);
//             $('input[name="shape"]').val(data.shape);
//             $('input[name="inches"]').val(data.inches);
//             $('input[name="wattage"]').val(data.wattage);
//             $('input[name="initial_lumen"]').val(data.initial_lumen);
//             $('input[name="stable_lumen"]').val(data.stable_lumen);
//             $('input[name="ra"]').val(data.ra);
//             $('input[name="beam_angle"]').val(data.beam_angle);
//             $('input[name="life_hours"]').val(data.life_hours);
//             $('input[name="guarantee"]').val(data.guarantee);
//             $('input[name="d_round"]').val(data.d_round);
//             $('input[name="d_square"]').val(data.d_square);
//             $('input[name="cut_round"]').val(data.cut_round);
//             $('input[name="cut_square"]').val(data.cut_square);
//             $('input[name="h"]').val(data.h);
//             $('input[name="lamp_size_h1"]').val(data.lamp_size_h1);
//             $('input[name="lamp_size_h2"]').val(data.lamp_size_h2);
//             $('input[name="lamp_size_d"]').val(data.lamp_size_d);
//             $('input[name="lamp_size_w"]').val(data.lamp_size_w);
//             $('input[name="lamp_size_l"]').val(data.lamp_size_l);
//             $('input[name="lamp_size_i"]').val(data.lamp_size_i);
//             $('input[name="lamp_size_t"]').val(data.lamp_size_t);
//             $('#js-add-product-modal').modal('show');
//             toggleFormElements();
//         },
//         error: function(xhr, status, error) {
//             toastr.error('Error fetching product data.');
//             console.error(xhr.responseText);
//         }
//     });
// });

// $('#js-product-form').validate({
//     submitHandler: function(form) {
//         event.preventDefault();
//         var formData = new FormData($('#js-product-form')[0]);
//         var url = '/product/store';
//         var method = 'POST';

//         if ($('#product-id').val()) {
//             url = '/product/edit/' + $('#product-id').val();
//             method = 'POST';
//         }

//         $.ajax({
//             url: url,
//             type: method,
//             data: formData,
//             cache: false,
//             contentType: false,
//             processData: false,
//             beforeSend: function(xhr) {
//                 xhr.setRequestHeader('Accept', 'application/json');
//                 xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
//             },
//             success: function(data) {
//                 $('#js-add-product-modal').modal('hide');
//                 $('#js-product-form')[0].reset();
//                 toastr.success('Product saved successfully');
//                 location.reload();
//             },
//             error: function(xhr, status, error) {
//                 handleAjaxError(xhr);
//             }
//         });
//     }
// });

// function handleAjaxError(xhr) {
//     if (xhr.responseJSON && xhr.responseJSON.errors) {
//         var errors = xhr.responseJSON.errors;
//         for (var key in errors) {
//             if (errors.hasOwnProperty(key)) {
//                 toastr.error(errors[key][0]);
//             }
//         }
//     } else {
//         toastr.error('An unexpected error occurred.');
//     }
// }

// $('#js-add-product-modal').on('hidden.bs.modal', function() {
// $('#js-product-form')[0].reset();
// toggleFormElements(); // Reset form elements visibility
// });

// // // Prevent modal from closing when clicking outside of it
// // $('#js-add-product-modal').modal({
// //     backdrop: 'static',
// //     keyboard: false
// // });


// // Optional: Close and reset form when clicking outside (uncomment if needed)
// // $(document).on('click', function (event) {
// //     if (!$(event.target).closest('.modal-content').length) {
// //         if ($('#js-add-product-modal').hasClass('show')) {
// //             $('#js-add-product-modal').modal('hide');
// //             $('#js-product-form')[0].reset();
// //         }
// //     }
// // });
// });



$(document).on('click', '.js-add-product', function(el) {
    $('#js-add-product-modal').modal('show');
    getAllProductType();

});


$('#js-product-form').validate({
    submitHandler: function(form) {
        event.preventDefault();
        var formData = new FormData($('#js-product-form')[0]);
        $.ajax({

            url: '/specification/add',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));

            },

            success: function(data) {
                $('#js-add-product-modal').modal('hide');
                $('#js-product-form')[0].reset();
                toastr.success('Product saved successfully');
                location.reload();
            },
            error: function(xhr, status, error) {
                handleAjaxError(xhr);
            }
        });
    }
});

//product types

function getAllProductType() {

    $.ajax({
        url: '/product/get-all-product-type',
        method: 'GET',
        dataType: 'json',
        async: false,
        success: function(data) {

            $('#js-product-type-name-dropdown').empty();

            $('#js-product-type-name-dropdown').append('<option value="">Choose...</option>');
            if (Array.isArray(data)) {
                $.each(data, function(index, value) {
                    $('#js-product-type-name-dropdown').append(
                        '<option value="' + value.id + '">' + value.type_name + '</option>'
                    );
                });
            } else if (typeof data === 'object') {
                $('#js-product-type-name-dropdown').append('<option value="' + data.id + '">' + value.type_name + '</option>');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });

}




function product_model(productTypeId) {

    $.ajax({
        url: '/specification/models',
        method: 'GET',
        dataType: 'json',
        data: { product_type_id: productTypeId },
        async: false,
        success: function(data) {

            $('#product_model').empty();

            $('#product_model').append('<option value="">Choose...</option>');
            if (Array.isArray(data)) {
                $.each(data, function(index, value) {
                    $('#product_model').append(
                        '<option value="' + value.product_model + '">' + value.product_model + '</option>'
                    );
                });
            } else if (typeof data === 'object') {
                $('#product_model').append('<option value="' + data.product_model + '">' + value.product_model + '</option>');
            }
        },
        error: function(xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}

$('#js-product-type-name-dropdown').change(function() {
    let productTypeId = $(this).val();
    if (productTypeId) {
        product_model(productTypeId); // Fetch product models based on selected type
    } else {
        $('#product_model').empty().append('<option value="">Select Product Model</option>');
    }
});

//edit
$(document).on('click', '.js-edit-asset-register', function(el) {
    let id = $(this).data('id');
    $.ajax({
        url: '/specification/edit/' + id,
        method: 'GET',
        success: function(data) {
            getAllProductType();
            $('#product-id').val(data.id);
            $('#js-product-type-name-dropdown').val(data.product_type_id);
            $('input[name="product_model"]').val(data.product_model);
            $('input[name="shape"]').val(data.shape);
            $('input[name="inches"]').val(data.inches);
            $('input[name="wattage"]').val(data.wattage);
            $('input[name="initial_lumen"]').val(data.initial_lumen);
            $('input[name="stable_lumen"]').val(data.stable_lumen);
            $('input[name="ra"]').val(data.ra);
            $('input[name="beam_angle"]').val(data.beam_angle);
            $('input[name="life_hours"]').val(data.life_hours);
            $('input[name="guarantee"]').val(data.guarantee);
            $('input[name="d_round"]').val(data.d_round);
            $('input[name="d_square"]').val(data.d_square);
            $('input[name="cut_round"]').val(data.cut_round);
            $('input[name="cut_square"]').val(data.cut_square);
            $('input[name="h"]').val(data.h);
            $('input[name="lamp_size_h1"]').val(data.lamp_size_h1);
            $('input[name="lamp_size_h2"]').val(data.lamp_size_h2);
            $('input[name="lamp_size_d"]').val(data.lamp_size_d);
            $('input[name="lamp_size_w"]').val(data.lamp_size_w);
            $('input[name="lamp_size_l"]').val(data.lamp_size_l);
            $('input[name="lamp_size_i"]').val(data.lamp_size_i);
            $('input[name="lamp_size_t"]').val(data.lamp_size_t);
            $('#product_model').val(data.product_model).change();
            $('input[name="type"]').val(data.type);
            // Display the current image
            $('#image-preview').attr('src', 'assets/images/products/' + data.image_url);

            // If an image is not selected, keep the current image
            //$('input[name="image_url"]').val(data.image_url);

            // // Handle image change
            // $('input[name="image_url"]').on('change', function() {
            //     // If a new image is selected, remove the old image URL value
            //     if (this.files && this.files[0]) {
            //         var reader = new FileReader();
            //         reader.onload = function(e) {
            //             $('#image-data').attr('src', e.target.result);
            //         };
            //         reader.readAsDataURL(this.files[0]);
            //     }
            // });

            $('#js-add-product-modal').modal('show');
            toggleFormElements();
        },
        error: function(xhr, status, error) {
            toastr.error('Error fetching product data.');
            console.error(xhr.responseText);
        }
    });
});

$(document).on('click', '.js-delete-s', function(el) {
    let id = $(this).data('id');
    showDeleteAlert(function(isConfirmed) {
        if (isConfirmed) {
            $.ajax({
                url: '/specification/delete/' + id,
                method: 'GET',
                async: false,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Accept', 'application/json');
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function(response) {
                    toastr.success("Product deleted successfully!");
                    $('#js-add-product-table').html(response);
                    $('#js-add-product-modal').modal('hide');
                    $('#js-product-form')[0].reset();
                },
                error: function(xhr, status, error) {
                    let errorMessage = "Error deleting the record.";
                    if (xhr.responseJSON && xhr.responseJSON.message) {
                        errorMessage = xhr.responseJSON.message;
                    }
                    toastr.error(errorMessage);
                    console.error(xhr.responseText);
                }
            });
        }
    });
});

function showDeleteAlert(callback, message = null, title = null) {
    Swal.fire({
        title: title || "Are you sure to delete?",
        text: message || "You will not be able to recover this!!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Confirm",
        cancelButtonText: "Cancel",
        allowOutsideClick: false,
        allowEscapeKey: false
    }).then(function(result) {
        if (result.isConfirmed) {
            callback(true);
        } else {
            callback(false);
        }
    });
}

function showSuccessAlert() {
    Swal.fire({
        title: "Success",
        text: "Action performs Successfully",
        icon: "success",
        confirmButtonText: "Ok",
    });
}