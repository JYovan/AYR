<div class="card border-0" id="MenuTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-3 float-left">
                <legend class="float-left">Plantillas</legend>
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
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<!--PANEL DATOS-->
<div  class="container-fluid">
    <div class="card border-0  d-none" id="pnlDatos">
        <div class="row">
            <div class="card-body text-dark">
                <form id="frmNuevo">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 float-left">
                            <legend >Plantilla</legend>
                        </div>
                        <div class="col-12 col-sm-6 col-md-8" align="right">
                            <button type="button" class="btn btn-primary btn-sm" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" >
                                <span class="fa fa-arrow-left" ></span>
                            </button>
                            <button type="button" class="btn btn-raised btn-danger btn-sm" id="btnEliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><span class="fa fa-trash fa-1x"></span> </button>
                            <button type="button" class="btn btn-raised btn-info btn-sm" id="btnGuardar" data-toggle="tooltip" data-placement="bottom" title="Guardar"><span class="fa fa-save "></span> </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-none">
                            <input type="text" class="" id="ID" name="ID">
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="Nombre" class="control-label">Nombre*</label>
                                <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre"  required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                <input type="text" id="Fecha" name="Fecha" class="form-control form-control-sm " placeholder="DD/MM/YYYY" data-provide="datepicker" data-date-format="dd/mm/yyyy" required="">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Preciario*</label>
                                <select id="Preciario" name="Preciario" class="form-control form-control-sm required" required="">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Estatus*</label>
                                <select id="Estatus" name="Estatus" class="form-control form-control-sm required" required="">
                                    <option value=""></option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--PANEL DETALLE-->
