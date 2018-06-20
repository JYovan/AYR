<!--MODAL AGREGAR CONCEPTO ABIERTO-->
<div id="mdlAgregarConceptoAbierto" class="modal modalFull fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull  modal-content  modal-contentFull  modal-lg">
        <div class="modal-header">
            <h5 class="modal-title">Agregar Concepto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmAgregarConceptoDetalleAbierto">
                <fieldset>
                    <div class=" d-none"><input type="text" id="ID" name="ID" class="form-control form-control-sm"></div>
                    <div class="col-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Clave*</label>
                            <input type="text" id="Clave" name="Clave" class="form-control form-control-sm" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Semana/Dia*</label>
                            <input type="number" id="SemanaDia" name="SemanaDia" class="form-control form-control-sm" required="" placeholder="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción (Actividades Ejecutadas)*</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div id="CamposMeor" class="d-none">

                        <div class="col-3">
                            <div class="form-group label-static">
                                <label for="Clave" class="control-label">Inicio/Fin*</label>
                                <input type="text" id="InicioFin" name="InicioFin" class="form-control form-control-sm"placeholder="EJ: 01 de Enero Al 07 Enero">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group label-static">
                                <label for="Clave" class="control-label">Inicio/Fin Proxima Semana*</label>
                                <input type="text" id="InicioFinProximaSemana" name="InicioFinProximaSemana" class="form-control form-control-sm"  placeholder="EJ: 07 de Enero Al 14 Enero">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group label-static">
                                <label for="Descripcion2" class="control-label">(Actividades Próxima Semana)</label>
                                <textarea type="text" id="Descripcion2" name="Descripcion2" class="form-control CustomUppercase"  placeholder=" " rows="3" cols="20"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group label-static">
                                <label for="Descripcion3" class="control-label">Restricciones/Preocupaciones</label>
                                <textarea type="text" id="Descripcion3" name="Descripcion3" class="form-control CustomUppercase" placeholder=" " rows="3" cols="20"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-12"><br><h6>Los campos con * son obligatorios</h6></div>
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
        <div class="modal-header">
            <h5 class="modal-title">Editar Concepto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmEditarConceptoDetalleAbierto">
                <fieldset>
                    <div class=" d-none">
                        <input type="text" id="ID" name="ID" class="form-control form-control-sm">
                        <input type="text" id="Trabajo_ID" name="Trabajo_ID" class="form-control form-control-sm">
                    </div>
                    <div class="col-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Clave*</label>
                            <input type="text" id="Clave" name="Clave" class="form-control form-control-sm" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Semana/Dia*</label>
                            <input type="number" id="SemanaDia" name="SemanaDia" class="form-control form-control-sm" required="" placeholder="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción (Actividades Ejecutadas)*</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div id="CamposMeorEditar" class="d-none">
                        <div class="col-3">
                            <div class="form-group label-static">
                                <label for="Clave" class="control-label">Inicio/Fin*</label>
                                <input type="text" id="InicioFin" name="InicioFin" class="form-control form-control-sm"placeholder="EJ: 01 de Enero Al 07 Enero">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group label-static">
                                <label for="Clave" class="control-label">Inicio/Fin Proxima Semana*</label>
                                <input type="text" id="InicioFinProximaSemana" name="InicioFinProximaSemana" class="form-control form-control-sm"  placeholder="EJ: 07 de Enero Al 14 Enero">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group label-static">
                                <label for="Descripcion2" class="control-label">(Actividades Próxima Semana)</label>
                                <textarea type="text" id="Descripcion2" name="Descripcion2" class="form-control CustomUppercase"  placeholder=" " rows="3" cols="20"></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group label-static">
                                <label for="Descripcion3" class="control-label">Restricciones/Preocupaciones</label>
                                <textarea type="text" id="Descripcion3" name="Descripcion3" class="form-control CustomUppercase" placeholder=" " rows="3" cols="20"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-12"><br><h6>Los campos con * son obligatorios</h6></div>
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
        <div class="modal-header">
            <h5 class="modal-title">Nuevo Concepto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmAgregarConceptoDetalleCajero">
                <fieldset>
                    <div class=" d-none"><input type="text" id="ID" name="ID" class="form-control form-control-sm"></div>
                    <div class="col-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Clave*</label>
                            <input type="text" id="Clave" name="Clave" class="form-control form-control-sm" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción*</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div class="col-6 col-6"><br><h6>Los campos con * son obligatorios</h6></div>
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
        <div class="modal-header">
            <h5 class="modal-title">Edición</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmEditarConceptoDetalleCajero">
                <fieldset>
                    <div class=" d-none">
                        <input type="text" id="ID" name="ID" class="form-control form-control-sm">
                        <input type="text" id="Trabajo_ID" name="Trabajo_ID" class="form-control form-control-sm">
                    </div>
                    <div class="col-3">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Clave*</label>
                            <input type="text" id="Clave" name="Clave" class="form-control form-control-sm" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción*</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20"></textarea>
                        </div>
                    </div>
                    <div class="col-6 col-6"><br><h6>Los campos con * son obligatorios</h6></div>
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
            <div class="modal-header">
                <h5 class="modal-title">Fotos cajero</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="d-none">
                    <input type="text" readonly="" id="IdCajeroBBVADetalle" name="IdCajeroBBVADetalle"  class="d-none">
                    <input type="file" accept='image/*' id="fFotosCajero" name="fFotosCajero[]" multiple="" class="d-none">
                    <div class="col-12" id="" align="center"  onclick="setFotosCajeroEditar(this)">
                        <div class="file_drag_area"><p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>
                    </div>
                    <div class="col-12"><br><br></div>
                    <div class="col-12 row" id="Fotos"></div>
                </fieldset>
            </div>
            <div class="modal-footer modal-footerFull">
                <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">TERMINAR</button>
            </div>
        </div>
    </div>
