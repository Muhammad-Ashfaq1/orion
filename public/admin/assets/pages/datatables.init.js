
$(document).ready(function() {
    $('#datatable').DataTable();

    //Buttons examples
    var table = $('#datatable-buttons').DataTable({
        buttons: ['copy', 'excel', 'pdf', 'colvis'],
        lengthChange: false,
        // lengthChange: true,

    });

    table.buttons().container()
        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
} );
