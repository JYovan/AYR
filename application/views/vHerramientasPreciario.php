<div class="col-md-12" id="MenuTablero">
    <div class="panel panel-default animated">
        <div class="panel-heading"><div class="cursor-hand" >Importar Preciario a Servicio</div></div>
        <div class="panel-body">
            <fieldset><div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x" ></span><br>IMPORTAR</button>
            </fieldset>
        </div>
    </div>
</div>

<!--MODAL EDITAR CONCEPTO ABIERTO-->
<div id="mdlImportar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content  modal-lg">
        <div class="modal-header ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body ">
            <form id="frmImportar">
                <fieldset>


                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="idPreciario" class="control-label">ID PRECIARIO*</label>
                            <input type="number" id="idPreciario" name="idPreciario" class="form-control" required="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-static">
                            <label for="idTrabajo" class="control-label">ID TRABAJO*</label>
                            <input type="number" id="idTrabajo" name="idTrabajo" class="form-control" required="">
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
        <div class="modal-footer "><!--BOTONES CONCEPTO-->
            <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
            <button onclick="onImportarPreciarioasServicio()" type="button" class="btn btn-raised btn-primary" id="btnImportar" name="btnImportar">IMPORTAR</button>
        </div>
    </div>
</div>


<script>
    var master_url = base_url + 'index.php/CtrlHerramientasPreciario/';

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
                        console.log(data);
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