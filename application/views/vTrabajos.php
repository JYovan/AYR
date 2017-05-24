
<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default">
        <div class="panel-heading">TRABAJOS</div>
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

<!--Boton para regresar-->
<div class="col-md-12 hide" align="right" id="pnlRegresar">
    <div class="panel-body">
        <button type="button" class="btn btn-default" id="btnRegresar"><span class="fa fa-arrow-left fa-1x"></span><br>REGRESAR</button>   
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




<div class="col-6 col-md-12"> 
    <div class="panel panel-default hide" id="pnlNuevoTrabajo">
        <div class="panel-heading">NUEVO TRABAJO</div>
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

                            <div class="col-6 col-md-6">
                                <label for="">MOVIMIENTO*</label>
                                <select id="Movimiento" name="Movimiento" class="form-control" required>
                                    <option value=""></option> 
                                    <option value="LICITACIÓN">LICITACIÓN</option> 
                                    <option value="COTIZACIÓN">COTIZACIÓN</option> 
                                    <option value="PRESUPUESTO">PRESUPUESTO</option> 
                                    <option value="ESTIMACIÓN">ESTIMACIÓN</option> 
                                </select>
                            </div>



                            <div class=" col-6 col-md-3">
                                <label for="">MOV ID</label>
                                <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" required>
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">FECHA DE CREACION</label>
                                <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 

                            <div class="col-6 col-md-6">
                                <label for="">CLIENTE*</label>
                                <select id="Cliente" name="Cliente" class="form-control" required>
                                    <option value=""></option> 
                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">SUCURSAL*</label>
                                <select id="Sucursal" name="Sucursal" class="form-control" required>
                                    <option value=""></option> 
                                </select>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">PRECIARIO*</label>
                                <select id="Preciario" name="Preciario" class="form-control" required>
                                    <option value=""></option> 
                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">CLASIFICACIÓN</label>
                                <select id="Clasificacion" name="Clasificacion" class="form-control" required>
                                    <option value=""></option>
                                    <option value="CERRAJERÍA">CERRAJERÍA</option> 
                                    <option value="MOBILIARIO">MOBILIARIO</option> 
                                    <option value="INMUEBLE">INMUEBLE</option> 
                                </select>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">ESTA COMPLETADO?</label>
                                <spam><br></spam>
                                <label class="switch">
                                    <input type="checkbox" id="Atendido" name="Atendido" class="form-control">

                                    <div class="slider round"></div>
                                </label>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">CUADRILLA</label>
                                <select id="Cuadrilla" name="Cuadrilla" class="form-control" required>
                                    <option value=""></option>
                                </select>
                            </div>




                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->

                        <div role="tabpanel" class="tab-pane fade" id="Datos2">

                            <div class="col-6 col-md-6">
                                <label for="">FOLIO</label>
                                <input type="text" id="Folio" name="Folio" class="form-control"  placeholder="" required>
                            </div>

                            <div class="col-6 col-md-3">
                                <label for="">Codigo PPTA</label>
                                <select id="CodigoPPTA" name="CodigoPPTA" class="form-control" required>
                                    <option value=""></option>
                                </select>
                            </div>

                            <div class="col-6 col-md-3">
                                <label for="">DIAS</label>
                                <input type="text" id="Dias" name="Dias" class="form-control" readonly="" placeholder="" required>
                            </div>


                            <div class=" col-6 col-md-12">
                                <label for="">SOLICITANTE</label>
                                <input type="text" id="Reporto" name="Reporto" class="form-control"  placeholder="PERSONA QUE SOLICITA EL TRABAJO" required>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">TRABAJO SOLICITADO</label>
                                <textarea class="col-md-12 form-control" id="Asunto" name="Asunto" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">TRABAJO REQUERIDO</label>
                                <textarea class="col-md-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="3" ></textarea>
                            </div>

                            <div class="col-6 col-md-3">
                                <label for="">FECHA ORIGEN</label>
                                <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 
                            <div class="col-6 col-md-3">
                                <label for="">FECHA ATENCIÓN</label>
                                <input type="text" id="FechaAtencion" name="FechaAtencion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 
                            <div class="col-6 col-md-3">
                                <label for="">FECHA VISITA</label>
                                <input type="text" id="FechaLlegada" name="FechaLlegada" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 
                            <div class="col-6 col-md-3">
                                <label for="">FECHA FIN VISITA</label>
                                <input type="text" id="FechaRetirada" name="FechaRetirada" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 




                        </div>


                        <!--PANEL DE OTROS DATOS-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos3">

                            <div class="col-6 col-md-4">
                                <label for="">IMPACTO EN EL PLAZO (SI/NO)</label>
                                <spam><br></spam>
                                <label class="switch">
                                    <input type="checkbox" id="Atendido" name="Atendido" class="form-control">

                                    <div class="slider round"></div>
                                </label>
                            </div>
                            <div class=" col-6 col-md-4">
                                <label for="">DIAS DE IMPACTO</label>
                                <input type="number" id="DiasImpacto" name="DiasImpacto" class="form-control"  placeholder="" required>
                            </div>

                            <div class="col-6 col-md-4">
                                <label for="">CAUSA DEL TRABAJO</label>
                                <select id="Causa" name="Causa" class="form-control" required>
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

                            <div class="col-6 col-md-6">
                                <label for="">CLAVE ORIGEN</label>
                                <select id="Causa" name="Causa" class="form-control" required>
                                    <option value=""></option>
                                    <option value="CONTR">CONTR - CONTRATISTA</option>
                                    <option value="GDP">GDP - GERENCIADORA DE PROYECTOS</option>
                                    <option value="BBVA">CTE - CLIENTE</option>
                                    <option value="OTRO">OTRO - OTRO</option>


                                </select>
                            </div>
                            <div class=" col-6 col-md-6">
                                <label for="">ESPECIFICA ORIGEN</label>
                                <input type="text" id="EspecificaOrigen" name="EspecificaOrigen" class="form-control"  placeholder="" required>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">ORIGEN DEL TRABAJO</label>
                                <textarea class="col-md-12 form-control" id="OrigenTrabajo" name="Asunto" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">RIESGO DEL TRABAJO</label>
                                <textarea class="col-md-12 form-control" id="RiesgoTrabajo" name="RiesgoTrabajo" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-12">
                                <label for="">ALCANCE DEL TRABAJO</label>
                                <textarea class="col-md-12 form-control" id="AlcanceTrabajo" name="AlcanceTrabajo" rows="3" ></textarea>
                            </div>



                        </div>

                        <!--                                PANEL DE ARCHVIO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos4">

                            <div class="col-md-12">
                                <span> <br></span>
                            </div>

                            <div class="col-md-12">
                                <label for="">PUEDE SUBIR UN PDF, EXCEL, IMAGEN (JPG.PNG) O ARCHIVO DE AUTOCAD</label>
                            </div>
                            <div class="col-md-12" align="center">
                                <div id="ArchivoAdjunto" class="col-md-12" align="center"></div>
                                <input type="file" id="Adjunto" name="Adjunto" class="hide">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x">
                                    </span> 
                                    SELECCIONA EL ARCHIVO
                                </button>
                            </div>



                        </div>


                        <div class="col-6 col-md-12">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>
                    </div>


                    <div class="panel-Raiz" align="right" >
                        <button type="button" class="btn btn-default" id="btnCancelar">CANCELAR</button>
                        <button type="button" class="btn btn-primary" id="btnGuardar">GUARDAR</button>
                    </div>



                </fieldset>

            </form>

        </div>
    </div>
