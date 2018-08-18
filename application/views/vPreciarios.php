<div class="card border-0 m-3" id="pnlPreciario">
    <div class="card-body">
        <div class="row">
            <div class="col-6 col-sm-3 float-left">
                <legend class="float-left">Preciarios</legend>
            </div>
            <div class="col-6 col-sm-9" align="right">
                <button type="button" class="btn btn-primary btn-sm" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>NUEVO</button>
                <button type="button" class="btn btn-primary btn-sm d-none" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                <button type="button" class="btn btn-primary btn-sm d-none" ><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                <button type="button" class="btn btn-primary btn-sm d-none" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
            </div>
        </div>
        <div clas id="Preciarios" class="row">
            <table id="tblPreciarios" class="table table-sm " style="width:100%">
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
    </div>
</div>
<!--PANELES-->
<div class="card border-0 m-3 d-none" id="pnlDatos">

    <div class="card-body text-dark">
        <form id="frmNuevo">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 float-left">
                    <legend >Preciario</legend>
                </div>
                <div class="col-12 col-sm-6 col-md-8" align="right">
                    <button type="button" class="btn btn-primary " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" >
                        <span class="fa fa-arrow-left" ></span>
                    </button>
                    <button type="button" class="btn btn-raised btn-danger " id="btnEliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><span class="fa fa-trash fa-1x"></span> </button>
                    <button type="button" class="btn btn-raised btn-info " id="btnGuardar" data-toggle="tooltip" data-placement="bottom" title="Guardar"><span class="fa fa-save "></span> </button>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                    <label for="Nombre" class="control-label">Nombre*</label>
                    <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre"  required="">

                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label for="FechaCreacion" class="control-label">Fecha de Creación*</label>
                    <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control form-control-sm " placeholder="DD/MM/YYYY" data-provide="datepicker" data-date-format="dd/mm/yyyy" required="">

                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label for="" class="control-label">Tipo*</label>
                    <select id="Tipo" name="Tipo" class="form-control form-control-sm required" required="">
                        <option value=""></option>
                        <option value="MANTENIMIENTO">Mantenimiento</option>
                        <option value="OBRA">Obra</option>
                    </select>

                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label for="" class="control-label">Cliente*</label>
                    <select id="Cliente_ID" name="Cliente_ID" class="form-control form-control-sm required" required="">
                        <option value=""></option>
                    </select>

                </div>
                <div class="col-12 col-sm-12 col-md-12">
                    <label for="" class="control-label">Estatus*</label>
                    <select id="Estatus" name="Estatus" class="form-control form-control-sm required" required="">
                        <option value=""></option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>

                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div class="d-none" style="background-color:#fff;" id="dAdvertencia">
            <div class="alert alert-dismissible alert-warning">
                <h4><strong>IMPORTANTE!</strong></h4>
                <p>Todas las columnas deben de estar sin espacios, caracteres especiales, guiones, acentos, etc.</p>
                <p><strong>Columnas requeridas: </strong>id, Concepto, Unidad, Precio, Tipo, Moneda</p>
            </div>
            <div class="col-12" align="center">
                <input type="file" id="RutaArchivo" name="RutaArchivo" class="d-none">
                <button type="button" class="btn btn-info fa-lg" id="btnArchivo" name="btnArchivo">
                    <span class="fa fa-upload">
                    </span>
                    Seleccionar Archivo
                </button>
                <br>
            </div>
            <br>
            <div id="VistaPrevia" class="col-12 table-responsive" align="center" style="overflow-y: auto; height: 250px;">
            </div>
            <div class="col-12 d-none">
                <textarea id="json_preciario" name="json_preciario" rows="2" cols="10" class="form-control">
                </textarea>
            </div>
            <br>
        </div>
    </div>
</div>
<!--PANEL DETALLE-->
<div class="card border-0 d-none m-3" id="pnlDetalleConceptos">
    <div class="card-body">
        <div class="row">
            <div class="col-6 col-md-6" align="left">
                <legend>Conceptos</legend>
            </div>
            <div class="col-6 col-md-6" align="right">
                <button type="button" class="btn btn-primary" id="btnNuevoConcepto"><span class="fa fa-plus "></span></button>
                <button type="button" class="btn btn-primary btn-sm d-none" id="btnRefrescarConceptos"><span class="fa fa-refresh"></span><br>ACTUALIZAR</button>
            </div>
        </div>
        <div id="PreciarioEspecifico" class="">
            <div class="row">
                <table id="tblPreciarioEspecifico" class="table table-sm" style="width:100%">
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
                    <tfoot></tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<!--NUEVO CONCEPTO-->
