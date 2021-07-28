$.fn.dataTable.ext.errMode = 'none';

$('#tables').DataTable({ 
    searchPanes: {
        cascadePanes: true,
        viewTotal: true
    },
    language: {
    	url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
	},
    dom: 'Plfrtip'	
});