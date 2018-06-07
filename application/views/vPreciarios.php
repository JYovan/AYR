<div  class="col-md-12">
    <div id="pnlPreciario" class="panel panel-default">
        <div class="panel-heading ">
            <div class="cursor-hand" >Preciarios</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default hide" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                    <button type="button" class="btn btn-default hide" id=""><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                    <button type="button" class="btn btn-default hide" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
                </div>
                <div class="col-md-12 table-responsive" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>
<!--PANELES-->
<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlNuevo" class="panel panel-default hide animated slideInRight">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Nuevo Preciario
                </div>
                <div class="input-group pull-right">
                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardar">GUARDAR</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-6 col-md-12">
                            <div class="form-group label-static">
                                <label for="Nombre" class="control-label">Nombre*</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre"  required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                                <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required="">
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Estatus*</label>
                                <select id="Estatus" name="Estatus" class="form-control" required="">
                                    <option value=""></option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Tipo*</label>
                                <select id="Tipo" name="Tipo" class="form-control" required="">
                                    <option value=""></option>
                                    <option value="MANTENIMIENTO">Mantenimiento</option>
                                    <option value="OBRA">Obra</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Cliente*</label>
                                <select id="Cliente_ID" name="Cliente_ID" class="form-control" required="">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <h6>Los campos con * son obligatorios</h6>    
                        </div>
                        <div class="col-md-12">
                            <div class="alert alert-dismissible alert-warning">
                                <h4><strong>IMPORTANTE!</strong></h4>
                                <p>Todas las columnas deben de estar sin espacios, caracteres especiales, guiones, acentos, etc.</p>
                                <p><strong>Columnas requeridas: </strong>id, Concepto, Unidad, Precio, Tipo, Moneda</p>
                            </div>
                        </div>
                        <div class="col-md-12" align="center">
                            <input type="file" id="RutaArchivo" name="RutaArchivo" class="hide">
                            <button type="button" class="btn btn-default fa-lg" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-2x">
                                </span>
                                Seleccionar Archivo
                            </button>
                            <br>
                        </div>
                        <div id="VistaPrevia" class="col-md-12 table-responsive" align="center" style="overflow-y: auto; height: 250px;"></div>
                        <div class="col-md-12 hide">
                            <textarea id="json_preciario" name="json_preciario" rows="2" cols="10" class="form-control">
                            </textarea>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
    <!--EDITAR-->
    <div id="pnlEditar" class="panel panel-default hide animated slideInRight">
        <div class="Custompanel-heading">
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelarEditar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Editar Preciario
                </div>
                <div class="input-group pull-right">
                    <button type="button" class="btn btn-default CustomColorEliminarRegistro" id="btnConfirmarEliminar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardarEditar">GUARDAR</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmEditar">
                <fieldset>
                    <div class="col-md-12 hide">
                        <label for="">ID*</label>
                        <input type="text" class="form-control" id="ID" name="ID" >
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="Nombre" class="control-label">Nombre*</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre"  required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                            <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                            <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required="">
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Estatus*</label>
                            <select id="Estatus" name="Estatus" class="form-control" required="">
                                <option value=""></option>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Tipo*</label>
                            <select id="Tipo" name="Tipo" class="form-control" required="">
                                <option value=""></option>
                                <option value="MANTENIMIENTO">Mantenimiento</option>
                                <option value="OBRA">Obra</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                            <label for="" class="control-label">Cliente*</label>
                            <select id="Cliente_ID" name="Cliente_ID" class="form-control" required="">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br>
                        <h6>Los campos con * son obligatorios</h6>    
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--PANEL DETALLE-->
<div class="col-6 col-md-12">
    <div class="panel panel-default hide animated slideInRight" id="pnlDetalleConceptos">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading row">
                <div class="col-md-8">
                    <div class="cursor-hand" >Conceptos </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default hide" id="btnRefrescarConceptos"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
                </div>
                <div class="col-md-12">
                    <br>
                </div>
                <div id="PreciarioEspecifico" class="col-md-12 table-responsive">
                </div>
            </fieldset>
        </div>
    </div>
