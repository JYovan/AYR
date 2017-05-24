
<div class="col-md-12">
    <div class="panel panel-default">
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


<!--MODALES-->

<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NUEVO PRECIARIO</h4>
            </div>
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
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary" id="btnGuardar">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--EDITAR-->

<div id="mdlEditar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg super-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDITAR PRECIARIO</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset> 
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
                        
                        <div id="pnlConceptos" class="col-md-12" align="center">  
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                            <ul class="nav nav-tabs">
                                <li><a href="#Conceptos" data-toggle="tab">CONCEPTOS</a></li>
                                <li><a href="#Categorias" data-toggle="tab">CATEGORÍAS</a></li>
                                <li><a href="#SubCategorias" data-toggle="tab">SUB CATEGORÍAS</a></li>
                                <li><a href="#SubSubCategorias" data-toggle="tab">SUBSUB CATEGORÍAS</a></li>
                            </ul>
                            </div>
                            <div class="col-md-12"></div>
                            <div id="pnlTabConceptos" class="tab-content">
                                <div class="tab-pane fade" id="Conceptos">
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
                                    <div class="col-md-12" align="right">
                                        <button type="button" class="btn btn-default" id="btnCancelarConcepto" name="btnCancelarConcepto"><span class="fa fa-ban fa-1x"></span><br>CANCELAR</button> 
                                        <button type="button" class="btn btn-default" id="btnGuardarConcepto" name="btnGuardarConcepto"><span class="fa fa-check fa-1x"></span><br>GUARDAR</button> 

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
                                        <div class="col-md-12" align="right">
                                            <br>
                                            <button type="button" class="btn btn-default" id="btnCancelarCategoria" name="btnCancelarCategoria"><span class="fa fa-ban 1x"></span><br>CANCELAR</button>
                                            <button type="button" class="btn btn-default" id="btnGuardarCategoria" name="btnGuardarCategoria"><span class="fa fa-ban 1x"></span><br>GUARDAR</button>
                                        </div>
                                    </div>  
                                </div>
                                <div class="tab-pane fade" id="SubCategorias">
                                    <div class="col-md-4">
                                        <label for="">CLAVE</label>
                                        <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">DESCRIPCIÓN</label>
                                        <textarea type="text" class="form-control" id="Descripcion" name="Descripcion" rows="4" cols="10"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="PreciarioCategoria_ID" name="PreciarioCategoria_ID" class="form-control">
                                            <option value=""></option> 
                                        </select>
                                    </div>
                                    <div class="col-md-12" align="right">
                                        <br>
                                        <button type="button" class="btn btn-default" id="btnCancelarSubCategoria" name="btnCancelarSubCategoria"><span class="fa fa-ban 1x"></span><br>CANCELAR</button>
                                        <button type="button" class="btn btn-default" id="btnGuardarSubCategoria" name="btnGuardarSubCategoria"><span class="fa fa-ban 1x"></span><br>GUARDAR</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="SubSubCategorias">
                                    <div class="col-md-6">
                                        <label for="">CLAVE</label>
                                        <input type="text" class="form-control" id="Clave" name="Clave" placeholder="EJ: XYZ">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">DESCRIPCIÓN</label>
                                        <textarea type="text" class="form-control" id="Descripcion" name="Descripcion" rows="4" cols="10"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">CATEGORÍA</label>
                                        <select id="PreciarioCategoria_ID" name="PreciarioCategoria_ID" class="form-control">
                                            <option value=""></option> 
                                        </select>
                                    </div>       
                                    <div class="col-md-6">
                                        <label for="">SUBCATEGORÍA</label>
                                        <select id="PreciarioSubCategorias_ID" name="PreciarioSubCategorias_ID" class="form-control">
                                            <option value=""></option> 
                                        </select>
                                    </div>

                                    <div class="col-md-12" align="right">
                                        <br>
                                        <button type="button" class="btn btn-default" id="btnCancelarSubSubCategoria" name="btnCancelarSubSubCategoria"><span class="fa fa-ban 1x"></span><br>CANCELAR</button>
                                        <button type="button" class="btn btn-default" id="btnGuardarSubSubCategoria" name="btnGuardarSubSubCategoria"><span class="fa fa-ban 1x"></span><br>GUARDAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <h3>CONCEPTOS</h3>
                        </div>
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
                        <div class="col-md-6" align="left">
                            <button type="button" class="btn btn-default" id="btnEliminarConcepto"><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button> 
                            <button type="button" class="btn btn-default" id="btnRefrescarConceptos"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button> 
                        </div>
                        <div class="col-md-6" align="right">
                            <button type="button" class="btn btn-default hide" id="btnCancelarModificacion" name="btnCancelarModificacion"><span class="fa fa-ban fa-1x"></span><br>CANCELAR</button> 
                            <button type="button" class="btn btn-default hide" id="btnModificarConcepto" name="btnModificarConcepto"><span class="fa fa-check fa-1x"></span><br>GUARDAR</button> 
                        </div>
                        <div class="col-md-12">
                            <br>
                        </div>
                        <!--                        <div class="col-md-5">
                                                    <input type="text" id="ClaveConcepto" name="ClaveConcepto" class="form-control" placeholder="BUSCAR POR CLAVE">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" id="DescripcionConcepto" name="DescripcionConcepto" class="form-control" placeholder="BUSCAR POR DESCRIPCIÓN">
                                                </div>
                                                <div class="col-md-1">
                                                    <button type="button" class="btn btn-default" id="btnBuscarConcepto"><span class="fa fa-search fa-1x"></span><br>BUSCAR</button> 
                                                </div>-->
                        <div id="PreciarioEspecifico" class="col-md-12">
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>
                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-ban fa-1x"></span><br>CANCELAR</button>
                <button type="button" class="btn btn-primary" id="btnEditar"><span class="fa fa-check fa-1x"></span><br>GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

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
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");
    var btnRefrescar = $("#btnRefrescar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");

    var mdlConfirmar = $("#mdlConfirmar");
    var btnEliminar = $("#btnEliminar");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");
    var btnModificar = mdlEditar.find("#btnEditar");
    var PreciarioEspecifico = mdlEditar.find("#PreciarioEspecifico");
    var mdlEditarXConceptoID = mdlEditar.find("#mdlEditarXConceptoID");
    var btnModificarConcepto = mdlEditar.find("#btnModificarConcepto");
    var btnRefrescarConceptos = mdlEditar.find("#btnRefrescarConceptos");
    var btnEliminarConcepto = mdlEditar.find("#btnEliminarConcepto");
    var btnBuscarConcepto = mdlEditar.find("#btnBuscarConcepto");
    var btnCancelarModificacion = mdlEditar.find("#btnCancelarModificacion");
    var btnNuevoConcepto = mdlEditar.find("#btnNuevoConcepto");
    var mdlNuevoConcepto = mdlEditar.find("#mdlNuevoConcepto");
    var btnGuardarConcepto = mdlEditar.find("#btnGuardarConcepto");
    var btnCancelarConcepto = mdlEditar.find("#btnCancelarConcepto");
    var btnNuevaCategoria = mdlEditar.find("#btnNuevaCategoria");
    var pnlConceptos = mdlEditar.find("#pnlConceptos");
    var btnCancelarCategoria = pnlConceptos.find("#btnCancelarCategoria");

    var btnNuevaSubCategoria = mdlEditar.find("#btnNuevaSubCategoria");
    var mdlNuevaSubCategoria = mdlEditar.find("#mdlNuevaSubCategoria");
    var btnCancelarSubCategoria = mdlEditar.find("#btnCancelarSubCategoria");

    var btnNuevaSubSubCategoria = mdlEditar.find("#btnNuevaSubSubCategoria");
    var mdlNuevaSubSubCategoria = mdlEditar.find("#mdlNuevaSubSubCategoria");
    var btnCancelarSubSubCategoria = mdlEditar.find("#btnCancelarSubSubCategoria");

    //Variables de controles para subir archivo
    var Archivo = mdlNuevo.find("#RutaArchivo");
    var btnArchivo = mdlNuevo.find("#btnArchivo");
    var VistaPrevia = mdlNuevo.find("#VistaPrevia");

    $(document).ready(function () {

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
            var frm = new FormData();
            frm.append('ID', mdlEditar.find("#ID").val());
            frm.append('Clave', mdlNuevoConcepto.find("#Clave").val());
            frm.append('Descripcion', mdlNuevoConcepto.find("#Descripcion").val());
            frm.append('Costo', mdlNuevoConcepto.find("#Costo").val());
            frm.append('Moneda', mdlNuevoConcepto.find("#Moneda").val());
            frm.append('Unidad', mdlNuevoConcepto.find("#Unidad").val());
            frm.append('Categoria', mdlNuevoConcepto.find("#Categoria").val());
            frm.append('SubCategoria', mdlNuevoConcepto.find("#SubCategoria").val());
            frm.append('SubSubCategoria', mdlNuevoConcepto.find("#SubSubCategoria").val());
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
        });


        btnNuevoConcepto.click(function () {
            btnCancelarConcepto.removeClass("hide");
            btnGuardarConcepto.removeClass("hide");
            mdlNuevoConcepto.removeClass("hide");
        });

        btnBuscarConcepto.click(function () {
            getConceptoByClaveXDescripcion(mdlEditar.find("#ID").val());
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
            getConceptosXPreciarioID(mdlEditar.find("#ID").val());
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
            getSubCategorias(mdlEditar.find("#ID").val(), $(this).val());
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
            var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
            frm.append('PRECIARIO', mdlNuevo.find("#json_preciario").val());
            $.ajax({
                url: master_url + 'onAgregar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                mdlNuevo.modal('hide');
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
            var frm = new FormData(mdlEditar.find("#frmEditar")[0]);
            $.ajax({
                url: master_url + 'onModificar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                mdlEditar.modal('hide');
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
            mdlNuevo.find("select").select2("val", "");
            mdlNuevo.find("input").val("");
            mdlNuevo.modal('show');
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
                    mdlEditar.find("#ID").val(preciario.ID);
                    mdlEditar.find("#Nombre").val(preciario.Nombre);
                    mdlEditar.find("#Tipo").val(preciario.Tipo);
                    mdlEditar.find("#FechaCreacion").val(preciario.FechaCreacion);
                    mdlEditar.find("#Cliente_ID").select2("val", preciario.Cliente_ID);
                    mdlEditar.find("#Estatus").select2("val", preciario.Estatus);
                    mdlEditar.find("#Tipo").select2("val", preciario.Tipo);
                    mdlEditar.find("#PreciarioEspecifico").html("");


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
                    mdlEditar.modal('show');
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
            mdlNuevo.find("#Cliente_ID").html(options);
            mdlEditar.find("#Cliente_ID").html(options);
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
            mdlEditar.find("#VistaPrevia").html(categoriax);

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
            mdlEditar.find("#SubCategoria" + ID + IDC).html(subcategoriax);

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
            mdlEditar.find("#SubSubCategorias" + ID + IDC + IDSC).html(subsubcategoriax);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getConceptosBySubCategoriaIDCategoriaIDPreciarioID(CONTAINER, ID, IDC, IDSC, IDSSC) {
        if (!mdlEditar.find("#collapse" + ID + IDC + IDSC + IDSSC).hasClass("in")) {
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
                mdlEditar.find("#" + CONTAINER).html(getTable(table_name, data));
                mdlEditar.find('#' + table_name + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" style="width: 100%;"/></div>');
                });
                var tblSelected = mdlEditar.find("#" + table_name).DataTable(tableOptions);
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
        if (!mdlEditar.find("#collapse" + ID + IDC + IDSC + IDSSC).hasClass("in")) {
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
                mdlEditar.find("#" + CONTAINER).html(getTable(table_name, data));
                mdlEditar.find('#' + table_name + ' tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" style="width: 100%;"/></div>');
                });
                var tblSelected = mdlEditar.find("#" + table_name).DataTable(tableOptions);
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
                CLAVE: (mdlEditar.find("#ClaveConcepto").val() !== '') ? mdlEditar.find("#ClaveConcepto").val() : '',
                DESCRIPCION: (mdlEditar.find("#DescripcionConcepto").val() !== '') ? mdlEditar.find("#DescripcionConcepto").val() : ''
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

    var tblConceptos = mdlNuevo.find("#VistaPrevia");
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
        mdlNuevo.find("#json_preciario").html(output);
        to_html(wb);
    }

</script>