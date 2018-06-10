<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading">
            <div class="cursor-hand">
                Explorar Servicios
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 table-responsive" id="Registros">
                    <table id="tblRegistros" class="table table-sm display " style="width:100%">
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
    var master_url = base_url + 'index.php/ExploradorServicios/';
    $(document).ready(function () {
        getRecords();
    });
    var tblRegistrosX = $("#tblRegistros"), Registros;
    function getRecords() {
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
            "autoWidth": false,
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
//        $('#tblRegistros_filter input[type=search]').focus();
//        tblRegistrosX.find('tbody').on('click', 'tr', function () {
//            tblRegistrosX.find("tbody tr").removeClass("success");
//            $(this).addClass("success");
//        });
        HoldOn.close();
    }

</script>
