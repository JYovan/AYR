<div class="card " id="pnlTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6 float-left">
                <legend class="float-left">Centros de costo por Cliente</legend>
            </div>
            <div class="col-md-3" >
                <label for="" class="control-label">Cliente</label>
                <select id="sCliente" name="sCliente" class="form-control " >
                    <option value=""></option>
                </select>
            </div>
            <div class="col-sm-3 float-right" align="right">
                <button type="button" class="btn btn-primary" id="btnNuevo" data-toggle="tooltip" data-placement="bottom" title="Nuevo"><span class="fa fa-plus"></span><br></button>
            </div>
        </div>
        <div  id="tblRegistros"></div>
    </div>
</div>
<div id="" class="container-fluid">
    <div class="card border-0  d-none" id="pnlDatos">
        <div class="card-body text-dark">
            <form id="frmNuevo">
                <fieldset>
                    <div class="row">
                        <div class="col-md-4 float-left">
                            <legend >Centro Costos</legend>
                        </div>
                        <div class="col-md-8" align="right">
                            <button type="button" class="btn btn-primary btn-sm" id="btnCancelar" data-toggle="tooltip" data-placement="bottom" title="Regresar" >
                                <span class="fa fa-arrow-left" ></span>
                            </button>
                            <button type="button" class="btn btn-raised btn-danger btn-sm" id="btnEliminar"><span class="fa fa-trash fa-1x"></span> ELIMINAR</button>
                            <button type="button" class="btn btn-raised btn-info btn-sm" id="btnGuardar"><span class="fa fa-save fa-1x"></span> GUARDAR</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-none">
                            <input type="text"  name="ID" class="form-control">
                        </div>
                        <div class="col-6 col-md-12">
                            <div class="form-group label-static">
                                <label for="Nombre" class="control-label">Nombre*</label>
                                <input type="text" class="form-control form-control-sm" id="Nombre" name="Nombre" required>
                            </div>
                        </div>
                        <div class="col-6 col-md-12">
                            <div class="form-group label-static">
                                <label for="Descripcion" class="control-label">Descripción</label>
                                <input type="text" class="form-control form-control-sm" id="Descripcion" name="Descripcion" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h6>Los campos con * son obligatorios</h6>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/CentroCostos/';
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
                    $("#tblRegistros").html(getTable('tblCentroCostos', data));
                    $('#tblCentroCostos tfoot th').each(function () {
                        $(this).html('');
                    });
                    var tblSelected = $('#tblCentroCostos').DataTable(tableOptions);
                    $('#tblCentroCostos_filter input[type=search]').focus();
                    $('#tblCentroCostos tbody').on('click', 'tr', function () {
                        nuevo = false;
                        $("#tblCentroCostos").find("tr").removeClass("success");
                        $("#tblCentroCostos").find("tr").removeClass("warning");
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
                                url: master_url + 'getCCByID',
                                type: "POST",
                                dataType: "JSON",
                                data: {
                                    ID: temp
                                }
                            }).done(function (data, x, jq) {
                                console.log(data);
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
</script>

