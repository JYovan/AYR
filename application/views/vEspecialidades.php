<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="cursor-hand" >Especialidades por Cliente</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <!--Especialidades-->
                    <button type="button" class="btn btn-default hide" id="btnVolverAClientes"><span class="fa fa-arrow-left fa-1x"></span><br>VOLVER A CLIENTES</button>
                    <button type="button" class="btn btn-default hide" id="btnNuevaEspecialidad"><span class="fa fa-plus fa-1x"></span><br>NUEVA ESPECIALIDAD</button>
                    <button type="button" class="btn btn-default" id="btnVerEspecialidades"><span class="fa fa-arrow-right fa-1x"></span><br>ESPECIALIDADES</button>
                    <button type="button" class="btn btn-default hide" id="btnEditarEspecialidad"><span class="fa fa-pencil fa-1x"></span><br>EDITAR ESPECIALIDAD</button>
                    <button type="button" class="btn btn-default hide" id="btnEliminarEspecialidad"><span class="fa fa-trash fa-1x"></span><br>ELIMINAR ESPECIALIDAD</button> 
                </div>
                <div class="col-md-12" align="right">
                </div>
                <div class="col-md-12 table-responsive" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>
<!--MODAL ESPECIALIDAD-->
<div id="mdlNuevaEspecialidad" class="modal modalFull animated bounceInDown" tabindex="-1" data-focus-on="input:first" style="display: none;">
    <div class="modal-dialog modal-dialogFull"> <!--REMOVER EL ROL DE DOCUMENTO PARA ABRIR ESTE MODAL DENTRO DE OTRO-->
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title modal-titleFull">Nueva Especialidad</h4>
            </div>
            <form id="frmNuevoSuc">
                <div class="modal-body modal-bodyFull">
                    <fieldset> 
                        <div class="col-6 col-md-12">
                            <br>
                        </div>  
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Descripcion" class="control-label">Descripcion*</label>
                                <input type="text" id="Descripcion" name="Descripcion" class="form-control" placeholder="" required>
                            </div>
                        </div> 
                        <div class="col-12 col-md-12">
                            <br>
                            <h6>Los campos con * son obligatorios</h6>    
                        </div> 
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-default" id="btnCancelarEspecialidad">CANCELAR</button>
                <button type="button" class="btn btn-raised btn-primary" id="btnGuardarEspecialidad">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div id="mdlEditarEspecialidad" class="modal modalFull animated bounceInDown" tabindex="-1" data-focus-on="input:first" style="display: none;">
    <div class="modal-dialog modal-dialogFull"> <!--REMOVER EL ROL DE DOCUMENTO PARA ABRIR ESTE MODAL DENTRO DE OTRO-->
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title modal-titleFull">Editar Especialidad</h4>
            </div>
            <form id="frmEditarSuc">
                <div class="modal-body modal-bodyFull">
                    <fieldset> 
                        <div class="col-6 col-md-12">
                            <br>
                        </div>  
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Descripcion" class="control-label">Descripcion*</label>
                                <input type="text" id="Descripcion" name="Descripcion" class="form-control" placeholder="" required>
                            </div>
                        </div> 
                        <div class="col-12 col-md-12">
                            <br>
                            <h6>Los campos con * son obligatorios</h6>    
                        </div> 
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-raised btn-primary" id="btnGuardarEspecialidad">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Confirmacion-->
<div id="mdlEliminarEspecialidad" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEliminarEspecialidad">ACEPTAR</button>
        </div>
    </div>
</div>

