
<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading">

            <div class="cursor-hand" >Trabajos</div>

        </div>
        <div class="panel-body ">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default hide" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                    <button type="button" class="btn btn-default hide" id=""><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                    <button type="button" class="btn btn-default hide" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>

                </div>
                <div class="col-md-12" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>


<!--Reportes-->
<div id="mdlReportesEditarTrabajo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">IMPRIMIR REPORTES</h4>
        </div>
        <div class="modal-body">
            Selecciona el reporte que deseas imprimir

            <div class="col-md-12">
                <br>
            </div>
            <div id="reportes" class="dt-buttons">
                <button onclick="onReporteFin49()" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>FIN 49</button>
                <button onclick="onReporteResumenPartidas()" class="btn btn-default"><span class="fa fa-list-ol fa-1x"></span><br>RESUMEN DE PARTIDAS</button>
                <button onclick="onReportePresupuestoBBVA()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>PRESUPUESTO BBVA</button>
                <button onclick="onReportePresupuesto()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>PRESUPUESTO A&R</button>
                <button onclick="onReporteGenerador()" class="btn btn-default"><span class="fa fa-calculator fa-1x"></span><br>GENERADOR</button>
                <button onclick="onReporteCroquis()" class="btn btn-default"><span class="fa fa-crop fa-1x"></span><br>CROQUIS</button>
                <button onclick="onReporteFotografico()" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS</button>
            </div>
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
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminar">ACEPTAR</button>
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
                    </button>
                    Nuevo Trabajo
                </div>

                <div class="input-group pull-right" align="center">

                    <span class="dt-EncabezadoControles">
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copiar Movimiento (Debe guardar el movimiento)">
                            <span class="fa fa-clone" ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes (Debe guardar el movimiento)" >
                            <span class="fa fa-print " ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descargar Conceptos (Debe guardar el movimiento)">
                            <span class="fa fa-download"></span>
                        </button>
                    </span>

                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="label label-default spanEstatus">SIN GUARDAR</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class=""> </span>
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" disabled="" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>


                    <span class="togglebutton customLabelToggle" >
                        <label>
                            <input type="checkbox" id="Concluir" name="Concluir" >Concluir
                        </label>
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

                            <input type="text" id="Atendido" name="Atendido" class="form-control hide" readonly="" placeholder="" >
                            <div class="col-6 col-md-3">
                                <div class="togglebutton">
                                    <label for="">Esta Completado?</label>
                                    <spam><br></spam>
                                    <spam><br></spam>
                                    <label>
                                        <input type="checkbox" id="NuevoAtendido" name="NuevoAtendido" >
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
                            <div class="col-6 col-md-12">
                                <br>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <input type="text" id="ImpactoEnPlazo" name="ImpactoEnPlazo" class="form-control hide" readonly="" placeholder="" >
                                    <div class="col-6 col-md-3">
                                        <div class="togglebutton">
                                            <label for="">Impacto en el Plazo</label>
                                            <spam><br></spam>
                                            <spam><br></spam>
                                            <label>
                                                <input type="checkbox" id="NuevoImpactoEnPlazo" name="NuevoImpactoEnPlazo" >
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

                            <div class="col-md-12 ">
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



<!--PANEL NUEVO DETALLE-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleNuevoTrabajo">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-5">
                    <div class="cursor-hand" >Conceptos </div>
                </div>
                <div id="ImporteTotal" class="col-md-7" align="right">
                    <span class="text-success spanTotalesDetalle">$ 0.0</span>
                </div>
            </div>
        </div>
<!--        <div class="panel-body">-->
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                </div>
                <div class="col-md-12 table-responsive" id="Conceptos" >
                    <table  id="tblConceptosXTrabajo" class="table table-striped table-hover hide" width="100%">
                        <thead>
                            <tr>
                                <th class="hide">ID</th>
                                <th class="hide">PreciarioConcepto_ID</th>
                                <th class="hide">Renglon</th>
                                <th>Clave</th>
                                <th class="col-md-3" align="center">Int/Ext</th>
                                <th class="col-md-3" align="center">Descripcion</th>
                                <th class="col-md-2" align="center">Cantidad</th>
                                <th class="col-md-1" align="center">Unidad</th>
                                <th class="col-md-2" align="center">Precio</th>
                                <th class="col-md-2" align="center">Importe</th>
                                <th class="hide">Moneda</th>
                                <th class="hide">Generador Object</th>
                                <th class="col-md-2" align="center">Generador</th>
                                <th class="col-md-2" align="center">Fotos</th>
                                <th class="col-md-2" align="center">Croquis</th>
                                <th class="col-md-2" align="center">Anexos</th>
                                <th class="hide">Estatus</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </fieldset>
<!--        </div>-->
    </div>
</div>

<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlTrabajoNuevoConcepto" class="modal animated fadeInUp">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">SELECCIONE UN CONCEPTO</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12" align="right">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chkMultiple" value="ON"> VARIOS
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="col-md-12" id="ConceptosXPreciarioID">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL DETALLE - NUEVO GENERADOR POR CONCEPTO-->
<div id="mdlTrabajoNuevoGeneradorPorConcepto" class="modal animated bounceInDown ">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">GENERADOR</h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" style="">
                    <li class="active"><a href="#Generadores" data-toggle="tab">Generador</a></li>
                    <li><a href="#NuevoGenerador" data-toggle="tab">Agregar</a></li>
                </ul>
                <div id="pnlGenerador" class="tab-content">
                    <div class="tab-pane fade active in" id="Generadores">
                        <fieldset>
                            <div class="col-md-12 table-responsive" id="NuevoGeneradorXConcepto" >
                            </div>
                            <div id="GeneradorImporteTotal" class="col-md-12" align="right">
                                <span class="text-success spanTotalesDetalle">0.0</span>
                            </div>
                        </fieldset>
                    </div>
                    <div class="tab-pane fade" id="NuevoGenerador">
                        <div class="col-md-12 hide">
                            <input type="text" id="Concepto_ID" name="Concepto_ID" class="form-control hide">
                            <textarea id="Generador" name="Generador" rows="4" cols="20" class="hide">
                            </textarea>
                            <input type="number" id="xCantidad" min="0" value="0" name="xCantidad" class="form-control hide">
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary hide" id="btnModificar" onclick="onModificarNuevoGenerador();"><span class="fa fa-check"></span><br>MODIFICAR</button>
                            <button type="button" class="btn btn-default hide" id="btnCancelar" onclick="onCancelarModificarNuevoGenerador(this);"><span class="fa fa-times"></span><br>CANCELAR</button>

                            <button type="button" class="btn btn-primary " id="btnGuardar"><span class="fa fa-check"></span><br>GUARDAR</button>
                            <button type="button" class="btn btn-default " id="btnCancelarNuevoGenerador" onclick="onCancelarAgregarNuevoGenerador(this);"><span class="fa fa-times"></span><br>CANCELAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--MODAL DETALLE - FOTOS POR CONCEPTO-->
<div id="mdlTrabajoNuevoFotosPorConcepto" class="modal animated bounceInDown">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">FOTOS</h4>
            </div>
            <div class="modal-body">
                <div id="VistaPreviaFotos" class="row">
                </div>
                <fieldset>
                    <div class="col-md-12 hand-cursor" id="" align="center" style="cursor: pointer;" onclick="setFotos()">
                        <br>
                        <i class="fa fa-cloud-upload fa-3x hand-cursor" aria-hidden="true"></i>
                        <h1 >ADJUNTAR FOTOS</h1>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL DETALLE - NUEVOS CROQUIS POR CONCEPTO-->
<div id="mdlTrabajoNuevoCroquisPorConcepto" class="modal animated bounceInDown">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">CROQUIS</h4>
            </div>
            <div class="modal-body">
                <div id="VistaPreviaCroquis" class="row">
                </div>
                <fieldset>
                    <div class="col-md-12 table-responsive" id="VistaCroquis" align="center">
                        <table  id="tblCroquis" class="table table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th class="hide">Renglon</th>
                                    <th class="col-md-8">Croquis</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 hand-cursor" id="" align="center" style="cursor: pointer;" onclick="setCroquis()">
                        <br>
                        <i class="fa fa-cloud-upload fa-3x hand-cursor" aria-hidden="true"></i>
                        <h1 >ADJUNTAR CROQUIS</h1>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL DETALLE - NUEVOS ANEXOS POR CONCEPTO-->
<div id="mdlTrabajoNuevoAnexosPorConcepto" class="modal animated bounceInDown">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">ANEXOS</h4>
            </div>
            <div class="modal-body">
                <div id="VistaPreviaAnexos" class="row">
                </div>
                <fieldset>
                    <div class="col-md-12 table-responsive" id="VistaAnexos" align="center">
                        <table  id="tblAnexos" class="table table-striped table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th class="hide">Renglon</th>
                                    <th class="col-md-8">Anexo</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12 hand-cursor" id="" align="center" style="cursor: pointer;"  onclick="setAnexos()">
                        <br>
                        <i class="fa fa-cloud-upload fa-3x hand-cursor" aria-hidden="true"></i>
                        <h1 >ADJUNTAR ANEXOS</h1>
                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
            </div>
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
                        <button type="button" class="btn btn-default CustomColorIcon" id="" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descargar Conceptos">
                            <span class="fa fa-download"></span>
                        </button>
                    </span>

                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class="label label-default spanEditarEstatus">SIN GUARDAR</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <span class=""> </span>
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" id="btnConfirmarEliminar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <span class="togglebutton customLabelToggle" >
                        <label>
                            <input type="checkbox" id="Concluir" name="Concluir" >Concluir
                        </label>
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
                                            <spam><br></spam>
                                            <spam><br></spam>
                                            <label>
                                                <input type="checkbox" id="EditarImpactoEnPlazo" name="" >
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
                <div class="col-md-6">
                    <div class="cursor-hand" >Conceptos </div>
                </div>
                <div id="ImporteTotal" class="col-md-6" align="right">
                    <h4 class="text-success">$ 0.0</h4>
                </div>
            </div>
        </div>
<!--        <div class="panel-body">-->
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                </div>
                <div class="col-md-12 table-responsive " id="Conceptos" >
                    <table  id="tblConceptosXTrabajo" class="table table-striped table-hover hide " width="100%">
                        <thead>
                            <tr>
                                <th class="hide">ID</th>
                                <th class="hide">PreciarioConcepto_ID</th>
                                <th class="hide">Renglon</th>
                                <th>Clave</th>
                                <th class="col-md-2" align="center">Int/Ext</th>
                                <th class="col-md-5" align="center">Descripcion</th>
                                <th class="col-md-1" align="center">Cantidad</th>
                                <th>Unidad</th>
                                <th>Precio</th>
                                <th class="">Importe</th>
                                <th class="hide">Moneda</th>
                                <th class="hide">Generador Object</th>
                                <th>Generador</th>
                                <th>Fotos</th>
                                <th>Croquis</th>
                                <th>Anexos</th>
                                <th class="hide">Estatus</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </fieldset>
<!--        </div>-->
    </div>
</div>

<!--MODAL EDITAR - VER ARCHIVOS ADJUNTOS-->
<div class="modal animated fadeInUp" id="mdlAdjuntosXConceptoID">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Adjuntos</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12 hide">
                        <input type="text" id="ID" name="ID" class="form-control">
                        <input type="text" id="IDC" name="IDC" class="form-control">
                    </div>
                </fieldset>
                <ul class="nav nav-tabs" style="">
                    <li class="active"><a href="#Fotos" data-toggle="tab">Fotos</a></li>
                    <li><a href="#Croquis" data-toggle="tab">Croquis</a></li>
                    <li><a href="#Anexos" data-toggle="tab">Anexos</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="Fotos">
                        <h1>NO EXISTEN FOTOS</h1>
                    </div>
                    <div class="tab-pane fade" id="Croquis">
                        <h1>NO EXISTEN CROQUIS</h1>
                    </div>
                    <div class="tab-pane fade" id="Anexos">
                        <h1>NO EXISTEN ANEXOS</h1>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
            </div>
        </div>
    </div>
</div>


<!--MODAL DETALLE - EDITAR GENERADOR POR CONCEPTO-->
<div id="mdlTrabajoEditarGeneradorPorConcepto" class="modal animated bounceInDown ">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">GENERADOR</h4>
            </div>
            <div class="modal-body">
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
                        <div class="col-md-12">
                            <br>
                        </div>
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

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary hide" id="btnModificar" onclick=""><span class="fa fa-check"></span><br>MODIFICAR</button>
                            <button type="button" class="btn btn-default hide" id="btnCancelar" onclick="onCancelarEditarModificarGeneradorXID(this);"><span class="fa fa-times"></span><br>CANCELAR</button>
                            <button type="button" class="btn btn-primary " id="btnGuardar"><span class="fa fa-check"></span><br>GUARDAR</button>
                            <button type="button" class="btn btn-default " id="btnCancelarEditarGenerador" onclick="onCancelarEditarAgregarNuevoGenerador(this);"><span class="fa fa-times"></span><br>CANCELAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--MODAL DETALLE - NUEVO CONCEPTO-->
<div id="mdlTrabajoNuevoConceptoEditar" class="modal animated fadeInUp">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">SELECCIONE UN CONCEPTO</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12" align="right">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="chkMultiple" value="ON"> VARIOS
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="col-md-12" id="ConceptosXPreciarioID">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
            </div>
        </div>
    </div>
</div>


<!--MODAL EDITAR - VER FOTOS ADJUNTAS-->
<div id="mdlTrabajoEditarFotosPorConcepto" class="modal animated bounceInDown">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">FOTOS</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control">
                        <input type="file" id="fFotos" name="fFotos[]" multiple="" class="hide">
                    </div>
                </fieldset>
                <div id="VistaPreviaFotos" class="row">
                </div>
                <fieldset>
                    <div class="col-md-12 hand-cursor" id="" align="center" style="cursor: pointer;" onclick="setFotosEditar(this)">
                        <br>
                        <i class="fa fa-cloud-upload fa-3x hand-cursor" aria-hidden="true"></i>
                        <h1 >ADJUNTAR FOTOS</h1>
                    </div>
                    <div class="col-md-12" align="center"><br><h1>FOTOS</h1><HR></div>
                    <div class="col-md-12 row" id="Fotos"></div>
                </fieldset>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL EDITAR - VER CROQUIS ADJUNTOS-->
<div id="mdlTrabajoEditarCroquisPorConcepto" class="modal animated bounceInDown">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">CROQUIS</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control">
                        <input type="file" id="fCroquis" name="fCroquis[]" multiple="" class="hide">
                    </div>
                </fieldset>
                <div id="VistaPreviaCroquis" class="row">
                </div>
                <fieldset>
                    <div class="col-md-12 hand-cursor" id="" align="center" style="cursor: pointer;" onclick="setCroquisEditar()">
                        <br>
                        <i class="fa fa-cloud-upload fa-3x hand-cursor" aria-hidden="true"></i>
                        <h1 >ADJUNTAR CROQUIS</h1>
                    </div>
                    <div class="col-md-12"><br></div>
                    <div class="col-md-12" id="Croquis"></div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL EDITAR - VER ANEXOS ADJUNTOS-->
