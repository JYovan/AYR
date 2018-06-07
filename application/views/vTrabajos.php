<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading"><div class="cursor-hand" >Trabajos</div></div>
        <div class="panel-body">
            <fieldset><div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default" id="btnVerMisMovimientos"><span class="fa fa-eye fa-1x"></span><br>MIS MOVIMIENTOS</button>
                    <button type="button" class="btn btn-default" id="btnVerTodosEnFirme"><span class="fa fa-eye fa-1x"></span><br>TODOS EN FIRME</button>
                    <button type="button" class="btn btn-default" id="btnVerTodos"><span class="fa fa-list-ol fa-1x" ></span><br>VER TODOS</button>

                </div><div class="col-md-12 table-responsive" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>
<!--Reportes-->
<div id="mdlReportesEditarTrabajo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Imprimir Reportes</h4>
        </div>
        <div class="modal-body">Selecciona el reporte que deseas imprimir
            <div class="col-md-12"><br></div>
            <div id="reportesPresupuesto" class="dt-buttons">
                <div class="col-6 col-md-12">
                    <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                        <li role="presentation" class="active"><a href="#Generales" aria-controls="Generales" role="tab" data-toggle="tab">Generales</a></li>
                        <li role="presentation"><a href="#Obras" aria-controls="Obras" role="tab" data-toggle="tab">Obras</a></li>
                        <li role="presentation"><a href="#Mantenimientos" aria-controls="Mantenimientos" role="tab" data-toggle="tab">Mantenimiento</a></li>
                        <li role="presentation"><a href="#Presentaciones" aria-controls="Presentaciones" role="tab" data-toggle="tab">Presentaciones</a></li>
                        <li role="presentation" id="rNordes" class="hide"><a href="#Nordes" aria-controls="Nordes" role="tab" data-toggle="tab">Nordes</a></li>
                    </ul>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Generales">
                        <button onclick="onReportePresupuesto()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>PRESUPUESTO A&R</button>
                        <button onclick="onReportePresupuestoIng()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>PRESUPUESTO A&R INGLÉS</button>
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
                        <button onclick="onReporteExcelTarifarioXMov()" class="btn btn-default"><span class="fa fa-download fa-1x"></span><br>TARIFARIO</button>
                        <button onclick="onReporteExcelFicheroXMov()" class="btn btn-default"><span class="fa fa-download fa-1x"></span><br>FICHEROS</button>
                        <button onclick="onReporteCaratulaBBVA()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>CARÁTULA BBVA</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Presentaciones">
                        <button onclick="onReporteLevantamientoAntes();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS ANTES</button>
                        <button onclick="onReporteLevantamientoProceso();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS PROCESO</button>
                        <button onclick="onReporteLevantamientoDespues();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS DESPUÉS</button>
                        <button onclick="onReporteLevantamientoCompleto()" class="btn btn-default"><span class="fa fa-image fa-1x"></span><br>GENERAL</button>
                        <button onclick="onReportePresentacionCajeros();" class="btn btn-default"><span class="fa fa-image fa-1x"></span><br>PRESENTACIÓN DE CAJEROS</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Nordes">
                        <button onclick="onReporteNordesActaRecepcion();" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>Acta Recepción Trabajos Extras</button>
                        <button onclick="onReporteNordesHojaServicio();" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>Hoja de Servicio Diario</button>
                        <button onclick="onReporteNordesReporteTableros();" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>Reporte Tableros Iguala</button>
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
            <button type="button" class="btn btn-raised btn-primary" id="btnEliminar">ACEPTAR</button>
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
            <button type="button" class="btn btn-raised btn-primary" id="btnEliminarConcepto">ACEPTAR</button>
        </div>
    </div>