<div id="mdlNuevoConcepto" class="modal modal-fullscreen fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-content">
        <div class="modal-header ">
            <h5 class="modal-title">Nuevo Concepto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <div class="col-12 d-none">
                <input type="text" class="form-control d-none" id="ID" name="ID">
            </div>
            <div id="pnlConceptos" class="col-12" >
                <div class="col-12">
                    <ul class="nav nav-tabs">
                        <li  class="nav-item" class="active"><a href="#pConceptos" data-toggle="tab" class="nav-link  active show">Conceptos</a></li>
                        <li class="nav-item"><a href="#pCategorias" data-toggle="tab" class="nav-link">Categorías</a></li>
                        <li class="nav-item"><a href="#pSubCategorias" data-toggle="tab" class="nav-link">Sub Categorías</a></li>
                        <li class="nav-item"><a href="#pSubSubCategorias" data-toggle="tab" class="nav-link">Sub Sub Categorías</a></li>
                    </ul>
                </div>
                <br>
                <div id="pnlTabConceptos" class="tab-content">
                    <div class="tab-pane fade active show" id="pConceptos">
                        <div class="row">
                            <div class="col-12 d-none">
                                <input type="text" id="IDConcepto" name="IDConcepto" class="form-control form-control-sm">
                            </div>
                            <div class="col-12 col-sm-4">
                                <div class="form-group label-static">
                                    <label for="Clave" class="control-label">Clave</label>
                                    <input type="text" name="Clave" class="form-control form-control-sm" required="" placeholder="EJ: TRP10">
                                </div>
                            </div>
                            <div class="col-12 col-sm-8">
                                <div class="form-group label-static">
                                    <label for="Descripcion" class="control-label">Descripción</label>
                                    <textarea type="text" id="Descripcion" name="Descripcion" class="form-control form-control-sm" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="4" cols="20">
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group label-static">
                                    <label for="Costo" class="control-label">Costo</label>
                                    <input type="text" id="Costo" name="Costo" class="form-control form-control-sm numbersOnly" required="" placeholder="SIN SIGNOS, NI COMAS. EJ: 150.01234">
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group label-static">
                                    <label for="Moneda" class="control-label">Moneda</label>
                                    <select id="Moneda" name="Moneda" class="form-control form-control-sm" required="">
                                        <option value=""></option>
                                        <option value="USD">USD</option>
                                        <option value="MXN">MXN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6 col-sm-4">
                                <div class="form-group label-static">
                                    <label for="Unidad" class="control-label">Unidad</label>
                                    <input type="text" id="Unidad" name="Unidad" class="form-control form-control-sm" required="" placeholder="EJ: PZA">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4">
                                <div class="form-group label-static">
                                    <label for="Categoria" class="control-label">Categoría</label>
                                    <select id="Categoria" name="Categoria" class="form-control form-control-sm">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4">
                                <div class="form-group label-static">
                                    <label for="SubCategoria" class="control-label">Sub Categoría</label>
                                    <select id="SubCategoria" name="SubCategoria" class="form-control form-control-sm">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4">
                                <div class="form-group label-static">
                                    <label for="SubSubCategoria" class="control-label">Sub Sub Categoría</label>
                                    <select id="SubSubCategoria" name="SubSubCategoria" class="form-control form-control-sm">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <center><h5>Datos para fichero</h5></center>
                            <hr>
                        </div>
                        <DIV class="row">
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="form-group label-static">
                                    <label for="Contrato" class="control-label">Contrato</label>
                                    <input type="number"  name="Contrato" class="form-control form-control-sm" >
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="form-group label-static">
                                    <label for="Posicion" class="control-label">Posición</label>
                                    <input type="number"  name="Posicion" class="form-control form-control-sm" >
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="form-group label-static">
                                    <label for="Material" class="control-label">Material</label>
                                    <input type="text"  name="Material" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="form-group label-static">
                                    <label for="TextoMaterial" class="control-label">Texto Material</label>
                                    <input type="text"  name="TextoMaterial" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="form-group label-static">
                                    <label for="Familia" class="control-label">Familia</label>
                                    <input type="text"  name="Familia" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                                <div class="form-group label-static">
                                    <label for="UnidadFichero" class="control-label">Unidad Fichero</label>
                                    <input type="text"  name="UnidadFichero" class="form-control form-control-sm" placeholder="EJ: PZA">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pCategorias">
                        <div class="" id="mdlNuevaCategoria">
                            <div class="row">
                                <div class="col-12 col-sm-4 col-md-4">
                                    <div class="form-group label-static">
                                        <label for="Clave" class="control-label">Clave</label>
                                        <input type="text" class="form-control form-control-sm" name="Clave" placeholder="EJ: XYZ">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8">
                                    <div class="form-group label-static">
                                        <label for="Descripcion" class="control-label">Descripción</label>
                                        <textarea type="text" class="form-control form-control-sm" id="Descripcion" name="Descripcion" rows="2" cols="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pSubCategorias">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="PreciarioCategoria_ID" class="control-label">Categoría</label>
                                    <select name="PreciarioCategoria_ID" class="form-control form-control-sm">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="Clave" class="control-label">Clave</label>
                                    <input type="text" class="form-control form-control-sm"  name="Clave" placeholder="EJ: XYZ">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="form-group label-static">
                                    <label for="Descripcion" class="control-label">Descripción</label>
                                    <textarea type="text" class="form-control form-control-sm" id="Descripcion" name="Descripcion" rows="2" cols="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pSubSubCategorias">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="PreciarioCategoria_ID" class="control-label">Categoría</label>
                                    <select name="PreciarioCategoria_ID" class="form-control form-control-sm">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="PreciarioSubCategorias_ID" class="control-label">Sub Categoría</label>
                                    <select id="PreciarioSubCategorias_ID" name="PreciarioSubCategorias_ID" class="form-control form-control-sm">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="Clave" class="control-label">Clave</label>
                                    <input type="text" class="form-control form-control-sm"  name="Clave" placeholder="EJ: XYZ">
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="form-group label-static">
                                    <label for="Descripcion" class="control-label">Descripción</label>
                                    <textarea type="text" class="form-control form-control-sm" id="Descripcion" name="Descripcion" rows="2" cols="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer " >
            <!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-raised btn-primary" id="btnGuardarConcepto" name="btnGuardarConcepto">GUARDAR</button>
            <button type="button" class="btn btn-default" id="btnCancelarConcepto" name="btnCancelarConcepto" data-dismiss="modal">CANCELAR</button>
            <!--BOTONES CATEGORIA-->
            <button type="button" class="btn btn-raised btn-primary d-none" id="btnGuardarCategoria" name="btnGuardarCategoria">GUARDAR</button>
            <button type="button" class="btn btn-default d-none" id="btnCancelarCategoria" name="btnCancelarCategoria" data-dismiss="modal">CANCELAR</button>
            <!--BOTONES SUBCATEGORIA-->
            <button type="button" class="btn btn-raised btn-primary d-none" id="btnGuardarSubCategoria" name="btnGuardarSubCategoria">GUARDAR</button>
            <button type="button" class="btn btn-default d-none" id="btnCancelarSubCategoria" name="btnCancelarSubCategoria" data-dismiss="modal">CANCELAR</button>
            <!--BOTONES SUBSUBCATEGORIA-->
            <button type="button" class="btn btn-raised btn-primary d-none" id="btnGuardarSubSubCategoria" name="btnGuardarSubSubCategoria">GUARDAR</button>
            <button type="button" class="btn btn-default d-none" id="btnCancelarSubSubCategoria" name="btnCancelarSubSubCategoria" data-dismiss="modal">CANCELAR</button>
        </div>
    </div>
