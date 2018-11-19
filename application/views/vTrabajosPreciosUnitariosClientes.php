<div class="card border-0 m-3" id="MenuTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-3 float-left">
                <legend class="float-left">Servicios con Precios Unitarios</legend>
            </div>
            <div class="col-12 col-sm-9" align="right">
                <button type="button" class="btn btn-info btn-sm mb-2" id="btnVerMisMovimientos"><span class="fa fa-clipboard-list"></span><br>EN FIRME</button>
                <button type="button" class="btn btn-info btn-sm mb-2" id="btnAutorizacion"><span class="fa fa-check-square "></span><br>POR AUTORIZAR</button>
                <button type="button" class="btn btn-info btn-sm mb-2" id="btnFinalizadosPagados"><span class="fa fa-dollar-sign "></span><br>PAGADOS</button>
                <button type="button" class="btn btn-info btn-sm mb-2" id="btnFinalizadosNoPagados"><span class="fa fa-eye "></span><br>NO PAGADOS</button>
                <button type="button" class="btn btn-info btn-sm mb-2" id="btnVerTodos"><span class="fa fa-list-ol " ></span><br>VER TODO</button>
            </div>
        </div>
        <div class="row" id="Trabajos">
            <table id="tblTrabajos" class="table table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Folio</th>
                        <th>Sucursal</th>
                        <th>Fecha</th>
                        <th>Trabajo Solicitado</th>
                        <th>Estatus</th>
                        <th>Estatus2</th>
                        <th>Importe</th>
                        <th>Orden C.</th>
                        <th>Fecha Pago</th>
                        <th>Folio Fact.</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th><input type="text" placeholder="Buscar por ID" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Folio" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Sucursal" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Fecha" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por T. Solicitado" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Estatus" class="form-control form-control-sm"/></th>
                        <th></th>
                        <th></th>
                        <th><input type="text" placeholder="Buscar por O.C." class="form-control form-control-sm"/></th>
                        <th></th>
                        <th><input type="text" placeholder="Buscar por Folio Fact." class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Usuario" class="form-control form-control-sm"/></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!--Reportes-->
<div id="mdlReportesEditarTrabajo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content modal-lg ">
        <div class="modal-header">
            <h5 class="modal-title">Seleccionar Reporte</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <button onclick="onImprimirPreciosUnitarios()" class="btn btn-primary btn-sm "><span class="fa fa-dollar-sign fa-1x"></span><br>IMPRIMIR REPORTE P.U.</button>
        </div>
    </div>
