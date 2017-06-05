
<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading">

            <div class="cursor-hand" >Trabajos</div>

        </div>
        <div class="panel-body ">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
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

        <div class="Custompanel-heading dt-EncabezadoControles" >

            <div class="Custompanel-heading row">
                <div class="col-md-5">
                    <div class="cursor-hand" >
                        <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                            <span class="fa fa-arrow-left CustomColorIcon" ></span>
                        </button>
                        Nuevo Trabajo
                    </div>
                </div>






                <div class="col-md-7 panel-title"  >
                    <div class="col-md-4 dt-EncabezadoControles " align="right">
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnReportes" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copiar Movimiento">
                            <span class="fa fa-clone" ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnReportes" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Reportes">
                            <span class="fa fa-print " ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnReportes" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descargar Conceptos">
                            <span class="fa fa-download"></span>
                        </button>
                    </div>

                    <div class="col-md-4 " align="right">
                        <div class="togglebutton customLabelToggle" >
                            <br>
                            <label>
                                <input type="checkbox" id="Concluir" name="Concluir" >Concluir
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 " align="right">
                        <button type="button" class="btn btn-raised btn-primary" id="btnGuardar">GUARDAR</button>
                    </div>
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
                                    <label for="">Esta Completado?</label>
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



<!--PANEL NUEVO DETALLE-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleNuevoTrabajo">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-8">
                    <div class="cursor-hand" >Conceptos </div>
                </div>
                <div id="ImporteTotal" class="col-md-4" align="right">
                    <h4 class="text-success">$ 0.0</h4>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                </div>
                <div class="col-md-12 table-responsive" id="Conceptos" align="center">
                    <table  id="tblConceptosXTrabajo" class="table table-striped table-hover hide" width="100%">
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
                                <th>Moneda</th>
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
        </div>
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
<div id="mdlTrabajoNuevoGeneradorPorConcepto" class="modal animated bounceInDown">
    <div class="modal-dialog medium-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">GENERADOR</h4>
            </div>
            <div class="modal-body">
                <fieldset>
                    <div class="col-md-12 hide">
                        <input type="text" id="Concepto_ID" name="Concepto_ID" class="form-control hide">
                        <textarea id="Generador" name="Generador" rows="4" cols="20" class="hide">
                        </textarea>
                        <input type="number" id="xCantidad" min="0" value="0" name="xCantidad" class="form-control hide">
                    </div>
                    <div class="col-md-12">
                        <label for="">Area</label>
                        <input type="text" id="Area" name="Area" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Eje</label>
                        <input type="text" id="Eje" name="Eje" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Localización eje 1</label>
                        <input type="text" id="EntreEje1" name="EntreEje1" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Localización eje 2</label>
                        <input type="text" id="EntreEje2" name="EntreEje2" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="">Largo</label>
                        <input type="number" id="Largo" min="0" name="Largo" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="">Ancho</label>
                        <input type="number" id="Ancho" min="0" name="Ancho" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="">Alto</label>
                        <input type="number" id="Alto" min="0" name="Alto" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Cantidad</label>
                        <input type="number" id="Cantidad" min="0" name="Cantidad" class="form-control">
                    </div>
                    <div class="col-md-12 table-responsive" id="GeneradorXConcepto" align="center">

                    </div>
                </fieldset>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span><br>CERRAR</button>
                <button type="button" class="btn btn-primary" id="btnGuardar"><span class="fa fa-check"></span><br>GUARDAR</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL DETALLE - FOTOS POR CONCEPTO-->
