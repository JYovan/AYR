<div class="card border-0" id="pnlTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 float-left">
                <legend class="float-left">Importar Preciario a Trabajo, ambos previamente creados</legend>
            </div>
            <div class="col-sm-6 float-right" align="right">
                <button type="button" class="btn btn-primary" id="btnNuevo" data-toggle="tooltip" data-placement="left" title="Agregar"><span class="fa fa-plus"></span><br></button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="mdlImportar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Confirmar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmImportar">
                    <fieldset>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="idPreciario" class="control-label">ID Preciario*</label>
                                <input type="text" id="idPreciario" name="idPreciario" class="form-control form-control-sm numbersOnly" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="idTrabajo" class="control-label">ID Trabajo*</label>
                                <input type="text" id="idTrabajo" name="idTrabajo" class="form-control form-control-sm numbersOnly" required="">
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button onclick="onImportarPreciarioasServicio()" type="button" class="btn btn-raised btn-primary" id="btnImportar" name="btnImportar">IMPORTAR</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
            </div>
        </div>
    </div>
</div>

<script>
    var master_url = base_url + 'index.php/HerramientasPreciario/';
    $(document).ready(function () {
        $('#btnNuevo').on('click', function () {
            $('#mdlImportar').modal('show');
        });
    });
    function onImportarPreciarioasServicio() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: master_url + 'getConceptosXPreciarioIDSinFormato',
            type: "POST",
            dataType: "JSON",
            data: {
                ID: $('#idPreciario').val()
            }
        }).done(function (data, x, jq) {
            if (data[0] !== undefined && data.length > 0) {
                $.each(data, function (k, v) {
                    $.ajax({
                        url: master_url + 'onAgregarDetalleEditar',
                        type: "POST",
                        dataType: "text",
                        data: {
                            Trabajo_ID: $('#idTrabajo').val(),
                            PreciarioConcepto_ID: v.ID,
                            Renglon: k,
                            Unidad: v.Unidad,
                            Precio: v.Costo,
                            Moneda: v.Moneda,
                            Concepto: v.Descripcion,
                            Clave: v.Clave
                        }
                    }).done(function (data, x, jq) {
                        HoldOn.close();
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                    });
                });
                onNotify('<span class="fa fa-check fa-lg"></span>', 'SE HA AGREGADO EL EL PRECIARIO COMO SERVICIO', 'success');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL PRECIARIO NO SE AGREGO O NO EXISTE, INTENTE DE NUEVO', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }
</script>