</div>
<!--PANEL DATOS-->
<div class="card border-0 m-3 d-none" id="pnlDatos">
    <div class="card-body text-dark">
        <form id="frmNuevo">
            <div id="CapturaDatos">
                <div class="row ">
                    <div class="col-6 col-sm-4 col-md-5 float-left">
                        <legend>Revisión de precios unitarios del Servicio</legend>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3" id="ImporteTotal" >
                        <strong>Importe del Presupuesto:</strong><h5 class="text-success"><strong></strong></h5>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4" align="right">
                        <button type="button" class="btn btn-primary" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" ><span class="fa fa-arrow-left" ></span></button>
                        <button type="button" class="btn btn-warning" id="btnImprimirReportes" data-toggle="tooltip" data-placement="top" title="" data-original-title="Imprimir" ><span class="fa fa-print " ></span> </button>
                        <button type="button" class="btn btn-success" id="btnFinalizarCaptura" data-toggle="tooltip" data-placement="top" title="" data-original-title="Finalizar" ><span class="fa fa-check " ></span> FINALIZAR CAPTURA</button>

                    </div>
                    <div class="col-12">
                        <hr>
                        <ul class="table-responsive progress-indicator pt-3 pb-2" style="background-color: white; border-radius: 3px;" id="EstatusTrabajo">
                            <li id="stsPedido" step="1">
                                <span class="bubble"></span>
                                1. Pe
                            </li>
                            <li id="stsPresupuesto" step="2">
                                <span class="bubble"></span>
                                2. Pre
                            </li>
                            <li id="stsAutorizacion" step="3">
                                <span class="bubble"></span>
                                3. Aut
                            </li>
                            <li id="stsNoAutorizado" step="4">
                                <span class="bubble"></span>
                                4. No Aut
                            </li>
                            <li id="stsEjecucion" step="5">
                                <span class="bubble"></span>
                                5. Eje
                            </li>
                            <li id="stsFinalizado" step="6">
                                <span class="bubble"></span>
                                6. Fin
                            </li>
                            <li id="stsFacturado" step="7">
                                <span class="bubble"></span>
                                7. Fact
                            </li>
                            <li id="stsPagado" step="8">
                                <span class="bubble"></span>
                                8. Pag
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- PANEL DE DATOS GENERALES-->

                <div class="row">
                    <div class="col-5 col-sm-4 col-md-2 col-lg-2 col-xl-1">
                        <label for="ID" class="control-label">ID</label>
                        <input type="text" id="ID" name="ID" class="form-control form-control-sm" readonly="" placeholder="" readonly="">
                    </div>
                    <div class="col-7 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                        <label for="" class="control-label">Folio Cliente</label>
                        <input type="text" id="FolioCliente" name="FolioCliente" class="form-control form-control-sm"  placeholder="" autofocus="" readonly="">
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-2 col-xl-3">
                        <label for="FechaCreacion" class="control-label">Fecha *</label>
                        <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control form-control-sm"  data-provide="datepicker" data-date-format="dd/mm/yyyy" required="" readonly="">
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <label for="" class="control-label">Cliente*</label>
                        <input type="text" id="Cliente" name="Cliente" class="form-control form-control-sm" readonly="">
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <label for="" class="control-label">Sucursal*</label>
                        <input type="text" id="Sucursal" name="Sucursal" class="form-control form-control-sm" readonly="">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <label for="" class="control-label">Trabajo Solicitado</label>
                        <textarea class="col-12 form-control" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="1" required="" readonly=""></textarea>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <label for="" class="control-label">Trabajo Requerido</label>
                        <textarea class="col-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="1" required="" readonly=""></textarea>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!--PANEL DETALLE-->
<div class="card border-0 m-3 d-none" id="pnlDetalleTrabajo">
    <div class="card-body">
        <!--NUEVA TABLA CONCEPTOS-->
        <div id="ConceptosAbiertos" class="row" >
            <table id="tblConceptosAbiertos" class="table table-sm display" style="width:100% " >
                <thead>
                    <tr >
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Clave</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Unidad</th>
                        <th>Costo A&R</th>
                        <th>Importe A&R</th>
                        <th>Capturar Costo</th>
                        <th>Importe</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!--FIN NUEVA TABLA DE CONCEPTOS-->

    </div>

</div>

