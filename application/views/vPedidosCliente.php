<div class="card border-0" id="MenuTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-3 float-left">
                <legend class="float-left">Pedidos del Cliente</legend>
            </div>
            <div class="col-12 col-sm-9" align="right">
                <button type="button" class="btn btn-info btn-sm" id="btnVerMisMovimientos"><span class="fa fa-clipboard-list"></span><br>EN FIRME</button>
                <button type="button" class="btn btn-info btn-sm" id="btnAutorizacion"><span class="fa fa-check-square "></span><br>POR AUTORIZAR</button>
                <button type="button" class="btn btn-info btn-sm" id="btnFinalizadosPagados"><span class="fa fa-dollar-sign "></span><br>PAGADOS</button>
                <button type="button" class="btn btn-info btn-sm" id="btnFinalizadosNoPagados"><span class="fa fa-eye "></span><br>NO PAGADOS</button>
                <button type="button" class="btn btn-info btn-sm" id="btnVerTodos"><span class="fa fa-list-ol " ></span><br>VER TODO</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnNuevo"><span class="fa fa-plus " ></span><br>NUEVO</button>
            </div>
        </div>
        <div  id="Registros" class="row">
            <table id="tblRegistros" class="table table-sm" style="width:100%">
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar Reporte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12 col-md-12 " >
                    <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                        <li class="nav-item"><a href="#Generales" class="nav-link active show"  data-toggle="tab">Presupuesto</a></li>
                        <li class="nav-item"><a href="#Estimacion" class="nav-link" data-toggle="tab">Fotográfico</a></li>
                        <li class="nav-item"><a href="#Fotos" class="nav-link" data-toggle="tab">Fotográfico</a></li>
                        <li class="nav-item d-none" id="rNordes"><a href="#Nordes" class="nav-link" data-toggle="tab">Nordes</a></li>
                    </ul>
                </div>
                <br>
                <div class="tab-content dt-buttons">
                    <div role="tabpanel" class="tab-pane fade active show" id="Generales">
                        <button onclick="onReportePresupuesto()" class="btn btn-primary btn-sm"><span class="fa fa-dollar-sign "></span><br>PRESUPUESTO</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Estimacion">
                        <button onclick="onReporteGenerador()" class="btn btn-primary btn-sm"><span class="fa fa-calculator "></span><br>GENERADORES</button>
                        <button onclick="onReporteCroquis()" class="btn btn-primary btn-sm"><span class="fa fa-crop "></span><br>REPORTE DE CROQUIS</button>
                        <button onclick="onReporteFotografico()" class="btn btn-primary btn-sm"><span class="fa fa-camera "></span><br>REPORTE FOTOGRÁFICO</button>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Fotos">
                        <button onclick="onReporteLevantamientoDespues();" class="btn btn-primary btn-sm"><span class="fa fa-camera "></span><br>FOTOS DEL RESULTADO FINAL</button>
                        <button onclick="onReporteLevantamientoCompleto()" class="btn btn-primary btn-sm"><span class="fa fa-image "></span><br>COMPARATIVO ANTES/DESPUÉS</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Nordes">
                        <button onclick="onReporteNordesActaRecepcion();" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf "></span><br>Acta Recepción Trabajos Extras</button>
                        <button onclick="onReporteNordesHojaServicio();" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf "></span><br>Hoja de Servicio Diario</button>
                        <button onclick="onReporteNordesReporteTableros();" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf "></span><br>Reporte Tableros Iguala</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--PANEL DATOS-->
