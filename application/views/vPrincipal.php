<div class="col-md-12">
    <form id="frmNuevosqlsvr">
        <fieldset>
            <div class="col-md-4">
                <input type="text" id="Movimiento" name="Movimiento" placeholder="MOVIMIENTO"  class="form-control">
            </div>
            <div class="col-md-4">
                <input type="text" id="FechaCreacion" name="FechaCreacion" placeholder="XX/XX/XXXX" data-provide="datepicker" data-date-format="dd/mm/yyyy"  class="form-control" placeholder="FECHA">
            </div>
            <div class="col-md-4">
                <input type="text" id="NoEntrega" name="NoEntrega" class="form-control" placeholder="no entrega">
            </div>
            <div class="col-md-4">
                <input type="text" id="Cliente_ID" name="Cliente_ID" class="form-control" placeholder="Cliente ID">
            </div>
            <div class="col-md-4">
                <input type="text" id="Clasificacion" name="Clasificacion" class="form-control" placeholder="Clasificacion">
            </div>
            <div class="col-md-4">
                <input type="text" id="Importe" name="Importe" class="form-control" placeholder="Importe ">
            </div>
            <div class="col-md-12">
                <button type="button" class="btn btn-success" id="btnAgregarEntrega">Agregar</button>
            </div>
        </fieldset>
    </form>
</div>
<div id="Sqlserverresult" class="col-md-12">AQUI LOS DATOS</div>


<script>
    $(document).ready(function() {
        getRecordsEntrega();
        $("#btnAgregarEntrega").on('click', function() {
            HoldOn.open({
                theme: 'sk-bounce',
                message: 'GUARDANDO...'
            });
            var frm = new FormData($("#frmNuevosqlsvr")[0]);
            $.ajax({
                url: base_url + 'index.php/ctrlSesion/onInsertarEntregas',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function(data, x, jq) {
                console.log(data);
                getRecordsEntrega();
            }).fail(function(x, y, z) {
                console.log(x, y, z);
            }).always(function() {
                HoldOn.close();
            });

        });
    });


    function getRecordsEntrega() {
        temp = 0;
        HoldOn.open({
            theme: "sk-bounce",
            message: "CARGANDO DATOS..."
        });
        $.ajax({
            url: base_url + 'index.php/CtrlSesion/getRecordsEntrega',
            type: "POST",
            dataType: "JSON"
        }).done(function(data, x, jq) {
            console.log(data);
            $("#Sqlserverresult").html("");
            var xvalue = "";
            $.each(data, function(k, v) {
                xvalue += "<div class=\"well\">";
                xvalue += "Movimiento : " + v.Movimiento;
                xvalue += "<br>";
                xvalue += "FechaCreacion: " + v.FechaCreacion;
                xvalue += "<br>";
                xvalue += "NoEntrega: " + v.NoEntrega;
                xvalue += "<br>";
                xvalue += "Estatus :" + v.Estatus;
                xvalue += "<br>";
                xvalue += "Cliente_ID: " + v.Cliente_ID;
                xvalue += "<br>";
                xvalue += "Clasificacion: " + v.Clasificacion;
                xvalue += "<br>";
                xvalue += "Importe: " + v.Importe;
                xvalue += "<br>";
                xvalue += "Usuario_ID: " + v.Usuario_ID + "</div>";
            });
            $("#Sqlserverresult").append(xvalue);

        }).fail(function(x, y, z) {
            console.log(x, y, z);
        }).always(function() {
            HoldOn.close();
        });
    }
</script>