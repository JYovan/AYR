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
        <div class="row" id="Registros">
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
                <div class="col-12 col-sm-6 col-md-6">
                    <label for="Observaciones" class="control-label">Observaciones</label>
                    <input type="text" class="form-control form-control-sm" id="Observaciones" name="Observaciones"  required="">

                </div>
                <div class="col-12 col-md-6 col-sm-6">
                    <label for="" >Estatus*</label>
                    <select id="Estatus" name="Estatus" class="form-control form-control-sm" >
                        <option value=""></option>
                        <option value="Pendiente">PENDIENTE DE SURTIR</option>
                        <option value="Surtida">SURTIDA</option>
                    </select>
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
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Requisiciones/';
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
            "dom": 'Bfrtip',
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
            "displayLength": 10,
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
                            c.addClass('text-info text-strong');
                            break;
                        case 3:
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
    function onEliminarDetalle(BTN, IDX) {
        swal({
            title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: master_url + 'onEliminarDetalle',
                    type: "POST",
                    data: {
                        ID: IDX
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
</style>
