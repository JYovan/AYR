<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">CLIENTES</div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    
                    
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-pencil fa-1x"></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                    <button type="button" class="btn btn-default" id="btnConfirmarEliminar"><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                    <button type="button" class="btn btn-default" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
              
<!--Sucursales-->
                    <button type="button" class="btn btn-default hide" id="btnVolverAClientes"><span class="fa fa-refresh fa-1x"></span><br>VOLVER A CLIENTES</button>
                    <button type="button" class="btn btn-default hide" id="btnNuevaSucursal"><span class="fa fa-plus fa-1x"></span><br>NUEVA SUCURSAL</button>
                    <button type="button" class="btn btn-default" id="btnVerSucursales"><span class="fa fa-eye fa-1x"></span><br>VER SUCURSALES</button>
                    <button type="button" class="btn btn-default hide" id="btnEditarSucursal"><span class="fa fa-pencil fa-1x"></span><br>EDITAR SUCURSAL</button>
                    <button type="button" class="btn btn-default hide" id="btnEliminarSucursal"><span class="fa fa-trash fa-1x"></span><br>ELIMINAR SUCURSAL</button> 
                
                
                
                </div>

                <div class="col-md-12" align="right">
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
            <h4 class="modal-title">ELIMINAR REGISTRO</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>

</div>

<!--MODALES-->

<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NUEVO CLIENTE</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset> 
                        <div class="col-md-6">
                            <label for="">NOMBRE*</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">CALLE*</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">No EXTERIOR*</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">No INTERIOR*</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CÓDIGO POSTAL*</label>
                            <input type="text" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA*</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD*</label>
                            <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO*</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 1</label>
                            <input type="text" id="Contacto1" name="Contacto1" class="form-control" placeholder="" >
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 2</label>
                            <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="" >
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 3</label>
                            <input type="text" id="Contacto3" name="Contacto3" class="form-control" placeholder="" >
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>
                        <div class="col-md-12" align="center">
                            <br>
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                SELECCIONA LA IMAGEN,LOGO O IDENTIDAD DEL CLIENTE
                            </button>
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
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDITAR CLIENTE</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" >
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE*</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">CALLE*</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">No EXTERIOR*</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">No INTERIOR*</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CÓDIGO POSTAL*</label>
                            <input type="text" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA*</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD*</label>
                            <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO*</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 1</label>
                            <input type="text" id="Contacto1" name="Contacto1" class="form-control" placeholder="" >
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 2</label>
                            <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="" >
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 3</label>
                            <input type="text" id="Contacto3" name="Contacto3" class="form-control" placeholder="" >
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>
                        <div class="col-md-12" align="center">
                            <br>
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                            <br>
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                SELECCIONA LA IMAGEN,LOGO O IDENTIDAD DEL CLIENTE
                            </button>
                            <br>
                        </div>
<<<<<<< HEAD
=======
                       
>>>>>>> origin/master

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

<!--MODAL SUCURSAL-->



