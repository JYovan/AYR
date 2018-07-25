<div class="card border-0" id="pnlTablero">
    <div class="card-body">
        <div class="row">
            <div class="col-6 col-sm-6 float-left">
                <legend class="float-left">Análisis de Realización de Servicios</legend>
            </div>
            <div class="col-6 col-sm-6  float-right" align="right">
                <button type="button" class="btn btn-info" id="Actualizar" data-toggle="tooltip" data-placement="bottom" title="Actualizar"><span class="fa fa-sync-alt"></span><br></button>
                <button type="button" class="btn btn-primary" id="GuardarVista" data-toggle="tooltip" data-placement="bottom" title="Guardar Vista"><span class="fa fa-save"></span><br></button>
                <button type="button" class="btn btn-danger" id="Restaurar" data-toggle="tooltip" data-placement="bottom" title="Restaurar"><span class="fa fa-broom"></span><br></button>
            </div>
        </div>
        <div class=" mt-4">
            <div  id="Registros" class="table-responsive"></div>
        </div>

    </div>
</div>
<!--SCRIPT-->
<script>
    var master_url = base_url + 'index.php/VisorCliente/';
    var pnlTablero = $("#pnlTablero");

    var nuevo = true;
    $(document).ready(function () {
        $("#Actualizar").on("click", function () {
            getRecords();
        });
        getRecords();
    });
    function getRecords() {
        var renderers = $.extend(
                $.pivotUtilities.renderers,
                $.pivotUtilities.c3_renderers,
                $.pivotUtilities.d3_renderers,
                $.pivotUtilities.export_renderers
                );
        HoldOn.open({theme: "sk-bounce", message: "CARGANDO DATOS..."})
        $.when
                (
                        $.getJSON(master_url + 'getRecords').done(function (data, x, jq) {
                    //Boton para guardar vista en cookie
                    $("#GuardarVista").on("click", function () {
                        var config = $("#Registros").data("pivotUIOptions");
                        var config_copy = JSON.parse(JSON.stringify(config));
                        //delete some values which will not serialize to JSON
                        delete config_copy["aggregators"];
                        delete config_copy["renderers"];
                        setCookie("pivotConfig", JSON.stringify(config_copy), 30);
                        onNotifyOld('INFO', 'VISTA GUARDADA', 'success');
                    });
                    //Guardar configuraciones en cookie
                    var pivotConfig = getCookie("pivotConfig");
                    //Guardar configuraciones iniciales
                    var configInicial = {
                        renderers: renderers,
                        rows: ["Region", "Sucursal"],
                        cols: ["Centro de Costos"],
                        vals: ["Importe"],
                        aggregatorName: "Suma",
                        rendererName: "Tabla"
                    };
                    //Evento para borrar la cookie
                    $("#Restaurar").on("click", function () {
                        swal({
                            title: "CONFIRMACIÓN", text: "ESTAS SEGURO?", icon: "warning", buttons: ["Cancelar", "Aceptar"]
                        }).then((willDelete) => {
                            if (willDelete) {
                                HoldOn.open({message: "CARGANDO DATOS..."});
                                $("#Registros").pivotUI(data, configInicial, true);
                                setCookie("pivotConfig", "", 30);
                                swal('INFO', 'LA VISTA HA SIDO RESTAURADA', 'success');
                            }
                        });
                    });
                    if (pivotConfig !== '') {
                        pivotConfig = JSON.parse(pivotConfig);
                    } else {
                        pivotConfig = configInicial;
                    }
                    $("#Registros").pivotUI(data, pivotConfig, true);
                })
                        )
                .done(function () {
                    $('#Registros > table > tr > td > select').addClass('form-control form-control-sm');
                    $('div.pvtFilterBox > p > button').addClass('btn btn-primary btn-sm mx-1 my-1');
                    HoldOn.close();
                });
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

</script>

<style>

    table.pvtTable .pvtTotalLabel {
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
        font-size: 16px;
    }
    .pvtFilterBox {
        z-index: 100;
        width: 300px;
        border-radius: 0.25rem;
        border: 1px solid #fff;
        background-color: #fff;
        position: absolute;
        text-align: center;
    }

    .pvtAxisContainer, .pvtVals {
        border-radius: 0.25rem;
        border-color: #e2e2e2;
        border-radius: 0.25rem;
        background: #e2e2e2;
        padding: 5px;
        min-width: 20px;
        min-height: 20px;

    }


    table.pvtTable thead tr th, table.pvtTable tbody tr th {
        border-radius: 0.25rem;
        background-color: #3498DB;
        border: 1px solid #3498DB;
        font-size: 8pt;
        color: white;
        padding: 5px;
    }
    .pvtAxisContainer li span.pvtAttr {
        -webkit-text-size-adjust: 100%;
        background: #F39C12;
        border: none;
        padding: 5px 10px 7px;
        color: #FFF;
        white-space: nowrap;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }
    .pvtTriangle {
        cursor: pointer;
        color: white;
    }

    table{
        border-collapse : separate;
    }
</style>