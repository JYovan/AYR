<div class="col-md-12">
    <div class="panel panel-default" id="pnlTablero">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">
                    <div class="cursor-hand" >Areas por Cliente</div>
                </div>
                <div class="col-md-3" >
                    <label for="" class="control-label">Cliente</label>
                    <select id="sCliente" name="sCliente" class="form-control " >
                        <option value=""></option>
                    </select>
                </div>
                <div class="col-md-3" align="right">
                    <div class="dt-buttons" align="right">
                        <!--Areas-->
                        <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <fieldset> 
                <div id="Areas" class="table-responsive col-md-12">
                    <table id="tblAreas" class="table table-sm display " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Descripción</th> 
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<div class="col-md-12">
    <!--GUARDAR-->
    <div id="pnlDatos" class="panel panel-default d-none ">
        <div class="Custompanel-heading" >
            <div class="Custompanel-heading clearfix">
                <div class="panel-title pull-left cursor-hand" >
                    Area
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
                    <div class="col-12 d-none">
                        <input type="text"  name="ID" class="form-control">
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción*</label>
                            <input type="text" class="form-control" id="Descripcion" name="Descripcion" required>
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <h6>Los campos con * son obligatorios</h6>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/Areas/';
    var btnNuevo = $("#btnNuevo");
    var pnlDatos = $("#pnlDatos");
    var pnlTablero = $("#pnlTablero");
    //Boton que guarda los datos del formulario
    var btnGuardar = pnlDatos.find("#btnGuardar");
    var btnCancelar = pnlDatos.find("#btnCancelar");
    var btnEliminar = $("#btnEliminar");
    var nuevo = true;
    var cliente;

    var Areas;
    var tblAreas = $('#tblAreas');

    $(document).ready(function () {

        $("[name='sCliente']").change(function () {
            getRecords($(this).val());
            cliente = $(this).val();
        });
        btnNuevo.click(function () {
            if (cliente !== '' && cliente !== undefined) {
                pnlTablero.addClass("d-none");
                pnlDatos.removeClass('d-none');
                pnlDatos.find("input").val("");
                $(':input:text:enabled:visible:first').focus();
                nuevo = true;
            } else {
                swal('INFO', 'Debes de seleccionar un cliente', 'info')
            }

        });
        btnCancelar.click(function () {
            pnlTablero.removeClass("d-none");
            pnlDatos.addClass('d-none');
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
                        pnlDatos.addClass("d-none");
                        pnlTablero.removeClass("d-none");
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
                        pnlDatos.addClass("d-none");
                        pnlTablero.removeClass("d-none");
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
                        pnlDatos.addClass("d-none");
                        pnlTablero.removeClass("d-none");
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
        handleEnter();
    }); 
    
    function getRecords(Cliente) {
        if (Cliente !== '') {
            temp = 0;
            HoldOn.open({
                theme: 'sk-cube',
                message: 'CARGANDO...'
            });
            $.fn.dataTable.ext.errMode = 'throw';

            if ($.fn.DataTable.isDataTable('#tblAreas')) {
                tblAreas.DataTable().destroy();
            } 
            Areas = tblAreas.DataTable({
                "dom": 'Bfrtip',
                buttons: buttons,
                "ajax": {
                    "url": master_url + 'getRecords',
                    type: "POST",
                    dataSrc : "",
                    "data": {
                        Cliente: Cliente
                    }
                },
                "columns": [
                    {"data": "ID"},
                    {"data": "Descripcion"}
                ],
                language: lang,
                "autoWidth": true,
                "colReorder": true,
                "displayLength": 20,
                "bLengthChange": false,
                "deferRender": true,
                "scrollCollapse": false,
                "bSort": true,
                "aaSorting": [
                    [0, 'desc']/*ID*/
                ]
            });

            tblAreas.find('tbody').on('click', 'tr', function () {
                tblAreas.find("tbody tr").removeClass("success");
                $(this).addClass("success");
                var dtm = Areas.row(this).data();
                temp = parseInt(dtm.ID);
                nuevo = false;
                if (temp !== 0 && temp !== undefined && temp > 0) {
                    HoldOn.open({
                        theme: "sk-bounce",
                        message: "CARGANDO DATOS..."
                    });
                    $.ajax({
                        url: master_url + 'getAreaByID',
                        type: "POST",
                        dataType: "JSON",
                        data: {
                            ID: temp
                        }
                    }).done(function (data, x, jq) {
                        pnlDatos.find("input").val("");
                        $.each(data[0], function (k, v) {
                            pnlDatos.find("[name='" + k + "']").val(v);
                        });

                        pnlTablero.addClass("d-none");
                        pnlDatos.removeClass('d-none');

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
            HoldOn.close();
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
</script>

