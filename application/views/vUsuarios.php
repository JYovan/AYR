<div class="col-md-12">
    <div class="panel panel-default" id="pnlTablero">
        <div class="panel-heading">
            <div class="cursor-hand" >Usuarios</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default hide" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                    <button type="button" class="btn btn-default hide" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
                </div>
                <div class="col-md-12" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>


<!--Confirmacion-->


<div id="mdlConfirmar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Eliminar Registro</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="btnEliminar">Aceptar</button>
        </div>
    </div>

</div>
<!--MODALES-->
<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlNuevo" class="panel panel-default hide animated slideInRight">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-9">

                    <div class="cursor-hand" >
                        <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                            <span class="fa fa-arrow-left CustomColorIcon" ></span>
                        </button>
                        Nuevo Usuario
                    </div>
                </div>
                <div class="col-md-3 panel-title " >
                     
                    <div class="col-md-12" align="right">
                        <button type="button" class="btn btn-raised btn-primary" id="btnGuardar">GUARDAR</button>
                    </div>
                    

                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <fieldset>
                    <div class="col-6 col-md-6">
                        <label for="">Usuario*</label>    
                        <input type="text" class="form-control" id="Usuario" name="Usuario" required >
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="">Contraseña*</label>    
                        <input type="password" class="form-control" id="Contrasena" name="Contrasena" required>
                    </div>

                    <div class="col-6 col-md-12">
                        <label for="">Estatus*</label>
                        <select id="Estatus" name="Estatus" class="form-control" required>
                            <option value=""></option> 
                            <option value="Activo">Activo</option> 
                            <option value="Inactivo">Inactivo</option> 
                        </select>
                    </div>



                    <div class="col-md-6">
                        <label for="">Nombre*</label>
                        <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Apellidos*</label>
                        <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Tipo Acceso*</label>
                        <select id="TipoAcceso" name="TipoAcceso" class="form-control" >
                            <option value=""></option> 
                            <option value="ADMINISTRADOR">Administrador</option> 
                            <option value="COORDINADOR DE PROCESOS">Coordinador de procesos</option>
                            <option value="RESIDENTE">Residente</option> 
                            <option value="INVITADO">Invitado</option> 
                        </select>
                    </div>


                    <div class="col-md-6">
                        <label for="">Empresa*</label>
                        <select id="Empresa_ID" name="Empresa_ID" class="form-control" >
                            <option value=""></option> 
                        </select>
                    </div>



                    <div class="col-6 col-md-6">
                        <h6>Los campos con * son obligatorios</h6>    

                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>





<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlEditar" class="panel panel-default hide animated slideInRight">
        <div class="Custompanel-heading " >
            <div class="Custompanel-heading row">
                <div class="col-md-9">

                    <div class="cursor-hand" >
                        <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                            <span class="fa fa-arrow-left CustomColorIcon" ></span>
                        </button>
                        Editar Usuario
                    </div>
                </div>
                <div class="col-md-3 panel-title" align="right">
                    <div class="col-md-3 dt-EncabezadoControlEliminar" align="right">
                        <button type="button" class="btn btn-default CustomColorEliminarRegistro" id="btnConfirmarEliminar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    </div>
                    <div class="col-md-9" align="right">
                        <button type="button" class="btn btn-raised btn-primary" id="btnModificar">GUARDAR</button>
                    </div>
                    

                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmEditar">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" >
                        </div>

                        <div class="col-6 col-md-6">
                            <label for="">Usuario*</label>    
                            <input type="text" class="form-control" id="Usuario" name="Usuario" required >
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">Contraseña*</label>    
                            <input type="password" class="form-control" id="Contrasena" name="Contrasena" required >
                        </div>
                        <div class="col-6 col-md-12">
                            <label for="">Estatus*</label>
                            <select id="Estatus" name="Estatus" class="form-control" required>
                                <option value=""></option> 
                                <option value="Activo">Activo</option> 
                                <option value="Inactivo">Inactivo</option> 
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="">Nombre*</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Apellidos*</label>
                            <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Tipo de Acceso*</label>
                            <select id="TipoAcceso" name="TipoAcceso" class="form-control" required>
                                <option value=""></option> 
                                <option value="ADMINISTRADOR">Administrador</option> 
                                <option value="COORDINADOR DE PROCESOS">Coordinador de procesos</option>
                                <option value="RESIDENTE">Residente</option> 
                                <option value="INVITADO">Invitado</option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Empresa*</label>
                            <select id="Empresa_ID" name="Empresa_ID" class="form-control" required>
                                <option value=""></option> 
                            </select>
                        </div>

                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>

                    </fieldset>
            </form>
        </div>
    </div>
</div>