<div id="mdlTrabajoNuevoFotosPorConcepto" class="modal animated bounceInDown">
    <div class="modal-dialog medium-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">GENERADOR</h4>
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
    <div class="modal-dialog medium-fullscreen">
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
    <div class="modal-dialog medium-fullscreen">
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

            <div class="Custompanel-heading row">

                <div class="col-md-5">
                    <div class="cursor-hand" >
                        <button type="button" class="btn btn-default " id="btnCancelarModificar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                            <span class="fa fa-arrow-left CustomColorIcon" ></span>
                        </button>
                        Editar Trabajo
                    </div>
                </div>


                <div class="col-md-7 panel-title"  >
                    <div class="col-md-4 dt-EncabezadoControles " align="right">
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnReportes" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Copiar Movimiento">
                            <span class="fa fa-clone" ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnReportes" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Reportes">
                            <span class="fa fa-print " ></span>
                        </button>
                        <button type="button" class="btn btn-default CustomColorIcon" id="btnReportes" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Descargar Conceptos">
                            <span class="fa fa-download"></span>
                        </button>
                    </div>

                    <div class="col-md-4 " align="right">
                        <div class="togglebutton customLabelToggle" >
                            <br>
                            <label>
                                <input type="checkbox" id="Concluir" name="Concluir" >Concluir
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 " align="right">
                        <button type="button" class="btn btn-raised btn-primary" id="btnModificar">GUARDAR</button>
                    </div>
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


