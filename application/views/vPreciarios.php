<div  class="col-12">
    <div id="pnlPreciario" class="panel panel-default animated fadeIn">
        <div class="panel-heading "> 
            <div class="row">
                <div class="col-sm-6 float-left">
                    <legend class="float-left">Preciarios</legend>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default d-none" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                    <button type="button" class="btn btn-default d-none" id=""><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                    <button type="button" class="btn btn-default d-none" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
                </div>
                <div class="col-12 table-responsive" id="tblRegistros"></div>
                <div id="Preciarios" class="table-responsive">
                    <table id="tblPreciarios" class="table table-sm display " style="width:100%">
                        <thead>
                            <tr> 
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Fecha de creación</th>
                                <th>Cliente</th> 
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<!--PANELES-->
<div id="" class="container-fluid">
    <div class="card border-0  d-none" id="pnlDatos">
        <div class="card-body text-dark">
            <form id="frmNuevo">
                <div class="row">
                    <div class="col-md-4 float-left">
                        <legend>Preciario</legend>
                    </div>
                    <div class="col-md-8" align="right">
                        <button type="button" class="btn btn-primary btn-sm" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" >
                            <span class="fa fa-arrow-left" ></span>
                        </button>
                        <button type="button" class="btn btn-raised btn-warning btn-sm" id="btnImprimirReportesEditarTrabajo"><span class="fa fa-print fa-1x"></span> IMPRIMIR</button>
                        <button type="button" class="btn btn-raised btn-danger btn-sm" id="btnEliminar"><span class="fa fa-trash fa-1x"></span> ELIMINAR</button>
                        <button type="button" class="btn btn-raised btn-info btn-sm" id="btnGuardar"><span class="fa fa-save fa-1x"></span> GUARDAR</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-12">
                        <div class="form-group label-static">
                            <label for="Nombre" class="control-label">Nombre*</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre"  required="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group label-static">
                            <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                            <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Estatus*</label>
                            <select id="Estatus" name="Estatus" class="form-control" required="">
                                <option value=""></option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Tipo*</label>
                            <select id="Tipo" name="Tipo" class="form-control" required="">
                                <option value=""></option>
                                <option value="MANTENIMIENTO">Mantenimiento</option>
                                <option value="OBRA">Obra</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Cliente*</label>
                            <select id="Cliente_ID" name="Cliente_ID" class="form-control" required="">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <br>
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                    <div class="col-12">
                        <div class="alert alert-dismissible alert-warning">
                            <h4><strong>IMPORTANTE!</strong></h4>
                            <p>Todas las columnas deben de estar sin espacios, caracteres especiales, guiones, acentos, etc.</p>
                            <p><strong>Columnas requeridas: </strong>id, Concepto, Unidad, Precio, Tipo, Moneda</p>
                        </div>
                    </div>
                    <div class="col-12" align="center">
                        <input type="file" id="RutaArchivo" name="RutaArchivo" class="d-none">
                        <button type="button" class="btn btn-default fa-lg" id="btnArchivo" name="btnArchivo">
                            <span class="fa fa-upload fa-2x">
                            </span>
                            Seleccionar Archivo
                        </button>
                        <br>
                    </div>
                    <div id="VistaPrevia" class="col-12 table-responsive" align="center" style="overflow-y: auto; height: 250px;"></div>
                    <div class="col-12 d-none">
                        <textarea id="json_preciario" name="json_preciario" rows="2" cols="10" class="form-control">
                        </textarea>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<!--PANEL DETALLE-->
<div class="col-6 col-12">
    <div class="panel panel-default d-none animated zoomIn" id="pnlDetalleConceptos">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-8">
                    <div class="cursor-hand" >Conceptos </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default d-none" id="btnRefrescarConceptos"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
                </div>
                <div class="col-12">
                    <br>
                </div>
                <!--                <div id="PreciarioEspecifico" class="col-12 table-responsive">
                                </div>-->
                <div id="PreciarioEspecifico" class="table-responsive">
                    <table id="tblPreciarioEspecifico" class="table table-sm display " style="width:100%">
                        <thead>
                            <tr> 
                                <th>ID</th>
                                <th>Clave</th>
                                <th>Descripcion</th>
                                <th>Unidad</th>
                                <th>Costo</th>
                                <th>Moneda</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<!--NUEVO CONCEPTO-->
