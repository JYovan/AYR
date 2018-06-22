<div class="card border-0" id="MenuTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-3 float-left">
                <legend class="float-left">Servicios al Cliente</legend>
            </div>
            <div class="col-12 col-sm-9" align="right">
                <button type="button" class="btn btn-info btn-sm" id="btnVerMisMovimientos"><span class="fa fa-eye fa-1x"></span><br>MIS MOVIMIENTOS</button>
                <button type="button" class="btn btn-info btn-sm" id="btnVerTodosEnFirme"><span class="fa fa-eye fa-1x"></span><br>TODOS EN FIRME</button>
                <button type="button" class="btn btn-info btn-sm" id="btnVerTodos"><span class="fa fa-list-ol fa-1x" ></span><br>VER TODOS</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
            </div>
        </div>
        <div class="row" id="Trabajos">
            <table id="tblTrabajos" class="table table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Folio</th>
                        <th>Estatus</th>
                        <th>Estatus</th>
                        <th>Fecha</th>

                        <th>Adjunto</th>
                        <th>Cliente</th>
                        <th>Sucursal</th>
                        <th>Importe</th>
                        <th>Trabajo Requerido</th>
                        <th>Usuario</th>

                        <th>ImporteSinFormato</th>
                        <th>Usuario_ID</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th><input type="text" placeholder="Buscar por ID" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Folio" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Estatus" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Estatus" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Fecha" class="form-control form-control-sm"/></th>

                        <th><input type="text" placeholder="Buscar por Adjunto" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Cliente" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Importe" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Sucursal" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Trabajo Requerido" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Usuario" class="form-control form-control-sm"/></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!--Reportes-->
<div id="mdlReportesEditarTrabajo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <h5 class="modal-title">Seleccionar Reporte</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div id="reportesPresupuesto">
                <div class="col-12 col-12">
                    <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                        <li class="nav-item"><a href="#Generales" class="nav-link active show"  data-toggle="tab">Generales</a></li>
                        <li class="nav-item"><a href="#Obras" class="nav-link"  data-toggle="tab">Obras</a></li>
                        <li class="nav-item"><a href="#Mantenimientos" class="nav-link" data-toggle="tab">Mantenimiento</a></li>
                        <li class="nav-item"><a href="#Presentaciones" class="nav-link" data-toggle="tab">Presentaciones</a></li>
                        <li class="nav-item d-none" id="rNordes"><a href="#Nordes" class="nav-link" data-toggle="tab">Nordes</a></li>
                    </ul>
                </div>
                <br>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="Generales">
                        <button onclick="onReportePresupuesto()" class="btn btn-primary btn-sm"><span class="fa fa-dollar-sign fa-1x"></span><br>PRESUPUESTO A&R</button>
                        <button onclick="onReportePresupuestoIng()" class="btn btn-primary btn-sm"><span class="fa fa-dollar-sign fa-1x"></span><br>PRESUPUESTO A&R INGLÉS</button>
                        <button onclick="onReporteGenerador()" class="btn btn-primary btn-sm"><span class="fa fa-calculator fa-1x"></span><br>GENERADOR</button>
                        <button onclick="onReporteCroquis()" class="btn btn-primary btn-sm"><span class="fa fa-crop fa-1x"></span><br>CROQUIS</button>
                        <button onclick="onReporteFotografico()" class="btn btn-primary btn-sm"><span class="fa fa-camera fa-1x"></span><br>FOTOS</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade " id="Obras">
                        <button onclick="onReporteFin49()" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf fa-1x"></span><br>FIN 49 POC</button>
                        <button onclick="onReporteFin49Conceptos()" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf fa-1x"></span><br>FIN 49 O.C</button>
                        <button onclick="onReportePresupuestoBBVA()" class="btn btn-primary btn-sm"><span class="fa fa-dollar-sign fa-1x"></span><br>PRESUPUESTO BBVA</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Mantenimientos">
                        <button onclick="onReporteResumenPartidas()" class="btn btn-primary btn-sm"><span class="fa fa-list-ol fa-1x"></span><br>RESUMEN DE PARTIDAS</button>
                        <button onclick="onReporteExcelTarifarioXMov()" class="btn btn-primary btn-sm"><span class="fa fa-download fa-1x"></span><br>TARIFARIO</button>
                        <button onclick="onReporteExcelFicheroXMov()" class="btn btn-primary btn-sm"><span class="fa fa-download fa-1x"></span><br>FICHEROS</button>
                        <button onclick="onReporteCaratulaBBVA()" class="btn btn-primary btn-sm"><span class="fa fa-dollar-sign fa-1x"></span><br>CARÁTULA BBVA</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Presentaciones">
                        <button onclick="onReporteLevantamientoAntes();" class="btn btn-primary btn-sm"><span class="fa fa-camera fa-1x"></span><br>FOTOS ANTES</button>
                        <button onclick="onReporteLevantamientoProceso();" class="btn btn-primary btn-sm"><span class="fa fa-camera fa-1x"></span><br>FOTOS PROCESO</button>
                        <button onclick="onReporteLevantamientoDespues();" class="btn btn-primary btn-sm"><span class="fa fa-camera fa-1x"></span><br>FOTOS DESPUÉS</button>
                        <button onclick="onReporteLevantamientoCompleto()" class="btn btn-primary btn-sm"><span class="fa fa-image fa-1x"></span><br>GENERAL</button>
                        <button onclick="onReportePresentacionCajeros();" class="btn btn-primary btn-sm"><span class="fa fa-image fa-1x"></span><br>PRESENTACIÓN DE CAJEROS</button>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Nordes">
                        <button onclick="onReporteNordesActaRecepcion();" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf fa-1x"></span><br>Acta Recepción Trabajos Extras</button>
                        <button onclick="onReporteNordesHojaServicio();" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf fa-1x"></span><br>Hoja de Servicio Diario</button>
                        <button onclick="onReporteNordesReporteTableros();" class="btn btn-primary btn-sm"><span class="fa fa-file-pdf fa-1x"></span><br>Reporte Tableros Iguala</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--PANEL DATOS-->
<div id="" class="container-fluid">
    <div class="card border-0 d-none" id="pnlDatos">
        <div class="card-body text-dark">
            <form id="frmNuevo">
                <div id="CapturaDatos">
                    <div class="row">
                        <div class="col-6 col-sm-3 col-md-4 float-left">
                            <legend>Trabajo</legend>
                        </div>
                        <div class="col-6 col-sm-2 col-md-2" align="right" id="spanEstatus">
                            <span style="font-size: 15px;" class="badge badge-secondary">
                                BORRADOR
                            </span>
                        </div>
                        <div class="col-12 col-sm-7 col-md-6" align="right">
                            <button type="button" class="btn btn-primary btn-sm" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" ><span class="fa fa-arrow-left" ></span></button>
                            <button type="button" class="btn btn-light btn-sm d-none" id="btnCopiar" data-toggle="tooltip" data-placement="top" title="Copiar"><span class="fa fa-clone "></span> </button>
                            <button type="button" class="btn btn-warning btn-sm d-none" id="btnImprimirReportes" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes" ><span class="fa fa-print " ></span></button>
                            <button type="button" class="btn btn-danger btn-sm d-none" id="btnEliminar"><span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Eliminar"></span> </button>
                            <button type="button" class="btn btn-info btn-sm d-none" id="btnGuardar"><span class="fa fa-save "></span> GUARDAR</button>
                            <button type="button" class="btn btn-raised btn-success btn-sm d-none" id="btnConcluir"><span class="fa fa-check "></span> CONCLUIR</button>
                            <button type="button" class="btn btn-raised btn-info btn-sm d-none" id="btnInconcluir"><span class="fa fa-undo "></span> IN-CONCLUIR</button>
                        </div>
                        <div class="col-12">
                            <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                                <li role="presentation" class="nav-item"><a href="#Datos" aria-controls="Datos" role="tab" data-toggle="tab" class="nav-link show active">Datos Generales</a></li>
                                <li role="presentation"  class="nav-item"><a href="#Datos2" aria-controls="Datos2" role="tab" data-toggle="tab" class="nav-link">Datos del trabajo</a></li>
                                <li id="nBBVAMantenimiento" class="d-none nav-item" role="presentation"><a href="#Datos3" aria-controls="Datos3" role="tab" data-toggle="tab" class="nav-link">Mantenimiento BBVA</a></li>
                                <li id="nBBVAObra" class="d-none nav-item" role="presentation"><a href="#Datos4" aria-controls="Datos4" role="tab" data-toggle="tab" class="nav-link">Obra BBVA</a></li>
                                <li id="nBBVACajeros" class="d-none nav-item" role="presentation"><a href="#Datos5" aria-controls="Datos5" role="tab" data-toggle="tab" class="nav-link">Cajeros BBVA</a></li>
                                <li  role="presentation" class="nav-item"><a href="#Datos6" aria-controls="Datos6" role="tab" data-toggle="tab" class="nav-link">Adjunto</a></li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <br>
                            <ul class="table-responsive progress-indicator pt-3 pb-2" style="background-color: white; border-radius: 3px;" id="EstatusTrabajo">
                                <li id="stsPedido" step="1"><span class="bubble"></span>1. Pedido
                                </li>
                                <li id="stsPresupuesto" step="2"><span class="bubble"></span>2. Presupuesto
                                </li>
                                <li id="stsAutorizacion" step="3">
                                    <span class="bubble"></span>
                                    3. Autorización del cliente
                                </li>
                                <li id="stsNoAutorizado" step="4">
                                    <span class="bubble"></span>
                                    4. No Autorizado
                                </li>
                                <li id="stsEjecucion" step="5">
                                    <span class="bubble"></span>
                                    5. Ejecución
                                </li>
                                <li id="stsFinalizado" step="6">
                                    <span class="bubble"></span>
                                    6. Finalizado
                                </li>
                                <li id="stsPagado" step="7">
                                    <span class="bubble"></span>
                                    7. Pagado
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade show active" id="Datos">
                            <div class="row">
                                <div class="col-5 col-sm-4 col-md-2 col-lg-2 col-xl-1">
                                    <label for="ID" class="control-label">Folio Interno</label>
                                    <input type="text" id="ID" name="ID" class="form-control form-control-sm" readonly="" placeholder="" >
                                </div>
                                <div class="col-7 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                                    <label for="" class="control-label">Folio Cliente</label>
                                    <input type="text" id="FolioCliente" name="FolioCliente" class="form-control form-control-sm"  placeholder="" autofocus="">
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-2 col-xl-3">
                                    <label for="FechaCreacion" class="control-label">Fecha *</label>
                                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control form-control-sm"  data-provide="datepicker" data-date-format="dd/mm/yyyy" required="">
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                    <label for="" class="control-label">Cliente*</label>
                                    <select id="Cliente_ID" name="Cliente_ID" class="form-control form-control-sm required" >
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                    <label for="" class="control-label">Sucursal*</label>
                                    <select id="Sucursal_ID" name="Sucursal_ID" class="form-control form-control-sm required" >
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                    <label for="" class="control-label">Preciario*</label>
                                    <select id="Preciario_ID" name="Preciario_ID" class="form-control form-control-sm required" >
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                    <label for="" class="control-label">Centro de Costos</label>
                                    <select id="CentroCostos_ID" name="CentroCostos_ID" class="form-control form-control-sm" >
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                    <label for="" class="control-label">Especialidad</label>
                                    <select id="Especialidad_ID" name="Especialidad_ID" class="form-control form-control-sm" >
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                    <label for="" class="control-label">Área</label>
                                    <select id="Area_ID" name="Area_ID" class="form-control form-control-sm" >
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4 col-lg-3" id="ControlProceso" >
                                    <label for="" class="control-label">Control de fotos proceso</label>
                                    <select id="" name="ControlProceso" class="form-control " >
                                        <option value=""></option>
                                        <option value="Dias">DÍAS</option>
                                        <option value="Semanas">SEMANAS</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-8 col-md-12 col-lg-9">
                                    <label for="Observaciones" class="control-label">Observaciones</label>
                                    <input type="text" id="Observaciones" name="Observaciones" class="form-control form-control-sm"  placeholder="ALGUNA REFERENCIA, MINUTA, ETC" >
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <label for="" class="control-label">Trabajo Solicitado</label>
                                    <textarea class="col-12 form-control" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="3" required=""></textarea>
                                </div>
                                <div class="col-12 col-sm-12 col-md-6">
                                    <label for="" class="control-label">Trabajo Requerido</label>
                                    <textarea class="col-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="3" required=""></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos2">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for="" class="control-label">Cuadrilla</label>
                                    <select id="Cuadrilla_ID" name="Cuadrilla_ID" class="form-control form-control-sm" ><option value=""></option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for="" class="control-label">Fecha Atención</label>
                                    <input type="text" id="FechaAtencion" name="FechaAtencion" class="form-control form-control-sm"  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                </div>
                                <div class="col-12 col-sm-12 col-md-4 col-lg-6">
                                    <label for="" class="control-label">Solicitante</label>
                                    <input type="text" id="Solicitante" name="Solicitante" class="form-control form-control-sm"  placeholder="PERSONA QUE SOLICITA EL TRABAJO" >
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label for="" class="control-label">Fecha Origen</label>
                                    <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control form-control-sm notEnter"  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label for="" class="control-label">Hora Origen</label>
                                    <input type="text"  class="form-control form-control-sm" name="HoraOrigen" id="HoraOrigen" data-provide="timepicker" data-minute-step="1" data-second-step="1"/>
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label for="" class="control-label">Fecha Visita</label>
                                    <input type="text" id="FechaLlegada" name="FechaLlegada" class="form-control form-control-sm notEnter"  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label for="" class="control-label">Hora Visita</label>
                                    <input type="text"  class="form-control form-control-sm" name="HoraLlegada" id="HoraLlegada" data-provide="timepicker" data-minute-step="1"  data-second-step="1"/>
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label for="" class="control-label">Fecha Fin Visita</label>
                                    <input type="text" id="FechaSalida" name="FechaSalida" class="form-control form-control-sm notEnter"  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                </div>
                                <div class="col-6 col-sm-6">
                                    <label for="" class="control-label">Hora Fin Visita</label>
                                    <input type="text"  class="form-control form-control-sm" name="HoraSalida" id="HoraSalida" data-provide="timepicker" data-minute-step="1"   data-second-step="1" />
                                </div>
                            </div>
                        </div>
                        <!--PANEL DE MANTENIMIENTO BBVA-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos3">
                            <div class="row">
                                <div class="col-12 col-sm-8 col-md-6 col-lg-3">
                                    <label for="" class="control-label">Codigo PPTA</label>
                                    <select id="Codigoppta_ID" name="Codigoppta_ID" class="form-control form-control-sm" >
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4 col-md-6 col-lg-3">
                                    <label for="" class="control-label">Días</label>
                                    <input type="text" id="Dias" name="" class="form-control form-control-sm" readonly="" placeholder="" >
                                </div>
                                <div class=" col-12 col-sm-6 col-md-6 col-lg-3">
                                    <label for="CausaActuacionSintoma" class="control-label">Causa Síntoma</label>
                                    <input type="text" id="CausaActuacionSintoma" name="CausaActuacionSintoma" class="form-control form-control-sm" placeholder="" >
                                </div>
                                <div class=" col-12 col-sm-6 col-md-6 col-lg-3">
                                    <label for="TextoCausa" class="control-label">Texto Causa</label>
                                    <input type="text" id="TextoCausa" name="TextoCausa" class="form-control form-control-sm"  placeholder="" >
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for="Cal1" class="control-label">Calificación 1</label>
                                    <select id="Cal1" name="Cal1" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for="Cal2" class="control-label">Calificación 2</label>
                                    <select id="Cal2" name="Cal2" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for="Cal3" class="control-label">Calificación 3</label>
                                    <select id="Cal3" name="Cal3" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for="Cal4" class="control-label">Calificación 4</label>
                                    <select id="Cal4" name="Cal4" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="EXCELENTE">EXCELENTE</option>
                                        <option value="BUENO">BUENO</option>
                                        <option value="REGULAR">REGULAR</option>
                                        <option value="MALO">MALO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <label for="Cal5" class="control-label">Calificación 5</label>
                                    <select id="Cal5" name="Cal5" class="form-control form-control-sm" >
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
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <label for="ImpactoEnPlazo" class="control-label">Impacto en el Plazo</label>
                                    <select id="ImpactoEnPlazo" name="ImpactoEnPlazo" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <label for="" class="control-label">Días de Impacto</label>
                                    <input type="number" id="DiasImpacto" name="DiasImpacto" class="form-control form-control-sm"  placeholder="" >
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="" class="control-label">Causa del trabajo</label>
                                    <select id="CausaTrabajo" name="CausaTrabajo" class="form-control form-control-sm" >
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
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="" class="control-label">Clave Origen</label>
                                    <select id="ClaveOrigenTrabajo" name="ClaveOrigenTrabajo" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="CONTR">CONTR - CONTRATISTA</option>
                                        <option value="GDP">GDP - GERENCIADORA DE PROYECTOS</option>
                                        <option value="BBVA">CTE - CLIENTE</option>
                                        <option value="OTRO">OTRO - OTRO</option>
                                    </select>
                                </div>
                                <div class=" col-12 col-sm-12 col-lg-6">
                                    <label for="EspecificaOrigenTrabajo" class="control-label">(En caso de otros) Especifica</label>
                                    <input type="text" id="EspecificaOrigenTrabajo" name="EspecificaOrigenTrabajo" class="form-control form-control-sm"  placeholder="" >
                                </div>
                                <div class="col-12 col-lg-12">
                                    <label for="" class="control-label">Origen del Trabajo</label>
                                    <textarea class="form-control" id="DescripcionOrigenTrabajo" name="DescripcionOrigenTrabajo" rows="3" ></textarea>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <label for="" class="control-label">Riesgo del Trabajo</label>
                                    <textarea class="form-control" id="DescripcionRiesgoTrabajo" name="DescripcionRiesgoTrabajo" rows="3" ></textarea>
                                </div>
                                <div class="col-12 col-lg-12">
                                    <label for="" class="control-label">Alcance del Trabajo</label>
                                    <textarea class="form-control" id="DescripcionAlcanceTrabajo" name="DescripcionAlcanceTrabajo" rows="3" ></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DE CAJERO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos5">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="FechaVisita" class="control-label">Fecha Visita</label>
                                    <input type="text" id="FechaVisita" name="FechaVisita" class="form-control form-control-sm"  data-provide="datepicker" data-date-format="dd/mm/yyyy">
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="EncargadoSitio" class="control-label">Encargado del Sitio</label>
                                    <input type="text" id="EncargadoSitio" name="EncargadoSitio" class="form-control form-control-sm"  placeholder="PERSONA ENCARGADA DEL SITIO" >
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="" class="control-label">Horario de Atención</label>
                                    <input type="text" id="HorarioAtencion" name="HorarioAtencion" class="form-control form-control-sm"   >
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="RestriccionAcceso" class="control-label">Restricción de Acceso?</label>
                                    <select id="RestriccionAcceso" name="RestriccionAcceso" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="AireAcondicionado" class="control-label">Aire Acondicionado?</label>
                                    <select id="AireAcondicionado" name="AireAcondicionado" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="Carcasa" class="control-label">Carcasa?</label>
                                    <select id="Carcasa" name="Carcasa" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="UPS" class="control-label">UPS/Supresor de Picos?</label>
                                    <select id="UPS" name="UPS" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="SenalizacionInterior" class="control-label">Señalización Interior?</label>
                                    <select id="SenalizacionInterior" name="SenalizacionInterior" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="SenalizacionExterior" class="control-label">Señalización Exterior?</label>
                                    <select id="SenalizacionExterior" name="SenalizacionExterior" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="CanalizacionDatos" class="control-label">Canalización de Datos?</label>
                                    <select id="CanalizacionDatos" name="CanalizacionDatos" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6 col-md-3">
                                    <label for="CanalizacionSeguridad" class="control-label">Canalización de Seguridad?</label>
                                    <select id="CanalizacionSeguridad" name="CanalizacionSeguridad" class="form-control form-control-sm" >
                                        <option value=""></option>
                                        <option value="SI">SI</option>
                                        <option value="NO">NO</option>
                                    </select>
                                </div>
                                <div class=" col-12 col-sm-6 col-md-3">
                                    <label for="PruebaCalaFirme" class="control-label">Prueba de Cala de Firme</label>
                                    <input type="text" id="PruebaCalaFirme" name="PruebaCalaFirme" class="form-control form-control-sm"  placeholder="" >
                                </div>
                                <div class=" col-12 col-sm-6 col-md-3">
                                    <label for="TipoPiso" class="control-label">Tipo Piso</label>
                                    <input type="text" id="TipoPiso" name="TipoPiso" class="form-control form-control-sm"  placeholder="" >
                                </div>
                            </div>
                        </div>
                        <!-- PANEL DE ARCHIVO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos6">
                            <div class="row">
                                <div class="col-12" align="center">
                                    <br>
                                    <h5>Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</h5>
                                </div>
                                <div class="col-12" align="center">
                                    <input type="file" id="Adjunto" name="Adjunto" class="d-none" accept="application/pdf, image/*">
                                    <button type="button" class="btn btn-info btn-sm" id="btnArchivo" name="btnArchivo">
                                        <span class="fa fa-upload fa-1x"></span> SELECCIONA EL ARCHIVO
                                    </button>
                                    <br><hr>
                                    <div id="VistaPrevia" class="col-12" align="center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 col-md-6"><h6>Los campos con * son obligatorios</h6></div>
                        <div class="col-6 col-md-6" id="ImporteTotal"  align="right">
                            <strong>Importe :</strong><h5 class="text-success"><strong></strong></h5>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--PANEL DETALLE-->
