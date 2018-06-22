<script>
    var mdlTrabajoEditarFotosCajeroPorConceptoCajero = $("#mdlTrabajoEditarFotosCajeroPorConceptoCajero");
    var EditarFotosCajeroPorConcepto = mdlTrabajoEditarFotosCajeroPorConceptoCajero.find("#fFotosCajero");
    function onModificarObservaciones(IDX, IDTD, IDT) {
        var Observaciones = IDT.value;
        HoldOn.open({theme: "sk-bounce", message: "GUARDANDO..."});
        $.ajax({
            url: master_url + 'ononModificarObservacionesFotoXConcepto',
            type: "POST",
            data: {ID: IDX, ObservacionesxFoto: Observaciones
            }
        }).done(function (data, x, jq) {
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
</script>