<div id="" class="container-fluid">
    <div class="card border-0  d-none" id="pnlDatos">
        <div class="card-body text-dark">
            <form id="frmNuevo">
                <div class="row">
                    <div class="col-6 col-sm-3 col-md-4 float-left">
                        <legend >Datos del Pedido</legend>
                    </div>
                    <div class="col-6 col-sm-2 col-md-2" align="right">
                        <button type="button" class="btn btn-raised btn-success btn-sm d-none" id="btnAutorizar" data-toggle="tooltip" data-placement="bottom" title="Sí esta de acuerdo con el presupuesto haga click aquí" >
                            <span class="fa fa-check-square "></span> AUTORIZAR PRESUPUESTO
                        </button>
                    </div>
                    <div class="col-12 col-sm-7 col-md-6" align="right">
                        <button type="button" class="btn btn-primary btn-sm" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" >
                            <span class="fa fa-arrow-left" ></span>
                        </button>
                        <button type="button" class="btn btn-raised btn-warning btn-sm" id="btnImprimirReportesEditarTrabajo" data-toggle="tooltip" data-placement="bottom" title="Imprimir"><span class="fa fa-print "></span> </button>
                        <button type="button" class="btn btn-raised btn-danger btn-sm" id="btnEliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><span class="fa fa-trash " ></span></button>
                        <button type="button" class="btn btn-raised btn-info btn-sm" id="btnGuardar"><span class="fa fa-save "></span> GUARDAR</button>
                    </div>
                </div>
                <fieldset>
                    <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                        <li class="nav-item"><a href="#Datos" class="nav-link active show"  data-toggle="tab">Datos Pedido</a></li>
                        <li class="nav-item"><a href="#Datos2" class="nav-link" data-toggle="tab">Adjunto</a></li>
                    </ul>
                    <br>
                    <ul class="progress-indicator pt-3 pb-3 table-responsive" style="background-color: white; border-radius: 3px;" id="pEstatusTrabajo">
                        <li id="pPedido">
                            <span class="bubble"></span>
                            1. Pedido
                        </li>
                        <li id="pPresupuesto">
                            <span class="bubble"></span>
                            2. Presupuesto
                        </li>
                        <li id="pAutorizacion">
                            <span class="bubble"></span>
                            3. Autorización
                        </li>
                        <li id="pEjecucion">
                            <span class="bubble"></span>
                            4. Ejecución
                        </li>
                        <li id="pFinalizado">
                            <span class="bubble"></span>
                            5. Finalizado
                        </li>
                    </ul>

                    <div id="CapturaDatos">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active show" id="Datos">
                                <!-- PANEL DE DATOS GENERALES-->
                                <div class="row">
                                    <div class=" col-12 col-sm-4 col-md-4 col-lg-2">
                                        <div class="form-group label-static">
                                            <label for="ID" class="control-label">Folio</label>
                                            <input type="text" id="ID" name="ID" class="form-control form-control-sm" readonly="" placeholder="" autofocus="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-2">
                                        <div class="form-group label-static">
                                            <label for="FechaOrigen" class="control-label">Fecha Origen*</label>
                                            <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control form-control-sm"  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4 col-md-4 col-lg-2">
                                        <div class="form-group label-static">
                                            <label for="HoraOrigen" class="control-label">Hora Origen*</label>
                                            <input type="text"  class="form-control form-control-sm" required="" name="HoraOrigen" id="HoraOrigen" data-inputmask="'alias': 'datetime'" data-minute-step="1"/>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="form-group label-static">
                                            <label for="Cliente_ID" class="control-label">Cliente</label>
                                            <input type="text" id="Cliente_ID" name="Cliente_ID" class="form-control form-control-sm"  placeholder="" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6  col-md-6 col-lg-3">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Sucursal*</label>
                                            <select id="Sucursal_ID" name="Sucursal_ID" class="form-control form-control-sm required" >
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-static">
                                            <label for="Solicitante" class="control-label">Solicitante*</label>
                                            <input type="text" id="Solicitante" name="Solicitante" class="form-control form-control-sm"  placeholder="Nombre de la persona quien solicita el trabajo" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Especialidad</label>
                                            <select id="Especialidad_ID" name="Especialidad_ID" class="form-control form-control-sm" >
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Área</label>
                                            <select id="Area_ID" name="Area_ID" class="form-control form-control-sm" >
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12">
                                        <div class="form-group label-static">
                                            <label for="TrabajoSolicitado" class="control-label">Trabajo Solicitado*</label>
                                            <textarea class="col-md-12 form-control required" placeholder="Introduzca aquí el trabajo que solicita" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="5" required="" ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Datos2">
                                <div class="row">
                                    <div class="col-md-12" align="center">
                                        <div id="VistaPrevia" class="col-md-12" align="center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-6">
                                <h6>Los campos con * son obligatorios</h6>
                            </div>
                            <div class="col-6 col-md-6" id="ImporteTotal"  align="right">
                                <strong>Importe :<h5 class="text-success">$ 0.0</h5></strong>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/PedidoCliente/';

    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");
    var btnAutorizacion = $("#btnAutorizacion");
    var btnFinalizadosPagados = $("#btnFinalizadosPagados");
    var btnFinalizadosNoPagados = $("#btnFinalizadosNoPagados");
    var btnNuevo = $("#btnNuevo");
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    var btnCleanFilter = $("#btnCleanFilter");
    var pnlDatos = $("#pnlDatos");
    var menuTablero = $('#MenuTablero');
    var btnEliminar = $("#btnEliminar");
    var btnAutorizar = $("#btnAutorizar");
    /*Reportes*/
    var btnImprimirReportesEditarTrabajo = $("#btnImprimirReportesEditarTrabajo");
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    var currentDate = new Date();
    var nuevo = true;
    var tblRegistrosX = $("#tblRegistros"), Registros;
    $(document).ready(function () {
        btnVerMisMovimientos.on("click", function () {
            tblRegistrosX.DataTable().columns().search('').draw();
            tblRegistrosX.DataTable().column(5).search("Pedido|Presupuesto|Ejecución", true, false).draw();
            tblRegistrosX.DataTable().column(6).search("Concluido|Borrador|SinEnviar", true, false).draw();
        });
        btnVerTodos.on("click", function () {
            tblRegistrosX.DataTable().columns().search('').draw();
        });

        btnAutorizacion.on("click", function () {
            tblRegistrosX.DataTable().columns().search('').draw();
            tblRegistrosX.DataTable().column(5).search("Autorización", true, false).draw();
            tblRegistrosX.DataTable().column(6).search("Concluido|Borrador|SinEnviar|Entregado", true, false).draw();
        });
        btnFinalizadosPagados.on("click", function () {
            tblRegistrosX.DataTable().columns().search('').draw();
            tblRegistrosX.DataTable().column(5).search("Pagado", true, false).draw();
            tblRegistrosX.DataTable().column(6).search("Concluido|Borrador|SinEnviar|Entregado", true, false).draw();
        });

        btnFinalizadosNoPagados.on("click", function () {
            tblRegistrosX.DataTable().columns().search('').draw();
            tblRegistrosX.DataTable().column(5).search("Finalizado", true, false).draw();
            tblRegistrosX.DataTable().column(6).search("Concluido|Borrador|SinEnviar|Entregado", true, false).draw();
        });
        /*Modal de reportes*/
        btnImprimirReportesEditarTrabajo.on("click", function () {
            mdlReportesEditarTrabajo.modal('show');
        });
        btnNuevo.on("click", function () {
            menuTablero.addClass("d-none");
            pnlDatos.removeClass("d-none");
            pnlDatos.find("input").val("");
            pnlDatos.find("textarea").val("");
            pnlDatos.find('#HoraOrigen').inputmask({mask: "h:s t\\m",
                placeholder: "hh:mm xm - hh:mm xm",
                alias: "datetime",
                hourFormat: "12"});
            pnlDatos.find('#FechaOrigen').val(getToday());
            pnlDatos.find(".nav-tabs a").removeClass("active show");
            $(pnlDatos.find(".nav-tabs a")[0]).addClass("active show");
            pnlDatos.find("#Datos").addClass("active show");
            pnlDatos.find("#Datos2").removeClass("active show");
            pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
            btnEliminar.removeClass("d-none");
            btnAutorizar.addClass("d-none");
            btnImprimirReportesEditarTrabajo.removeClass("d-none");
            btnGuardar.removeClass("d-none");
            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            getCliente();
            getSucursalesbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");
            getEspecialidadesbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");
            getAreasbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");
            nuevo = true;
            $(':input:text:enabled:visible:first').focus();
        });
        btnCancelar.on("click", function () {
            menuTablero.removeClass("d-none");
            pnlDatos.addClass("d-none");
        });
        btnGuardar.click(function () {
            isValid('pnlDatos');
            if (valido) {
                var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);

                if (!nuevo) {
                    $.ajax({
                        url: master_url + 'onModificar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO EL REGISTRO', 'success');
                        getRecords();

                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    frm.append('Estatus', 'Borrador');
                    frm.append('EstatusTrabajo', 'Pedido');
                    frm.append('Usuario_ID', "<?php echo $this->session->userdata('ID'); ?>");
                    frm.append('Cliente_ID', "<?php echo $this->session->userdata('Cliente'); ?>");
                    $.ajax({
                        url: master_url + 'onAgregar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO REGISTRO', 'success');
                        pnlDatos.find("[name='ID']").val(data);
                        nuevo = false;
                        getRecords();
                        pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('complete active');
                        pnlDatos.find('#pEstatusTrabajo').find('#pPedido').addClass('active').html('').html('<span class="bubble"></span> 1. Pedido <br><small>(activo)</small>');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', '* DEBE DE COMPLETAR LOS CAMPOS REQUERIDOS *', 'danger');
            }
        });
        btnEliminar.on("click", function () {
            if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
                swal({
                    title: "Confirmar",
                    text: "Deseas eliminar el registro?",
                    icon: "warning",
                    buttons: ["Cancelar", "Aceptar"]
                }).then((willDelete) => {
                    if (willDelete) {
                        HoldOn.open({
                            theme: "sk-bounce",
                            message: "CARGANDO DATOS..."
                        });
                        $.ajax({
                            url: master_url + 'onEliminar',
                            type: "POST",
                            data: {
                                ID: IdMovimiento
                            }
                        }).done(function (data, x, jq) {
                            getRecords();
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PEDIDO ELIMINADO', 'danger');
                            pnlDatos.addClass("d-none");
                            menuTablero.removeClass("d-none");
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                            HoldOn.close();
                        });
                    }
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        btnAutorizar.on("click", function () {
            if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
                swal({
                    title: "Confirmación de datos",
                    text: "Deseas autorizar el pedido?",
                    icon: "info",
                    closeOnEsc: false,
                    closeOnClickOutside: false,
                    buttons: ["No", "Si"]
                }).then((response) => {
                    if (response) {
                        $.ajax({
                            url: master_url + 'onAutorizarPedido',
                            type: "POST",
                            data: {
                                ID: IdMovimiento,
                                EstatusTrabajo: 'Ejecución'
                            }
                        }).done(function (data, x, jq) {
                            getRecords();
                            pnlDatos.addClass("d-none");
                            menuTablero.removeClass("d-none");
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                        });
                    } else {
                        $.ajax({
                            url: master_url + 'onAutorizarPedido',
                            type: "POST",
                            data: {
                                ID: IdMovimiento,
                                EstatusTrabajo: 'No Autorizado'
                            }
                        }).done(function (data, x, jq) {
                            Registros.ajax.reload();
                            pnlDatos.addClass("d-none");
                            menuTablero.removeClass("d-none");
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                        });
                    }
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        getRecords();
        handleEnter();
    });
    IdMovimiento = 0;

    function getRecords() {
        HoldOn.open({
            theme: 'sk-cube',
            message: 'CARGANDO...'
        });
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistros')) {
            tblRegistrosX.DataTable().destroy();
        }
        Registros = tblRegistrosX.DataTable({
            "dom": 'Bfrtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getRecords',
                "dataType": "json",
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
            "autoWidth": true,
            "bStateSave": true,
            "colReorder": true,
            "displayLength": 12,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            keys: true,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                tblRegistrosX.DataTable().columns().search('').draw();
                tblRegistrosX.DataTable().column(5).search("Pedido|Presupuesto|Ejecución", true, false).draw();
                tblRegistrosX.DataTable().column(6).search("Concluido|Borrador|SinEnviar", true, false).draw();
                HoldOn.close();
            }
        });
        $('#tblRegistros_filter input[type=search]').focus();

        Registros.columns().every(function () {
            var that = this;
            $('input,select', this.footer()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

        tblRegistrosX.find('tbody').on('click', 'tr', function () {
            tblRegistrosX.find("tbody tr").removeClass("success");
            $(this).addClass("success");

            nuevo = false;
            var dtm = Registros.row(this).data();
            IdMovimiento = parseInt(dtm.ID);

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
                if (trabajo.Cliente_ID === '16') {
                    mdlReportesEditarTrabajo.find('#rNordes').removeClass('d-none');
                }
                pnlDatos.find(".nav-tabs a").removeClass("active show");
                $(pnlDatos.find(".nav-tabs a")[0]).addClass("active show");
                pnlDatos.find("#Datos").addClass("active show");
                pnlDatos.find("#Datos2").removeClass("active show");
                $.each(pnlDatos.find("select"), function (k, v) {
                    pnlDatos.find("select")[k].selectize.clear(true);
                });

                $.ajax({
                    url: master_url + 'getSucursalesByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function (data, x, jq) {
                    $.each(data, function (k, v) {
                        pnlDatos.find("[name='Sucursal_ID']")[0].selectize.addOption({text: v.CR + ' - ' + v.Sucursal, value: v.ID});
                    });
                    pnlDatos.find("[name='Sucursal_ID']")[0].selectize.setValue(trabajo.Sucursal_ID);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                });
                $.ajax({
                    url: master_url + 'getEspecialidadesByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function (data, x, jq) {
                    $.each(data, function (k, v) {
                        pnlDatos.find("[name='Especialidad_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
                    });
                    pnlDatos.find("[name='Especialidad_ID']")[0].selectize.setValue(trabajo.Especialidad_ID);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                });
                $.ajax({
                    url: master_url + 'getAreasByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function (data, x, jq) {
                    $.each(data, function (k, v) {
                        pnlDatos.find("[name='Area_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
                    });
                    pnlDatos.find("[name='Area_ID']")[0].selectize.setValue(trabajo.Area_ID);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                menuTablero.addClass("d-none");
                pnlDatos.removeClass('d-none');
                $.each(data[0], function (k, v) {
                    if (v !== null && v !== '' && v !== 'null') {
                        pnlDatos.find("[name='" + k + "']").val(v);
                    }
                });
                pnlDatos.find("#Cliente_ID").val(trabajo.NombreCliente);

                if (trabajo.Adjunto !== null && trabajo.Adjunto !== undefined && trabajo.Adjunto !== '') {
                    var ext = getExt(trabajo.Adjunto);
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        pnlDatos.find("#VistaPrevia").html('<img id="trtImagen" src="' + base_url + trabajo.Adjunto + '" \n\
                                    class ="img-fluid"    \n\
                                    onclick="printImg(\' ' + base_url + trabajo.Adjunto + ' \')"  />');
                    }
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        pnlDatos.find("#VistaPrevia").html('<embed src="' + base_url + trabajo.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    }
                    if (ext !== "gif" && ext !== "jpg" && ext !== "jpeg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                        pnlDatos.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                    }
                } else {
                    pnlDatos.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                }
                if (trabajo.EstatusTrabajo === 'Pedido') {
                    pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPedido').addClass('active').html('').html('<span class="bubble"></span> 1. Pedido <br><small>(activo)</small>');
                    btnEliminar.removeClass("d-none");
                    btnAutorizar.addClass("d-none");
                    btnImprimirReportesEditarTrabajo.addClass("d-none");
                    btnGuardar.removeClass("d-none");
                    pnlDatos.find("#ImporteTotal").html('');
                    pnlDatos.find("#ImporteTotal").html('Estimado Cliente, su pedido será recibido y se procederá a realizar el presupuesto correspondiente.');
                } else if (trabajo.EstatusTrabajo === 'Presupuesto') {
                    disableFields();
                    pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPedido').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 1. Pedido <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPresupuesto').addClass('active').html('').html('<span class="bubble"></span> 2. Presupuesto <br><small>(activo)</small>');
                    btnEliminar.addClass("d-none");
                    btnAutorizar.addClass("d-none");
                    btnImprimirReportesEditarTrabajo.addClass("d-none");
                    btnGuardar.addClass("d-none");
                    pnlDatos.find("#ImporteTotal").html('');
                    pnlDatos.find("#ImporteTotal").html('Estimado Cliente, estamos trabajando en su presupuesto, gracias por su comprensión.');
                } else if (trabajo.EstatusTrabajo === 'Autorización') {
                    disableFields();
                    pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPedido').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 1. Pedido <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPresupuesto').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 2. Presupuesto <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pAutorizacion').addClass('active').html('').html('<span class="bubble"></span> 3. Autorización <br><small>(activo)</small>');
                    btnGuardar.addClass('d-none');
                    btnEliminar.addClass("d-none");
                    btnAutorizar.removeClass("d-none");
                    btnImprimirReportesEditarTrabajo.removeClass("d-none");
                    var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    pnlDatos.find("#ImporteTotal").html('');
                    pnlDatos.find("#ImporteTotal").html('<strong class="">Importe: <strong><h5 class="text-success">$' + importeFormateado + '</h5>');
                } else if (trabajo.EstatusTrabajo === 'No Autorizado') {
                    disableFields();
                    pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPedido').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 1. Pedido <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPresupuesto').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 2. Presupuesto <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pAutorizacion').addClass('active').html('').html('<span class="bubble"></span> 3. Autorización <br><small>(activo)</small>');
                    btnEliminar.addClass("d-none");
                    btnImprimirReportesEditarTrabajo.removeClass("d-none");
                    btnGuardar.addClass("d-none");
                    btnAutorizar.addClass("d-none");
                    var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    pnlDatos.find("#ImporteTotal").html('');
                    pnlDatos.find("#ImporteTotal").html('Presupuesto rechazado por el cliente. <br> <strong class="">Importe : <strong><h5 class="text-success">$' + importeFormateado + '</h5>');
                } else if (trabajo.EstatusTrabajo === 'Ejecución') {
                    disableFields();
                    pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPedido').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 1. Pedido <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPresupuesto').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 2. Presupuesto <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pAutorizacion').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 3. Autorización <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pEjecucion').addClass('active').html('').html('<span class="bubble"></span> 4. Ejecución <br><small>(activo)</small>');
                    btnEliminar.addClass("d-none");
                    btnAutorizar.addClass("d-none");
                    btnImprimirReportesEditarTrabajo.removeClass("d-none");
                    btnGuardar.addClass("d-none");
                    var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    pnlDatos.find("#ImporteTotal").html('');
                    pnlDatos.find("#ImporteTotal").html('<strong class="">Importe : <strong><h5 class="text-success">$' + importeFormateado + '</h5>');
                } else if (trabajo.EstatusTrabajo === 'Finalizado') {
                    disableFields();
                    pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPedido').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 1. Pedido <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPresupuesto').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 2. Presupuesto <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pAutorizacion').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 3. Autorización <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pEjecucion').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 4. Ejecución <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pFinalizado').addClass('active').html('').html('<span class="bubble"></span> 5. Finzalizado <br><small>(activo)</small>');
                    btnEliminar.addClass("d-none");
                    btnAutorizar.addClass("d-none");
                    btnImprimirReportesEditarTrabajo.removeClass("d-none");
                    btnGuardar.addClass("d-none");
                    var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    pnlDatos.find("#ImporteTotal").html('');
                    pnlDatos.find("#ImporteTotal").html('<strong class="">Importe: <strong><h5 class="text-success">$' + importeFormateado + '</h5>');
                } else if (trabajo.EstatusTrabajo === 'Pagado') {
                    disableFields();
                    pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPedido').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 1. Pedido <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pPresupuesto').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 2. Presupuesto <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pAutorizacion').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 3. Autorización <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pEjecucion').addClass('completed').html('').html('<span class="bubble"></span><i class="fa fa-check-circle "></i> 4. Ejecución <br><small>(completado)</small>');
                    pnlDatos.find('#pEstatusTrabajo').find('#pFinalizado').addClass('active').html('').html('<span class="bubble"></span> 5. Finzalizado <br><small>(activo)</small>');
                    btnEliminar.addClass("d-none");
                    btnAutorizar.addClass("d-none");
                    btnImprimirReportesEditarTrabajo.removeClass("d-none");
                    btnGuardar.addClass("d-none");
                    var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                    pnlDatos.find("#ImporteTotal").html('');
                    pnlDatos.find("#ImporteTotal").html('<strong class="">Importe: <strong><h5 class="text-success">$' + importeFormateado + '</h5>');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });

        });

    }
    function disableFields() {
        $('#CapturaDatos').find('input,textarea,select').attr('disabled', true);
        $('#CapturaDatos').find('select')[0].selectize.disable();
        $('#CapturaDatos').find('select')[1].selectize.disable();
        $('#CapturaDatos').find('select')[2].selectize.disable();
    }
    function getCliente() {
        $.ajax({
            url: master_url + 'getClienteByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: "<?php echo $this->session->userdata('Cliente'); ?>"
            }
        }).done(function (data, x, jq) {
            pnlDatos.find("#Cliente_ID").val(data[0].Nombre);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getSucursalesbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getSucursalesByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Sucursal_ID']")[0].selectize.addOption({text: v.CR + ' - ' + v.Sucursal, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getEspecialidadesbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getEspecialidadesbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Especialidad_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getAreasbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getAreasbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Area_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    /*-------------------Reportes----------------------------*/
    var master_urlReportes = base_url + 'index.php/Trabajos/';
    function onReportePresupuesto() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReportePresupuesto',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO A&R, GENERADO', 'success');
                ;
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    var Cliente = "<?php echo $this->session->userdata('Cliente'); ?>";
    function onReporteLevantamientoDespues() {
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoDespuesPrinciple';
        } else {
            reporte = 'onReporteLevantamientoDespues';
        }
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + reporte,
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS DESPUES, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteLevantamientoCompleto() {
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoCompletoPrinciple';
        } else {
            reporte = 'onReporteLevantamientoCompleto';
        }
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + reporte,
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE LEVANTAMIENTO GENERAL, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteGenerador() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteGenerador',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADOR, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteCroquis() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteCroquis',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE CROQUIS, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteFotografico() {
        var mov = pnlDatos.find("#Movimiento").val();
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteFotografico',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOGRAFICO, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Reporte cajero*/
    function onReportePresentacionCajeros() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteCajero',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESENTACIÓN FOTOGRÁFICA, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Reportes NORDES*/
    function onReporteNordesActaRecepcion() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteNordesActaRecepcion',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteNordesHojaServicio() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteNordesHojaServicio',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteNordesReporteTableros() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteNordesReporteTableros',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function printImg(url) {
        var win = window.open('');
        win.document.write('<img src="' + url + '" onload="window.print();window.close()" />');
        win.focus();
    }
</script>
