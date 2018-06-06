<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading">
            <div class="cursor-hand" >Prefacturas</div>
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

<!--MODAL DE CONFIRMACION PARA EXPORTAR A INTELISIS-->
<div id="mdlCapturarInfoPago" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Datos del Pago</h4>
        </div>
        <div class="modal-body">
            <form id="frmAgregarDatosPagos">
                <fieldset>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <div class="form-group label-static">
                                <label for="FormaPago" class="control-label">Forma de Pago</label>
                                <select id="FormaPago" name="FormaPago" class="form-control" required="">
                                    <option value=""></option>
                                    <option value="FACTURA">FACTURA</option>
                                    <option value="SIN FACTURA">SIN FACTURA</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <div class="form-group label-static">
                                <label for="EstatusPago" class="control-label">Estatus Pago</label>
                                <select id="EstatusPago" name="EstatusPago" class="form-control" required="">
                                    <option value=""></option>
                                    <option value="Pagado">PAGADO</option>
                                    <option value="Finalizado">NO PAGADO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="FechaPago" class="control-label">Fecha Pago*</label>
                            <input type="text" id="FechaPago" name="FechaPago" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required="">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnGuardarDatosPago">ACEPTAR</button>
        </div>
    </div>
</div>

<!--MODAL DE CONFIRMACION PARA EXPORTAR A INTELISIS-->
<div id="mdlConfirmarExportarIntelisis" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Exportar Prefactura</h4>
        </div>
        <div class="modal-body">
            Deseas exportar la prefactura a Intelisis?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnExportar">ACEPTAR</button>
        </div>
    </div>
</div>
<!--PANEL NUEVO-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlNuevaPrefactura">
        <div class="Custompanel-heading dt-EncabezadoControles" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Nueva Prefactura
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
                    <div class=" col-6 col-md-3 hide">
                        <div class="form-group label-static">
                            <label for="Movimiento" class="control-label">Movimiento</label>
                            <input type="text" id="Movimiento" name="Movimiento"  class="form-control" readonly="" placeholder="" >
                        </div>
                    </div>
                    <div class=" col-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="ID" class="control-label">ID</label>
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
                            <label for="" class="control-label">Referencia Factura Intelisis*</label>
                            <input type="text" id="Referencia" name="Referencia"  class="form-control" placeholder="" required="">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Orden de Compra*</label>
                            <input type="text" id="OrdenCompra" name="OrdenCompra"  class="form-control" placeholder="" required="">
                        </div>
                    </div>
                    <input type="text" id="ClienteNombre" name="ClienteNombre" readonly="" class="form-control hide" placeholder="" >
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Cliente*</label>
                            <select id="ClienteIntelisis" name="ClienteIntelisis" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Proyecto*</label>
                            <select id="ProyectoIntelisis" name="ProyectoIntelisis" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="form-group label-static">
                            <label for="Comentarios" class="control-label">(Opcional) Comentarios   *Texto que aparecera en el cuerpo de la factura*</label>
                            <textarea class="col-md-12 form-control" id="Comentarios" name="Comentarios" rows="4" ></textarea>
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
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleNuevaPrefactura">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-5">
                    <div class="cursor-hand" >Trabajos Entregados </div>
                </div>
                <div id="ImporteTotal" class="col-md-7" align="right">
                    <span class="text-success spanTotalesDetalle">$ 0.0</span>
                </div>
            </div>
        </div>
        <!--<div class="panel-body">-->
        <fieldset>
            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-default" id="btnNuevoRenglonPrefacturaNuevo"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
            </div>
        </fieldset>
        <!--        </div>-->
    </div>
