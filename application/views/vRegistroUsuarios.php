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
                <div class="col-md-12 table-responsive" id="Registros">
                    <table id="tblRegistros" class="table table-sm display " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Registro</th>
                                <th>Acción</th>
                                <th>Cliente</th>
                                <th>Empresa</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Registro</th>
                                <th>Acción</th>
                                <th>Cliente</th>
                                <th>Empresa</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>

<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/RegistroUsuarios/';
    var pnlTablero = $("#pnlTablero");
    var btnRefrescar = $("#btnRefrescar");
    $(document).ready(function () {
        btnRefrescar.click(function () {
            getRecords();
        });
        getRecords();
    });
    var tblRegistrosX = $("#tblRegistros"), Registros;
    function getRecords() {
        HoldOn.open({
            theme: 'sk-cube',
            message: 'CARGANDO...'
        });
        tblRegistrosX.DataTable().destroy();
        Registros = tblRegistrosX.DataTable({
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
            "ajax": {
                "url": master_url + 'getRecords',
                "dataType": "jsonp",
                "dataSrc": ""
            },
            initComplete: function () {
                this.api().columns([1, 4, 5]).every(function () {
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
            "columns": [
                {"data": "ID"},
                {"data": "Usuario"},
                {"data": "Registro"},
                {"data": "Accion"},
                {"data": "Cliente"},
                {"data": "Empresa"}
            ],
            language: lang,
            "autoWidth": true,
            "bStateSave": true,
            "colReorder": true,
            "displayLength": 15,
            "bLengthChange": false,
            "deferRender": true,
            "scrollCollapse": false,
            keys: true,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ]
        });
        $('#tblRegistros_filter input[type=search]').focus();
        tblRegistrosX.find('tbody').on('click', 'tr', function () {
            tblRegistrosX.find("tbody tr").removeClass("success");
            $(this).addClass("success");
        });
        HoldOn.close();
    }
</script>