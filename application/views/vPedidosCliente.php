<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="imgCliente" id="imgCliente"></div>
        <div class="panel-heading">
            <div class="cursor-hand">
                Pedidos del Cliente
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default" id="btnVerMisMovimientos"><span class="fa fa-binoculars fa-1x"></span><br>EN FIRME</button>
                    <button type="button" class="btn btn-default" id="btnAutorizacion"><span class="fa fa-check-square fa-1x"></span><br>POR AUTORIZAR</button>
                    <button type="button" class="btn btn-default" id="btnFinalizadosPagados"><span class="fa fa-dollar fa-1x"></span><br>PAGADOS</button>
                    <button type="button" class="btn btn-default" id="btnFinalizadosNoPagados"><span class="fa fa-eye fa-1x"></span><br>NO PAGADOS</button>
                    <button type="button" class="btn btn-default" id="btnVerTodos"><span class="fa fa-list-ol fa-1x" ></span><br>VER TODO</button>

                </div><div class="col-md-12 table-responsive" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>
<!--Confirmacion-->
<div id="mdlConfirmar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">Deseas eliminar el registro?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>
</div>
<!--Reportes-->
<div id="mdlReportesEditarTrabajo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Imprimir Reportes</h4>
        </div>
        <div class="modal-body">Selecciona el reporte que deseas imprimir: <br><br>
            <div class="col-6 col-md-12 " >
                <ul class="nav nav-tabs" role="tablist" id="ReportesTab">
                    <li role="presentation" class="active"><a href="#Generales" aria-controls="Generales" role="tab" data-toggle="tab">Presupuesto</a></li>
                    <li role="presentation"><a href="#Estimacion" aria-controls="Estimacion" role="tab" data-toggle="tab">Estimación</a></li>
                    <li role="presentation"><a href="#Fotos" aria-controls="Fotos" role="tab" data-toggle="tab">Fotográfico</a></li>
                    <li role="presentation" id="rNordes" class="d-none"><a href="#Nordes" aria-controls="Nordes" role="tab" data-toggle="tab">Nordes</a></li>
                </ul>
            </div>
            <div class="tab-content dt-buttons">
                <div role="tabpanel" class="tab-pane fade in active" id="Generales">
                    <button onclick="onReportePresupuesto()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>PRESUPUESTO</button>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Estimacion">
                    <button onclick="onReporteGenerador()" class="btn btn-default"><span class="fa fa-calculator fa-1x"></span><br>GENERADORES</button>
                    <button onclick="onReporteCroquis()" class="btn btn-default"><span class="fa fa-crop fa-1x"></span><br>REPORTE DE CROQUIS</button>
                    <button onclick="onReporteFotografico()" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>REPORTE FOTOGRÁFICO</button>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="Fotos">
                    <button onclick="onReporteLevantamientoDespues();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS DEL RESULTADO FINAL</button>
                    <button onclick="onReporteLevantamientoCompleto()" class="btn btn-default"><span class="fa fa-image fa-1x"></span><br>COMPARATIVO ANTES/DESPUÉS</button>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Nordes">
                    <button onclick="onReporteNordesActaRecepcion();" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>Acta Recepción Trabajos Extras</button>
                    <button onclick="onReporteNordesHojaServicio();" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>Hoja de Servicio Diario</button>
                    <button onclick="onReporteNordesReporteTableros();" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>Reporte Tableros Iguala</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--PANEL NUEVO-->
