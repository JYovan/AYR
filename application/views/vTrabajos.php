<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading"><div class="cursor-hand" >Trabajos</div></div>
        <fieldset><div class="col-md-12 dt-buttons" align="right">
                <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                <button type="button" class="btn btn-default hide" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
            </div><div class="col-md-12" id="tblRegistros"></div>
        </fieldset>
    </div>
</div>
<!--Reportes-->
<div id="mdlReportesEditarTrabajo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Imprimir Reportes</h4>
        </div>
        <div class="modal-body">Selecciona el reporte que deseas imprimir
            <div class="col-md-12"><br></div>
            <div id="reportesLevantamiento" class="dt-buttons">
                <button onclick="onReporteLevantamientoAntes();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS ANTES</button>
                <button onclick="onReporteLevantamientoProceso();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS PROCESO</button>
                <button onclick="onReporteLevantamientoDespues();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS DESPUÉS</button>
                <button onclick="onReporteLevantamientoCompleto()" class="btn btn-default"><span class="fa fa-image fa-1x"></span><br>GENERAL</button>
            </div>
            <div id="reportesPresupuesto" class="dt-buttons">
                <div class="col-6 col-md-12">
                    <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                        <li role="presentation" class="active"><a href="#Generales" aria-controls="Generales" role="tab" data-toggle="tab">Generales</a></li>
                        <li role="presentation"><a href="#Obras" aria-controls="Obras" role="tab" data-toggle="tab">Obras</a></li>
                        <li role="presentation"><a href="#Mantenimientos" aria-controls="Mantenimientos" role="tab" data-toggle="tab">Mantenimiento</a></li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Generales">
                        <button onclick="onReporteGenerador()" class="btn btn-default"><span class="fa fa-calculator fa-1x"></span><br>GENERADOR</button>
                        <button onclick="onReporteCroquis()" class="btn btn-default"><span class="fa fa-crop fa-1x"></span><br>CROQUIS</button>
                        <button onclick="onReporteFotografico()" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade " id="Obras">
                        <button onclick="onReporteFin49()" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>FIN 49 POC</button>
                        <button onclick="onReporteFin49Conceptos()" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>FIN 49 O.C</button>
                        <button onclick="onReportePresupuestoBBVA()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>PRESUPUESTO BBVA</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Mantenimientos">
                        <button onclick="onReporteResumenPartidas()" class="btn btn-default"><span class="fa fa-list-ol fa-1x"></span><br>RESUMEN DE PARTIDAS</button>
                        <button onclick="onReportePresupuesto()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>PRESUPUESTO A&R</button>
                        <button onclick="onReporteExcelTarifarioXMov()" class="btn btn-default"><span class="fa fa-download fa-1x"></span><br>TARIFARIO</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Confirmacion-->
<div id="mdlConfirmar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">Deseas eliminar el registro?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>
</div>
<!--Confirmacion Eliminar Concepto-->
<div id="mdlConfirmarEliminarConcepto" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">Deseas eliminar el registro?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminarConcepto">ACEPTAR</button>
        </div>
    </div>
</div>
<!--Confirmacion-->
<div id="mdlConfirmarEliminarConceptoAbierto" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">Deseas eliminar el registro?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminarConceptoAbierto">ACEPTAR</button>
        </div>
    </div>
</div>
<!--PANEL NUEVO-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlNuevoTrabajo">
        <div class="Custompanel-heading dt-EncabezadoControles" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>Nuevo Trabajo</div>
                <div class="input-group pull-right" align="center">
                    <span class="dt-EncabezadoControles">
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copiar Movimiento (Debe guardar el movimiento)">
                            <span class="fa fa-clone" ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes (Debe guardar el movimiento)" >
                            <span class="fa fa-print " ></span>
                        </button>
                    </span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="label label-default spanEstatus">SIN GUARDAR</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class=""> </span>
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" disabled="" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <span class="togglebutton customLabelToggle" >
                        <label><input type="checkbox" id="Concluir" name="Concluir" >Concluir</label>
                    </span>
                    <span>&nbsp;&nbsp;</span>
                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardar" >GUARDAR</button>
                    <span>&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <fieldset>
                    <div class="col-6 col-md-12">
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
                            <div class="col-6 col-md-12"><br></div>
                            <div class="col-6 col-md-3">
                                <label for="">Etapa*</label>
                                <select id="Movimiento" name="Movimiento" class="form-control" >
                                    <option value=""></option>
                                    <option value="LEVANTAMIENTO">LEVANTAMIENTO</option>
                                    <option value="PRESUPUESTO">PRESUPUESTO</option>
                                </select>
                            </div>
                            <div class=" col-3 col-md-3">
                                <label for="">Mov ID</label>
                                <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Fecha de Creación*</label>
                                <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
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
                            <div class="col-6 col-md-3">
                                <label for="">Clasificación</label>
                                <select id="Clasificacion" name="Clasificacion" class="form-control" >
                                    <option value=""></option>
                                    <option value="CERRAJERÍA">CERRAJERÍA</option>
                                    <option value="MOBILIARIO">MOBILIARIO</option>
                                    <option value="INMUEBLE">INMUEBLE</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Centro de Costos</label>
                                <select id="CentroCostos_ID" name="CentroCostos_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Folio Cliente</label>
                                <input type="text" id="FolioCliente" name="FolioCliente" class="form-control"  placeholder="" >
                            </div>
                            <input type="text" id="Atendido" name="Atendido" class="form-control hide" readonly="" placeholder="" >
                            <div class="col-6 col-md-3">
                                <div class="togglebutton"><label for="">Esta Completado?</label>
                                    <spam><br></spam><spam><br></spam>
                                    <label><input type="checkbox" id="NuevoAtendido" name="NuevoAtendido" ></label>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">Observaciones</label>
                                <input type="text" id="Observaciones" name="Observaciones" class="form-control"  placeholder="ALGUNA REFERENCIA, MINUTA, ETC" >
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos2">
                            <div class="col-6 col-md-12"><br></div>
                            <div class="col-6 col-md-3">
                                <label for="">Cuadrilla</label>
                                <select id="Cuadrilla_ID" name="Cuadrilla_ID" class="form-control" ><option value=""></option>
                                </select>
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
                                <input type="text" id="Dias" name="" class="form-control" readonly="" placeholder="" >
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
                            <div class="col-6 col-md-12"><br></div>
                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <input type="text" id="ImpactoEnPlazo" name="ImpactoEnPlazo" class="form-control hide" readonly="" placeholder="" >
                                    <div class="col-6 col-md-3">
                                        <div class="togglebutton">
                                            <label for="">Impacto en el Plazo</label><spam><br></spam><spam><br></spam>
                                            <label><input type="checkbox" id="NuevoImpactoEnPlazo" name="NuevoImpactoEnPlazo" >
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
                        <!-- PANEL DE ARCHVIO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos4">
                            <div class="col-md-12 "><span> <br></span></div>
                            <div class="col-md-12">
                                <label for="">Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</label>
                            </div>
                            <div class="col-md-12" align="center">
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                                <input type="file" id="Adjunto" name="Adjunto" class="hide">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x"></span>SELECCIONA EL ARCHIVO
                                </button>
                            </div>
                            <div class="col-md-12 hide">
                                <input type="text" id="Usuario_ID"  name="Usuario_ID"    class="form-control" >
                            </div>
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
<!--PANEL NUEVO DETALLE-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleNuevoTrabajo">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-5">
                    <div class="cursor-hand" >Conceptos Presupuesto</div>
                </div>
                <div id="ImporteTotal" class="col-md-7" align="right">
                    <span class="text-success spanTotalesDetalle">$ 0.0</span>
                </div>
            </div>
        </div>
        <fieldset>
            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
            </div>
            <div class="col-md-12 table-responsive" id="Conceptos" ></div>
        </fieldset>
    </div>
</div>
<!--PANEL NUEVO DETALLE ABIERTO-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleNuevoTrabajoAbierto">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-6"><div class="cursor-hand" >Conceptos Levantamiento</div>
                </div>
            </div>
        </div>
        <fieldset>
            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-default" id="btnNuevoConceptoAbierto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
            </div>
        </fieldset>
    </div>
</div>
<!--PANEL EDITAR-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlEditarTrabajo">
        <div class="Custompanel-heading dt-EncabezadoControles" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelarModificar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Editar Trabajo
                </div>
                <div class="input-group pull-right" align="center">
                    <span class="dt-EncabezadoControles">
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copiar Movimiento">
                            <span class="fa fa-clone" ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnImprimirReportesEditarTrabajo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes" >
                            <span class="fa fa-print " ></span>
                        </button>
                    </span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="label label-default spanEditarEstatus">SIN GUARDAR</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class=""> </span>
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" id="btnConfirmarEliminar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <span class="togglebutton customLabelToggle" >
                        <label><input type="checkbox" id="Concluir" name="Concluir" >Concluir</label>
                    </span>
                    <span>&nbsp;&nbsp;</span>
                    <button type="button" class="btn btn-raised btn-primary" id="btnModificarTrabajo" >GUARDAR</button>
                    <span>&nbsp;&nbsp;&nbsp;</span>
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
                    <div class="tab-content">
                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="EditarDatos">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Etapa*</label>
                                <select id="Movimiento" name="Movimiento" class="form-control" >
                                    <option value=""></option>
                                    <option value="LEVANTAMIENTO">LEVANTAMIENTO</option>
                                    <option value="PRESUPUESTO">PRESUPUESTO</option>
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
                            <div class="col-6 col-md-3">
                                <label for="">Clasificación</label>
                                <select id="Clasificacion" name="Clasificacion" class="form-control" >
                                    <option value=""></option>
                                    <option value="CERRAJERÍA">CERRAJERÍA</option>
                                    <option value="MOBILIARIO">MOBILIARIO</option>
                                    <option value="INMUEBLE">INMUEBLE</option>
                                </select>
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Centro de Costos</label>
                                <select id="CentroCostos_ID" name="CentroCostos_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Folio Cliente</label>
                                <input type="text" id="FolioCliente" name="FolioCliente" class="form-control"  placeholder="" >
                            </div>
                            <input type="text" id="Atendido" name="Atendido" class="form-control hide" readonly="" placeholder="" >
                            <div class="col-6 col-md-3">
                                <div class="togglebutton">
                                    <label for="">Esta completado?</label>
                                    <spam><br></spam>
                                    <spam><br></spam>
                                    <label>
                                        <input type="checkbox" id="EditarAtendido" name="" >
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">Observaciones</label>
                                <input type="text" id="Observaciones" name="Observaciones" class="form-control"  placeholder="ALGUNA REFERENCIA, MINUTA, ETC" >
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos2">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Cuadrilla</label>
                                <select id="Cuadrilla_ID" name="Cuadrilla_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
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
                                <input type="text" id="Dias" name="" class="form-control" readonly="" placeholder="" >
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
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos3">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>
                            <input type="text" id="ImpactoEnPlazo" name="ImpactoEnPlazo" class="form-control hide" readonly="" placeholder="" >
                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <div class="togglebutton">
                                            <label for="">Impacto en el Plazo</label>
                                            <spam><br></spam><spam><br></spam>
                                            <label><input type="checkbox" id="EditarImpactoEnPlazo" name="" ></label>
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
                        <!--PANEL DE ARCHVIO ADJUNTO-->
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
                        <div class="col-6 col-md-12">
                            <h6>Los campos con * son obligatorios</h6>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--PANEL EDITAR DETALLE-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleEditarTrabajo">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-6"><div class="cursor-hand" >Conceptos Presupuesto</div></div>
                <div id="ImporteTotal" class="col-md-6" align="right"><h4 class="text-success">$ 0.0</h4></div>
            </div>
        </div>
        <fieldset>
            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
            </div>
            <div class="col-md-12 table-responsive " id="Conceptos" ></div>
        </fieldset>
    </div>
</div>
<!--PANEL EDITAR DETALLE ABIERTO -->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleEditarTrabajoAbierto">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-6"><div class="cursor-hand" >Conceptos Levantamiento</div></div>
            </div>
        </div>
        <fieldset>
            <div class="col-md-12" align="right">
                <button type="button" class="btn btn-default" id="btnNuevoConceptoAbiertoEditar"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
            </div>
            <div class="col-md-12 table-responsive " id="ConceptosAbierto" ></div>
        </fieldset>
    </div>
