<div class="card border-0 m-3" id="MenuTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-3 float-left">
                <legend class="float-left">Requisiciones de Material</legend>
            </div>
            <div class="col-12 col-sm-9" align="right">
                <button type="button" class="btn btn-primary btn-sm" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
            </div>
        </div>
        <div class="row mt-4" id="Registros">
            <table id="tblRegistros" class="table table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sitio</th>
                        <th>Fecha</th>
                        <th>Usuario</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<!--PANEL DATOS-->
<div class="card border-0 m-3 d-none" id="pnlDatos">
    <div class="card-body text-dark">
        <form id="frmNuevo">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 float-left">
                    <legend >Requisición</legend>
                </div>
                <div class="col-12 col-sm-6 col-md-8" align="right">
                    <button type="button" class="btn btn-primary" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" >
                        <span class="fa fa-arrow-left" ></span>
                    </button>
                    <button type="button" class="btn btn-raised btn-danger " id="btnEliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><span class="fa fa-trash fa-1x"></span> </button>
                    <button type="button" class="btn btn-raised btn-info" id="btnGuardar" data-toggle="tooltip" data-placement="bottom" title="Guardar"><span class="fa fa-save "></span> </button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="d-none">
                    <input type="text" class="" id="ID" name="ID">
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label for="Sitio" class="control-label">Sitio*</label>
                    <input type="text" class="form-control form-control-sm" id="Sitio" name="Sitio"  required="">

                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label for="FechaCreacion" class="control-label">Fecha*</label>
                    <input type="text" id="Fecha" name="Fecha" class="form-control form-control-sm " placeholder="DD/MM/YYYY" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">

                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <label for="Observaciones" class="control-label">Observaciones</label>
                    <input type="text" class="form-control form-control-sm" id="Observaciones" name="Observaciones"  required="">

                </div>
            </div>
            <div class="row pt-2">
                <div class="col-12 col-md-12">
                    <h6 class="text-danger">Los campos con * son obligatorios</h6>
                </div>
            </div>
        </form>
    </div>
</div>
<!--PANEL DETALLE-->
<div class="card border-0 m-3 d-none" id="pnlDetalleTrabajo">
    <div class="card-body">
        <div class="row">
            <div class="col-6 col-md-6" align="left">
                <legend>Materiales</legend>
            </div>
            <div class="col-6 col-md-6" align="right">
                <button type="button" class="btn btn-primary" id="btnAgregarDetalle"><span class="fa fa-plus "></span></button>
            </div>
        </div>
        <div id="RegistrosDetalle" class="row d-none">
            <table id="tblRegistrosDetalle" class="table table-sm display" style="width:100% " >
                <thead>
                    <tr >
                        <th>ID</th>
                        <th>Material</th>
                        <th>Cantidad</th>
                        <th>Unidad</th>
                        <th>Fotos</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody style="overflow-y: auto;"></tbody>
            </table>
        </div>
    </div>
</div>
<!--MODAL DETALLE - NUEVO -->
<div id="mdlAgregarDetalle" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmAgregarDetalle">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="control-label">Cantidad</label>
                        <input type="text" id="Cantidad" name="Cantidad" maxlength="10" class="form-control form-control-sm numbersOnly" required="">
                    </div>
                    <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                        <label for="" class="control-label">Unidad</label>
                        <input type="text" id="Unidad" name="Unidad" maxlength="10" class="form-control form-control-sm " required="">
                    </div>
                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                        <label for="" class="control-label">Material</label>
                        <input type="text" id="Material" name="Material" class="form-control form-control-sm" required="">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnFinalizarCaptura">GUARDAR</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL DETALLE - EDICION -->
