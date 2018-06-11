<div class="col-md-12">
    <div class="panel panel-default" id="pnlTablero">
        <div class="panel-heading">
            <div class="cursor-hand" >Empresas Supervisoras</div>
        </div>
        <div class="panel-body">
            <fieldset>
                <div class="col-md-12 dt-buttons" align="right">
                    <button type="button" class="btn btn-default" id="btnNuevo"><span class="fa fa-plus fa-1x"></span><br>NUEVO</button>
                </div>
                <div class="col-md-12 table-responsive" id="tblRegistros"></div>
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
                    Empresa Supervisora
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
                    <div class="col-md-12 d-none">
                        <input type="text"  name="ID" class="form-control">
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="Nombre" class="control-label">Nombre* </label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required="">
                        </div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group label-static">
                            <label for="Descripcion" class="control-label">Descripción</label>
                            <input type="text" class="form-control" id="Descripcion" name="Descripcion" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                            <label for="Contacto" class="control-label">Contacto 1</label>
                            <input type="text" id="Contacto" name="Contacto" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-static">
                            <label for="Contacto2" class="control-label">Contacto 2</label>
                            <input type="text" id="Contacto2" name="Contacto2" class="form-control" placeholder="">
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
    var master_url = base_url + 'index.php/EmpresasSupervisoras/';
    var btnNuevo = $("#btnNuevo");
    var pnlDatos = $("#pnlDatos");
    var pnlTablero = $("#pnlTablero");
    //Boton que guarda los datos del formulario
    var btnGuardar = pnlDatos.find("#btnGuardar");
    var btnCancelar = pnlDatos.find("#btnCancelar");
    var btnEliminar = $("#btnEliminar");
    var nuevo = true;
    $(document).ready(function () {

        btnNuevo.click(function () {
            pnlTablero.addClass("d-none");
            pnlDatos.removeClass('d-none');
            pnlDatos.find("input").val("");
            $(':input:text:enabled:visible:first').focus();
            nuevo = true;
        });
        btnCancelar.click(function () {
            pnlTablero.removeClass("d-none");
            pnlDatos.addClass('d-none');
            getRecords();
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
                        getRecords();
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
                        getRecords();
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
        getRecords();
        handleEnter();
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
            $("#tblRegistros").html(getTable('tblEmpresasSupervisoras', data));
            $('#tblEmpresasSupervisoras tfoot th').each(function () {
                $(this).html('');
            });
            var tblSelected = $('#tblEmpresasSupervisoras').DataTable(tableOptions);
            $('#tblEmpresasSupervisoras_filter input[type=search]').focus();
            $('#tblEmpresasSupervisoras tbody').on('click', 'tr', function () {
                nuevo = false;
                $("#tblEmpresasSupervisoras").find("tr").removeClass("success");
                $("#tblEmpresasSupervisoras").find("tr").removeClass("warning");
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
                        url: master_url + 'getEmpresaSupervisoraByID',
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

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

</script>