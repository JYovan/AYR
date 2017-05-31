
<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading">
              <div class="cursor-hand" >Trabajos</div>
        
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
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
            <h4 class="modal-title">ELIMINAR REGISTRO</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" >REGRESAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>

</div>


<!--PANEL NUEVO-->
<div class="col-6 col-md-12"> 
    <div class="panel panel-default hide animated slideInRight" id="pnlNuevoTrabajo">

        <div class="panel-heading" >

            <div class="panel-heading row">
                <div class="col-md-8"> 
                    <div class="cursor-hand" >Nuevo Trabajo </div>
                </div> 
                <div class="col-md-4 panel-title" align="right">

                    <button type="button" class="btn btn-raised btn-default" id="btnCancelar">REGRESAR</button>
                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardar">GUARDAR</button>

                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">

                <fieldset>       
                    <div class="col-6 col-md-12">      
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                            <li role="presentation" class="active"><a href="#Datos" aria-controls="Datos" role="tab" data-toggle="tab">Datos Generales</a></li>
                            <li role="presentation"><a href="#Datos2" aria-controls="Datos2" role="tab" data-toggle="tab">Datos del trabajo</a></li>
                            <li role="presentation"><a href="#Datos3" aria-controls="Datos3" role="tab" data-toggle="tab">Otros Datos</a></li>
                            <li role="presentation"><a href="#Datos4" aria-controls="Datos4" role="tab" data-toggle="tab">Adjuntos</a></li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="Datos">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">Movimiento*</label>
                                <select id="Movimiento" name="Movimiento" class="form-control" >
                                    <option value=""></option> 
                                    <option value="LEVANTAMIENTO">LEVANTAMIENTO</option> 
                                    <option value="COTIZACIÓN">COTIZACIÓN</option> 
                                    <option value="PRESUPUESTO">PRESUPUESTO</option> 
                                    <option value="ESTIMACIÓN">ESTIMACIÓN</option> 
                                </select>
                            </div>

                            <div class=" col-6 col-md-3">
                                <label for="">Mov ID</label>
                                <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">Fecha de Creación*</label>
                                <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 

                            <div class="col-6 col-md-6">
                                <label for="">Cliente*</label>
                                <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                    <option value=""></option> 
                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Sucursal*</label>
                                <select id="Sucursal_ID" name="Sucursal_ID" class="form-control" >
                                    <option value=""></option> 
                                </select>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">Preciario*</label>
                                <select id="Preciario_ID" name="Preciario_ID" class="form-control" >
                                    <option value=""></option> 
                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Clasificación</label>
                                <select id="Clasificacion" name="Clasificacion" class="form-control" >
                                    <option value=""></option>
                                    <option value="CERRAJERÍA">CERRAJERÍA</option> 
                                    <option value="MOBILIARIO">MOBILIARIO</option> 
                                    <option value="INMUEBLE">INMUEBLE</option> 
                                </select>
                            </div>


                            <div class="col-6 col-md-3">
                                <div class="togglebutton">
                                    <label for="">Esta completado?</label>
                                    <spam><br></spam>
                                    <spam><br></spam>
                                    <label>
                                        <input type="checkbox" id="Atendido" name="Atendido" > 
                                    </label>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">

                                <label for="">Situación*</label>
                                <select id="Situacion" name="Situacion" class="form-control" >
                                    <option value=""></option>
                                    <option value="PENDIENTE">PENDIENTE</option>
                                    <option value="AUTORIZADO">AUTORIZADO</option>
                                    <option value="SIN AUTORIZAR">SIN AUTORIZAR</option>

                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Cuadrilla</label>
                                <select id="Cuadrilla_ID" name="Cuadrilla_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
                            </div>




                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->

                        <div role="tabpanel" class="tab-pane fade" id="Datos2">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">Folio</label>
                                <input type="text" id="FolioCliente" name="FolioCliente" class="form-control"  placeholder="" >
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Fecha Atención</label>
                                <input type="text" id="FechaAtencion" name="FechaAtencion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Codigo PPTA</label>
                                <select id="Codigoppta_ID" name="Codigoppta_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
                            </div>

                            <div class="col-6 col-md-3">
                                <label for="">Días</label>
                                <input type="text" id="Dias" name="Dias" class="form-control" readonly="" placeholder="" >
                            </div>


                            <div class=" col-6 col-md-12">
                                <label for="">Solicitante</label>
                                <input type="text" id="Solicitante" name="Solicitante" class="form-control"  placeholder="PERSONA QUE SOLICITA EL TRABAJO" >
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">Trabajo Solicitado</label>
                                <textarea class="col-md-12 form-control" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">Trabajo Requerido</label>
                                <textarea class="col-md-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="3" ></textarea>
                            </div>


                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <label for="">Fecha Origen</label>
                                        <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div> 
                                    <div class="col-6 col-md-3">
                                        <label for="">Hora Origen</label>
                                        <input type="text"  class="form-control" name="HoraOrigen" id="HoraOrigen" data-provide="timepicker" data-minute-step="1"/>

                                    </div>
                                </div>
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">Fecha Visita</label>
                                <input type="text" id="FechaLlegada" name="FechaLlegada" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 
                            <div class="col-6 col-md-3">
                                <label for="">Hora Visita</label>
                                <input type="text"  class="form-control" name="HoraLlegada" id="HoraLlegada" data-provide="timepicker" data-minute-step="1"/>

                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Fecha Fin Visita</label>
                                <input type="text" id="FechaSalida" name="FechaSalida" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 
                            <div class="col-6 col-md-3">
                                <label for="">Hora Fin Visita</label>
                                <input type="text"  class="form-control" name="HoraSalida" id="HoraSalida" data-provide="timepicker" data-minute-step="1"   />

                            </div>




                        </div>


                        <!--PANEL DE OTROS DATOS-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos3">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="row ">

                                    <div class="col-6 col-md-3">
                                        <div class="togglebutton">
                                            <label for="">Impacto en el Plazo</label>
                                            <spam><br></spam>
                                            <spam><br></spam>
                                            <label>
                                                <input type="checkbox" id="ImpactoEnPlazo" name="ImpactoEnPlazo" > 
                                            </label>
                                        </div>
                                    </div>

                                    <div class=" col-6 col-md-3">
                                        <label for="">Días de Impacto</label>
                                        <input type="number" id="DiasImpacto" name="DiasImpacto" class="form-control"  placeholder="" >
                                    </div>

                                    <div class="col-6 col-md-6">
                                        <label for="">Causa del trabajo</label>
                                        <select id="CausaTrabajo" name="CausaTrabajo" class="form-control" >
                                            <option value=""></option>
                                            <option value="MP">MP - MEJORAS AL PROYECTO</option>
                                            <option value="EP">EP - ERROR DEL PROYECTO</option>
                                            <option value="OP">OP - OMISIÓN EN EL PROYECTO INICIAL</option>
                                            <option value="RO">RO - REQUERIMIENTOS DE OBRA</option>
                                            <option value="IP">IP - IMPREVISTOS DEL PROYECTO</option>
                                            <option value="COP">COP - CAMBIO DE OBJETIVOS DEL PROYECTO</option> 
                                            <option value="CCE">CCE - CAMBIO CONDICIONES DLE ENTORNO</option>
                                            <option value="CAC">CAC - CAMBIO DE ALCANCE DEL CONTRATISTA</option> 
                                            <option value="ROP">ROP - REQUERIMIENTOS DE ORGANISMOS PÚBLICOS/PRIVADOS</option>
                                            <option value="RPR">RPR - REQUERIMIENTOS DE LA PROPIEDAD</option> 
                                            <option value="OTR">OTR - OTROS</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Clave Origen</label>
                                <select id="ClaveOrigenTrabajo" name="ClaveOrigenTrabajo" class="form-control" >
                                    <option value=""></option>
                                    <option value="CONTR">CONTR - CONTRATISTA</option>
                                    <option value="GDP">GDP - GERENCIADORA DE PROYECTOS</option>
                                    <option value="BBVA">CTE - CLIENTE</option>
                                    <option value="OTRO">OTRO - OTRO</option>


                                </select>
                            </div>
                            <div class=" col-6 col-md-6">
                                <label for="">(En caso de otros) Especifica</label>
                                <input type="text" id="OrigenTrabajo" name="EspecificaOrigenTrabajo" class="form-control"  placeholder="" >
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Origen del Trabajo</label>
                                <textarea class="col-md-12 form-control" id="DescripcionOrigenTrabajo" name="DescripcionOrigenTrabajo" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">Riesgo del Trabajo</label>
                                <textarea class="col-md-12 form-control" id="DescripcionRiesgoTrabajo" name="DescripcionRiesgoTrabajo" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-12">
                                <label for="">Alcance del Trabajo</label>
                                <textarea class="col-md-12 form-control" id="DescripcionAlcanceTrabajo" name="DescripcionAlcanceTrabajo" rows="3" ></textarea>
                            </div>

                        </div>

                        <!--                                PANEL DE ARCHVIO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos4">

                            <div class="col-md-12">
                                <span> <br></span>
                            </div>

                            <div class="col-md-12">
                                <label for="">Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</label>
                            </div>
                            <div class="col-md-12" align="center">
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                                <input type="file" id="Adjunto" name="Adjunto" class="hide">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x">
                                    </span> 
                                    SELECCIONA EL ARCHIVO
                                </button>
                            </div>

                            <div class="col-md-12 hide">
                                <input type="text" id="Usuario_ID"  name="Usuario_ID"    class="form-control" > 
                            </div>

                        </div>

                        <div class="col-md-12">
                            <span> <br></span>
                        </div>
                        <div class="col-md-12">
                            <span> <br></span>
                        </div>

                        <div class="col-6 col-md-3">

                            <label for="">Estatus</label>
                            <input type="text" id="Estatus" name="Estatus" class="form-control"  placeholder="SIN GUARDAR" readonly="">

                        </div>


                        <div class="col-6 col-md-12">
                            <h6>Los campos con * son obligatorios</h6>    
                        </div>
                    </div>
                </fieldset>

            </form>

        </div>
    </div>
