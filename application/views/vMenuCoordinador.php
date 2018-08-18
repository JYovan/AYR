
<style>


    /* ---------------------------------------------------
        SIDEBAR STYLE
    ----------------------------------------------------- */
    a,
    a:hover,
    a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    #sidebar {
        width: 250px;
        position: fixed;
        top: 0;
        left: -250px;
        height: 100vh;
        z-index: 1031;
        color: #fff;
        transition: all 0.3s;
        overflow-y: scroll;
        box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);

    }

    #sidebar.active {
        left: 0;
    }

    #dismiss {
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        color: #000;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
    }

    #dismiss:hover {
        color: #95a5a6;
    }

    .overlay {
        top:0;
        display: none;
        position: fixed;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);
        z-index: 1030;
        opacity: 0;
        transition: all 0.5s ease-in-out;
    }
    .overlay.active {
        display: block;
        opacity: 1;
    }

    #sidebar .sidebar-header {
        padding: 20px;
        color: #000;
        background: #FFF;
    }

    #sidebar ul.collapse.show {
        background: #11181f;
    }


    #sidebar ul.components {
        padding: 10px 0;
        border-bottom: 1px solid #FFF;
    }

    #sidebar ul p {
        color: #fff;
        padding: 10px;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }



    #sidebar ul li a:hover {
        color: #2C3E50;
        background: #fff;
    }

    #sidebar ul li.active>a,
    #sidebar a[aria-expanded="true"] {
        color: #fff;
        background: #11181f;
    }

    #sidebar a[data-toggle="collapse"] {
        position: relative;
    }



    #sidebar .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    #sidebar ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;

    }

    #sidebar ul ul ul a {
        font-size: 0.9em !important;
        padding-left: 60px !important;
    }
    .navbar{
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
        -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    }
</style>
<div id="mdlCambiarContrasena" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <h4 class="modal-title">Cambiar Contraseña</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>

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

<!-- Sidebar  -->
<nav id="sidebar" class="bg-primary">
    <div id="dismiss">
        <i class="fas fa-arrow-left fa-lg"></i>
    </div>
    <div class="sidebar-header">
        <span id="logoSesion"></span>
    </div>
    <ul class="list-unstyled pl-3 pr-3 pt-3">
        <li>
            <input type="text" class="form-control form-control-sm" autofocus="" placeholder="BUSCAR" id="txtBusqueda">
        </li>
    </ul>
    <ul class="list-unstyled components">

        <!--        SERVICIOS-->
        <li class="drop">
            <a href="#Servicios" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-chalkboard-teacher mr-1"></i>Mesa de Trabajo</a>
            <ul class="collapse list-unstyled" id="Servicios">
                <li class="item"><a href="Trabajos.py"> Servicios</a></li>
            </ul>
        </li>
        <!--        CONTROL-->
        <li class="drop">
            <a href="#Control" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-clipboard-check mr-1"></i> Control</a>
            <ul class="collapse list-unstyled" id="Control">
                <li class="item"><a href="Entregas.py"> Entregas</a></li>
            </ul>
        </li>
        <!--        EXPLORADORES-->
        <li class="drop">
            <a href="#Exploradores" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-binoculars mr-1"></i> Exploradores</a>
            <ul class="collapse list-unstyled" id="Exploradores">
                <li class="item"><a href="ExploradorServicios.py"> Servicios</a></li>
                <li class="item"><a href="CuboInformacionGeneral.py"> Cubo</a></li>
            </ul>
        </li>
        <!--        CATÁLOGOS-->
        <li class="drop">
            <a href="#catalogos" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fa fa-folder-open"></i> Catálogos</a>
            <ul class="collapse list-unstyled" id="catalogos">
                <li class="item">
                    <a href="#Clientes" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-users"></i> Clientes</a>
                    <ul class="collapse list-unstyled" id="Clientes">
                        <li class="item"><a href="Especialidades.py"> Especialidades</a></li>
                        <li class="item"><a href="CentroCostos.py"> Centros de Costo</a></li>
                        <li class="item"><a href="Areas.py"> Areas</a></li>
                    </ul>
                </li>
                <li class="dropdown-divider"></li>
                <li class="item"><a href="Preciarios.py"> Preciarios</a></li>
                <li class="item"><a href="Plantillas.py"> Plantillas</a></li>
                <li class="item"><a href="EmpresasSupervisoras.py"> Empresas Supervisoras</a></li>
                <li class="item"><a href="Cuadrillas.py"> Cuadrillas</a></li>
                <li class="item"><a href="CodigosPPTA.py"> Códigos PPTA</a></li>
            </ul>
        </li>
    </ul>
    <ul class="list-unstyled pl-3 pr-3">
        <li>
            <span class="badge badge-warning btn-block px-3 py-2">V 1.1.0</span>
        </li>
    </ul>
