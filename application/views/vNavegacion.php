

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="<?php print base_url(); ?>">
                <img src="<?php print base_url(); ?>img/logo.png" width="60px">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse navbar-responsive-collapse" id="">
            <ul class="nav navbar-nav">



                <li>
                    <a href="<?php print base_url() ?>index.php/CtrlTrabajos/"  >Trabajos</a>

                </li> 


                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Control<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Control de Entregas</a></li>
                        <li><a href="#">Control de Prefacturas</a></li>  
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Obra</a></li> 
                        <li><a href="#">Mantenimiento</a></li> 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Exploradores <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Obra</a></li> 
                        <li><a href="#">Mantenimiento</a></li> 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catálogos <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php print base_url() ?>index.php/CtrlClientes/">Clientes</a></li> 
                        <li><a href="<?php print base_url() ?>index.php/CtrlEmpresas/">Empresas</a></li>
                        <li><a href="<?php print base_url() ?>index.php/CtrlPreciarios/">Preciarios</a></li> 
                        <!--                        <li class="disabled"><a href="#"><b>OBRA</b></a></li>-->
                        <li><a href="<?php print base_url() ?>index.php/CtrlEmpresasSupervisoras/">Empresas Supervisoras</a></li> 
                        <!--                        <li class="disabled"><a href="#"><b>MANTENIMIENTO</b></a></li>-->
                        <li><a href="<?php print base_url() ?>index.php/CtrlCuadrillas/">Cuadrillas</a></li> 
                        <li><a href="<?php print base_url() ?>index.php/CtrlCodigosPPTA/">Códigos PPTA</a></li> 
                    </ul>
                </li>
                <li><a href="<?php print base_url() ?>index.php/CtrlUsuario/">Usuarios</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <!--style="font-weight:bold; font-size:18px;"-->
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo $this->session->userdata('Nombre') . ' ' . $this->session->userdata('Apellidos'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">Cambiar Contraseña</a></li> 
                        <li><a href="">Reportar un problema</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php print base_url() . "index.php/CtrlSesion/onSalir"; ?>" >Salir</a></li> 

                    </ul>
                </li>



            </ul>
        </div><!-- /.navbar-collapse -->


    </div><!-- /.container-fluid -->
</nav>
<div id="reportes" class="dt-buttons">
<!--<button onclick="onReporteFotografico()" class="btn btn-raised"><span class="fa fa-camera fa-1x"></span><br>FOTOGRAFICO</button>
<button onclick="onReporteCroquis()" class="btn btn-raised"><span class="fa fa-crop fa-1x"></span><br>CROQUIS</button>
<button onclick="onReporteGenerador()" class="btn btn-raised"><span class="fa fa-calculator fa-1x"></span><br>GENERADOR</button>-->
<!--<button onclick="onReporteEstimacion()" class="btn btn-raised"><span class="fa fa-money fa-1x"></span><br>ESTIMACIÓN</button>-->
</div>

<script>
    $(document).ready(function () {

        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        setTimeout(HoldOn.close(), 1000);
    });

   
    function onReporteFotografico() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: base_url + 'index.php/ctrlSesion/onReporteFotografico',
            type: "POST"
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE FOTOGRAFICO, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onReporteCroquis() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: base_url + 'index.php/ctrlSesion/onReporteCroquis',
            type: "POST"
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE CROQUIS, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }

    function onReporteGenerador() {
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'ESPERE...'
        });
        $.ajax({
            url: base_url + 'index.php/ctrlSesion/onReporteGenerador',
            type: "POST"
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE GENERADOR, GENERADO', 'success');
            console.log(data);
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }


</script>