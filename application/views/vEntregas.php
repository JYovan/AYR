<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading">
            <div class="cursor-hand" >Entregas</div>
        </div>
        <div class="panel-body ">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default" id="btnVerTodos"><span class="fa fa-list-ol fa-1x" ></span><br>CONCLUIDOS</button>
                    <button type="button" class="btn btn-default" id="btnVerMisMovimientos"><span class="fa fa-eye fa-1x"></span><br>EN FIRME</button>
                </div>
                <div class="col-md-12 table-responsive" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>
<!--Reportes-->
<div id="mdlReportesEditarEntrega" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Imprimir Reportes</h4>
        </div>
        <div class="modal-body">
            Selecciona el reporte que deseas imprimir
            <div class="col-md-12">
                <br>
            </div>
            <div id="reportes" class="dt-buttons">
                <button id="btnEntregaObra" class="btn btn-default"><span class="fa fa-newspaper-o fa-1x"></span><br>ENTREGA OBRA</button>
                <button id="btnTarifario" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>TARIFARIO</button>
                <button id="btnFichero" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>FICHERO</button>
                <button id="btnDesglose" class="btn btn-default"><span class="fa fa-newspaper-o fa-1x"></span><br>DESGLOSE DE REPORTES</button>
            </div>
        </div>
    </div>
</div>
<!--PANEL NUEVO-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlNuevaEntrega">
        <div class="Custompanel-heading dt-EncabezadoControles" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Nueva Entrega
                </div>
                <div class="input-group pull-right" align="center">
                    <span class="dt-EncabezadoControles">
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copiar Movimiento (Debe guardar el movimiento)">
                            <span class="fa fa-clone" ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes (Debe guardar el movimiento)" >
                            <span class="fa fa-print " ></span>
                        </button>
                    </span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="label label-default spanEstatus">SIN GUARDAR</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class=""> </span>
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" disabled="" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <span class="togglebutton customLabelToggle" >
                        <label>
                            <input type="checkbox" id="Concluir" name="Concluir" >Concluir
                        </label>
                    </span>
                    <span>&nbsp;&nbsp;</span>
                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardar" >GUARDAR</button>
                    <span>&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <fieldset>
                    <hr>
                    <div class=" col-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="Movimiento" class="control-label">Movimiento</label>
                            <input type="text" id="Movimiento" name="Movimiento"  class="form-control" readonly="" placeholder="" >
                        </div>
                    </div>
                    <div class=" col-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="ID" class="control-label">Mov ID</label>
                            <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                            <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="NoEntrega" class="control-label">Entrega*</label>
                            <input type="text" id="NoEntrega" name="NoEntrega"  class="form-control" placeholder="" >
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Cliente*</label>
                            <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <input type="text" id="Usuario_ID" name="Usuario_ID"  class="form-control hide" placeholder="" >
                    <div class="col-6 col-md-12"><br>
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--PANEL NUEVO DETALLE-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleNuevaEntrega">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-5">
                    <div class="cursor-hand" >Trabajos </div>
                </div>
                <div id="ImporteTotal" class="col-md-7" align="right">
                    <span class="text-success spanTotalesDetalle">$ 0.0</span>
                </div>
            </div>
        </div>
        <!--<div class="panel-body">-->
        <fieldset>
            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-default" id="btnNuevoRenglonEntregaNuevo"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
            </div>
        </fieldset>
        <!--        </div>-->
    </div>
