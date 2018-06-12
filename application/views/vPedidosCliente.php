<div class="card " id="MenuTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5 float-left">
                <legend class="float-left">Pedidos del Cliente</legend>
            </div>
            <div class="col-md-7" align="right">
                <button type="button" class="btn btn-primary btn-sm" id="btnNuevo"><span class="fa fa-plus " ></span><br>NUEVO</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnVerMisMovimientos"><span class="fa fa-clipboard-list"></span><br>EN FIRME</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnAutorizacion"><span class="fa fa-check-square "></span><br>POR AUTORIZAR</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnFinalizadosPagados"><span class="fa fa-dollar-sign "></span><br>PAGADOS</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnFinalizadosNoPagados"><span class="fa fa-eye "></span><br>NO PAGADOS</button>
                <button type="button" class="btn btn-primary btn-sm" id="btnVerTodos"><span class="fa fa-list-ol " ></span><br>VER TODO</button>

            </div>
        </div>
        <div class="card-block">
            <div class="table-responsive" id="tblRegistros"></div>
        </div>
    </div>
</div>
<!--Reportes-->
<div id="mdlReportesEditarTrabajo" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Imprimir Reportes</h4>
        </div>
        <div class="modal-body">Selecciona el reporte que deseas imprimir: <br><br>
            <div class="col-6 col-md-12 " >
                <ul class="nav nav-tabs" role="tablist" id="ReportesTab">
                    <li role="presentation" class="active"><a href="#Generales" aria-controls="Generales" role="tab" data-toggle="tab">Presupuesto</a></li>
                    <li role="presentation"><a href="#Estimacion" aria-controls="Estimacion" role="tab" data-toggle="tab">Estimación</a></li>
                    <li role="presentation"><a href="#Fotos" aria-controls="Fotos" role="tab" data-toggle="tab">Fotográfico</a></li>
                    <li role="presentation" id="rNordes" class="d-none"><a href="#Nordes" aria-controls="Nordes" role="tab" data-toggle="tab">Nordes</a></li>
                </ul>
            </div>
            <div class="tab-content dt-buttons">
                <div role="tabpanel" class="tab-pane fade in active" id="Generales">
                    <button onclick="onReportePresupuesto()" class="btn btn-default"><span class="fa fa-usd fa-1x"></span><br>PRESUPUESTO</button>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Estimacion">
                    <button onclick="onReporteGenerador()" class="btn btn-default"><span class="fa fa-calculator fa-1x"></span><br>GENERADORES</button>
                    <button onclick="onReporteCroquis()" class="btn btn-default"><span class="fa fa-crop fa-1x"></span><br>REPORTE DE CROQUIS</button>
                    <button onclick="onReporteFotografico()" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>REPORTE FOTOGRÁFICO</button>

                </div>
                <div role="tabpanel" class="tab-pane fade" id="Fotos">
                    <button onclick="onReporteLevantamientoDespues();" class="btn btn-default"><span class="fa fa-camera fa-1x"></span><br>FOTOS DEL RESULTADO FINAL</button>
                    <button onclick="onReporteLevantamientoCompleto()" class="btn btn-default"><span class="fa fa-image fa-1x"></span><br>COMPARATIVO ANTES/DESPUÉS</button>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="Nordes">
                    <button onclick="onReporteNordesActaRecepcion();" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>Acta Recepción Trabajos Extras</button>
                    <button onclick="onReporteNordesHojaServicio();" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>Hoja de Servicio Diario</button>
                    <button onclick="onReporteNordesReporteTableros();" class="btn btn-default"><span class="fa fa-file-text fa-1x"></span><br>Reporte Tableros Iguala</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--PANEL EDITAR-->