<div class="card border-0 d-none" id="pnlDetalleTrabajo">
    <div class="card-body">
        <div class="col-md-12">
            <div class="row">
                <div class="col-6 col-md-6" align="left">
                    <legend>Conceptos</legend>
                </div>
                <div class="col-6 col-md-6" align="right">
                    <button type="button" class="btn btn-primary btn-sm" id="btnNuevoConcepto"><span class="fa fa-plus "></span></button>
                </div>
            </div>
            <div id="RegistrosDetalle" class="row d-none">
                <table id="tblRegistrosDetalle" class="table table-sm display" style="width:100% " >
                    <thead>
                        <tr >
                            <th>ID</th>
                            <th>Clave</th>
                            <th>Int/Ext</th>
                            <th>Descripción</th>
                            <th>Unidad</th>
                            <th>Precio</th>
                            <th>Moneda</th>
                            <th>Eliminar</th>
                            <th>PCID</th>
                            <th>Categoria</th>
                        </tr>
                    </thead>
                    <tbody style="overflow-y: auto;"></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlSeleccionarConceptos" class="modal modal-fullscreen">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar Conceptos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12" align="right">
                        <div class="custom-control custom-checkbox float-right">
                            <input type="checkbox" class="custom-control-input float-right" id="chkMultiple" >
                            <label class="custom-control-label" for="chkMultiple"> <h6>Seleccionar Varios</h6></label>
                        </div>
                    </div>
                </div>
                <br>
                <div id="RegistrosConceptosPreciario">
                    <table id="tblRegistrosConceptosPreciario" class="table table-sm " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Clave</th>
                                <th>Descripción</th>
                                <th>Unidad</th>
                                <th>Costo</th>
                                <th>Moneda</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Plantillas/';
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
    var btnNuevoConcepto = pnlDetalleTrabajo.find("#btnNuevoConcepto");
    var mdlSeleccionarConceptos = $("#mdlSeleccionarConceptos");
    var Conceptos = pnlDetalleTrabajo.find("#Conceptos");
    var nuevo = false;
    var tblRegistros = $("#tblRegistros"), Registros;
    var tblRegistrosDetalle = $("#tblRegistrosDetalle"), RegistrosDetalle;
    var tblRegistrosConceptosPreciario = $("#tblRegistrosConceptosPreciario"), RegistrosConceptosPreciario;

    $(document).ready(function () {
        mobilecheck();
        getRecords();
        getPreciarios();
        tblRegistrosDetalle.on('draw.dt', function () {
            $.each(tblRegistrosDetalle.find('tbody tr'), function () {
                //EDITAR CLAVE
                var event;
                if (isMobile) {
                    $(this).find("td:eq(0)").touch();
                    event = 'doubleTap';
                } else {
                    event = 'dblclick';
                }
                $(this).find("td:eq(0)").on(event, function () {
                    var input = '<input id="dbEditor" type="text" class="form-control form-control-sm">';
                    var exist = $(this).find("#dbEditor").val();
                    if (exist === undefined) {
                        var celda = $(this);
                        var padre = celda.parent();
                        var vActual = celda.text();
                        celda.html(input);
                        celda.find('#dbEditor').val(vActual);
                        celda.find("#dbEditor").focus();
                        celda.find("#dbEditor").focusout(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html('<span class="badge badge-info">' + v + '</span>');
                            RegistrosDetalle.cell(padre, 1).data('<span class="badge badge-info">' + v + '</span>').draw();
                        });
                        celda.find("#dbEditor").change(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html('<span class="badge badge-info">' + v + '</span>');
                            RegistrosDetalle.cell(padre, 1).data('<span class="badge badge-info">' + v + '</span>').draw();
                            var row = RegistrosDetalle.row(padre).data();
                            var params = {
                                ID: row.ID,
                                CELDA: 'CLAVE',
                                VALOR: v
                            };
                            if (v !== '') {
                                onEditarPlantillaDetalle(params);
                            }
                        });
                    }
                });
                //EDITAR INTEXT
                $(this).find("td:eq(1)").touch();
                $(this).find("td:eq(1)").on(event, function () {
                    var input = '<select id="dbEditor" name="dbEditor" class="form-control form-control-sm"><option></option><option value="INTERIOR">INTERIOR</option><option value="EXTERIOR">EXTERIOR</option></select>';
                    var exist = $(this).find("#dbEditor").val();
                    if (exist === undefined) {
                        var celda = $(this);
                        var vActual = celda.text();
                        celda.html(input);
                        celda.find('#dbEditor').val(vActual).focus();
                        var padre = celda.parent();
                        celda.find("#dbEditor").focusout(function () {
                            var v = $(this).val();
                            celda.html(v);
                            RegistrosDetalle.cell(padre, 2).data(v).draw();
                        });
                        celda.find("#dbEditor").change(function () {
                            var v = $(this).val();
                            celda.html(v);
                            RegistrosDetalle.cell(padre, 2).data(v).draw();
                            var row = RegistrosDetalle.row(padre).data();
                            var params = {
                                ID: row.ID,
                                CELDA: 'INTEXT',
                                VALOR: v
                            };
                            onEditarPlantillaDetalle(params);
                        });
                    }
                });
                //EDITAR CONCEPTO
                $(this).find("td:eq(2)").touch();
                $(this).find("td:eq(2)").on(event, function () {
                    var input = '<textarea id="dbEditor" name="dbEditor" class="form-control" rows="4" cols="20">' + $(this).text() + '</textarea>';
                    var exist = $(this).find("#dbEditor").val();
                    if (exist === undefined) {
                        var celda = $(this);
                        celda.html(input);
                        celda.find('#dbEditor').val(celda.text()).focus();
                        var padre = celda.parent();
                        celda.find("#dbEditor").change(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            RegistrosDetalle.cell(padre, 3).data(v).draw();
                            var row = RegistrosDetalle.row(padre).data();
                            var params = {
                                ID: row.ID,
                                CELDA: 'DESCRIPCION',
                                VALOR: v
                            };
                            onEditarPlantillaDetalle(params);
                        });

                        celda.find("#dbEditor").focusout(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            RegistrosDetalle.cell(padre, 3).data(v).draw();
                        });
                    }
                });

                //EDITAR UNIDAD
                $(this).find("td:eq(3)").touch();
                $(this).find("td:eq(3)").on(event, function () {
                    var input = '<input id="dbEditor" type="text" class="form-control form-control-sm">';
                    var exist = $(this).find("#dbEditor").val();
                    if (exist === undefined) {
                        var celda = $(this);
                        var vActual = celda.text();
                        celda.html(input);
                        celda.find('#dbEditor').val(vActual);
                        var padre = celda.parent();
                        celda.find("#dbEditor").focus();
                        celda.find("#dbEditor").focusout(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            RegistrosDetalle.cell(padre, 4).data(v).draw();
                        });
                        celda.find("#dbEditor").change(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            RegistrosDetalle.cell(padre, 4).data(v).draw();
                            var row = RegistrosDetalle.row(padre).data();
                            onEditarPlantillaDetalle({ID: row.ID, CELDA: 'UNIDAD', VALOR: v});
                        });
                    }
                });
                //EDITAR PRECIO
                $(this).find("td:eq(4)").touch();
                $(this).find("td:eq(4)").on(event, function () {
                    var input = '<input id="dbEditor" type="text" class="form-control form-control-sm">';
                    var exist = $(this).find("#dbEditor").val();
                    if (exist === undefined) {
                        var celda = $(this);
                        var vActual = celda.text();
                        celda.html(input);
                        celda.find('#dbEditor').val(vActual);
                        var padre = celda.parent();
                        celda.find("#dbEditor").focus();
                        celda.find("#dbEditor").focusout(function () {
                            var v = getNumberFloat($(this).val());
                            var precio_format = '$' + $.number(v, 5, '.', ',');
                            celda.html(precio_format);
                            RegistrosDetalle.cell(padre, 5).data(precio_format).draw();
                            var row = RegistrosDetalle.row(padre).data();
                            onEditarPlantillaDetalle({ID: row.ID, CELDA: 'PRECIO', VALOR: v});
                        });
                    }
                });
                //EDITAR MONEDA
                $(this).find("td:eq(5)").touch();
                $(this).find("td:eq(5)").on(event, function () {
                    var dbEditor = tblRegistrosDetalle.find('tbody #dbEditor');
                    var exist = tblRegistrosDetalle.find('tbody #dbEditor').val();
                    console.log('EXIST,', exist);
                    if (exist !== undefined) {
                        var celda = dbEditor.parent();
                        celda.html((exist === 'USD') ? '<span class="badge badge-danger">' + exist + '</span>' : exist);
                    }
                    var input = '<select id="dbEditor" name="dbEditor" class="form-control form-control-sm"><option></option><option value="USD">USD</option><option value="MXN">MXN</option></select>';
                    var exist = $(this).find("#dbEditor").val();
                    if (exist === undefined) {
                        var celda = $(this);
                        var vActual = celda.text();
                        celda.html(input);
                        celda.find('#dbEditor').val(vActual);
                        var padre = celda.parent();
                        celda.find("#dbEditor").change(function () {
                            var v = $(this).val();
                            var cell = (v === 'USD') ? '<span class="badge badge-danger">' + v + '</span>' : v;
                            celda.html(cell);
                            RegistrosDetalle.cell(padre, 6).data(cell).draw();
                            var row = RegistrosDetalle.row(padre).data();
                            var params = {
                                ID: row.ID,
                                CELDA: 'MONEDA',
                                VALOR: v
                            };
                            onEditarPlantillaDetalle(params);
                        });
                    }
                });

            });
        });
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
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');
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
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO GUARDADO', 'success');
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
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UNA NUEVA PLANTILLA', 'success');
                        nuevo = false;
                        IdMovimiento = parseInt(data);
                        pnlDatos.find("#ID").val(IdMovimiento);
                        getPlantillaDetalleByID(IdMovimiento);
                        btnEliminar.removeClass('d-none');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
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
            btnNuevoConcepto.removeClass('d-none');
            if ($.fn.DataTable.isDataTable('#tblRegistrosDetalle')) {
                RegistrosDetalle.clear().draw();
            }
            pnlDatos.find("input").val('');
            pnlDatos.find("textarea").val("");
            pnlDatos.find('#FechaCreacion').val(getToday());
            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            pnlDatos.find('#Nombre').focus();
        });
        /*EVENTOS DETALLE PRESUPUESTO*/
        btnNuevoConcepto.on("click", function () {
            if (!nuevo) {
                var Preciario = pnlDatos.find("#Preciario").val();
                if (Preciario !== undefined && Preciario !== '' && Preciario > 0) {
                    getConceptosPreciarioByPreciario(Preciario);
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PRECIARIO', 'danger');
                }
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
            }
        });
        tblRegistrosConceptosPreciario.find('tbody').on('click', 'tr', function () {
            HoldOn.open({theme: 'sk-cube', message: 'CARGANDO...'});
            var dtm = RegistrosConceptosPreciario.row(this).data();
            RegistrosConceptosPreciario.row($(this)).remove().draw();
            $.ajax({
                url: master_url + 'getConceptoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: dtm.ID
                }
            }).done(function (data, x, jq) {
                if (data[0] !== undefined && data.length > 0) {
                    var dtm = data[0];
                    var frm = new FormData();
                    frm.append('Plantilla_ID', IdMovimiento);
                    frm.append('PreciarioConcepto_ID', dtm.ID);
                    frm.append('Unidad', dtm.Unidad);
                    frm.append('Precio', dtm.Costo);
                    frm.append('Moneda', dtm.Moneda);
                    frm.append('Concepto', dtm.Descripcion);
                    frm.append('Clave', dtm.Clave);
                    $.ajax({
                        url: master_url + 'onAgregarDetalleEditar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        RegistrosDetalle.ajax.reload();
                        RegistrosConceptosPreciario.ajax.reload();
                        HoldOn.close();
                        onNotifyOld('fa fa-check', 'Concepto Agregado', 'success');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                        HoldOn.close();
                    });
                } else {
                    onNotify('fa fa-exclamation fa-lg', 'EL CONCEPTO NO SE AGREGO, INTENTE DE NUEVO', 'danger');
                }
                if (!mdlSeleccionarConceptos.find("#chkMultiple").is(":checked")) {
                    mdlSeleccionarConceptos.modal('hide');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });
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
                {"data": "Nombre"}, //1
                {"data": "Fecha"}, //2
                {"data": "Usuario"} //3
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
            getPlantillaByID(IdMovimiento);
        });
        $('#tblRegistros_filter input[type=search]').focus();
    }
    function getPlantillaByID(ID) {
        IdMovimiento = ID;
        if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'getPlantillaByID',
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
                getPlantillaDetalleByID(IdMovimiento);
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
    function getPlantillaDetalleByID(IDX) {
        pnlDetalleTrabajo.find('#RegistrosDetalle').removeClass('d-none');
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistrosDetalle')) {
            tblRegistrosDetalle.DataTable().destroy();
        }
        RegistrosDetalle = tblRegistrosDetalle.DataTable({
            "dom": 'frtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getPlantillaDetalleByID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: IDX
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Clave"},
                {"data": "IntExt"},
                {"data": "Descripcion"},
                {"data": "Unidad"},
                {"data": "Precio"},
                {"data": "Moneda"},
                {"data": "Eliminar"},
                {"data": "PCID"},
                {"data": "Categoria"}
            ],
            rowGroup: {
                dataSrc: "Categoria"
            },
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
                [9, 'asc'], [0, 'desc']/*ID*/
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
                },
                {
                    "targets": [9],
                    "visible": false,
                    "searchable": false
                }
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });

    }
    function getConceptosPreciarioByPreciario(Preciario) {
        mdlSeleccionarConceptos.modal('show');
        HoldOn.open({theme: 'sk-cube', message: 'CARGANDO...'});
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistrosConceptosPreciario')) {
            tblRegistrosConceptosPreciario.DataTable().destroy();
        }
        RegistrosConceptosPreciario = tblRegistrosConceptosPreciario.DataTable({
            "dom": 'lfrtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getConceptosXPreciarioID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: Preciario,
                    Plantilla_ID: IdMovimiento
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Clave"},
                {"data": "Descripcion"},
                {"data": "Unidad"},
                {"data": "Costo"},
                {"data": "Moneda"}
            ],
            language: lang,
            "autoWidth": true,
            "bStateSave": true,
            "colReorder": true,
            "bLengthChange": true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
            "scrollX": true,
            "deferRender": true,
            "scrollCollapse": false,
            keys: false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                $('#tblRegistrosConceptosPreciario_filter input[type=search]').focus();
                HoldOn.close();
            }
        });
    }
    function onEditarPlantillaDetalle(params) {
        $.post(master_url + 'onEditarPlantillaDetalle', params).done(function (data, x, jq) {
        }).fail(function (x, y, z) {
            console.log('ERROR', x, y, z);
        }).always(function () {
        });
    }
    function onEliminarConceptoXDetalle(IDX) {
        swal({
            title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: master_url + 'onEliminarConceptoXDetalle',
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
        al('INFO', 'EL MOVIMIENTO YA FUE CONCLUIDO', 'info');
    }
    function getPreciarios() {
        $.ajax({
            url: master_url + 'getPreciarios',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Preciario']")[0].selectize.addOption({text: v.Preciario, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
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
</style>
