<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">EMPRESAS</div>
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

<!--NUEVO-->

<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NUEVA EMPRESA</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <h1>DATOS DE LA EMPRESA</h1>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">NOMBRE</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" >
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">RFC</label>    
                            <input type="text" class="form-control" id="Contrasena" name="Rfc" >
                        </div>
                        

                     
                        <div class="col-md-12">
                            <h1>INFORMACIÓN DE CONTACTO</h1>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="">
                        </div>
                        
                        <div class="col-md-12">
                            <h1>DATOS DE LA EMPRESA</h1>
                        </div>
                       
                        <div class="col-md-6">
                            <label for="">DIRECCION</label>
                            <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="">
                      
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">N°</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="">
                      
                        </div>
                        <div class="col-md-6">
                            <label for="">N° INT</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="">
                      
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">CÓDIGO POSTAL</label>
                            <input type="text" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="">
                        </div>
                        
                        
                         <div class="col-md-6">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="">
                        </div>
                        
                        
                        <div class="col-md-6">
                            <label for="">CIUDAD</label>
                            <input type="text" id="Ciudad" name="Colonia" class="form-control" placeholder="">
                        </div>
                        
                          <div class="col-md-6">
                            <label for="">ESTADO</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="">
                        </div>
                        
                        
                        <div class="col-md-12">
                              <span> <br></span>
                        </div>
                        
                        <div class="col-md-12" align="center">
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                SELECCIONA EL LOGO DE LA EMPRESA
                            </button>
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
                <h4 class="modal-title">EDITAR EMPRESA</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12">
                            <h1>DATOS DE LA EMPRESA</h1>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">NOMBRE</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" >
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">RFC</label>    
                            <input type="text" class="form-control" id="Contrasena" name="Rfc" >
                        </div>
                        
                   
                        <div class="col-md-12">
                            <h1>INFORMACIÓN DE CONTACTO</h1>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="">
                        </div>
                        
                        <div class="col-md-12">
                            <h1>DATOS DE LA EMPRESA</h1>
                        </div>
                       
                        <div class="col-md-6">
                            <label for="">DIRECCION</label>
                            <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="">
                      
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">N°</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="">
                      
                        </div>
                        <div class="col-md-6">
                            <label for="">N° INT</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="">
                      
                        </div>
                        
                        <div class="col-md-6">
                            <label for="">CÓDIGO POSTAL</label>
                            <input type="text" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="">
                        </div>
                        
                        
                         <div class="col-md-6">
                            <label for="">COLONIA</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="">
                        </div>
                        
                        
                        <div class="col-md-6">
                            <label for="">CIUDAD</label>
                            <input type="text" id="Ciudad" name="Colonia" class="form-control" placeholder="">
                        </div>
                        
                          <div class="col-md-6">
                            <label for="">ESTADO</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="">
                        </div>
                        
                        
                        <div class="col-md-12">
                              <span> <br></span>
                        </div>
                        
                        <div class="col-md-12" align="center">
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                MODIFICAR EL LOGO DE LA EMPRESA
                            </button>
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

    var Archivo = mdlNuevo.find("#Archivo");
    var btnArchivo = mdlNuevo.find("#btnArchivo");
    var VistaPrevia = mdlNuevo.find("#VistaPrevia");

    $(document).ready(function () {

        btnArchivo.click(function () {
            Archivo.change(function () {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                var imageType = /image.*/;
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(Archivo[0].files[0]);
                        var preview = '<img src="' + reader.result + '" width="192" height="192" >\n\
                                    <div class="caption">\n\
                                        <p>' + Archivo[0].files[0].name + '</p>\n\
                                    </div>';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(Archivo[0].files[0]);
                } else {
                    if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        };
                        readerpdf.readAsDataURL(Archivo[0].files[0]);
                    } else {
                        VistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                }
                HoldOn.close();
            });
            Archivo.trigger('click');
        });

        btnNuevo.click(function () {
            mdlNuevo.modal('show');
        });
        btnEditar.click(function () {
            mdlEditar.modal('show');
        });
    });

</script>