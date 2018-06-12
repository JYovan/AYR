<div class="card " id="pnlTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 float-left">
                <legend class="float-left">Explorador Servicios</legend>
            </div>
        </div>
        <div class="row">
            <div class="card-block">
                <div class="col-md-12 table-responsive" id="Registros">
                    <table id="tblRegistros" class="table table-sm " style="width:100%">
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
                                <th>Factura Intelisis</th>
                                <th>Orden Compra</th>
                                <th>Forma Pago</th>
                                <th>Fecha Pago</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
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
                                <th>Factura Intelisis</th>
                                <th>Orden Compra</th>
                                <th>Forma Pago</th>
                                <th>Fecha Pago</th>
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
            "deferRender": true,
            "scrollCollapse": false,
            keys: true,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "columnDefs": [
                {"width": "250px", "targets": 3},
                {"width": "300px", "targets": 4},
                {"width": "320px", "targets": 5}
            ]
        });
        $('#tblRegistros_filter input[type=search]').focus();
        tblRegistrosX.find('tbody').on('click', 'tr', function () {
            tblRegistrosX.find("tbody tr").removeClass("success");
            $(this).addClass("success");
        });


        $('#tblRegistros tfoot th').each(function () {
            var title = $(this).text();
            $(this).html('<div  style="overflow-x:auto; "><div class="form-group "><input type="text" placeholder="Buscar por ' + title + '" class="form-control form-control-sm" style="width: 100%;"/></div></div>');
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
