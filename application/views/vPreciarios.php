
<div  class="col-md-12">
    <div id="pnlPreciario" class="panel panel-default">
        <div class="panel-heading">PRECIARIOS</div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
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

<!--PANELES-->
<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlNuevo" class="panel panel-default hide">
        <div class="panel-heading">
            <h3 class="panel-title">NUEVO PRECIARIO</h3>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>


                        <div class="col-6 col-md-12">
                            <label for="">NOMBRE*</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required >
                        </div>


                        <div class="col-md-6">
                            <label for="">FECHA DE CREACION*</label>
                            <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required>
                        </div>  


                        <div class="col-6 col-md-6">
                            <label for="">ESTATUS*</label>
                            <select id="Estatus" name="Estatus" class="form-control" required>
                                <option value=""></option> 
                                <option value="ACTIVO">ACTIVO</option> 
                                <option value="INACTIVO">INACTIVO</option> 
                            </select>
                        </div>

                        <div class="col-6 col-md-6">
                            <label for="">TIPO*</label>
                            <select id="Tipo" name="Tipo" class="form-control" required>
                                <option value=""></option> 
                                <option value="MANTENIMIENTO">MANTENIMIENTO</option> 
                                <option value="OBRA">OBRA</option> 
                            </select>
                        </div>



                        <div class="col-md-6">
                            <label for="">CLIENTE*</label>
                            <select id="Cliente_ID" name="Cliente_ID" class="form-control" required>
                                <option value=""></option> 
                            </select>
                        </div>

                        <div class="col-md-12">
                            <br>
                            <div class="alert alert-dismissible alert-warning">

                                <h4><strong>INFORMACIÓN IMPORTANTE!</strong></h4>
                                <p>Todas las columnas deben de estar sin espacios, caracteres especiales, guiones, acentos, etc.</p>
                                <p><strong>Columnas requeridas: </strong>id, Concepto, Unidad, Precio, Tipo, Moneda</p>
                            </div> 
                        </div>


                        <div class="col-md-12" align="center">
                            <input type="file" id="RutaArchivo" name="RutaArchivo" class="hide">
                            <button type="button" class="btn btn-default fa-lg" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-2x">
                                </span> 
                                SELECCIONAR ARCHIVO 
                            </button>
                            <br>
                        </div> 
                        <div id="VistaPrevia" class="col-md-12 table-responsive" align="center" style="overflow-y: auto; height: 250px;"></div>
                        <div class="col-md-12 hide">
                            <textarea id="json_preciario" name="json_preciario" rows="5" cols="10" class="form-control">
                            </textarea>
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-default" id="btnCancelar"><span class="fa fa-ban 1x"></span><br>CANCELAR</button>
                            <button type="button" class="btn btn-primary" id="btnGuardar"><span class="fa fa-check 1x"></span><br>GUARDAR</button>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>

    <!--EDITAR-->
    <div id="pnlEditar" class="panel panel-default hide animated slideInRight">
        <div class="panel-heading">
            <h3 class="panel-title">EDITAR PRECIARIO</h3>
        </div>
        <div class="panel-body">
            <form id="frmEditar"> 
                <fieldset> 
                    <div class="col-md-12" align="right">
                        <button type="button" class="btn btn-default" id="btnCancelarEditar"><span class="fa fa-ban fa-1x"></span><br>CANCELAR</button>
                        <button type="button" class="btn btn-primary" id="btnEditar"><span class="fa fa-check fa-1x"></span><br>GUARDAR</button>
                    </div>
                    <div class="col-md-12 hide">
                        <label for="">ID*</label>    
                        <input type="text" class="form-control" id="ID" name="ID" required>
                    </div>

                    <div class="col-md-12">
                        <label for="">NOMBRE*</label>    
                        <input type="text" class="form-control" id="Nombre" name="Nombre" required >
                    </div>

                    <div class="col-md-6">
                        <label for="">FECHA DE CREACION*</label>
                        <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="" required>
                    </div>  

                    <div class="col-6 col-md-6">
                        <label for="">ESTATUS*</label>
                        <select id="Estatus" name="Estatus" class="form-control" required>
                            <option value=""></option> 
                            <option value="ACTIVO">ACTIVO</option> 
                            <option value="INACTIVO">INACTIVO</option> 
                        </select>
                    </div>

                    <div class="col-6 col-md-6">
                        <label for="">TIPO*</label>
                        <select id="Tipo" name="Tipo" class="form-control" required>
                            <option value=""></option> 
                            <option value="MANTENIMIENTO">MANTENIMIENTO</option> 
                            <option value="OBRA">OBRA</option> 
                        </select>
                    </div>



                    <div class="col-md-6">
                        <label for="">CLIENTE*</label>
                        <select id="Cliente_ID" name="Cliente_ID" class="form-control" required>
                            <option value=""></option> 
                        </select>
                    </div>


                    <div class="col-md-12">
                        <h3>CONCEPTOS</h3>
                    </div>

                    <div class="col-md-6" align="left"> 
                        <button type="button" class="btn btn-default" id="btnNuevoConcepto"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button> 
                        <button type="button" class="btn btn-default" id="btnEliminarConcepto"><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button> 
                        <button type="button" class="btn btn-default" id="btnRefrescarConceptos"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button> 
                    </div> 
                    <div class="col-md-12">
                        <br>
                    </div> 
                    <div id="PreciarioEspecifico" class="col-md-12">
                    </div>
                    <div class="col-6 col-md-6">
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                </fieldset> 
            </form>
        </div>
    </div>
