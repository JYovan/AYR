<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">EMPRESAS SUPERVISORAS</div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><p>NUEVO</p></button>
                    <button type="button" class="btn btn-default" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><p>EDITAR</p></button>
                    <button type="button" class="btn btn-default" id="btnEliminar"><span class="fa fa-trash fa-1x"></span><p>ELIMINAR</p></button>
                    <button type="button" class="btn btn-default" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><p>ACTUALIZAR</p></button>
                </div>
                
                
                
            </fieldset>
        </div>
    </div>
</div>


<!--MODALES-->

<!--NUEVO-->

<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NUEVA EMPRESA SUPERVISORA</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <h3>DATOS DE LA EMPRESA SUPERVISORA</h3>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">NOMBRE* </label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required="">
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">DESCRIPCIÓN</label>    
                            <input type="text" class="form-control" id="Descripcion" name="Descripcion" >
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">CONTACTO 1</label>
                            <input type="text" id="Contacto" name="Contacto" class="form-control" placeholder="">
                        </div>
                        
                          <div class="col-md-6">
                            <label for="">CONTACTO 2</label>
                            <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="">
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    
                            
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary">GUARDAR</button>
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
                <h4 class="modal-title">EDITAR EMPRESA SUPERVISORA</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <h3>DATOS DE LA EMPRESA SUPERVISORA</h3>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">NOMBRE* </label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required="">
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">DESCRIPCIÓN</label>    
                            <input type="text" class="form-control" id="Descripcion" name="Descripcion" >
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">CONTACTO 1</label>
                            <input type="text" id="Contacto" name="Contacto" class="form-control" placeholder="">
                        </div>
                        
                          <div class="col-md-6">
                            <label for="">CONTACTO 2</label>
                            <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="">
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    
                            
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary">GUARDAR</button>
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