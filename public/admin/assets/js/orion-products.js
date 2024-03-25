
$(document).on('click', '.js-add-product', function (el) {
    $('#js-add-product-modal').modal('show');
    getAllProductType();
});



function getAllProductType() {
    $.ajax({
        url: '/product/get-all-product-type',
        method: 'GET',
        dataType: 'json',
        async: false,
        success: async function (data) {
            $('#js-product-type-name-dropdown').empty();
            $('#js-product-type-name-dropdown').append('<option value="">Choose...</option>');
            if (Array.isArray(data)) {
                $.each(data, function (index, value) {
                    $('#js-product-type-name-dropdown').append(
                        '<option value="' + value.id + '">' + value.type_name + '</option>');
                });
            } else if (typeof data === 'object') {
                $('#js-product-type-name-dropdown').append('<option value="' + data.id + '">' + value.type_name + '</option>');
            }

        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}

// add new asset-type
$('#js-asset-type-Form').validate({
    rules: {
        name: {
            required: true,
        },
    },
    messages: {
        name: {
            required: "Asset type name is required",
        },
    },

    submitHandler: function (form) {
        event.preventDefault();
        var formData = new FormData($('#js-asset-type-Form')[0]);
        $.ajax({
            url: '/admin/asset-type/add',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                // disableModalButton('submit-program-btn');
            },
            success: function (data) {
                console.log('success');
                $('#js-add-asset-type-modal').modal('hide');
                $('#js-asset-type-Form')[0].reset();
                $('#asset-type-id').val("");
                toastr.success('asset-type saved successfully');
                location.reload();
            },
            error: function (xhr, status, error) {
                handleAjaxError(xhr);
            },
            complete: function () {
                // disableModalButton('submit-program-btn', false);
            }
        });
    }
});



//edit asset-type
$(document).on('click', '.js-edit-asset-type', function (el) {
    var assetId = $(this).data('id');
    $('.modal-title').text('Edit Asset Type');
    $('#js-add-asset-type-modal').modal('hide');
    $.ajax({
        url: '/admin/asset-type/edit/' + assetId,
        method: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Accept', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
        },
        success: function (data) {
            $('#js-add-asset-type-modal').modal('show');
            $('#asset-type-name').val(data.name);
            $('#asset-type-id').val(assetId);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        },
        complete: function (data) {
        }
    });
});




//delete deepartment
$(document).on('click', '.js-delete-asset-type', function (el) {
    let deptId = $(this).data('id');
    showDeleteAlert(function (isConfirmed) {
        if (isConfirmed) {
            $.ajax({
                url: '/admin/asset-type/delete/' + deptId,
                method: 'DELETE',
                async: false,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Accept', 'application/json');
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function (response) {
                    toastr.success("Asset type deleted successfully!");
                    location.reload();
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