</div>


<!--EDITAR--> 


<div id="mdlNuevoConcepto" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content modal-lg">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">NUEVO CONCEPTO</h4>
        </div>

        <div class="modal-body">
            <div class="col-md-12 hide">
                <input type="text" class="form-control hide" id="ID" name="ID">
            </div>
            <div id="pnlConceptos" class="col-md-12" align="center">   
                <div class="col-md-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#Conceptos" data-toggle="tab">CONCEPTOS</a></li>
                        <li><a href="#Categorias" data-toggle="tab">CATEGORÍAS</a></li>
                        <li><a href="#SubCategorias" data-toggle="tab">SUB CATEGORÍAS</a></li>
                        <li><a href="#SubSubCategorias" data-toggle="tab">SUBSUB CATEGORÍAS</a></li>
                    </ul>
                </div>
                <div class="col-md-12"></div>
                <div id="pnlTabConceptos" class="tab-content">
                    <div class="tab-pane fade active in" id="Conceptos">
                        <div class="col-md-4">
                            <label for="">CLAVE</label>
                            <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                        </div>
                        <div class="col-md-8">
                            <label for="">DESCRIPCIÓN</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20">
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">COSTO</label>
                            <input type="text" id="Costo" name="Costo" class="form-control" required="" placeholder="SIN SIGNOS, NI COMAS. EJ: 150.01234">
                        </div>
                        <div class="col-md-4">
                            <label for="">MONEDA</label>
                            <input type="text" id="Moneda" name="Moneda" class="form-control" required="" placeholder="EJ: MXN">
                        </div>
                        <div class="col-md-4">
                            <label for="">UNIDAD</label>
                            <input type="text" id="Unidad" name="Unidad" class="form-control" required="" placeholder="EJ: TRP10">
                        </div>
                        <div class="col-md-4">
                            <label for="">CATEGORÍA</label>
                            <select id="Categoria" name="Categoria" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">SUB CATEGORÍA</label>
                            <select id="SubCategoria" name="SubCategoria" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">SUB SUB CATEGORÍA</label>
                            <select id="SubSubCategoria" name="SubSubCategoria" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>  
                    </div>
                    <div class="tab-pane fade" id="Categorias">
                        <div class="" id="mdlNuevaCategoria">
                            <div class="col-md-6">
                                <label for="">CLAVE</label>
                                <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                            </div>
                            <div class="col-md-6">
                                <label for="">DESCRIPCIÓN</label>
                                <textarea type="text" class="form-control" id="Descripcion" name="Descripcion" rows="4" cols="10"></textarea>
                            </div>
                        </div>  
                    </div>
                    <div class="tab-pane fade" id="SubCategorias">
                        <div class="col-md-4">
                            <label for="">CLAVE</label>
                            <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                        </div>
                        <div class="col-md-8">
                            <label for="">DESCRIPCIÓN</label>
                            <textarea type="text" class="form-control" id="Descripcion" name="Descripcion" rows="4" cols="10"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">CATEGORIA</label>
                            <select id="PreciarioCategoria_ID" name="PreciarioCategoria_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="SubSubCategorias">
                        <div class="col-md-4">
                            <label for="">CLAVE</label>
                            <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                        </div>
                        <div class="col-md-8">
                            <label for="">DESCRIPCIÓN</label>
                            <textarea type="text" class="form-control" id="Descripcion" name="Descripcion" rows="4" cols="10"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label for="">CATEGORÍA</label>
                            <select id="PreciarioCategoria_ID" name="PreciarioCategoria_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>       
                        <div class="col-md-12">
                            <label for="">SUBCATEGORÍA</label>
                            <select id="PreciarioSubCategorias_ID" name="PreciarioSubCategorias_ID" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer"> 
            <!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-default" id="btnCancelarConcepto" name="btnCancelarConcepto" data-dismiss="modal"><span class="fa fa-ban fa-1x"></span><br>CANCELAR</button> 
            <button type="button" class="btn btn-primary" id="btnGuardarConcepto" name="btnGuardarConcepto"><span class="fa fa-check fa-1x"></span><br>GUARDAR</button>  
            <!--BOTONES CATEGORIA-->
            <button type="button" class="btn btn-default hide" id="btnCancelarCategoria" name="btnCancelarCategoria" data-dismiss="modal"><span class="fa fa-ban 1x"></span><br>CANCELAR</button>
            <button type="button" class="btn btn-primary hide" id="btnGuardarCategoria" name="btnGuardarCategoria"><span class="fa fa-check 1x"></span><br>GUARDAR</button>
            <!--BOTONES SUBCATEGORIA-->
            <br>
            <button type="button" class="btn btn-default hide" id="btnCancelarSubCategoria" name="btnCancelarSubCategoria" data-dismiss="modal"><span class="fa fa-ban 1x"></span><br>CANCELAR</button>
            <button type="button" class="btn btn-primary hide" id="btnGuardarSubCategoria" name="btnGuardarSubCategoria"><span class="fa fa-check 1x"></span><br>GUARDAR</button>
            <!--BOTONES SUBSUBCATEGORIA-->
            <br>
            <button type="button" class="btn btn-default hide" id="btnCancelarSubSubCategoria" name="btnCancelarSubSubCategoria" data-dismiss="modal"><span class="fa fa-ban 1x"></span><br>CANCELAR</button>
            <button type="button" class="btn btn-primary hide" id="btnGuardarSubSubCategoria" name="btnGuardarSubSubCategoria"><span class="fa fa-check 1x"></span><br>GUARDAR</button>
        </div> 
    </div>
