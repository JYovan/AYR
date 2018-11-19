<div class="card border-0 m-3" id="MenuTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-3 float-left">
                <legend class="float-left">Servicios con Precios Unitarios</legend>
            </div>
            <div class="col-12 col-sm-9" align="right">
                <button type="button" class="btn btn-info btn-sm mb-2" id="btnVerMisMovimientos"><span class="fa fa-eye fa-1x"></span><br>MIS MOVIMIENTOS</button>
                <button type="button" class="btn btn-info btn-sm mb-2" id="btnVerTodosEnFirme"><span class="fa fa-eye fa-1x"></span><br>TODOS EN FIRME</button>
                <button type="button" class="btn btn-info btn-sm mb-2" id="btnVerTodos"><span class="fa fa-list-ol fa-1x" ></span><br>VER TODOS</button>
            </div>
        </div>
        <div class="row" id="Trabajos">
            <table id="tblTrabajos" class="table table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Folio</th>
                        <th>Estatus</th>
                        <th>Estatus Mov</th>
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
    <div class="modal-dialog  modal-content modal-lg ">
        <div class="modal-header">
            <h5 class="modal-title">Seleccionar Reporte</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <button onclick="onImprimirPreciosUnitarios()" class="btn btn-primary btn-sm "><span class="fa fa-dollar-sign fa-1x"></span><br>IMPRIMIR REPORTE P.U.</button>
        </div>
        <div class="modal-body">
            <button onclick="onImprimirPreciosUnitariosComparacion()" class="btn btn-primary btn-sm "><span class="fa fa-dollar-sign fa-1x"></span><br>IMPRIMIR REPORTE COMPARACIÓN P.U.</button>
        </div>
    </div>
