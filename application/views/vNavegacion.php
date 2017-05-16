<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php print base_url(); ?>">
                <img src="<?php print base_url(); ?>img/logo.png" width="75px">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MESA DE TRABAJO <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">LEVANTAMIENTO</a></li> 
                        <li><a href="#">COTIZACIÓN</a></li> 
                        <li><a href="#">PRESUPUESTO</a></li> 
                        <li><a href="#">ESTIMACIÓN</a></li> 
                    </ul>
                </li> 


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTROL <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">CONTROL DE ENTREGAS</a></li>
                        <li><a href="#">CONTROL DE PREFACTURAS</a></li>  
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REPORTES <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">OBRA</a></li> 
                        <li><a href="#">MANTENIMIENTO</a></li> 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXPLORADORES <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">OBRA</a></li> 
                        <li><a href="#">MANTENIMIENTO</a></li> 
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATALOGOS <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php print base_url() ?>index.php/CtrlClientes/">CLIENTES</a></li> 
                        <li><a href="<?php print base_url() ?>index.php/CtrlEmpresas/">EMPRESAS</a></li>
                        <li><a href="<?php print base_url() ?>index.php/CtrlPreciarios/">PRECIARIOS</a></li> 
                        <li class="disabled"><a href="#"><b>OBRA</b></a></li>
                        <li><a href="<?php print base_url() ?>index.php/CtrlEmpresasSupervisoras/">EMPRESAS SUPERVISORAS</a></li> 
                        <li class="disabled"><a href="#"><b>MANTENIMIENTO</b></a></li>
                        <li><a href="<?php print base_url() ?>index.php/CtrlCuadrillas/">CUADRILLAS</a></li> 
                        <li><a href="<?php print base_url() ?>index.php/CtrlCodigosPPTA/">CÓDIGOS PPTA</a></li> 
                    </ul>
                </li>
                <li><a href="<?php print base_url() ?>index.php/CtrlUsuario/">USUARIOS</a></li>



            </ul>

            
              
                
             
            
            <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown">
                    <!--style="font-weight:bold; font-size:18px;"-->
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php echo $this->session->userdata('Nombre').' '.$this->session->userdata('Apellidos');?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">CAMBIAR CONTRASEÑA</a></li> 
                        <li><a href="">REPORTAR UN PROBLEMA</a></li>
                        <li><a href="<?php print base_url() . "index.php/CtrlSesion/onSalir"; ?>" >SALIR</a></li> 
                       
                    </ul>
                </li>
                

               
            </ul>
        </div><!-- /.navbar-collapse -->


    </div><!-- /.container-fluid -->
</nav>
<script>
    $(document).ready(function () {

        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        setTimeout(HoldOn.close(), 1500);
    });
</script>