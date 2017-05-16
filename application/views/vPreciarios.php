
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">PRECIARIOS</div>
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
                <h4 class="modal-title">NUEVO PRECIARIO</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>


                        <div class="col-6 col-md-12">
                            <label for="">NOMBRE*</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required >
                        </div>


                        <div class="col-md-3">
                            <label for="">FECHA DE CREACION*</label>
                            <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required>
                        </div>  


                        <div class="col-6 col-md-6">
                            <label for="">ESTATUS*</label>
                            <select id="Estatus" name="Estatus" class="form-control" required>
                                <option value=""></option> 
                                <option value="ACTIVO">ACTIVO</option> 
                                <option value="INACTIVO">INACTIVO</option> 
                            </select>
                        </div>

                        <div class="col-6 col-md-6">
                            <label for="">TIPO*</label>
                            <select id="Tipo" name="Tipo" class="form-control" required>
                                <option value=""></option> 
                                <option value="MANTENIMIENTO">MANTENIMIENTO</option> 
                                <option value="OBRA">OBRA</option> 
                            </select>
                        </div>



                        <div class="col-md-6">
                            <label for="">CLIENTE*</label>
                            <select id="Cliente_ID" name="Cliente_ID" class="form-control" required>
                                <option value=""></option> 
                            </select>
                        </div>

                        <div class="col-md-12">
                            <span> <br></span>
                        </div>

                        <div class="col-md-12" align="center">
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaArchivo" name="RutaArchivo" class="hide">
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                SELECCIONAR ARCHIVO 
                            </button>
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



<!--EDITAR-->

<div id="mdlEditar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDITAR PRECIARIO</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>


                        <div class="col-6 col-md-12 hidden">
                            <label for="">ID*</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required disabled="true">
                        </div>

                        <div class="col-6 col-md-12">
                            <label for="">NOMBRE*</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required >
                        </div>


                        <div class="col-md-3">
                            <label for="">FECHA DE CREACION*</label>
                            <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required>
                        </div>  


                        <div class="col-6 col-md-6">
                            <label for="">ESTATUS*</label>
                            <select id="Estatus" name="Estatus" class="form-control" required>
                                <option value=""></option> 
                                <option value="ACTIVO">ACTIVO</option> 
                                <option value="INACTIVO">INACTIVO</option> 
                            </select>
                        </div>

                        <div class="col-6 col-md-6">
                            <label for="">TIPO*</label>
                            <select id="Tipo" name="Tipo" class="form-control" required>
                                <option value=""></option> 
                                <option value="MANTENIMIENTO">MANTENIMIENTO</option> 
                                <option value="OBRA">OBRA</option> 
                            </select>
                        </div>



                        <div class="col-md-6">
                            <label for="">CLIENTE*</label>
                            <select id="Cliente_ID" name="Cliente_ID" class="form-control" required>
                                <option value=""></option> 
                            </select>
                        </div>

                        <div class="col-md-12">
                            <span> <br></span>
                        </div>

                        <div class="col-md-12" align="center">
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaArchivo" name="RutaArchivo" class="hide">
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                SELECCIONAR ARCHIVO 
                            </button>
                        </div>


                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary" id="btnEditar">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlPreciarios/'
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");

    //Variables de controles para subir archivo
    var Archivo = mdlNuevo.find("#RutaArchivo");
    var btnArchivo = mdlNuevo.find("#btnArchivo");
    var VistaPrevia = mdlNuevo.find("#VistaPrevia");

    $(document).ready(function () {
        btnNuevo.click(function () {
            mdlNuevo.modal('show');
        });
        btnEditar.click(function () {
            mdlEditar.modal('show');
        });


        btnArchivo.click(function () {

            Archivo.change(function () {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                console.log(Archivo[0].files[0]);


                HoldOn.close();
            });
            Archivo.trigger('click');
        });

        /*READY*/
        getClientes();

    });

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
                options += '<option value="' + v.ID + '">' + v.CLIENTE + '</option>';
            });
            mdlNuevo.find("#Cliente_ID").html(options);
            mdlEditar.find("#Cliente_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    /*FUNCIONES PARA LEER EL XLS*/
    var tarea = document.getElementById('b64data');
    function b64it() {
        if (typeof console !== 'undefined')
            console.log("onload", new Date());
        var wb = X.read(tarea.value, {type: 'base64', WTF: wtf_mode});
        process_wb(wb);
    }

</script>