</div>


<div id="mdlEditarConcepto" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content modal-lg">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">EDITAR CONCEPTO</h4>
        </div>
        <div class="modal-body">
            <form id="frmEditar"> 
                <fieldset> 
                    <div id="mdlEditarXConceptoID" class="hide"> 
                        <div class="col-md-12 hide">
                            <input type="text" id="IDConcepto" name="IDConcepto" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label for="">CLAVE</label>
                            <input type="text" id="Clave" name="Clave" class="form-control" required="" placeholder="EJ: TRP10">
                        </div>
                        <div class="col-md-8">
                            <label for="">DESCRIPCIÓN</label>
                            <textarea type="text" id="Descripcion" name="Descripcion" class="form-control" required="" placeholder="EJ: LIMPIEZA DE CAJERO AUTOMÁTICO (ATM). " rows="3" cols="20">
                            </textarea>
                        </div>
                        <div class="col-md-4">
                            <label for="">COSTO</label>
                            <input type="text" id="Costo" name="Costo" class="form-control" required="" placeholder="SIN SIGNOS, NI COMAS. EJ: 150.01234">
                        </div>
                        <div class="col-md-4">
                            <label for="">MONEDA</label>
                            <input type="text" id="Moneda" name="Moneda" class="form-control" required="" placeholder="EJ: MXN">
                        </div>
                        <div class="col-md-4">
                            <label for="">UNIDAD</label>
                            <input type="text" id="Unidad" name="Unidad" class="form-control" required="" placeholder="EJ: TRP10">
                        </div>
                        <div class="col-md-4">
                            <label for="">CATEGORÍA</label>
                            <select id="Categoria" name="Categoria" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">SUB CATEGORÍA</label>
                            <select id="SubCategoria" name="SubCategoria" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">SUB SUB CATEGORÍA</label>
                            <select id="SubSubCategoria" name="SubSubCategoria" class="form-control">
                                <option value=""></option> 
                            </select>
                        </div> 
                    </div>
                    <div class="col-6 col-md-6">
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                </fieldset> 
            </form>
        </div>

        <div class="modal-footer"> 
            <!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-default hide" id="btnCancelarModificacion" name="btnCancelarModificacion"><span class="fa fa-ban fa-1x"></span><br>CANCELAR</button> 
            <button type="button" class="btn btn-default hide" id="btnModificarConcepto" name="btnModificarConcepto"><span class="fa fa-check fa-1x"></span><br>GUARDAR</button> 
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
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnEliminar">ACEPTAR</button>
        </div>
    </div>

</div>


