<div class="modal " id="mdlReporteAdeudoCliente"  role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Imprimir Reporte Adeudo por Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmReporte">
                    <div class="row">

                        <div class="col-12 col-sm-8">
                            <label>Cliente</label>
                            <select class="form-control form-control-sm required NotSelect" multiple id="ClienteRA" name="Cliente" required="">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="col-12 col-sm-12">
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
                        <div class="col-12 col-sm-12">
                            <label for="" class="control-label">Estatus</label>
                            <select id="EstatusTrabajo" name="EstatusTrabajo" multiple class="form-control required NotSelect" required="">
                                <option value=""></option>
                                <option value="Pedido">1 PEDIDO</option>
                                <option value="Presupuesto">2 PRESUPUESTO</option>
                                <option value="Autorización">3 AUTORIZACION</option>
                                <option value="Ejecución">5 EJECUCIÓN</option>
                                <option value="Finalizado">6 FINALIZADO</option>
                                <option value="Facturado">7 FACTURADO</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnImprimir"><i class="fa fa-file-pdf"></i> IMPRIMIR</button>
                <button type="button" class="btn btn-success" id="btnImprimirExcel"><i class="fa fa-file-excel"></i> EXCEL</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
            </div>
        </div>
    </div>
</div>
<script>

    var mdlReporteAdeudoCliente = $('#mdlReporteAdeudoCliente');

    function onImprimirReporteAdeudoExcel() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: base_url + 'index.php/ReporteAdeudo/onImprimirReporteAdeudoExcel',
            type: "POST",
            data: {ID: IdMovimiento}
        }).done(function (data, x, jq) {
            console.log(data);
            if (data.length > 0) {
                onNotifyOld('fa fa-check', 'REPORTE GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotifyOld('fa fa-exclamation ', 'NO EXISTEN DATOS PARA EL REPORTE', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    $(document).ready(function () {


        mdlReporteAdeudoCliente.find('#EstatusTrabajo').selectize({
            delimiter: ',',
            persist: true,
            create: false,
            hideSelected: true
        });

        mdlReporteAdeudoCliente.find('#ClienteRA').selectize({
            delimiter: ',',
            persist: true,
            create: false,
            hideSelected: true
        });

        mdlReporteAdeudoCliente.on('shown.bs.modal', function () {
            mdlReporteAdeudoCliente.find("input").val("");
            $.each(mdlReporteAdeudoCliente.find("select"), function (k, v) {
                mdlReporteAdeudoCliente.find("select")[k].selectize.clear(true);
            });
            mdlReporteAdeudoCliente.find('#ClienteRA')[0].selectize.focus();
        });

        mdlReporteAdeudoCliente.find('#btnImprimirExcel').on("click", function () {
            HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
            var frm = new FormData($('#mdlReporteAdeudoCliente').find("#frmReporte")[0]);
            var estatusTrabajo = mdlReporteAdeudoCliente.find('#EstatusTrabajo').val();
            var cliente = mdlReporteAdeudoCliente.find('#ClienteRA').val();
            var movs = [];
            $.each(estatusTrabajo, function (k, v) {
                movs.push({
                    Estatus: v
                });
            });

            var clientes = [];
            $.each(cliente, function (k, v) {
                clientes.push({
                    Cliente: v
                });
            });


            frm.append('EstatusTrabajos', JSON.stringify(movs));
            frm.append('Cliente', JSON.stringify(clientes));

            $.ajax({
                url: base_url + 'index.php/ReporteAdeudo/onImprimirReporteAdeudoExcel',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                if (data.length > 0) {
                    onNotifyOld('fa fa-check', 'REPORTE GENERADO', 'success');
                    window.open(data, '_blank');
                } else {
                    swal({
                        title: "ATENCIÓN",
                        text: "NO EXISTEN DATOS PARA EL REPORTE",
                        icon: "error"
                    }).then((action) => {
                        mdlReporteAdeudoCliente.find('#ClienteRA')[0].selectize.focus();
                    });
                }
                HoldOn.close();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                HoldOn.close();
            });


        });

        mdlReporteAdeudoCliente.find('#btnImprimir').on("click", function () {
            HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
            var frm = new FormData($('#mdlReporteAdeudoCliente').find("#frmReporte")[0]);
            var estatusTrabajo = mdlReporteAdeudoCliente.find('#EstatusTrabajo').val();
            var cliente = mdlReporteAdeudoCliente.find('#ClienteRA').val();
            var movs = [];
            $.each(estatusTrabajo, function (k, v) {
                movs.push({
                    Estatus: v
                });
            });

            var clientes = [];
            $.each(cliente, function (k, v) {
                clientes.push({
                    Cliente: v
                });
            });


            frm.append('EstatusTrabajos', JSON.stringify(movs));
            frm.append('Cliente', JSON.stringify(clientes));

            $.ajax({
                url: base_url + 'index.php/ReporteAdeudo/onImprimirReporteAdeudo',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                console.log(data);
                if (data.length > 0) {

                    $.fancybox.open({
                        src: data,
                        type: 'iframe',
                        opts: {
                            afterShow: function (instance, current) {
                                console.info('done!');
                            },
                            iframe: {
                                // Iframe template
                                tpl: '<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allowtransparency="true" src=""></iframe>',
                                preload: true,
                                // Custom CSS styling for iframe wrapping element
                                // You can use this to set custom iframe dimensions
                                css: {
                                    width: "95%",
                                    height: "95%"
                                },
                                // Iframe tag attributes
                                attr: {
                                    scrolling: "auto"
                                }
                            }
                        }
                    });


                } else {
                    swal({
                        title: "ATENCIÓN",
                        text: "NO EXISTEN DATOS PARA EL REPORTE",
                        icon: "error"
                    }).then((action) => {
                        mdlReporteAdeudoCliente.find('#ClienteRA')[0].selectize.focus();
                    });
                }
                HoldOn.close();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                HoldOn.close();
            });


        });
        handleEnter();
        getClientesReporteAdeudo();
    });


    function getClientesReporteAdeudo() {
        $.getJSON(base_url + 'index.php/Trabajos/getClientes').done(function (data, x, jq) {
            mdlReporteAdeudoCliente.find("#ClienteRA")[0].selectize.addOption({text: 'TODOS', value: '0'});
            $.each(data, function (k, v) {
                mdlReporteAdeudoCliente.find("#ClienteRA")[0].selectize.addOption({text: v.Cliente, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }


</script>