<div id="mdlEditarDetalle" class="modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmEditarDetalle">
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="control-label">Cantidad</label>
                        <input type="text" id="Cantidad" name="Cantidad" maxlength="10" class="form-control form-control-sm numbersOnly" required="">
                    </div>
                    <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                        <label for="" class="control-label">Unidad</label>
                        <input type="text" id="Unidad" name="Unidad" maxlength="10" class="form-control form-control-sm " required="">
                    </div>
                    <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                        <label for="" class="control-label">Material</label>
                        <input type="text" id="Material" name="Material" class="form-control form-control-sm" required="">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnFinalizarEdicion">GUARDAR</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL AJUNTOS PRESUPUESTO-->
<div id="Adjuntos" class="modal  modal-fullscreen animated slideInDown">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Fotos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row d-none">
                    <div class="col">
                        <input type="text" readonly="" id="IdRequisicion" name="IdRequisicion"  class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" readonly="" id="IdRequisicionDetalle" name="IdRequisicionDetalle"  class="form-control">
                    </div>
                </div>
                <div class="accordion" id="AccordionAdjuntos">
                    <div class="card  border-0">
                        <div class="" id="cardFotos">
                            <h5 class="mb-0">
                                <a id="load_fotos" class="btn btn-info btn-block text-light collapsed mb-3" data-toggle="collapse" data-target="#Fotos" aria-expanded="true" aria-controls="Fotos">
                                    <span class="fa fa-camera fa-lg"></span> Fotos
                                </a>
                            </h5>
                        </div>
                        <div id="Fotos" class="collapse" aria-labelledby="cardFotos" data-parent="#AccordionAdjuntos">
                            <fieldset>
                                <input type="file" accept='image/x-png,image/gif,image/jpeg' id="fFotos" name="fFotos[]" multiple="" class="d-none">
                                <div class="col-12" id="inputFotos" align="center"  onclick="setFotosEditar(this)">
                                    <div class="file_drag_area">
                                        <h5> Arrastre aquí los archivos a subir ó clic para seleccionarlos</h5>
                                        <i class="fas fa-cloud-upload-alt fa-lg mt-1"></i>
                                    </div>
                                </div>
                                <div class="col-12 mt-4" style="height: 650px; overflow-y: auto;" id="vFotos">

                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/RequisicionesTec/';
    var TipoAcceso = "<?php echo $this->session->userdata('TipoAcceso'); ?>";
    var IdMovimiento = 0;
    var pnlDatos = $("#pnlDatos");
    var btnNuevo = $("#btnNuevo");
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = pnlDatos.find("#btnGuardar");
    var btnEliminar = pnlDatos.find("#btnEliminar");
    var menuTablero = $('#MenuTablero');
    /*Detalle PRESUPUESTO*/
    var pnlDetalleTrabajo = $("#pnlDetalleTrabajo");
    var btnAgregarDetalle = pnlDetalleTrabajo.find("#btnAgregarDetalle");
    var mdlAgregarDetalle = $("#mdlAgregarDetalle");
    var btnFinalizarCaptura = mdlAgregarDetalle.find("#btnFinalizarCaptura");
    var mdlEditarDetalle = $("#mdlEditarDetalle");
    var btnFinalizarEdicion = mdlEditarDetalle.find("#btnFinalizarEdicion");
    var nuevo = false;
    var tblRegistros = $("#tblRegistros"), Registros;
    var tblRegistrosDetalle = $("#tblRegistrosDetalle"), RegistrosDetalle;

    /*fotos*/
    var mdlAdjuntos = $("#Adjuntos");
    var EditarFotosPorConcepto = mdlAdjuntos.find("#fFotos");

    $(document).ready(function () {
        mobilecheck();
        getRecords();
        btnEliminar.on("click", function () {
            if (!nuevo) {
                swal({
                    title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
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
                            Registros.ajax.reload();
                            menuTablero.removeClass("d-none");
                            pnlDatos.addClass("d-none");
                            pnlDetalleTrabajo.addClass("d-none");
                            swal('LISTO', 'REGISTRO ELIMINADO', 'success');
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                            HoldOn.close();
                        });
                    }
                });
            }
        });
        btnGuardar.on("click", function () {
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
                        swal('LISTO', 'CAMBIOS GUARDADOS', 'success');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
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
                        swal('LISTO', 'SE HA REGISTRADO UNA NUEVA REQUISICIÓN', 'success');
                        nuevo = false;
                        IdMovimiento = parseInt(data);
                        pnlDatos.find("#ID").val(IdMovimiento);
                        getDetalleByID(IdMovimiento);
                        btnEliminar.removeClass('d-none');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    });
                }
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', '* DEBE DE COMPLETAR LOS CAMPOS REQUERIDOS *', 'danger');
            }
        });
        btnCancelar.on("click", function () {
            menuTablero.removeClass("d-none");
            pnlDatos.addClass("d-none");
            pnlDetalleTrabajo.addClass("d-none");
            Registros.ajax.reload();
        });
        btnNuevo.on("click", function () {
            nuevo = true;
            menuTablero.addClass("d-none");
            pnlDatos.removeClass("d-none");
            pnlDetalleTrabajo.removeClass("d-none");
            btnGuardar.removeClass('d-none');
            btnEliminar.addClass('d-none');
            btnAgregarDetalle.removeClass('d-none');
            if ($.fn.DataTable.isDataTable('#tblRegistrosDetalle')) {
                RegistrosDetalle.clear().draw();
            }
            pnlDatos.find("input").val('');
            pnlDatos.find('#Fecha').val(getToday());
            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            pnlDatos.find('#Sitio').focus();
        });
        /*EVENTOS DETALLE */
        mdlAgregarDetalle.on('shown.bs.modal', function () {
            mdlAgregarDetalle.find("#Cantidad").focus();
        });
        mdlEditarDetalle.on('shown.bs.modal', function () {
            mdlEditarDetalle.find("#Cantidad").focus().select();
        });
        btnAgregarDetalle.on("click", function () {
            if (!nuevo) {
                mdlAgregarDetalle.find("input").val("");
                mdlAgregarDetalle.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
            }
        });
        btnFinalizarCaptura.on("click", function () {
            isValid('mdlAgregarDetalle');
            if (valido) {
                var frm = new FormData(mdlAgregarDetalle.find("#frmAgregarDetalle")[0]);
                frm.append('Requisicion', IdMovimiento);
                $.ajax({
                    url: master_url + 'onAgregarDetalle',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    RegistrosDetalle.ajax.reload();
                    mdlAgregarDetalle.modal('hide');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                });
            }


        });
        btnFinalizarEdicion.on("click", function () {
            isValid('mdlEditarDetalle');
            if (valido) {
                var frm = new FormData(mdlEditarDetalle.find("#frmEditarDetalle")[0]);
                frm.append('ID', Detalle_ID);
                $.ajax({
                    url: master_url + 'onModificarDetalle',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    RegistrosDetalle.ajax.reload();
                    mdlEditarDetalle.modal('hide');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                });
            }
        });

        /*FOTOS*/
        mdlAdjuntos.find("#load_fotos").click(function () {
            onReloadFotosXConcepto(mdlAdjuntos.find("#IdRequisicionDetalle").val(), mdlAdjuntos.find("#IdRequisicion").val());
        });
        mdlAdjuntos.find("#fFotos").change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(mdlAdjuntos.find("#fFotos")[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdRequisicion', mdlAdjuntos.find("#IdRequisicion").val());
                frm.append('IdRequisicionDetalle', mdlAdjuntos.find("#IdRequisicionDetalle").val());
                frm.append('Observaciones', file.name);
                frm.append('FOTO', file);
                $.ajax({
                    //Cambiar
                    url: master_url + 'onAgregarFotosEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosXConcepto(mdlAdjuntos.find("#IdRequisicionDetalle").val(), mdlAdjuntos.find("#IdRequisicion").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                    HoldOn.close();
                });
            });
        });
        mdlAdjuntos.find('#Fotos').find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdRequisicion', mdlAdjuntos.find("#IdRequisicion").val());
            frm.append('IdRequisicionDetalle', mdlAdjuntos.find("#IdRequisicionDetalle").val());
            var files_list = e.originalEvent.dataTransfer.files;
            for (var i = 0; i < files_list.length; i++)
            {
                frm.append('FOTO', files_list[i]);
                frm.append('Observaciones', files_list[i].name);
                $.ajax({
                    //Cambiar
                    url: master_url + 'onAgregarFotosEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosXConcepto(mdlAdjuntos.find("#IdRequisicionDetalle").val(), mdlAdjuntos.find("#IdRequisicion").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                    HoldOn.close();
                });
            }
        });
    });
    /*Funciones de tablas*/
    function getRecords() {
        temp = 0;
        HoldOn.open({theme: 'sk-cube', message: 'CARGANDO...'});
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistros')) {
            tblRegistros.DataTable().destroy();
        }
        Registros = tblRegistros.DataTable({
            "dom": 'frt',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getRecords',
                "dataSrc": ""
            },
            "columns": [
                {"data": "ID"}, //0
                {"data": "Sitio"}, //1
                {"data": "Fecha"}, //2
                {"data": "Usuario"}, //3
                {"data": "Estatus"} //4
            ],
            language: lang,
            select: true,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 30,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "createdRow": function (row, data, index) {
                $.each($(row).find("td"), function (k, v) {
                    var c = $(v);
                    var index = parseInt(k);
                    switch (index) {
                        case 0:
                            /*COSTO MO*/
                            c.addClass('text-strong');
                            break;
                        case 1:
                            /*CONSUMO*/
                            c.addClass('text-info text-strong');
                            break;
                        case 2:
                            /*CONSUMO*/
                            c.addClass('text-success text-strong');
                            break;
                        case 4:
                            /*ELIMINAR*/
                            c.addClass('text-danger text-strong');
                            break;

                    }
                });
            },
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });
        tblRegistros.find('tbody').on('click', 'tr', function () {
            menuTablero.addClass("d-none");
            tblRegistros.find("tbody tr").removeClass("success");
            $(this).addClass("success");
            var dtm = Registros.row(this).data();
            IdMovimiento = parseInt(dtm.ID);
            nuevo = false;
            getRequisicionByID(IdMovimiento);
        });
        $('#tblRegistros_filter input[type=search]').focus();
    }
    function getRequisicionByID(ID) {
        IdMovimiento = ID;
        if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'getRequisicionByID',
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
                        } else {
                            pnlDatos.find("[name='" + k + "']").val(v);
                        }
                    }
                });
                menuTablero.addClass("d-none");
                getDetalleByID(IdMovimiento);
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
    function getDetalleByID(IDX) {
        pnlDetalleTrabajo.find('#RegistrosDetalle').removeClass('d-none');
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistrosDetalle')) {
            tblRegistrosDetalle.DataTable().destroy();
        }
        RegistrosDetalle = tblRegistrosDetalle.DataTable({
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
                {"data": "Material"},
                {"data": "Cantidad"},
                {"data": "Unidad"},
                {"data": "Fotos"},
                {"data": "Editar"},
                {"data": "Eliminar"}
            ],
            keys: true,
            language: lang,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 15,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']
            ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }
            ],
            "createdRow": function (row, data, index) {
                $.each($(row).find("td"), function (k, v) {
                    var c = $(v);
                    var index = parseInt(k);
                    switch (index) {
                        case 0:
                            /*COSTO MO*/
                            c.addClass('text-strong');
                            break;
                        case 1:
                            /*CONSUMO*/
                            c.addClass('text-success text-strong');
                            break;
                        case 2:
                            /*CONSUMO*/
                            c.addClass('text-strong text-warning');
                            break;
                        case 4:
                            /*CONSUMO*/
                            c.addClass('text-info text-strong');
                            break;
                        case 5:
                            /*ELIMINAR*/
                            c.addClass('text-danger text-strong');
                            break;

                    }
                });
            },
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });

    }
    /*ADJUNTOS PRESUPUESTO*/
    function getAdjuntosByID(IDX, IDXX) {
        onReloadFotosXConcepto(IDX, IDXX);
        mdlAdjuntos.find("#IdRequisicion").val(IDXX);
        mdlAdjuntos.find("#IdRequisicionDetalle").val(IDX);
        //Cambiar
        $.getJSON(master_url + 'getTotalFotos', {ID: IDXX, IDD: IDX}).done(function (data, x, jq) {
            var x = data[0];
            mdlAdjuntos.find("#load_fotos").html('<span class="fa fa-camera fa-lg"></span> Fotos (' + x.FOTOS + ')');
        }).fail(function (x, y, z) {
            console.log('ERROR AL OBTENER LOS CONTADORES', x.responseText);
        }).always(function () {
            mdlAdjuntos.modal('show');
        });
    }
    function setFotosEditar(evt) {
        mdlAdjuntos.find("#fFotos").trigger('click');
    }
    function onReloadFotosXConcepto(IDX, IDT) {
        $.post(master_url + 'getFotosDetalleByID', {ID: IDX, IDT: IDT}).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlAdjuntos.find("#vFotos").html("<div class=\"row\"></div>");
                var picthumbnail = "";
                var nimg = 0;
                $.each(JSON.parse(data), function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-12 col-sm-6 col-md-3 col-lg-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoXConcepto(' + v.ID + ',' + v.IdRequisicionDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
                    mdlAdjuntos.find("#vFotos").find("div.row").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlAdjuntos.find("#vFotos").html("");
            }
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
            var total_fotos = mdlAdjuntos.find("#vFotos").find("div.thumbnail").length;
            mdlAdjuntos.find("#load_fotos").html('<span class="fa fa-camera fa-lg"></span> Fotos (' + total_fotos + ')');
        });
    }
    function onEliminarFotoXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
        $.post(master_url + 'onEliminarFotoXConcepto', {ID: IDX, IDT: IdMovimiento}).done(function (data, x, jq) {
            onReloadFotosXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });

    }
    function onEliminarDetalle(BTN, IDX) {
        swal({
            title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: master_url + 'onEliminarDetalle',
                    type: "POST",
                    data: {
                        ID: IDX,
                        IDT: IdMovimiento
                    }
                }).done(function (data, x, jq) {
                    RegistrosDetalle.ajax.reload();
                    onNotifyOld('fa fa-check', 'REGISTRO ELIMINADO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
    }
    var Detalle_ID;
    function onModificarDetalle(BTN, IDX) {
        Detalle_ID = IDX;
        $.ajax({
            url: master_url + 'getDatosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            mdlEditarDetalle.find("input").val("");
            mdlEditarDetalle.find("#Material").val(data[0].Material);
            mdlEditarDetalle.find("#Cantidad").val(data[0].Cantidad);
            mdlEditarDetalle.find("#Unidad").val(data[0].Unidad);
            mdlEditarDetalle.modal('show');
        });
    }
</script>
<style>
    td span.badge{
        font-size: 14px !important;
    }
    table tbody tr td p.CustomDetalleDescripcion{
        max-height: 100px !important;
        overflow: auto !important;
    }
    table tbody tr td > input[type="text"]{
        width: 100% !important;
    }

    .text-strong {
        font-weight: bolder;
    }
    .hasItems{
        color: #18BC9C !important;
    }
    /*Drag and drop*/
    .file_drag_area
    {
        background: #f8f8f8;
        border: 5px dashed #ddd;
        width: 100%;
        /*height: 150px;*/
        text-align: center;
        box-sizing: border-box;
        padding: 18px;
        cursor: pointer;
        position: relative;
        font-size: 16px;
    }
    .file_drag_area:hover
    {
        border-color:#002c4c !important;
    }
    .file_drag_over{
        color:#B0B0B0;
        border-color:#002c4c;
    }
</style>