</div>



<!--PANEL DETALLE-->
<div class="col-6 col-md-12"> 
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleNuevoTrabajo">

        <div class="panel-heading" >

            <div class="panel-heading row">
                <div class="col-md-8"> 
                    <div class="cursor-hand" >Conceptos </div>
                </div> 

            </div>
        </div>
        <div class="panel-body"> 
        </div>
    </div>

</div>

<!--PANEL EDITAR-->
<div class="col-6 col-md-12"> 
    <div class="panel panel-default hide animated slideInRight" id="pnlEditarTrabajo">

        <div class="panel-heading" >

            <div class="panel-heading row">
                <div class="col-md-8"> 
                    <div class="cursor-hand" >Editar Trabajo </div>
                </div> 
                <div class="col-md-4 panel-title" align="right">

                    <button type="button" class="btn btn-raised btn-default" id="btnCancelarModificar">REGRESAR</button>
                    <button type="button" class="btn btn-raised btn-primary" id="btnModificar">GUARDAR</button>

                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmEditar">

                <fieldset>       
                    <div class="col-6 col-md-12">      
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                            <li role="presentation" class="active"><a href="#EditarDatos" aria-controls="EditarDatos" role="tab" data-toggle="tab">Datos Generales</a></li>
                            <li role="presentation" ><a href="#EditarDatos2" aria-controls="EditarDatos2" role="tab" data-toggle="tab">Datos del trabajo</a></li>
                            <li role="presentation"><a href="#EditarDatos3" aria-controls="EditarDatos3" role="tab" data-toggle="tab">Otros Datos</a></li>
                            <li role="presentation"><a href="#EditarDatos4" aria-controls="EditarDatos4" role="tab" data-toggle="tab">Adjuntos</a></li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="EditarDatos">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">Movimiento*</label>
                                <select id="Movimiento" name="Movimiento" class="form-control" >
                                    <option value=""></option> 
                                    <option value="LEVANTAMIENTO">LEVANTAMIENTO</option> 
                                    <option value="COTIZACIÓN">COTIZACIÓN</option> 
                                    <option value="PRESUPUESTO">PRESUPUESTO</option> 
                                    <option value="ESTIMACIÓN">ESTIMACIÓN</option> 
                                </select>
                            </div>

                            <div class=" col-6 col-md-3">
                                <label for="">Mov ID</label>
                                <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">Fecha de Creación*</label>
                                <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 

                            <div class="col-6 col-md-6">
                                <label for="">Cliente*</label>
                                <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                    <option value=""></option> 
                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Sucursal*</label>
                                <select id="Sucursal_ID" name="Sucursal_ID" class="form-control" >
                                    <option value=""></option> 
                                </select>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">Preciario*</label>
                                <select id="Preciario_ID" name="Preciario_ID" class="form-control" >
                                    <option value=""></option> 
                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Clasificación</label>
                                <select id="Clasificacion" name="Clasificacion" class="form-control" >
                                    <option value=""></option>
                                    <option value="CERRAJERÍA">CERRAJERÍA</option> 
                                    <option value="MOBILIARIO">MOBILIARIO</option> 
                                    <option value="INMUEBLE">INMUEBLE</option> 
                                </select>
                            </div>


                             <div class="col-6 col-md-3">
                                <div class="togglebutton">
                                    <label for="">Esta completado?</label>
                                    <spam><br></spam>
                                    <spam><br></spam>
                                    <label>
                                        <input type="checkbox" id="Atendido" name="Atendido" > 
                                    </label>
                                </div>
                            </div>
                            
                            

                            <div class="col-6 col-md-3">

                                <label for="">Situación*</label>
                                <select id="Situacion" name="Situacion" class="form-control" >
                                    <option value=""></option>
                                    <option value="PENDIENTE">PENDIENTE</option>
                                    <option value="AUTORIZADO">AUTORIZADO</option>
                                    <option value="SIN AUTORIZAR">SIN AUTORIZAR</option>

                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Cuadrilla</label>
                                <select id="Cuadrilla_ID" name="Cuadrilla_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
                            </div>




                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->

                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos2">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">Folio</label>
                                <input type="text" id="FolioCliente" name="FolioCliente" class="form-control"  placeholder="" >
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Fecha Atención</label>
                                <input type="text" id="FechaAtencion" name="FechaAtencion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Codigo PPTA</label>
                                <select id="Codigoppta_ID" name="Codigoppta_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
                            </div>

                            <div class="col-6 col-md-3">
                                <label for="">Días</label>
                                <input type="text" id="Dias" name="Dias" class="form-control" readonly="" placeholder="" >
                            </div>


                            <div class=" col-6 col-md-12">
                                <label for="">Solicitante</label>
                                <input type="text" id="Solicitante" name="Solicitante" class="form-control"  placeholder="PERSONA QUE SOLICITA EL TRABAJO" >
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">Trabajo Solicitado</label>
                                <textarea class="col-md-12 form-control" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">Trabajo Requerido</label>
                                <textarea class="col-md-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="3" ></textarea>
                            </div>


                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <label for="">Fecha Origen</label>
                                        <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div> 
                                    <div class="col-6 col-md-3">
                                        <label for="">Hora Origen</label>
                                        <input type="text"  class="form-control" name="HoraOrigen" id="HoraOrigen" data-provide="timepicker" data-minute-step="1"/>

                                    </div>
                                </div>
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">Fecha Visita</label>
                                <input type="text" id="FechaLlegada" name="FechaLlegada" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 
                            <div class="col-6 col-md-3">
                                <label for="">Hora Visita</label>
                                <input type="text"  class="form-control" name="HoraLlegada" id="HoraLlegada" data-provide="timepicker" data-minute-step="1"/>

                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Fecha FIN Visita</label>
                                <input type="text" id="FechaSalida" name="FechaSalida" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 
                            <div class="col-6 col-md-3">
                                <label for="">Hora FIN Visita</label>
                                <input type="text"  class="form-control" name="HoraSalida" id="HoraSalida" data-provide="timepicker" data-minute-step="1"   />

                            </div>




                        </div>

                        <!--PANEL DE OTROS DATOS-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos3">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <div class="togglebutton">
                                            <label for="">Impacto en el Plazo</label>
                                            <spam><br></spam>
                                            <spam><br></spam>
                                            <label>
                                                <input type="checkbox" id="ImpactoEnPlazo" name="ImpactoEnPlazo" > 
                                            </label>
                                        </div>
                                    </div>
                                    <div class=" col-6 col-md-3">
                                        <label for="">Días de Impacto</label>
                                        <input type="number" id="DiasImpacto" name="DiasImpacto" class="form-control"  placeholder="" >
                                    </div>

                                    <div class="col-6 col-md-6">
                                        <label for="">Causa del trabajo</label>
                                        <select id="CausaTrabajo" name="CausaTrabajo" class="form-control" >
                                            <option value=""></option>
                                            <option value="MP">MP - MEJORAS AL PROYECTO</option>
                                            <option value="EP">EP - ERROR DEL PROYECTO</option>
                                            <option value="OP">OP - OMISIÓN EN EL PROYECTO INICIAL</option>
                                            <option value="RO">RO - REQUERIMIENTOS DE OBRA</option>
                                            <option value="IP">IP - IMPREVISTOS DEL PROYECTO</option>
                                            <option value="COP">COP - CAMBIO DE OBJETIVOS DEL PROYECTO</option> 
                                            <option value="CCE">CCE - CAMBIO CONDICIONES DLE ENTORNO</option>
                                            <option value="CAC">CAC - CAMBIO DE ALCANCE DEL CONTRATISTA</option> 
                                            <option value="ROP">ROP - REQUERIMIENTOS DE ORGANISMOS PÚBLICOS/PRIVADOS</option>
                                            <option value="RPR">RPR - REQUERIMIENTOS DE LA PROPIEDAD</option> 
                                            <option value="OTR">OTR - OTROS</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Clave Origen</label>
                                <select id="ClaveOrigenTrabajo" name="ClaveOrigenTrabajo" class="form-control" >
                                    <option value=""></option>
                                    <option value="CONTR">CONTR - CONTRATISTA</option>
                                    <option value="GDP">GDP - GERENCIADORA DE PROYECTOS</option>
                                    <option value="BBVA">CTE - CLIENTE</option>
                                    <option value="OTRO">OTRO - OTRO</option>


                                </select>
                            </div>
                            <div class=" col-6 col-md-6">
                                <label for="">(En caso de otros) Especifica</label>
                                <input type="text" id="EspecificaOrigenTrabajo" name="EspecificaOrigenTrabajo" class="form-control"  placeholder="" >
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">Origen del Trabajo</label>
                                <textarea class="col-md-12 form-control" id="DescripcionOrigenTrabajo" name="DescripcionOrigenTrabajo" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">Riesgo del Trabajo</label>
                                <textarea class="col-md-12 form-control" id="DescripcionRiesgoTrabajo" name="DescripcionRiesgoTrabajo" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-12">
                                <label for="">Alcance del Trabajo</label>
                                <textarea class="col-md-12 form-control" id="DescripcionAlcanceTrabajo" name="DescripcionAlcanceTrabajo" rows="3" ></textarea>
                            </div>

                        </div>

                        <!--                                PANEL DE ARCHVIO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos4">

                            <div class="col-md-12">
                                <span> <br></span>
                            </div>

                            <div class="col-md-12">
                                <label for="">Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</label>
                            </div>
                            <div class="col-md-12" align="center">
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                                <input type="file" id="Adjunto" name="Adjunto" class="hide">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x">
                                    </span> 
                                    SELECCIONA EL ARCHIVO
                                </button>
                            </div>

                            <div class="col-md-12 hide">
                                <input type="text" id="Usuario_ID"  name="Usuario_ID"    class="form-control" > 
                            </div>

                        </div>

                        <div class="col-md-12">
                            <span> <br></span>
                        </div>
                        <div class="col-md-12">
                            <span> <br></span>
                        </div>

                        <div class="col-6 col-md-3">

                            <label for="">Estatus</label>
                            <input type="text" id="Estatus" name="Estatus" class="form-control"   readonly="">

                        </div>


                        <div class="col-6 col-md-12">
                            <h6>Los campos con * son obligatorios</h6>    
                        </div>
                    </div>
                </fieldset>

            </form>

        </div>
    </div>
