<div class="col-md-12">
    <div class="panel panel-default" id="pnlTablero">
        <div class="panel-heading">
            <div class="cursor-hand" >Empresas</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default hide" id=""><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                    <button type="button" class="btn btn-default hide" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
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
            <h4 class="modal-title">Confirmar</h4>
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
<!--MODALES-->
<!--NUEVO-->
<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlNuevo" class="panel panel-default hide animated slideInRight">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                        <span class="fa fa-arrow-left CustomColorIcon" ></span>
                    </button>
                    Nueva Empresa
                </div>

                <div class="input-group pull-right">

                    <button type="button" class="btn btn-raised btn-primary" id="btnGuardar">GUARDAR</button>
                </div>

            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">
                <fieldset>
                    <div class="col-6 col-md-6">
                        <label for="">Nombre*</label>    
                        <input type="text" class="form-control" id="Nombre" name="Nombre" >
                    </div>
                    <div class="col-6 col-md-6">
                        <label for="">RFC*</label>    
                        <input type="text" class="form-control" id="Rfc" name="Rfc" >
                    </div>
                    <div class="col-md-6">
                        <label for="">Contacto Nombre</label>
                        <input type="text" id="ContactoNombre" name="ContactoNombre" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Contacto Apellidos</label>
                        <input type="text" id="ContactoApellidos" name="ContactoApellidos" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Dirección</label>
                        <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-3">
                        <label for="">N°</label>
                        <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-3">
                        <label for="">N° Int.</label>
                        <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Código Postal</label>
                        <input type="number" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Colonia</label>
                        <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Ciudad</label>
                        <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="">Estado</label>
                        <input type="text" id="Estado" name="Estado" class="form-control" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <span> <br></span>
                    </div>
                    <div class="col-md-12" align="center">
                        <div id="VistaPrevia" class="col-md-12" align="center"></div>
                        <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                        <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                            <span class="fa fa-upload fa-1x">
                            </span> 
                            Selecciona el logo de la empresa
                        </button>
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
<div id="pnlEditar" class="panel panel-default hide animated slideInRight">
    <div class="Custompanel-heading " >
        <div class="Custompanel-heading clearfix">
            <div class="panel-title pull-left cursor-hand" >
                <button type="button" class="btn btn-default " id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Regresar">
                    <span class="fa fa-arrow-left CustomColorIcon" ></span>
                </button>
                Editar Empresa
            </div>
            <div class="input-group pull-right">
                <button type="button" class="btn btn-default CustomColorEliminarRegistro" id="btnConfirmarEliminar" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar"><span class="fa fa-trash fa-1x"></span><br></button>
                <button type="button" class="btn btn-raised btn-primary" id="btnModificar">GUARDAR</button>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <form id="frmEditar">
            <fieldset>
                <div class="col-md-12 hide">
                    <input type="text" id="ID" name="ID" class="form-control">
                </div>
                <div class="col-6 col-md-6">
                    <label for="">Nombre*</label>    
                    <input type="text" class="form-control" id="Nombre" name="Nombre" >
                </div>
                <div class="col-6 col-md-6">
                    <label for="">RFC*</label>    
                    <input type="text" class="form-control" id="Rfc" name="Rfc" >
                </div>
                <div class="col-md-6">
                    <label for="">Contacto Nombre</label>
                    <input type="text" id="ContactoNombre" name="ContactoNombre" class="form-control" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="">Contacto Apellidos</label>
                    <input type="text" id="ContactoApellidos" name="ContactoApellidos" class="form-control" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="">Dirección</label>
                    <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="">
                </div>
                <div class="col-md-3">
                    <label for="">N°</label>
                    <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="">
                </div>
                <div class="col-md-3">
                    <label for="">N° Int.</label>
                    <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="">Código Postal</label>
                    <input type="number" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="">Colonia</label>
                    <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="">Ciudad</label>
                    <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="">
                </div>
                <div class="col-md-6">
                    <label for="">Estado</label>
                    <input type="text" id="Estado" name="Estado" class="form-control" placeholder="">
                </div>
                <div class="col-md-12">
                    <span> <br></span>
                </div>
                <div class="col-md-12" align="center">
                    <div id="VistaPrevia" class="col-md-12" align="center"></div>
                    <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                    <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                        <span class="fa fa-upload fa-1x">
                        </span> 
                        Modificar el logo de la empresa
                    </button>
                </div>
                <div class="col-6 col-md-6">
                    <h6>Los campos con * son obligatorios</h6>    
                </div>
            </fieldset>
        </form>
    </div>