<div id="mdlNuevoConcepto" class="modal modal-fullscreen fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull  modal-content modal-contentFull modal-lg">
        <div class="modal-header modal-headerFull">
            <h4 class="modal-title modal-titleFull">Nuevo Concepto</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body modal-bodyFull">
            <div class="col-12 d-none">
                <input type="text" class="form-control d-none" id="ID" name="ID">
            </div>
            <div id="pnlConceptos" class="col-12" >
                <div class="col-12">
                    <ul class="nav nav-tabs">
                        <li  class="nav-item" class="active"><a href="#Conceptos" data-toggle="tab" class="nav-link  active show">Conceptos</a></li>
                        <li class="nav-item"><a href="#Categorias" data-toggle="tab" class="nav-link">Categorías</a></li>
                        <li class="nav-item"><a href="#SubCategorias" data-toggle="tab" class="nav-link">Sub Categorías</a></li>
                        <li class="nav-item"><a href="#SubSubCategorias" data-toggle="tab" class="nav-link">Sub Sub Categorías</a></li>
                    </ul>
                </div>
                <div class="col-12"></div>
                <div class="col-12"><span><br></span></div>
                <div id="pnlTabConceptos" class="tab-content">
                    <div class="tab-pane fade active show" id="Conceptos">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 d-none">
                                        <input type="text" id="IDConcepto" name="IDConcepto" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group label-static">
                                            <label for="Clave" class="control-label">Clave</label>
                                            <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group label-static">
                                    <label for="Descripcion" class="control-label">Descripción</label>
                                    <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="4" cols="20">
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="Costo" class="control-label">Costo</label>
                                    <input type="number" id="Costo" name="Costo" class="form-control" required="" placeholder="SIN SIGNOS, NI COMAS. EJ: 150.01234">
                                </div>
                            </div>

                            <div class="col-6 col-3">
                                <div class="form-group label-static">
                                    <label for="Moneda" class="control-label">Moneda</label>
                                    <select id="Moneda" name="Moneda" class="form-control" required="">
                                        <option value=""></option>
                                        <option value="USD">USD</option>
                                        <option value="MXN">MXN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="Unidad" class="control-label">Unidad</label>
                                    <input type="text" id="Unidad" name="Unidad" class="form-control CustomUppercase" required="" placeholder="EJ: PZA">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="Categoria" class="control-label">Categoría</label>
                                    <select id="Categoria" name="Categoria" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="SubCategoria" class="control-label">Sub Categoría</label>
                                    <select id="SubCategoria" name="SubCategoria" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="SubSubCategoria" class="control-label">Sub Sub Categoría</label>
                                    <select id="SubSubCategoria" name="SubSubCategoria" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <center><h3>Datos para fichero</h3></center>
                            <hr>
                        </div>
                        <DIV class="row">
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="Contrato" class="control-label">Contrato</label>
                                    <input type="number" id="Contrato" name="Contrato" class="form-control" >
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="Posicion" class="control-label">Posición</label>
                                    <input type="number" id="Posicion" name="Posicion" class="form-control" >
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="Material" class="control-label">Material</label>
                                    <input type="number" id="Material" name="Material" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="TextoMaterial" class="control-label">Texto Material</label>
                                    <input type="text" id="TextoMaterial" name="TextoMaterial" class="form-control CustomUppercase">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="Familia" class="control-label">Familia</label>
                                    <input type="number" id="Familia" name="Familia" class="form-control">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group label-static">
                                    <label for="UnidadFichero" class="control-label">Unidad Fichero</label>
                                    <input type="text" id="UnidadFichero" name="UnidadFichero" class="form-control CustomUppercase" placeholder="EJ: PZA">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Categorias">
                        <div class="" id="mdlNuevaCategoria">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group label-static">
                                            <label for="Clave" class="control-label">Clave</label>
                                            <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group label-static">
                                    <label for="Descripcion" class="control-label">Descripción</label>
                                    <textarea type="text" class="form-control CustomUppercase" id="Descripcion" name="Descripcion" rows="2" cols="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="SubCategorias">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group label-static">
                                        <label for="Clave" class="control-label">Clave</label>
                                        <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group label-static">
                                <label for="Descripcion" class="control-label">Descripción</label>
                                <textarea type="text" class="form-control CustomUppercase" id="Descripcion" name="Descripcion" rows="2" cols="10"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group label-static">
                                <label for="PreciarioCategoria_ID" class="control-label">Categoría</label>
                                <select id="PreciarioCategoria_ID" name="PreciarioCategoria_ID" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="SubSubCategorias">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group label-static">
                                        <label for="Clave" class="control-label">Clave</label>
                                        <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group label-static">
                                <label for="Descripcion" class="control-label">Descripción</label>
                                <textarea type="text" class="form-control CustomUppercase" id="Descripcion" name="Descripcion" rows="2" cols="10"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group label-static">
                                <label for="PreciarioCategoria_ID" class="control-label">Categoría</label>
                                <select id="PreciarioCategoria_ID" name="PreciarioCategoria_ID" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group label-static">
                                <label for="PreciarioSubCategorias_ID" class="control-label">Sub Categoría</label>
                                <select id="PreciarioSubCategorias_ID" name="PreciarioSubCategorias_ID" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer modal-footerFull" >
            <!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-default" id="btnCancelarConcepto" name="btnCancelarConcepto" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnGuardarConcepto" name="btnGuardarConcepto">GUARDAR</button>
            <!--BOTONES CATEGORIA-->
            <button type="button" class="btn btn-default d-none" id="btnCancelarCategoria" name="btnCancelarCategoria" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary d-none" id="btnGuardarCategoria" name="btnGuardarCategoria">GUARDAR</button>
            <!--BOTONES SUBCATEGORIA-->
            <button type="button" class="btn btn-default d-none" id="btnCancelarSubCategoria" name="btnCancelarSubCategoria" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary d-none" id="btnGuardarSubCategoria" name="btnGuardarSubCategoria">GUARDAR</button>
            <!--BOTONES SUBSUBCATEGORIA-->
            <button type="button" class="btn btn-default d-none" id="btnCancelarSubSubCategoria" name="btnCancelarSubSubCategoria" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary d-none" id="btnGuardarSubSubCategoria" name="btnGuardarSubSubCategoria">GUARDAR</button>
        </div>
    </div>
