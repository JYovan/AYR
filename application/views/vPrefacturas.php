<div class="card border-0" id="MenuTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5 float-left">
                <legend class="float-left">Prefacturas</legend>
            </div>
            <div class="col-md-7" align="right">
                <button type="button" class="btn btn-warning btn-sm" id="btnCleanFilter"><span class="fa fa-eraser " ></span><br>LIMPIAR FILTROS</button>
                <button type="button" class="btn btn-info btn-sm" id="btnVerTodos"><span class="fa fa-list-ol " ></span><br>CONCLUIDOS</button>
                <button type="button" class="btn btn-info btn-sm" id="btnVerMisMovimientos"><span class="fa fa-eye "></span><br>EN FIRME</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnNuevo"><span class="fa fa-plus " ></span><br>NUEVO</button>
            </div>
        </div>
        <div class="card-block">
            <div class="col-md-12 table-responsive" id="tblRegistros"></div>
        </div>
    </div>
</div>

<!--MODAL CAPTURA PAGO-->
<div id="mdlCapturarInfoPago" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <h5 class="modal-title">Datos Pago</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="frmAgregarDatosPagos">
                <fieldset>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <div class="form-group label-static">
                                <label for="FormaPago" class="control-label">Forma de Pago</label>
                                <select id="FormaPago" name="FormaPago" class="form-control form-control-sm" required="">
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
                                <select id="EstatusPago" name="EstatusPago" class="form-control form-control-sm" required="">
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
                            <input type="text" id="FechaPago" name="FechaPago" class="form-control form-control-sm" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required="">
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
            <h5 class="modal-title">Exportar Prefactura</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
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
<!--PANEL EDITAR-->
<div id="" class="container-fluid">
    <div class="card border-0  d-none" id="pnlDatos">
        <div class="card-body text-dark">
            <form id="frmNuevo">
                <div class="row">
                    <div class="col-md-5 float-left">
                        <legend >Prefactura</legend>
                    </div>
                    <div class="col-md-2" align="right" id="spanEstatus">
                        <span style="font-size: 15px;" class="badge badge-secondary">
                            BORRADOR
                        </span>
                    </div>
                    <div class="col-md-5" align="right">
                        <button type="button" class="btn btn-primary btn-sm" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" >
                            <span class="fa fa-arrow-left" ></span>
                        </button>
                        <button type="button" class="btn  btn-primary btn-sm d-none" id="btnExportarIntelisis" data-toggle="tooltip" data-placement="bottom" title="Exportar a Intelisis" ><span class="fa fa-cloud-upload "></span> </button>
                        <button type="button" class="btn  btn-primary btn-sm d-none" id="btnCapturarPago" data-toggle="tooltip" data-placement="bottom" title="Capturar Pago"><span class="fa fa-dollar-sign "></span> </button>

                        <button type="button" class="btn btn-warning btn-sm" id="btnImprimirReportesEditarEntrega"><span class="fa fa-print "></span> IMPRIMIR</button>
                        <button type="button" class="btn btn-success btn-sm d-none" id="btnConcluir"><span class="fa fa-check "></span> CONCLUIR</button>
                        <button type="button" class="btn btn-info btn-sm d-none" id="btnInconcluir"><span class="fa fa-undo "></span> IN-CONCLUIR</button>
                        <button type="button" class="btn btn-danger btn-sm" id="btnEliminar"><span class="fa fa-trash "></span> ELIMINAR</button>
                        <button type="button" class="btn btn-info btn-sm" id="btnGuardar"><span class="fa fa-save "></span> GUARDAR</button>
                    </div>
                </div>
                <form id="frmNuevo">
                    <fieldset>
                        <hr>
                        <div class="row">
                            <div class=" col-6 col-md-3 d-none">
                                <div class="form-group label-static">
                                    <input type="text" id="Movimiento" name="Movimiento"  class="form-control form-control-sm" readonly="" placeholder="" >
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="ID" class="control-label">ID</label>
                                    <input type="text" id="ID" name="ID" class="form-control form-control-sm" readonly="" placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control form-control-sm" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Referencia Factura Intelisis*</label>
                                    <input type="text" id="Referencia" name="Referencia"  class="form-control form-control-sm" placeholder="" required="">
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Orden de Compra*</label>
                                    <input type="text" id="OrdenCompra" name="OrdenCompra"  class="form-control form-control-sm" placeholder="" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <input type="text" id="ClienteNombre" name="ClienteNombre" readonly="" class="form-control d-none" placeholder="" >
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Cliente*</label>
                                    <select id="ClienteIntelisis" name="ClienteIntelisis" class="form-control form-control-sm" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Proyecto*</label>
                                    <select id="ProyectoIntelisis" name="ProyectoIntelisis" class="form-control form-control-sm" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-md-12">
                                <div class="form-group label-static">
                                    <label for="Comentarios" class="control-label">(Opcional) Comentarios   *Texto que aparecera en el cuerpo de la factura*</label>
                                    <textarea class="col-md-12 form-control" id="Comentarios" name="Comentarios" rows="4" ></textarea>
                                </div>
                            </div>
                            <input type="text" id="Usuario_ID" name="Usuario_ID"  class="form-control d-none" placeholder="" >
                        </div>
                    </fieldset>
                </form>
        </div>
    </div>
