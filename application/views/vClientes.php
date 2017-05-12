<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">CLIENTES</div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><p>NUEVO</p></button>
                    <button type="button" class="btn btn-default" id="btnEditar"><span class="fa fa-pencil fa-1x"></span><p>EDITAR</p></button>
                    <button type="button" class="btn btn-default" id="btnEliminar"><span class="fa fa-trash fa-1x"></span><p>ELIMINAR</p></button>
                    <button type="button" class="btn btn-default" id="btnRefrescar"><span class="fa fa-refresh fa-1x"></span><p>ACTUALIZAR</p></button>
                </div>
                <div class="col-md-12" id="tblRegistros"></div>
            </fieldset>
        </div>
    </div>
</div>

<!--MODALES-->

<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">NUEVO CLIENTE</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset> 
                        <div class="col-md-6">
                            <label for="">NOMBRE*</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">CALLE*</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">No EXTERIOR*</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">No INTERIOR*</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CÓDIGO POSTAL*</label>
                            <input type="text" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA*</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD*</label>
                            <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO*</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 1*</label>
                            <input type="text" id="Contacto1" name="Contacto1" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 2*</label>
                            <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 3*</label>
                            <input type="text" id="Contacto3" name="Contacto3" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    
                            
                        </div>
                        <div class="col-md-12" align="center">
                            <br>
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                SELECCIONA LA IMAGEN,LOGO O IDENTIDAD DEL CLIENTE
                            </button>
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



<div id="mdlEditar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDITAR CLIENTE</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control" >
                        </div>
                         <div class="col-md-6">
                            <label for="">NOMBRE*</label>
                            <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">CALLE*</label>
                            <input type="text" id="Calle" name="Calle" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">No EXTERIOR*</label>
                            <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">No INTERIOR*</label>
                            <input type="text" id="NoInterior" name="NoInterior" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CÓDIGO POSTAL*</label>
                            <input type="text" id="CodigoPostal" name="CodigoPostal" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">COLONIA*</label>
                            <input type="text" id="Colonia" name="Colonia" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CIUDAD*</label>
                            <input type="text" id="Ciudad" name="Ciudad" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">ESTADO*</label>
                            <input type="text" id="Estado" name="Estado" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 1*</label>
                            <input type="text" id="Contacto1" name="Contacto1" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 2*</label>
                            <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-md-4">
                            <label for="">CONTACTO 3*</label>
                            <input type="text" id="Contacto3" name="Contacto3" class="form-control" placeholder="" required>
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    
                            
                        </div>
                        <div class="col-md-12" align="center">
                            <br>
                            <div id="VistaPrevia" class="col-md-12" align="center"></div>
                            <input type="file" id="RutaLogo" name="RutaLogo" class="hide">
                            <br>
                            <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                <span class="fa fa-upload fa-1x">
                                </span> 
                                SELECCIONA LA IMAGEN,LOGO O IDENTIDAD DEL CLIENTE
                            </button>
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
    var master_url = base_url + 'index.php/CtrlClientes/';
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

    $(document).ready(function () {

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
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CLIENTE ELIMINADO', 'danger');
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
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO UN CLIENTE', 'success');
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
        console.log(temp);
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
                    console.log(data);
                    btnEditar.find("input").val(""); 
                    var cliente = data[0];
                    
                    mdlEditar.find("#ID").val(cliente.ID);
                    mdlEditar.find("#Nombre").val(cliente.Nombre); 
                    mdlEditar.find("#Calle").val(cliente.Calle); 
                    mdlEditar.find("#NoExterior").val(cliente.NoExterior); 
                    mdlEditar.find("#NoInterior").val(cliente.NoInterior); 
                    mdlEditar.find("#CodigoPostal").val(cliente.CodigoPostal); 
                    mdlEditar.find("#Colonia").val(cliente.Colonia); 
                    mdlEditar.find("#Ciudad").val(cliente.Ciudad); 
                    mdlEditar.find("#Estado").val(cliente.Estado); 
                    mdlEditar.find("#Contacto1").val(cliente.Contacto1); 
                    mdlEditar.find("#Contacto2").val(cliente.Contacto2); 
                    mdlEditar.find("#Contacto3").val(cliente.Contacto3); 
                    if (cliente.RutaLogo !== null && cliente.RutaLogo !== undefined && cliente.RutaLogo !== '') {
                        var ext = getExt(cliente.RutaLogo);
                        console.log(ext);
                        if (ext === "gif" || ext === "jpg" || ext === "png") {
                            mdlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div><div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><img id="trtImagen" src="' + base_url + cliente.RutaLogo + '" class ="img-responsive"/>');
                        }
                        if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                            mdlEditar.find("#VistaPrevia").html('<hr><div class="col-md-8"></div> <div class="col-md-4"><button type="button" class="btn btn3d btn-default" id="btnQuitarVP" name="btnQuitarVP" onclick="onRemovePreview(this)"><span class="fa fa-times fa-2x danger-icon"></span></button></div><embed src="' + base_url + cliente.RutaLogo + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
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
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO CLIENTE', 'success');
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
            $("#tblRegistros").html(getTable('tbllClientes', data));
            $('#tbllClientes tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<label for=""></label><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" />');
            });
            var tblSelected = $('#tbllClientes').DataTable(tableOptions);
            $('#tbllClientes tbody').on('click', 'tr', function () {
                $("#tbllClientes").find("tr").removeClass("success");
                $("#tbllClientes").find("tr").removeClass("warning");
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
            $('#tbllClientes tbody').on('dblclick', 'tr', function () {
                $("#tbllClientes").find("tr").removeClass("warning");
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