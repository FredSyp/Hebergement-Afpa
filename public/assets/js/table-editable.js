
"use strict";

$(function (e) {
	// Editable File-Export Data Table
	var table = $('#editable-file-datatable').DataTable({
		buttons: ['copy', 'excel', 'pdf', 'colvis'],
		responsive: true,
		language: {
			searchPlaceholder: 'Recherche...',
			sSearch: '',
		}
	});
	table.buttons().container()
		.appendTo('#editable-file-datatable_wrapper .col-md-6:eq(0)');

	// Select2 
	$('.select2').select2({
		minimumResultsForSearch: Infinity
	});


});