<div class="card border-0 d-none" id="pnlDetalleTrabajo">
    <div class="card-body">
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 mb-3">
                    <ul class="nav nav-tabs" role="tablist" id="tbDetalleNuevo">
                        <li role="presentation" class="nav-item"><a href="#Presupuesto" aria-controls="Presupuesto" role="tab" data-toggle="tab" aria-selected="true" class="nav-link show active">Conceptos Presupuesto</a></li>
                        <li role="presentation" class="nav-item"><a href="#Levantamiento" aria-controls="Levantamiento" role="tab" data-toggle="tab" class="nav-link">Conceptos Levantamiento</a></li>
                        <li role="presentation" id="peCajeros" class="nav-item d-none"><a href="#Cajeros" aria-controls="Cajeros" role="tab" data-toggle="tab" class="nav-link">Conceptos Cajeros</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="Presupuesto">
                    <div class="row mb-3">
                        <div class="col-6 col-md-6" align="left">
                            <legend></legend>
                        </div>
                        <div class="col-6 col-md-6" align="right">
                            <button type="button" class="btn btn-primary btn-sm" id="btnNuevoConcepto"><span class="fa fa-plus "></span></button>
                        </div>
                    </div>
                    <!--NUEVA TABLA CONCEPTOS-->
                    <div id="ConceptosPresupuesto" class="row d-none" >
                        <table id="tblConceptosPresupuesto" class="table table-sm display" style="width:100% " >
                            <thead>
                                <tr >
                                    <th>ID</th>
                                    <th>Clave</th>
                                    <th>Int/Ext</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Unidad</th>
                                    <th>Precio</th>
                                    <th>Importe</th>
                                    <th>Moneda</th>
                                    <th>Adjuntos</th>
                                    <th>PCID</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody style="overflow-y: auto;"></tbody>

                        </table>
                    </div>
                    <!--FIN NUEVA TABLA DE CONCEPTOS-->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Levantamiento">
                    <div class="row mb-3">
                        <div class="col-6 col-md-6" align="left">
                            <legend></legend>
                        </div>
                        <div class="col-6 col-md-6" align="right">
                            <button type="button" class="btn btn-primary btn-sm" id="btnNuevoConceptoAbierto"><span class="fa fa-plus "></span></button>
                        </div>
                    </div>
                    <!--NUEVA TABLA CONCEPTOS-->
                    <div id="ConceptosAbiertos" class="row" >
                        <table id="tblConceptosAbiertos" class="table table-sm display" style="width:100% " >
                            <thead>
                                <tr >
                                    <th>ID</th>
                                    <th>Clave</th>
                                    <th>Descripción</th>
                                    <th>Adjuntos</th>
                                    <th>Reportes</th> 
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody style="overflow-y: auto;"></tbody>

                        </table>
                    </div>
                    <!--FIN NUEVA TABLA DE CONCEPTOS-->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Cajeros">
                    <div class="row mb-3">
                        <div class="col-6 col-md-6" align="left">
                            <legend></legend>
                        </div>
                        <div class="col-6 col-md-6" align="right">
                            <button type="button" class="btn btn-primary btn-sm" id="btnNuevoConceptoCajero"><span class="fa fa-plus "></span></button>
                        </div>
                    </div>
                    <!--NUEVA TABLA CONCEPTOS-->
                    <div id="ConceptosCajeros" class="row" >
                        <table id="tblConceptosCajeros" class="table table-sm display" style="width:100% " >
                            <thead>
                                <tr >
                                    <th>ID</th>
                                    <th>Clave</th>
                                    <th>Descripción</th>
                                    <th>Fotos</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <!--FIN NUEVA TABLA DE CONCEPTOS-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlSeleccionarConceptos" class="modal modal-fullscreen">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Seleccionar Conceptos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12" align="right">
                        <div class="custom-control custom-checkbox float-right">
                            <input type="checkbox" class="custom-control-input float-right" id="chkMultiple" >
                            <label class="custom-control-label" for="chkMultiple"> <h6>Seleccionar Varios</h6></label>
                        </div>
                    </div>
                </div>
                <br>
                <div id="RegistrosConceptosPreciario">
                    <table id="tblRegistrosConceptosPreciario" class="table table-sm " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Clave</th>
                                <th>Descripción</th>
                                <th>Unidad</th>
                                <th>Costo</th>
                                <th>Moneda</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL AJUNTOS PRESUPUESTO-->
<div id="Adjuntos" class="modal  modal-fullscreen animated slideInDown">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adjuntos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row d-none">
                    <div class="col">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control">
                    </div>
                </div>
                <div class="accordion" id="AccordionAdjuntos">
                    <div class="card  border-0">
                        <div class="" id="cardFotos">
                            <h5 class="mb-0">
                                <a id="load_fotos" class="btn btn-info btn-block text-light collapsed mb-3" data-toggle="collapse" data-target="#Fotos" aria-expanded="true" aria-controls="Fotos">
                                    <span class="fa fa-camera fa-lg"></span> Fotos
                                </a>
                            </h5>
                        </div>
                        <div id="Fotos" class="collapse" aria-labelledby="cardFotos" data-parent="#AccordionAdjuntos">
                            <fieldset>
                                <input type="file" accept='image/x-png,image/gif,image/jpeg' id="fFotos" name="fFotos[]" multiple="" class="d-none">
                                <div class="col-12" id="inputFotos" align="center"  onclick="setFotosEditar(this)">
                                    <div class="file_drag_area">
                                        <h5> Arrastre aquí los archivos a subir ó clic para seleccionarlos</h5>
                                        <i class="fas fa-cloud-upload-alt fa-lg mt-1"></i>
                                    </div>
                                </div>
                                <div class="col-12"><br><br></div>
                                <div class="col-12 row" style="height: 350px; overflow-y: auto;" id="vFotos"></div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="card border-0">
                        <div class="" id="cardCroquis">
                            <h5 class="mb-0">
                                <a id="load_croquis"  class="btn btn-info btn-block text-light collapsed  mb-3"  data-toggle="collapse" data-target="#Croquis" aria-expanded="false" aria-controls="Croquis">
                                    <span class="fa fa-map fa-lg"></span> Croquis
                                </a>
                            </h5>
                        </div>
                        <div id="Croquis" class="collapse" aria-labelledby="cardCroquis" data-parent="#AccordionAdjuntos">
                            <fieldset>
                                <input type="file" accept='image/*' id="fCroquis" name="fCroquis[]" multiple="" class="d-none">
                                <div class="col-12" id="inputCroquis" align="center"  onclick="setCroquisEditar(this)">
                                    <div class="file_drag_area">
                                        <h5> Arrastre aquí los archivos a subir ó clic para seleccionarlos</h5>
                                        <i class="fas fa-cloud-upload-alt fa-lg mt-1"></i>
                                    </div>
                                </div>
                                <div class="col-12"><br><br></div>
                                <div class="col-12" style="height: 350px; overflow-y: auto;"  id="vCroquis"></div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="card  border-0">
                        <div class="" id="cardAnexos">
                            <h5 class="mb-0">
                                <a id="load_anexos" class="btn btn-info btn-block text-light collapsed"  data-toggle="collapse" data-target="#Anexos" aria-expanded="false" aria-controls="Anexos">
                                    <span class="fa fa-paperclip fa-lg"></span> Anexos
                                </a>
                            </h5>
                        </div>
                        <div id="Anexos" class="collapse" aria-labelledby="cardAnexos" data-parent="#AccordionAdjuntos">
                            <fieldset>
                                <div class="col-12"><br></div>
                                <div class="col-12 d-none">
                                    <input type="file" id="fAnexos" name="fAnexos[]" multiple="" class="d-none">
                                </div>
                            </fieldset>
                            <fieldset>
                                <div class="col-12" id="inputAnexos" align="center"  onclick="setAnexosEditar(this)">
                                    <div class="file_drag_area">
                                        <h5> Arrastre aquí los archivos a subir ó clic para seleccionarlos</h5>
                                        <i class="fas fa-cloud-upload-alt fa-lg mt-1"></i>
                                    </div>
                                </div>
                                <div class="col-12"><br></div>
                                <div class="col-12"  style="height: 350px; overflow-y: auto;" id="vAnexos"></div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL GENERADOR-->
<div id="mdlGeneradorConcepto" class="modal modal-fullscreen">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="pnlGenerador">
                <form id="frmGenerador">
                    <div class="row" id="CapturaGenerador">
                        <div class="d-none">
                            <input type="text" name="Concepto_ID" class="form-control hide">
                            <input type="text" name="IdTrabajoDetalle" class="form-control hide">
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <label for="Area" class="control-label">Area</label>
                            <input type="text" id="Area" name="Area" class="form-control form-control-sm" >
                        </div>
                        <div class="col-12 col-sm-3 col-md-2 col-lg-1">
                            <label for="EstimacionNo" class="control-label"># Estim.</label>
                            <input type="text" id="EstimacionNo" name="EstimacionNo" class="form-control form-control-sm numbersOnly">
                        </div>
                        <div class="col-12 col-sm-3 col-md-2 col-lg-1">
                            <label for="Eje" class="control-label">Eje</label>
                            <input type="text" id="Eje" name="Eje" class="form-control form-control-sm">
                        </div>
                        <div class="col-12 col-sm-3 col-md-2 col-lg-1">
                            <label for="EntreEje1" class="control-label">Ent. Eje 1</label>
                            <input type="text" id="EntreEje1" name="EntreEje1" class="form-control form-control-sm">
                        </div>
                        <div class="col-12 col-sm-3 col-md-2 col-lg-1">
                            <label for="EntreEje2" class="control-label">Ent. Eje 2</label>
                            <input type="text" id="EntreEje2" name="EntreEje2" class="form-control form-control-sm">
                        </div>
                        <div class="col-12 col-sm-3 col-md-2 col-lg-1">
                            <label for="Largo" class="control-label">Largo</label>
                            <input type="text" id="Largo" min="0" name="Largo" class="form-control form-control-sm numbersOnly">
                        </div>
                        <div class="col-12 col-sm-3 col-md-2 col-lg-1">
                            <label for="Ancho" class="control-label">Ancho</label>
                            <input type="text" id="Ancho" min="0" name="Ancho" class="form-control form-control-sm numbersOnly">
                        </div>
                        <div class="col-12 col-sm-3 col-md-2 col-lg-1">
                            <label for="Alto" class="control-label">Alto</label>
                            <input type="text" id="Alto" min="0" name="Alto" class="form-control form-control-sm numbersOnly">
                        </div>
                        <div class="col-12 col-sm-3 col-md-2 col-lg-1">
                            <label for="Cantidad" class="control-label">Cantidad</label>
                            <input type="text" id="Cantidad" min="0" name="Cantidad" class="form-control form-control-sm numbersOnly" required="">
                        </div>

                        <div class="col-12 col-md-1 col-sm-1">
                            <br>
                            <button  class="btn btn-primary btn-sm" id="btnAgregarGenerador" type="button" data-toggle="tooltip" data-placement="top" title="Agregar" >
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <br>
                <div id="RegistrosGenerador">
                    <table id="tblRegistrosGenerador" class="table table-sm " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Area</th>
                                <th>Estimacion</th>
                                <th>Largo</th>
                                <th>Ancho</th>
                                <th>Alto</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                                <th>-</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th>Total: </th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL AGREGAR CONCEPTO CAJERO-->
