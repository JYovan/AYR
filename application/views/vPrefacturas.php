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
            <div id="Registros" class="table-responsive">
                <table id="tblRegistros" class="table table-sm display " style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Proyecto</th>
                            <th>Referencia</th>
                            <th>Estatus</th>
                            <th>Importe</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot></tfoot>
                </table>
            </div>
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
<!--PANEL DATOS-->
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
                        <button type="button" class="btn  btn-warning btn-sm d-none" id="btnExportarIntelisis" data-toggle="tooltip" data-placement="bottom" title="Exportar a Intelisis" ><span class="fa fa-cloud-upload-alt "></span> </button>
                        <button type="button" class="btn  btn-warning btn-sm d-none" id="btnCapturarPago" data-toggle="tooltip" data-placement="bottom" title="Capturar Pago"><span class="fa fa-money-bill-alt "></span> </button>
                        <button type="button" class="btn btn-success btn-sm d-none" id="btnConcluir"><span class="fa fa-check "></span> CONCLUIR</button>
                        <button type="button" class="btn btn-info btn-sm d-none" id="btnInconcluir"><span class="fa fa-undo "></span> IN-CONCLUIR</button>
                        <button type="button" class="btn btn-danger btn-sm" id="btnEliminar"><span class="fa fa-trash "></span> ELIMINAR</button>
                        <button type="button" class="btn btn-info btn-sm" id="btnGuardar"><span class="fa fa-save "></span> GUARDAR</button>
                    </div>
                </div>
                <form id="frmNuevo">
                    <fieldset>
                        <hr>
                        <div id="CapturaDatos">
                            <div class="row">
                                <div class=" col-6 col-md-3">
                                    <div class="form-group label-static">
                                        <label for="ID" class="control-label">ID</label>
                                        <input type="text" id="ID" name="ID" class="form-control form-control-sm" readonly="" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="form-group label-static">
                                        <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                        <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control form-control-sm" placeholder="DD/MM/YYYY" data-provide="datepicker" data-date-format="dd/mm/yyyy">
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
                                        <select id="ClienteIntelisis" name="ClienteIntelisis" class="form-control form-control-sm required" required="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="form-group label-static">
                                        <label for="" class="control-label">Proyecto*</label>
                                        <select id="ProyectoIntelisis" name="ProyectoIntelisis" class="form-control form-control-sm required" required="">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 col-md-12">
                                    <div class="form-group label-static">
                                        <label for="Comentarios" class="control-label">(Opcional) Comentarios   *Texto que aparecera en el cuerpo de la factura*</label>
                                        <textarea class="col-md-12 form-control" id="Comentarios" name="Comentarios" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
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
                <div id="RegistrosDetalle" class="table-responsive d-none">
                    <table id="tblRegistrosDetalle" class="table table-sm" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>E_ID</th>
                                <th>Folio Cliente</th>
                                <th>Trabajo Requerido</th>
                                <th>Sucursal</th>
                                <th>Cliente</th>
                                <th>Importe</th>
                                <th>Eliminar</th>
                                <th>ImporteSF</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total: </th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
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
                        <div class="form-group">
                            <div class="custom-control custom-checkbox float-right">
                                <input type="checkbox" class="custom-control-input float-right" id="chkMultiple" >
                                <label class="custom-control-label" for="chkMultiple"> <h6>Seleccionar Varios</h6></label>
                            </div>
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
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    var btnCleanFilter = $("#btnCleanFilter");
    var btnConcluir = $("#btnConcluir");
    var btnInconcluir = $("#btnInconcluir");
    var btnEliminar = $("#btnEliminar");
    var btnModificar = $("#btnModificarPrefactura");
    var btnExportarIntelisis = $('#btnExportarIntelisis');
    var btnCapturarPago = $('#btnCapturarPago');
    var mdlCapturarInfoPago = $('#mdlCapturarInfoPago');
    var btnGuardarDatosPago = mdlCapturarInfoPago.find('#btnGuardarDatosPago');
    var pnlDetalleEditarPrefactura = $("#pnlDetalleEditarPrefactura");
    var btnNuevoRenglonPrefacturaEditar = pnlDetalleEditarPrefactura.find("#btnNuevoRenglonPrefacturaEditar");
    var mdlSeleccionarEntregasEditar = $("#mdlSeleccionarEntregasEditar");
    var nuevo = true;
    var IdMovimiento = 0;
    var ImporteTotalGlobal;
    var Estatus;
    var tblRegistrosX = $("#tblRegistros"), Registros;
    var tblRegistrosDetalleX = $("#tblRegistrosDetalle"), RegistrosDetalle;
    var tblRegistrosTrabajosX = $("#tblRegistrosTrabajos"), RegistrosTrabajos;
    $(document).ready(function () {
        btnCleanFilter.on("click", function () {
            Registros.state.clear();
            window.location.reload();
        });
        btnVerMisMovimientos.on("click", function () {
            verMovs = 'getMyRecords';
            getRecords();
        });
        btnVerTodos.on("click", function () {
            verMovs = 'getRecords';
            getRecords();
        });
        btnExportarIntelisis.on("click", function () {
            var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);
            frm.append('Importe', ImporteTotalGlobal);
            swal({
                title: "Confirmar",
                text: "Estás seguro?",
                icon: "warning",
                buttons: ["Cancelar", "Aceptar"]
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: master_url + 'onAgregarIntelisis',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'PREFACTURA EXPORTADA CORRECTAMENTE', 'success');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                }
            });

        });
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
            if (!nuevo) {
                getTrabajosEntregadosParaPrefactura();
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
            }
        });
        pnlDatos.find("#ClienteIntelisis").change(function () {
            getClienteNombrebyCliente(pnlDatos.find("#ClienteIntelisis").val(), $(this).val());
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
                            message: "POR FAVOR ESPERE..."
                        });
                        $.ajax({
                            url: master_url + 'onEliminar',
                            type: "POST",
                            data: {
                                ID: IdMovimiento
                            }
                        }).done(function (data, x, jq) {
                            menuTablero.removeClass("d-none");
                            pnlDatos.addClass("d-none");
                            pnlDetalleEditarPrefactura.addClass("d-none");
                            getRecords();
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
        btnNuevo.on('click', function () {
            pnlDatos.removeClass('d-none');
            menuTablero.addClass('d-none');
            pnlDatos.find("input").val("");
            pnlDatos.find("textarea").val("");
            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            pnlDatos.find('#FechaCreacion').val(getToday());
            btnGuardar.removeClass('d-none');
            btnEliminar.removeClass('d-none');
            btnConcluir.addClass('d-none');
            btnInconcluir.addClass('d-none');
            btnNuevoRenglonPrefacturaEditar.removeClass('d-none');
            btnCapturarPago.addClass('d-none');
            btnExportarIntelisis.addClass('d-none');
            enableFields();
            if ($.fn.DataTable.isDataTable('#tblRegistrosDetalle')) {
                RegistrosDetalle.destroy();
                pnlDetalleEditarPrefactura.find("#RegistrosDetalle").html("");
            }
            nuevo = true;
            $(':input:text:enabled:visible:first').focus();
        });
        btnCancelar.on("click", function () {
            menuTablero.removeClass("d-none");
            pnlDatos.addClass("d-none");
            pnlDetalleEditarPrefactura.addClass('d-none');
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
                        Registros.ajax.reload();
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO ACTUALIZADO', 'success');
                        //                    if (tBtnEditarConcluir.is(':checked')) {
//                        btnModificar.addClass('d-none');
//                        btnExportarIntelisis.removeClass('d-none');
//                        btnCapturarPago.removeClass('d-none');
//                        $('#frmNuevo').find('input, textarea, button, select').attr('readonly', true);
//                        $('#frmNuevo').find('select').addClass('disabledDetalle');
//                        $('#frmNuevo').find("#FechaCreacion").addClass('disabledDetalle');
//                        btnConfirmarEliminar.attr("disabled", true);
//                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text('Concluido'.toUpperCase());
//                        pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', true);
//                        pnlDetalleEditarPrefactura.find("#Conceptos").addClass("disabledDetalle");
//                    } else {
//                        btnExportarIntelisis.addClass('d-none');
//                        btnCapturarPago.addClass('d-none');
//                        $('#frmNuevo').find('#Referencia').attr('readonly', false);
//                        $('#frmNuevo').find('#Comentarios').attr('readonly', false);
//                        $('#frmNuevo').find('select').removeClass('disabledDetalle');
//                        $('#frmNuevo').find("#FechaCreacion").removeClass('disabledDetalle');
//                        btnConfirmarEliminar.attr("disabled", false);
//                        $(".spanEditarEstatus").removeClass('label-success').addClass('label-default').text('Borrador'.toUpperCase());
//                        pnlDetalleEditarPrefactura.find('input, textarea, button, select').attr('disabled', false);
//                        pnlDetalleEditarPrefactura.find("#Conceptos").removeClass("disabledDetalle");
//                    }
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    $.ajax({
                        url: master_url + 'onAgregar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        Registros.ajax.reload();
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO GUARDADO', 'success');
                        nuevo = false;
                        IdMovimiento = parseInt(data);
                        pnlDatos.find("#ID").val(IdMovimiento);
                        pnlDetalleEditarPrefactura.removeClass('d-none')
                        btnConcluir.removeClass('d-none');
                        getDetalleByID(IdMovimiento);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                }
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', '* DEBE DE COMPLETAR LOS CAMPOS REQUERIDOS *', 'danger');
            }
        });
        btnConcluir.on("click", function () {
            swal({
                title: "Confirmar",
                text: "Estas seguro?",
                icon: "info",
                buttons: ["Cancelar", "Aceptar"]
            }).then((willDelete) => {
                if (willDelete) {
                    HoldOn.open({
                        theme: "sk-bounce",
                        message: "POR FAVOR ESPERE..."
                    });
                    $.ajax({
                        url: master_url + 'onModificarEstatus',
                        type: "POST",
                        data: {
                            ID: IdMovimiento,
                            Estatus: 'Concluido'
                        }
                    }).done(function (data, x, jq) {
                        $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-success">CONCLUIDO</span>');
                        btnGuardar.addClass('d-none');
                        btnEliminar.addClass('d-none');
                        btnConcluir.addClass('d-none');
                        btnInconcluir.removeClass('d-none');
                        btnCapturarPago.removeClass('d-none');
                        btnExportarIntelisis.removeClass('d-none');
                        btnNuevoRenglonPrefacturaEditar.addClass('d-none');
                        disableFields();
                        Estatus = 'Concluido';
                        Registros.ajax.reload();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            });
        });
        btnInconcluir.on("click", function () {
            swal({
                title: "Confirmar",
                text: "Estas seguro?",
                icon: "info",
                buttons: ["Cancelar", "Aceptar"]
            }).then((willDelete) => {
                if (willDelete) {
                    HoldOn.open({
                        theme: "sk-bounce",
                        message: "POR FAVOR ESPERE..."
                    });
                    $.ajax({
                        url: master_url + 'onModificarEstatus',
                        type: "POST",
                        data: {
                            ID: IdMovimiento,
                            Estatus: 'Borrador'
                        }
                    }).done(function (data, x, jq) {
                        $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-secondary">BORRADOR</span>');
                        btnGuardar.removeClass('d-none');
                        btnEliminar.removeClass('d-none');
                        btnConcluir.removeClass('d-none');
                        btnInconcluir.addClass('d-none');
                        btnCapturarPago.addClass('d-none');
                        btnExportarIntelisis.addClass('d-none');
                        btnNuevoRenglonPrefacturaEditar.removeClass('d-none');
                        enableFields();
                        Estatus = 'Borrador';
                        Registros.ajax.reload();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            });
        });
        getClientes();
        getProyectos();
        getRecords();
        handleEnter();
    });
    function getClientes() {
        $.ajax({
            url: master_url + 'getClientesIntelisis',
            type: "POST", dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='ClienteIntelisis']")[0].selectize.addOption({text: v.Nombre, value: v.Cliente});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getProyectos() {
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
        });
    }
    function getRecords() {
        HoldOn.open({theme: 'sk-cube', message: 'CARGANDO...'});
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistros')) {
            tblRegistrosX.DataTable().destroy();
        }
        Registros = tblRegistrosX.DataTable({
            "dom": 'Bfrtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + verMovs,
                "dataType": "json",
                "dataSrc": ""
            },
            "columns": [
                {"data": "ID"},
                {"data": "Fecha"},
                {"data": "Cliente"},
                {"data": "ProyectoIntelisis"},
                {"data": "Referencia"},
                {"data": "Estatus"},
                {"data": "Importe"},
                {"data": "Usuario"}
            ],
            language: lang,
            "autoWidth": true,
            "bStateSave": true,
            "colReorder": true,
            "displayLength": 12,
            "bLengthChange": false,
            "deferRender": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ]
        });
        $('#tblRegistros_filter input[type=search]').focus();
        tblRegistrosX.find('tbody').on('click', 'tr', function () {
            tblRegistrosX.find("tbody tr").removeClass("success");
            $(this).addClass("success");
            nuevo = false;
            var dtm = Registros.row(this).data();
            temp = parseInt(dtm.ID);
            IdMovimiento = parseInt(dtm.ID);
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'getPrefacturaByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdMovimiento
                }
            }).done(function (data, x, jq) {
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
                Estatus = prefactura.Estatus;
                //Control de estatus
                if (prefactura.Estatus === 'Concluido') {
                    $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-success">CONCLUIDO</span>');
                    btnGuardar.addClass('d-none');
                    btnEliminar.addClass('d-none');
                    btnConcluir.addClass('d-none');
                    btnCapturarPago.removeClass('d-none');
                    btnExportarIntelisis.removeClass('d-none');
                    btnInconcluir.removeClass('d-none');
                    btnNuevoRenglonPrefacturaEditar.addClass('d-none');
                    disableFields();
                } else {
                    $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-secondary">BORRADOR</span>');
                    btnGuardar.removeClass('d-none');
                    btnEliminar.removeClass('d-none');
                    btnConcluir.removeClass('d-none');
                    btnInconcluir.addClass('d-none');
                    btnCapturarPago.addClass('d-none');
                    btnExportarIntelisis.addClass('d-none');
                    btnNuevoRenglonPrefacturaEditar.removeClass('d-none');
                    enableFields();
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        HoldOn.close();
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
                                        onNotifyOld('fa fa-check', 'Registro Agregado', 'success');
                                    }).fail(function (x, y, z) {
                                        console.log(x, y, z);
                                    }).always(function () {
                                        HoldOn.close();
                                    });
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
        pnlDetalleEditarPrefactura.find('#RegistrosDetalle').removeClass('d-none');
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistrosDetalle')) {
            tblRegistrosDetalleX.DataTable().destroy();
        }
        RegistrosDetalle = tblRegistrosDetalleX.DataTable({
            "dom": 'frtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getDetalleByID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: IDX
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "E_ID"},
                {"data": "FolioCliente"},
                {"data": "TrabajoRequerido"},
                {"data": "Sucursal"},
                {"data": "Cliente"},
                {"data": "Importe"},
                {"data": "Eliminar"},
                {"data": "ImporteSF"}
            ],
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api();
                ImporteTotalGlobal = api.column(8).data().reduce(function (a, b) {
                    return  parseFloat(a) + parseFloat(b);
                }, 0);
                $.ajax({
                    url: master_url + 'onModificarImportePorPrefactura',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento,
                        DATA: ImporteTotalGlobal
                    }
                }).done(function (data, x, jq) {
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                });
                $(api.column(6).footer()).html(api.column(8, {page: 'current'}).data().reduce(function (a, b) {
                    return '$' + $.number(ImporteTotalGlobal, 2, '.', ', ');
                }, 0));

            },
            language: lang,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 20,
            "bLengthChange": false,
            "deferRender": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "columnDefs": [
                {
                    "orderable": false,
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                },
                {
                    "orderable": false,
                    "targets": [1],
                    "visible": false,
                    "searchable": false
                },
                {
                    "orderable": false,
                    "targets": [8],
                    "visible": false,
                    "searchable": false
                }],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });
    }
    function onEliminarPrefacturaDetalle(evt, IDC) {
        if (IDC !== 0 && IDC !== undefined && IDC > 0) {
            if (Estatus !== 'Concluido') {
                swal({
                    title: "Confirmar",
                    text: "Deseas eliminar el registro?",
                    icon: "warning",
                    buttons: ["Cancelar", "Aceptar"]
                }).then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: master_url + 'onEliminarPrefacturaDetalle',
                            type: "POST",
                            data: {
                                ID: IDC
                            }
                        }).done(function (data, x, jq) {
                            RegistrosDetalle.ajax.reload();
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                            HoldOn.close();
                        });
                    }
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL MOVIMIENTO YA FUE CONCLUIDO', 'info');
            }

        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }
    function disableFields() {
        $('#CapturaDatos').find('input,textarea,select').attr('disabled', true);
        $('#CapturaDatos').find('select')[0].selectize.disable();
        $('#CapturaDatos').find('select')[1].selectize.disable();
    }
    function enableFields() {
        $('#CapturaDatos').find('input,textarea,select').attr('disabled', false);
        $('#CapturaDatos').find('select')[0].selectize.enable();
        $('#CapturaDatos').find('select')[1].selectize.enable();
    }
</script>