</div>
<!--NUEVO CONCEPTO-->
<div id="mdlNuevoConcepto" class="modal modalFull fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull  modal-content modal-contentFull modal-lg">
        <div class="modal-header modal-headerFull">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal-titleFull">Nuevo Concepto</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <div class="col-md-12 hide">
                <input type="text" class="form-control hide" id="ID" name="ID">
            </div>
            <div id="pnlConceptos" class="col-md-12" >
                <div class="col-md-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#Conceptos" data-toggle="tab">Conceptos</a></li>
                        <li><a href="#Categorias" data-toggle="tab">Categorías</a></li>
                        <li><a href="#SubCategorias" data-toggle="tab">Sub Categorías</a></li>
                        <li><a href="#SubSubCategorias" data-toggle="tab">Sub Sub Categorías</a></li>
                    </ul>
                </div>
                <div class="col-md-12"></div>
                <div class="col-md-12"><span><br></span></div>
                <div id="pnlTabConceptos" class="tab-content">
                    <div class="tab-pane fade active in" id="Conceptos">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-static">
                                        <label for="Clave" class="control-label">Clave</label>
                                        <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="Descripcion" class="control-label">Descripción</label>
                                <textarea type="text" id="Descripcion" name="Descripcion" class="form-control CustomUppercase" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="4" cols="20">
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
                    <div class="tab-pane fade" id="Categorias">
                        <div class="" id="mdlNuevaCategoria">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group label-static">
                                            <label for="Clave" class="control-label">Clave</label>
                                            <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group label-static">
                                    <label for="Descripcion" class="control-label">Descripción</label>
                                    <textarea type="text" class="form-control CustomUppercase" id="Descripcion" name="Descripcion" rows="2" cols="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="SubCategorias">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-static">
                                        <label for="Clave" class="control-label">Clave</label>
                                        <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="Descripcion" class="control-label">Descripción</label>
                                <textarea type="text" class="form-control CustomUppercase" id="Descripcion" name="Descripcion" rows="2" cols="10"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="PreciarioCategoria_ID" class="control-label">Categoría</label>
                                <select id="PreciarioCategoria_ID" name="PreciarioCategoria_ID" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="SubSubCategorias">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-static">
                                        <label for="Clave" class="control-label">Clave</label>
                                        <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="Descripcion" class="control-label">Descripción</label>
                                <textarea type="text" class="form-control CustomUppercase" id="Descripcion" name="Descripcion" rows="2" cols="10"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="PreciarioCategoria_ID" class="control-label">Categoría</label>
                                <select id="PreciarioCategoria_ID" name="PreciarioCategoria_ID" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="PreciarioSubCategorias_ID" class="control-label">Sub Categoría</label>
                                <select id="PreciarioSubCategorias_ID" name="PreciarioSubCategorias_ID" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
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
            <button type="button" class="btn btn-default hide" id="btnCancelarCategoria" name="btnCancelarCategoria" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary hide" id="btnGuardarCategoria" name="btnGuardarCategoria">GUARDAR</button>
            <!--BOTONES SUBCATEGORIA-->
            <button type="button" class="btn btn-default hide" id="btnCancelarSubCategoria" name="btnCancelarSubCategoria" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary hide" id="btnGuardarSubCategoria" name="btnGuardarSubCategoria">GUARDAR</button>
            <!--BOTONES SUBSUBCATEGORIA-->
            <button type="button" class="btn btn-default hide" id="btnCancelarSubSubCategoria" name="btnCancelarSubSubCategoria" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary hide" id="btnGuardarSubSubCategoria" name="btnGuardarSubSubCategoria">GUARDAR</button>
        </div>
    </div>
