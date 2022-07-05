$(document).ready(function() { 
    

    var x = $('#mytabel').DataTable({
        "responsive" : true,
        "ordering": false,
        "lengthMenu": [
            [5, 10, 25, 40],
            [5, 10, 25, 40]
        ],
        "order": [[ 1, 'asc' ]],
    });
      x.on( 'order.dt search.dt', function () {
        x.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();

    $('#mytabel tbody').on('click', '.tombol-hapus', function (e) {
        e.preventDefault();
        const form = $(this).parents('form');
        Swal.fire({
        title: 'Warning!',
        text: "Yakin Hapus Data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#218838',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus Data!'
        }).then((result) => {
        if (result.isConfirmed) {
            form.submit();
        }
        })
    });

    
    // Flashdata
    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Swal.fire({
        title: 'Success',
        text: flashData,
        icon: 'success'
        });
    }


    $('.uang').mask('000.000.000.000', {
        reverse: true
      });


    $(".input-file").filestyle({
        'text' :'Choose File',
        'btnClass' :'btn-light border border-secondary px-4',
        'size' :'nr',
        'input' :true,
        'placeholder':'',
        'buttonBefore' :true,
    });
});