</div>


<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog super-fullscreen" role="document">

        <div>




            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">NUEVO TRABAJO</h4>
                </div>
                <form id="frmNuevo">
                    <div class="modal-body">
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

                                    <div class="col-6 col-md-6">
                                        <label for="">MOVIMIENTO*</label>
                                        <select id="Movimiento" name="Movimiento" class="form-control" required>
                                            <option value=""></option> 
                                            <option value="LICITACIÓN">LICITACIÓN</option> 
                                            <option value="COTIZACIÓN">COTIZACIÓN</option> 
                                            <option value="PRESUPUESTO">PRESUPUESTO</option> 
                                            <option value="ESTIMACIÓN">ESTIMACIÓN</option> 
                                        </select>
                                    </div>



                                    <div class=" col-6 col-md-3">
                                        <label for="">MOV ID</label>
                                        <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" required>
                                    </div>


                                    <div class="col-6 col-md-3">
                                        <label for="">FECHA DE CREACION</label>
                                        <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div> 

                                    <div class="col-6 col-md-6">
                                        <label for="">CLIENTE*</label>
                                        <select id="Cliente" name="Cliente" class="form-control" required>
                                            <option value=""></option> 
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6">
                                        <label for="">SUCURSAL*</label>
                                        <select id="Sucursal" name="Sucursal" class="form-control" required>
                                            <option value=""></option> 
                                        </select>
                                    </div>


                                    <div class="col-6 col-md-6">
                                        <label for="">PRECIARIO*</label>
                                        <select id="Preciario" name="Preciario" class="form-control" required>
                                            <option value=""></option> 
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6">
                                        <label for="">CLASIFICACIÓN</label>
                                        <select id="Clasificacion" name="Clasificacion" class="form-control" required>
                                            <option value=""></option>
                                            <option value="CERRAJERÍA">CERRAJERÍA</option> 
                                            <option value="MOBILIARIO">MOBILIARIO</option> 
                                            <option value="INMUEBLE">INMUEBLE</option> 
                                        </select>
                                    </div>


                                    <div class="col-6 col-md-6">
                                        <label for="">ESTA COMPLETADO?</label>
                                        <spam><br></spam>
                                        <label class="switch">
                                            <input type="checkbox" id="Atendido" name="Atendido" class="form-control">

                                            <div class="slider round"></div>
                                        </label>
                                    </div>


                                    <div class="col-6 col-md-6">
                                        <label for="">CUADRILLA</label>
                                        <select id="Cuadrilla" name="Cuadrilla" class="form-control" required>
                                            <option value=""></option>
                                        </select>
                                    </div>




                                </div>
                                <!-- PANEL DE DATOS DEL TRABAJO-->

                                <div role="tabpanel" class="tab-pane fade" id="Datos2">

                                    <div class="col-6 col-md-6">
                                        <label for="">FOLIO</label>
                                        <input type="text" id="Folio" name="Folio" class="form-control"  placeholder="" required>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <label for="">Codigo PPTA</label>
                                        <select id="CodigoPPTA" name="CodigoPPTA" class="form-control" required>
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <label for="">DIAS</label>
                                        <input type="text" id="Dias" name="Dias" class="form-control" readonly="" placeholder="" required>
                                    </div>


                                    <div class=" col-6 col-md-12">
                                        <label for="">SOLICITANTE</label>
                                        <input type="text" id="Reporto" name="Reporto" class="form-control"  placeholder="PERSONA QUE SOLICITA EL TRABAJO" required>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label for="">TRABAJO SOLICITADO</label>
                                        <textarea class="col-md-12 form-control" id="Asunto" name="Asunto" rows="3" ></textarea>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label for="">TRABAJO REQUERIDO</label>
                                        <textarea class="col-md-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="3" ></textarea>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <label for="">FECHA ORIGEN</label>
                                        <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div> 
                                    <div class="col-6 col-md-3">
                                        <label for="">FECHA ATENCIÓN</label>
                                        <input type="text" id="FechaAtencion" name="FechaAtencion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div> 
                                    <div class="col-6 col-md-3">
                                        <label for="">FECHA VISITA</label>
                                        <input type="text" id="FechaLlegada" name="FechaLlegada" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div> 
                                    <div class="col-6 col-md-3">
                                        <label for="">FECHA FIN VISITA</label>
                                        <input type="text" id="FechaRetirada" name="FechaRetirada" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div> 




                                </div>


                                <!--PANEL DE OTROS DATOS-->
                                <div role="tabpanel" class="tab-pane fade" id="Datos3">

                                    <div class="col-6 col-md-4">
                                        <label for="">IMPACTO EN EL PLAZO (SI/NO)</label>
                                        <spam><br></spam>
                                        <label class="switch">
                                            <input type="checkbox" id="Atendido" name="Atendido" class="form-control">

                                            <div class="slider round"></div>
                                        </label>
                                    </div>
                                    <div class=" col-6 col-md-4">
                                        <label for="">DIAS DE IMPACTO</label>
                                        <input type="number" id="DiasImpacto" name="DiasImpacto" class="form-control"  placeholder="" required>
                                    </div>

                                    <div class="col-6 col-md-4">
                                        <label for="">CAUSA DEL TRABAJO</label>
                                        <select id="Causa" name="Causa" class="form-control" required>
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

                                    <div class="col-6 col-md-6">
                                        <label for="">CLAVE ORIGEN</label>
                                        <select id="Causa" name="Causa" class="form-control" required>
                                            <option value=""></option>
                                            <option value="CONTR">CONTR - CONTRATISTA</option>
                                            <option value="GDP">GDP - GERENCIADORA DE PROYECTOS</option>
                                            <option value="BBVA">CTE - CLIENTE</option>
                                            <option value="OTRO">OTRO - OTRO</option>


                                        </select>
                                    </div>
                                    <div class=" col-6 col-md-6">
                                        <label for="">ESPECIFICA ORIGEN</label>
                                        <input type="text" id="EspecificaOrigen" name="EspecificaOrigen" class="form-control"  placeholder="" required>
                                    </div>


                                    <div class="col-6 col-md-6">
                                        <label for="">ORIGEN DEL TRABAJO</label>
                                        <textarea class="col-md-12 form-control" id="OrigenTrabajo" name="Asunto" rows="3" ></textarea>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <label for="">RIESGO DEL TRABAJO</label>
                                        <textarea class="col-md-12 form-control" id="RiesgoTrabajo" name="RiesgoTrabajo" rows="3" ></textarea>
                                    </div>
                                    <div class="col-6 col-md-12">
                                        <label for="">ALCANCE DEL TRABAJO</label>
                                        <textarea class="col-md-12 form-control" id="AlcanceTrabajo" name="AlcanceTrabajo" rows="3" ></textarea>
                                    </div>



                                </div>

                                <!--                                PANEL DE ARCHVIO ADJUNTO-->
                                <div role="tabpanel" class="tab-pane fade" id="Datos4">

                                    <div class="col-md-12">
                                        <span> <br></span>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">PUEDE SUBIR UN PDF, EXCEL, IMAGEN (JPG.PNG) O ARCHIVO DE AUTOCAD</label>
                                    </div>
                                    <div class="col-md-12" align="center">
                                        <div id="ArchivoAdjunto" class="col-md-12" align="center"></div>
                                        <input type="file" id="Adjunto" name="Adjunto" class="hide">
                                        <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                            <span class="fa fa-upload fa-1x">
                                            </span> 
                                            SELECCIONA EL ARCHIVO
                                        </button>
                                    </div>



                                </div>


                                <div class="col-6 col-md-12">
                                    <h6>Los campos con * son obligatorios</h6>    

                                </div>
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


</div>


<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlTrabajos/';
    var btnNuevo = $("#btnNuevo");
    var btnCancelar = $("#btnCancelar");
    var btnRegresar = $("#btnRegresar")


    var mdlNuevo = $("#mdlNuevo");

    var pnlNuevoTrabajo = $("#pnlNuevoTrabajo");
    
     var pnlRegresar = $("#pnlRegresar");
    

    var btnRefrescar = $("#btnRefrescar");

    var menuTablero = $('#MenuTablero');

    $(document).ready(function () {




        btnCancelar.click(function () {

            pnlRegresar.addClass("hide");
            pnlNuevoTrabajo.addClass("hide");
            menuTablero.removeClass("hide");
            

            
        });



        btnRegresar.click(function () {

            pnlNuevoTrabajo.addClass("hide");
            pnlRegresar.addClass("hide");
            menuTablero.removeClass("hide");
            


        });






        btnNuevo.click(function () {

//                mdlNuevo.modal('show');
//                mdlNuevo.find("input").val("");
//                mdlNuevo.find("select").val(null).trigger("change");

            menuTablero.addClass("hide");
            pnlNuevoTrabajo.removeClass("hide");
            pnlRegresar.removeClass("hide");

        });

    });


    $('#Encabezado a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });


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