</div>
<!--EDITAR CONCEPTO-->
<div id="mdlEditarConcepto" class="modal modalFull fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialogFull  modal-content modal-contentFull modal-lg">
        <div class="modal-header modal-headerFull">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal-titleFull">Editar</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmEditar">
                <fieldset>
                    <div class="col-md-12 hide">
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


                </fieldset>
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
    var pnlNuevo = $("#pnlNuevo");
    var btnGuardar = pnlNuevo.find("#btnGuardar");
    var btnCancelar = pnlNuevo.find("#btnCancelar");
    var btnCancelarEditar = $("#btnCancelarEditar");
    var btnRefrescar = $("#btnRefrescar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    var btnEliminar = $("#btnEliminar");
    var btnEditar = $("#btnEditar");
    var pnlEditar = $("#pnlEditar");
    var btnModificar = pnlEditar.find("#btnGuardarEditar");
    var PreciarioEspecifico = pnlEditar.find("#PreciarioEspecifico");
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
    var pnlConceptos = pnlEditar.find("#pnlConceptos");
    //Variables de controles para subir archivo
    var Archivo = pnlNuevo.find("#RutaArchivo");
    var btnArchivo = pnlNuevo.find("#btnArchivo");
    var VistaPrevia = pnlNuevo.find("#VistaPrevia");
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
                mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioCategoria_ID").select2("val", "");
                mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioSubCategorias_ID").select2("val", "");
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
                mdlNuevoConcepto.find("#SubCategorias").find("#PreciarioCategoria_ID").select2("val", "");
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
                    btnCancelarConcepto.removeClass("hide");
                    btnGuardarConcepto.removeClass("hide");
                    btnCancelarCategoria.addClass("hide");
                    btnGuardarCategoria.addClass("hide");
                    btnCancelarSubCategoria.addClass("hide");
                    btnGuardarSubCategoria.addClass("hide");
                    btnCancelarSubSubCategoria.addClass("hide");
                    btnGuardarSubSubCategoria.addClass("hide");
                    break;
                case "#Categorias":
                    btnCancelarConcepto.addClass("hide");
                    btnGuardarConcepto.addClass("hide");
                    btnCancelarCategoria.removeClass("hide");
                    btnGuardarCategoria.removeClass("hide");
                    btnCancelarSubCategoria.addClass("hide");
                    btnGuardarSubCategoria.addClass("hide");
                    btnCancelarSubSubCategoria.addClass("hide");
                    btnGuardarSubSubCategoria.addClass("hide");
                    break;
                case "#SubCategorias":
                    btnCancelarConcepto.addClass("hide");
                    btnGuardarConcepto.addClass("hide");
                    btnCancelarCategoria.addClass("hide");
                    btnGuardarCategoria.addClass("hide");
                    btnCancelarSubCategoria.removeClass("hide");
                    btnGuardarSubCategoria.removeClass("hide");
                    btnCancelarSubSubCategoria.addClass("hide");
                    btnGuardarSubSubCategoria.addClass("hide");
                    break;
                case "#SubSubCategorias":
                    btnCancelarConcepto.addClass("hide");
                    btnGuardarConcepto.addClass("hide");
                    btnCancelarCategoria.addClass("hide");
                    btnGuardarCategoria.addClass("hide");
                    btnCancelarSubCategoria.addClass("hide");
                    btnGuardarSubCategoria.addClass("hide");
                    btnCancelarSubSubCategoria.removeClass("hide");
                    btnGuardarSubSubCategoria.removeClass("hide");
                    break;
                default:
                    break;
            }
        });
        btnCancelarEditar.click(function () {
            pnlPreciario.addClass("animated slideInLeft").removeClass("hide");
            pnlEditar.addClass("hide");
            pnlDetalleConceptos.addClass("hide");
            btnRefrescar.trigger('click');
        });
        btnCancelar.click(function () {
            pnlPreciario.removeClass("hide");
            pnlNuevo.addClass("hide");
            btnRefrescar.trigger('click')
        });
        btnCancelarSubSubCategoria.click(function () {
            pnlConceptos.find("#SubSubCategorias").removeClass("active in");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#SubSubCategorias").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#SubSubCategorias").find("select"), function (k, v) {
                $(v).select2("val", "");
            });
        });
        btnCancelarSubCategoria.click(function () {
            pnlConceptos.find("#SubCategorias").removeClass("active in");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#SubCategorias").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#SubCategorias").find("select"), function (k, v) {
                $(v).select2("val", "");
            });
        });
        btnCancelarCategoria.click(function () {
            pnlConceptos.find("#Categorias").removeClass("active in");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#Categorias").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#Categorias").find("select"), function (k, v) {
                $(v).select2("val", "");
            });
        });
        btnNuevaCategoria.click(function () {
            mdlNuevaCategoria.removeClass("hide");
        });
        btnCancelarConcepto.click(function () {
            pnlConceptos.find("#Conceptos").removeClass("active in");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#Conceptos").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#Conceptos").find("select"), function (k, v) {
                $(v).select2("val", "");
            });
        });
        btnGuardarConcepto.click(function () {
            if (Clave !== undefined && Clave !== null && Clave !== '' && Clave.length > 0 &&
                    Descripcion !== undefined && Descripcion !== null && Descripcion !== '' && Descripcion.length > 0) {
                var frm = new FormData();
                frm.append('ID', pnlEditar.find("#ID").val());
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
                    mdlNuevoConcepto.modal("hide");
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
            btnCancelarConcepto.removeClass("hide");
            btnGuardarConcepto.removeClass("hide");
            btnCancelarCategoria.addClass("hide");
            btnGuardarCategoria.addClass("hide");
            btnCancelarSubCategoria.addClass("hide");
            btnGuardarSubCategoria.addClass("hide");
            btnCancelarSubSubCategoria.addClass("hide");
            btnGuardarSubSubCategoria.addClass("hide");
            mdlNuevoConcepto.find("input").val("");
            mdlNuevoConcepto.find("textarea").val("");
            mdlNuevoConcepto.find("select").select2("val", "");
            getCategorias(pnlEditar.find("#ID").val());
            mdlNuevoConcepto.find("#ID").val(pnlEditar.find("#ID").val());
            mdlNuevoConcepto.modal('show');
            btnCancelarConcepto.removeClass("hide");
            btnGuardarConcepto.removeClass("hide");
        });
        btnCancelarModificacion.click(function () {
            mdlEditarConcepto.find("#IDConcepto").val("");
            mdlEditarConcepto.find("#Clave").val("");
            mdlEditarConcepto.find("#Descripcion").val("");
            mdlEditarConcepto.find("#Costo").val("");
            mdlEditarConcepto.find("#Moneda").select2("val", "");
            mdlEditarConcepto.find("#Unidad").val("");

            mdlEditarConcepto.find("#Contrato").val("");
            mdlEditarConcepto.find("#Posicion").val("");
            mdlEditarConcepto.find("#Material").val("");
            mdlEditarConcepto.find("#TextoMaterial").val("");
            mdlEditarConcepto.find("#Familia").val("");
            mdlEditarConcepto.find("#UnidadFichero").val("");

            mdlEditarConcepto.find("#Categoria").select2("val", "");
            mdlEditarConcepto.find("#SubCategoria").select2("val", "");
            mdlEditarConcepto.find("#SubSubCategoria").select2("val", "");
            mdlEditarConcepto.modal('hide');
        });
        btnRefrescarConceptos.click(function () {
            getConceptosXPreciarioID(pnlEditar.find("#ID").val());
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
                mdlEditarConcepto.modal("hide");
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        mdlEditarConcepto.find("#Categoria").change(function () {
            getSubCategorias(pnlEditar.find("#ID").val(), $(this).val());
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
                console.log(data);
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO ELIMINADO', 'danger');
                btnRefrescarConceptos.trigger('click');
                mdlConfirmarEliminarConcepto.modal('hide');
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
                console.log(data);
                mdlConfirmar.modal('hide');
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PRECIARIO ELIMINADO', 'danger');
                pnlPreciario.addClass("animated slideInLeft").removeClass("hide");
                pnlEditar.addClass("hide");
                pnlDetalleConceptos.addClass("hide");
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
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmNuevo').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    Nombre: 'required',
                    FechaCreacion: 'required',
                    Estatus: 'required',
                    Tipo: 'required',
                    Cliente_ID: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            //Si es verdadero que hacer
            if ($('#frmNuevo').valid()) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "GUARDANDO... POR FAVOR ESPERE"
                });
                var frm = new FormData(pnlNuevo.find("#frmNuevo")[0]);
                frm.append('PRECIARIO', pnlNuevo.find("#json_preciario").val());
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    console.log(data);
                    HoldOn.close();
                    pnlNuevo.addClass('hide');
                    pnlPreciario.removeClass('hide');

                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO UN NUEVO PRECIARIO', 'success');
                    btnRefrescar.trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {

                });
            }
        });
        btnModificar.click(function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmEditar').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    Nombre: 'required',
                    FechaCreacion: 'required',
                    Estatus: 'required',
                    Tipo: 'required',
                    Cliente_ID: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            //Si es verdadero que hacer
            if ($('#frmEditar').valid()) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "GUARDANDO... POR FAVOR ESPERE"
                });
                var frm = new FormData(pnlEditar.find("#frmEditar")[0]);
                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    pnlPreciario.removeClass('hide');
                    pnlEditar.addClass('hide');
                    pnlDetalleConceptos.addClass('hide');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UN PRECIARIO', 'success');
                    console.log(data, x, jq);
                    btnRefrescar.trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnNuevo.click(function () {
            tblConceptos.html("");
            pnlNuevo.find("select").select2("val", "");
            pnlNuevo.find("input").val("");
            pnlNuevo.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlNuevo.removeClass('hide');
            pnlPreciario.addClass("hide");
        });
        btnEditar.click(function () {
            if (tempID !== 0 && tempID !== undefined && tempID > 0) {
                $.ajax({
                    url: master_url + 'getPreciarioByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: tempID
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    var preciario = data[0];
                    pnlEditar.find("#ID").val(preciario.ID);
                    pnlEditar.find("#Nombre").val(preciario.Nombre);
                    pnlEditar.find("#Tipo").val(preciario.Tipo);
                    pnlEditar.find("#FechaCreacion").val(preciario.FechaCreacion);
                    pnlEditar.find("#Cliente_ID").select2("val", preciario.Cliente_ID);
                    pnlEditar.find("#Estatus").select2("val", preciario.Estatus);
                    pnlEditar.find("#Tipo").select2("val", preciario.Tipo);
                    pnlEditar.find("#PreciarioEspecifico").html("");
                    getCategorias(preciario.ID);
                    getConceptosXPreciarioID(preciario.ID);
                    pnlPreciario.addClass('hide');
                    pnlEditar.addClass("animated slideInLeft").removeClass('hide');
                    pnlDetalleConceptos.removeClass("hide");
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
                options += '<option value="' + v.ID + '">' + v.Cliente + '</option>';
            });
            pnlNuevo.find("#Cliente_ID").html(options);
            pnlEditar.find("#Cliente_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getRecords() {
        tempID = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getRecords',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            $("#tblRegistros").html(getTable('tblEmpresas', data));
            $('#tblEmpresas tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
            });
            var tblSelected = $('#tblEmpresas').DataTable(tableOptions);
            $('#tblEmpresas tbody').on('click', 'tr', function () {
                $("#tblEmpresas").find("tr").removeClass("success");
                $("#tblEmpresas").find("tr").removeClass("warning");
                var id = this.id;
                var index = $.inArray(id, selected);
                if (index === -1) {
                    selected.push(id);
                } else {
                    selected.splice(index, 1);
                }
                $(this).addClass('success');
                var dtm = tblSelected.row(this).data();
                tempID = parseInt(dtm[0]);
                btnEditar.trigger("click");
            });
            // Apply the search
            tblSelected.columns().every(function () {
                var that = this;
                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
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
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Categoria + '</option>';
            });
            mdlEditarConcepto.find("#Categoria").html(options);
            mdlNuevoConcepto.find("#Conceptos").find("#Categoria").html(options);
            mdlNuevoConcepto.find("#SubCategorias").find("#PreciarioCategoria_ID").html(options);
            mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioCategoria_ID").html(options);
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
            mdlEditarConcepto.find("#SubCategoria").select2("val", "");
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.Subcategoria + '</option>';
            });
            mdlEditarConcepto.find("#SubCategoria").html(options);
            mdlNuevoConcepto.find("#Conceptos").find("#SubCategoria").html(options);
            mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioSubCategorias_ID").html(options);
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
            mdlEditarConcepto.find("#SubSubCategoria").select2("val", "");
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.SubSubCategoria + '</option>';
            });
            mdlEditarConcepto.find("#SubSubCategoria").html(options);
            mdlNuevoConcepto.find("#SubSubCategoria").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    function getConceptosXPreciarioID(IDX) {
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
            $("#PreciarioEspecifico").html(getTable('tblConceptosXPreciarioID', data));
            var thead = pnlDetalleConceptos.find('#tblConceptosXPreciarioID thead th');
            var tfoot = pnlDetalleConceptos.find('#tblConceptosXPreciarioID tfoot th');
            thead.eq(0).addClass("hide");
            tfoot.eq(0).addClass("hide");
            $.each(pnlDetalleConceptos.find('#tblConceptosXPreciarioID tbody tr'), function (k, v) {
                var td = $(v).find("td");
                td.eq(0).addClass("hide");
            });
            $('#tblConceptosXPreciarioID tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto; "><div class="form-group Customform-group"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div></div>');
            });
            var tblSelected = $('#tblConceptosXPreciarioID').DataTable(tableOptions);
            $('#tblConceptosXPreciarioID tbody').on('click', 'tr', function () {
                $("#tblConceptosXPreciarioID").find("tr").removeClass("success");
                $("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
                var id = this.id;
                var index = $.inArray(id, selected);
                if (index === -1) {
                    selected.push(id);
                } else {
                    selected.splice(index, 1);
                }
                $(this).addClass('success');
                var dtm = tblSelected.row(this).data();
            });
            // Apply the search
            tblSelected.columns().every(function () {
                var that = this;
                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        }).fail(function (x, y, z) {
            HoldOn.close();
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
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
            console.log('EDITANDO CONCEPTO ');
            console.log(data);
            var concepto = data[0];
            mdlEditarConcepto.find("#IDConcepto").val(concepto.ID);
            mdlEditarConcepto.find("#Clave").val(concepto.Clave);
            mdlEditarConcepto.find("#Costo").val(concepto.Costo);
            mdlEditarConcepto.find("#Descripcion").val(concepto.Descripcion);
            mdlEditarConcepto.find("#Moneda").select2("val", concepto.Moneda);
            mdlEditarConcepto.find("#Unidad").val(concepto.Unidad);


            mdlEditarConcepto.find("#Contrato").val(concepto.Contrato);
            mdlEditarConcepto.find("#Posicion").val(concepto.Posicion);
            mdlEditarConcepto.find("#Material").val(concepto.Material);
            mdlEditarConcepto.find("#TextoMaterial").val(concepto.TextoMaterial);
            mdlEditarConcepto.find("#Familia").val(concepto.Familia);
            mdlEditarConcepto.find("#UnidadFichero").val(concepto.UnidadFichero);

            mdlEditarConcepto.find("#Categoria").select2("val", concepto.PreciarioCategorias_ID);
            mdlEditarConcepto.find("#SubCategoria").select2("val", concepto.PreciarioSubCategorias_ID);
            mdlEditarConcepto.find("#SubSubCategoria").select2("val", concepto.PreciarioSubSubCategoria_ID);
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
    var tblConceptos = pnlNuevo.find("#VistaPrevia");
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
        pnlNuevo.find("#json_preciario").html(output);
        to_html(wb);
    }
</script>