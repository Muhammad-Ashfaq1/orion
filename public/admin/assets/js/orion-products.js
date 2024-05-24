$(document).ready(function() {
    function toggleFormElements() {
        var selectedType = $('#js-product-type-name-dropdown').val();

        if (selectedType == 1 || selectedType == 13) {
            $('#model-name-container, #wattage-container, #initial-lumen-container, #stable-lumen-container, #ra-container, #beam-angle-container, #life-container, #guarantee-container, #lamp-size-h1-container, #lamp-size-h2-container, #lamp-size-d-container').show();
            $('#shape-container, #inch-container, #d-round-container, #d-square-container, #cut-round-container, #cut-square-container, #h-container, #lamp-size-w-container, #lamp-size-l-container, #lamp-size-i-container, #lamp-size-t-container').hide();
        }
        else if (selectedType == 3) {
            $('#model-name-container, #shape-container, #inch-container, #wattage-container, #initial-lumen-container, #stable-lumen-container, #ra-container, #life-container, #guarantee-container, #d-round-container, #d-square-container, #cut-round-container, #cut-square-container, #h-container').show();
            $('#beam-angle-container, #lamp-size-h1-container, #lamp-size-h2-container, #lamp-size-d-container, #lamp-size-w-container, #lamp-size-l-container, #lamp-size-i-container, #lamp-size-t-container').hide();
        }
        else if (selectedType == 2) {
            $('#model-name-container, #shape-container, #inch-container, #wattage-container, #initial-lumen-container, #stable-lumen-container, #ra-container, #life-container, #guarantee-container, #d-round-container, #cut-round-container, #cut-square-container, #h-container').show();
            $('#beam-angle-container, #lamp-size-h1-container, #lamp-size-h2-container, #lamp-size-d-container, #lamp-size-w-container, #lamp-size-l-container, #lamp-size-i-container, #lamp-size-t-container, #d-square-container, #cut-square-container').hide();
        }
        else if (selectedType == 7 || selectedType == 12) {
            $('#model-name-container, #wattage-container, #initial-lumen-container, #stable-lumen-container, #ra-container, #life-container, #guarantee-container, #lamp-size-l-container, #lamp-size-w-container').show();
            $('#shape-container, #inch-container, #d-round-container, #d-square-container, #cut-round-container, #cut-square-container, #h-container, #beam-angle-container, #lamp-size-h1-container, #lamp-size-h2-container, #lamp-size-d-container, #lamp-size-i-container, #lamp-size-t-container').hide();
        }
        else if (selectedType == 15 || selectedType == 8) {
            $('#model-name-container, #wattage-container, #initial-lumen-container, #stable-lumen-container, #ra-container, #life-container, #guarantee-container, #lamp-size-i-container, #lamp-size-l-container').show();
            $('#shape-container, #inch-container, #d-round-container, #d-square-container, #cut-round-container, #cut-square-container, #h-container, #beam-angle-container, #lamp-size-h1-container, #lamp-size-h2-container, #lamp-size-d-container, #lamp-size-w-container, #lamp-size-t-container').hide();
        }
        else if (selectedType == 12) {
            $('#model-name-container, #wattage-container, #initial-lumen-container, #stable-lumen-container, #ra-container, #life-container, #guarantee-container, #lamp-size-l-container, #lamp-size-w-container').show();
            $('#shape-container, #inch-container, #d-round-container, #d-square-container, #cut-round-container, #cut-square-container, #h-container, #beam-angle-container, #lamp-size-h1-container, #lamp-size-h2-container, #lamp-size-d-container, #lamp-size-i-container, #lamp-size-t-container').hide();
        }
        else {
            $('#model-name-container, #wattage-container, #initial-lumen-container, #stable-lumen-container, #ra-container, #beam-angle-container, #life-container, #guarantee-container, #lamp-size-h1-container, #lamp-size-h2-container, #lamp-size-d-container, #shape-container, #inch-container, #d-round-container, #d-square-container, #cut-round-container, #cut-square-container, #h-container, #lamp-size-w-container, #lamp-size-l-container, #lamp-size-i-container, #lamp-size-t-container').show();
        }
    }

    toggleFormElements();

    $('#js-product-type-name-dropdown').change(function() {
        toggleFormElements();
    });






    $(document).on('click', '.js-add-product', function(el) {
        $('#js-add-product-modal').modal('show');
        getAllProductType();
    });

    $('#js-product-form').validate({
        submitHandler: function(form) {
            event.preventDefault();
            var formData = new FormData($('#js-product-form')[0]);
            $.ajax({
                url: '/product/add',
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
});







$(document).on('click', '.js-delete-product', function (el) {
    let id = $(this).data('id');
    showDeleteAlert(function (isConfirmed) {
        if (isConfirmed) {
            $.ajax({
                url: '/product/delete/' + id,
                method: 'DELETE',
                async: false,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Accept', 'application/json');
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function (response) {
                    toastr.success("Product deleted successfully!");
                    $('#js-add-product-table').html(response);
                    $('#js-add-product-modal').modal('hide');
                    $('#js-product-form')[0].reset();

                    // location.reload();
                },
                error: function (xhr, status, error) {
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

function showDeleteAlert(callback, message = null , title = null) {
    Swal.fire({
        title: title ?? "Are you sure to delete?",
        text: message ?? "You will not be able to recover this!!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Confirm",
        cancelButtonText: "Cancel",
        allowOutsideClick: false,
        allowEscapeKey: false
    }).then(function (result) {
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