</div>
<!--EDITAR CONCEPTO-->
<div id="mdlEditarConcepto" class="modal fade modal-fullscreen" tabindex="-1" role="dialog">
    <div class="modal-dialog   ">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title ">Editar Concepto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="frmEditar">
                    <div class="row">
                        <div class="col-md-12 d-none">
                            <input type="text"  name="IDConcepto" class="form-control form-control-sm">
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="form-group label-static">
                                <label for="Clave" class="control-label">Clave</label>
                                <input type="text"  name="Clave" class="form-control form-control-sm" required="" placeholder="EJ: TRP10">
                            </div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <div class="form-group label-static">
                                <label for="Descripcion" class="control-label">Descripción</label>
                                <textarea type="text"  name="Descripcion" class="form-control form-control-sm" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20">
                                </textarea>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="form-group label-static">
                                <label for="Costo" class="control-label">Costo</label>
                                <input type="number"  name="Costo" class="form-control form-control-sm" required="" placeholder="SIN SIGNOS, NI COMAS. EJ: 150.01234">
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="form-group label-static">
                                <label for="Moneda" class="control-label">Moneda</label>
                                <select  name="Moneda" class="form-control form-control-sm" required="">
                                    <option value=""></option>
                                    <option value="USD">USD</option>
                                    <option value="MXN">MXN</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="form-group label-static">
                                <label for="Unidad" class="control-label">Unidad</label>
                                <input type="text"  name="Unidad" class="form-control form-control-sm" required="" placeholder="EJ: PZA">
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group label-static">
                                <label for="Categoria" class="control-label">Categoría</label>
                                <select  name="Categoria" class="form-control form-control-sm">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group label-static">
                                <label for="SubCategoria" class="control-label">Sub Categoría</label>
                                <select  name="SubCategoria" class="form-control form-control-sm">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4">
                            <div class="form-group label-static">
                                <label for="SubSubCategoria" class="control-label">Sub Sub Categoría</label>
                                <select  name="SubSubCategoria" class="form-control form-control-sm">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <center><h5>Datos para fichero</h5></center>
                            <hr>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            <div class="form-group label-static">
                                <label for="Contrato" class="control-label">Contrato</label>
                                <input type="number"  name="Contrato" class="form-control form-control-sm" >
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            <div class="form-group label-static">
                                <label for="Posicion" class="control-label">Posición</label>
                                <input type="number"  name="Posicion" class="form-control form-control-sm" >
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            <div class="form-group label-static">
                                <label for="Material" class="control-label">Material</label>
                                <input type="text"  name="Material" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            <div class="form-group label-static">
                                <label for="TextoMaterial" class="control-label">Texto Material</label>
                                <input type="text"  name="TextoMaterial" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            <div class="form-group label-static">
                                <label for="Familia" class="control-label">Familia</label>
                                <input type="text"  name="Familia" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                            <div class="form-group label-static">
                                <label for="UnidadFichero" class="control-label">Unidad Fichero</label>
                                <input type="text"  name="UnidadFichero" class="form-control form-control-sm" placeholder="EJ: PZA">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnModificarConcepto" name="btnModificarConcepto">GUARDAR</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
            </div>
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
    var btnEliminar = $("#btnEliminar");
    var btnEditar = $("#btnEditar");
    var btnModificar = pnlDatos.find("#btnGuardarEditar");
    var PreciarioEspecifico = pnlDatos.find("#PreciarioEspecifico");
    var mdlEditarConcepto = $("#mdlEditarConcepto");
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
    var nuevo = false;
