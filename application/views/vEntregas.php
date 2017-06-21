<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading">
            <div class="cursor-hand" >Entregas</div>
        </div>
        <div class="panel-body ">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                </div>
                <div class="col-md-12" id="tblRegistros"></div>
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
            <h4 class="modal-title">IMPRIMIR REPORTES</h4>
        </div>
        <div class="modal-body">
            Selecciona el reporte que deseas imprimir
            <div class="col-md-12">
                <br>
            </div>
            <div id="reportes" class="dt-buttons">
                <button id="btnTarifario" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>TARIFARIO</button>
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
                    <div class="col-6 col-md-12">
                        <br>
                    </div>
                    <div class=" col-6 col-md-3">
                        <label for="">Movimiento</label>
                        <input type="text" id="Movimiento" name="Movimiento"  class="form-control" readonly="" placeholder="" >
                    </div>
                    <div class=" col-6 col-md-3">
                        <label for="">Mov ID</label>
                        <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                    </div>
                    <div class="col-6 col-md-3">
                        <label for="">Fecha de Creación*</label>
                        <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                    </div>
                    <div class="col-6 col-md-3">
                        <label for="">Entrega*</label>
                        <input type="text" id="NoEntrega" name="NoEntrega"  class="form-control" placeholder="" >
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="">Cliente*</label>
                        <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="">Clasificación</label>
                        <select id="Clasificacion" name="Clasificacion" class="form-control" >
                            <option value=""></option>
                            <option value="MOBILIARIO">MOBILIARIO</option>
                            <option value="INMUEBLE">INMUEBLE</option>
                        </select>
                    </div>
                    <input type="text" id="Usuario_ID" name="Usuario_ID"  class="form-control hide" placeholder="" >
                    <div class="col-6 col-md-12">
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
                        <br>
                    </div>
                    <div class=" col-6 col-md-3">
                        <label for="">Movimiento</label>
                        <input type="text" id="Movimiento" name="Movimiento"  class="form-control" readonly="" placeholder="" >
                    </div>
                    <div class=" col-6 col-md-3">
                        <label for="">Mov ID</label>
                        <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                    </div>
                    <div class="col-6 col-md-3">
                        <label for="">Fecha de Creación*</label>
                        <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                    </div>
                    <div class="col-6 col-md-3">
                        <label for="">Entrega*</label>
                        <input type="text" id="NoEntrega" name="NoEntrega"  class="form-control" placeholder="" >
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="">Cliente*</label>
                        <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="">Clasificación</label>
                        <select id="Clasificacion" name="Clasificacion" class="form-control" >
                            <option value=""></option>
                            <option value="MOBILIARIO">MOBILIARIO</option>
                            <option value="INMUEBLE">INMUEBLE</option>
                        </select>
                    </div>
                    <input type="text" id="Usuario_ID" name="Usuario_ID"  class="form-control hide" placeholder="" >
                    <div class="col-6 col-md-12">
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
        <!--        <div class="panel-body">-->
        <fieldset>
            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-default" id="btnNuevoRenglonEntregaEditar"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
            </div>
            <div class="col-md-12 table-responsive " id="Conceptos" >
                <table  id="tblRegistrosXDetalleXEntrega" class="table table-striped table-hover hide " width="100%">
                    <thead>
                        <tr>
                            <th class="">ID</th>
                            <th class="">Entrega</th>
                            <th class="">Trabajo</th>
                            <th>Renglon</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <!--        </div>-->
    </div>
