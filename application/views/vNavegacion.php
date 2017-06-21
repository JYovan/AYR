

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
                <li>
                    <a href="<?php print base_url() ?>index.php/CtrlTrabajos/"  >Trabajos</a>
                </li> 

                <li class="dropdown hide" id="liControl">

                    <a href="#" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Control<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li id="liEntregas"><a href="<?php print base_url() ?>index.php/CtrlEntregas/">Control de Entregas</a></li> 
                        <li id="liPrefacturas"><a href="<?php print base_url() ?>index.php/CtrlPrefacturas/">Control de Prefacturas</a></li>  
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
                        <li id="liClientes"><a href="<?php print base_url() ?>index.php/CtrlClientes/">Clientes</a></li> 
                        <li id="liEmpresas"><a href="<?php print base_url() ?>index.php/CtrlEmpresas/">Empresas</a></li>
                        <li id="liPreciarios"><a href="<?php print base_url() ?>index.php/CtrlPreciarios/">Preciarios</a></li> 
                        <!--                        <li class="disabled"><a href="#"><b>OBRA</b></a></li>-->
                        <li id="liEmpresasSupervisoras"><a href="<?php print base_url() ?>index.php/CtrlEmpresasSupervisoras/">Empresas Supervisoras</a></li> 
                        <!--                        <li class="disabled"><a href="#"><b>MANTENIMIENTO</b></a></li>-->
                        <li id="liCuadrillas"><a href="<?php print base_url() ?>index.php/CtrlCuadrillas/">Cuadrillas</a></li> 
                        <li id="liCodigosPPTA"><a href="<?php print base_url() ?>index.php/CtrlCodigosPPTA/">Códigos PPTA</a></li> 
                    </ul>
                </li>
                <li class="hide" id="liUsuarios"><a href="<?php print base_url() ?>index.php/CtrlUsuario/">Usuarios</a></li>

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

<!--<button onclick="onReporteLevantamiento();">LEVANTAMIENTO</button>-->

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
    
     var master_url = base_url + 'index.php/CtrlSesion/';
     function onReporteLevantamiento() {
        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onReporteLevantamiento',
            type: "POST",
            data: {ID: 76}
        }).done(function (data, x, jq) {
            onNotify('<span class="fa fa-check fa-lg"></span>', 'REPORTE LEVANTAMIENTO, GENERADO', 'success');
            window.open(data, '_blank');
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
    

</script>