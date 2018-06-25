<div class="card border-0" id="pnlTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-6 col-sm-6 float-left">
                <legend class="float-left">Empresas</legend>
            </div>
            <div class="col-6 col-sm-6  float-right" align="right">
                <button type="button" class="btn btn-primary" id="btnNuevo" data-toggle="tooltip" data-placement="bottom" title="Nuevo"><span class="fa fa-plus"></span><br></button>
            </div>
        </div>
        <div  id="tblRegistros" class="row"></div>
    </div>
</div>
<div id="" class="container-fluid">
    <div class="card border-0  d-none" id="pnlDatos">
        <div class="card-body text-dark">
            <form id="frmNuevo">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 float-left">
                        <legend >Empresa</legend>
                    </div>
                    <div class="col-12 col-sm-6 col-md-8" align="right">
                        <button type="button" class="btn btn-primary btn-sm" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" >
                            <span class="fa fa-arrow-left" ></span>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" id="btnEliminar" data-toggle="tooltip" data-placement="bottom" title="Eliminar"><span class="fa fa-trash fa-1x"></span> </button>
                        <button type="button" class="btn btn-raised btn-info btn-sm" id="btnGuardar" data-toggle="tooltip" data-placement="bottom" title="Guardar"><span class="fa fa-save "></span> </button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 d-none">
                        <input type="text"  name="ID" class="form-control form-control-sm">
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group label-static">
                            <label for="Nombre" class="control-label">Nombre*</label>
                            <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre" required="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group label-static">
                            <label for="Rfc" class="control-label">RFC*</label>
                            <input type="text" class="form-control form-control-sm" id="Rfc" name="Rfc" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="form-group label-static">
                            <label for="ContactoNombre" class="control-label">Contacto Nombre</label>
                            <input type="text" id="ContactoNombre" name="ContactoNombre" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group label-static">
                            <label for="ContactoApellidos" class="control-label">Contacto Apellidos</label>
                            <input type="text" id="ContactoApellidos" name="ContactoApellidos" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="Direccion" class="control-label">Dirección</label>
                            <input type="text" id="Direccion" name="Direccion" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3">
                        <div class="form-group label-static">
                            <label for="NoExterior" class="control-label">N°</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 col-md-3">
                        <div class="form-group label-static">
                            <label for="NoInterior" class="control-label">N° Int.</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="CodigoPostal" class="control-label">Código Postal</label>
                            <input type="number" id="CodigoPostal" name="CodigoPostal" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="Colonia" class="control-label">Colonia</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="Ciudad" class="control-label">Ciudad</label>
                            <input type="text" id="Ciudad" name="Ciudad" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="form-group label-static">
                            <label for="Estado" class="control-label">Estado</label>
                            <input type="text" id="Estado" name="Estado" class="form-control form-control-sm" placeholder="">
                        </div>
                    </div>
                </div>
                <!-- FOTO -->
                <div class="row">
                    <div class="col-12" align="center">
                        <br>
                        <h5>Puede subir un archivo PDF, imagen (JPG,GIF,PNG) etc.</h5>
                    </div>
                    <div class="col-12" align="center">
                        <input type="file" id="RutaLogo" name="RutaLogo" class="d-none">
                        <button type="button" class="btn btn-raised btn-info" id="btnArchivo" name="btnArchivo">
                            <span class="fa fa-upload fa-1x"></span> SELECCIONA EL ARCHIVO
                        </button>
                        <br><hr>
                        <div id="VistaPrevia" class="col-12" align="center"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Empresas/';
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
                        var preview = '<button type="button" class="btn btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><br><img src="' + reader.result + '" class="img-fluid" ><div class="caption"><p>' + Archivo[0].files[0].name + '</p></div>';
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
            $("#tblRegistros").html(getTable('tblEmpresas', data));
            $('#tblEmpresas tfoot th').each(function () {
                $(this).html('');
            });
            var tblSelected = $('#tblEmpresas').DataTable(tableOptions);
            $('#tblEmpresas_filter input[type=search]').focus();
            $('#tblEmpresas tbody').on('click', 'tr', function () {
                nuevo = false;
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
                temp = parseInt(dtm[0]);
                if (temp !== 0 && temp !== undefined && temp > 0) {
                    HoldOn.open({
                        theme: "sk-bounce",
                        message: "CARGANDO DATOS..."
                    });
                    $.ajax({
                        url: master_url + 'getEmpresaByID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: temp
                        }
                    }).done(function (data, x, jq) {
                        pnlDatos.find("input").val("");
                        var empresa = data[0];
                        $.each(data[0], function (k, v) {
                            if (k !== 'RutaLogo') {
                                pnlDatos.find("[name='" + k + "']").val(v);
                            }
                        });
                        pnlTablero.addClass("d-none");
                        pnlDatos.removeClass('d-none');

                        if (empresa.RutaLogo !== null && empresa.RutaLogo !== undefined && empresa.RutaLogo !== '') {
                            var ext = getExt(empresa.RutaLogo);
                            if (ext === "gif" || ext === "jpg" || ext === "png") {
                                pnlDatos.find("#VistaPrevia").html('<div class="col-8"></div><div class="col-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + empresa.RutaLogo + '" class="img-fluid"/>');
                            }
                            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                pnlDatos.find("#VistaPrevia").html('<div class="col-8"></div> <div class="col-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + empresa.RutaLogo + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
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