<div class="col-md-12">
    <div class="panel panel-default" id="pnlTablero">
        <div class="panel-heading">
            <div class="cursor-hand" >Usuarios</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                </div>
                <div class="col-md-12 table-responsive" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>
<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlDatos" class="panel panel-default hide">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    Usuario
                </div>
                <div class="input-group pull-right">
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    <button type="button" class="btn btn-raised btn-danger" id="btnEliminar"><span class="fa fa-trash fa-1x"></span> ELIMINAR</button>
                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardar"><span class="fa fa-save fa-1x"></span> GUARDAR</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <fieldset>
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text"  name="ID" class="form-control" >
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group label-static">
                                <label for="Usuario" class="control-label">Usuario*</label>
                                <input type="text" class="form-control"  name="Usuario" required >
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="form-group label-static">
                                <label for="Contrasena" class="control-label">Contraseña*</label>
                                <input type="password" class="form-control"  name="Contrasena" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Tipo Acceso*</label>
                                <select id="TipoAcceso" name="TipoAcceso" class="form-control" >
                                    <option value=""></option>
                                    <option value="SUPER ADMINISTRADOR">Super Administrador</option>
                                    <option value="ADMINISTRADOR">Administrador</option>
                                    <option value="COORDINADOR DE PROCESOS">Coordinador de procesos</option>
                                    <option value="RESIDENTE">Residente</option>
                                    <option value="CLIENTE">Cliente</option>
                                    <option value="INVITADO">Invitado</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Estatus*</label>
                                <select id="Estatus" name="Estatus" class="form-control" >
                                    <option value=""></option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Empresa*</label>
                                <select id="Empresa_ID" name="Empresa_ID" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Nombre" class="control-label">Nombre*</label>
                                <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Apellidos" class="control-label">Apellidos*</label>
                                <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6 hide" id="AreaCliente">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Cliente*</label>
                                <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </fieldset>
                    <div class="col-md-12">
                        <br>
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Usuario/';
    var btnNuevo = $("#btnNuevo");
    var pnlDatos = $("#pnlDatos");
    var pnlTablero = $("#pnlTablero");
    //Boton que guarda los datos del formulario
    var btnGuardar = pnlDatos.find("#btnGuardar");
    var btnCancelar = pnlDatos.find("#btnCancelar");
    var btnEliminar = $("#btnEliminar");
    var sEsCliente = pnlDatos.find("#TipoAcceso");
    var nuevo = true;
    $(document).ready(function () {

        sEsCliente.change(function () {
            if (this.value === 'CLIENTE' || this.value === 'SUPER ADMINISTRADOR') {
                pnlDatos.find("#AreaCliente").removeClass('hide');
            } else {
                pnlDatos.find("#AreaCliente").addClass('hide');
            }
        });

        btnNuevo.click(function () {
            pnlTablero.addClass("hide");
            pnlDatos.removeClass('hide');
            pnlDatos.find("input").val("");
            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            $(':input:text:enabled:visible:first').focus();
            nuevo = true;
        });
        btnCancelar.click(function () {
            pnlTablero.removeClass("hide");
            pnlDatos.addClass('hide');
        });
        //Evento clic del boton confirmar borrar
        btnEliminar.click(function () {
            swal({
                title: "Confirmar",
                text: "Deseas eliminar el registro?",
                icon: "warning",
                buttons: ["Cancelar", "Aceptar"]
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
                            ID: temp
                        }
                    }).done(function (data, x, jq) {
                        getRecords();
                        pnlDatos.addClass("hide");
                        pnlTablero.removeClass("hide");
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            });
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
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO EL REGISTRO', 'success');
                        getRecords();
                        pnlDatos.addClass("hide");
                        pnlTablero.removeClass("hide");
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
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO REGISTRO', 'success');
                        pnlDatos.find("[name='ID']").val(data);
                        nuevo = false;
                        getRecords();
                        pnlDatos.addClass("hide");
                        pnlTablero.removeClass("hide");
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', '* DEBE DE COMPLETAR LOS CAMPOS REQUERIDOS *', 'danger');
            }
        });
        /*CALLS*/
        getRecords();
        getClientes();
        getEmpresas();
        handleEnter();
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
            $("#tblRegistros").html(getTable('tblEmpresas', data));
            $('#tblEmpresas tfoot th').each(function () {
                $(this).html('');
            });
            var tblSelected = $('#tblEmpresas').DataTable(tableOptions);
            $('#tblEmpresas_filter input[type=search]').focus();
            $('#tblEmpresas tbody').on('click', 'tr', function () {
                nuevo = false;
                $("#tblEmpresas").find("tr").removeClass("success");
                $("#tblEmpresas").find("tr").removeClass("warning");
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
                        pnlDatos.find("input").val("");
                        $.each(pnlDatos.find("select"), function (k, v) {
                            pnlDatos.find("select")[k].selectize.clear(true);
                        });
                        if (data[0].Cliente_ID !== null && parseFloat(data[0].Cliente_ID) !== 0) {
                            pnlDatos.find("#AreaCliente").removeClass('hide');
                        } else {
                            pnlDatos.find("#AreaCliente").addClass('hide');
                        }
                        $.each(data[0], function (k, v) {
                            pnlDatos.find("[name='" + k + "']").val(v);
                            if (pnlDatos.find("[name='" + k + "']").is('select')) {
                                pnlDatos.find("[name='" + k + "']")[0].selectize.setValue(v);
                            }
                        });
                        pnlTablero.addClass("hide");
                        pnlDatos.removeClass('hide');

                        $(':input:text:enabled:visible:first').focus();
                        $(':input:text:enabled:visible:first').select();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
                }
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
            $.each(data, function (k, v) {
                $("[name='Empresa_ID']")[0].selectize.addOption({text: v.Nombre, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getClientes() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getClientes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                $("[name='Cliente_ID']")[0].selectize.addOption({text: v.Cliente, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onRemovePreview(e) {
        VistaPrevia.html("");
        $('#RutaLogo').attr("type", "text");
        $('#RutaLogo').val('N');
    }
</script>