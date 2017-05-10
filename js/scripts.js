/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*******************************************************************************
 * VAR FOR TEMPORAL DATA
 *******************************************************************************/
var temp = 0;

/*******************************************************************************
 * EVENT FOR CLICK ROW
 *******************************************************************************/
var selected = [];

/*******************************************************************************
 * OPTIONS FOR TABLES
 *******************************************************************************/

var tableOptions = {
    "dom": 'Bfrtip',
    buttons: [
        {
            extend: 'copyHtml5',
            text: ' <span class="fa fa-clipboard"></span><h6>COPIAR FILAS</h6>',
            message: 'COPIADO',
            exportOptions: {
                modifier: {
                    page: 'current'
                },
                columns: ':visible'
            }
        },
        {
            extend: 'excelHtml5',
            text: '<span class="fa fa-file-excel-o"></span><h6>EXCEL</h6>',
            exportOptions: { 
                columns: ':visible'
            }
        },
        {
            extend: 'csvHtml5',
            text: '<span class="fa fa-table"></span><h6>CSV</h6>',
            exportOptions: {
                modifier: {
                    page: 'current'
                },
                columns: ':visible'
            }
        },
        {
            extend: 'pdfHtml5',
            text: '<span class="fa fa-file-pdf-o"></span><h6>PDF</h6>',
            orientation: 'landscape',
            pageSize: 'LEGAL',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'print',
            customize: function (win) {
                $(win.document.body)
                        .css('font-size', '10pt')
                        .prepend('<img src="' + base_url + '/media/log_1o.png" style="width:25%;heigth:25%; position:absolute; top:0; left:30%;" />');
                $(win.document.body).find('table').addClass('compact')
                        .css('font-size', 'inherit').css('margin-top', '500px');
            },
            text: '<span class="fa fa-eye"></span><h6>VISTA PREVIA</h6>',
            exportOptions: { 
                columns: ':visible'
            }
        },
        {
            extend: 'pdfHtml5',
            text: '<span class="fa fa-asterisk"></span><h6>PDF</h6>',
            orientation: 'landscape',
            pageSize: 'LEGAL',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'colvis',
            text: '<span class="fa fa-columns"></span><h6>COLUMNAS</h6>',
            exportOptions: {
                modifier: {
                    page: 'current'
                },
                columns: ':visible'
            }
        },
        {
            extend: 'print',
            text: '<span class="fa fa-check"></span><h6>SELECCIONADOS</h6>',
            exportOptions: {
                modifier: {
                    selected: true
                }
            }
        }
    ],
    language: {
        processing: "Proceso en curso...",
        search: "BUSCAR:",
        lengthMenu: "MOSTRAR _MENU_ ELEMENTOS",
        info: "MOSTRANDO  _START_ DE _END_ , DE UN TOTAL DE _TOTAL_ ELEMENTOS.",
        infoEmpty: "MOSTRANDO 0 DE 0 A 0 ELEMENTOS.",
        infoFiltered: "(FILTRANDO UN TOTAL DE _MAX_ ELEMENTOS. )",
        infoPostFix: "",
        loadingRecords: "Procesando los datos...",
        zeroRecords: "No s&eacute; encontro nada.",
        emptyTable: "No existen datos en la tabla.",
        paginate: {
            first: "PRIMERO",
            previous: "ANTERIOR",
            next: "SIGUIENTE",
            last: "&Uacute;LTIMO"
        },
        aria: {
            sortAscending: ": Habilitado para ordenar la columna en orden ascendente",
            sortDescending: ": Habilitado para ordenar la columna en orden descendente"
        }, buttons: {
            copyTitle: 'REGISTROS COPIADOS A PORTAPAPELES',
            copyKeys: 'COPIADO CON TECLAS CLAVE.',
            copySuccess: {
                _: ' %d REGISTROS COPIADOS',
                1: ' 1 REGISTRO COPIADO'
            }
        }
    },
     "autoWidth": false,
    colReorder: true,
    rowReorder: true,
    "displayLength": 250,
    "bLengthChange": false,
    "deferRender": true,
    "scrollY": 900,
    "scrollX": true,
    "scrollCollapse": true,
    "aaSorting": [[0, 'desc']],
    "columnDefs": [
    { "width": "20%", "targets": 0 }
  ]
};
function getTable(tblname, data) {
    var column = '';
    var i = 0;
    var div = "<div class=\"table-responsive\">";
    div = "<table id=\"" + tblname + "\" class=\"table table-bordered table-striped table-hover display row-border hover order-column\" cellspacing=\"10\" width=\"100%\">";
    //Create header
    div += "<thead>";
    div += "<tr class=\"primary text-center\" >";
    for (var key in data[i]) {
        column += "<th>" + key + "</th>";
    }
    div += column;
    div += "</tr></thead>";
    //Create Rows
    div += "<tbody>";
    $.each(data, function (key, value) {
        div += "<tr data-toggle='tooltip' title='HAGA DOBLE CLIC PARA EDITAR' >";
        $.each(value, function (key, value) {
            div += "<td>" + value + "</td>";
        });
        div += "</tr>";
    });
    div += "</tbody>";
    //Create Footer
    div += "<tfoot>";
    div += "<tr class=\"primary text-center\">";

    div += column;
    div += "</tr></tfoot>";
    div += "</table>";
    div += "</div>";
    return div;
}
function onNotify(span, message, type) {
    if (type === "danger") {
        beep();
    }
    if(type==="success"){
        beeds();
    }
    $.notify({
        icon: "media/logo.png",
        title: span,
        message: message
    }, {
        type: type,
	z_index: 3031,
        
	placement: {
		from: "top",
		align: "center"
	}
    }, {
        animate: {
            enter: 'animated bounceIn',
            exit: 'animated bounceOut'
        }
    });
}
function getExt(filename) {
    var dot_pos = filename.lastIndexOf(".");
    if (dot_pos === -1)
        return "";
    return filename.substr(dot_pos + 1).toLowerCase();
}
