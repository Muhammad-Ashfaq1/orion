
$(document).on('click', '.js-add-employee', function (el) {
    $('#js-add-employee-modal').modal({backdrop: 'static', keyboard: false}, 'show');
    $('#js-employee-Form')[0].reset();
    getAllDepartments();
    getAllDesignations();

});



// add new employee
$('#js-employee-Form').validate({
    rules: {
        name: {
            required: true,
        },
        designation_id: {
            required: true,
        },
        department_id: {
            required: true,
        },
        status: {
            required: true,
        },
    },
    messages: {
        name: {
            required: "employee name is required",
        },
        designation_id: {
            required: "employee designation is required",
        },
        department_id: {
            required: "employee department is required",
        },
        status: {
            required: "employee status is required",
        },
    },

    submitHandler: function (form) {
        event.preventDefault();
        var formData = new FormData($('#js-employee-Form')[0]);
        $.ajax({
            url: '/admin/employee/add',
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
                $('#js-add-employee-modal').modal('hide');
                $('#js-employee-Form')[0].reset();
                $('#employee-id').val("");
                toastr.success('employee saved successfully');
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



//edit employee
$(document).on('click', '.js-edit-employee', function (el) {
    var depId = $(this).data('id');
    $('.modal-title').text('Edit employee');
    $.ajax({
        url: '/admin/employee/edit/' + depId,
        method: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader('Accept', 'application/json');
            xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
        },
        success: function (data) {
            $('#js-add-employee-modal').modal({backdrop: 'static', keyboard: false}, 'show');
            $('#employee-name').val(data.name);
            $('#employee-id').val(depId);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        },
        complete: function (data) {
        }
    });
});




//delete deepartment
$(document).on('click', '.js-delete-employee', function (el) {
    let deptId = $(this).data('id');
    showDeleteAlert(function (isConfirmed) {
        if (isConfirmed) {
            $.ajax({
                url: '/admin/employee/delete/' + deptId,
                method: 'DELETE',
                async: false,
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('Accept', 'application/json');
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function (response) {
                    toastr.success("employee deleted successfully!");
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



//get all Departments
function getAllDepartments() {
    $.ajax({
        url: '/get-all-departments',
        method: 'GET',
        dataType: 'json',
        async: false,
        success: async function (data) {
            $('#js-employee-department-dropdown').empty();
            $('#js-employee-department-dropdown').append('<option value="">Choose...</option>');
            if (Array.isArray(data)) {
                $.each(data, function (index, value) {
                    $('#js-employee-department-dropdown').append(
                        '<option value="' + value.id + '">' + value.name + '</option>');
                });
            } else if (typeof data === 'object') {
                $('#js-employee-department-dropdown').append('<option value="' + data.id + '">' + value.name + '</option>');
            }
        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}


//get all Designations
function getAllDesignations() {
    $.ajax({
        url: '/get-all-designations',
        method: 'GET',
        dataType: 'json',
        async: false,
        success: async function (data) {
            $('#js-employee-designation-dropdown').empty();
            $('#js-employee-designation-dropdown').append('<option value="">Choose...</option>');
            if (Array.isArray(data)) {
                $.each(data, function (index, value) {
                    $('#js-employee-designation-dropdown').append(
                        '<option value="' + value.id + '">' + value.designation + '</option>');
                });
            } else if (typeof data === 'object') {
                $('#js-employee-designation-dropdown').append('<option value="' + data.id + '">' + value.designation + '</option>');
            }
        },
        error: function (xhr, status, error) {
            console.error('Error fetching data:', error);
        }
    });
}