</div>
<!--PANEL EDITAR-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlEditarEntrega">
        <div class="Custompanel-heading dt-EncabezadoControles" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelarModificar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Editar Entrega
                </div>
                <div class="input-group pull-right" align="center">
                    <span class="dt-EncabezadoControles">
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copiar Movimiento">
                            <span class="fa fa-clone" ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnImprimirReportesEditarEntrega" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes" >
                            <span class="fa fa-print " ></span>
                        </button>
                    </span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="label label-default spanEditarEstatus">SIN GUARDAR</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class=""> </span>
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" id="btnConfirmarEliminar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <span class="togglebutton customLabelToggle" >
                        <label>
                            <input type="checkbox" id="Concluir" name="Concluir" >Concluir
                        </label>
                    </span>
                    <span>&nbsp;&nbsp;</span>
                    <button type="button" class="btn btn-raised btn-primary" id="btnModificarEntrega" >GUARDAR</button>
                    <span>&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmEditar">
                <fieldset>
                    <div class="col-6 col-md-12">
                        <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                            <li role="presentation" class="active"><a href="#Datos" aria-controls="Datos" role="tab" data-toggle="tab">Entrega</a></li>
                            <li role="presentation"><a href="#Datos2" aria-controls="Datos2" role="tab" data-toggle="tab">Adjunto Entrega</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="Datos">
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Movimiento" class="control-label">Movimiento</label>
                                    <input type="text" id="Movimiento" name="Movimiento"  class="form-control" readonly="" placeholder="" >
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="ID" class="control-label">Mov ID</label>
                                    <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="NoEntrega" class="control-label">Entrega*</label>
                                    <input type="text" id="NoEntrega" name="NoEntrega"  class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Cliente*</label>
                                    <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <input type="text" id="Usuario_ID" name="Usuario_ID"  class="form-control hide" placeholder="" >
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Datos2">
                            <center><label class="control-label">Puede subir un archivo de imagen(JPG,GIF,PNG)o PDF</label></center>
                            <div class="col-md-12" align="center">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x"></span> SELECCIONA EL ARCHIVO
                                </button>
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                                <input type="file" id="Adjunto" name="Adjunto" class="hide" accept="application/pdf, image/*">

                            </div>

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
<!--PANEL EDITAR DETALLE-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleEditarEntrega">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-6">
                    <div class="cursor-hand" >Trabajos </div>
                </div>
                <div id="ImporteTotal" class="col-md-6" align="right">
                    <h4 class="text-success">$ 0.0</h4>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevoRenglonEntregaEditar"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                </div>
                <div class="col-md-12 table-responsive " id="Conceptos" >

                </div>
            </fieldset>
        </div>
    </div>
</div>
<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlSeleccionarTrabajosEditar" class="modal modalFull animated fadeInUp">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Seleccione un trabajo</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-md-12" align="right">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chkMultiple" value="ON"> Varios
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="col-md-12" id="TrabajosXClienteIDXClasificacion">
                </div>
            </div>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL DE CONFIRMACION PARA BORRAR-->