</div>
<!--PANEL EDITAR-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlEditarPrefactura">
        <div class="Custompanel-heading dt-EncabezadoControles" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelarModificar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Editar Prefactura
                </div>
                <div class="input-group pull-right" align="center">
                    <span class="dt-EncabezadoControles">

                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes" >
                            <span class="fa fa-print " ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon hide" id="btnExportarIntelisis" data-toggle="tooltip" data-placement="top" title="" data-original-title="Exportar a Intelisis" >
                            <span class="fa fa-cloud-upload " ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnCapturarPago" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Capturar Pago">
                            <span class="fa fa-money" ></span>
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
                    <button type="button" class="btn btn-raised btn-primary" id="btnModificarPrefactura" >GUARDAR</button>
                    <span>&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmEditar">
                <fieldset>
                    <hr>
                    <div class=" col-6 col-md-3 hide">
                        <div class="form-group label-static">
                            <label for="Movimiento" class="control-label">Movimiento</label>
                            <input type="text" id="Movimiento" name="Movimiento"  class="form-control" readonly="" placeholder="" >
                        </div>
                    </div>
                    <div class=" col-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="ID" class="control-label">ID</label>
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
                            <label for="" class="control-label">Referencia Factura Intelisis*</label>
                            <input type="text" id="Referencia" name="Referencia"  class="form-control" placeholder="" required="">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Orden de Compra*</label>
                            <input type="text" id="OrdenCompra" name="OrdenCompra"  class="form-control" placeholder="" required="">
                        </div>
                    </div>
                    <input type="text" id="ClienteNombre" name="ClienteNombre" readonly="" class="form-control hide" placeholder="" >
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Cliente*</label>
                            <select id="ClienteIntelisis" name="ClienteIntelisis" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Proyecto*</label>
                            <select id="ProyectoIntelisis" name="ProyectoIntelisis" class="form-control" >
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="form-group label-static">
                            <label for="Comentarios" class="control-label">(Opcional) Comentarios   *Texto que aparecera en el cuerpo de la factura*</label>
                            <textarea class="col-md-12 form-control" id="Comentarios" name="Comentarios" rows="4" ></textarea>
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
<!--PANEL EDITAR DETALLE-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleEditarPrefactura">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-6">
                    <div class="cursor-hand" >Trabajos Entregados </div>
                </div>
                <div id="ImporteTotal" class="col-md-6" align="right">
                    <h4 class="text-success">$ 0.0</h4>
                </div>
            </div>
        </div>
        <fieldset>
            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-default" id="btnNuevoRenglonPrefacturaEditar"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
            </div>
            <div class="col-md-12 table-responsive " id="Conceptos" >
            </div>
        </fieldset>
    </div>
</div>
<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlSeleccionarEntregasEditar" class="modal modalFull animated fadeInUp">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Seleccionar Trabajos Entregados</h4>
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
                <div class="col-md-12" id="Entregas">
                </div>
            </div>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlPrefacturas/';
    var menuTablero = $('#MenuTablero');
    var btnNuevo = $("#btnNuevo");
    var verMovs = 'getMyRecords';
    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");
    var pnlNuevaPrefactura = $("#pnlNuevaPrefactura");
    var pnlDetalleNuevaPrefactura = $("#pnlDetalleNuevaPrefactura");
    var btnNuevoRenglonPrefacturaNuevo = pnlDetalleNuevaPrefactura.find('#btnNuevoRenglonPrefacturaNuevo')
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    var tBtnConcluir = pnlNuevaPrefactura.find("#Concluir");
    var currentDate = new Date();