<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlPreciarios/';
    var pnlPreciario = $("#pnlPreciario");
    var btnNuevo = $("#btnNuevo");
    var pnlNuevo = $("#pnlNuevo");
    var btnGuardar = pnlNuevo.find("#btnGuardar");
    var btnCancelar = pnlNuevo.find("#btnCancelar");
    var btnRefrescar = $("#btnRefrescar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");

    var mdlConfirmar = $("#mdlConfirmar");
    var btnEliminar = $("#btnEliminar");

    var btnEditar = $("#btnEditar");
    var pnlEditar = $("#pnlEditar");
    var btnModificar = pnlEditar.find("#btnEditar");
    var PreciarioEspecifico = pnlEditar.find("#PreciarioEspecifico");
    var mdlEditarXConceptoID = pnlEditar.find("#mdlEditarXConceptoID");
    var btnModificarConcepto = pnlEditar.find("#btnModificarConcepto");
    var btnRefrescarConceptos = pnlEditar.find("#btnRefrescarConceptos");
    var btnEliminarConcepto = pnlEditar.find("#btnEliminarConcepto");
    var btnBuscarConcepto = pnlEditar.find("#btnBuscarConcepto");
    var btnCancelarModificacion = pnlEditar.find("#btnCancelarModificacion");
    var btnNuevoConcepto = pnlEditar.find("#btnNuevoConcepto");
    var mdlNuevoConcepto = $("#mdlNuevoConcepto");
    var btnGuardarConcepto = mdlNuevoConcepto.find("#btnGuardarConcepto");
    var btnCancelarConcepto = mdlNuevoConcepto.find("#btnCancelarConcepto");
    var btnNuevaCategoria = mdlNuevoConcepto.find("#btnNuevaCategoria");
    var btnGuardarCategoria = mdlNuevoConcepto.find("#btnGuardarCategoria");
    var btnGuardarSubCategoria = mdlNuevoConcepto.find("#btnGuardarSubCategoria");
    var btnGuardarSubSubCategoria = mdlNuevoConcepto.find("#btnGuardarSubSubCategoria");
    var pnlConceptos = pnlEditar.find("#pnlConceptos");
    var btnCancelarCategoria = mdlNuevoConcepto.find("#btnCancelarCategoria");

    var btnNuevaSubCategoria = pnlEditar.find("#btnNuevaSubCategoria");
    var mdlNuevaSubCategoria = pnlEditar.find("#mdlNuevaSubCategoria");
    var btnCancelarSubCategoria = mdlNuevoConcepto.find("#btnCancelarSubCategoria");

    var btnNuevaSubSubCategoria = pnlEditar.find("#btnNuevaSubSubCategoria");
    var mdlNuevaSubSubCategoria = pnlEditar.find("#mdlNuevaSubSubCategoria");
    var btnCancelarSubSubCategoria = mdlNuevoConcepto.find("#btnCancelarSubSubCategoria");

    var btnCancelarEditar = pnlEditar.find("#btnCancelarEditar");

    //Variables de controles para subir archivo
    var Archivo = pnlNuevo.find("#RutaArchivo");
    var btnArchivo = pnlNuevo.find("#btnArchivo");
    var VistaPrevia = pnlNuevo.find("#VistaPrevia");


    $(document).ready(function () {

        btnGuardarSubSubCategoria.click(function () {
            var Clave = mdlNuevoConcepto.find("#SubSubCategorias").find("#Clave").val();
            var Descripcion = mdlNuevoConcepto.find("#SubSubCategorias").find("#Descripcion").val();
            var Categoria = mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioCategoria_ID").val();
            var SubCategoria = mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioSubCategorias_ID").val();
            if (Clave !== undefined && Clave !== null && Clave !== '' && Clave.length > 0 &&
                    Categoria !== undefined && Categoria !== null && Categoria !== '' && Categoria.length > 0 &&
                    SubCategoria !== undefined && SubCategoria !== null && SubCategoria !== '' && SubCategoria.length > 0) {
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
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', 'TODOS LOS CAMPOS SON REQUERIDOS', 'danger');
            }
        });

        btnGuardarSubCategoria.click(function () {
            var Clave = mdlNuevoConcepto.find("#SubCategorias").find("#Clave").val();
            var Categoria = mdlNuevoConcepto.find("#SubCategorias").find("#PreciarioCategoria_ID").val();
            if (Clave !== undefined && Clave !== null && Clave !== '' && Clave.length > 0 &&
                    Categoria !== undefined && Categoria !== null && Categoria !== '' && Categoria.length > 0) {
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
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', 'TODOS LOS CAMPOS SON REQUERIDOS', 'danger');
            }
        });

        btnGuardarCategoria.click(function () {
            var Clave = mdlNuevoConcepto.find("#Categorias").find("#Clave").val();
            var Descripcion = mdlNuevoConcepto.find("#Categorias").find("#Descripcion").val();
            if (Clave !== undefined && Clave !== null && Clave !== '' && Clave.length > 0 &&
                    Descripcion !== undefined && Descripcion !== null && Descripcion !== '' && Descripcion.length > 0) {
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
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', 'TODOS LOS CAMPOS SON REQUERIDOS', 'danger');
            }
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
            pnlPreciario.removeClass("hide");
            pnlEditar.addClass("hide");
        });

        btnCancelar.click(function () {
            pnlPreciario.removeClass("hide");
            pnlNuevo.addClass("hide");

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

        btnNuevaSubSubCategoria.click(function () {
            mdlNuevaSubSubCategoria.removeClass("hide");
        });
        btnNuevaSubCategoria.click(function () {
            mdlNuevaSubCategoria.removeClass("hide");
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

            var Clave = mdlNuevoConcepto.find("#Conceptos").find("#Clave").val();
            var Descripcion = mdlNuevoConcepto.find("#Conceptos").find("#Descripcion").val();
            var Categoria = mdlNuevoConcepto.find("#Conceptos").find("#Categoria").val();
            var SubCategoria = mdlNuevoConcepto.find("#Conceptos").find("#SubCategoria").val();
            var SubSubCategoria = mdlNuevoConcepto.find("#Conceptos").find("#SubSubCategoria").val();

            if (Clave !== undefined && Clave !== null && Clave !== '' && Clave.length > 0 &&
                    Descripcion !== undefined && Descripcion !== null && Descripcion !== '' && Descripcion.length > 0 &&
                    Categoria !== undefined && Categoria !== null && Categoria !== '' && Categoria.length > 0 &&
                    SubCategoria !== undefined && SubCategoria !== null && SubCategoria !== '' && SubCategoria.length > 0 &&
                    SubSubCategoria !== undefined && SubSubCategoria !== null && SubSubCategoria !== '' && SubSubCategoria.length > 0) {
                var frm = new FormData();
                frm.append('ID', pnlEditar.find("#ID").val());
                frm.append('Clave', mdlNuevoConcepto.find("#Conceptos").find("#Clave").val());
                frm.append('Descripcion', mdlNuevoConcepto.find("#Conceptos").find("#Descripcion").val());
                frm.append('Costo', mdlNuevoConcepto.find("#Conceptos").find("#Costo").val());
                frm.append('Moneda', mdlNuevoConcepto.find("#Conceptos").find("#Moneda").val());
                frm.append('Unidad', mdlNuevoConcepto.find("#Conceptos").find("#Unidad").val());
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
                    mdlNuevoConcepto.addClass("hide");
                    btnNuevoConcepto.addClass("hide");
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-times fa-lg"></span>', 'TODOS LOS CAMPOS SON REQUERIDOS', 'danger');
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
            mdlNuevoConcepto.find("select").select2("val", "");
            getCategorias(pnlEditar.find("#ID").val());
            mdlNuevoConcepto.find("#ID").val(pnlEditar.find("#ID").val());
            mdlNuevoConcepto.modal('show');
            btnCancelarConcepto.removeClass("hide");
            btnGuardarConcepto.removeClass("hide");
        });

        btnBuscarConcepto.click(function () {
            getConceptoByClaveXDescripcion(pnlEditar.find("#ID").val());
        });

        btnCancelarModificacion.click(function () {
            mdlEditarXConceptoID.addClass("hide");
            mdlEditarXConceptoID.find("#IDConcepto").val("");
            mdlEditarXConceptoID.find("#Clave").val("");
            mdlEditarXConceptoID.find("#Descripcion").val("");
            mdlEditarXConceptoID.find("#Costo").val("");
            mdlEditarXConceptoID.find("#Moneda").val("");
            mdlEditarXConceptoID.find("#Unidad").val("");
            mdlEditarXConceptoID.find("#Categoria").select2("val", "");
            mdlEditarXConceptoID.find("#SubCategoria").select2("val", "");
            mdlEditarXConceptoID.find("#SubSubCategoria").select2("val", "");
            btnCancelarModificacion.addClass("hide");
            btnModificarConcepto.addClass("hide");
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
            frm.append('ID', mdlEditarXConceptoID.find("#IDConcepto").val());
            frm.append('Clave', mdlEditarXConceptoID.find("#Clave").val());
            frm.append('Descripcion', mdlEditarXConceptoID.find("#Descripcion").val());
            frm.append('Costo', mdlEditarXConceptoID.find("#Costo").val());
            frm.append('Moneda', mdlEditarXConceptoID.find("#Moneda").val());
            frm.append('Unidad', mdlEditarXConceptoID.find("#Unidad").val());
            frm.append('Categoria', mdlEditarXConceptoID.find("#Categoria").val());
            frm.append('SubCategoria', mdlEditarXConceptoID.find("#SubCategoria").val());
            frm.append('SubSubCategoria', mdlEditarXConceptoID.find("#SubSubCategoria").val());
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
                mdlEditarXConceptoID.addClass("hide");
                btnModificarConcepto.addClass("hide");
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        mdlEditarXConceptoID.find("#Categoria").change(function () {
            getSubCategorias(pnlEditar.find("#ID").val(), $(this).val());
        });


        //Evento clic del boton confirmar borrar
        btnConfirmarEliminar.click(function () {

            if (temp !== 0 && temp !== undefined && temp > 0) {
                //Muestra el modal
                mdlConfirmar.modal('show');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnEliminarConcepto.click(function () {
            console.log('ELIMINANDO...' + temp);
            if (temp !== 0 && temp !== undefined && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ELIMINANDO..."
                });
                $.ajax({
                    url: master_url + 'onEliminarConcepto',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CONCEPTO ELIMINADO', 'danger');
                    btnRefrescarConceptos.trigger('click');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        btnEliminar.click(function () {
            if (temp !== 0 && temp !== undefined && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "ELIMINANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'onEliminar',
                    type: "POST",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    mdlConfirmar.modal('hide');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PRECIARIO ELIMINADO', 'danger');
                    getRecords();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnRefrescar.click(function () {
            getRecords();
        });

        btnGuardar.click(function () {
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
                pnlNuevo.addClass('hide');
                pnlPreciario.removeClass('hide');
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO UN NUEVO PRECIARIO', 'success');
                console.log(data, x, jq);
                btnRefrescar.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnModificar.click(function () {
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
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UN PRECIARIO', 'success');
                console.log(data, x, jq);
                btnRefrescar.trigger('click');
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnNuevo.click(function () {
            tblConceptos.html("");
            pnlNuevo.find("select").select2("val", "");
            pnlNuevo.find("input").val("");
            pnlNuevo.removeClass('hide');
            pnlPreciario.addClass("hide");
        });

        btnEditar.click(function () {
            if (temp !== 0 && temp !== undefined && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'getPreciarioByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {
                    console.log(data);
                    var preciario = data[0];
                    mdlEditarXConceptoID.find("#Descripcion").val("");
                    pnlEditar.find("#ID").val(preciario.ID);
                    pnlEditar.find("#Nombre").val(preciario.Nombre);
                    pnlEditar.find("#Tipo").val(preciario.Tipo);
                    pnlEditar.find("#FechaCreacion").val(preciario.FechaCreacion);
                    pnlEditar.find("#Cliente_ID").select2("val", preciario.Cliente_ID);
                    pnlEditar.find("#Estatus").select2("val", preciario.Estatus);
                    pnlEditar.find("#Tipo").select2("val", preciario.Tipo);
                    pnlEditar.find("#PreciarioEspecifico").html("");


                    mdlEditarXConceptoID.addClass("hide");
                    mdlEditarXConceptoID.find("#IDConcepto").val("");
                    mdlEditarXConceptoID.find("#Clave").val("");
                    mdlEditarXConceptoID.find("#Descripcion").val("");
                    mdlEditarXConceptoID.find("#Costo").val("");
                    mdlEditarXConceptoID.find("#Moneda").val("");
                    mdlEditarXConceptoID.find("#Unidad").val("");
                    mdlEditarXConceptoID.find("#Categoria").select2("val", "");
                    mdlEditarXConceptoID.find("#SubCategoria").select2("val", "");
                    mdlEditarXConceptoID.find("#SubSubCategoria").select2("val", "");
                    btnCancelarModificacion.addClass("hide");
                    btnModificarConcepto.addClass("hide");
//                    getCategoriasByPreciarioID(preciario.ID);
                    getCategorias(preciario.ID);
                    getConceptosXPreciarioID(preciario.ID);

                    pnlPreciario.addClass('hide');
                    pnlEditar.removeClass('hide');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });

        btnArchivo.click(function () {
            Archivo.click(function () {
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
                                onProcesarLibroXLS(wb);
                            };
                            if (Archivo[0].files[0] !== undefined && Archivo[0].files[0] !== null) {
                                reader.readAsArrayBuffer(Archivo[0].files[0]);
                            }
                            HoldOn.close();
                        } else {
                            HoldOn.close();
                            onNotify('<span class="fa fa-exclamation"></span>', 'SOLO ARCHIVOS DE EXCEL (XLS, XLSX, CSV)', 'danger');
                        }
                    } else {
                        onNotify('<span class="fa fa-exclamation"></span>', 'DEBE DE SELECCIONAR SOLO ARCHIVOS DE EXCEL (XLS, XLSX, CSV)', 'danger');
                        HoldOn.close();
                    }
                });
            });
            Archivo.trigger('click');
        });

        /*READY*/
        getRecords();
        getClientes();

    });

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
                options += '<option value="' + v.ID + '">' + v.CLIENTE + '</option>';
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
        temp = 0;
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
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" style="width: 100%;"/></div>');
            });
            var tblSelected = $('#tblEmpresas').DataTable(tableOptions);
            $('#tblEmpresas tbody').on('click', 'tr', function () {
                $("#tblEmpresas").find("tr").removeClass("success");
                $("#tblEmpresas").find("tr").removeClass("warning");
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
            $('#tblEmpresas tbody').on('dblclick', 'tr', function () {
                $("#tblEmpresas").find("tr").removeClass("warning");
                $(this).addClass('warning');
                var dtm = tblSelected.row(this).data();
                temp = parseInt(dtm[0]);
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

    function getCategoriasByPreciarioID(IDX) {
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getCategoriasByPreciarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            console.log(data, x, jq);

            var categoriax = '';
            $.each(data, function (k, v) {
                categoriax += '<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
                categoriax += '<div class="panel panel-default">';
                categoriax += '<div class="panel-heading panel-default-list" role="tab" id="' + IDX + v.ID + '" onclick="getSubCategoriasByCategoriaIDPreciarioID(this, ' + IDX + ',' + v.ID + ', \'' + v.CLAVE + '\')">';
                categoriax += '<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + IDX + v.ID + '" aria-expanded="true" aria-controls="collapseOne">';
                categoriax += '<div class="row">';
                categoriax += '<div class="col-md-4" align="left"><span class="badge" align="left">' + v.CLAVE + '</span></div>';
                categoriax += '<div class="col-md-4" align="center">' + v.DESCRIPCION + '</div>';
                categoriax += '<div class="col-md-4" align="right"><span class="badge" align="left">' + v.NSUB + '</span></div>';
                categoriax += '</div>';
                categoriax += '</a>';
                categoriax += '</div>';
                categoriax += '<div id="collapse' + IDX + v.ID + '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="' + IDX + v.ID + '">';
                categoriax += '<div class="panel-body" id="SubCategoria' + IDX + v.ID + '">';

                categoriax += '</div>';
                categoriax += '</div>';
                categoriax += '</div> ';
            });
            pnlEditar.find("#VistaPrevia").html(categoriax);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getSubCategoriasByCategoriaIDPreciarioID(e, ID, IDC, CLAVEX) {

        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getSubCategoriasByCategoriaIDPreciarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                IDC: IDC
            }
        }).done(function (data, x, jq) {
            console.log(data, x, jq);
            var subcategoriax = '';
            $.each(data, function (k, v) {
                subcategoriax += '<div class="panel-group" id="accordion' + ID + IDC + v.ID + '" role="tablist" aria-multiselectable="true">';
                subcategoriax += '<div class="panel panel-default">';

                subcategoriax += '<div class="panel-heading panel-default-list" role="tab" id="' + ID + IDC + v.ID + '" onclick="getSubSubCategoriasBySubCategoriaIDCategoriaIDPreciarioID(' + ID + ',' + IDC + ',' + v.ID + ',\'' + v.CLAVE + '\')">';
                subcategoriax += '<a role="button" data-toggle="collapse" data-parent="#accordion' + ID + IDC + v.ID + '" href="#collapse' + ID + IDC + v.ID + '" aria-expanded="true" aria-controls="collapseOne">';
                subcategoriax += '<div class="row">';
                subcategoriax += '<div class="col-md-4" align="left"><span class="badge" align="left">' + v.CLAVE + '</span></div>';
                subcategoriax += '<div class="col-md-4" align="center">' + v.DESCRIPCION + '</div>';
                subcategoriax += '<div class="col-md-4" align="right"><span class="badge" align="left">' + v.NSUB + '</span><span class="badge-success" align="left">' + v.NCON + '</span></div>';
                subcategoriax += '</div>';
                subcategoriax += '</a>';
                subcategoriax += '</div>';
                subcategoriax += '<div id="collapse' + ID + IDC + v.ID + '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="' + ID + IDC + v.ID + '">';
                subcategoriax += '<div class="panel-body" id="SubSubCategoria' + ID + IDC + v.ID + '">';

                subcategoriax += '<div id="SubCategoriaConceptos' + ID + IDC + v.ID + '">';

                subcategoriax += '</div>';
                subcategoriax += '<div id="SubSubCategorias' + ID + IDC + v.ID + '">';
                subcategoriax += '</div>';
                subcategoriax += '</div>';
                subcategoriax += '</div> ';
                subcategoriax += '</div>';
                getConceptosBySubCategoriaIDCategoriaIDPreciarioID('SubCategoriaConceptos' + ID + IDC + v.ID, ID, IDC, v.ID, '');
            });
            pnlEditar.find("#SubCategoria" + ID + IDC).html(subcategoriax);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getSubSubCategoriasBySubCategoriaIDCategoriaIDPreciarioID(ID, IDC, IDSC, CLAVE) {
        console.log(ID, IDC, IDSC, CLAVE);
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO..."
        });
        $.ajax({
            url: master_url + 'getSubSubCategoriasBySubCategoriaIDCategoriaIDPreciarioID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: ID,
                IDC: IDC,
                IDSC: IDSC
            }
        }).done(function (data, x, jq) {
            console.log(data);

            var subsubcategoriax = '';
            $.each(data, function (k, v) {
                subsubcategoriax += '<div class="panel-group" id="accordion' + ID + IDC + IDSC + v.ID + '" role="tablist" aria-multiselectable="true">';
                subsubcategoriax += '<div class="panel panel-default">';
                if (v.NSUB > 0) {
                    subsubcategoriax += '<div class="panel-heading panel-default-list" role="tab" id="' + ID + IDC + IDSC + v.ID + '" onclick="getConceptosBySubSubCategoriaIDSubCategoriaIDCategoriaIDPreciarioID(\'Conceptos' + ID + IDC + IDSC + v.ID + '\',' + ID + ',' + IDC + ',' + IDSC + ',' + v.ID + ',\'' + v.CLAVE + '\')">';
                } else {
                    subsubcategoriax += '<div class="panel-heading panel-default-list" role="tab" id="' + ID + IDC + IDSC + v.ID + '">';
                }
//                subsubcategoriax += '<div class="panel-heading" role="tab" id="' + ID + IDC + IDSC + v.ID + '">';

                subsubcategoriax += '<a role="button" data-toggle="collapse" data-parent="#accordion' + ID + IDC + IDSC + v.ID + '" href="#collapse' + ID + IDC + IDSC + v.ID + '" aria-expanded="true" aria-controls="collapseOne">';
                subsubcategoriax += '<div class="row">';
                subsubcategoriax += '<div class="col-md-4" align="left"><span class="badge" align="left">' + v.CLAVE + '</span></div>';
                subsubcategoriax += '<div class="col-md-4" align="center">' + v.DESCRIPCION + '</div>';
                subsubcategoriax += '<div class="col-md-4" align="right"><span class="badge-success">' + v.NCON + '</span></div>';
                subsubcategoriax += '</div>';
                subsubcategoriax += '</a>';
                subsubcategoriax += '</div>';

                subsubcategoriax += '<div id="collapse' + ID + IDC + IDSC + v.ID + '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="' + ID + IDC + IDSC + v.ID + '">';

                subsubcategoriax += '<div class="panel-body" id="Conceptos' + ID + IDC + IDSC + v.ID + '">';
                subsubcategoriax += '</div>';

                subsubcategoriax += '</div>';

                subsubcategoriax += '</div> ';
                subsubcategoriax += '</div>';
            });
            pnlEditar.find("#SubSubCategorias" + ID + IDC + IDSC).html(subsubcategoriax);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getConceptosBySubCategoriaIDCategoriaIDPreciarioID(CONTAINER, ID, IDC, IDSC, IDSSC) {
        if (!pnlEditar.find("#collapse" + ID + IDC + IDSC + IDSSC).hasClass("in")) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO..."
            });
            $.ajax({
                url: master_url + 'getConceptosBySubSubCategoriaIDSubCategoriaIDCategoriaIDPreciarioID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: ID,
                    IDC: IDC,
                    IDSC: IDSC,
                    IDSSC: IDSSC
                }
            }).done(function (data, x, jq) {
                console.log(data, x, jq);
                var table_name = "tblConceptosBySubSubCategoriaIDSubCategoriaIDCategoriaIDPreciarioID" + ID + IDC + IDSC;
                pnlEditar.find("#" + CONTAINER).html(getTable(table_name, data));
                pnlEditar.find('#' + table_name + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" style="width: 100%;"/></div>');
                });
                var tblSelected = pnlEditar.find("#" + table_name).DataTable(tableOptions);
//                // Apply the search
                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });

                tblSelected.columns.adjust().draw();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
                $.fn.dataTable.tables({visible: true, api: true}).columns.adjust();
            });
        }
    }

    function getConceptosBySubSubCategoriaIDSubCategoriaIDCategoriaIDPreciarioID(CONTAINER, ID, IDC, IDSC, IDSSC, CLAVE) {
        if (!pnlEditar.find("#collapse" + ID + IDC + IDSC + IDSSC).hasClass("in")) {
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO..."
            });
            $.ajax({
                url: master_url + 'getConceptosBySubSubCategoriaIDSubCategoriaIDCategoriaIDPreciarioID',
                type: "POST",
                dataType: "JSON",
                data: {
                    ID: ID,
                    IDC: IDC,
                    IDSC: IDSC,
                    IDSSC: IDSSC
                }
            }).done(function (data, x, jq) {
                var table_name = "tblConceptosBySubSubCategoriaIDSubCategoriaIDCategoriaIDPreciarioID" + ID;
                pnlEditar.find("#" + CONTAINER).html(getTable(table_name, data));
                pnlEditar.find('#' + table_name + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" style="width: 100%;"/></div>');
                });
                var tblSelected = pnlEditar.find("#" + table_name).DataTable(tableOptions);
//                // Apply the search
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
    }

    function onEditarCategoria(e, IDX, CLAVE, DESCRIPCION) {
        $(e).parent().find("div").removeClass("hide");
        console.log(IDX, CLAVE, DESCRIPCION);
    }


    function getCategorias(IDX) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
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
                options += '<option value="' + v.ID + '">' + v.CATEGORIA + '</option>';
            });
            mdlEditarXConceptoID.find("#Categoria").html(options);
            mdlNuevoConcepto.find("#Conceptos").find("#Categoria").html(options);
            mdlNuevoConcepto.find("#SubCategorias").find("#PreciarioCategoria_ID").html(options);
            mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioCategoria_ID").html(options);
            getSubCategorias(IDX, '');
            getSubSubCategoriasXSubCategoriaXCategoriaIDXPreciarioID(IDX, '', '');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getSubCategorias(ID, IDC) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
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
            mdlEditarXConceptoID.find("#SubCategoria").select2("val", "");
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.SUBCATEGORIA + '</option>';
            });
            mdlEditarXConceptoID.find("#SubCategoria").html(options);
            mdlNuevoConcepto.find("#Conceptos").find("#SubCategoria").html(options);
            mdlNuevoConcepto.find("#SubSubCategorias").find("#PreciarioSubCategorias_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getSubSubCategoriasXSubCategoriaXCategoriaIDXPreciarioID(ID, IDC, IDSC) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
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
            mdlEditarXConceptoID.find("#SubSubCategoria").select2("val", "");
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.SUBSUBCATEGORIA + '</option>';
            });
            mdlEditarXConceptoID.find("#SubSubCategoria").html(options);
            mdlNuevoConcepto.find("#SubSubCategoria").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
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
        }).done(function (data, x, jq) {
            $("#PreciarioEspecifico").html(getTable('tblConceptosXPreciarioID', data));
            $('#tblConceptosXPreciarioID tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" style="width: 100%;"/></div>');
            });
            var tblSelected = $('#tblConceptosXPreciarioID').DataTable(tableOptions);
            $('#tblConceptosXPreciarioID tbody').on('click', 'tr', function () {
                $("#tblConceptosXPreciarioID").find("tr").removeClass("success");
                $("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
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
            $('#tblConceptosXPreciarioID tbody').on('dblclick', 'tr', function () {
                $("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
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
                }).done(function (data, x, jq) {
                    console.log(data);
                    var concepto = data[0];
                    mdlEditarXConceptoID.removeClass("hide");
                    mdlEditarXConceptoID.find("#IDConcepto").val(concepto.ID);
                    mdlEditarXConceptoID.find("#Clave").val(concepto.Clave);
                    mdlEditarXConceptoID.find("#Costo").val(concepto.Costo);
                    mdlEditarXConceptoID.find("#Descripcion").val(concepto.Descripcion);
                    mdlEditarXConceptoID.find("#Moneda").val(concepto.Moneda);
                    mdlEditarXConceptoID.find("#Unidad").val(concepto.Unidad);
                    mdlEditarXConceptoID.find("#Categoria").select2("val", concepto.PreciarioCategorias_ID);
                    mdlEditarXConceptoID.find("#SubCategoria").select2("val", concepto.PreciarioSubCategorias_ID);
                    mdlEditarXConceptoID.find("#SubSubCategoria").select2("val", concepto.PreciarioSubSubCategoria_ID);
                    btnModificarConcepto.removeClass("hide");
                    btnCancelarModificacion.removeClass("hide");
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
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
    function getConceptoByClaveXDescripcion(IDX) {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "BUSCANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getConceptoByClaveXDescripcion',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX,
                CLAVE: (pnlEditar.find("#ClaveConcepto").val() !== '') ? pnlEditar.find("#ClaveConcepto").val() : '',
                DESCRIPCION: (pnlEditar.find("#DescripcionConcepto").val() !== '') ? pnlEditar.find("#DescripcionConcepto").val() : ''
            }
        }).done(function (data, x, jq) {
            $("#PreciarioEspecifico").html(getTable('tblConceptosXPreciarioID', data));
            $('#tblConceptosXPreciarioID tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" style="width: 100%;"/></div>');
            });
            var tblSelected = $('#tblConceptosXPreciarioID').DataTable(tableOptions);
            $('#tblConceptosXPreciarioID tbody').on('click', 'tr', function () {
                $("#tblConceptosXPreciarioID").find("tr").removeClass("success");
                $("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
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
            $('#tblConceptosXPreciarioID tbody').on('dblclick', 'tr', function () {
                $("#tblConceptosXPreciarioID").find("tr").removeClass("warning");
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
                }).done(function (data, x, jq) {
                    console.log(data);
                    var concepto = data[0];
                    mdlEditarXConceptoID.removeClass("hide");
                    mdlEditarXConceptoID.find("#IDConcepto").val(concepto.ID);
                    mdlEditarXConceptoID.find("#Clave").val(concepto.Clave);
                    mdlEditarXConceptoID.find("#Costo").val(concepto.Costo);
                    mdlEditarXConceptoID.find("#Descripcion").val(concepto.Descripcion);
                    mdlEditarXConceptoID.find("#Moneda").val(concepto.Moneda);
                    mdlEditarXConceptoID.find("#Unidad").val(concepto.Unidad);
                    mdlEditarXConceptoID.find("#Categoria").select2("val", concepto.PreciarioCategorias_ID);
                    mdlEditarXConceptoID.find("#SubCategoria").select2("val", concepto.PreciarioSubCategorias_ID);
                    mdlEditarXConceptoID.find("#SubSubCategoria").select2("val", concepto.PreciarioSubSubCategoria_ID);
                    btnModificarConcepto.removeClass("hide");
                    btnCancelarModificacion.removeClass("hide");
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
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