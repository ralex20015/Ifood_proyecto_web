var Table;
Table = $("#tablaRecetas").DataTable({
ajax: "../php/showDataFromBD.php",
"lengthMenu": [ [5, 10, -1], [5, 10, "All"] ],
"length": 5,
"columnDefs": [{
    targets: 4,
    data: "4",
    render: function (data, type, row, meta) {
        return '<img src="'+data+'">'
    }
}]
});