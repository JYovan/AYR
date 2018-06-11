<div class="col-md-12">
    <div class="panel panel-default" id="pnlTablero">
        <div class="panel-heading">
            <div class="cursor-hand" >Clientes</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                </div>
                <div class="col-md-12 table-responsive" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>
<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlDatos" class="panel panel-default d-none">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    Cliente
                </div>
                <div class="input-group pull-right">
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    <button type="button" class="btn btn-raised btn-danger" id="btnEliminar"><span class="fa fa-trash fa-1x"></span> ELIMINAR</button>
                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardar"><span class="fa fa-save fa-1x"></span> GUARDAR</button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <fieldset>
                    <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                        <li role="presentation" class="active"><a href="#Datos" aria-controls="Datos" role="tab" data-toggle="tab">Datos Generales</a></li>
                        <li role="presentation"><a href="#Datos2" aria-controls="Datos2" role="tab" data-toggle="tab">Datos de Reportes</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="Datos">
                            <div class="col-md-12 d-none">
                                <input type="text"  name="ID" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group label-static">
                                    <label for="Nombre" class="control-label">Nombre*</label>
                                    <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-static">
                                    <label for="NombreCorto" class="control-label">Nombre Corto*</label>
                                    <input type="text" id="NombreCorto" name="NombreCorto" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-static">
                                    <label for="Calle" class="control-label">Calle</label>
                                    <input type="text" id="Calle" name="Calle" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="NoExterior" class="control-label">No Exterior</label>
                                    <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="NoInterior" class="control-label">No Interior</label>
                                    <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="CodigoPostal" class="control-label">Código Postal</label>
                                    <input type="number" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="Colonia" class="control-label">Colonia</label>
                                    <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="Ciudad" class="control-label">Ciudad</label>
                                    <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="Estado" class="control-label">Estado</label>
                                    <input type="text" id="Estado" name="Estado" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="Contacto1" class="control-label">Contacto 1</label>
                                    <input type="text" id="Contacto1" name="Contacto1" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="Contacto2" class="control-label">Contacto 2</label>
                                    <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="Contacto3" class="control-label">Contacto 3</label>
                                    <input type="text" id="Contacto3" name="Contacto3" class="form-control" placeholder="" >
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Datos2">
                            <div class="col-6 col-md-6">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Leyenda Reportes</label>
                                    <textarea class="col-md-12 form-control" id="LeyendaReporte" name="LeyendaReporte" rows="3" ></textarea>
                                </div>
                            </div>
                            <!-- FOTO -->

                            <div class="col-md-12" align="center">
                                <div for="" align="center">
                                    <br>
                                    <h3>Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</h3>
                                </div>
                                <input type="file" id="RutaLogo" name="RutaLogo" class="d-none">
                                <button type="button" class="btn btn-raised btn-info" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x"></span> SELECCIONA EL ARCHIVO
                                </button>
                                <br><hr>
                                <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6"><br>
                        <h6>Los campos con * son obligatorios</h6>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Clientes/';
    var btnNuevo = $("#btnNuevo");
    var pnlDatos = $("#pnlDatos");
    var pnlTablero = $("#pnlTablero");
    var Archivo = pnlDatos.find("#RutaLogo");
    var btnArchivo = pnlDatos.find("#btnArchivo");
    var VistaPrevia = pnlDatos.find("#VistaPrevia");
    //Boton que guarda los datos del formulario
    var btnGuardar = pnlDatos.find("#btnGuardar");
    var btnCancelar = pnlDatos.find("#btnCancelar");
    var btnEliminar = $("#btnEliminar");
    var nuevo = true;
    $(document).ready(function () {

        /*NUEVO ARCHIVO*/
        btnArchivo.on("click", function () {
            $('#RutaLogo').attr("type", "file");
            $('#RutaLogo').val('');
            Archivo.change(function () {
                HoldOn.open({theme: "sk-bounce", message: "POR FAVOR ESPERE..."});
                var imageType = /image.*/;
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var preview = '<button type="button" class="btn btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><br><img src="' + reader.result + '" class="img-responsive" width="400px"><div class="caption"><p>' + Archivo[0].files[0].name + '</p></div>';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(Archivo[0].files[0]);
                } else {
                    if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<div><button type="button" class="btn btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><br> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
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

        btnNuevo.click(function () {
            pnlTablero.addClass("d-none");
            pnlDatos.removeClass('d-none');
            pnlDatos.find("input").val("");
            pnlDatos.find(".nav-tabs li").removeClass("active");
            $(pnlDatos.find(".nav-tabs li")[0]).addClass("active");
            pnlDatos.find("#Datos").addClass("active in");
            pnlDatos.find("#Datos2").removeClass("active in");
            $(':input:text:enabled:visible:first').focus();
            nuevo = true;
        });
        btnCancelar.click(function () {
            pnlTablero.removeClass("d-none");
            pnlDatos.addClass('d-none');
        });
        //Evento clic del boton confirmar borrar
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
                            ID: temp
                        }
                    }).done(function (data, x, jq) {
                        getRecords();
                        pnlDatos.addClass("d-none");
                        pnlTablero.removeClass("d-none");
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }
            });
        });
        btnGuardar.click(function () {
            isValid('pnlDatos');
            if (valido) {
                var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);
                if (!nuevo) {
                    $.ajax({
                        url: master_url + 'onModificar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO EL REGISTRO', 'success');
                        getRecords();
                        pnlDatos.addClass("d-none");
                        pnlTablero.removeClass("d-none");
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    $.ajax({
                        url: master_url + 'onAgregar',
                        type: "POST",
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: frm
                    }).done(function (data, x, jq) {
                        onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO REGISTRO', 'success');
                        pnlDatos.find("[name='ID']").val(data);
                        nuevo = false;
                        getRecords();
                        pnlDatos.addClass("d-none");
                        pnlTablero.removeClass("d-none");
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
        /*CALLS*/
        getRecords();
        handleEnter();
    });
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
            $("#tblRegistros").html(getTable('tblClientes', data));
            $('#tblClientes tfoot th').each(function () {
                $(this).html('');
            });
            var tblSelected = $('#tblClientes').DataTable(tableOptions);
            $('#tblClientes_filter input[type=search]').focus();
            $('#tblClientes tbody').on('click', 'tr', function () {
                nuevo = false;
                $("#tblClientes").find("tr").removeClass("success");
                $("#tblClientes").find("tr").removeClass("warning");
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
                if (temp !== 0 && temp !== undefined && temp > 0) {
                    HoldOn.open({
                        theme: "sk-bounce",
                        message: "CARGANDO DATOS..."
                    });
                    $.ajax({
                        url: master_url + 'getClienteByID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: temp
                        }
                    }).done(function (data, x, jq) {
                        pnlDatos.find("input").val("");
                        pnlDatos.find(".nav-tabs li").removeClass("active");
                        $(pnlDatos.find(".nav-tabs li")[0]).addClass("active");
                        pnlDatos.find("#Datos").addClass("active in");
                        pnlDatos.find("#Datos2").removeClass("active in");
                        var cliente = data[0];
                        $.each(data[0], function (k, v) {
                            if (k !== 'RutaLogo') {
                                pnlDatos.find("[name='" + k + "']").val(v);
                            }
                        });
                        pnlTablero.addClass("d-none");
                        pnlDatos.removeClass('d-none');

                        if (cliente.RutaLogo !== null && cliente.RutaLogo !== undefined && cliente.RutaLogo !== '') {
                            var ext = getExt(cliente.RutaLogo);
                            if (ext === "gif" || ext === "jpg" || ext === "png") {
                                pnlDatos.find("#VistaPrevia").html('<div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + cliente.RutaLogo + '" width="400px"/>');
                            }
                            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                pnlDatos.find("#VistaPrevia").html('<div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + cliente.RutaLogo + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                            }
                            if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                                pnlDatos.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                            }
                        } else {
                            pnlDatos.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                        }
                        $(':input:text:enabled:visible:first').focus();
                        $(':input:text:enabled:visible:first').select();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
                }
            });

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onRemovePreview(e) {
        VistaPrevia.html("");
        $('#RutaLogo').attr("type", "text");
        $('#RutaLogo').val('N');
    }
</script>