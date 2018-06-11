<style>
    .overlay .dropdown {
        cursor:pointer;
        font-size: 15.5px !important;
        color: #FAFAFA;
    }
    .overlay .dropdown-item {
        padding: 0.25rem 1rem !important;
        font-size: 14.5px !important;
        color: #A6A6A6;
    }
    .overlay .dropdown-menu {
        background-color: transparent !important;
        border: 0px !important;
        border-radius: 0px !important;
    }
    .overlay {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 999;
        top: 0;
        left: 0;
        background-color: rgba(13, 25, 41, 0.95);
        overflow-x: hidden;
        transition: 0.1s;
    }
    .overlay-content {
        position: relative;
        top: 5%;
        width: 100%;
        margin-top: 5px;
    }
    .overlay a:hover,
    .overlay a:focus {
        color: #F39C12 !important;
    }

    .overlay .closebtn {
        cursor:pointer;
        position: absolute;
        top: 0px;
        right: 20px;
        color: #fff !important;
        font-size: 30px !important;
    }

    .overlay li a{
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
    .overlay li a:hover {
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
        margin-left: 20px !important;
    }
</style>
<div id="mdlCambiarContrasena" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Cambiar Contraseña</h4>
        </div>
        <div class="modal-body" id="pnlContra">
            <form id="frmEditarContrasena">
                <input type="text" name="ID" class="form-control d-none" >
                <div class=" col-6 col-md-12">
                    <label for="">Usuario</label>
                    <input type="text"  name="Usuario"  class="form-control" readonly="" placeholder="" >
                </div>
                <div class=" col-6 col-md-12">
                    <label for="">Nueva Contraseña*</label>
                    <input type="password" name="Contrasena" id="Pass"  class="form-control"  placeholder="Introduce la nueva contraseña" required="">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-raised btn-primary" id="btnModificar">ACEPTAR</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
        </div>
    </div>
</div>
<div id="myNav" class="overlay">
    <a class="closebtn " onclick="closeNav()">&times;</a>
    <div class="overlay-content navbar ">
        <ul class=" navbar-nav mr-auto">
            <img src="<?php print base_url(); ?>img/logo.png" width="140px">
            <br>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $this->session->userdata('Nombre') . ' ' . $this->session->userdata('Apellidos'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" onclick="onCambiarContrasena();">Cambiar Contraseña</a>
                    <a class="dropdown-item" href="#">Reportar un problema</a>
                    <div class="divider"></div>
                    <a class="dropdown-item" href="<?php print base_url('Sesion/onSalir'); ?>" onclick="onRegistrarAccion('SALIÓ DEL SISTEMA');">Salir</a>
                </div>
            </li>

            <div class="dropdown-divider"></div>
            <br>
            <li class="nav-item dropdown " >
                <a class="nav-link dropdown-toggle " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mesa de Trabajo
                </a>
                <ul class="dropdown-menu">
                    <li  class="d-none" id="liPedidoCliente"><a class="dropdown-item" href="<?php print base_url('PedidoCliente.py') ?>">Pedidos Cliente</a></li>
                    <div class="dropdown-divider" ></div>
                    <li class="d-none" id="liServicios"><a class="dropdown-item" href="<?php print base_url('Trabajos.py') ?>">Servicio</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown d-none" id="liControl">
                <a class="nav-link dropdown-toggle " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Control
                </a>
                <ul class="dropdown-menu">
                    <li id="liEntregas"><a class="dropdown-item" href="<?php print base_url('Entregas.py') ?>">Entregas</a></li>
                    <li id="liPrefacturas"><a class="dropdown-item" href="<?php print base_url('Prefacturas.py') ?>">Prefacturas</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown d-none" id="liExploradores">
                <a class="nav-link dropdown-toggle " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Exploradores
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php print base_url('ExploradorServicios.py') ?>">Servicios</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown d-none" id="liCatalogos">
                <a class="nav-link dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Catálogos
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li id="liEmpresas"><a class="dropdown-item" href="<?php print base_url('Empresas.py') ?>">Empresas</a></li>
                    <li id="liPreciarios"><a class="dropdown-item" href="<?php print base_url('Preciarios.py') ?>">Preciarios</a></li>
                    <li id="liEmpresasSupervisoras"><a class="dropdown-item" href="<?php print base_url('EmpresasSupervisoras.py') ?>">Empresas Supervisoras</a></li>
                    <li id="liCuadrillas"><a class="dropdown-item" href="<?php print base_url('Cuadrillas.py') ?>">Cuadrillas</a></li>
                    <li id="liCodigosPPTA"><a class="dropdown-item" href="<?php print base_url('CodigosPPTA.py') ?>">Códigos PPTA</a></li>
                    <div class="dropdown-divider" href="#"></div>
                    <li class="nav-item dropdown dropdown-submenu" id="liPreciarios">
                        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Clientes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li id="liSucursales"><a class="dropdown-item" href="<?php print base_url('Sucursal.py') ?>">Sucursales</a></li>
                            <li id="liEspecialidades"><a class="dropdown-item" href="<?php print base_url('Especialidades.py') ?>">Especialidades</a></li>
                            <li id="liCentrosCostos"><a class="dropdown-item" href="<?php print base_url('CentroCostos.py') ?>">Centros de Costo</a></li>
                            <li id="liAreas"><a class="dropdown-item" href="<?php print base_url('Areas.py') ?>">Areas</a></li>
                        </ul>
                    </li>
                </ul>
            </li>


            <li class="nav-item dropdown d-none" id="liUsuarios">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuarios
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php print base_url('Usuario.py') ?>">Usuarios</a></li>
                    <div class="dropdown-divider" ></div>
                    <li><a class="dropdown-item" href="<?php print base_url('RegistroUsuarios.py') ?>">Log de Usuarios</a></li>

                </ul>
            </li>


            <li class="nav-item dropdown d-none" id="liHerramiendas">
                <a class="nav-link dropdown-toggle " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Herr. de Preciarios
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php print base_url('HerramientasPreciario.py') ?>">Servicios</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="container-fluid bg-primary" style="background-color: rgb(166,175,179);">
    <div class="row">
        <div class="col-4 ">
            <button class="btn btn-primary btn-sm " onclick="openNav()">
                <i class="fa fa-bars"></i> Menú Principal
            </button>
        </div>
        <div class="col-8 " align="right">

            <span class="badge badge-primary">
                <img src="<?php print base_url(); ?>img/logo.png" width="40px">
                <?php echo $this->session->userdata('Nombre') . ' ' . $this->session->userdata('Apellidos'); ?>
            </span>

            <a  class="btn btn-primary btn-sm" href="<?php print base_url('Sesion/onSalir'); ?>" onclick="onRegistrarAccion('SALIÓ DEL SISTEMA');">
                <i class="fa fa-sign-out-alt"></i> Salir</a>

        </div>
    </div>
</div>


<script>
    var TipoAcceso = "<?php echo $this->session->userdata('TipoAcceso'); ?>";
    if (TipoAcceso === 'RESIDENTE') {
        $('#liServicios').removeClass('d-none');
    }
    if (TipoAcceso === 'COORDINADOR DE PROCESOS') {
        $('#liControl').removeClass('d-none');
        $('#liCatalogos').removeClass('d-none');
        $('#liEmpresas').addClass('d-none');
        $('#liPrefacturas').addClass('d-none');
        $('#liServicios').removeClass('d-none');
        $('#liClientes').addClass('d-none');
        $('#liExploradores').removeClass('d-none');

    }
    if (TipoAcceso === 'ADMINISTRADOR') {
        $('#liControl').removeClass('d-none');
        $('#liReportes').removeClass('d-none');
        $('#liExploradores').removeClass('d-none');
        $('#liCatalogos').removeClass('d-none');
        $('#liServicios').removeClass('d-none');
    }
    if (TipoAcceso === 'CLIENTE') {
        $('#liPedidoCliente').removeClass('d-none');
    }
    if (TipoAcceso === 'SUPER ADMINISTRADOR') {
        $('#liPedidoCliente').removeClass('d-none');
        $('#liControl').removeClass('d-none');
        $('#liExploradores').removeClass('d-none');
        $('#liCatalogos').removeClass('d-none');
        $('#liUsuarios').removeClass('d-none');
        $('#liServicios').removeClass('d-none');
        $('#liHerramiendas').removeClass('d-none');
    }
    var master_url = base_url + 'Sesion/';

    function openNav() {
        $('#myNav').width(230);
    }

    function closeNav() {
        $('#myNav').width(0);
    }

    $(document).ready(function () {
        handleEnter();
        $('#myNav > li:not(ul)').click(function (event) {
            event.stopPropagation();
        });

        $('.dropdown-submenu a.multinivel').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
        $('#mdlCambiarContrasena').on('shown.bs.modal', function () {
            $('#Pass').focus();
        });
        $('#btnModificar').on("click", function () {
            var frm = new FormData($('#mdlCambiarContrasena').find("#frmEditarContrasena")[0]);
            isValid('pnlContra');
            if (valido) {
                HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
                $.ajax({
                    url: master_url + 'onCambiarContrasena',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    $('#mdlCambiarContrasena').modal('d-none');
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
        onRegistrarAccion('INTENTÓ CAMBIAR CONTRASEÑA');
        $('#mdlCambiarContrasena').modal('show');
        $("[name='Contrasena']").val("");
        $("[name='Usuario']").val("<?php echo $this->session->userdata('USERNAME'); ?>");
        $("[name='ID']").val("<?php echo $this->session->userdata('ID'); ?>");
    }

    function onRegistrarAccion(accion) {
        var master_url = base_url + 'Sesion/';
        $.ajax({
            url: master_url + 'onAgregar',
            type: "POST",
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
