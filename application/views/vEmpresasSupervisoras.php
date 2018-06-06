<div class="col-md-12">
    <div class="panel panel-default" id="pnlTablero">
        <div class="panel-heading">
            <div class="cursor-hand" >Empresas Supervisoras</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default hide" id=""><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                    <button type="button" class="btn btn-default hide" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
                </div>
                <div class="col-md-12 table-responsive" id="tblRegistros"></div>
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
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>
</div>
<!--MODALES-->
<!--NUEVO-->
<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlNuevo" class="panel panel-default hide animated slideInRight">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Nueva Empresa Supervisora
                </div>
                <div class="input-group pull-right">
                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardar">GUARDAR</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <fieldset>
                    <div class="col-md-12 hide">
                        <input type="text" id="ID" name="ID" class="form-control">
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                        <label for="Nombre" class="control-label">Nombre* </label>    
                        <input type="text" class="form-control" id="Nombre" name="Nombre" required="">
                        </div>                    
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                        <label for="Descripcion" class="control-label">Descripción</label>    
                        <input type="text" class="form-control" id="Descripcion" name="Descripcion" >
                        </div>   
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                        <label for="Contacto" class="control-label">Contacto 1</label>
                        <input type="text" id="Contacto" name="Contacto" class="form-control" placeholder="">
                        </div>   
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                        <label for="Contacto2" class="control-label">Contacto 2</label>
                        <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="">
                        </div>   
                    </div>
                      <div class="col-md-12">
                        <br>
                        <h6>Los campos con * son obligatorios</h6>    
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>       
<!--EDITAR-->
<div class="col-md-12">
    <div id="pnlEditar" class="panel panel-default hide animated slideInRight">
        <div class="Custompanel-heading " >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Editar Empresa Supervisora
                </div>
                <div class="input-group pull-right">
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" id="btnConfirmarEliminar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <button type="button" class="btn btn-raised btn-primary" id="btnModificar">GUARDAR</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmEditar">
                <fieldset>
                    <div class="col-md-12 hide">
                        <input type="text" id="ID" name="ID" class="form-control">
                    </div>
                     <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                        <label for="Nombre" class="control-label">Nombre* </label>    
                        <input type="text" class="form-control" id="Nombre" name="Nombre" required="">
                        </div>                    
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                        <label for="Descripcion" class="control-label">Descripción</label>    
                        <input type="text" class="form-control" id="Descripcion" name="Descripcion" >
                        </div>   
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                        <label for="Contacto" class="control-label">Contacto 1</label>
                        <input type="text" id="Contacto" name="Contacto" class="form-control" placeholder="">
                        </div>   
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                        <label for="Contacto2" class="control-label">Contacto 2</label>
                        <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="">
                        </div>   
                    </div>
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
    var master_url = base_url + 'index.php/CtrlEmpresasSupervisoras/';
    var btnNuevo = $("#btnNuevo");
    var pnlNuevo = $("#pnlNuevo");
    var pnlTablero = $("#pnlTablero");
    var pnlEditar = $("#pnlEditar");
    //Boton que guarda los datos del formulario
    var btnGuardar = pnlNuevo.find("#btnGuardar");
    var btnCancelar = pnlNuevo.find("#btnCancelar");
    //Boton que actualiza los datos del formulario
    var btnModificar = pnlEditar.find("#btnModificar");
    var btnCancelarModificar = pnlEditar.find("#btnCancelar");
    //Botones del tablero que actualizan y eliminan registros
    var btnRefrescar = $("#btnRefrescar");
    var btnEliminar = $("#btnEliminar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    $(document).ready(function () {
        //Evento clic del boton nuevo
        btnNuevo.click(function () {
            pnlTablero.addClass("hide");
            pnlNuevo.removeClass('hide');
            pnlNuevo.find("input").val("");
            pnlNuevo.find("select").select2("val", "");
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
        //Actualiza los datos
        btnRefrescar.click(function () {
            getRecords();
        });
        //Evento clic del boton editar

        //Evento clic del boton confirmar borrar
        btnConfirmarEliminar.click(function () {
            if (temp !== 0 && temp !== undefined && temp > 0) {
                //Muestra el modal
                mdlConfirmar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        //Boton de eliminar del tablero
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
                    console.log(temp);
                    mdlConfirmar.modal('hide');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EMPRESA ELIMINADA', 'danger');
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
        //-----------------------EVENTOS DEL FORMULARIO--------------------------
        //Eventos del boton de guardar el formulario cuando es nuevo
        btnGuardar.click(function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmNuevo').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    Nombre: 'required'
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
            //Regresa verdadero si ya se cumplieron las reglas, si no regresa falso
//            $('#frmNuevo').valid();
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
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UNA NUEVA EMPRESA', 'success');
                    pnlTablero.removeClass("hide");
                    pnlNuevo.addClass('hide');
                    btnRefrescar.trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        //Boton para guardar cambios cuando ya existe un registro
        btnModificar.click(function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmEditar').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    Nombre: 'required'
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
            //Regresa verdadero si ya se cumplieron las reglas, si no regresa falso
//            $('#frmNuevo').valid();
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
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO LA EMPRESA', 'success');
                    pnlTablero.removeClass("hide");
                    pnlEditar.addClass('hide');
                    btnRefrescar.trigger('click');
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        //ESTOS METODOS FUNCIONAN PARA CARGAR LOS REGISTROS AL TABLERO
        /*CALLS*/
        getRecords();
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
            $("#tblRegistros").html(getTable('tblEmpresasSupervisoras', data));
            $('#tblEmpresasSupervisoras tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
            });
            var tblSelected = $('#tblEmpresasSupervisoras').DataTable(tableOptions);
            $('#tblEmpresasSupervisoras tbody').on('click', 'tr', function () {
                $("#tblEmpresasSupervisoras").find("tr").removeClass("success");
                $("#tblEmpresasSupervisoras").find("tr").removeClass("warning");
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
                        url: master_url + 'getEmpresaSupervisoraByID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: temp
                        }
                    }).done(function (data, x, jq) {
                        pnlEditar.find("input").val("");
                        pnlEditar.find("select").select2("val", "");
                        $.each(data[0], function (k, v) {
                            pnlEditar.find("#" + k).val(v);
                            pnlEditar.find("#" + k).select2("val", v);
                        });
                        pnlEditar.removeClass("hide");
                        pnlTablero.addClass("hide");
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
</script>