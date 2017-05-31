<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="cursor-hand" >Usuarios</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                    <button type="button" class="btn btn-default" id="btnConfirmarEliminar"><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                    <button type="button" class="btn btn-default" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
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

<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Usuario</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
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
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-raised btn-primary" id="btnGuardar">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div id="mdlEditar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Editar Usuario</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
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
                </div>
            </form>
            <div class="modal-footer">

                <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-raised btn-primary" id="btnModificar">GUARDAR</button>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlUsuario/';
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");
    var btnModificar = mdlEditar.find("#btnModificar");

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
                    getRecords();
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
                errorClass: 'errorClass',
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

                var frm = new FormData(mdlEditar.find("#frmEditar")[0]);

                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UN USUARIO', 'success');
                    getRecords();
                    mdlEditar.modal('hide');
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
                errorClass: 'errorClass',
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
//            $('#frmNuevo').valid();

            //Si es verdadero que hacer
            if ($('#frmNuevo').valid()) {

                var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
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
                    mdlNuevo.modal('hide');
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

            mdlNuevo.modal('show');
            mdlNuevo.find("input").val("");
            mdlNuevo.find("select").val(null).trigger("change");
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
                        mdlEditar.find("#" + k).val(v);
                        mdlEditar.find("#" + k).select2("val", v);
                    });
                    mdlEditar.modal('show');
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
            $('#tblUsuarios tbody').on('dblclick', 'tr', function () {
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
            mdlNuevo.find("#Empresa_ID").html(options);
            mdlEditar.find("#Empresa_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

</script>