</div>
<!--PANEL DATOS-->
<div class="card border-0 m-3 d-none" id="pnlDatos">
    <div class="card-body text-dark">
        <form id="frmNuevo">
            <div id="CapturaDatos">
                <div class="row ">
                    <div class="col-6 col-sm-4 col-md-5 float-left">
                        <legend>Captura o revisión de precios unitarios del Servicio</legend>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3" id="ImporteTotal" >
                        <strong>Importe del Presupuesto:</strong><h5 class="text-success"><strong></strong></h5>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4" align="right">
                        <button type="button" class="btn btn-primary" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" ><span class="fa fa-arrow-left" ></span></button>
                        <button type="button" class="btn btn-warning" id="btnImprimirReportes" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reportes" ><span class="fa fa-print " ></span></button>
                    </div>
                    <div class="col-12">
                        <hr>
                        <ul class="table-responsive progress-indicator pt-3 pb-2" style="background-color: white; border-radius: 3px;" id="EstatusTrabajo">
                            <li id="stsPedido" step="1">
                                <span class="bubble"></span>
                                1. Pe
                            </li>
                            <li id="stsPresupuesto" step="2">
                                <span class="bubble"></span>
                                2. Pre
                            </li>
                            <li id="stsAutorizacion" step="3">
                                <span class="bubble"></span>
                                3. Aut
                            </li>
                            <li id="stsNoAutorizado" step="4">
                                <span class="bubble"></span>
                                4. No Aut
                            </li>
                            <li id="stsEjecucion" step="5">
                                <span class="bubble"></span>
                                5. Eje
                            </li>
                            <li id="stsFinalizado" step="6">
                                <span class="bubble"></span>
                                6. Fin
                            </li>
                            <li id="stsFacturado" step="7">
                                <span class="bubble"></span>
                                7. Fact
                            </li>
                            <li id="stsPagado" step="8">
                                <span class="bubble"></span>
                                8. Pag
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- PANEL DE DATOS GENERALES-->

                <div class="row">
                    <div class="col-5 col-sm-4 col-md-2 col-lg-2 col-xl-1">
                        <label for="ID" class="control-label">ID</label>
                        <input type="text" id="ID" name="ID" class="form-control form-control-sm" readonly="" placeholder="" readonly="">
                    </div>
                    <div class="col-7 col-sm-4 col-md-2 col-lg-2 col-xl-2">
                        <label for="" class="control-label">Folio Cliente</label>
                        <input type="text" id="FolioCliente" name="FolioCliente" class="form-control form-control-sm"  placeholder="" autofocus="" readonly="">
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-2 col-xl-3">
                        <label for="FechaCreacion" class="control-label">Fecha *</label>
                        <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control form-control-sm"  data-provide="datepicker" data-date-format="dd/mm/yyyy" required="" readonly="">
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <label for="" class="control-label">Cliente*</label>
                        <input type="text" id="Cliente" name="Cliente" class="form-control form-control-sm" readonly="">
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                        <label for="" class="control-label">Sucursal*</label>
                        <input type="text" id="Sucursal" name="Sucursal" class="form-control form-control-sm" readonly="">
                    </div>
                    <!--                    <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                            <label for="" class="control-label">Preciario*</label>
                                            <input type="text" id="Preciario" name="Preciario" class="form-control form-control-sm" readonly="">
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                            <label for="" class="control-label">Centro de Costos</label>
                                            <input type="text" id="CentroCosto" name="CentroCosto" class="form-control form-control-sm" readonly="">
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                            <label for="" class="control-label">Especialidad</label>
                                            <input type="text" id="Especialidad" name="Especialidad" class="form-control form-control-sm" readonly="">
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-4 col-lg-3">
                                            <label for="" class="control-label">Área</label>
                                            <input type="text" id="Area" name="Area" class="form-control form-control-sm" readonly="">
                                        </div>-->
                    <!--                    <div class="col-12 col-sm-8 col-md-12 col-lg-12">
                                            <label for="Observaciones" class="control-label">Observaciones</label>
                                            <input type="text" id="Observaciones" name="Observaciones" class="form-control form-control-sm"  placeholder="ALGUNA REFERENCIA, MINUTA, ETC" readonly="">
                                        </div>-->
                    <div class="col-12 col-sm-12 col-md-6">
                        <label for="" class="control-label">Trabajo Solicitado</label>
                        <textarea class="col-12 form-control" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="1" required="" readonly=""></textarea>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <label for="" class="control-label">Trabajo Requerido</label>
                        <textarea class="col-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="1" required="" readonly=""></textarea>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!--PANEL DETALLE-->
