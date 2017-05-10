<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">USUARIOS</div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><p>NUEVO</p></button>
                    <button type="button" class="btn btn-default" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><p>EDITAR</p></button>
                    <button type="button" class="btn btn-default" id="btnEliminar"><span class="fa fa-trash fa-1x"></span><p>ELIMINAR</p></button>
                    <button type="button" class="btn btn-default" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><p>ACTUALIZAR</p></button>
                </div>
                
                
                
                <div class="col-md-12" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>

<!--MODALES-->

<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NUEVO USUARIO</h4>
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
                            <label for="">ESTATUS*</label>
                            <select id="Estatus" name="Estatus" class="form-control" required>
                                <option value=""></option> 
                                <option value="1">ACTIVO</option> 
                                <option value="0">INACTIVO</option> 
                            </select>
                        </div>
                        <div class="col-md-12">
                            <h3>DATOS PERSONALES</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE*</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">APELLIDOS*</label>
                            <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">TIPO DE ACCESO*</label>
                            <select id="TipoAcceso" name="TipoAcceso" class="form-control" required>
                                <option value=""></option> 
                                <option value="ADMINISTRADOR">ADMINISTRADOR</option> 
                                <option value=">COORDINADOR DE PROCESOS">COORDINADOR DE PROCESOS</option>
                                <option value="RESIDENTE">RESIDENTE</option> 
                                <option value="INVITADO">INVITADO</option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">EMPRESA*</label>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary" id="btnGuardar">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div id="mdlEditar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDITAR USUARIO</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <input type="text" id="ID" name="ID" class="form-control" disabled="true" required>
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
                            <label for="">ESTATUS*</label>
                            <select id="Estatus" name="Estatus" class="form-control" required>
                                <option value=""></option> 
                                <option value="Activo">ACTIVO</option> 
                                <option value="Inactivo">INACTIVO</option> 
                            </select>
                        </div>
                        <div class="col-md-12">
                            <h3>DATOS PERSONALES</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE*</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">APELLIDOS*</label>
                            <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">TIPO DE ACCESO*</label>
                            <select id="TipoAcceso" name="TipoAcceso" class="form-control" required>
                                <option value=""></option> 
                                <option value="ADMINISTRADOR">ADMINISTRADOR</option> 
                                <option value=">COORDINADOR DE PROCESOS">COORDINADOR DE PROCESOS</option>
                                <option value="RESIDENTE">RESIDENTE</option> 
                                <option value="INVITADO">INVITADO</option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">EMPRESA*</label>
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
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary" id="btnModificar">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlUsuario/'
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");
    var btnModificar = mdlEditar.find("#btnModificar");

    var btnRefrescar = $("#btnRefrescar");

    var btnEliminar = $("#btnEliminar");

    $(document).ready(function () {


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
        });


        btnGuardar.click(function () {
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
        });

        btnRefrescar.click(function () {
            getRecords();
            getEmpresas();
        });

        btnNuevo.click(function () {
            mdlNuevo.find("input").val("");
            mdlNuevo.modal('show');
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
                $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
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
                options += '<option value="' + v.ID + '">' + v.NOMBRE + '</option>';
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