<div id="mdlNuevaSucursal" class="modal animated bounceInDown" tabindex="-1" data-focus-on="input:first" style="display: none;">
    <div class="modal-dialog super-fullscreen"> <!--REMOVER EL ROL DE DOCUMENTO PARA ABRIR ESTE MODAL DENTRO DE OTRO-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NUEVA SUCURSAL</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>CLIENTE</h1>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <select id="Cliente_ID" name="Cliente_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>   
                        <div class="col-md-12">
                            <label for="">SUCURSAL*</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="EJ: PLAZA CENTRO SUR" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">CR*</label>
                            <input type="number" id="CR" name="CR" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">CALLE*</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">NO EXTERIOR*</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">NO INTERIOR</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">CÓDIGO POSTAL*</label>
                            <input type="number" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">COLONIA*</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">CIUDAD*</label>
                            <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">ESTADO*</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">REGIÓN*</label>
                            <select id="Region" name="Region" class="form-control">
                                <option value=""></option> 
                                <option value="BAJÍO">BAJÍO</option> 
                                <option value="METROPOLITANA NORTE">METROPOLITANA NORTE</option> 
                                <option value="METROPOLITANA SUR">METROPOLITANA SUR</option> 
                                <option value="NORESTE">NORESTE</option> 
                                <option value="NOROESTE">NOROESTE</option> 
                                <option value="OCCIDENTE">OCCIDENTE</option> 
                                <option value="SUR">SUR</option> 
                                <option value="SURESTE">SURESTE</option> 
                            </select>
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>FIRMAS DE MATENIMIENTO</h1>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaManttoNombres1" name="FirmaManttoNombres1" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaManttoApellidos1" name="FirmaManttoApellidos1" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaManttoPuesto1" name="FirmaManttoPuesto1" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaManttoNombres2" name="FirmaManttoNombres2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaManttoApellidos2" name="FirmaManttoApellidos2" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaManttoPuesto2" name="FirmaManttoPuesto2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaManttoNombres3" name="FirmaManttoNombres3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaManttoApellidos3" name="FirmaManttoApellidos3" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaManttoPuesto3" name="FirmaManttoPuesto3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>INFORMACIÓN DE OBRA</h1>
                            <hr>
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO DE OBRA</label>
                            <select id="TipoObra" name="TipoObra" class="form-control">
                                <option value=""></option> 
                                <option value="REMODELACIÓN">REMODELACIÓN</option> 
                                <option value="ADJUDICACIÓN">ADJUDICACIÓN</option> 
                                <option value="NUEVO PROYECTO">NUEVO PROYECTO</option> 
                                <option value="MANTENIMIENTO">MANTENIMIENTO</option> 
                                <option value="LEVANTAMIENTO DE SITIO">LEVANTAMIENTO DE SITIO</option> 
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO DE CONCEPTO</label>
                            <select id="TipoConcepto" name="TipoConcepto" class="form-control">
                                <option value=""></option> 
                                <option value="ADICIONAL">ADICIONAL</option>  
                                <option value="FUERA DE CATÁLOGO">FUERA DE CATÁLOGO</option>  
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">EMPRESA SUPERVISORA</label>
                            <select id="EmpresaSupervisora_ID" name="EmpresaSupervisora_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">SUPERFICIE</label>
                            <input type="number" id="Superficie" name="Superficie" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-3">
                            <label for="">FECHA DE INICIO</label>
                            <input type="text" id="FechaInicio" name="FechaInicio" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>  
                        <div class="col-md-3">
                            <label for="">FECHA FINAL</label>
                            <input type="text" id="FechaFin" name="FechaFin" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>  
                        <div class="col-md-3">
                            <label for="">DIAS</label>
                            <input type="number" id="Dias" name="Dias" class="form-control" placeholder="EJ: 1" >
                        </div>  
                        <div class="col-md-3">
                            <label for="">NÚMERO DE SEMANAS</label>
                            <input type="number" id="NumeroSemanas" name="NumeroSemanas" class="form-control" placeholder="EJ: 1" >
                        </div>  
                        <div class="col-md-3">
                            <label for="">PROVEEDOR DE ENERGÍA</label>
                            <input type="text" id="FirmaManttoPuesto3" name="FirmaManttoPuesto3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>COORDINADOR</h1>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRES</label>
                            <input type="text" id="Cordinador" name="Cordinador" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-6">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="CordinadorApellidos" name="CordinadorApellidos" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>SUPERVISOR</h1>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRES</label>
                            <input type="text" id="Supervisor" name="Supervisor" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="SupervisorApellidos" name="SupervisorApellidos" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>FIRMAS DE OBRA</h1>
                            <hr>
                        </div>

                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaObraNombres1" name="FirmaObraNombres1" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaObraApellidos1" name="FirmaObraApellidos1" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaNombrePuesto1" name="FirmaNombrePuesto1" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaObraNombres2" name="FirmaObraNombres2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaObraApellidos2" name="FirmaObraApellidos2" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaNombrePuesto2" name="FirmaNombrePuesto2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaObraNombres3" name="FirmaObraNombres3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaObraApellidos3" name="FirmaObraApellidos3" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaNombrePuesto3" name="FirmaNombrePuesto3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>CONTRATO</h1>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">CONTRATO</label>
                            <input type="text" id="Contrato" name="Contrato" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-6">
                            <label for="">CONTRATISTA*</label> 
                            <select id="Empresa_ID" name="Empresa_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>INFORMACIÓN DE CONTACTO</h1>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">CONTACTO 1</label>
                            <input type="text" id="Contacto1" name="Contacto1" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-6">
                            <label for="">CONTACTO 2</label>
                            <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div> 
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" id="btnCancelarSucursal">CANCELAR</button>
                <button type="button" class="btn btn-primary" id="btnGuardarSucursal">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div id="mdlEditarSucursal" class="modal animated bounceInDown" tabindex="-1" data-focus-on="input:first" style="display: none;">
    <div class="modal-dialog super-fullscreen"> <!--REMOVER EL ROL DE DOCUMENTO PARA ABRIR ESTE MODAL DENTRO DE OTRO-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDITAR SUCURSAL</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset> 
                        <div class="col-md-12 hide">
                            <input type="text" class="form-control hide" id="ID" name="ID">
                        </div>
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>CLIENTE</h1>
                            <hr>
                        </div>
                        <div class="col-md-12">
                            <select id="Cliente_ID" name="Cliente_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>   
                        <div class="col-md-12">
                            <label for="">SUCURSAL*</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="EJ: PLAZA CENTRO SUR" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">CR*</label>
                            <input type="number" id="CR" name="CR" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">CALLE*</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">NO EXTERIOR*</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">NO INTERIOR</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">CÓDIGO POSTAL*</label>
                            <input type="number" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">COLONIA*</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">CIUDAD*</label>
                            <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">ESTADO*</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="" required>
                        </div> 
                        <div class="col-md-4">
                            <label for="">REGIÓN*</label>
                            <select id="Region" name="Region" class="form-control">
                                <option value=""></option> 
                                <option value="BAJÍO">BAJÍO</option> 
                                <option value="METROPOLITANA NORTE">METROPOLITANA NORTE</option> 
                                <option value="METROPOLITANA SUR">METROPOLITANA SUR</option> 
                                <option value="NORESTE">NORESTE</option> 
                                <option value="NOROESTE">NOROESTE</option> 
                                <option value="OCCIDENTE">OCCIDENTE</option> 
                                <option value="SUR">SUR</option> 
                                <option value="SURESTE">SURESTE</option> 
                            </select>
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>FIRMAS DE MATENIMIENTO</h1>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaManttoNombres1" name="FirmaManttoNombres1" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaManttoApellidos1" name="FirmaManttoApellidos1" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaManttoPuesto1" name="FirmaManttoPuesto1" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaManttoNombres2" name="FirmaManttoNombres2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaManttoApellidos2" name="FirmaManttoApellidos2" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaManttoPuesto2" name="FirmaManttoPuesto2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaManttoNombres3" name="FirmaManttoNombres3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaManttoApellidos3" name="FirmaManttoApellidos3" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaManttoPuesto3" name="FirmaManttoPuesto3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>INFORMACIÓN DE OBRA</h1>
                            <hr>
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO DE OBRA</label>
                            <select id="TipoObra" name="TipoObra" class="form-control">
                                <option value=""></option> 
                                <option value="REMODELACIÓN">REMODELACIÓN</option> 
                                <option value="ADJUDICACIÓN">ADJUDICACIÓN</option> 
                                <option value="NUEVO PROYECTO">NUEVO PROYECTO</option> 
                                <option value="MANTENIMIENTO">MANTENIMIENTO</option> 
                                <option value="LEVANTAMIENTO DE SITIO">LEVANTAMIENTO DE SITIO</option> 
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">TIPO DE CONCEPTO</label>
                            <select id="TipoConcepto" name="TipoConcepto" class="form-control">
                                <option value=""></option> 
                                <option value="ADICIONAL">ADICIONAL</option>  
                                <option value="FUERA DE CATÁLOGO">FUERA DE CATÁLOGO</option>  
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">EMPRESA SUPERVISORA</label>
                            <select id="EmpresaSupervisora_ID" name="EmpresaSupervisora_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">SUPERFICIE</label>
                            <input type="number" id="Superficie" name="Superficie" class="form-control" placeholder="0">
                        </div>
                        <div class="col-md-3">
                            <label for="">FECHA DE INICIO</label>
                            <input type="text" id="FechaInicio" name="FechaInicio" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>  
                        <div class="col-md-3">
                            <label for="">FECHA FINAL</label>
                            <input type="text" id="FechaFin" name="FechaFin" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                        </div>  
                        <div class="col-md-3">
                            <label for="">DIAS</label>
                            <input type="number" id="Dias" name="Dias" class="form-control" placeholder="EJ: 1" >
                        </div>  
                        <div class="col-md-3">
                            <label for="">NÚMERO DE SEMANAS</label>
                            <input type="number" id="NumeroSemanas" name="NumeroSemanas" class="form-control" placeholder="EJ: 1" >
                        </div>  
                        <div class="col-md-3">
                            <label for="">PROVEEDOR DE ENERGÍA</label>
                            <input type="text" id="FirmaManttoPuesto3" name="FirmaManttoPuesto3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>COORDINADOR</h1>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRES</label>
                            <input type="text" id="Cordinador" name="Cordinador" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-6">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="CordinadorApellidos" name="CordinadorApellidos" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>SUPERVISOR</h1>
                            <hr>
                        </div>
                        <div class="col-md-4">
                            <label for="">NOMBRES</label>
                            <input type="text" id="Supervisor" name="Supervisor" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="SupervisorApellidos" name="SupervisorApellidos" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>FIRMAS DE OBRA</h1>
                            <hr>
                        </div>

                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaObraNombres1" name="FirmaObraNombres1" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaObraApellidos1" name="FirmaObraApellidos1" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaNombrePuesto1" name="FirmaNombrePuesto1" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaObraNombres2" name="FirmaObraNombres2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaObraApellidos2" name="FirmaObraApellidos2" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaNombrePuesto2" name="FirmaNombrePuesto2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">NOMBRE</label>
                            <input type="text" id="FirmaObraNombres3" name="FirmaObraNombres3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-4">
                            <label for="">APELLIDOS</label>
                            <input type="text" id="FirmaObraApellidos3" name="FirmaObraApellidos3" class="form-control" placeholder="" >
                        </div> 

                        <div class="col-md-4">
                            <label for="">PUESTO</label>
                            <input type="text" id="FirmaNombrePuesto3" name="FirmaNombrePuesto3" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>CONTRATO</h1>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">CONTRATO</label>
                            <input type="text" id="Contrato" name="Contrato" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-6">
                            <label for="">CONTRATISTA*</label> 
                            <select id="Empresa_ID" name="Empresa_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div> 
                        <div class="col-md-12" align="center">
                            <hr>
                            <h1>INFORMACIÓN DE CONTACTO</h1>
                            <hr>
                        </div>
                        <div class="col-md-6">
                            <label for="">CONTACTO 1</label>
                            <input type="text" id="Contacto1" name="Contacto1" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-md-6">
                            <label for="">CONTACTO 2</label>
                            <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="" >
                        </div> 
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div> 
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary" id="btnGuardarSucursal">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Confirmacion-->


