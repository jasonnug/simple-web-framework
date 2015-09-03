/**********************
*      File: js/plugin-init.js
*      Author: Jason Nugent
*/

$(document).ready( function() {
    // Bootstrap Datatables sorts ascending in the first column//
    $('.bootstrap-datatable').dataTable();
    // Descending in the first column
    $('.bootstrap-datatable-desc').dataTable({
        "order": [ 0, 'desc']
    });

});