<div id="mdlTrabajoEditarAnexosPorConcepto" class="modal animated bounceInDown">
    <div class="modal-dialog super-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">ANEXOS</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12">
                        <input type="text" readonly="" id="IdTrabajo" name="IdTrabajo"  class="form-control">
                        <input type="text" readonly="" id="IdTrabajoDetalle" name="IdTrabajoDetalle"  class="form-control">
                        <input type="file" id="fAnexos" name="fAnexos[]" multiple="" class="hide">
                    </div>
                </fieldset>
                <div id="VistaPreviaAnexos" class="row">
                </div>
                <fieldset>
                    <div class="col-md-12 hand-cursor" id="" align="center" style="cursor: pointer;" onclick="setAnexosEditar(this)">
                        <br>
                        <i class="fa fa-cloud-upload fa-3x hand-cursor" aria-hidden="true"></i>
                        <h1 >ADJUNTAR ANEXOS</h1>
                    </div>
                    <div class="col-md-12"><br></div>
                    <div class="col-md-12" id="Anexos"></div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
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
    var btnEditar = $("#btnEditar");
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
    var tblConceptosXTrabajo = pnlDetalleNuevoTrabajo.find("#tblConceptosXTrabajo");
    var mdlTrabajoNuevoConcepto = $("#mdlTrabajoNuevoConcepto");
    var Conceptos = pnlDetalleNuevoTrabajo.find("#Conceptos");

    //Toggle Button Editar Atendido Impacto
    var tbtnEditarAtendido = pnlEditarTrabajo.find("#EditarAtendido");
    var tbtnEditarImpactoEnPlazo = pnlEditarTrabajo.find("#EditarImpactoEnPlazo");

    //Toggle Button  Atendido Impacto
    var tbtnNuevoAtendido = pnlNuevoTrabajo.find("#NuevoAtendido");
    var tbtnNuevoImpactoEnPlazo = pnlNuevoTrabajo.find("#NuevoImpactoEnPlazo");


    /*Detalle*/
    var mdlTrabajoNuevoGeneradorPorConcepto = $("#mdlTrabajoNuevoGeneradorPorConcepto");
    var mdlTrabajoNuevoFotosPorConcepto = $("#mdlTrabajoNuevoFotosPorConcepto");
    var mdlTrabajoNuevoCroquisPorConcepto = $("#mdlTrabajoNuevoCroquisPorConcepto");
    var mdlTrabajoNuevoAnexosPorConcepto = $("#mdlTrabajoNuevoAnexosPorConcepto");
    var btnGuardarNuevoGeneradorXConcepto = mdlTrabajoNuevoGeneradorPorConcepto.find("#btnGuardar");
    var NuevoGeneradorXConcepto = mdlTrabajoNuevoGeneradorPorConcepto.find("#NuevoGeneradorXConcepto");
    var tBtnConcluir = pnlNuevoTrabajo.find("#Concluir");
    var tBtnEditarConcluir = pnlEditarTrabajo.find("#Concluir");
    var pnlDetalleEditarTrabajo = $("#pnlDetalleEditarTrabajo");

    var mdlAdjuntosXConceptoID = $("#mdlAdjuntosXConceptoID");
    var currentDate = new Date();

    var btnCancelarNuevoGenerador = mdlTrabajoNuevoGeneradorPorConcepto.find("#btnCancelar");
    var btnMoficarNuevoGenerador = mdlTrabajoNuevoGeneradorPorConcepto.find("#btnModificar");

    //Reportes
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
    var tblConceptosXTrabajoEditar = pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo");

    /*BOTON PARA AGREGAR UN NUEVO CONCEPTO*/
    var btnNuevoConceptoEditar = pnlDetalleEditarTrabajo.find("#btnNuevoConcepto");
    /*BOTON PARA ABRIR EL MODAL DE FOTOS (EDITAR)*/
    var mdlTrabajoEditarFotosPorConcepto = $("#mdlTrabajoEditarFotosPorConcepto");
    /*BOTON PARA ABRIR EL MODAL DE CROQUIS (EDITAR)*/
    var mdlTrabajoEditarCroquisPorConcepto = $("#mdlTrabajoEditarCroquisPorConcepto");
    /*BOTON PARA ABRIR EL MODAL DE ANEXOS (EDITAR)*/
    var mdlTrabajoEditarAnexosPorConcepto = $("#mdlTrabajoEditarAnexosPorConcepto");

    /*FOTOS (EDITAR)*/
    var EditarFotosPorConcepto = mdlTrabajoEditarFotosPorConcepto.find("#fFotos");
    var VistaPreviaFotosPorConcepto = mdlTrabajoEditarFotosPorConcepto.find("#VistaPreviaFotos");

    /*CROQUIS (EDITAR)*/
    var EditarCroquisPorConcepto = mdlTrabajoEditarCroquisPorConcepto.find("#fCroquis");
    var VistaPreviaCroquisPorConcepto = mdlTrabajoEditarCroquisPorConcepto.find("#VistaPreviaCroquis");

    /*ANEXOS (EDITAR)*/
    var EditarAnexosPorConcepto = mdlTrabajoEditarAnexosPorConcepto.find("#fAnexos");
    var VistaPreviaAnexosPorConcepto = mdlTrabajoEditarAnexosPorConcepto.find("#VistaPreviaAnexos");

    $(document).ready(function() {

        /**FUNCIONES DE EDICION**/
        /*ANEXOS POR CONCEPTO EDITAR*/
        EditarAnexosPorConcepto.change(function() {
            HoldOn.open({
                theme: 'sk-cube',
                message: 'CARGANDO ANEXOS...'
            });
            var imageType = /image.*/;
            VistaPreviaAnexosPorConcepto.html("<fieldset></fieldset>");
            console.log('EditarAnexosPorConcepto[0].files');
            console.log(EditarAnexosPorConcepto[0].files);
//            for (var n = 0; n <= EditarAnexosPorConcepto[0].files.length; n++) {
//                console.log('for: EditarAnexosPorConcepto[0].files[' + n + '].name');
//                console.log(EditarAnexosPorConcepto[0].files[0].name);
//            }
            var img = "";
            var nimg = 0;
            $.each(EditarAnexosPorConcepto[0].files, function(k, file) {
                console.log(file.name);
                var reader = new FileReader();
                reader.onload = function(e) {
                    img = "";
                    if (nimg === 3) {
                        img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    console.log(this);
//                    img += '<div class="col-md-4">';
//                    img += '<img src="' + reader.result + '" class="img-responsive">';
//                    img += '<span class="label label-success">' + file.name + '</span><br>';
//                    img += '</div>';
//                    VistaPreviaAnexosPorConcepto.find("fieldset").append(img);
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
                    }).done(function(data, x, jq) {
                        onReloadAnexosXConcepto(mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajoDetalle").val());
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'ANEXOS ' + file.name, 'success');
                        console.log('* * * LOG ANEXO * * *');
                        console.log(data, x, jq);
                        console.log('* * * FIN LOG ANEXO * * *');
                        VistaPreviaAnexosPorConcepto.html("");
                        getTrabajoDetalleByID(mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajo").val());
                    }).fail(function(x, y, z) {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL ANEXOS: ' + file.name, 'danger');
                        console.log(x, y, z);
                    }).always(function() {
                        HoldOn.close();
                    });

                };
                reader.readAsDataURL(file);
            });
            HoldOn.close();
        });

        /*CROQUIS POR CONCEPTO EDITAR*/
        EditarCroquisPorConcepto.change(function() {
            HoldOn.open({
                theme: 'sk-cube',
                message: 'CARGANDO FOTOS...'
            });
            var imageType = /image.*/;
            VistaPreviaCroquisPorConcepto.html("<fieldset></fieldset>");
            console.log('EditarCroquisPorConcepto[0].files');
            console.log(EditarCroquisPorConcepto[0].files);
//            for (var n = 0; n <= EditarCroquisPorConcepto[0].files.length; n++) {
//                console.log('for: EditarCroquisPorConcepto[0].files[' + n + '].name');
//                console.log(EditarCroquisPorConcepto[0].files[0].name);
//            }
            var img = "";
            var nimg = 0;
            $.each(EditarCroquisPorConcepto[0].files, function(k, file) {
                console.log(file.name);
//                var reader = new FileReader();
//                reader.onload = function (e) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                //  console.log(this);
//                    img += '<div class="col-md-4">';
//                    img += '<img src="' + reader.result + '" class="img-responsive">';
//                    img += '<span class="label label-success">' + file.name + '</span><br>';
//                    img += '</div>';
//                    VistaPreviaCroquisPorConcepto.find("fieldset").append(img);
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
                }).done(function(data, x, jq) {
                    onReloadCroquisXConcepto(mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajo").val());
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'CROQUIS ' + file.name, 'success');
                    console.log('* * * LOG FOTO * * *');
                    console.log(data, x, jq);
                    console.log('* * * FIN LOG FOTO * * *');
                    VistaPreviaCroquisPorConcepto.html("");
                }).fail(function(x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR EL CROQUIS: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });

//                };
//                reader.readAsDataURL(file);
            });
            HoldOn.close();
        });

        /*FOTOS POR CONCEPTO EDITAR*/
        EditarFotosPorConcepto.change(function() {
            HoldOn.open({
                theme: 'sk-cube',
                message: 'CARGANDO FOTOS...'
            });
            var imageType = /image.*/;
            VistaPreviaFotosPorConcepto.html("<fieldset></fieldset>");
            console.log('EditarFotosPorConcepto[0].files');
            console.log(EditarFotosPorConcepto[0].files);
//            for (var n = 0; n <= EditarFotosPorConcepto[0].files.length; n++) {
//                console.log('for: EditarFotosPorConcepto[0].files[' + n + '].name');
//                console.log(EditarFotosPorConcepto[0].files[0].name);
//            }
            var img = "";
            var nimg = 0;
            $.each(EditarFotosPorConcepto[0].files, function(k, file) {
                console.log(file.name);
//                var reader = new FileReader();
//                reader.onload = function (e) {
                img = "";
                if (nimg === 3) {
                    img += '<div class="col-md-12" align="center"><br><hr><br></div>';
                    nimg = 0;
                }
                console.log(this);
//                    img += '<div class="col-md-4">';
//                    img += '<img src="' + reader.result + '" class="img-responsive">';
//                    img += '<span class="label label-success">' + file.name + '</span><br>';
//                    img += '</div>';
//                    VistaPreviaFotosPorConcepto.find("fieldset").append(img);
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
                }).done(function(data, x, jq) {
                    onReloadFotosXConcepto(mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajoDetalle").val(), mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajo").val());
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'FOTO ' + file.name, 'success');
                    console.log('* * * LOG FOTO * * *');
                    console.log(data, x, jq);
                    console.log('* * * FIN LOG FOTO * * *');
                    VistaPreviaFotosPorConcepto.html("");
                }).fail(function(x, y, z) {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR FOTO: ' + file.name, 'danger');
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });

