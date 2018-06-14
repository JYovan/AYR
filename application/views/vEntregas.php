<div class="card border-0" id="MenuTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5 float-left">
                <legend class="float-left">Entregas</legend>
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
                            <th>Entrega</th>
                            <th>Estatus</th>
                            <th>Importe</th>
                            <th>Cliente</th>
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
<!--Reportes-->
<div id="mdlReportesEditarEntrega" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <h5 class="modal-title">Imprimir Reportes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="reportes" class="dt-buttons">
                <button id="btnEntregaObra" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf fa-1x"></span><br>ENTREGA OBRA</button>
                <button id="btnTarifario" class="btn btn-primary btn-sm"><span class="fa fa-dollar-sign fa-1x"></span><br>TARIFARIO</button>
                <button id="btnFichero" class="btn btn-primary btn-sm"><span class="fa fa-dollar-sign fa-1x"></span><br>FICHERO</button>
                <button id="btnDesglose" class="btn btn-primary btn-sm"><span class="fa fa-file-excel fa-1x"></span><br>DESGLOSE DE REPORTES</button>
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
                    <div class="col-md-5 float-left">
                        <legend >Entrega</legend>
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
                        <button type="button" class="btn btn-raised btn-warning btn-sm" id="btnImprimirReportesEditarEntrega"><span class="fa fa-print "></span> IMPRIMIR</button>
                        <button type="button" class="btn btn-raised btn-success btn-sm d-none" id="btnConcluir"><span class="fa fa-check "></span> CONCLUIR</button>
                        <button type="button" class="btn btn-raised btn-info btn-sm d-none" id="btnInconcluir"><span class="fa fa-undo "></span> IN-CONCLUIR</button>
                        <button type="button" class="btn btn-raised btn-danger btn-sm" id="btnEliminar"><span class="fa fa-trash "></span> ELIMINAR</button>
                        <button type="button" class="btn btn-raised btn-info btn-sm" id="btnGuardar"><span class="fa fa-save "></span> GUARDAR</button>
                    </div>
                </div>
                <fieldset>
                    <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                        <li class="nav-item"><a href="#Datos" class="nav-link active show"  data-toggle="tab">Datos Entrega</a></li>
                        <li class="nav-item"><a href="#Datos2" class="nav-link" data-toggle="tab">Adjunto</a></li>
                    </ul>
                    <br>
                    <div id="CapturaDatos">
                        <div class="tab-content">
                            <!-- PANEL DE DATOS GENERALES-->
                            <div role="tabpanel" class="tab-pane fade active show" id="Datos">
                                <div class="row">
                                    <div class=" col-2 col-md-2 ">
                                        <div class="form-group label-static">
                                            <label for="ID" class="control-label">ID</label>
                                            <input type="text" id="ID" name="ID" class="form-control form-control-sm" readonly="" placeholder="" >
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-2">
                                        <div class="form-group label-static">
                                            <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                            <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control form-control-sm" data-provide="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-4">
                                        <div class="form-group label-static">
                                            <label for="NoEntrega" class="control-label">Entrega*</label>
                                            <input type="text" id="NoEntrega" name="NoEntrega"  class="form-control form-control-sm" placeholder="" required="">
                                        </div>
                                    </div>
                                    <div class="col-4 col-md-4">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Cliente*</label>
                                            <select id="Cliente_ID" name="Cliente_ID" class="form-control form-control-sm required" >
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Datos2">
                                <div class="row">
                                    <div class="col-12" align="center">
                                        <br>
                                        <h5>Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</h5>
                                    </div>
                                    <div class="col-12" align="center">
                                        <input type="file" id="Adjunto" name="Adjunto" class="d-none" accept="application/pdf, image/*">
                                        <button type="button" class="btn btn-info" id="btnArchivo" name="btnArchivo">
                                            <span class="fa fa-upload fa-1x"></span> SELECCIONA EL ARCHIVO
                                        </button>
                                        <br><hr>
                                        <div id="VistaPrevia" class="col-12" align="center"></div>
                                    </div>
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
<div class="card border-0 d-none" id="pnlDetalleEditarEntrega">
    <div class="card-body">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6" align="left">
                    <legend>Trabajos</legend>
                </div>
                <div class="col-md-6" align="right">
                    <button type="button" class="btn btn-primary btn-sm" id="btnNuevoRenglonEntregaEditar"><span class="fa fa-plus "></span></button>
                </div>
            </div>
            <div class="row">
                <div id="RegistrosDetalle" class="table-responsive d-none">
                    <table id="tblRegistrosDetalle" class="table table-sm" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Folio Interno</th>
                                <th>Folio Cliente</th>
                                <th>Trabajo Requerido</th>
                                <th>Sucursal</th>
                                <th>Region</th>
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
<div id="mdlSeleccionarTrabajosEditar" class="modal modal-fullscreen">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar Trabajos</h5>
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
                    <div id="RegistrosTrabajos" class="table-responsive">
                        <table id="tblRegistrosTrabajos" class="table table-sm " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Folio Interno</th>
                                    <th>Folio Cliente</th>
                                    <th>Fecha</th>
                                    <th>Sucursal</th>
                                    <th>Región</th>
                                    <th>Importe</th>
                                    <th>Especialidad</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                                <tr>
                                    <th>Folio Interno</th>
                                    <th>Folio Cliente</th>
                                    <th>Fecha</th>
                                    <th>Sucursal</th>
                                    <th>Región</th>
                                    <th>Importe</th>
                                    <th>Especialidad</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
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
    var pnlDatos = $("#pnlDatos");
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    var btnEliminar = $("#btnEliminar");
    var btnCleanFilter = $("#btnCleanFilter");
    var btnConcluir = $("#btnConcluir");
    var btnInconcluir = $("#btnInconcluir");
    var currentDate = new Date();
    var pnlDetalleEditarEntrega = $("#pnlDetalleEditarEntrega");
    var btnNuevoRenglonEntregaEditar = pnlDetalleEditarEntrega.find("#btnNuevoRenglonEntregaEditar");
    var mdlSeleccionarTrabajosEditar = $("#mdlSeleccionarTrabajosEditar");
    var btnImprimirReportesEditarEntrega = pnlDatos.find("#btnImprimirReportesEditarEntrega");
    var mdlReportesEditarEntrega = $("#mdlReportesEditarEntrega");
    var btnFichero = mdlReportesEditarEntrega.find("#btnFichero");
    var btnTarifario = mdlReportesEditarEntrega.find("#btnTarifario");
    var btnDesglose = mdlReportesEditarEntrega.find("#btnDesglose");
    var btnEntregaObra = mdlReportesEditarEntrega.find("#btnEntregaObra");
    var Archivo = pnlDatos.find("#Adjunto");
    var btnArchivo = pnlDatos.find("#btnArchivo");
    var VistaPrevia = pnlDatos.find("#VistaPrevia");
    var nuevo = true;
    var Estatus;
    var tblRegistrosX = $("#tblRegistros"), Registros;
    var tblRegistrosDetalleX = $("#tblRegistrosDetalle"), RegistrosDetalle;
    var tblRegistrosTrabajosX = $("#tblRegistrosTrabajos"), RegistrosTrabajos;
    $(document).ready(function () {
        tblRegistrosTrabajosX.find('tbody').on('click', 'tr', function () {
            var dtm = RegistrosTrabajos.row(this).data();
            temp = parseInt(dtm.FolioInterno);
            $.ajax({
                url: master_url + 'getTrabajoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                var dtm = data[0];
                $.ajax({
                    url: master_url + 'onAgregarDetalle',
                    type: "POST",
                    data: {
                        Entrega_ID: pnlDatos.find("#ID").val(),
                        Trabajo_ID: dtm.ID
                    }
                }).done(function (data, x, jq) {
                    RegistrosDetalle.ajax.reload();
                    RegistrosTrabajos.ajax.reload();
                    onNotifyOld('fa fa-check', 'Registro Agregado', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                });
                if (!mdlSeleccionarTrabajosEditar.find("#chkMultiple").is(":checked")) {
                    mdlSeleccionarTrabajosEditar.modal('hide');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });
        });
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
        btnImprimirReportesEditarEntrega.on("click", function () {
            mdlReportesEditarEntrega.modal('show');
        });
        btnEntregaObra.on("click", function () {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ESPERE...'
            });
            $.ajax({
                url: master_url + 'getConceptosXPOCXEntrega',
                type: "POST",
                data: {
                    ID: pnlDatos.find("#ID").val()
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
                    ID: pnlDatos.find("#ID").val()
                }
            }).done(function (data, x, jq) {
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
                    ID: pnlDatos.find("#ID").val()
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
                    ID: pnlDatos.find("#ID").val()
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
        btnNuevoRenglonEntregaEditar.on("click", function () {
            if (!nuevo) {
                var Cliente_ID = pnlDatos.find("#Cliente_ID").val();
                if (Cliente_ID !== undefined && Cliente_ID !== '' && Cliente_ID > 0) {
                    getTrabajosControlByClienteXClasificacion(Cliente_ID);
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN CLIENTE', 'danger');
                }
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
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
                            pnlDetalleEditarEntrega.addClass("d-none");
                            Registros.ajax.reload();
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
            pnlDetalleEditarEntrega.removeClass('d-none');
            pnlDetalleEditarEntrega.find('#RegistrosDetalle').addClass('d-none');
            menuTablero.addClass('d-none');
            pnlDatos.find("input").val("");
            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            pnlDatos.find(".nav-tabs a").removeClass("active show");
            $(pnlDatos.find(".nav-tabs a")[0]).addClass("active show");
            pnlDatos.find("#Datos").addClass("active show");
            pnlDatos.find("#Datos2").removeClass("active show");
            pnlDatos.find("#FechaCreacion").inputmask({alias: "date"});
            pnlDatos.find('#FechaCreacion').val(getToday());
            btnGuardar.removeClass('d-none');
            btnEliminar.removeClass('d-none');
            btnConcluir.addClass('d-none');
            btnInconcluir.addClass('d-none');
            btnNuevoRenglonEntregaEditar.removeClass('d-none');
            enableFields();
            if ($.fn.DataTable.isDataTable('#tblRegistrosDetalle')) {
                RegistrosDetalle.destroy();
                pnlDetalleEditarEntrega.find("#RegistrosDetalle").html("");
            }

            nuevo = true;
            $(':input:text:enabled:visible:first').focus();
        });
        btnCancelar.on("click", function () {
            menuTablero.removeClass("d-none");
            pnlDatos.addClass("d-none");
            pnlDetalleEditarEntrega.addClass('d-none');
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
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    frm.append('Importe', 0);
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
                        btnNuevoRenglonEntregaEditar.addClass('d-none');
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
                        btnNuevoRenglonEntregaEditar.removeClass('d-none');
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
        btnArchivo.on("click", function () {
            $('#Adjunto').attr("type", "file");
            $('#Adjunto').val('');
            Archivo.change(function () {
                HoldOn.open({theme: "sk-bounce", message: "POR FAVOR ESPERE..."});
                var imageType = /image.*/;
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var preview = '<button type="button" class="btn btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><br><img src="' + reader.result + '" class="img-responsive" width="400px"><div class="caption"><p>' + Archivo[0].files[0].name + '</p></div>';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(Archivo[0].files[0]);
                } else {
                    if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<div><button type="button" class="btn btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><br> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>');
                        };
                        readerpdf.readAsDataURL(Archivo[0].files[0]);
                    } else {
                        VistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                }
                HoldOn.close();
            });
            Archivo.trigger('click');
        });
        getClientes();
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
                "url": master_url + verMovs,
                "dataType": "json",
                "dataSrc": ""
            },
            "columns": [
                {"data": "ID"},
                {"data": "Entrega"},
                {"data": "Estatus"},
                {"data": "Importe"},
                {"data": "Cliente"},
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
                pnlDatos.find("input").val("");
                pnlDatos.find(".nav-tabs li").removeClass("active show");
                $(pnlDatos.find(".nav-tabs li")[0]).addClass("active show");
                pnlDatos.find("#Datos").addClass("active show");
                pnlDatos.find("#Datos2").removeClass("active show");
                var entrega = data[0];
                $.each(data[0], function (k, v) {
                    if (v !== null && v !== '' && v !== 'null') {
                        if (pnlDatos.find("[name='" + k + "']").is('select')) {
                            pnlDatos.find("[name='" + k + "']")[0].selectize.setValue(v);
                        } else {
                            if (k !== 'Adjunto') {
                                pnlDatos.find("[name='" + k + "']").val(v);
                            }
                        }
                    }
                });
                if (entrega.Adjunto !== null && entrega.Adjunto !== undefined && entrega.Adjunto !== '') {
                    var ext = getExt(entrega.Adjunto);
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        pnlDatos.find("#VistaPrevia").html('<div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + entrega.Adjunto + '" class ="img-responsive" width="600px" />');
                    }
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        pnlDatos.find("#VistaPrevia").html('<div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + entrega.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    }
                    if (ext !== "gif" && ext !== "jpg" && ext !== "jpeg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                        pnlDatos.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                    }
                } else {
                    pnlDatos.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                }
                menuTablero.addClass("d-none");
                pnlDatos.removeClass("d-none");
                pnlDetalleEditarEntrega.removeClass("d-none");
                getDetalleByID(IdMovimiento);
                //Control de estatus
                Estatus = entrega.Estatus;
                if (entrega.Estatus === 'Concluido') {
                    $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-success">CONCLUIDO</span>');
                    btnGuardar.addClass('d-none');
                    btnEliminar.addClass('d-none');
                    btnConcluir.addClass('d-none');
                    btnInconcluir.removeClass('d-none');
                    btnNuevoRenglonEntregaEditar.addClass('d-none');
                    disableFields();
                } else {
                    $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-secondary">BORRADOR</span>');
                    btnGuardar.removeClass('d-none');
                    btnEliminar.removeClass('d-none');
                    btnConcluir.removeClass('d-none');
                    btnInconcluir.addClass('d-none');
                    btnNuevoRenglonEntregaEditar.removeClass('d-none');
                    enableFields();
                }
            }
            ).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        HoldOn.close();
    }
    function disableFields() {
        $('#CapturaDatos').find('input,textarea,select').attr('disabled', true);
        $('#CapturaDatos').find('select')[0].selectize.disable();
    }
    function enableFields() {
        $('#CapturaDatos').find('input,textarea,select').attr('disabled', false);
        $('#CapturaDatos').find('select')[0].selectize.enable();
    }
    function getClientes() {
        $.ajax({
            url: master_url + 'getClientes',
            type: "POST", dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Cliente_ID']")[0].selectize.addOption({text: v.Cliente, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getTrabajosControlByClienteXClasificacion(Cliente_ID) {
        HoldOn.open({
            theme: 'sk-cube',
            message: 'CARGANDO...'
        });
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistrosTrabajos')) {
            tblRegistrosTrabajosX.DataTable().destroy();
        }
        RegistrosTrabajos = tblRegistrosTrabajosX.DataTable({
            "dom": 'frtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getTrabajosControlEntregasByCliente',
                type: "POST",
                "dataSrc": "",
                "data": {
                    Cliente_ID: Cliente_ID,
                    ID_Entrega: IdMovimiento
                }
            },
            "columns": [
                {"data": "FolioInterno"},
                {"data": "FolioCliente"},
                {"data": "Fecha"},
                {"data": "Sucursal"},
                {"data": "Region"},
                {"data": "Importe"},
                {"data": "Especialidad"}
            ],
            language: lang,
            "autoWidth": true,
            "bStateSave": true,
            "colReorder": true,
            "displayLength": 10,
            "bLengthChange": false,
            "deferRender": true,
            "scrollCollapse": false,
            keys: true,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
                onSeleccionarTrabajo(json);
            }
        });
    }
    function onSeleccionarTrabajo(json) {
        if (parseInt(json.length) > 0) {
            mdlSeleccionarTrabajosEditar.modal('show');
            $('#tblRegistrosTrabajos_filter input[type=search]').focus();

            $('#tblRegistrosTrabajos tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<input type="text" placeholder="Buscar por ' + title + '" class="form-control form-control-sm" />');
            });
            RegistrosTrabajos.columns().every(function () {
                var that = this;
                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN TRABAJOS FINALIZADOS PARA ESTE CLIENTE', 'danger');
        }
    }
    function getDetalleByID(IDX) {
        pnlDetalleEditarEntrega.find('#RegistrosDetalle').removeClass('d-none');
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistrosDetalle')) {
            tblRegistrosDetalleX.DataTable().destroy();
        }
        RegistrosDetalle = tblRegistrosDetalleX.DataTable({
            "dom": 'frtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getEntregaDetalleByID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: IDX
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "FolioInterno"},
                {"data": "FolioCliente"},
                {"data": "TrabajoRequerido"},
                {"data": "Sucursal"},
                {"data": "Region"},
                {"data": "Importe"},
                {"data": "Eliminar"},
                {"data": "ImporteSF"}
            ],
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api();
                var Importe = api.column(8).data().reduce(function (a, b) {
                    return  parseFloat(a) + parseFloat(b);
                }, 0);

                /*Modificamos el importe*/
                $.ajax({
                    url: master_url + 'onModificarImportePorEntrega',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento,
                        DATA: Importe
                    }
                }).done(function (data, x, jq) {
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                });
                $(api.column(6).footer()).html(api.column(8, {page: 'current'}).data().reduce(function (a, b) {
                    return '$' + $.number(Importe, 2, '.', ', ');
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
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [8],
                    "visible": false,
                    "searchable": false
                }],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });
    }
    function onEliminarDetalleEntrega(IDC) {
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
                            url: master_url + 'onEliminarTrabajoDetalle',
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
    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");
        Archivo.attr("type", "text");
        Archivo.val('N');
    }
</script>