<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading">
            <div class="cursor-hand" >Prefacturas</div>
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
                        <label for="">Referencia*</label>
                        <input type="text" id="Referencia" name="Referencia"  class="form-control" placeholder="" >
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="">Cliente*</label>
                        <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="">Proyecto*</label>
                        <select id="Proyecto_ID" name="Proyecto_ID" class="form-control" >
                            <option value=""></option>
                        </select>
                    </div>
                    <div class="col-6 col-md-12">
                        <label for="">(Opcional) Comentarios   *Texto que aparecera en el cuerpo de la factura*</label>
                        <textarea class="col-md-12 form-control" id="Comentarios" name="Comentarios" rows="4" ></textarea>
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
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleNuevaPrefactura">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-5">
                    <div class="cursor-hand" >Entregas </div>
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
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlPrefacturas/';
//nuevo
    var menuTablero = $('#MenuTablero');
    var btnNuevo = $("#btnNuevo");
    var pnlNuevaPrefactura = $("#pnlNuevaPrefactura");
    var pnlDetalleNuevaPrefactura = $("#pnlDetalleNuevaPrefactura");
    var btnNuevoRenglonPrefacturaNuevo = pnlDetalleNuevaPrefactura.find('#btnNuevoRenglonPrefacturaNuevo')
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    var currentDate = new Date();
    $(document).ready(function () {
        btnNuevo.on('click', function () {
//            $.each(tblRegistrosXDetalleXEntrega.find("tbody tr"), function () {
//                $(this).remove();
//            });
            pnlNuevaPrefactura.removeClass('hide');
            menuTablero.addClass('hide');
            pnlDetalleNuevaPrefactura.removeClass('hide');
            pnlNuevaPrefactura.find("input").val("");
            pnlNuevaPrefactura.find("select").val(null).trigger("change");
            pnlNuevaPrefactura.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlNuevaPrefactura.find("#Movimiento").val("PREFACTURA");
            pnlNuevaPrefactura.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");
        });
        //Boton de nuevo en detalle nuevo
        btnNuevoRenglonPrefacturaNuevo.on("click", function () {
            onNotify('<span class="fa fa-exclamation fa-2x"></span>', 'DEBE DE GUARDAR EL MOVIMIENTO', 'danger');
        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevaPrefactura.addClass("hide");
            pnlDetalleNuevaPrefactura.addClass('hide');
            // getRecords();
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
                    Referencia: 'required',
                    Proyecto_ID: 'required'
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
            if (pnlNuevaPrefactura.find('#frmNuevo').valid()) {
                var frm = new FormData(pnlNuevaPrefactura.find("#frmNuevo")[0]);
//                if (tBtnConcluir.is(':checked')) {
//
//                    frm.append('Estatus', 'Concluido');
//                } else {
//
//                    frm.append('Estatus', 'Borrador');
//                }
//                for (var pair of frm.entries()) {
//                    console.log(pair[0] + ', ' + pair[1]);
//                }
                //Agregar Importe total
//                frm.append('Importe', 0);
//                /*DESCOMENTAR PARA AGREGAR*/
//                $.ajax({
//                    url: master_url + 'onAgregar',
//                    type: "POST",
//                    cache: false,
//                    contentType: false,
//                    processData: false,
//                    data: frm
//                }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVA PREFACTURA', 'success');
////Funcion que regarga el panel de editar con el nuevo registro
//                    despuesDeGuardar(data);
//
//                }).fail(function (x, y, z) {
//                    console.log(x, y, z);
//                }).always(function () {
//                    HoldOn.close();
//                });
            }
        });
        getClientes();
        getProyectos();
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
            pnlNuevaPrefactura.find("#Cliente_ID").html(options);
            //pnlEditarEntrega.find("#Cliente_ID").html(options);
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
            pnlNuevaPrefactura.find("#Proyecto_ID").html(options);
            //pnlEditarEntrega.find("#Cliente_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
</script>