</div>
<!--MODAL DETALLE - EDITAR GENERADOR POR CONCEPTO--><div id="mdlTrabajoEditarGeneradorPorConcepto" class="modal modalFull  fade ">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header">
                <h5 class="modal-title">Generador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-bodyFull">
                <ul class="nav nav-tabs" style="">
                    <li class="active"><a href="#EditarGeneradores" data-toggle="tab">Generador</a></li>
                    <li><a href="#EditarGenerador" data-toggle="tab">Agregar</a></li>
                </ul>
                <div id="pnlGenerador" class="tab-content">
                    <div class="tab-pane fade active show" id="EditarGeneradores">
                        <fieldset>
                            <div class="col-12" id="tblEditarGeneradorXConcepto"></div>
                            <div id="GeneradorImporteTotal" class="col-12" align="right"><span class="text-success spanTotalesDetalle">0.0</span></div>
                        </fieldset>
                    </div>
                    <div class="tab-pane fade" id="EditarGenerador">
                        <div class="col-12 d-none">
                            <input type="text" id="IDT" name="IDT" class="form-control ">
                            <input type="text" id="IDG" name="IDG" class="form-control form-control-sm">
                            <input type="text" id="Concepto_ID" name="Concepto_ID" class="form-control ">
                            <input type="text" id="IdTrabajoDetalle" name="IdTrabajoDetalle" class="form-control ">
                            <input type="text" id="Precio" name="Precio" class="form-control form-control-sm">
                            <input type="text" id="TipoCambioGenerador" name="TipoCambio" class="form-control form-control-sm">
                        </div>
                        <div class="col-3">
                            <div class="form-group label-static">
                                <label for="Area" class="control-label">Area</label>
                                <input type="text" id="Area" name="Area" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group label-static">
                                <label for="EstimacionNo" class="control-label">No. Estimación</label>
                                <input type="number" id="EstimacionNo" name="EstimacionNo" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group label-static">
                                <label for="Eje" class="control-label">Eje</label>
                                <input type="text" id="Eje" name="Eje" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group label-static">
                                <label for="EntreEje1" class="control-label">Entre Eje 1</label>
                                <input type="text" id="EntreEje1" name="EntreEje1" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group label-static">
                                <label for="EntreEje2" class="control-label">Entre Eje 2</label>
                                <input type="text" id="EntreEje2" name="EntreEje2" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group label-static">
                                <label for="Largo" class="control-label">Largo</label>
                                <input type="number" id="Largo" min="0" name="Largo" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group label-static">
                                <label for="Ancho" class="control-label">Ancho</label>
                                <input type="number" id="Ancho" min="0" name="Ancho" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group label-static">
                                <label for="Alto" class="control-label">Alto</label>
                                <input type="number" id="Alto" min="0" name="Alto" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group label-static">
                                <label for="Cantidad" class="control-label">Cantidad</label>
                                <input type="number" id="Cantidad" min="0" name="Cantidad" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="modal-footer modal-footerFull">
                            <button type="button" class="btn btn-raised btn-primary d-none" id="btnModificar" onclick="">MODIFICAR</button>
                            <button type="button" class="btn btn-raised btn-default d-none" id="btnCancelar" onclick="onCancelarEditarModificarGeneradorXID(this);">CANCELAR</button>
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
<!--MODAL EDITAR - VER FOTOS ANTES ADJUNTAS-->
<div id="mdlTrabajoEditarFotosAntesPorConcepto" class="modal modalFull animated bounceInDown">
    <div class="modal-dialog modal-dialogFull">
        <div class="modal-content modal-contentFull">
            <div class="modal-header">
                <h5 class="modal-title">Fotos Antes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="d-none">
                    <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="d-none">
                    <input type="file" accept='image/*' id="fFotos" name="fFotos[]" multiple="" class="d-none">
                    <div class="col-12" id="" align="center"  onclick="setFotosAntesEditar(this)">
                        <div class="file_drag_area"><p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>
                    </div>
                    <div class="col-12"><br><br></div>
                    <div class="col-12 row" id="Fotos"></div>
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
            <div class="modal-header">
                <h5 class="modal-title">Fotos Después</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="d-none">
                    <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="d-none">
                    <input type="file" accept='image/*' id="fFotos" name="fFotos[]" multiple="" class="d-none">
                    <div class="col-12" id="" align="center"  onclick="setFotosDespuesEditar(this)">
                        <div class="file_drag_area"> <p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>
                    </div>
                    <div class="col-12"><br><br></div>
                    <div class="col-12 row" id="Fotos"></div>
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
            <div class="modal-header">
                <h5 class="modal-title">Fotos Proceso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="d-none">
                    <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="d-none">
                    <input type="file" accept='image/*' id="fFotos" name="fFotos[]" multiple="" class="d-none">
                    <div class="col-6">
                        <label class="Tiempo" for="">Debe de elegir un control de tiempo*</label>
                        <input type="number" maxlength="3" minlength="1"  onkeyup="this.value = minmax(this.value, 0, 150)" id="IdTiempoProceso" name="IdTiempoProceso" class="form-control form-control-sm">
                    </div>
                    <div class="col-6">
                        <label for="" class="control-label">Porcentaje*</label>
                        <input type="text" maxlength="3" minlength="1"  onkeyup="this.value = minmax(this.value, 0, 100)" id="IdPorcentajeProceso" name="IdPorcentajeProceso" class="form-control numbersOnly">
                    </div>
                    <div class="col-12 d-none" id="idSubirFotosProceso" align="center"  onclick="setFotosProcesoEditar(this)">
                        <div class="file_drag_area"><p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>
                    </div>
                    <div class="col-12"><br><br></div>
                    <div class="col-12 row" id="Fotos"></div>
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
            <div class="modal-header">
                <h5 class="modal-title">Anexos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-bodyFull">
                <fieldset>
                    <div class="col-12"><br></div>
                    <div class="col-12 d-none">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control form-control-sm">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control form-control-sm">
                        <input type="file" id="fAnexos" name="fAnexos[]" multiple="" class="d-none">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="col-12" id="" align="center"  onclick="setAnexosDosEditar(this)">
                        <div class="file_drag_area"><p></p><p> Arrastre aquí los archivos a subir </p><p>ó </p><p>click para seleccionarlos</p>
                        </div>
                    </div>
                    <div class="col-12"><br><br></div>
                    <div class="col-12" id="Anexos"></div>
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
    var tbtnEditarImpactoEnPlazo = pnlDatos.find("#EditarImpactoEnPlazo");
    var tbtnNuevoImpactoEnPlazo = pnlDatos.find("#NuevoImpactoEnPlazo");
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
    var btnImprimirReportesEditarTrabajo = $("#btnImprimirReportesEditarTrabajo");
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    var nuevo = false;
    $(document).ready(function () {
        //RadionButtonSelectedValueSet('NuevoEstatusTrabajo', 'Presupuesto');
        $("#IdTiempoProceso").change(function () {
            if ($('#IdTiempoProceso').val() !== '' && $('#IdPorcentajeProceso').val() !== '') {
                $('#idSubirFotosProceso').removeClass('d-none');
            } else {
                $('#idSubirFotosProceso').addClass('d-none');
            }
        });
        $("#IdPorcentajeProceso").change(function () {
            if ($('#IdPorcentajeProceso').val() !== '') {
                $('#IdPorcentajeProceso').val($('#IdPorcentajeProceso').val() + '%');
            }
            if ($('#IdTiempoProceso').val() !== '' && $('#IdPorcentajeProceso').val() !== '') {
                $('#idSubirFotosProceso').removeClass('d-none');
            } else {
                $('#idSubirFotosProceso').addClass('d-none');
            }
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
                $("#CamposMeor").removeClass("d-none");
            } else {
                $("#CamposMeor").addClass("d-none");
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

        /*CARGA DE ARCHIVOS DETALLE DRAG AND DROP*/
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
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
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
        EditarFotosAntesPorConcepto.change(function () {
            HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
            var img = "";
            var nimg = 0;
            $.each(EditarFotosAntesPorConcepto[0].files, function (k, file) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
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
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
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
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
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
                    img += '<div class="col-12" align="center"><br><hr><br></div>';
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
                        mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active show");
                        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
                        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active show");
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

    });
    IdMovimiento = 0;
    function onEliminarConceptoXDetalleAbierto(evt, IDX) {
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
                    getDetalleAbiertoByID(IdMovimiento)
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
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
                    '<th class="d-none">IDT</th>' +
                    '<th class="d-none">IDG</th>' +
                    '<th class="d-none">Concepto_ID</th>' +
                    '<th></th>' +
                    '<th class="col-3">Area</th>' +
                    '<th class="col-3">Estimación</th>' +
                    '<th class="d-none">Eje</th>' +
                    '<th class="d-none">Entre Eje 1</th>' +
                    '<th class="d-none">Entre Eje 2</th>' +
                    '<th >Largo</th>' +
                    '<th>Ancho</th>' +
                    '<th>Alto</th>' +
                    '<th>Cantidad</th>' +
                    '<th>Total</th>' +
                    '<th></th>' +
                    '<th class="d-none">Estatus</th>' +
                    '<th class="d-none">Precio</th>' +
                    '</tr>' +
                    '</thead>' +
                    '<tbody>';
            $.each(data, function (k, v) {
                tblGeneradoresDetalleXConcepto += "<tr>";
                tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
                tblGeneradoresDetalleXConcepto += v.TRABAJOID;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*RENGLON*/
                tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
                tblGeneradoresDetalleXConcepto += v.ID;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*CONCEPTO_ID*/
                tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
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
                tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
                tblGeneradoresDetalleXConcepto += v.Eje;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*EntreEje1*/
                tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
                tblGeneradoresDetalleXConcepto += v.EntreEje1;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*EntreEje2*/
                tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
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
                tblGeneradoresDetalleXConcepto += "<td class=\"d-none\">ACTIVO</td>";
                tblGeneradoresDetalleXConcepto += "<td class=\"d-none\">" + v.Precio + "</td>";
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
                        pnlDetalleTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle"> ' + dtm.IMPORTE_TOTAL_TRABAJO + '</span>');
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
            mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val(IDT); /*ID DEL TRABAJO*/
            mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val(IDTD); /*ID DEL TRABAJODETALLE*/
            mdlTrabajoEditarGeneradorPorConcepto.find("#Concepto_ID").val(IDCO); /*ID DEL CONCEPTO*/
            mdlTrabajoEditarGeneradorPorConcepto.find("#TipoCambioGenerador").val(TipoCambio); /*Tipo Cambio*/
            var precio = 0;
            var cantidadTotal = 0;
            /*CREAR TABLA DE GENERADORES*/
            var tblGeneradoresDetalleXConcepto = '<br><table  id="tblGeneradoresDetalleXConcepto" class="table table-striped table-hover" width="100%">' +
                    '<thead>' +
                    '<tr>' +
                    '<th class="d-none">IDT</th>' +
                    '<th class="d-none">IDG</th>' +
                    '<th class="d-none">Concepto_ID</th>' +
                    '<th></th>' +
                    '<th class="col-3">Area</th>' +
                    '<th class="col-3">Estimación</th>' +
                    '<th class="d-none">Eje</th>' +
                    '<th class="d-none">Entre Eje 1</th>' +
                    '<th class="d-none">Entre Eje 2</th>' +
                    '<th class="col-1">Largo</th>' +
                    '<th>Ancho</th>' +
                    '<th>Alto</th>' +
                    '<th>Cantidad</th>' +
                    '<th>Total</th>' +
                    '<th></th>' +
                    '<th class="d-none">Estatus</th>' +
                    '<th class="d-none">Precio</th>' +
                    '</tr>' +
                    '</thead>' +
                    '<tbody>';
            if (data.length > 0) {
                $.each(data, function (k, v) {
                    tblGeneradoresDetalleXConcepto += "<tr>";
                    tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
                    tblGeneradoresDetalleXConcepto += v.TRABAJOID;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*RENGLON*/
                    tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
                    tblGeneradoresDetalleXConcepto += v.ID;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*CONCEPTO_ID*/
                    tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
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
                    tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
                    tblGeneradoresDetalleXConcepto += v.Eje;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*EntreEje1*/
                    tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
                    tblGeneradoresDetalleXConcepto += v.EntreEje1;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*EntreEje2*/
                    tblGeneradoresDetalleXConcepto += "<td class='d-none'>";
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
                    tblGeneradoresDetalleXConcepto += "<td class=\"d-none\">ACTIVO</td>";
                    tblGeneradoresDetalleXConcepto += "<td class=\"d-none\">" + v.Precio + "</td>";
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
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar").addClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador").addClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active show");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(1).addClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGenerador").addClass("active show");
        btnCancelarEditarGenerador.removeClass("d-none");
        btnMoficarEditarGenerador.removeClass("d-none");
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
                mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active show");
                mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
                mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
                mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active show");
                mdlTrabajoEditarGeneradorPorConcepto.find("#IDG").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Area").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Eje").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje1").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#EntreEje2").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Largo").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Ancho").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Alto").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#Cantidad").val("");
                mdlTrabajoEditarGeneradorPorConcepto.find("#btnModificar").addClass("d-none");
                mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelar").addClass("d-none");
                mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar").removeClass("d-none");
                mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador").removeClass("d-none");
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
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar").removeClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador").removeClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnModificar").addClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelar").addClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active show");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active show");
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
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar").removeClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador").removeClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnModificar").addClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelar").addClass("d-none");
        mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active show");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
        mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active show");
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
    /*Multimedia*/
    function getFotosAntesXConceptoID(IDX, IDT) {
        mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajo").addClass("d-none").val(IDT);
        mdlTrabajoEditarFotosAntesPorConcepto.find("#IdTrabajoDetalle").addClass("d-none").val(IDX);
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
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-11" >' + v.Observaciones + '</div>' +
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
        mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajo").addClass("d-none").val(IDT);
        mdlTrabajoEditarFotosDespuesPorConcepto.find("#IdTrabajoDetalle").addClass("d-none").val(IDX);
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
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-11" >' + v.Observaciones + '</div>' +
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
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajo").addClass("d-none").val(IDT);
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTrabajoDetalle").addClass("d-none").val(IDX);
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
                if (pnlDatos.find("[name='ControlProceso']").val() === 'Dias') {
                    TextoAgrupador = 'Día No. ';
                } else if (pnlDatos.find("[name='ControlProceso']").val() === 'Semanas') {
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
                    row += '<div class="col-12" align="center"><h4>' + TextoAgrupador + tu + ' Avance: ' + porcentajes_unicos[index] + ' </h4><hr></div>';
                    $.each(data, function (k, d) {
                        if (tu === d.Tiempo) {
                            row += '<div class="col-3">' +
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
                mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("<fieldset>" + row + "</fieldset>");
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdTiempoProceso").val('');
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#IdPorcentajeProceso").val('');
        $('#idSubirFotosProceso').addClass('d-none');
        if ($("[name='ControlProceso']").val() === 'Dias') {
            $(".Tiempo").empty();
            $(".Tiempo").append("No. Día*");
            mdlTrabajoEditarFotosProcesoPorConcepto.modal('show');
        } else if ($("[name='ControlProceso']").val() === 'Semanas') {
            $(".Tiempo").empty();
            $(".Tiempo").append("No. Semana*");
            mdlTrabajoEditarFotosProcesoPorConcepto.modal('show');
        } else if ($("[name='ControlProceso']").val() === '') {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBELES DE SELECCIONAR UN CONTROL DE TIEMPO', 'danger');
        }
    }
    function getAnexosDosXConceptoID(IDX, IDT) {
        mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajo").addClass("d-none").val(IDT);
        mdlTrabajoEditarAnexosDosPorConcepto.find("#IdTrabajoDetalle").addClass("d-none").val(IDX);
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
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text-o fa-4x"></span><br>' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
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
    function setFotosAntesEditar(evt) {
        mdlTrabajoEditarFotosAntesPorConcepto.find("#fFotos").trigger('click');
    }
    function setFotosDespuesEditar(evt) {
        mdlTrabajoEditarFotosDespuesPorConcepto.find("#fFotos").trigger('click');
    }
    function setFotosProcesoEditar(evt) {
        mdlTrabajoEditarFotosProcesoPorConcepto.find("#fFotos").trigger('click');
    }
    function setAnexosDosEditar(evt) {
        mdlTrabajoEditarAnexosDosPorConcepto.find("#fAnexos").trigger('click');
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
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-11" >' + v.Observaciones + '</div>' +
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
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-3"><div class="thumbnail">' +
                            '<div class="pull-left caption col-11" >' + v.Observaciones + '</div>' +
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
                if (pnlDatos.find("[name='ControlProceso']").val() === 'Dias') {
                    TextoAgrupador = 'Día No. ';
                } else if (pnlDatos.find("[name='ControlProceso']").val() === 'Semanas') {
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
                    row += '<div class="col-12" align="center"><h4>' + TextoAgrupador + tu + ' Avance: ' + porcentajes_unicos[index] + ' </h4><hr></div>';
                    $.each(data, function (k, d) {
                        if (tu === d.Tiempo) {
                            row += '<div class="col-3">' +
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
                mdlTrabajoEditarFotosProcesoPorConcepto.find("#Fotos").html("<fieldset>" + row + "</fieldset>");
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
            mdlTrabajoEditarAnexosDosPorConcepto.find("fieldset").find("div#Anexos").html("");
            if (data.length > 0) {
                $.each(data, function (k, v) {
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
                    if (ext === "txt" || ext === "dat") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-text-o fa-4x"></span><br>' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "zip" || ext === "rar") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-zip-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "mp4" || ext === "flv") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-video-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "doc" || ext === "docx") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-word-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "xls" || ext === "xlsx" || ext === "csv") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-excel-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-image fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else
                    if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file-pdf-o fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
                    } else {
                        mdlTrabajoEditarAnexosDosPorConcepto.find("#Anexos").append('<div class="col-2" align="center"><a href="' + url_file + '" target="_blank"><span class="fa fa-file fa-4x"></span><br> ' + v.Observaciones + '</a><br> <button type="button" class="btn btn-danger" onclick="onEliminarAnexoDosXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
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
        mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdTrabajo").addClass("d-none").val(IDT);
        mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#IdCajeroBBVADetalle").addClass("d-none").val(IDX);
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
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-3">' +
                            '<div class="thumbnail">' +
                            '<div class="pull-left caption col-11 Customcaption" >' +
                            '<div class="form-group Customform-group">' +
                            '<label for="ObservacionesxFoto" class="control-label customFormLabel">Observaciones</label>' +
                            '<input id="ObservacionesxFoto" name="ObservacionesxFoto" type="text" class="form-control form-control-sm"  onchange="onModificarObservaciones(' + v.ID + ',' + v.IdCajeroBBVADetalle + ',this)"  value="' + v.Observaciones + '"></input>' +
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
                        picthumbnail += '<div class="col-12" align="center"></div>';
                        nimg = 0;
                    }
                    picthumbnail += '<div class="col-3">' +
                            '<div class="thumbnail">' +
                            '<div class="pull-left caption col-11 Customcaption" >' +
                            '<div class="form-group Customform-group">' +
                            '<label for="ObservacionesxFoto" class="control-label customFormLabel">Observaciones</label>' +
                            '<input id="ObservacionesxFoto" name="ObservacionesxFoto" type="text" class="form-control form-control-sm"  onchange="onModificarObservaciones(' + v.ID + ',' + v.IdCajeroBBVADetalle + ',this)"  value="' + v.Observaciones + '"></input>' +
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
                pnlDetalleTrabajo.find("#ConceptosAbierto").html(getTable('tblTrabajosXDetalleAbierto', data));
                var thead = pnlDetalleTrabajo.find('#tblTrabajosXDetalleAbierto thead th');
                var tfoot = pnlDetalleTrabajo.find('#tblTrabajosXDetalleAbierto tfoot th');
                thead.eq(0).addClass("d-none");
                tfoot.eq(0).addClass("d-none");
                $.each(pnlDetalleTrabajo.find('#tblTrabajosXDetalleAbierto tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("d-none");
                });
                var tblSelected = pnlDetalleTrabajo.find('#tblTrabajosXDetalleAbierto').DataTable(tableOptionsDetalle);
                pnlDetalleTrabajo.find('#tblTrabajosXDetalleAbierto tbody').on('click', 'tr', function () {
                    pnlDetalleTrabajo.find("#tblTrabajosXDetalleAbierto").find("tr").removeClass("success");
                    pnlDetalleTrabajo.find("#tblTrabajosXDetalleAbierto").find("tr").removeClass("warning");
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
                pnlDetalleTrabajo.find("#ConceptosAbierto").html("");
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
                        $("#CamposMeorEditar").removeClass("d-none");
                    } else {
                        $("#CamposMeorEditar").addClass("d-none");
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
                pnlDetalleTrabajo.find("#ConceptosCajero").html(getTable('tblTrabajosXDetalleCajeros', data));
                var thead = pnlDetalleTrabajo.find('#tblTrabajosXDetalleCajeros thead th');
                var tfoot = pnlDetalleTrabajo.find('#tblTrabajosXDetalleCajeros tfoot th');
                thead.eq(0).addClass("d-none");
                tfoot.eq(0).addClass("d-none");
                $.each(pnlDetalleTrabajo.find('#tblTrabajosXDetalleCajeros tbody tr'), function (k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("d-none");
                });
                var tblSelected = pnlDetalleTrabajo.find('#tblTrabajosXDetalleCajeros').DataTable(tableOptionsDetalle);
                pnlDetalleTrabajo.find('#tblTrabajosXDetalleCajeros tbody').on('click', 'tr', function () {
                    pnlDetalleTrabajo.find("#tblTrabajosXDetalleCajeros").find("tr").removeClass("success");
                    pnlDetalleTrabajo.find("#tblTrabajosXDetalleCajeros").find("tr").removeClass("warning");
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
                pnlDetalleTrabajo.find("#ConceptosCajero").html("");
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
    function onEliminarConceptoXDetalleCajero(evt, IDX) {
        swal({
            title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
        }).then((willDelete) => {
            if (willDelete) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'onEliminarConceptoXDetalleCajero',
                    type: "POST",
                    data: {
                        ID: IDX,
                        IDT: IdMovimiento
                    }
                }).done(function (data, x, jq) {
                    getDetalleCajerosByID(IdMovimiento);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
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
        var mov = pnlDatos.find("#Movimiento").val();
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
<style>
    td span.badge{
        font-size: 14px !important;
    }
    table tbody tr td > p.CustomDetalleDescripcion{
        height: 100px !important;
        overflow: auto !important;
    }
</style>