<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/TrabajosPreciosUnitariosClientes/';
    var TipoAcceso = "<?php echo $this->session->userdata('TipoAcceso'); ?>";
    var IdMovimiento = 0;
    var pnlDatos = $("#pnlDatos");
    var btnNuevo = $("#btnNuevo");
    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");
    var btnAutorizacion = $("#btnAutorizacion");
    var btnFinalizadosPagados = $("#btnFinalizadosPagados");
    var btnFinalizadosNoPagados = $("#btnFinalizadosNoPagados");

    var btnVerTodosEnFirme = $('#btnVerTodosEnFirme');
    var btnCancelar = $("#btnCancelar");
    var btnImprimirReportes = pnlDatos.find("#btnImprimirReportes");
    var btnFinalizarCaptura = pnlDatos.find("#btnFinalizarCaptura");
    var menuTablero = $('#MenuTablero');

    var pnlDetalleTrabajo = $("#pnlDetalleTrabajo");
    var btnGuardar = pnlDetalleTrabajo.find("#btnGuardar");

    var mdlEdicionDetalle = $('#mdlEdicionDetalle');
    var btnGuardarEdicion = mdlEdicionDetalle.find('#btnGuardarEdicion');
    /*Reportes*/
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    var tblTrabajos = $("#tblTrabajos"), Trabajos;
    var tblConceptosAbiertos = pnlDetalleTrabajo.find("#tblConceptosAbiertos"), ConceptosAbiertos;
    var ImporteTotal;
    $(document).ready(function () {

        getRecords();
        /*EVENTOS LEVANTAMIENTO*/
        btnFinalizarCaptura.on("click", function () {
            swal({
                title: "Estás seguro", text: "Después de finalizar la captura se borrarán los datos capturados", icon: "warning", buttons: ["No,Seguir Capturando", "Aceptar"]
            }).then((willDelete) => {
                if (willDelete) {
                    onImprimirPreciosUnitarios();
                    $.ajax({
                        url: master_url + 'onModificarTemp',
                        type: "POST",
                        data: {
                            ID: IdMovimiento
                        }
                    }).done(function (data, x, jq) {
                        ConceptosAbiertos.ajax.reload();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    });
                }
            });
        });
        btnImprimirReportes.on("click", function () {
            mdlReportesEditarTrabajo.modal('show');
        });
        btnVerMisMovimientos.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
            tblTrabajos.DataTable().column(5).search("Pe|Pre|Eje", true, false).draw();
            tblTrabajos.DataTable().column(6).search("Concluido|Borrador|SinEnviar", true, false).draw();
        });
        btnVerTodos.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
        });
        btnAutorizacion.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
            // tblRegistrosX.DataTable().column(5).search("Aut", true, false).draw();
            tblTrabajos.DataTable().column(5).search('^Aut$', true, false).draw();
            tblTrabajos.DataTable().column(6).search("Concluido|Borrador|SinEnviar|Entregado", true, false).draw();
        });
        btnFinalizadosPagados.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
            tblTrabajos.DataTable().column(5).search("Pag", true, false).draw();
            tblTrabajos.DataTable().column(6).search("Concluido|Borrador|SinEnviar|Entregado", true, false).draw();
        });
        btnFinalizadosNoPagados.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
            tblTrabajos.DataTable().column(5).search("Fin", true, false).draw();
            tblTrabajos.DataTable().column(6).search("Concluido|Borrador|SinEnviar|Entregado", true, false).draw();
        });
        btnCancelar.on("click", function () {
            menuTablero.removeClass("d-none");
            pnlDatos.addClass("d-none");
            pnlDetalleTrabajo.addClass("d-none");
            Trabajos.ajax.reload();
        });
    });
    /*Funciones de tablas*/
    function onCapturarCantidad(CostoCte, ID, Cantidad) {
        var ImporteCte = CostoCte * Cantidad;
        $.ajax({
            url: master_url + 'onModificarDetalle',
            type: "POST",
            data: {
                ID: ID,
                CostoCte: CostoCte,
                ImporteCte: ImporteCte
            }
        }).done(function (data, x, jq) {
            ConceptosAbiertos.ajax.reload();
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }
    function getRecords() {
        temp = 0;
        HoldOn.open({theme: 'sk-cube', message: 'CARGANDO...'});
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblTrabajos')) {
            tblTrabajos.DataTable().destroy();
        }
        Trabajos = tblTrabajos.DataTable({
            "dom": 'Bfrtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getRecords',
                "dataSrc": ""
            },
            "columns": [
                {"data": "ID"},
                {"data": "Folio"},
                {"data": "Sucursal"},
                {"data": "Fecha"},
                {"data": "TrabajoSolicitado"},
                {"data": "Estatus"},
                {"data": "Estatus2"},
                {"data": "Importe"},
                {"data": "OrdenCompra"},
                {"data": "FechaPago"},
                {"data": "FolioFactura"},
                {"data": "Usuario"}

            ],
            "columnDefs": [
                {
                    "targets": [6],
                    "visible": false,
                    "searchable": true
                }
            ],
            language: lang,
            select: true,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 10,
//            "bStateSave": true,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                tblTrabajos.DataTable().columns().search('').draw();
                tblTrabajos.DataTable().column(5).search("Pe|Pre|Eje", true, false).draw();
                tblTrabajos.DataTable().column(6).search("Concluido|Borrador|SinEnviar", true, false).draw();
                HoldOn.close();
            }
        });
        tblTrabajos.find('tbody').on('click', 'tr', function () {
            menuTablero.addClass("d-none");
            tblTrabajos.find("tbody tr").removeClass("success");
            $(this).addClass("success");
            var dtm = Trabajos.row(this).data();
            IdMovimiento = parseInt(dtm.ID);
            nuevo = false;
            getTrabajoByID(IdMovimiento);
        });
        $('#tblTrabajos_filter input[type=search]').focus();
        Trabajos.columns().every(function () {
            var that = this;
            $('input,select', this.footer()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });
    }
    function getTrabajoByID(ID) {
        IdMovimiento = ID;
        if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'getTrabajoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdMovimiento
                }
            }).done(function (data, x, jq) {
                var trabajo = data[0];
                $.each(data[0], function (k, v) {
                    if (v !== null && v !== '' && v !== 'null') {
                        if (pnlDatos.find("[name='" + k + "']").is('select')) {
                            pnlDatos.find("[name='" + k + "']")[0].selectize.setValue(v);
                        }
                        pnlDatos.find("[name='" + k + "']").val(v);
                    }
                });
                menuTablero.addClass("d-none");
                Estatus = trabajo.Estatus;
                ImporteTotal = trabajo.Importe;

                var Importe = parseFloat(ImporteTotal).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                pnlDatos.find("#ImporteTotal").html('<strong class="">Importe del Presupuesto: <strong><h5 class="text-success">$' + Importe + '</h5>');
                /*ACTUALIZAR ESTATUS TRABAJO*/
                var text = '';
                $.each(pnlDatos.find('#EstatusTrabajo > li'), function () {
                    text = $(this).text();
                    text = text.replace("(COMPLETADO)", "");
                    text = text.replace("(ACTIVO)", "");
                    $(this).html("<span class=\"bubble\"></span>" + text);
                });
                pnlDatos.find("#EstatusTrabajo > li").removeClass("completed active");
                var li = pnlDatos.find('#EstatusTrabajo > li');
                switch (trabajo.EstatusTrabajo) {
                    case 'Pedido':
                        li.eq(0).addClass("active");
                        text = li.eq(0).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(0).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Presupuesto':
                        li.slice(0, 1).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(1).addClass("active");
                        text = li.eq(1).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(1).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Autorización':
                        li.slice(0, 2).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(2).addClass("active");
                        text = li.eq(2).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(2).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'No Autorizado':
                        li.slice(0, 3).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(3).addClass("active");
                        text = li.eq(3).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(3).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Ejecución':
                        li.slice(0, 4).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(4).addClass("active");
                        text = li.eq(4).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(4).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Finalizado':
                        li.slice(0, 5).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(5).addClass("active");
                        text = li.eq(5).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(5).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Facturado':
                        li.slice(0, 6).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(6).addClass("active");
                        text = li.eq(6).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(6).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Pagado':
                        li.slice(0, 7).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(7).addClass("active");
                        text = li.eq(7).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(7).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                }
                getDetalleAbiertoByID(IdMovimiento);
                pnlDatos.removeClass("d-none");
                pnlDetalleTrabajo.removeClass("d-none");
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }
    function getDetalleAbiertoByID(IDX) {
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        pnlDetalleTrabajo.find('#ConceptosPresupuesto').removeClass('d-none');
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblConceptosAbiertos')) {
            tblConceptosAbiertos.DataTable().destroy();
        }
        ConceptosAbiertos = tblConceptosAbiertos.DataTable({
            "dom": 'rt',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getTrabajoDetalleAbiertoByID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: IDX
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Categoria"},
                {"data": "Clave"},
                {"data": "Descripcion"},
                {"data": "Cantidad"},
                {"data": "Unidad"},
                {"data": "CostoAYR"},
                {"data": "ImporteAYR"},
                {"data": "Costo"},
                {"data": "Importe"}
            ],
            rowGroup: {
                endRender: function (rows, group) {
                    var cantidad = $.number(rows.data().pluck('Cantidad').reduce(function (a, b) {
                        return a + parseFloat(b);
                    }, 0), 2, '.', ',');
                    var importe = $.number(rows.data().pluck('ImporteAYR').reduce(function (a, b) {
                        return a + parseFloat(b);
                    }, 0), 2, '.', ',');
                    return $('<tr>').
                            append('<td colspan="2">Total de: ' + group + '</td>').append('<td>' + cantidad + '</td><td  colspan="2"></td><td>$' + importe + '</td></tr>');
                },
                dataSrc: "Categoria"
            },
            "createdRow": function (row, data, index) {
                $.each($(row).find("td"), function (k, v) {
                    var c = $(v);
                    var index = parseInt(k);
                    switch (index) {
                        case 0:
                            /*COSTO MO*/
                            c.addClass('text-info text-strong');
                            break;
                        case 1:
                            /*CONSUMO*/
                            c.addClass('text-warning text-strong');
                            break;
                        case 3:
                            /*CONSUMO*/
                            c.addClass('text-success text-strong');
                            break;
                        case 4:
                            /*CONSUMO*/
                            c.addClass('text-success text-strong');
                            break;
                    }
                });
            },
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api();//Get access to Datatable API
                // Update footer
                var totalCantidad = api.column(4).data().reduce(function (a, b) {
                    var ax = 0, bx = 0;
                    ax = $.isNumeric(a) ? parseFloat(a) : 0;
                    bx = $.isNumeric(getNumberFloat(b)) ? getNumberFloat(b) : 0;
                    return  (ax + bx);
                }, 0);
                $(api.column(4).footer()).html(api.column(4, {page: 'current'}).data().reduce(function (a, b) {
                    return  $.number(parseFloat(totalCantidad), 2, '.', ',');
                }, 0));

                var totalImporte = api.column(7).data().reduce(function (a, b) {
                    var ax = 0, bx = 0;
                    ax = $.isNumeric(a) ? parseFloat(a) : 0;
                    bx = $.isNumeric(getNumberFloat(b)) ? getNumberFloat(b) : 0;
                    return  (ax + bx);
                }, 0);
                $(api.column(7).footer()).html(api.column(7, {page: 'current'}).data().reduce(function (a, b) {
                    return '$' + $.number(parseFloat(totalImporte), 2, '.', ',');
                }, 0));
            },
            keys: false,
            language: lang,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 50,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [1, 'asc']/*ID*/, [0, 'desc']/*ID*/
            ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [1],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [4],
                    "render": function (data, type, row) {
                        return $.number(parseFloat(data), 2, '.', ',');
                    }
                },
                {
                    "targets": [6],
                    "render": function (data, type, row) {
                        return '$' + $.number(parseFloat(data), 2, '.', ',');
                    }
                },
                {
                    "targets": [7],
                    "render": function (data, type, row) {
                        return '$' + $.number(parseFloat(data), 2, '.', ',');
                    }
                },
                {
                    "targets": [9],
                    "render": function (data, type, row) {
                        return '$' + $.number(parseFloat(data), 2, '.', ',');
                    }
                }
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });
        tblConceptosAbiertos.find('tbody').on('click', 'tr', function () {
            //HoldOn.open({theme: 'sk-bounce', message: 'CARGANDO DATOS...'});
            tblConceptosAbiertos.find("tbody tr").removeClass("success");
            $(this).addClass("success");
            var tr = $(this);

            var dtm = ConceptosAbiertos.row(this).data();

        });
    }
    function onImprimirPreciosUnitarios() {

        $.ajax({
            url: master_url + 'onImprimirReporte',
            type: "POST",
            data: {
                ID: IdMovimiento,
                Cliente: pnlDatos.find('#Cliente').val(),
                Sucursal: pnlDatos.find('#Sucursal').val()
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotifyOld('fa fa-check', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotifyOld('fa fa-exclamation ', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });

    }
    function validate(event, val) {
        if (((event.which !== 46 || (event.which === 46 && val === '')) || val.indexOf('.') !== -1) && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    }
</script>
<style>
    td span.badge{
        font-size: 14px !important;
    }
    table tbody tr td p.CustomDetalleDescripcion{
        max-height: 100px !important;;
        overflow: auto !important;
    }
    table tbody tr td > input[type="text"]{
        width: 100% !important;
    }
    .progress-indicator li:hover{
        cursor:pointer !important;
    }
    @media only screen and (max-width: 700px)  {
        .progress-indicator {
            width: 100% !important;
            display: inline-block  !important;
        }
    }
    .dropdown-item:hover, .dropdown-item:focus {
        color: #0f7864;
        text-decoration: none;
        background-color: transparent;
    }

    table tfoot tr th {
        font-size: 16px;
    }

    .text-strong {
        font-weight: bolder;
    }
    tr.group-start:hover td{
        background-color: #e0e0e0 !important;
        color: #000 !important;
    }
    tr.group-end td{
        background-color: #FFF !important;
        color: #000!important;
    }
    td{
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
</style>