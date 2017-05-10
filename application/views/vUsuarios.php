<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">USUARIOS</div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12">
                    <button type="button" class="btn btn-default" id="btnNuevo">NUEVO</button>
                    <button type="button" class="btn btn-default" id="btnEditar">EDITAR</button>
                </div>
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
                            <label for="">Usuario</label>    
                            <input type="text" class="form-control" id="Usuario" name="Usuario" >
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">Contrasena</label>    
                            <input type="text" class="form-control" id="Contrasena" name="Contrasena" >
                        </div>
                        <div class="col-6 col-md-12">
                            <label for="">ESTATUS</label>
                            <select id="Estatus" name="Estatus" class="form-control">
                                <option value=""></option> 
                                <option value="1">ACTIVO</option> 
                                <option value="0">INACTIVO</option> 
                            </select>
                        </div>
                        <div class="col-md-12">
                            <h1>DATOS PERSONALES</h1>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">TIPO DE ACCESO</label>
                            <select id="TipoAcceso" name="TipoAcceso" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">EMPRESA</label>
                            <select id="Empresa_ID" name="Empresa_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">Usuario</label>    
                            <input type="text" class="form-control" id="Usuario" name="Usuario" >
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">Contrasena</label>    
                            <input type="text" class="form-control" id="Contrasena" name="Contrasena" >
                        </div>
                        <div class="col-6 col-md-12">
                            <label for="">ESTATUS</label>
                            <select id="Estatus" name="Estatus" class="form-control">
                                <option value=""></option> 
                                <option value="1">ACTIVO</option> 
                                <option value="0">INACTIVO</option> 
                            </select>
                        </div>
                        <div class="col-md-12">
                            <h1>DATOS PERSONALES</h1>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">TIPO DE ACCESO</label>
                            <select id="TipoAcceso" name="TipoAcceso" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">EMPRESA</label>
                            <select id="Empresa_ID" name="Empresa_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--SCRIPT-->
<script>
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");
    
    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");

    $(document).ready(function () {
        btnNuevo.click(function () {
            mdlNuevo.modal('show');
        });
        btnEditar.click(function () {
            mdlEditar.modal('show');
        });
    });

</script>