</div>
<!--EDITAR CONCEPTO-->
<div id="mdlEditarConcepto" class="modal modal-fullscreen fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull  modal-content modal-contentFull modal-lg">
        <div class="modal-header modal-headerFull">
            <h4 class="modal-title modal-titleFull">Editar</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmEditar">
                <div class="row">
                    <div class="col-md-12 d-none">
                        <input type="text" id="IDConcepto" name="IDConcepto" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="Clave" class="control-label">Clave</label>
                            <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20">
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="Costo" class="control-label">Costo</label>
                            <input type="number" id="Costo" name="Costo" class="form-control" required="" placeholder="SIN SIGNOS, NI COMAS. EJ: 150.01234">
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="Moneda" class="control-label">Moneda</label>
                            <select id="Moneda" name="Moneda" class="form-control" required="">
                                <option value=""></option>
                                <option value="USD">USD</option>
                                <option value="MXN">MXN</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="Unidad" class="control-label">Unidad</label>
                            <input type="text" id="Unidad" name="Unidad" class="form-control CustomUppercase" required="" placeholder="EJ: PZA">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="Categoria" class="control-label">Categoría</label>
                            <select id="Categoria" name="Categoria" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="SubCategoria" class="control-label">Sub Categoría</label>
                            <select id="SubCategoria" name="SubCategoria" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="SubSubCategoria" class="control-label">Sub Sub Categoría</label>
                            <select id="SubSubCategoria" name="SubSubCategoria" class="form-control">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <center><h3>Datos para fichero</h3></center>
                        <hr>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="Contrato" class="control-label">Contrato</label>
                            <input type="number" id="Contrato" name="Contrato" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="Posicion" class="control-label">Posición</label>
                            <input type="number" id="Posicion" name="Posicion" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="Material" class="control-label">Material</label>
                            <input type="number" id="Material" name="Material" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="TextoMaterial" class="control-label">Texto Material</label>
                            <input type="text" id="TextoMaterial" name="TextoMaterial" class="form-control CustomUppercase">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="Familia" class="control-label">Familia</label>
                            <input type="number" id="Familia" name="Familia" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group label-static">
                            <label for="UnidadFichero" class="control-label">Unidad Fichero</label>
                            <input type="text" id="UnidadFichero" name="UnidadFichero" class="form-control CustomUppercase" placeholder="EJ: PZA">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer modal-footerFull">
            <!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnModificarConcepto" name="btnModificarConcepto">GUARDAR</button>
        </div>
    </div>
</div>
<!--Confirmacion-->
<div id="mdlConfirmar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>
</div>

