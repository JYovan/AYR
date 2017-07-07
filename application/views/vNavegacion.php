<div id="mdlCambiarContrasena" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Cambiar Contraseña</h4>
        </div>
        <div class="modal-body">
            <form id="frmEditarContrasena">
                Ingresa la nueva contraseña
                <div class="col-md-12">
                    <br>
                </div>
                <input type="text" id="ID" name="ID" class="form-control hide" >
                <div class=" col-6 col-md-12">
                    <label for="">Usuario</label>
                    <input type="text" id="Usuario" name="Usuario"  class="form-control" readonly="" placeholder="" >
                </div>
                <div class=" col-6 col-md-12">
                    <label for="">Nueva Contraseña*</label>
                    <input type="password" id="Contrasena" name="Contrasena"  class="form-control"  placeholder="" >
                </div>
                <div class="col-md-12">
                    <br>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-primary" id="btnModificar">ACEPTAR</button>
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php print base_url(); ?>">
                <img src="<?php print base_url(); ?>img/AYR_reportes.png" width="62px">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse navbar-responsive-collapse" id="">
            <ul class="nav navbar-nav">
                <li class="dropdown" >
                    <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Mesa de Trabajo<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="hide" id="liPedidoCliente">
                            <a href="<?php print base_url('CtrlPedidoCliente') ?>"  >Pedidos Cliente</a>
                        </li> 
                        <li id="liTrabajos">
                            <a href="<?php print base_url('CtrlTrabajos') ?>"  >Trabajos</a>
                        </li> 
                    </ul>
                </li>

                <li class="dropdown hide" id="liControl">
                    <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Control<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="liEntregas"><a href="<?php print base_url('CtrlEntregas') ?>">Control de Entregas</a></li> 
                        <li id="liPrefacturas"><a href="<?php print base_url('CtrlPrefacturas') ?>">Control de Prefacturas</a></li>  
                    </ul>
                </li>
                <li class="dropdown hide" id="liReportes">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Obra</a></li> 
                        <li><a href="#">Mantenimiento</a></li> 
                    </ul>
                </li>
                <li class="dropdown hide" id="liExploradores">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exploradores <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Obra</a></li> 
                        <li><a href="#">Mantenimiento</a></li> 
                    </ul>
                </li>
                <li class="dropdown hide" id="liCatalogos">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catálogos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="liClientes"><a href="<?php print base_url('CtrlClientes') ?>">Clientes</a></li> 
                        <li id="liEmpresas"><a href="<?php print base_url('CtrlEmpresas') ?>">Empresas</a></li>
                        <li id="liPreciarios"><a href="<?php print base_url('CtrlPreciarios') ?>">Preciarios</a></li> 
                        <!--                        <li class="disabled"><a href="#"><b>OBRA</b></a></li>-->
                        <li id="liEmpresasSupervisoras"><a href="<?php print base_url('CtrlEmpresasSupervisoras') ?>">Empresas Supervisoras</a></li> 
                        <!--                        <li class="disabled"><a href="#"><b>MANTENIMIENTO</b></a></li>-->
                        <li id="liCuadrillas"><a href="<?php print base_url('CtrlCuadrillas') ?>">Cuadrillas</a></li> 
                        <li id="liCodigosPPTA"><a href="<?php print base_url('CtrlCodigosPPTA') ?>">Códigos PPTA</a></li> 
                        <li id="liCentrosCostos"><a href="<?php print base_url('CtrlCentroCostos') ?>">Centros de Costos</a></li> 

                    </ul>
                </li>
                <li class="hide" id="liUsuarios"><a href="<?php print base_url('CtrlUsuario') ?>">Usuarios</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <!--style="font-weight:bold; font-size:18px;"-->
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo $this->session->userdata('Nombre') . ' ' . $this->session->userdata('Apellidos'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li onclick="onCambiarContrasena();"><a href="#">Cambiar Contraseña</a></li> 
                        <li><a href="">Reportar un problema</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php print base_url('CtrlSesion/onSalir'); ?>" >Salir</a></li> 
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<script>
    var TipoAcceso = "<?php echo $this->session->userdata('TipoAcceso'); ?>";
    if (TipoAcceso === 'RESIDENTE') {
    }
    if (TipoAcceso === 'COORDINADOR DE PROCESOS') {
        $('#liControl').removeClass('hide');
        $('#liCatalogos').removeClass('hide');
        $('#liEmpresas').addClass('hide');
        $('#liPrefacturas').addClass('hide');
    }
    if (TipoAcceso === 'ADMINISTRADOR') {
        $('#liControl').removeClass('hide');
        $('#liReportes').removeClass('hide');
        $('#liExploradores').removeClass('hide');
        $('#liCatalogos').removeClass('hide');
        $('#liUsuarios').removeClass('hide');
    }
    if (TipoAcceso === 'CLIENTE') {
        $('#liPedidoCliente').removeClass('hide');
        $('#liTrabajos').addClass('hide');
    }
    if (TipoAcceso === 'SUPER ADMINISTRADOR') {
        $('#liPedidoCliente').removeClass('hide');
        $('#liControl').removeClass('hide');
        $('#liReportes').removeClass('hide');
        $('#liExploradores').removeClass('hide');
        $('#liCatalogos').removeClass('hide');
        $('#liUsuarios').removeClass('hide');
    }

    var master_url = base_url + 'CtrlSesion/';
    $(document).ready(function () {
        $('#btnModificar').on("click", function () {

            var frm = new FormData($('#mdlCambiarContrasena').find("#frmEditarContrasena")[0]);
            $.validator.setDefaults({
                ignore: []
            });
            jQuery.validator.messages.required = 'Esta campo es obligatorio';
            jQuery.validator.messages.number = 'Esta campo debe ser numérico';
            jQuery.validator.messages.email = 'Correo no válido';
            $('#frmEditarContrasena').validate({
                errorElement: 'span',
                errorClass: 'errorForms',
                rules: {
                    Contrasena: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    console.log(element);
                    var elem = $(element);
                    elem.addClass(errorClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.removeClass(errorClass);
                }
            });

            //Si es verdadero que hacer
            if ($('#frmEditarContrasena').valid()) {
                HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
                $.ajax({
                    url: master_url + 'onCambiarContrasena',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    $('#mdlCambiarContrasena').modal('hide');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'CONTRASEÑA MODIFICADA EXITOSAMENTE', 'success');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });

            }
        });

    });

    function onCambiarContrasena() {

        $('#mdlCambiarContrasena').modal('show');
        $("#Contrasena").val("");
        $("#Usuario").val("<?php echo $this->session->userdata('USERNAME'); ?>");
        $("#ID").val("<?php echo $this->session->userdata('ID'); ?>");

    }


</script>