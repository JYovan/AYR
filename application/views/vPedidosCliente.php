<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading"><div class="cursor-hand" >Pedidos del Cliente</div></div>
        <fieldset><div class="col-md-12 dt-buttons" align="right">
                <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
            </div><div class="col-md-12" id="tblRegistros"></div>
        </fieldset>
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
        <div class="modal-body">Selecciona el reporte que deseas imprimir
            <div class="col-md-12"><br></div>
            <div id="reportesLevantamiento" class="dt-buttons">
                <button onclick="onReporteLevantamientoAntes();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS ANTES</button>
                <button onclick="onReporteLevantamientoProceso();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS PROCESO</button>
                <button onclick="onReporteLevantamientoDespues();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS DESPUÉS</button>
                <button onclick="onReporteLevantamientoCompleto()" class="btn btn-default"><span class="fa fa-image fa-1x"></span><br>GENERAL</button>
                <button onclick="onReportePresupuesto()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>PRESUPUESTO A&R</button>
            </div>
        </div>
    </div>
</div>
<!--PANEL NUEVO-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlNuevoTrabajo">
        <div class="Custompanel-heading dt-EncabezadoControles" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>Nuevo Pedido</div>
                <div class="input-group pull-right" align="center">
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="label label-default spanEstatus">SIN GUARDAR</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class=""> </span>
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" disabled="" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <span class="togglebutton customLabelToggle" >
                        <label><input type="checkbox" id="Concluir" disabled="" name="Concluir" >Enviar</label>
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
                    <!-- PANEL DE DATOS GENERALES-->
                    <hr>
                    <div class=" col-3 col-md-3">
                        <div class="form-group label-static">
                        <label for="Movimiento" class="control-label">Movimiento</label>
                        <input type="text" id="Movimiento" name="Movimiento" class="form-control" readonly="" value="SOLICITUD" placeholder="" >
                        </div>
                    </div>
                    <div class=" col-3 col-md-3">
                        <div class="form-group label-static">
                        <label for="ID" class="control-label">Mov ID*</label>
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
                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control hide" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required="">
                    

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
                    <div class="col-md-6">
                        <div class="form-group label-static">
                        <label for="Solicitante" class="control-label">Solicitante*</label>
                        <input type="text" id="Solicitante" name="Solicitante" class="form-control"  placeholder="Nombre de la persona quien solicita el trabajo" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                        <label for="" class="control-label">Clasificación</label>
                        <select id="Clasificacion" name="Clasificacion" class="form-control" >
                            <option value=""></option>
                            <option value="CERRAJERÍA">CERRAJERÍA</option>
                            <option value="MOBILIARIO">MOBILIARIO</option>
                            <option value="INMUEBLE">INMUEBLE</option>
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
    <div class="panel panel-default hide animated slideInRight" id="pnlEditarTrabajo">
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
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="label label-default spanEditarEstatus">SIN GUARDAR</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class=""> </span>
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" id="btnConfirmarEliminar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <span class="togglebutton customLabelToggle" >
                        <label><input type="checkbox" id="Concluir" name="Concluir" >Enviar</label>
                    </span>
                    <span>&nbsp;&nbsp;</span>
                    <button type="button" class="btn btn-raised btn-primary" id="btnModificarTrabajo" >GUARDAR</button>
                    <span>&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmEditar">
                <fieldset>
                    <!-- PANEL DE DATOS GENERALES-->
                    <hr>
                     <div class=" col-3 col-md-3">
                        <div class="form-group label-static">
                        <label for="Movimiento" class="control-label">Movimiento</label>
                        <input type="text" id="Movimiento" name="Movimiento" class="form-control" readonly="" value="SOLICITUD" placeholder="" >
                        </div>
                    </div>
                    <div class=" col-3 col-md-3">
                        <div class="form-group label-static">
                        <label for="ID" class="control-label">Mov ID</label>
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
                    <!-- Inserta la fecha del movimiento-->
                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control hide" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                    

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
                    <div class="col-md-6">
                        <div class="form-group label-static">
                        <label for="Solicitante" class="control-label">Solicitante*</label>
                        <input type="text" id="Solicitante" name="Solicitante" class="form-control"  placeholder="Nombre de la persona quien solicita el trabajo" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                        <label for="" class="control-label">Clasificación</label>
                        <select id="Clasificacion" name="Clasificacion" class="form-control" >
                            <option value=""></option>
                            <option value="CERRAJERÍA">CERRAJERÍA</option>
                            <option value="MOBILIARIO">MOBILIARIO</option>
                            <option value="INMUEBLE">INMUEBLE</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-6 col-md-12">
                        <div class="form-group label-static">
                        <label for="TrabajoSolicitado" class="control-label">Trabajo Solicitado*</label>
                        <textarea class="col-md-12 form-control" placeholder="Introduzca aquí el trabajo que solicita" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="5" required="" ></textarea>
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
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlPedidoCliente/';
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
    /*Toggle Button Editar Atendido Impacto*/
    var tbtnEditarAtendido = pnlEditarTrabajo.find("#EditarAtendido");
    /*Toggle Button  Atendido Impacto*/
    var tbtnNuevoAtendido = pnlNuevoTrabajo.find("#NuevoAtendido");
    /*Detalle*/
    var tBtnConcluir = pnlNuevoTrabajo.find("#Concluir");
    var tBtnEditarConcluir = pnlEditarTrabajo.find("#Concluir");
    /*Reportes*/
    var btnImprimirReportesEditarTrabajo = $("#btnImprimirReportesEditarTrabajo");
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");

    var currentDate = new Date();
    $(document).ready(function () {
        /*Modal de reportes*/
        btnImprimirReportesEditarTrabajo.on("click", function () {
            mdlReportesEditarTrabajo.modal('show');
        });
        btnNuevo.on("click", function () {
            menuTablero.addClass("hide");
            pnlNuevoTrabajo.removeClass("hide");
            pnlNuevoTrabajo.find("input").val("");
            pnlNuevoTrabajo.find("textarea").val("");
            pnlNuevoTrabajo.find("select").val(null).trigger("change");
            pnlNuevoTrabajo.find("select").select2("val", "");
            pnlNuevoTrabajo.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlNuevoTrabajo.find("#FechaOrigen").datepicker("setDate", currentDate);
            pnlNuevoTrabajo.find("#HoraOrigen").timepicker("setTime", currentDate);
            pnlNuevoTrabajo.find("#Movimiento").val("SOLICITUD");
            getCliente();
            getSucursalesbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");

        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevoTrabajo.addClass("hide");
            pnlDetalleNuevoTrabajo.addClass("hide");
            pnlDetalleNuevoTrabajoAbierto.addClass("hide");
            getRecords();
        });
        btnCancelarModificar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarTrabajo.addClass("hide");
            getRecords();
        });
        tBtnEditarConcluir.on("click", function () {
            if (!$(this).is(':checked')) {
                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                btnConfirmarEliminar.attr("disabled", false);
                btnModificar.removeClass('hide');
            }
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

                frm.append('Estatus', 'SinEnviar');
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
                    Movimiento: 'required',
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
                /*  Para los checkbox*/
                if (tBtnEditarConcluir.is(':checked')) {
                    frm.append('Estatus', 'Borrador');
                } else {
                    frm.append('Estatus', 'SinEnviar');
                }
                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO GUARDADO', 'success');
                    if (tBtnEditarConcluir.is(':checked')) {
                        btnModificar.addClass('hide');
                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                        btnConfirmarEliminar.attr("disabled", true);
                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-info').text('Enviado'.toUpperCase());
                        btnImprimirReportesEditarTrabajo.attr("disabled", true);
                    } else {
                        btnImprimirReportesEditarTrabajo.attr("disabled", true);
                        btnConfirmarEliminar.attr("disabled", false);
                        $(".spanEditarEstatus").removeClass('label-danger label-info').addClass('label-default').text('Sin Enviar'.toUpperCase());

                    }
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
                mdlConfirmar.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'SOLICITUD ELIMINADA', 'danger');
                menuTablero.addClass("animated slideInLeft").removeClass("hide");
                pnlEditarTrabajo.addClass("hide");
                getRecords();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        getRecords();
    });
    IdMovimiento = 0;
    function getRecords() {
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            if (data.length > 0) {

                $("#tblRegistros").html(getTable('tblTrabajos', data));
                $('#tblTrabajos tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
                });
                var tblSelected = $('#tblTrabajos').DataTable(tableOptions);
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
                            pnlEditarTrabajo.find("input").val("");
                            var trabajo = data[0];
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
                            pnlEditarTrabajo.removeClass('hide');
                            pnlEditarTrabajo.find("#Movimiento").val(trabajo.Movimiento);
                            pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                            pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                            getCliente();
                            pnlEditarTrabajo.find("#Solicitante").val(trabajo.Solicitante);
                            pnlEditarTrabajo.find("#TrabajoSolicitado").val(trabajo.TrabajoSolicitado);
                            pnlEditarTrabajo.find("#FechaOrigen").val(trabajo.FechaOrigen);
                            pnlEditarTrabajo.find("#Clasificacion").select2("val",trabajo.Clasificacion);
                            pnlEditarTrabajo.find("#HoraOrigen").val(trabajo.HoraOrigen);
                            pnlEditarTrabajo.find("#Usuario_ID").val(trabajo.Usuario_ID);
                            menuTablero.addClass("hide");
                            /*Control de estatus*/
                            if (trabajo.Estatus === 'Borrador') {
                                $(".spanEditarEstatus").removeClass('label-default').addClass('label-info').text('Enviado'.toUpperCase());
                                tBtnEditarConcluir.prop('checked', true);
                                tBtnEditarConcluir.prop('disabled', false);
                                btnModificar.addClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                btnImprimirReportesEditarTrabajo.attr("disabled", true);
                            } else if (trabajo.Estatus === 'SinEnviar') {
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                                $(".spanEditarEstatus").removeClass('label-danger label-info').addClass('label-default').text('Sin Enviar'.toUpperCase());
                                tBtnEditarConcluir.prop('checked', false);
                                btnModificar.removeClass('hide');
                                tBtnEditarConcluir.prop('disabled', false);
                                btnConfirmarEliminar.attr("disabled", false);
                                btnImprimirReportesEditarTrabajo.attr("disabled", true);
                            } else if (trabajo.Estatus === 'Concluido') {
                                tBtnEditarConcluir.prop('checked', true);
                                tBtnEditarConcluir.prop('disabled', true);
                                btnModificar.addClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                $(".spanEditarEstatus").removeClass('label-default label-info').addClass('label-success').text('Finalizado'.toUpperCase());
                                btnImprimirReportesEditarTrabajo.attr("disabled", false);
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
    /*Para despues de insertar pro primera vez se cargue el panel de editar*/
    function despuesDeGuardar(IDTrabajo) {
        IdMovimiento = IDTrabajo;
        pnlNuevoTrabajo.addClass("hide");
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
                pnlEditarTrabajo.find("input").val("");
                var trabajo = data[0];
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
                pnlEditarTrabajo.removeClass('hide');
                pnlEditarTrabajo.find("#Movimiento").val(trabajo.Movimiento);
                pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                getCliente();
                pnlEditarTrabajo.find("#Solicitante").val(trabajo.Solicitante);
                pnlEditarTrabajo.find("#TrabajoSolicitado").val(trabajo.TrabajoSolicitado);
                pnlEditarTrabajo.find("#FechaOrigen").val(trabajo.FechaOrigen);
                pnlEditarTrabajo.find("#HoraOrigen").val(trabajo.HoraOrigen);
                pnlEditarTrabajo.find("#Usuario_ID").val(trabajo.Usuario_ID);
                pnlEditarTrabajo.find("#Clasificacion").select2("val",trabajo.Clasificacion);
                menuTablero.addClass("hide");
                /*Control de estatus*/
                if (trabajo.Estatus === 'Borrador') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-info').text('Enviado'.toUpperCase());
                    tBtnEditarConcluir.prop('checked', true);
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    btnConfirmarEliminar.attr("disabled", true);
                    btnImprimirReportesEditarTrabajo.attr("disabled", true);
                } else if (trabajo.Estatus === 'SinEnviar') {
                    $(".spanEditarEstatus").removeClass('label-info').addClass('label-default').text('Sin Enviar'.toUpperCase());
                    tBtnEditarConcluir.prop('checked', false);
                    btnModificar.removeClass('hide');
                    btnConfirmarEliminar.attr("disabled", false);
                    btnImprimirReportesEditarTrabajo.attr("disabled", true);
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
    /*-------------------Reportes----------------------------*/
    var master_urlReportes = base_url + 'index.php/CtrlTrabajos/';
    function onReportePresupuesto() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'index.php/ctrlTrabajos/onReportePresupuesto',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    var Cliente = "<?php echo $this->session->userdata('Cliente'); ?>";
    function onReporteLevantamientoAntes() {
        var mov = pnlEditarTrabajo.find("#Movimiento").val();
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoAntesPrinciple';
        } else {
            reporte = 'onReporteLevantamientoAntes';
        }
        $.ajax({
            url: master_urlReportes + reporte,
            type: "POST",
            data: {ID: IdMovimiento, Movimiento: mov}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS ANTES PRINCIPLE, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteLevantamientoProceso() {
        var mov = pnlEditarTrabajo.find("#Movimiento").val();
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoProcesoPrinciple';
        } else {
            reporte = 'onReporteLevantamientoProceso';
        }
        $.ajax({
            url: master_urlReportes + reporte,
            type: "POST",
            data: {ID: IdMovimiento, Movimiento: mov}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS EN PROCESO PRINCIPLE, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
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
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS DESPUES, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteLevantamientoCompleto() {
        var reporte = '';
        var mov = pnlEditarTrabajo.find("#Movimiento").val();
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoCompletoPrinciple';
        } else {
            reporte = 'onReporteLevantamientoCompleto';
        }
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + reporte,
            type: "POST",
            data: {ID: IdMovimiento, Movimiento: mov}
        }).done(function (data, x, jq) {
            console.log(data);
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE LEVANTAMIENTO COMPLETO, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
</script>