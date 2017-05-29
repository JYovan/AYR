<div class="col-md-4"></div>
<div class="col-md-4">
    <div class="panel panel-default animated bounceInUp form-group margin-top-100">
        <form id="frmIngresar" class="form-horizontal">
            <div class="panel-body">
                <div class="col-md-12"  align="center">
                    <img src="<?php print base_url(); ?>img/logo.png" class="img-responsive" width="148" height="143">
                    <br>
                </div>

                <div class="form-group">
                    <label for="usuario" class="col-md-2 control-label">Usuario</label>

                    <div class="col-md-10">
                        <input type="email" class="form-control" name="Usuario" id="Usuario" placeholder="Email">
                    </div>
                </div>



                <div class="form-group">
                    <label for="Contrasena" class="col-md-2 control-label">Password</label>
                    <div class="col-md-10">
                        <input type="password" class="form-control" placeholder="Contraseña" id="Contrasena" name="Contrasena">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" placeholder="NO SOY UN ROBOT" id="chkRobot" name="chkRobot"> No soy un robot
                            </label>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 animated fadeInDown" align="center"> 
                    <div id="msg" class="col-md-12"></div>
                    <br>
                    <button id="btnResetear" type="button" class="btn btn-raised btn-default">LIMPIAR</button>
                    <button id="btnIngresar" type="button" class="btn btn-raised btn-primary">INGRESAR</button>

                </div> 
            </div>
        </form>
    </div>
</div>
<div class="col-md-4"></div>
<script>
    var master_url = base_url + "index.php/CtrlSesion/";
    var btnResetear = $("#btnResetear");
    var btnIngresar = $("#btnIngresar");

    var Usuario = $("#Usuario");
    var Contrasena = $("#Contrasena");
    var chkRobot = $("#chkRobot");

    $(document).ready(function () {
        btnIngresar.click(function () {
            if (Usuario.val() !== '' && Contrasena.val() !== '' && chkRobot.is(':checked')) {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'ESPERE...'
                });
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
                            onNotify('x', data, 'danger');
                        }
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }, 1000);
            } else {
                $("#msg").html('<br><div class="alert alert-dismissible alert-info">' +
                        '<button type="button" class="close" data-dismiss="alert">&times;</button>' +
                        '<strong>ERROR!</strong> VERIFIQUE SU USUARIO Y CONTRASEÑA</div>');
            }
        });
        btnResetear.click(function () {
            $("#frmIngresar")[0].reset();
        });
    });


</script>