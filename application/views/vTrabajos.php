
<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default">
        <div class="panel-heading">TRABAJOS</div>
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


<!--Boton para regresar-->
<div class="col-6 col-md-12"> 
    <div class="panel panel-default hide" id="pnlNuevoTrabajo">

        <div class="panel-heading">

            <div class="panel-heading row">
                <div class="col-md-8"> 
                    <div class="cursor-hand" >NUEVO TRABAJO </div>
                </div> 
                <div class="col-md-4 panel-title" align="right">
                    <button type="button" class="btn btn-default" id="btnRegresar" data-toggle="tooltip" data-placement="top" title="" data-original-title="ATRAS">
                        <span class="fa fa-arrow-left fa-2x" ></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <form id="frmNuevo">

                <fieldset>
                    <div class="col-6 col-md-12">      
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                            <li role="presentation" class="active"><a href="#Datos" aria-controls="Datos" role="tab" data-toggle="tab">Datos Generales</a></li>
                            <li role="presentation"><a href="#Datos2" aria-controls="Datos2" role="tab" data-toggle="tab">Datos del trabajo</a></li>
                            <li role="presentation"><a href="#Datos3" aria-controls="Datos3" role="tab" data-toggle="tab">Otros Datos</a></li>
                            <li role="presentation"><a href="#Datos4" aria-controls="Datos4" role="tab" data-toggle="tab">Adjuntos</a></li>
                        </ul>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content">

                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="Datos">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">MOVIMIENTO*</label>
                                <select id="Movimiento" name="Movimiento" class="form-control" >
                                    <option value=""></option> 
                                    <option value="LEVANTAMIENTO">LEVANTAMIENTO</option> 
                                    <option value="COTIZACIÓN">COTIZACIÓN</option> 
                                    <option value="PRESUPUESTO">PRESUPUESTO</option> 
                                    <option value="ESTIMACIÓN">ESTIMACIÓN</option> 
                                </select>
                            </div>

                            <div class=" col-6 col-md-3">
                                <label for="">MOV ID</label>
                                <input type="text" id="ID" name="ID" class="form-control" readonly="" placeholder="" >
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">FECHA DE CREACION*</label>
                                <input type="text" id="FechaCreacion" name="FechaCreacion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 

                            <div class="col-6 col-md-6">
                                <label for="">CLIENTE*</label>
                                <select id="Cliente_ID" name="Cliente_ID" class="form-control" >
                                    <option value=""></option> 
                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">SUCURSAL*</label>
                                <select id="Sucursal_ID" name="Sucursal_ID" class="form-control" >
                                    <option value=""></option> 
                                </select>
                            </div>


                            <div class="col-6 col-md-6">
                                <label for="">PRECIARIO*</label>
                                <select id="Preciario_ID" name="Preciario_ID" class="form-control" >
                                    <option value=""></option> 
                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">CLASIFICACIÓN</label>
                                <select id="Clasificacion" name="Clasificacion" class="form-control" >
                                    <option value=""></option>
                                    <option value="CERRAJERÍA">CERRAJERÍA</option> 
                                    <option value="MOBILIARIO">MOBILIARIO</option> 
                                    <option value="INMUEBLE">INMUEBLE</option> 
                                </select>
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">ESTA COMPLETADO?</label>
                                <spam><br></spam>
                                <label class="switch">
                                    <input type="checkbox" id="Atendido" name="Atendido"  class="form-control">

                                    <div class="slider round"></div>
                                </label>
                            </div>

                            <div class="col-6 col-md-3">

                                <label for="">SITUACION*</label>
                                <select id="Situacion" name="Situacion" class="form-control" >
                                    <option value=""></option>
                                    <option value="PENDIENTE">PENDIENTE</option>
                                    <option value="AUTORIZADO">AUTORIZADO</option>
                                    <option value="SIN AUTORIZAR">SIN AUTORIZAR</option>

                                </select>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">CUADRILLA</label>
                                <select id="Cuadrilla_ID" name="Cuadrilla_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
                            </div>




                        </div>
                        <!-- PANEL DE DATOS DEL TRABAJO-->

                        <div role="tabpanel" class="tab-pane fade" id="Datos2">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">FOLIO</label>
                                <input type="text" id="FolioCliente" name="FolioCliente" class="form-control"  placeholder="" >
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">FECHA ATENCIÓN</label>
                                <input type="text" id="FechaAtencion" name="FechaAtencion" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">Codigo PPTA</label>
                                <select id="Codigoppta_ID" name="Codigoppta_ID" class="form-control" >
                                    <option value=""></option>
                                </select>
                            </div>

                            <div class="col-6 col-md-3">
                                <label for="">DIAS</label>
                                <input type="text" id="Dias" name="Dias" class="form-control" readonly="" placeholder="" >
                            </div>


                            <div class=" col-6 col-md-12">
                                <label for="">SOLICITANTE</label>
                                <input type="text" id="Solicitante" name="Solicitante" class="form-control"  placeholder="PERSONA QUE SOLICITA EL TRABAJO" >
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">TRABAJO SOLICITADO</label>
                                <textarea class="col-md-12 form-control" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">TRABAJO REQUERIDO</label>
                                <textarea class="col-md-12 form-control" id="TrabajoRequerido" name="TrabajoRequerido" rows="3" ></textarea>
                            </div>


                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <label for="">FECHA ORIGEN</label>
                                        <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div> 
                                    <div class="col-6 col-md-3">
                                        <label for="">HORA ORIGEN</label>
                                        <input type="text"  class="form-control" name="HoraOrigen" id="HoraOrigen" data-provide="timepicker" data-minute-step="1"/>

                                    </div>
                                </div>
                            </div>


                            <div class="col-6 col-md-3">
                                <label for="">FECHA VISITA</label>
                                <input type="text" id="FechaLlegada" name="FechaLlegada" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 
                            <div class="col-6 col-md-3">
                                <label for="">HORA VISITA</label>
                                <input type="text"  class="form-control" name="HoraLlegada" id="HoraLlegada" data-provide="timepicker" data-minute-step="1"/>

                            </div>
                            <div class="col-6 col-md-3">
                                <label for="">FECHA FIN VISITA</label>
                                <input type="text" id="FechaSalida" name="FechaSalida" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                            </div> 
                            <div class="col-6 col-md-3">
                                <label for="">HORA FIN VISITA</label>
                                <input type="text"  class="form-control" name="HoraSalida" id="HoraSalida" data-provide="timepicker" data-minute-step="1"   />

                            </div>




                        </div>


                        <!--PANEL DE OTROS DATOS-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos3">
                            <div class="col-6 col-md-12">
                                <br>
                            </div>
                            <div class="col-6 col-md-12">
                                <div class="row ">
                                    <div class="col-6 col-md-3">
                                        <label for="">IMPACTO EN EL PLAZO (SI/NO)</label>
                                        <spam><br></spam>
                                        <label class="switch">
                                            <input type="checkbox" id="ImpactoEnPlazo" name="ImpactoEnPlazo" class="form-control">

                                            <div class="slider round"></div>
                                        </label>
                                    </div>
                                    <div class=" col-6 col-md-3">
                                        <label for="">DIAS DE IMPACTO</label>
                                        <input type="number" id="DiasImpacto" name="DiasImpacto" class="form-control"  placeholder="" >
                                    </div>

                                    <div class="col-6 col-md-6">
                                        <label for="">CAUSA DEL TRABAJO</label>
                                        <select id="Causa" name="CausaTrabajo" class="form-control" >
                                            <option value=""></option>
                                            <option value="MP">MP - MEJORAS AL PROYECTO</option>
                                            <option value="EP">EP - ERROR DEL PROYECTO</option>
                                            <option value="OP">OP - OMISIÓN EN EL PROYECTO INICIAL</option>
                                            <option value="RO">RO - REQUERIMIENTOS DE OBRA</option>
                                            <option value="IP">IP - IMPREVISTOS DEL PROYECTO</option>
                                            <option value="COP">COP - CAMBIO DE OBJETIVOS DEL PROYECTO</option> 
                                            <option value="CCE">CCE - CAMBIO CONDICIONES DLE ENTORNO</option>
                                            <option value="CAC">CAC - CAMBIO DE ALCANCE DEL CONTRATISTA</option> 
                                            <option value="ROP">ROP - REQUERIMIENTOS DE ORGANISMOS PÚBLICOS/PRIVADOS</option>
                                            <option value="RPR">RPR - REQUERIMIENTOS DE LA PROPIEDAD</option> 
                                            <option value="OTR">OTR - OTROS</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">CLAVE ORIGEN</label>
                                <select id="ClaveOrigenTrabajo" name="ClaveOrigenTrabajo" class="form-control" >
                                    <option value=""></option>
                                    <option value="CONTR">CONTR - CONTRATISTA</option>
                                    <option value="GDP">GDP - GERENCIADORA DE PROYECTOS</option>
                                    <option value="BBVA">CTE - CLIENTE</option>
                                    <option value="OTRO">OTRO - OTRO</option>


                                </select>
                            </div>
                            <div class=" col-6 col-md-6">
                                <label for="">(EN CASO DE SER OTROS) ESPECIFICA</label>
                                <input type="text" id="OrigenTrabajo" name="EspecificaOrigenTrabajo" class="form-control"  placeholder="" >
                            </div>

                            <div class="col-6 col-md-6">
                                <label for="">ORIGEN DEL TRABAJO</label>
                                <textarea class="col-md-12 form-control" id="DescripcionOrigenTrabajo" name="DescripcionOrigenTrabajo" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-6">
                                <label for="">RIESGO DEL TRABAJO</label>
                                <textarea class="col-md-12 form-control" id="DescripcionRiesgoTrabajo" name="DescripcionRiesgoTrabajo" rows="3" ></textarea>
                            </div>
                            <div class="col-6 col-md-12">
                                <label for="">ALCANCE DEL TRABAJO</label>
                                <textarea class="col-md-12 form-control" id="DescripcionAlcanceTrabajo" name="DescripcionAlcanceTrabajo" rows="3" ></textarea>
                            </div>

                        </div>

                        <!--                                PANEL DE ARCHVIO ADJUNTO-->
                        <div role="tabpanel" class="tab-pane fade" id="Datos4">

                            <div class="col-md-12">
                                <span> <br></span>
                            </div>

                            <div class="col-md-12">
                                <label for="">PUEDE SUBIR UN PDF, EXCEL, IMAGEN (JPG.PNG) O ARCHIVO DE AUTOCAD</label>
                            </div>
                            <div class="col-md-12" align="center">
                                <div id="ArchivoAdjunto" class="col-md-12" align="center"></div>
                                <input type="file" id="Adjunto" name="Adjunto" class="hide">
                                <button type="button" class="btn btn-default" id="btnArchivo" name="btnArchivo">
                                    <span class="fa fa-upload fa-1x">
                                    </span> 
                                    SELECCIONA EL ARCHIVO
                                </button>
                            </div>

                            <div class="col-md-12 hide">
                                <input type="text" id="Usuario_ID"  name="Usuario_ID"    class="form-control" > 
                            </div>

                        </div>

                        <div class="col-md-12">
                            <span> <br></span>
                        </div>
                        <div class="col-md-12">
                            <span> <br></span>
                        </div>

                        <div class="col-6 col-md-3">

                            <label for="">ESTATUS</label>
                            <input type="text" id="Estatus" name="Estatus" class="form-control"  placeholder="SIN GUARDAR" readonly="">

                        </div>


                        <div class="col-6 col-md-12">
                            <h6>Los campos con * son obligatorios</h6>    
                        </div>
                    </div>


                    <div class="col-6 col-md-12 panel-Raiz" align="right" >
                        <button type="button" class="btn btn-default" id="btnCancelar">CANCELAR</button>
                        <button type="button" class="btn btn-primary" id="btnGuardar">GUARDAR</button>
                    </div>



                </fieldset>

            </form>

        </div>
    </div>