<div id="mdlConfirmar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>
</div>
<div id="mdlConfirmarEliminarDetalle" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnConfirmarEliminarDetalle">ACEPTAR</button>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Entregas/';
    var menuTablero = $('#MenuTablero');
    var btnNuevo = $("#btnNuevo");
    var verMovs = 'getMyRecords';
    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");

    var pnlNuevaEntrega = $("#pnlNuevaEntrega");
    var pnlEditarEntrega = $("#pnlEditarEntrega");
    //nuevo
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    //editar
    var btnCancelarModificar = $("#btnCancelarModificar");
    var btnModificar = $("#btnModificarEntrega");
    var btnEliminar = $("#btnEliminar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    //Controles de concluir
    var tBtnConcluir = pnlNuevaEntrega.find("#Concluir");
    var tBtnEditarConcluir = pnlEditarEntrega.find("#Concluir");
    var currentDate = new Date();
    /***Detalle Nuevo****/
    var pnlDetalleNuevaEntrega = $("#pnlDetalleNuevaEntrega");
    var btnNuevoRenglonEntregaNuevo = pnlDetalleNuevaEntrega.find('#btnNuevoRenglonEntregaNuevo');
    /*Detalle Editar*/
    var pnlDetalleEditarEntrega = $("#pnlDetalleEditarEntrega");
    var btnNuevoRenglonEntregaEditar = pnlDetalleEditarEntrega.find("#btnNuevoRenglonEntregaEditar");
    var tblRegistrosXDetalleXEntrega = pnlDetalleEditarEntrega.find("#tblRegistrosXDetalleXEntrega");
    var mdlSeleccionarTrabajosEditar = $("#mdlSeleccionarTrabajosEditar");
    var TrabajosXClienteIDXClasificacion = mdlSeleccionarTrabajosEditar.find("#TrabajosXClienteIDXClasificacion");
    var btnImprimirReportesEditarEntrega = pnlEditarEntrega.find("#btnImprimirReportesEditarEntrega");
    var mdlReportesEditarEntrega = $("#mdlReportesEditarEntrega");
    var btnFichero = mdlReportesEditarEntrega.find("#btnFichero");
    var btnTarifario = mdlReportesEditarEntrega.find("#btnTarifario");
    var btnDesglose = mdlReportesEditarEntrega.find("#btnDesglose");
    var btnEntregaObra = mdlReportesEditarEntrega.find("#btnEntregaObra");
    var mdlConfirmarEliminarDetalle = $("#mdlConfirmarEliminarDetalle");
    var btnConfirmarEliminarDetalle = $("#btnConfirmarEliminarDetalle");
    var ModificarArchivo = pnlEditarEntrega.find("#Adjunto");
    var btnModificarArchivo = pnlEditarEntrega.find("#btnArchivo");
    var ModificarVistaPrevia = pnlEditarEntrega.find("#VistaPrevia");
    $(document).ready(function () {
        btnVerMisMovimientos.on("click", function () {
            verMovs = 'getMyRecords';
            getRecords();
        });
        btnVerTodos.on("click", function () {
            verMovs = 'getRecords';
            getRecords();
        });
        //Reportes
        btnImprimirReportesEditarEntrega.on("click", function () {
            mdlReportesEditarEntrega.modal('show');
        });
        //Tarifario
        btnEntregaObra.on("click", function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ESPERE...'
            });
            $.ajax({
                url: master_url + 'getConceptosXPOCXEntrega',
                type: "POST",
                data: {
                    ID: pnlEditarEntrega.find("#ID").val()
                }
            }).done(function (data, x, jq) {
                window.open(data, '_blank');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });

        });
        btnFichero.on("click", function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ESPERE...'
            });
            $.ajax({
                url: master_url + 'getFicheroXEntrega',
                type: "POST",
                data: {
                    ID: pnlEditarEntrega.find("#ID").val()
                }
            }).done(function (data, x, jq) {
                console.log(data);
                window.open(data, '_blank');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'FICHERO GENERADO', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnTarifario.on("click", function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ESPERE...'
            });
            $.ajax({
                url: master_url + 'getTarifarioXEntrega',
                type: "POST",
                data: {
                    ID: pnlEditarEntrega.find("#ID").val()
                }
            }).done(function (data, x, jq) {
                window.open(data, '_blank');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'TARIFARIO GENERADO', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnDesglose.on("click", function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ESPERE...'
            });
            $.ajax({
                url: master_url + 'getDesgloseXEntrega',
                type: "POST",
                data: {
                    ID: pnlEditarEntrega.find("#ID").val()
                }
            }).done(function (data, x, jq) {
                window.open(data, '_blank');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'DESGLOSE GENERADO', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        //Boton de nuevo en detalle nuevo
        btnNuevoRenglonEntregaNuevo.on("click", function () {
            onNotify('<span class="fa fa-exclamation fa-2x"></span>', 'DEBE DE GUARDAR EL MOVIMIENTO', 'danger');
        });
        //Boton de neuvo en detalle editar
        btnNuevoRenglonEntregaEditar.on("click", function () {
            var Cliente_ID = pnlEditarEntrega.find("#Cliente_ID").val();
            if (Cliente_ID !== undefined && Cliente_ID !== '' && Cliente_ID > 0) {
                getTrabajosControlByClienteXClasificacion(Cliente_ID);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN CLIENTE', 'danger');
            }
        });
        //Evento clic del boton confirmar borrar
        btnConfirmarEliminar.on("click", function () {
            if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
                //Muestra el modal
                mdlConfirmar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        btnEliminar.on("click", function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'onEliminar',
                type: "POST",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                mdlConfirmar.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ENTREGA ELIMINADA', 'danger');
                menuTablero.addClass("animated slideInLeft").removeClass("hide");
                pnlEditarEntrega.addClass("hide");
                pnlDetalleEditarEntrega.addClass("hide");
                getRecords();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnConfirmarEliminarDetalle.click(function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ELIMINANDO...'
            });
            $.ajax({
                url: master_url + 'onEliminarTrabajoDetalle',
                type: "POST",
                data: {
                    ID: tempDetalle
                }
            }).done(function (data, x, jq) {
                getDetalleByID(IdMovimiento);
                mdlConfirmarEliminarDetalle.modal('hide');
            }).fail(function (x, y, z) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'REGISTRO NO ELIMINADO', 'danger');
            }).always(function () {
                HoldOn.close();
            });
        });
        tBtnEditarConcluir.on("click", function () {
            if (!$(this).is(':checked')) {
                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                btnModificar.removeClass('hide');
            }
        });
        btnNuevo.on('click', function () {
            $.each(tblRegistrosXDetalleXEntrega.find("tbody tr"), function () {
                $(this).remove();
            });
            pnlNuevaEntrega.removeClass('hide');
            pnlDetalleNuevaEntrega.removeClass('hide');
            menuTablero.addClass('hide');
            pnlNuevaEntrega.find("input").val("");
            pnlNuevaEntrega.find("select").select2("val", "");
            pnlNuevaEntrega.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlNuevaEntrega.find("#Movimiento").val("Entrega");
            pnlNuevaEntrega.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");
        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevaEntrega.addClass("hide");
            pnlDetalleNuevaEntrega.addClass('hide');
           
        });
        btnCancelarModificar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarEntrega.addClass("hide");
            pnlDetalleEditarEntrega.addClass("hide");
            
        });
        btnGuardar.on("click", function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmNuevo').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    Cliente_ID: 'required',
                    NoEntrega: 'required'
                            //CentroCostos_ID: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            //Si es verdadero que hacer
            if (pnlNuevaEntrega.find('#frmNuevo').valid()) {
                var frm = new FormData(pnlNuevaEntrega.find("#frmNuevo")[0]);
                if (tBtnConcluir.is(':checked')) {
                    frm.append('Estatus', 'Concluido');
                } else {
                    frm.append('Estatus', 'Borrador');
                }
                frm.append('Importe', 0);
                /*DESCOMENTAR PARA AGREGAR*/
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVA ENTREGA', 'success');
//Funcion que regarga el panel de editar con el nuevo registro
                    despuesDeGuardar(data);
                }).fail(function (x, y, z)
                {
                    console.log(x, y, z);
                }).always(function ()
                {
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
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    Cliente_ID: 'required',
                    NoEntrega: 'required'
                            // CentroCostos_ID: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            //Si es verdadero que hacer
            if ($('#frmEditar').valid()) {
                var frm = new FormData(pnlEditarEntrega.find("#frmEditar")[0]);
                //  Para los checkbox
                if (tBtnEditarConcluir.is(':checked')) {
                    frm.append('Estatus', 'Concluido');
                } else {
                    frm.append('Estatus', 'Borrador');
                }
                frm.append('Importe', ImporteTotalGlobal);
                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    getRecords();
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO GUARDADO', 'success');
                    if (tBtnEditarConcluir.is(':checked')) {
                        btnModificar.addClass('hide');
                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                        btnConfirmarEliminar.attr("disabled", true);
                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text('Concluido'.toUpperCase());
                        pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', true);
                        pnlDetalleEditarEntrega.find("#Conceptos").addClass("disabledDetalle");
                    } else {
                        btnConfirmarEliminar.attr("disabled", false);
                        $(".spanEditarEstatus").removeClass('label-success').addClass('label-default').text('Borrador'.toUpperCase());
                        pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', false);
                        pnlDetalleEditarEntrega.find("#Conceptos").removeClass("disabledDetalle");
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnModificarArchivo.on("click", function () {
            ModificarArchivo.change(function () {
                var frm = new FormData();
                frm.append('Adjunto', ModificarArchivo[0].files[0]);
                frm.append('ID', IdMovimiento);
                HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
                $.ajax({
                    url: master_url + 'onModificarAdjunto',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    var imageType = /image.*/;
                    if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match(imageType)) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var preview = '<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><img src="' + reader.result + '" class="img-responsive" width="600px" >\n\
                    <div class="caption">\n\
                    <p>' + ModificarArchivo[0].files[0].name + '</p>\n\
                    </div></div>';
                            ModificarVistaPrevia.html(preview);
                        };
                        reader.readAsDataURL(ModificarArchivo[0].files[0]);
                    } else {
                        if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match('application/pdf')) {
                            var readerpdf = new FileReader();
                            readerpdf.onload = function (e) {
                                ModificarVistaPrevia.html('<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                        ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>');
                            };
                            readerpdf.readAsDataURL(ModificarArchivo[0].files[0]);
                        } else {
                            ModificarVistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                        }
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            });
            ModificarArchivo.trigger('click');
        });
        getClientes();
        getRecords();
        //getCC();
    });
    IdMovimiento = 0;
    function getRecords() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + verMovs,
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                $("#tblRegistros").html(getTable('tblEntregas', data));
                $('#tblEntregas tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
                });
                var tblSelected = $('#tblEntregas').DataTable(tableOptions);
                $('#tblEntregas tbody').on('click', 'tr', function () {
                    $("#tblEntregas").find("tr").removeClass("success");
                    $("#tblEntregas").find("tr").removeClass("warning");
                    //                console.log(this)
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    temp = parseInt(dtm[0]);
                    IdMovimiento = parseInt(dtm[0]);
                    //Abre al hacer click el movimiento para editar
                    if (temp !== 0 && temp !== undefined && temp > 0) {
                        HoldOn.open({
                            theme: "sk-bounce",
                            message: "CARGANDO DATOS..."
                        });
                        $.ajax({
                            url: master_url + 'getEntregaByID',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: temp
                            }
                        }).done(function (data, x, jq) {
                            pnlEditarEntrega.find("input").val("");
                            pnlEditarEntrega.find("input").val("");
                            pnlEditarEntrega.find(".nav-tabs li").removeClass("active");
                            $(pnlEditarEntrega.find(".nav-tabs li")[0]).addClass("active");
                            pnlEditarEntrega.find("#Datos").addClass("active in");
                            pnlEditarEntrega.find("#Datos2").removeClass("active in");
                            var entrega = data[0];
                            pnlEditarEntrega.find("#ID").val(entrega.ID);
                            pnlEditarEntrega.find("#Movimiento").val(entrega.Movimiento);
                            pnlEditarEntrega.find("#FechaCreacion").val(entrega.FechaCreacion);
                            pnlEditarEntrega.find("#Cliente_ID").select2("val", entrega.Cliente_ID);
                            //pnlEditarEntrega.find("#CentroCostos_ID").select2("val", entrega.CentroCostos_ID);
                            pnlEditarEntrega.find("#NoEntrega").val(entrega.NoEntrega);
                            pnlEditarEntrega.find("#Importe").val(entrega.Importe);
                            pnlEditarEntrega.find("#Estatus").val(entrega.Estatus);
                            pnlEditarEntrega.find("#Usuario_ID").val(entrega.Usuario_ID);

                            if (entrega.Adjunto !== null && entrega.Adjunto !== undefined && entrega.Adjunto !== '') {
                                var ext = getExt(entrega.Adjunto);
                                if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                                    pnlEditarEntrega.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + entrega.Adjunto + '" class ="img-responsive" width="600px" />');
                                }
                                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                    pnlEditarEntrega.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + entrega.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                                }
                                if (ext !== "gif" && ext !== "jpg" && ext !== "jpeg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                                    pnlEditarEntrega.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                                }
                            } else {
                                pnlEditarEntrega.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                            }

                            menuTablero.addClass("hide");
                            pnlEditarEntrega.removeClass("hide");
                            pnlDetalleEditarEntrega.removeClass("hide");
                            getDetalleByID(entrega.ID);
                            //Control de estatus
                            if (entrega.Estatus === 'Concluido') {
                                $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(entrega.Estatus.toUpperCase());
                                tBtnEditarConcluir.prop('checked', true);
                                btnModificar.addClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', true);
                                pnlDetalleEditarEntrega.find("#Conceptos").addClass("disabledDetalle");
                            } else if (entrega.Estatus === 'Cancelado') {
                                $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(entrega.Estatus.toUpperCase());
                                tBtnEditarConcluir.addClass('hide');
                                btnModificar.addClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', true);
                                pnlDetalleEditarEntrega.find("#Conceptos").addClass("disabledDetalle");
                            } else {
                                $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(entrega.Estatus.toUpperCase());
                                tBtnEditarConcluir.prop('checked', false);
                                btnModificar.removeClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                                btnConfirmarEliminar.attr("disabled", false);
                                pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', false);
                                pnlDetalleEditarEntrega.find("#Conceptos").removeClass("disabledDetalle");
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
                // Apply the search
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });

            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Para despues de insertar pro primera vez se cargue el panel de editar*/
    function despuesDeGuardar(IDTrabajo) {
        pnlNuevaEntrega.addClass("hide");
        pnlDetalleNuevaEntrega.addClass('hide');
        temp = IDTrabajo;
        //Abre al hacer click el movimiento para editar
        if (temp !== 0 && temp !== undefined && temp > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getEntregaByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                pnlEditarEntrega.find("input").val("");
                var entrega = data[0];
                pnlEditarEntrega.find("#ID").val(entrega.ID);
                pnlEditarEntrega.find("#Movimiento").val(entrega.Movimiento);
                pnlEditarEntrega.find("#FechaCreacion").val(entrega.FechaCreacion);
                pnlEditarEntrega.find("#Cliente_ID").select2("val", entrega.Cliente_ID);
                //pnlEditarEntrega.find("#CentroCostos_ID").select2("val", entrega.CentroCostos_ID);
                pnlEditarEntrega.find("#NoEntrega").val(entrega.NoEntrega);
                pnlEditarEntrega.find("#Importe").val(entrega.Importe);
                pnlEditarEntrega.find("#Estatus").val(entrega.Estatus);
                pnlEditarEntrega.find("#Usuario_ID").val(entrega.Usuario_ID);
                pnlEditarEntrega.removeClass("hide");
                pnlDetalleEditarEntrega.removeClass("hide");
                getDetalleByID(entrega.ID);
                //Control de estatus
                if (entrega.Estatus === 'Concluido') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(entrega.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', true);
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    btnConfirmarEliminar.attr("disabled", true);
                    pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarEntrega.find("#Conceptos").addClass("disabledDetalle");
                } else if (entrega.Estatus === 'Cancelado') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(entrega.Estatus.toUpperCase());
                    tBtnEditarConcluir.addClass('hide');
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    btnConfirmarEliminar.attr("disabled", true);
                    pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarEntrega.find("#Conceptos").addClass("disabledDetalle");
                } else {
                    $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(entrega.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', false);
                    btnModificar.removeClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                    btnConfirmarEliminar.attr("disabled", false);
                    pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', false);
                    pnlDetalleEditarEntrega.find("#Conceptos").removeClass("disabledDetalle");
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }
    /*Traer catálogos para el encabezado*/
    function getClientes() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getClientes',
            type: "POST", dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Cliente + '</option>';
            });
            pnlNuevaEntrega.find("#Cliente_ID").html(options);
            pnlEditarEntrega.find("#Cliente_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    /*Trae los movimientos para el detalle*/
    function getTrabajosControlByClienteXClasificacion(Cliente_ID) {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getTrabajosControlEntregasByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                Cliente_ID: Cliente_ID
            }
        }).done(function (data, x, jq) {
            console.log(data);
            if (data.length > 0) {
                mdlSeleccionarTrabajosEditar.modal('show');
                $("#TrabajosXClienteIDXClasificacion").html(getTable('tblTrabajos', data));
                $('#TrabajosXClienteIDXClasificacion tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
                });
                var tblSelected = $('#tblTrabajos').DataTable(tableOptions);
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
                    temp = parseInt(dtm[0]);
                    $.ajax({
                        url: master_url + 'getTrabajoByID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: temp
                        }
                    }).done(function (data, x, jq) {
                        /**AQUI  VALIDA QUE EL CONCEPTO NO HAYA SIDO AGREGADO CON ANTERIORIDAD**/
                        var has_id = true;
                        if (pnlDetalleEditarEntrega.find("#tblRegistrosXDetalleXEntrega tbody tr").length > 0) {
                            $.each(pnlDetalleEditarEntrega.find("#tblRegistrosXDetalleXEntrega tbody tr"), function () {
                                var row_status = $(this).find("td").eq(1).text();
                                if (parseInt(row_status) === parseInt(temp)) {
                                    has_id = false;
                                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ESTE TRABAJO YA HA SIDO AGREGADO', 'danger');
                                    return false;
                                }
                            });
                        }
                        if (has_id) {
                            $.ajax({
                                url: master_url + 'getTrabajoByID',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: parseInt(dtm[0])
                                }
                            }).done(function (data, x, jq) {
                                if (data[0] !== undefined && data.length > 0) {
                                    var dtm = data[0];
                                    var frm = new FormData();
                                    frm.append('Entrega_ID', pnlEditarEntrega.find("#ID").val());
                                    frm.append('Trabajo_ID', dtm.ID);
                                    frm.append('Renglon', pnlDetalleEditarEntrega.find("table tr").length);
                                    $.ajax({
                                        url: master_url + 'onAgregarDetalleEditar',
                                        type: "POST",
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: frm
                                    }).done(function (data, x, jq) {
                                        getDetalleByID(pnlEditarEntrega.find("#ID").val());
                                    }).fail(function (x, y, z) {
                                        console.log(x, y, z);
                                    }).always(function () {
                                        HoldOn.close();
                                    });
                                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO EL TRABAJO', 'success');
                                } else {
                                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL TRABAJO NO SE AGREGO, INTENTE DE NUEVO', 'danger');
                                }
                            }).fail(function (x, y, z) {
                                mdlSeleccionarTrabajosEditar.modal('hide');
                                HoldOn.close();
                                console.log(x, y, z);
                            }).always(function () {
                                HoldOn.close();
                            });
                            if (!mdlSeleccionarTrabajosEditar.find("#chkMultiple").is(":checked")) {
                                mdlSeleccionarTrabajosEditar.modal('hide');
                            }
                        }
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                });
            } else {
                mdlSeleccionarTrabajosEditar.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN TRABAJOS CONCLUIDOS O AUTORIZADOS PARA ESTE CLIENTE', 'danger');
                HoldOn.close();
            }
            // Apply the search
            tblSelected.columns().every(function () {
                var that = this;
                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });

        }).fail(function (x, y, z) {
            console.log(x, y, z);
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN TRABAJOS CONCLUIDOS O AUTORIZADOS PARA ESTE CLIENTE', 'danger');
        }).always(function () {
            HoldOn.close();
        });
    }
    /*PANEL EDITAR DETALLE */
    var tempDetalle = 0;
    function getDetalleByID(IDX) {

        var ImporteTotal = pnlDetalleEditarEntrega.find("#ImporteTotal");
        var total = 0.0;
        $.ajax({
            url: master_url + 'getEntregaDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);

            if (data.length > 0) {
                pnlDetalleEditarEntrega.find("#Conceptos").html(getTable('tblRegistrosXDetalleXEntrega', data));
                var thead = pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega thead th');
                var tfoot = pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega tfoot th');
                thead.eq(0).addClass("hide");
                tfoot.eq(0).addClass("hide");
                //thead.eq(1).addClass("hide");
                //tfoot.eq(1).addClass("hide");
                thead.eq(8).addClass("hide");
                tfoot.eq(8).addClass("hide");
                $.each(pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("hide");
                    //td.eq(1).addClass("hide");
                    td.eq(8).addClass("hide");
                    total += parseFloat(td.eq(8).text());
                    ImporteTotalGlobal = total;
                });

                //Modificamos el importe en la base de datos
                $.ajax({
                    url: master_url + 'onModificarImportePorEntrega',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento,
                        DATA: total
                    }
                }).done(function (data, x, jq) {
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });


                /*Modificamos el importe*/
                ImporteTotal.html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ ' + $.number(total, 2, '.', ', ') + '</span>');
                var tblSelected = pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega').DataTable(tableOptionsDetalle);
                pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega tbody').on('click', 'tr', function () {
                    pnlDetalleEditarEntrega.find("#tblRegistrosXDetalleXEntrega").find("tr").removeClass("success");
                    pnlDetalleEditarEntrega.find("#tblRegistrosXDetalleXEntrega").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    temp = parseInt(dtm[0]);
                    tempDetalle = parseInt(dtm[0]);
                });
            } else {
                /*Modificamos el importe*/
                $.ajax({
                    url: master_url + 'onModificarImportePorEntrega',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento,
                        DATA: 0
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                ImporteTotal.html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ ' + $.number(0, 2, '.', ', ') + '</span>');
                pnlDetalleEditarEntrega.find("#Conceptos").html("");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onEliminarDetalleEntrega(IDC) {

        tempDetalle = IDC;
        mdlConfirmarEliminarDetalle.modal('show');
    }


    var ImporteTotalGlobal = 0;
</script>