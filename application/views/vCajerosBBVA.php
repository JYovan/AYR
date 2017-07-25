<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading"><div class="cursor-hand" >Reportes Cajeros BBVA</div></div>
        <fieldset><div class="col-md-12 dt-buttons" align="right">
                <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
            </div><div class="col-md-12" id="tblRegistros"></div>
        </fieldset></div>
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
<!--Confirmacion Concepto-->
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
<!--Reportes-->
<div id="mdlReportesEditarTrabajo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Imprimir Reportes</h4>
        </div>
        <div class="modal-body">Selecciona el reporte que deseas imprimir
            <div class="col-md-12"><br></div>
            <div id="reportesLevantamiento" class="dt-buttons">
                <button onclick="onReportePresentacionCajeros();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>PRESENTACIÓN</button>
            </div>
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
                    </button>Nuevo Reporte</div>
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
                            <li role="presentation"><a href="#Datos2" aria-controls="Datos2" role="tab" data-toggle="tab">Datos del Reporte</a></li>
                            <li role="presentation"><a href="#Datos3" aria-controls="Datos3" role="tab" data-toggle="tab">Adjuntos</a></li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="Datos">
                            <div class=" col-3 col-md-3">
                                <div class="form-group label-static">
                                    <label for="ID" class="control-label">Mov ID</label>
                                    <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
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
                                    <label for="" class="control-label">Folio Cliente</label>
                                    <input type="text" id="FolioCliente" name="FolioCliente" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Cliente*</label>
                                    <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Sucursal*</label>
                                    <select id="Sucursal_ID" name="Sucursal_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="Observaciones" class="control-label">Observaciones</label>
                                    <textarea class="col-md-12 form-control" id="Observaciones" name="Observaciones" rows="2" ></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 hide">
                                <input type="text" id="Usuario_ID"  name="Usuario_ID"    class="form-control" >
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos2">

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
                                    <input type="text" id="HorarioAtencion" name="HorarioAtencion" class="form-control"  placeholder="" >
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
                        <!-- PANEL DE ARCHVIO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos3">
                            <div class="col-md-12">
                                <label for="" class="control-label">Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</label>
                            </div>
                            <div class="col-md-12" align="center">
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                                <input type="file" id="Adjunto" name="Adjunto" class="hide">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x"></span><br>SELECCIONA EL ARCHIVO
                                </button>
                            </div>

                        </div>
                        <div class="col-6 col-md-12"><br><h6>Los campos con * son obligatorios</h6></div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--PANEL NUEVO DETALLE -->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleNuevoTrabajoAbierto">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row"><div class="col-md-6"><div class="cursor-hand" >Detalle</div></div></div>
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
                    </button>Editar Reporte
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
                        <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                            <li role="presentation" class="active"><a href="#EditarDatos" aria-controls="Datos" role="tab" data-toggle="tab">Datos Generales</a></li>
                            <li role="presentation"><a href="#EditarDatos2" aria-controls="Datos2" role="tab" data-toggle="tab">Datos del Reporte</a></li>
                            <li role="presentation"><a href="#EditarDatos3" aria-controls="Datos3" role="tab" data-toggle="tab">Adjuntos</a></li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="EditarDatos">
                            <div class=" col-3 col-md-3">
                                <div class="form-group label-static">
                                    <label for="ID" class="control-label">Mov ID</label>
                                    <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
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
                                    <label for="" class="control-label">Folio Cliente</label>
                                    <input type="text" id="FolioCliente" name="FolioCliente" class="form-control"  placeholder="" >
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Cliente*</label>
                                    <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Sucursal*</label>
                                    <select id="Sucursal_ID" name="Sucursal_ID" class="form-control" >
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="Observaciones" class="control-label">Observaciones</label>
                                    <textarea class="col-md-12 form-control" id="Observaciones" name="Observaciones" rows="2" ></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 hide">
                                <input type="text" id="Usuario_ID"  name="Usuario_ID"    class="form-control" >
                            </div>
                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos2">

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
                                    <input type="text" id="HorarioAtencion" name="HorarioAtencion" class="form-control"  placeholder="" >
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
                        <!-- PANEL DE ARCHVIO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="EditarDatos3">
                            <div class="col-md-12">
                                <label for="" class="control-label">Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</label>
                            </div>
                            <div class="col-md-12" align="center">
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                                <input type="file" id="Adjunto" name="Adjunto" class="hide">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x"></span><br>SELECCIONA EL ARCHIVO
                                </button>
                            </div>

                        </div>
                        <div class="col-6 col-md-12"><br><h6>Los campos con * son obligatorios</h6></div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--PANEL EDITAR DETALLE ABIERTO -->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleEditarTrabajoAbierto">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row"><div class="col-md-6"><div class="cursor-hand" >Detalle </div></div>
            </div>
        </div>
        <fieldset>
            <div class="col-md-12" align="right"><button type="button" class="btn btn-default" id="btnNuevoConceptoAbiertoEditar"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
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
            <h4 class="modal-title modal-titleFull">Nuevo</h4>
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
            <h4 class="modal-title modal-titleFull">Edición</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmEditarConceptoDetalleAbierto">
                <fieldset>
                    <div class=" hide">frm.append('CajeroBBVA_ID', IdMovimiento);
                        <input type="text" id="ID" name="ID" class="form-control">
                        <input type="text" id="CajeroBBVA_ID" name="CajeroBBVA_ID" class="form-control">
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
            <button type="button" class="btn btn-raised btn-primary" id="btnEditarConceptoAbierto" name="btnEditarConceptoAbierto">MODIFICAR</button>
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
                    <input type="text" readonly="" id="IdCajeroBBVA" name="IdCajeroBBVA"  class="hide">
                    <input type="text" readonly="" id="IdCajeroBBVADetalle" name="IdCajeroBBVADetalle"  class="hide">
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
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlCajerosBBVA/';
    var btnNuevo = $("#btnNuevo");
    var pnlNuevoTrabajo = $("#pnlNuevoTrabajo");
    var pnlDetalleNuevoTrabajoAbierto = $("#pnlDetalleNuevoTrabajoAbierto");
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    var menuTablero = $('#MenuTablero');
    var tBtnConcluir = pnlNuevoTrabajo.find("#Concluir");
    var Archivo = $("#Adjunto");
    var btnArchivo = $("#btnArchivo");
    var VistaPrevia = $("#VistaPrevia");

    var currentDate = new Date();
    /*Modificar*/
    var btnCancelarModificar = $("#btnCancelarModificar");
    var btnModificar = $("#btnModificarTrabajo");
    var pnlEditarTrabajo = $("#pnlEditarTrabajo");
    var ModificarArchivo = pnlEditarTrabajo.find("#Adjunto");
    var btnModificarArchivo = pnlEditarTrabajo.find("#btnArchivo");
    var ModificarVistaPrevia = pnlEditarTrabajo.find("#VistaPrevia");
    var btnEliminar = $("#btnEliminar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    var tBtnEditarConcluir = pnlEditarTrabajo.find("#Concluir");
    var btnImprimirReportesEditarTrabajo = $("#btnImprimirReportesEditarTrabajo");
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    /*Detalle*/
    var btnNuevoConceptoAbierto = pnlDetalleNuevoTrabajoAbierto.find("#btnNuevoConceptoAbierto");
    var pnlDetalleEditarTrabajoAbierto = $('#pnlDetalleEditarTrabajoAbierto');
    var btnNuevoConceptoAbiertoEditar = pnlDetalleEditarTrabajoAbierto.find('#btnNuevoConceptoAbiertoEditar');
    var btnAgregarConceptoAbierto = $('#btnAgregarConceptoAbierto');
    var btnEditarConceptoAbierto = $('#btnEditarConceptoAbierto');
    /*fOTOS*/
    var mdlTrabajoEditarFotosAntesPorConcepto = $("#mdlTrabajoEditarFotosAntesPorConcepto");
    var EditarFotosAntesPorConcepto = mdlTrabajoEditarFotosAntesPorConcepto.find("#fFotos");
    $(document).ready(function () {
        /*Modal de reportes*/
        btnImprimirReportesEditarTrabajo.on("click", function () {
            mdlReportesEditarTrabajo.modal('show');
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
                frm.append('IdCajeroBBVA', mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVA").val());
                frm.append('IdCajeroBBVADetalle', mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVADetalle").val());
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
                    console.log(data);
                    onReloadFotosAntesXConcepto(mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVADetalle").val(), mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVA").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            });
        });
        mdlTrabajoEditarFotosAntesPorConcepto.find('.file_drag_area').on('drop', function (e) {
            e.preventDefault();
            $(this).removeClass('file_drag_over');
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var frm = new FormData();
            frm.append('IdCajeroBBVA', mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVA").val());
            frm.append('IdCajeroBBVADetalle', mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVADetalle").val());
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
                    onReloadFotosAntesXConcepto(mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVADetalle").val(), mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVA").val());
                }).fail(function (x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + files_list[i].name, 'danger');
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
        mdlTrabajoEditarFotosAntesPorConcepto.on('shown.bs.modal', function () {
            EditarFotosAntesPorConcepto.val('');
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
                $('#mdlConfirmarEliminarConceptoAbierto').modal('hide');
                $(evtEliminarConceptoAbierto).parent().parent().remove();
            }).fail(function (x, y, z) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO NO ELIMINADO', 'danger');
            }).always(function () {
                HoldOn.close();
            });
        });
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
                frm.append('CajeroBBVA_ID', IdMovimiento);
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
        btnNuevo.on("click", function () {
            pnlNuevoTrabajo.find(".nav-tabs li").removeClass("active");
            $(pnlNuevoTrabajo.find(".nav-tabs li")[0]).addClass("active");
            pnlNuevoTrabajo.find("#Datos").addClass("active in");
            pnlNuevoTrabajo.find("#Datos2").removeClass("active in");
            pnlNuevoTrabajo.find("#Datos3").removeClass("active in");
            pnlNuevoTrabajo.find("#Datos4").removeClass("active in");
            menuTablero.addClass("hide");
            pnlNuevoTrabajo.removeClass("hide");
            pnlDetalleNuevoTrabajoAbierto.removeClass("hide");
            pnlNuevoTrabajo.find("input").val("");
            pnlNuevoTrabajo.find("textarea").val("");
            pnlNuevoTrabajo.find("select").val(null).trigger("change");
            pnlNuevoTrabajo.find("select").select2("val", "");
            pnlNuevoTrabajo.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlNuevoTrabajo.find("#Atendido").val('No');
            pnlNuevoTrabajo.find("#ImpactoEnPlazo").val('No');
            tBtnConcluir.prop('disabled', true);
            pnlNuevoTrabajo.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");
        });
        btnCancelar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevoTrabajo.addClass("hide");
            pnlDetalleNuevoTrabajoAbierto.addClass("hide");
            getRecords();
        });
        btnCancelarModificar.on("click", function () {
            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarTrabajo.addClass("hide");
            pnlDetalleEditarTrabajoAbierto.addClass("hide");
            getRecords();
        });
        pnlNuevoTrabajo.find("#Cliente_ID").change(function () {
            pnlNuevoTrabajo.find("#Sucursal_ID").val(null).trigger("change");
            getSucursalesbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
        });
        pnlEditarTrabajo.find("#Cliente_ID").change(function () {
            Cliente = this.value;
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
        btnGuardar.on("click", function () {
            $.validator.setDefaults({ignore: []});
            $('#frmNuevo').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    Cliente_ID: 'required',
                    Sucursal_ID: 'required',
                    CentroCostos_ID: 'required'
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
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVO TRABAJO', 'success');
                    despuesDeGuardar(data); /*Funcion que regarga el panel de editar con el nuevo registro*/
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnModificar.on("click", function () {
            $.validator.setDefaults({ignore: []});
            $('#frmEditar').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    Cliente_ID: 'required',
                    Sucursal_ID: 'required',
                    CentroCostos_ID: 'required'
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
                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text('Concluido'.toUpperCase());
                        pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                        pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").addClass("disabledDetalle");
                    } else {
                        btnConfirmarEliminar.attr("disabled", false);
                        $(".spanEditarEstatus").removeClass('label-success').addClass('label-default').text('Borrador'.toUpperCase());
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
        tBtnEditarConcluir.on("click", function () {
            if (!$(this).is(':checked')) {
                $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                btnConfirmarEliminar.attr("disabled", false);
                btnModificar.removeClass('hide');
            }
        });
        btnNuevoConceptoAbierto.on("click", function () {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES GUARDAR EL MOVIMIENTO', 'danger');
        });
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
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'REPORTE ELIMINADO', 'danger');
                menuTablero.addClass("animated slideInLeft").removeClass("hide");
                pnlEditarTrabajo.addClass("hide");
                pnlDetalleEditarTrabajoAbierto.addClass("hide");
                getRecords();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        getRecords();
        getClientes();
        getCC();
    });
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
    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");
        $('#Adjunto').trigger('blur');
        $('#Adjunto').on('blur', function (e) {
            $('#Adjunto').val('');
        });
    }
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
                $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
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
                if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
                    HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
                    $.ajax({
                        url: master_url + 'getCajeroBBVAByID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: IdMovimiento
                        }
                    }).done(function (data, x, jq) {
                        menuTablero.addClass("hide");
                        pnlEditarTrabajo.removeClass("hide");
                        pnlDetalleEditarTrabajoAbierto.removeClass("hide");
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
                        pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                        pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                        pnlEditarTrabajo.find("#Cliente_ID").select2("val", trabajo.Cliente_ID);
                        pnlEditarTrabajo.find("#CentroCostos_ID").select2("val", trabajo.CentroCostos_ID);
                        pnlEditarTrabajo.find("#FolioCliente").val(trabajo.FolioCliente);
                        pnlEditarTrabajo.find("#Observaciones").val(trabajo.Observaciones);
                        pnlEditarTrabajo.find("#FechaVisita").val(trabajo.FechaVisita);
                        pnlEditarTrabajo.find("#EncargadoSitio").val(trabajo.EncargadoSitio);
                        pnlEditarTrabajo.find("#HorarioAtencion").val(trabajo.HorarioAtencion);
                        pnlEditarTrabajo.find("#TipoPiso").val(trabajo.TipoPiso);
                        pnlEditarTrabajo.find("#PruebaCalaFirme").val(trabajo.PruebaCalaFirme);
                        pnlEditarTrabajo.find("#Usuario_ID").val(trabajo.Usuario_ID);
                        pnlEditarTrabajo.find("#RestriccionAcceso").select2("val", trabajo.RestriccionAcceso);
                        pnlEditarTrabajo.find("#AireAcondicionado").select2("val", trabajo.AireAcondicionado);
                        pnlEditarTrabajo.find("#Carcasa").select2("val", trabajo.Carcasa);
                        pnlEditarTrabajo.find("#UPS").select2("val", trabajo.UPS);
                        pnlEditarTrabajo.find("#SenalizacionInterior").select2("val", trabajo.SenalizacionInterior);
                        pnlEditarTrabajo.find("#SenalizacionExterior").select2("val", trabajo.SenalizacionExterior);
                        pnlEditarTrabajo.find("#CanalizacionDatos").select2("val", trabajo.CanalizacionDatos);
                        pnlEditarTrabajo.find("#CanalizacionSeguridad").select2("val", trabajo.CanalizacionSeguridad);
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
                        if (trabajo.Estatus === 'Concluido') {
                            $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(trabajo.Estatus.toUpperCase());
                            tBtnEditarConcluir.prop('checked', true);
                            btnModificar.addClass('hide');
                            $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                            btnConfirmarEliminar.attr("disabled", true);
                            pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                            pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").addClass("disabledDetalle");
                        } else if (trabajo.Estatus === 'Cancelado') {
                            $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(trabajo.Estatus.toUpperCase());
                            tBtnEditarConcluir.addClass('hide');
                            btnModificar.addClass('hide');
                            $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                            btnConfirmarEliminar.attr("disabled", true);
                            pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                            pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").addClass("disabledDetalle");
                        } else {
                            $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(trabajo.Estatus.toUpperCase());
                            tBtnEditarConcluir.prop('checked', false);
                            btnModificar.removeClass('hide');
                            $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                            btnConfirmarEliminar.attr("disabled", false);
                            pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', false);
                            pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").removeClass("disabledDetalle");
                        }
                        getDetalleAbiertoByID(trabajo.ID);
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
    function despuesDeGuardar(IDTrabajo) {
        IdMovimiento = IDTrabajo;
        pnlNuevoTrabajo.addClass("hide");
        pnlDetalleNuevoTrabajoAbierto.addClass("hide");
        pnlEditarTrabajo.find(".nav-tabs li").removeClass("active");
        $(pnlEditarTrabajo.find(".nav-tabs li")[0]).addClass("active");
        pnlEditarTrabajo.find("#EditarDatos").addClass("active in");
        pnlEditarTrabajo.find("#EditarDatos2").removeClass("active in");
        pnlEditarTrabajo.find("#EditarDatos3").removeClass("active in");
        if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            $.ajax({
                url: master_url + 'getCajeroBBVAByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdMovimiento
                }
            }).done(function (data, x, jq) {
                menuTablero.addClass("hide");
                pnlEditarTrabajo.removeClass("hide");
                pnlDetalleEditarTrabajoAbierto.removeClass("hide");
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
                pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                pnlEditarTrabajo.find("#Cliente_ID").select2("val", trabajo.Cliente_ID);
                pnlEditarTrabajo.find("#CentroCostos_ID").select2("val", trabajo.CentroCostos_ID);
                pnlEditarTrabajo.find("#FolioCliente").val(trabajo.FolioCliente);
                pnlEditarTrabajo.find("#Observaciones").val(trabajo.Observaciones);
                pnlEditarTrabajo.find("#FechaVisita").val(trabajo.FechaVisita);
                pnlEditarTrabajo.find("#EncargadoSitio").val(trabajo.EncargadoSitio);
                pnlEditarTrabajo.find("#HorarioAtencion").val(trabajo.HorarioAtencion);
                pnlEditarTrabajo.find("#TipoPiso").val(trabajo.TipoPiso);
                pnlEditarTrabajo.find("#PruebaCalaFirme").val(trabajo.PruebaCalaFirme);
                pnlEditarTrabajo.find("#Usuario_ID").val(trabajo.Usuario_ID);
                pnlEditarTrabajo.find("#RestriccionAcceso").select2("val", trabajo.RestriccionAcceso);
                pnlEditarTrabajo.find("#AireAcondicionado").select2("val", trabajo.AireAcondicionado);
                pnlEditarTrabajo.find("#Carcasa").select2("val", trabajo.Carcasa);
                pnlEditarTrabajo.find("#UPS").select2("val", trabajo.UPS);
                pnlEditarTrabajo.find("#SenalizacionInterior").select2("val", trabajo.SenalizacionInterior);
                pnlEditarTrabajo.find("#SenalizacionExterior").select2("val", trabajo.SenalizacionExterior);
                pnlEditarTrabajo.find("#CanalizacionDatos").select2("val", trabajo.CanalizacionDatos);
                pnlEditarTrabajo.find("#CanalizacionSeguridad").select2("val", trabajo.CanalizacionSeguridad);
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
                if (trabajo.Estatus === 'Concluido') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(trabajo.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', true);
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    btnConfirmarEliminar.attr("disabled", true);
                    pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").addClass("disabledDetalle");
                } else if (trabajo.Estatus === 'Cancelado') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(trabajo.Estatus.toUpperCase());
                    tBtnEditarConcluir.addClass('hide');
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    btnConfirmarEliminar.attr("disabled", true);
                    pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").addClass("disabledDetalle");
                } else {
                    $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(trabajo.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', false);
                    btnModificar.removeClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                    btnConfirmarEliminar.attr("disabled", false);
                    pnlDetalleEditarTrabajoAbierto.find('input, textarea, button, select').attr('disabled', false);
                    pnlDetalleEditarTrabajoAbierto.find("#ConceptosAbierto").removeClass("disabledDetalle");
                }
                getDetalleAbiertoByID(IdMovimiento);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }
    var tempDetalleAbierto = 0;
    function getDetalleAbiertoByID(IDX) {
        $.ajax({
            url: master_url + 'getTrabajoDetalleAbiertoByID',
            type: "POST",
            dataType: "JSON",
            data: {ID: IDX}
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
                HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
                $.ajax({
                    url: master_url + 'getDetalleAbiertoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {ID: IDX}
                }).done(function (data, x, jq) {
                    $('#mdlEditarConceptoAbierto').find("input").val("");
                    var concepto = data[0];
                    $('#mdlEditarConceptoAbierto').find("#ID").val(concepto.ID);
                    $('#mdlEditarConceptoAbierto').find("#CajeroBBVA_ID").val(concepto.CajeroBBVA_ID);
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
    IdEliminarConceptoAbierto = 0;
    evtEliminarConceptoAbierto = '';
    function onEliminarConceptoXDetalleAbierto(evt, IDX) {
        IdEliminarConceptoAbierto = IDX;
        evtEliminarConceptoAbierto = evt;
        $('#mdlConfirmarEliminarConceptoAbierto').modal('show');
    }
    function getFotosAntesXConceptoID(IDX, IDT) {
        mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVA").addClass("hide").val(IDT);
        mdlTrabajoEditarFotosAntesPorConcepto.find("#IdCajeroBBVADetalle").addClass("hide").val(IDX);
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
                    picthumbnail += '<div class="col-md-3">'+
                            '<div class="thumbnail">' +
                            
                            '<div class="pull-left caption col-md-11 Customcaption" >'+
                            '<div class="form-group Customform-group">'+
                            '<label for="ObservacionesxFoto" class="control-label customFormLabel">Observaciones</label>'+
                            '<input id="ObservacionesxFoto" name="ObservacionesxFoto" type="text" class="form-control"  onchange="onModificarObservaciones(' + v.ID + ',' + v.IdCajeroBBVADetalle + ',this)"  value="' + v.Observaciones + '"></input>'+
                            '</div>'+
                            '</div>' +
                            
                            '<div class="pull-right" >' +
                            '<button class="close closeFotos customButtonEliminarFoto"' +
                            'data-tooltip="Eliminar" onclick="onEliminarFotoAntesXConcepto(' + v.ID + ',' + v.IdCajeroBBVADetalle + ',' + IDT + ')">×</button>'+
                            '</div>' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="100%" ></a>'+
                            '</div>'+
                            '</div>';
                    mdlTrabajoEditarFotosAntesPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarFotosAntesPorConcepto.modal('show');
    }
    function setFotosAntesEditar(evt) {
        mdlTrabajoEditarFotosAntesPorConcepto.find("#fFotos").trigger('click');
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
                            'data-tooltip="Eliminar" onclick="onEliminarFotoAntesXConcepto(' + v.ID + ',' + v.IdCajeroBBVADetalle + ',' + IDT + ')">×</button></div>' +
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
    function onModificarObservaciones(IDX, IDTD, IDT){
        var Observaciones=IDT.value;
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
    /*Reportes*/
    function onReportePresentacionCajeros() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onReporteLevantamientoAntes',
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
</script>