<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Especialidades/';
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    var btnNuevaEspecialidad = $("#btnNuevaEspecialidad");
    var mdlNuevaEspecialidad = $("#mdlNuevaEspecialidad");
    var btnCancelarEspecialidad = mdlNuevaEspecialidad.find("#btnCancelarEspecialidad");
    var btnGuardarEspecialidad = mdlNuevaEspecialidad.find("#btnGuardarEspecialidad");
    var btnEliminarEspecialidad = $("#btnEliminarEspecialidad");
    var btnVerEspecialidades = $("#btnVerEspecialidades");
    var btnEditarEspecialidad = $("#btnEditarEspecialidad");
    var mdlEditarEspecialidad = $("#mdlEditarEspecialidad");
    var btnModificarEspecialidad = mdlEditarEspecialidad.find("#btnGuardarEspecialidad");
    var mdlEliminarEspecialidad = $("#mdlEliminarEspecialidad");
    var mdlbtnEliminarEspecialidad = mdlEliminarEspecialidad.find("#btnEliminarEspecialidad");
    var btnVolverAClientes = $("#btnVolverAClientes");
    $(document).ready(function () {


        mdlbtnEliminarEspecialidad.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ELIMINANDO..."
            });
            $.ajax({
                url: master_url + 'onEliminar',
                type: "POST",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                mdlEliminarEspecialidad.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ESPECIALIDAD ELIMINADA', 'danger');
                btnVerEspecialidades.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });


        btnEliminarEspecialidad.click(function () {
            if (temp !== 0 && temp !== undefined && temp > 0) {
                mdlEliminarEspecialidad.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });


        btnModificarEspecialidad.click(function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmEditarSuc').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    Nombre: 'required',
                    CR: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            if ($('#frmEditarSuc').valid()) {
                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    data: {
                        ID: temp,
                        Descripcion: mdlEditarEspecialidad.find("#Descripcion").val()
                    }
                }).done(function (data, x, jq) {
                    btnVerEspecialidades.trigger('click');
                    mdlEditarEspecialidad.modal('hide');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UNA ESPECIALIDAD', 'success');
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });


        btnGuardarEspecialidad.click(function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmNuevoSuc').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {

                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            //Si es verdadero que hacer
            if ($('#frmNuevoSuc').valid()) {
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    data: {
                        Descripcion: mdlNuevaEspecialidad.find("#Descripcion").val(),
                        Cliente_ID: cliente_id
                    }
                }).done(function (data, x, jq) {
                    btnVerEspecialidades.trigger('click');
                    mdlNuevaEspecialidad.modal('hide');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UNA NUEVA ESPECIALIDAD', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnVolverAClientes.click(function () {

            btnVolverAClientes.addClass("hide");
            btnNuevaEspecialidad.addClass("hide");
            btnEliminarEspecialidad.addClass("hide");
            btnVerEspecialidades.removeClass("hide");
            getRecords();
        });
        btnVerEspecialidades.click(function () {
            if (cliente_id !== 0 && cliente_id !== null) {

                btnVolverAClientes.removeClass("hide");
                btnNuevaEspecialidad.removeClass("hide");
                btnEliminarEspecialidad.removeClass("hide");
                btnVerEspecialidades.addClass("hide");
                getEspecialidadesByClienteID(cliente_id);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN CLIENTE', 'danger');
            }
        });

        btnCancelarEspecialidad.click(function () {
            mdlNuevaEspecialidad.modal('hide');
        });
        btnNuevaEspecialidad.click(function (e) {
            mdlNuevaEspecialidad.find("input").val("");
            mdlNuevaEspecialidad.modal('show');
        });

        /*CALLS*/
        getRecords();
    });


    var cliente_id = 0;
    function getRecords() {
        cliente_id = 0;
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
            $("#tblRegistros").html(getTable('tbllClientes', data));
            $('#tbllClientes tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
            });
            var tblSelected = $('#tbllClientes').DataTable(tableOptions);
            $('#tbllClientes tbody').on('click', 'tr', function () {
                $("#tbllClientes").find("tr").removeClass("success");
                $("#tbllClientes").find("tr").removeClass("warning");
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
                cliente_id = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#tbllClientes tbody').on('dblclick', 'tr', function () {
                $("#tbllClientes").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                cliente_id = parseInt(dtm[0]);
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
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Cliente + '</option>';
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    var temp = 0;
    function getEspecialidadesByClienteID(IDX) {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getEspecialidadesByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {

            if (data.length > 0) {

                $("#tblRegistros").html(getTable('tblEspecialidades', data));
                $('#tblEspecialidades tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for=""></label><input type="text" placeholder="Buscar por ' + title + '" class="form-control" />');
                });
                var tblSelected = $('#tblEspecialidades').DataTable(tableOptions);
                $('#tblEspecialidades tbody').on('click', 'tr', function () {
                    $("#tblEspecialidades").find("tr").removeClass("success");
                    $("#tblEspecialidades").find("tr").removeClass("warning");
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
                    getEspecialidadByID(temp);

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
            } else {
//                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN CLIENTES TODAVÍA', 'danger');
                $("#tblRegistros").html(getTable('tblEspecialidades', data));
                $('#tblEspecialidades tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<label for=""></label><input type="text" placeholder="Buscar por ' + title + '" class="form-control" />');
                });
            }


        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getEspecialidadByID(IDX) {

        console.log(IDX);
        if (IDX !== 0 && IDX !== undefined && IDX > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getEspecialidadByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IDX
                }
            }).done(function (data, x, jq) {
                console.log(data);
                mdlEditarEspecialidad.find("input").val("");
                var especialidad = data[0];
                mdlEditarEspecialidad.find("#Descripcion").val(especialidad.Descripcion);
                mdlEditarEspecialidad.modal('show');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }

</script>