</div>
<!--MODAL AGREGAR CONCEPTO ABIERTO-->
<div id="mdlAgregarConceptoAbierto" class="modal modalFull fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull  modal-content  modal-contentFull  modal-lg">
        <div class="modal-header modal-headerFull">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal-titleFull">Agregar Concepto</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmAgregarConceptoDetalleAbierto">
                <fieldset>
                    <div class=" hide"><input type="text" id="ID" name="ID" class="form-control"></div>
                    <div class="col-md-3">
                        <label for="">Clave*</label>
                        <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                    </div>
                    <div class="col-md-12">
                        <label for="">Descripción*</label>
                        <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                    </div>
                    <div class="col-6 col-md-6"><h6>Los campos con * son obligatorios</h6></div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer modal-footerFull">
            <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnAgregarConceptoAbierto" name="btnAgregarConceptoAbierto">GUARDAR</button>
        </div>
    </div>
</div>
<!--MODAL EDITAR CONCEPTO ABIERTO-->
<div id="mdlEditarConceptoAbierto" class="modal modalFull fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull modal-content modal-contentFull modal-lg">
        <div class="modal-header modal-headerFull">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal-titleFull">Editar Concepto</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmEditarConceptoDetalleAbierto">
                <fieldset>
                    <div class=" hide">
                        <input type="text" id="ID" name="ID" class="form-control">
                        <input type="text" id="Trabajo_ID" name="Trabajo_ID" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="">Clave*</label>
                        <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                    </div>
                    <div class="col-md-12">
                        <label for="">Descripción*</label>
                        <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20">
                        </textarea>
                    </div>
                    <div class="col-6 col-md-6"><h6>Los campos con * son obligatorios</h6></div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer modal-footerFull"><!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEditarConceptoAbierto" name="btnEditarConceptoAbierto">MODIFICAR</button>
        </div>
    </div>
</div>
<!--MODAL DETALLE - EDITAR GENERADOR POR CONCEPTO-->
<div id="mdlTrabajoEditarGeneradorPorConcepto" class="modal modalFull animated bounceInDown ">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Generador</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <ul class="nav nav-tabs" style="">
                    <li class="active"><a href="#EditarGeneradores" data-toggle="tab">Generador</a></li>
                    <li><a href="#EditarGenerador" data-toggle="tab">Agregar</a></li>
                </ul>
                <div id="pnlGenerador" class="tab-content">
                    <div class="tab-pane fade active in" id="EditarGeneradores">
                        <fieldset>
                            <div class="col-md-12" id="tblEditarGeneradorXConcepto"></div>
                            <div id="GeneradorImporteTotal" class="col-md-12" align="right">
                                <span class="text-success spanTotalesDetalle">0.0</span>
                            </div>
                        </fieldset>
                    </div>
                    <div class="tab-pane fade" id="EditarGenerador">
                        <div class="col-md-12 hide">
                            <input type="text" id="IDT" name="IDT" class="form-control ">
                            <input type="text" id="IDG" name="IDG" class="form-control">
                            <input type="text" id="Concepto_ID" name="Concepto_ID" class="form-control ">
                            <input type="text" id="IdTrabajoDetalle" name="IdTrabajoDetalle" class="form-control ">
                            <input type="text" id="Precio" name="Precio" class="form-control">
                        </div>
                        <div class="col-md-12"><br></div>
                        <div class="col-md-5">
                            <label for="">Area</label>
                            <input type="text" id="Area" name="Area" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">Eje</label>
                            <input type="text" id="Eje" name="Eje" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="">Entre Eje 1</label>
                            <input type="text" id="EntreEje1" name="EntreEje1" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="">Entre Eje 2</label>
                            <input type="text" id="EntreEje2" name="EntreEje2" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="">Largo</label>
                            <input type="number" id="Largo" min="0" name="Largo" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="">Ancho</label>
                            <input type="number" id="Ancho" min="0" name="Ancho" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="">Alto</label>
                            <input type="number" id="Alto" min="0" name="Alto" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label for="">Cantidad</label>
                            <input type="number" id="Cantidad" min="0" name="Cantidad" class="form-control">
                        </div>
                        <div class="modal-footer modal-footerFull">
                            <button type="button" class="btn btn-raised btn-primary hide" id="btnModificar" onclick="">MODIFICAR</button>
                            <button type="button" class="btn btn-raised btn-default hide" id="btnCancelar" onclick="onCancelarEditarModificarGeneradorXID(this);">CANCELAR</button>
                            <button type="button" class="btn btn-raised btn-primary " id="btnGuardar">GUARDAR</button>
                            <button type="button" class="btn btn-raised btn-default " id="btnCancelarEditarGenerador" onclick="onCancelarEditarAgregarNuevoGenerador(this);">CANCELAR</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlTrabajoNuevoConceptoEditar" class="modal modalFull animated fadeInUp">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Seleccione un concepto</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-md-12" align="right">
                        <div class="checkbox"><label><input type="checkbox" id="chkMultiple" value="ON"> Varios</label>
                        </div>
                    </div>
                </fieldset>
                <div class="col-md-12" id="ConceptosXPreciarioID"></div>
            </div>
             <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL EDITAR - VER FOTOS ADJUNTAS-->
<div id="mdlTrabajoEditarFotosPorConcepto" class="modal modalFull animated bounceInDown">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title">Fotos</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-md-12"><br></div>
                    <div class="col-md-12 hide">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control hide">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control hide">
                        <input type="file" id="fFotos" name="fFotos[]" multiple="" class="hide">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-12" id="" align="center"  onclick="setFotosEditar(this)">
                        <div class="file_drag_area"><p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>  
                    </div>
                    <div class="col-md-12"><br><br></div>
                    <div class="col-md-12 row" id="Fotos"></div>
                </fieldset>
            </div>
             <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL EDITAR - VER FOTOS ANTES ADJUNTAS-->
<div id="mdlTrabajoEditarFotosAntesPorConcepto" class="modal modalFull animated bounceInDown">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Fotos Antes</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-md-12"><br></div>
                    <div class="col-md-12 hide">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control">
                        <input type="file" id="fFotos" name="fFotos[]" multiple="" class="hide">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-12" id="" align="center"  onclick="setFotosAntesEditar(this)">
                        <div class="file_drag_area"><p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>  
                    </div>
                    <div class="col-md-12"><br><br></div>
                    <div class="col-md-12 row" id="Fotos"></div>
                </fieldset>
            </div>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL EDITAR - VER FOTOS DESPUES ADJUNTAS-->
<div id="mdlTrabajoEditarFotosDespuesPorConcepto" class="modal modalFull animated bounceInDown">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Fotos Después</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-md-12"><br></div>
                    <div class="col-md-12 hide">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control">
                        <input type="file" id="fFotos" name="fFotos[]" multiple="" class="hide">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-12" id="" align="center"  onclick="setFotosDespuesEditar(this)">
                        <div class="file_drag_area"> <p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>  
                    </div>
                    <div class="col-md-12"><br><br></div>
                    <div class="col-md-12 row" id="Fotos"></div>
                </fieldset>
            </div>
             <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL EDITAR - VER FOTOS PROCESO ADJUNTAS-->
<div id="mdlTrabajoEditarFotosProcesoPorConcepto" class="modal modalFull animated bounceInDown">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Fotos en Proceso</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-md-12"><br></div>
                    <div class="col-md-12 hide">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control">
                        <input type="file" id="fFotos" name="fFotos[]" multiple="" class="hide">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-12" id="" align="center"  onclick="setFotosProcesoEditar(this)">
                        <div class="file_drag_area"><p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>  
                    </div>
                    <div class="col-md-12"><br><br></div>
                    <div class="col-md-12 row" id="Fotos"></div>
                </fieldset>
            </div>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL EDITAR - VER CROQUIS ADJUNTOS-->
<div id="mdlTrabajoEditarCroquisPorConcepto" class="modal modalFull animated bounceInDown">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Croquis</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-md-12 hide"><div class="col-md-12"><br></div>
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control">
                        <input type="file" id="fCroquis" name="fCroquis[]" multiple="" class="hide">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-12" id="" align="center"  onclick="setCroquisEditar(this)">
                        <div class="file_drag_area"><p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>  
                    </div>
                    <div class="col-md-12"><br><br></div>
                    <div class="col-md-12" id="Croquis"></div>
                </fieldset>
            </div>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL EDITAR - VER ANEXOS ADJUNTOS-->