<div class="col-6 col-md-12">
    <div class="panel panel-default d-none animated slideInRight" id="pnlNuevoTrabajo">
        <div class="Custompanel-heading dt-EncabezadoControles" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>Nuevo Pedido</div>
                <div class="input-group pull-right" align="center">


                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" disabled="" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <span>&nbsp;&nbsp;</span>
                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardar" >GUARDAR</button>
                    <span>&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <fieldset>
                    <!-- Estatus -->
                    <div class="col-12 col-md-12">
                        <center>
                            <div class="form-group label-static">
                                <label class="radio-inline">
                                    <input  type="radio" name="NuevoEstatusTrabajo" id="nPedido" value="Pedido" checked="true">
                                    <label class="label-Pedido" for="nPedido">1. Pedido</label>
                                </label>
                                <label class="radio-inline radio-inline-Presupuesto customDisabled">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="nPresupuesto" value="Presupuesto" >
                                    <label class="label-Presupuesto" for="nPresupuesto">2. Presupuesto</label>
                                </label>
                                <label class="radio-inline radio-inline-Autorizacion customDisabled">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="nAutorización" value="Autorización" >
                                    <label class="label-Autorizacion" for="nAutorización">3. Autorización</label>
                                </label>
                                <label class="radio-inline radio-inline-NoAutorizado customDisabled">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="nNoAutorizado" value="No Autorizado">
                                    <label class="label-NoAutorizado" for="nNoAutorizado">4. No Autorizado</label>
                                </label> 
                                <label class="radio-inline radio-inline-Ejecucion customDisabled">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="nEjecución" value="Ejecución" >
                                    <label class="label-Ejecucion" for="nEjecución">5. Ejecución</label>
                                </label>
                                <label class="radio-inline radio-inline-Finalizado customDisabled">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="nFinalizado" value="Finalizado" >
                                    <label class="label-Finalizado" for="nFinalizado">6. Finalizado</label>
                                </label>
                            </div>
                        </center>
                        <hr>
                    </div>
                    <!-- PANEL DE DATOS GENERALES-->
                    <div class=" col-3 col-md-3">
                        <div class="form-group label-static">
                            <label for="ID" class="control-label">Folio*</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group label-static">
                            <label for="FechaOrigen" class="control-label">Fecha Origen*</label>
                            <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required="">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group label-static">
                            <label for="HoraOrigen" class="control-label">Hora Origen</label>
                            <input type="text"  class="form-control" name="HoraOrigen" id="HoraOrigen" data-provide="timepicker" data-minute-step="1" required=""/>
                        </div>
                    </div>
                    <!-- Inserta la fecha del movimiento-->
                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control d-none" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required="">
                    <div class="col-md-6">
                        <div class="form-group label-static">
                            <label for="Cliente_ID" class="control-label">Cliente</label>
                            <input type="text" id="Cliente_ID" name="Cliente_ID" class="form-control"  placeholder="" readonly="">
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Sucursal*</label>
                            <select id="Sucursal_ID" name="Sucursal_ID" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="Solicitante" class="control-label">Solicitante*</label>
                            <input type="text" id="Solicitante" name="Solicitante" class="form-control"  placeholder="Nombre de la persona quien solicita el trabajo" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Especialidad</label>
                            <select id="Especialidad_ID" name="Especialidad_ID" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Área</label>
                            <select id="Area_ID" name="Area_ID" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="form-group label-static">
                            <label for="TrabajoSolicitado" class="control-label">Trabajo Solicitado*</label>
                            <textarea class="col-md-12 form-control" placeholder="Introduzca aquí el trabajo que solicita" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="5" required=""></textarea>
                        </div>
                    </div>
                    <div class="col-6 col-md-12"><br>
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--PANEL EDITAR-->
<div class="col-6 col-md-12">
    <div class="panel panel-default d-none animated slideInRight" id="pnlEditarTrabajo">
        <div class="Custompanel-heading dt-EncabezadoControles" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelarModificar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Editar Trabajo
                </div>
                <div class="input-group pull-right" align="center">
                    <span class="dt-EncabezadoControles">
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnImprimirReportesEditarTrabajo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes" >
                            <span class="fa fa-print " ></span>
                        </button>
                    </span>
                    <span class=""> </span>
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" id="btnConfirmarEliminar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <span>&nbsp;&nbsp;</span>
                    <button type="button" class="btn btn-raised btn-primary" id="btnModificarTrabajo" >GUARDAR</button>
                    <span>&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmEditar">
                <fieldset>
                    <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                        <li role="presentation" class="active"><a href="#Datos" aria-controls="Datos" role="tab" data-toggle="tab">Datos del Pedido</a></li>
                        <li role="presentation"><a href="#Datos2" aria-controls="Datos2" role="tab" data-toggle="tab">Adjunto</a></li>
                    </ul>
                    <!-- Estatus -->
                    <div class="col-12 col-md-12">
                        <center>
                            <div class="form-group label-static" id="dEstatusDetalle">
                                <label class="radio-inline customDisabled" id="lPedido">
                                    <input  type="radio" name="EstatusTrabajo" id="ePedido" value="Pedido" >
                                    <label class="label-Pedido " for="ePedido">1. Pedido</label>
                                </label>
                                <label class="radio-inline radio-inline-Presupuesto customDisabled" id="lPresupuesto">
                                    <input type="radio" name="EstatusTrabajo" id="ePresupuesto" value="Presupuesto" >
                                    <label class="label-Presupuesto" for="ePresupuesto">2. Presupuesto</label>
                                </label>
                                <label class="radio-inline radio-inline-Autorizacion customDisabled" id="lAutorización">
                                    <input type="radio" name="EstatusTrabajo" id="eAutorización" value="Autorización" >
                                    <label class="label-Autorizacion " for="eAutorización">3. Autorización Del Cliente</label>
                                </label>
                                <label class="radio-inline radio-inline-NoAutorizado customDisabled" id="lNoAutorizado">
                                    <input type="radio" name="EstatusTrabajo" id="eNoAutorizado" value="No Autorizado">
                                    <label class="label-NoAutorizado" for="eNoAutorizado">4. No Autorizado</label>
                                </label> 
                                <label class="radio-inline radio-inline-Ejecucion customDisabled" id="lEjecución">
                                    <input type="radio" name="EstatusTrabajo" id="eEjecución" value="Ejecución" >
                                    <label class="label-Ejecucion " for="eEjecución">5. Ejecución</label>
                                </label>
                                <label class="radio-inline radio-inline-Finalizado customDisabled" id="lFinalizado">
                                    <input type="radio" name="EstatusTrabajo" id="eFinalizado" value="Finalizado" >
                                    <label class="label-Finalizado " for="eFinalizado">6. Finalizado</label>
                                </label>
                            </div>
                        </center>
                        <hr>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="Datos">
                            <!-- PANEL DE DATOS GENERALES-->
                            <div class=" col-3 col-md-3">
                                <div class="form-group label-static">
                                    <label for="ID" class="control-label">Folio</label>
                                    <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaOrigen" class="control-label">Fecha Origen*</label>
                                    <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="HoraOrigen" class="control-label">Hora Origen*</label>
                                    <input type="text"  class="form-control" name="HoraOrigen" id="HoraOrigen" data-provide="timepicker" data-minute-step="1"/>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static d-none" id="cmbAutorizacion">
                                    <label for="" class="control-label">AUTORIZADO</label>
                                    <select id="EstatusTrabajo" name="EstatusTrabajo" class="form-control" >
                                        <option value=""></option>
                                        <option value="Ejecución">SI</option>
                                        <option value="No Autorizado">NO</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Inserta la fecha del movimiento-->
                            <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control d-none" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            <div class="col-md-6">
                                <div class="form-group label-static">
                                    <label for="Cliente_ID" class="control-label">Cliente</label>
                                    <input type="text" id="Cliente_ID" name="Cliente_ID" class="form-control"  placeholder="" readonly="">
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Sucursal*</label>
                                    <select id="Sucursal_ID" name="Sucursal_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group label-static">
                                    <label for="Solicitante" class="control-label">Solicitante*</label>
                                    <input type="text" id="Solicitante" name="Solicitante" class="form-control"  placeholder="Nombre de la persona quien solicita el trabajo" required="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Especialidad</label>
                                    <select id="Especialidad_ID" name="Especialidad_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Área</label>
                                    <select id="Area_ID" name="Area_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="form-group label-static">
                                    <label for="TrabajoSolicitado" class="control-label">Trabajo Solicitado*</label>
                                    <textarea class="col-md-12 form-control" placeholder="Introduzca aquí el trabajo que solicita" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="5" required="" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Datos2">
                            <div class="col-md-12" align="center">
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6"><br>
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                    <div id="ImporteTotal" class="col-md-12" align="right">
                        <span class="text-success spanTotalesDetalle">$ 0.0</span>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/PedidoCliente/';
    var verMovs = 'getRecordsEnFirme';
    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");

    var btnAutorizacion = $("#btnAutorizacion");
    var btnFinalizadosPagados = $("#btnFinalizadosPagados");
    var btnFinalizadosNoPagados = $("#btnFinalizadosNoPagados");

    var btnNuevo = $("#btnNuevo");
    var btnCancelar = $("#btnCancelar");
    var btnCancelarModificar = $("#btnCancelarModificar");
    var btnGuardar = $("#btnGuardar");
    var btnModificar = $("#btnModificarTrabajo");
    var pnlNuevoTrabajo = $("#pnlNuevoTrabajo");
    var pnlEditarTrabajo = $("#pnlEditarTrabajo");
    var menuTablero = $('#MenuTablero');
    var btnEliminar = $("#btnEliminar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    /*Reportes*/
    var btnImprimirReportesEditarTrabajo = $("#btnImprimirReportesEditarTrabajo");
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    var currentDate = new Date();
    $(document).ready(function () {

        btnVerMisMovimientos.on("click", function () {
            verMovs = 'getRecordsEnFirme';
            getRecords();
        });
        btnVerTodos.on("click", function () {
            verMovs = 'getRecords';
            getRecords();
        });

        btnAutorizacion.on("click", function () {
            verMovs = 'getRecordsAutorizacion';
            getRecords();
        });
        btnFinalizadosPagados.on("click", function () {
            verMovs = 'getRecordsFinalizadosPagados';
            getRecords();
        });

        btnFinalizadosNoPagados.on("click", function () {
            verMovs = 'getRecordsFinalizadosNoPagados';
            getRecords();
        });


        var cmbSituacion = '';
        pnlEditarTrabajo.find("#EstatusTrabajo").change(function () {
            cmbSituacion = this.value;
            var frm = new FormData(pnlEditarTrabajo.find("#frmEditar")[0]);
            frm.append('EstatusTrabajo', cmbSituacion);
            frm.append('ID', IdMovimiento);
            HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
            $.ajax({
                url: master_url + 'onModificar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'ESTATUS MODIFICADO', 'success');
                getRecords();

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        /*Modal de reportes*/
        btnImprimirReportesEditarTrabajo.on("click", function () {
            mdlReportesEditarTrabajo.modal('show');
        });
        btnNuevo.on("click", function () {
            menuTablero.addClass("d-none");
            pnlNuevoTrabajo.removeClass("d-none");
            pnlNuevoTrabajo.find("input").val("");
            pnlNuevoTrabajo.find("textarea").val("");
            pnlNuevoTrabajo.find("select").val(null).trigger("change");
            pnlNuevoTrabajo.find("select").select2("val", "");
            pnlNuevoTrabajo.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlNuevoTrabajo.find("#FechaOrigen").datepicker("setDate", currentDate);
            pnlNuevoTrabajo.find("#HoraOrigen").timepicker("setTime", currentDate);
            getCliente();
            getSucursalesbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");
            getEspecialidadesbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");
            getAreasbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");
        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("d-none");
            pnlNuevoTrabajo.addClass("d-none");
            pnlDetalleNuevoTrabajo.addClass("d-none");
            pnlDetalleNuevoTrabajoAbierto.addClass("d-none");
            //getRecords();
        });
        btnCancelarModificar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("d-none");
            pnlEditarTrabajo.addClass("d-none");
            //getRecords();
        });
        btnGuardar.on("click", function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmNuevo').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    FechaOrigen: 'required',
                    HoraOrigen: 'required',
                    Sucursal_ID: 'required',
                    TrabajoSolicitado: 'required',
                    Solicitante: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            $('select').on('change', function () {
                $(this).valid();
            });
            if (pnlNuevoTrabajo.find('#frmNuevo').valid()) {
                var frm = new FormData(pnlNuevoTrabajo.find("#frmNuevo")[0]);

                frm.append('Estatus', 'Borrador');
                frm.append('EstatusTrabajo', 'Pedido');
                frm.append('Usuario_ID', "<?php echo $this->session->userdata('ID'); ?>");
                frm.append('Cliente_ID', "<?php echo $this->session->userdata('Cliente'); ?>");

                /*Insertar Importe total*/
                /*DESCOMENTAR PARA AGREGAR*/
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVO PEDIDO', 'success');
                    /*Funcion que regarga el panel de editar con el nuevo registro*/
                    despuesDeGuardar(data);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnModificar.on("click", function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmEditar').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    FechaOrigen: 'required',
                    HoraOrigen: 'required',
                    Sucursal_ID: 'required',
                    TrabajoSolicitado: 'required',
                    Solicitante: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            $('select').on('change', function () {
                $(this).valid();
            });
            if ($('#frmEditar').valid()) {
                var frm = new FormData(pnlEditarTrabajo.find("#frmEditar")[0]);
                frm.append('Cliente_ID', "<?php echo $this->session->userdata('Cliente'); ?>");
                frm.append('EstatusTrabajo', 'Pedido');
                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'PEDIDO GUARDADO', 'success');
                    getRecords();
                    btnImprimirReportesEditarTrabajo.attr("disabled", true);
                    btnConfirmarEliminar.attr("disabled", false);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        /*Evento clic del boton confirmar borrar*/
        btnConfirmarEliminar.on("click", function () {
            if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
                mdlConfirmar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        btnEliminar.on("click", function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'onEliminar',
                type: "POST",
                data: {
                    ID: IdMovimiento
                }
            }).done(function (data, x, jq) {
                mdlConfirmar.modal('d-none');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PEDIDO ELIMINADO', 'danger');
                menuTablero.addClass("animated slideInLeft").removeClass("d-none");
                pnlEditarTrabajo.addClass("d-none");
                getRecords();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        getRecords();
        getLogoClienteByID();
    });
    IdMovimiento = 0;
    function getRecords() {
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        $.ajax({
            url: master_url + verMovs,
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                $("#tblRegistros").html(getTable('tblTrabajos', data));
                var thead = $('#tblTrabajos').find('thead th');
                var tfoot = $('#tblTrabajos').find('tfoot th');

                $.each($('#tblTrabajos').find('tbody tr'), function (k, v) {
                    var td = $(v).find("td");

                });


                $('#tblTrabajos tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
                });


                var tblSelected = $('#tblTrabajos').DataTable(tableOptionsPedidos);

                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });


                $('#tblTrabajos tbody').on('click', 'tr', function () {
                    $("#tblTrabajos").find("tr").removeClass("success");
                    $("#tblTrabajos").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    IdMovimiento = parseInt(dtm[0]);
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

                            if (trabajo.Cliente_ID === '16') {
                                mdlReportesEditarTrabajo.find('#rNordes').removeClass('d-none');
                            }
                            pnlEditarTrabajo.find(".nav-tabs li").removeClass("active");
                            $(pnlEditarTrabajo.find(".nav-tabs li")[0]).addClass("active");
                            pnlEditarTrabajo.find("#Datos").addClass("active in");
                            pnlEditarTrabajo.find("#Datos2").removeClass("active in");
                            pnlEditarTrabajo.find("input").not('[type=radio]').val('');
                            RadionButtonSelectedValueSet('EstatusTrabajo', trabajo.EstatusTrabajo);
                            $.ajax({
                                url: master_url + 'getSucursalesByCliente',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: trabajo.Cliente_ID
                                }
                            }).done(function (data, x, jq) {
                                var options = '<option></option>';
                                $.each(data, function (k, v) {
                                    options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.Sucursal + '</option>';
                                });
                                pnlEditarTrabajo.find("#Sucursal_ID").html(options);
                                pnlEditarTrabajo.find("#Sucursal_ID").select2("val", trabajo.Sucursal_ID);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            }).always(function () {
                                HoldOn.close();
                            });
                            $.ajax({
                                url: master_url + 'getEspecialidadesByCliente',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: trabajo.Cliente_ID
                                }
                            }).done(function (data, x, jq) {
                                var options = '<option></option>';
                                $.each(data, function (k, v) {
                                    options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
                                });
                                pnlEditarTrabajo.find("#Especialidad_ID").html(options);
                                pnlEditarTrabajo.find("#Especialidad_ID").select2("val", trabajo.Especialidad_ID);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            }).always(function () {
                                HoldOn.close();
                            });
                            $.ajax({
                                url: master_url + 'getAreasByCliente',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: trabajo.Cliente_ID
                                }
                            }).done(function (data, x, jq) {
                                var options = '<option></option>';
                                $.each(data, function (k, v) {
                                    options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
                                });
                                pnlEditarTrabajo.find("#Area_ID").html(options);
                                pnlEditarTrabajo.find("#Area_ID").select2("val", trabajo.Area_ID);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            }).always(function () {
                                HoldOn.close();
                            });
                            pnlEditarTrabajo.removeClass('d-none');
                            pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                            pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                            getCliente();
                            pnlEditarTrabajo.find("#Solicitante").val(trabajo.Solicitante);
                            pnlEditarTrabajo.find("#TrabajoSolicitado").val(trabajo.TrabajoSolicitado);
                            pnlEditarTrabajo.find("#FechaOrigen").val(trabajo.FechaOrigen);
                            pnlEditarTrabajo.find("#EstatusTrabajo").select2("val", trabajo.EstatusTrabajo);
                            pnlEditarTrabajo.find("#Especialidad_ID").select2("val", trabajo.Especialidad_ID);
                            pnlEditarTrabajo.find("#Area_ID").select2("val", trabajo.Area_ID);
                            pnlEditarTrabajo.find("#HoraOrigen").val(trabajo.HoraOrigen);
                            pnlEditarTrabajo.find("#Usuario_ID").val(trabajo.Usuario_ID);

                            if (trabajo.Adjunto !== null && trabajo.Adjunto !== undefined && trabajo.Adjunto !== '') {
                                var ext = getExt(trabajo.Adjunto);
                                if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                                    pnlEditarTrabajo.find("#VistaPrevia").html('<img id="trtImagen" src="' + base_url + trabajo.Adjunto + '" \n\
                                    class ="img-responsive" width="600px"    \n\
                                    onclick="printImg(\' ' + base_url + trabajo.Adjunto + ' \')"  />');


                                }
                                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                    pnlEditarTrabajo.find("#VistaPrevia").html('<embed src="' + base_url + trabajo.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                                }
                                if (ext !== "gif" && ext !== "jpg" && ext !== "jpeg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                                    pnlEditarTrabajo.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                                }
                            } else {
                                pnlEditarTrabajo.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                            }
                            menuTablero.addClass("d-none");
                            /*Control de estatus*/
                            $('#dEstatusDetalle').find('.radio-inline').addClass('customDisabled');
                            if (trabajo.EstatusTrabajo === 'Pedido') {
                                $('#frmEditar').find('input, textarea, button, select').not('[type=radio]').attr('disabled', false);
                                pnlEditarTrabajo.find("#lPedido").removeClass('customDisabled');
                                btnModificar.removeClass('d-none');
                                btnConfirmarEliminar.attr("disabled", false);
                                btnImprimirReportesEditarTrabajo.attr("disabled", true);
                                $('#frmEditar').find('#cmbAutorizacion').addClass('d-none');
                                $('#frmEditar').find('#cmbAutorizacion').removeClass('Autorizacion');
                                pnlEditarTrabajo.find("#ImporteTotal").html('');
                                pnlEditarTrabajo.find("#ImporteTotal").html('Estimado Cliente, su pedido será recibido y se procederá a realizar el presupuesto correspondiente.');
                            } else if (trabajo.EstatusTrabajo === 'Autorización') {
                                btnModificar.addClass('d-none');
                                $('#frmEditar').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                pnlEditarTrabajo.find("#lAutorización").removeClass('customDisabled');
                                btnConfirmarEliminar.attr("disabled", true);
                                btnImprimirReportesEditarTrabajo.attr("disabled", false);
                                $('#frmEditar').find('#cmbAutorizacion').addClass('Autorizacion');
                                $('#frmEditar').find('#EstatusTrabajo').attr('disabled', false);
                                $('#frmEditar').find('#cmbAutorizacion').removeClass('d-none');
                                var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                                pnlEditarTrabajo.find("#ImporteTotal").html('');
                                pnlEditarTrabajo.find("#ImporteTotal").html('Estimado Cliente, si está de acuerdo con el presupuesto favor de marcar SÍ en el control de autorización marcado en azul.\n\
                                                                             <br><strong class="spanTotalesDetalle">Importe total: <strong><span class="text-success spanTotalesDetalle">$' + importeFormateado + '</span>');
                            } else if (trabajo.EstatusTrabajo === 'Presupuesto') {
                                btnModificar.addClass('d-none');
                                $('#frmEditar').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                pnlEditarTrabajo.find("#lPresupuesto").removeClass('customDisabled');
                                btnConfirmarEliminar.attr("disabled", true);
                                btnImprimirReportesEditarTrabajo.attr("disabled", true);
                                $('#frmEditar').find('#EstatusTrabajo').attr('disabled', true);
                                $('#frmEditar').find('#cmbAutorizacion').addClass('d-none');
                                pnlEditarTrabajo.find("#ImporteTotal").html('');
                                pnlEditarTrabajo.find("#ImporteTotal").html('Estimado Cliente, estamos trabajando en su presupuesto, gracias por su comprensión.');
                            } else if (trabajo.EstatusTrabajo === 'No Autorizado')
                            {
                                btnModificar.addClass('d-none');
                                $('#frmEditar').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                btnImprimirReportesEditarTrabajo.attr("disabled", false);
                                pnlEditarTrabajo.find("#lNoAutorizado").removeClass('customDisabled');
                                $('#frmEditar').find('#EstatusTrabajo').attr('disabled', true);
                                $('#frmEditar').find('#cmbAutorizacion').addClass('d-none');
                                var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                                pnlEditarTrabajo.find("#ImporteTotal").html('');
                                pnlEditarTrabajo.find("#ImporteTotal").html('Presupuesto rechazado por el cliente. <br> <strong class="spanTotalesDetalle">Importe total: <strong><span class="text-success spanTotalesDetalle">$' + importeFormateado + '</span>');
                            } else if (trabajo.EstatusTrabajo === 'Ejecución')
                            {
                                btnModificar.addClass('d-none');
                                $('#frmEditar').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                btnImprimirReportesEditarTrabajo.attr("disabled", false);
                                pnlEditarTrabajo.find("#lEjecución").removeClass('customDisabled');
                                $('#frmEditar').find('#cmbAutorizacion').addClass('Autorizacion');
                                $('#frmEditar').find('#EstatusTrabajo').attr('disabled', true);
                                $('#frmEditar').find('#cmbAutorizacion').addClass('d-none');
                                var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                                pnlEditarTrabajo.find("#ImporteTotal").html('');
                                pnlEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: <strong><span class="text-success spanTotalesDetalle">$' + importeFormateado + '</span>');
                            } else if (trabajo.EstatusTrabajo === 'Finalizado')
                            {
                                btnModificar.addClass('d-none');
                                $('#frmEditar').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                btnImprimirReportesEditarTrabajo.attr("disabled", false);
                                pnlEditarTrabajo.find("#lFinalizado").removeClass('customDisabled');
                                $('#frmEditar').find('#cmbAutorizacion').addClass('Autorizacion');
                                $('#frmEditar').find('#EstatusTrabajo').attr('disabled', true);
                                $('#frmEditar').find('#cmbAutorizacion').addClass('d-none');
                                var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                                pnlEditarTrabajo.find("#ImporteTotal").html('');
                                pnlEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: <strong><span class="text-success spanTotalesDetalle">$' + importeFormateado + '</span>');
                            }
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                            HoldOn.close();
                        });
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
                    }
                });
            }else{
            
                $("#tblRegistros").html('<br><hr><div class="col-md-12"><center><h3>NO EXISTEN REGISTROS</h3></center></div> ');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getCliente() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getClienteByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: "<?php echo $this->session->userdata('Cliente'); ?>"
            }
        }).done(function (data, x, jq) {
            pnlNuevoTrabajo.find("#Cliente_ID").val(data[0].Nombre);
            pnlEditarTrabajo.find("#Cliente_ID").val(data[0].Nombre);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getLogoClienteByID() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getLogoClienteByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: "<?php echo $this->session->userdata('Cliente'); ?>"
            }
        }).done(function (data, x, jq) {
            menuTablero.find("#imgCliente").html('<img id="" src="' + base_url + data[0].RutaLogo + '" class ="watermarkCliente" width ="260px" />');//img-responsive
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getSucursalesbyCliente(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getSucursalesByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.Sucursal + '</option>';
            });
            pnlNuevoTrabajo.find("#Sucursal_ID").html(options);
            pnlEditarTrabajo.find("#Sucursal_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getSucursalByID(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getSucursalByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            pnlEditarTrabajo.find("#Sucursal_ID").select2("val", data[0].ID);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getEspecialidadesbyCliente(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getEspecialidadesbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
            });
            pnlNuevoTrabajo.find("#Especialidad_ID").html(options);
            pnlEditarTrabajo.find("#Especialidad_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getEspecialidadByID(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getEspecialidadByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            pnlEditarTrabajo.find("#Especialidad_ID").select2("val", data[0].ID);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getAreasbyCliente(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getAreasbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
            });
            pnlNuevoTrabajo.find("#Area_ID").html(options);
            pnlEditarTrabajo.find("#Area_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getAreaByID(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getAreaByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            pnlEditarTrabajo.find("#getAreaByID").select2("val", data[0].ID);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Para despues de insertar pro primera vez se cargue el panel de editar*/
    function despuesDeGuardar(IDTrabajo) {
        IdMovimiento = IDTrabajo;
        pnlNuevoTrabajo.addClass("d-none");
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
                pnlEditarTrabajo.find("input").not('[type=radio]').val('');
                pnlEditarTrabajo.find("#lPedido").removeClass('customDisabled');
                RadionButtonSelectedValueSet('EstatusTrabajo', trabajo.EstatusTrabajo);

                $.ajax({
                    url: master_url + 'getSucursalesByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function (data, x, jq) {
                    var options = '<option></option>';
                    $.each(data, function (k, v) {
                        options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.Sucursal + '</option>';
                    });
                    pnlEditarTrabajo.find("#Sucursal_ID").html(options);
                    pnlEditarTrabajo.find("#Sucursal_ID").select2("val", trabajo.Sucursal_ID);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                $.ajax({
                    url: master_url + 'getEspecialidadesByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function (data, x, jq) {
                    var options = '<option></option>';
                    $.each(data, function (k, v) {
                        options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
                    });
                    pnlEditarTrabajo.find("#Especialidad_ID").html(options);
                    pnlEditarTrabajo.find("#Especialidad_ID").select2("val", trabajo.Especialidad_ID);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                $.ajax({
                    url: master_url + 'getAreasByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function (data, x, jq) {
                    var options = '<option></option>';
                    $.each(data, function (k, v) {
                        options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
                    });
                    pnlEditarTrabajo.find("#Area_ID").html(options);
                    pnlEditarTrabajo.find("#Area_ID").select2("val", trabajo.Area_ID);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                pnlEditarTrabajo.removeClass('d-none');
                pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                getCliente();
                pnlEditarTrabajo.find("#Solicitante").val(trabajo.Solicitante);
                pnlEditarTrabajo.find("#TrabajoSolicitado").val(trabajo.TrabajoSolicitado);
                pnlEditarTrabajo.find("#FechaOrigen").val(trabajo.FechaOrigen);
                pnlEditarTrabajo.find("#HoraOrigen").val(trabajo.HoraOrigen);
                pnlEditarTrabajo.find("#Usuario_ID").val(trabajo.Usuario_ID);
                pnlEditarTrabajo.find("#Especialidad_ID").select2("val", trabajo.Especialidad_ID);
                pnlEditarTrabajo.find("#Area_ID").select2("val", trabajo.Area_ID);
                menuTablero.addClass("d-none");
                /*Control de estatus*/
                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                btnModificar.removeClass('d-none');
                btnConfirmarEliminar.attr("disabled", false);
                btnImprimirReportesEditarTrabajo.attr("disabled", true);
                $('#frmEditar').find('#cmbAutorizacion').addClass('d-none');
                $('#frmEditar').find('#cmbAutorizacion').removeClass('Autorizacion');
                pnlEditarTrabajo.find("#ImporteTotal").html('');
                pnlEditarTrabajo.find("#ImporteTotal").html('Estimado Cliente, su pedido será recibido y se procederá a realizar el presupuesto correspondiente.');
                getRecords();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }
    function RadionButtonSelectedValueSet(name, SelectdValue) {
        $('input[name="' + name + '"][value="' + SelectdValue + '"]').prop('checked', true);
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
        var mov = pnlEditarTrabajo.find("#Movimiento").val();
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
<style>

    .Autorizacion {
        background-color: #03a9f4;
    }

</style>