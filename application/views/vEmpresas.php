<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">EMPRESAS</div>
        <div class="panel-body">
            <fieldset>
                 <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-pencil fa-1x"></span><br>NUEVO</button>
                    <button type="button" class="btn btn-default" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><br>EDITAR</button>
                    <button type="button" class="btn btn-default" id="btnConfirmarEliminar"><span class="fa fa-trash fa-1x"></span><br>ELIMINAR</button>
                    <button type="button" class="btn btn-default" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><br>ACTUALIZAR</button>
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


<!--MODALES-->

<!--NUEVO-->

<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NUEVA EMPRESA</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>

                        <div class="col-6 col-md-6">
                            <label for="">NOMBRE*</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" >
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">RFC*</label>    
                            <input type="text" class="form-control" id="Rfc" name="Rfc" >
                        </div>
                        <div class="col-md-12">
                            <h3>INFORMACIÓN DE CONTACTO</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE*</label>
                            <input type="text" id="ContactoNombre" name="ContactoNombre" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">APELLIDOS*</label>
                            <input type="text" id="ContactoApellidos" name="ContactoApellidos" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-12">
                            <h3>DATOS DE LA EMPRESA</h3>
                        </div>

                        <div class="col-md-6">
                            <label for="">DIRECCION*</label>
                            <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="">

                        </div>

                        <div class="col-md-3">
                            <label for="">N°*</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="">

                        </div>
                        <div class="col-md-3">
                            <label for="">N° INT.*</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="">

                        </div>

                        <div class="col-md-6">
                            <label for="">CÓDIGO POSTAL*</label>
                            <input type="number" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="">
                        </div>


                        <div class="col-md-6">
                            <label for="">COLONIA*</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="">
                        </div>


                        <div class="col-md-6">
                            <label for="">CIUDAD*</label>
                            <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-6">
                            <label for="">ESTADO*</label>
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
                                SELECCIONA EL LOGO DE LA EMPRESA
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
                <h4 class="modal-title">EDITAR EMPRESA</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">NOMBRE*</label>    
                            <input type="text" class="form-control" id="Nombre" name="Nombre" >
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">RFC*</label>    
                            <input type="text" class="form-control" id="Rfc" name="Rfc" >
                        </div>


                        <div class="col-md-12">
                            <h3>INFORMACIÓN DE CONTACTO</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">NOMBRE*</label>
                            <input type="text" id="ContactoNombre" name="ContactoNombre" class="form-control" placeholder="">
                        </div>
                        <div class="col-md-6">
                            <label for="">APELLIDOS*</label>
                            <input type="text" id="ContactoApellidos" name="ContactoApellidos" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-12">
                            <h3>DATOS DE LA EMPRESA</h3>
                        </div>
                        <div class="col-md-6">
                            <label for="">DIRECCION*</label>
                            <input type="text" id="Direccion" name="Direccion" class="form-control" placeholder="">

                        </div>
                        <div class="col-md-3">
                            <label for="">N°*</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="">

                        </div>
                        <div class="col-md-3">
                            <label for="">N° INT.*</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="">

                        </div>

                        <div class="col-md-6">
                            <label for="">CÓDIGO POSTAL*</label>
                            <input type="number" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="">
                        </div>


                        <div class="col-md-6">
                            <label for="">COLONIA*</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="">
                        </div>


                        <div class="col-md-6">
                            <label for="">CIUDAD*</label>
                            <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="">
                        </div>

                        <div class="col-md-6">
                            <label for="">ESTADO*</label>
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
                                MODIFICAR EL LOGO DE LA EMPRESA
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
                <button type="button" class="btn btn-primary" id="btnModificar">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--SCRIPT-->

<script>
    var master_url = base_url + 'index.php/CtrlEmpresas/'
    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");

    var Archivo = mdlNuevo.find("#RutaLogo");
    var btnArchivo = mdlNuevo.find("#btnArchivo");
    var VistaPrevia = mdlNuevo.find("#VistaPrevia");

    var btnGuardar = mdlNuevo.find("#btnGuardar");

    var ModificarArchivo = mdlEditar.find("#RutaLogo");
    var btnModificarArchivo = mdlEditar.find("#btnArchivo");
    var ModificarVistaPrevia = mdlEditar.find("#VistaPrevia");
    var btnModificar = mdlEditar.find("#btnModificar");

    var btnRefrescar = $("#btnRefrescar");
    var btnEliminar = $("#btnEliminar");

    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");

    $(document).ready(function () {

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
            var frm = new FormData(mdlEditar.find("#frmEditar")[0]);

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
                mdlEditar.modal('hide');
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });

        btnEditar.click(function () {
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
                    btnEditar.find("input").val("");
                    btnEditar.find("select").empty().select2();
                    btnEditar.find("select").val(null).trigger("change");
                    var empresa = data[0];
                    mdlEditar.find("#ID").val(empresa.ID);
                    mdlEditar.find("#Nombre").val(empresa.Nombre);
                    mdlEditar.find("#Rfc").val(empresa.Rfc);
                    mdlEditar.find("#NoInterior").val(empresa.NoInterior);
                    mdlEditar.find("#NoExterior").val(empresa.NoExterior);
                    mdlEditar.find("#Estado").val(empresa.Estado);
                    mdlEditar.find("#Direccion").val(empresa.Direccion);
                    mdlEditar.find("#ContactoNombre").val(empresa.ContactoNombre);
                    mdlEditar.find("#ContactoApellidos").val(empresa.ContactoApellidos);
                    mdlEditar.find("#Colonia").val(empresa.Colonia);
                    mdlEditar.find("#CodigoPostal").val(empresa.CodigoPostal);
                    mdlEditar.find("#Ciudad").val(empresa.Ciudad);
                    if (empresa.RutaLogo !== null && empresa.RutaLogo !== undefined && empresa.RutaLogo !== '') {
                        var ext = getExt(empresa.RutaLogo);
                        console.log(ext);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            mdlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + empresa.RutaLogo + '" class ="img-responsive"/>');
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            mdlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + empresa.RutaLogo + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                        }
                        if (ext !== "gif" && ext !== "jpg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                            mdlEditar.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                        }
                    } else {
                        mdlEditar.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                    }

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

        btnGuardar.click(function () {
            var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
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
                mdlNuevo.modal('hide');
                console.log(data, x, jq);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
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
                        var preview = '<img src="' + reader.result + '" class="img-responsive" >\n\
                                    <div class="caption">\n\
                                        <p>' + Archivo[0].files[0].name + '</p>\n\
                                    </div>';
                        VistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(Archivo[0].files[0]);
                } else {
                    if (Archivo[0].files[0] !== undefined && Archivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            VistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
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
                        var preview = '<img src="' + reader.result + '" class="img-responsive" >\n\
                                    <div class="caption">\n\
                                        <p>' + ModificarArchivo[0].files[0].name + '</p>\n\
                                    </div>';
                        ModificarVistaPrevia.html(preview);
                    };
                    reader.readAsDataURL(ModificarArchivo[0].files[0]);
                } else {
                    if (ModificarArchivo[0].files[0] !== undefined && ModificarArchivo[0].files[0].type.match('application/pdf')) {
                        console.log('ES UN PDF');
                        var readerpdf = new FileReader();
                        readerpdf.onload = function (e) {
                            ModificarVistaPrevia.html('<hr> <embed src="' + readerpdf.result + '" type="application/pdf" width="90%" height="800px"' +
                                    ' pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
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

        btnNuevo.click(function () {
            mdlNuevo.modal('show');
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
                $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
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

    function onRemovePreview(e) {
        $(e).parent().parent("#VistaPrevia").html("");
    }
</script>