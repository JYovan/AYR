<div class="card " id="pnlTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 float-left">
                <legend class="float-left">Registro de Acciones</legend>
            </div>
            <div class="col-sm-6 float-right" align="right">
                <button type="button" class="btn btn-primary" id="btnRefrescar" data-toggle="tooltip" data-placement="bottom" title="Actualizar"><span class="fa fa-sync"></span><br></button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div c id="Registros">
                    <table id="tblRegistros" class="table table-sm" style="width:100%">
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
                                <th></th>
                                <th>Usuario</th>
                                <th></th>
                                <th></th>
                                <th>Cliente</th>
                                <th>Empresa</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getRecords',
                "dataType": "jsonp",
                "dataSrc": ""
            },
            initComplete: function () {
                this.api().columns([1, 4, 5]).every(function () {
                    var column = this;
                    var select = $('<select class="form-control form-control-sm"><option value="">TODOS</option></select>')
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
            "scrollX": true,
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