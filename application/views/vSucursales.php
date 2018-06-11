<div class="col-md-12">
    <div class="panel panel-default" id="pnlTablero">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">
                    <div class="cursor-hand" >Sucursales por Cliente</div>
                </div>
                <div class="col-md-3" >
                    <label for="" class="control-label">Cliente</label>
                    <select id="sCliente" name="sCliente" class="form-control " >
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-md-3" align="right">
                    <div class="dt-buttons" align="right">
                        <!--Especialidades-->
                        <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 table-responsive" id="tblRegistros">

                </div>
            </fieldset>
        </div>
    </div>
</div>
<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlDatos" class="panel panel-default hide ">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    Sucursal
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
                    <div class="col-6 col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                            <li role="presentation" class="active"><a href="#DatosGenerales" aria-controls="DatosGenerales" role="tab" data-toggle="tab">Datos Generales</a></li>
                            <li role="presentation"><a href="#InformacionObra" aria-controls="InformacionObra" role="tab" data-toggle="tab">Información de Obra</a></li>
                            <li role="presentation"><a href="#Firmas" aria-controls="Firmas" role="tab" data-toggle="tab">Firmas</a></li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <!-- PANEL DE DATOS GENERALES-->
                        <div role="tabpanel" class="tab-pane fade in active" id="DatosGenerales">

                            <div class="col-md-12 hide">
                                <input type="text"  name="ID" class="form-control" placeholder="" >
                                <select id="Cliente_ID" name="Cliente_ID" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="Nombre" class="control-label">Sucursal*</label>
                                    <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="EJ: PLAZA CENTRO SUR" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group label-static">
                                    <label for="CR" class="control-label">CR*</label>
                                    <input type="number" id="CR" name="CR" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-static">
                                    <label for="Calle" class="control-label">Calle*</label>
                                    <input type="text" id="Calle" name="Calle" class="form-control" placeholder="" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="NoExterior" class="control-label">No Exterior*</label>
                                    <input type="text" id="NoExterior" name="NoExterior" class="form-control" placeholder="" required>
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
                                    <label for="EntreCalles" class="control-label">Entre Calles</label>
                                    <input type="text" id="EntreCalles" name="EntreCalles" class="form-control" placeholder="" >
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
                                    <label for="Ciudad"class="control-label">Ciudad</label>
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
                                    <label for="" class="control-label">Region*</label>
                                    <select id="Region" name="Region" class="form-control required" required="">
                                        <option value=""></option>
                                        <option value="BAJÍO">BAJÍO</option>
                                        <option value="METROPOLITANA NORTE">METROPOLITANA NORTE</option>
                                        <option value="METROPOLITANA SUR">METROPOLITANA SUR</option>
                                        <option value="NORESTE">NORESTE</option>
                                        <option value="NOROESTE">NOROESTE</option>
                                        <option value="OCCIDENTE">OCCIDENTE</option>
                                        <option value="SUR">SUR</option>
                                        <option value="SURESTE">SURESTE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Contratista*</label>
                                    <select id="Empresa_ID" name="Empresa_ID" class="form-control required" required="">
                                        <option value=""></option>
                                    </select>
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

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="InformacionObra">

                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Tipo de Obra</label>
                                    <select id="TipoObra" name="TipoObra" class="form-control">
                                        <option value=""></option>
                                        <option value="REMODELACIÓN">REMODELACIÓN</option>
                                        <option value="ADJUDICACIÓN">ADJUDICACIÓN</option>
                                        <option value="NUEVO PROYECTO">NUEVO PROYECTO</option>
                                        <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                                        <option value="LEVANTAMIENTO DE SITIO">LEVANTAMIENTO DE SITIO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="Contrato" class="control-label">Contrato</label>
                                    <input type="text" id="Contrato" name="Contrato" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Tipo de Concepto</label>
                                    <select id="TipoConcepto" name="TipoConcepto" class="form-control">
                                        <option value=""></option>
                                        <option value="ADICIONAL">ADICIONAL</option>
                                        <option value="FUERA DE CATÁLOGO">FUERA DE CATÁLOGO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="" class="control-label">Empresa Supervisora</label>
                                    <select id="EmpresaSupervisora_ID" name="EmpresaSupervisora_ID" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="Superficie" class="control-label">Superficie</label>
                                    <input type="number" id="Superficie" name="Superficie" class="form-control" placeholder="0">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaInicio" class="control-label">Fecha Inicio</label>
                                    <input type="text" id="FechaInicio" name="FechaInicio" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="FechaFin" class="control-label">Fecha Fin</label>
                                    <input type="text" id="FechaFin" name="FechaFin" class="form-control" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="Dias" class="control-label">Días</label>
                                    <input type="number" id="Dias" name="Dias" class="form-control" placeholder="EJ: 1" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="NumeroSemanas" class="control-label">Número de Semanas</label>
                                    <input type="number" id="NumeroSemanas" name="NumeroSemanas" class="form-control" placeholder="EJ: 1" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="Cordinador" class="control-label">Coordinador</label>
                                    <input type="text" id="Cordinador" name="Cordinador" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-static">
                                    <label for="Supervisor" class="control-label">Supervisor</label>
                                    <input type="text" id="Supervisor" name="Supervisor" class="form-control" placeholder="" >
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Firmas">
                            <div class="col-md-12" align="center">
                                <h4>Firmas de Mantenimiento</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaManttoNombres1" class="control-label">Nombre</label>
                                    <input type="text" id="FirmaManttoNombres1" name="FirmaManttoNombres1" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaManttoApellidos1" class="control-label">Apellidos</label>
                                    <input type="text" id="FirmaManttoApellidos1" name="FirmaManttoApellidos1" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaManttoPuesto1" class="control-label">Puesto</label>
                                    <input type="text" id="FirmaManttoPuesto1" name="FirmaManttoPuesto1" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaManttoNombres2" class="control-label">Nombre</label>
                                    <input type="text" id="FirmaManttoNombres2" name="FirmaManttoNombres2" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaManttoApellidos2" class="control-label">Apellidos</label>
                                    <input type="text" id="FirmaManttoApellidos2" name="FirmaManttoApellidos2" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaManttoPuesto2" class="control-label">Puesto</label>
                                    <input type="text" id="FirmaManttoPuesto2" name="FirmaManttoPuesto2" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaManttoNombres3" class="control-label">Nombre</label>
                                    <input type="text" id="FirmaManttoNombres3" name="FirmaManttoNombres3" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaManttoApellidos3" class="control-label">Apellidos</label>
                                    <input type="text" id="FirmaManttoApellidos3" name="FirmaManttoApellidos3" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaManttoPuesto3" class="control-label">Puesto</label>
                                    <input type="text" id="FirmaManttoPuesto3" name="FirmaManttoPuesto3" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-12" align="center">
                                <h4>Firmas de Obra</h4>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaObraNombres1" class="control-label">Nombre</label>
                                    <input type="text" id="FirmaObraNombres1" name="FirmaObraNombres1" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaObraApellidos1" class="control-label">Apellidos</label>
                                    <input type="text" id="FirmaObraApellidos1" name="FirmaObraApellidos1" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaNombrePuesto1" class="control-label">Puesto</label>
                                    <input type="text" id="FirmaNombrePuesto1" name="FirmaNombrePuesto1" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaObraNombres2" class="control-label">Nombre</label>
                                    <input type="text" id="FirmaObraNombres2" name="FirmaObraNombres2" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaObraApellidos2" class="control-label">Apellidos</label>
                                    <input type="text" id="FirmaObraApellidos2" name="FirmaObraApellidos2" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaNombrePuesto2" class="control-label">Puesto</label>
                                    <input type="text" id="FirmaNombrePuesto2" name="FirmaNombrePuesto2" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaObraNombres3" class="control-label">Nombre</label>
                                    <input type="text" id="FirmaObraNombres3" name="FirmaObraNombres3" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaObraApellidos3" class="control-label">Apellidos</label>
                                    <input type="text" id="FirmaObraApellidos3" name="FirmaObraApellidos3" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group label-static">
                                    <label for="FirmaNombrePuesto3" class="control-label">Puesto</label>
                                    <input type="text" id="FirmaNombrePuesto3" name="FirmaNombrePuesto3" class="form-control" placeholder="" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12"><br>
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                </fieldset>

            </form>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Sucursal/';
    var btnNuevo = $("#btnNuevo");
    var pnlDatos = $("#pnlDatos");
    var pnlTablero = $("#pnlTablero");
    //Boton que guarda los datos del formulario
    var btnGuardar = pnlDatos.find("#btnGuardar");
    var btnCancelar = pnlDatos.find("#btnCancelar");
    var btnEliminar = $("#btnEliminar");
    var nuevo = true;
    var cliente;
    $(document).ready(function () {

        $("[name='sCliente']").change(function () {
            getRecords($(this).val());
            cliente = $(this).val();
        });
        btnNuevo.click(function () {
            if (cliente !== '' && cliente !== undefined) {
                pnlTablero.addClass("hide");
                pnlDatos.removeClass('hide');
                pnlDatos.find("input").val("");
                pnlDatos.find(".nav-tabs li").removeClass("active");
                $(pnlDatos.find(".nav-tabs li")[0]).addClass("active");
                pnlDatos.find("#DatosGenerales").addClass("active in");
                pnlDatos.find("#InformacionObra").removeClass("active in");
                pnlDatos.find("#Firmas").removeClass("active in");
                $.each(pnlDatos.find("select"), function (k, v) {
                    pnlDatos.find("select")[k].selectize.clear(true);
                });
                $(':input:text:enabled:visible:first').focus();
                nuevo = true;
            } else {
                swal('INFO', 'Debes de seleccionar un cliente', 'info')
            }

        });
        btnCancelar.click(function () {
            pnlTablero.removeClass("hide");
            pnlDatos.addClass('hide');
            getRecords('');
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
                        getRecords(cliente);
                        pnlDatos.addClass("hide");
                        pnlTablero.removeClass("hide");
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
                frm.append('Cliente_ID', cliente);
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
                        getRecords(cliente);
                        pnlDatos.addClass("hide");
                        pnlTablero.removeClass("hide");
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
                        getRecords(cliente);
                        pnlDatos.addClass("hide");
                        pnlTablero.removeClass("hide");
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
        getRecords('');
        getClientes();
        getEmpresasSupervisoras();
        getContratistas();
        handleEnter();
    });
    function getRecords(Cliente) {
        if (Cliente !== '') {
            temp = 0;
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });
            $.ajax({
                url: master_url + 'getRecords',
                type: "POST",
                dataType: "JSON",
                data: {
                    Cliente: Cliente
                }
            }).done(function (data, x, jq) {
                if (data.length > 0) {
                    $("#tblRegistros").html(getTable('tblSucursales', data));
                    $('#tblSucursales tfoot th').each(function () {
                        $(this).html('');
                    });
                    var tblSelected = $('#tblSucursales').DataTable(tableOptions);
                    $('#tblSucursales_filter input[type=search]').focus();
                    $('#tblSucursales tbody').on('click', 'tr', function () {
                        nuevo = false;

                        pnlDatos.find(".nav-tabs li").removeClass("active");
                        $(pnlDatos.find(".nav-tabs li")[0]).addClass("active");
                        pnlDatos.find("#DatosGenerales").addClass("active in");
                        pnlDatos.find("#InformacionObra").removeClass("active in");
                        pnlDatos.find("#Firmas").removeClass("active in");

                        $("#tblSucursales").find("tr").removeClass("success");
                        $("#tblSucursales").find("tr").removeClass("warning");
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
                                url: master_url + 'getSucursalByID',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: temp
                                }
                            }).done(function (data, x, jq) {
                                pnlDatos.find("input").val("");
                                $.each(pnlDatos.find("select"), function (k, v) {
                                    pnlDatos.find("select")[k].selectize.clear(true);
                                });
                                $.each(data[0], function (k, v) {
                                    pnlDatos.find("[name='" + k + "']").val(v);
                                    if (pnlDatos.find("[name='" + k + "']").is('select')) {
                                        pnlDatos.find("[name='" + k + "']")[0].selectize.setValue(v);
                                    }
                                });

                                pnlTablero.addClass("hide");
                                pnlDatos.removeClass('hide');

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
                } else {
                    $("#tblRegistros").html('');
                }
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        }
    }

    function getClientes() {
        $.ajax({
            url: master_url + 'getClientes',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                $("[name='sCliente']")[0].selectize.addOption({text: v.Cliente, value: v.ID});
            });
            $("[name='sCliente']")[0].selectize.focus();
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }

    function getContratistas() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getContratistas',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                $("[name='Empresa_ID']")[0].selectize.addOption({text: v.Contratista, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getEmpresasSupervisoras() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: master_url + 'getEmpresasSupervisoras',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                $("[name='EmpresaSupervisora_ID']")[0].selectize.addOption({text: v.Empresa, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
        getClientes();
        getContratistas();
    }

</script>