<div id="" class="container-fluid">
    <div class="card border-0  d-none" id="pnlDatos">
        <div class="card-body text-dark">
            <form id="frmNuevo">
                <div class="row">
                    <div class="col-md-4 float-left">
                        <legend >Pedido</legend>
                    </div>
                    <div class="col-md-8" align="right">
                        <button type="button" class="btn btn-primary btn-sm" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" >
                            <span class="fa fa-arrow-left" ></span>
                        </button>
                        <button type="button" class="btn btn-raised btn-warning btn-sm" id="btnImprimirReportesEditarTrabajo"><span class="fa fa-print fa-1x"></span> IMPRIMIR</button>
                        <button type="button" class="btn btn-raised btn-danger btn-sm" id="btnEliminar"><span class="fa fa-trash fa-1x"></span> ELIMINAR</button>
                        <button type="button" class="btn btn-raised btn-info btn-sm" id="btnGuardar"><span class="fa fa-save fa-1x"></span> GUARDAR</button>
                    </div>
                </div>
                <fieldset>
                    <ul class="nav nav-tabs" role="tablist" id="Encabezado">
                        <li class="nav-item"><a href="#Datos" class="nav-link active show"  data-toggle="tab">Datos Pedido</a></li>
                        <li class="nav-item"><a href="#Datos2" class="nav-link" data-toggle="tab">Adjunto</a></li>
                    </ul>
                    <br>
                    <ul class="progress-indicator">
                        <li class="completed">
                            <span class="bubble"></span>
                            <i class="fa fa-check-circle"></i>
                            1. Pedido <br><small>(completado)</small>
                        </li>
                        <li class="completed">
                            <span class="bubble"></span>
                            <i class="fa fa-check-circle"></i>
                            2. Presupuesto <br><small>(completado)</small>
                        </li>
                        <li class="active">
                            <span class="bubble"></span>
                            3. Autorización <br><small>(activo)</small>
                        </li>
                        <li>
                            <span class="bubble"></span>
                            4. Ejecución
                        </li>
                        <li>
                            <span class="bubble"></span>
                            5. Finalizado
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active show" id="Datos">
                            <!-- PANEL DE DATOS GENERALES-->
                            <div class="row">
                                <div class=" col-12 col-md-2">
                                    <div class="form-group label-static">
                                        <label for="ID" class="control-label">Folio</label>
                                        <input type="text" id="ID" name="ID" class="form-control form-control-sm" readonly="" placeholder="" >
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-static">
                                        <label for="FechaOrigen" class="control-label">Fecha Origen*</label>
                                        <input type="text" id="FechaOrigen" name="FechaOrigen" class="form-control form-control-sm" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group label-static">
                                        <label for="HoraOrigen" class="control-label">Hora Origen*</label>
                                        <input type="text"  class="form-control form-control-sm" required="" name="HoraOrigen" id="HoraOrigen" data-provide="timepicker" data-minute-step="1"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-static">
                                        <label for="Cliente_ID" class="control-label">Cliente</label>
                                        <input type="text" id="Cliente_ID" name="Cliente_ID" class="form-control form-control-sm"  placeholder="" readonly="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-static">
                                        <label for="" class="control-label">Sucursal*</label>
                                        <select id="Sucursal_ID" name="Sucursal_ID" class="form-control form-control-sm required" >
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-static">
                                        <label for="Solicitante" class="control-label">Solicitante*</label>
                                        <input type="text" id="Solicitante" name="Solicitante" class="form-control form-control-sm"  placeholder="Nombre de la persona quien solicita el trabajo" required="">
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="form-group label-static d-none" id="cmbAutorizacion">
                                        <label for="" class="control-label">AUTORIZADO</label>
                                        <select id="EstatusTrabajo" name="EstatusTrabajo" class="form-control form-control-sm" >
                                            <option value=""></option>
                                            <option value="Ejecución">SI</option>
                                            <option value="No Autorizado">NO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-static">
                                        <label for="" class="control-label">Especialidad</label>
                                        <select id="Especialidad_ID" name="Especialidad_ID" class="form-control form-control-sm" >
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-static">
                                        <label for="" class="control-label">Área</label>
                                        <select id="Area_ID" name="Area_ID" class="form-control form-control-sm" >
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12">
                                    <div class="form-group label-static">
                                        <label for="TrabajoSolicitado" class="control-label">Trabajo Solicitado*</label>
                                        <textarea class="col-md-12 form-control required" placeholder="Introduzca aquí el trabajo que solicita" id="TrabajoSolicitado" name="TrabajoSolicitado" rows="5" required="" ></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Datos2">
                            <div class="row">
                                <div class="col-md-12" align="center">
                                    <div id="VistaPrevia" class="col-md-12" align="center"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-6"><br>
                            <h6>Los campos con * son obligatorios</h6>
                        </div>
                        <div id="ImporteTotal" class="col-md-6" align="right">
                            <strong>Importe :<h5 class="text-success">$ 0.0</h5></strong>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/PedidoCliente/';
    var verMovs = 'getRecordsEnFirme';
    var btnVerTodos = $("#btnVerTodos");
    var btnVerMisMovimientos = $("#btnVerMisMovimientos");
    var btnAutorizacion = $("#btnAutorizacion");
    var btnFinalizadosPagados = $("#btnFinalizadosPagados");
    var btnFinalizadosNoPagados = $("#btnFinalizadosNoPagados");
    var btnNuevo = $("#btnNuevo");
    var btnCancelar = $("#btnCancelar");
    var btnGuardar = $("#btnGuardar");
    var pnlDatos = $("#pnlDatos");
    var menuTablero = $('#MenuTablero');
    var btnEliminar = $("#btnEliminar");
    /*Reportes*/
    var btnImprimirReportesEditarTrabajo = $("#btnImprimirReportesEditarTrabajo");
    var mdlReportesEditarTrabajo = $("#mdlReportesEditarTrabajo");
    var currentDate = new Date();
    var nuevo = true;
    $(document).ready(function () {

        btnVerMisMovimientos.on("click", function () {
            verMovs = 'getRecordsEnFirme';
            getRecords();
        });
        btnVerTodos.on("click", function () {
            verMovs = 'getRecords';
            getRecords();
        });

        btnAutorizacion.on("click", function () {
            verMovs = 'getRecordsAutorizacion';
            getRecords();
        });
        btnFinalizadosPagados.on("click", function () {
            verMovs = 'getRecordsFinalizadosPagados';
            getRecords();
        });

        btnFinalizadosNoPagados.on("click", function () {
            verMovs = 'getRecordsFinalizadosNoPagados';
            getRecords();
        });
        var cmbSituacion = '';
        pnlDatos.find("#EstatusTrabajo").change(function () {
            cmbSituacion = this.value;
            var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);
            frm.append('EstatusTrabajo', cmbSituacion);
            frm.append('ID', IdMovimiento);
            HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
            $.ajax({
                url: master_url + 'onModificar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'ESTATUS MODIFICADO', 'success');
                getRecords();

            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
        /*Modal de reportes*/
        btnImprimirReportesEditarTrabajo.on("click", function () {
            mdlReportesEditarTrabajo.modal('show');
        });
        btnNuevo.on("click", function () {
            menuTablero.addClass("d-none");
            pnlDatos.removeClass("d-none");
            pnlDatos.find("input").val("");
            pnlDatos.find("textarea").val("");
            pnlDatos.find("#FechaCreacion").datepicker("setDate", currentDate);
            pnlDatos.find("#FechaOrigen").datepicker("setDate", currentDate);
            pnlDatos.find("#HoraOrigen").timepicker("setTime", currentDate);
            pnlDatos.find(".nav-tabs a").removeClass("active show");
            $(pnlDatos.find(".nav-tabs a")[0]).addClass("active show");
            pnlDatos.find("#Datos").addClass("active show");
            pnlDatos.find("#Datos2").removeClass("active show");
            btnEliminar.removeClass("d-none");
            btnImprimirReportesEditarTrabajo.removeClass("d-none");
            btnGuardar.removeClass("d-none");

            $.each(pnlDatos.find("select"), function (k, v) {
                pnlDatos.find("select")[k].selectize.clear(true);
            });
            getCliente();
            getSucursalesbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");
            getEspecialidadesbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");
            getAreasbyCliente("<?php echo $this->session->userdata('Cliente'); ?>");
            nuevo = true;
            $(':input:text:enabled:visible:first').focus();
        });
        btnCancelar.on("click", function () {
            menuTablero.removeClass("d-none");
            pnlDatos.addClass("d-none");
        });
        btnGuardar.click(function () {
            isValid('pnlDatos');
            if (valido) {
                var frm = new FormData(pnlDatos.find("#frmNuevo")[0]);
                frm.append('Estatus', 'Borrador');
                frm.append('EstatusTrabajo', 'Pedido');
                frm.append('Usuario_ID', "<?php echo $this->session->userdata('ID'); ?>");
                frm.append('Cliente_ID', "<?php echo $this->session->userdata('Cliente'); ?>");
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
        /*Evento clic del boton confirmar borrar*/
        btnEliminar.on("click", function () {
            if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
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
                                ID: IdMovimiento
                            }
                        }).done(function (data, x, jq) {
                            getRecords();
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'PEDIDO ELIMINADO', 'danger');
                            pnlDatos.addClass("d-none");
                            menuTablero.removeClass("d-none");
                        }).fail(function (x, y, z) {
                            console.log(x, y, z);
                        }).always(function () {
                            HoldOn.close();
                        });
                    }
                });
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBE DE ELEGIR UN REGISTRO', 'danger');
            }
        });
        getRecords();
        handleEnter();
    });
    IdMovimiento = 0;
    function getRecords() {
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
        $.ajax({
            url: master_url + verMovs,
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                $("#tblRegistros").html(getTable('tblTrabajos', data));

                $('#tblTrabajos tfoot th').each(function () {
                    var title = $(this).text();
                    $(this).html('<div  style="overflow-x:auto; "><div class="form-group "><input type="text" placeholder="Buscar por ' + title + '" class="form-control form-control-sm" style="width: 100%;"/></div></div>');
                });
                var tblSelected = $('#tblTrabajos').DataTable(tableOptionsPedidos);

                tblSelected.columns().every(function () {
                    var that = this;
                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });

                $('#tblTrabajos tbody').on('click', 'tr', function () {
                    nuevo = false;
                    $("#tblTrabajos").find("tr").removeClass("success");
                    $("#tblTrabajos").find("tr").removeClass("warning");
                    var id = this.id;
                    var index = $.inArray(id, selected);
                    if (index === -1) {
                        selected.push(id);
                    } else {
                        selected.splice(index, 1);
                    }
                    $(this).addClass('success');
                    var dtm = tblSelected.row(this).data();
                    IdMovimiento = parseInt(dtm[0]);

                    if (IdMovimiento !== 0 && IdMovimiento !== undefined && IdMovimiento > 0) {
                        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."});
                        $.ajax({
                            url: master_url + 'getTrabajoByID',
                            type: "POST",
                            dataType: "JSON",
                            data: {
                                ID: IdMovimiento
                            }
                        }).done(function (data, x, jq) {
                            var trabajo = data[0];

                            if (trabajo.Cliente_ID === '16') {
                                mdlReportesEditarTrabajo.find('#rNordes').removeClass('d-none');
                            }
                            pnlDatos.find(".nav-tabs a").removeClass("active show");
                            $(pnlDatos.find(".nav-tabs a")[0]).addClass("active show");
                            pnlDatos.find("#Datos").addClass("active show");
                            pnlDatos.find("#Datos2").removeClass("active show");
                            pnlDatos.find("input").not('[type=radio]').val('');
                            $.each(pnlDatos.find("select"), function (k, v) {
                                pnlDatos.find("select")[k].selectize.clear(true);
                            });

                            RadionButtonSelectedValueSet('EstatusTrabajo', trabajo.EstatusTrabajo);
                            $.ajax({
                                url: master_url + 'getSucursalesByCliente',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: trabajo.Cliente_ID
                                }
                            }).done(function (data, x, jq) {
                                $.each(data, function (k, v) {
                                    pnlDatos.find("[name='Sucursal_ID']")[0].selectize.addOption({text: v.CR + ' - ' + v.Sucursal, value: v.ID});
                                });
                                pnlDatos.find("[name='Sucursal_ID']")[0].selectize.setValue(trabajo.Sucursal_ID);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            }).always(function () {
                            });
                            $.ajax({
                                url: master_url + 'getEspecialidadesByCliente',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: trabajo.Cliente_ID
                                }
                            }).done(function (data, x, jq) {
                                $.each(data, function (k, v) {
                                    pnlDatos.find("[name='Especialidad_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
                                });
                                pnlDatos.find("[name='Especialidad_ID']")[0].selectize.setValue(trabajo.Especialidad_ID);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            }).always(function () {
                            });
                            $.ajax({
                                url: master_url + 'getAreasByCliente',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: trabajo.Cliente_ID
                                }
                            }).done(function (data, x, jq) {
                                $.each(data, function (k, v) {
                                    pnlDatos.find("[name='Area_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
                                });
                                pnlDatos.find("[name='Area_ID']")[0].selectize.setValue(trabajo.Area_ID);
                            }).fail(function (x, y, z) {
                                console.log(x, y, z);
                            }).always(function () {
                                HoldOn.close();
                            });
                            menuTablero.addClass("d-none");
                            pnlDatos.removeClass('d-none');

                            getCliente();
                            $.each(data[0], function (k, v) {
                                pnlDatos.find("[name='" + k + "']").val(v);
                            });

                            if (trabajo.Adjunto !== null && trabajo.Adjunto !== undefined && trabajo.Adjunto !== '') {
                                var ext = getExt(trabajo.Adjunto);
                                if (ext === "gif" || ext === "jpg" || ext === "png" || ext === "jpeg") {
                                    pnlDatos.find("#VistaPrevia").html('<img id="trtImagen" src="' + base_url + trabajo.Adjunto + '" \n\
                                    class ="img-responsive" width="600px"    \n\
                                    onclick="printImg(\' ' + base_url + trabajo.Adjunto + ' \')"  />');
                                }
                                if (ext === "PDF" || ext === "Pdf" || ext === "pdf") {
                                    pnlDatos.find("#VistaPrevia").html('<embed src="' + base_url + trabajo.Adjunto + '" type="application/pdf" width="90%" height="800px" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">');
                                }
                                if (ext !== "gif" && ext !== "jpg" && ext !== "jpeg" && ext !== "png" && ext !== "PDF" && ext !== "Pdf" && ext !== "pdf") {
                                    pnlDatos.find("#VistaPrevia").html('<h1>NO EXISTE ARCHIVO ADJUNTO</h1>');
                                }
                            } else {
                                pnlDatos.find("#VistaPrevia").html('<h3>NO EXISTE ARCHIVO ADJUNTO</h3>');
                            }

                            /*Control de estatus*/
                            $('#dEstatusDetalle').find('.radio-inline').addClass('customDisabled');
                            if (trabajo.EstatusTrabajo === 'Pedido') {
                                $('#frmNuevo').find('input, textarea, button, select').not('[type=radio]').attr('disabled', false);
                                pnlDatos.find("#lPedido").removeClass('customDisabled');
                                btnEliminar.removeClass("d-none");
                                btnImprimirReportesEditarTrabajo.addClass("d-none");
                                btnGuardar.removeClass("d-none");
                                $('#frmNuevo').find('#cmbAutorizacion').addClass('d-none');
                                $('#frmNuevo').find('#cmbAutorizacion').removeClass('Autorizacion');
                                pnlDatos.find("#ImporteTotal").html('');
                                pnlDatos.find("#ImporteTotal").html('Estimado Cliente, su pedido será recibido y se procederá a realizar el presupuesto correspondiente.');
                            } else if (trabajo.EstatusTrabajo === 'Autorización') {
                                btnGuardar.addClass('d-none');
                                $('#frmNuevo').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                pnlDatos.find("#lAutorización").removeClass('customDisabled');
                                btnEliminar.addClass("d-none");
                                btnImprimirReportesEditarTrabajo.removeClass("d-none");
                                btnGuardar.removeClass("d-none");
                                $('#frmNuevo').find('#cmbAutorizacion').addClass('Autorizacion');
                                $('#frmNuevo').find('#EstatusTrabajo').attr('disabled', false);
                                $('#frmNuevo').find('#cmbAutorizacion').removeClass('d-none');
                                var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                                pnlDatos.find("#ImporteTotal").html('');
                                pnlDatos.find("#ImporteTotal").html('Estimado Cliente, si está de acuerdo con el presupuesto favor de marcar SÍ en el control de autorización marcado en azul.\n\
                                                                             <br><strong class="">Importe: <strong><h5 class="text-success">$' + importeFormateado + '</h5>');
                            } else if (trabajo.EstatusTrabajo === 'Presupuesto') {

                                $('#frmNuevo').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                pnlDatos.find("#lPresupuesto").removeClass('customDisabled');
                                btnEliminar.addClass("d-none");
                                btnImprimirReportesEditarTrabajo.addClass("d-none");
                                btnGuardar.addClass("d-none");
                                $('#frmNuevo').find('#EstatusTrabajo').attr('disabled', true);
                                $('#frmNuevo').find('#cmbAutorizacion').addClass('d-none');
                                pnlDatos.find("#ImporteTotal").html('');
                                pnlDatos.find("#ImporteTotal").html('Estimado Cliente, estamos trabajando en su presupuesto, gracias por su comprensión.');
                            } else if (trabajo.EstatusTrabajo === 'No Autorizado')
                            {
                                $('#frmNuevo').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                btnEliminar.addClass("d-none");
                                btnImprimirReportesEditarTrabajo.removeClass("d-none");
                                btnGuardar.addClass("d-none");
                                pnlDatos.find("#lNoAutorizado").removeClass('customDisabled');
                                $('#frmNuevo').find('#EstatusTrabajo').attr('disabled', true);
                                $('#frmNuevo').find('#cmbAutorizacion').addClass('d-none');
                                var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                                pnlDatos.find("#ImporteTotal").html('');
                                pnlDatos.find("#ImporteTotal").html('Presupuesto rechazado por el cliente. <br> <strong class="">Importe : <strong><h5 class="text-success">$' + importeFormateado + '</h5>');
                            } else if (trabajo.EstatusTrabajo === 'Ejecución')
                            {
                                $('#frmNuevo').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                btnEliminar.addClass("d-none");
                                btnImprimirReportesEditarTrabajo.removeClass("d-none");
                                btnGuardar.addClass("d-none");
                                pnlDatos.find("#lEjecución").removeClass('customDisabled');
                                $('#frmNuevo').find('#cmbAutorizacion').addClass('Autorizacion');
                                $('#frmNuevo').find('#EstatusTrabajo').attr('disabled', true);
                                $('#frmNuevo').find('#cmbAutorizacion').addClass('d-none');
                                var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                                pnlDatos.find("#ImporteTotal").html('');
                                pnlDatos.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe : <strong><h5 class="text-success">$' + importeFormateado + '</h5>');
                            } else if (trabajo.EstatusTrabajo === 'Finalizado')
                            {
                                $('#frmNuevo').find('input, textarea, button, select').not('[type=radio]').attr('disabled', true);
                                btnEliminar.addClass("d-none");
                                btnImprimirReportesEditarTrabajo.removeClass("d-none");
                                btnGuardar.addClass("d-none");
                                pnlDatos.find("#lFinalizado").removeClass('customDisabled');
                                $('#frmNuevo').find('#cmbAutorizacion').addClass('Autorizacion');
                                $('#frmNuevo').find('#EstatusTrabajo').attr('disabled', true);
                                $('#frmNuevo').find('#cmbAutorizacion').addClass('d-none');
                                var importeFormateado = parseFloat(trabajo.Importe).toFixed(2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
                                pnlDatos.find("#ImporteTotal").html('');
                                pnlDatos.find("#ImporteTotal").html('<strong class="spanTotalesDetalle">Importe: <strong><span class="text-success spanTotalesDetalle">$' + importeFormateado + '</span>');
                            }
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

                $("#tblRegistros").html('<br><hr><div class="col-md-12"><center><h3>NO EXISTEN REGISTROS</h3></center></div> ');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function getCliente() {
        $.ajax({
            url: master_url + 'getClienteByID',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: "<?php echo $this->session->userdata('Cliente'); ?>"
            }
        }).done(function (data, x, jq) {
            pnlDatos.find("#Cliente_ID").val(data[0].Nombre);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }

    function getSucursalesbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getSucursalesByCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Sucursal_ID']")[0].selectize.addOption({text: v.CR + ' - ' + v.Sucursal, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function getEspecialidadesbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getEspecialidadesbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Especialidad_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }

    function getAreasbyCliente(IDX) {
        $.ajax({
            url: master_url + 'getAreasbyCliente',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: IDX
            }
        }).done(function (data, x, jq) {
            $.each(data, function (k, v) {
                pnlDatos.find("[name='Area_ID']")[0].selectize.addOption({text: v.Descripcion, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
    /*Para despues de insertar pro primera vez se cargue el panel de editar*/

    function RadionButtonSelectedValueSet(name, SelectdValue) {
        $('input[name="' + name + '"][value="' + SelectdValue + '"]').prop('checked', true);
    }
    /*-------------------Reportes----------------------------*/
    var master_urlReportes = base_url + 'index.php/Trabajos/';
    function onReportePresupuesto() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReportePresupuesto',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESUPUESTO A&R, GENERADO', 'success');
                ;
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    var Cliente = "<?php echo $this->session->userdata('Cliente'); ?>";
    function onReporteLevantamientoDespues() {
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoDespuesPrinciple';
        } else {
            reporte = 'onReporteLevantamientoDespues';
        }
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + reporte,
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOS DESPUES, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteLevantamientoCompleto() {
        var reporte = '';
        if (parseFloat(Cliente) === 4) {
            reporte = 'onReporteLevantamientoCompletoPrinciple';
        } else {
            reporte = 'onReporteLevantamientoCompleto';
        }
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + reporte,
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE LEVANTAMIENTO GENERAL, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteGenerador() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteGenerador',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADOR, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteCroquis() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteCroquis',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE CROQUIS, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteFotografico() {
        var mov = pnlDatos.find("#Movimiento").val();
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteFotografico',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOGRAFICO, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Reporte cajero*/
    function onReportePresentacionCajeros() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteCajero',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'PRESENTACIÓN FOTOGRÁFICA, GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    /*Reportes NORDES*/
    function onReporteNordesActaRecepcion() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteNordesActaRecepcion',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteNordesHojaServicio() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteNordesHojaServicio',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function onReporteNordesReporteTableros() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_urlReportes + 'onReporteNordesReporteTableros',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    function printImg(url) {
        var win = window.open('');
        win.document.write('<img src="' + url + '" onload="window.print();window.close()" />');
        win.focus();
    }
</script>
<style>
    .Autorizacion {
        background-color: #03a9f4;
    }
</style>