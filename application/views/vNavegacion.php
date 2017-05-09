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
        <a class="navbar-brand" href="#">
            <img src="<?php print base_url(); ?>img/Logo.png" width="50px">
        </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">INICIO</a></li>       
        <li><a href="#">LEVANTAMIENTOS</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MANTENIMIENTO <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">REPORTES</a></li> 
            <li><a href="#">TRABAJO POR ETAPAS</a></li> 
            <li><a href="#">CONTROL</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OBRA <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">POC</a></li> 
            <li><a href="#">ORDENES DE CAMBIO</a></li>
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXPLORADOR <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">OBRA</a></li> 
            <li><a href="#">MANTENIMIENTO</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATALOGOS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">CLIENTES</a></li> 
            <li><a href="#">PROVEEDORES</a></li> 
            <li><a href="#">PRECIARIOS</a></li> 
            <li class="disabled"><a href="#"><b>OBRA</b></a></li>
            <li><a href="#">COMPAÑIAS SUPERVISORAS</a></li> 
            <li class="disabled"><a href="#"><b>MANTENIMIENTO</b></a></li>
            <li><a href="#">CUADRILLAS</a></li> 
            <li><a href="#">CÓDIGOS PPTA</a></li> 
          </ul>
        </li>
        <li><a href="#">USUARIOS</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php print base_url()."index.php/ctrlSesion/onSalir";?>">SALIR</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script>
    $(document).ready(function(){
        
        HoldOn.open({
            theme: 'sk-bounce',
            message: 'CARGANDO...'
        });
        setTimeout(
        HoldOn.close(),1500);
    });
    </script>