<div id="mdlTrabajoEditarAnexosPorConcepto" class="modal modalFull animated bounceInDown">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Anexos</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-md-12"><br></div>
                    <div class="col-md-12 hide">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control">
                        <input type="file" id="fAnexos" name="fAnexos[]" multiple="" class="hide">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-md-12" id="" align="center"  onclick="setAnexosEditar(this)">
                        <div class="file_drag_area"><p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>  
                    </div>
                    <div class="col-md-12"><br><br></div>
                    <div class="col-md-12" id="Anexos"></div>
                </fieldset>
            </div>
             <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
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
    var btnModificar = $("#btnModificarTrabajo");
    var pnlNuevoTrabajo = $("#pnlNuevoTrabajo");
    var pnlEditarTrabajo = $("#pnlEditarTrabajo");
    var menuTablero = $('#MenuTablero');
    var Archivo = $("#Adjunto");
    var btnArchivo = $("#btnArchivo");
    var VistaPrevia = $("#VistaPrevia");
    var ModificarArchivo = pnlEditarTrabajo.find("#Adjunto");
    var btnModificarArchivo = pnlEditarTrabajo.find("#btnArchivo");
    var ModificarVistaPrevia = pnlEditarTrabajo.find("#VistaPrevia");
    var btnEliminar = $("#btnEliminar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    var pnlDetalleNuevoTrabajo = $("#pnlDetalleNuevoTrabajo");
    var btnNuevoConcepto = pnlDetalleNuevoTrabajo.find("#btnNuevoConcepto");
    var btnEliminarConcepto = pnlDetalleNuevoTrabajo.find("#btnEliminarConcepto");
    var Conceptos = pnlDetalleNuevoTrabajo.find("#Conceptos");
    /*Toggle Button Editar Atendido Impacto*/
    var tbtnEditarAtendido = pnlEditarTrabajo.find("#EditarAtendido");
    var tbtnEditarImpactoEnPlazo = pnlEditarTrabajo.find("#EditarImpactoEnPlazo");
    /*Toggle Button  Atendido Impacto*/
    var tbtnNuevoAtendido = pnlNuevoTrabajo.find("#NuevoAtendido");
    var tbtnNuevoImpactoEnPlazo = pnlNuevoTrabajo.find("#NuevoImpactoEnPlazo");
    /*Detalle*/
    var tBtnConcluir = pnlNuevoTrabajo.find("#Concluir");
    var tBtnEditarConcluir = pnlEditarTrabajo.find("#Concluir");
    var pnlDetalleEditarTrabajo = $("#pnlDetalleEditarTrabajo");
    var currentDate = new Date();
    /*Reportes*/
    var btnImprimirReportesEditarTrabajo = $("#btnImprimirReportesEditarTrabajo");
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    /*EDICION*/
    var mdlTrabajoEditarGeneradorPorConcepto = $("#mdlTrabajoEditarGeneradorPorConcepto");
    var btnGuardarModificarGeneradorXConcepto = mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar");
    var btnCancelarEditarGenerador = mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador");
    var btnMoficarEditarGenerador = mdlTrabajoEditarGeneradorPorConcepto.find("#btnModificar");
    var btnEditarCancelarNuevoGenerador = mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelar");
    var mdlTrabajoNuevoConceptoEditar = $("#mdlTrabajoNuevoConceptoEditar");
    var ConceptosXPreciarioID = mdlTrabajoNuevoConceptoEditar.find("#ConceptosXPreciarioID");
    /*BOTON PARA AGREGAR UN NUEVO CONCEPTO*/
    var btnNuevoConceptoEditar = pnlDetalleEditarTrabajo.find("#btnNuevoConcepto");
    /*BOTON PARA ABRIR EL MODAL DE FOTOS (EDITAR)*/
    var mdlTrabajoEditarFotosPorConcepto = $("#mdlTrabajoEditarFotosPorConcepto");
    /*BOTON PARA ABRIR EL MODAL DE FOTOS ANTES (EDITAR)*/
    var mdlTrabajoEditarFotosAntesPorConcepto = $("#mdlTrabajoEditarFotosAntesPorConcepto");
    /*BOTON PARA ABRIR EL MODAL DE FOTOS DESPUES (EDITAR)*/
    var mdlTrabajoEditarFotosDespuesPorConcepto = $("#mdlTrabajoEditarFotosDespuesPorConcepto");
    /*BOTON PARA ABRIR EL MODAL DE FOTOS PROCESO (EDITAR)*/
    var mdlTrabajoEditarFotosProcesoPorConcepto = $("#mdlTrabajoEditarFotosProcesoPorConcepto");
    /*BOTON PARA ABRIR EL MODAL DE CROQUIS (EDITAR)*/
    var mdlTrabajoEditarCroquisPorConcepto = $("#mdlTrabajoEditarCroquisPorConcepto");
    /*BOTON PARA ABRIR EL MODAL DE ANEXOS (EDITAR)*/
    var mdlTrabajoEditarAnexosPorConcepto = $("#mdlTrabajoEditarAnexosPorConcepto");
    /*FOTOS (EDITAR)*/
    var EditarFotosPorConcepto = mdlTrabajoEditarFotosPorConcepto.find("#fFotos");
    /*FOTOSANTES (EDITAR)*/
    var EditarFotosAntesPorConcepto = mdlTrabajoEditarFotosAntesPorConcepto.find("#fFotos");
    /*FOTOSDESPUES (EDITAR)*/
    var EditarFotosDespuesPorConcepto = mdlTrabajoEditarFotosDespuesPorConcepto.find("#fFotos");
    /*FOTOSPROCESO (EDITAR)*/
    var EditarFotosProcesoPorConcepto = mdlTrabajoEditarFotosProcesoPorConcepto.find("#fFotos");
    /*CROQUIS (EDITAR)*/
    var EditarCroquisPorConcepto = mdlTrabajoEditarCroquisPorConcepto.find("#fCroquis");
    /*ANEXOS (EDITAR)*/
    var EditarAnexosPorConcepto = mdlTrabajoEditarAnexosPorConcepto.find("#fAnexos");
    /******ABIERTO*/
    var pnlDetalleEditarTrabajoAbierto = $('#pnlDetalleEditarTrabajoAbierto');
    var pnlDetalleNuevoTrabajoAbierto = $('#pnlDetalleNuevoTrabajoAbierto');
    var btnNuevoConceptoAbierto = pnlDetalleNuevoTrabajoAbierto.find('#btnNuevoConceptoAbierto');
    var btnNuevoConceptoAbiertoEditar = pnlDetalleEditarTrabajoAbierto.find('#btnNuevoConceptoAbiertoEditar');
    var btnAgregarConceptoAbierto = $('#btnAgregarConceptoAbierto');
    var btnEditarConceptoAbierto = $('#btnEditarConceptoAbierto');
    $(document).ready(function () {
        /*Eventos Generales drag and drop PARA ARCHIVOS QUE SE CARGAN AL SERVER*/
        $('.file_drag_area').on('dragover', function () {
            $(this).addClass('file_drag_over');
            return false;
        });
        $('.file_drag_area').on('dragleave', function () {
            $(this).removeClass('file_drag_over');
            return false;
        });
        /**FIN FUNCIONES DE EDICION **/
        btnEditarConceptoAbierto.on("click", function () {
            $.validator.setDefaults({
                ignore: []
            });
            jQuery.validator.messages.required = 'Esta campo es obligatorio';
            jQuery.validator.messages.number = 'Esta campo debe ser numérico';
            jQuery.validator.messages.email = 'Correo no válido';
            $('#frmEditarConceptoDetalleAbierto').validate({
                errorElement: 'span', errorClass: 'errorForms',
                rules: {Clave: 'required', Descripcion: 'required', IntExt: 'required'},
                highlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.addClass(errorClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.removeClass(errorClass);
                }
            });
            /*Regresa si es valido para los select2*/
            $('select').on('change', function () {
                $(this).valid();
            });
            /*Si es verdadero que hacer*/
            if ($('#frmEditarConceptoDetalleAbierto').valid()) {
                var frm = new FormData($("#frmEditarConceptoDetalleAbierto")[0]);
                HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
                $.ajax({
                    url: master_url + 'onModificarConceptoAbierto',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    $('#mdlEditarConceptoAbierto').modal('hide');
                    getDetalleAbiertoByID(IdMovimiento);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnAgregarConceptoAbierto.on("click", function () {
            $.validator.setDefaults({
                ignore: []
            });
            jQuery.validator.messages.required = 'Esta campo es obligatorio';
            jQuery.validator.messages.number = 'Esta campo debe ser numérico';
            jQuery.validator.messages.email = 'Correo no válido';
            $('#frmAgregarConceptoDetalleAbierto').validate({
                errorElement: 'span', errorClass: 'errorForms',
                rules: {
                    Clave: 'required', Descripcion: 'required', IntExt: 'required'
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
            /*Regresa si es valido para los select2*/
            $('select').on('change', function () {
                $(this).valid();
            });
            /*Si es verdadero que hacer*/
            if ($('#frmAgregarConceptoDetalleAbierto').valid()) {
                var frm = new FormData($("#frmAgregarConceptoDetalleAbierto")[0]);
                frm.append('Trabajo_ID', IdMovimiento);
                HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
                $.ajax({
                    url: master_url + 'onAgregarDetalleAbiertoEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    $('#mdlAgregarConceptoAbierto').modal('hide');
                    getDetalleAbiertoByID(IdMovimiento);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnNuevoConceptoAbiertoEditar.on("click", function () {
            $('#mdlAgregarConceptoAbierto').find("input").val("");
            $('#mdlAgregarConceptoAbierto').find("textarea").val("");
            $('#mdlAgregarConceptoAbierto').find("select").val(null).trigger("change");
            $('#mdlAgregarConceptoAbierto').modal('show');
        });
        /*Estos eventos controlan que detalle se esta viendo*/
        pnlNuevoTrabajo.find("#Movimiento").change(function () {
            if (this.value === 'LEVANTAMIENTO') {
                pnlDetalleNuevoTrabajoAbierto.removeClass('hide');
                pnlDetalleNuevoTrabajo.addClass('hide');
            } else if (this.value === 'PRESUPUESTO') {
                pnlDetalleNuevoTrabajoAbierto.addClass('hide');
                pnlDetalleNuevoTrabajo.removeClass('hide');
            } else {
                pnlDetalleNuevoTrabajo.addClass('hide');
                pnlDetalleNuevoTrabajoAbierto.addClass('hide');
            }
        });
        pnlEditarTrabajo.find("#Movimiento").change(function () {
            /*Actualiza el movimiento sin necesidad de guardar*/
            $.ajax({
                url: master_url + 'onModificarMovimiento',
                type: "POST",
                data: {ID: IdMovimiento, Movimiento: this.value}
            }).done(function (data, x, jq) {
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
            if (this.value === 'LEVANTAMIENTO') {
                pnlDetalleEditarTrabajoAbierto.removeClass('hide');
                pnlDetalleEditarTrabajo.addClass('hide');
                $("#reportesLevantamiento").removeClass('hide');
                $("#reportesPresupuesto").addClass('hide');
                getDetalleAbiertoByID(IdMovimiento);
            } else if (this.value === 'PRESUPUESTO') {
                pnlDetalleEditarTrabajoAbierto.addClass('hide');
                pnlDetalleEditarTrabajo.removeClass('hide');
                $("#reportesLevantamiento").addClass('hide');
                $("#reportesPresupuesto").removeClass('hide');
                getTrabajoDetalleByID(IdMovimiento);
            } else {
                $("#reportesLevantamiento").addClass('hide');
                $("#reportesPresupuesto").addClass('hide');
                pnlDetalleEditarTrabajo.addClass('hide');
                pnlDetalleEditarTrabajoAbierto.addClass('hide');
            }
        });
        pnlEditarTrabajo.find("#Cliente_ID").change(function () {
            Cliente = this.value;
        });
        /*CARGA DE ARCHIVOS DETALLE DRAG AND DROP*/
        /*Evento drag and drop de FOTOS*/
        mdlTrabajoEditarFotosPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            /*SUBIR FOTO*/
            var frm = new FormData();
            frm.append('IdTrabajo', mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajoDetalle").val());
            var files_list = e.originalEvent.dataTransfer.files;
            for (var i = 0; i < files_list.length; i++)
            {
                frm.append('FOTO', files_list[i]);
                frm.append('Observaciones', files_list[i].name);
                $.ajax({
                    url: master_url + 'onAgregarFotosEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosXConcepto(mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        /*Evento drag and drop de FOTOS ANTES*/
        mdlTrabajoEditarFotosAntesPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            /*SUBIR FOTO*/
            var frm = new FormData();
            frm.append('IdTrabajo', mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajoDetalle").val());
            var files_list = e.originalEvent.dataTransfer.files;
            for (var i = 0; i < files_list.length; i++)
            {
                frm.append('FOTO', files_list[i]);
                frm.append('Observaciones', files_list[i].name);
                $.ajax({
                    url: master_url + 'onAgregarFotosAntesEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosAntesXConcepto(mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        /*Evento drag and drop de FOTOS DESPUES*/
        mdlTrabajoEditarFotosDespuesPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            /*SUBIR FOTO*/
            var frm = new FormData();
            frm.append('IdTrabajo', mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajoDetalle").val());
            var files_list = e.originalEvent.dataTransfer.files;
            for (var i = 0; i < files_list.length; i++)
            {
                frm.append('FOTO', files_list[i]);
                frm.append('Observaciones', files_list[i].name);
                $.ajax({
                    url: master_url + 'onAgregarFotosDespuesEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosDespuesXConcepto(mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        /*Evento drag and drop de FOTOS PROCESO*/
        mdlTrabajoEditarFotosProcesoPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            /*SUBIR FOTO*/
            var frm = new FormData();
            frm.append('IdTrabajo', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajoDetalle").val());
            var files_list = e.originalEvent.dataTransfer.files;
            for (var i = 0; i < files_list.length; i++)
            {
                frm.append('FOTO', files_list[i]);
                frm.append('Observaciones', files_list[i].name);
                $.ajax({
                    url: master_url + 'onAgregarFotosProcesoEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosProcesoXConcepto(mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        /*Evento drag and drop de CROQUIS*/
        mdlTrabajoEditarCroquisPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            /*SUBIR FOTO*/
            var frm = new FormData();
            frm.append('IdTrabajo', mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajoDetalle").val());
            var files_list = e.originalEvent.dataTransfer.files;
            for (var i = 0; i < files_list.length; i++)
            {
                frm.append('CROQUIS', files_list[i]);
                frm.append('Observaciones', files_list[i].name);
                $.ajax({
                    url: master_url + 'onAgregarCroquisEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadCroquisXConcepto(mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL CROQUIS: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        /*Evento drag and drop de ANEXOS*/
        mdlTrabajoEditarAnexosPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            /*SUBIR FOTO*/
            var frm = new FormData();
            frm.append('IdTrabajo', mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajoDetalle").val());
            var files_list = e.originalEvent.dataTransfer.files;
            for (var i = 0; i < files_list.length; i++)
            {
                frm.append('ANEXOS', files_list[i]);
                frm.append('Observaciones', files_list[i].name);
                $.ajax({
                    url: master_url + 'onAgregarAnexosEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadAnexosXConcepto(mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajoDetalle").val(), IdMovimiento);
                    getTrabajoDetalleByID(mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL ANEXOS: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        /*CARGA DE ARCHIVOS DETALLE NORMAL*/
        /*ANEXOS POR CONCEPTO EDITAR*/
        EditarAnexosPorConcepto.change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            console.log(EditarAnexosPorConcepto[0].files);
            var img = "";
            var nimg = 0;
            $.each(EditarAnexosPorConcepto[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                /*SUBIR ANEXO*/
                var frm = new FormData();
                frm.append('IdTrabajo', mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Observaciones', file.name);
                frm.append('ANEXOS', file);
                $.ajax({
                    url: master_url + 'onAgregarAnexosEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadAnexosXConcepto(mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajoDetalle").val(), IdMovimiento);

                    getTrabajoDetalleByID(mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL ANEXOS: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            });
        });
        /*CROQUIS POR CONCEPTO EDITAR*/
        EditarCroquisPorConcepto.change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var imageType = /image.*/;
            var img = "";
            var nimg = 0;
            $.each(EditarCroquisPorConcepto[0].files, function (k, file) {
                console.log(file.name);
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                /*SUBIR FOTO*/
                var frm = new FormData();
                frm.append('IdTrabajo', mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Observaciones', file.name);
                frm.append('CROQUIS', file);
                $.ajax({
                    url: master_url + 'onAgregarCroquisEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadCroquisXConcepto(mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajo").val());

                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL CROQUIS: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
        /*FOTOS POR CONCEPTO EDITAR*/
        EditarFotosPorConcepto.change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(EditarFotosPorConcepto[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                /*SUBIR FOTO*/
                var frm = new FormData();
                frm.append('IdTrabajo', mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Observaciones', file.name);
                frm.append('FOTO', file);
                $.ajax({
                    url: master_url + 'onAgregarFotosEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosXConcepto(mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajo").val());

                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
        /*FOTOS DESPUES POR CONCEPTO EDITAR*/
        EditarFotosAntesPorConcepto.change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(EditarFotosAntesPorConcepto[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                /*SUBIR FOTO*/
                var frm = new FormData();
                frm.append('IdTrabajo', mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Observaciones', file.name);
                frm.append('FOTO', file);
                $.ajax({
                    url: master_url + 'onAgregarFotosAntesEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosAntesXConcepto(mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajo").val());

                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
        /*FOTOS DESPUES POR CONCEPTO EDITAR*/
        EditarFotosDespuesPorConcepto.change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(EditarFotosDespuesPorConcepto[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                /*SUBIR FOTO*/
                var frm = new FormData();
                frm.append('IdTrabajo', mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Observaciones', file.name);
                frm.append('FOTO', file);
                $.ajax({
                    url: master_url + 'onAgregarFotosDespuesEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosDespuesXConcepto(mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajo").val());

                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
        /*FOTOS PROCESO POR CONCEPTO EDITAR*/
        EditarFotosProcesoPorConcepto.change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(EditarFotosProcesoPorConcepto[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                /*SUBIR FOTO*/
                var frm = new FormData();
                frm.append('IdTrabajo', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Observaciones', file.name);
                frm.append('FOTO', file);
                $.ajax({
                    url: master_url + 'onAgregarFotosProcesoEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosProcesoXConcepto(mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajo").val());

                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
        /*Boton que abre el modal de generador en base a la funcion*/
        btnMoficarEditarGenerador.on('click', function () {
            onModificarGeneradorXID();
        });
        /***** Modificar Concepto ****/
        btnGuardarModificarGeneradorXConcepto.on('click', function () {
            if (mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() !== '' && mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() !== 0 ||
                    mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() !== '' && mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() !== 0 ||
                    mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() !== '' && mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() !== 0 ||
                    mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() !== '' && mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() !== 0) {
                var frm = new FormData();
                /*Total*/
                var generador_largo = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() : 1);
                var generador_ancho = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() : 1);
                var generador_alto = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() : 1);
                var generador_cantidad = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() : 1);
                var total_generador = parseFloat((generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad)));
                frm.append('Concepto_ID', mdlTrabajoEditarGeneradorPorConcepto.find("#Concepto_ID").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Area', mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val());
                frm.append('Eje', mdlTrabajoEditarGeneradorPorConcepto.find("#Eje").val());
                frm.append('EntreEje1', mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje1").val());
                frm.append('EntreEje2', mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje2").val());
                frm.append('Largo', mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val());
                frm.append('Ancho', mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val());
                frm.append('Alto', mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val());
                frm.append('Cantidad', mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val());
                frm.append('Total', total_generador);
                if (parseFloat(total_generador) !== 0) {
                    HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
                    $.ajax({
                        url: master_url + 'onAgregarGenerador',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        console.log(data);
                        mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
                        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
                        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active in");
                        getReloadGeneradoresDetalleXConcepto(mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val());
                        /*REINICIAR VALORES EN AGREGAR */
                        mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val("");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#Eje").val("");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje1").val("");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje2").val("");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val("");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val("");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val("");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val("");
                    }).fail(function (x, y, z) {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR', 'danger');
                        console.log(total_generador);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    console.log(total_generador);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR, NECESITA ESPECIFICAR UN VALOR: LARGO, ANCHO, ALTO O CANTIDAD', 'danger');
                }
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE INGRESAR TODOS LOS VALORES NECESARIOS PARA UN TOTAL', 'danger');
            }
        });
        /*Detecta si es nuevo o la lista de generadores*/
        mdlTrabajoEditarGeneradorPorConcepto.find('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var target = $(e.target).attr("href");
            switch (target) {
                case "#EditarGeneradores":
                    console.log('SE CANCELO LA EDICION');
                    btnCancelarEditarGenerador.trigger('click');
                    break;
                case "#EditarGenerador":
                    mdlTrabajoEditarGeneradorPorConcepto.find("#Area").focus();
                    break;
            }
        });
        /*Modal de reportes*/
        btnImprimirReportesEditarTrabajo.on("click", function () {
            mdlReportesEditarTrabajo.modal('show');
        });
        /*FUNCIONES DETALLE NUEVO*/
        btnNuevoConceptoAbierto.on("click", function () {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
        });
        /*Agregar nuevo concepto en detalle nuevo*/
        btnNuevoConcepto.on("click", function () {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
        });
        btnRefrescar.on("click", function () {
            getRecords();
            getClientes();
            getCodigosPPTA();
            getCuadrillas();
            getCC();
        });
        /*Evento clic del boton confirmar borrar*/
        btnConfirmarEliminar.on("click", function () {
            if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
                mdlConfirmar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        btnEliminar.on("click", function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'onEliminar',
                type: "POST",
                data: {
                    ID: IdMovimiento
                }
            }).done(function (data, x, jq) {
                mdlConfirmar.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'TRABAJO ELIMINADO', 'danger');
                menuTablero.addClass("animated slideInLeft").removeClass("hide");
                pnlEditarTrabajo.addClass("hide");
                pnlDetalleEditarTrabajo.addClass("hide");
                getRecords();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        /*Funcion que cambia el valor cuando el toggle button cambia*/
        tbtnEditarAtendido.change(function () {
            if (this.checked) {
                pnlEditarTrabajo.find("#Atendido").val('Si');
            } else {
                pnlEditarTrabajo.find("#Atendido").val('No');
            }
        });
        tbtnEditarImpactoEnPlazo.change(function () {
            if (this.checked) {
                pnlEditarTrabajo.find("#ImpactoEnPlazo").val('Si');
            } else {
                pnlEditarTrabajo.find("#ImpactoEnPlazo").val('No');
            }
        });
        /*Eventos del toggle para nuevo*/
        tbtnNuevoAtendido.change(function () {
            if (this.checked) {
                pnlNuevoTrabajo.find("#Atendido").val('Si');
            } else {
                pnlNuevoTrabajo.find("#Atendido").val('No');
            }
        });
        tbtnNuevoImpactoEnPlazo.change(function () {
            if (this.checked) {
                pnlNuevoTrabajo.find("#ImpactoEnPlazo").val('Si');
            } else {
                pnlNuevoTrabajo.find("#ImpactoEnPlazo").val('No');
            }
        });
        tBtnEditarConcluir.on("click", function () {
            if (!$(this).is(':checked')) {
                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                btnConfirmarEliminar.attr("disabled", false);
                btnModificar.removeClass('hide');
            }
        });
        /*Evento que hace el update del movimiento*/
        btnModificar.on("click", function () {
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
            $('select').on('change', function () {
                $(this).valid();
            });
            if ($('#frmEditar').valid()) {
                var frm = new FormData(pnlEditarTrabajo.find("#frmEditar")[0]);
                /*  Para los checkbox*/
                if (tBtnEditarConcluir.is(':checked')) {
                    frm.append('Estatus', 'Concluido');
                } else {
                    frm.append('Estatus', 'Borrador');
                }
                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO GUARDADO', 'success');
                    if (tBtnEditarConcluir.is(':checked')) {
                        btnModificar.addClass('hide');
                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                        btnConfirmarEliminar.attr("disabled", true);
                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text('Concluido'.toUpperCase());
                        pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                        pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                        pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                        pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").addClass("disabledDetalle");
                    } else {
                        btnConfirmarEliminar.attr("disabled", false);
                        $(".spanEditarEstatus").removeClass('label-success').addClass('label-default').text('Borrador'.toUpperCase());
                        pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', false);
                        pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                        pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', false);
                        pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").removeClass("disabledDetalle");
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnGuardar.on("click", function () {
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
            $('select').on('change', function () {
                $(this).valid();
            });
            if (pnlNuevoTrabajo.find('#frmNuevo').valid()) {
                var frm = new FormData(pnlNuevoTrabajo.find("#frmNuevo")[0]);
                if (tBtnConcluir.is(':checked')) {
                    frm.append('Estatus', 'Concluido');
                } else {
                    frm.append('Estatus', 'Borrador');
                }
                /*Insertar Importe total*/
                frm.append('Importe', ImporteTotalGlobal);
                /*DESCOMENTAR PARA AGREGAR*/
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVO TRABAJO', 'success');
                    /*Funcion que regarga el panel de editar con el nuevo registro*/
                    despuesDeGuardar(data);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevoTrabajo.addClass("hide");
            pnlDetalleNuevoTrabajo.addClass("hide");
            pnlDetalleNuevoTrabajoAbierto.addClass("hide");
            btnRefrescar.trigger('click');
        });
        btnCancelarModificar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarTrabajo.addClass("hide");
            pnlDetalleEditarTrabajo.addClass("hide");
            pnlDetalleEditarTrabajoAbierto.addClass("hide");
            getRecords();
        });
        btnNuevo.on("click", function () {
            pnlNuevoTrabajo.find(".nav-tabs li").removeClass("active");
            $(pnlNuevoTrabajo.find(".nav-tabs li")[0]).addClass("active");
            pnlNuevoTrabajo.find("#Datos").addClass("active in");
            pnlNuevoTrabajo.find("#Datos2").removeClass("active in");
            pnlNuevoTrabajo.find("#Datos3").removeClass("active in");
            pnlNuevoTrabajo.find("#Datos4").removeClass("active in");
            menuTablero.addClass("hide");
            pnlNuevoTrabajo.removeClass("hide");
            pnlNuevoTrabajo.find("input").val("");
            pnlNuevoTrabajo.find("textarea").val("");
            pnlNuevoTrabajo.find("select").val(null).trigger("change");
            pnlNuevoTrabajo.find("select").select2("val", "");
            pnlNuevoTrabajo.find("#FechaCreacion").datepicker("setDate", currentDate);
            /*Inicializamos Boleanos en No*/
            pnlNuevoTrabajo.find("#Atendido").val('No');
            pnlNuevoTrabajo.find("#ImpactoEnPlazo").val('No');
            /*Trae el usuario logeado quien estará registrando el movimiento*/
            pnlNuevoTrabajo.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");
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
        /*Trae dias de ppta*/
        pnlNuevoTrabajo.find("#Codigoppta_ID").change(function () {
            getCodigoPPTAbyID(pnlNuevoTrabajo.find("#Codigoppta_ID").val(), $(this).val());
        });
        /*Trae dias de ppta*/
        pnlEditarTrabajo.find("#Codigoppta_ID").change(function () {
            getCodigoPPTAbyID(pnlEditarTrabajo.find("#Codigoppta_ID").val(), $(this).val());
        });
        btnArchivo.on("click", function () {
            Archivo.change(function () {
                HoldOn.open({theme: "sk-bounce", message: "POR FAVOR ESPERE..."});
                var imageType = /image.*/;
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(Archivo[0].files[0]);
                        var preview = '<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><img src="' + reader.result + '" class="img-responsive" >\n\
                                    <div class="caption">\n\
                                    <p>' + Archivo[0].files[0].name + '</p>\n\
                                </div></div>';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(Archivo[0].files[0]);
                } else {
                    if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>');
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
        btnModificarArchivo.on("click", function () {
            ModificarArchivo.change(function () {
                HoldOn.open({theme: "sk-bounce", message: "POR FAVOR ESPERE..."});
                var imageType = /image.*/;
                if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(ModificarArchivo[0].files[0]);
                        var preview = '<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><img src="' + reader.result + '" class="img-responsive" >\n\
                                    <div class="caption">\n\
                                    <p>' + ModificarArchivo[0].files[0].name + '</p>\n\
                                </div></div>';
                        ModificarVistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(ModificarArchivo[0].files[0]);
                } else {
                    if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            ModificarVistaPrevia.html('<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>');
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
        getClientes();
        getCodigosPPTA();
        getRecords();
        getCuadrillas();
        getCC();
    });
    /*----------------------------METODOS DEL CONTROLADOR PARA TRAER DATOS----------------*/
    IdMovimiento = 0;
    function getRecords() {
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $("#tblRegistros").html(getTable('tblTrabajos', data));
            $('#tblTrabajos tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto; "><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
            });
            var tblSelected = $('#tblTrabajos').DataTable(tableOptions);
            tblSelected.columns().every(function () {
                var that = this;
                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
            $('#tblTrabajos tbody').on('click', 'tr', function () {
                $("#tblTrabajos").find("tr").removeClass("success");
                $("#tblTrabajos").find("tr").removeClass("warning");
                var id = this.id;
                var index = $.inArray(id, selected);
                if (index === -1) {
                    selected.push(id);
                } else {
                    selected.splice(index, 1);
                }
                $(this).addClass('success');
                var dtm = tblSelected.row(this).data();
                IdMovimiento = parseInt(dtm[0]);
                pnlEditarTrabajo.find(".nav-tabs li").removeClass("active");
                $(pnlEditarTrabajo.find(".nav-tabs li")[0]).addClass("active");
                pnlEditarTrabajo.find("#EditarDatos").addClass("active in");
                pnlEditarTrabajo.find("#EditarDatos2").removeClass("active in");
                pnlEditarTrabajo.find("#EditarDatos3").removeClass("active in");
                pnlEditarTrabajo.find("#EditarDatos4").removeClass("active in");
                if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
                    HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
                    $.ajax({
                        url: master_url + 'getTrabajoByID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: IdMovimiento
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
                        /*trae los días*/
                        getCodigoPPTAbyID(trabajo.Codigoppta_ID);
                        Cliente = trabajo.Cliente_ID;
                        pnlEditarTrabajo.find("#Movimiento").select2("val", trabajo.Movimiento);
                        pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                        pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                        pnlEditarTrabajo.find("#Cliente_ID").select2("val", trabajo.Cliente_ID);
                        pnlEditarTrabajo.find("#Clasificacion").select2("val", trabajo.Clasificacion);
                        pnlEditarTrabajo.find("#CentroCostos_ID").select2("val", trabajo.CentroCostos_ID);
                        if (trabajo.Atendido === 'Si') {
                            pnlEditarTrabajo.find("#EditarAtendido").prop('checked', true);
                            pnlEditarTrabajo.find("#Atendido").val('Si');
                        }
                        if (trabajo.Atendido === 'No') {
                            pnlEditarTrabajo.find("#EditarAtendido").prop('checked', false);
                            pnlEditarTrabajo.find("#Atendido").val('No');
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
                            pnlEditarTrabajo.find("#EditarImpactoEnPlazo").prop('checked', true);
                            pnlEditarTrabajo.find("#ImpactoEnPlazo").val('Si');
                        }
                        if (trabajo.ImpactoEnPlazo === 'No') {
                            pnlEditarTrabajo.find("#EditarImpactoEnPlazo").prop('checked', false);
                            pnlEditarTrabajo.find("#ImpactoEnPlazo").val('No');
                        }
                        pnlEditarTrabajo.find("#DiasImpacto").val(trabajo.DiasImpacto);
                        pnlEditarTrabajo.find("#CausaTrabajo").select2("val", trabajo.CausaTrabajo);
                        pnlEditarTrabajo.find("#ClaveOrigenTrabajo").select2("val", trabajo.ClaveOrigenTrabajo);
                        pnlEditarTrabajo.find("#EspecificaOrigenTrabajo").val(trabajo.EspecificaOrigenTrabajo);
                        pnlEditarTrabajo.find("#DescripcionOrigenTrabajo").val(trabajo.DescripcionOrigenTrabajo);
                        pnlEditarTrabajo.find("#DescripcionRiesgoTrabajo").val(trabajo.DescripcionRiesgoTrabajo);
                        pnlEditarTrabajo.find("#DescripcionAlcanceTrabajo").val(trabajo.DescripcionAlcanceTrabajo);
                        pnlEditarTrabajo.find("#Usuario_ID").val(trabajo.Usuario_ID);
                        pnlEditarTrabajo.find("#Situacion").select2("val", trabajo.Situacion);
                        pnlEditarTrabajo.find("#Observaciones").val(trabajo.Observaciones);
                        if (trabajo.Adjunto !== null && trabajo.Adjunto !== undefined && trabajo.Adjunto !== '') {
                            var ext = getExt(trabajo.Adjunto);
                            console.log(ext);
                            if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                                pnlEditarTrabajo.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + trabajo.Adjunto + '" class ="img-responsive"/>');
                            }
                            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                pnlEditarTrabajo.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + trabajo.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                            }
                            if (ext !== "gif" && ext !== "jpg" && ext !== "jpeg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                                pnlEditarTrabajo.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                            }
                        } else {
                            pnlEditarTrabajo.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                        }
                        menuTablero.addClass("hide");
                        if (trabajo.Movimiento === 'LEVANTAMIENTO') {
                            pnlEditarTrabajo.removeClass("hide");
                            pnlDetalleEditarTrabajoAbierto.removeClass("hide");
                            $("#reportesLevantamiento").removeClass('hide');
                            $("#reportesPresupuesto").addClass('hide');
                            getDetalleAbiertoByID(trabajo.ID);
                        } else if (trabajo.Movimiento === 'PRESUPUESTO') {
                            pnlEditarTrabajo.removeClass("hide");
                            pnlDetalleEditarTrabajo.removeClass("hide");
                            $("#reportesLevantamiento").addClass('hide');
                            $("#reportesPresupuesto").removeClass('hide');
                            getTrabajoDetalleByID(trabajo.ID);
                        }
                        /*Control de estatus*/
                        if (trabajo.Estatus === 'Concluido') {
                            $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(trabajo.Estatus.toUpperCase());
                            tBtnEditarConcluir.prop('checked', true);
                            btnModificar.addClass('hide');
                            $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                            btnConfirmarEliminar.attr("disabled", true);
                            pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                            pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                            pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                            pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").addClass("disabledDetalle");
                        } else if (trabajo.Estatus === 'Cancelado') {
                            $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(trabajo.Estatus.toUpperCase());
                            tBtnEditarConcluir.addClass('hide');
                            btnModificar.addClass('hide');
                            $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                            btnConfirmarEliminar.attr("disabled", true);
                            pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                            pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                            pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                            pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").addClass("disabledDetalle");
                        } else {
                            $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(trabajo.Estatus.toUpperCase());
                            tBtnEditarConcluir.prop('checked', false);
                            btnModificar.removeClass('hide');
                            $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                            btnConfirmarEliminar.attr("disabled", false);
                            pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', false);
                            pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                            pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', false);
                            pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").removeClass("disabledDetalle");
                        }
                        getImporteTotalDelTrabajoByID(trabajo.ID);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
                }
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    $('#Encabezado a').on("click", function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    /*Para despues de insertar pro primera vez se cargue el panel de editar*/
    function despuesDeGuardar(IDTrabajo) {
        IdMovimiento = IDTrabajo;
        pnlNuevoTrabajo.addClass("hide");
        pnlDetalleNuevoTrabajo.addClass("hide");
        pnlDetalleNuevoTrabajoAbierto.addClass("hide");
        pnlEditarTrabajo.find(".nav-tabs li").removeClass("active");
        $(pnlEditarTrabajo.find(".nav-tabs li")[0]).addClass("active");
        pnlEditarTrabajo.find("#EditarDatos").addClass("active in");
        pnlEditarTrabajo.find("#EditarDatos2").removeClass("active in");
        pnlEditarTrabajo.find("#EditarDatos3").removeClass("active in");
        pnlEditarTrabajo.find("#EditarDatos4").removeClass("active in");
        if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getTrabajoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdMovimiento
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
                /*trae los días*/
                getCodigoPPTAbyID(trabajo.Codigoppta_ID);
                Cliente = trabajo.Cliente_ID;
                pnlEditarTrabajo.find("#Movimiento").select2("val", trabajo.Movimiento);
                pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                pnlEditarTrabajo.find("#Cliente_ID").select2("val", trabajo.Cliente_ID);
                pnlEditarTrabajo.find("#Clasificacion").select2("val", trabajo.Clasificacion);
                pnlEditarTrabajo.find("#CentroCostos_ID").select2("val", trabajo.CentroCostos_ID);
                if (trabajo.Atendido === 'Si') {
                    pnlEditarTrabajo.find("#EditarAtendido").prop('checked', true);
                    pnlEditarTrabajo.find("#Atendido").val('Si');
                }
                if (trabajo.Atendido === 'No') {
                    pnlEditarTrabajo.find("#EditarAtendido").prop('checked', false);
                    pnlEditarTrabajo.find("#Atendido").val('No');
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
                    pnlEditarTrabajo.find("#EditarImpactoEnPlazo").prop('checked', true);
                    pnlEditarTrabajo.find("#ImpactoEnPlazo").val('Si');
                }
                if (trabajo.ImpactoEnPlazo === 'No') {
                    pnlEditarTrabajo.find("#EditarImpactoEnPlazo").prop('checked', false);
                    pnlEditarTrabajo.find("#ImpactoEnPlazo").val('No');
                }
                pnlEditarTrabajo.find("#DiasImpacto").val(trabajo.DiasImpacto);
                pnlEditarTrabajo.find("#CausaTrabajo").select2("val", trabajo.CausaTrabajo);
                pnlEditarTrabajo.find("#ClaveOrigenTrabajo").select2("val", trabajo.ClaveOrigenTrabajo);
                pnlEditarTrabajo.find("#EspecificaOrigenTrabajo").val(trabajo.EspecificaOrigenTrabajo);
                pnlEditarTrabajo.find("#DescripcionOrigenTrabajo").val(trabajo.DescripcionOrigenTrabajo);
                pnlEditarTrabajo.find("#DescripcionRiesgoTrabajo").val(trabajo.DescripcionRiesgoTrabajo);
                pnlEditarTrabajo.find("#DescripcionAlcanceTrabajo").val(trabajo.DescripcionAlcanceTrabajo);
                pnlEditarTrabajo.find("#Usuario_ID").val(trabajo.Usuario_ID);
                /*Control de estatus*/
                if (trabajo.Estatus === 'Concluido') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(trabajo.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', true);
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                    pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").removeClass("disabledDetalle");
                } else if (trabajo.Estatus === 'Cancelado') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(trabajo.Estatus.toUpperCase());
                    tBtnEditarConcluir.addClass('hide');
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                    pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").addClass("disabledDetalle");
                } else {
                    $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(trabajo.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', false);
                    btnModificar.removeClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                    pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', false);
                    pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                    pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', false);
                    pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").removeClass("disabledDetalle");
                }
                pnlEditarTrabajo.find("#Situacion").select2("val", trabajo.Situacion);
                pnlEditarTrabajo.find("#Observaciones").val(trabajo.Observaciones);
                if (trabajo.Adjunto !== null && trabajo.Adjunto !== undefined && trabajo.Adjunto !== '') {
                    var ext = getExt(trabajo.Adjunto);
                    console.log(ext);
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        pnlEditarTrabajo.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + trabajo.Adjunto + '" class ="img-responsive"/>');
                    }
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        pnlEditarTrabajo.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + trabajo.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                    }
                    if (ext !== "gif" && ext !== "jpg" && ext !== "jpeg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                        pnlEditarTrabajo.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                    }
                } else {
                    pnlEditarTrabajo.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                }
                menuTablero.addClass("hide");
                if (trabajo.Movimiento === 'LEVANTAMIENTO') {
                    pnlEditarTrabajo.removeClass("hide");
                    pnlDetalleEditarTrabajoAbierto.removeClass("hide");
                    $("#reportesLevantamiento").removeClass('hide');
                    $("#reportesPresupuesto").addClass('hide');
                    getDetalleAbiertoByID(trabajo.ID);
                } else if (trabajo.Movimiento === 'PRESUPUESTO') {
                    pnlEditarTrabajo.removeClass("hide");
                    pnlDetalleEditarTrabajo.removeClass("hide");
                    $("#reportesLevantamiento").addClass('hide');
                    $("#reportesPresupuesto").removeclass('hide');
                    getTrabajoDetalleByID(trabajo.ID);
                }
                /*Setea el importe total*/
                pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$' + parseFloat(trabajo.Importe) + '</span>');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }
    /*Traer catálogos para el encabezado*/
    function getCC() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getCC',
            type: "POST", dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Nombre + '</option>';
            });
            pnlNuevoTrabajo.find("#CentroCostos_ID").html(options);
            pnlEditarTrabajo.find("#CentroCostos_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getClientes() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getClientes',
            type: "POST", dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Cliente + '</option>';
            });
            pnlNuevoTrabajo.find("#Cliente_ID").html(options);
            pnlEditarTrabajo.find("#Cliente_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getSucursalesbyCliente(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
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
                options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.Sucursal + '</option>';
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
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
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
                options += '<option value="' + v.ID + '">' + v.Preciario + '</option>';
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
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
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
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
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
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getCodigosPPTA',
            type: "POST", dataType: "JSON"
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
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({url: master_url + 'getCuadrillas',
            type: "POST",
            dataType: "JSON"}).done(function (data, x, jq) {
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
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
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
        $('#Adjunto').trigger('blur');
        $('#Adjunto').on('blur', function (e) {
            $('#Adjunto').val('');
        });
    }
    var ImporteTotalGlobal = 0;
    function getImporteTotal() {
        /*IMPORTE TOTAL*/
        var ImporteTotalE = pnlDetalleEditarTrabajo.find("#ImporteTotal");
        var total = 0.0;
        /*Recalcula en editar*/
        $.each(pnlDetalleEditarTrabajo.find("tbody tr"), function () {
            total += parseFloat($(this).find("td").eq(10).text());
            ImporteTotalGlobal = total;
        });
        ImporteTotalE.html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ ' + $.number(total, 6, '.', ', ') + '</span>');
    }
    /*PANEL EDITAR DETALLE */
    var tempDetalle = 0;
    function getTrabajoDetalleByID(IDX) {
        $.ajax({
            url: master_url + 'getTrabajoDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                pnlDetalleEditarTrabajo.find("#Conceptos").html(getTable('tblConceptosXTrabajo', data));
                var thead = pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo thead th');
                var tfoot = pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo tfoot th');
                thead.eq(0).addClass("hide");
                tfoot.eq(0).addClass("hide");
                thead.eq(8).addClass("hide");
                tfoot.eq(8).addClass("hide");
                thead.eq(14).addClass("hide");
                tfoot.eq(14).addClass("hide");
                $.each(pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("hide");
                    td.eq(8).addClass("hide");
                    td.eq(14).addClass("hide");
                });
                var tblSelected = pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo').DataTable(tableOptions);
                pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo tbody').on('click', 'tr', function () {
                    pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo").find("tr").removeClass("success");
                    pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    tempDetalle = parseInt(dtm[0]);
                });
            } else {
                pnlDetalleEditarTrabajo.find("#Conceptos").html("");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    $('#btnEliminarConcepto').on("click", function () {
        HoldOn.open({theme: 'sk-bounce', message: 'ELIMINANDO...'
        });
        $.ajax({
            url: master_url + 'onEliminarConceptoXDetalle',
            type: "POST",
            data: {
                ID: IdEliminarConcepto,
                IDT: IdMovimiento
            }
        }).done(function (data, x, jq) {
            $(evtEliminarConcepto).parent().parent().remove();
            /*MODIFICAR EL IMPORTE DEL TRABAJO*/
            $.ajax({
                url: master_url + 'onModificarImportePorTrabajo',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: pnlEditarTrabajo.find("#ID").val()
                }
            }).done(function (data, x, jq) {
                $('#mdlConfirmarEliminarConcepto').modal('hide');
                if (data !== undefined && data.length > 0) {
                    var dtm = data[0];
                    if (dtm.IMPORTE_TOTAL_TRABAJO !== null) {
                        pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle"> ' + dtm.IMPORTE_TOTAL_TRABAJO + '</span>');
                    } else {
                        pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle"> ' + 0.0 + '</span>');
                    }
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        }).fail(function (x, y, z) {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO NO ELIMINADO', 'danger');
        }).always(function () {
            HoldOn.close();
        });
    });
    $('#btnEliminarConceptoAbierto').on("click", function () {
        HoldOn.open({theme: 'sk-bounce', message: 'ELIMINANDO...'});
        $.ajax({
            url: master_url + 'onEliminarConceptoXDetalleAbierto',
            type: "POST",
            data: {
                ID: IdEliminarConceptoAbierto
            }
        }).done(function (data, x, jq) {
            $('#mdlConfirmarEliminarConceptoAbierto').modal('hide');
            $(evtEliminarConceptoAbierto).parent().parent().remove();
        }).fail(function (x, y, z) {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO NO ELIMINADO', 'danger');
        }).always(function () {
            HoldOn.close();
        });
    });
    IdEliminarConcepto = 0;
    evtEliminarConcepto = '';
    function onEliminarConceptoXDetalle(evt, IDX) {
        IdEliminarConcepto = IDX;
        evtEliminarConcepto = evt;
        $('#mdlConfirmarEliminarConcepto').modal('show');
    }
    IdEliminarConceptoAbierto = 0;
    evtEliminarConceptoAbierto = '';
    function onEliminarConceptoXDetalleAbierto(evt, IDX) {
        IdEliminarConceptoAbierto = IDX;
        evtEliminarConceptoAbierto = evt;
        $('#mdlConfirmarEliminarConceptoAbierto').modal('show');
    }
    function getReloadGeneradoresDetalleXConcepto(IDX) {
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        $.ajax({
            url: master_url + 'getGeneradoresDetalleXConceptoID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data);
            /*CREAR TABLA DE GENERADORES*/
            var tblGeneradoresDetalleXConcepto = '<br><table  id="tblGeneradoresDetalleXConcepto" class="table table-striped table-hover" width="100%">' +
                    '<thead>' +
                    '<tr>' +
                    '<th class="hide">IDT</th>' +
                    '<th class="hide">IDG</th>' +
                    '<th class="hide">Concepto_ID</th>' +
                    '<th></th>' +
                    '<th class="col-md-6">Area</th>' +
                    '<th class="hide">Eje</th>' +
                    '<th class="hide">Entre Eje 1</th>' +
                    '<th class="hide">Entre Eje 2</th>' +
                    '<th >Largo</th>' +
                    '<th>Ancho</th>' +
                    '<th>Alto</th>' +
                    '<th>Cantidad</th>' +
                    '<th>Total</th>' +
                    '<th></th>' +
                    '<th class="hide">Estatus</th>' +
                    '<th class="hide">Precio</th>' +
                    '</tr>' +
                    '</thead>' +
                    '<tbody>';
            $.each(data, function (k, v) {
                tblGeneradoresDetalleXConcepto += "<tr>";
                tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                tblGeneradoresDetalleXConcepto += v.TRABAJOID;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*RENGLON*/
                tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                tblGeneradoresDetalleXConcepto += v.ID;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*CONCEPTO_ID*/
                tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                tblGeneradoresDetalleXConcepto += v.IdTrabajoDetalle;
                tblGeneradoresDetalleXConcepto += "</td>";
                tblGeneradoresDetalleXConcepto += "<td><span class=\"fa fa-times customButtonDetalleEliminar\" onclick=\"onEliminarGeneradorEditar(" + v.ID + "," + v.TRABAJOID + "," + v.IdTrabajoDetalle + ")\"></span></td>";
                /*AREA*/
                tblGeneradoresDetalleXConcepto += "<td>";
                tblGeneradoresDetalleXConcepto += v.Area;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*EJE*/
                tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                tblGeneradoresDetalleXConcepto += v.Eje;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*EntreEje1*/
                tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                tblGeneradoresDetalleXConcepto += v.EntreEje1;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*EntreEje2*/
                tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                tblGeneradoresDetalleXConcepto += v.EntreEje2;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*Largo*/
                tblGeneradoresDetalleXConcepto += "<td>";
                tblGeneradoresDetalleXConcepto += v.Largo;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*Ancho*/
                tblGeneradoresDetalleXConcepto += "<td>";
                tblGeneradoresDetalleXConcepto += v.Ancho;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*Alto*/
                tblGeneradoresDetalleXConcepto += "<td>";
                tblGeneradoresDetalleXConcepto += v.Alto;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*Cantidad*/
                tblGeneradoresDetalleXConcepto += "<td>";
                tblGeneradoresDetalleXConcepto += v.Cantidad;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*Total*/
                var generador_largo = parseFloat((v.Largo !== '' && parseFloat(v.Largo) !== 0) ? v.Largo : 1);
                var generador_ancho = parseFloat((v.Ancho !== '' && parseFloat(v.Ancho) !== 0) ? v.Ancho : 1);
                var generador_alto = parseFloat((v.Alto !== '' && parseFloat(v.Alto) !== 0) ? v.Alto : 1);
                var generador_cantidad = parseFloat((v.Cantidad !== '' && parseFloat(v.Cantidad) !== 0) ? v.Cantidad : 1);
                tblGeneradoresDetalleXConcepto += "<td>";
                tblGeneradoresDetalleXConcepto += (generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad));
                tblGeneradoresDetalleXConcepto += "</td>";
                tblGeneradoresDetalleXConcepto += "<td><span class=\"fa fa-angle-right customButtonDetalleGenerador\" onclick=\"onEditarGeneradorXID(this," + v.ID + ")\"></span></td>";
                tblGeneradoresDetalleXConcepto += "<td class=\"hide\">ACTIVO</td>";
                tblGeneradoresDetalleXConcepto += "<td class=\"hide\">" + v.Precio + "</td>";
                tblGeneradoresDetalleXConcepto += "</tr>";
            });
            tblGeneradoresDetalleXConcepto += '</tbody></table>';
            mdlTrabajoEditarGeneradorPorConcepto.find("#tblEditarGeneradorXConcepto").html(tblGeneradoresDetalleXConcepto);
            var precio = mdlTrabajoEditarGeneradorPorConcepto.find("#Precio").val();
            var nueva_cantidad = 0;
            mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto").find("tbody tr").each(function (k, v) {
                var row = $(v).find("td");
                nueva_cantidad += parseFloat(row.eq(12).text());
            });
            /*AQUIIIII REFRESA TOTAL CANTIDAD*/
            var GeneradorImporteTotalEditar = mdlTrabajoEditarGeneradorPorConcepto.find("#GeneradorImporteTotal");
            GeneradorImporteTotalEditar.html('<strong class="spanTotalesDetalle">Total: </strong><span class="text-success spanTotalesDetalle">' + $.number(nueva_cantidad, 6, '.', ', ') + '</span> ');
            $.ajax({
                url: master_url + 'onModificarConceptoCantidadEImporte',
                type: "POST",
                data: {
                    ID: IDX,
                    Cantidad: nueva_cantidad,
                    Importe: (parseFloat(nueva_cantidad) * parseFloat(precio))
                }
            }).done(function (data, x, jq) {
                getTrabajoDetalleByID(mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val());
                /*MODIFICAR EL IMPORTE DEL TRABAJO*/
                $.ajax({
                    url: master_url + 'onModificarImportePorTrabajo',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val()
                    }
                }).done(function (data, x, jq) {
                    console.log(data, x, jq);
                    if (data !== undefined && data.length > 0) {
                        var dtm = data[0];
                        pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle"> ' + dtm.IMPORTE_TOTAL_TRABAJO + '</span>');
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                /*FIN MODIFICAR EL IMPORTE DEL TRABAJO*/
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
            var DataTableGeneradores = mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto");
            if ($.fn.dataTable.isDataTable(DataTableGeneradores)) {
                var tblDataTableGeneradores = DataTableGeneradores.DataTable(tableOptions);
                mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto").find('tbody').on('click', 'tr', function () {
                    DataTableGeneradores.find("tr").removeClass("success");
                    DataTableGeneradores.find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblDataTableGeneradores.row(this).data();
                });
            } else {
                DataTableGeneradores.DataTable(tableOptions);
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getGeneradoresDetalleXConceptoID(IDTD, IDT, IDCO) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getGeneradoresDetalleXConceptoID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDTD
            }
        }).done(function (data, x, jq) {
            console.log(data);
            mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val(IDT);/*ID DEL TRABAJO*/
            mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val(IDTD);/*ID DEL TRABAJODETALLE*/
            mdlTrabajoEditarGeneradorPorConcepto.find("#Concepto_ID").val(IDCO);/*ID DEL CONCEPTO*/
            var precio = 0;
            var cantidadTotal = 0;
            /*CREAR TABLA DE GENERADORES*/
            var tblGeneradoresDetalleXConcepto = '<br><table  id="tblGeneradoresDetalleXConcepto" class="table table-striped table-hover" width="100%">' +
                    '<thead>' +
                    '<tr>' +
                    '<th class="hide">IDT</th>' +
                    '<th class="hide">IDG</th>' +
                    '<th class="hide">Concepto_ID</th>' +
                    '<th></th>' +
                    '<th class="col-md-6">Area</th>' +
                    '<th class="hide">Eje</th>' +
                    '<th class="hide">Entre Eje 1</th>' +
                    '<th class="hide">Entre Eje 2</th>' +
                    '<th class="col-md-1">Largo</th>' +
                    '<th>Ancho</th>' +
                    '<th>Alto</th>' +
                    '<th>Cantidad</th>' +
                    '<th>Total</th>' +
                    '<th></th>' +
                    '<th class="hide">Estatus</th>' +
                    '<th class="hide">Precio</th>' +
                    '</tr>' +
                    '</thead>' +
                    '<tbody>';
            if (data.length > 0) {
                $.each(data, function (k, v) {
                    console.log(k, v);
                    tblGeneradoresDetalleXConcepto += "<tr>";
                    tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                    tblGeneradoresDetalleXConcepto += v.TRABAJOID;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*RENGLON*/
                    tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                    tblGeneradoresDetalleXConcepto += v.ID;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*CONCEPTO_ID*/
                    tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                    tblGeneradoresDetalleXConcepto += v.IdTrabajoDetalle;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    tblGeneradoresDetalleXConcepto += "<td><span class=\"fa fa-times customButtonDetalleEliminar\" onclick=\"onEliminarGeneradorEditar(" + v.ID + "," + v.TRABAJOID + "," + v.IdTrabajoDetalle + ")\"></span></td>";
                    /*AREA*/
                    tblGeneradoresDetalleXConcepto += "<td>";
                    tblGeneradoresDetalleXConcepto += v.Area;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*EJE*/
                    tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                    tblGeneradoresDetalleXConcepto += v.Eje;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*EntreEje1*/
                    tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                    tblGeneradoresDetalleXConcepto += v.EntreEje1;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*EntreEje2*/
                    tblGeneradoresDetalleXConcepto += "<td class='hide'>";
                    tblGeneradoresDetalleXConcepto += v.EntreEje2;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*Largo*/
                    tblGeneradoresDetalleXConcepto += "<td>";
                    tblGeneradoresDetalleXConcepto += v.Largo;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*Ancho*/
                    tblGeneradoresDetalleXConcepto += "<td>";
                    tblGeneradoresDetalleXConcepto += v.Ancho;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*Alto*/
                    tblGeneradoresDetalleXConcepto += "<td>";
                    tblGeneradoresDetalleXConcepto += v.Alto;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*Cantidad*/
                    tblGeneradoresDetalleXConcepto += "<td>";
                    tblGeneradoresDetalleXConcepto += v.Cantidad;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*Total*/
                    var generador_largo = parseFloat((v.Largo !== '' && parseFloat(v.Largo) !== 0) ? v.Largo : 1);
                    var generador_ancho = parseFloat((v.Ancho !== '' && parseFloat(v.Ancho) !== 0) ? v.Ancho : 1);
                    var generador_alto = parseFloat((v.Alto !== '' && parseFloat(v.Alto) !== 0) ? v.Alto : 1);
                    var generador_cantidad = parseFloat((v.Cantidad !== '' && parseFloat(v.Cantidad) !== 0) ? v.Cantidad : 1);
                    tblGeneradoresDetalleXConcepto += "<td>";
                    tblGeneradoresDetalleXConcepto += (generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad));
                    tblGeneradoresDetalleXConcepto += "</td>";
                    tblGeneradoresDetalleXConcepto += "<td><span class=\"fa fa-angle-right customButtonDetalleGenerador\" onclick=\"onEditarGeneradorXID(this," + v.ID + ")\"></span></td>";
                    tblGeneradoresDetalleXConcepto += "<td class=\"hide\">ACTIVO</td>";
                    tblGeneradoresDetalleXConcepto += "<td class=\"hide\">" + v.Precio + "</td>";
                    tblGeneradoresDetalleXConcepto += "</tr>";
                    precio = parseFloat(v.Precio);
                    cantidadTotal = parseFloat(v.CantidadTotal);
                });
            } else {
                $.ajax({
                    url: master_url + 'getPrecioPorConceptoID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IDTD,
                        IDCO: IDCO
                    }
                }).done(function (data, x, jq) {
                    var dtm = data[0];
                    mdlTrabajoEditarGeneradorPorConcepto.find("#Precio").val(dtm.Precio);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
            tblGeneradoresDetalleXConcepto += '</tbody></table>';
            mdlTrabajoEditarGeneradorPorConcepto.find("#tblEditarGeneradorXConcepto").html(tblGeneradoresDetalleXConcepto);
            var DataTableGeneradores = mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto");
            if ($.fn.dataTable.isDataTable(DataTableGeneradores)) {
                var tblDataTableGeneradores = DataTableGeneradores.DataTable(tableOptions);
                mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto").find('tbody').on('click', 'tr', function () {
                    DataTableGeneradores.find("tr").removeClass("success");
                    DataTableGeneradores.find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblDataTableGeneradores.row(this).data();
                });
            } else {
                DataTableGeneradores.DataTable(tableOptions);
            }
            mdlTrabajoEditarGeneradorPorConcepto.find("#Precio").val(precio);
            /*setear cantidadTotal*/
            mdlTrabajoEditarGeneradorPorConcepto.find("#GeneradorImporteTotal").html('<strong class="spanTotalesDetalle">Total: </strong><span class="text-success spanTotalesDetalle">' + $.number(cantidadTotal, 6, '.', ', ') + '</span> ');
            mdlTrabajoEditarGeneradorPorConcepto.modal('show');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEditarGeneradorXID(evt, IDX) {
        var row = $(evt).parent().parent().find("td");
        mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val(row.eq(0).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#IDG").val(row.eq(1).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val(row.eq(2).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val(row.eq(4).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Eje").val(row.eq(5).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje1").val(row.eq(6).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje2").val(row.eq(7).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val(row.eq(8).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val(row.eq(9).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val(row.eq(10).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val(row.eq(11).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Precio").val(row.eq(15).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar").addClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador").addClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(1).addClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGenerador").addClass("active in");
        btnCancelarEditarGenerador.removeClass("hide");
        btnMoficarEditarGenerador.removeClass("hide");
    }
    function onModificarGeneradorXID() {
        var frm = new FormData();
        /*Total*/
        var generador_largo = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() : 1);
        var generador_ancho = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() : 1);
        var generador_alto = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() : 1);
        var generador_cantidad = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() : 1);
        var total_generador = parseFloat((generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad)));
        frm.append('ID', mdlTrabajoEditarGeneradorPorConcepto.find("#IDG").val());
        frm.append('Area', mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val());
        frm.append('Eje', mdlTrabajoEditarGeneradorPorConcepto.find("#Eje").val());
        frm.append('EntreEje1', mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje1").val());
        frm.append('EntreEje2', mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje2").val());
        frm.append('Largo', mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val());
        frm.append('Ancho', mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val());
        frm.append('Alto', mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val());
        frm.append('Cantidad', mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val());
        frm.append('Total', total_generador);
        if (parseFloat(total_generador) !== 0) {
            HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
            $.ajax({
                url: master_url + 'onModificarGenerador',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
                mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
                mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
                mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active in");
                mdlTrabajoEditarGeneradorPorConcepto.find("#IDG").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Eje").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje1").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje2").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#btnModificar").addClass("hide");
                mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelar").addClass("hide");
                mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar").removeClass("hide");
                mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador").removeClass("hide");
                getReloadGeneradoresDetalleXConcepto(mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val());
            }).fail(function (x, y, z) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL MODIFICAR', 'danger');
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR, NECESITA ESPECIFICAR UN VALOR: LARGO, ANCHO, ALTO O CANTIDAD', 'danger');
        }
    }
    function onCancelarEditarModificarGeneradorXID(evt) {
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar").removeClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador").removeClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnModificar").addClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelar").addClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active in");
        mdlTrabajoEditarGeneradorPorConcepto.find("#IDG").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Eje").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje1").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje2").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val("");
    }
    function onCancelarEditarAgregarNuevoGenerador() {
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar").removeClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador").removeClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnModificar").addClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelar").addClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active in");
        mdlTrabajoEditarGeneradorPorConcepto.find("#IDG").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Eje").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje1").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje2").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val("");
        mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val("");
    }
    function onEliminarGeneradorEditar(IDG) {
        $.ajax({
            url: master_url + 'onEliminarGeneradorEditar',
            type: "POST",
            data: {
                ID: IDG
            }
        }).done(function (data, x, jq) {
            getTrabajoDetalleByID(mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val());
            getReloadGeneradoresDetalleXConcepto(mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val());
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getConceptosXPreciarioIDEditar(IDX) {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getConceptosXPreciarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            HoldOn.close();
            mdlTrabajoNuevoConceptoEditar.find("#ConceptosXPreciarioID").html(getTable('tblConceptosXPreciarioID', data));
            mdlTrabajoNuevoConceptoEditar.find('#tblConceptosXPreciarioID tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
            });
            var tblSelected = $('#tblConceptosXPreciarioID').DataTable(tableOptions);
            tblSelected.columns().every(function () {
                var that = this;
                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
            mdlTrabajoNuevoConceptoEditar.find('#tblConceptosXPreciarioID tbody').on('click', 'tr', function () {
                mdlTrabajoNuevoConceptoEditar.find("#tblConceptosXPreciarioID").find("tr").removeClass("success");
                mdlTrabajoNuevoConceptoEditar.find("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
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
                $.ajax({
                    url: master_url + 'getConceptoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    /**AQUI FALTA VALIDAR QUE EL CONCEPTO NO HAYA SIDO AGREGADO CON ANTERIORIDAD**/
                    var has_id = true;
                    if (pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo tbody tr").length > 0) {
                        $.each(pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo tbody tr"), function () {
                            var row_status = $(this).find("td").eq(14).text();
                            if (parseInt(row_status) === parseInt(temp)) {
                                has_id = false;
                                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ESTE CONCEPTO YA HA SIDO AGREGADO', 'danger');
                                return false;
                            }
                        });
                    }
                    if (has_id) {
                        $.ajax({
                            url: master_url + 'getConceptoByIDSinFormato',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: parseInt(dtm[0])
                            }
                        }).done(function (data, x, jq) {
                            if (data[0] !== undefined && data.length > 0) {
                                var dtm = data[0];
                                var frm = new FormData();
                                frm.append('Trabajo_ID', pnlEditarTrabajo.find("#EditarDatos").find("#ID").val());
                                frm.append('PreciarioConcepto_ID', dtm.ID);
                                frm.append('Renglon', pnlDetalleEditarTrabajo.find("table tr").length);
                                frm.append('Unidad', dtm.Unidad);
                                frm.append('Precio', dtm.Costo);
                                frm.append('Moneda', dtm.Moneda);
                                $.ajax({
                                    url: master_url + 'onAgregarDetalleEditar',
                                    type: "POST",
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    data: frm
                                }).done(function (data, x, jq) {
                                    getTrabajoDetalleByID(pnlEditarTrabajo.find("#EditarDatos").find("#ID").val());
                                }).fail(function (x, y, z) {
                                    console.log(x, y, z);
                                }).always(function () {
                                    HoldOn.close();
                                });
                                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO EL CONCEPTO', 'success');
                            } else {
                                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL CONCEPTO NO SE AGREGO, INTENTE DE NUEVO', 'danger');
                            }
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                            HoldOn.close();
                        });
                        if (!mdlTrabajoNuevoConceptoEditar.find("#chkMultiple").is(":checked")) {
                            mdlTrabajoNuevoConceptoEditar.modal('hide');
                        }
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    btnNuevoConceptoEditar.on("click", function () {
        var Preciario_ID = pnlEditarTrabajo.find("#Preciario_ID").val();
        if (Preciario_ID !== undefined && Preciario_ID !== '' && Preciario_ID > 0) {
            getConceptosXPreciarioIDEditar(Preciario_ID);
            mdlTrabajoNuevoConceptoEditar.modal('show');
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PRECIARIO', 'danger');
        }
    });
    /*MODIFICAR EL IMPORTE DEL TRABAJO*/
    function getImporteTotalDelTrabajoByID(IDX) {
        $.ajax({
            url: master_url + 'getImporteTotalDelTrabajoByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data !== undefined && data.length > 0 && data[0] !== undefined && data[0].IMPORTE_TOTAL_TRABAJO !== undefined && data[0].IMPORTE_TOTAL_TRABAJO !== null) {
                var dtm = data[0];
                pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle"> ' + dtm.IMPORTE_TOTAL_TRABAJO + '</span>');
            } else {
                pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ 0.0</span>');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*MODIFICAR INTERIOR Y EXTERIOR TRABAJO DETALLE*/
    function onChangeIntExtByID(IntExt, IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'onChangeIntExtByDetalleID',
            type: "POST",
            data: {
                ID: IDX,
                IntExt: IntExt
            }
        }).done(function (data, x, jq) {
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Multimedia*/
    function getFotosXConceptoID(IDX, IDT) {
        mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarFotosPorConcepto.find("#Fotos").html("");
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO FOTOS...'
        });
        $.ajax({
            url: master_url + 'getTrabajoFotosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX,
                IDT: IdMovimiento
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    console.log(v);
                    console.log(base_url + v.Url);
                    picthumbnail += '<div class="col-md-3">';
                    picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarFotoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';
                    mdlTrabajoEditarFotosPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
            }
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarFotosPorConcepto.modal('show');
    }
    function getFotosAntesXConceptoID(IDX, IDT) {
        mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarFotosAntesPorConcepto.find("#Fotos").html("");
        HoldOn.open({theme: 'sk-bounce', message: 'CARGANDO FOTOS...'});
        $.ajax({
            url: master_url + 'getTrabajoFotosAntesDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosAntesPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3">';
                     picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarFotoAntesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';
                     mdlTrabajoEditarFotosAntesPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
            }
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarFotosAntesPorConcepto.modal('show');
    }
    function getFotosDespuesXConceptoID(IDX, IDT) {
        mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarFotosDespuesPorConcepto.find("#Fotos").html("");
        HoldOn.open({theme: 'sk-bounce', message: 'CARGANDO FOTOS...'});
        $.ajax({
            url: master_url + 'getTrabajoFotosDespuesDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosDespuesPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3">';
                      picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarFotoDespuesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';
                      mdlTrabajoEditarFotosDespuesPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
            }
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarFotosDespuesPorConcepto.modal('show');
    }
    function getFotosProcesoXConceptoID(IDX, IDT) {
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("");
        HoldOn.open({theme: 'sk-bounce', message: 'CARGANDO FOTOS...'});
        $.ajax({
            url: master_url + 'getTrabajoFotosProcesoDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3">';
                     picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarFotoProcesoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';
       
                    mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } 
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarFotosProcesoPorConcepto.modal('show');
    }
    function getCroquisXConceptoID(IDX, IDT) {
        mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarCroquisPorConcepto.find("#Fotos").html("");
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO CROQUIS...'
        });
        $.ajax({
            url: master_url + 'getTrabajoCroquisDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 2) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-6">';
                     picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarCroquisXID(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';
                    mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } 
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarCroquisPorConcepto.modal('show');
    }
    function getAnexosXConceptoID(IDX, IDT) {
        mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarAnexosPorConcepto.find("fieldset").find("div#Anexos").html("");
        HoldOn.open({theme: 'sk-bounce', message: 'CARGANDO ANEXOS...'
        });
        $.ajax({url: master_url + 'getTrabajoAnexosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX,
                IDT: IdMovimiento
            }
        }).done(function (data, x, jq) {
            mdlTrabajoEditarAnexosPorConcepto.find("fieldset").find("div#Anexos").html("");
            if (data.length > 0) {
                var nimg = 0;
                $.each(data, function (k, v) {
                    if (nimg === 3) {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-12" align="center"><br></div>');
                        nimg = 0;
                    }
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
                    if (ext === "txt" || ext === "dat") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf-o fa-5x"></span><br><br> <span class="label label-info"> <span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-5x"></span><br><br> <span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    }
                    nimg++;
                });
            } else {
                mdlTrabajoEditarAnexosPorConcepto.find("div#Anexos").html('<h3>NO EXISTEN ANEXOS ADJUNTOS</h3>');
            }
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarAnexosPorConcepto.modal('show');
    }
    function setFotosEditar(evt) {
        mdlTrabajoEditarFotosPorConcepto.find("#fFotos").trigger('click');
    }
    function setFotosAntesEditar(evt) {
        mdlTrabajoEditarFotosAntesPorConcepto.find("#fFotos").trigger('click');
    }
    function setFotosDespuesEditar(evt) {
        mdlTrabajoEditarFotosDespuesPorConcepto.find("#fFotos").trigger('click');
    }
    function setFotosProcesoEditar(evt) {
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#fFotos").trigger('click');
    }
    function setCroquisEditar(evt) {
        mdlTrabajoEditarCroquisPorConcepto.find("#fCroquis").trigger('click');
    }
    function setAnexosEditar(evt) {
        mdlTrabajoEditarAnexosPorConcepto.find("#fAnexos").trigger('click');
    }
    function onReloadFotosXConcepto(IDX, IDT) {
        $.ajax({
            url: master_url + 'getTrabajoFotosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX,
                IDT: IDT
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3">';
                     picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarFotoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';

                    mdlTrabajoEditarFotosPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlTrabajoEditarFotosPorConcepto.find("#Fotos").html("");
            }
            HoldOn.close();
            getTrabajoDetalleByID(IDT);
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onReloadFotosAntesXConcepto(IDX, IDT) {
        $.ajax({
            url: master_url + 'getTrabajoFotosAntesDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosAntesPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3">';
                     picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarFotoAntesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';
                    mdlTrabajoEditarFotosAntesPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlTrabajoEditarFotosAntesPorConcepto.find("#Fotos").html("");
            }
            getDetalleAbiertoByID(IDT);
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onReloadFotosDespuesXConcepto(IDX, IDT) {
        $.ajax({
            url: master_url + 'getTrabajoFotosDespuesDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosDespuesPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3">';
                     picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarFotoDespuesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';
                    mdlTrabajoEditarFotosDespuesPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlTrabajoEditarFotosDespuesPorConcepto.find("#Fotos").html("");
            }
            getDetalleAbiertoByID(IDT);
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onReloadFotosProcesoXConcepto(IDX, IDT) {
        $.ajax({
            url: master_url + 'getTrabajoFotosProcesoDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3">';
                     picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarFotoProcesoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';
                    mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("");
            }
            getDetalleAbiertoByID(IDT);
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onReloadCroquisXConcepto(IDX, IDT) {
        $.ajax({
            url: master_url + 'getTrabajoCroquisDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
              if (data.length > 0) {
                mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 2) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-6">';
                     picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>'+
                            '<div class="pull-right" >'+
                            '<button class="close closeFotos customButtonEliminarFoto"'+
                            'data-tooltip="Eliminar" onclick="onEliminarCroquisXID(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>'+
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div>';
        
                    mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } 
            getTrabajoDetalleByID(IDT);
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onReloadAnexosXConcepto(IDX, IDT) {
        $.ajax({url: master_url + 'getTrabajoAnexosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX,
                IDT: IDT
            }
        }).done(function (data, x, jq) {
            mdlTrabajoEditarAnexosPorConcepto.find("fieldset").find("div#Anexos").html("");
            if (data.length > 0) {
                var nimg = 0;
                $.each(data, function (k, v) {
                    if (nimg === 3) {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-12" align="center"><br></div>');
                        nimg = 0;
                    }
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
                    if (ext === "txt" || ext === "dat") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel-o fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-5x"></span><br><br><span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf-o fa-5x"></span><br><br> <span class="label label-info"> <span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-4" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-5x"></span><br><br> <span class="label label-info"> ' + v.Observaciones + '</span></a><br> <button type="button" class="btn btn-raised btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    }
                    nimg++;
                });
            } else {
                mdlTrabajoEditarAnexosPorConcepto.find("div#Anexos").html('<h3>NO EXISTEN ANEXOS ADJUNTOS</h3>');
            }
            getDetalleAbiertoByID(IdMovimiento);
            getTrabajoDetalleByID(IdMovimiento);
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onEliminarFotoXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO..."
        });
        $.ajax({
            url: master_url + 'onEliminarFotoXConcepto',
            type: "POST",
            data: {
                ID: IDX,
                IDT: IdMovimiento
            }
        }).done(function (data, x, jq) {
            onReloadFotosXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarFotoAntesXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
        $.ajax({
            url: master_url + 'onEliminarFotoAntesXConcepto',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            onReloadFotosAntesXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarFotoDespuesXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
        $.ajax({
            url: master_url + 'onEliminarFotoDespuesXConcepto',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            onReloadFotosDespuesXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarFotoProcesoXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
        $.ajax({
            url: master_url + 'onEliminarFotoProcesoXConcepto',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            onReloadFotosProcesoXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarCroquisXID(IDX, IDTD, IDT) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO ANEXO..."
        });
        $.ajax({
            url: master_url + 'onEliminarCroquisXID',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            onReloadCroquisXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarAnexoXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO ANEXO..."
        });
        $.ajax({
            url: master_url + 'onEliminarAnexoXConcepto ',
            type: "POST",
            data: {
                ID: IDX,
                IDT: IDT
            }
        }).done(function (data, x, jq) {
            console.log(data);
            onNotify('<span class="fa fa-check fa-lg"></span>', 'ANEXO, ELIMINADO', 'success');
            onReloadAnexosXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Funciones Detalle Abierto*/
    var tempDetalleAbierto = 0;
    function getDetalleAbiertoByID(IDX) {
        var ImporteTotal = pnlDetalleEditarTrabajoAbierto.find("#ImporteTotal");
        var totalAbierto = 0.0;
        $.ajax({
            url: master_url + 'getTrabajoDetalleAbiertoByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").html(getTable('tblRegistrosXDetalleAbierto', data));
                var thead = pnlDetalleEditarTrabajoAbierto.find('#tblRegistrosXDetalleAbierto thead th');
                var tfoot = pnlDetalleEditarTrabajoAbierto.find('#tblRegistrosXDetalleAbierto tfoot th');
                thead.eq(0).addClass("hide");
                tfoot.eq(0).addClass("hide");
                $.each(pnlDetalleEditarTrabajoAbierto.find('#tblRegistrosXDetalleAbierto tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("hide");
                });
                /*Seteamos el importeTotal*/
                ImporteTotal.html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ ' + $.number(totalAbierto, 2, '.', ', ') + '</span>');
                var tblSelected = pnlDetalleEditarTrabajoAbierto.find('#tblRegistrosXDetalleAbierto').DataTable(tableOptions);
                pnlDetalleEditarTrabajoAbierto.find('#tblRegistrosXDetalleAbierto tbody').on('click', 'tr', function () {
                    pnlDetalleEditarTrabajoAbierto.find("#tblRegistrosXDetalleAbierto").find("tr").removeClass("success");
                    pnlDetalleEditarTrabajoAbierto.find("#tblRegistrosXDetalleAbierto").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    tempDetalleAbierto = parseInt(dtm[0]);
                });
            } else {
                pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").html("");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEditarConceptoXDetalleAbierto(IDX) {
        $.ajax({
            url: master_url + 'getTrabajoDetalleAbiertoByID',
            type: "POST",
            data: {ID: IDX}
        }).done(function (data, x, jq) {
            if (IDX !== 0 && IDX !== undefined && IDX > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'getDetalleAbiertoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {ID: IDX}
                }).done(function (data, x, jq) {
                    $('#mdlEditarConceptoAbierto').find("input").val("");
                    var concepto = data[0];
                    $('#mdlEditarConceptoAbierto').find("#ID").val(concepto.ID);
                    $('#mdlEditarConceptoAbierto').find("#Trabajo_ID").val(concepto.Trabajo_ID);
                    $('#mdlEditarConceptoAbierto').find("#Clave").val(concepto.Clave);
                    $('#mdlEditarConceptoAbierto').find("#Descripcion").val(concepto.Descripcion);
                    $('#mdlEditarConceptoAbierto').modal('show');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        }).fail(function (x, y, z) {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO NO ENCONTRADO', 'danger');
        }).always(function () {
        });
    }
    /***************************************REPORTES*****************************************/
    function onReporteFin49() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteFin49',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'FIN 49, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteFin49Conceptos() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteFin49Conceptos',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'FIN 49 CONCEPTOS, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteResumenPartidas() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteResumenPartidas',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'RESUMEN, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReportePresupuestoBBVA() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReportePresupuestoBBVA',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO BBVA, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReportePresupuesto() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReportePresupuesto',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteGenerador() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteGenerador',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADOR, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteCroquis() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteCroquis',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE CROQUIS, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteFotografico() {
        var mov = pnlEditarTrabajo.find("#Movimiento").val();
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onReporteFotografico',
            type: "POST",
            data: {ID: IdMovimiento, Movimiento: mov}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOGRAFICO, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteExcelTarifarioXMov() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getTarifarioXMovimiento',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            window.open(data, '_blank');
            onNotify('<span class="fa fa-check fa-lg"></span>', 'TARIFARIO GENERADO', 'success');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    var Cliente = 0;
    function onReporteLevantamientoAntes() {
        var mov = pnlEditarTrabajo.find("#Movimiento").val();
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoAntesPrinciple';
        } else {
            reporte = 'onReporteLevantamientoAntes';
        }
        $.ajax({
            url: master_url + reporte,
            type: "POST",
            data: {ID: IdMovimiento, Movimiento: mov}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS ANTES PRINCIPLE, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteLevantamientoProceso() {
        var mov = pnlEditarTrabajo.find("#Movimiento").val();
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoProcesoPrinciple';
        } else {
            reporte = 'onReporteLevantamientoProceso';
        }
        $.ajax({
            url: master_url + reporte,
            type: "POST",
            data: {ID: IdMovimiento, Movimiento: mov}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS EN PROCESO PRINCIPLE, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteLevantamientoDespues() {
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoDespuesPrinciple';
        } else {
            reporte = 'onReporteLevantamientoDespues';
        }
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + reporte,
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS DESPUES, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteLevantamientoCompleto() {
        var reporte = '';
        var mov = pnlEditarTrabajo.find("#Movimiento").val();
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoCompletoPrinciple';
        } else {
            reporte = 'onReporteLevantamientoCompleto';
        }
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + reporte,
            type: "POST",
            data: {ID: IdMovimiento, Movimiento: mov}
        }).done(function (data, x, jq) {
            console.log(data);
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE LEVANTAMIENTO COMPLETO, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*************************FIN REPORTES ****************************/
</script>