</div>
<!--PANEL EDITAR DETALLE-->
<div class="card border-0 d-none" id="pnlDetalleEditarPrefactura">
    <div class="card-body">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6" align="left">
                    <legend>Trabajos Entregados</legend>
                </div>
                <div class="col-md-6" align="right">
                    <button type="button" class="btn btn-primary btn-sm" id="btnNuevoRenglonPrefacturaEditar"><span class="fa fa-plus "></span></button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 table-responsive " id="Conceptos" >
                </div>
            </div>
        </div>
    </div>
</div>
<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlSeleccionarEntregasEditar" class="modal modal-fullscreen">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar Trabajos Entregados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
            <div class="modal-footer">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Prefacturas/';
    var menuTablero = $('#MenuTablero');
    var btnNuevo = $("#btnNuevo");
    var verMovs = 'getMyRecords';
    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");
    var pnlDatos = $("#pnlDatos");
    var pnlDetalleNuevaPrefactura = $("#pnlDetalleNuevaPrefactura");
    var btnNuevoRenglonPrefacturaNuevo = pnlDetalleNuevaPrefactura.find('#btnNuevoRenglonPrefacturaNuevo')
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    var tBtnConcluir = pnlDatos.find("#Concluir");
    var currentDate = new Date();
//editar
    var pnlDatos = $('#pnlDatos');
    var btnCancelarModificar = $("#btnCancelarModificar");
    var pnlDetalleEditarPrefactura = $("#pnlDetalleEditarPrefactura");
    var tBtnEditarConcluir = pnlDatos.find("#Concluir");
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
    var nuevo = true;

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
            var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);
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
                mdlConfirmarExportarIntelisis.modal('d-none');
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
                mdlCapturarInfoPago.modal('d-none');
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
        btnNuevoRenglonPrefacturaEditar.on("click", function () {
            /*Trae los movimientos para el detalle*/
            getTrabajosEntregadosParaPrefactura();
        });
        pnlDatos.find("#ClienteIntelisis").change(function () {
            getClienteNombrebyCliente(pnlDatos.find("#ClienteIntelisis").val(), $(this).val());
        });
        pnlDatos.find("#ClienteIntelisis").change(function () {
            getClienteNombrebyCliente(pnlDatos.find("#ClienteIntelisis").val(), $(this).val());
        });
        tBtnEditarConcluir.on("click", function () {
            if (!$(this).is(':checked')) {
                $('#frmNuevo').find('input, textarea, button, select').attr('disabled', false);
                btnModificar.removeClass('d-none');
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
                mdlConfirmar.modal('d-none');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PREFACTURA ELIMINADA', 'danger');
                pnlDatos.addClass("d-none");
                pnlDetalleEditarPrefactura.addClass("d-none");
                menuTablero.addClass("animated slideInLeft").removeClass("d-none");
                getRecords();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnNuevo.on('click', function () {
            pnlDatos.removeClass('d-none');
            menuTablero.addClass('d-none');
            pnlDetalleNuevaPrefactura.removeClass('d-none');
            pnlDatos.find("input").val("");
            pnlDatos.find("textarea").val("");
            pnlDatos.find("select").val(null).trigger("change");
            pnlDatos.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlDatos.find("#Movimiento").val("PREFACTURA");
            pnlDatos.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");
            nuevo = true;
            $(':input:text:enabled:visible:first').focus();
        });
        //Boton de nuevo en detalle nuevo
        btnCancelar.on("click", function () {
            menuTablero.removeClass("d-none");
            pnlDatos.addClass("d-none");
            pnlDetalleEditarPrefactura.addClass('d-none');
        });
        btnGuardar.on("click", function () {
            //Si es verdadero que hacer
            if (pnlDatos.find('#frmNuevo').valid()) {
                var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);
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
                    nuevo = false;
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
            //Si es verdadero que hacer
            if ($('#frmNuevo').valid()) {
                var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);
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
                        btnModificar.addClass('d-none');
                        btnExportarIntelisis.removeClass('d-none');
                        btnCapturarPago.removeClass('d-none');
                        $('#frmNuevo').find('input, textarea, button, select').attr('readonly', true);
                        $('#frmNuevo').find('select').addClass('disabledDetalle');
                        $('#frmNuevo').find("#FechaCreacion").addClass('disabledDetalle');
                        btnConfirmarEliminar.attr("disabled", true);
                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text('Concluido'.toUpperCase());
                        pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', true);
                        pnlDetalleEditarPrefactura.find("#Conceptos").addClass("disabledDetalle");
                    } else {
                        btnExportarIntelisis.addClass('d-none');
                        btnCapturarPago.addClass('d-none');
                        $('#frmNuevo').find('#Referencia').attr('readonly', false);
                        $('#frmNuevo').find('#Comentarios').attr('readonly', false);
                        $('#frmNuevo').find('select').removeClass('disabledDetalle');
                        $('#frmNuevo').find("#FechaCreacion").removeClass('disabledDetalle');
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
        handleEnter();
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
                pnlDatos.find("[name='ProyectoIntelisis']")[0].selectize.addOption({text: v.Nombre, value: v.Cliente});
            });
            pnlDatos.find("#ClienteIntelisis").html(options);
            pnlDatos.find("#ClienteIntelisis").html(options);
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
            $.each(data, function (k, v) {
                pnlDatos.find("[name='ProyectoIntelisis']")[0].selectize.addOption({text: v.Descripcion, value: v.Proyecto});
            });
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
                    $(this).html('<input type="text" placeholder="Buscar por ' + title + '" class="form-control form-control-sm"/>');
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
                    nuevo = false;
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
                            pnlDatos.find("input").val("");
                            $.each(pnlDatos.find("select"), function (k, v) {
                                pnlDatos.find("select")[k].selectize.clear(true);
                            });
                            var prefactura = data[0];

                            if (prefactura.Estatus === 'Concluido') {

                                $.ajax({
                                    url: master_url + 'getAllProyectosIntelisis',
                                    type: "POST", dataType: "JSON"
                                }).done(function (data, x, jq) {
                                    var options = '<option></option>';
                                    $.each(data, function (k, v) {
                                        pnlDatos.find("[name='ProyectoIntelisis']")[0].selectize.addOption({text: v.Descripcion, value: v.Proyecto});
                                    });
                                    pnlDatos.find("[name='ProyectoIntelisis']")[0].selectize.setValue(prefactura.ProyectoIntelisis);
                                }).fail(function (x, y, z) {
                                    console.log(x, y, z);
                                }).always(function () {
                                });

                            } else {
                                pnlDatos.find("[name='ProyectoIntelisis']")[0].selectize.setValue(prefactura.ProyectoIntelisis);

                            }


                            $.each(data[0], function (k, v) {
                                if (v !== null && v !== '' && v !== 'null') {
                                    if (pnlDatos.find("[name='" + k + "']").is('select')) {
                                        pnlDatos.find("[name='" + k + "']")[0].selectize.setValue(v);
                                    } else {
                                        pnlDatos.find("[name='" + k + "']").val(v);

                                    }
                                }
                            });



                            menuTablero.addClass("d-none");
                            pnlDatos.removeClass("d-none");
                            pnlDetalleEditarPrefactura.removeClass("d-none");
                            getDetalleByID(IdMovimiento);
                            //Control de estatus
//                            if (prefactura.Estatus === 'Concluido') {
//                                $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(prefactura.Estatus.toUpperCase());
//                                tBtnEditarConcluir.prop('checked', true);
//                                btnModificar.addClass('d-none');
//                                $('#frmNuevo').find('input, textarea, button, select').attr('readonly', true);
//                                $('#frmNuevo').find('select').addClass('disabledDetalle');
//                                $('#frmNuevo').find("#FechaCreacion").addClass('disabledDetalle');
//                                btnConfirmarEliminar.attr("disabled", true);
//                                pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', true);
//                                pnlDetalleEditarPrefactura.find("#Conceptos").addClass("disabledDetalle");
//                                btnExportarIntelisis.removeClass('d-none');
//                                btnCapturarPago.removeClass('d-none');
//                            } else if (prefactura.Estatus === 'Cancelado') {
//                                $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(prefactura.Estatus.toUpperCase());
//                                tBtnEditarConcluir.addClass('d-none');
//                                btnModificar.addClass('d-none');
//                                $('#frmNuevo').find('input, textarea, button, select').attr('disabled', true);
//                                btnConfirmarEliminar.attr("disabled", true);
//                                pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', true);
//                                pnlDetalleEditarPrefactura.find("#Conceptos").addClass("disabledDetalle");
//                            } else {
//                                $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(prefactura.Estatus.toUpperCase());
//                                tBtnEditarConcluir.prop('checked', false);
//                                btnModificar.removeClass('d-none');
//                                $('#frmNuevo').find('input, textarea, button, select').attr('disabled', false);
//                                $('#frmNuevo').find('select').removeClass('disabledDetalle');
//                                $('#frmNuevo').find("#FechaCreacion").removeClass('disabledDetalle');
//                                btnConfirmarEliminar.attr("disabled", false);
//                                pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', false);
//                                pnlDetalleEditarPrefactura.find("#Conceptos").removeClass("disabledDetalle");
//                            }
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
                pnlDatos.find("#ClienteNombre").val(cliente.Nombre);
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
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><input type="text" placeholder="Buscar por ' + title + '" class="form-control form-control-sm" style="width: 100%;"/></div>');
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
                                    frm.append('Prefactura_ID', pnlDatos.find("#ID").val());
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
                                mdlSeleccionarEntregasEditar.modal('d-none');
                                HoldOn.close();
                                console.log(x, y, z);
                            }).always(function () {
                                HoldOn.close();
                            });
                            if (!mdlSeleccionarEntregasEditar.find("#chkMultiple").is(":checked")) {
                                mdlSeleccionarEntregasEditar.modal('d-none');
                            }
                        }
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                });
            } else {
                mdlSeleccionarEntregasEditar.modal('d-none');
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
                thead.eq(0).addClass("d-none");
                tfoot.eq(0).addClass("d-none");
                thead.eq(1).addClass("d-none");
                tfoot.eq(1).addClass("d-none");
                thead.eq(7).addClass("d-none");
                tfoot.eq(7).addClass("d-none");
                $.each(pnlDetalleEditarPrefactura.find('#tblRegistrosDetalle tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("d-none");
                    td.eq(1).addClass("d-none");
                    td.eq(7).addClass("d-none");
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

</script>