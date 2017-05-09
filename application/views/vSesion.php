<div class="col-md-4"></div>
<div class="col-md-4">
    <div class="panel panel-default animated bounceInUp form-group margin-top-100">
        <form id="frmIngresar">
            <div class="panel-body">
                <div class="col-md-12"  align="center">
                    <img src="<?php print base_url(); ?>img/logo.png" class="img-responsive" width="148" height="143">
                    <br>
                </div>
                <div class="col-md-12"> 
                    <input type="text" class="form-control" placeholder="USUARIO" id="Usuario" name="Usuario">
                </div>
                <div class="col-md-12"> 
                    <br>
                    <input type="password" class="form-control" placeholder="CONTRASEÑA" id="Contrasena" name="Contrasena">
                </div>
                <div class="col-md-12" align="center"> 
                    <br>
                    <label for="">
                        <input type="checkbox" class="form-control" placeholder="NO SOY UN ROBOT" id="chkRobot" name="chkRobot">
                        NO SOY UN ROBOT
                    </label>
                </div>
                <div class="col-md-12 animated fadeInDown" align="center"> 
                    <div id="msg" class="col-md-12"></div>
                    <br>
                    <button id="btnResetear" type="button" class="btn btn-primary fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="REINICIAR"><span class="fa fa-refresh fa-3x"></span></button>
                    <button id="btnIngresar" type="button" class="btn btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="INGRESAR"><span class="fa fa-check fa-3x"></span></button>
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
                        location.reload(true);
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