<div id="mdlAgregarConceptoCajero" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull  modal-content  modal-contentFull  modal-lg">
        <div class="modal-header">
            <h5 class="modal-title">Agregar Concepto Cajero</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="pnlDatosCajero">
            <form id="frmConcepoCajero">
                <fieldset>
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="form-group label-static">
                            <label for="Clave"  class="control-label">Clave*</label>
                            <input type="text" id="ClaveCajero" name="Clave" class="form-control form-control-sm" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción*</label>
                            <textarea type="text" name="Descripcion" class="form-control" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div class="col-12"><br><h6>Los campos con * son obligatorios</h6></div>
                </fieldset>
            </form>
        </div>
        <div class="modal-footer modal-footerFull">
            <button type="button" class="btn btn-primary" id="btnGuardarConceptoCajero" name="btnGuardarConceptoCajero">GUARDAR</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        </div>
    </div>
</div>


<div id="AdjuntosLevantamiento" class="modal  modal-fullscreen animated slideInDown">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ADJUNTOS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row d-none">
                    <div class="col">
                        <input type="text" readonly="" id="IdTrabajoLevantamiento" name="IdTrabajoLevantamiento"  class="form-control">
                    </div>
                    <div class="col">
                        <input type="text" readonly="" id="IdTrabajoDetalleLevantamiento" name="IdTrabajoDetalleLevantamiento"  class="form-control">
                    </div>
                </div>
                <div class="accordion" id="AccordionAdjuntosLevantamiento">
                    <!--FOTOS ANTES-->
                    <div class="card  border-0">
                        <div class="" id="cardFotosAntes">
                            <h5 class="mb-0">
                                <a id="load_fotos_antes" class="btn btn-info btn-block text-light collapsed mb-3" data-toggle="collapse" data-target="#FotosAntes" aria-expanded="true" aria-controls="FotosAntes">
                                    <span class="fa fa-camera fa-lg"></span> Fotos Antes
                                </a>
                            </h5>
                        </div>
                        <div id="FotosAntes" class="collapse" aria-labelledby="cardFotos" data-parent="#AccordionAdjuntosLevantamiento">
                            <fieldset>
                                <input type="file" accept='image/x-png,image/gif,image/jpeg' id="fFotosAntes" name="fFotosAntes[]" multiple="" class="d-none">
                                <div class="col-12" id="inputFotosAntes" align="center"  onclick="AdjuntosLevantamiento.find('#fFotosAntes').trigger('click')">
                                    <div class="file_drag_area">
                                        <h5> Arrastre aquí los archivos a subir ó clic para seleccionarlos</h5>
                                        <i class="fas fa-cloud-upload-alt fa-lg mt-1"></i>
                                    </div>
                                </div>
                                <div class="col-12"><br><br></div>
                                <div class="col-12 row" style="height: 350px; overflow-y: auto;" id="vFotosAntes"></div>
                            </fieldset>
                        </div>
                    </div> 
                    <!--FOTOS PROCESO-->
                    <div class="card  border-0">
                        <div class="" id="cardFotosProceso">
                            <h5 class="mb-0">
                                <a id="load_fotos_proceso" class="btn btn-info btn-block text-light collapsed mb-3" data-toggle="collapse" data-target="#FotosProceso" aria-expanded="true" aria-controls="FotosProceso">
                                    <span class="fa fa-camera fa-lg"></span> Fotos Proceso
                                </a>
                            </h5>
                        </div>
                        <div id="FotosProceso" class="collapse" aria-labelledby="cardFotos" data-parent="#AccordionAdjuntosLevantamiento">
                            <fieldset>
                                <input type="file" accept='image/x-png,image/gif,image/jpeg' id="fFotosProceso" name="fFotosProceso[]" multiple="" class="d-none">
                                <div class="col-12" id="inputFotosProceso" align="center"  onclick="AdjuntosLevantamiento.find('#fFotosProceso').trigger('click')">
                                    <div class="file_drag_area">
                                        <h5> Arrastre aquí los archivos a subir ó clic para seleccionarlos</h5>
                                        <i class="fas fa-cloud-upload-alt fa-lg mt-1"></i>
                                    </div>
                                </div>
                                <div class="col-12"><br><br></div>
                                <div class="col-12 row" style="height: 350px; overflow-y: auto;" id="vFotosProceso"></div>
                            </fieldset>
                        </div>
                    </div>

                    <!--FOTOS DESPUES-->
                    <div class="card  border-0">
                        <div class="" id="cardFotosDespues">
                            <h5 class="mb-0">
                                <a id="load_fotos_despues" class="btn btn-info btn-block text-light collapsed mb-3" data-toggle="collapse" data-target="#FotosDespues" aria-expanded="true" aria-controls="FotosDespues">
                                    <span class="fa fa-camera fa-lg"></span> Fotos Después
                                </a>
                            </h5>
                        </div>
                        <div id="FotosDespues" class="collapse" aria-labelledby="cardFotos" data-parent="#AccordionAdjuntosLevantamiento">
                            <fieldset>
                                <input type="file" accept='image/x-png,image/gif,image/jpeg' id="fFotosDespues" name="fFotosDespues[]" multiple="" class="d-none">
                                <div class="col-12" id="inputFotosDespues" align="center"  onclick="AdjuntosLevantamiento.find('#fFotosDespues').trigger('click')">
                                    <div class="file_drag_area">
                                        <h5> Arrastre aquí los archivos a subir ó clic para seleccionarlos</h5>
                                        <i class="fas fa-cloud-upload-alt fa-lg mt-1"></i>
                                    </div>
                                </div>
                                <div class="col-12"><br><br></div>
                                <div class="col-12 row" style="height: 350px; overflow-y: auto;" id="vFotosDespues"></div>
                            </fieldset>
                        </div>
                    </div>

                    <!--ANEXOS-->
                    <div class="card  border-0">
                        <div class="" id="cardAnexosLevantamiento">
                            <h5 class="mb-0">
                                <a id="load_anexos_levantamiento" class="btn btn-info btn-block text-light collapsed mb-3" data-toggle="collapse" data-target="#AnexosLevantamiento" aria-expanded="true" aria-controls="AnexosLevantamiento">
                                    <span class="fa fa-paperclip  fa-lg"></span> Anexos
                                </a>
                            </h5>
                        </div>
                        <div id="AnexosLevantamiento" class="collapse" aria-labelledby="cardAnexosLevantamiento" data-parent="#AccordionAdjuntosLevantamiento">
                            <fieldset>
                                <input type="file" accept='image/x-png,image/gif,image/jpeg' id="fAnexosLevantamiento" name="fAnexosLevantamiento[]" multiple="" class="d-none">
                                <div class="col-12" id="inputAnexosLevantamiento" align="center"  onclick="AdjuntosLevantamiento.find('#fAnexosLevantamiento').trigger('click')">
                                    <div class="file_drag_area">
                                        <h5> Arrastre aquí los archivos a subir ó clic para seleccionarlos</h5>
                                        <i class="fas fa-cloud-upload-alt fa-lg mt-1"></i>
                                    </div>
                                </div>
                                <div class="col-12"><br><br></div>
                                <div class="col-12" style="height: 350px; overflow-y: auto;" id="vAnexosLevantamiento"></div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Trabajos/';
    var TipoAcceso = "<?php echo $this->session->userdata('TipoAcceso'); ?>";
    var IdMovimiento = 0;
    var pnlDatos = $("#pnlDatos");
    var btnNuevo = $("#btnNuevo");
    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");
    var btnVerTodosEnFirme = $('#btnVerTodosEnFirme');
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = pnlDatos.find("#btnGuardar");
    var btnEliminar = pnlDatos.find("#btnEliminar");
    var btnImprimirReportes = pnlDatos.find("#btnImprimirReportes");
    var btnCopiar = pnlDatos.find("#btnCopiar");
    var btnConcluir = pnlDatos.find("#btnConcluir");
    var btnInconcluir = pnlDatos.find("#btnInconcluir");
    var menuTablero = $('#MenuTablero');
    var Archivo = pnlDatos.find("#Adjunto");
    var btnArchivo = pnlDatos.find("#btnArchivo");
    var VistaPrevia = pnlDatos.find("#VistaPrevia");
    /*Detalle PRESUPUESTO*/
    var pnlDetalleTrabajo = $("#pnlDetalleTrabajo");
    var btnNuevoConcepto = pnlDetalleTrabajo.find("#btnNuevoConcepto");
    var mdlSeleccionarConceptos = $("#mdlSeleccionarConceptos");
    var Conceptos = pnlDetalleTrabajo.find("#Conceptos");
    /*GENERADOR*/
    var mdlGeneradorConcepto = $("#mdlGeneradorConcepto");
    var btnAgregarGenerador = mdlGeneradorConcepto.find("#btnAgregarGenerador");
    /*MULTIMEDIA (EDITAR) MODALES Y BOTONES*/
    var mdlAdjuntos = $("#Adjuntos");
    var AdjuntosLevantamiento = $("#AdjuntosLevantamiento");

    var EditarFotosPorConcepto = mdlAdjuntos.find("#fFotos");
    var EditarCroquisPorConcepto = mdlAdjuntos.find("#fCroquis");
    var EditarAnexosPorConcepto = mdlAdjuntos.find("#fAnexos");
    /******ABIERTO*/
    var btnNuevoConceptoAbierto = pnlDetalleTrabajo.find('#btnNuevoConceptoAbierto');
    var btnNuevoConceptoAbiertoEditar = pnlDetalleTrabajo.find('#btnNuevoConceptoAbiertoEditar');
    var btnAgregarConceptoAbierto = $('#btnAgregarConceptoAbierto');
    var btnEditarConceptoAbierto = $('#btnEditarConceptoAbierto');
    /*CAJERO*/
    var btnNuevoConceptoCajero = pnlDetalleTrabajo.find("#btnNuevoConceptoCajero");
    var mdlAgregarConceptoCajero = $('#mdlAgregarConceptoCajero');
    var btnGuardarConceptoCajero = mdlAgregarConceptoCajero.find('#btnGuardarConceptoCajero');
    var mdlTrabajoEditarFotosCajeroPorConceptoCajero = $("#mdlTrabajoEditarFotosCajeroPorConceptoCajero");
    var EditarFotosCajeroPorConcepto = mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#fFotosCajero");
    /*MULTIMEDIA (EDITAR ABIERTO)*/
    var mdlTrabajoEditarFotosAntesPorConcepto = $("#mdlTrabajoEditarFotosAntesPorConcepto");
    var mdlTrabajoEditarFotosDespuesPorConcepto = $("#mdlTrabajoEditarFotosDespuesPorConcepto");
    var mdlTrabajoEditarFotosProcesoPorConcepto = $("#mdlTrabajoEditarFotosProcesoPorConcepto");
    var mdlTrabajoEditarAnexosDosPorConcepto = $("#mdlTrabajoEditarAnexosDosPorConcepto");
    /*Reportes*/
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    var nuevo = false;
    var tblTrabajos = $("#tblTrabajos"), Trabajos;
    var tblConceptosPresupuesto = $("#tblConceptosPresupuesto"), ConceptosPresupuesto;
    var tblConceptosCajeros = $("#tblConceptosCajeros"), ConceptosCajeros;
    var tblRegistrosConceptosPreciario = $("#tblRegistrosConceptosPreciario"), RegistrosConceptosPreciario;
    var tblRegistrosGenerador = $("#tblRegistrosGenerador"), RegistrosGenerador;
    var ReemplazaConcepto = false;
    var CantidadReemplaza, IdReemplaza;
    var Estatus;
    var ImporteTotal;
    $(document).ready(function () {

        /*Eventos DRAG and DROP de MULTIMEDIA*/

        AdjuntosLevantamiento.find("#load_fotos_antes").click(function () {
            onReloadFotosAntesXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
        });

        AdjuntosLevantamiento.find("#load_fotos_proceso").click(function () {
            onReloadFotosProcesoXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
        });

        AdjuntosLevantamiento.find("#load_fotos_despues").click(function () {
            onReloadFotosDespuesXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
        });

        AdjuntosLevantamiento.find("#load_anexos_levantamiento").click(function () {
            onReloadAnexosDosXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
        });

        AdjuntosLevantamiento.find('#FotosAntes').find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
            frm.append('IdTrabajoDetalle', AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val());
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
                    onReloadFotosAntesXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        AdjuntosLevantamiento.find('#FotosDespues').find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
            frm.append('IdTrabajoDetalle', AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val());
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
                    onReloadFotosDespuesXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        AdjuntosLevantamiento.find('#FotosProceso').find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
            frm.append('IdTrabajoDetalle', AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val());
            frm.append('Tiempo', AdjuntosLevantamiento.find("#IdTiempoProceso").val());
            frm.append('Porcentaje', AdjuntosLevantamiento.find("#IdPorcentajeProceso").val());
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
                    onReloadFotosProcesoXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        AdjuntosLevantamiento.find('#AnexosLevantamiento').find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
            frm.append('IdTrabajoDetalle', AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val());
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
                    onReloadAnexosDosXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                    getDetalleAbiertoByID(AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL ANEXOS: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        AdjuntosLevantamiento.find('#FotosDespues').find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
            frm.append('IdTrabajoDetalle', AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val());
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
                    onReloadFotosDespuesXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        /*CARGA DE ARCHIVOS NORMAL*/
        AdjuntosLevantamiento.find("#fAnexosLevantamiento").change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(AdjuntosLevantamiento.find("#fAnexosLevantamiento")[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdTrabajo', AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                frm.append('IdTrabajoDetalle', AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val());
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
                    onReloadAnexosDosXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                    getDetalleAbiertoByID(AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL ANEXOS: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            });
        });
        AdjuntosLevantamiento.find("#fFotosAntes").change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(AdjuntosLevantamiento.find("#fFotosAntes")[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdTrabajo', AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                frm.append('IdTrabajoDetalle', AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val());
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
                    onReloadFotosAntesXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
        AdjuntosLevantamiento.find("#fFotosDespues").change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(AdjuntosLevantamiento.find("#fFotosDespues")[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdTrabajo', AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                frm.append('IdTrabajoDetalle', AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val());
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
                    onReloadFotosDespuesXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
        AdjuntosLevantamiento.find("#fFotosProceso").change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(AdjuntosLevantamiento.find("#fFotosProceso")[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdTrabajo', AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                frm.append('IdTrabajoDetalle', AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val());
                frm.append('Tiempo', AdjuntosLevantamiento.find("#IdTiempoProceso").val());
                frm.append('Porcentaje', AdjuntosLevantamiento.find("#IdPorcentajeProceso").val());
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
                    onReloadFotosProcesoXConcepto(AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(), AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });

        $('#tblConceptosAbiertos').on('draw.dt', function () {
            $.each(tblConceptosAbiertos.find('tbody tr'), function () {
                if (Estatus === 'Borrador') {
                    /*Edicion Area*/
                    $(this).find("td:eq(0)").on('dblclick', function () {
                        var input = '<input id="Clave" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#Clave').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#Clave").focus();
                        $(this).find("#Clave").focusout(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            ConceptosAbiertos.cell(padre, 1).data(v).draw();
                            var Datos = ConceptosAbiertos.row(padre).data();
                            var params = {
                                ID: Datos.ID,
                                CAMPO: 'Clave',
                                VALOR: Datos.Clave
                            };
                            onmodificarConceptoLevantamiento(params);
                        });
                    });
                    /*Edicion Estimacion*/
                    $(this).find("td:eq(1)").on('dblclick', function () {
                        var input = '<input id="Descripcion" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#Descripcion').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#Descripcion").focus();
                        $(this).find("#Descripcion").focusout(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            ConceptosAbiertos.cell(padre, 2).data(v).draw();
                            var Datos = ConceptosAbiertos.row(padre).data();
                            var params = {
                                ID: Datos.ID,
                                CAMPO: 'Descripcion',
                                VALOR: Datos.Descripcion
                            };
                            onmodificarConceptoLevantamiento(params);
                        });
                    });
                }
            });
        });

        /*EVENTOS CAJERO*/
        $('#tblConceptosCajeros').on('draw.dt', function () {
            $.each(tblConceptosCajeros.find('tbody tr'), function () {
                if (Estatus === 'Borrador') {
                    /*Edicion Area*/
                    $(this).find("td:eq(0)").on('dblclick', function () {
                        var input = '<input id="Clave" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#Clave').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#Clave").focus();
                        $(this).find("#Clave").focusout(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            ConceptosCajeros.cell(padre, 1).data(v).draw();
                            var Datos = ConceptosCajeros.row(padre).data();
                            var params = {
                                ID: Datos.ID,
                                CAMPO: 'Clave',
                                VALOR: Datos.Clave
                            };
                            onmodificarConceptoCajero(params);
                        });
                    });
                    /*Edicion Estimacion*/
                    $(this).find("td:eq(1)").on('dblclick', function () {
                        var input = '<input id="Descripcion" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#Descripcion').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#Descripcion").focus();
                        $(this).find("#Descripcion").focusout(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            ConceptosCajeros.cell(padre, 2).data(v).draw();
                            var Datos = ConceptosCajeros.row(padre).data();
                            var params = {
                                ID: Datos.ID,
                                CAMPO: 'Descripcion',
                                VALOR: Datos.Descripcion
                            };
                            onmodificarConceptoCajero(params);
                        });
                    });
                }
            });
        });
        btnGuardarConceptoCajero.on("click", function () {
            isValid('pnlDatosCajero');
            if (valido) {
                var frm = new FormData($("#frmConcepoCajero")[0]);
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
                    HoldOn.close();
                    mdlAgregarConceptoCajero.modal('hide');
                    ConceptosCajeros.ajax.reload();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                    HoldOn.close();
                });
            }
        });
        mdlAgregarConceptoCajero.on('shown.bs.modal', function () {
            mdlAgregarConceptoCajero.find("#ClaveCajero").focus();
        });
        btnNuevoConceptoCajero.on("click", function () {
            if (!nuevo) {
                mdlAgregarConceptoCajero.find("input").val("");
                mdlAgregarConceptoCajero.find("textarea").val("");
                mdlAgregarConceptoCajero.modal('show');
            } else {
                swal('INFO', 'DEBES GUARDAR EL MOVIMIENTO', 'info');
            }
        });
        getRecords();
        getClientes();
        getCodigosPPTA();
        getCuadrillas();
        /*Traer el detalle cuando se muestra el tab panel*/
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var target = $(e.target).attr("href") // activated tab
            if (target === '#Cajeros') {
                getDetalleCajerosByID(IdMovimiento);
            } else if (target === '#Levantamiento') {
                getDetalleAbiertoByID(IdMovimiento);
            }
        });
        /*GENERADOR CONCEPTO*/
        $('#tblRegistrosGenerador').on('draw.dt', function () {
            $.each(tblRegistrosGenerador.find('tbody tr'), function () {
                if (Estatus === 'Borrador') {
                    /*Edicion Area*/
                    $(this).find("td:eq(0)").on('dblclick', function () {
                        var input = '<input id="Area" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#Area').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#Area").focus();
                        $(this).find("#Area").focusout(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            RegistrosGenerador.cell(padre, 1).data(v).draw();
                            var Datos = RegistrosGenerador.row(padre).data();
                            var params = {
                                ID: Datos.ID,
                                CAMPO: 'Area',
                                VALOR: Datos.Area
                            };
                            onModificarGenerador(params);
                        });
                    });
                    /*Edicion Estimacion*/
                    $(this).find("td:eq(1)").on('dblclick', function () {
                        var input = '<input id="EstimacionNo" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#EstimacionNo').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#EstimacionNo").focus();
                        $(this).find("#EstimacionNo").focusout(function () {
                            var v = $(this).val().toUpperCase();
                            celda.html(v);
                            RegistrosGenerador.cell(padre, 2).data(v).draw();
                            var Datos = RegistrosGenerador.row(padre).data();
                            var params = {
                                ID: Datos.ID,
                                CAMPO: 'EstimacionNo',
                                VALOR: Datos.EstimacionNo
                            };
                            onModificarGenerador(params);
                        });
                    });
                    /*Edicion Largo*/
                    $(this).find("td:eq(2)").on('dblclick', function () {
                        var input = '<input id="Largo" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#Largo').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#Largo").focus();
                        $(this).find("#Largo").focusout(function () {
                            var v = $(this).val();
                            celda.html(v);
                            RegistrosGenerador.cell(padre, 3).data(v).draw();
                            /*Calculo de nuevo Total*/
                            var Datos = RegistrosGenerador.row(padre).data();
                            var generador_largo = parseFloat((Datos.Largo !== '' && parseFloat(Datos.Largo) !== 0) ? Datos.Largo : 1);
                            var generador_ancho = parseFloat((Datos.Ancho !== '' && parseFloat(Datos.Ancho) !== 0) ? Datos.Ancho : 1);
                            var generador_alto = parseFloat((Datos.Alto !== '' && parseFloat(Datos.Alto) !== 0) ? Datos.Alto : 1);
                            var generador_cantidad = parseFloat((Datos.Cantidad !== '' && parseFloat(Datos.Cantidad) !== 0) ? Datos.Cantidad : 1);
                            var total_generador = parseFloat((generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad)));
                            onModificarCantidadesGenerador(Datos.ID, 'Largo', generador_largo, total_generador);
                        });
                    });
                    /*Edicion Ancho*/
                    $(this).find("td:eq(3)").on('dblclick', function () {
                        var input = '<input id="Ancho" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#Ancho').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#Ancho").focus();
                        $(this).find("#Ancho").focusout(function () {
                            var v = $(this).val();
                            celda.html(v);
                            RegistrosGenerador.cell(padre, 4).data(v).draw();
                            /*Calculo de nuevo Total*/
                            var Datos = RegistrosGenerador.row(padre).data();
                            var generador_largo = parseFloat((Datos.Largo !== '' && parseFloat(Datos.Largo) !== 0) ? Datos.Largo : 1);
                            var generador_ancho = parseFloat((Datos.Ancho !== '' && parseFloat(Datos.Ancho) !== 0) ? Datos.Ancho : 1);
                            var generador_alto = parseFloat((Datos.Alto !== '' && parseFloat(Datos.Alto) !== 0) ? Datos.Alto : 1);
                            var generador_cantidad = parseFloat((Datos.Cantidad !== '' && parseFloat(Datos.Cantidad) !== 0) ? Datos.Cantidad : 1);
                            var total_generador = parseFloat((generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad)));
                            onModificarCantidadesGenerador(Datos.ID, 'Ancho', generador_ancho, total_generador);
                        });
                    });
                    /*Edicion Alto*/
                    $(this).find("td:eq(4)").on('dblclick', function () {
                        var input = '<input id="Alto" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#Alto').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#Alto").focus();
                        $(this).find("#Alto").focusout(function () {
                            var v = $(this).val();
                            celda.html(v);
                            RegistrosGenerador.cell(padre, 5).data(v).draw();
                            /*Calculo de nuevo Total*/
                            var Datos = RegistrosGenerador.row(padre).data();
                            var generador_largo = parseFloat((Datos.Largo !== '' && parseFloat(Datos.Largo) !== 0) ? Datos.Largo : 1);
                            var generador_ancho = parseFloat((Datos.Ancho !== '' && parseFloat(Datos.Ancho) !== 0) ? Datos.Ancho : 1);
                            var generador_alto = parseFloat((Datos.Alto !== '' && parseFloat(Datos.Alto) !== 0) ? Datos.Alto : 1);
                            var generador_cantidad = parseFloat((Datos.Cantidad !== '' && parseFloat(Datos.Cantidad) !== 0) ? Datos.Cantidad : 1);
                            var total_generador = parseFloat((generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad)));
                            onModificarCantidadesGenerador(Datos.ID, 'Alto', generador_alto, total_generador);
                        });
                    });
                    /*Edicion Cantidad*/
                    $(this).find("td:eq(5)").on('dblclick', function () {
                        var input = '<input id="Cantidad" type="text" class="form-control form-control-sm">';
                        var vActual = $(this).text();
                        $(this).html(input);
                        $(this).find('#Cantidad').val(vActual);
                        var celda = $(this);
                        var padre = $(this).parent();
                        $(this).find("#Cantidad").focus();
                        $(this).find("#Cantidad").focusout(function () {
                            var v = $(this).val();
                            celda.html(v);
                            RegistrosGenerador.cell(padre, 6).data(v).draw();
                            /*Calculo de nuevo Total*/
                            var Datos = RegistrosGenerador.row(padre).data();
                            var generador_largo = parseFloat((Datos.Largo !== '' && parseFloat(Datos.Largo) !== 0) ? Datos.Largo : 1);
                            var generador_ancho = parseFloat((Datos.Ancho !== '' && parseFloat(Datos.Ancho) !== 0) ? Datos.Ancho : 1);
                            var generador_alto = parseFloat((Datos.Alto !== '' && parseFloat(Datos.Alto) !== 0) ? Datos.Alto : 1);
                            var generador_cantidad = parseFloat((Datos.Cantidad !== '' && parseFloat(Datos.Cantidad) !== 0) ? Datos.Cantidad : 1);
                            var total_generador = parseFloat((generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad)));
                            onModificarCantidadesGenerador(Datos.ID, 'Cantidad', generador_cantidad, total_generador);
                        });
                    });
                }
            });
        });
        btnAgregarGenerador.on("click", function () {
            isValid('pnlGenerador');
            if (valido) {
                var frm = new FormData(mdlGeneradorConcepto.find("#frmGenerador")[0]);
                var generador_largo = parseFloat((mdlGeneradorConcepto.find("#Largo").val() !== '' && parseFloat(mdlGeneradorConcepto.find("#Largo").val()) !== 0) ? mdlGeneradorConcepto.find("#Largo").val() : 1);
                var generador_ancho = parseFloat((mdlGeneradorConcepto.find("#Ancho").val() !== '' && parseFloat(mdlGeneradorConcepto.find("#Ancho").val()) !== 0) ? mdlGeneradorConcepto.find("#Ancho").val() : 1);
                var generador_alto = parseFloat((mdlGeneradorConcepto.find("#Alto").val() !== '' && parseFloat(mdlGeneradorConcepto.find("#Alto").val()) !== 0) ? mdlGeneradorConcepto.find("#Alto").val() : 1);
                var generador_cantidad = parseFloat((mdlGeneradorConcepto.find("#Cantidad").val() !== '' && parseFloat(mdlGeneradorConcepto.find("#Cantidad").val()) !== 0) ? mdlGeneradorConcepto.find("#Cantidad").val() : 1);
                var total_generador = parseFloat((generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad)));
                frm.append('Total', total_generador);

                $.ajax({
                    url: master_url + 'onAgregarGenerador',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    mdlGeneradorConcepto.find('input').not('.hide').val('');
                    RegistrosGenerador.ajax.reload();
                    ConceptosPresupuesto.ajax.reload();
                    mdlGeneradorConcepto.find('#Area').focus();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                });

            }
        });
        /*EstatusTrabajo*/
        pnlDatos.find("#EstatusTrabajo > li:not(:last-child)").click(function () {
            var li = $(this);
            var text = '';
            $.each(pnlDatos.find('#EstatusTrabajo > li'), function () {
                text = $(this).text();
                text = text.replace("(COMPLETADO)", "");
                text = text.replace("(ACTIVO)", "");
                $(this).html("<span class=\"bubble\"></span>" + text);
            });
            pnlDatos.find("#EstatusTrabajo > li").removeClass("completed active");
            pnlDatos.find('#EstatusTrabajo > li').slice(0, li.index()).addClass("completed");
            $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                text = $(this).text();
                $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
            });
            text = pnlDatos.find('#EstatusTrabajo > li:eq(' + li.index() + ')').text();
            if (pnlDatos.find("#EstatusTrabajo > li:first-child").index() === li.index()
                    || pnlDatos.find("#EstatusTrabajo > li:last-child").index() === li.index()) {
                li.addClass("completed");
                li.html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
            } else {
                li.addClass("active");
                text = pnlDatos.find('#EstatusTrabajo > li:eq(' + li.index() + ')').text();
                pnlDatos.find('#EstatusTrabajo > li:eq(' + li.index() + ').active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
            }
            if (!nuevo) {
                text = pnlDatos.find('#EstatusTrabajo > li:eq(' + li.index() + ')').text();
                var sts = '';
                if (text.includes('Pedido')) {
                    sts = 'Pedido';
                } else if (text.includes('Presupuesto')) {
                    sts = 'Presupuesto';
                } else if (text.includes('Autorización')) {
                    sts = 'Autorización';
                } else if (text.includes('No Autorizado')) {
                    sts = 'No Autorizado';
                } else if (text.includes('Ejecución')) {
                    sts = 'Ejecución';
                } else if (text.includes('Finalizado')) {
                    sts = 'Finalizado';
                }
                $.post(master_url + 'onModificarEstatusByID', {ID: pnlDatos.find("#ID").val(), ESTATUS: sts}).done(function (data, x, jq) {
                    console.log(data);
                    onNotifyOld('fa fa-check', 'EL ESTATUS HA SIDO MODIFICADO', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z, "\n ERROR \n", x.responseText);
                }).always(function () {
                    HoldOn.close();
                });
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
        pnlDatos.find("#Cliente_ID").change(function () {
            pnlDatos.find("[name='Sucursal_ID']")[0].selectize.clear(true);
            pnlDatos.find("[name='Sucursal_ID']")[0].selectize.clearOptions();
            pnlDatos.find("[name='Preciario_ID']")[0].selectize.clear(true);
            pnlDatos.find("[name='Preciario_ID']")[0].selectize.clearOptions();
            pnlDatos.find("[name='Area_ID']")[0].selectize.clear(true);
            pnlDatos.find("[name='Area_ID']")[0].selectize.clearOptions();
            pnlDatos.find("[name='Especialidad_ID']")[0].selectize.clear(true);
            pnlDatos.find("[name='Especialidad_ID']")[0].selectize.clearOptions();
            pnlDatos.find("[name='CentroCostos_ID']")[0].selectize.clear(true);
            pnlDatos.find("[name='CentroCostos_ID']")[0].selectize.clearOptions();
            getSucursalesbyCliente(pnlDatos.find("#Cliente_ID").val(), $(this).val());
            getPreciariosActivosbyCliente(pnlDatos.find("#Cliente_ID").val(), $(this).val());
            getEspecialidadesbyCliente(pnlDatos.find("#Cliente_ID").val(), $(this).val());
            getAreasbyCliente(pnlDatos.find("#Cliente_ID").val(), $(this).val());
            getCCbyCliente(pnlDatos.find("#Cliente_ID").val(), $(this).val());
            if ($(this).val() === '1') {
                pnlDatos.find("#nBBVAMantenimiento").removeClass("d-none");
                pnlDatos.find("#nBBVAObra").removeClass("d-none");
                pnlDatos.find("#nBBVACajeros").removeClass("d-none");
                pnlDetalleTrabajo.find("#peCajeros").removeClass("d-none");
                mdlReportesEditarTrabajo.find("#rNordes").addClass("d-none");
            } else if ($(this).val() === '16') {
                mdlReportesEditarTrabajo.find("#rNordes").removeClass("d-none");
            } else {
                pnlDatos.find("#nBBVAMantenimiento").addClass("d-none");
                pnlDatos.find("#nBBVAObra").addClass("d-none");
                pnlDatos.find("#nBBVACajeros").addClass("d-none");
                pnlDetalleTrabajo.find("#peCajeros").addClass("d-none");
                mdlReportesEditarTrabajo.find("#rNordes").addClass("d-none");
            }
        });
        btnImprimirReportes.on("click", function () {
            mdlReportesEditarTrabajo.modal('show');
        });
        btnVerTodosEnFirme.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
            tblTrabajos.DataTable().column(3).search("Concluido|Borrador", true, false).draw();
            tblTrabajos.DataTable().column(2).search("Pedido|Presupuesto|Autorización|Ejecución", true, false).draw();
        });
        btnVerMisMovimientos.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
            Trabajos.column(12).search("1" ? '^' + "<?php print $this->session->userdata('ID') ?>" + '$' : '', true, false).draw();
            tblTrabajos.DataTable().column(3).search("Concluido|Borrador", true, false).draw();
            tblTrabajos.DataTable().column(2).search("Pedido|Presupuesto|Autorización|Ejecución", true, false).draw();
        });
        btnVerTodos.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
        });
        btnEliminar.on("click", function () {
            if (!nuevo) {
                swal({
                    title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
                }).then((willDelete) => {
                    if (willDelete) {
                        HoldOn.open({
                            theme: "sk-bounce",
                            message: "CARGANDO DATOS..."
                        });
                        $.ajax({
                            url: master_url + 'onEliminar',
                            type: "POST",
                            data: {
                                ID: IdMovimiento
                            }
                        }).done(function (data, x, jq) {
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'TRABAJO ELIMINADO', 'danger');
                            menuTablero.addClass("animated slideInLeft").removeClass("d-none");
                            pnlDatos.addClass("d-none");
                            pnlDetalleTrabajo.addClass("d-none");
                            getRecords();
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                            HoldOn.close();
                        });
                    }
                });
            }
        });
        btnGuardar.on("click", function () {
            isValid('pnlDatos');
            if (valido) {
                var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);
                frm.append('EstatusTrabajo', 'Presupuesto');
                if (!nuevo) {
                    $.ajax({
                        url: master_url + 'onModificar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        console.log(data);
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO GUARDADO', 'success');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    var text = (pnlDatos.find('#EstatusTrabajo > li.active').text() !== '') ? pnlDatos.find('#EstatusTrabajo > li.active').text() : pnlDatos.find('#EstatusTrabajo > li.completed').text();
                    var sts = '';
                    if (text.includes('Pedido')) {
                        sts = 'Pedido';
                    } else if (text.includes('Presupuesto')) {
                        sts = 'Presupuesto';
                    } else if (text.includes('Autorización')) {
                        sts = 'Autorización';
                    } else if (text.includes('No Autorizado')) {
                        sts = 'No Autorizado';
                    } else if (text.includes('Ejecución')) {
                        sts = 'Ejecución';
                    } else if (text.includes('Finalizado')) {
                        sts = 'Finalizado';
                    }
                    frm.append('Importe', 0);
                    frm.append('EstatusTrabajo', sts);
                    $.ajax({
                        url: master_url + 'onAgregar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVO TRABAJO', 'success');
                        nuevo = false;
                        IdMovimiento = parseInt(data);
                        pnlDatos.find("#ID").val(IdMovimiento);
                        getTrabajoDetalleByID(IdMovimiento);
                        getDetalleAbiertoByID(IdMovimiento);
                        btnEliminar.removeClass('d-none');
                        btnImprimirReportes.removeClass('d-none');
                        btnCopiar.removeClass('d-none');
                        btnConcluir.addClass('d-none');
                        btnInconcluir.addClass('d-none');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                }
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', '* DEBE DE COMPLETAR LOS CAMPOS REQUERIDOS *', 'danger');
            }
        });
        btnConcluir.on("click", function () {
            swal({
                title: "Confirmar",
                text: "Estas seguro?",
                icon: "info",
                buttons: ["Cancelar", "Aceptar"]
            }).then((willDelete) => {
                if (willDelete) {
                    HoldOn.open({
                        theme: "sk-bounce",
                        message: "POR FAVOR ESPERE..."
                    });
                    $.ajax({
                        url: master_url + 'onModificarEstatus',
                        type: "POST",
                        data: {
                            ID: IdMovimiento,
                            Estatus: 'Concluido'
                        }
                    }).done(function (data, x, jq) {
                        $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-success">CONCLUIDO</span>');
                        btnGuardar.addClass('d-none');
                        btnEliminar.addClass('d-none');
                        btnConcluir.addClass('d-none');
                        btnInconcluir.removeClass('d-none');
                        btnImprimirReportes.removeClass('d-none');
                        btnCopiar.removeClass('d-none');
                        btnNuevoConcepto.addClass('d-none');
                        disableFields();
                        Estatus = 'Concluido';
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            });
        });
        btnInconcluir.on("click", function () {
            swal({
                title: "Confirmar",
                text: "Estas seguro?",
                icon: "info",
                buttons: ["Cancelar", "Aceptar"]
            }).then((willDelete) => {
                if (willDelete) {
                    HoldOn.open({
                        theme: "sk-bounce",
                        message: "POR FAVOR ESPERE..."
                    });
                    $.ajax({
                        url: master_url + 'onModificarEstatus',
                        type: "POST",
                        data: {
                            ID: IdMovimiento,
                            Estatus: 'Borrador'
                        }
                    }).done(function (data, x, jq) {
                        $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-secondary">BORRADOR</span>');
                        btnGuardar.removeClass('d-none');
                        btnEliminar.removeClass('d-none');
                        btnConcluir.removeClass('d-none');
                        btnInconcluir.addClass('d-none');
                        btnImprimirReportes.removeClass('d-none');
                        btnCopiar.removeClass('d-none');
                        btnNuevoConcepto.removeClass('d-none');
                        enableFields();
                        Estatus = 'Borrador';
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            });
        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("d-none");
            pnlDatos.addClass("d-none");
            pnlDetalleTrabajo.addClass("d-none");
            Trabajos.ajax.reload();
        });
        btnNuevo.on("click", function () {
            nuevo = true;
            pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
            pnlDatos.find('#pEstatusTrabajo').find('#stsPedido').addClass('active').html('').html('<span class="bubble"></span> 1. Pedido <br><small>(activo)</small>');
            pnlDatos.find(".nav-tabs li a").removeClass("active show");
            $(pnlDatos.find(".nav-tabs li a")[0]).addClass("active show");
            pnlDatos.find("#Datos").addClass("active show");
            pnlDatos.find("#Datos2").removeClass("active show");
            pnlDatos.find("#Datos3").removeClass("active show");
            pnlDatos.find("#Datos4").removeClass("active show");
            pnlDetalleTrabajo.find(".nav-tabs li a").removeClass("active show");
            $(pnlDetalleTrabajo.find(".nav-tabs li a")[0]).addClass("active show");
            pnlDetalleTrabajo.find("#Presupuesto").addClass("active show");
            pnlDetalleTrabajo.find("#Levantamiento").removeClass("active show");
            pnlDetalleTrabajo.find("#Cajeros").removeClass("active show");
            menuTablero.addClass("d-none");
            pnlDatos.removeClass("d-none");
            pnlDetalleTrabajo.removeClass("d-none");
            btnGuardar.removeClass('d-none');
            btnEliminar.addClass('d-none');
            btnImprimirReportes.addClass('d-none');
            btnCopiar.addClass('d-none');
            btnConcluir.addClass('d-none');
            btnInconcluir.addClass('d-none');
            enableFields();
            if ($.fn.DataTable.isDataTable('#tblConceptosPresupuesto')) {
                ConceptosPresupuesto.clear().draw();
            }
            pnlDatos.find("input").val('');
            pnlDatos.find("textarea").val("");
            pnlDatos.find('#FechaCreacion').val(getToday());
            $("input:radio[name='NuevoEstatusTrabajo']").each(function (i) {
                this.checked = false;
            });
            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            pnlDatos.find('#FolioCliente').focus();
            pnlDetalleTrabajo.find("#Conceptos").html("");
            /*SET ESTATUS*/
            var text = '';
            $.each(pnlDatos.find('#EstatusTrabajo > li'), function () {
                text = $(this).text();
                text = text.replace("(COMPLETADO)", "");
                text = text.replace("(ACTIVO)", "");
                $(this).html("<span class=\"bubble\"></span>" + text);
            });
            pnlDatos.find("#EstatusTrabajo > li").removeClass("completed active");
            pnlDatos.find("#EstatusTrabajo > li:first-child").addClass("completed");

            text = pnlDatos.find('#EstatusTrabajo > li:first-child').text();
            pnlDatos.find("#EstatusTrabajo > li:first-child").html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");

        });
        pnlDatos.find("#Codigoppta_ID").change(function () {
            getCodigoPPTAbyID(pnlDatos.find("#Codigoppta_ID").val(), $(this).val());
        });
        btnArchivo.on("click", function () {
            $('#Adjunto').attr("type", "file");
            $('#Adjunto').val('');
            Archivo.change(function () {
                HoldOn.open({theme: "sk-bounce", message: "POR FAVOR ESPERE..."});
                var imageType = /image.*/;
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var preview = '<button type="button" class="btn btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><br><img src="' + reader.result + '" class="img-responsive" width="400px"><div class="caption"><p>' + Archivo[0].files[0].name + '</p></div>';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(Archivo[0].files[0]);
                } else {
                    if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<div><button type="button" class="btn btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><br> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
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
        /*DETALLE*/
        btnNuevoConcepto.on("click", function () {
            if (!nuevo) {
                var Preciario_ID = pnlDatos.find("#Preciario_ID").val();
                if (Preciario_ID !== undefined && Preciario_ID !== '' && Preciario_ID > 0) {
                    ReemplazaConcepto = false;
                    getConceptosPreciarioByPreciario(Preciario_ID);
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PRECIARIO', 'danger');
                }
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
            }
        });
        tblRegistrosConceptosPreciario.find('tbody').on('click', 'tr', function () {
            HoldOn.open({theme: 'sk-cube', message: 'CARGANDO...'});
            var dtm = RegistrosConceptosPreciario.row(this).data();
            RegistrosConceptosPreciario.row($(this)).remove().draw();
            $.ajax({
                url: master_url + 'getConceptoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: dtm.ID
                }
            }).done(function (data, x, jq) {
                if (data[0] !== undefined && data.length > 0) {
                    var dtm = data[0];
                    var frm = new FormData();
                    frm.append('Trabajo_ID', IdMovimiento);
                    frm.append('PreciarioConcepto_ID', dtm.ID);
                    frm.append('Renglon', 0);
                    frm.append('Unidad', dtm.Unidad);
                    frm.append('Precio', dtm.Costo);
                    frm.append('Moneda', dtm.Moneda);
                    frm.append('Concepto', dtm.Descripcion);
                    frm.append('Clave', dtm.Clave);
                    if (!ReemplazaConcepto) {
                        $.ajax({
                            url: master_url + 'onAgregarDetalleEditar',
                            type: "POST",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: frm
                        }).done(function (data, x, jq) {
                            ConceptosPresupuesto.ajax.reload();
                            RegistrosConceptosPreciario.ajax.reload();
                            HoldOn.close();
                            onNotifyOld('fa fa-check', 'Concepto Agregado', 'success');
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                            HoldOn.close();
                        });
                    } else {
                        var NuevoImporte = dtm.Costo * CantidadReemplaza;
                        frm.append('ID', IdReemplaza);
                        frm.append('Importe', NuevoImporte);
                        $.ajax({
                            url: master_url + 'onReemplazarTrabajoDetalle',
                            type: "POST",
                            cache: false,
                            contentType: false,
                            processData: false,
                            data: frm
                        }).done(function (data, x, jq) {
                            ConceptosPresupuesto.ajax.reload();
                            RegistrosConceptosPreciario.ajax.reload();
                            HoldOn.close();
                            onNotifyOld('fa fa-check', 'Concepto Agregado', 'success');
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                            HoldOn.close();
                        });
                    }
                } else {
                    onNotify('fa fa-exclamation fa-lg', 'EL CONCEPTO NO SE AGREGO, INTENTE DE NUEVO', 'danger');
                }
                if (!mdlSeleccionarConceptos.find("#chkMultiple").is(":checked")) {
                    mdlSeleccionarConceptos.modal('hide');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });
        });
        /*ADJUNTOS DETALLE*/
        mdlAdjuntos.on('hidden.bs.modal', function (e) {
            mdlAdjuntos.find("#Fotos, #Croquis, #Anexos").removeClass("show");
            mdlAdjuntos.find("#vFotos, #vCroquis, #vAnexos").html("");
            ConceptosPresupuesto.ajax.reload();
        });
        /*ANEXOS*/
        mdlAdjuntos.find("#load_anexos").click(function () {
            onReloadAnexosXConcepto(mdlAdjuntos.find("#IdTrabajoDetalle").val(), mdlAdjuntos.find("#IdTrabajo").val());
        });
        mdlAdjuntos.find("#fAnexos").change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(mdlAdjuntos.find("#fAnexos")[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdTrabajo', mdlAdjuntos.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlAdjuntos.find("#IdTrabajoDetalle").val());
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
                    onReloadAnexosXConcepto(mdlAdjuntos.find("#IdTrabajoDetalle").val(), mdlAdjuntos.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL ANEXOS: ' + file.name, 'danger');
                    console.log(x, y, z);
                    HoldOn.close();
                });
            });
        });
        mdlAdjuntos.find('#Anexos').find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', mdlAdjuntos.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlAdjuntos.find("#IdTrabajoDetalle").val());
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
                    onReloadAnexosXConcepto(mdlAdjuntos.find("#IdTrabajoDetalle").val(), mdlAdjuntos.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL ANEXOS: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                    HoldOn.close();
                });
            }
        });
        /*FIN ANEXOS*/
        /*CROQUIS*/
        mdlAdjuntos.find("#load_croquis").click(function () {
            onReloadCroquisXConcepto(mdlAdjuntos.find("#IdTrabajoDetalle").val(), mdlAdjuntos.find("#IdTrabajo").val());
        });
        mdlAdjuntos.find("#fCroquis").change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var imageType = /image.*/;
            var img = "";
            var nimg = 0;
            $.each(mdlAdjuntos.find("#fCroquis")[0].files, function (k, file) {
                console.log(file.name);
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdTrabajo', mdlAdjuntos.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlAdjuntos.find("#IdTrabajoDetalle").val());
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
                    onReloadCroquisXConcepto(mdlAdjuntos.find("#IdTrabajoDetalle").val(), mdlAdjuntos.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL CROQUIS: ' + file.name, 'danger');
                    console.log(x, y, z);
                    HoldOn.close();
                });
            });
        });
        mdlAdjuntos.find('#Croquis').find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', mdlAdjuntos.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlAdjuntos.find("#IdTrabajoDetalle").val());
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
                    onReloadCroquisXConcepto(mdlAdjuntos.find("#IdTrabajoDetalle").val(), mdlAdjuntos.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL CROQUIS: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        /*FIN CROQUIS*/
        /*FOTOS*/
        mdlAdjuntos.find("#load_fotos").click(function () {
            onReloadFotosXConcepto(mdlAdjuntos.find("#IdTrabajoDetalle").val(), mdlAdjuntos.find("#IdTrabajo").val());
        });
        mdlAdjuntos.find("#fFotos").change(function () {
            console.log('CONCEPTOS', mdlAdjuntos.find("#fFotos")[0].files);
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(mdlAdjuntos.find("#fFotos")[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                nimg++;
                var frm = new FormData();
                frm.append('IdTrabajo', mdlAdjuntos.find("#IdTrabajo").val());
                frm.append('IdTrabajoDetalle', mdlAdjuntos.find("#IdTrabajoDetalle").val());
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
                    onReloadFotosXConcepto(mdlAdjuntos.find("#IdTrabajoDetalle").val(), mdlAdjuntos.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                    HoldOn.close();
                });
            });
        });
        mdlAdjuntos.find('#Fotos').find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdTrabajo', mdlAdjuntos.find("#IdTrabajo").val());
            frm.append('IdTrabajoDetalle', mdlAdjuntos.find("#IdTrabajoDetalle").val());
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
                    onReloadFotosXConcepto(mdlAdjuntos.find("#IdTrabajoDetalle").val(), mdlAdjuntos.find("#IdTrabajo").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                    HoldOn.close();
                });
            }
        });
        /*FIN FOTOS*/
    });
    /*Funciones de tablas*/
    function getRecords() {
        temp = 0;
        HoldOn.open({theme: 'sk-cube', message: 'CARGANDO...'});
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblTrabajos')) {
            tblTrabajos.DataTable().destroy();
        }
        Trabajos = tblTrabajos.DataTable({
            "dom": 'Bfrtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getRecords',
                "dataSrc": ""
            },
            "columns": [
                {"data": "ID"}, //0
                {"data": "Folio"}, //1
                {"data": "Estatus2"}, //2
                {"data": "Estatus"}, //3
                {"data": "Fecha"}, //4
                {"data": "Adjunto"}, //5
                {"data": "Cliente"}, //6
                {"data": "Sucursal"}, //7
                {"data": "Importe"}, //8
                {"data": "TrabajoRequerido"}, //9
                {"data": "Usuario"}, //10
                {"data": "ImporteSinFormato"}, //11
                {"data": "Usuario_ID"} //12
            ],
            "columnDefs": [
                {
                    "targets": [3],
                    "visible": false,
                    "searchable": true
                },
                {
                    "width": "200px",
                    "targets": 7
                },
                {
                    "width": "200px",
                    "targets": 9
                },
                {
                    "targets": [11],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [12],
                    "visible": false,
                    "searchable": true
                }
            ],
            language: lang,
            select: true,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 10,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                Trabajos.column(12).search("1" ? '^' + "<?php print $this->session->userdata('ID') ?>" + '$' : '', true, false).draw();
                tblTrabajos.DataTable().column(3).search("Concluido|Borrador", true, false).draw();
                tblTrabajos.DataTable().column(2).search("Pedido|Presupuesto|Autorización|Ejecución", true, false).draw();
                HoldOn.close();
            }
        });
        tblTrabajos.find('tbody').on('click', 'tr', function () {
            menuTablero.addClass("d-none");
            tblTrabajos.find("tbody tr").removeClass("success");
            $(this).addClass("success");
            var dtm = Trabajos.row(this).data();
            IdMovimiento = parseInt(dtm.ID);
            nuevo = false;
            /*OLD CODE*/
            pnlDatos.find(".nav-tabs li a").removeClass("active show");
            $(pnlDatos.find(".nav-tabs li a")[0]).addClass("active show");
            pnlDatos.find("#Datos").addClass("active show");
            pnlDatos.find("#Datos2").removeClass("active show");
            pnlDatos.find("#Datos3").removeClass("active show");
            pnlDatos.find("#Datos4").removeClass("active show");
            pnlDatos.find("#Datos5").removeClass("active show");
            pnlDatos.find("#Datos6").removeClass("active show");
            pnlDetalleTrabajo.find(".nav-tabs li a").removeClass("active show");
            $(pnlDetalleTrabajo.find(".nav-tabs li a")[0]).addClass("active show");
            pnlDetalleTrabajo.find("#Presupuesto").addClass("active show");
            pnlDetalleTrabajo.find("#Levantamiento").removeClass("active show");
            pnlDetalleTrabajo.find("#Cajeros").removeClass("active show");

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
                    pnlDatos.find("input").not('[type=radio]').val('');
                    pnlDatos.find("[name='Sucursal_ID']")[0].selectize.clear(true);
                    pnlDatos.find("[name='Sucursal_ID']")[0].selectize.clearOptions();
                    if (trabajo.Cliente_ID === '1') {
                        pnlDatos.find("#pBBVAMantenimiento").removeClass("d-none");
                        pnlDatos.find("#pBBVAObra").removeClass("d-none");
                        pnlDatos.find("#pBBVACajeros").removeClass("d-none");
                        pnlDetalleTrabajo.find("#peCajeros").removeClass("d-none");
                    } else if (trabajo.Cliente_ID === '16') {
                        mdlReportesEditarTrabajo.find("#rNordes").removeClass('d-none');
                    } else {
                        pnlDatos.find("#peBBVAMantenimiento").addClass("d-none");
                        pnlDatos.find("#pBBVAObra").addClass("d-none");
                        pnlDetalleTrabajo.find("#peCajeros").addClass("d-none");
                    }
                    $.ajax({
                        url: master_url + 'getSucursalesByCliente',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: trabajo.Cliente_ID
                        }
                    }).done(function (data, x, jq) {
                        pnlDatos.find("[name='Sucursal_ID']")[0].selectize.clear(true);
                        pnlDatos.find("[name='Sucursal_ID']")[0].selectize.clearOptions();
                        $.each(data, function (k, v) {
                            pnlDatos.find("[name='Sucursal_ID']")[0].selectize.addOption({text: v.CR + ' - ' + v.Sucursal, value: v.ID});
                        });
                        pnlDatos.find("[name='Sucursal_ID']")[0].selectize.setValue(trabajo.Sucursal_ID);

                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                    $.ajax({
                        url: master_url + 'getPreciariosByCliente',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            Cliente_ID: trabajo.Cliente_ID
                        }
                    }).done(function (data, x, jq) {
                        pnlDatos.find("[name='Preciario_ID']")[0].selectize.clear(true);
                        pnlDatos.find("[name='Preciario_ID']")[0].selectize.clearOptions();
                        $.each(data, function (k, v) {
                            pnlDatos.find("[name='Preciario_ID']")[0].selectize.addOption({text: v.Preciario, value: v.ID});
                        });
                        pnlDatos.find("[name='Preciario_ID']")[0].selectize.setValue(trabajo.Preciario_ID);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                    $.ajax({
                        url: master_url + 'getEspecialidadesByCliente',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: trabajo.Cliente_ID
                        }
                    }).done(function (data, x, jq) {
                        pnlDatos.find("[name='Especialidad_ID']")[0].selectize.clear(true);
                        pnlDatos.find("[name='Especialidad_ID']")[0].selectize.clearOptions();
                        $.each(data, function (k, v) {
                            pnlDatos.find("[name='Especialidad_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
                        });
                        pnlDatos.find("[name='Especialidad_ID']")[0].selectize.setValue(trabajo.Especialidad_ID);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                    $.ajax({
                        url: master_url + 'getAreasByCliente',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: trabajo.Cliente_ID
                        }
                    }).done(function (data, x, jq) {
                        pnlDatos.find("[name='Area_ID']")[0].selectize.clear(true);
                        pnlDatos.find("[name='Area_ID']")[0].selectize.clearOptions();
                        $.each(data, function (k, v) {
                            pnlDatos.find("[name='Area_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
                        });
                        pnlDatos.find("[name='Area_ID']")[0].selectize.setValue(trabajo.Area_ID);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                    $.ajax({
                        url: master_url + 'getCCByCliente',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: trabajo.Cliente_ID
                        }
                    }).done(function (data, x, jq) {
                        pnlDatos.find("[name='CentroCostos_ID']")[0].selectize.clear(true);
                        pnlDatos.find("[name='CentroCostos_ID']")[0].selectize.clearOptions();
                        $.each(data, function (k, v) {
                            pnlDatos.find("[name='CentroCostos_ID']")[0].selectize.addOption({text: v.Nombre, value: v.ID});
                        });
                        pnlDatos.find("[name='CentroCostos_ID']")[0].selectize.setValue(trabajo.CentroCostos_ID);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                    getCodigoPPTAbyID(trabajo.Codigoppta_ID); /*trae los días*/
                    Cliente = trabajo.Cliente_ID;
                    $.each(data[0], function (k, v) {
                        if (v !== null && v !== '' && v !== 'null') {
                            if (pnlDatos.find("[name='" + k + "']").is('select')) {
                                pnlDatos.find("[name='" + k + "']")[0].selectize.setValue(v);
                            } else {
                                if (k !== 'Adjunto') {
                                    pnlDatos.find("[name='" + k + "']").val(v);
                                }
                            }
                        }
                    });
                    if (trabajo.Adjunto !== null && trabajo.Adjunto !== undefined && trabajo.Adjunto !== '') {
                        var ext = getExt(trabajo.Adjunto);
                        if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                            pnlDatos.find("#VistaPrevia").html('<hr><div class="col-8"></div><div class="col-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + trabajo.Adjunto + '" class ="img-responsive" width="600px"  onclick="printImg(\' ' + base_url + trabajo.Adjunto + ' \')"  />');
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            pnlDatos.find("#VistaPrevia").html('<hr><div class="col-8"></div> <div class="col-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + trabajo.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                        if (ext !== "gif" && ext !== "jpg" && ext !== "jpeg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                            pnlDatos.find("#VistaPrevia").html('<h4>NO EXISTE ARCHIVO ADJUNTO</h4>');
                        }
                    } else {
                        pnlDatos.find("#VistaPrevia").html('<h4>NO EXISTE ARCHIVO ADJUNTO</h4>');
                    }
                    menuTablero.addClass("d-none");
                    Estatus = trabajo.Estatus;
                    if (trabajo.Estatus === 'Concluido') {
                        console.log('Concluido');
                        btnGuardar.addClass('d-none');
                        btnEliminar.addClass('d-none');
                        btnImprimirReportes.removeClass('d-none');
                        btnCopiar.removeClass('d-none');
                        btnConcluir.addClass('d-none');
                        btnInconcluir.removeClass('d-none');
                        $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-success">CONCLUIDO</span>');
                        disableFields();
                    } else if (trabajo.Estatus === 'Borrador') {
                        console.log('Borrador');
                        btnGuardar.removeClass('d-none');
                        btnEliminar.removeClass('d-none');
                        btnImprimirReportes.removeClass('d-none');
                        btnCopiar.removeClass('d-none');
                        btnConcluir.removeClass('d-none');
                        btnInconcluir.addClass('d-none');
                        $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-secondary">BORRADOR</span>');
                        enableFields();
                    } else if (trabajo.Estatus === 'Entregado') {
                        console.log('Entregado');
                        btnGuardar.addClass('d-none');
                        btnEliminar.addClass('d-none');
                        btnImprimirReportes.removeClass('d-none');
                        btnCopiar.removeClass('d-none');
                        btnConcluir.addClass('d-none');
                        btnInconcluir.addClass('d-none');
                        $("#spanEstatus").html('').html('<span style="font-size: 15px;" class="badge badge-info">ENTREGADO</span>');
                        disableFields();
                    }
                    /*ACTUALIZAR ESTATUS*/
                    var text = '';
                    $.each(pnlDatos.find('#EstatusTrabajo > li'), function () {
                        text = $(this).text();
                        text = text.replace("(COMPLETADO)", "");
                        text = text.replace("(ACTIVO)", "");
                        $(this).html("<span class=\"bubble\"></span>" + text);
                    });
                    pnlDatos.find("#EstatusTrabajo > li").removeClass("completed active");
                    $.each(pnlDatos.find('#EstatusTrabajo > li'), function () {
                        text = $(this).text();
                        if (text.includes(trabajo.EstatusTrabajo)) {
                            pnlDatos.find('#EstatusTrabajo > li').slice(0, $(this).index()).addClass("completed");

                            $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                                text = $(this).text();
                                $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                            });

                            text = pnlDatos.find('#EstatusTrabajo > li:eq(' + $(this).index() + ')').text();
                            if (pnlDatos.find("#EstatusTrabajo > li:first-child").index() === $(this).index() ||
                                    pnlDatos.find("#EstatusTrabajo > li:last-child").index() === $(this).index()) {
                                $(this).addClass("completed");
                                $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                            } else {
                                $(this).addClass("active");
                                text = pnlDatos.find('#EstatusTrabajo > li:eq(' + $(this).index() + ')').text();
                                pnlDatos.find('#EstatusTrabajo > li:eq(' + $(this).index() + ').active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                            }
                        }
                    });
                    getTrabajoDetalleByID(IdMovimiento);
                    getDetalleAbiertoByID(IdMovimiento);
                    pnlDatos.removeClass("d-none");
                    pnlDetalleTrabajo.removeClass("d-none");

                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
            /*END OLD CODE*/
        });
        $('#tblTrabajos_filter input[type=search]').focus();
        Trabajos.columns().every(function () {
            var that = this;
            $('input,select', this.footer()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });
    }
    function getTrabajoDetalleByID(IDX) {
        pnlDetalleTrabajo.find('#ConceptosPresupuesto').removeClass('d-none');
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblConceptosPresupuesto')) {
            tblConceptosPresupuesto.DataTable().destroy();
        }
        ConceptosPresupuesto = tblConceptosPresupuesto.DataTable({
            "dom": 'frtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getTrabajoDetalleByID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: IDX
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Clave"},
                {"data": "IntExt"},
                {"data": "Descripcion"},
                {"data": "Cantidad"},
                {"data": "Unidad"},
                {"data": "Precio"},
                {"data": "Importe"},
                {"data": "Moneda"},
                {"data": "Adjuntos"},
                {"data": "PCID"},
                {"data": "Editar"}
            ],
            keys: true,
            language: lang,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 15,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [10],
                    "visible": false,
                    "searchable": false
                }
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
            },
            "createdRow": function (row, data, index) {
                $.each($(row).find("td"), function (k, v) {
                    var c = $(v);
                    var index = parseInt(k);
                    switch (index) {
                        case 0:
                            /*CLAVE*/
                            c.addClass('Clave');
                            break;
                        case 1:
                            /*INTEXT*/
                            c.addClass('IntExt');
                            break;
                        case 2:
                            /*DESCRIPCION*/
                            c.addClass('Descripcion');
                            break;
                        case 3:
                            /*CANTIDAD*/
                            c.addClass('Cantidad');
                            break;
                        case 4:
                            /*UNIDAD*/
                            c.addClass('Unidad');
                            break;
                        case 5:
                            /*PRECIO*/
                            c.addClass('Precio');
                            break;
                        case 6:
                            /*IMPORTE*/
                            c.addClass('Importe');
                            break;
                        case 7:
                            /*MONEDA*/
                            c.addClass('Moneda');
                            break;
                            break;
                        case 8:
                            /*ANEXOS*/
                            c.addClass('Anexos');
                            break;
                        case 9:
                            /*ANEXOS*/
                            c.addClass('Editar');
                            break;
                    }
                });
            },
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api();//Get access to Datatable API
                // Update footer
                ImporteTotal = api.column(7).data().reduce(function (a, b) {
                    var ax = 0, bx = 0;
                    ax = $.isNumeric((a)) ? parseFloat(a) : 0;
                    bx = $.isNumeric(getNumberFloat($(b).text())) ? getNumberFloat($(b).text()) : 0;
                    return  (ax + bx);
                }, 0);

                /*Modificamos el importe*/
                $.ajax({
                    url: master_url + 'onModificarImporte',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento,
                        Importe: ImporteTotal
                    }
                }).done(function (data, x, jq) {
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                });
                var Importe = parseFloat(ImporteTotal).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                pnlDatos.find("#ImporteTotal").html('<strong class="">Importe: <strong><h5 class="text-success">$' + Importe + '</h5>');

            }
        });
        /*EDITOR*/
        ConceptosPresupuesto.on('key', function (e, datatable, key, cell, originalEvent) {
            if (Estatus === 'Borrador') {
                var cell_td = $(this).find("td.focus:not(.Fotos):not(.Croquis):not(.Anexos):not(.Editar)");
                if (key === 13) {
                    if (cell_td.hasClass("Clave")) {
                        var txt = $(cell.data()).text();
                        var g = '<input id="Editor" type="text" class="form-control form-control-sm" maxlength="10" value="' + txt + '" autofocus>';
                        cell_td.html(g).find("#Editor").focus().select();
                    } else if (cell_td.hasClass("Descripcion")) {
                        var txt = $(cell.data()).text();
                        var g = '<textarea id="Editor" name="Editor" class="form-control" rows="4" cols="20">' + txt + '</textarea>';
                        cell_td.html(g);
                        cell_td.find("#Editor").focus();
                    } else if (cell_td.hasClass("Unidad")) {
                        var g = '<input id="Editor" type="text" class="form-control form-control-sm numbersOnly" maxlength="10" value="' + cell.data() + '" autofocus>';
                        cell_td.html(g);
                        cell_td.find("#Editor").focus().select();
                    } else if (cell_td.hasClass("Precio")) {
                        var txt = getNumberFloat(cell.data());
                        var g = '<input id="Editor" type="text" class="form-control form-control-sm numbersOnly" maxlength="10" value="' + txt + '" autofocus>';
                        cell_td.html(g);
                        cell_td.find("#Editor").focus().select();
                    } else if (cell_td.hasClass("Moneda")) {
                        var txt = $(cell.data()).text();
                        var g = '<select id="Moneda" name="Moneda" class="form-control form-control-sm"><option></option><option value="USD">USD</option><option value="MXN">MXN</option></select>';
                        cell_td.html(g);
                        $(this).find("#Moneda").val(txt);
                    } else if (cell_td.hasClass("IntExt")) {
                        var g = '<select id="IntExt" name="IntExt" class="form-control form-control-sm"><option></option><option value="INTERIOR">INTERIOR</option><option value="EXTERIOR">EXTERIOR</option></select>';
                        cell_td.html(g);
                        $(this).find("#IntExt").val(cell.data());
                        $(this).find("#IntExt").select();
                    }
                }
            }

        }).on('key-blur', function (e, datatable, cell) {
            var t = $('#tblConceptosPresupuesto > tbody');
            var a = t.find("#Editor");
            var m = t.find("#Moneda");
            var ie = t.find("#IntExt");
            if (a.val() !== 'undefined' && a.val() !== undefined) {
                var b = ConceptosPresupuesto.cell(a.parent()).index();
                var d = a.parent();
                var row = ConceptosPresupuesto.row(a.parent().parent()).data();// SOLO OBTENDRA EL ID
                var params;
                if (d.hasClass('Clave')) {
                    d.html('<span class="badge badge-info ">' + a.val() + '</span>');
                    //SHORT POST
                    params = {
                        ID: row.ID,
                        CELDA: 'CLAVE',
                        VALOR: a.val()
                    };
                    //DRAW NEW DATA
                    ConceptosPresupuesto.cell(d, b).data('<span class="badge badge-info ">' + a.val() + '</span>').draw();
                } else if (d.hasClass('Descripcion')) {
                    d.html('<p>' + a.val() + '</p>');
                    //SHORT POST
                    params = {
                        ID: row.ID,
                        CELDA: 'DESCRIPCION',
                        VALOR: a.val()
                    };
                    //DRAW NEW DATA
                    ConceptosPresupuesto.cell(d, b).data('<p class="CustomDetalleDescripcion">' + a.val() + '</p>').draw();
                } else if (d.hasClass('Precio')) {
                    var precio = getNumberFloat(a.val());
                    var precio_format = '$' + $.number(precio, 6, '.', ',');
                    d.html(precio_format);
                    //DRAW NEW DATA
                    ConceptosPresupuesto.cell($(d).parent(), 6).data(precio_format).draw();
                    var tr = ConceptosPresupuesto.row($(d).parent()).data();
                    var cantidad = parseFloat(tr.Cantidad);
                    var importe_total = cantidad * precio;
                    //DRAW NEW DATA
                    ConceptosPresupuesto.cell($(d).parent(), 7).data('<span class="badge badge-success">$' + $.number(importe_total, 3, '.', ',') + '</span>').draw();
                    //SHORT POST
                    params = {ID: row.ID, CELDA: 'PRECIO', VALOR: precio, IMPORTE: importe_total};
                } else if (d.hasClass('Unidad')) {
                    d.html(a.val());
                    //SHORT POST
                    params = {
                        ID: row.ID,
                        CELDA: 'UNIDAD',
                        VALOR: a.val()
                    };
                    //DRAW NEW DATA
                    ConceptosPresupuesto.cell(d, b).data(a.val()).draw();
                }
                onEditarTrabajoDetalle(params);
            }
            if (m.val() !== 'undefined' && m.val() !== undefined) {
                var b = ConceptosPresupuesto.cell(m.parent()).index();
                var d = m.parent();
                var row = ConceptosPresupuesto.row(m.parent().parent()).data();// SOLO OBTENDRA EL ID
                if (d.hasClass('Moneda')) {
                    console.log('MONEDA', m);
                    var m = t.find("#Moneda");
                    d.html('<span class="' + (m.val() === 'USD' ? 'badge badge-danger' : '') + '">' + a.val() + '</span>');
                    //SHORT POST
                    params = {
                        ID: row.ID,
                        CELDA: 'MONEDA',
                        VALOR: m.val()
                    };
                    //DRAW NEW DATA
                    ConceptosPresupuesto.cell(d, b).data('<span class="' + (m.val() === 'USD' ? 'badge badge-danger' : '') + '">' + m.val() + '</span>').draw();
                }
                onEditarTrabajoDetalle(params);
            }
            if (ie.val() !== 'undefined' && ie.val() !== undefined) {
                var b = ConceptosPresupuesto.cell(ie.parent()).index();
                var d = ie.parent();
                var row = ConceptosPresupuesto.row(ie.parent().parent()).data();// SOLO OBTENDRA EL ID
                if (d.hasClass('IntExt')) {
                    console.log('IntExt', ie);
                    var m = t.find("#IntExt");
                    d.html(ie.val());
                    //SHORT POST
                    params = {
                        ID: row.ID,
                        CELDA: 'INTEXT',
                        VALOR: ie.val()
                    };
                    //DRAW NEW DATA
                    ConceptosPresupuesto.cell(d, b).data(m.val()).draw();
                }
                onEditarTrabajoDetalle(params);
            }
        });
    }
    var tblConceptosAbiertos = pnlDetalleTrabajo.find("#tblConceptosAbiertos"), ConceptosAbiertos;
    function getDetalleAbiertoByID(IDX) {
        pnlDetalleTrabajo.find('#ConceptosPresupuesto').removeClass('d-none');
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblConceptosAbiertos')) {
            tblConceptosAbiertos.DataTable().destroy();
        }
        ConceptosAbiertos = tblConceptosAbiertos.DataTable({
            "dom": 'frtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getTrabajoDetalleAbiertoByID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: IDX
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Clave"},
                {"data": "Descripcion"},
                {"data": "Adjuntos"},
                {"data": "Reportes"},
                {"data": "Eliminar"}
            ],
            keys: true,
            language: lang,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 15,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });
        tblConceptosAbiertos.find('#tblConceptosAbiertos tbody').on('click', 'tr', function () {
            tblConceptosAbiertos.find("#tblConceptosAbiertos").find("tr").removeClass("success");
            tblConceptosAbiertos.find("#tblConceptosAbiertos").find("tr").removeClass("warning");
            var id = this.id;
            var index = $.inArray(id, selected);
            if (index === -1) {
                selected.push(id);
            } else {
                selected.splice(index, 1);
            }
            $(this).addClass('success');
            var dtm = tblSelected.row(this).data();

            tempDetalleAbierto = parseInt(dtm.ID);
        });
    }

    function getDetalleCajerosByID(IDX) {
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblConceptosCajeros')) {
            tblConceptosCajeros.DataTable().destroy();
        }
        ConceptosCajeros = tblConceptosCajeros.DataTable({
            "dom": 'frtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getTrabajoDetalleCajeroByID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: IDX
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Clave"},
                {"data": "Descripcion"},
                {"data": "Fotos"},
                {"data": "Eliminar"}
            ],
            keys: true,
            language: lang,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 15,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });
    }
    function getConceptosPreciarioByPreciario(Preciario_ID) {
        mdlSeleccionarConceptos.modal('show');
        HoldOn.open({theme: 'sk-cube', message: 'CARGANDO...'});
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistrosConceptosPreciario')) {
            tblRegistrosConceptosPreciario.DataTable().destroy();
        }
        RegistrosConceptosPreciario = tblRegistrosConceptosPreciario.DataTable({
            "dom": 'frtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getConceptosXPreciarioID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: Preciario_ID,
                    TrabajoID: IdMovimiento
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Clave"},
                {"data": "Descripcion"},
                {"data": "Unidad"},
                {"data": "Costo"},
                {"data": "Moneda"}
            ],
            language: lang,
            "autoWidth": true,
            "bStateSave": true,
            "colReorder": true,
            "displayLength": 10,
            "bLengthChange": false,
            "scrollX": true,
            "deferRender": true,
            "scrollCollapse": false,
            keys: true,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                if (parseInt(json.length) > 0) {
                    $('#tblRegistrosConceptosPreciario_filter input[type=search]').focus();
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN CONCEPTOS EN ESTE PRECIARIO', 'danger');
                }
                HoldOn.close();
            }
        });
    }
    /*Edición de Detalle*/
    function onReemplazarConcepto(IDX, Cantidad) {
        if (Estatus === 'Borrador') {
            IdReemplaza = IDX;
            CantidadReemplaza = Cantidad;
            var Preciario_ID = pnlDatos.find("#Preciario_ID").val();
            if (Preciario_ID !== undefined && Preciario_ID !== '' && Preciario_ID > 0) {
                ReemplazaConcepto = true;
                getConceptosPreciarioByPreciario(Preciario_ID);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PRECIARIO', 'danger');
            }
        } else {
            swal('INFO', 'EL MOVIMIENTO YA FUE CONCLUIDO', 'info');
        }
    }
    function getConceptoCopiarXDetalle(IDX) {
        if (Estatus === 'Borrador') {
            var id_nuevoConcepto = 0;
            HoldOn.open({theme: "sk-bounce", message: "POR FAVOR, ESPERE..."});
            $.ajax({
                url: master_url + 'getDetalleByID',
                type: "POST",
                dataType: "JSON",
                data: {ID: IDX}
            }).done(function (data, x, jq) {
                if (data[0] !== undefined && data.length > 0) {
                    var dtm = data[0];
                    var frm = new FormData();
                    frm.append('Trabajo_ID', IdMovimiento);
                    frm.append('PreciarioConcepto_ID', dtm.PreciarioConcepto_ID);
                    frm.append('Renglon', pnlDetalleTrabajo.find("table tr").length);
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
                            data: {ID: IDX}
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
                                    ConceptosPresupuesto.ajax.reload();
                                    onNotifyOld('fa fa-check', 'SE HA COPIADO EL CONCEPTO', 'success');
                                    HoldOn.close();
                                }).fail(function (x, y, z) {
                                    console.log(x, y, z);
                                    HoldOn.close();
                                    onNotifyOld('fa fa-exclamation', 'EL CONCEPTO NO SE COPIO, INTENTE DE NUEVO', 'danger');
                                });
                            });
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                            HoldOn.close();
                            onNotifyOld('fa fa-exclamation', 'EL CONCEPTO NO SE COPIO, INTENTE DE NUEVO', 'danger');
                        });
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                        HoldOn.close();
                        onNotifyOld('fa fa-exclamation', 'EL CONCEPTO NO SE COPIO, INTENTE DE NUEVO', 'danger');
                    });
                } else {
                    onNotifyOld('fa fa-exclamation', 'EL CONCEPTO NO SE COPIO, INTENTE DE NUEVO', 'danger');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                HoldOn.close();
            });
        } else {
            swal('INFO', 'EL MOVIMIENTO YA FUE CONCLUIDO', 'info');
        }
    }
    function onModificarTipoCambio(IDX, Precio, Cantidad, TipoCambioBD) {
        if (Estatus === 'Borrador') {
            var Importe = 0;
            swal({
                title: "Captura el tipo de cambio:",
                content: {
                    element: "input",
                    attributes: {
                        placeholder: "00.00",
                        type: "number"
                    }
                },
                closeOnEsc: false,
                closeOnClickOutside: false
            }).then((TipoCambio) => {
                if ($.isNumeric(TipoCambio) && parseFloat(TipoCambio) > 0) {
                    Importe = (TipoCambio * Precio) * Cantidad;
                    $.ajax({
                        url: master_url + 'onModificarImporteConcepto',
                        type: "POST",
                        data: {
                            ID: IDX,
                            TipoCambio: TipoCambio,
                            Importe: Importe
                        }
                    }).done(function (data, x, jq) {
                        ConceptosPresupuesto.ajax.reload();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    });
                }
            });
        } else {
            swal('INFO', 'EL MOVIMIENTO YA FUE CONCLUIDO', 'info');
        }
    }
    function onEditarTrabajoDetalle(params) {
        $.post(master_url + 'onEditarTrabajoDetalle', params).done(function (data, x, jq) {
            onNotifyOld('fas fa-check', 'DATOS ACTUALIZDOS', 'info');
        }).fail(function (x, y, z) {
            console.log('ERROR', x, y, z);
        }).always(function () {
            ConceptosPresupuesto.ajax.reload();
        });
    }
    function onEliminarConceptoXDetalle(evt, IDX) {
        if (Estatus === 'Borrador') {
            swal({
                title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: master_url + 'onEliminarConceptoXDetalle',
                        type: "POST",
                        data: {
                            ID: IDX,
                            IDT: IdMovimiento
                        }
                    }).done(function (data, x, jq) {
                        ConceptosPresupuesto.ajax.reload();
                        onNotifyOld('fa fa-check', 'REGISTRO ELIMINADO', 'success');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                }
            });
        } else {
            swal('INFO', 'EL MOVIMIENTO YA FUE CONCLUIDO', 'info');
        }
    }
    function getClientes() {
        $.ajax({
            url: master_url + 'getClientes',
            type: "POST", dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Cliente_ID']")[0].selectize.addOption({text: v.Cliente, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getSucursalesbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getSucursalesByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Sucursal_ID']")[0].selectize.addOption({text: v.CR + ' - ' + v.Sucursal, value: v.ID});
            });
            //pnlDatos.find("[name='Sucursal_ID']")[0].selectize.open();
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getPreciariosActivosbyCliente(Cliente_ID) {
        $.ajax({
            url: master_url + 'getPreciariosActivosbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                Cliente_ID: Cliente_ID
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Preciario_ID']")[0].selectize.addOption({text: v.Preciario, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getEspecialidadesbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getEspecialidadesbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Especialidad_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getAreasbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getAreasbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Area_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getCCbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getCCByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='CentroCostos_ID']")[0].selectize.addOption({text: v.Nombre, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getCodigosPPTA() {
        $.ajax({
            url: master_url + 'getCodigosPPTA',
            type: "POST", dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Codigoppta_ID']")[0].selectize.addOption({text: v.Código, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getCuadrillas() {
        $.ajax({url: master_url + 'getCuadrillas',
            type: "POST",
            dataType: "JSON"}).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Cuadrilla_ID']")[0].selectize.addOption({text: v.Cuadrilla, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getCodigoPPTAbyID(CodigoID) {
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
                pnlDatos.find("#Dias").val(codigoppta.Dias);
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function onChangeIntExtByID(IntExt, IDX) {
        $.ajax({
            url: master_url + 'onChangeIntExtByDetalleID',
            type: "POST",
            data: {
                ID: IDX,
                IntExt: IntExt
            }
        }).done(function (data, x, jq) {
            onNotifyOld('fas fa-check', 'DATOS ACTUALIZDOS', 'info');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");
        Archivo.attr("type", "text");
        Archivo.val('N');
    }
    function printImg(url) {
        var win = window.open('');
        win.document.write('<img src="' + url + '" onload="window.print();window.close()" />');
        win.focus();
    }
    function disableFields() {
        $('#CapturaDatos').find('input,textarea,select').attr('disabled', true);
        $.each($('#CapturaDatos').find("select"), function (k, v) {
            $('#CapturaDatos').find("select")[k].selectize.disable();
        });
    }
    function enableFields() {
        $('#CapturaDatos').find('input,textarea,select').attr('disabled', false);
        $.each($('#CapturaDatos').find("select"), function (k, v) {
            $('#CapturaDatos').find("select")[k].selectize.enable();
        });
    }
    /*ADJUNTOS PRESUPUESTO*/
    function getAdjuntosByID(IDX, IDXX) {
        mdlAdjuntos.find("#IdTrabajo").val(IDXX);
        mdlAdjuntos.find("#IdTrabajoDetalle").val(IDX);
        $.getJSON(master_url + 'getTotalFotosCroquisAnexos', {ID: IDXX, IDD: IDX}).done(function (data, x, jq) {
            var x = data[0];
            mdlAdjuntos.find("#load_fotos").html('<span class="fa fa-camera fa-lg"></span> Fotos (' + x.FOTOS + ')');
            mdlAdjuntos.find("#load_croquis").html('<span class="fa fa-map fa-lg"></span> Croquis (' + x.CROQUIS + ')');
            mdlAdjuntos.find("#load_anexos").html('<span class="fa fa-paperclip fa-lg"></span> Anexos (' + x.ANEXOS + ')');
        }).fail(function (x, y, z) {
            console.log('ERROR AL OBTENER LOS CONTADORES', x.responseText);
        }).always(function () {
            mdlAdjuntos.modal('show');
            if (Estatus === 'Borrador') {
                mdlAdjuntos.find("#inputFotos").removeClass('d-none');
                mdlAdjuntos.find("#inputCroquis").removeClass('d-none');
                mdlAdjuntos.find("#inputAnexos").removeClass('d-none');
            } else {
                mdlAdjuntos.find("#inputFotos").addClass('d-none');
                mdlAdjuntos.find("#inputCroquis").addClass('d-none');
                mdlAdjuntos.find("#inputAnexos").addClass('d-none');
            }
        });
    }
    function setFotosEditar(evt) {
        mdlAdjuntos.find("#fFotos").trigger('click');
    }
    function setCroquisEditar(evt) {
        mdlAdjuntos.find("#fCroquis").trigger('click');
    }
    function setAnexosEditar(evt) {
        mdlAdjuntos.find("#fAnexos").trigger('click');
    }
    function onReloadCroquisXConcepto(IDX, IDT) {
        $.post(master_url + 'getTrabajoCroquisDetalleByID', {ID: IDX}).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlAdjuntos.find("#vCroquis").html("<div class=\"row\"></div>");
                var picthumbnail = "";
                var nimg = 0;
                $.each(JSON.parse(data), function (k, v) {
                    picthumbnail = "";
                    if (nimg === 2) {
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-12 col-sm-6 col-md-3 col-lg-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarCroquisXID(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
                    mdlAdjuntos.find("#vCroquis").find("div.row").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlAdjuntos.find("#vCroquis").html("");
            }
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
            var total_croquis = mdlAdjuntos.find("#vCroquis").find("div.thumbnail").length;
            mdlAdjuntos.find("#load_croquis").html('<span class="fa fa-map fa-lg"></span> Croquis (' + total_croquis + ')');
        });
    }
    function onReloadAnexosXConcepto(IDX, IDT) {
        $.post(master_url + 'getTrabajoAnexosDetalleByID', {ID: IDX, IDT: IDT}).done(function (data, x, jq) {
            mdlAdjuntos.find("#vAnexos").html("<div class=\"row\"></div>");
            if (data.length > 0) {
                $.each(JSON.parse(data), function (k, v) {
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
                    if (ext === "txt" || ext === "dat") {
                        mdlAdjuntos.find("#vAnexos div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text fa-4x"></span><br>' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger btn-sm" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        mdlAdjuntos.find("#vAnexos div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger btn-sm" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        mdlAdjuntos.find("#vAnexos div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger btn-sm" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        mdlAdjuntos.find("#vAnexos div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger btn-sm" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        mdlAdjuntos.find("#vAnexos div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger btn-sm" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        mdlAdjuntos.find("#vAnexos div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger btn-sm" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        mdlAdjuntos.find("#vAnexos div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger btn-sm" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        mdlAdjuntos.find("#vAnexos div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger btn-sm" onclick="onEliminarAnexoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    }
                });
            } else {
                mdlAdjuntos.find("div#vAnexos").html('<h3>NO EXISTEN ANEXOS ADJUNTOS</h3>');
            }
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
            var total_anexos = mdlAdjuntos.find("#vAnexos").find("div.row a").length;
            mdlAdjuntos.find("#load_anexos").html('<span class="fa fa-paperclip fa-lg"></span> Anexos (' + total_anexos + ')');
        });
    }
    function onReloadFotosXConcepto(IDX, IDT) {
        $.post(master_url + 'getTrabajoFotosDetalleByID', {ID: IDX, IDT: IDT}).done(function (data, x, jq) {
            if (data.length > 0) {
                mdlAdjuntos.find("#vFotos").html("<div class=\"row\"></div>");
                var picthumbnail = "";
                var nimg = 0;
                $.each(JSON.parse(data), function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-12 col-sm-6 col-md-3 col-lg-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
                    mdlAdjuntos.find("#vFotos").find("div.row").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlAdjuntos.find("#vFotos").html("");
            }
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
            var total_fotos = mdlAdjuntos.find("#vFotos").find("div.thumbnail").length;
            mdlAdjuntos.find("#load_fotos").html('<span class="fa fa-camera fa-lg"></span> Fotos (' + total_fotos + ')');
        });
    }
    function onEliminarFotoXConcepto(IDX, IDTD, IDT) {
        if (Estatus === 'Borrador') {
            HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
            $.post(master_url + 'onEliminarFotoXConcepto', {ID: IDX, IDT: IdMovimiento}).done(function (data, x, jq) {
                onReloadFotosXConcepto(IDTD, IDT);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        }
    }
    function onEliminarAnexoXConcepto(IDX, IDTD, IDT) {
        if (Estatus === 'Borrador') {
            HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO ANEXO..."});
            $.post(master_url + 'onEliminarAnexoXConcepto ', {ID: IDX, IDT: IDT}).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'ANEXO, ELIMINADO', 'success');
                onReloadAnexosXConcepto(IDTD, IDT);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        }
    }
    function onEliminarCroquisXID(IDX, IDTD, IDT) {
        if (Estatus === 'Borrador') {
            HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO ANEXO..."});
            $.post(master_url + 'onEliminarCroquisXID', {ID: IDX}).done(function (data, x, jq) {
                onReloadCroquisXConcepto(IDTD, IDT);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        }
    }
    /*GENERADOR PRESUPUESTO*/
    function getRegistrosGenerador(IDTD, TipoCambio, Precio) {
        HoldOn.open({theme: 'sk-cube', message: 'CARGANDO...'});
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblRegistrosGenerador')) {
            tblRegistrosGenerador.DataTable().destroy();
        }
        RegistrosGenerador = tblRegistrosGenerador.DataTable({
            "dom": 'frtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getGeneradoresDetalleXConceptoID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    ID: IDTD
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Area"},
                {"data": "EstimacionNo"},
                {"data": "Largo"},
                {"data": "Ancho"},
                {"data": "Alto"},
                {"data": "Cantidad"},
                {"data": "Total"},
                {"data": "Eliminar"}
            ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                }
            ],
            language: lang,
            "autoWidth": true,
            "bStateSave": true,
            "colReorder": true,
            "displayLength": 10,
            "bLengthChange": false,
            "scrollX": true,
            "deferRender": true,
            "scrollCollapse": false,
            keys: true,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api();
                var Total = api.column(7).data().reduce(function (a, b) {
                    return  parseFloat(a) + parseFloat(b);
                }, 0);
                /*Modificamos el importe*/
                var Importe = (TipoCambio * Precio) * Total;
                $.ajax({
                    url: master_url + 'onModificarConceptoCantidadEImporte',
                    type: "POST",
                    data: {
                        ID: IDTD,
                        Importe: Importe,
                        Cantidad: Total
                    }
                }).done(function (data, x, jq) {
                    ConceptosPresupuesto.ajax.reload();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                });
                $(api.column(7).footer()).html(api.column(7, {page: 'current'}).data().reduce(function (a, b) {
                    return Total;
                }, 0));
            },
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });
    }
    function getGeneradoresDetalleXConceptoID(IDTD, IDT, IDCO, Precio, TipoCambio) {
        mdlGeneradorConcepto.modal('show');
        mdlGeneradorConcepto.find('#Area').focus();
        mdlGeneradorConcepto.find("[name='Concepto_ID']").val(IDCO);
        mdlGeneradorConcepto.find("[name='IdTrabajoDetalle']").val(IDTD);
        if (Estatus === 'Borrador') {
            mdlGeneradorConcepto.find('#CapturaGenerador').removeClass('d-none');
        } else {
            mdlGeneradorConcepto.find('#CapturaGenerador').addClass('d-none');
        }
        getRegistrosGenerador(IDTD, TipoCambio, Precio);
    }
    function onModificarGenerador(params) {
        $.post(master_url + 'onModificarGenerador', params).done(function (data, x, jq) {
            RegistrosGenerador.ajax.reload();
        }).fail(function (x, y, z) {
            console.log('ERROR', x, y, z);
        });
    }
    function onModificarCantidadesGenerador(ID, NombreAALC, ValorAALC, Total) {
        $.post(master_url + 'onModificarCantidadesGenerador',
                {
                    ID: ID,
                    ValorAALC: ValorAALC,
                    NombreAALC: NombreAALC,
                    Total: Total
                }
        ).done(function (data, x, jq) {
            RegistrosGenerador.ajax.reload();
        }).fail(function (x, y, z) {
            console.log('ERROR', x, y, z);
        });
    }
    function onEliminarRenglonGenerador(IDX) {
        if (Estatus === 'Borrador') {
            $.ajax({
                url: master_url + 'onEliminarRenglonGenerador',
                type: "POST",
                data: {
                    ID: IDX
                }
            }).done(function (data, x, jq) {
                RegistrosGenerador.ajax.reload();
                ConceptosPresupuesto.ajax.reload();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            });
        }
    }
    /*FUNCION CAJEROS*/
    function onEliminarConceptoXDetalleCajero(evt, IDX) {
        if (Estatus === 'Borrador') {
            swal({
                title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: master_url + 'onEliminarConceptoXDetalleCajero',
                        type: "POST",
                        data: {
                            ID: IDX,
                            IDT: IdMovimiento
                        }
                    }).done(function (data, x, jq) {
                        ConceptosCajeros.ajax.reload()
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    });
                }
            });
        } else {
            swal('INFO', 'EL MOVIMIENTO YA FUE CONCLUIDO', 'info');
        }

    }
    function onmodificarConceptoLevantamiento(params) {
        $.post(master_url + 'onModificarConceptoLevantamiento', params).done(function (data, x, jq) {
            ConceptosAbiertos.ajax.reload();
        }).fail(function (x, y, z) {
            console.log('ERROR', x, y, z);
        });
    }
    function onmodificarConceptoCajero(params) {
        $.post(master_url + 'onModificarConceptoCajero', params).done(function (data, x, jq) {
            ConceptosCajeros.ajax.reload();
        }).fail(function (x, y, z) {
            console.log('ERROR', x, y, z);
        });
    }

    function onMostrarFotosAntesProcesoDespuesByID(ID, IDD) {
        AdjuntosLevantamiento.find("#IdTrabajoLevantamiento").val(ID);
        AdjuntosLevantamiento.find("#IdTrabajoDetalleLevantamiento").val(IDD);
        AdjuntosLevantamiento.find(".collapse").removeClass("show");
        AdjuntosLevantamiento.modal('show');
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
                AdjuntosLevantamiento.find("#vFotosAntes").html("<div class=\"row\"></div>");
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-12 col-sm-6 col-md-3 col-lg-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoAntesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
                    AdjuntosLevantamiento.find("#vFotosAntes").find("div.row").append(picthumbnail);
                    nimg++;
                });
            } else {
                AdjuntosLevantamiento.find("#vFotosAntes").html("");
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
                AdjuntosLevantamiento.find("#vFotosDespues").html("<div class=\"row\"></div>");
                var picthumbnail = "";
                var nimg = 0;
                $.each(data, function (k, v) {
                    picthumbnail = "";
                    if (nimg === 4) {
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-12 col-sm-6 col-md-3 col-lg-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-11" >' + v.Observaciones + '</div>' +
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoDespuesXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')">×</button></div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a></div></div>';
                    AdjuntosLevantamiento.find("#vFotosDespues").find("div.row").append(picthumbnail);
                    nimg++;
                });
            } else {
                AdjuntosLevantamiento.find("#vFotosDespues").html("");
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
                if (pnlDatos.find("[name='ControlProceso']").val() === 'Dias') {
                    TextoAgrupador = 'Día No. ';
                } else if (pnlDatos.find("[name='ControlProceso']").val() === 'Semanas') {
                    TextoAgrupador = 'Semana No. ';
                }
                var row = "";
                AdjuntosLevantamiento.find("#vFotosProceso").html("");
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
                    row += '<div class="col-12" align="center"><h4>' + TextoAgrupador + tu + ' Avance: ' + porcentajes_unicos[index] + ' </h4><hr></div>';
                    $.each(data, function (k, d) {
                        if (tu === d.Tiempo) {
                            row += '<div class="col-12 col-sm-6 col-md-3 col-lg-3">' +
                                    '<div class="thumbnail">' +
                                    '<div class="pull-left caption col-11 Customcaption" >' +
                                    '<div class="form-group Customform-group">' +
                                    '<label for="ObservacionesxFotoProceso" class="control-label customFormLabel">Observaciones</label>' +
                                    '<input id="ObservacionesxFotoProceso" name="ObservacionesxFotoProceso" type="text" class="form-control form-control-sm"  onchange="onModificarObservacionesProceso(' + d.ID + ',' + d.IdTrabajoDetalle + ',this)"  value="' + d.Observaciones + '"></input>' +
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
                    row += '<div class="col-12"></div>';
                    /*SUMAR UN RECORRIDO POR EL INDICE*/
                    index++;
                });
                /*COLOCAR SOLO UNA VEZ EL HTML GENERADO*/
                AdjuntosLevantamiento.find("#vFotosProceso").html("<div class=\"row\">" + row + "</div>");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
        getDetalleAbiertoByID(IDT);
        HoldOn.close();
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
            AdjuntosLevantamiento.find("#vAnexosLevantamiento").html("<div class=\"row\"></div>");
            if (data.length > 0) {
                $.each(data, function (k, v) {
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
                    if (ext === "txt" || ext === "dat") {
                        AdjuntosLevantamiento.find("#vAnexosLevantamiento div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text fa-4x"></span><br>' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        AdjuntosLevantamiento.find("#vAnexosLevantamiento div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        AdjuntosLevantamiento.find("#vAnexosLevantamiento div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        AdjuntosLevantamiento.find("#vAnexosLevantamiento div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        AdjuntosLevantamiento.find("#vAnexosLevantamiento div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        AdjuntosLevantamiento.find("#vAnexosLevantamiento div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        AdjuntosLevantamiento.find("#vAnexosLevantamiento div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        AdjuntosLevantamiento.find("#vAnexosLevantamiento div.row").append('<div class="col-12 col-sm-6 col-md-3 col-lg-3" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    }
                });
            } else {
                AdjuntosLevantamiento.find("#vAnexosLevantamiento div.row").html('<h3>NO EXISTEN ANEXOS ADJUNTOS</h3>');
            }
            getDetalleAbiertoByID(IdMovimiento);
            HoldOn.close();
        }).fail(function (x, y, z) {
        }).always(function () {
        });
    }
    function onEliminarFotoAntesXConcepto(IDX, IDTD, IDT) {
        if (Estatus === 'Borrador') {
            HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
            $.post(master_url + 'onEliminarFotoAntesXConcepto', {ID: IDX}).done(function (data, x, jq) {
                onReloadFotosAntesXConcepto(IDTD, IDT);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        }
    }
    function onEliminarFotoDespuesXConcepto(IDX, IDTD, IDT) {
        if (Estatus === 'Borrador') {
            HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
            $.post(master_url + 'onEliminarFotoDespuesXConcepto', {ID: IDX}).done(function (data, x, jq) {
                onReloadFotosDespuesXConcepto(IDTD, IDT);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        }
    }
    function onEliminarFotoProcesoXConcepto(IDX, IDTD, IDT) {
        if (Estatus === 'Borrador') {
            HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO..."});
            $.post(master_url + 'onEliminarFotoProcesoXConcepto', {ID: IDX}).done(function (data, x, jq) {
                onReloadFotosProcesoXConcepto(IDTD, IDT);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        }
    }
    function onEliminarAnexoDosXConcepto(IDX, IDTD, IDT) {
        if (Estatus === 'Borrador') {
            HoldOn.open({theme: "sk-bounce", message: "ELIMINANDO ANEXO..."});
            $.post(master_url + 'onEliminarAnexoDosXConcepto ', {ID: IDX, IDT: IDT}).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'ANEXO, ELIMINADO', 'success');
                onReloadAnexosDosXConcepto(IDTD, IDT);
            }).fail(function (x, y, z) {
            }).always(function () {
                HoldOn.close();
            });
        }
    }
    function onEliminarConceptoXDetalleAbierto(evt, IDX) {
        if (Estatus === 'Borrador') {
            swal({
                title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
            }).then((willDelete) => {
                if (willDelete) {
                    HoldOn.open({
                        theme: "sk-bounce",
                        message: "CARGANDO DATOS..."
                    });
                    $.ajax({
                        url: master_url + 'onEliminarConceptoXDetalleAbierto',
                        type: "POST",
                        data: {
                            ID: IDX,
                            IDT: IdMovimiento
                        }
                    }).done(function (data, x, jq) {
                        ConceptosAbiertos.ajax.reload();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            });
        }
    }
</script>
<style>
    td span.badge{
        font-size: 14px !important;
    }
    table tbody tr td > p.CustomDetalleDescripcion{
        height: 100px !important;
        overflow: auto !important;
    }
    table tbody tr td > input[type="text"]{
        width: 100% !important;
    }
    .hasItems{
        color: #18BC9C !important;
    }
    /*Drag and drop*/
    .file_drag_area
    {
        background: #f8f8f8;
        border: 5px dashed #ddd;
        width: 100%;
        /*height: 150px;*/
        text-align: center;
        box-sizing: border-box;
        padding: 18px;
        cursor: pointer;
        position: relative;
        font-size: 16px;
    }
    .file_drag_area:hover
    {
        border-color:#002c4c !important;
    }
    .file_drag_over{
        color:#B0B0B0;
        border-color:#002c4c;
    }
    .progress-indicator li:hover{
        cursor:pointer !important;
    }
    @media only screen and (max-width: 700px)  {
        .progress-indicator {
            width: 100% !important;
            display: inline-block  !important;
        }
    }
</style>