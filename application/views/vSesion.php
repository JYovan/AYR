
<div id="mdlOlvideContrasena" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <h5 class="modal-title">Confirmar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="frmEditarContrasena">
                Ingresa el correo con el que accesas a la aplicación:
                <div class=" col-12 col-md-12">
                    <label for="">Correo*</label>
                    <input type="email" id="ocUsuario" name="ocUsuario"  class="form-control" required="" placeholder="" >
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-raised btn-primary" id="btnEnviar">ENVIAR</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
        </div>
    </div>
</div>

<div id="mdlEnviado" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Mensaje enviado con éxito</h4>
        </div>
        <div class="modal-body">
            Se ha enviado la contraseña al correo especificado. <br>
            En caso de no ver el correo, favor de revisar la bandeja de SPAM.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" >ACEPTAR</button>
        </div>
    </div>
</div>

<div class="container ">
    <div class="row ">
        <div class="Absolute-Center is-Responsive panel">
            <form id="frmIngresar" class="form-horizontal ">
                <div class="form-group">
                    <input type="email" class="form-control" id="Usuario" name="Usuario" placeholder="Email*" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="Contrasena" name="Contrasena" placeholder="Contraseña*">
                </div>
                <div align="right">
                    <button id="btnIngresar" type="button" class="btn btn-raised btn-primary">INGRESAR</button>
                    <hr>
                </div>
                <div class=" dt-buttons" align="left">
                    <button id="btnOlvidasteContrasena" type="button"  class="btn btn-warning">Olvidaste tu contraseña?</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var master_url = base_url + "Sesion/";
    var btnResetear = $("#btnResetear");
    var btnIngresar = $("#btnIngresar");
    var Usuario = $("#Usuario");
    var Contrasena = $("#Contrasena");
    //var chkRobot = $("#chkRobot");

    var mdlEnviado = $("#mdlEnviado");
    var mdlOlvideContrasena = $("#mdlOlvideContrasena");
    var btnEnviar = $("#btnEnviar");
    var btnOlvidasteContrasena = $("#btnOlvidasteContrasena");

    function login() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        if (Usuario.val() !== '' && Contrasena.val() !== '') {
            setTimeout(function () {
                var frm = $("#frmIngresar");
                $.ajax({
                    url: master_url + "onIngreso",
                    type: "POST",
                    data: {
                        USUARIO: frm.find("#Usuario").val(),
                        CONTRASENA: frm.find("#Contrasena").val()
                    }
                }).done(function (data, x, jq) {
                    if (parseInt(data) === 1) {
                        location.reload(true);
                    } else {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', data, 'danger');
                    }
                    HoldOn.close();
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                    HoldOn.close();
                }).always(function () {

                });
            }, 1000);
        } else {
        }
    }

    $(document).ready(function () {

        handleEnter();
        Usuario.focus();
        Usuario.select();
        Usuario.val("");
        Contrasena.val("");
        btnIngresar.click(function () {
            login();
        });
        btnIngresar.keypress(function (e) {
            if (e.which === 13) {
                login();
            }
            e.preventDefault();
        });

        mdlOlvideContrasena.on('shown.bs.modal', function () {
            $("#ocUsuario").focus();
        });

        btnOlvidasteContrasena.on("click", function () {
            mdlOlvideContrasena.modal('show');
            $("#ocUsuario").val("");

            btnEnviar.on("click", function () {
                if ($("#ocUsuario").val() !== '') {
                    HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
                    $.ajax({
                        url: master_url + "onSendMail",
                        type: "POST",
                        data: {
                            USUARIO: $("#ocUsuario").val()
                        }
                    }).done(function (data, x, jq) {
                        console.log(data);
                        if (parseInt(data) === 1) {
                            mdlOlvideContrasena.modal('d-none');
                            mdlEnviado.modal('show');
                        } else if (parseInt(data) === 0) {
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'OCURRIÓ UN ERROR, EL CORREO NO FUE ENVIADO', 'danger');
                        } else if (parseInt(data) === 2) {
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL USUARIO NO EXISTE, VERIFICA LA INFORMACIÓN', 'danger');
                        }
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });

                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES INGRESAR EL CORREO DE USUARIO', 'danger');
                }

            });

        });

    });
</script>

