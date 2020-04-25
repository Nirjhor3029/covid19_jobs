$(document).ready(function(){
    // alert('hello');

    $('#users-table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'colvis',
                postfixButtons: [ 'colvisRestore' ]
            },
            // 'copy', 
            // 'csv', 
            'excel', 
            // 'pdf', 
            // 'print',

            {
                extend: 'print',
                text: 'Print all',
                exportOptions: {
                    modifier: {
                        selected: null
                    }
                }
            },
            {
                extend: 'print',
                text: 'Print selected'
            }
            
        ],

        select: true,
        
        columnDefs: [
            {
                targets: -1,
                visible: true,
            }
        ],



    } );
});