</div>
<!--Confirmacion Concepto Cajero-->
<div id="mdlConfirmarEliminarConceptoCajero" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">Deseas eliminar el registro?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEliminarConceptoCajero">ACEPTAR</button>
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
            <button type="button" class="btn btn-raised btn-primary" id="btnEliminarConceptoAbierto">ACEPTAR</button>
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
                            <li id="nBBVAMantenimiento" class="hide" role="presentation"><a href="#Datos3" aria-controls="Datos3" role="tab" data-toggle="tab">Mantenimiento BBVA</a></li>
                            <li id="nBBVAObra" class="hide" role="presentation"><a href="#Datos4" aria-controls="Datos4" role="tab" data-toggle="tab">Obra BBVA</a></li>
                            <li id="nBBVACajeros" class="hide" role="presentation"><a href="#Datos5" aria-controls="Datos5" role="tab" data-toggle="tab">Cajeros BBVA</a></li>
                            <li  role="presentation"><a href="#Datos6" aria-controls="Datos6" role="tab" data-toggle="tab">Adjunto</a></li>
                        </ul>
                    </div>
                    <!-- Estatus -->
                    <div class="col-12 col-md-12">
                        <center>
                            <div class="form-group label-static">
                                <label class="radio-inline ">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="inlineRadio1" value="Pedido">
                                    <label class="label-Pedido" for="inlineRadio1">1. Pedido</label>
                                </label>
                                <label class="radio-inline radio-inline-Presupuesto">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="inlineRadio2" value="Presupuesto">
                                    <label class="label-Presupuesto" for="inlineRadio2">2.Presupuesto</label>
                                </label>
                                <label class="radio-inline radio-inline-Autorizacion">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="inlineRadio3" value="Autorización">
                                    <label class="label-Autorizacion" for="inlineRadio3">3. Autorización Del Cliente</label>
                                </label>
                                <label class="radio-inline radio-inline-NoAutorizado">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="inlineRadio4" value="No Autorizado">
                                    <label class="label-NoAutorizado" for="inlineRadio4">4. No Autorizado</label>
                                </label>
                                <label class="radio-inline radio-inline-Ejecucion">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="inlineRadio5" value="Ejecución">
                                    <label class="label-Ejecucion" for="inlineRadio5">5. Ejecución</label>
                                </label>
                                <label class="radio-inline radio-inline-Finalizado">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="inlineRadio6" value="Finalizado">
                                    <label class="label-Finalizado" for="inlineRadio6">6. Finalizado</label>
                                </label>
                                <label class="radio-inline radio-inline-Pagado">
                                    <input type="radio" name="NuevoEstatusTrabajo" id="inlineRadio7" value="Pagado">
                                    <label class="label-Pagado" for="inlineRadio7">7. Pagado</label>
                                </label>
                            </div>
                        </center>
                        <hr>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="Datos">
                            <div class=" col-1 col-md-1">
                                <div class="form-group label-static">
                                    <label for="ID" class="control-label">Folio Interno</label>
                                    <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                                </div>
                            </div>
                            <div class="col-2 col-md-2">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Folio Cliente</label>
                                    <input type="text" id="FolioCliente" name="FolioCliente" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Cliente*</label>
                                    <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Sucursal*</label>
                                    <select id="Sucursal_ID" name="Sucursal_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Preciario*</label>
                                    <select id="Preciario_ID" name="Preciario_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Centro de Costos</label>
                                    <select id="CentroCostos_ID" name="CentroCostos_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Especialidad</label>
                                    <select id="Especialidad_ID" name="Especialidad_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Área</label>
                                    <select id="Area_ID" name="Area_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="Observaciones" class="control-label">Observaciones</label>
                                    <input type="text" id="Observaciones" name="Observaciones" class="form-control"  placeholder="ALGUNA REFERENCIA, MINUTA, ETC" >
                                </div>
                            </div>
                            <div id="ControlProceso" class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Control de fotos proceso</label>
                                    <select id="" name="ControlProceso" class="form-control " >
                                        <option value=""></option>
                                        <option value="Dias">DÍAS</option>
                                        <option value="Semanas">SEMANAS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Trabajo Solicitado</label>
                                    <textarea class="col-md-12 form-control" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="3" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Trabajo Requerido</label>
                                    <textarea class="col-md-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="3" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos2">
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Cuadrilla</label>
                                    <select id="Cuadrilla_ID" name="Cuadrilla_ID" class="form-control" ><option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Fecha Atención</label>
                                    <input type="text" id="FechaAtencion" name="FechaAtencion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class=" col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Solicitante</label>
                                    <input type="text" id="Solicitante" name="Solicitante" class="form-control"  placeholder="PERSONA QUE SOLICITA EL TRABAJO" >
                                </div>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Fecha Origen</label>
                                            <input type="text" id="FechaOrigen" required="" name="FechaOrigen" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Hora Origen</label>
                                            <input type="text"  class="form-control" name="HoraOrigen" id="HoraOrigen" data-provide="timepicker" data-minute-step="1" data-second-step="1"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Fecha Visita</label>
                                    <input type="text" id="FechaLlegada" name="FechaLlegada" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Hora Visita</label>
                                    <input type="text"  class="form-control" name="HoraLlegada" id="HoraLlegada" data-provide="timepicker" data-minute-step="1"  data-second-step="1"/>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Fecha Fin Visita</label>
                                    <input type="text" id="FechaSalida" name="FechaSalida" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Hora Fin Visita</label>
                                    <input type="text"  class="form-control" name="HoraSalida" id="HoraSalida" data-provide="timepicker" data-minute-step="1"   data-second-step="1" />
                                </div>
                            </div>
                        </div>
                        <!--PANEL DE MANTENIMIENTO BBVA-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos3">
                            <div class="col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Codigo PPTA</label>
                                            <select id="Codigoppta_ID" name="Codigoppta_ID" class="form-control" >
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Días</label>
                                            <input type="text" id="Dias" name="" class="form-control" readonly="" placeholder="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row ">
                                    <div class=" col-3 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="CausaActuacionSintoma" class="control-label">Causa Síntoma</label>
                                            <input type="text" id="CausaActuacionSintoma" name="CausaActuacionSintoma" class="form-control" placeholder="" >
                                        </div>
                                    </div>
                                    <div class=" col-3 col-md-6">
                                        <div class="form-group label-static">
                                            <label for="TextoCausa" class="control-label">Texto Causa</label>
                                            <input type="text" id="TextoCausa" name="TextoCausa" class="form-control"  placeholder="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal1" class="control-label">Calificación 1</label>
                                    <select id="Cal1" name="Cal1" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal2" class="control-label">Calificación 2</label>
                                    <select id="Cal2" name="Cal2" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal3" class="control-label">Calificación 3</label>
                                    <select id="Cal3" name="Cal3" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal4" class="control-label">Calificación 4</label>
                                    <select id="Cal4" name="Cal4" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal5" class="control-label">Calificación 5</label>
                                    <select id="Cal5" name="Cal5" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--PANEL DE OTROS DATOS-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos4">
                            <input type="text" id="ImpactoEnPlazo" name="ImpactoEnPlazo" class="hide" readonly="" placeholder="" >
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Impacto en el Plazo</label>
                                    <div class="togglebutton">
                                        <label><input type="checkbox" id="NuevoImpactoEnPlazo" name="NuevoImpactoEnPlazo" ></label>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Días de Impacto</label>
                                    <input type="number" id="DiasImpacto" name="DiasImpacto" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Causa del trabajo</label>
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
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Clave Origen</label>
                                    <select id="ClaveOrigenTrabajo" name="ClaveOrigenTrabajo" class="form-control" >
                                        <option value=""></option>
                                        <option value="CONTR">CONTR - CONTRATISTA</option>
                                        <option value="GDP">GDP - GERENCIADORA DE PROYECTOS</option>
                                        <option value="BBVA">CTE - CLIENTE</option>
                                        <option value="OTRO">OTRO - OTRO</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="EspecificaOrigenTrabajo" class="control-label">(En caso de otros) Especifica</label>
                                    <input type="text" id="EspecificaOrigenTrabajo" name="EspecificaOrigenTrabajo" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Origen del Trabajo</label>
                                    <textarea class="col-md-12 form-control" id="DescripcionOrigenTrabajo" name="DescripcionOrigenTrabajo" rows="3" ></textarea>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Riesgo del Trabajo</label>
                                    <textarea class="col-md-12 form-control" id="DescripcionRiesgoTrabajo" name="DescripcionRiesgoTrabajo" rows="3" ></textarea>
                                </div>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Alcance del Trabajo</label>
                                    <textarea class="col-md-12 form-control" id="DescripcionAlcanceTrabajo" name="DescripcionAlcanceTrabajo" rows="3" ></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DE CAJERO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos5">
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaVisita" class="control-label">Fecha Visita</label>
                                    <input type="text" id="FechaVisita" name="FechaVisita" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class=" col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="EncargadoSitio" class="control-label">Encargado del Sitio</label>
                                    <input type="text" id="EncargadoSitio" name="EncargadoSitio" class="form-control"  placeholder="PERSONA ENCARGADA DEL SITIO" >
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Horario de Atención</label>
                                    <input type="text" id="HorarioAtencion" name="HorarioAtencion" class="form-control"   >
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="RestriccionAcceso" class="control-label">Restricción de Acceso?</label>
                                    <select id="RestriccionAcceso" name="RestriccionAcceso" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="AireAcondicionado" class="control-label">Aire Acondicionado?</label>
                                    <select id="AireAcondicionado" name="AireAcondicionado" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Carcasa" class="control-label">Carcasa?</label>
                                    <select id="Carcasa" name="Carcasa" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="UPS" class="control-label">UPS/Supresor de Picos?</label>
                                    <select id="UPS" name="UPS" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="SenalizacionInterior" class="control-label">Señalización Interior?</label>
                                    <select id="SenalizacionInterior" name="SenalizacionInterior" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="SenalizacionExterior" class="control-label">Señalización Exterior?</label>
                                    <select id="SenalizacionExterior" name="SenalizacionExterior" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="CanalizacionDatos" class="control-label">Canalización de Datos?</label>
                                    <select id="CanalizacionDatos" name="CanalizacionDatos" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="CanalizacionSeguridad" class="control-label">Canalización de Seguridad?</label>
                                    <select id="CanalizacionSeguridad" name="CanalizacionSeguridad" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="PruebaCalaFirme" class="control-label">Prueba de Cala de Firme</label>
                                    <input type="text" id="PruebaCalaFirme" name="PruebaCalaFirme" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="TipoPiso" class="control-label">Tipo Piso</label>
                                    <input type="text" id="TipoPiso" name="TipoPiso" class="form-control"  placeholder="" >
                                </div>
                            </div>
                        </div>
                        <!-- PANEL DE ARCHIVO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos6">
                            <center><label for="" class="control-label">Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</label></center>
                            <div class="col-md-12" align="center">
                                <input type="file" id="Adjunto" name="Adjunto" class="hide">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x"></span> SELECCIONA EL ARCHIVO
                                </button>
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            </div>
                            <div class="col-md-12 hide">
                                <input type="text" id="Usuario_ID"  name="Usuario_ID"    class="form-control" >
                            </div>
                        </div>
                        <div class="col-6 col-md-12"><br><h6>Los campos con * son obligatorios</h6></div>
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
                <div id="ImporteTotal" class="col-md-12" align="right">
                    <span class="text-success spanTotalesDetalle">$ 0.0</span>
                </div>
                <div class="col-6 col-md-12">
                    <ul class="nav nav-tabs" role="tablist" id="tbDetalleNuevo">
                        <li role="presentation" class="active"><a href="#Presupuesto" aria-controls="Presupuesto" role="tab" data-toggle="tab">Conceptos Presupuesto</a></li>
                        <li role="presentation"><a href="#Levantamiento" aria-controls="Levantamiento" role="tab" data-toggle="tab">Conceptos Levantamiento</a></li>
                        <li class="hide" role="presentation" id="pnCajeros"><a href="#Cajeros" aria-controls="Cajeros" role="tab" data-toggle="tab">Conceptos Cajeros</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="Presupuesto">
                        <fieldset>
                            <div class="col-md-12" align="right">
                                <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                            </div>
                            <div class="col-md-12 table-responsive" id="Conceptos" ></div>
                        </fieldset>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Levantamiento">
                        <fieldset>
                            <div class="col-md-12" align="right">
                                <button type="button" class="btn btn-default" id="btnNuevoConceptoAbierto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                            </div>
                        </fieldset>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Cajeros">
                        <fieldset>
                            <div class="col-md-12" align="right">
                                <button type="button" class="btn btn-default" id="btnNuevoConceptoCajero"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </fieldset>
        </div>
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
                    </button>Editar Trabajo
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
                            <li id="eBBVAMantenimiento" class="hide" role="presentation"><a href="#EditarDatos3" aria-controls="EditarDatos3" role="tab" data-toggle="tab">Mantenimiento BBVA</a></li>
                            <li id="eBBVAObra" class="hide" role="presentation"><a href="#EditarDatos4" aria-controls="EditarDatos4" role="tab" data-toggle="tab">Obra BBVA</a></li>
                            <li id="eBBVACajeros" class="hide" role="presentation"><a href="#EditarDatos5" aria-controls="EditarDatos5" role="tab" data-toggle="tab">Cajeros BBVA</a></li>
                            <li role="presentation"><a href="#EditarDatos6" aria-controls="EditarDatos6" role="tab" data-toggle="tab">Adjunto</a></li>
                        </ul>
                    </div>
                    <!-- Estatus -->
                    <div class="col-12 col-md-12">
                        <center>
                            <div class="form-group label-static">
                                <label class="radio-inline ">
                                    <input  type="radio" name="EstatusTrabajo" id="inlineRadio1" value="Pedido">
                                    <label class="label-Pedido" for="inlineRadio1">1. Pedido</label>
                                </label>
                                <label class="radio-inline radio-inline-Presupuesto">
                                    <input type="radio" name="EstatusTrabajo" id="inlineRadio2" value="Presupuesto">
                                    <label class="label-Presupuesto" for="inlineRadio2">2. Presupuesto</label>
                                </label>
                                <label class="radio-inline radio-inline-Autorizacion">
                                    <input type="radio" name="EstatusTrabajo" id="inlineRadio3" value="Autorización">
                                    <label class="label-Autorizacion" for="inlineRadio3">3. Autorización Del Cliente</label>
                                </label>
                                <label class="radio-inline radio-inline-NoAutorizado">
                                    <input type="radio" name="EstatusTrabajo" id="inlineRadio4" value="No Autorizado">
                                    <label class="label-NoAutorizado" for="inlineRadio4">4. No Autorizado</label>
                                </label>
                                <label class="radio-inline radio-inline-Ejecucion">
                                    <input type="radio" name="EstatusTrabajo" id="inlineRadio5" value="Ejecución">
                                    <label class="label-Ejecucion" for="inlineRadio5">5. Ejecución</label>
                                </label>
                                <label class="radio-inline radio-inline-Finalizado">
                                    <input type="radio" name="EstatusTrabajo" id="inlineRadio6" value="Finalizado">
                                    <label class="label-Finalizado" for="inlineRadio6">6. Finalizado</label>
                                </label>
                                <label class="radio-inline radio-inline-Pagado">
                                    <input type="radio" name="EstatusTrabajo" id="inlineRadio7" value="Pagado">
                                    <label class="label-Pagado" for="inlineRadio7">7. Pagado</label>
                                </label>
                            </div>
                        </center>
                        <hr>
                    </div>
                    <div class="tab-content">
                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="EditarDatos">
                            <div class=" col-1 col-md-1">
                                <div class="form-group label-static">
                                    <label for="ID" class="control-label">Folio Interno</label>
                                    <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                                </div>
                            </div>
                            <div class="col-2 col-md-2">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Folio Cliente</label>
                                    <input type="text" id="FolioCliente" name="FolioCliente" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Cliente*</label>
                                    <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Sucursal*</label>
                                    <select id="Sucursal_ID" name="Sucursal_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Preciario*</label>
                                    <select id="Preciario_ID" name="Preciario_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Centro de Costos</label>
                                    <select id="CentroCostos_ID" name="CentroCostos_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Especialidad</label>
                                    <select id="Especialidad_ID" name="Especialidad_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Área</label>
                                    <select id="Area_ID" name="Area_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="Observaciones" class="control-label">Observaciones</label>
                                    <input type="text" id="Observaciones" name="Observaciones" class="form-control"  placeholder="ALGUNA REFERENCIA, MINUTA, ETC" >
                                </div>
                            </div>
                            <div id="ControlProcesoEditar" class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Control de proceso</label>
                                    <select id="ControlTiempoProceso" name="ControlProceso" class="form-control" >
                                        <option value=""></option>
                                        <option value="Dias">DÍAS</option>
                                        <option value="Semanas">SEMANAS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Trabajo Solicitado</label>
                                    <textarea class="col-md-12 form-control" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="3" required=""></textarea>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Trabajo Requerido</label>
                                    <textarea class="col-md-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="3" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos2">
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Cuadrilla</label>
                                    <select id="Cuadrilla_ID" name="Cuadrilla_ID" class="form-control" ><option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Fecha Atención</label>
                                    <input type="text" id="FechaAtencion" name="FechaAtencion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class=" col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Solicitante</label>
                                    <input type="text" id="Solicitante" name="Solicitante" class="form-control"  placeholder="PERSONA QUE SOLICITA EL TRABAJO" >
                                </div>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Fecha Origen</label>
                                            <input type="text" required="" id="FechaOrigen" name="FechaOrigen" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Hora Origen</label>
                                            <input type="text"  class="form-control" name="HoraOrigen" id="HoraOrigen" data-provide="timepicker" data-minute-step="1"  data-second-step="1"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Fecha Visita</label>
                                    <input type="text" id="FechaLlegada" name="FechaLlegada" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Hora Visita</label>
                                    <input type="text"  class="form-control" name="HoraLlegada" id="HoraLlegada" data-provide="timepicker" data-minute-step="1"  data-second-step="1"/>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Fecha Fin Visita</label>
                                    <input type="text" id="FechaSalida" name="FechaSalida" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Hora Fin Visita</label>
                                    <input type="text"  class="form-control" name="HoraSalida" id="HoraSalida" data-provide="timepicker" data-minute-step="1"   data-second-step="1" />
                                </div>
                            </div>
                        </div>
                        <!--PANEL DE MANTENIMIENTO BBVA-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos3">
                            <div class="col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Codigo PPTA</label>
                                            <select id="Codigoppta_ID" name="Codigoppta_ID" class="form-control" >
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="" class="control-label">Días</label>
                                            <input type="text" id="Dias" name="" class="form-control" readonly="" placeholder="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row ">
                                    <div class=" col-3 col-md-3">
                                        <div class="form-group label-static">
                                            <label for="CausaActuacionSintoma" class="control-label">Causa Síntoma</label>
                                            <input type="text" id="CausaActuacionSintoma" name="CausaActuacionSintoma" class="form-control" placeholder="" >
                                        </div>
                                    </div>
                                    <div class=" col-3 col-md-6">
                                        <div class="form-group label-static">
                                            <label for="TextoCausa" class="control-label">Texto Causa</label>
                                            <input type="text" id="TextoCausa" name="TextoCausa" class="form-control"  placeholder="" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal1" class="control-label">Calificación 1</label>
                                    <select id="Cal1" name="Cal1" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal2" class="control-label">Calificación 2</label>
                                    <select id="Cal2" name="Cal2" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal3" class="control-label">Calificación 3</label>
                                    <select id="Cal3" name="Cal3" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal4" class="control-label">Calificación 4</label>
                                    <select id="Cal4" name="Cal4" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cal5" class="control-label">Calificación 5</label>
                                    <select id="Cal5" name="Cal5" class="form-control" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--PANEL DE OBRA BBVA-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos4">
                            <input type="text" id="ImpactoEnPlazo" name="ImpactoEnPlazo" class="hide" readonly="" placeholder="" >
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Impacto en el Plazo</label>
                                    <div class="togglebutton">
                                        <label><input type="checkbox" id="EditarImpactoEnPlazo" name="" ></label>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Días de Impacto</label>
                                    <input type="number" id="DiasImpacto" name="DiasImpacto" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Causa del trabajo</label>
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
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Clave Origen</label>
                                    <select id="ClaveOrigenTrabajo" name="ClaveOrigenTrabajo" class="form-control" >
                                        <option value=""></option>
                                        <option value="CONTR">CONTR - CONTRATISTA</option>
                                        <option value="GDP">GDP - GERENCIADORA DE PROYECTOS</option>
                                        <option value="BBVA">CTE - CLIENTE</option>
                                        <option value="OTRO">OTRO - OTRO</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="EspecificaOrigenTrabajo" class="control-label">(En caso de otros) Especifica</label>
                                    <input type="text" id="EspecificaOrigenTrabajo" name="EspecificaOrigenTrabajo" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Origen del Trabajo</label>
                                    <textarea class="col-md-12 form-control" id="DescripcionOrigenTrabajo" name="DescripcionOrigenTrabajo" rows="3" ></textarea>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Riesgo del Trabajo</label>
                                    <textarea class="col-md-12 form-control" id="DescripcionRiesgoTrabajo" name="DescripcionRiesgoTrabajo" rows="3" ></textarea>
                                </div>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Alcance del Trabajo</label>
                                    <textarea class="col-md-12 form-control" id="DescripcionAlcanceTrabajo" name="DescripcionAlcanceTrabajo" rows="3" ></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DE CAJEROS-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos5">
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaVisita" class="control-label">Fecha Visita</label>
                                    <input type="text" id="FechaVisita" name="FechaVisita" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class=" col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="EncargadoSitio" class="control-label">Encargado del Sitio</label>
                                    <input type="text" id="EncargadoSitio" name="EncargadoSitio" class="form-control"  placeholder="PERSONA ENCARGADA DEL SITIO" >
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Horario de Atención</label>
                                    <input type="text" id="HorarioAtencion" name="HorarioAtencion" class="form-control"   >
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="RestriccionAcceso" class="control-label">Restricción de Acceso?</label>
                                    <select id="RestriccionAcceso" name="RestriccionAcceso" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="AireAcondicionado" class="control-label">Aire Acondicionado?</label>
                                    <select id="AireAcondicionado" name="AireAcondicionado" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="Carcasa" class="control-label">Carcasa?</label>
                                    <select id="Carcasa" name="Carcasa" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="UPS" class="control-label">UPS/Supresor de Picos?</label>
                                    <select id="UPS" name="UPS" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="SenalizacionInterior" class="control-label">Señalización Interior?</label>
                                    <select id="SenalizacionInterior" name="SenalizacionInterior" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="SenalizacionExterior" class="control-label">Señalización Exterior?</label>
                                    <select id="SenalizacionExterior" name="SenalizacionExterior" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="CanalizacionDatos" class="control-label">Canalización de Datos?</label>
                                    <select id="CanalizacionDatos" name="CanalizacionDatos" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="CanalizacionSeguridad" class="control-label">Canalización de Seguridad?</label>
                                    <select id="CanalizacionSeguridad" name="CanalizacionSeguridad" class="form-control" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="PruebaCalaFirme" class="control-label">Prueba de Cala de Firme</label>
                                    <input type="text" id="PruebaCalaFirme" name="PruebaCalaFirme" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class=" col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="TipoPiso" class="control-label">Tipo Piso</label>
                                    <input type="text" id="TipoPiso" name="TipoPiso" class="form-control"  placeholder="" >
                                </div>
                            </div>
                        </div>
                        <!--PANEL DE ARCHIVO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos6">
                            <center><label for="" class="control-label">Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</label></center>
                            <div class="col-md-12" align="center">
                                <input type="file" id="Adjunto" name="" class="hide">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x"></span> SELECCIONA EL ARCHIVO
                                </button>
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            </div>
                            <div class="col-md-12 hide">
                                <input type="text" id="Usuario_ID"  name="Usuario_ID"    class="form-control" >
                            </div>
                        </div>
                        <div class="col-6 col-md-12"><br><h6>Los campos con * son obligatorios</h6></div>
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
                <div id="ImporteTotal" class="col-md-12" align="right">
                    <span class="text-success">$ 0.0</span>
                </div>
                <div class="col-6 col-md-12">
                    <ul class="nav nav-tabs" role="tablist" id="tbDetalleEditar">
                        <li role="presentation" class="active"><a href="#PresupuestoEditar" aria-controls="PresupuestoEditar" role="tab" data-toggle="tab">Conceptos Presupuesto</a></li>
                        <li role="presentation"><a href="#LevantamientoEditar" aria-controls="LevantamientoEditar" role="tab" data-toggle="tab">Conceptos Levantamiento</a></li>
                        <li class="hide" role="presentation" id="peCajeros"><a href="#CajerosEditar" aria-controls="CajerosEditar" role="tab" data-toggle="tab">Conceptos Cajeros</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="PresupuestoEditar">
                        <fieldset>
                            <div class="col-md-12" align="right">
                                <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                            </div>
                            <div class="col-md-12 table-responsive" id="Conceptos" ></div>
                        </fieldset>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="LevantamientoEditar">
                        <fieldset>
                            <div class="col-md-12" align="right"><button type="button" class="btn btn-default" id="btnNuevoConceptoAbiertoEditar"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                            </div>
                            <div class="col-md-12 table-responsive " id="ConceptosAbierto" ></div>
                        </fieldset>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="CajerosEditar">
                        <fieldset>
                            <div class="col-md-12" align="right"><button type="button" class="btn btn-default" id="btnNuevoConceptoCajeroEditar"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                            </div>
                            <div class="col-md-12 table-responsive " id="ConceptosCajero" ></div>
                        </fieldset>
                    </div>
                </div>
            </fieldset>
        </div>
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
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Clave*</label>
                            <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Semana/Dia*</label>
                            <input type="number" id="SemanaDia" name="SemanaDia" class="form-control" required="" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción (Actividades Ejecutadas)*</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div id="CamposMeor" class="hide">

                        <div class="col-md-3">
                            <div class="form-group label-static">
                                <label for="Clave" class="control-label">Inicio/Fin*</label>
                                <input type="text" id="InicioFin" name="InicioFin" class="form-control"placeholder="EJ: 01 de Enero Al 07 Enero">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group label-static">
                                <label for="Clave" class="control-label">Inicio/Fin Proxima Semana*</label>
                                <input type="text" id="InicioFinProximaSemana" name="InicioFinProximaSemana" class="form-control"  placeholder="EJ: 07 de Enero Al 14 Enero">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Descripcion2" class="control-label">(Actividades Próxima Semana)</label>
                                <textarea type="text" id="Descripcion2" name="Descripcion2" class="form-control CustomUppercase"  placeholder=" " rows="3" cols="20"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Descripcion3" class="control-label">Restricciones/Preocupaciones</label>
                                <textarea type="text" id="Descripcion3" name="Descripcion3" class="form-control CustomUppercase" placeholder=" " rows="3" cols="20"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12"><br><h6>Los campos con * son obligatorios</h6></div>
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
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Clave*</label>
                            <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Semana/Dia*</label>
                            <input type="number" id="SemanaDia" name="SemanaDia" class="form-control" required="" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción (Actividades Ejecutadas)*</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div id="CamposMeorEditar" class="hide">
                        <div class="col-md-3">
                            <div class="form-group label-static">
                                <label for="Clave" class="control-label">Inicio/Fin*</label>
                                <input type="text" id="InicioFin" name="InicioFin" class="form-control"placeholder="EJ: 01 de Enero Al 07 Enero">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group label-static">
                                <label for="Clave" class="control-label">Inicio/Fin Proxima Semana*</label>
                                <input type="text" id="InicioFinProximaSemana" name="InicioFinProximaSemana" class="form-control"  placeholder="EJ: 07 de Enero Al 14 Enero">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Descripcion2" class="control-label">(Actividades Próxima Semana)</label>
                                <textarea type="text" id="Descripcion2" name="Descripcion2" class="form-control CustomUppercase"  placeholder=" " rows="3" cols="20"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Descripcion3" class="control-label">Restricciones/Preocupaciones</label>
                                <textarea type="text" id="Descripcion3" name="Descripcion3" class="form-control CustomUppercase" placeholder=" " rows="3" cols="20"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12"><br><h6>Los campos con * son obligatorios</h6></div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer modal-footerFull"><!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEditarConceptoAbierto" name="btnEditarConceptoAbierto">MODIFICAR</button>
        </div>
    </div>