</nav>


<!-- Contenido  -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <button class="btn btn-primary btn-sm navbar-brand" id="sidebarCollapse">
        <i class="fa fa-home"></i> Menú
    </button>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav w-100">

            <li class="nav-item dropdown ml-auto">
                <a class="btn btn-primary dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $this->session->userdata('Nombre') . ' ' . $this->session->userdata('Apellidos'); ?>
                    <i class="fa fa-user-circle fa-lg"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#"><i class="fa fa-question-circle"></i> Reportar un problema</a>
                    <a class="dropdown-item" href="#" onclick="onCambiarContrasena();"><i class="fa fa-key" ></i> Cambiar Contraseña</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php print base_url('Sesion/onSalir'); ?>" onclick="onRegistrarAccion('SALIÓ DEL SISTEMA');"><i class="fa fa-sign-out-alt"></i> Salir</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="overlay"></div>

<script>
    var master_url = base_url + 'Sesion/';
    var sidebar = $("#sidebar");
    var components = sidebar.find("ul.list-unstyled.components");
    var options = components.find("li.item");

    function getLogoByID() {
        $.ajax({
            url: base_url + 'Sesion/getLogoByID',
            type: "POST",
            dataType: "JSON"
        }).done(function (data, x, jq) {
            $("#logoSesion").html('<img src="' + base_url + data[0].RutaLogo + '" width ="200px" />');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });
    }



    $(document).ready(function () {
        handleEnter();
        getLogoByID();

        /*KEYUP, KEYDOWN, KEYPRESS; SON REQUERIDOS PARA LOS NON-PRINTABLE CHARACTERS*/
        sidebar.find("#txtBusqueda").on('keyup', function (e) {
            onBuscarSideBar(this);
        }).on('keydown', function (e) {
            onBuscarSideBar(this);
        }).on('keypress', function (e) {
            onBuscarSideBar(this);
        });

        sidebar.mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
            onResetSearch();
            sidebar.find("#txtBusqueda").val('');
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            $('#txtBusqueda').focus();
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
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onBuscarSideBar(e) {
        var busqueda = $(e).val();
        onResetSearch();
        if (busqueda.length > 0) {
            /*AGREGANDO CLASES PARA EXPANDIR COMPONENTES*/
            components.find("a.dropdown-toggle.collapsed").removeClass("collapsed");
            components.find("a.dropdown-toggle").attr('aria-expanded', true);
            components.find("a.dropdown-toggle").next().addClass('show');
            /*LEER CADA UNA DE LAS OPCIONES DISPONIBLES*/
            $.each(options, function (k, v) {
                var ul = $(v).parents('li.drop');
                /*ENCUENTRA LA COINCIDENCIA*/
                if ($(v).text().toUpperCase().includes(busqueda.toUpperCase())) {
                    $(v).removeClass("d-none");
                } else {
                    $(v).addClass("d-none");
                    /*VERIFICAR SI LA LISTA TIENE COMPONENTES PARA MOSTRAR DE LO CONTRARIO OCULTARLA*/
                    if (ul.find("li.item").length === ul.find("li.item.d-none").length) {
                        ul.addClass('d-none');
                    }
                }
            });
        } else {
            onResetSearch();
        }
    }
    function onResetSearch() {
        components.find("a.dropdown-toggle").addClass("collapsed");
        components.find("a.dropdown-toggle").attr('aria-expanded', false);
        components.find("a.dropdown-toggle").next().removeClass('show');
        $.each(options, function (k, v) {
            $(v).parents('li.drop').removeClass("d-none");
            $(v).removeClass("d-none");
        });
    }
</script>


