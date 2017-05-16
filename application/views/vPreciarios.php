
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">PRECIARIOS</div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-pencil fa-1x"></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                    <button type="button" class="btn btn-default" id="btnEliminar"><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
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


                        <div class="col-md-3">
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
                            <span> <br></span>
                        </div>

                        <div class="col-md-12" align="center">
                            <input type="file" id="RutaArchivo" name="RutaArchivo" class="hide">
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                SELECCIONAR ARCHIVO 
                            </button>
                        </div> 
                        <div id="VistaPrevia" class="col-md-12 table-responsive" align="center" style="overflow-y: auto; height: 250px;"></div>
                        <div class="col-md-12 ">
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
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDITAR PRECIARIO</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>


                        <div class="col-6 col-md-12 hidden">
                            <label for="">ID*</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required disabled="true">
                        </div>

                        <div class="col-6 col-md-12">
                            <label for="">NOMBRE*</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required >
                        </div>


                        <div class="col-md-3">
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
                            <span> <br></span>
                        </div>

                        <div class="col-md-12" align="center">
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaArchivo" name="RutaArchivo" class="hide">
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                SELECCIONAR ARCHIVO 
                            </button>
                        </div>


                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-primary" id="btnEditar">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlPreciarios/'
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = mdlNuevo.find("#btnGuardar");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");

    //Variables de controles para subir archivo
    var Archivo = mdlNuevo.find("#RutaArchivo");
    var btnArchivo = mdlNuevo.find("#btnArchivo");
    var VistaPrevia = mdlNuevo.find("#VistaPrevia");

    $(document).ready(function () {

        btnGuardar.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
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
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnNuevo.click(function () {
            tblConceptos.html("");
            mdlNuevo.modal('show');
        });
        btnEditar.click(function () {
            mdlEditar.modal('show');
        });

        btnArchivo.click(function () {
            HoldOn.open({
                theme: "sk-bounce",
                message: "POR FAVOR ESPERE..."
            });
            Archivo.change(function () {
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
            });
            Archivo.trigger('click');
        });

        /*READY*/
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
        var result = {};
        workbook.SheetNames.forEach(function (sheetName) {
            var roa = X.utils.sheet_to_json(workbook.Sheets[sheetName]);
            if (roa.length > 0) {
                result[sheetName] = roa;
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
        to_html(wb);
        switch ("json") {
            case "json":
                output = JSON.stringify(to_json(wb), 2, 2);
                mdlNuevo.find("#json_preciario").html(output);
                break;
            case "html":
                return to_html(wb);
            default:
                return to_html(wb);
        }
    }
</script>