//Variables de conceptos detalle
    /*Detalle*/
    var pnlDetalleConceptos = $("#pnlDetalleConceptos");
    $(document).ready(function () {
        btnGuardarSubSubCategoria.click(function () {
            var frm = new FormData();
            frm.append('Preciario_ID', tempID);
            frm.append('Clave', mdlNuevoConcepto.find("#pSubSubCategorias").find("[name='Clave']").val());
            frm.append('Descripcion', mdlNuevoConcepto.find("#pSubSubCategorias").find("#Descripcion").val());
            frm.append('PreciarioCategoria_ID', mdlNuevoConcepto.find("#pSubSubCategorias").find("[name='PreciarioCategoria_ID']").val());
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
                mdlNuevoConcepto.find("#pSubSubCategorias").find("[name='Clave']").val("");
                mdlNuevoConcepto.find("#pSubSubCategorias").find("#Descripcion").val("");
                mdlNuevoConcepto.find("[name='PreciarioCategoria_ID']")[0].selectize.clear(true);
                mdlNuevoConcepto.find("[name='PreciarioSubCategorias_ID']")[0].selectize.clear(true);

                getCategorias(tempID);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnGuardarSubCategoria.click(function () {
            var frm = new FormData();
            frm.append('Preciario_ID', tempID);
            frm.append('Clave', mdlNuevoConcepto.find("#pSubCategorias").find("[name='Clave']").val());
            frm.append('Descripcion', mdlNuevoConcepto.find("#pSubCategorias").find("#Descripcion").val());
            frm.append('PreciarioCategoria_ID', mdlNuevoConcepto.find("#pSubCategorias").find("[name='PreciarioCategoria_ID']").val());
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
                mdlNuevoConcepto.find("#pSubCategorias").find("[name='Clave']").val("");
                mdlNuevoConcepto.find("#pSubCategorias").find("#Descripcion").val("");
                mdlNuevoConcepto.find("[name='PreciarioCategoria_ID']")[0].selectize.clear(true);
                getCategorias(tempID);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnGuardarCategoria.click(function () {
            var frm = new FormData();
            frm.append('Preciario_ID', tempID);
            frm.append('Clave', mdlNuevoConcepto.find("#pCategorias").find("[name='Clave']").val());
            frm.append('Descripcion', mdlNuevoConcepto.find("#pCategorias").find("#Descripcion").val());
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
                mdlNuevoConcepto.find("#pCategorias").find("[name='Clave']").val("");
                mdlNuevoConcepto.find("#pCategorias").find("#Descripcion").val("");
                getCategorias(tempID);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            var target = $(e.target).attr("href"); // activated tab
            switch (target) {
                case "#pConceptos":
                    btnCancelarConcepto.removeClass("d-none");
                    btnGuardarConcepto.removeClass("d-none");
                    btnCancelarCategoria.addClass("d-none");
                    btnGuardarCategoria.addClass("d-none");
                    btnCancelarSubCategoria.addClass("d-none");
                    btnGuardarSubCategoria.addClass("d-none");
                    btnCancelarSubSubCategoria.addClass("d-none");
                    btnGuardarSubSubCategoria.addClass("d-none");
                    break;
                case "#pCategorias":
                    btnCancelarConcepto.addClass("d-none");
                    btnGuardarConcepto.addClass("d-none");
                    btnCancelarCategoria.removeClass("d-none");
                    btnGuardarCategoria.removeClass("d-none");
                    btnCancelarSubCategoria.addClass("d-none");
                    btnGuardarSubCategoria.addClass("d-none");
                    btnCancelarSubSubCategoria.addClass("d-none");
                    btnGuardarSubSubCategoria.addClass("d-none");
                    break;
                case "#pSubCategorias":
                    btnCancelarConcepto.addClass("d-none");
                    btnGuardarConcepto.addClass("d-none");
                    btnCancelarCategoria.addClass("d-none");
                    btnGuardarCategoria.addClass("d-none");
                    btnCancelarSubCategoria.removeClass("d-none");
                    btnGuardarSubCategoria.removeClass("d-none");
                    btnCancelarSubSubCategoria.addClass("d-none");
                    btnGuardarSubSubCategoria.addClass("d-none");
                    break;
                case "#pSubSubCategorias":
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
        });
        btnCancelarSubSubCategoria.click(function () {
            pnlConceptos.find("#pSubSubCategorias").removeClass("active show");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#pSubSubCategorias").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#pSubSubCategorias").find("select"), function (k, v) {
                $(v)[0].selectize.clear(true);
            });
        });
        btnCancelarSubCategoria.click(function () {
            pnlConceptos.find("#pSubCategorias").removeClass("active show");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#pSubCategorias").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#pSubCategorias").find("select"), function (k, v) {
                $(v)[0].selectize.clear(true);
            });
        });
        btnCancelarCategoria.click(function () {
            pnlConceptos.find("#pCategorias").removeClass("active show");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#pCategorias").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#pCategorias").find("select"), function (k, v) {
                $(v)[0].selectize.clear(true);
            });
        });
        btnNuevaCategoria.click(function () {
            mdlNuevaCategoria.removeClass("d-none");
        });
        btnCancelarConcepto.click(function () {
            pnlConceptos.find("#pConceptos").removeClass("active show");
            pnlConceptos.find(".nav-tabs li").removeClass("active");
            $.each(pnlConceptos.find("#pConceptos").find("input"), function (k, v) {
                $(v).val("");
            });
            $.each(pnlConceptos.find("#pConceptos").find("select"), function (k, v) {
                $(v)[0].selectize.clear(true);
            });
        });
        btnGuardarConcepto.click(function () {
            var frm = new FormData();
            frm.append('ID', tempID);
            frm.append('Clave', mdlNuevoConcepto.find("#pConceptos").find("[name='Clave']").val());
            frm.append('Descripcion', mdlNuevoConcepto.find("#pConceptos").find("#Descripcion").val());
            frm.append('Costo', mdlNuevoConcepto.find("#pConceptos").find("#Costo").val());
            frm.append('Moneda', mdlNuevoConcepto.find("#pConceptos").find("#Moneda").val());
            frm.append('Unidad', mdlNuevoConcepto.find("#pConceptos").find("#Unidad").val());

            frm.append('Contrato', mdlNuevoConcepto.find("#pConceptos").find("#Contrato").val());
            frm.append('Posicion', mdlNuevoConcepto.find("#pConceptos").find("#Posicion").val());
            frm.append('Material', mdlNuevoConcepto.find("#pConceptos").find("#Material").val());
            frm.append('TextoMaterial', mdlNuevoConcepto.find("#pConceptos").find("#TextoMaterial").val());
            frm.append('Familia', mdlNuevoConcepto.find("#pConceptos").find("#Familia").val());
            frm.append('UnidadFichero', mdlNuevoConcepto.find("#pConceptos").find("#UnidadFichero").val());

            frm.append('Categoria', mdlNuevoConcepto.find("#pConceptos").find("#Categoria").val());
            frm.append('SubCategoria', mdlNuevoConcepto.find("#pConceptos").find("#SubCategoria").val());
            frm.append('SubSubCategoria', mdlNuevoConcepto.find("#pConceptos").find("#SubSubCategoria").val());
            $.ajax({
                url: master_url + 'onAgregarConcepto',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                PreciarioEspecifico.ajax.reload();
                mdlNuevoConcepto.modal("hide");
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        btnNuevoConcepto.click(function () {
            mdlNuevoConcepto.find(".nav-tabs a").removeClass("active show");
            $(mdlNuevoConcepto.find(".nav-tabs a")[0]).addClass("active show");
            mdlNuevoConcepto.find("#Conceptos").addClass("active show");
            mdlNuevoConcepto.find("#Categorias").removeClass("active show");
            mdlNuevoConcepto.find("#pSubSubCategorias").removeClass("active show");
            mdlNuevoConcepto.find("#pSubSubCategorias").removeClass("active show");
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

            getCategorias(tempID);
            mdlNuevoConcepto.find("#ID").val(pnlDatos.find("#ID").val());
            mdlNuevoConcepto.modal('show');
            btnCancelarConcepto.removeClass("d-none");
            btnGuardarConcepto.removeClass("d-none");
        });
        btnCancelarModificacion.click(function () {
            mdlEditarConcepto.find("name=['IDConcepto']").val("");
            mdlEditarConcepto.find("name=['Clave']").val("");
            mdlEditarConcepto.find("name=['Descripcion']").val("");
            mdlEditarConcepto.find("name=['Costo']").val("");
            mdlEditarConcepto.find("name=['Moneda']")[0].selectize.clear(true);
            mdlEditarConcepto.find("name=['Unidad']").val("");

            mdlEditarConcepto.find("name=['Contrato']").val("");
            mdlEditarConcepto.find("name=['Posicion']").val("");
            mdlEditarConcepto.find("name=['Material']").val("");
            mdlEditarConcepto.find("name=['TextoMaterial']").val("");
            mdlEditarConcepto.find("name=['Familia']").val("");
            mdlEditarConcepto.find("name=['UnidadFichero']").val("");

            mdlEditarConcepto.find("name=['Categoria']")[0].selectize.clear(true);
            mdlEditarConcepto.find("name=['SubCategoria']")[0].selectize.clear(true);
            mdlEditarConcepto.find("name=['SubSubCategoria']")[0].selectize.clear(true);
            mdlEditarConcepto.modal('hide');
        });
        btnRefrescarConceptos.click(function () {
            getConceptosXPreciarioID(tempID);
        });
        btnModificarConcepto.click(function () {
            var frm = new FormData();
            frm.append('ID', mdlEditarConcepto.find("[name='IDConcepto']").val());
            frm.append('Clave', mdlEditarConcepto.find("[name='Clave']").val());
            frm.append('Descripcion', mdlEditarConcepto.find("[name='Descripcion']").val());
            frm.append('Costo', mdlEditarConcepto.find("[name='Costo']").val());
            frm.append('Moneda', mdlEditarConcepto.find("[name='Moneda']").val());
            frm.append('Unidad', mdlEditarConcepto.find("[name='Unidad']").val());

            frm.append('Contrato', mdlEditarConcepto.find("[name='Contrato']").val());
            frm.append('Posicion', mdlEditarConcepto.find("[name='Posicion']").val());
            frm.append('Material', mdlEditarConcepto.find("[name='Material']").val());
            frm.append('TextoMaterial', mdlEditarConcepto.find("[name='TextoMaterial']").val());
            frm.append('Familia', mdlEditarConcepto.find("[name='Familia']").val());
            frm.append('UnidadFichero', mdlEditarConcepto.find("[name='UnidadFichero']").val());

            frm.append('Categoria', mdlEditarConcepto.find("[name='Categoria']").val());
            frm.append('SubCategoria', mdlEditarConcepto.find("[name='SubCategoria']").val());
            frm.append('SubSubCategoria', mdlEditarConcepto.find("[name='SubSubCategoria']").val());
            $.ajax({
                url: master_url + 'onEditarConcepto',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                PreciarioEspecifico.ajax.reload();
                mdlEditarConcepto.modal("hide");
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        mdlEditarConcepto.find("[name='Categoria']").change(function () {
            getSubCategorias(tempID, $(this).val());
        });
        btnEliminar.click(function () {
            swal({
                title: "Confirmar",
                text: "Deseas eliminar el registro?",
                icon: "warning",
                buttons: ["Cancelar", "Aceptar"]
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
                        pnlPreciario.removeClass("d-none");
                        pnlDatos.addClass("d-none");
                        pnlDetalleConceptos.addClass("d-none");
                        getRecords();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
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
                if (nuevo) {
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
                        nuevo = false;
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
        btnNuevo.click(function () {
            btnEliminar.addClass("d-none");
            tblConceptos.html("");
            pnlDatos.find("select")[0].selectize.clear(true);
            pnlDatos.find("input").val("");
            pnlDatos.find('#FechaCreacion').val(getToday());
            pnlDatos.removeClass('d-none');
            pnlPreciario.addClass("d-none");
            pnlDatos.find("#dAdvertencia").removeClass('d-none');
            $(':input:text:enabled:visible:first').focus();
            nuevo = true;
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
                    pnlDatos.find("#dAdvertencia").addClass('d-none');
                    pnlDatos.find("#ID").val(p.ID);
                    pnlDatos.find("#Nombre").val(p.Nombre);
                    pnlDatos.find("#Tipo").val(p.Tipo);
                    pnlDatos.find("#FechaCreacion").val(p.FechaCreacion);

                    pnlDatos.find("select")[0].selectize.clear(true);
                    pnlDatos.find("[name='Cliente_ID']")[0].selectize.setValue(p.Cliente_ID);
                    pnlDatos.find("[name='Estatus']")[0].selectize.setValue(p.Estatus);
                    pnlDatos.find("[name='Tipo']")[0].selectize.setValue(p.Tipo);

                    pnlDatos.find("#p.specifico").html("");
                    getCategorias(tempID);
                    getConceptosXPreciarioID(p.ID);
                    pnlPreciario.addClass('d-none');
                    pnlDatos.removeClass('d-none');
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
            "displayLength": 12,
            "bLengthChange": false,
            "deferRender": true,
            "scrollX": true,
            "scrollCollapse": false,
            "bSort": true,
            "bStateSave": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });

        tblPreciarios.find('tbody').on('click', 'tr', function () {
            HoldOn.open({
                theme: 'sk-cube',
                message: 'CARGANDO...'
            });
            tblPreciarios.find("tbody tr").removeClass("success");
            $(this).addClass("success");
            var dtm = Preciarios.row(this).data();
            tempID = parseInt(dtm.ID);
            btnEditar.trigger("click");
            nuevo = false;
        });
        $('#tblPreciarios_filter input[type=search]').focus();
        HoldOn.close();
    }
    function getCategorias(IDX) {
        $.ajax({
            url: master_url + 'getCategoriasXPreciarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: tempID
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                mdlEditarConcepto.find("[name='Categoria']")[0].selectize.addOption({text: v.Categoria, value: v.ID});
                mdlNuevoConcepto.find("#pConceptos").find("#Categoria")[0].selectize.addOption({text: v.Categoria, value: v.ID});
                mdlNuevoConcepto.find("#pSubCategorias").find("[name='PreciarioCategoria_ID']")[0].selectize.addOption({text: v.Categoria, value: v.ID});
                mdlNuevoConcepto.find("#pSubSubCategorias").find("[name='PreciarioCategoria_ID']")[0].selectize.addOption({text: v.Categoria, value: v.ID});
            });
            getSubCategorias(tempID, '');
            getSubSubCategoriasXSubCategoriaXCategoriaIDXPreciarioID(tempID, '', '');
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
                ID: tempID,
                IDC: IDC
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                mdlEditarConcepto.find("[name='SubCategoria']")[0].selectize.addOption({text: v.Subcategoria, value: v.ID});
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
                ID: tempID,
                IDC: IDC,
                IDSC: IDSC
            }
        }).done(function (data, x, jq) {
            mdlNuevoConcepto.find("#SubSubCategoria")[0].selectize.clear(true);
            mdlEditarConcepto.find("[name='SubSubCategoria']")[0].selectize.clear(true);
            $.each(data, function (k, v) {
                mdlNuevoConcepto.find("#SubSubCategoria")[0].selectize.addOption({text: v.SubSubCategoria, value: v.ID});
                mdlEditarConcepto.find("[name='SubSubCategoria']")[0].selectize.addOption({text: v.SubSubCategoria, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    var tblPreciarioEspecifico = $('#tblPreciarioEspecifico');
    var PreciarioEspecifico;
    function getConceptosXPreciarioID(IDX) {
        temp = 0;
        $.fn.dataTable.ext.errMode = 'throw';
        if ($.fn.DataTable.isDataTable('#tblPreciarioEspecifico')) {
            tblPreciarioEspecifico.DataTable().destroy();
        }
        PreciarioEspecifico = tblPreciarioEspecifico.DataTable({
            "dom": 'frtip',
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
            "scrollX": true,
            "aaSorting": [
                [0, 'desc']/*ID*/
            ],
            "initComplete": function (settings, json) {
                HoldOn.close();
            }
        });

    }
    function onEliminarConceptoPreciario(evt, IDC) {
        swal({
            title: "Confirmar",
            text: "Deseas eliminar el registro?",
            icon: "warning",
            buttons: ["Cancelar", "Aceptar"]
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: master_url + 'onEliminarConcepto',
                    type: "POST",
                    data: {
                        ID: IDC
                    }
                }).done(function (data, x, jq) {
                    PreciarioEspecifico.ajax.reload();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                });
            }
        });
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
            mdlEditarConcepto.find("[name='IDConcepto']").val(concepto.ID);
            mdlEditarConcepto.find("[name='Clave']").val(concepto.Clave);
            mdlEditarConcepto.find("[name='Costo']").val(concepto.Costo);
            mdlEditarConcepto.find("[name='Descripcion']").val(concepto.Descripcion);
            mdlEditarConcepto.find("[name='Moneda']")[0].selectize.setValue(concepto.Moneda);
            mdlEditarConcepto.find("[name='Unidad']").val(concepto.Unidad);
            mdlEditarConcepto.find("[name='Contrato[']").val(concepto.Contrato);
            mdlEditarConcepto.find("[name='Posicion']").val(concepto.Posicion);
            mdlEditarConcepto.find("[name='Material']").val(concepto.Material);
            mdlEditarConcepto.find("[name='TextoMaterial']").val(concepto.TextoMaterial);
            mdlEditarConcepto.find("[name='Familia']").val(concepto.Familia);
            mdlEditarConcepto.find("[name='UnidadFichero']").val(concepto.UnidadFichero);
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
            tblConceptos.find("table").addClass("table table-sm table-hover");
        });
    }
    function onProcesarLibroXLS(wb) {
        var output = "";
        output = JSON.stringify(to_json(wb), 2, 2);
        pnlDatos.find("#json_preciario").html(output);
        to_html(wb);
    }
</script>
<style>
    p.CustomDetalleDescripcion{
        height: 100px !important;
        overflow: auto !important;
    }
</style>