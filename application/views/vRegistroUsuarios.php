<div class="col-md-12">
    <div class="panel panel-default" id="pnlTablero">
        <div class="panel-heading">
            <div class="cursor-hand" >Registro de Acciones</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
                </div>
                <div class="col-md-12 table-responsive" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>

<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlRegistroUsuarios/';
    var pnlTablero = $("#pnlTablero");
    var btnRefrescar = $("#btnRefrescar");
    $(document).ready(function () {
        btnRefrescar.click(function () {
            getRecords();
        });
        getRecords();
    });
    function getRecords() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                $("#tblRegistros").html(getTable('tblUsuarios', data));
                $('#tblUsuarios').DataTable(tableOptionsLog);
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    var tableOptionsLog = {
    initComplete: function () {
        this.api().columns([1,4,5]).every(function () {
            var column = this;
            var select = $('<select class="form-control"><option value="">TODOS</option></select>')
                    .appendTo($(column.footer()).empty())
                    .on('change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                                );
                        column
                                .search(val ? '^' + val + '$' : '', true, false)
                                        .draw();
                            });
                    column.data().unique().sort().each(function (d, j) {
                        if (column.search() === '^' + d + '$') {
                            select.append('<option value="' + d + '" selected="selected">' + d + '</option>')
                        } else {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        }
                    });
                });
            },
            "dom": 'Bfrtip',
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<span  data-tooltip="Exportar a Excel"><span class="fa fa-file-excel-o CustomIconsForDataTable"></span></span>',
                    exportOptions: {
                        columns: ':visible'
                    }
                }, {
                    extend: 'colvis',
                    text: '<span  data-tooltip="Columnas"><span class="fa fa-columns CustomIconsForDataTable"></span></span>',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        },
                        columns: ':visible'
                    }
                }],
            language: {
                processing: "Proceso en curso...",
                search: "Buscar:",
                lengthMenu: "Mostrar _MENU_ Elementos",
                info: "Mostrando  _START_ de _END_ , de _TOTAL_ Elementos.",
                infoEmpty: "Mostrando 0 de 0 A 0 Elementos.",
                infoFiltered: "(Filtrando un total _MAX_ Elementos. )",
                infoPostFix: "",
                loadingRecords: "Procesando los datos...",
                zeroRecords: "No se encontro nada.",
                emptyTable: "No existen datos en la tabla.",
                paginate: {
                    first: "Primero",
                    previous: "Anterior",
                    next: "Siguiente",
                    last: "&Uacute;ltimo"
                },
                aria: {
                    sortAscending: ": Habilitado para ordenar la columna en orden ascendente",
                    sortDescending: ": Habilitado para ordenar la columna en orden descendente"
                }
            },
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 15,
            "bLengthChange": false,
            "deferRender": true,
            "scrollCollapse": true,
            "aaSorting": [
                [0, 'desc']
            ]
        };
</script>