</div>



<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlTrabajos/';
    var btnNuevo = $("#btnNuevo");
    var btnRefrescar = $("#btnRefrescar");
    var btnCancelar = $("#btnCancelar");
    var btnCancelarModificar = $("#btnCancelarModificar");
    var btnGuardar = $("#btnGuardar");
    var btnModificar = $("#btnModificar");
    var btnEditar = $("#btnEditar");
    var pnlNuevoTrabajo = $("#pnlNuevoTrabajo");
    var pnlEditarTrabajo = $("#pnlEditarTrabajo");
    var menuTablero = $('#MenuTablero');
    var Archivo = $("#Adjunto");
    var btnArchivo = $("#btnArchivo");
    var VistaPrevia = $("#VistaPrevia");
    var btnEliminar = $("#btnEliminar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");

    /*Detalle*/
    var pnlDetalleNuevoTrabajo = $("#pnlDetalleNuevoTrabajo");

    var currentDate = new Date();

    $(document).ready(function () {

        btnRefrescar.click(function () {
            getRecords();
            getClientes();
            getCodigosPPTA();
            getCuadrillas();

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
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'TRABAJO ELIMINADO', 'danger');
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


        btnEditar.click(function () {



            pnlEditarTrabajo.find(".nav-tabs li").removeClass("active");
            $(pnlEditarTrabajo.find(".nav-tabs li")[0]).addClass("active");


            pnlEditarTrabajo.find("#EditarDatos").addClass("active in");
            pnlEditarTrabajo.find("#EditarDatos2").removeClass("active in");
            pnlEditarTrabajo.find("#EditarDatos3").removeClass("active in");
            pnlEditarTrabajo.find("#EditarDatos4").removeClass("active in");


            if (temp !== 0 && temp !== undefined && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'getTrabajoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {

                    pnlEditarTrabajo.find("input").val("");

                    var trabajo = data[0];

                    $.ajax({
                        url: master_url + 'getSucursalesByCliente',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: trabajo.Cliente_ID
                        }
                    }).done(function (data, x, jq) {


                        var options = '<option></option>';
                        $.each(data, function (k, v) {

                            options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.Sucursal + '</option>';

                        });
                        pnlEditarTrabajo.find("#Sucursal_ID").html(options);
                        pnlEditarTrabajo.find("#Sucursal_ID").select2("val", trabajo.Sucursal_ID);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                    $.ajax({
                        url: master_url + 'getPreciariosByCliente',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            Cliente_ID: trabajo.Cliente_ID
                        }
                    }).done(function (data, x, jq) {


                        var options = '<option></option>';
                        $.each(data, function (k, v) {

                            options += '<option value="' + v.ID + '">' + v.Preciario + '</option>';
                        });
                        pnlEditarTrabajo.find("#Preciario_ID").html(options);
                        pnlEditarTrabajo.find("#Preciario_ID").select2("val", trabajo.Preciario_ID);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });


                    //trae los catalogos
//                    getSucursalesbyCliente(trabajo.Cliente_ID);
//                    getPreciariosbyCliente(trabajo.Cliente_ID);

                    //trae los días
                    getCodigoPPTAbyID(trabajo.Codigoppta_ID);

                    //traer valores seleccionados de los catalogos de la bd
//                    getSucursalByID(trabajo.Sucursal_ID);
//                    getPreciarioByID(trabajo.Preciario_ID);


                    pnlEditarTrabajo.find("#Movimiento").select2("val", trabajo.Movimiento);
                    pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                    pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                    pnlEditarTrabajo.find("#Cliente_ID").select2("val", trabajo.Cliente_ID);

                    pnlEditarTrabajo.find("#Clasificacion").select2("val", trabajo.Clasificacion);
                    if (trabajo.Atendido === 'Si') {
                        pnlEditarTrabajo.find("#Atendido").prop('checked', true);
                    }
                    pnlEditarTrabajo.find("#Cuadrilla_ID").select2("val", trabajo.Cuadrilla_ID);
                    pnlEditarTrabajo.find("#FolioCliente").val(trabajo.FolioCliente);
                    pnlEditarTrabajo.find("#FechaAtencion").val(trabajo.FechaAtencion);
                    pnlEditarTrabajo.find("#Codigoppta_ID").select2("val", trabajo.Codigoppta_ID);
                    pnlEditarTrabajo.find("#Solicitante").val(trabajo.Solicitante);
                    pnlEditarTrabajo.find("#TrabajoSolicitado").val(trabajo.TrabajoSolicitado);
                    pnlEditarTrabajo.find("#TrabajoRequerido").val(trabajo.TrabajoRequerido);
                    pnlEditarTrabajo.find("#FechaOrigen").val(trabajo.FechaOrigen);
                    pnlEditarTrabajo.find("#HoraOrigen").val(trabajo.HoraOrigen);
                    pnlEditarTrabajo.find("#FechaLlegada").val(trabajo.FechaLlegada);
                    pnlEditarTrabajo.find("#HoraLlegada").val(trabajo.HoraLlegada);
                    pnlEditarTrabajo.find("#FechaSalida").val(trabajo.FechaSalida);
                    pnlEditarTrabajo.find("#HoraSalida").val(trabajo.HoraSalida);
                    if (trabajo.ImpactoEnPlazo === 'Si') {
                        pnlEditarTrabajo.find("#ImpactoEnPlazo").prop('checked', true);
                    }
                    pnlEditarTrabajo.find("#DiasImpacto").val(trabajo.DiasImpacto);
                    pnlEditarTrabajo.find("#CausaTrabajo").select2("val", trabajo.CausaTrabajo);
                    pnlEditarTrabajo.find("#ClaveOrigenTrabajo").select2("val", trabajo.ClaveOrigenTrabajo);
                    pnlEditarTrabajo.find("#EspecificaOrigenTrabajo").val(trabajo.EspecificaOrigenTrabajo);
                    pnlEditarTrabajo.find("#DescripcionOrigenTrabajo").val(trabajo.DescripcionOrigenTrabajo);
                    pnlEditarTrabajo.find("#DescripcionRiesgoTrabajo").val(trabajo.DescripcionRiesgoTrabajo);
                    pnlEditarTrabajo.find("#DescripcionAlcanceTrabajo").val(trabajo.DescripcionAlcanceTrabajo);
                    pnlEditarTrabajo.find("#Usuario_ID").val(trabajo.Usuario_ID);
                    pnlEditarTrabajo.find("#Estatus").val(trabajo.Estatus);
                    pnlEditarTrabajo.find("#Situacion").select2("val", trabajo.Situacion);


                    if (trabajo.Adjunto !== null && trabajo.Adjunto !== undefined && trabajo.Adjunto !== '') {
                        var ext = getExt(trabajo.Adjunto);
                        console.log(ext);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            pnlEditarTrabajo.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + trabajo.Adjunto + '" class ="img-responsive"/>');
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            pnlEditarTrabajo.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + trabajo.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                        if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                            pnlEditarTrabajo.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                        }
                    } else {
                        pnlEditarTrabajo.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }


                    menuTablero.addClass("hide");
                    pnlEditarTrabajo.removeClass("hide");

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
                errorClass: 'errorForms',
                rules: {
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    Cliente_ID: 'required',
                    Sucursal_ID: 'required',
                    Preciario_ID: 'required',
                    Situacion: 'required'

                },
                highlight: function (element, errorClass, validClass) {

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

                var frm = new FormData(pnlEditarTrabajo.find("#frmEditar")[0]);

                //  Para los checkbox
                if ($("#Atendido").is(':checked')) {
                    frm.delete('Atendido');
                    frm.append('Atendido', 'Si');
                } else {
                    frm.delete('Atendido');
                    frm.append('Atendido', 'No');
                }

                if ($("#ImpactoEnPlazo").is(':checked')) {
                    frm.delete('ImpactoEnPlazo');
                    frm.append('ImpactoEnPlazo', 'Si');
                } else {
                    frm.delete('ImpactoEnPlazo');
                    frm.append('ImpactoEnPlazo', 'No');
                }

                frm.delete('Dias');

                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO EL TRABAJO', 'success');

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
                errorClass: 'errorForms',
                rules: {
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    Cliente_ID: 'required',
                    Sucursal_ID: 'required',
                    Preciario_ID: 'required',
                    Situacion: 'required'

                },
                highlight: function (element, errorClass, validClass) {

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
            if ($('#frmNuevo').valid()) {
                var frm = new FormData(pnlNuevoTrabajo.find("#frmNuevo")[0]);
//                Para los checkbox
                if ($("#Atendido").is(':checked')) {
                    frm.delete('Atendido');
                    frm.append('Atendido', 'Si');
                } else {
                    frm.delete('Atendido');
                    frm.append('Atendido', 'No');
                }

                if ($("#ImpactoEnPlazo").is(':checked')) {
                    frm.delete('ImpactoEnPlazo');
                    frm.append('ImpactoEnPlazo', 'Si');
                } else {
                    frm.delete('ImpactoEnPlazo');
                    frm.append('ImpactoEnPlazo', 'No');
                }
                frm.append('Estatus', 'ACTIVO');
                frm.delete('Dias');

                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO TRABAJO', 'success');

                    btnRefrescar.trigger('click');
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });

        btnCancelar.click(function () {

            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevoTrabajo.addClass("hide");
            //Detalle
            pnlDetalleNuevoTrabajo.addClass("hide");
            //  menuTablero.removeClass("hide");
            btnRefrescar.trigger('click');

        });

        btnCancelarModificar.click(function () {


            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarTrabajo.addClass("hide");
            //  menuTablero.removeClass("hide");
            btnRefrescar.trigger('click');
        });

        btnNuevo.click(function () {

            pnlNuevoTrabajo.find(".nav-tabs li").removeClass("active");
            $(pnlNuevoTrabajo.find(".nav-tabs li")[0]).addClass("active");


            pnlNuevoTrabajo.find("#Datos").addClass("active in");
            pnlNuevoTrabajo.find("#Datos2").removeClass("active in");
            pnlNuevoTrabajo.find("#Datos3").removeClass("active in");
            pnlNuevoTrabajo.find("#Datos4").removeClass("active in");

            menuTablero.addClass("hide");
            pnlNuevoTrabajo.removeClass("hide");
            pnlNuevoTrabajo.find("input").val("");
            pnlNuevoTrabajo.find("select").val(null).trigger("change");


            pnlNuevoTrabajo.find("#FechaCreacion").datepicker("setDate", currentDate);
            //Trae el usuario logeado quien estará registrando el movimiento
            pnlNuevoTrabajo.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");

            /*DETALLE*/
            pnlDetalleNuevoTrabajo.removeClass("hide");


        });

        /*Funcion que trae los catalogos en base al cliente*/
        pnlNuevoTrabajo.find("#Cliente_ID").change(function () {
            pnlNuevoTrabajo.find("#Sucursal_ID").val(null).trigger("change");
            pnlNuevoTrabajo.find("#Preciario_ID").val(null).trigger("change");
            getSucursalesbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
            getPreciariosbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());


        });

        /*Funcion que trae los catalogos en base al cliente*/
        pnlEditarTrabajo.find("#Cliente_ID").change(function () {
            pnlEditarTrabajo.find("#Sucursal_ID").val(null).trigger("change");
            pnlEditarTrabajo.find("#Preciario_ID").val(null).trigger("change");
            getSucursalesbyCliente(pnlEditarTrabajo.find("#Cliente_ID").val(), $(this).val());
            getPreciariosbyCliente(pnlEditarTrabajo.find("#Cliente_ID").val(), $(this).val());


        });

        //Trae dias de ppta
        pnlNuevoTrabajo.find("#Codigoppta_ID").change(function () {
            getCodigoPPTAbyID(pnlNuevoTrabajo.find("#Codigoppta_ID").val(), $(this).val());
        });


        //Trae dias de ppta
        pnlEditarTrabajo.find("#Codigoppta_ID").change(function () {
            getCodigoPPTAbyID(pnlEditarTrabajo.find("#Codigoppta_ID").val(), $(this).val());
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

        getClientes();
        getCodigosPPTA();
        getRecords();
        getCuadrillas();

    });

    /*----------------------------METODOS DEL CONTROLADOR PARA TRAER DATOS----------------*/

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
            $("#tblRegistros").html(getTable('tblTrabajos', data));
            $('#tblTrabajos tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" style="width: 100%;"/></div>');

            });
            var tblSelected = $('#tblTrabajos').DataTable(tableOptions);
            $('#tblTrabajos tbody').on('click', 'tr', function () {
                $("#tblTrabajos").find("tr").removeClass("success");
                $("#tblTrabajos").find("tr").removeClass("warning");
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
            $('#tblTrabajos tbody').on('dblclick', 'tr', function () {
                $("#tblTrabajos").find("tr").removeClass("warning");
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

    $('#Encabezado a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

    /*Traer catálogos para el encabezado*/
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
            pnlNuevoTrabajo.find("#Cliente_ID").html(options);
            pnlEditarTrabajo.find("#Cliente_ID").html(options);
            //  pnlNuevoTrabajo.find("#Cliente_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getSucursalesbyCliente(IDX) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getSucursalesByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {


            var options = '<option></option>';
            $.each(data, function (k, v) {

                options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.SUCURSAL + '</option>';

            });


            pnlNuevoTrabajo.find("#Sucursal_ID").html(options);
            pnlEditarTrabajo.find("#Sucursal_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getPreciariosbyCliente(Cliente_ID) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getPreciariosByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                Cliente_ID: Cliente_ID
            }
        }).done(function (data, x, jq) {


            var options = '<option></option>';
            $.each(data, function (k, v) {

                options += '<option value="' + v.ID + '">' + v.PRECIARIO + '</option>';
            });
            pnlNuevoTrabajo.find("#Preciario_ID").html(options);
            pnlEditarTrabajo.find("#Preciario_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getSucursalByID(IDX) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getSucursalByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {

            pnlEditarTrabajo.find("#Sucursal_ID").select2("val", data[0].ID);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getPreciarioByID(IDX) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getPreciarioByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {

            pnlEditarTrabajo.find("#Preciario_ID").select2("val", data[0].ID);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getCodigosPPTA() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getCodigosPPTA',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Código + '</option>';
            });

            pnlNuevoTrabajo.find("#Codigoppta_ID").html(options);
            pnlEditarTrabajo.find("#Codigoppta_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getCuadrillas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getCuadrillas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);

            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Cuadrilla + '</option>';
            });

            pnlNuevoTrabajo.find("#Cuadrilla_ID").html(options);
            pnlEditarTrabajo.find("#Cuadrilla_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getCodigoPPTAbyID(CodigoID) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getCodigoPPTAbyID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: CodigoID
            }
        }).done(function (data, x, jq) {
            if (data[0] !== undefined) {
                var codigoppta = data[0];
                pnlNuevoTrabajo.find("#Dias").val(codigoppta.Dias);
                pnlEditarTrabajo.find("#Dias").val(codigoppta.Dias);
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");
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