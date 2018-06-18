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
        <div class="row d-none" id="Trabajos">
            <table id="tblTrabajos" class="table table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Folio</th>
                        <th>Estatus2</th>
                        <th>Estatus</th>
                        <th>Fecha</th>

                        <th>Adjunto</th>
                        <th>Cliente</th>
                        <th>Sucursal</th>
                        <th>Importe</th>
                        <th>Trabajo Requerido</th>
                        <th>Usuario</th>

                        <th>ImporteSinFormato</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th><input type="text" placeholder="Buscar por ID" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Folio" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Estatus2" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Estatus" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Fecha" class="form-control form-control-sm"/></th>

                        <th><input type="text" placeholder="Buscar por Adjunto" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Cliente" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Importe" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Sucursal" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Trabajo Requerido" class="form-control form-control-sm"/></th>
                        <th><input type="text" placeholder="Buscar por Usuario" class="form-control form-control-sm"/></th>

                        <th><input type="text" placeholder="Buscar por ImporteSinFormato" class="form-control form-control-sm"/></th>
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
<!--PANEL NUEVO-->
<div id="" class="container-fluid">
    <div class="card border-0 d-none" id="pnlDatos">
        <div class="card-body text-dark">
            <form id="frmNuevo">
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
                        <button type="button" class="btn btn-light btn-sm" id="btnCopiar" data-toggle="tooltip" data-placement="top" title="Copiar"><span class="fa fa-clone "></span> </button>
                        <button type="button" class="btn btn-warning btn-sm" id="btnImprimirReportes" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes" ><span class="fa fa-print " ></span></button>
                        <button type="button" class="btn btn-danger btn-sm" id="btnEliminar"><span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Eliminar"></span> </button>
                        <button type="button" class="btn btn-info btn-sm" id="btnGuardar"><span class="fa fa-save "></span> GUARDAR</button>
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
                        <center>
                            <div class="form-group label-static d-none">
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
                        <br>
                        <ul class="progress-indicator pt-3 pb-3" style="background-color: white; border-radius: 3px;" id="EstatusTrabajo">
                            <li id="stsPedido">
                                <span class="bubble"></span>
                                1. Pedido
                            </li>
                            <li id="stsPresupuesto">
                                <span class="bubble"></span>
                                2. Presupuesto
                            </li>
                            <li id="stsAutorizacion">
                                <span class="bubble"></span>
                                3. Autorización del cliente
                            </li>
                            <li id="stsEjecucion">
                                <span class="bubble"></span>
                                4. Ejecución
                            </li>
                            <li id="stsFinalizado">
                                <span class="bubble"></span>
                                5. Finalizado
                            </li>
                            <li id="stsPagado">
                                <span class="bubble"></span>
                                6. Pagado
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
                                <button type="button" class="btn btn-info" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x"></span> SELECCIONA EL ARCHIVO
                                </button>
                                <br><hr>
                                <div id="VistaPrevia" class="col-12" align="center"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-3"><h6>Los campos con * son obligatorios</h6></div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--PANEL NUEVO DETALLE-->
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
                    <div id="ConceptosPresupuesto" class="row d-none">
                        <table id="tblConceptosPresupuesto" class="table table-sm display " style="width:100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Clave</th>
                                    <th>Int/Ext</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Unidad</th>
                                    <th>Precio</th>
                                    <th>Importe</th>
                                    <th>Moneda</th>
                                    <th>Fotos</th>
                                    <th>Croquis</th>
                                    <th>Anexos</th>
                                    <th>PCID</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <!--FIN NUEVA TABLA DE CONCEPTOS-->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Levantamiento">
                    <fieldset>
                        <div class="col-12" align="right">
                            <button type="button" class="btn btn-primary btn-sm" id="btnNuevoConceptoAbierto"><span class="fa fa-plus fa-1x" ></span></button>
                        </div>
                    </fieldset>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Cajeros">
                    <fieldset>
                        <div class="col-12" align="right">
                            <button type="button" class="btn btn-primary btn-sm" id="btnNuevoConceptoCajero"><span class="fa fa-plus fa-1x" ></span></button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlTrabajoNuevoConceptoEditar" class="modal modalFull animated fadeInUp">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header">
                <h5 class="modal-title">Seleccione un Concepto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-12" align="right">
                        <div class="checkbox"><label><input type="checkbox" id="chkMultiple" value="ON"> Varios</label></div>
                    </div>
                </fieldset>
                <div class="col-12" id="ConceptosXPreciarioID"></div>
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
    var pnlDatos = $("#pnlDatos");
    var menuTablero = $('#MenuTablero');
    var Archivo = $("#Adjunto");
    var btnArchivo = $("#btnArchivo");
    var VistaPrevia = $("#VistaPrevia");
    var ModificarArchivo = pnlDatos.find("#Adjunto");
    var btnModificarArchivo = pnlDatos.find("#btnArchivo");
    var ModificarVistaPrevia = pnlDatos.find("#VistaPrevia");
    var pnlDetalleTrabajo = $("#pnlDetalleTrabajo");
    var btnNuevoConcepto = pnlDetalleTrabajo.find("#btnNuevoConcepto");
    var btnEliminar = pnlDatos.find("#btnEliminar");
    var btnEliminarConcepto = pnlDetalleTrabajo.find("#btnEliminarConcepto");
    var Conceptos = pnlDetalleTrabajo.find("#Conceptos");
    /*Detalle Normal*/
    var tBtnConcluir = pnlDatos.find("#Concluir");
    var tBtnEditarConcluir = pnlDatos.find("#Concluir");
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
    var btnNuevoConceptoEditar = pnlDetalleTrabajo.find("#btnNuevoConcepto");
    /*MULTIMEDIA (EDITAR) MODALES Y BOTONES*/
    var mdlTrabajoEditarFotosPorConcepto = $("#mdlTrabajoEditarFotosPorConcepto");
    var mdlTrabajoEditarCroquisPorConcepto = $("#mdlTrabajoEditarCroquisPorConcepto");
    var mdlTrabajoEditarAnexosPorConcepto = $("#mdlTrabajoEditarAnexosPorConcepto");
    var EditarFotosPorConcepto = mdlTrabajoEditarFotosPorConcepto.find("#fFotos");
    var EditarCroquisPorConcepto = mdlTrabajoEditarCroquisPorConcepto.find("#fCroquis");
    var EditarAnexosPorConcepto = mdlTrabajoEditarAnexosPorConcepto.find("#fAnexos");
    /******ABIERTO*/
    var btnNuevoConceptoAbierto = pnlDetalleTrabajo.find('#btnNuevoConceptoAbierto');
    var btnNuevoConceptoAbiertoEditar = pnlDetalleTrabajo.find('#btnNuevoConceptoAbiertoEditar');
    var btnAgregarConceptoAbierto = $('#btnAgregarConceptoAbierto');
    var btnEditarConceptoAbierto = $('#btnEditarConceptoAbierto');
    var btnNuevoConceptoCajero = pnlDetalleTrabajo.find("#btnNuevoConceptoCajero");
    var btnNuevoConceptoCajeroEditar = pnlDetalleTrabajo.find('#btnNuevoConceptoCajeroEditar');
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
    var btnImprimirReportes = $("#btnImprimirReportes");
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    var nuevo = false;
    var tblTrabajos = $("#tblTrabajos"), Trabajos;
    var tblConceptosPresupuesto = $("#tblConceptosPresupuesto"), ConceptosPresupuesto;

    $(document).ready(function () {
        getRecords();
        getClientes();
        getCodigosPPTA();
        getCuadrillas();
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
                        Trabajos.ajax.reload();
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO GUARDADO', 'success');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    frm.append('Importe', 0);
                    $.ajax({
                        url: master_url + 'onAgregar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        Trabajos.ajax.reload();
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVO TRABAJO', 'success');
                        nuevo = false;
                        IdMovimiento = parseInt(data);
                        pnlDatos.find("#ID").val(IdMovimiento);
                        //btnConcluir.removeClass('d-none');
                        //getDetalleByID(IdMovimiento);
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                }
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', '* DEBE DE COMPLETAR LOS CAMPOS REQUERIDOS *', 'danger');
            }
        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("d-none");
            pnlDatos.addClass("d-none");
            pnlDetalleTrabajo.addClass("d-none");
        });
        btnNuevo.on("click", function () {
            nuevo = true;
            pnlDatos.find('#pEstatusTrabajo').find('li').removeClass('completed active');
            pnlDatos.find('#pEstatusTrabajo').find('#stsPedido').addClass('active').html('').html('<span class="bubble"></span> 1. Pedido <br><small>(activo)</small>');
            pnlDatos.find(".nav-tabs li").removeClass("active");
            $(pnlDatos.find(".nav-tabs li")[0]).addClass("active");
            pnlDatos.find("#Datos").addClass("active show");
            pnlDatos.find("#Datos2").removeClass("active show");
            pnlDatos.find("#Datos3").removeClass("active show");
            pnlDatos.find("#Datos4").removeClass("active show");
            menuTablero.addClass("d-none");
            pnlDatos.removeClass("d-none");
            pnlDetalleTrabajo.removeClass("d-none");
            pnlDetalleTrabajo.find(".nav-tabs li").removeClass("active");
            $(pnlDetalleTrabajo.find(".nav-tabs li")[0]).addClass("active");
            pnlDetalleTrabajo.find("#Presupuesto").addClass("active show");
            pnlDetalleTrabajo.find("#Levantamiento").removeClass("active show");
            pnlDetalleTrabajo.find("#Cajeros").removeClass("active show");
            pnlDatos.find("input").not('[type=radio]').val('');
            $("input:radio[name='NuevoEstatusTrabajo']").each(function (i) {
                this.checked = false;
            });
            pnlDatos.find("textarea").val("");
            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            pnlDatos.find('#FolioCliente').focus();
            pnlDetalleTrabajo.find("#Conceptos").html("");
        });
        pnlDatos.find("#Codigoppta_ID").change(function () {
            getCodigoPPTAbyID(pnlDatos.find("#Codigoppta_ID").val(), $(this).val());
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
    });
    IdMovimiento = 0;
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
                {"data": "Fotos"},
                {"data": "Croquis"},
                {"data": "Anexos"},
                {"data": "PCID"},
                {"data": "Editar"}
            ],

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
                    "targets": [12],
                    "visible": false,
                    "searchable": false
                }
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });

    }
    function getRecords() {
        temp = 0;
        HoldOn.open({
            theme: 'sk-cube',
            message: 'CARGANDO...'
        });
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblTrabajos')) {
            tblTrabajos.DataTable().destroy();
        }
        Trabajos = tblTrabajos.DataTable({
            "dom": 'Bfrtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + verMovs,
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
                {"data": "ImporteSinFormato"}//11
            ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [3],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [11],
                    "visible": false,
                    "searchable": false
                }
            ],
            language: lang,
            select: true,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 12,
            "bLengthChange": false,
            "deferRender": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
                $('#Trabajos').removeClass('d-none');
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
            pnlDatos.find(".nav-tabs li").removeClass("active");
            $(pnlDatos.find(".nav-tabs li")[0]).addClass("active");
            pnlDatos.find("#Datos").addClass("active show");
            pnlDatos.find("#Datos2").removeClass("active show");
            pnlDatos.find("#Datos3").removeClass("active show");
            pnlDatos.find("#Datos4").removeClass("active show");
            pnlDatos.find("#Datos5").removeClass("active show");
            pnlDatos.find("#Datos6").removeClass("active show");
            pnlDetalleTrabajo.find(".nav-tabs li").removeClass("active");
            $(pnlDetalleTrabajo.find(".nav-tabs li")[0]).addClass("active");
            pnlDetalleTrabajo.find("#Presupuesto").addClass("active show");
            pnlDetalleTrabajo.find("#Levantamiento").removeClass("active show");
            pnlDetalleTrabajo.find("#CajerosEditar").removeClass("active show");
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
                    console.log('TRABAJO', data, "\n")
                    pnlDatos.find("input").not('[type=radio]').val('');
                    pnlDatos.find("[name='Sucursal_ID']")[0].selectize.clear(true);
                    pnlDatos.find("[name='Sucursal_ID']")[0].selectize.clearOptions();
                    //RadionButtonSelectedValueSet('EstatusTrabajo', trabajo.EstatusTrabajo);
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
                            pnlDatos.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                        }
                    } else {
                        pnlDatos.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }
                    menuTablero.addClass("d-none");
