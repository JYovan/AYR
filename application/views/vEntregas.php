<div class="card " id="MenuTablero">
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
                            <th>Movimiento</th>
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
                        <button type="button" class="btn btn-raised btn-success btn-sm" id="btnConcluir"><span class="fa fa-check "></span> CONCLUIR</button>
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
                    <div class="tab-content">
                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade active show" id="Datos">
                            <div class="row">
                                <div class=" col-2 col-md-2">
                                    <div class="form-group label-static">
                                        <label for="ID" class="control-label">ID</label>
                                        <input type="text" id="ID" name="ID" class="form-control form-control-sm" readonly="" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-2 col-md-2">
                                    <div class="form-group label-static">
                                        <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                        <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control form-control-sm" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div>
                                </div>
                                <div class="col-2 col-md-2">
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
                                    <button type="button" class="btn btn-raised btn-info" id="btnArchivo" name="btnArchivo">
                                        <span class="fa fa-upload fa-1x"></span> SELECCIONA EL ARCHIVO
                                    </button>
                                    <br><hr>
                                    <div id="VistaPrevia" class="col-12" align="center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12"><br>
                            <h6>Los campos con * son obligatorios</h6>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--PANEL EDITAR DETALLE-->
<div class="card d-none" id="pnlDetalleEditarEntrega">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4" align="left">
                <legend>Trabajos</legend>
            </div>
            <div class="col-md-4" align="center" id="ImporteTotal">
                <h4 class="text-success">$ 0.0</h4>
            </div>
            <div class="col-md-4" align="right">
                <button type="button" class="btn btn-primary btn-sm" id="btnNuevoRenglonEntregaEditar"><span class="fa fa-plus "></span></button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 table-responsive " id="Conceptos" >
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
            <div class="modal-footer">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
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
    //nuevo
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    var btnEliminar = $("#btnEliminar");
    var btnCleanFilter = $("#btnCleanFilter");
    var btnConcluir = $("#btnConcluir");
    var currentDate = new Date();
    /*Detalle Editar*/
    var pnlDetalleEditarEntrega = $("#pnlDetalleEditarEntrega");
    var btnNuevoRenglonEntregaEditar = pnlDetalleEditarEntrega.find("#btnNuevoRenglonEntregaEditar");
    var tblRegistrosXDetalleXEntrega = pnlDetalleEditarEntrega.find("#tblRegistrosXDetalleXEntrega");
    var mdlSeleccionarTrabajosEditar = $("#mdlSeleccionarTrabajosEditar");
    var TrabajosXClienteIDXClasificacion = mdlSeleccionarTrabajosEditar.find("#TrabajosXClienteIDXClasificacion");
    var btnImprimirReportesEditarEntrega = pnlDatos.find("#btnImprimirReportesEditarEntrega");
    var mdlReportesEditarEntrega = $("#mdlReportesEditarEntrega");
    var btnFichero = mdlReportesEditarEntrega.find("#btnFichero");
    var btnTarifario = mdlReportesEditarEntrega.find("#btnTarifario");
    var btnDesglose = mdlReportesEditarEntrega.find("#btnDesglose");
    var btnEntregaObra = mdlReportesEditarEntrega.find("#btnEntregaObra");
    var ModificarArchivo = pnlDatos.find("#Adjunto");
    var btnModificarArchivo = pnlDatos.find("#btnArchivo");
    var ModificarVistaPrevia = pnlDatos.find("#VistaPrevia");

    var nuevo = true;
    var tblRegistrosX = $("#tblRegistros"), Registros;

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

        //Boton de neuvo en detalle editar
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
            if (temp !== 0 && temp !== undefined && temp > 0) {
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
                                ID: temp
                            }
                        }).done(function (data, x, jq) {
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');
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
            $.each(tblRegistrosXDetalleXEntrega.find("tbody tr"), function () {
                $(this).remove();
            });
            pnlDatos.removeClass('d-none');
            pnlDetalleEditarEntrega.removeClass('d-none');
            menuTablero.addClass('d-none');
            pnlDatos.find("input").val("");
            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            pnlDatos.find(".nav-tabs a").removeClass("active show");
            $(pnlDatos.find(".nav-tabs a")[0]).addClass("active show");
            pnlDatos.find("#Datos").addClass("active show");
            pnlDatos.find("#Datos2").removeClass("active show");
            pnlDatos.find("#FechaCreacion").datepicker("setDate", currentDate);
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
                    frm.append('Importe', ImporteTotalGlobal);
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
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                }
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', '* DEBE DE COMPLETAR LOS CAMPOS REQUERIDOS *', 'danger');
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
                {"data": "Movimiento"},
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
            keys: true,
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
                        pnlDatos.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + entrega.Adjunto + '" class ="img-responsive" width="600px" />');
                    }
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        pnlDatos.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + entrega.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
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
                //getDetalleByID(entrega.ID);
                //Control de estatus
//                if (entrega.Estatus === 'Concluido') {
//                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(entrega.Estatus.toUpperCase());
//                    tBtnEditarConcluir.prop('checked', true);
//                    btnModificar.addClass('d-none');
//                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
//                    btnConfirmarEliminar.attr("disabled", true);
//                    pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', true);
//                    pnlDetalleEditarEntrega.find("#Conceptos").addClass("disabledDetalle");
//                } else if (entrega.Estatus === 'Cancelado') {
//                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(entrega.Estatus.toUpperCase());
//                    tBtnEditarConcluir.addClass('d-none');
//                    btnModificar.addClass('d-none');
//                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
//                    btnConfirmarEliminar.attr("disabled", true);
//                    pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', true);
//                    pnlDetalleEditarEntrega.find("#Conceptos").addClass("disabledDetalle");
//                } else {
//                    $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(entrega.Estatus.toUpperCase());
//                    tBtnEditarConcluir.prop('checked', false);
//                    btnModificar.removeClass('d-none');
//                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
//                    btnConfirmarEliminar.attr("disabled", false);
//                    pnlDetalleEditarEntrega.find('input, textarea, button, select').attr('disabled', false);
//                    pnlDetalleEditarEntrega.find("#Conceptos").removeClass("disabledDetalle");
//                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        HoldOn.close();
    }
    /*Traer catálogos para el encabezado*/
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
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control form-control-sm" style="width: 100%;"/></div></div>');
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
                                    frm.append('Entrega_ID', pnlDatos.find("#ID").val());
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
                                        getDetalleByID(pnlDatos.find("#ID").val());
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
                thead.eq(0).addClass("d-none");
                tfoot.eq(0).addClass("d-none");
                //thead.eq(1).addClass("d-none");
                //tfoot.eq(1).addClass("d-none");
                thead.eq(8).addClass("d-none");
                tfoot.eq(8).addClass("d-none");
                $.each(pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("d-none");
                    //td.eq(1).addClass("d-none");
                    td.eq(8).addClass("d-none");
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
        if (IDC !== 0 && IDC !== undefined && IDC > 0) {
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
                        getDetalleByID(IdMovimiento);
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
    }
    var ImporteTotalGlobal = 0;
</script>