//                };
//                reader.readAsDataURL(file);
            });
            HoldOn.close();
        });

        btnMoficarEditarGenerador.on('click', function() {
            onModificarGeneradorXID();
        });
        /***** Modificar Concepto ****/
        btnGuardarModificarGeneradorXConcepto.on('click', function() {
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
                    HoldOn.open({
                        theme: 'sk-bounce',
                        message: 'GUARDANDO...'
                    });
                    $.ajax({
                        url: master_url + 'onAgregarGenerador',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function(data, x, jq) {
                        console.log(data);
                        mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
                        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
                        mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
                        mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active in");
                        // onNotify('<span class="fa fa-check fa-lg"></span>', 'GENERADOR AGREGADO', 'success');
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
                    }).fail(function(x, y, z) {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL AGREGAR', 'danger');
                        console.log(total_generador);
                    }).always(function() {
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

        mdlTrabajoEditarGeneradorPorConcepto.find('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var target = $(e.target).attr("href");
            switch (target) {
                case "#EditarGeneradores":
                    console.log('SE CANCELO LA EDICION');
                    //  onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EDICIÓN CANCELADA', 'danger');
                    btnCancelarEditarGenerador.trigger('click');
                    console.log('* * * * * TARGET * * * * ');
                    console.log(target);
                    console.log('* * * * * END TARGET * * * * ');

                    break;
                case "#EditarGenerador":

                    mdlTrabajoEditarGeneradorPorConcepto.find("#Area").focus();
                    break;
            }
        });

        /**FIN FUNCIONES DE EDICION **/
        /*FUNCIONES DE NUEVO*/
        btnImprimirReportesEditarTrabajo.on("click", function() {
            mdlReportesEditarTrabajo.modal('show');
        });

        mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").keypress(function(e) {
            if (e.which === 13) {
                if (!btnGuardarNuevoGeneradorXConcepto.hasClass("hide")) {
                    console.log('ESTA GUARDANDO');
                    mdlTrabajoNuevoGeneradorPorConcepto.find("#btnGuardar").trigger('click');
                }
                if (!btnMoficarNuevoGenerador.hasClass("hide")) {
                    console.log('ESTA EDITANDO');
                    mdlTrabajoNuevoGeneradorPorConcepto.find("#btnModificar").trigger('click');
                }
            }
        });

        mdlTrabajoNuevoGeneradorPorConcepto.find('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            var target = $(e.target).attr("href");
            switch (target) {
                case "#Generadores":
                    if (generador_nuevo_editable) {
                        console.log('SE CANCELO LA EDICION');
                        //  onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EDICIÓN CANCELADA', 'danger');
                        btnCancelarNuevoGenerador.trigger('click');
                        console.log('* * * * * TARGET * * * * ');
                        console.log(target);
                        console.log('* * * * * END TARGET * * * * ');

                        mdlTrabajoNuevoGeneradorPorConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
                            var row = $(v).find("td");
                            if (row.eq(13).text() === "EDITANDO") {
                                row.eq(13).text("ACTIVO");
                            }
                        });
                    }
                    break;
                case "#NuevoGenerador":

                    mdlTrabajoNuevoGeneradorPorConcepto.find("#Area").focus();
                    break;
            }
        });

        /***** Modificar Concepto ****/
        btnGuardarNuevoGeneradorXConcepto.on("click", function() {
            var Generador = [];
            if ((mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== 0 ||
                    mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== 0 ||
                    mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== 0 ||
                    mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() !== 0) &&
                    pnlDetalleNuevoTrabajo.find("tbody tr").length > 0) {
                $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
                    var row_status = $(this).find("td").eq(15).text();
                    if (row_status === 'ACTIVO') {
                        /*EVALUAR LA CANTIDAD*/
                        var Largo = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== 0) ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() : 0);
                        var Ancho = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== 0) ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() : 0);
                        var Alto = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== 0) ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() : 0);
                        var Cantidad = (parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() !== '') ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() : 0));
                        //                    console.log('**********************DATOS A EVALUAR**************************')
                        /*EVALUAR LOS CAMPOS*/
                        if ((mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== '' && Largo !== '' && Largo !== undefined) ||
                                mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== '' && (Ancho !== '' && Ancho !== undefined) || mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== '' && (Alto !== '' && Alto !== undefined) ||
                                mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() !== '' && (Cantidad !== '' && Cantidad !== undefined)) {
                            //                        /*FIN DE LA EVALUACIÓN*/
                            /*ELIMINAR GENERADORES*/
                            if (NuevoGeneradorXConcepto.find())
                                NuevoGeneradorXConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
                                    var row = $(v).find("td");
                                    if (row.eq(0).text() === "No existen datos en la tabla.") {
                                        $(this).remove();
                                    }
                                });
                            var subtotal = ((Largo !== 0 && Largo !== "0") ? Largo : 1) * ((Ancho !== 0 && Ancho !== "0") ? Ancho : 1) * ((Alto !== 0 && Alto !== "0") ? Alto : 1) * ((Cantidad !== 0 && Cantidad !== "0") ? Cantidad : 1);
                            var new_row = '<tr role="row" class="even">';
                            new_row += '<td class="hide sorting_1">1</td>';
                            new_row += '<td class="hide">';
                            new_row += mdlTrabajoNuevoGeneradorPorConcepto.find("#Concepto_ID").val();
                            new_row += '</td>';
                            new_row += '<td><span class="fa fa-times fa-2x customButtonDetalleEliminar" onclick="onEliminarGenerador(this)"></span></td>';
                            new_row += '<td>';
                            new_row += mdlTrabajoNuevoGeneradorPorConcepto.find("#Area").val();
                            new_row += '</td><td>';
                            new_row += mdlTrabajoNuevoGeneradorPorConcepto.find("#Eje").val();
                            new_row += '</td><td>';
                            new_row += mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje1").val();
                            new_row += '</td><td>';
                            new_row += mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje2").val();
                            new_row += '</td><td>';
                            new_row += parseFloat((Largo !== '') ? Largo : 0);
                            new_row += '</td><td>';
                            new_row += parseFloat((Ancho !== '') ? Ancho : 0);
                            new_row += '</td><td>';
                            new_row += parseFloat((Alto !== '') ? Alto : 0);
                            new_row += '</td><td>';
                            new_row += parseFloat((Cantidad !== '') ? Cantidad : 0);
                            new_row += '</td>';
                            new_row += '<td>';
                            new_row += subtotal;
                            new_row += '</td>';

                            new_row += "<td><span class=\"fa fa-angle-right customButtonDetalleGenerador\" onclick=\"onEditarGeneradorNuevo(this)\"></span></td>";
                            new_row += "<td class=\"hide\">ACTIVO</td>";
                            new_row += '</tr>';
                            NuevoGeneradorXConcepto.find("#tblGeneradores").find("tbody").append(new_row);
                            /*AGREGAR NUEVO GENERADOR*/
                            Generador = [];
                            var tt = 0;
                            NuevoGeneradorXConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
                                var row = $(v).find("td");
                                console.log(v);
                                console.log(row);
                                var nuevo_generador = {};
                                nuevo_generador["Concepto_ID"] = row.eq(1).text();
                                nuevo_generador["Area"] = row.eq(3).text();
                                nuevo_generador["Eje"] = row.eq(4).text();
                                nuevo_generador["EntreEje1"] = row.eq(5).text();
                                nuevo_generador["EntreEje2"] = row.eq(6).text();
                                nuevo_generador["Largo"] = parseFloat((parseFloat(row.eq(7).text()) !== '') ? parseFloat(row.eq(7).text()) : 0);
                                nuevo_generador["Ancho"] = parseFloat((parseFloat(row.eq(8).text()) !== '') ? parseFloat(row.eq(8).text()) : 0);
                                nuevo_generador["Alto"] = parseFloat((parseFloat(row.eq(9).text()) !== '') ? parseFloat(row.eq(9).text()) : 0);
                                nuevo_generador["Cantidad"] = parseFloat((parseFloat(row.eq(10).text()) !== '') ? parseFloat(row.eq(10).text()) : 0);
                                Generador.push(JSON.stringify(nuevo_generador));
                                tt += parseFloat(row.eq(11).text());
                            });
                            $(this).find("td").eq(6).text(tt);                             /*FIN DE LA EVALUACIÓN*/

                            var Precio = parseFloat($(this).find("td").eq(8).text());
                            var Total = tt * Precio;
                            $(this).find("td").eq(10).text(Total);
                            $(this).find("td").eq(11).html('<span class="label label-success">$' + $.number(Total, 2, '.', ', ') + '</span>');
                            $(this).find("td").eq(13).text(Generador);
                            getGeneradorImporteTotal();
                            //  mdlTrabajoNuevoGeneradorPorConcepto.modal('hide');
                            //Nos regresamos a la pestaña de generadores
                            mdlTrabajoNuevoGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
                            mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
                            mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
                            mdlTrabajoNuevoGeneradorPorConcepto.find("#Generadores").addClass("active in");
                            mdlTrabajoNuevoGeneradorPorConcepto.find("input").val("");

                            return false;
                        } else {
                            Generador = [];
                            var tt = 0;
                            NuevoGeneradorXConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
                                var row = $(v).find("td");
                                var nuevo_generador = {};
                                nuevo_generador["Concepto_ID"] = row.eq(2).text();
                                nuevo_generador["Area"] = row.eq(3).text();
                                nuevo_generador["Eje"] = row.eq(4).text();
                                nuevo_generador["EntreEje1"] = row.eq(5).text();
                                nuevo_generador["EntreEje2"] = row.eq(6).text();
                                nuevo_generador["Largo"] = parseFloat((parseFloat(row.eq(7).text()) !== '') ? parseFloat(row.eq(7).text()) : 0);
                                nuevo_generador["Ancho"] = parseFloat((parseFloat(row.eq(8).text()) !== '') ? parseFloat(row.eq(8).text()) : 0);
                                nuevo_generador["Alto"] = parseFloat((parseFloat(row.eq(9).text()) !== '') ? parseFloat(row.eq(9).text()) : 0);
                                nuevo_generador["Cantidad"] = parseFloat((parseFloat(row.eq(10).text()) !== '') ? parseFloat(row.eq(10).text()) : 0);
                                console.log('GENERADOR NUEVO ');
                                console.log(row);
                                console.log(nuevo_generador);
                                console.log('END GENERADOR NUEVO');
                                Generador.push(JSON.stringify(nuevo_generador));
                                tt += parseFloat(row.eq(11).text());
                            });
                            $(this).find("td").eq(6).text(tt);
                            /*FIN DE LA EVALUACIÓN*/
                            getGeneradorImporteTotal();
                            var Precio = parseFloat($(this).find("td").eq(8).text());
                            var Total = tt * Precio;
                            $(this).find("td").eq(10).text(Total);
                            $(this).find("td").eq(11).html('<span class="label label-success">$' + $.number(Total, 2, '.', ', ') + '</span>');
                            $(this).find("td").eq(13).text(Generador);
                            // mdlTrabajoNuevoGeneradorPorConcepto.modal('hide');

                            //Nos regresamos a la pestaña de generadores
                            mdlTrabajoNuevoGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
                            mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
                            mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
                            mdlTrabajoNuevoGeneradorPorConcepto.find("#Generadores").addClass("active in");
                            mdlTrabajoNuevoGeneradorPorConcepto.find("input").val("");
                            return false;
                        }
                    }
                });
                getImporteTotal();
            } else {
                if (NuevoGeneradorXConcepto.find("#tblGeneradores").find("tbody tr").length > 0) {
                    console.log('* * * * * * * RECREANDO EL GENERADOR *********');
                    $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
                        var row_status = $(this).find("td").eq(15).text();
                        if (row_status === 'ACTIVO') {
                            Generador = [];
                            var tt = 0;
                            NuevoGeneradorXConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
                                var row = $(v).find("td");
                                var nuevo_generador = {};
                                nuevo_generador["Concepto_ID"] = row.eq(2).text();
                                nuevo_generador["Area"] = row.eq(3).text();
                                nuevo_generador["Eje"] = row.eq(4).text();
                                nuevo_generador["EntreEje1"] = row.eq(5).text();
                                nuevo_generador["EntreEje2"] = row.eq(6).text();
                                nuevo_generador["Largo"] = parseFloat((parseFloat(row.eq(7).text()) !== '') ? parseFloat(row.eq(7).text()) : 0);
                                nuevo_generador["Ancho"] = parseFloat((parseFloat(row.eq(8).text()) !== '') ? parseFloat(row.eq(8).text()) : 0);
                                nuevo_generador["Alto"] = parseFloat((parseFloat(row.eq(9).text()) !== '') ? parseFloat(row.eq(9).text()) : 0);
                                nuevo_generador["Cantidad"] = parseFloat((parseFloat(row.eq(10).text()) !== '') ? parseFloat(row.eq(10).text()) : 0);
                                console.log('GENERADOR NUEVO ');
                                console.log(row);
                                console.log(nuevo_generador);
                                console.log('END GENERADOR NUEVO');
                                Generador.push(JSON.stringify(nuevo_generador));
                                tt += parseFloat(row.eq(11).text());
                            });
                            console.log(' * * * GENERADOR CREADO * * * ');
                            console.log(Generador);
                            console.log(' * * * GENERADOR CREADO * * * ');
                            $(this).find("td").eq(6).text(tt);
                            /*FIN DE LA EVALUACIÓN*/
                            var Precio = parseFloat($(this).find("td").eq(8).text());
                            var Total = tt * Precio;
                            $(this).find("td").eq(10).text(Total);
                            $(this).find("td").eq(11).html('<span class="label label-success">$' + $.number(Total, 2, '.', ', ') + '</span>');
                            $(this).find("td").eq(13).text(Generador);
                            console.log(' * * * ROW CONCEPTO * * * ');
                            console.log($(this).find("td"));
                            console.log(' * * * ROW CONCEPTO * * * ');
                            getGeneradorImporteTotal();
                            getImporteTotal();
                            //  mdlTrabajoNuevoGeneradorPorConcepto.modal('hide');
                            //Nos regresamos a la pestaña de generadores
                            mdlTrabajoNuevoGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
                            mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
                            mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
                            mdlTrabajoNuevoGeneradorPorConcepto.find("#Generadores").addClass("active in");
                            mdlTrabajoNuevoGeneradorPorConcepto.find("input").val("");
                        }
                    });
                    console.log('* * * * * * * END RECREANDO EL GENERADOR *********');
                } else {
                    mdlTrabajoNuevoGeneradorPorConcepto.modal('hide');
                }
            }
        });

        btnNuevoConcepto.on("click", function() {
            var Preciario_ID = pnlNuevoTrabajo.find("#Preciario_ID").val();
            if (Preciario_ID !== undefined && Preciario_ID !== '' && Preciario_ID > 0) {

                getConceptosXPreciarioID(Preciario_ID);
                mdlTrabajoNuevoConcepto.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PRECIARIO', 'danger');
            }
        });

        btnRefrescar.on("click", function() {
            getRecords();
            getClientes();
            getCodigosPPTA();
            getCuadrillas();
        });

        //Evento clic del boton confirmar borrar
        btnConfirmarEliminar.on("click", function() {

            if (temp !== 0 && temp !== undefined && temp > 0) {
                //Muestra el modal
                mdlConfirmar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnEliminar.on("click", function() {
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
                }).done(function(data, x, jq) {
                    console.log(data);

                    mdlConfirmar.modal('hide');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'TRABAJO ELIMINADO', 'danger');

                    menuTablero.addClass("animated slideInLeft").removeClass("hide");
                    pnlEditarTrabajo.addClass("hide");
                    pnlDetalleEditarTrabajo.addClass("hide");


                    getRecords();
                    btnRefrescar.trigger('click');

                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        //Funcion que cambia el valor cuando el toggle button cambia
        tbtnEditarAtendido.change(function() {
            if (this.checked) {

                pnlEditarTrabajo.find("#Atendido").val('Si');
            } else {
                pnlEditarTrabajo.find("#Atendido").val('No');
            }
        });

        tbtnEditarImpactoEnPlazo.change(function() {
            if (this.checked) {

                pnlEditarTrabajo.find("#ImpactoEnPlazo").val('Si');
            } else {
                pnlEditarTrabajo.find("#ImpactoEnPlazo").val('No');
            }
        });

        //Eventos del toggle para nuevo
        tbtnNuevoAtendido.change(function() {
            if (this.checked) {

                pnlNuevoTrabajo.find("#Atendido").val('Si');
            } else {

                pnlNuevoTrabajo.find("#Atendido").val('No');
            }
        });

        tbtnNuevoImpactoEnPlazo.change(function() {
            if (this.checked) {

                pnlNuevoTrabajo.find("#ImpactoEnPlazo").val('Si');
            } else {
                pnlNuevoTrabajo.find("#ImpactoEnPlazo").val('No');
            }
        });


        btnEditar.on("click", function() {
            tempDetalle = 0;

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
                }).done(function(data, x, jq) {
                    pnlEditarTrabajo.find("input").val("");

                    var trabajo = data[0];

                    $.ajax({
                        url: master_url + 'getSucursalesByCliente',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: trabajo.Cliente_ID
                        }
                    }).done(function(data, x, jq) {


                        var options = '<option></option>';
                        $.each(data, function(k, v) {

                            options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.Sucursal + '</option>';
                        });
                        pnlEditarTrabajo.find("#Sucursal_ID").html(options);
                        pnlEditarTrabajo.find("#Sucursal_ID").select2("val", trabajo.Sucursal_ID);
                    }).fail(function(x, y, z) {
                        console.log(x, y, z);
                    }).always(function() {
                        HoldOn.close();
                    });
                    $.ajax({
                        url: master_url + 'getPreciariosByCliente',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            Cliente_ID: trabajo.Cliente_ID
                        }
                    }).done(function(data, x, jq) {


                        var options = '<option></option>';
                        $.each(data, function(k, v) {

                            options += '<option value="' + v.ID + '">' + v.Preciario + '</option>';
                        });
                        pnlEditarTrabajo.find("#Preciario_ID").html(options);
                        pnlEditarTrabajo.find("#Preciario_ID").select2("val", trabajo.Preciario_ID);
                    }).fail(function(x, y, z) {
                        console.log(x, y, z);
                    }).always(function() {
                        HoldOn.close();
                    });

                    //trae los días
                    getCodigoPPTAbyID(trabajo.Codigoppta_ID);

                    tBtnEditarConcluir.on("click", function() {
                        if (!$(this).is(':checked')) {
                            $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                            btnConfirmarEliminar.attr("disabled", false);
                            btnModificar.removeClass('hide');
                        }

                    });

                    pnlEditarTrabajo.find("#Movimiento").select2("val", trabajo.Movimiento);
                    pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                    pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                    pnlEditarTrabajo.find("#Cliente_ID").select2("val", trabajo.Cliente_ID);
                    pnlEditarTrabajo.find("#Clasificacion").select2("val", trabajo.Clasificacion);
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
                    pnlEditarTrabajo.removeClass("hide");
                    pnlDetalleEditarTrabajo.removeClass("hide");
                    getTrabajoDetalleByID(trabajo.ID);



                    //Control de estatus
                    if (trabajo.Estatus === 'Concluido') {
                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(trabajo.Estatus.toUpperCase());
                        tBtnEditarConcluir.prop('checked', true);
                        btnModificar.addClass('hide');
                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                        btnConfirmarEliminar.attr("disabled", true);
                        pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                        pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");

                    } else if (trabajo.Estatus === 'Cancelado') {
                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(trabajo.Estatus.toUpperCase());
                        tBtnEditarConcluir.addClass('hide');
                        btnModificar.addClass('hide');
                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                        btnConfirmarEliminar.attr("disabled", true);
                        pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                        pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                    } else {

                        $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(trabajo.Estatus.toUpperCase());
                        tBtnEditarConcluir.prop('checked', false);
                        btnModificar.removeClass('hide');
                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                        btnConfirmarEliminar.attr("disabled", false);
                        pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', false);
                        pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                    }




                    getImporteTotalDelTrabajoByID(trabajo.ID);
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnModificar.on("click", function() {


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
                highlight: function(element, errorClass, validClass) {

                    var elem = $(element);
                    elem.addClass(errorClass);
                },
                unhighlight: function(element, errorClass, validClass) {
                    var elem = $(element);
                    elem.removeClass(errorClass);
                }

            });
            //Regresa si es valido para los select2
            $('select').on('change', function() {
                $(this).valid();
            });
            //Si es verdadero que hacer
            if ($('#frmEditar').valid()) {

                var frm = new FormData(pnlEditarTrabajo.find("#frmEditar")[0]);
                //  Para los checkbox
                if (tBtnEditarConcluir.is(':checked')) {
                    frm.append('Estatus', 'Concluido');
                } else {
                    frm.append('Estatus', 'Borrador');
                }

                //Solo para debuggear el formulario de la clase FormData
//                for (var pair of frm.entries()) {
//                    console.log(pair[0]+ ', ' + pair[1]);
//                }

                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function(data, x, jq) {


                    onNotify('<span class="fa fa-check fa-lg"></span>', 'MOVIMIENTO GUARDADO', 'success');

                    if (tBtnEditarConcluir.is(':checked')) {
                        btnModificar.addClass('hide');
                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                        btnConfirmarEliminar.attr("disabled", true);
                        $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text('Concluido'.toUpperCase());
                        pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                        pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                    } else {
                        btnConfirmarEliminar.attr("disabled", false);
                        $(".spanEditarEstatus").removeClass('label-success').addClass('label-default').text('Borrador'.toUpperCase());
                        pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', false);
                        pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                    }

                    console.log(data, x, jq);
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            }

        });

        btnGuardar.on("click", function() {
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
                highlight: function(element, errorClass, validClass) {

                    var elem = $(element);
                    elem.addClass(errorClass);
                },
                unhighlight: function(element, errorClass, validClass) {
                    var elem = $(element);
                    elem.removeClass(errorClass);
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function() {
                $(this).valid();
            });

            //Si es verdadero que hacer
            if (pnlNuevoTrabajo.find('#frmNuevo').valid()) {


                var frm = new FormData(pnlNuevoTrabajo.find("#frmNuevo")[0]);

                for (var pair of frm.entries()) {
                    console.log(pair[0] + ', ' + pair[1]);
                }


                var trabajo_detalle = [];
                var concepto = {};

                pnlDetalleNuevoTrabajo.find('#tblConceptosXTrabajo > tbody  > tr').each(function(key, value) {
                    var row = $(this).find("td");
                    console.log(row);
                    concepto = {
                        PreciarioConcepto_ID: row.eq(1).text(),
                        Renglon: row.eq(2).text(),
                        Cantidad: row.eq(6).text(),
                        Unidad: row.eq(7).text(),
                        Precio: row.eq(8).text(),
                        Importe: row.eq(10).text(),
                        IntExt: row.eq(4).find("#IntExt").val(),
                        Moneda: row.eq(12).text(),
                        Generador: row.eq(13).text()
                    };
                    /*CREAR JSON DE LAS FOTOS POR CADA RENGLON*/
                    var json_fotos = [];
                    jQuery.each($(this).find("#Fotos")[0].files, function(i, file) {
                        json_fotos.push({
                            Renglon: row.eq(2).text(),
                            Foto: file.name
                        });
                        frm.append('FOTOS[]', file);
                    });
                    frm.append('JSONFOTOS[]', JSON.stringify(json_fotos));

                    /*CREAR JSON DE LOS CROQUIS POR CADA RENGLON*/
                    var json_croquis = [];
                    jQuery.each($(this).find("#Croquis")[0].files, function(i, file) {
                        json_croquis.push({
                            Renglon: row.eq(2).text(),
                            Croquis: file.name
                        });
                        frm.append('CROQUIS[]', file);
                    });
                    frm.append('JSONCROQUIS[]', JSON.stringify(json_croquis));

                    /*CREAR JSON DE LOS ANEXOS POR CADA RENGLON*/
                    var json_anexos = [];
                    jQuery.each($(this).find("#Anexos")[0].files, function(i, file) {
                        json_anexos.push({
                            Renglon: row.eq(2).text(),
                            Anexo: file.name
                        });
                        frm.append('ANEXOS[]', file);
                    });
                    frm.append('JSONANEXOS[]', JSON.stringify(json_anexos));

                    /*AGREGAR EL CONCEPTO CREADO*/
                    trabajo_detalle.push(concepto);
                });
                frm.append('CONCEPTOS', JSON.stringify(trabajo_detalle));
                //                Para los checkbox
                if (tBtnConcluir.is(':checked')) {

                    frm.append('Estatus', 'Concluido');
                    // $(".spanEstatus").text('Concluido');
                } else {

                    frm.append('Estatus', 'Borrador');
                    // $(".spanEstatus").text('Borrador');
                }
                //Agregar Importe total
                frm.append('Importe', ImporteTotalGlobal);
                /*DESCOMENTAR PARA AGREGAR*/
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function(data, x, jq) {

                    console.log('data', data);
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA REGISTRADO UN NUEVO TRABAJO', 'success');
//Funcion que regarga el panel de editar con el nuevo registro

                    despuesDeGuardar(data);
                    //  btnCancelar.trigger('click');

                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            }

        });

        btnCancelar.on("click", function() {

            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlNuevoTrabajo.addClass("hide");
            //Detalle
            pnlDetalleNuevoTrabajo.addClass("hide");
            btnRefrescar.trigger('click');
        });

        btnCancelarModificar.on("click", function() {


            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarTrabajo.addClass("hide");
            pnlDetalleEditarTrabajo.addClass("hide");
            btnRefrescar.trigger('click');
        });

        btnNuevo.on("click", function() {

            $.each(tblConceptosXTrabajo.find("tbody tr"), function() {
                $(this).remove();
            });
            tblConceptosXTrabajo.addClass("hide");
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

            //Inicializamos Boleanos en No
            pnlNuevoTrabajo.find("#Atendido").val('No');
            pnlNuevoTrabajo.find("#ImpactoEnPlazo").val('No');
            //Trae el usuario logeado quien estará registrando el movimiento
            pnlNuevoTrabajo.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");
            /*DETALLE*/
            pnlDetalleNuevoTrabajo.removeClass("hide");
        });

        /*Funcion que trae los catalogos en base al cliente*/
        pnlNuevoTrabajo.find("#Cliente_ID").change(function() {
            pnlNuevoTrabajo.find("#Sucursal_ID").val(null).trigger("change");
            pnlNuevoTrabajo.find("#Preciario_ID").val(null).trigger("change");
            getSucursalesbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
            getPreciariosbyCliente(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
        });
        /*Funcion que trae los catalogos en base al cliente*/
        pnlEditarTrabajo.find("#Cliente_ID").change(function() {
            pnlEditarTrabajo.find("#Sucursal_ID").val(null).trigger("change");
            pnlEditarTrabajo.find("#Preciario_ID").val(null).trigger("change");
            getSucursalesbyCliente(pnlEditarTrabajo.find("#Cliente_ID").val(), $(this).val());
            getPreciariosbyCliente(pnlEditarTrabajo.find("#Cliente_ID").val(), $(this).val());
        });
        //Trae dias de ppta
        pnlNuevoTrabajo.find("#Codigoppta_ID").change(function() {
            getCodigoPPTAbyID(pnlNuevoTrabajo.find("#Codigoppta_ID").val(), $(this).val());
        });
        //Trae dias de ppta
        pnlEditarTrabajo.find("#Codigoppta_ID").change(function() {
            getCodigoPPTAbyID(pnlEditarTrabajo.find("#Codigoppta_ID").val(), $(this).val());
        });

        btnArchivo.on("click", function() {
            Archivo.change(function() {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                var imageType = /image.*/;
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
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
                        readerpdf.onload = function(e) {
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

        btnModificarArchivo.on("click", function() {
            ModificarArchivo.change(function() {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                var imageType = /image.*/;
                if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
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
                        readerpdf.onload = function(e) {
                            ModificarVistaPrevia.html('<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>');
                        };
                        readerpdf.readAsDataURL(Archivo[0].files[0]);
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
    });
    /*----------------------------METODOS DEL CONTROLADOR PARA TRAER DATOS----------------*/
    IdMovimiento = 0;
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
        }).done(function(data, x, jq) {
            $("#tblRegistros").html(getTable('tblTrabajos', data));
            $('#tblTrabajos tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto; "><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
            });
            var tblSelected = $('#tblTrabajos').DataTable(tableOptions);
            $('#tblTrabajos tbody').on('click', 'tr', function() {
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
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
                IdMovimiento = parseInt(dtm[0]);
                btnEditar.trigger("click");
            });

            // Apply the search
            tblSelected.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    $('#Encabezado a').on("click", function(e) {
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
        if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getTrabajoByID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: IdMovimiento
                }
            }).done(function(data, x, jq) {

                pnlEditarTrabajo.find("input").val("");

                var trabajo = data[0];

                $.ajax({
                    url: master_url + 'getSucursalesByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: trabajo.Cliente_ID
                    }
                }).done(function(data, x, jq) {


                    var options = '<option></option>';
                    $.each(data, function(k, v) {
                        options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.Sucursal + '</option>';
                    });
                    pnlEditarTrabajo.find("#Sucursal_ID").html(options);
                    pnlEditarTrabajo.find("#Sucursal_ID").select2("val", trabajo.Sucursal_ID);
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
                $.ajax({
                    url: master_url + 'getPreciariosByCliente',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        Cliente_ID: trabajo.Cliente_ID
                    }
                }).done(function(data, x, jq) {


                    var options = '<option></option>';
                    $.each(data, function(k, v) {

                        options += '<option value="' + v.ID + '">' + v.Preciario + '</option>';
                    });
                    pnlEditarTrabajo.find("#Preciario_ID").html(options);
                    pnlEditarTrabajo.find("#Preciario_ID").select2("val", trabajo.Preciario_ID);
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });

                //trae los días
                getCodigoPPTAbyID(trabajo.Codigoppta_ID);

                tBtnEditarConcluir.on("click", function() {
                    if (!$(this).is(':checked')) {
                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                        btnModificar.removeClass('hide');
                    }

                });

                pnlEditarTrabajo.find("#Movimiento").select2("val", trabajo.Movimiento);
                pnlEditarTrabajo.find("#ID").val(trabajo.ID);
                pnlEditarTrabajo.find("#FechaCreacion").val(trabajo.FechaCreacion);
                pnlEditarTrabajo.find("#Cliente_ID").select2("val", trabajo.Cliente_ID);
                pnlEditarTrabajo.find("#Clasificacion").select2("val", trabajo.Clasificacion);
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


                //Control de estatus
                if (trabajo.Estatus === 'Concluido') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-success').text(trabajo.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', true);
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                } else if (trabajo.Estatus === 'Cancelado') {
                    $(".spanEditarEstatus").removeClass('label-default').addClass('label-danger').text(trabajo.Estatus.toUpperCase());
                    tBtnEditarConcluir.addClass('hide');
                    btnModificar.addClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', true);
                    pnlDetalleEditarTrabajo.find("#Conceptos").addClass("disabledDetalle");
                } else {
                    $(".spanEditarEstatus").removeClass('label-danger label-success').addClass('label-default').text(trabajo.Estatus.toUpperCase());
                    tBtnEditarConcluir.prop('checked', false);
                    btnModificar.removeClass('hide');
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                    pnlDetalleEditarTrabajo.find('input, textarea, button, select').attr('disabled', false);
                    pnlDetalleEditarTrabajo.find("#Conceptos").removeClass("disabledDetalle");
                }


                pnlEditarTrabajo.find("#Situacion").select2("val", trabajo.Situacion);

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
                pnlEditarTrabajo.removeClass("hide");
                pnlDetalleEditarTrabajo.removeClass("hide");

                //Setea el importe total
                pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$' + parseFloat(trabajo.Importe) + '</span>');
                getTrabajoDetalleByID(trabajo.ID);
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }


    /*Traer catálogos para el encabezado*/
    function getClientes() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getClientes',
            type: "POST", dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.Cliente + '</option>';
            });
            pnlNuevoTrabajo.find("#Cliente_ID").html(options);
            pnlEditarTrabajo.find("#Cliente_ID").html(options);             //  pnlNuevoTrabajo.find("#Cliente_ID").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
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
        }).done(function(data, x, jq) {


            var options = '<option></option>';
            $.each(data, function(k, v) {

                options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.Sucursal + '</option>';
            });
            pnlNuevoTrabajo.find("#Sucursal_ID").html(options);
            pnlEditarTrabajo.find("#Sucursal_ID").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
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
        }).done(function(data, x, jq) {


            var options = '<option></option>';
            $.each(data, function(k, v) {

                options += '<option value="' + v.ID + '">' + v.Preciario + '</option>';
            });
            pnlNuevoTrabajo.find("#Preciario_ID").html(options);
            pnlEditarTrabajo.find("#Preciario_ID").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
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
        }).done(function(data, x, jq) {

            pnlEditarTrabajo.find("#Sucursal_ID").select2("val", data[0].ID);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
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
        }).done(function(data, x, jq) {

            pnlEditarTrabajo.find("#Preciario_ID").select2("val", data[0].ID);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getCodigosPPTA() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'getCodigosPPTA',
            type: "POST", dataType: "JSON"
        }).done(function(data, x, jq) {
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.Código + '</option>';
            });
            pnlNuevoTrabajo.find("#Codigoppta_ID").html(options);
            pnlEditarTrabajo.find("#Codigoppta_ID").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getCuadrillas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({url: master_url + 'getCuadrillas',
            type: "POST",
            dataType: "JSON"}).done(function(data, x, jq) {
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.Cuadrilla + '</option>';
            });
            pnlNuevoTrabajo.find("#Cuadrilla_ID").html(options);
            pnlEditarTrabajo.find("#Cuadrilla_ID").html(options);
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
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
        }).done(function(data, x, jq) {
            if (data[0] !== undefined) {
                var codigoppta = data[0];
                pnlNuevoTrabajo.find("#Dias").val(codigoppta.Dias);
                pnlEditarTrabajo.find("#Dias").val(codigoppta.Dias);
            }

        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");


        $('#Adjunto').trigger('blur');
        $('#Adjunto').on('blur', function(e) {
            $('#Adjunto').val('');
        });

    }

    function getConceptosXPreciarioID(IDX) {
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
        }).done(function(data, x, jq) {
            mdlTrabajoNuevoConcepto.find("#ConceptosXPreciarioID").html(getTable('tblConceptosXPreciarioID', data));
            mdlTrabajoNuevoConcepto.find('#tblConceptosXPreciarioID tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
            });
            var tblSelected = $('#tblConceptosXPreciarioID').DataTable(tableOptions);
            mdlTrabajoNuevoConcepto.find('#tblConceptosXPreciarioID tbody').on('click', 'tr', function() {
                mdlTrabajoNuevoConcepto.find("#tblConceptosXPreciarioID").find("tr").removeClass("success");
                mdlTrabajoNuevoConcepto.find("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
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
                temp = parseInt(dtm[0]);

                $.ajax({
                    url: master_url + 'getConceptoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    var has_id = true;
                    console.log('AGREGANDO.. CONCEPTO ');
                    if (pnlDetalleNuevoTrabajo.find("tbody tr").length > 0) {
                        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
                            var row_status = $(this).find("td").eq(1).text();
                            if (parseInt(row_status) === parseInt(temp)) {
                                has_id = false;
                                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ESTE CONCEPTO YA HA SIDO AGREGADO', 'danger');
                                return false;
                            }
                        });
                    }
                    if (has_id) {
                        console.log('EDITANDO CONCEPTO ');
                        console.log(data);
                        var nrow = parseInt(tblConceptosXTrabajo.find("tbody tr").length) + 1;
                        console.log('NUMERO DE FILAS: ' + tblConceptosXTrabajo.find("tbody tr").length);
                        var concepto = data[0];
                        var row = '<tr>';
                        row += '<td class="hide">';
                        row += 0;
                        row += '</td>';
                        row += '<td class="hide">';
                        row += concepto.ID;
                        row += '</td>';
                        row += '<td class="hide">';
                        row += (parseInt(tblConceptosXTrabajo.find("tbody tr").length) === 0) ? 1 : nrow;
                        row += '</td>';
                        row += '<td><span class="label label-warning">';
                        row += concepto.Clave;
                        row += '</span></td>';
                        row += '<td>';
                        row += '<select id="IntExt" class="form-control">';
                        row += '<option></option>';
                        row += '<option value="Interior">Interior</option>';
                        row += '<option value="Exterior">Exterior</option>';
                        row += '</select>';
                        row += '</td>';
                        row += '<td><textarea class=\"form-control CustomNuevoDetalleDescripcion\" rows=\"5\" readonly=\"\">';
                        row += concepto.Descripcion;
                        row += '</textarea></td>';
                        row += '<td align="center">';
                        row += '';
                        row += '</td>';
                        row += '<td>';
                        row += concepto.Unidad;
                        row += '</td>';
                        row += '<td class="hide">';
                        row += concepto.Costo;
                        row += '</td>';
                        row += '<td><span class="label label-success">$';
                        row += concepto.Precio; /*8*/
                        row += '</span></td>';
                        row += '<td class="hide">';
                        row += 0;
                        row += '</td>';
                        row += '<td><span class="label label-success">$ ';
                        row += 0;
                        row += '</span></td>';
                        row += '<td class="hide">';
                        row += concepto.Moneda;
                        row += '</td>';
                        row += '<td class="hide">';
                        row += '</td>';
                        row += '<td>';
                        row += '<span class="fa fa-calculator fa-3x customButtonDetalleGenerador mx-auto" onclick="onGeneradorXConcepto(this)"></span>';
                        row += '</td>';
                        row += '<td class="hide">INACTIVO</td>';

                        /*FOTOS*/
                        row += '<td>';
                        row += '<span class="fa fa-camera fa-2x customButtonDetalleGenerador" onclick="onFotosXConcepto(this)"></span>';
                        row += '</td>';
                        row += '<td class="hide">';
                        row += ' <input type="file" class="btn btn-primary" id="Fotos" name="Fotos[]" multiple="multiple">';
                        row += '</td>';

                        /*CROQUIS*/
                        row += '<td>';
                        row += '<span class="fa fa-map fa-2x customButtonDetalleGenerador" onclick="onCroquisXConcepto(this)"></span>';
                        row += '</td>';
                        row += '<td class="hide">';
                        row += ' <input type="file" class="btn btn-primary" id="Croquis" name="Croquis[]" multiple="multiple">';
                        row += '</td>';

                        /*ANEXOS*/
                        row += '<td align="center">';
                        row += '<span class="fa fa-paperclip fa-2x customButtonDetalleGenerador" onclick="onAnexosXConcepto(this)"></span>';
                        row += '</td>';
                        row += '<td class="hide">';
                        row += ' <input type="file" class="btn btn-primary" id="Anexos" name="Anexos[]" multiple="multiple">';
                        row += '</td>';

                        /*ELIMINAR*/
                        row += '<td align="center">';
                        row += '<span class="fa fa-times fa-2x customButtonDetalleEliminar" onclick="onEliminarConcepto(this)"></span>';
                        row += '</td>';
                        row += '</tr>';
                        if (tblConceptosXTrabajo.hasClass("hide")) {
                            tblConceptosXTrabajo.removeClass("hide");
                        }
                        tblConceptosXTrabajo.find("tbody").append(row);
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO EL CONCEPTO', 'success');
                        if (!mdlTrabajoNuevoConcepto.find("#chkMultiple").is(":checked")) {
                            mdlTrabajoNuevoConcepto.modal('hide');
                        }

                    }
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });

            });

            // Apply the search
            tblSelected.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function onCalcularPrecio(evt) {
        var row = $(evt).parent().parent().find("td");
        var cantidad = parseFloat($(evt).val());
        console.log('CANTIDAD: ' + cantidad);
        var precio = parseFloat(row.eq(8).text());
        console.log('PRECIO: ' + precio);
        var importe = cantidad * precio;
        console.log('IMPORTE: ' + $.number(importe, 2, '.', ', '));
        row.eq(10).html(importe);
        row.eq(11).html('<span class="label label-success">$' + $.number(importe, 2, '.', ', ') + '</span>');
        /*IMPORTE TOTAL*/
        var ImporteTotal = pnlDetalleNuevoTrabajo.find("#ImporteTotal");
        var total = 0.0;
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            console.log('* * * * * * * * * * TR * * * * * * * * * * ');
            total += parseFloat($(this).find("td").eq(10).text());
            console.log(total);
            //            console.log($(this).find("td:nth-child(10)").text()); //CSS ACCESS
            console.log('* * * * * * * * * * TR * * * * * * * * * * ');
        });
        ImporteTotal.html('<strong class="spanTotalesDetalle">Importe total: </strong> <span class="text-success spanTotalesDetalle">$ ' + $.number(total, 6, '.', ', ') + '</span>');
    }

    function onEliminarConcepto(evt) {
        //onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');
        $(evt).parent().parent().remove();
        getImporteTotal();
    }

    function onGeneradorXConcepto(evt) {
        var mdlTrabajoNuevoGeneradorPorConcepto = $("#mdlTrabajoNuevoGeneradorPorConcepto");
        var row = $(evt).parent().parent().find("td");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            $(this).find("td").eq(15).text('INACTIVO');
        });
        row.eq(15).text('ACTIVO');
        var xCantidad = row.eq(6).text();

        mdlTrabajoNuevoGeneradorPorConcepto.find("input").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Concepto_ID").val(row.eq(1).text());
        mdlTrabajoNuevoGeneradorPorConcepto.find("#xCantidad").val(xCantidad);
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Generador").val(row.eq(13).text());

        var Generadores = JSON.parse("[" + row.eq(13).text() + "]");
        console.log('************************************GENERADORES ENCONTRADOS****************');
        console.log(Generadores);
        console.log('************************************ END GENERADORES ENCONTRADOS****************');

        /*CREAR TABLA DE GENERADORES*/
        var tblGeneradores = '<br><table  id="tblGeneradores" class="table table-striped table-hover" width="100%">' +
                '<thead>' +
                '<tr>' +
                '<th class="hide">Renglon</th>' +
                '<th class="hide">Concepto_ID</th>' +
                '<th></th>' +
                '<th >Area</th>' +
                '<th>Eje</th>' +
                '<th class="col-md-3">Entre Eje 1</th>' +
                '<th class="col-md-3">Entre Eje 2</th>' +
                '<th class="col-md-1">Largo</th>' +
                '<th>Ancho</th>' +
                '<th class="col-md-2">Alto</th>' +
                '<th class="col-md-2">Cantidad</th>' +
                '<th>Total</th>' +
                '<th></th>' +
                '<th class="hide">Estatus</th>' +
                '</tr>' +
                '</thead>' +
                '<tbody>';

        $.each(Generadores, function(k, v) {
            console.log(k, v);
            tblGeneradores += "<tr>";
            /*RENGLON*/
            tblGeneradores += "<td class='hide'>";
            tblGeneradores += row.eq(2).text();
            tblGeneradores += "</td>";
            /*CONCEPTO_ID*/
            tblGeneradores += "<td class='hide'>";
            tblGeneradores += v.Concepto_ID;
            tblGeneradores += "</td>";
            tblGeneradores += "<td><span class=\"fa fa-times customButtonDetalleEliminar\" onclick=\"onEliminarGenerador(this)\"></span></td>";


            /*AREA*/
            tblGeneradores += "<td>";
            tblGeneradores += v.Area;
            tblGeneradores += "</td>";

            /*EJE*/
            tblGeneradores += "<td>";
            tblGeneradores += v.Eje;
            tblGeneradores += "</td>";
            /*EntreEje1*/
            tblGeneradores += "<td>";
            tblGeneradores += v.EntreEje1;
            tblGeneradores += "</td>";
            /*EntreEje2*/
            tblGeneradores += "<td>";
            tblGeneradores += v.EntreEje2;
            tblGeneradores += "</td>";

            /*Largo*/
            tblGeneradores += "<td>";
            tblGeneradores += v.Largo;
            tblGeneradores += "</td>";
            /*Ancho*/
            tblGeneradores += "<td>";
            tblGeneradores += v.Ancho;
            tblGeneradores += "</td>";
            /*Alto*/
            tblGeneradores += "<td>";
            tblGeneradores += v.Alto;
            tblGeneradores += "</td>";

            /*Cantidad*/
            tblGeneradores += "<td>";
            tblGeneradores += v.Cantidad;
            tblGeneradores += "</td>";
            /*Total*/
            var generador_largo = parseFloat((v.Largo !== '' && parseFloat(v.Largo) !== 0) ? v.Largo : 1);
            var generador_ancho = parseFloat((v.Ancho !== '' && parseFloat(v.Ancho) !== 0) ? v.Ancho : 1);
            var generador_alto = parseFloat((v.Alto !== '' && parseFloat(v.Alto) !== 0) ? v.Alto : 1);
            var generador_cantidad = parseFloat((v.Cantidad !== '' && parseFloat(v.Cantidad) !== 0) ? v.Cantidad : 1);
            tblGeneradores += "<td>";
            tblGeneradores += (generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad));
            tblGeneradores += "</td>";
            tblGeneradores += "<td><span class=\"fa fa-angle-right customButtonDetalleGenerador\" onclick=\"onEditarGeneradorNuevo(this)\"></span></td>";
            tblGeneradores += "<td class=\"hide\">ACTIVO</td>";
            tblGeneradores += "</tr>";
        });
        tblGeneradores += '</tbody>' +
                '</table>';
        NuevoGeneradorXConcepto.html(tblGeneradores);

        var DataTableGeneradores = NuevoGeneradorXConcepto.find("#tblGeneradores");
        if ($.fn.dataTable.isDataTable(DataTableGeneradores)) {

            var tblDataTableGeneradores = DataTableGeneradores.DataTable(tableOptions);
            NuevoGeneradorXConcepto.find("#tblGeneradores").find('tbody').on('click', 'tr', function() {
                DataTableGeneradores.find("tr").removeClass("success");
                DataTableGeneradores.find("tr").removeClass("warning");
                //                console.log(this)
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
        mdlTrabajoNuevoGeneradorPorConcepto.find("#VistaPreviaFotos");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#VistaPreviaCroquis");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#VistaPreviaAnexos");

        getGeneradorImporteTotal();

        mdlTrabajoNuevoGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Generadores").addClass("active in");

        mdlTrabajoNuevoGeneradorPorConcepto.modal('show');
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Area").focus();

        btnCancelarNuevoGenerador.addClass("hide");
        btnMoficarNuevoGenerador.addClass("hide");
    }

    var ImporteTotalGlobal = 0;

    function getImporteTotal() {

        /*IMPORTE TOTAL*/
        var ImporteTotal = pnlDetalleNuevoTrabajo.find("#ImporteTotal");
        var ImporteTotalE = pnlDetalleEditarTrabajo.find("#ImporteTotal");
        var total = 0.0;

//        Recalcula en nuevo
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            console.log('* * * * * * * * * * TR * * * * * * * * * * ');
            total += parseFloat($(this).find("td").eq(10).text());
            console.log(total);
            ImporteTotalGlobal = total;
            //            console.log($(this).find("td:nth-child(10)").text()); //CSS ACCESS
            console.log('* * * * * * * * * * TR * * * * * * * * * * ');
        });

//        Recalcula en nuevo
        $.each(pnlDetalleEditarTrabajo.find("tbody tr"), function() {
            console.log('* * * * * * * * * * TR * * * * * * * * * * ');
            total += parseFloat($(this).find("td").eq(10).text());
            console.log($(this).find("td").eq(10));
            ImporteTotalGlobal = total;
            //            console.log($(this).find("td:nth-child(10)").text()); //CSS ACCESS
            console.log('* * * * * * * * * * TR * * * * * * * * * * ');
        });


        ImporteTotal.html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ ' + $.number(total, 6, '.', ', ') + '</span>');
        ImporteTotalE.html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ ' + $.number(total, 6, '.', ', ') + '</span>');


        //onNotify('<span class="fa fa-check fa-lg"></span>', 'NUEVO IMPORTE: $ ' + $.number(total, 6, '.', ', '), 'success');
    }

    function getGeneradorImporteTotal() {
        /*GENERADOR IMPORTE TOTAL*/
        var GeneradorImporteTotal = mdlTrabajoNuevoGeneradorPorConcepto.find("#GeneradorImporteTotal");
        var total = 0.0;
        mdlTrabajoNuevoGeneradorPorConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
            var row = $(v).find("td");
            total += parseFloat(row.eq(11).text());
            // ImporteTotalGlobal=total;
        });
        GeneradorImporteTotal.html('<strong class="spanTotalesDetalle">Total: </strong><span class="text-success spanTotalesDetalle">' + $.number(total, 6, '.', ', ') + '</span> ');
    }

    function onFotosXConcepto(evt) {
        if (pnlNuevoTrabajo.find("#ID").val() === '' || pnlNuevoTrabajo.find("#ID").val() === "")
        {
            onNotify('<span class="fa fa-exclamation fa-2x"></span>', 'DEBE DE GUARDAR EL MOVIMIENTO', 'danger');
        }
//        var btnFotos;
//        var VistaPreviaFotos = mdlTrabajoNuevoFotosPorConcepto.find("#VistaPreviaFotos");
//        var row = $(evt).parent().parent().find("td");
//        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
//            $(this).find("td").eq(15).text('INACTIVO');
//        });
//        row.eq(15).text('ACTIVO');
//        VistaPreviaFotos.html("");
//        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
//            var row_status = $(this).find("td").eq(15).text();
//            if (row_status === 'ACTIVO') {
//                btnFotos = $(this).find("#Fotos");
//                $.each(btnFotos[0].files, function(k, v) {
//                    console.log(v.name);
//                    VistaPreviaFotos.append('<span class="label label-success">' + v.name + '</span><br>');
//                });
//            }
//        });
//        mdlTrabajoNuevoFotosPorConcepto.modal('show');
    }

    function setFotos() {
        console.log('FOTOS');
        var btnFotos;
        var VistaPreviaFotos = mdlTrabajoNuevoFotosPorConcepto.find("#VistaPreviaFotos");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            var row_status = $(this).find("td").eq(15).text();
            if (row_status === 'ACTIVO') {
                btnFotos = $(this).find("#Fotos");

                btnFotos.change(function() {
                    var imageType = /image.*/;
                    VistaPreviaFotos.html("");
                    console.log(btnFotos[0].files);
                    console.log(btnFotos[0].files.length);
                    $.each(btnFotos[0].files, function(k, v) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            console.log(this);
                            VistaPreviaFotos.append('<span class="label label-success">' + v.name + '</span><br>');
                        };
                        reader.readAsDataURL(v);
                    });
                });

                btnFotos.trigger('click');
            }
        });
    }
    function onCroquisXConcepto(evt) {

        if (pnlNuevoTrabajo.find("#ID").val() === '' || pnlNuevoTrabajo.find("#ID").val() === "")
        {
            onNotify('<span class="fa fa-exclamation fa-2x"></span>', 'DEBE DE GUARDAR EL MOVIMIENTO', 'danger');
        }
//        var btnCroquis;
//        var VistaPreviaCroquis = mdlTrabajoNuevoCroquisPorConcepto.find("#VistaPreviaCroquis");
//        var row = $(evt).parent().parent().find("td");
//        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
//            $(this).find("td").eq(15).text('INACTIVO');
//        });
//        row.eq(15).text('ACTIVO');
//        VistaPreviaCroquis.html("");
//        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
//            var row_status = $(this).find("td").eq(15).text();
//            if (row_status === 'ACTIVO') {
//                btnCroquis = $(this).find("#Croquis");
//                $.each(btnCroquis[0].files, function(k, v) {
//                    console.log(v.name);
//                    VistaPreviaCroquis.append('<span class="label label-success">' + v.name + '</span><br>');
//                });
//            }
//        });
//        mdlTrabajoNuevoCroquisPorConcepto.modal('show');
    }

    function setCroquis() {
        console.log('CROQUIS');
        var btnCroquis;
        var VistaPreviaCroquis = mdlTrabajoNuevoCroquisPorConcepto.find("#VistaPreviaCroquis");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            var row_status = $(this).find("td").eq(15).text();
            console.log(row_status);
            if (row_status === 'ACTIVO') {
                console.log('CROQUIS ACTIVO');
                btnCroquis = $(this).find("#Croquis");

                btnCroquis.change(function() {
                    var imageType = /image.*/;
                    VistaPreviaCroquis.html("");
                    console.log(btnCroquis[0].files);
                    $.each(btnCroquis[0].files, function(k, v) {
                        console.log(v.name);
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            console.log(this);
                            VistaPreviaCroquis.append('<span class="label label-success">' + v.name + '</span><br>');
                        };
                        reader.readAsDataURL(v);
                    });
                });

                btnCroquis.trigger('click');
            }
        });
    }

    function onAnexosXConcepto(evt) {

        if (pnlNuevoTrabajo.find("#ID").val() === '' || pnlNuevoTrabajo.find("#ID").val() === "")
        {
            onNotify('<span class="fa fa-exclamation fa-2x"></span>', 'DEBE DE GUARDAR EL MOVIMIENTO', 'danger');
        }
//        var btnAnexos;
//        var VistaPreviaAnexos = mdlTrabajoNuevoAnexosPorConcepto.find("#VistaPreviaAnexos");
//        var row = $(evt).parent().parent().find("td");
//        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
//            $(this).find("td").eq(15).text('INACTIVO');
//        });
//        row.eq(15).text('ACTIVO');
//        VistaPreviaAnexos.html("");
//        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
//            var row_status = $(this).find("td").eq(15).text();
//            if (row_status === 'ACTIVO') {
//                btnAnexos = $(this).find("#Anexos");
//                $.each(btnAnexos[0].files, function(k, v) {
//                    console.log(v.name);
//                    VistaPreviaAnexos.append('<span class="label label-success">' + v.name + '</span><br>');
//                });
//            }
//        });
//        mdlTrabajoNuevoAnexosPorConcepto.modal('show');
    }

    function setAnexos() {
        console.log('ANEXOS');
        var btnAnexos;
        var VistaPreviaAnexos = mdlTrabajoNuevoAnexosPorConcepto.find("#VistaPreviaAnexos");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            var row_status = $(this).find("td").eq(15).text();
            if (row_status === 'ACTIVO') {
                btnAnexos = $(this).find("#Anexos");
                btnAnexos.change(function() {
                    var imageType = /image.*/;
                    VistaPreviaAnexos.html("");
                    console.log(btnAnexos[0].files);
                    $.each(btnAnexos[0].files, function(k, v) {
                        console.log(v.name);
                        VistaPreviaAnexos.append('<span class="label label-success">' + v.name + '</span><br>');
                    });
                });
                btnAnexos.trigger('click');
            }
        });
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
        }).done(function(data, x, jq) {
            console.log(data);
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
                $.each(pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo tbody tr'), function(k, v) {
                    var td = $(v).find("td");
                    td.eq(0).addClass("hide");
                    td.eq(8).addClass("hide");
                    td.eq(14).addClass("hide");
                });
                pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo tfoot th').each(function() {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
                });
                var tblSelected = pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo').DataTable(tableOptions);
                pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo tbody').on('click', 'tr', function() {
                    pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo").find("tr").removeClass("success");
                    pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo").find("tr").removeClass("warning");
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
                    console.log('* * * * * * *  ID ' + dtm[0] + ' * * * * * ');
                    temp = parseInt(dtm[0]);
                    tempDetalle = parseInt(dtm[0]);
                });

                // Apply the search
                tblSelected.columns().every(function() {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function() {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            } else {
                pnlDetalleEditarTrabajo.find("#Conceptos").html("");
            }
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function onReloadFotosXConcepto(IDX, IDT) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO FOTOS..."
        });

        $.ajax({
            url: master_url + 'getTrabajoFotosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log("* * * * * * * * * * * * * FOTOS * * * * * * * * * * * * * * * ");
            console.log(data);
            if (data.length > 0) {
                VistaPreviaFotosPorConcepto.html("");
                console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
                mdlTrabajoEditarFotosPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function(k, v) {
                    picthumbnail = "";
                    if (nimg === 3) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    console.log(v);
                    console.log(base_url + v.Url);
                    picthumbnail += '<div class="col-md-4">';
                    picthumbnail += '<div class="thumbnail">' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="304" height="236">' +
                            '</a>' +
                            '<div class="caption" align="center">' +
                            '<p>' + v.Observaciones + '</p>' +
                            '<p><button type="button" class="btn btn-raised btn-default hide" onclick="onVistaPreviaXFotoXConcepto(this)"><span class="fa fa-eye"></span><br>VER</button>' +
                            '<button type="button" class="btn btn-raised btn-danger" onclick="onEliminarFotoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></p>' +
                            '</div>' +
                            '</div>';
                    mdlTrabajoEditarFotosPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
                mdlTrabajoEditarFotosPorConcepto.find("#Fotos").html("");
                VistaPreviaFotosPorConcepto.html("");
            }
            getTrabajoDetalleByID(IDT);
        }).fail(function(x, y, z) {
            console.log("* * * * * * * * * * * * * FAIL FOTOS* * * * * * * * * * * * * * * ");
            console.log(x, y, z);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        }).always(function() {
            HoldOn.close();
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
                ID: IDX
            }
        }).done(function(data, x, jq) {
            //   onNotify('<span class="fa fa-check fa-lg"></span>', 'FOTO, ELIMINADA', 'success');
            onReloadFotosXConcepto(IDTD, IDT);
        }).fail(function(x, y, z) {
            console.log("* * * * * * * * * * * * * FAIL ELIMINAR FOTO* * * * * * * * * * * * * * * ");
            console.log(x, y, z);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        }).always(function() {
            HoldOn.close();
        });
    }

    var generador_nuevo_editable = false;

    function onEditarGeneradorNuevo(evt) {
        var row = $(evt).parent().parent().find("td");
        console.log('********************EDITANDO GENERADOR*************');
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Area").val(row.eq(3).text());
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Eje").val(row.eq(4).text());
        mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje1").val(row.eq(5).text());
        mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje2").val(row.eq(6).text());
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val(row.eq(7).text());
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val(row.eq(8).text());
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val(row.eq(9).text());
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val(row.eq(10).text());

        console.log('******************** END EDITANDO GENERADOR*************');

        //oculta botones de nuevo
        mdlTrabajoNuevoGeneradorPorConcepto.find("#btnGuardar").addClass("hide");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#btnCancelarNuevoGenerador").addClass("hide");


        mdlTrabajoNuevoGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").eq(1).addClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#NuevoGenerador").addClass("active in");
        btnCancelarNuevoGenerador.removeClass("hide");
        btnMoficarNuevoGenerador.removeClass("hide");
        row.eq(13).text("EDITANDO");
        generador_nuevo_editable = true;

        console.log('* * * * * TARGET ng CANCELANDO* * * * ');
        console.log('* * * * * END TARGET ng CANCELANDO* * * * ');
    }

    function onEliminarGenerador(evt) {

        //  onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            var row_status = $(this).find("td").eq(15).text();
            if (row_status === 'ACTIVO') {
                var row = $(evt).parent().parent();
                console.log('********************ELIMINANDO GENERADOR*************');
                console.log(row);
                console.log('******************** END ELIMINANDO GENERADOR*************');
            }
        });

        $(evt).parent().parent().remove();

        var cantidad_total_generador = 0;
        mdlTrabajoNuevoGeneradorPorConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
            var row = $(v).find("td");
            cantidad_total_generador += parseFloat(row.eq(11).text());
        });
        console.log('* * * * * * * * * * * * * * * * * * * * CANTIDAD GENERADORES DESPUES DE ELIMINAR * * * * * * * * * * * * * * ')
        console.log(cantidad_total_generador);
        console.log('* * * * * * * * * * * * * * * * * * * * END CANTIDAD GENERADORES DESPUES DE ELIMINAR * * * * * * * * * * * * * * ')
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            if ($(this).find("td").eq(15).text() === "ACTIVO") {
                $(this).find("td").eq(6).text(cantidad_total_generador);
                return false;
            }
        });
        setRecrearGenerador();
    }

    function onCancelarAgregarNuevoGenerador(evt) {
        mdlTrabajoNuevoGeneradorPorConcepto.find("input").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Generadores").addClass("active in");


    }

    function onCancelarModificarNuevoGenerador(evt) {

        console.log('* * * * * TARGET ng CANCELANDO* * * * ');

        console.log('* * * * * END TARGET ng CANCELANDO* * * * ');
        mdlTrabajoNuevoGeneradorPorConcepto.find("#btnGuardar").removeClass("hide");
        $("#btnCancelarNuevoGenerador").removeClass("hide");
        btnCancelarNuevoGenerador.addClass("hide");
        btnMoficarNuevoGenerador.addClass("hide");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Generadores").addClass("active in");

        mdlTrabajoNuevoGeneradorPorConcepto.find("#Area").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Eje").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje1").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje2").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val("");


        getGeneradorImporteTotal();

        generador_nuevo_editable = false;
    }


    function onModificarNuevoGenerador() {
        var cantidadTotalEditada = 0;
        if (generador_nuevo_editable) {
            console.log('********************MODIFICANDO GENERADOR*************');
            mdlTrabajoNuevoGeneradorPorConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
                var row = $(v).find("td");
                if (row.eq(13).text() === "EDITANDO") {
                    console.log(v);
                    console.log(row);
                    row.eq(3).text(mdlTrabajoNuevoGeneradorPorConcepto.find("#Area").val());
                    row.eq(4).text(mdlTrabajoNuevoGeneradorPorConcepto.find("#Eje").val());
                    row.eq(5).text(mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje1").val());
                    row.eq(6).text(mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje2").val());
                    row.eq(7).text(mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val());
                    row.eq(8).text(mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val());
                    row.eq(9).text(mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val());
                    row.eq(10).text(mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val());
                    row.eq(10).text(mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val());

                    var Largo = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== 0) ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() : 0);
                    var Ancho = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== 0) ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() : 0);
                    var Alto = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== 0) ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() : 0);
                    var Cantidad = (parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() !== '') ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() : 0));
                    var subtotal = ((Largo !== 0 && Largo !== "0") ? Largo : 1) * ((Ancho !== 0 && Ancho !== "0") ? Ancho : 1) * ((Alto !== 0 && Alto !== "0") ? Alto : 1) * ((Cantidad !== 0 && Cantidad !== "0") ? Cantidad : 1);
                    row.eq(11).text(subtotal);
                    row.eq(13).text("ACTIVO");

                    mdlTrabajoNuevoGeneradorPorConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
                        var row = $(v).find("td");
                        cantidadTotalEditada += parseFloat(row.eq(11).text());
                    });
                    getGeneradorImporteTotal();
                    getImporteTotal();
                    return false;
                }
            });
            setRecrearGenerador();
            console.log('******************** END MODIFICANDO GENERADOR*************');
        }

        getGeneradorImporteTotal();
        getImporteTotal();
        //Poner la cantidad editada en la columna de cantidad
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            if ($(this).find("td").eq(15).text() === "ACTIVO") {
                $(this).find("td").eq(6).text(cantidadTotalEditada);
                return false;
            }
        });

        mdlTrabajoNuevoGeneradorPorConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
            var row = $(v).find("td");
            if (row.eq(13).text() === "EDITANDO") {
                row.eq(13).text("ACTIVO");
            }
        });
        generador_nuevo_editable = false;
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Area").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Eje").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje1").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje2").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val("");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#btnGuardar").removeClass("hide");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#btnCancelarNuevoGenerador").removeClass("hide");
        btnCancelarNuevoGenerador.addClass("hide");
        btnMoficarNuevoGenerador.addClass("hide");


        mdlTrabajoNuevoGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Generadores").addClass("active in");

        getGeneradorImporteTotal();


    }

    function setRecrearGenerador() {
        var Generador = [];
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            var row_status = $(this).find("td").eq(15).text();
            if (row_status === 'ACTIVO') {
                Generador = [];
                var tt = 0;
                NuevoGeneradorXConcepto.find("#tblGeneradores").find("tbody tr").each(function(k, v) {
                    var row = $(v).find("td");
                    var nuevo_generador = {};
                    nuevo_generador["Concepto_ID"] = row.eq(2).text();
                    nuevo_generador["Area"] = row.eq(3).text();
                    nuevo_generador["Eje"] = row.eq(4).text();
                    nuevo_generador["EntreEje1"] = row.eq(5).text();
                    nuevo_generador["EntreEje2"] = row.eq(6).text();
                    nuevo_generador["Largo"] = parseFloat((parseFloat(row.eq(7).text()) !== '') ? parseFloat(row.eq(7).text()) : 0);
                    nuevo_generador["Ancho"] = parseFloat((parseFloat(row.eq(8).text()) !== '') ? parseFloat(row.eq(8).text()) : 0);
                    nuevo_generador["Alto"] = parseFloat((parseFloat(row.eq(9).text()) !== '') ? parseFloat(row.eq(9).text()) : 0);
                    nuevo_generador["Cantidad"] = parseFloat((parseFloat(row.eq(10).text()) !== '') ? parseFloat(row.eq(10).text()) : 0);
                    console.log('GENERADOR NUEVO ');
                    console.log(row);
                    console.log(nuevo_generador);
                    console.log('END GENERADOR NUEVO');
                    Generador.push(JSON.stringify(nuevo_generador));
                    tt += parseFloat(row.eq(11).text());
                });
                console.log(' * * * GENERADOR CREADO * * * ');
                console.log(Generador);
                console.log(' * * * GENERADOR CREADO * * * ');
                $(this).find("td").eq(6).text(tt);
                /*FIN DE LA EVALUACIÓN*/
                var Precio = parseFloat($(this).find("td").eq(8).text());
                var Total = tt * Precio;
                $(this).find("td").eq(10).text(Total);
                $(this).find("td").eq(11).html('<span class="label label-success">$' + $.number(Total, 2, '.', ', ') + '</span>');
                $(this).find("td").eq(13).text(Generador);
            }
        });
        /*RECALCULAR EL TOTAL*/
        getImporteTotal();
        getGeneradorImporteTotal();
    }

    /********************EDICION********************************************/

    /*FUNCIONES DE EDICION EN EL GENERADOR*/
    function onEliminarConceptoXDetalle(evt, IDX) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ELIMINANDO...'
        });
        $.ajax({
            url: master_url + 'onEliminarConceptoXDetalle',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            var row = $(evt).parent().parent().find("td");
            console.log('* * * * * * * * * * * * FILA (EDICION)* * * * * * * * * * * * * * ');
//            $.each(row, function(k, v) {
//                console.log('* * * * * * * * * * TR * * * * * * * * * * ');
//                console.log(k, v);
//                console.log('* * * * * * * * * * TR * * * * * * * * * * ');
//            });
            console.log('* * * * * * * * * * * * END FILA (EDICION)* * * * * * * * * * * * * * ');
            $(evt).parent().parent().remove();

            console.log('* * * UPDATE IMPORTE * * * ');

            /*MODIFICAR EL IMPORTE DEL TRABAJO*/
            $.ajax({
                url: master_url + 'onModificarImportePorTrabajo',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: pnlEditarTrabajo.find("#ID").val()
                }
            }).done(function(data, x, jq) {
                console.log(data, x, jq);
                if (data !== undefined && data.length > 0) {
                    var dtm = data[0];

                    if (dtm.IMPORTE_TOTAL_TRABAJO !== null) {
                        pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle"> ' + dtm.IMPORTE_TOTAL_TRABAJO + '</span>');
                    } else {
                        pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle"> ' + 0.0 + '</span>');

                    }
                }

            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });
            console.log('* * * END UPDATE IMPORTE * * * ');
            /*FIN MODIFICAR EL IMPORTE DEL TRABAJO*/

            // onNotify('<span class="fa fa-check fa-lg"></span>', 'CONCEPTO ELIMINADO', 'success');
        }).fail(function(x, y, z) {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO NO ELIMINADO', 'danger');
        }).always(function() {
            HoldOn.close();
        });
    }

    function getReloadGeneradoresDetalleXConcepto(IDX) {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getGeneradoresDetalleXConceptoID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log(data);
            /*CREAR TABLA DE GENERADORES*/
            var tblGeneradoresDetalleXConcepto = '<br><table  id="tblGeneradoresDetalleXConcepto" class="table table-striped table-hover" width="100%">' +
                    '<thead>' +
                    '<tr>' +
                    '<th class="hide">IDT</th>' +
                    '<th class="hide">IDG</th>' +
                    '<th class="hide">Concepto_ID</th>' +
                    '<th></th>' +
                    '<th >Area</th>' +
                    '<th>Eje</th>' +
                    '<th class="col-md-3">Entre Eje 1</th>' +
                    '<th class="col-md-3">Entre Eje 2</th>' +
                    '<th class="col-md-1">Largo</th>' +
                    '<th>Ancho</th>' +
                    '<th class="col-md-2">Alto</th>' +
                    '<th class="col-md-2">Cantidad</th>' +
                    '<th>Total</th>' +
                    '<th></th>' +
                    '<th class="hide">Estatus</th>' +
                    '<th class="hide">Precio</th>' +
                    '</tr>' +
                    '</thead>' +
                    '<tbody>';
            console.log('* * * * * * * * * * START READ GENERADOR X CONCEPTO * * * * * * * * * * ');
            $.each(data, function(k, v) {
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
                tblGeneradoresDetalleXConcepto += "<td>";
                tblGeneradoresDetalleXConcepto += v.Eje;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*EntreEje1*/
                tblGeneradoresDetalleXConcepto += "<td>";
                tblGeneradoresDetalleXConcepto += v.EntreEje1;
                tblGeneradoresDetalleXConcepto += "</td>";
                /*EntreEje2*/
                tblGeneradoresDetalleXConcepto += "<td>";
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
            console.log('* * * * * * * * * * END READ GENERADOR X CONCEPTO * * * * * * * * * * ');
            tblGeneradoresDetalleXConcepto += '</tbody></table>';
            mdlTrabajoEditarGeneradorPorConcepto.find("#tblEditarGeneradorXConcepto").html(tblGeneradoresDetalleXConcepto);
            var precio = mdlTrabajoEditarGeneradorPorConcepto.find("#Precio").val();
            var nueva_cantidad = 0;

            mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto").find("tbody tr").each(function(k, v) {
                var row = $(v).find("td");
                nueva_cantidad += parseFloat(row.eq(12).text());
                console.log(row, precio);
                console.log(k, v);
            });
            console.log('* * * CANTIDAD PRECIO * * * ');
            console.log(nueva_cantidad, precio, (parseFloat(nueva_cantidad) * parseFloat(precio)));



            /*AQUIIIII REFRESA TOTAL CANTIDAD*/
            var GeneradorImporteTotalEditar = mdlTrabajoEditarGeneradorPorConcepto.find("#GeneradorImporteTotal");
            GeneradorImporteTotalEditar.html('<strong class="spanTotalesDetalle">Total: </strong><span class="text-success spanTotalesDetalle">' + $.number(nueva_cantidad, 6, '.', ', ') + '</span> ');



            console.log('* * * END CANTIDAD  PRECIO * * * ');
            $.ajax({
                url: master_url + 'onModificarConceptoCantidadEImporte',
                type: "POST",
                data: {
                    ID: IDX,
                    Cantidad: nueva_cantidad,
                    Importe: (parseFloat(nueva_cantidad) * parseFloat(precio))
                }
            }).done(function(data, x, jq) {
                console.log(data, x, jq);

                getTrabajoDetalleByID(mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val());

                console.log('* * * UPDATE IMPORTE * * * ');

                /*MODIFICAR EL IMPORTE DEL TRABAJO*/
                $.ajax({
                    url: master_url + 'onModificarImportePorTrabajo',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val()
                    }
                }).done(function(data, x, jq) {
                    console.log(data, x, jq);
                    if (data !== undefined && data.length > 0) {
                        var dtm = data[0];
                        pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle"> ' + dtm.IMPORTE_TOTAL_TRABAJO + '</span>');

                    }
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
                console.log('* * * END UPDATE IMPORTE * * * ');
                /*FIN MODIFICAR EL IMPORTE DEL TRABAJO*/

            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });

            var DataTableGeneradores = mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto");
            if ($.fn.dataTable.isDataTable(DataTableGeneradores)) {

                var tblDataTableGeneradores = DataTableGeneradores.DataTable(tableOptions);
                mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto").find('tbody').on('click', 'tr', function() {
                    DataTableGeneradores.find("tr").removeClass("success");
                    DataTableGeneradores.find("tr").removeClass("warning");
                    //                console.log(this)
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
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function getGeneradoresDetalleXConceptoID(IDTD, IDT, IDCO) {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getGeneradoresDetalleXConceptoID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDTD
            }
        }).done(function(data, x, jq) {
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
                    '<th >Area</th>' +
                    '<th>Eje</th>' +
                    '<th class="col-md-3">Entre Eje 1</th>' +
                    '<th class="col-md-3">Entre Eje 2</th>' +
                    '<th class="col-md-1">Largo</th>' +
                    '<th>Ancho</th>' +
                    '<th class="col-md-2">Alto</th>' +
                    '<th class="col-md-2">Cantidad</th>' +
                    '<th>Total</th>' +
                    '<th></th>' +
                    '<th class="hide">Estatus</th>' +
                    '<th class="hide">Precio</th>' +
                    '</tr>' +
                    '</thead>' +
                    '<tbody>';
            console.log('* * * * * * * * * * START READ GENERADOR X CONCEPTO * * * * * * * * * * ');
            if (data.length > 0) {
                $.each(data, function(k, v) {
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
                    tblGeneradoresDetalleXConcepto += "<td>";
                    tblGeneradoresDetalleXConcepto += v.Eje;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*EntreEje1*/
                    tblGeneradoresDetalleXConcepto += "<td>";
                    tblGeneradoresDetalleXConcepto += v.EntreEje1;
                    tblGeneradoresDetalleXConcepto += "</td>";
                    /*EntreEje2*/
                    tblGeneradoresDetalleXConcepto += "<td>";
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
                console.log('NO SE ENCONTRARON REGISTROS');
                $.ajax({
                    url: master_url + 'getPrecioPorConceptoID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IDTD,
                        IDCO: IDCO
                    }
                }).done(function(data, x, jq) {
                    console.log('* * * * * * * * * * * * * * * * * * * * PRECIO * * * * * * * * * * * * * * * * * * * * * * ');
                    console.log(data);
                    var dtm = data[0];
                    mdlTrabajoEditarGeneradorPorConcepto.find("#Precio").val(dtm.Precio);
                    console.log('* * * * * * * * * * * * * * * * * * * * END PRECIO * * * * * * * * * * * * * * * * * * * * * * ');
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            }
            console.log('* * * * * * * * * * END READ GENERADOR X CONCEPTO * * * * * * * * * * ');
            tblGeneradoresDetalleXConcepto += '</tbody></table>';
            mdlTrabajoEditarGeneradorPorConcepto.find("#tblEditarGeneradorXConcepto").html(tblGeneradoresDetalleXConcepto);


            var DataTableGeneradores = mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto");
            if ($.fn.dataTable.isDataTable(DataTableGeneradores)) {

                var tblDataTableGeneradores = DataTableGeneradores.DataTable(tableOptions);
                mdlTrabajoEditarGeneradorPorConcepto.find("#tblGeneradoresDetalleXConcepto").find('tbody').on('click', 'tr', function() {
                    DataTableGeneradores.find("tr").removeClass("success");
                    DataTableGeneradores.find("tr").removeClass("warning");
                    //                console.log(this)
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

            //setear cantidadTotal
            mdlTrabajoEditarGeneradorPorConcepto.find("#GeneradorImporteTotal").html('<strong class="spanTotalesDetalle">Total: </strong><span class="text-success spanTotalesDetalle">' + $.number(cantidadTotal, 6, '.', ', ') + '</span> ');


            mdlTrabajoEditarGeneradorPorConcepto.modal('show');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function onEditarGeneradorXID(evt, IDX) {

        var row = $(evt).parent().parent().find("td");
        console.log('********************EDITANDO GENERADOR*************');
        console.log(row);
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

        console.log('******************** END EDITANDO GENERADOR*************');

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
        console.log('* * * * * * * * * * * * * * * *  FRM INI * * * * * * * * * * * * * * * * * * ');
        console.log(frm);
        console.log('* * * * * * * * * * * * * * * * END FRM INI * * * * * * * * * * * * * * * * * * ');
        if (parseFloat(total_generador) !== 0) {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'ACTUALIZANDO...'
            });
            $.ajax({
                url: master_url + 'onModificarGenerador',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                console.log(data);
                mdlTrabajoEditarGeneradorPorConcepto.find("#pnlGenerador").find("div").removeClass("active in");
                mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").removeClass("active");
                mdlTrabajoEditarGeneradorPorConcepto.find(".nav-tabs li").eq(0).addClass("active");
                mdlTrabajoEditarGeneradorPorConcepto.find("#EditarGeneradores").addClass("active in");



              //  onNotify('<span class="fa fa-check fa-lg"></span>', 'GENERADOR MODIFICADO', 'success');

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
            }).fail(function(x, y, z) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR AL MODIFICAR', 'danger');
            }).always(function() {
                HoldOn.close();
            });
        } else {
            console.log(total_generador);
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'ERROR, NECESITA ESPECIFICAR UN VALOR: LARGO, ANCHO, ALTO O CANTIDAD', 'danger');
        }
    }

    function onCancelarEditarModificarGeneradorXID(evt) {

        mdlTrabajoEditarGeneradorPorConcepto.find("#btnGuardar").removeClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelarEditarGenerador").removeClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnModificar").addClass("hide");
        mdlTrabajoEditarGeneradorPorConcepto.find("#btnCancelar").addClass("hide");

        console.log('CANCELANDO MODIFICAR GENERADOR');
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
        getGeneradorImporteTotal();
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

    //***************************************REPORTES*****************************************
    //--------------------------------Reportes----------------------------------
    function onReporteFin49() {

        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteFin49',
            type: "POST",
            data: {
                ID: IdMovimiento
            }
        }).done(function(data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'FIN 49, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }


    function onReporteResumenPartidas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteResumenPartidas',
            type: "POST",
            data: {
                ID: IdMovimiento
            }
        }).done(function(data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'RESUMEN, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function onReportePresupuestoBBVA() {


        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReportePresupuestoBBVA',
            type: "POST",
            data: {
                ID: IdMovimiento
            }
        }).done(function(data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO BBVA, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }


    function onReportePresupuesto() {


        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReportePresupuesto',
            type: "POST",
            data: {
                ID: IdMovimiento
            }
        }).done(function(data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }


    function onReporteGenerador() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteGenerador',
            type: "POST",
            data: {
                ID: IdMovimiento
            }
        }).done(function(data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADOR, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }


    function onReporteCroquis() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: base_url + 'index.php/ctrlTrabajos/onReporteCroquis',
            type: "POST",
            data: {
                ID: IdMovimiento
            }
        }).done(function(data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE CROQUIS, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    function onReporteFotografico() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'onReporteFotografico',
            type: "POST",
            data: {
                ID: IDMOV
            }
        }).done(function(data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOGRAFICO, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    /*************************FIN REPORTES ****************************/



    function onEliminarGeneradorEditar(IDG) {
        $.ajax({
            url: master_url + 'onEliminarGeneradorEditar',
            type: "POST",
            data: {
                ID: IDG
            }
        }).done(function(data, x, jq) {
            //  onNotify('<span class="fa fa-check fa-lg"></span>', 'GENERADOR, ELIMINADO', 'success');
            console.log(data);
            getTrabajoDetalleByID(mdlTrabajoEditarGeneradorPorConcepto.find("#IDT").val());
            getReloadGeneradoresDetalleXConcepto(mdlTrabajoEditarGeneradorPorConcepto.find("#IdTrabajoDetalle").val());
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
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
        }).done(function(data, x, jq) {
            mdlTrabajoNuevoConceptoEditar.find("#ConceptosXPreciarioID").html(getTable('tblConceptosXPreciarioID', data));
            mdlTrabajoNuevoConceptoEditar.find('#tblConceptosXPreciarioID tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
            });
            var tblSelected = $('#tblConceptosXPreciarioID').DataTable(tableOptions);
            mdlTrabajoNuevoConceptoEditar.find('#tblConceptosXPreciarioID tbody').on('click', 'tr', function() {
                mdlTrabajoNuevoConceptoEditar.find("#tblConceptosXPreciarioID").find("tr").removeClass("success");
                mdlTrabajoNuevoConceptoEditar.find("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
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
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            mdlTrabajoNuevoConceptoEditar.find('#tblConceptosXPreciarioID tbody').on('click', 'tr', function() {
                mdlTrabajoNuevoConceptoEditar.find("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm[0]);

                $.ajax({
                    url: master_url + 'getConceptoByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function(data, x, jq) {
                    console.log('* * * * * ** AGREGANDO CONCEPTO * * * * * * * * ');
                    console.log(data);

                    console.log('* * * * * ** END AGREGANDO CONCEPTO * * * * * * * * ');


                    var DataTableConceptos = pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo");
                    if ($.fn.dataTable.isDataTable(DataTableConceptos)) {
                        console.log('Datatable')
                    } else {
                        console.log('NO Datatable')
                    }
                    /**AQUI FALTA VALIDAR QUE EL CONCEPTO NO HAYA SIDO AGREGADO CON ANTERIORIDAD**/
                    var has_id = true;
                    console.log('AGREGANDO.. CONCEPTO PNL EDITAR DETALLE ');


                    if (pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo tbody tr").length > 0) {
                        $.each(pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo tbody tr"), function() {
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
                        }).done(function(data, x, jq) {
                            console.log(pnlEditarTrabajo.find("#EditarDatos").find("#ID").val());

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
                                }).done(function(data, x, jq) {

                                    getTrabajoDetalleByID(pnlEditarTrabajo.find("#EditarDatos").find("#ID").val());
                                }).fail(function(x, y, z) {
                                    console.log(x, y, z);
                                }).always(function() {
                                    HoldOn.close();
                                });
                            } else {
                                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL CONCEPTO NO SE AGREGO, INTENTE DE NUEVO', 'danger');
                            }
                        }).fail(function(x, y, z) {
                            console.log(x, y, z);
                        }).always(function() {
                            HoldOn.close();
                        });
                        if (!mdlTrabajoNuevoConceptoEditar.find("#chkMultiple").is(":checked")) {
                            mdlTrabajoNuevoConceptoEditar.modal('hide');
                        }
                    }

                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });

            });
            // Apply the search
            tblSelected.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }

    btnNuevoConceptoEditar.on("click", function() {
        var Preciario_ID = pnlEditarTrabajo.find("#Preciario_ID").val();
        if (Preciario_ID !== undefined && Preciario_ID !== '' && Preciario_ID > 0) {
            getConceptosXPreciarioIDEditar(Preciario_ID);
            mdlTrabajoNuevoConceptoEditar.modal('show');
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN PRECIARIO', 'danger');
        }
    });


    function getFotosXConceptoID(IDX, IDT) {
        mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarFotosPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarFotosPorConcepto.find("#Fotos").html("");
        VistaPreviaFotosPorConcepto.html("");
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO FOTOS...'
        });

        $.ajax({
            url: master_url + 'getTrabajoFotosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log("* * * * * * * * * * * * * FOTOS * * * * * * * * * * * * * * * ");
            console.log(data);
            if (data.length > 0) {
                VistaPreviaFotosPorConcepto.html("");
                console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
                mdlTrabajoEditarFotosPorConcepto.find("#Fotos").html("<fieldset></fieldset>");
                var nimg = 0;
                var picthumbnail = "";
                $.each(data, function(k, v) {
                    picthumbnail = "";
                    if (nimg === 3) {
                        picthumbnail += '<div class="col-md-12" align="center"><br><hr><br></div>';
                        nimg = 0;
                    }
                    console.log(v);
                    console.log(base_url + v.Url);
                    picthumbnail += '<div class="col-md-4">';
                    picthumbnail += '<div class="thumbnail">' +
                            '<a href="' + base_url + v.Url + '" target="_blank">' + '<img src="' + base_url + v.Url + '" alt="' + base_url + v.Url + '" width="304" height="236">' +
                            '</a>' +
                            '<div class="caption" align="center">' +
                            '<p>' + v.Observaciones + '</p>' +
                            '<p><button type="button" class="btn btn-raised btn-default hide" onclick="onVistaPreviaXFotoXConcepto(this)"><span class="fa fa-eye"></span><br>VER</button>' +
                            '<button type="button" class="btn btn-raised btn-danger" onclick="onEliminarFotoXConcepto(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></p>' +
                            '</div>' +
                            '</div>';
                    mdlTrabajoEditarFotosPorConcepto.find("#Fotos").find("fieldset").append(picthumbnail);
                    nimg++;
                });
            } else {
                VistaPreviaFotosPorConcepto.html("");
            }
        }).fail(function(x, y, z) {
            console.log("* * * * * * * * * * * * * FAIL FOTOS* * * * * * * * * * * * * * * ");
            console.log(x, y, z);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        }).always(function() {
            HoldOn.close();
        });
        mdlTrabajoEditarFotosPorConcepto.modal('show');
    }

    function getCroquisXConceptoID(IDX, IDT) {
        mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarCroquisPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarCroquisPorConcepto.find("#Fotos").html("");
        VistaPreviaCroquisPorConcepto.html("");

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
        }).done(function(data, x, jq) {
            console.log("* * * * * * * * * * * * * CROQUIS * * * * * * * * * * * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
            mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").html("");
            $.each(data, function(k, v) {
                console.log(v);
                console.log(base_url + v.Url);
                mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").append('<a href="' + base_url + v.Url + '" target="_blank"><img src="' + base_url + v.Url + '" class="img-responsive"></a><br><div class="col-md-12" align="center"><button type="button" class="btn btn-raised btn-danger" onclick="onEliminarCroquisXID(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
            });

        }).fail(function(x, y, z) {
            console.log("* * * * * * * * * * * * * FAIL CROQUIS* * * * * * * * * * * * * * * ");
            console.log(x, y, z);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        }).always(function() {
            HoldOn.close();
        });
        mdlTrabajoEditarCroquisPorConcepto.modal('show');
    }

    function getAnexosXConceptoID(IDX, IDT) {
        mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajo").addClass("hide").val(IDT);
        mdlTrabajoEditarAnexosPorConcepto.find("#IdTrabajoDetalle").addClass("hide").val(IDX);
        mdlTrabajoEditarAnexosPorConcepto.find("fieldset").find("div#Anexos").html("");
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO ANEXOS...'
        });
        $.ajax({url: master_url + 'getTrabajoAnexosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log("* * * * * * * * * * * * * ANEXOS * * * * * * * * * * * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
            mdlTrabajoEditarAnexosPorConcepto.find("fieldset").find("div#Anexos").html("");
            if (data.length > 0) {
                var nimg = 0;
                $.each(data, function(k, v) {
                    console.log(v);
                    console.log(base_url + v.Url);
                    if (nimg === 3) {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-12" align="center"><br></div>');
                        nimg = 0;
                    }
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
//                    debugger;
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
                    if (ext === "gif" || ext === "jpg" || ext === "png") {
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
        }).fail(function(x, y, z) {
            console.log("* * * * * * * * * * * * * FAIL ANEXOS* * * * * * * * * * * * * * * ");
            console.log(x, y, z);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        }).always(function() {
            HoldOn.close();
        });
        mdlTrabajoEditarAnexosPorConcepto.modal('show');
    }

    function getImporteTotalDelTrabajoByID(IDX) {

        console.log('* * * OBTENER IMPORTE * * * ');

        /*MODIFICAR EL IMPORTE DEL TRABAJO*/
        $.ajax({
            url: master_url + 'getImporteTotalDelTrabajoByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log(data, x, jq);
            if (data !== undefined && data.length > 0 && data[0] !== undefined && data[0].IMPORTE_TOTAL_TRABAJO !== undefined && data[0].IMPORTE_TOTAL_TRABAJO !== null) {
                var dtm = data[0];
                pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle"> ' + dtm.IMPORTE_TOTAL_TRABAJO + '</span>');
            } else {
                pnlDetalleEditarTrabajo.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe total: </strong><span class="text-success spanTotalesDetalle">$ 0.0</span>');
            }
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
        console.log('* * *FIN OBTENER IMPORTE * * * ');
    }

    function  onChangeIntExtByID(IntExt, IDX) {
        console.log('* * * * * * * * * * * ID EN INTERIOR Y EXTERIOR * * * * * * * * * * * ');
        console.log(IDX, IntExt);
        console.log('* * * * * * * * * * * FIN ID EN INTERIOR Y EXTERIOR * * * * * * * * * * * ');
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
        }).done(function(data, x, jq) {
            console.log(data);
            //  onNotify('<span class="fa fa-check fa-lg"></span>', 'CONCEPTO, MODIFICADO', 'success');
        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }
    function setFotosEditar(evt) {

        mdlTrabajoEditarFotosPorConcepto.find("#fFotos").trigger('click');
    }
    function setCroquisEditar(evt) {

        mdlTrabajoEditarCroquisPorConcepto.find("#fCroquis").trigger('click');
    }
    function setAnexosEditar(evt) {

        mdlTrabajoEditarAnexosPorConcepto.find("#fAnexos").trigger('click');
    }

    function onReloadCroquisXConcepto(IDX, IDT) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO CROQUIS..."
        });
        $.ajax({
            url: master_url + 'getTrabajoCroquisDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log("* * * * * * * * * * * * * CROQUIS * * * * * * * * * * * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
            mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").html("");
            $.each(data, function(k, v) {
                console.log(v);
                console.log(base_url + v.Url);
                mdlTrabajoEditarCroquisPorConcepto.find("#Croquis").append('<a href="' + base_url + v.Url + '" target="_blank"><img src="' + base_url + v.Url + '" class="img-responsive"></a><br><div class="col-md-12" align="center"><button type="button" class="btn btn-raised btn-danger" onclick="onEliminarCroquisXID(' + v.ID + ',' + v.IdTrabajoDetalle + ',' + IDT + ')"><span class="fa fa-times"></span><br>ELIMINAR</button></div>');
            });

            getTrabajoDetalleByID(IDT);
        }).fail(function(x, y, z) {
            console.log("* * * * * * * * * * * * * FAIL CROQUIS* * * * * * * * * * * * * * * ");
            console.log(x, y, z);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        }).always(function() {
            HoldOn.close();
        });
    }


    function onReloadAnexosXConcepto(IDX, IDT) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO ANEXOS..."
        });
        $.ajax({url: master_url + 'getTrabajoAnexosDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log("* * * * * * * * * * * * * ANEXOS * * * * * * * * * * * * * * * ");
            console.log(data);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
            mdlTrabajoEditarAnexosPorConcepto.find("fieldset").find("div#Anexos").html("");
            if (data.length > 0) {
                var nimg = 0;
                $.each(data, function(k, v) {
                    console.log(v);
                    console.log(base_url + v.Url);
                    if (nimg === 3) {
                        mdlTrabajoEditarAnexosPorConcepto.find("#Anexos").append('<div class="col-md-12" align="center"><br></div>');
                        nimg = 0;
                    }
                    var url_file = base_url + v.Url;
                    var ext = getExt(url_file);
//                    debugger;
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
                    if (ext === "gif" || ext === "jpg" || ext === "png") {
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
            getTrabajoDetalleByID(IDT);

        }).fail(function(x, y, z) {
            console.log("* * * * * * * * * * * * * FAIL ANEXOS* * * * * * * * * * * * * * * ");
            console.log(x, y, z);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        }).always(function() {
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
        }).done(function(data, x, jq) {
            //  onNotify('<span class="fa fa-check fa-lg"></span>', 'CROQUIS, ELIMINADO', 'success');
            onReloadCroquisXConcepto(IDTD, IDT);
        }).fail(function(x, y, z) {
            console.log("* * * * * * * * * * * * * FAIL ELIMINAR CROQUIS* * * * * * * * * * * * * * * ");
            console.log(x, y, z);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        }).always(function() {
            HoldOn.close();
        });
    }
    function onEliminarAnexoXConcepto(IDX, IDTD, IDT) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "ELIMINANDO ANEXO..."
        });
        $.ajax({
            url: master_url + 'onEliminarAnexoXConcepto ',
            type: "POST",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log(data);
            onNotify('<span class="fa fa-check fa-lg"></span>', 'ANEXO, ELIMINADO', 'success');
            onReloadAnexosXConcepto(IDTD, IDT);
        }).fail(function(x, y, z) {
            console.log("* * * * * * * * * * * * * FAIL ELIMINAR ANEXO* * * * * * * * * * * * * * * ");
            console.log(x, y, z);
            console.log("* * * * * * * * * * * * * * * * * * * * * * * * * * * * ");
        }).always(function() {
            HoldOn.close();
        });
    }
</script>
<style>

    .super-fullscreen {
        width: 90% !important;
    }
    .medium-fullscreen {
        width: 60% !important;
    }
</style>