</div>





<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CtrlTrabajos/';
    var btnNuevo = $("#btnNuevo");
    var btnRefrescar = $("#btnRefrescar");
    var btnCancelar = $("#btnCancelar");
    var btnRegresar = $("#btnRegresar");
    var btnGuardar = $("#btnGuardar");
    var mdlNuevo = $("#mdlNuevo");
    var pnlNuevoTrabajo = $("#pnlNuevoTrabajo");
    var btnRefrescar = $("#btnRefrescar");
    var menuTablero = $('#MenuTablero');

    var currentDate = new Date();

    $(document).ready(function () {

        btnRefrescar.click(function () {
            getRecords();
            getClientes();
            getCodigosPPTA();
            getCuadrillas();
            
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
                    Movimiento: 'required',
                    FechaCreacion: 'required',
                    Cliente_ID: 'required',
                    Sucursal_ID: 'required',
                    Preciario_ID: 'required',
                    Situacion: 'required'
                    
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

            //Si es verdadero que hacer
            if ($('#frmNuevo').valid()) {
                var frm = new FormData(pnlNuevoTrabajo.find("#frmNuevo")[0]);
//                Para los checkbox
                if ($("#Atendido").is(':checked')) {
                    frm.delete('Atendido');
                    frm.append('Atendido', 'Si');
                } else {
                    frm.delete('Atendido');
                    frm.append('Atendido', 'No');
                }
                
                if ($("#ImpactoEnPlazo").is(':checked')) {
                    frm.delete('ImpactoEnPlazo');
                    frm.append('ImpactoEnPlazo', 'Si');
                } else {
                    frm.delete('ImpactoEnPlazo');
                    frm.append('ImpactoEnPlazo', 'No');
                }
                    frm.append('Estatus', 'ACTIVO');
                    frm.delete('Dias');
              
                $.ajax({
                    url: master_url + 'onAgregar',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AÑADIDO UN NUEVO REGISTRO', 'success');
                    getRecords();
//                    mdlNuevo.modal('hide');
                    console.log(data, x, jq);
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }



        });



        btnCancelar.click(function () {
            pnlNuevoTrabajo.addClass("hide");
            menuTablero.removeClass("hide");
        });
        btnRegresar.click(function () {
            pnlNuevoTrabajo.addClass("hide");
            menuTablero.removeClass("hide");
        });

        btnNuevo.click(function () {
            menuTablero.addClass("hide");
            pnlNuevoTrabajo.removeClass("hide");
            pnlNuevoTrabajo.find("input").val("");
            pnlNuevoTrabajo.find("select").val(null).trigger("change");


            pnlNuevoTrabajo.find("#FechaCreacion").datepicker("setDate", currentDate);
            //Trae el usuario logeado quien estará registrando el movimiento
            pnlNuevoTrabajo.find("#Usuario_ID").val("<?php echo $this->session->userdata('ID'); ?>");

        });

        /*Funcion que trae los catalogos en base al cliente*/
        pnlNuevoTrabajo.find("#Cliente_ID").change(function () {
            pnlNuevoTrabajo.find("#Sucursal_ID").val(null).trigger("change");
            pnlNuevoTrabajo.find("#Preciario_ID").val(null).trigger("change");
            getSucursales(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());
            getPreciarios(pnlNuevoTrabajo.find("#Cliente_ID").val(), $(this).val());

        });

        //Trae dias de ppta
        pnlNuevoTrabajo.find("#Codigoppta_ID").change(function () {
            getCodigoPPTAbyID(pnlNuevoTrabajo.find("#Codigoppta_ID").val(), $(this).val());
        });

        getClientes();
        getCodigosPPTA();
        getRecords();
        getCuadrillas();
        
         

    });

    /*----------------------------METODOS DEL CONTROLADOR PARA TRAER DATOS----------------*/

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
            $("#tblRegistros").html(getTable('tblTrabajos', data));
            $('#tblTrabajos tfoot th').each(function () {
                var title = $(this).text();
                $(this).html('<div class="col-md-12" style="overflow-x:auto;"><input type="text" placeholder="BUSCAR POR ' + title + '" class="form-control" style="width: 100%;"/></div>');

            });
            var tblSelected = $('#tblTrabajos').DataTable(tableOptions);
            $('#tblTrabajos tbody').on('click', 'tr', function () {
                $("#tblTrabajos").find("tr").removeClass("success");
                $("#tblTrabajos").find("tr").removeClass("warning");
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
            $('#tblTrabajos tbody').on('dblclick', 'tr', function () {
                $("#tblTrabajos").find("tr").removeClass("warning");
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


    $('#Encabezado a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });


    /*Traer catálogos para el encabezado*/
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
            pnlNuevoTrabajo.find("#Cliente_ID").html(options);
            //  pnlNuevoTrabajo.find("#Cliente_ID").html(options);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    function getSucursales(IDX) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getSucursalesByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {


            var options = '<option></option>';
            $.each(data, function (k, v) {

                options += '<option value="' + v.ID + '">' + v.CR + ' - ' + v.SUCURSAL + '</option>';
            });
            pnlNuevoTrabajo.find("#Sucursal_ID").html(options);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    function getPreciarios(Cliente_ID) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getPreciariosByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                Cliente_ID: Cliente_ID
            }
        }).done(function (data, x, jq) {


            var options = '<option></option>';
            $.each(data, function (k, v) {

                options += '<option value="' + v.ID + '">' + v.PRECIARIO + '</option>';
            });
            pnlNuevoTrabajo.find("#Preciario_ID").html(options);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


    function getCodigosPPTA() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getCodigosPPTA',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.CODIGO + '</option>';
            });

            pnlNuevoTrabajo.find("#Codigoppta_ID").html(options);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    
    function getCuadrillas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getCuadrillas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            console.log(data);
            
            var options = '<option></option>';
            $.each(data, function (k, v) {
                options += '<option value="' + v.ID + '">' + v.CUADRILLA + '</option>';
            });

            pnlNuevoTrabajo.find("#Cuadrilla_ID").html(options);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getCodigoPPTAbyID(CodigoID) {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getCodigoPPTAbyID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: CodigoID
            }
        }).done(function (data, x, jq) {
            if (data[0] !== undefined) {
                var codigoppta = data[0];
                pnlNuevoTrabajo.find("#Dias").val(codigoppta.Dias);
            }

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

</script>
<style>

    .super-fullscreen {
        width: 90% !important; 
        overflow: auto;
    }
    .super-fullscreen {
        width: 90% !important; 
    } 
</style>