
$(document).on('click', '.js-add-warranty', function (el) {
    $('#js-add-warranty-modal').modal('show');
    getAllProductType();
    $('#js-warranty-Form')[0].reset();
});



// add new warranty
$('#js-warranty-Form').validate({
    submitHandler: function (form) {
        event.preventDefault();
        var formData = new FormData($('#js-warranty-Form')[0]);
        $.ajax({
            url: '/warranty/add',
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
                $('#js-add-warranty-modal').modal('hide');
                $('#js-warranty-Form')[0].reset();
                $('#warranty-id').val("");
                toastr.success('warranty saved successfully');
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



//edit warranty
$(document).on('click', '.js-edit-warranty', function (el) {
    var depId = $(this).data('id');
    $('.modal-title').text('Edit warranty');
    $('#js-add-warranty-modal').modal('hide');
    $.ajax({
        url: '/admin/warranty/edit/' + depId,
        method: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Accept', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
        },
        success: function (data) {
            $('#js-add-warranty-modal').modal('show');
            $('#warranty-name').val(data.warranty);
            $('#warranty-id').val(depId);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        },
        complete: function (data) {
        }
    });
});




//delete deepartment
$(document).on('click', '.js-delete-warranty', function (el) {
    let deptId = $(this).data('id');
    showDeleteAlert(function (isConfirmed) {
        if (isConfirmed) {
            $.ajax({
                url: '/admin/warranty/delete/' + deptId,
                method: 'DELETE',
                async: false,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Accept', 'application/json');
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function (response) {
                    toastr.success("warranty deleted successfully!");
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