<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlUsuario/';

    var pnlNuevo = $("#pnlNuevo");
    var pnlTablero = $("#pnlTablero");
    var btnNuevo = $("#btnNuevo");

    var btnGuardar = pnlNuevo.find("#btnGuardar");
    var btnCancelar = pnlNuevo.find("#btnCancelar");



    var btnEditar = $("#btnEditar");
    var pnlEditar = $("#pnlEditar");

    var btnModificar = pnlEditar.find("#btnModificar");
    var btnCancelarModificar = pnlEditar.find("#btnCancelar");

    var btnRefrescar = $("#btnRefrescar");

    var btnEliminar = $("#btnEliminar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    $(document).ready(function () {

        //Evento clic del boton confirmar borrar
        btnConfirmarEliminar.click(function () {

            if (temp !== 0 && temp !== undefined && temp > 0) {
                //Muestra el modal
                mdlConfirmar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });


        btnEliminar.click(function () {
            if (temp !== 0 && temp !== undefined && temp > 0) {
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
                    console.log(data);
                    mdlConfirmar.modal('hide');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'USUARIO ELIMINADO', 'danger');
                    
                    pnlEditar.addClass("hide");
                    pnlTablero.removeClass("hide");
                    btnRefrescar.trigger('click');

                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });


        btnModificar.click(function () {

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
                    Usuario: 'required',
                    Contrasena: 'required',
                    Nombre: 'required',
                    Apellidos: 'required',
                    Estatus: 'required',
                    Empresa_ID: 'required',
                    TipoAcceso: 'required'
                },
                highlight: function (element, errorClass, validClass) {

                    console.log(element);
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

                var frm = new FormData(pnlEditar.find("#frmEditar")[0]);

                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UN USUARIO', 'success');
                    
    
                    btnRefrescar.trigger('click');
                    pnlEditar.addClass('hide');
                    pnlTablero.removeClass('hide');
                    
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });


        btnGuardar.click(function () {
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
                    Usuario: 'required',
                    Contrasena: 'required',
                    Nombre: 'required',
                    Apellidos: 'required',
                    Estatus: 'required',
                    Empresa_ID: 'required',
                    TipoAcceso: 'required'
                },
                highlight: function (element, errorClass, validClass) {

                    console.log(element);
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

            //Regresa verdadero si ya se cumplieron las reglas, si no regresa falso

            //Si es verdadero que hacer
            if ($('#frmNuevo').valid()) {

                var frm = new FormData(pnlNuevo.find("#frmNuevo")[0]);
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO USUARIO', 'success');
                    getRecords();
                    pnlTablero.removeClass("hide");
                    pnlNuevo.addClass('hide');
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });

            }


        });

        btnRefrescar.click(function () {
            getRecords();
            getEmpresas();
        });

        btnNuevo.click(function () {
            pnlTablero.addClass("hide");
            pnlNuevo.removeClass('hide');
            pnlNuevo.find("input").val("");
            pnlNuevo.find("select").val(null).trigger("change");

        });

        btnCancelar.click(function () {
            pnlTablero.removeClass("hide");
            pnlNuevo.addClass('hide');
            btnRefrescar.trigger('click');

        });

        btnCancelarModificar.click(function () {
            pnlEditar.addClass("hide");
            pnlTablero.removeClass("hide");
            btnRefrescar.trigger('click');

        });

        btnEditar.click(function () {

            if (temp !== 0 && temp !== undefined && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'getUsuarioByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    btnEditar.find("input").val("");
                    btnEditar.find("select").empty().select2();
                    btnEditar.find("select").val(null).trigger("change");
                    $.each(data[0], function (k, v) {
                        pnlEditar.find("#" + k).val(v);
                        pnlEditar.find("#" + k).select2("val", v);
                    });
                    pnlTablero.addClass("hide");
                    pnlEditar.removeClass('hide');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        /*CALLS*/
        getRecords();
        getEmpresas();
    });

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
            console.log(data);
            $("#tblRegistros").html(getTable('tblUsuarios', data));
            $('#tblUsuarios tfoot th').each(function () {
                var title = $(this).text();
                //   $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
                //  $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" /></div>');
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');

            });
            var tblSelected = $('#tblUsuarios').DataTable(tableOptions);
            $('#tblUsuarios tbody').on('click', 'tr', function () {
                $("#tblUsuarios").find("tr").removeClass("success");
                $("#tblUsuarios").find("tr").removeClass("warning");
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
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#tblUsuarios tbody').on('click', 'tr', function () {
                $("#tblUsuarios").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm[0]);
                btnEditar.trigger("click");
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

    function getEmpresas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getEmpresas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Nombre + '</option>';
            });
            pnlNuevo.find("#Empresa_ID").html(options);
            pnlEditar.find("#Empresa_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

</script>