<div id="mdlEliminarSucursal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">ELIMINAR REGISTRO</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminarSucursal">ACEPTAR</button>
        </div>
    </div>

</div>


<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlClientes/';
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");

    var Archivo = mdlNuevo.find("#RutaLogo");
    var btnArchivo = mdlNuevo.find("#btnArchivo");
    var VistaPrevia = mdlNuevo.find("#VistaPrevia");

    var btnGuardar = mdlNuevo.find("#btnGuardar");

    var ModificarArchivo = mdlEditar.find("#RutaLogo");
    var btnModificarArchivo = mdlEditar.find("#btnArchivo");
    var ModificarVistaPrevia = mdlEditar.find("#VistaPrevia");
    var btnModificar = mdlEditar.find("#btnModificar");

    var btnRefrescar = $("#btnRefrescar");

    var btnEliminar = $("#btnEliminar");

    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");

    var btnNuevaSucursal = $("#btnNuevaSucursal");
    var mdlNuevaSucursal = $("#mdlNuevaSucursal");
    var btnCancelarSucursal = mdlNuevaSucursal.find("#btnCancelarSucursal");
    var btnGuardarSucursal = mdlNuevaSucursal.find("#btnGuardarSucursal");
    var btnEliminarSucursal = $("#btnEliminarSucursal");
    var btnVerSucursales = $("#btnVerSucursales");
    var btnEditarSucursal = $("#btnEditarSucursal");
    var mdlEditarSucursal = $("#mdlEditarSucursal");
    var btnModificarSucursal = mdlEditarSucursal.find("#btnGuardarSucursal");
    var mdlEliminarSucursal = $("#mdlEliminarSucursal");
    var mdlbtnEliminarSucursal = mdlEliminarSucursal.find("#btnEliminarSucursal");
    var btnVolverAClientes = $("#btnVolverAClientes");

    $(document).ready(function () {

        btnVolverAClientes.click(function () {
            btnNuevo.removeClass("hide");
            btnRefrescar.removeClass("hide");
            btnVolverAClientes.addClass("hide");
            btnNuevaSucursal.addClass("hide");
            btnEliminarSucursal.addClass("hide");
            btnVerSucursales.removeClass("hide");
            btnEditar.removeClass("hide");
            btnConfirmarEliminar.removeClass("hide");
            getRecords();
        });

        btnVerSucursales.click(function () {
            if (cliente_id !== 0 && cliente_id !== null) {
                
                btnNuevo.addClass("hide");
                btnRefrescar.addClass("hide");
                btnVolverAClientes.removeClass("hide");
                btnNuevaSucursal.removeClass("hide");
                btnEliminarSucursal.removeClass("hide");
                btnVerSucursales.addClass("hide");
                btnEditar.addClass("hide");
                btnConfirmarEliminar.addClass("hide");
                getSucursalesByClienteID(cliente_id);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN CLIENTE', 'danger');
            }
        });

        mdlbtnEliminarSucursal.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ELIMINANDO..."
            });
            $.ajax({
                url: base_url + 'index.php/CtrlSucursal/onEliminar',
                type: "POST",
                data: {
                    ID: temp
                }
            }).done(function (data, x, jq) {
                console.log(data);
                mdlEliminarSucursal.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'SUCURSAL ELIMINADA', 'danger');
                btnVerSucursales.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnEliminarSucursal.click(function () {
            if (temp !== 0 && temp !== undefined && temp > 0) {
                mdlEliminarSucursal.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnModificarSucursal.click(function () {
            var frm = new FormData(mdlEditarSucursal.find("#frmEditar")[0]);
            $.ajax({
                url: base_url + 'index.php/CtrlSucursal/onModificar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                btnVerSucursales.trigger('click');
                mdlEditarSucursal.modal('hide');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UNA SUCURSAL', 'success');
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnGuardarSucursal.click(function () {
            var frm = new FormData(mdlNuevaSucursal.find("#frmNuevo")[0]);
            $.ajax({
                url: base_url + 'index.php/CtrlSucursal/onAgregar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                btnVerSucursales.trigger('click');
                mdlNuevaSucursal.modal('hide');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UNA NUEVA SUCURSAL', 'success');
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnCancelarSucursal.click(function () {
            mdlNuevaSucursal.modal('hide');
        });

        btnNuevaSucursal.click(function (e) {
            mdlNuevaSucursal.find("#Cliente_ID").select2("val", cliente_id);
            mdlNuevaSucursal.modal('show');
        });

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
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CLIENTE ELIMINADO', 'danger');
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

        btnRefrescar.click(function () {
            btnNuevaSucursal.addClass("hide");
            btnEliminarSucursal.addClass("hide");
            btnEditar.removeClass("hide");
            btnConfirmarEliminar.removeClass("hide");
            getRecords();
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
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UN CLIENTE', 'success');
                getRecords();
                mdlEditar.modal('hide');
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnEditar.click(function () {
            console.log(cliente_id);
            if (cliente_id !== 0 && cliente_id !== undefined && cliente_id > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'getClienteByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: cliente_id
                    }
                }).done(function (data, x, jq) {

                    console.log(data);
                    btnEditar.find("input").val("");
                    var cliente = data[0];
                    mdlEditar.find("#ID").val(cliente.ID);
                    mdlEditar.find("#Nombre").val(cliente.Nombre);
                    mdlEditar.find("#Calle").val(cliente.Calle);
                    mdlEditar.find("#NoExterior").val(cliente.NoExterior);
                    mdlEditar.find("#NoInterior").val(cliente.NoInterior);
                    mdlEditar.find("#CodigoPostal").val(cliente.CodigoPostal);
                    mdlEditar.find("#Colonia").val(cliente.Colonia);
                    mdlEditar.find("#Ciudad").val(cliente.Ciudad);
                    mdlEditar.find("#Estado").val(cliente.Estado);
                    mdlEditar.find("#Contacto1").val(cliente.Contacto1);
                    mdlEditar.find("#Contacto2").val(cliente.Contacto2);
                    mdlEditar.find("#Contacto3").val(cliente.Contacto3);
                    if (cliente.RutaLogo !== null && cliente.RutaLogo !== undefined && cliente.RutaLogo !== '') {
                        var ext = getExt(cliente.RutaLogo);
                        console.log(ext);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            mdlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + cliente.RutaLogo + '" class ="img-responsive"/>');
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            mdlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + cliente.RutaLogo + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                        if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                            mdlEditar.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                        }
                    } else {
                        mdlEditar.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }

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
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO CLIENTE', 'success');
                getRecords();
                mdlNuevo.modal('hide');
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

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
                        var preview = '<img src="' + reader.result + '" class="img-responsive" >\n\
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


        btnModificarArchivo.click(function () {
            ModificarArchivo.change(function () {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                var imageType = /image.*/;
                if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(ModificarArchivo[0].files[0]);
                        var preview = '<img src="' + reader.result + '" class="img-responsive" >\n\
                                    <div class="caption">\n\
                                        <p>' + ModificarArchivo[0].files[0].name + '</p>\n\
                                    </div>';
                        ModificarVistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(ModificarArchivo[0].files[0]);
                } else {
                    if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            ModificarVistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        };
                        readerpdf.readAsDataURL(ModificarArchivo[0].files[0]);
                    } else {
                        ModificarVistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                }
                HoldOn.close();
            });
            ModificarArchivo.trigger('click');
        });

        btnNuevo.click(function () {
            //Limpia los campos
            mdlNuevo.find("input").val("");
            //Muestra el modal
            mdlNuevo.modal('show');
        });
        /*CALLS*/
        getRecords();
        getEmpresasSupervisoras();
    });



    function getRecords() {
        cliente_id = 0;
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
            $("#tblRegistros").html(getTable('tbllClientes', data));
            $('#tbllClientes tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
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
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                cliente_id = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#tbllClientes tbody').on('dblclick', 'tr', function () {
                $("#tbllClientes").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                cliente_id = parseInt(dtm[0]);
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

    var cliente_id = 0;
    function getSucursalesByCliente(IDX) {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: base_url + 'index.php/CtrlSucursal/getSucursalesByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            $("#tblDetalleSucursales").html(getTable('tblDetalleSucursalesModal', data));
            $('#tblDetalleSucursalesModal tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblDetalleSucursalesModal').DataTable(tableOptions);
            $('#tblDetalleSucursalesModal tbody').on('click', 'tr', function () {
                $("#tblDetalleSucursalesModal").find("tr").removeClass("success");
                $("#tblDetalleSucursalesModal").find("tr").removeClass("warning");
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

    function getSucursalesByClienteID(IDX) {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: base_url + 'index.php/CtrlSucursal/getSucursalesByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            $("#tblRegistros").html(getTable('tblSucursales', data));
            $('#tblSucursales tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblSucursales').DataTable(tableOptions);
            $('#tblSucursales tbody').on('click', 'tr', function () {
                $("#tblSucursales").find("tr").removeClass("success");
                $("#tblSucursales").find("tr").removeClass("warning");
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
                getSucursalByID(temp);
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
    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");
    }

    function getContratistas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getContratistas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.CONTRATISTA + '</option>';
            });
            mdlNuevaSucursal.find("#Empresa_ID").html(options);
            mdlEditarSucursal.find("#Empresa_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getEmpresasSupervisoras() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getEmpresasSupervisoras',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.EMPRESA + '</option>';
            });
            mdlNuevaSucursal.find("#EmpresaSupervisora_ID").html(options);
            mdlEditarSucursal.find("#EmpresaSupervisora_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
        getClientes();
        getContratistas();
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
                options += '<option value="' + v.ID + '">' + v.CLIENTE + '</option>';
            });
            mdlNuevaSucursal.find("#Cliente_ID").html(options);
            mdlEditarSucursal.find("#Cliente_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getSucursales() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: base_url + 'index.php/CtrlSucursal/getSucursales',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            $("#tblRegistros").html(getTable('tblSucursales', data));
            $('#tblSucursales tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tblSucursales').DataTable(tableOptions);
            $('#tblSucursales tbody').on('click', 'tr', function () {
                $("#tblSucursales").find("tr").removeClass("success");
                $("#tblSucursales").find("tr").removeClass("warning");
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
            $('#tblSucursales tbody').on('dblclick', 'tr', function () {
                $("#tblSucursales").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm[0]);
                getSucursalByID(temp);
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

    function getSucursalByID(IDX) {

        console.log(IDX);
        if (IDX !== 0 && IDX !== undefined && IDX > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: base_url + 'index.php/CtrlSucursal/getSucursalByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IDX
                }
            }).done(function (data, x, jq) {
                console.log(data);
                mdlEditarSucursal.find("input").val("");
                mdlEditarSucursal.find("select").val("");
                mdlEditarSucursal.find("select").select2("val", "");
                var sucursal = data[0];
                $.each(sucursal, function (k, v) {
                    mdlEditarSucursal.find("#" + k).val(v);
                    mdlEditarSucursal.find("#" + k).select2("val", v);
                });
                mdlEditarSucursal.modal('show');
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
<style>

    .super-fullscreen {
        width: 90% !important; 
        overflow: auto;
    }
    .super-fullscreen {
        width: 90% !important; 
    } 
</style>