</div>
<!--MODAL AGREGAR CONCEPTO CAJERO-->
<div id="mdlAgregarConceptoCajero" class="modal modalFull fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull  modal-content  modal-contentFull  modal-lg">
        <div class="modal-header modal-headerFull">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal-titleFull">Nuevo</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmAgregarConceptoDetalleCajero">
                <fieldset>
                    <div class=" hide"><input type="text" id="ID" name="ID" class="form-control"></div>
                    <div class="col-md-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Clave*</label>
                            <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción*</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div class="col-6 col-md-6"><br><h6>Los campos con * son obligatorios</h6></div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer modal-footerFull">
            <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnAgregarConceptoCajero" name="btnAgregarConceptoCajero">GUARDAR</button>
        </div>
    </div>
</div>
<!--MODAL EDITAR CONCEPTO CAJERO-->
<div id="mdlEditarConceptoCajero" class="modal modalFull fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull modal-content modal-contentFull modal-lg">
        <div class="modal-header modal-headerFull">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal-titleFull">Edición</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmEditarConceptoDetalleCajero">
                <fieldset>
                    <div class=" hide">
                        <input type="text" id="ID" name="ID" class="form-control">
                        <input type="text" id="Trabajo_ID" name="Trabajo_ID" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Clave*</label>
                            <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción*</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div class="col-6 col-md-6"><br><h6>Los campos con * son obligatorios</h6></div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer modal-footerFull"><!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEditarConceptoCajero" name="btnEditarConceptoCajero">MODIFICAR</button>
        </div>
    </div>
</div>
<!--MODAL EDITAR - VER FOTOS CAJERO ADJUNTAS-->
<div id="mdlTrabajoEditarFotosCajeroPorConceptoCajero" class="modal modalFull animated bounceInDown">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Fotos Cajero</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="hide">
                    <input type="text" readonly="" id="IdCajeroBBVADetalle" name="IdCajeroBBVADetalle"  class="hide">
                    <input type="file" accept='image/*' id="fFotosCajero" name="fFotosCajero[]" multiple="" class="hide">
                    <div class="col-md-12" id="" align="center"  onclick="setFotosCajeroEditar(this)">
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
<!--MODAL DETALLE - EDITAR GENERADOR POR CONCEPTO-->
<div id="mdlTrabajoEditarGeneradorPorConcepto" class="modal modalFull  fade ">
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
                            <div id="GeneradorImporteTotal" class="col-md-12" align="right"><span class="text-success spanTotalesDetalle">0.0</span></div>
                        </fieldset>
                    </div>
                    <div class="tab-pane fade" id="EditarGenerador">
                        <div class="col-md-12 hide">
                            <input type="text" id="IDT" name="IDT" class="form-control ">
                            <input type="text" id="IDG" name="IDG" class="form-control">
                            <input type="text" id="Concepto_ID" name="Concepto_ID" class="form-control ">
                            <input type="text" id="IdTrabajoDetalle" name="IdTrabajoDetalle" class="form-control ">
                            <input type="text" id="Precio" name="Precio" class="form-control">
                            <input type="text" id="TipoCambioGenerador" name="TipoCambio" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <div class="form-group label-static">
                                <label for="Area" class="control-label">Area</label>
                                <input type="text" id="Area" name="Area" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group label-static">
                                <label for="EstimacionNo" class="control-label">No. Estimación</label>
                                <input type="number" id="EstimacionNo" name="EstimacionNo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group label-static">
                                <label for="Eje" class="control-label">Eje</label>
                                <input type="text" id="Eje" name="Eje" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group label-static">
                                <label for="EntreEje1" class="control-label">Entre Eje 1</label>
                                <input type="text" id="EntreEje1" name="EntreEje1" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group label-static">
                                <label for="EntreEje2" class="control-label">Entre Eje 2</label>
                                <input type="text" id="EntreEje2" name="EntreEje2" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group label-static">
                                <label for="Largo" class="control-label">Largo</label>
                                <input type="number" id="Largo" min="0" name="Largo" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group label-static">
                                <label for="Ancho" class="control-label">Ancho</label>
                                <input type="number" id="Ancho" min="0" name="Ancho" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group label-static">
                                <label for="Alto" class="control-label">Alto</label>
                                <input type="number" id="Alto" min="0" name="Alto" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group label-static">
                                <label for="Cantidad" class="control-label">Cantidad</label>
                                <input type="number" id="Cantidad" min="0" name="Cantidad" class="form-control">
                            </div>
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
                        <div class="checkbox"><label><input type="checkbox" id="chkMultiple" value="ON"> Varios</label></div>
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
                    <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="hide">
                    <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="hide">
                    <input type="file" accept='image/*' id="fFotos" name="fFotos[]" multiple="" class="hide">
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
                    <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="hide">
                    <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="hide">
                    <input type="file" accept='image/*' id="fFotos" name="fFotos[]" multiple="" class="hide">
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
                    <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="hide">
                    <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="hide">
                    <input type="file" accept='image/*' id="fFotos" name="fFotos[]" multiple="" class="hide">
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
                    <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="hide">
                    <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="hide">
                    <input type="file" accept='image/*' id="fFotos" name="fFotos[]" multiple="" class="hide">
                    <div class="col-md-6">
                        <label class="Tiempo" for="">Debe de elegir un control de tiempo*</label>
                        <input type="number" maxlength="3" minlength="1"  onkeyup="this.value = minmax(this.value, 0, 150)" id="IdTiempoProceso" name="IdTiempoProceso" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="" class="control-label">Porcentaje*</label>
                        <input type="text" maxlength="3" minlength="1"  onkeyup="this.value = minmax(this.value, 0, 100)" id="IdPorcentajeProceso" name="IdPorcentajeProceso" class="form-control numbersOnly">
                    </div>
                    <div class="col-md-12 hide" id="idSubirFotosProceso" align="center"  onclick="setFotosProcesoEditar(this)">
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
<!--MODAL EDITAR - VER CROQUIS ADJUNTAS-->
<div id="mdlTrabajoEditarCroquisPorConcepto" class="modal modalFull animated bounceInDown">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Croquis</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <input type="file" accept='image/*' id="fCroquis" name="fCroquis[]" multiple="" class="hide">
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
<!--MODAL EDITAR - VER ANEXOS DOS ADJUNTOS-->
<div id="mdlTrabajoEditarAnexosDosPorConcepto" class="modal modalFull animated bounceInDown">
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
                    <div class="col-md-12" id="" align="center"  onclick="setAnexosDosEditar(this)">
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
<!--MODAL TIPO CAMBIO-->
<div id="mdlAgregarTipoCambio" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content  ">
        <div class="modal-header ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title ">Tipo de Cambio</h4>
        </div>
        <div class="modal-body ">
            <form id="frmAgregarTipoCambio">
                <fieldset>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="TipoCambio" class="control-label">Tipo de Cambio*</label>
                            <input type="text" id="TipoCambio" name="TipoCambio" class="form-control" required="" >
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer "><!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnAgregarTipoCambio" name="btnAgregarTipoCambio">GUARDAR</button>
        </div>
    </div>
</div>
<!--MODAL EDITAR CONCEPTO PRECIARIO-->
<div id="mdlEditarConcepto" class="modal modalFull fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull modal-content modal-contentFull modal-lg">
        <div class="modal-header modal-headerFull">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal-titleFull">Editar Concepto</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmEditarConceptoDetalle">
                <fieldset>
                    <div class="col-md-3">
                        <div class="form-group label-static">
                            <label for="txtEditarClave" class="control-label">Clave</label>
                            <input type="text" id="txtEditarClave" name="txtEditarClave" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="taEditarConcepto" class="control-label">Descripción</label>
                            <textarea type="text" id="taEditarConcepto" name="taEditarConcepto" class="form-control CustomUppercase"  rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group label-static">
                            <label for="txtEditarUnidad" class="control-label">Unidad</label>
                            <input type="text" id="txtEditarUnidad" name="txtEditarUnidad" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group label-static">
                            <label for="txtEditarPrecio" class="control-label">Precio</label>
                            <input type="number" id="txtEditarPrecio" name="txtEditarPrecio" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group label-static">
                            <label for="txtEditarMoneda" class="control-label">Moneda</label>
                            <select id="txtEditarMoneda" name="txtEditarMoneda" class="form-control" required="">
                                <option value=""></option>
                                <option value="USD">USD</option>
                                <option value="MXN">MXN</option>
                            </select>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer modal-footerFull"><!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEditarConcepto" name="btnEditarConcepto">MODIFICAR</button>
        </div>
    </div>
