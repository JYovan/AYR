<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
         <div class="cursor-hand" >Códigos PPTA</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
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
<!--NUEVO-->




<div id="mdlNuevo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Código PPTA</h4>
            </div>
            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                       
                        <div class="col-6 col-md-6">
                            <label for="">Código*</label>    
                            <input type="text" class="form-control" id="Codigo" name="Codigo" required>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">Días*</label>    
                            <input type="number" class="form-control" id="Dias" name="Dias" required>
                        </div>
                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>


                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
                 <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-raised btn-primary" id="btnGuardar">GUARDAR</button>
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
                <h4 class="modal-title">Editar Código PPTA</h4>
            </div>
            <form id="frmEditar">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-md-12 hide">
                            <input type="text" id="ID" name="ID" class="form-control">
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">Código*</label>    
                            <input type="text" class="form-control" id="Codigo" name="Codigo" required >
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">Días*</label>    
                            <input type="text" class="form-control" id="Dias" name="Dias" required>
                        </div>

                        <div class="col-6 col-md-6">
                            <h6>Los campos con * son obligatorios</h6>    

                        </div>
                    </fieldset>
                </div>
            </form>
            <div class="modal-footer">
               <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-raised btn-primary" id="btnModificar">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlCodigosPPTA/'

    var btnNuevo = $("#btnNuevo");
    var mdlNuevo = $("#mdlNuevo");

    var btnEditar = $("#btnEditar");
    var mdlEditar = $("#mdlEditar");
    //Boton que guarda los datos del formulario
    var btnGuardar = mdlNuevo.find("#btnGuardar");
    //Boton que actualiza los datos del formulario
    var btnModificar = mdlEditar.find("#btnModificar");
    //Botones del tablero que actualizan y eliminan registros
    var btnRefrescar = $("#btnRefrescar");
    var btnEliminar = $("#btnEliminar");


    var btnConfirmarEliminar = $("#btnConfirmarEliminar");
    var mdlConfirmar = $("#mdlConfirmar");

    //---------------------------EVENTOS DEL TABLERO--------------------------
    $(document).ready(function () {
        //Evento clic del boton nuevo
        btnNuevo.click(function () {

            //Muestra el modal
            mdlNuevo.modal('show');
            //Limpia los campos
            mdlNuevo.find("input").val("");
            mdlNuevo.find("select").val(null).trigger("change");
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

        //Actualiza los datos
        btnRefrescar.click(function () {
            getRecords();
        });
        //Evento clic del boton editar
        btnEditar.click(function () {
            if (temp !== 0 && temp !== undefined && temp > 0) {
                HoldOn.open({
                    theme: "sk-bounce",
                    message: "CARGANDO DATOS..."
                });
                $.ajax({
                    url: master_url + 'getCodigoPPTAByID',
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        ID: temp
                    }
                }).done(function (data, x, jq) {

                    btnEditar.find("input").val("");
                    btnEditar.find("select").empty().select2();
                    btnEditar.find("select").val(null).trigger("change");
                    $.each(data[0], function (k, v) {
                        mdlEditar.find("#" + k).val(v);
                        mdlEditar.find("#" + k).select2("val", v);
                    });
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

        //Boton de eliminar del tablero
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
                    console.log(temp);
                    mdlConfirmar.modal('hide');
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'CÓDIGO ELIMINADO', 'danger');
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

        //-----------------------EVENTOS DEL FORMULARIO--------------------------

        //Eventos del boton de guardar el formulario cuando es nuevo
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
                    Codigo: 'required',
                    Dias: 'required'
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
                var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);

                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {

                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO CÓDIGO', 'success');
                    getRecords();
                    mdlNuevo.modal('hide');
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });



        //Boton para guardar cambios cuando ya existe un registro
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
                    Codigo: 'required',
                    Dias: 'required'
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

                var frm = new FormData(mdlEditar.find("#frmEditar")[0]);

                $.ajax({
                    url: master_url + 'onModificar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA MODIFICADO EL CÓDIGO', 'success');
                    getRecords();
                    mdlEditar.modal('hide');
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }


        });

        //ESTOS METODOS FUNCIONAN PARA CARGAR LOS REGISTROS AL TABLERO
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
            $("#tblRegistros").html(getTable('tblCodigosPPTA', data));
            $('#tblCodigosPPTA tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="Buscar por ' + title + '" class="form-control" style="width: 100%;"/></div>');

            });
            var tblSelected = $('#tblCodigosPPTA').DataTable(tableOptions);
            $('#tblCodigosPPTA tbody').on('click', 'tr', function () {
                $("#tblCodigosPPTA").find("tr").removeClass("success");
                $("#tblCodigosPPTA").find("tr").removeClass("warning");
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
            $('#tblCodigosPPTA tbody').on('dblclick', 'tr', function () {
                $("#tblCodigosPPTA").find("tr").removeClass("warning");
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



</script>