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
            <button type="button" class="btn btn-raised btn-primary" id="btnModificar">ACEPTAR</button>
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
                <img src="<?php print base_url(); ?>img/logo.png" width="62px">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse navbar-responsive-collapse" id="">
            <ul class="nav navbar-nav">
                <li class="dropdown" >
                    <a href="#"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Mesa de Trabajo<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="hide" id="liPedidoCliente">
                            <a href="<?php print base_url('PedidoCliente.py'); ?>">Pedidos Cliente</a>
                        </li>
                        <li class="divider"></li>
                        <li class="hide" id="liServicios">
                            <a href="<?php print base_url('Trabajos.py'); ?>">Servicios</a>
                        </li>
                        <!--

                       <li class="dropdown-submenu hide"  id="liServicios">
                            <a class="multinivel" tabindex="-1" href="#">Servicios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li id="liTrabajo" class="hide" tabindex="-1"><a href="<?php print base_url('Trabajos.py'); ?>"  >Trabajos</a></li>
                                <li class="divider"></li>
                                <li id="liCajerosBBVA" class="hide"><a  href="<?php print base_url('CajerosBBVA.py'); ?>">Cajeros BBVA</a></li>
                            </ul>
                        </li>
                        -->
                    </ul>
                </li>
                <li class="dropdown hide" id="liControl">
                    <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Control<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="liEntregas"><a href="<?php print base_url('Entregas.py'); ?>" >Control de Entregas</a></li>
                        <li id="liPrefacturas"><a href="<?php print base_url('Prefacturas.py'); ?>">Control de Prefacturas</a></li>
                    </ul>
                </li>
                <li class="dropdown hide" id="liExploradores">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exploradores <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php print base_url('ExploradorServicios.py'); ?>">Servicios</a></li>
                    </ul>
                </li>
                <li class="dropdown hide" id="liCatalogos">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catálogos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="liClientes"><a href="<?php print base_url('Clientes.py'); ?>">Clientes</a></li>
                        <li id="liClientes"><a href="<?php print base_url('Sucursal.py'); ?>">Sucursales</a></li>
                        <li id="liEmpresas"><a href="<?php print base_url('Empresas.py'); ?>">Empresas</a></li>
                        <li id="liPreciarios"><a href="<?php print base_url('Preciarios.py'); ?>">Preciarios</a></li>
                        <!--                        <li class="disabled"><a href="#"><b>OBRA</b></a></li>-->
                        <li id="liEmpresasSupervisoras"><a href="<?php print base_url('EmpresasSupervisoras.py'); ?>">Empresas Supervisoras</a></li>
                        <!--                        <li class="disabled"><a href="#"><b>MANTENIMIENTO</b></a></li>-->
                        <li id="liCuadrillas"><a href="<?php print base_url('Cuadrillas.py'); ?>" >Cuadrillas</a></li>
                        <li id="liCodigosPPTA"><a href="<?php print base_url('CodigosPPTA.py'); ?>" >Códigos PPTA</a></li>
                        <li id="liCentrosCostos"><a href="<?php print base_url('CentroCostos.py'); ?>" >Centros de Costos</a></li>
                        <li id="liEspecialidades"><a href="<?php print base_url('Especialidades.py'); ?>" >Especialidades</a></li>
                        <li id="liAreas"><a href="<?php print base_url('Areas.py'); ?>" >Areas</a></li>
                    </ul>
                </li>
                <li class="dropdown hide" id="liUsuarios">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a href="<?php print base_url('Usuario.py'); ?>">Usuarios</a></li>
                        <li ><a href="<?php print base_url('RegistroUsuarios.py'); ?>">Log de Usuarios</a></li>
                    </ul>
                </li>
                <li class="dropdown hide" id="liHerramiendas">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Herramientas <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php print base_url('HerramientasPreciario.py'); ?>">Herramientas de Preciarios</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo $this->session->userdata('Nombre') . ' ' . $this->session->userdata('Apellidos'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li onclick="onCambiarContrasena();"><a href="#" onclick="onRegistrarAccion('INTENTÓ CAMBIAR CONTRASEÑA');">Cambiar Contraseña</a></li>
                        <li><a href="">Reportar un problema</a></li>

                        <li class="divider"></li>
                        <li><a href="<?php print base_url('Sesion/onSalir'); ?>" onclick="onRegistrarAccion('SALIÓ DEL SISTEMA');">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<script>
    var TipoAcceso = "<?php echo $this->session->userdata('TipoAcceso'); ?>";
    if (TipoAcceso === 'RESIDENTE') {
        $('#liServicios').removeClass('hide');
        //$('#liTrabajo').removeClass('hide');
        //$('#liCajerosBBVA').removeClass('disabledDetalle');
    }
    if (TipoAcceso === 'COORDINADOR DE PROCESOS') {
        $('#liControl').removeClass('hide');
        $('#liCatalogos').removeClass('hide');
        $('#liEmpresas').addClass('hide');
        $('#liPrefacturas').addClass('hide');
        $('#liServicios').removeClass('hide');
        $('#liClientes').addClass('hide');
        $('#liExploradores').removeClass('hide');
        //$('#liTrabajo').removeClass('hide');
        //$('#liCajerosBBVA').removeClass('hide');

    }
    if (TipoAcceso === 'ADMINISTRADOR') {
        $('#liControl').removeClass('hide');
        $('#liReportes').removeClass('hide');
        $('#liExploradores').removeClass('hide');
        $('#liCatalogos').removeClass('hide');
        //$('#liUsuarios').removeClass('hide');
        $('#liServicios').removeClass('hide');
        //$('#liTrabajo').removeClass('hide');
        //$('#liCajerosBBVA').removeClass('hide');
    }
    if (TipoAcceso === 'CLIENTE') {
        $('#liPedidoCliente').removeClass('hide');
    }
    if (TipoAcceso === 'SUPER ADMINISTRADOR') {
        $('#liPedidoCliente').removeClass('hide');
        $('#liControl').removeClass('hide');
        $('#liExploradores').removeClass('hide');
        $('#liCatalogos').removeClass('hide');
        $('#liUsuarios').removeClass('hide');
        $('#liServicios').removeClass('hide');
        $('#liHerramiendas').removeClass('hide');
        //$('#liTrabajo').removeClass('hide');
        //$('#liCajerosBBVA').removeClass('hide');
    }
    var master_url = base_url + 'Sesion/';
    $(document).ready(function () {
        $('.dropdown-submenu a.multinivel').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
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
                    onRegistrarAccion('CAMBIO CONTRASEÑA');
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

    function onRegistrarAccion(accion) {
        var master_url = base_url + 'Sesion/';
        $.ajax({
            url: master_url + 'onAgregar',
            type: "POST",
            dataType: "JSON",
            data: {
                Accion: accion
            }
        }).done(function (data, x, jq) {
            console.log(data);
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
</script>