<div id="mdlConfirmarEliminarConcepto" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmar</h4>
        </div>
        <div class="modal-body">
            Deseas eliminar el registro?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnConfirmarEliminarConcepto">ACEPTAR</button>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Preciarios/';
    var pnlPreciario = $("#pnlPreciario");
    var btnNuevo = $("#btnNuevo");
    var pnlDatos = $("#pnlDatos");
    var btnGuardar = pnlDatos.find("#btnGuardar");
    var btnCancelar = pnlDatos.find("#btnCancelar");
    var btnRefrescar = $("#btnRefrescar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    var btnEliminar = $("#btnEliminar");
    var btnEditar = $("#btnEditar");
    var btnModificar = pnlDatos.find("#btnGuardarEditar");
    var PreciarioEspecifico = pnlDatos.find("#PreciarioEspecifico");
    var mdlEditarConcepto = $("#mdlEditarConcepto");
    var mdlConfirmarEliminarConcepto = $("#mdlConfirmarEliminarConcepto");
    var btnConfirmarEliminarConcepto = $("#btnConfirmarEliminarConcepto");
    var btnModificarConcepto = mdlEditarConcepto.find("#btnModificarConcepto");
    var btnRefrescarConceptos = $("#btnRefrescarConceptos");
    var btnCancelarModificacion = mdlEditarConcepto.find("#btnCancelarModificacion");
    var btnNuevoConcepto = $("#btnNuevoConcepto");
    var mdlNuevoConcepto = $("#mdlNuevoConcepto");
    var btnGuardarConcepto = mdlNuevoConcepto.find("#btnGuardarConcepto");
    var btnCancelarConcepto = mdlNuevoConcepto.find("#btnCancelarConcepto");
    var btnNuevaCategoria = mdlNuevoConcepto.find("#btnNuevaCategoria");
    var btnGuardarCategoria = mdlNuevoConcepto.find("#btnGuardarCategoria");
    var btnGuardarSubCategoria = mdlNuevoConcepto.find("#btnGuardarSubCategoria");
    var btnGuardarSubSubCategoria = mdlNuevoConcepto.find("#btnGuardarSubSubCategoria");
    var btnCancelarCategoria = mdlNuevoConcepto.find("#btnCancelarCategoria");
    var btnCancelarSubCategoria = mdlNuevoConcepto.find("#btnCancelarSubCategoria");
    var btnCancelarSubSubCategoria = mdlNuevoConcepto.find("#btnCancelarSubSubCategoria");
    var pnlConceptos = pnlDatos.find("#pnlConceptos");
    //Variables de controles para subir archivo
    var Archivo = pnlDatos.find("#RutaArchivo");
    var btnArchivo = pnlDatos.find("#btnArchivo");
    var VistaPrevia = pnlDatos.find("#VistaPrevia");
    var currentDate = new Date();
//Variables de conceptos detalle
    /*Detalle*/
    var pnlDetalleConceptos = $("#pnlDetalleConceptos");
    $(document).ready(function () {
        btnGuardarSubSubCategoria.click(function () {
            var frm = new FormData();
            frm.append('Preciario_ID', mdlNuevoConcepto.find("#ID").val());
            frm.append('Clave', mdlNuevoConcepto.find("#SubSubCategorias").find("#Clave").val());
            frm.append('Descripcion', mdlNuevoConcepto.find("#SubSubCategorias").find("#Descripcion").val());
            frm.append('PreciarioCategoria_ID', mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioCategoria_ID").val());
            frm.append('PreciarioSubCategorias_ID', mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioSubCategorias_ID").val());
            $.ajax({
                url: master_url + 'onAgregarSubSubCategoria',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO UNA NUEVA SUBSUB CATEGORIA', 'success');
                console.log(data, x, jq);
                mdlNuevoConcepto.find("#SubSubCategorias").find("#Clave").val("");
                mdlNuevoConcepto.find("#SubSubCategorias").find("#Descripcion").val("");
                mdlNuevoConcepto.find("[name='PreciarioCategoria_ID']")[0].selectize.clear(true);
                mdlNuevoConcepto.find("[name='PreciarioSubCategorias_ID']")[0].selectize.clear(true);

                getCategorias(mdlNuevoConcepto.find("#ID").val());
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnGuardarSubCategoria.click(function () {
            var frm = new FormData();
            frm.append('Preciario_ID', mdlNuevoConcepto.find("#ID").val());
            frm.append('Clave', mdlNuevoConcepto.find("#SubCategorias").find("#Clave").val());
            frm.append('Descripcion', mdlNuevoConcepto.find("#SubCategorias").find("#Descripcion").val());
            frm.append('PreciarioCategoria_ID', mdlNuevoConcepto.find("#SubCategorias").find("#PreciarioCategoria_ID").val());
            $.ajax({
                url: master_url + 'onAgregarSubCategoria',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO UNA NUEVA SUB CATEGORIA', 'success');
                console.log(data, x, jq);
                mdlNuevoConcepto.find("#SubCategorias").find("#Clave").val("");
                mdlNuevoConcepto.find("#SubCategorias").find("#Descripcion").val("");
                mdlNuevoConcepto.find("[name='PreciarioCategoria_ID']")[0].selectize.clear(true);
                getCategorias(mdlNuevoConcepto.find("#ID").val());
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnGuardarCategoria.click(function () {
            var frm = new FormData();
            frm.append('Preciario_ID', mdlNuevoConcepto.find("#ID").val());
            frm.append('Clave', mdlNuevoConcepto.find("#Categorias").find("#Clave").val());
            frm.append('Descripcion', mdlNuevoConcepto.find("#Categorias").find("#Descripcion").val());
            $.ajax({
                url: master_url + 'onAgregarCategoria',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO UNA NUEVA CATEGORIA', 'success');
                console.log(data, x, jq);
                mdlNuevoConcepto.find("#Categorias").find("#Clave").val("");
                mdlNuevoConcepto.find("#Categorias").find("#Descripcion").val("");
                getCategorias(mdlNuevoConcepto.find("#ID").val());
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var target = $(e.target).attr("href"); // activated tab
            switch (target) {
                case "#Conceptos":
                    btnCancelarConcepto.removeClass("d-none");
                    btnGuardarConcepto.removeClass("d-none");
                    btnCancelarCategoria.addClass("d-none");
                    btnGuardarCategoria.addClass("d-none");
                    btnCancelarSubCategoria.addClass("d-none");
                    btnGuardarSubCategoria.addClass("d-none");
                    btnCancelarSubSubCategoria.addClass("d-none");
                    btnGuardarSubSubCategoria.addClass("d-none");
                    break;
                case "#Categorias":
                    btnCancelarConcepto.addClass("d-none");
                    btnGuardarConcepto.addClass("d-none");
                    btnCancelarCategoria.removeClass("d-none");
                    btnGuardarCategoria.removeClass("d-none");
                    btnCancelarSubCategoria.addClass("d-none");
                    btnGuardarSubCategoria.addClass("d-none");
                    btnCancelarSubSubCategoria.addClass("d-none");
                    btnGuardarSubSubCategoria.addClass("d-none");
                    break;
                case "#SubCategorias":
                    btnCancelarConcepto.addClass("d-none");
                    btnGuardarConcepto.addClass("d-none");
                    btnCancelarCategoria.addClass("d-none");
                    btnGuardarCategoria.addClass("d-none");
                    btnCancelarSubCategoria.removeClass("d-none");
                    btnGuardarSubCategoria.removeClass("d-none");
                    btnCancelarSubSubCategoria.addClass("d-none");
                    btnGuardarSubSubCategoria.addClass("d-none");
                    break;
                case "#SubSubCategorias":
                    btnCancelarConcepto.addClass("d-none");
                    btnGuardarConcepto.addClass("d-none");
                    btnCancelarCategoria.addClass("d-none");
                    btnGuardarCategoria.addClass("d-none");
                    btnCancelarSubCategoria.addClass("d-none");
                    btnGuardarSubCategoria.addClass("d-none");
                    btnCancelarSubSubCategoria.removeClass("d-none");
                    btnGuardarSubSubCategoria.removeClass("d-none");
                    break;
                default:
                    break;
            }
        });
        btnCancelar.click(function () {
            pnlPreciario.removeClass("d-none");
            pnlDatos.addClass("d-none");
            pnlDetalleConceptos.addClass("d-none");
            btnRefrescar.trigger('click');
        });
        btnCancelarSubSubCategoria.click(function () {
            pnlConceptos.find("#SubSubCategorias").removeClass("active in");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#SubSubCategorias").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#SubSubCategorias").find("select"), function (k, v) {
                $(v)[0].selectize.clear(true);
            });
        });
        btnCancelarSubCategoria.click(function () {
            pnlConceptos.find("#SubCategorias").removeClass("active in");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#SubCategorias").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#SubCategorias").find("select"), function (k, v) {
                $(v)[0].selectize.clear(true);
            });
        });
        btnCancelarCategoria.click(function () {
            pnlConceptos.find("#Categorias").removeClass("active in");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#Categorias").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#Categorias").find("select"), function (k, v) {
                $(v)[0].selectize.clear(true);
            });
        });
        btnNuevaCategoria.click(function () {
            mdlNuevaCategoria.removeClass("d-none");
        });
        btnCancelarConcepto.click(function () {
            pnlConceptos.find("#Conceptos").removeClass("active in");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#Conceptos").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#Conceptos").find("select"), function (k, v) {
                $(v)[0].selectize.clear(true);
            });
        });
        btnGuardarConcepto.click(function () {
            if (Clave !== undefined && Clave !== null && Clave !== '' && Clave.length > 0 &&
                    Descripcion !== undefined && Descripcion !== null && Descripcion !== '' && Descripcion.length > 0) {
                var frm = new FormData();
                frm.append('ID', pnlDatos.find("#ID").val());
                frm.append('Clave', mdlNuevoConcepto.find("#Conceptos").find("#Clave").val());
                frm.append('Descripcion', mdlNuevoConcepto.find("#Conceptos").find("#Descripcion").val());
                frm.append('Costo', mdlNuevoConcepto.find("#Conceptos").find("#Costo").val());
                frm.append('Moneda', mdlNuevoConcepto.find("#Conceptos").find("#Moneda").val());
                frm.append('Unidad', mdlNuevoConcepto.find("#Conceptos").find("#Unidad").val());

                frm.append('Contrato', mdlNuevoConcepto.find("#Conceptos").find("#Contrato").val());
                frm.append('Posicion', mdlNuevoConcepto.find("#Conceptos").find("#Posicion").val());
                frm.append('Material', mdlNuevoConcepto.find("#Conceptos").find("#Material").val());
                frm.append('TextoMaterial', mdlNuevoConcepto.find("#Conceptos").find("#TextoMaterial").val());
                frm.append('Familia', mdlNuevoConcepto.find("#Conceptos").find("#Familia").val());
                frm.append('UnidadFichero', mdlNuevoConcepto.find("#Conceptos").find("#UnidadFichero").val());

                frm.append('Categoria', mdlNuevoConcepto.find("#Conceptos").find("#Categoria").val());
                frm.append('SubCategoria', mdlNuevoConcepto.find("#Conceptos").find("#SubCategoria").val());
                frm.append('SubSubCategoria', mdlNuevoConcepto.find("#Conceptos").find("#SubSubCategoria").val());
                $.ajax({
                    url: master_url + 'onAgregarConcepto',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO UN CONCEPTO', 'success');
                    console.log(data, x, jq);
                    btnRefrescarConceptos.trigger('click');
                    mdlNuevoConcepto.modal("d-none");
                    HoldOn.close();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', 'ALGUNOS CAMPOS SON REQUERIDOS', 'danger');
            }
        });
        btnNuevoConcepto.click(function () {
            mdlNuevoConcepto.find(".nav-tabs li").removeClass("active");
            $(mdlNuevoConcepto.find(".nav-tabs li")[0]).addClass("active");
            console.log(mdlNuevoConcepto.find(".nav-tabs"));
            mdlNuevoConcepto.find("#Conceptos").addClass("active in");
            mdlNuevoConcepto.find("#Categorias").removeClass("active in");
            mdlNuevoConcepto.find("#SubSubCategorias").removeClass("active in");
            mdlNuevoConcepto.find("#SubSubCategorias").removeClass("active in");
            btnCancelarConcepto.removeClass("d-none");
            btnGuardarConcepto.removeClass("d-none");
            btnCancelarCategoria.addClass("d-none");
            btnGuardarCategoria.addClass("d-none");
            btnCancelarSubCategoria.addClass("d-none");
            btnGuardarSubCategoria.addClass("d-none");
            btnCancelarSubSubCategoria.addClass("d-none");
            btnGuardarSubSubCategoria.addClass("d-none");
            mdlNuevoConcepto.find("input").val("");
            mdlNuevoConcepto.find("textarea").val("");
            mdlNuevoConcepto.find("select")[0].selectize.clear(true);

            getCategorias(pnlDatos.find("#ID").val());
            mdlNuevoConcepto.find("#ID").val(pnlDatos.find("#ID").val());
            mdlNuevoConcepto.modal('show');
            btnCancelarConcepto.removeClass("d-none");
            btnGuardarConcepto.removeClass("d-none");
        });
        btnCancelarModificacion.click(function () {
            mdlEditarConcepto.find("#IDConcepto").val("");
            mdlEditarConcepto.find("#Clave").val("");
            mdlEditarConcepto.find("#Descripcion").val("");
            mdlEditarConcepto.find("#Costo").val("");
            mdlEditarConcepto.find("#Moneda")[0].selectize.clear(true);
            mdlEditarConcepto.find("#Unidad").val("");

            mdlEditarConcepto.find("#Contrato").val("");
            mdlEditarConcepto.find("#Posicion").val("");
            mdlEditarConcepto.find("#Material").val("");
            mdlEditarConcepto.find("#TextoMaterial").val("");
            mdlEditarConcepto.find("#Familia").val("");
            mdlEditarConcepto.find("#UnidadFichero").val("");

            mdlEditarConcepto.find("#Categoria")[0].selectize.clear(true);
            mdlEditarConcepto.find("#SubCategoria")[0].selectize.clear(true);
            mdlEditarConcepto.find("#SubSubCategoria")[0].selectize.clear(true);
            mdlEditarConcepto.modal('d-none');
        });
        btnRefrescarConceptos.click(function () {
            getConceptosXPreciarioID(pnlDatos.find("#ID").val());
        });
        btnModificarConcepto.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "GUARDANDO... POR FAVOR ESPERE"
            });
            var frm = new FormData();
            frm.append('ID', mdlEditarConcepto.find("#IDConcepto").val());
            frm.append('Clave', mdlEditarConcepto.find("#Clave").val());
            frm.append('Descripcion', mdlEditarConcepto.find("#Descripcion").val());
            frm.append('Costo', mdlEditarConcepto.find("#Costo").val());
            frm.append('Moneda', mdlEditarConcepto.find("#Moneda").val());
            frm.append('Unidad', mdlEditarConcepto.find("#Unidad").val());

            frm.append('Contrato', mdlEditarConcepto.find("#Contrato").val());
            frm.append('Posicion', mdlEditarConcepto.find("#Posicion").val());
            frm.append('Material', mdlEditarConcepto.find("#Material").val());
            frm.append('TextoMaterial', mdlEditarConcepto.find("#TextoMaterial").val());
            frm.append('Familia', mdlEditarConcepto.find("#Familia").val());
            frm.append('UnidadFichero', mdlEditarConcepto.find("#UnidadFichero").val());

            frm.append('Categoria', mdlEditarConcepto.find("#Categoria").val());
            frm.append('SubCategoria', mdlEditarConcepto.find("#SubCategoria").val());
            frm.append('SubSubCategoria', mdlEditarConcepto.find("#SubSubCategoria").val());
            $.ajax({
                url: master_url + 'onEditarConcepto',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UN CONCEPTO', 'success');
                console.log(data, x, jq);
                btnRefrescarConceptos.trigger('click');
                mdlEditarConcepto.modal("d-none");
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        mdlEditarConcepto.find("#Categoria").change(function () {
            getSubCategorias(pnlDatos.find("#ID").val(), $(this).val());
        });
        //Evento clic del boton confirmar borrar
        btnConfirmarEliminar.click(function () {
            if (tempID !== 0 && tempID !== undefined && tempID > 0) {
                //Muestra el modal
                mdlConfirmar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
//Confirma la eliminacion del concepto
        btnConfirmarEliminarConcepto.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ELIMINANDO..."
            });
            $.ajax({
                url: master_url + 'onEliminarConcepto',
                type: "POST",
                data: {
                    ID: IdConceptoEliminar
                }
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO ELIMINADO', 'danger');
                btnRefrescarConceptos.trigger('click');
                mdlConfirmarEliminarConcepto.modal('d-none');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnEliminar.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "ELIMINANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'onEliminar',
                type: "POST",
                data: {
                    ID: tempID
                }
            }).done(function (data, x, jq) {
                mdlConfirmar.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PRECIARIO ELIMINADO', 'danger');
                pnlPreciario.addClass("animated zoomIn").removeClass("d-none");
                pnlDatos.addClass("d-none");
                pnlDetalleConceptos.addClass("d-none");
                btnRefrescar.trigger('click');
                getRecords();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnRefrescar.click(function () {
            getRecords();
        });
        btnGuardar.click(function () {
            isValid('pnlDatos');
            if (valido) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "GUARDANDO... POR FAVOR ESPERE"
                });
                if (!nuevo) {
                    var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);
                    frm.append('PRECIARIO', pnlDatos.find("#json_preciario").val());
                    $.ajax({
                        url: master_url + 'onAgregar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        pnlDatos.addClass('d-none');
                        pnlPreciario.removeClass('d-none');
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO UN NUEVO PRECIARIO', 'success');
                        btnRefrescar.trigger('click');
                        HoldOn.close();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {

                    });
                } else {
                    var frm = new FormData(pnlDatos.find("#frmEditar")[0]);
                    $.ajax({
                        url: master_url + 'onModificar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        pnlPreciario.removeClass('d-none');
                        pnlDatos.addClass('d-none');
                        pnlDetalleConceptos.addClass('d-none');
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UN PRECIARIO', 'success');
                        console.log(data, x, jq);
                        btnRefrescar.trigger('click');
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', '* DEBE DE COMPLETAR LOS CAMPOS REQUERIDOS *', 'danger');
            }
        });
        btnModificar.click(function () {
        });
        btnNuevo.click(function () {
            btnEliminar.addClass("d-none");
            pnlDatos.find("#VistaPrevia,#btnArchivo").removeClass("d-none");
            tblConceptos.html("");
            pnlDatos.find("select")[0].selectize.clear(true);
            pnlDatos.find("input").val("");
            pnlDatos.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlDatos.removeClass('d-none');
            pnlPreciario.addClass("d-none");
        });
        btnEditar.click(function () {
            if (tempID !== 0 && tempID !== undefined && tempID > 0) {
                btnEliminar.removeClass("d-none");
                $.ajax({
                    url: master_url + 'getPreciarioByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: tempID
                    }
                }).done(function (data, x, jq) {
                    var p = data[0];
                    pnlDatos.find("#VistaPrevia,#btnArchivo").addClass("d-none");
                    pnlDatos.find("#ID").val(p.ID);
                    pnlDatos.find("#Nombre").val(p.Nombre);
                    pnlDatos.find("#Tipo").val(p.Tipo);
                    pnlDatos.find("#FechaCreacion").val(p.FechaCreacion);

                    pnlDatos.find("select")[0].selectize.clear(true);
                    pnlDatos.find("[name='Cliente_ID']")[0].selectize.setValue(p.Cliente_ID);
                    pnlDatos.find("[name='Estatus']")[0].selectize.setValue(p.Estatus);
                    pnlDatos.find("[name='Tipo']")[0].selectize.setValue(p.Tipo);

                    pnlDatos.find("#p.specifico").html("");
                    getCategorias(p.ID);
                    getConceptosXPreciarioID(p.ID);
                    pnlPreciario.addClass('d-none');
                    pnlDatos.addClass("animated zoomIn").removeClass('d-none');
                    pnlDetalleConceptos.removeClass("d-none");
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        btnArchivo.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            Archivo.change(function () {
                if (Archivo[0].files[0] !== undefined) {
                    var extension = getExt(Archivo[0].files[0].name);
                    console.log('EXTENSION ' + extension);
                    if (extension === "xlsx" || extension === "xls" || extension === "csv") {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            console.log("onload", new Date());
                            var data = e.target.result;
                            var wb;
                            var arr = fixdata(data);
                            wb = X.read(btoa(arr), {type: 'base64'});
                            is_filled = true;
                            onProcesarLibroXLS(wb);
                        };
                        if (Archivo[0].files[0] !== undefined && Archivo[0].files[0] !== null) {
                            reader.readAsArrayBuffer(Archivo[0].files[0]);
                        }
                        HoldOn.close();
                    } else {
                        HoldOn.close();
                        is_filled = false;
                    }
                } else {
                    HoldOn.close();
                }
            });
            $("html").focusin(function () {
                if (Archivo[0].files[0] !== undefined && is_filled) {
                    is_filled = false;
                    HoldOn.close();
                } else {
                    HoldOn.close();
                }
            });
            Archivo.trigger('click');
        });
        /*READY*/
        getRecords();
        getClientes();
    });
    var is_filled = false;
    function getClientes() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getClientes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Cliente_ID']")[0].selectize.addOption({text: v.Cliente, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    var tblPreciarios = $('#tblPreciarios');
    var Preciarios;

    function getRecords() {
        temp = 0;
        HoldOn.open({
            theme: 'sk-cube',
            message: 'CARGANDO...'
        });
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblPreciarios')) {
            tblPreciarios.DataTable().destroy();
        }
        Preciarios = tblPreciarios.DataTable({
            "dom": 'Bfrtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getRecords',
                "dataSrc": ""
            },
            "columns": [
                {"data": "ID"},
                {"data": "Nombre"},
                {"data": "Tipo"},
                {"data": "Fecha"},
                {"data": "Cliente"}
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
            "colReorder": true,
            "displayLength": 20,
            "bLengthChange": false,
            "deferRender": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ]
        });

        tblPreciarios.find('tbody').on('click', 'tr', function () {
            tblPreciarios.find("tbody tr").removeClass("success");
            $(this).addClass("success");
            var dtm = Preciarios.row(this).data();
            tempID = parseInt(dtm.ID);
            btnEditar.trigger("click");
        });
        HoldOn.close();
    }

    function getCategorias(IDX) {
        $.ajax({
            url: master_url + 'getCategoriasXPreciarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                mdlEditarConcepto.find("#Categoria")[0].selectize.addOption({text: v.Categoria, value: v.ID});
                mdlNuevoConcepto.find("#Conceptos").find("#Categoria")[0].selectize.addOption({text: v.Categoria, value: v.ID});
                mdlNuevoConcepto.find("#SubCategorias").find("#PreciarioCategoria_ID")[0].selectize.addOption({text: v.Categoria, value: v.ID});
                mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioCategoria_ID")[0].selectize.addOption({text: v.Categoria, value: v.ID});
            });
            getSubCategorias(IDX, '');
            getSubSubCategoriasXSubCategoriaXCategoriaIDXPreciarioID(IDX, '', '');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getSubCategorias(ID, IDC) {
        $.ajax({
            url: master_url + 'getSubCategoriasXCategoriaIDXPreciarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                IDC: IDC
            }
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                mdlEditarConcepto.find("#SubCategoria")[0].selectize.addOption({text: v.Subcategoria, value: v.ID});
                mdlNuevoConcepto.find("#SubCategoria")[0].selectize.addOption({text: v.Subcategoria, value: v.ID});
                mdlNuevoConcepto.find("#PreciarioSubCategorias_ID")[0].selectize.addOption({text: v.Subcategoria, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getSubSubCategoriasXSubCategoriaXCategoriaIDXPreciarioID(ID, IDC, IDSC) {
        $.ajax({
            url: master_url + 'getSubSubCategoriasXSubCategoriaXCategoriaIDXPreciarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                IDC: IDC,
                IDSC: IDSC
            }
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            mdlNuevoConcepto.find("#SubSubCategoria")[0].selectize.clear(true);
            $.each(data, function (k, v) {
                mdlNuevoConcepto.find("#SubSubCategoria")[0].selectize.addOption({text: v.SubSubCategoria, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }

    var tblPreciarioEspecifico = $('#tblPreciarioEspecifico');
    var PreciarioEspecifico;
    function getConceptosXPreciarioID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        temp = 0;
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblPreciarioEspecifico')) {
            tblPreciarioEspecifico.DataTable().destroy();
        }
        PreciarioEspecifico = tblPreciarioEspecifico.DataTable({
            "dom": 'Bfrtip',
            buttons: buttons,
            "ajax": {
                "url": master_url + 'getConceptosXPreciarioID',
                type: "POST",
                dataSrc: "",
                "data": {
                    ID: IDX
                }
            },
            "columns": [
                {"data": "ID"},
                {"data": "Clave"},
                {"data": "Descripcion"},
                {"data": "Unidad"},
                {"data": "Costo"},
                {"data": "Moneda"},
                {"data": "Editar"},
                {"data": "Eliminar"}
            ],
            language: lang,
            "autoWidth": true,
            "colReorder": true,
            "displayLength": 20,
            "bLengthChange": false,
            "deferRender": true,
            "scrollCollapse": false,
            "bSort": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ]
        });
        HoldOn.close();
    }


    IdConceptoEliminar = 0;
    evtEliminar = '';
    function onEliminarConceptoPreciario(evt, IDC) {
        evtEliminar = evt;
        IdConceptoEliminar = IDC;
        mdlConfirmarEliminarConcepto.modal('show');
    }
    function onEditarConceptoPreciarioXID(IDX) {
        $.ajax({
            url: master_url + 'getConceptoByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            var concepto = data[0];
            mdlEditarConcepto.find("#IDConcepto").val(concepto.ID);
            mdlEditarConcepto.find("#Clave").val(concepto.Clave);
            mdlEditarConcepto.find("#Costo").val(concepto.Costo);
            mdlEditarConcepto.find("#Descripcion").val(concepto.Descripcion);
            mdlEditarConcepto.find("[name='Moneda']")[0].selectize.setValue(concepto.Moneda);
            mdlEditarConcepto.find("#Unidad").val(concepto.Unidad);
            mdlEditarConcepto.find("#Contrato").val(concepto.Contrato);
            mdlEditarConcepto.find("#Posicion").val(concepto.Posicion);
            mdlEditarConcepto.find("#Material").val(concepto.Material);
            mdlEditarConcepto.find("#TextoMaterial").val(concepto.TextoMaterial);
            mdlEditarConcepto.find("#Familia").val(concepto.Familia);
            mdlEditarConcepto.find("#UnidadFichero").val(concepto.UnidadFichero);
            mdlEditarConcepto.find("[name='Categoria']")[0].selectize.setValue(concepto.PreciarioCategorias_ID);
            mdlEditarConcepto.find("[name='SubCategoria']")[0].selectize.setValue(concepto.PreciarioSubCategorias_ID);
            mdlEditarConcepto.find("[name='SubSubCategoria']")[0].selectize.setValue(concepto.PreciarioSubSubCategoria_ID);
            mdlEditarConcepto.modal('show');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
</script>
<script>
    /*jshint browser:true */
    /* eslint-env browser */
    /* eslint no-use-before-define:0 */
    /*global Uint8Array, Uint16Array, ArrayBuffer */
    /*global XLSX */
    var X = XLSX;
    function fixdata(data) {
        var o = "", l = 0, w = 10240;
        for (; l < data.byteLength / w; ++l)
            o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w, l * w + w)));
        o += String.fromCharCode.apply(null, new Uint8Array(data.slice(l * w)));
        return o;
    }
    function get_radio_value(radioName) {
        var radios = document.getElementsByName(radioName);
        for (var i = 0; i < radios.length; i++) {
            if (radios[i].checked || radios.length === 1) {
                return radios[i].value;
            }
        }
    }
    function to_json(workbook) {
        var sheet = "HOJAN";
        var i = 1;
        var result = {};
        workbook.SheetNames.forEach(function (sheetName) {
            var roa = X.utils.sheet_to_json(workbook.Sheets[sheetName]);
            if (roa.length > 0) {
                sheet = sheet + "" + i;
                result[sheet] = roa;
                i += 1;
            }
        });
        return result;
    }
    function to_csv(workbook) {
        var result = [];
        workbook.SheetNames.forEach(function (sheetName) {
            var csv = X.utils.sheet_to_csv(workbook.Sheets[sheetName]);
            if (csv.length > 0) {
                result.push("SHEET: " + sheetName);
                result.push("");
                result.push(csv);
            }
        });
        return result.join("\n");
    }
    var tblConceptos = pnlDatos.find("#VistaPrevia");
    function to_html(workbook) {
        tblConceptos.html("");
        workbook.SheetNames.forEach(function (sheetName) {
            var htmlstr = X.write(workbook, {sheet: sheetName, type: 'binary', bookType: 'html'});
            tblConceptos.append(htmlstr);
            tblConceptos.find("table").addClass("table table-bordered table-striped table-hover display row-border hover order-column");
        });
    }
    function onProcesarLibroXLS(wb) {
        var output = "";
        output = JSON.stringify(to_json(wb), 2, 2);
        pnlDatos.find("#json_preciario").html(output);
        to_html(wb);
    }
</script>