</div>
<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlSeleccionarTrabajosEditar" class="modal animated fadeInUp">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">SELECCIONE UN TRABAJO</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12" align="right">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chkMultiple" value="ON"> VARIOS
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="col-md-12" id="TrabajosXClienteIDXClasificacion">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
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
            <h4 class="modal-title">ELIMINAR REGISTRO</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlEntregas/';
    var menuTablero = $('#MenuTablero');
    var btnNuevo = $("#btnNuevo");
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

    var btnTarifario = mdlReportesEditarEntrega.find("#btnTarifario");
    var btnDesglose = mdlReportesEditarEntrega.find("#btnDesglose");
    $(document).ready(function () {
        //Reportes
         btnImprimirReportesEditarEntrega.on("click", function () {


             mdlReportesEditarEntrega.modal('show');
         });
        //Tarifario
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
            pnlNuevaEntrega.find("select").val(null).trigger("change");
            pnlNuevaEntrega.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlNuevaEntrega.find("#Movimiento").val("Entrega");
            pnlNuevaEntrega.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");
        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevaEntrega.addClass("hide");
            pnlDetalleNuevaEntrega.addClass('hide');
            getRecords();
        });
        btnCancelarModificar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarEntrega.addClass("hide");
            pnlDetalleEditarEntrega.addClass("hide");
            getRecords();
        });
        btnGuardar.on("click", function () {
            $.validator.setDefaults({
                ignore: []
            });
            jQuery.validator.messages.required = 'Esta campo es obligatorio';
            jQuery.validator.messages.number = 'Esta campo debe ser numérico';
            jQuery.validator.messages.email = 'Correo no válido';
            $('#frmNuevo').validate({
                errorElement: 'span',
                errorClass: 'errorForms',
                rules: {
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    Cliente_ID: 'required',
                    NoEntrega: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.addClass(errorClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.removeClass(errorClass);
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
//                for (var pair of frm.entries()) {
//                    console.log(pair[0] + ', ' + pair[1]);
//                }
                //Agregar Importe total
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
            jQuery.validator.messages.required = 'Esta campo es obligatorio';
            jQuery.validator.messages.number = 'Esta campo debe ser numérico';
            jQuery.validator.messages.email = 'Correo no válido';
            $('#frmEditar').validate({
                errorElement: 'span',
                errorClass: 'errorForms',
                rules: {
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    Cliente_ID: 'required',
                    NoEntrega: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.addClass(errorClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.removeClass(errorClass);
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
                //Solo para debuggear el formulario de la clase FormData
//                for (var pair of frm.entries()) {
//                    console.log(pair[0]+ ', ' + pair[1]);
//                }
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
        getClientes();
        getRecords();
    });
    IdMovimiento = 0;
    function getRecords() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $("#tblRegistros").html(getTable('tblEntregas', data));
            $('#tblEntregas tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto; "><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
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
                        var entrega = data[0];
                        pnlEditarEntrega.find("#ID").val(entrega.ID);
                        pnlEditarEntrega.find("#Movimiento").val(entrega.Movimiento);
                        pnlEditarEntrega.find("#FechaCreacion").val(entrega.FechaCreacion);
                        pnlEditarEntrega.find("#Cliente_ID").select2("val", entrega.Cliente_ID);
                        pnlEditarEntrega.find("#Clasificacion").select2("val", entrega.Clasificacion);
                        pnlEditarEntrega.find("#NoEntrega").val(entrega.NoEntrega);
                        pnlEditarEntrega.find("#Importe").val(entrega.Importe);
                        pnlEditarEntrega.find("#Estatus").val(entrega.Estatus);
                        pnlEditarEntrega.find("#Usuario_ID").val(entrega.Usuario_ID);
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
                pnlEditarEntrega.find("#Clasificacion").select2("val", entrega.Clasificacion);
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
            url: master_url + 'getTrabajosControlByClienteXClasificacion',
            type: "POST",
            dataType: "JSON",
            data: {
                Cliente_ID: Cliente_ID
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlSeleccionarTrabajosEditar.modal('show');
                $("#TrabajosXClienteIDXClasificacion").html(getTable('tblTrabajos', data));
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
                                } 

                                else {
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
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISITEN TRABAJOS CONCLUIDOS PARA ESTE CLIENTE', 'danger');
                HoldOn.close();
            }
        }).fail(function (x, y, z) {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISITEN TRABAJOS CONCLUIDOS PARA ESTE CLIENTE', 'danger');
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
            if (data.length > 0) {
                pnlDetalleEditarEntrega.find("#Conceptos").html(getTable('tblRegistrosXDetalleXEntrega', data));
                var thead = pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega thead th');
                var tfoot = pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega tfoot th');
                thead.eq(0).addClass("hide");
                tfoot.eq(0).addClass("hide");
                thead.eq(1).addClass("hide");
                tfoot.eq(1).addClass("hide");
                thead.eq(8).addClass("hide");
                tfoot.eq(8).addClass("hide");
                $.each(pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("hide");
                    td.eq(1).addClass("hide");
                    td.eq(8).addClass("hide");
                    total += parseFloat(td.eq(8).text());
                    ImporteTotalGlobal = total;
                });
                //Seteamos el importeTotal
                ImporteTotal.html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ ' + $.number(total, 2, '.', ', ') + '</span>');
                var tblSelected = pnlDetalleEditarEntrega.find('#tblRegistrosXDetalleXEntrega').DataTable(tableOptions);
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
                pnlDetalleEditarEntrega.find("#Conceptos").html("");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*FUNCIONES DE EDICION EN EL GENERADOR*/
    function onEliminarTrabajoDetalle(evt, IDX) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ELIMINANDO...'
        });
        $.ajax({
            url: master_url + 'onEliminarTrabajoDetalle',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var row = $(evt).parent().parent().find("td");
            $(evt).parent().parent().remove();
            getDetalleByID(pnlEditarEntrega.find("#ID").val());
            //onNotify('<span class="fa fa-check fa-lg"></span>', 'CONCEPTO ELIMINADO', 'success');
        }).fail(function (x, y, z) {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO NO ELIMINADO', 'danger');
        }).always(function () {
            HoldOn.close();
        });
    }
    var ImporteTotalGlobal = 0;
</script>
<style>
    .super-fullscreen {
        width: 90% !important;
    }
    .medium-fullscreen {
        width: 60% !important;
    }
</style>