<div class="card border-0 m-3 d-none" id="pnlDetalleTrabajo">
    <div class="card-body">
        <form id="frmNuevoDetalle">
            <div class="row">
                <div class="d-none">
                    <input type="text" id="ConceptoID" name="ConceptoID" class="form-control form-control-sm" readonly="" required="">
                </div>
                <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-1">
                    <label for="" class="control-label">Código</label>
                    <input type="text" id="ClavePreciario" name="ClavePreciario" class="form-control form-control-sm" readonly="" required="">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4">
                    <label for="" class="control-label">Concepto Preciario*</label>
                    <input type="text" id="DescPreciario" name="DescPreciario" class="form-control form-control-sm" readonly="" required="">
                </div>
                <div class="col-6 col-sm-2 col-md-2 col-lg-1 col-xl-1 mt-4">
                    <button type="button" class="btn btn-info" id="btnNuevoConcepto"><span class="fa fa-search "></span> SELECCIONAR CONCEPTO</button>
                </div>
            </div>
            <div class="row mb-3" id="CapturaDetalle">
                <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-1">
                    <label for="" class="control-label">Clave</label>
                    <input type="text" id="Clave" name="Clave" class="form-control form-control-sm" required="">
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3">
                    <label for="" class="control-label">Descripción</label>
                    <input type="text" id="Descripcion" name="Descripcion" class="form-control form-control-sm" required="">
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                    <label for="" class="control-label">Categoría*</label>
                    <select id="Categoria" name="Categoria" class="form-control required" required="">
                        <option value=""></option>
                        <option value="1 MATERIALES">MATERIALES</option>
                        <option value="2 MANO DE OBRA">MANO DE OBRA</option>
                        <option value="3 HERRAMIENTA">HERRAMIENTA</option>
                        <option value="4 TRANSPORTES">TRANSPORTES</option>
                        <option value="5 INDIRECTOS">INDIRECTOS</option>
                        <option value="6 FINANCIAMIENTO">FINANCIAMIENTO</option>
                        <option value="7 OTROS">OTROS</option>
                    </select>
                </div>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2">
                    <label for="" class="control-label">Unidad*</label>
                    <input type="text" id="Unidad" name="Unidad" class="form-control form-control-sm" required="" placeholder="EJ: PZA, JOR, M2">
                </div>
                <div class="col-4 col-sm-4 col-md-2 col-lg-1 col-xl-1">
                    <label for="" class="control-label">Cantidad</label>
                    <input type="text" id="Cantidad" name="Cantidad" class="form-control form-control-sm numbersOnly" required="">
                </div>
                <div class="col-4 col-sm-4 col-md-2 col-lg-1 col-xl-1">
                    <label for="" class="control-label">Costo</label>
                    <input type="text" id="Costo" name="Costo" class="form-control form-control-sm numbersOnly" required="">
                </div>
                <div class="col-6 col-sm-2 col-md-2 col-lg-1 col-xl-1 mt-4">
                    <button type="button" class="btn btn-primary" id="btnGuardar"><span class="fa fa-plus "></span></button>
                </div>
            </div>
        </form>
        <!--NUEVA TABLA CONCEPTOS-->
        <div id="ConceptosAbiertos" class="row" >
            <table id="tblConceptosAbiertos" class="table table-sm display" style="width:100% " >
                <thead>
                    <tr >
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Clave</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Unidad</th>
                        <th>Costo</th>
                        <th>Importe</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>

                </tfoot>
            </table>
        </div>
        <!--FIN NUEVA TABLA DE CONCEPTOS-->
    </div>