//editar
    var pnlEditarPrefactura = $('#pnlEditarPrefactura');
    var btnCancelarModificar = $("#btnCancelarModificar");
    var pnlDetalleEditarPrefactura = $("#pnlDetalleEditarPrefactura");
    var tBtnEditarConcluir = pnlEditarPrefactura.find("#Concluir");
    var btnEliminar = $("#btnEliminar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    var btnModificar = $("#btnModificarPrefactura");
    var btnExportarIntelisis = $('#btnExportarIntelisis');
    var mdlConfirmarExportarIntelisis = $('#mdlConfirmarExportarIntelisis');
    var btnExportar = mdlConfirmarExportarIntelisis.find('#btnExportar');


    var btnCapturarPago = $('#btnCapturarPago');
    var mdlCapturarInfoPago = $('#mdlCapturarInfoPago');
    var btnGuardarDatosPago = mdlCapturarInfoPago.find('#btnGuardarDatosPago');

//detalle editar
    var btnNuevoRenglonPrefacturaEditar = pnlDetalleEditarPrefactura.find("#btnNuevoRenglonPrefacturaEditar");
    var mdlSeleccionarEntregasEditar = $("#mdlSeleccionarEntregasEditar");


    var IdMovimiento = 0;
    $(document).ready(function () {
        btnVerMisMovimientos.on("click", function () {
            verMovs = 'getMyRecords';
            getRecords();
        });
        btnVerTodos.on("click", function () {
            verMovs = 'getRecords';
            getRecords();
        });
        /*Boton que inserta a intelisis*/
        btnExportar.on("click", function () {
            var frm = new FormData(pnlEditarPrefactura.find("#frmEditar")[0]);
            frm.append('Importe', ImporteTotalGlobal);
            $.ajax({
                url: master_url + 'onAgregarIntelisis',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                mdlConfirmarExportarIntelisis.modal('hide');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PREFACTURA EXPORTADA CORRECTAMENTE', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnExportarIntelisis.on("click", function () {
            mdlConfirmarExportarIntelisis.modal('show');
        });

        /*Boton que captura el pago*/
        btnGuardarDatosPago.on("click", function () {
            var frm = new FormData($('#mdlCapturarInfoPago').find("#frmAgregarDatosPagos")[0]);
            frm.append('ID', IdMovimiento);
            $.ajax({
                url: master_url + 'onAgregarPago',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                mdlCapturarInfoPago.modal('hide');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PAGO REGISTRADO CORRECTAMENTE', 'success');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnCapturarPago.on("click", function () {

            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getPrefacturaByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdMovimiento
                }
            }).done(function (data, x, jq) {
                console.log(data);
                mdlCapturarInfoPago.find("input").val("");
                mdlCapturarInfoPago.find("select").select2("val", "");
                var prefactura = data[0];
                mdlCapturarInfoPago.find("#EstatusPago").select2("val", prefactura.EstatusPago);
                mdlCapturarInfoPago.find("#FormaPago").select2("val", prefactura.FormaPago);
                mdlCapturarInfoPago.find("#FechaPago").val(prefactura.FechaPago);
                mdlCapturarInfoPago.modal('show');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });

        });

        //Boton de neuvo en detalle editar
        btnNuevoRenglonPrefacturaNuevo.on("click", function () {
            onNotify('<span class="fa fa-exclamation fa-2x"></span>', 'DEBE DE GUARDAR EL MOVIMIENTO', 'danger');
        });
        btnNuevoRenglonPrefacturaEditar.on("click", function () {
            /*Trae los movimientos para el detalle*/
            getTrabajosEntregadosParaPrefactura();
        });
        pnlNuevaPrefactura.find("#ClienteIntelisis").change(function () {
            getClienteNombrebyCliente(pnlNuevaPrefactura.find("#ClienteIntelisis").val(), $(this).val());
        });
        pnlEditarPrefactura.find("#ClienteIntelisis").change(function () {
            getClienteNombrebyCliente(pnlEditarPrefactura.find("#ClienteIntelisis").val(), $(this).val());
        });
        tBtnEditarConcluir.on("click", function () {
            if (!$(this).is(':checked')) {
                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                btnModificar.removeClass('hide');
            }
        });
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
                    ID: IdMovimiento
                }
            }).done(function (data, x, jq) {
                mdlConfirmar.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PREFACTURA ELIMINADA', 'danger');
                pnlEditarPrefactura.addClass("hide");
                pnlDetalleEditarPrefactura.addClass("hide");
                menuTablero.addClass("animated slideInLeft").removeClass("hide");
                getRecords();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnNuevo.on('click', function () {
     
            pnlNuevaPrefactura.removeClass('hide');
            menuTablero.addClass('hide');
            pnlDetalleNuevaPrefactura.removeClass('hide');
            pnlNuevaPrefactura.find("input").val("");
            pnlNuevaPrefactura.find("textarea").val("");
            pnlNuevaPrefactura.find("select").val(null).trigger("change");
            pnlNuevaPrefactura.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlNuevaPrefactura.find("#Movimiento").val("PREFACTURA");
            pnlNuevaPrefactura.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");
        });
        //Boton de nuevo en detalle nuevo
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevaPrefactura.addClass("hide");
            pnlDetalleNuevaPrefactura.addClass('hide');
           
        });
        btnCancelarModificar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarPrefactura.addClass("hide");
            pnlDetalleEditarPrefactura.addClass("hide");
            
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
                    ClienteIntelisis: 'required',
                    Referencia: 'required',
                    ProyectoIntelisis: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
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
            if (pnlNuevaPrefactura.find('#frmNuevo').valid()) {
                var frm = new FormData(pnlNuevaPrefactura.find("#frmNuevo")[0]);
                if (tBtnConcluir.is(':checked')) {
                    frm.append('Estatus', 'Concluido');
                } else {
                    frm.append('Estatus', 'Borrador');
                }
                // Agregar Importe total
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
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVA PREFACTURA', 'success');
                    // Funcion que regarga el panel de editar con el nuevo registro
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
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    ClienteIntelisis: 'required',
                    Referencia: 'required',
                    ProyectoIntelisis: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
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
                var frm = new FormData(pnlEditarPrefactura.find("#frmEditar")[0]);
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
                    console.log(data);
                    getRecords();
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO GUARDADO', 'success');
                    if (tBtnEditarConcluir.is(':checked')) {
                        btnModificar.addClass('hide');
                        btnExportarIntelisis.removeClass('hide');
                        btnCapturarPago.removeClass('hide');
                        $('#frmEditar').find('input, textarea, button, select').attr('readonly', true);
                        $('#frmEditar').find('select').addClass('disabledDetalle');
                        $('#frmEditar').find("#FechaCreacion").addClass('disabledDetalle');
                        btnConfirmarEliminar.attr("disabled", true);
                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text('Concluido'.toUpperCase());
                        pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', true);
                        pnlDetalleEditarPrefactura.find("#Conceptos").addClass("disabledDetalle");
                    } else {
                        btnExportarIntelisis.addClass('hide');
                        btnCapturarPago.addClass('hide');
                        $('#frmEditar').find('#Referencia').attr('readonly', false);
                        $('#frmEditar').find('#Comentarios').attr('readonly', false);
                        $('#frmEditar').find('select').removeClass('disabledDetalle');
                        $('#frmEditar').find("#FechaCreacion").removeClass('disabledDetalle');
                        btnConfirmarEliminar.attr("disabled", false);
                        $(".spanEditarEstatus").removeClass('label-success').addClass('label-default').text('Borrador'.toUpperCase());
                        pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', false);
                        pnlDetalleEditarPrefactura.find("#Conceptos").removeClass("disabledDetalle");
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        getClientes();
        getProyectos();
        getRecords();
    });
    function getClientes() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getClientesIntelisis',
            type: "POST", dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.Cliente + '">' + v.Nombre + '</option>';
            });
            pnlNuevaPrefactura.find("#ClienteIntelisis").html(options);
            pnlEditarPrefactura.find("#ClienteIntelisis").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getProyectos() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getProyectosIntelisis',
            type: "POST", dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.Proyecto + '">' + v.Descripcion + '</option>';
            });
            pnlNuevaPrefactura.find("#ProyectoIntelisis").html(options);
            pnlEditarPrefactura.find("#ProyectoIntelisis").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
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
                $("#tblRegistros").html(getTable('tblPrefacturas', data));
                $('#tblPrefacturas tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
                });
                var tblSelected = $('#tblPrefacturas').DataTable(tableOptions);
                $('#tblPrefacturas tbody').on('click', 'tr', function () {
                    $("#tblPrefacturas").find("tr").removeClass("success");
                    $("#tblPrefacturas").find("tr").removeClass("warning");
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
                    if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
                        HoldOn.open({
                            theme: "sk-bounce",
                            message: "CARGANDO DATOS..."
                        });
                        $.ajax({
                            url: master_url + 'getPrefacturaByID',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: IdMovimiento
                            }
                        }).done(function (data, x, jq) {
                            console.log(data);
                            pnlEditarPrefactura.find("input").val("");
                            pnlEditarPrefactura.find("select").select2("val", "");
                            var prefactura = data[0];
                            
                            if (prefactura.Estatus === 'Concluido') {

                                $.ajax({
                                    url: master_url + 'getAllProyectosIntelisis',
                                    type: "POST", dataType: "JSON"
                                }).done(function (data, x, jq) {
                                    var options = '<option></option>';
                                    $.each(data, function (k, v) {
                                        options += '<option value="' + v.Proyecto + '">' + v.Descripcion + '</option>';
                                    });
                                    pnlEditarPrefactura.find("#ProyectoIntelisis").html(options);
                                    pnlEditarPrefactura.find("#ProyectoIntelisis").select2("val", prefactura.ProyectoIntelisis);
                                }).fail(function (x, y, z) {
                                    console.log(x, y, z);
                                }).always(function () {
                                });

                            }
                            else{
                                pnlEditarPrefactura.find("#ProyectoIntelisis").select2("val", prefactura.ProyectoIntelisis);
                                
                            }
                            
                            
                            
                            pnlEditarPrefactura.find("#ID").val(prefactura.ID);
                            pnlEditarPrefactura.find("#Movimiento").val(prefactura.Movimiento);
                            pnlEditarPrefactura.find("#FechaCreacion").val(prefactura.FechaCreacion);
                            pnlEditarPrefactura.find("#Referencia").val(prefactura.Referencia);
                            pnlEditarPrefactura.find("#ClienteIntelisis").select2("val", prefactura.ClienteIntelisis);
                           
                            pnlEditarPrefactura.find("#ClienteNombre").val(prefactura.ClienteNombre);
                            pnlEditarPrefactura.find("#Importe").val(prefactura.Importe);
                            pnlEditarPrefactura.find("#Estatus").val(prefactura.Estatus);
                            pnlEditarPrefactura.find("#Comentarios").val(prefactura.Comentarios);
                            pnlEditarPrefactura.find("#Usuario_ID").val(prefactura.Usuario_ID);
                            pnlEditarPrefactura.find("#OrdenCompra").val(prefactura.OrdenCompra);
                            menuTablero.addClass("hide");
                            pnlEditarPrefactura.removeClass("hide");
                            pnlDetalleEditarPrefactura.removeClass("hide");
                            getDetalleByID(IdMovimiento);
                            //Control de estatus
                            if (prefactura.Estatus === 'Concluido') {
                                $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(prefactura.Estatus.toUpperCase());
                                tBtnEditarConcluir.prop('checked', true);
                                btnModificar.addClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('readonly', true);
                                $('#frmEditar').find('select').addClass('disabledDetalle');
                                $('#frmEditar').find("#FechaCreacion").addClass('disabledDetalle');
                                btnConfirmarEliminar.attr("disabled", true);
                                pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', true);
                                pnlDetalleEditarPrefactura.find("#Conceptos").addClass("disabledDetalle");
                                btnExportarIntelisis.removeClass('hide');
                                btnCapturarPago.removeClass('hide');
                            } else if (prefactura.Estatus === 'Cancelado') {
                                $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(prefactura.Estatus.toUpperCase());
                                tBtnEditarConcluir.addClass('hide');
                                btnModificar.addClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', true);
                                pnlDetalleEditarPrefactura.find("#Conceptos").addClass("disabledDetalle");
                            } else {
                                $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(prefactura.Estatus.toUpperCase());
                                tBtnEditarConcluir.prop('checked', false);
                                btnModificar.removeClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                                $('#frmEditar').find('select').removeClass('disabledDetalle');
                                $('#frmEditar').find("#FechaCreacion").removeClass('disabledDetalle');
                                btnConfirmarEliminar.attr("disabled", false);
                                pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', false);
                                pnlDetalleEditarPrefactura.find("#Conceptos").removeClass("disabledDetalle");
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

    function getClienteNombrebyCliente(Cliente) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getClienteNombrebyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: Cliente
            }
        }).done(function (data, x, jq) {
            if (data[0] !== undefined) {
                var cliente = data[0];
                pnlNuevaPrefactura.find("#ClienteNombre").val(cliente.Nombre);
                pnlEditarPrefactura.find("#ClienteNombre").val(cliente.Nombre);
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    var ImporteTotalGlobal = 0;
    function getTrabajosEntregadosParaPrefactura() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getTrabajosEntregadosParaPrefactura',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            if (data.length > 0) {
                mdlSeleccionarEntregasEditar.modal('show');
                $("#Entregas").html(getTable('tblEntregas', data));
                $('#tblEntregas tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
                });
                var tblSelected = $('#tblEntregas').DataTable(tableOptions);
                $('#tblEntregas tbody').on('click', 'tr', function () {
                    $("#tblEntregas").find("tr").removeClass("success");
                    $("#tblEntregas").find("tr").removeClass("warning");
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
                        console.log(data);
                        /**AQUI  VALIDA QUE EL CONCEPTO NO HAYA SIDO AGREGADO CON ANTERIORIDAD**/
                        var has_id = true;
                        if (pnlDetalleEditarPrefactura.find("#tblRegistrosDetalle tbody tr").length > 0) {
                            $.each(pnlDetalleEditarPrefactura.find("#tblRegistrosDetalle tbody tr"), function () {
                                var row_status = $(this).find("td").eq(1).text();
                                if (parseInt(row_status) === parseInt(temp)) {
                                    has_id = false;
                                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ESTE FOLIO YA HA SIDO AGREGADO', 'danger');
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
                                    frm.append('Prefactura_ID', pnlEditarPrefactura.find("#ID").val());
                                    frm.append('Trabajo_ID', dtm.ID);
                                    $.ajax({
                                        url: master_url + 'onAgregarDetalleEditar',
                                        type: "POST",
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: frm
                                    }).done(function (data, x, jq) {
                                        getDetalleByID(IdMovimiento);
                                    }).fail(function (x, y, z) {
                                        console.log(x, y, z);
                                    }).always(function () {
                                        HoldOn.close();
                                    });
                                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO LA PREFACTURA', 'success');
                                } else {
                                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'LA PREFACTURA NO SE AGREGO, INTENTE DE NUEVO', 'danger');
                                }
                            }).fail(function (x, y, z) {
                                mdlSeleccionarEntregasEditar.modal('hide');
                                HoldOn.close();
                                console.log(x, y, z);
                            }).always(function () {
                                HoldOn.close();
                            });
                            if (!mdlSeleccionarEntregasEditar.find("#chkMultiple").is(":checked")) {
                                mdlSeleccionarEntregasEditar.modal('hide');
                            }
                        }
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                });
            } else {
                mdlSeleccionarEntregasEditar.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN TRABAJOS CONCLUIDAS O ENTREGADOS', 'danger');
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
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN PREFACTURAS CONCLUIDAS O AUTORIZADAS', 'danger');
        }).always(function () {
            HoldOn.close();
        });
    }
    function getDetalleByID(IDX) {
        var ImporteTotal = pnlDetalleEditarPrefactura.find("#ImporteTotal");
        var total = 0.0;
        $.ajax({
            url: master_url + 'getDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                pnlDetalleEditarPrefactura.find("#Conceptos").html(getTable('tblRegistrosDetalle', data));
                var thead = pnlDetalleEditarPrefactura.find('#tblRegistrosDetalle thead th');
                var tfoot = pnlDetalleEditarPrefactura.find('#tblRegistrosDetalle tfoot th');
                thead.eq(0).addClass("hide");
                tfoot.eq(0).addClass("hide");
                thead.eq(1).addClass("hide");
                tfoot.eq(1).addClass("hide");
                thead.eq(7).addClass("hide");
                tfoot.eq(7).addClass("hide");
                $.each(pnlDetalleEditarPrefactura.find('#tblRegistrosDetalle tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("hide");
                    td.eq(1).addClass("hide");
                    td.eq(7).addClass("hide");
                    total += parseFloat(td.eq(7).text());
                    ImporteTotalGlobal = total;
                });
                /*Modificamos el importe*/
                $.ajax({
                    url: master_url + 'onModificarImportePorPrefactura',
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
                //Seteamos el importeTotal
                ImporteTotal.html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ ' + $.number(total, 2, '.', ', ') + '</span>');
                var tblSelected = pnlDetalleEditarPrefactura.find('#tblRegistrosDetalle').DataTable(tableOptionsDetalle);
                pnlDetalleEditarPrefactura.find('#tblRegistrosDetalle tbody').on('click', 'tr', function () {
                    pnlDetalleEditarPrefactura.find("#tblRegistrosDetalle").find("tr").removeClass("success");
                    pnlDetalleEditarPrefactura.find("#tblRegistrosDetalle").find("tr").removeClass("warning");
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
                /*Modificamos el importe cuando no hay datos o se queda sin nada el detalle*/
                $.ajax({
                    url: master_url + 'onModificarImportePorPrefactura',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento,
                        DATA: 0
                    }
                }).done(function (data, x, jq) {
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                //Seteamos el importeTotal
                ImporteTotal.html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ ' + $.number(0, 2, '.', ', ') + '</span>');
                pnlDetalleEditarPrefactura.find("#Conceptos").html("");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarPrefacturaDetalle(evt, IDX) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ELIMINANDO...'
        });
        $.ajax({
            url: master_url + 'onEliminarPrefacturaDetalle',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var row = $(evt).parent().parent().find("td");
            $(evt).parent().parent().remove();
            getDetalleByID(IdMovimiento);
        }).fail(function (x, y, z) {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'REGISTRO NO ELIMINADO', 'danger');
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Para despues de insertar pro primera vez se cargue el panel de editar*/
    function despuesDeGuardar(IDPrefactura) {
        pnlNuevaPrefactura.addClass("hide");
        pnlDetalleNuevaPrefactura.addClass('hide');
        temp = IDPrefactura;
        IdMovimiento = IDPrefactura;
        //Abre al hacer click el movimiento para editar
        if (temp !== 0 && temp !== undefined && temp > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getPrefacturaByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                pnlEditarPrefactura.find("input").val("");
                pnlEditarPrefactura.find("select").select2("val", "");
                var prefactura = data[0];
                pnlEditarPrefactura.find("#ID").val(prefactura.ID);
                pnlEditarPrefactura.find("#Movimiento").val(prefactura.Movimiento);
                pnlEditarPrefactura.find("#FechaCreacion").val(prefactura.FechaCreacion);
                pnlEditarPrefactura.find("#Referencia").val(prefactura.Referencia);
                pnlEditarPrefactura.find("#ClienteIntelisis").select2("val", prefactura.ClienteIntelisis);
                pnlEditarPrefactura.find("#ProyectoIntelisis").select2("val", prefactura.ProyectoIntelisis);
                pnlEditarPrefactura.find("#ClienteNombre").val(prefactura.ClienteNombre);
                pnlEditarPrefactura.find("#Importe").val(prefactura.Importe);
                pnlEditarPrefactura.find("#Estatus").val(prefactura.Estatus);
                pnlEditarPrefactura.find("#Comentarios").val(prefactura.Comentarios);
                pnlEditarPrefactura.find("#Usuario_ID").val(prefactura.Usuario_ID);
                pnlEditarPrefactura.find("#OrdenCompra").val(prefactura.OrdenCompra);
                menuTablero.addClass("hide");
                pnlEditarPrefactura.removeClass("hide");
                
                //Control de estatus
                if (prefactura.Estatus === 'Concluido') {
                    btnExportarIntelisis.removeClass('hide');
                    btnCapturarPago.removeClass('hide');
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(prefactura.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', true);
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    btnConfirmarEliminar.attr("disabled", true);
                    pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarPrefactura.find("#Conceptos").addClass("disabledDetalle");
                } else if (prefactura.Estatus === 'Cancelado') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(prefactura.Estatus.toUpperCase());
                    tBtnEditarConcluir.addClass('hide');
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    btnConfirmarEliminar.attr("disabled", true);
                    pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarPrefactura.find("#Conceptos").addClass("disabledDetalle");
                } else {
                    $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(prefactura.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', false);
                    btnModificar.removeClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                    btnConfirmarEliminar.attr("disabled", false);
                    pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', false);
                    pnlDetalleEditarPrefactura.find("#Conceptos").removeClass("disabledDetalle");
                }
                
                pnlDetalleEditarPrefactura.removeClass("hide");
                getDetalleByID(temp);
                
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }
</script>