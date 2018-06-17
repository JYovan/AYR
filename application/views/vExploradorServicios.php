<div class="card border-0" id="pnlTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-8 col-sm-6 float-left">
                <legend class="float-left">Explorador Servicios</legend>
            </div>
            <div class="col-4 col-sm-6 float-right" align="right">
                <button type="button" class="btn btn-primary" id="btnRefrescar" data-toggle="tooltip" data-placement="bottom" title="Actualizar"><span class="fa fa-sync"></span><br></button>
            </div>
        </div>
        <div class="row" id="Registros">
            <table id="tblRegistros" class="table table-sm " style="width: 100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Folio Cliente</th>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Sucursal</th>
                        <th>Trabajo Ruequerido</th>
                        <th>Importe</th>
                        <th>Estatus Trabajo</th>
                        <th>Estatus Entrega</th>
                        <th>No. Entrega</th>
                        <th>Fac. Intelisis</th>
                        <th>Orden Compra</th>
                        <th>Forma Pago</th>
                        <th>Fecha Pago</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th><input type="text" placeholder="Buscar por ID" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Folio Cliente" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Fecha" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Nombre" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Sucursal" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Trabajo Ruequerido" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Importe" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Estatus Trabajo" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Estatus Entrega" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por No. Entrega" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Factura Intelisis" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Orden Compra" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Forma Pago" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Fecha Pago" class="form-control form-control-sm"/></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/ExploradorServicios/';
    $(document).ready(function () {
        getRecords();
    });
    var tblRegistrosX = $("#tblRegistros"), Registros;
    function getRecords() {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
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
            "columns": [
                {"data": "ID"},
                {"data": "FolioCliente"},
                {"data": "Fecha"},
                {"data": "Nombre"},
                {"data": "Sucursal"},
                {"data": "TrabajoRequerido"},
                {"data": "Importe"},
                {"data": "EstatusTrabajo"},
                {"data": "EstatusEntrega"},
                {"data": "NoEntrega"},
                {"data": "FacturaIntelisis"},
                {"data": "OrdenCompra"},
                {"data": "FormaPago"},
                {"data": "FechaPago"}
            ],
            language: lang,
            "autoWidth": true,
            "bStateSave": true,
            "colReorder": true,
            "displayLength": 15,
            "bLengthChange": false,
            "scrollX": true,
            "deferRender": true,
            "scrollCollapse": false,
            keys: true,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "columnDefs": [
                {"width": "70px", "targets": 2},
                {"width": "320px", "targets": 5}
            ]
        });
        $('#tblRegistros_filter input[type=search]').focus();
        tblRegistrosX.find('tbody').on('click', 'tr', function () {
            tblRegistrosX.find("tbody tr").removeClass("success");
            $(this).addClass("success");
        });
        Registros.columns().every(function () {
            var that = this;
            $('input', this.footer()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

        HoldOn.close();
    }

</script>