<!--PANEL EDITAR DETALLE-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleEditarTrabajo">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-8">
                    <div class="cursor-hand" >Conceptos </div>
                </div>
                <div id="ImporteTotal" class="col-md-4" align="right">
                    <h4 class="text-success">$ 0.0</h4>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x" ></span><br>AGREGAR</button>
                </div>
                <div class="col-md-12 table-responsive" id="Conceptos" align="center">
                    <table  id="tblConceptosXTrabajo" class="table table-striped table-hover hide" width="100%">
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
                                <th>Moneda</th>
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
    var pnlDetalleNuevoTrabajo = $("#pnlDetalleNuevoTrabajo");
    var btnNuevoConcepto = pnlDetalleNuevoTrabajo.find("#btnNuevoConcepto");
    var btnEliminarConcepto = pnlDetalleNuevoTrabajo.find("#btnEliminarConcepto");
    var tblConceptosXTrabajo = pnlDetalleNuevoTrabajo.find("#tblConceptosXTrabajo");
    var mdlTrabajoNuevoConcepto = $("#mdlTrabajoNuevoConcepto");
    var Conceptos = pnlDetalleNuevoTrabajo.find("#Conceptos");
    /*Detalle*/
    var mdlTrabajoNuevoGeneradorPorConcepto = $("#mdlTrabajoNuevoGeneradorPorConcepto");
    var mdlTrabajoNuevoFotosPorConcepto = $("#mdlTrabajoNuevoFotosPorConcepto");
    var mdlTrabajoNuevoCroquisPorConcepto = $("#mdlTrabajoNuevoCroquisPorConcepto");
    var mdlTrabajoNuevoAnexosPorConcepto = $("#mdlTrabajoNuevoAnexosPorConcepto");
    var btnGuardarGeneradorXConcepto = mdlTrabajoNuevoGeneradorPorConcepto.find("#btnGuardar");
    var GeneradorXConcepto = mdlTrabajoNuevoGeneradorPorConcepto.find("#GeneradorXConcepto");
    var tBtnConcluir = pnlNuevoTrabajo.find("#Concluir");
    var tBtnEditarConcluir = pnlEditarTrabajo.find("#Concluir");
    var pnlDetalleEditarTrabajo = $("#pnlDetalleEditarTrabajo");
    var Conceptos = pnlDetalleEditarTrabajo.find("#Conceptos");

    var currentDate = new Date();
    $(document).ready(function() {

        btnGuardarGeneradorXConcepto.on("click", function() {
            var generador_string = mdlTrabajoNuevoGeneradorPorConcepto.find("#Generador").val();
            var Generador = [];
            var nuevo_generador = {};
            nuevo_generador["Concepto_ID"] = mdlTrabajoNuevoGeneradorPorConcepto.find("#Concepto_ID").val();
            nuevo_generador["Area"] = mdlTrabajoNuevoGeneradorPorConcepto.find("#Area").val();
            nuevo_generador["Eje"] = mdlTrabajoNuevoGeneradorPorConcepto.find("#Eje").val();
            nuevo_generador["EntreEje1"] = mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje1").val();
            nuevo_generador["EntreEje2"] = mdlTrabajoNuevoGeneradorPorConcepto.find("#EntreEje2").val();
            nuevo_generador["Largo"] = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== '') ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() : 0);
            nuevo_generador["Ancho"] = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== '') ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() : 0);
            nuevo_generador["Alto"] = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== '') ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() : 0);
            nuevo_generador["Cantidad"] = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() !== '') ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() : 0);
            if (generador_string.length > 0) {

                Generador.push(generador_string);
                Generador.push(JSON.stringify(nuevo_generador));
                console.log('* * * * * * * * * * * * * * * * GENERADOR CON OBJETO PREVIO * * * * *');

                console.log(JSON.parse("[" + Generador + "]"));
                var Generador_con_objetos = JSON.parse("[" + Generador + "]");
                console.log(Generador_con_objetos);

                console.log('* * * * * * * * * * * * * * * * END GENERADOR CON OBJETO PREVIO * * * * *');
            } else {
                Generador.push(JSON.stringify(nuevo_generador));
                console.log('* * * * * * * * * * * * * * * * GENERADOR SIN OBJETO PREVIO * * * * *');
                console.log(Generador);
            }

            $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
                var row_status = $(this).find("td").eq(15).text();
                if (row_status === 'ACTIVO') {
                    /*EVALUAR LA CANTIDAD*/
                    var xCantidad = (parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#xCantidad").val() !== '') ? mdlTrabajoNuevoGeneradorPorConcepto.find("#xCantidad").val() : 0));
                    var Largo = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() !== 0) ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Largo").val() : 1);
                    var Ancho = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() !== 0) ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Ancho").val() : 1);
                    var Alto = parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== '' && mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() !== 0) ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Alto").val() : 1);
                    var Cantidad = (parseFloat((mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() !== '') ? mdlTrabajoNuevoGeneradorPorConcepto.find("#Cantidad").val() : 0));
                    console.log('**********************DATOS A EVALUAR**************************')
                    console.log(xCantidad, Largo, Ancho, Alto, Cantidad);
                    console.log('**********************END  DATOS A EVALUAR**************************')
                    xCantidad = xCantidad + (Largo * Ancho * Alto * ((Cantidad === 0) ? 1 : Cantidad));
                    console.log('CANTIDAD FINAL : ' + xCantidad);
                    $(this).find("td").eq(6).text(xCantidad);

                    /*FIN DE LA EVALUACIÓN*/

                    var Precio = parseFloat($(this).find("td").eq(8).text());
                    var Total = xCantidad * Precio;
                    $(this).find("td").eq(10).text(Total);
                    $(this).find("td").eq(11).html('<span class="label label-success">$' + $.number(Total, 2, '.', ', ') + '</span>');
                    $(this).find("td").eq(13).text(Generador);
                    mdlTrabajoNuevoGeneradorPorConcepto.modal('hide');
                    return false;
                }
            });
            getImporteTotal();
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
                    getRecords();
                }).fail(function(x, y, z) {
                    console.log(x, y, z);
                }).always(function() {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnEditar.on("click", function() {


            if (tBtnEditarConcluir.is(':checked')) {
                btnModificar.addClass('hide');
                $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
            } else {

                btnModificar.removeClass('hide');
            }

            tBtnEditarConcluir.on("click", function() {
                if (!$(this).is(':checked')) {
                    $('#frmEditar').find('input, textarea, button, select').attr('disabled', false);
                    btnModificar.removeClass('hide');
                }

            });



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
                    pnlDetalleEditarTrabajo.removeClass("hide");
                    getTrabajoDetalleByID(trabajo.ID);
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
                }).done(function(data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO EL TRABAJO', 'success');


                    if (tBtnEditarConcluir.is(':checked')) {
                        btnModificar.addClass('hide');
                        $('#frmEditar').find('input, textarea, button, select').attr('disabled', true);
                    } else {

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
                var trabajo_detalle = [];
                var concepto = {};
                //                var conceptos = {};
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
                /*DESCOMENTAR PARA AGREGAR*/
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function(data, x, jq) {

                    if (tBtnConcluir.is(':checked')) {
                        btnGuardar.addClass('hide');
                        $('#frmNuevo').find('input, textarea, button, select').attr('disabled', true);
                    } else {

                    }
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO TRABAJO', 'success');
                    btnCancelar.trigger('click');

                    console.log(data, x, jq);
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
            //  menuTablero.removeClass("hide");
            btnRefrescar.trigger('click');
        });
        btnCancelarModificar.on("click", function() {


            menuTablero.addClass("animated slideInLeft").removeClass("hide");
            pnlEditarTrabajo.addClass("hide");
            pnlDetalleEditarTrabajo.addClass("hide");
            //  menuTablero.removeClass("hide");
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
                        readerpdf.onload = function(e) {
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
        }).done(function(data, x, jq) {
            console.log(data);
            $("#tblRegistros").html(getTable('tblTrabajos', data));
            $('#tblTrabajos tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
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
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            $('#tblTrabajos tbody').on('dblclick', 'tr', function() {
                $("#tblTrabajos").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm[0]);
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
        }).done(function(data, x, jq) {
            var options = '<option></option>';
            $.each(data, function(k, v) {
                options += '<option value="' + v.ID + '">' + v.Cliente + '</option>';
            });
            pnlNuevoTrabajo.find("#Cliente_ID").html(options);
            pnlEditarTrabajo.find("#Cliente_ID").html(options);
            //  pnlNuevoTrabajo.find("#Cliente_ID").html(options);
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
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getCodigosPPTA',
            type: "POST",
            dataType: "JSON"
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
        $.ajax({
            url: master_url + 'getCuadrillas',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            console.log(data);
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
            });
            //DB CLICK FOR EDIT
            mdlTrabajoNuevoConcepto.find('#tblConceptosXPreciarioID tbody').on('dblclick', 'tr', function() {
                mdlTrabajoNuevoConcepto.find("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
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
                        row += '<td>';
                        row += concepto.Descripcion;
                        row += '</td>';
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
                        row += '<td>';
                        row += concepto.Moneda;
                        row += '</td>';
                        row += '<td class="hide">';
                        row += '</td>';
                        row += '<td align="center">';
                        row += '<span class="fa fa-gear fa-2x customButtonDetalleGenerador mx-auto" onclick="onGeneradorXConcepto(this)"></span>';
                        row += '</td>';
                        row += '<td class="hide">INACTIVO</td>';

                        /*FOTOS*/
                        row += '<td align="center">';
                        row += '<span class="fa fa-camera fa-2x customButtonDetalleGenerador" onclick="onFotosXConcepto(this)"></span>';
                        row += '</td>';
                        row += '<td class="hide">';
                        row += ' <input type="file" class="btn btn-primary" id="Fotos" name="Fotos[]" multiple="multiple">';
                        row += '</td>';

                        /*CROQUIS*/
                        row += '<td align="center">';
                        row += '<span class="fa fa-map fa-2x customButtonDetalleGenerador" onclick="onCroquisXConcepto(this)"></span>';
                        row += '</td>';
                        row += '<td class="hide">';
                        row += ' <input type="file" class="btn btn-primary" id="Croquis" name="Croquis">';
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
                        row += '<span class="fa fa-minus fa-2x customButtonDetalleEliminar" onclick="onEliminarConcepto(this)"></span>';
                        row += '</td>';
                        row += '</tr>';
                        if (tblConceptosXTrabajo.hasClass("hide")) {
                            tblConceptosXTrabajo.removeClass("hide");
                        }
                        tblConceptosXTrabajo.find("tbody").append(row);
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'CONCEPTO, AGREGADO', 'success');
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
        ImporteTotal.html('<strong class="text-muted">Importe total:</strong> <strong class="text-success">$ ' + $.number(total, 6, '.', ', ') + '</strong>');
    }
    function onEliminarConcepto(evt) {
        onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');
        $(evt).parent().parent().remove();
        getImporteTotal();
    }
    function onEliminarGenerador(evt) {
        onNotify('<span class="fa fa-check fa-lg"></span>', 'REGISTRO ELIMINADO', 'success');
        $(evt).parent().parent().remove();
        /**/
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            var row_status = $(this).find("td").eq(15).text();
            if (row_status === 'ACTIVO') {

                var nuevo_generador = JSON.parse("[" + row.eq(13).text() + "]");

                $.each(nuevo_generador, function(k, v) {
                    console.log(k, v);

                });
                $(this).find("td").eq(13).text(nuevo_generador);
                return false;
            }
        });
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

        /*CREAR TABLA DE GENERADORES*/
        var tblGeneradores = '<br><table  id="tblGeneradores" class="table table-striped table-hover" width="100%">' +
                '<thead>' +
                '<tr>' +
                '<th class="hide">Renglon</th>' +
                '<th class="hide">Concepto_ID</th>' +
                '<th >Area</th>' +
                '<th>Eje</th>' +
                '<th class="col-md-3">Localización eje 1</th>' +
                '<th class="col-md-3">Localización eje 2</th>' +
                '<th class="col-md-1">Largo</th>' +
                '<th>Ancho</th>' +
                '<th class="col-md-2">Alto</th>' +
                '<th class="col-md-2">Cantidad</th>' +
                '<th>Total</th>' +
                '<th>Eliminar</th>' +
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
            var generador_largo = parseFloat((v.Largo !== '' && parseFloat(v.Largo) > 0) ? v.Largo : 1);
            var generador_ancho = parseFloat((v.Ancho !== '' && parseFloat(v.Ancho) > 0) ? v.Ancho : 1);
            var generador_alto = parseFloat((v.Alto !== '' && parseFloat(v.Alto) > 0) ? v.Alto : 1);
            var generador_cantidad = parseFloat((v.Cantidad !== '' && parseFloat(v.Cantidad) > 0) ? v.Cantidad : 1);
            tblGeneradores += "<td>";
            tblGeneradores += (generador_largo * generador_ancho * generador_alto * ((generador_cantidad === 0) ? 1 : generador_cantidad));
            tblGeneradores += "</td>";
            tblGeneradores += "<td><span class=\"fa fa-minus fa-2x customButtonDetalleEliminar\" onclick=\"onEliminarGenerador(this)\"></span></td>";
            tblGeneradores += "</tr>";
        });
        tblGeneradores += '</tbody>' +
                '</table>';
        GeneradorXConcepto.html(tblGeneradores);

        var DataTableGeneradores = GeneradorXConcepto.find("#tblGeneradores");
        if ($.fn.dataTable.isDataTable(DataTableGeneradores)) {

            var tblDataTableGeneradores = DataTableGeneradores.DataTable(tableOptions);
            DataTableGeneradores.find('tbody').on('click', 'tr', function() {
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
                console.log(dtm);
            });
        } else {
            DataTableGeneradores.DataTable(tableOptions);
        }
        mdlTrabajoNuevoGeneradorPorConcepto.find("#VistaPreviaFotos");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#VistaPreviaCroquis");
        mdlTrabajoNuevoGeneradorPorConcepto.find("#VistaPreviaAnexos");
        mdlTrabajoNuevoGeneradorPorConcepto.modal('show');
        mdlTrabajoNuevoGeneradorPorConcepto.find("#Area").focus();
        console.log('* * * * * * * * * *  ROW * * * * * * * * * * ');
        console.log(row);
        console.log('* * * * * * * * * *  ROW * * * * * * * * * * ');
    }
    function getImporteTotal() {

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
        ImporteTotal.html('<strong class="text-muted">Importe total:</strong> <strong class="text-success">$ ' + $.number(total, 6, '.', ', ') + '</strong>');
        //onNotify('<span class="fa fa-check fa-lg"></span>', 'NUEVO IMPORTE: $ ' + $.number(total, 6, '.', ', '), 'success');
    }

    function onFotosXConcepto(evt) {
        var btnFotos;
        var VistaPreviaFotos = mdlTrabajoNuevoFotosPorConcepto.find("#VistaPreviaFotos");
        var row = $(evt).parent().parent().find("td");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            $(this).find("td").eq(15).text('INACTIVO');
        });
        row.eq(15).text('ACTIVO');
        VistaPreviaFotos.html("");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            var row_status = $(this).find("td").eq(15).text();
            if (row_status === 'ACTIVO') {
                btnFotos = $(this).find("#Fotos");
                $.each(btnFotos[0].files, function(k, v) {
                    console.log(v.name);
                    VistaPreviaFotos.append('<span class="label label-success">' + v.name + '</span><br>');
                });
            }
        });
        mdlTrabajoNuevoFotosPorConcepto.modal('show');
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
        var btnCroquis;
        var VistaPreviaCroquis = mdlTrabajoNuevoCroquisPorConcepto.find("#VistaPreviaCroquis");
        var row = $(evt).parent().parent().find("td");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            $(this).find("td").eq(15).text('INACTIVO');
        });
        row.eq(15).text('ACTIVO');
        VistaPreviaCroquis.html("");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            var row_status = $(this).find("td").eq(15).text();
            if (row_status === 'ACTIVO') {
                btnCroquis = $(this).find("#Croquis");
                $.each(btnCroquis[0].files, function(k, v) {
                    console.log(v.name);
                    VistaPreviaCroquis.append('<span class="label label-success">' + v.name + '</span><br>');
                });
            }
        });
        mdlTrabajoNuevoCroquisPorConcepto.modal('show');
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
        var btnAnexos;
        var VistaPreviaAnexos = mdlTrabajoNuevoAnexosPorConcepto.find("#VistaPreviaAnexos");
        var row = $(evt).parent().parent().find("td");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            $(this).find("td").eq(15).text('INACTIVO');
        });
        row.eq(15).text('ACTIVO');
        VistaPreviaAnexos.html("");
        $.each(pnlDetalleNuevoTrabajo.find("tbody tr"), function() {
            var row_status = $(this).find("td").eq(15).text();
            if (row_status === 'ACTIVO') {
                btnAnexos = $(this).find("#Anexos");
                $.each(btnAnexos[0].files, function(k, v) {
                    console.log(v.name);
                    VistaPreviaAnexos.append('<span class="label label-success">' + v.name + '</span><br>');
                });
            }
        });
        mdlTrabajoNuevoAnexosPorConcepto.modal('show');
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

    function getTrabajoDetalleByID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getTrabajoDetalleByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function(data, x, jq) {
            console.log(data);
            pnlDetalleEditarTrabajo.find("#Conceptos").html(getTable('tblConceptosXTrabajo', data));
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
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                console.log(dtm);
                console.log(dtm[0]);
                console.log('+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++');
                temp = parseInt(dtm[0]);
            });
            //DB CLICK FOR EDIT
            pnlDetalleEditarTrabajo.find('#tblConceptosXTrabajo tbody').on('dblclick', 'tr', function() {
                pnlDetalleEditarTrabajo.find("#tblConceptosXTrabajo").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm[0]);
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

</script>
<style>

    .super-fullscreen {
        width: 90% !important;
    }
    .medium-fullscreen {
        width: 60% !important;
    }
</style>