</div>
<!--MODAL CONCEPTOS-->
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
                <div id="RegistrosConceptosPreciario">
                    <table id="tblRegistrosConceptosPreciario" class="table table-sm " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Clave</th>
                                <th>Descripción</th>
                                <th>Unidad</th>
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
<!--MODAL EDICION-->
<div id="mdlEdicionDetalle" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content modal-lg">
        <div class="modal-header">
            <h5 class="modal-title">Edición</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="pnlEdicionDatos">
            <form id="frmEdicionDatos">
                <fieldset>
                    <div class="row">
                        <div class="d-none">
                            <input type="text" id="ID" name="ID">
                        </div>
                        <div class="d-none">
                            <input type="text" id="TrabajoID" name="TrabajoID">
                        </div>
                        <div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-3">
                            <label for="" class="control-label">Clave</label>
                            <input type="text" id="Clave" name="Clave" class="form-control form-control-sm" required="">
                        </div>
                        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-5">
                            <label for="" class="control-label">Descripción</label>
                            <input type="text" id="Descripcion" name="Descripcion" class="form-control form-control-sm" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-5">
                            <label for="" class="control-label">Categoría*</label>
                            <select id="Categoria" name="Categoria" class="form-control required" required="">
                                <option value=""></option>
                                <option value="1 MATERIALES">MATERIALES</option>
                                <option value="2 MANO DE OBRA">MANO DE OBRA</option>
                                <option value="3 HERRAMIENTA">HERRAMIENTA</option>
                                <option value="4 TRANSPORTES">TRANSPORTES</option>
                                <option value="5 INDIRECTOS">INDIRECTOS</option>
                                <option value="6 FINANCIAMIENTO">FINANCIAMIENTO</option>
                                <option value="7 OTROS">OTROS</option>
                            </select>
                        </div>
                        <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-3">
                            <label for="" class="control-label">Unidad*</label>
                            <input type="text" id="Unidad" name="Unidad" class="form-control form-control-sm" required="" placeholder="EJ: PZA, JOR, M2">
                        </div>
                        <div class="col-4 col-sm-4 col-md-2 col-lg-1 col-xl-2">
                            <label for="" class="control-label">Cantidad</label>
                            <input type="text" id="Cantidad" name="Cantidad" class="numbersOnly form-control form-control-sm " required="">
                        </div>
                        <div class="col-4 col-sm-4 col-md-2 col-lg-1 col-xl-2">
                            <label for="" class="control-label">Costo</label>
                            <input type="text" id="Costo" name="Costo" class="numbersOnly form-control form-control-sm " required="">
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
        <div class="modal-footer modal-footerFull">
            <button type="button" class="btn btn-primary" id="btnGuardarEdicion" name="btnGuardarEdicion">GUARDAR</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/TrabajosPreciosUnitarios/';
    var TipoAcceso = "<?php echo $this->session->userdata('TipoAcceso'); ?>";
    var IdMovimiento = 0;
    var pnlDatos = $("#pnlDatos");
    var btnNuevo = $("#btnNuevo");
    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");
    var btnVerTodosEnFirme = $('#btnVerTodosEnFirme');
    var btnCancelar = $("#btnCancelar");
    var btnImprimirReportes = pnlDatos.find("#btnImprimirReportes");
    var menuTablero = $('#MenuTablero');

    var pnlDetalleTrabajo = $("#pnlDetalleTrabajo");
    var btnGuardar = pnlDetalleTrabajo.find("#btnGuardar");
    var btnNuevoConcepto = pnlDetalleTrabajo.find("#btnNuevoConcepto");
    var mdlSeleccionarConceptos = $("#mdlSeleccionarConceptos");
    var Conceptos = pnlDetalleTrabajo.find("#Conceptos");
    var tblRegistrosConceptosPreciario = $("#tblRegistrosConceptosPreciario"), RegistrosConceptosPreciario;

    var mdlEdicionDetalle = $('#mdlEdicionDetalle');
    var btnGuardarEdicion = mdlEdicionDetalle.find('#btnGuardarEdicion');
    /*Reportes*/
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    var tblTrabajos = $("#tblTrabajos"), Trabajos;
    var tblConceptosAbiertos = pnlDetalleTrabajo.find("#tblConceptosAbiertos"), ConceptosAbiertos;
    var ImporteTotal;
    $(document).ready(function () {
        tblRegistrosConceptosPreciario.find('tbody').on('click', 'tr', function () {
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
                    pnlDetalleTrabajo.find('#ConceptoID').val(dtm.ID);
                    pnlDetalleTrabajo.find('#ClavePreciario').val(dtm.Clave);
                    pnlDetalleTrabajo.find('#DescPreciario').val(dtm.Descripcion);
                    pnlDetalleTrabajo.find('#CapturaDetalle').find('input').removeClass('disabledForms');
                    pnlDetalleTrabajo.find('#CapturaDetalle').find('#Categoria')[0].selectize.enable();
                    mdlSeleccionarConceptos.modal('hide');
                    pnlDetalleTrabajo.find('#Clave').focus();
                } else {
                    onNotify('fa fa-exclamation fa-lg', 'EL CONCEPTO NO SE SELECCIONÓ, INTENTE DE NUEVO', 'danger');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });
        });


        btnGuardarEdicion.on("click", function () {
            isValid('pnlEdicionDatos');
            if (valido) {
                var frm = new FormData($("#frmEdicionDatos")[0]);
                var cant = parseFloat(mdlEdicionDetalle.find("#Cantidad").val());
                var costo = parseFloat(mdlEdicionDetalle.find("#Costo").val());
                var importe = costo * cant;
                frm.append('Importe', importe);
                HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
                $.ajax({
                    url: master_url + 'onModificarDetalle',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    mdlEdicionDetalle.modal('hide');
                    HoldOn.close();
                    ConceptosAbiertos.ajax.reload();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                    HoldOn.close();
                });
            }
        });
        mdlEdicionDetalle.on('shown.bs.modal', function () {
            mdlEdicionDetalle.find("#Clave").focus();
        });
        getRecords();
        btnGuardar.on("click", function () {
            isValid('pnlDetalleTrabajo');
            if (valido) {
                HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
                var frm = new FormData($("#frmNuevoDetalle")[0]);
                var cant = parseFloat(pnlDetalleTrabajo.find("#Cantidad").val());
                var costo = parseFloat(pnlDetalleTrabajo.find("#Costo").val());
                var importe = costo * cant;
                frm.append('TrabajoID', IdMovimiento);
                frm.append('Importe', importe);
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    HoldOn.close();
                    ConceptosAbiertos.ajax.reload();

                    pnlDetalleTrabajo.find('#CapturaDetalle').find('input').val('');
                    pnlDetalleTrabajo.find("#Categoria")[0].selectize.clear(true);
                    pnlDetalleTrabajo.find('#btnNuevoConcepto').addClass('disabledForms');
                    pnlDetalleTrabajo.find('#Clave').focus();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                    HoldOn.close();
                });
            }
        });
        btnImprimirReportes.on("click", function () {
            mdlReportesEditarTrabajo.modal('show');
        });
        btnVerTodosEnFirme.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
            tblTrabajos.DataTable().column(3).search("Concluido|Borrador", true, false).draw();
            tblTrabajos.DataTable().column(2).search("Pe|Pre|Aut|Eje", true, false).draw();
        });
        btnVerMisMovimientos.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
            Trabajos.column(12).search("1" ? '^' + "<?php print $this->session->userdata('ID') ?>" + '$' : '', true, false).draw();
            tblTrabajos.DataTable().column(3).search("Concluido|Borrador", true, false).draw();
            tblTrabajos.DataTable().column(2).search("Pe|Pre|Aut|Eje", true, false).draw();
        });
        btnVerTodos.on("click", function () {
            tblTrabajos.DataTable().columns().search('').draw();
        });
        btnCancelar.on("click", function () {
            menuTablero.removeClass("d-none");
            pnlDatos.addClass("d-none");
            pnlDetalleTrabajo.addClass("d-none");
            Trabajos.ajax.reload();
        });
        btnNuevoConcepto.on("click", function () {
            if (Preciario !== undefined && Preciario !== '' && Preciario > 0) {
                getConceptosPreciarioByPreciario(Preciario);
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTE PRECIARIO PARA ESTE MOVIMIENTO', 'danger');
            }
        });


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
//                {
//                    "targets": [3],
//                    "visible": false,
//                    "searchable": true
//                },
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
//            "bStateSave": true,
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
                tblTrabajos.DataTable().column(2).search("Pe|Pre|Aut|Eje", true, false).draw();
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
            getTrabajoByID(IdMovimiento);
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
    var Preciario;
    function getTrabajoByID(ID) {
        IdMovimiento = ID;
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
                $.each(data[0], function (k, v) {
                    if (v !== null && v !== '' && v !== 'null') {
                        if (pnlDatos.find("[name='" + k + "']").is('select')) {
                            pnlDatos.find("[name='" + k + "']")[0].selectize.setValue(v);
                        }
                        pnlDatos.find("[name='" + k + "']").val(v);
                    }
                });
                menuTablero.addClass("d-none");
                Estatus = trabajo.Estatus;
                ImporteTotal = trabajo.Importe;
                Preciario = trabajo.Preciario_ID;

                var Importe = parseFloat(ImporteTotal).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                pnlDatos.find("#ImporteTotal").html('<strong class="">Importe del Presupuesto: <strong><h5 class="text-success">$' + Importe + '</h5>');
                /*ACTUALIZAR ESTATUS TRABAJO*/
                var text = '';
                $.each(pnlDatos.find('#EstatusTrabajo > li'), function () {
                    text = $(this).text();
                    text = text.replace("(COMPLETADO)", "");
                    text = text.replace("(ACTIVO)", "");
                    $(this).html("<span class=\"bubble\"></span>" + text);
                });
                pnlDatos.find("#EstatusTrabajo > li").removeClass("completed active");
                var li = pnlDatos.find('#EstatusTrabajo > li');
                switch (trabajo.EstatusTrabajo) {
                    case 'Pedido':
                        li.eq(0).addClass("active");
                        text = li.eq(0).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(0).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Presupuesto':
                        li.slice(0, 1).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(1).addClass("active");
                        text = li.eq(1).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(1).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Autorización':
                        li.slice(0, 2).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(2).addClass("active");
                        text = li.eq(2).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(2).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'No Autorizado':
                        li.slice(0, 3).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(3).addClass("active");
                        text = li.eq(3).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(3).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Ejecución':
                        li.slice(0, 4).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(4).addClass("active");
                        text = li.eq(4).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(4).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Finalizado':
                        li.slice(0, 5).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(5).addClass("active");
                        text = li.eq(5).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(5).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Facturado':
                        li.slice(0, 6).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(6).addClass("active");
                        text = li.eq(6).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(6).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                    case 'Pagado':
                        li.slice(0, 7).addClass("completed");
                        $.each(pnlDatos.find('#EstatusTrabajo > li.completed'), function () {
                            text = $(this).text();
                            $(this).html("<span class=\"bubble\"></span><span class=\"fa fa-check-circle\"></span>" + text + "<br><small>(COMPLETADO)</small>");
                        });
                        li.eq(7).addClass("active");
                        text = li.eq(7).text();
                        pnlDatos.find('#EstatusTrabajo > li:eq(7).active').html("<span class=\"bubble\"></span><span class=\"fa fa-flag\"></span>" + text.replace("(ACTIVO)", "") + "<br><small>(ACTIVO)</small>");
                        break;
                }
                pnlDetalleTrabajo.find('input').val('');
                pnlDetalleTrabajo.find("#Categoria")[0].selectize.clear(true);
                getDetalleAbiertoByID(IdMovimiento);
                pnlDatos.removeClass("d-none");
                pnlDetalleTrabajo.removeClass("d-none");

                $.ajax({
                    url: master_url + 'onComprobarExisteConceptoID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: IdMovimiento
                    }
                }).done(function (data, x, jq) {
                    if (data.length > 0) {
                        pnlDetalleTrabajo.find('#ConceptoID').val(data[0].ConceptoID);
                        pnlDetalleTrabajo.find('#ClavePreciario').val(data[0].Clave);
                        pnlDetalleTrabajo.find('#DescPreciario').val(data[0].Descripcion);
                        pnlDetalleTrabajo.find('#btnNuevoConcepto').addClass('disabledForms');
                        pnlDetalleTrabajo.find('#CapturaDetalle').find('#Categoria')[0].selectize.enable();
                        pnlDetalleTrabajo.find('#CapturaDetalle').find('input').removeClass('disabledForms');
                        pnlDetalleTrabajo.find('#Clave').focus();
                    } else {
                        pnlDetalleTrabajo.find('#btnNuevoConcepto').removeClass('disabledForms');
                        pnlDetalleTrabajo.find('#CapturaDetalle').find('#Categoria')[0].selectize.disable();
                        pnlDetalleTrabajo.find('#CapturaDetalle').find('input').addClass('disabledForms');
                        pnlDetalleTrabajo.find('#btnNuevoConcepto').focus();
                    }
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                })


            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });
        } else {
            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
        }
    }

    function getDetalleAbiertoByID(IDX) {
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        pnlDetalleTrabajo.find('#ConceptosPresupuesto').removeClass('d-none');
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblConceptosAbiertos')) {
            tblConceptosAbiertos.DataTable().destroy();
        }
        ConceptosAbiertos = tblConceptosAbiertos.DataTable({
            "dom": 'rt',
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
                {"data": "Categoria"},
                {"data": "Clave"},
                {"data": "Descripcion"},
                {"data": "Cantidad"},
                {"data": "Unidad"},
                {"data": "Costo"},
                {"data": "Importe"},
                {"data": "Eliminar"}
            ],
            rowGroup: {
                endRender: function (rows, group) {
                    var cantidad = $.number(rows.data().pluck('Cantidad').reduce(function (a, b) {
                        return a + parseFloat(b);
                    }, 0), 2, '.', ',');
                    var importe = $.number(rows.data().pluck('Importe').reduce(function (a, b) {
                        return a + parseFloat(b);
                    }, 0), 2, '.', ',');
                    return $('<tr>').
                            append('<td colspan="2">Total de: ' + group + '</td>').append('<td>' + cantidad + '</td><td  colspan="2"></td><td>$' + importe + '</td><td></td></tr>');
                },
                dataSrc: "Categoria"
            },
            "createdRow": function (row, data, index) {
                $.each($(row).find("td"), function (k, v) {
                    var c = $(v);
                    var index = parseInt(k);
                    switch (index) {
                        case 0:
                            /*COSTO MO*/
                            c.addClass('text-info text-strong');
                            break;
                        case 1:
                            /*CONSUMO*/
                            c.addClass('text-warning text-strong');
                            break;
                        case 3:
                            /*CONSUMO*/
                            c.addClass('text-success text-strong');
                            break;
                        case 4:
                            /*CONSUMO*/
                            c.addClass('text-success text-strong');
                            break;

                        case 6:
                            /*ELIMINAR*/
                            c.addClass('text-danger text-strong');
                            break;

                    }
                });
            },
            "footerCallback": function (row, data, start, end, display) {
                var api = this.api();//Get access to Datatable API
                // Update footer
                var totalCantidad = api.column(4).data().reduce(function (a, b) {
                    var ax = 0, bx = 0;
                    ax = $.isNumeric(a) ? parseFloat(a) : 0;
                    bx = $.isNumeric(getNumberFloat(b)) ? getNumberFloat(b) : 0;
                    return  (ax + bx);
                }, 0);
                $(api.column(4).footer()).html(api.column(4, {page: 'current'}).data().reduce(function (a, b) {
                    return  $.number(parseFloat(totalCantidad), 2, '.', ',');
                }, 0));

                var totalImporte = api.column(7).data().reduce(function (a, b) {
                    var ax = 0, bx = 0;
                    ax = $.isNumeric(a) ? parseFloat(a) : 0;
                    bx = $.isNumeric(getNumberFloat(b)) ? getNumberFloat(b) : 0;
                    return  (ax + bx);
                }, 0);
                $(api.column(7).footer()).html(api.column(7, {page: 'current'}).data().reduce(function (a, b) {
                    return '$' + $.number(parseFloat(totalImporte), 2, '.', ',');
                }, 0));
            },
            keys: false,
            language: lang,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 50,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [1, 'asc']/*ID*/, [0, 'desc']/*ID*/
            ],
            "columnDefs": [
                {
                    "targets": [0],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [1],
                    "visible": false,
                    "searchable": false
                },
                {
                    "targets": [4],
                    "render": function (data, type, row) {
                        return $.number(parseFloat(data), 2, '.', ',');
                    }
                },
                {
                    "targets": [6],
                    "render": function (data, type, row) {
                        return '$' + $.number(parseFloat(data), 2, '.', ',');
                    }
                },
                {
                    "targets": [7],
                    "render": function (data, type, row) {
                        return '$' + $.number(parseFloat(data), 2, '.', ',');
                    }
                }
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });
        tblConceptosAbiertos.find('tbody').on('click', 'tr', function () {
            //HoldOn.open({theme: 'sk-bounce', message: 'CARGANDO DATOS...'});
            tblConceptosAbiertos.find("tbody tr").removeClass("success");
            $(this).addClass("success");
            var tr = $(this);

            var dtm = ConceptosAbiertos.row(this).data();

            mdlEdicionDetalle.find("input").val("");
            $.each(mdlEdicionDetalle.find("select"), function (k, v) {
                mdlEdicionDetalle.find("select")[k].selectize.clear(true);
            });
            mdlEdicionDetalle.modal('show');
            mdlEdicionDetalle.find('#ID').val(dtm.ID);
            mdlEdicionDetalle.find('#TrabajoID').val(IdMovimiento);
            mdlEdicionDetalle.find('#Clave').val(dtm.Clave);
            mdlEdicionDetalle.find('#Descripcion').val(dtm.Descripcion);
            mdlEdicionDetalle.find('#Categoria')[0].selectize.setValue(dtm.Categoria);
            mdlEdicionDetalle.find('#Cantidad').val(dtm.Cantidad);
            mdlEdicionDetalle.find('#Unidad').val(dtm.Unidad);
            mdlEdicionDetalle.find('#Costo').val(dtm.Costo);
            mdlEdicionDetalle.find('#Clave').focus().select();
        });

    }
    function onEliminarDetalle(evt, IDX) {
        swal({
            title: "Confirmar", text: "Deseas eliminar el registro?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: master_url + 'onEliminarDetalle',
                    type: "POST",
                    data: {
                        ID: IDX
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
    function onImprimirPreciosUnitarios() {
        //HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onImprimirReporte',
            type: "POST",
            data: {
                ID: IdMovimiento,
                Cliente: pnlDatos.find('#Cliente').val(),
                Sucursal: pnlDatos.find('#Sucursal').val()
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotifyOld('fa fa-check', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotifyOld('fa fa-exclamation ', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });

    }
    function onImprimirPreciosUnitariosComparacion() {
        //HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onImprimirReporteComparacion',
            type: "POST",
            data: {
                ID: IdMovimiento,
                Cliente: pnlDatos.find('#Cliente').val(),
                Sucursal: pnlDatos.find('#Sucursal').val()
            }
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotifyOld('fa fa-check', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotifyOld('fa fa-exclamation ', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
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
            "dom": 'lfrtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getConceptosXPreciarioID',
                type: "POST",
                "dataSrc": "",
                "data": {
                    Preciario_ID: Preciario_ID
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Clave"},
                {"data": "Descripcion"},
                {"data": "Unidad"}
            ],
            language: lang,
            "autoWidth": true,
            "bStateSave": true,
            "colReorder": true,
            "bLengthChange": true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
            "scrollX": true,
            "deferRender": true,
            "scrollCollapse": false,
            keys: false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                $('#tblRegistrosConceptosPreciario_filter input[type=search]').focus();
                HoldOn.close();
            }
        });
    }
</script>
<style>
    td span.badge{
        font-size: 14px !important;
    }
    table tbody tr td p.CustomDetalleDescripcion{
        max-height: 100px !important;;
        overflow: auto !important;
    }
    table tbody tr td > input[type="text"]{
        width: 100% !important;
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
    .dropdown-item:hover, .dropdown-item:focus {
        color: #0f7864;
        text-decoration: none;
        background-color: transparent;
    }

    table tfoot tr th {
        font-size: 16px;
    }

    .text-strong {
        font-weight: bolder;
    }
    tr.group-start:hover td{
        background-color: #e0e0e0 !important;
        color: #000 !important;
    }
    tr.group-end td{
        background-color: #FFF !important;
        color: #000!important;
    }
    td{
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
</style>