</div>
<!--MODAL DETALLE - REEMPLAZAR CONCEPTO-->
<div id="mdlTrabajoReemplazarConceptoEditar" class="modal modalFull fade ">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header modal-headerFull">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title modal-titleFull">Seleccione un concepto</h4>
            </div>
            <div class="modal-body modal-bodyFull">
                <div class="col-md-12" id="ConceptosReemplazarXPreciarioID"></div>
            </div>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Trabajos/';
    var TipoAcceso = "<?php echo $this->session->userdata('TipoAcceso'); ?>";

    var verMovs = 'getMyRecords';
    var btnNuevo = $("#btnNuevo");
    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");
    var btnVerTodosEnFirme = $('#btnVerTodosEnFirme');
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
    var tbtnEditarImpactoEnPlazo = pnlEditarTrabajo.find("#EditarImpactoEnPlazo");
    var tbtnNuevoImpactoEnPlazo = pnlNuevoTrabajo.find("#NuevoImpactoEnPlazo");
    /*Detalle Normal*/
    var tBtnConcluir = pnlNuevoTrabajo.find("#Concluir");
    var tBtnEditarConcluir = pnlEditarTrabajo.find("#Concluir");
    var pnlDetalleEditarTrabajo = $("#pnlDetalleEditarTrabajo");
    var currentDate = new Date();
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
    /*MULTIMEDIA (EDITAR) MODALES Y BOTONES*/
    var mdlTrabajoEditarFotosPorConcepto = $("#mdlTrabajoEditarFotosPorConcepto");
    var mdlTrabajoEditarCroquisPorConcepto = $("#mdlTrabajoEditarCroquisPorConcepto");
    var mdlTrabajoEditarAnexosPorConcepto = $("#mdlTrabajoEditarAnexosPorConcepto");
    var EditarFotosPorConcepto = mdlTrabajoEditarFotosPorConcepto.find("#fFotos");
    var EditarCroquisPorConcepto = mdlTrabajoEditarCroquisPorConcepto.find("#fCroquis");
    var EditarAnexosPorConcepto = mdlTrabajoEditarAnexosPorConcepto.find("#fAnexos");
    /******ABIERTO*/
    var btnNuevoConceptoAbierto = pnlDetalleNuevoTrabajo.find('#btnNuevoConceptoAbierto');
    var btnNuevoConceptoAbiertoEditar = pnlDetalleEditarTrabajo.find('#btnNuevoConceptoAbiertoEditar');
    var btnAgregarConceptoAbierto = $('#btnAgregarConceptoAbierto');
    var btnEditarConceptoAbierto = $('#btnEditarConceptoAbierto');
    var btnNuevoConceptoCajero = pnlDetalleNuevoTrabajo.find("#btnNuevoConceptoCajero");
    var btnNuevoConceptoCajeroEditar = pnlDetalleEditarTrabajo.find('#btnNuevoConceptoCajeroEditar');
    var btnAgregarConceptoCajero = $('#btnAgregarConceptoCajero');
    var btnEditarConceptoCajero = $('#btnEditarConceptoCajero');
    /*fOTOS*/
    var mdlTrabajoEditarFotosCajeroPorConceptoCajero = $("#mdlTrabajoEditarFotosCajeroPorConceptoCajero");
    var EditarFotosCajeroPorConcepto = mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#fFotosCajero");
    /*MULTIMEDIA (EDITAR ABIERTO)*/
    var mdlTrabajoEditarFotosAntesPorConcepto = $("#mdlTrabajoEditarFotosAntesPorConcepto");
    var mdlTrabajoEditarFotosDespuesPorConcepto = $("#mdlTrabajoEditarFotosDespuesPorConcepto");
    var mdlTrabajoEditarFotosProcesoPorConcepto = $("#mdlTrabajoEditarFotosProcesoPorConcepto");
    var mdlTrabajoEditarAnexosDosPorConcepto = $("#mdlTrabajoEditarAnexosDosPorConcepto");
    var EditarAnexosDosPorConcepto = mdlTrabajoEditarAnexosDosPorConcepto.find("#fAnexos");
    var EditarFotosAntesPorConcepto = mdlTrabajoEditarFotosAntesPorConcepto.find("#fFotos");
    var EditarFotosDespuesPorConcepto = mdlTrabajoEditarFotosDespuesPorConcepto.find("#fFotos");
    var EditarFotosProcesoPorConcepto = mdlTrabajoEditarFotosProcesoPorConcepto.find("#fFotos");
    /*Reportes*/
    var btnImprimirReportesEditarTrabajo = $("#btnImprimirReportesEditarTrabajo");
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    $(document).ready(function () {
        //RadionButtonSelectedValueSet('NuevoEstatusTrabajo', 'Presupuesto');
        $('.numbersOnly').keypress(function () {
            this.value = this.value.replace(/[^0-9\.]/g, '');
        });
        $("#IdTiempoProceso").change(function () {
            if ($('#IdTiempoProceso').val() !== '' && $('#IdPorcentajeProceso').val() !== '') {
                $('#idSubirFotosProceso').removeClass('hide');
            } else {
                $('#idSubirFotosProceso').addClass('hide');
            }
        });
        $("#IdPorcentajeProceso").change(function () {
            if ($('#IdPorcentajeProceso').val() !== '') {
                $('#IdPorcentajeProceso').val($('#IdPorcentajeProceso').val() + '%');
            }
            if ($('#IdTiempoProceso').val() !== '' && $('#IdPorcentajeProceso').val() !== '') {
                $('#idSubirFotosProceso').removeClass('hide');
            } else {
                $('#idSubirFotosProceso').addClass('hide');
            }
        });
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
            $.validator.setDefaults({ignore: []});
            $('#frmEditarConceptoDetalleAbierto').validate({
                errorElement: 'span', errorClass: 'help-block',
                rules: {Clave: 'required', Descripcion: 'required'},
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
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
            $.validator.setDefaults({ignore: []});
            $('#frmAgregarConceptoDetalleAbierto').validate({
                errorElement: 'span', errorClass: 'help-block',
                rules: {Clave: 'required', Descripcion: 'required'},
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
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
            if (Cliente === '8') {
                $("#CamposMeor").removeClass("hide");
            } else {
                $("#CamposMeor").addClass("hide");
            }

        });
        btnNuevoConceptoCajeroEditar.on("click", function () {
            $('#mdlAgregarConceptoCajero').find("input").val("");
            $('#mdlAgregarConceptoCajero').find("textarea").val("");
            $('#mdlAgregarConceptoCajero').find("select").val(null).trigger("change");
            $('#mdlAgregarConceptoCajero').modal('show');
        });
        btnEditarConceptoCajero.on("click", function () {
            $.validator.setDefaults({ignore: []});
            $('#frmEditarConceptoDetalleCajero').validate({
                errorElement: 'span', errorClass: 'help-block',
                rules: {Clave: 'required', Descripcion: 'required'},
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            /*Regresa si es valido para los select2*/
            $('select').on('change', function () {
                $(this).valid();
            });
            /*Si es verdadero que hacer*/
            if ($('#frmEditarConceptoDetalleCajero').valid()) {
                var frm = new FormData($("#frmEditarConceptoDetalleCajero")[0]);
                HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
                $.ajax({
                    url: master_url + 'onModificarConceptoCajero',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    $('#mdlEditarConceptoCajero').modal('hide');
                    getDetalleCajerosByID(IdMovimiento);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnAgregarConceptoCajero.on("click", function () {
            $.validator.setDefaults({ignore: []});
            $('#frmAgregarConceptoDetalleCajero').validate({
                errorElement: 'span', errorClass: 'help-block',
                rules: {Clave: 'required', Descripcion: 'required'},
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            /*Regresa si es valido para los select2*/
            $('select').on('change', function () {
                $(this).valid();
            });
            /*Si es verdadero que hacer*/
            if ($('#frmAgregarConceptoDetalleCajero').valid()) {
                var frm = new FormData($("#frmAgregarConceptoDetalleCajero")[0]);
                frm.append('Trabajo_ID', IdMovimiento);
                HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
                $.ajax({
                    url: master_url + 'onAgregarDetalleCajeroEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    $('#mdlAgregarConceptoCajero').modal('hide');
                    getDetalleCajerosByID(IdMovimiento);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        /*Funcion que trae los catalogos en base al cliente*/
        pnlNuevoTrabajo.find("#Cliente_ID").change(function () {
            pnlNuevoTrabajo.find("#Sucursal_ID").val(null).trigger("change");
            pnlNuevoTrabajo.find("#Preciario_ID").val(null).trigger("change");
            getSucursalesbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
            getPreciariosActivosbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
            getEspecialidadesbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
            getAreasbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
            getCCbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
            if ($(this).val() === '1') {
                pnlNuevoTrabajo.find("#nBBVAMantenimiento").removeClass("hide");
                pnlNuevoTrabajo.find("#nBBVAObra").removeClass("hide");
                pnlNuevoTrabajo.find("#nBBVACajeros").removeClass("hide");
                pnlDetalleNuevoTrabajo.find("#pnCajeros").removeClass("hide");
                mdlReportesEditarTrabajo.find("#rNordes").addClass("hide");
            } else if ($(this).val() === '16') {
                mdlReportesEditarTrabajo.find("#rNordes").removeClass("hide");
            } else {
                pnlNuevoTrabajo.find("#nBBVAMantenimiento").addClass("hide");
                pnlNuevoTrabajo.find("#nBBVAObra").addClass("hide");
                pnlNuevoTrabajo.find("#nBBVACajeros").addClass("hide");
                pnlDetalleNuevoTrabajo.find("#pnCajeros").addClass("hide");
                mdlReportesEditarTrabajo.find("#rNordes").addClass("hide");
            }
        });
        /*Funciones que traen los catalogos en base a un select*/
        pnlEditarTrabajo.find("#Cliente_ID").change(function () {
            Cliente = this.value;
            pnlEditarTrabajo.find("#Sucursal_ID").val(null).trigger("change");
            pnlEditarTrabajo.find("#Preciario_ID").val(null).trigger("change");
            getSucursalesbyCliente(pnlEditarTrabajo.find("#Cliente_ID").val(), $(this).val());
            getPreciariosActivosbyCliente(pnlEditarTrabajo.find("#Cliente_ID").val(), $(this).val());
            getEspecialidadesbyCliente(pnlEditarTrabajo.find("#Cliente_ID").val(), $(this).val());
            getAreasbyCliente(pnlEditarTrabajo.find("#Cliente_ID").val(), $(this).val());
            getCCbyCliente(pnlEditarTrabajo.find("#Cliente_ID").val(), $(this).val());
            if ($(this).val() === '1') {
                pnlEditarTrabajo.find("#eBBVAMantenimiento").removeClass("hide");
                pnlEditarTrabajo.find("#eBBVAObra").removeClass("hide");
                pnlEditarTrabajo.find("#eBBVACajeros").removeClass("hide");
                pnlDetalleEditarTrabajo.find("#peCajeros").removeClass("hide");
                mdlReportesEditarTrabajo.find("#rNordes").addClass("hide");
            } else if ($(this).val() === '16') {
                mdlReportesEditarTrabajo.find("#rNordes").removeClass("hide");
            } else {
                pnlEditarTrabajo.find("#eBBVAMantenimiento").addClass("hide");
                pnlEditarTrabajo.find("#eBBVAObra").addClass("hide");
                pnlEditarTrabajo.find("#eBBVACajeros").addClass("hide");
                pnlDetalleEditarTrabajo.find("#peCajeros").addClass("hide");
                mdlReportesEditarTrabajo.find("#rNordes").addClass("hide");
            }
        });
        /*CARGA DE ARCHIVOS DETALLE DRAG AND DROP*/
        mdlTrabajoEditarFotosPorConcepto.on('shown.bs.modal', function () {
            EditarFotosPorConcepto.val('');
        });
        mdlTrabajoEditarFotosAntesPorConcepto.on('shown.bs.modal', function () {
            EditarFotosAntesPorConcepto.val('');
        });
        mdlTrabajoEditarFotosDespuesPorConcepto.on('shown.bs.modal', function () {
            EditarFotosDespuesPorConcepto.val('');
        });
        mdlTrabajoEditarFotosProcesoPorConcepto.on('shown.bs.modal', function () {
            EditarFotosProcesoPorConcepto.val('');
        });
        mdlTrabajoEditarFotosCajeroPorConceptoCajero.on('shown.bs.modal', function () {
            EditarFotosCajeroPorConcepto.val('');
        });
        /*Eventos DRAG and DROP de MULTIMEDIA*/
        mdlTrabajoEditarFotosPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
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
        mdlTrabajoEditarFotosAntesPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
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
        mdlTrabajoEditarFotosDespuesPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', IdMovimiento);
            frm.append('IdTrabajoDetalle', tempDetalleAbierto);
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
                    onReloadFotosDespuesXConcepto(tempDetalleAbierto, IdMovimiento);
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        mdlTrabajoEditarFotosProcesoPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajoDetalle").val());
            frm.append('Tiempo', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTiempoProceso").val());
            frm.append('Porcentaje', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdPorcentajeProceso").val());
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
        mdlTrabajoEditarCroquisPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', IdMovimiento);
            frm.append('IdTrabajoDetalle', tempDetalle);
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
                    onReloadCroquisXConcepto(tempDetalle, IdMovimiento);
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL CROQUIS: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        mdlTrabajoEditarAnexosPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
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
        mdlTrabajoEditarAnexosDosPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajoDetalle").val());
            var files_list = e.originalEvent.dataTransfer.files;
            for (var i = 0; i < files_list.length; i++)
            {
                frm.append('ANEXOS', files_list[i]);
                frm.append('Observaciones', files_list[i].name);
                $.ajax({
                    url: master_url + 'onAgregarAnexosDosEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadAnexosDosXConcepto(mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajoDetalle").val(), IdMovimiento);
                    getDetalleAbiertoByID(mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL ANEXOS: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        mdlTrabajoEditarFotosCajeroPorConceptoCajero.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdTrabajo").val());
            frm.append('IdCajeroBBVADetalle', mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdCajeroBBVADetalle").val());
            var files_list = e.originalEvent.dataTransfer.files;
            for (var i = 0; i < files_list.length; i++)
            {
                frm.append('FOTO', files_list[i]);
                frm.append('Observaciones', files_list[i].name);
                $.ajax({
                    url: master_url + 'onAgregarFotosCajeroEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadFotosCajeroXConcepto(mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdCajeroBBVADetalle").val(), mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        /*CARGA DE ARCHIVOS NORMAL*/
        EditarAnexosDosPorConcepto.change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(EditarAnexosDosPorConcepto[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdTrabajo', mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Observaciones', file.name);
                frm.append('ANEXOS', file);
                $.ajax({
                    url: master_url + 'onAgregarAnexosDosEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onReloadAnexosDosXConcepto(mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajoDetalle").val(), IdMovimiento);
                    getDetalleAbiertoByID(mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL ANEXOS: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            });
        });
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
                var frm = new FormData();
                frm.append('IdTrabajo', IdMovimiento);
                frm.append('IdTrabajoDetalle', tempDetalle);
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
                    onReloadCroquisXConcepto(tempDetalle, IdMovimiento);
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL CROQUIS: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
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
                var frm = new FormData();
                frm.append('IdTrabajo', IdMovimiento);
                frm.append('IdTrabajoDetalle', tempDetalleAbierto);
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
                    onReloadFotosDespuesXConcepto(tempDetalleAbierto, IdMovimiento);
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
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
                var frm = new FormData();
                frm.append('IdTrabajo', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Tiempo', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTiempoProceso").val());
                frm.append('Porcentaje', mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdPorcentajeProceso").val());
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
        EditarFotosCajeroPorConcepto.change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(EditarFotosCajeroPorConcepto[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdTrabajo', mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdTrabajo").val());
                frm.append('IdCajeroBBVADetalle', mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdCajeroBBVADetalle").val());
                frm.append('Observaciones', file.name);
                frm.append('FOTO', file);
                $.ajax({
                    url: master_url + 'onAgregarFotosCajeroEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    console.log(data);
                    onReloadFotosCajeroXConcepto(mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdCajeroBBVADetalle").val(), mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdTrabajo").val());
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
        /***** Modificar Generador ****/
        btnGuardarModificarGeneradorXConcepto.on('click', function () {
            if (mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() !== '' && mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() !== 0 ||
                    mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() !== '' && mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() !== 0 ||
                    mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() !== '' && mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() !== 0 ||
                    mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() !== '' && mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() !== 0) {
                var frm = new FormData(); /*Total*/
                var generador_largo = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() : 1);
                var generador_ancho = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() : 1);
                var generador_alto = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() : 1);
                var generador_cantidad = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() : 1);
                var total_generador = parseFloat((generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad)));
                frm.append('Concepto_ID', mdlTrabajoEditarGeneradorPorConcepto.find("#Concepto_ID").val());
                frm.append('IdTrabajoDetalle', mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val());
                frm.append('Area', mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val());
                frm.append('EstimacionNo', mdlTrabajoEditarGeneradorPorConcepto.find("#EstimacionNo").val());
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
                        mdlTrabajoEditarGeneradorPorConcepto.find("#EstimacionNo").val("");
                    }).fail(function (x, y, z) {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR', 'danger');
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
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
        btnNuevoConceptoCajero.on("click", function () {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
        });
        /*Agregar nuevo concepto en detalle nuevo*/
        btnNuevoConcepto.on("click", function () {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
        });

        btnVerTodosEnFirme.on("click", function () {
            verMovs = 'getRecordsFirme';
            getRecords();
        });

        btnVerMisMovimientos.on("click", function () {
            verMovs = 'getMyRecords';
            getRecords();
        });
        btnVerTodos.on("click", function () {
            verMovs = 'getRecords';
            getRecords();
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
        tbtnEditarImpactoEnPlazo.change(function () {
            if (this.checked) {
                pnlEditarTrabajo.find("#ImpactoEnPlazo").val('Si');
            } else {
                pnlEditarTrabajo.find("#ImpactoEnPlazo").val('No');
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
        btnModificar.on("click", function () {
            if (!$("input[name='EstatusTrabajo']:checked").val()) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN ESTATUS', 'danger');
            } else {
                $.validator.setDefaults({ignore: []});
                $('#frmEditar').validate({
                    errorElement: 'span',
                    errorClass: 'help-block',
                    rules: {
                        Movimiento: 'required',
                        FechaCreacion: 'required',
                        Cliente_ID: 'required',
                        Sucursal_ID: 'required',
                        Preciario_ID: 'required'
                    },
                    highlight: function (element, errorClass, validClass) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element).closest('.form-group').removeClass('has-error');
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
                            pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                            pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                            pnlDetalleEditarTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
                            pnlDetalleEditarTrabajo.find("#ConceptosCajero").addClass("disabledDetalle");
                        } else {
                            btnConfirmarEliminar.attr("disabled", false);
                            pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', false);
                            pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                            pnlDetalleEditarTrabajo.find("#ConceptosAbierto").removeClass("disabledDetalle");
                            pnlDetalleEditarTrabajo.find("#ConceptosCajero").removeClass("disabledDetalle");
                        }
                        getRecords();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            }
        });
        btnGuardar.on("click", function () {
            if ($("input:radio[name='NuevoEstatusTrabajo']").is(":checked")) {
                $.validator.setDefaults({ignore: []});
                $('#frmNuevo').validate({
                    errorElement: 'span',
                    errorClass: 'help-block',
                    rules: {
                        Movimiento: 'required',
                        FechaCreacion: 'required',
                        Cliente_ID: 'required',
                        Sucursal_ID: 'required',
                        Preciario_ID: 'required'
                    },
                    highlight: function (element, errorClass, validClass) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $(element).closest('.form-group').removeClass('has-error');
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
                    frm.append('Importe', ImporteTotalGlobal);
                    $.ajax({
                        url: master_url + 'onAgregar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVO TRABAJO', 'success');
                        getRecords();
                        despuesDeGuardar(data); /*Funcion que regarga el panel de editar con el nuevo registro*/
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE SELECCIONAR UN ESTATUS', 'danger');
            }
        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevoTrabajo.addClass("hide");
            pnlDetalleNuevoTrabajo.addClass("hide");
        });
        btnCancelarModificar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarTrabajo.addClass("hide");
            pnlDetalleEditarTrabajo.addClass("hide");
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
            pnlDetalleNuevoTrabajo.removeClass("hide");
            pnlDetalleNuevoTrabajo.find(".nav-tabs li").removeClass("active");
            $(pnlDetalleNuevoTrabajo.find(".nav-tabs li")[0]).addClass("active");
            pnlDetalleNuevoTrabajo.find("#Presupuesto").addClass("active in");
            pnlDetalleNuevoTrabajo.find("#Levantamiento").removeClass("active in");
            pnlDetalleNuevoTrabajo.find("#Cajeros").removeClass("active in");
            pnlNuevoTrabajo.find("input").not('[type=radio]').val('');
            $("input:radio[name='NuevoEstatusTrabajo']").each(function (i) {
                this.checked = false;
            });
            pnlNuevoTrabajo.find("textarea").val("");
            pnlNuevoTrabajo.find("select").val(null).trigger("change");
            pnlNuevoTrabajo.find("select").select2("val", "");
            pnlNuevoTrabajo.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlNuevoTrabajo.find("#ImpactoEnPlazo").val('No');
            pnlNuevoTrabajo.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");
        });
        pnlNuevoTrabajo.find("#Codigoppta_ID").change(function () {
            getCodigoPPTAbyID(pnlNuevoTrabajo.find("#Codigoppta_ID").val(), $(this).val());
        });
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
                        var preview = '<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><img src="' + reader.result + '" class="img-responsive" width="600px">\n\
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
                var frm = new FormData();
                frm.append('Adjunto', ModificarArchivo[0].files[0]);
                frm.append('ID', IdMovimiento);
                HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
                $.ajax({
                    url: master_url + 'onModificarAdjunto',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    var imageType = /image.*/;
                    if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match(imageType)) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            var preview = '<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><img src="' + reader.result + '" class="img-responsive" width="600px" >\n\
                <div class="caption">\n\
                <p>' + ModificarArchivo[0].files[0].name + '</p>\n\
                </div></div>';
                            ModificarVistaPrevia.html(preview);
                        };
                        reader.readAsDataURL(ModificarArchivo[0].files[0]);
                    } else {
                        if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match('application/pdf')) {
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
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            });
            ModificarArchivo.trigger('click');
        });
        getClientes();
        getCodigosPPTA();
        getRecords();
        getCuadrillas();
    });
    IdMovimiento = 0;
    function getRecords() {

        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        $.ajax({
            url: master_url + verMovs,
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            if (data.length > 0) {

                $("#tblRegistros").html(getTable('tblTrabajos', data));
                var thead = $('#tblTrabajos').find('thead th');
                var tfoot = $('#tblTrabajos').find('tfoot th');
                thead.eq(2).addClass("hide");
                tfoot.eq(2).addClass("hide");
                thead.eq(11).addClass("hide");
                tfoot.eq(11).addClass("hide");
                $.each($('#tblTrabajos').find('tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(3).addClass("hide");
                    td.eq(11).addClass("hide");
                });


                $('#tblTrabajos tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
                });


                var tblSelected = $('#tblTrabajos').DataTable(tableOptionsTrabajos);

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
                    pnlEditarTrabajo.find("#EditarDatos5").removeClass("active in");
                    pnlEditarTrabajo.find("#EditarDatos6").removeClass("active in");
                    pnlDetalleEditarTrabajo.find(".nav-tabs li").removeClass("active");
                    $(pnlDetalleEditarTrabajo.find(".nav-tabs li")[0]).addClass("active");
                    pnlDetalleEditarTrabajo.find("#PresupuestoEditar").addClass("active in");
                    pnlDetalleEditarTrabajo.find("#LevantamientoEditar").removeClass("active in");
                    pnlDetalleEditarTrabajo.find("#CajerosEditar").removeClass("active in");
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
                            var trabajo = data[0];
                            //pnlEditarTrabajo.find("input").val("");
                            pnlEditarTrabajo.find("input").not('[type=radio]').val('');
                            pnlEditarTrabajo.find("select").val(null).trigger("change");
                            pnlEditarTrabajo.find("select").select2("val", "");
                            RadionButtonSelectedValueSet('EstatusTrabajo', trabajo.EstatusTrabajo);
                            if (trabajo.Cliente_ID === '1') {
                                pnlEditarTrabajo.find("#eBBVAMantenimiento").removeClass("hide");
                                pnlEditarTrabajo.find("#eBBVAObra").removeClass("hide");
                                pnlEditarTrabajo.find("#eBBVACajeros").removeClass("hide");
                                pnlDetalleEditarTrabajo.find("#peCajeros").removeClass("hide");
                            } else if (trabajo.Cliente_ID === '16') {
                                mdlReportesEditarTrabajo.find("#rNordes").removeClass('hide');
                            } else {
                                pnlEditarTrabajo.find("#eBBVAMantenimiento").addClass("hide");
                                pnlEditarTrabajo.find("#eBBVAObra").addClass("hide");
                                pnlDetalleEditarTrabajo.find("#peCajeros").addClass("hide");
                            }
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
                                //HoldOn.close();
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
                                //HoldOn.close();
                            });
                            $.ajax({
                                url: master_url + 'getEspecialidadesByCliente',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: trabajo.Cliente_ID
                                }
                            }).done(function (data, x, jq) {
                                var options = '<option></option>';
                                $.each(data, function (k, v) {
                                    options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
                                });
                                pnlEditarTrabajo.find("#Especialidad_ID").html(options);
                                pnlEditarTrabajo.find("#Especialidad_ID").select2("val", trabajo.Especialidad_ID);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            }).always(function () {
                                //HoldOn.close();
                            });
                            $.ajax({
                                url: master_url + 'getAreasByCliente',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: trabajo.Cliente_ID
                                }
                            }).done(function (data, x, jq) {
                                var options = '<option></option>';
                                $.each(data, function (k, v) {
                                    options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
                                });
                                pnlEditarTrabajo.find("#Area_ID").html(options);
                                pnlEditarTrabajo.find("#Area_ID").select2("val", trabajo.Area_ID);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            }).always(function () {
                                //HoldOn.close();
                            });
                            $.ajax({
                                url: master_url + 'getCCByCliente',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: trabajo.Cliente_ID
                                }
                            }).done(function (data, x, jq) {
                                var options = '<option></option>';
                                $.each(data, function (k, v) {
                                    options += '<option value="' + v.ID + '">' + v.Nombre + '</option>';
                                });
                                pnlEditarTrabajo.find("#CentroCostos_ID").html(options);
                                pnlEditarTrabajo.find("#CentroCostos_ID").select2("val", trabajo.CentroCostos_ID);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            }).always(function () {
                                //HoldOn.close();
                            });
                            getCodigoPPTAbyID(trabajo.Codigoppta_ID);/*trae los días*/
                            Cliente = trabajo.Cliente_ID;
                            pnlEditarTrabajo.removeClass("hide");
                            pnlDetalleEditarTrabajo.removeClass("hide");
                            getTrabajoDetalleByID(trabajo.ID);
                            getDetalleAbiertoByID(trabajo.ID);
                            getDetalleCajerosByID(trabajo.ID);
                            pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                            pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                            pnlEditarTrabajo.find("#Cliente_ID").select2("val", trabajo.Cliente_ID);
                            pnlEditarTrabajo.find("#Especialidad_ID").select2("val", trabajo.Especialidad_ID);
                            pnlEditarTrabajo.find("#Area_ID").select2("val", trabajo.Area_ID);
                            pnlEditarTrabajo.find("#CentroCostos_ID").select2("val", trabajo.CentroCostos_ID);
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
                            pnlEditarTrabajo.find("#Observaciones").val(trabajo.Observaciones);
                            pnlEditarTrabajo.find("#ControlTiempoProceso").select2("val", trabajo.ControlProceso);
                            pnlEditarTrabajo.find("#CausaActuacionSintoma").val(trabajo.CausaActuacionSintoma);
                            pnlEditarTrabajo.find("#TextoCausa").val(trabajo.TextoCausa);
                            pnlEditarTrabajo.find("#Cal1").select2("val", trabajo.Cal1);
                            pnlEditarTrabajo.find("#Cal2").select2("val", trabajo.Cal2);
                            pnlEditarTrabajo.find("#Cal3").select2("val", trabajo.Cal3);
                            pnlEditarTrabajo.find("#Cal4").select2("val", trabajo.Cal4);
                            pnlEditarTrabajo.find("#Cal5").select2("val", trabajo.Cal5);
                            /*Cajeros*/
                            pnlEditarTrabajo.find("#FechaVisita").val(trabajo.FechaVisita);
                            pnlEditarTrabajo.find("#EncargadoSitio").val(trabajo.EncargadoSitio);
                            pnlEditarTrabajo.find("#HorarioAtencion").val(trabajo.HorarioAtencion);
                            pnlEditarTrabajo.find("#RestriccionAcceso").select2("val", trabajo.RestriccionAcceso);
                            pnlEditarTrabajo.find("#AireAcondicionado").select2("val", trabajo.AireAcondicionado);
                            pnlEditarTrabajo.find("#Carcasa").select2("val", trabajo.Carcasa);
                            pnlEditarTrabajo.find("#UPS").select2("val", trabajo.UPS);
                            pnlEditarTrabajo.find("#SenalizacionInterior").select2("val", trabajo.SenalizacionInterior);
                            pnlEditarTrabajo.find("#SenalizacionExterior").select2("val", trabajo.SenalizacionExterior);
                            pnlEditarTrabajo.find("#CanalizacionDatos").select2("val", trabajo.CanalizacionDatos);
                            pnlEditarTrabajo.find("#CanalizacionSeguridad").select2("val", trabajo.CanalizacionSeguridad);
                            pnlEditarTrabajo.find("#PruebaCalaFirme").val(trabajo.PruebaCalaFirme);
                            pnlEditarTrabajo.find("#TipoPiso").val(trabajo.TipoPiso);
                            if (trabajo.Adjunto !== null && trabajo.Adjunto !== undefined && trabajo.Adjunto !== '') {
                                var ext = getExt(trabajo.Adjunto);
                                if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                                    pnlEditarTrabajo.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + trabajo.Adjunto + '" class ="img-responsive" width="600px"  onclick="printImg(\' ' + base_url + trabajo.Adjunto + ' \')"  />');
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

                            console.log('Estatus: ' + trabajo.Estatus + '-' + trabajo.EstatusTrabajo);

                            if (trabajo.Estatus === 'Concluido' && trabajo.EstatusTrabajo !== 'Pagado' && trabajo.Estatus !== 'Entregado') {
                                tBtnEditarConcluir.prop('checked', true);
                                btnModificar.addClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                                pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                                pnlDetalleEditarTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
                                pnlDetalleEditarTrabajo.find("#ConceptosCajero").addClass("disabledDetalle");
                                pnlDetalleEditarTrabajo.find('table').addClass("disabledDetalle");
                                $('#tblConceptosXTrabajo tbody tr').addClass("disabledDetalle");




                            } else if (trabajo.Estatus === 'Entregado' && trabajo.EstatusTrabajo === 'Finalizado') {
                                tBtnEditarConcluir.prop('checked', true);
                                btnModificar.addClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                                pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                                pnlDetalleEditarTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
                                pnlDetalleEditarTrabajo.find("#ConceptosCajero").addClass("disabledDetalle");
                                pnlDetalleEditarTrabajo.find('table').addClass("disabledDetalle");
                                $('#tblConceptosXTrabajo tbody tr').addClass("disabledDetalle");




                            } else if (trabajo.Estatus === 'Entregado' && trabajo.EstatusTrabajo === 'Pagado') {


                                if (TipoAcceso === 'SUPER ADMINISTRADOR') {
                                    tBtnEditarConcluir.prop('checked', true);
                                    btnModificar.addClass('hide');
                                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                    btnConfirmarEliminar.attr("disabled", true);
                                    pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                                    pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                                    pnlDetalleEditarTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
                                    pnlDetalleEditarTrabajo.find("#ConceptosCajero").addClass("disabledDetalle");
                                    pnlDetalleEditarTrabajo.find('table').addClass("disabledDetalle");
                                    $('#tblConceptosXTrabajo tbody tr').addClass("disabledDetalle");

                                } else {
                                    tBtnEditarConcluir.prop('disabled', true);
                                    tBtnEditarConcluir.prop('checked', true);
                                    btnModificar.addClass('hide');
                                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                    btnConfirmarEliminar.attr("disabled", true);
                                    pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                                    pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                                    pnlDetalleEditarTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
                                    pnlDetalleEditarTrabajo.find("#ConceptosCajero").addClass("disabledDetalle");
                                    pnlDetalleEditarTrabajo.find('table').addClass("disabledDetalle");
                                    $('#tblConceptosXTrabajo tbody tr').addClass("disabledDetalle");

                                }



                            } else if (trabajo.Estatus === 'Cancelado') {
                                tBtnEditarConcluir.addClass('hide');
                                btnModificar.addClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                                btnConfirmarEliminar.attr("disabled", true);
                                pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                                pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                                pnlDetalleEditarTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
                            } else {
                                tBtnEditarConcluir.prop('checked', false);
                                btnModificar.removeClass('hide');
                                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                                btnConfirmarEliminar.attr("disabled", false);
                                pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', false);
                                pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                                pnlDetalleEditarTrabajo.find("#ConceptosAbierto").removeClass("disabledDetalle");
                            }
                            getImporteTotalDelTrabajoByID(trabajo.ID);
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                            //HoldOn.close();
                        });
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
                    }
                });

            } else {
                $("#tblRegistros").html('<br><hr><div class="col-md-12"><center><h3>NO EXISTEN REGISTROS</h3></center></div> ');

            }
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
    $('#tbDetalleNuevo a').on("click", function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    /*Para despues de insertar pro primera vez se cargue el panel de editar*/
    function despuesDeGuardar(IDTrabajo) {
        IdMovimiento = IDTrabajo;
        pnlNuevoTrabajo.addClass("hide");
        pnlDetalleNuevoTrabajo.addClass("hide");
        pnlEditarTrabajo.find(".nav-tabs li").removeClass("active");
        $(pnlEditarTrabajo.find(".nav-tabs li")[0]).addClass("active");
        pnlEditarTrabajo.find("#EditarDatos").addClass("active in");
        pnlEditarTrabajo.find("#EditarDatos2").removeClass("active in");
        pnlEditarTrabajo.find("#EditarDatos3").removeClass("active in");
        pnlEditarTrabajo.find("#EditarDatos4").removeClass("active in");
        pnlEditarTrabajo.find("#EditarDatos5").removeClass("active in");
        pnlEditarTrabajo.find("#EditarDatos5").removeClass("active in");
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
                var trabajo = data[0];
                //pnlEditarTrabajo.find("input").val("");
                pnlEditarTrabajo.find("input").not('[type=radio]').val('');
                pnlEditarTrabajo.find("select").val(null).trigger("change");
                pnlEditarTrabajo.find("select").select2("val", "");
                RadionButtonSelectedValueSet('EstatusTrabajo', trabajo.EstatusTrabajo);
                if (trabajo.Cliente_ID === '1') {
                    pnlEditarTrabajo.find("#eBBVAMantenimiento").removeClass("hide");
                    pnlEditarTrabajo.find("#eBBVAObra").removeClass("hide");
                    pnlEditarTrabajo.find("#eBBVACajeros").removeClass("hide");
                    pnlDetalleEditarTrabajo.find("#peCajeros").removeClass("hide");
                } else {
                    pnlEditarTrabajo.find("#eBBVAMantenimiento").addClass("hide");
                    pnlEditarTrabajo.find("#eBBVAObra").addClass("hide");
                    pnlDetalleEditarTrabajo.find("#peCajeros").addClass("hide");
                }
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
                $.ajax({
                    url: master_url + 'getEspecialidadesByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function (data, x, jq) {
                    var options = '<option></option>';
                    $.each(data, function (k, v) {
                        options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
                    });
                    pnlEditarTrabajo.find("#Especialidad_ID").html(options);
                    pnlEditarTrabajo.find("#Especialidad_ID").select2("val", trabajo.Especialidad_ID);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                $.ajax({
                    url: master_url + 'getAreasByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function (data, x, jq) {
                    var options = '<option></option>';
                    $.each(data, function (k, v) {
                        options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
                    });
                    pnlEditarTrabajo.find("#Area_ID").html(options);
                    pnlEditarTrabajo.find("#Area_ID").select2("val", trabajo.Area_ID);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                $.ajax({
                    url: master_url + 'getCCByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function (data, x, jq) {
                    var options = '<option></option>';
                    $.each(data, function (k, v) {
                        options += '<option value="' + v.ID + '">' + v.Nombre + '</option>';
                    });
                    pnlEditarTrabajo.find("#CentroCostos_ID").html(options);
                    pnlEditarTrabajo.find("#CentroCostos_ID").select2("val", trabajo.CentroCostos_ID);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
                getCodigoPPTAbyID(trabajo.Codigoppta_ID);/*trae los días*/
                Cliente = trabajo.Cliente_ID;
                pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                pnlEditarTrabajo.find("#Cliente_ID").select2("val", trabajo.Cliente_ID);
                pnlEditarTrabajo.find("#Especialidad_ID").select2("val", trabajo.Especialidad_ID);
                pnlEditarTrabajo.find("#Area_ID").select2("val", trabajo.Area_ID);
                pnlEditarTrabajo.find("#CentroCostos_ID").select2("val", trabajo.CentroCostos_ID);
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
                pnlEditarTrabajo.find("#Observaciones").val(trabajo.Observaciones);
                pnlEditarTrabajo.find("#CausaActuacionSintoma").val(trabajo.CausaActuacionSintoma);
                pnlEditarTrabajo.find("#TextoCausa").val(trabajo.TextoCausa);
                pnlEditarTrabajo.find("#Cal1").select2("val", trabajo.Cal1);
                pnlEditarTrabajo.find("#Cal2").select2("val", trabajo.Cal2);
                pnlEditarTrabajo.find("#Cal3").select2("val", trabajo.Cal3);
                pnlEditarTrabajo.find("#Cal4").select2("val", trabajo.Cal4);
                pnlEditarTrabajo.find("#Cal5").select2("val", trabajo.Cal5);
                /*Cajeros*/
                pnlEditarTrabajo.find("#FechaVisita").val(trabajo.FechaVisita);
                pnlEditarTrabajo.find("#EncargadoSitio").val(trabajo.EncargadoSitio);
                pnlEditarTrabajo.find("#HorarioAtencion").val(trabajo.HorarioAtencion);
                pnlEditarTrabajo.find("#RestriccionAcceso").select2("val", trabajo.RestriccionAcceso);
                pnlEditarTrabajo.find("#AireAcondicionado").select2("val", trabajo.AireAcondicionado);
                pnlEditarTrabajo.find("#Carcasa").select2("val", trabajo.Carcasa);
                pnlEditarTrabajo.find("#UPS").select2("val", trabajo.UPS);
                pnlEditarTrabajo.find("#SenalizacionInterior").select2("val", trabajo.SenalizacionInterior);
                pnlEditarTrabajo.find("#SenalizacionExterior").select2("val", trabajo.SenalizacionExterior);
                pnlEditarTrabajo.find("#CanalizacionDatos").select2("val", trabajo.CanalizacionDatos);
                pnlEditarTrabajo.find("#CanalizacionSeguridad").select2("val", trabajo.CanalizacionSeguridad);
                pnlEditarTrabajo.find("#PruebaCalaFirme").val(trabajo.PruebaCalaFirme);
                pnlEditarTrabajo.find("#TipoPiso").val(trabajo.TipoPiso);
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
                tBtnEditarConcluir.prop('checked', false);
                btnModificar.removeClass('hide');
                pnlEditarTrabajo.removeClass("hide");
                pnlDetalleEditarTrabajo.removeClass("hide");
                getTrabajoDetalleByID(trabajo.ID);
                getDetalleAbiertoByID(trabajo.ID);
                getDetalleCajerosByID(trabajo.ID);
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
    function getPreciariosActivosbyCliente(Cliente_ID) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getPreciariosActivosbyCliente',
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
    function getEspecialidadesbyCliente(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getEspecialidadesbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
            });
            pnlNuevoTrabajo.find("#Especialidad_ID").html(options);
            pnlEditarTrabajo.find("#Especialidad_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getAreasbyCliente(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getAreasbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Descripcion + '</option>';
            });
            pnlNuevoTrabajo.find("#Area_ID").html(options);
            pnlEditarTrabajo.find("#Area_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getCCbyCliente(IDX) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getCCByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
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
        //HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
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
            //HoldOn.close();
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
        var ImporteTotalE = pnlDetalleEditarTrabajo.find("#ImporteTotal");
        var total = 0.0;
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
                thead.eq(12).addClass("hide");
                tfoot.eq(12).addClass("hide");
                $.each(pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("hide");
                    td.eq(12).addClass("hide");
                });
                var tblSelected = pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo').DataTable(tableOptionsDetalle);
                pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo tbody').on('click', 'tr', function () {
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
            getTrabajoDetalleByID(IdMovimiento);
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
                ID: IdEliminarConceptoAbierto,
                IDT: IdMovimiento
            }
        }).done(function (data, x, jq) {
            console.log(data);
            $('#mdlConfirmarEliminarConceptoAbierto').modal('hide');
            $(evtEliminarConceptoAbierto).parent().parent().remove();
        }).fail(function (x, y, z) {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO NO ELIMINADO', 'danger');
        }).always(function () {
            HoldOn.close();
        });
    });
    $('#btnEliminarConceptoCajero').on("click", function () {
        HoldOn.open({theme: 'sk-bounce', message: 'ELIMINANDO...'});
        $.ajax({
            url: master_url + 'onEliminarConceptoXDetalleCajero',
            type: "POST",
            data: {
                ID: IdEliminarConceptoCajero,
                IDT: IdMovimiento
            }
        }).done(function (data, x, jq) {
            $('#mdlConfirmarEliminarConceptoCajero').modal('hide');
            $(evtEliminarConceptoCajero).parent().parent().remove();
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
            var tblGeneradoresDetalleXConcepto = '<br><table  id="tblGeneradoresDetalleXConcepto" class="table table-striped table-hover" width="100%">' +
                    '<thead>' +
                    '<tr>' +
                    '<th class="hide">IDT</th>' +
                    '<th class="hide">IDG</th>' +
                    '<th class="hide">Concepto_ID</th>' +
                    '<th></th>' +
                    '<th class="col-md-3">Area</th>' +
                    '<th class="col-md-3">Estimación</th>' +
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
                /*ESTIMACION*/
                tblGeneradoresDetalleXConcepto += "<td>";
                tblGeneradoresDetalleXConcepto += v.EstimacionNo;
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
            var tipo_cambio = mdlTrabajoEditarGeneradorPorConcepto.find("#TipoCambioGenerador").val();
            var nueva_cantidad = 0;
            mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto").find("tbody tr").each(function (k, v) {
                var row = $(v).find("td");
                nueva_cantidad += parseFloat(row.eq(13).text());
            });
            var GeneradorImporteTotalEditar = mdlTrabajoEditarGeneradorPorConcepto.find("#GeneradorImporteTotal");
            GeneradorImporteTotalEditar.html('<strong class="spanTotalesDetalle">Total: </strong><span class="text-success spanTotalesDetalle">' + $.number(nueva_cantidad, 6, '.', ', ') + '</span> ');
            $.ajax({
                url: master_url + 'onModificarConceptoCantidadEImporte',
                type: "POST",
                data: {
                    ID: IDX,
                    Cantidad: nueva_cantidad,
                    Importe: (parseFloat(tipo_cambio) * parseFloat(precio)) * parseFloat(nueva_cantidad)
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
    function getGeneradoresDetalleXConceptoID(IDTD, IDT, IDCO, TipoCambio) {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getGeneradoresDetalleXConceptoID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDTD
            }
        }).done(function (data, x, jq) {
            mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val(IDT);/*ID DEL TRABAJO*/
            mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val(IDTD);/*ID DEL TRABAJODETALLE*/
            mdlTrabajoEditarGeneradorPorConcepto.find("#Concepto_ID").val(IDCO);/*ID DEL CONCEPTO*/
            mdlTrabajoEditarGeneradorPorConcepto.find("#TipoCambioGenerador").val(TipoCambio);/*Tipo Cambio*/
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
                    '<th class="col-md-3">Area</th>' +
                    '<th class="col-md-3">Estimación</th>' +
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
                    /*ESTIMACION*/
                    tblGeneradoresDetalleXConcepto += "<td>";
                    tblGeneradoresDetalleXConcepto += v.EstimacionNo;
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
        mdlTrabajoEditarGeneradorPorConcepto.find("#EstimacionNo").val(row.eq(5).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Eje").val(row.eq(6).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje1").val(row.eq(7).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje2").val(row.eq(8).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val(row.eq(9).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val(row.eq(10).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val(row.eq(11).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val(row.eq(12).text());
        mdlTrabajoEditarGeneradorPorConcepto.find("#Precio").val(row.eq(16).text());
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
        var generador_largo = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val() : 1);
        var generador_ancho = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val() : 1);
        var generador_alto = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val() : 1);
        var generador_cantidad = parseFloat((mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() !== '' && parseFloat(mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val()) !== 0) ? mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val() : 1);
        var total_generador = parseFloat((generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad)));
        frm.append('ID', mdlTrabajoEditarGeneradorPorConcepto.find("#IDG").val());
        frm.append('Area', mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val());
        frm.append('EstimacionNo', mdlTrabajoEditarGeneradorPorConcepto.find("#EstimacionNo").val());
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
        mdlTrabajoEditarGeneradorPorConcepto.find("#EstimacionNo").val("");
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
        mdlTrabajoEditarGeneradorPorConcepto.find("#EstimacionNo").val("");
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
                $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
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
                    /**VALIDAR QUE EL CONCEPTO NO HAYA SIDO AGREGADO CON ANTERIORIDAD**/
                    var has_id = true;
                    if (pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo tbody tr").length > 0) {
                        $.each(pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo tbody tr"), function () {
                            var row_status = $(this).find("td").eq(12).text();
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
                                frm.append('Concepto', dtm.Descripcion);
                                frm.append('Clave', dtm.Clave);
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
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
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
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoAntesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
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
        tempDetalleAbierto = IDX;
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
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoDespuesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
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
        $.getJSON({
            url: master_url + 'getTiempoFotosProcesoXTrabajoDetalleID',
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                var TextoAgrupador = "";
                if (pnlEditarTrabajo.find('#ControlTiempoProceso').val() === 'Dias') {
                    TextoAgrupador = 'Día No. ';
                } else if (pnlEditarTrabajo.find('#ControlTiempoProceso').val() === 'Semanas') {
                    TextoAgrupador = 'Semana No. ';
                }
                var row = "";
                mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("");
                var tiempos = [];
                var porcentajes = [];
                $.each(data, function (k, v) {
                    tiempos.push(v.Tiempo);
                    porcentajes.push(v.Porcentaje);
                });
                var tiempos_unicos = [];
                $.each(tiempos, function (i, el) {
                    if ($.inArray(el, tiempos_unicos) === -1) {
                        tiempos_unicos.push(el);
                    }
                });
                var porcentajes_unicos = [];
                $.each(porcentajes, function (i, el) {
                    if ($.inArray(el, porcentajes_unicos) === -1) {
                        porcentajes_unicos.push(el);
                    }
                });
                var index = 0;
                $.each(tiempos_unicos, function (k, tu) {
                    row += '<div class="col-md-12" align="center"><h4>' + TextoAgrupador + tu + ' Avance: ' + porcentajes_unicos[index] + ' </h4><hr></div>';
                    $.each(data, function (k, d) {
                        if (tu === d.Tiempo) {

                            row += '<div class="col-md-3">' +
                                    '<div class="thumbnail">' +
                                    '<div class="pull-left caption col-md-11 Customcaption" >' +
                                    '<div class="form-group Customform-group">' +
                                    '<label for="ObservacionesxFotoProceso" class="control-label customFormLabel">Observaciones</label>' +
                                    '<input id="ObservacionesxFotoProceso" name="ObservacionesxFotoProceso" type="text" class="form-control"  onchange="onModificarObservacionesProceso(' + d.ID + ',' + d.IdTrabajoDetalle + ',this)"  value="' + d.Observaciones + '"></input>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="pull-right" >' +
                                    '<button class="close closeFotos customButtonEliminarFoto"' +
                                    'data-tooltip="Eliminar" onclick="onEliminarFotoProcesoXConcepto(' + d.ID + ',' + d.IdTrabajoDetalle + ',' + IDT + ')">×</button>' +
                                    '</div>' +
                                    '<a href="' + base_url + d.Url + '" target="_blank">' + '<img src="' + base_url + d.Url + '" alt="' + base_url + d.Url + '" width="100%" ></a>' +
                                    '</div>' +
                                    '</div>';


                        }
                    });
                    /*BREAK*/
                    row += '<div class="col-md-12"></div>';
                    /*SUMAR UN RECORRIDO POR EL INDICE*/
                    index++;
                });
                /*COLOCAR SOLO UNA VEZ EL HTML GENERADO*/
                mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("<fieldset>" + row + "</fieldset>");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTiempoProceso").val('');
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdPorcentajeProceso").val('');
        $('#idSubirFotosProceso').addClass('hide');
        if ($('#ControlTiempoProceso').val() === 'Dias') {
            $(".Tiempo").empty();
            $(".Tiempo").append("No. Día*");
            mdlTrabajoEditarFotosProcesoPorConcepto.modal('show');
        } else if ($('#ControlTiempoProceso').val() === 'Semanas') {
            $(".Tiempo").empty();
            $(".Tiempo").append("No. Semana*");
            mdlTrabajoEditarFotosProcesoPorConcepto.modal('show');
        } else if ($('#ControlTiempoProceso').val() === '') {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBELES DE SELECCIONAR UN CONTROL DE TIEMPO', 'danger');
        }
    }
    function getCroquisXConceptoID(IDX, IDT) {
        tempDetalle = IDX;
        mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").html("");
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO CROQUIS...'
        });
        $.ajax({
            url: master_url + 'getTrabajoCroquisDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: tempDetalle
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").html("<fieldset></fieldset>");
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 2) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-6">';
                    picthumbnail += '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarCroquisXID(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
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
        mdlTrabajoEditarAnexosPorConcepto.find("fieldset").find("Anexos").html("");
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
            console.log(data);
            mdlTrabajoEditarAnexosPorConcepto.find("fieldset").find("div#Anexos").html("");
            if (data.length > 0) {
                $.each(data, function (k, v) {
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
                    if (ext === "txt" || ext === "dat") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text-o fa-4x"></span><br>' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    }
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
    function getAnexosDosXConceptoID(IDX, IDT) {
        mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarAnexosDosPorConcepto.find("fieldset").find("Anexos").html("");
        HoldOn.open({theme: 'sk-bounce', message: 'CARGANDO ANEXOS...'
        });
        $.ajax({url: master_url + 'getTrabajoAnexosDosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX,
                IDT: IdMovimiento
            }
        }).done(function (data, x, jq) {
            mdlTrabajoEditarAnexosDosPorConcepto.find("fieldset").find("div#Anexos").html("");
            if (data.length > 0) {
                $.each(data, function (k, v) {
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
                    if (ext === "txt" || ext === "dat") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text-o fa-4x"></span><br>' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    }
                });
            } else {
                mdlTrabajoEditarAnexosDosPorConcepto.find("div#Anexos").html('<h3>NO EXISTEN ANEXOS ADJUNTOS</h3>');
            }
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarAnexosDosPorConcepto.modal('show');
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
    function setAnexosDosEditar(evt) {
        mdlTrabajoEditarAnexosDosPorConcepto.find("#fAnexos").trigger('click');
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
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
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
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoAntesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
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
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoDespuesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
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
        $.getJSON({
            url: master_url + 'getTiempoFotosProcesoXTrabajoDetalleID',
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                var TextoAgrupador = "";
                if (pnlEditarTrabajo.find('#ControlTiempoProceso').val() === 'Dias') {
                    TextoAgrupador = 'Día No. ';
                } else if (pnlEditarTrabajo.find('#ControlTiempoProceso').val() === 'Semanas') {
                    TextoAgrupador = 'Semana No. ';
                }
                var row = "";
                mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("");
                var tiempos = [];
                var porcentajes = [];
                $.each(data, function (k, v) {
                    tiempos.push(v.Tiempo);
                    porcentajes.push(v.Porcentaje);
                });
                var tiempos_unicos = [];
                $.each(tiempos, function (i, el) {
                    if ($.inArray(el, tiempos_unicos) === -1) {
                        tiempos_unicos.push(el);
                    }
                });
                var porcentajes_unicos = [];
                $.each(porcentajes, function (i, el) {
                    if ($.inArray(el, porcentajes_unicos) === -1) {
                        porcentajes_unicos.push(el);
                    }
                });
                var index = 0;
                $.each(tiempos_unicos, function (k, tu) {
                    row += '<div class="col-md-12" align="center"><h4>' + TextoAgrupador + tu + ' Avance: ' + porcentajes_unicos[index] + ' </h4><hr></div>';
                    $.each(data, function (k, d) {
                        if (tu === d.Tiempo) {
                            row += '<div class="col-md-3">' +
                                    '<div class="thumbnail">' +
                                    '<div class="pull-left caption col-md-11 Customcaption" >' +
                                    '<div class="form-group Customform-group">' +
                                    '<label for="ObservacionesxFotoProceso" class="control-label customFormLabel">Observaciones</label>' +
                                    '<input id="ObservacionesxFotoProceso" name="ObservacionesxFotoProceso" type="text" class="form-control"  onchange="onModificarObservacionesProceso(' + d.ID + ',' + d.IdTrabajoDetalle + ',this)"  value="' + d.Observaciones + '"></input>' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="pull-right" >' +
                                    '<button class="close closeFotos customButtonEliminarFoto"' +
                                    'data-tooltip="Eliminar" onclick="onEliminarFotoProcesoXConcepto(' + d.ID + ',' + d.IdTrabajoDetalle + ',' + IDT + ')">×</button>' +
                                    '</div>' +
                                    '<a href="' + base_url + d.Url + '" target="_blank">' + '<img src="' + base_url + d.Url + '" alt="' + base_url + d.Url + '" width="100%" ></a>' +
                                    '</div>' +
                                    '</div>';
                        }
                    });
                    /*BREAK*/
                    row += '<div class="col-md-12"></div>';
                    /*SUMAR UN RECORRIDO POR EL INDICE*/
                    index++;
                });
                /*COLOCAR SOLO UNA VEZ EL HTML GENERADO*/
                mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("<fieldset>" + row + "</fieldset>");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
        getDetalleAbiertoByID(IDT);
        HoldOn.close();
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
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 2) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-6"><div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarCroquisXID(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
                    mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").html("");
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
                $.each(data, function (k, v) {
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
                    if (ext === "txt" || ext === "dat") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text-o fa-4x"></span><br>' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    }
                });
            } else {
                mdlTrabajoEditarAnexosPorConcepto.find("div#Anexos").html('<h3>NO EXISTEN ANEXOS ADJUNTOS</h3>');
            }
            getTrabajoDetalleByID(IdMovimiento);
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onReloadAnexosDosXConcepto(IDX, IDT) {
        $.ajax({url: master_url + 'getTrabajoAnexosDosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX,
                IDT: IDT
            }
        }).done(function (data, x, jq) {
            mdlTrabajoEditarAnexosDosPorConcepto.find("fieldset").find("div#Anexos").html("");
            if (data.length > 0) {
                $.each(data, function (k, v) {
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
                    if (ext === "txt" || ext === "dat") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text-o fa-4x"></span><br>' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-md-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    }
                });
            } else {
                mdlTrabajoEditarAnexosDosPorConcepto.find("div#Anexos").html('<h3>NO EXISTEN ANEXOS ADJUNTOS</h3>');
            }
            getDetalleAbiertoByID(IdMovimiento);
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onEliminarFotoXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
        $.ajax({
            url: master_url + 'onEliminarFotoXConcepto',
            type: "POST",
            data: {ID: IDX, IDT: IdMovimiento}
        }).done(function (data, x, jq) {
            onReloadFotosXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarFotoAntesXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
        $.ajax({
            url: master_url + 'onEliminarFotoAntesXConcepto',
            type: "POST",
            data: {ID: IDX}
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
            data: {ID: IDX}
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
            data: {ID: IDX}
        }).done(function (data, x, jq) {
            onReloadFotosProcesoXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarCroquisXID(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO ANEXO..."});
        $.ajax({
            url: master_url + 'onEliminarCroquisXID',
            type: "POST",
            data: {ID: IDX}
        }).done(function (data, x, jq) {
            onReloadCroquisXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarAnexoXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO ANEXO..."});
        $.ajax({
            url: master_url + 'onEliminarAnexoXConcepto ',
            type: "POST",
            data: {ID: IDX, IDT: IDT}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'ANEXO, ELIMINADO', 'success');
            onReloadAnexosXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEliminarAnexoDosXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO ANEXO..."});
        $.ajax({
            url: master_url + 'onEliminarAnexoDosXConcepto ',
            type: "POST",
            data: {ID: IDX, IDT: IDT}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'ANEXO, ELIMINADO', 'success');
            onReloadAnexosDosXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
        }).always(function () {
            HoldOn.close();
        });
    }
    function getFotosCajeroXConceptoID(IDX, IDT) {
        mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdCajeroBBVADetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#Fotos").html("");
        HoldOn.open({theme: 'sk-bounce', message: 'CARGANDO FOTOS...'});
        $.ajax({
            url: master_url + 'getTrabajoFotosCajeroDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#Fotos").html("<fieldset></fieldset>");
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3">' +
                            '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11 Customcaption" >' +
                            '<div class="form-group Customform-group">' +
                            '<label for="ObservacionesxFoto" class="control-label customFormLabel">Observaciones</label>' +
                            '<input id="ObservacionesxFoto" name="ObservacionesxFoto" type="text" class="form-control"  onchange="onModificarObservaciones(' + v.ID + ',' + v.IdCajeroBBVADetalle + ',this)"  value="' + v.Observaciones + '"></input>' +
                            '</div>' +
                            '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoCajeroXID(' + v.ID + ',' + v.IdCajeroBBVADetalle + ',' + IDT + ')">×</button>' +
                            '</div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a>' +
                            '</div>' +
                            '</div>';
                    mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarFotosCajeroPorConceptoCajero.modal('show');
    }
    function setFotosCajeroEditar(evt) {
        mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#fFotosCajero").trigger('click');
    }
    function onReloadFotosCajeroXConcepto(IDX, IDT) {
        $.ajax({
            url: master_url + 'getTrabajoFotosCajeroDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#Fotos").html("<fieldset></fieldset>");
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-md-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-md-3">' +
                            '<div class="thumbnail">' +
                            '<div class="pull-left caption col-md-11 Customcaption" >' +
                            '<div class="form-group Customform-group">' +
                            '<label for="ObservacionesxFoto" class="control-label customFormLabel">Observaciones</label>' +
                            '<input id="ObservacionesxFoto" name="ObservacionesxFoto" type="text" class="form-control"  onchange="onModificarObservaciones(' + v.ID + ',' + v.IdCajeroBBVADetalle + ',this)"  value="' + v.Observaciones + '"></input>' +
                            '</div>' +
                            '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoCajeroXID(' + v.ID + ',' + v.IdCajeroBBVADetalle + ',' + IDT + ')">×</button>' +
                            '</div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a>' +
                            '</div>' +
                            '</div>';
                    mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#Fotos").html("");
            }
            getDetalleCajerosByID(IDT);
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onEliminarFotoCajeroXID(IDX, IDTD, IDT) {
        HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
        $.ajax({
            url: master_url + 'onEliminarFotoCajeroXID',
            type: "POST",
            data: {ID: IDX}
        }).done(function (data, x, jq) {
            onReloadFotosCajeroXConcepto(IDTD, IDT);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onModificarObservaciones(IDX, IDTD, IDT) {
        var Observaciones = IDT.value;
        //$('#ObservacionesxFoto').val('');
        HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
        $.ajax({
            url: master_url + 'ononModificarObservacionesFotoXConcepto',
            type: "POST",
            data: {ID: IDX, ObservacionesxFoto: Observaciones
            }
        }).done(function (data, x, jq) {
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onModificarObservacionesProceso(IDX, IDTD, IDT) {
        var Observaciones = IDT.value;
        //$('#ObservacionesxFoto').val('');
        HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
        $.ajax({
            url: master_url + 'ononModificarObservacionesFotoProcesoXConcepto',
            type: "POST",
            data: {ID: IDX, ObservacionesxFoto: Observaciones
            }
        }).done(function (data, x, jq) {
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Funciones Detalle Abierto*/
    var tempDetalleAbierto = 0;
    function getDetalleAbiertoByID(IDX) {
        $.ajax({
            url: master_url + 'getTrabajoDetalleAbiertoByID',
            type: "POST",
            dataType: "JSON",
            data: {ID: IDX}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                pnlDetalleEditarTrabajo.find("#ConceptosAbierto").html(getTable('tblRegistrosXDetalleAbierto', data));
                var thead = pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleAbierto thead th');
                var tfoot = pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleAbierto tfoot th');
                thead.eq(0).addClass("hide");
                tfoot.eq(0).addClass("hide");
                $.each(pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleAbierto tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("hide");
                });
                var tblSelected = pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleAbierto').DataTable(tableOptionsDetalle);
                pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleAbierto tbody').on('click', 'tr', function () {
                    pnlDetalleEditarTrabajo.find("#tblRegistrosXDetalleAbierto").find("tr").removeClass("success");
                    pnlDetalleEditarTrabajo.find("#tblRegistrosXDetalleAbierto").find("tr").removeClass("warning");
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
                pnlDetalleEditarTrabajo.find("#ConceptosAbierto").html("");
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
                HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
                $.ajax({
                    url: master_url + 'getDetalleAbiertoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {ID: IDX}
                }).done(function (data, x, jq) {

                    if (Cliente === '8') {
                        $("#CamposMeorEditar").removeClass("hide");
                    } else {
                        $("#CamposMeorEditar").addClass("hide");
                    }


                    $('#mdlEditarConceptoAbierto').find("input").val("");
                    var concepto = data[0];
                    $('#mdlEditarConceptoAbierto').find("#ID").val(concepto.ID);
                    $('#mdlEditarConceptoAbierto').find("#Trabajo_ID").val(concepto.Trabajo_ID);
                    $('#mdlEditarConceptoAbierto').find("#Clave").val(concepto.Clave);
                    $('#mdlEditarConceptoAbierto').find("#Descripcion").val(concepto.Descripcion);
                    $('#mdlEditarConceptoAbierto').find("#Descripcion2").val(concepto.Descripcion2);
                    $('#mdlEditarConceptoAbierto').find("#Descripcion3").val(concepto.Descripcion3);
                    $('#mdlEditarConceptoAbierto').find("#SemanaDia").val(concepto.SemanaDia);
                    $('#mdlEditarConceptoAbierto').find("#InicioFin").val(concepto.InicioFin);
                    $('#mdlEditarConceptoAbierto').find("#InicioFinProximaSemana").val(concepto.InicioFinProximaSemana);
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
    var tempDetalleCajero = 0;
    function getDetalleCajerosByID(IDX) {
        $.ajax({
            url: master_url + 'getTrabajoDetalleCajeroByID',
            type: "POST",
            dataType: "JSON",
            data: {ID: IDX}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                pnlDetalleEditarTrabajo.find("#ConceptosCajero").html(getTable('tblRegistrosXDetalleCajeros', data));
                var thead = pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleCajeros thead th');
                var tfoot = pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleCajeros tfoot th');
                thead.eq(0).addClass("hide");
                tfoot.eq(0).addClass("hide");
                $.each(pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleCajeros tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("hide");
                });
                var tblSelected = pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleCajeros').DataTable(tableOptionsDetalle);
                pnlDetalleEditarTrabajo.find('#tblRegistrosXDetalleCajeros tbody').on('click', 'tr', function () {
                    pnlDetalleEditarTrabajo.find("#tblRegistrosXDetalleCajeros").find("tr").removeClass("success");
                    pnlDetalleEditarTrabajo.find("#tblRegistrosXDetalleCajeros").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    tempDetalleCajero = parseInt(dtm[0]);
                });
            } else {
                pnlDetalleEditarTrabajo.find("#ConceptosCajero").html("");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onEditarConceptoXDetalleCajero(IDX) {
        $.ajax({
            url: master_url + 'getTrabajoDetalleCajeroByID',
            type: "POST",
            data: {ID: IDX}
        }).done(function (data, x, jq) {
            if (IDX !== 0 && IDX !== undefined && IDX > 0) {
                HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
                $.ajax({
                    url: master_url + 'getDetalleCajeroByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {ID: IDX}
                }).done(function (data, x, jq) {
                    $('#mdlEditarConceptoCajero').find("input").val("");
                    var concepto = data[0];
                    $('#mdlEditarConceptoCajero').find("#ID").val(concepto.ID);
                    $('#mdlEditarConceptoCajero').find("#Trabajo_ID").val(concepto.Trabajo_ID);
                    $('#mdlEditarConceptoCajero').find("#Clave").val(concepto.Clave);
                    $('#mdlEditarConceptoCajero').find("#Descripcion").val(concepto.Descripcion);
                    $('#mdlEditarConceptoCajero').modal('show');
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
    IdEliminarConceptoCajero = 0;
    evtEliminarConceptoCajero = '';
    function onEliminarConceptoXDetalleCajero(evt, IDX) {
        IdEliminarConceptoCajero = IDX;
        evtEliminarConceptoCajero = evt;
        $('#mdlConfirmarEliminarConceptoCajero').modal('show');
    }
    function minmax(value, min, max) {
        if (parseInt(value) < min || isNaN(parseInt(value))) {
            return "";
        } else if (parseInt(value) > max) {
            return 100;
        } else
        {
            return value;
        }
    }
    function printImg(url) {
        var win = window.open('');
        win.document.write('<img src="' + url + '" onload="window.print();window.close()" />');
        win.focus();
    }
    function onAgregarTipoCambio(IDX, Precio, Cantidad) {
        $('#mdlAgregarTipoCambio').find("input").val("");
        $('#mdlAgregarTipoCambio').modal('show');
        $("#TipoCambio").mask("99?.99", {placeholder: "00.00"});
        var nuevoImporte = 0;
        var TipoCambio = 0;
        $("#TipoCambio").change(function () {
            TipoCambio = parseFloat($('#TipoCambio').val());
            nuevoImporte = (TipoCambio * Precio) * Cantidad;
        });
        $('#btnAgregarTipoCambio').click(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'onModificarImporteConcepto',
                type: "POST",
                data: {
                    ID: IDX,
                    TipoCambio: TipoCambio,
                    Importe: nuevoImporte
                }
            }).done(function (data, x, jq) {
                $('#mdlAgregarTipoCambio').modal('hide');
                getTrabajoDetalleByID(IdMovimiento);
                /*MODIFICAR EL IMPORTE DEL TRABAJO*/
                $.ajax({
                    url: master_url + 'onModificarImportePorTrabajo',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento
                    }
                }).done(function (data, x, jq) {
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
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
    }
    function onModificarTipoCambio(IDX, Precio, Cantidad, TipoCambioBD) {
        $('#mdlAgregarTipoCambio').find("input").val("");
        $('#mdlAgregarTipoCambio').modal('show');
        $("#TipoCambio").val(parseFloat(TipoCambioBD));
        $("#TipoCambio").mask("99?.99", {placeholder: "00.00"});
        var nuevoImporte = (TipoCambioBD * Precio) * Cantidad;
        var TipoCambio = TipoCambioBD;
        $("#TipoCambio").change(function () {
            TipoCambio = parseFloat($('#TipoCambio').val());
            nuevoImporte = (TipoCambio * Precio) * Cantidad;
        });
        $('#btnAgregarTipoCambio').click(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'onModificarImporteConcepto',
                type: "POST",
                data: {
                    ID: IDX,
                    TipoCambio: TipoCambio,
                    Importe: nuevoImporte
                }
            }).done(function (data, x, jq) {
                /*MODIFICAR EL IMPORTE DEL TRABAJO*/
                $.ajax({
                    url: master_url + 'onModificarImportePorTrabajo',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento
                    }
                }).done(function (data, x, jq) {
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
                $('#mdlAgregarTipoCambio').modal('hide');
                getTrabajoDetalleByID(IdMovimiento);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
    }
    function getConceptoEditarXDetalle(IDX) {
        var cantidad = 0;
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        $.ajax({
            url: master_url + 'getDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {ID: tempDetalle}
        }).done(function (data, x, jq) {
            $('#mdlEditarConcepto').modal('show');
            $('#mdlEditarConcepto').find("input").val("");
            var concepto = data[0];
            cantidad = concepto.Cantidad;
            $('#txtEditarClave').val(concepto.Clave);
            $('#taEditarConcepto').val(concepto.Concepto);
            $("#txtEditarClave").val(concepto.Clave);
            $("#txtEditarUnidad").val(concepto.Unidad);
            $("#txtEditarPrecio").val(concepto.Precio);
            $("#txtEditarMoneda").select2("val", concepto.Moneda);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
        $('#btnEditarConcepto').on("click", function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'onModificarTrabajoDetalle',
                type: "POST",
                data: {
                    ID: tempDetalle,
                    Clave: $("#txtEditarClave").val(),
                    Concepto: $("#taEditarConcepto").val(),
                    Unidad: $("#txtEditarUnidad").val(),
                    Precio: $("#txtEditarPrecio").val(),
                    Moneda: $("#txtEditarMoneda").val(),
                    Importe: $("#txtEditarPrecio").val() * cantidad
                }
            }).done(function (data, x, jq) {
                $('#mdlEditarConcepto').modal('hide');
                getTrabajoDetalleByID(IdMovimiento);
                /*MODIFICAR EL IMPORTE DEL TRABAJO*/
                $.ajax({
                    url: master_url + 'onModificarImportePorTrabajo',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento
                    }
                }).done(function (data, x, jq) {
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
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
    }
    function onReemplazarConcepto(IDX, Cantidad) {
        var Preciario_ID = pnlEditarTrabajo.find("#Preciario_ID").val();
        temp = 0;
        if (Preciario_ID !== undefined && Preciario_ID !== '' && Preciario_ID > 0) {
            getConceptosXPreciarioIDEditar(Preciario_ID);
            $('#mdlTrabajoReemplazarConceptoEditar').modal('show');
            $('#mdlTrabajoReemplazarConceptoEditar').find("input").val("");
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getConceptosXPreciarioID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: Preciario_ID
                }
            }).done(function (data, x, jq) {
                HoldOn.close();
                $('#mdlTrabajoReemplazarConceptoEditar').find("#ConceptosReemplazarXPreciarioID").html(getTable('tblConceptosReemplazarXPreciarioID', data));
                $('#mdlTrabajoReemplazarConceptoEditar').find('#tblConceptosReemplazarXPreciarioID tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
                });
                var tblSelected = $('#tblConceptosReemplazarXPreciarioID').DataTable(tableOptions);
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
                $('#mdlTrabajoReemplazarConceptoEditar').find('#tblConceptosReemplazarXPreciarioID tbody').on('click', 'tr', function () {
                    $('#mdlTrabajoReemplazarConceptoEditar').find("#tblConceptosReemplazarXPreciarioID").find("tr").removeClass("success");
                    $('#mdlTrabajoReemplazarConceptoEditar').find("#tblConceptosReemplazarXPreciarioID").find("tr").removeClass("warning");
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
                        /**VALIDAR QUE EL CONCEPTO NO HAYA SIDO AGREGADO CON ANTERIORIDAD**/
                        var has_id = true;
                        if (pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo tbody tr").length > 0) {
                            $.each(pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo tbody tr"), function () {
                                var row_status = $(this).find("td").eq(12).text();
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
                                var NuevoImporte = 0;
                                if (data[0] !== undefined && data.length > 0) {
                                    var dtm = data[0];
                                    var frm = new FormData();
                                    NuevoImporte = Cantidad * dtm.Costo;
                                    frm.append('ID', tempDetalle);
                                    frm.append('PreciarioConcepto_ID', dtm.ID);
                                    frm.append('Unidad', dtm.Unidad);
                                    frm.append('Precio', dtm.Costo);
                                    frm.append('Moneda', dtm.Moneda);
                                    frm.append('Concepto', dtm.Descripcion);
                                    frm.append('Clave', dtm.Clave);
                                    frm.append('Importe', NuevoImporte);
                                    $.ajax({
                                        url: master_url + 'onReemplazarTrabajoDetalle',
                                        type: "POST",
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        data: frm
                                    }).done(function (data, x, jq) {
                                        getTrabajoDetalleByID(pnlEditarTrabajo.find("#EditarDatos").find("#ID").val());
                                        $('#mdlTrabajoReemplazarConceptoEditar').modal('hide');
                                        /*Actualizar Importe Total*/
                                        $.ajax({
                                            url: master_url + 'onModificarImportePorTrabajo',
                                            type: "POST",
                                            dataType: "JSON",
                                            data: {
                                                ID: IdMovimiento
                                            }
                                        }).done(function (data, x, jq) {
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
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PRECIARIO', 'danger');
        }
    }
    function getConceptoCopiarXDetalle(IDX) {
        var cantidad = 0;
        var id_nuevoConcepto = 0;
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        $.ajax({
            url: master_url + 'getDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {ID: tempDetalle}
        }).done(function (data, x, jq) {
            if (data[0] !== undefined && data.length > 0) {
                var dtm = data[0];
                var frm = new FormData();
                frm.append('Trabajo_ID', IdMovimiento);
                frm.append('PreciarioConcepto_ID', dtm.PreciarioConcepto_ID);
                frm.append('Renglon', pnlDetalleEditarTrabajo.find("table tr").length);
                frm.append('Cantidad', dtm.Cantidad);
                frm.append('Unidad', dtm.Unidad);
                frm.append('Precio', dtm.Precio);
                frm.append('Importe', dtm.Importe);
                frm.append('IntExt', dtm.IntExt);
                frm.append('Moneda', dtm.Moneda);
                frm.append('TipoCambio', dtm.TipoCambio);
                frm.append('Concepto', dtm.Concepto);
                frm.append('Clave', dtm.Clave);
                $.ajax({
                    url: master_url + 'onCopiarDetalleEditar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    id_nuevoConcepto = data;
                    $.ajax({
                        url: master_url + 'getGeneradoresXDetalleID',
                        type: "POST",
                        dataType: "JSON",
                        data: {ID: tempDetalle}
                    }).done(function (datax, x, jq) {
                        $.each(datax, function (i, v) {
                            var frmGen = new FormData();
                            frmGen.append('Concepto_ID', v.Concepto_ID);
                            frmGen.append('IdTrabajoDetalle', id_nuevoConcepto);
                            frmGen.append('Area', v.Area);
                            frmGen.append('EstimacionNo', v.EstimacionNo);
                            frmGen.append('Eje', v.Eje);
                            frmGen.append('EntreEje1', v.EntreEje1);
                            frmGen.append('EntreEje2', v.EntreEje2);
                            frmGen.append('Largo', v.Largo);
                            frmGen.append('Ancho', v.Ancho);
                            frmGen.append('Alto', v.Alto);
                            frmGen.append('Cantidad', v.Cantidad);
                            frmGen.append('Total', v.Total);
                            $.ajax({
                                url: master_url + 'onCopiarGenerador',
                                type: "POST",
                                cache: false,
                                contentType: false,
                                processData: false,
                                data: frmGen
                            }).done(function (data, x, jq) {
                                console.log(data);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR', 'danger');
                            }).always(function () {
                                HoldOn.close();
                            });
                        });
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                    getTrabajoDetalleByID(IdMovimiento);
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA COPIADO EL CONCEPTO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL CONCEPTO NO SE COPIO, INTENTE DE NUEVO', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function RadionButtonSelectedValueSet(name, SelectdValue) {
        $('input[name="' + name + '"][value="' + SelectdValue + '"]').prop('checked', true);
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
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'FIN 49 CONCEPTOS, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
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
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'RESUMEN, GENERADO', 'success');
                ;
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
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
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO BBVA, GENERADO', 'success');
                ;
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
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
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO A&R, GENERADO', 'success');
                ;
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReportePresupuestoIng() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReportePresupuestoIng',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO A&R, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
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
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADOR, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
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
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE CROQUIS, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
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
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOGRAFICO, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
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
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'TARIFARIO GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteExcelFicheroXMov() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onReporteExcelFicheroXMov',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            //console.log(data);
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'FICHERO GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    var Cliente = 0;
    function onReporteLevantamientoAntes() {
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoAntesPrinciple';
        } else {
            reporte = 'onReporteLevantamientoAntes';
        }
        $.ajax({
            url: master_url + reporte,
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS ANTES, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteLevantamientoProceso() {
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoProcesoPrinciple';
        } else {
            reporte = 'onReporteLevantamientoProceso';
        }
        $.ajax({
            url: master_url + reporte,
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS EN PROCESO, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
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
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS DESPUES, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteLevantamientoCompleto() {
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoCompletoPrinciple';
        } else {
            reporte = 'onReporteLevantamientoCompleto';
        }
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + reporte,
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE LEVANTAMIENTO COMPLETO, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Reporte cajero*/
    function onReportePresentacionCajeros() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onReporteCajero',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESENTACIÓN FOTOGRÁFICA, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Reportes NORDES*/
    function onReporteNordesActaRecepcion() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onReporteNordesActaRecepcion',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteNordesHojaServicio() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onReporteNordesHojaServicio',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteNordesReporteTableros() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onReporteNordesReporteTableros',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteCaratulaBBVA() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteCaratulaBBVA',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE CARÁTULA BBVA, GENERADO', 'success');
                ;
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onReporteProceso(DetalleID, IDX) {
        var reporte = '';
        if (parseFloat(Cliente) === 8) {
            reporte = 'onReporteLevantamientoSemanal';
        } else {
            reporte = 'onReporteLevantamientoSemanalGenerico';
        }
        $.ajax({
            url: master_url + reporte,
            type: "POST",
            data: {
                ID: IDX,
                DetalleID: DetalleID
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE SEMANAL, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });

    }
</script>