<div class="col-md-4"></div>
<div class="col-md-4">
    <div class="panel panel-default animated bounceInUp form-group margin-top-100">
        <form id="frmIngresar">
            <div class="panel-body">
                <div class="col-md-12"  align="center">
                    <img src="<?php print base_url(); ?>img/PAN.png" class="img-responsive" width="148" height="143">
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
                    <button id="btnIngresar" type="button" class="btn btn-default fa-lg" data-toggle="tooltip" data-placement="top" title="" data-original-title="INGRESAR"><span class="fa fa-check fa-3x">ENTRAR</span></button>
                </div> 
            </div>
        </form>
    </div>
</div>
<div class="col-md-4"></div>
<script>
    var master_url = "<?php print base_url(); ?>index.php/CtrlSesion";
    var btnIngresar = $("#btnIngresar");
    
    $(document).ready(function () {
        btnIngresar.click(function () {
            var frmIngresar = new FormData($("#frmIngresar")[0]);
            
            $.ajax({
                url: master_url +'onIngreso',
                type: "POST",
                cache: false,
                data: frmIngresar
            }).done(function(){
                
            })
            
        });
    });
</script>