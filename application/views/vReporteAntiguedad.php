<div class="modal " id="mdlReporteAntiguedad"  role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Imprimir Reporte Antiguedad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmReporte">
                    <div class="row">

                        <div class="col-12 col-sm-8">
                            <label>Cliente</label>
                            <select class="form-control form-control-sm required selectize NotSelect" multiple id="Cliente" name="Cliente" required="">
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
            </div>
        </div>
    </div>
</div>
<script>

    var mdlReporteAntiguedad = $('#mdlReporteAntiguedad');


    $(document).ready(function () {


        mdlReporteAntiguedad.find('#EstatusTrabajo').selectize({
            delimiter: ',',
            persist: true,
            create: false,
            hideSelected: true
        });

        mdlReporteAntiguedad.find('#Cliente').selectize({
            delimiter: ',',
            persist: true,
            create: false,
            hideSelected: true
        });

        mdlReporteAntiguedad.on('shown.bs.modal', function () {
            mdlReporteAntiguedad.find("input").val("");
            $.each(mdlReporteAntiguedad.find("select"), function (k, v) {
                mdlReporteAntiguedad.find("select")[k].selectize.clear(true);
            });
            mdlReporteAntiguedad.find('#Cliente')[0].selectize.focus();
        });


        mdlReporteAntiguedad.find('#btnImprimir').on("click", function () {
            HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
            var frm = new FormData($('#mdlReporteAntiguedad').find("#frmReporte")[0]);
            var estatusTrabajo = mdlReporteAntiguedad.find('#EstatusTrabajo').val();
            var cliente = mdlReporteAntiguedad.find('#Cliente').val();
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
                url: base_url + 'index.php/ReporteAntiguedad/onImprimirAntiguedad',
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
                        mdlReporteAntiguedad.find('#Cliente')[0].selectize.focus();
                    });
                }
                HoldOn.close();
            }).fail(function (x, y, z) {
                console.log(x, y, z);
                HoldOn.close();
            });


        });
        handleEnter();
        getClientesReporteAntiguedad();
    });


    function getClientesReporteAntiguedad() {
        $.getJSON(base_url + 'index.php/Trabajos/getClientes').done(function (data, x, jq) {
            mdlReporteAntiguedad.find("#Cliente")[0].selectize.addOption({text: 'TODOS', value: '0'});
            $.each(data, function (k, v) {
                mdlReporteAntiguedad.find("#Cliente")[0].selectize.addOption({text: v.Cliente, value: v.ID});
            });
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        });
    }


</script>