//                    console.log('Estatus: ' + trabajo.Estatus + '-' + trabajo.EstatusTrabajo);
//                    if (trabajo.Estatus === 'Concluido' && trabajo.EstatusTrabajo !== 'Pagado' && trabajo.Estatus !== 'Entregado') {
//                        tBtnEditarConcluir.prop('checked', true);
//                        btnModificar.addClass('d-none');
//                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
//                        btnEliminar.attr("disabled", true);
//                        pnlDetalleTrabajo.find('input, textarea, button, select').attr('disabled', true);
//                        pnlDetalleTrabajo.find("#Conceptos").addClass("disabledDetalle");
//                        pnlDetalleTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
//                        pnlDetalleTrabajo.find("#ConceptosCajero").addClass("disabledDetalle");
//                        pnlDetalleTrabajo.find('table').addClass("disabledDetalle");
//                        $('#tblConceptosXTrabajo tbody tr').addClass("disabledDetalle");
//                    } else if (trabajo.Estatus === 'Entregado' && trabajo.EstatusTrabajo === 'Finalizado') {
//                        tBtnEditarConcluir.prop('checked', true);
//                        btnModificar.addClass('d-none');
//                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
//                        btnEliminar.attr("disabled", true);
//                        pnlDetalleTrabajo.find('input, textarea, button, select').attr('disabled', true);
//                        pnlDetalleTrabajo.find("#Conceptos").addClass("disabledDetalle");
//                        pnlDetalleTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
//                        pnlDetalleTrabajo.find("#ConceptosCajero").addClass("disabledDetalle");
//                        pnlDetalleTrabajo.find('table').addClass("disabledDetalle");
//                        $('#tblConceptosXTrabajo tbody tr').addClass("disabledDetalle");
//                    } else if (trabajo.Estatus === 'Entregado' && trabajo.EstatusTrabajo === 'Pagado') {
//                        if (TipoAcceso === 'SUPER ADMINISTRADOR') {
//                            tBtnEditarConcluir.prop('checked', true);
//                            btnModificar.addClass('d-none');
//                            $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
//                            btnEliminar.attr("disabled", true);
//                            pnlDetalleTrabajo.find('input, textarea, button, select').attr('disabled', true);
//                            pnlDetalleTrabajo.find("#Conceptos").addClass("disabledDetalle");
//                            pnlDetalleTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
//                            pnlDetalleTrabajo.find("#ConceptosCajero").addClass("disabledDetalle");
//                            pnlDetalleTrabajo.find('table').addClass("disabledDetalle");
//                            $('#tblConceptosXTrabajo tbody tr').addClass("disabledDetalle");
//                        } else {
//                            tBtnEditarConcluir.prop('disabled', true);
//                            tBtnEditarConcluir.prop('checked', true);
//                            btnModificar.addClass('d-none');
//                            $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
//                            btnEliminar.attr("disabled", true);
//                            pnlDetalleTrabajo.find('input, textarea, button, select').attr('disabled', true);
//                            pnlDetalleTrabajo.find("#Conceptos").addClass("disabledDetalle");
//                            pnlDetalleTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
//                            pnlDetalleTrabajo.find("#ConceptosCajero").addClass("disabledDetalle");
//                            pnlDetalleTrabajo.find('table').addClass("disabledDetalle");
//                            $('#tblConceptosXTrabajo tbody tr').addClass("disabledDetalle");
//                        }
//                    } else if (trabajo.Estatus === 'Cancelado') {
//                        tBtnEditarConcluir.addClass('d-none');
//                        btnModificar.addClass('d-none');
//                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
//                        btnEliminar.attr("disabled", true);
//                        pnlDetalleTrabajo.find('input, textarea, button, select').attr('disabled', true);
//                        pnlDetalleTrabajo.find("#Conceptos").addClass("disabledDetalle");
//                        pnlDetalleTrabajo.find("#ConceptosAbierto").addClass("disabledDetalle");
//                    } else {
//                        tBtnEditarConcluir.prop('checked', false);
//                        btnModificar.removeClass('d-none');
//                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
//                        btnEliminar.attr("disabled", false);
//                        pnlDetalleTrabajo.find('input, textarea, button, select').attr('disabled', false);
//                        pnlDetalleTrabajo.find("#Conceptos").removeClass("disabledDetalle");
//                        pnlDetalleTrabajo.find("#ConceptosAbierto").removeClass("disabledDetalle");
//                    }
                    //getImporteTotalDelTrabajoByID(trabajo.ID);
                    getTrabajoDetalleByID(trabajo.ID);
//                    getDetalleAbiertoByID(trabajo.ID);
//                    getDetalleCajerosByID(trabajo.ID);
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
        Trabajos.columns().every(function () {
            var that = this;
            $('input,select', this.footer()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

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
                pnlDatos.find("#Dias").val(codigoppta.Dias);
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
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
</style>