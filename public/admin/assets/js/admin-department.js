
    $(document).on('click', '.js-add-department', function (el) {
        $('#js-add-department-modal').modal({backdrop: 'static', keyboard: false}, 'show');
        $('#js-department-Form')[0].reset();
    });



    // add new department
    $('#js-department-Form').validate({
        rules: {
            name: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Department name is required",
            },
        },

        submitHandler: function (form) {
            event.preventDefault();
            var formData = new FormData($('#js-department-Form')[0]);
            $.ajax({
            url: '/admin/department/add',
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
            $('#js-add-department-modal').modal('hide');
            $('#js-department-Form')[0].reset();
            $('#department-id').val("");
            toastr.success('Department saved successfully');
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



    //edit department
    $(document).on('click', '.js-edit-department', function (el) {
    var depId = $(this).data('id');
    $('.modal-title').text('Edit Department');

    $.ajax({
    url: '/admin/department/edit/' + depId,
    method: 'GET',
    beforeSend: function (xhr) {
    xhr.setRequestHeader('Accept', 'application/json');
    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
},
    success: function (data) {
    $('#js-add-department-modal').modal({backdrop: 'static', keyboard: false}, 'show');
    $('#department-name').val(data.name);
    $('#department-id').val(depId);
},
    error: function (xhr, status, error) {
    console.error(xhr.responseText);
},
    complete: function (data) {
}
});
});




    //delete deepartment
    $(document).on('click', '.js-delete-department', function (el) {
        let deptId = $(this).data('id');
        showDeleteAlert(function (isConfirmed) {
            if (isConfirmed) {
            $.ajax({
                url: '/admin/department/delete/' + deptId,
                method: 'DELETE',
                async: false,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Accept', 'application/json');
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function (response) {
                    toastr.success("Department deleted successfully!");
                    location.reload();
                },
                error: function (xhr, status, error) {
                    let errorMessage = "Error deleting the record.";
                    if (xhr.responseJSON && xhr.responseJSON.message)
                    {
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