</div>
</div>      
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlEmpresas/';
    var btnNuevo = $("#btnNuevo");
    var pnlNuevo = $("#pnlNuevo");
    var pnlTablero = $("#pnlTablero");
    var pnlEditar = $("#pnlEditar");
    var Archivo = pnlNuevo.find("#RutaLogo");
    var btnArchivo = pnlNuevo.find("#btnArchivo");
    var VistaPrevia = pnlNuevo.find("#VistaPrevia");
    //Boton que guarda los datos del formulario
    var btnGuardar = pnlNuevo.find("#btnGuardar");
    var btnCancelar = pnlNuevo.find("#btnCancelar");
    var ModificarArchivo = pnlEditar.find("#RutaLogo");
    var btnModificarArchivo = pnlEditar.find("#btnArchivo");
    var ModificarVistaPrevia = pnlEditar.find("#VistaPrevia");
    var btnModificar = pnlEditar.find("#btnModificar");
    var btnCancelarModificar = pnlEditar.find("#btnCancelar");
    var btnRefrescar = $("#btnRefrescar");
    var btnEliminar = $("#btnEliminar");
    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");
    $(document).ready(function () {


        btnNuevo.click(function () {
            pnlTablero.addClass("hide");
            pnlNuevo.removeClass('hide');
            pnlNuevo.find("input").val("");
            pnlNuevo.find("select").select2("val", "");
        });
        btnCancelar.click(function () {
            pnlTablero.removeClass("hide");
            pnlNuevo.addClass('hide');
            btnRefrescar.trigger('click');
        });
        btnCancelarModificar.click(function () {
            pnlEditar.addClass("hide");
            pnlTablero.removeClass("hide");
            btnRefrescar.trigger('click');
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
        btnEliminar.click(function () {
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
                }).done(function (data, x, jq) {
                    console.log(data);
                    mdlConfirmar.modal('hide');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EMPRESA ELIMINADA', 'danger');
                    pnlEditar.addClass("hide");
                    pnlTablero.removeClass("hide");
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
        btnModificar.click(function () {
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
                    Nombre: 'required',
                    Rfc: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.addClass(errorClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.removeClass(errorClass);
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            //Regresa verdadero si ya se cumplieron las reglas, si no regresa falso
//            $('#frmNuevo').valid();
            //Si es verdadero que hacer
            if ($('#frmEditar').valid()) {
                var frm = new FormData(pnlEditar.find("#frmEditar")[0]);
                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UNA EMPRESA', 'success');
                    getRecords();
                    pnlEditar.addClass("hide");
                    pnlTablero.removeClass("hide");
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnGuardar.click(function () {
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
                    Nombre: 'required',
                    Rfc: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.addClass(errorClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.removeClass(errorClass);
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            //Regresa verdadero si ya se cumplieron las reglas, si no regresa falso
//            $('#frmNuevo').valid();
            //Si es verdadero que hacer
            if ($('#frmNuevo').valid()) {
                var frm = new FormData(pnlNuevo.find("#frmNuevo")[0]);
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UNA NUEVA EMPRESA', 'success');
                    getRecords();
                    pnlNuevo.addClass("hide");
                    pnlTablero.removeClass("hide");
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
        btnArchivo.click(function () {
            Archivo.change(function () {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                var imageType = /image.*/;
                if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(Archivo[0].files[0]);
                        var preview = '<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><img src="' + reader.result + '" class="img-responsive" >\n\
                                    <div class="caption">\n\
                                        <p>' + Archivo[0].files[0].name + '</p>\n\
                                    </div></div>';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(Archivo[0].files[0]);
                } else {
                    if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
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
        btnModificarArchivo.click(function () {
            ModificarArchivo.change(function () {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "POR FAVOR ESPERE..."
                });
                var imageType = /image.*/;
                if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match(imageType)) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(ModificarArchivo[0].files[0]);
                        var preview = '<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><img src="' + reader.result + '" class="img-responsive" >\n\
                                    <div class="caption">\n\
                                        <p>' + ModificarArchivo[0].files[0].name + '</p>\n\
                                    </div></div>';
                        ModificarVistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(ModificarArchivo[0].files[0]);
                } else {
                    if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            ModificarVistaPrevia.html('<div><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button><hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"></div>');
                        };
                        readerpdf.readAsDataURL(ModificarArchivo[0].files[0]);
                    } else {
                        ModificarVistaPrevia.html('EL ARCHIVO SE SUBIRÁ, PERO NO ES POSIBLE RECONOCER SI ES UN PDF O UNA IMAGEN');
                    }
                }
                HoldOn.close();
            });
            ModificarArchivo.trigger('click');
        });

        /*CALLS*/
        getRecords();
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
            console.log(data);
            $("#tblRegistros").html(getTable('tblEmpresas', data));
            $('#tblEmpresas tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');
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
                        console.log(data);
                        pnlEditar.find("input").val("");
                        pnlEditar.find("select").select2("val", "");
                        var empresa = data[0];
                        pnlEditar.find("#ID").val(empresa.ID);
                        pnlEditar.find("#Nombre").val(empresa.Nombre);
                        pnlEditar.find("#Rfc").val(empresa.Rfc);
                        pnlEditar.find("#NoInterior").val(empresa.NoInterior);
                        pnlEditar.find("#NoExterior").val(empresa.NoExterior);
                        pnlEditar.find("#Estado").val(empresa.Estado);
                        pnlEditar.find("#Direccion").val(empresa.Direccion);
                        pnlEditar.find("#ContactoNombre").val(empresa.ContactoNombre);
                        pnlEditar.find("#ContactoApellidos").val(empresa.ContactoApellidos);
                        pnlEditar.find("#Colonia").val(empresa.Colonia);
                        pnlEditar.find("#CodigoPostal").val(empresa.CodigoPostal);
                        pnlEditar.find("#Ciudad").val(empresa.Ciudad);
                        if (empresa.RutaLogo !== null && empresa.RutaLogo !== undefined && empresa.RutaLogo !== '') {
                            var ext = getExt(empresa.RutaLogo);
                            console.log(ext);
                            if (ext === "gif" || ext === "jpg" || ext === "png") {
                                pnlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + empresa.RutaLogo + '" class ="img-responsive"/>');
                            }
                            if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                pnlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + empresa.RutaLogo + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                            }
                            if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                                pnlEditar.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                            }
                        } else {
                            pnlEditar.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                        }

                        pnlEditar.removeClass("hide");
                        pnlTablero.addClass("hide");
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
                }
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
    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");
        $('#RutaLogo').trigger('blur');
        $('#RutaLogo').on('blur', function (e) {
            $('#RutaLogo').val('');
        });
    }
</script>