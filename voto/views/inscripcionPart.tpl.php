<?php require 'views/layout/header.php'; ?>
<!--requerimos el encabezado-->
<!-- navegacion-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Tú VOTO <span class="glyphicon glyphicon-erase" aria-hidden="true"></span></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="admin">Home<span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Acción<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="inscripcionCan">Registrar Candidato</a></li>
                            <li><a href="inscripcionPart">Registrar Partido</a></li>
                            
                            <li><a href="coalicion">Registrar Coalición</a></li>
                            <li><a href="tipoEleccion">Registrar tipo de elecciones</a></li>

                            <li class="divider"></li>
                            <li><a href="listaPartidos">lista de Partidos</a></li>
                            <li><a href="listaCandidatos">lista de Candidatos</a></li>
                            
                            <li><a href="listaCoalisiones">lista de Coaliciones</a></li>
                        </ul>
                    </li><li><a href="#about">Acerca de<span class="glyphicon glyphicon-book" aria-hidden="true"></span></a></a></li>
                    <li><a href="contactos">contactanos <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a></li>

                </ul>
                <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Raquel</a></p>
                <p class="navbar-text navbar-right"><a href="logout" class="btn-danger">Log Out</a></p>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
<!--fin nav-->

<!--body-->


    <div class="container">
    <br>
    <br>
    <br>
    <br>
    <div class="text-center">
      <h1>
        Registrar nuevo Partido
        <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>
      </h1>
    </div>

    <hr class="divider">
<div class="row">
  <div class="col-md-12">
    
  <form class="form-horizontal" method="POST" enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="DONA">
    </div>
  </div>
   <div class="form-group">
    <label for="File" class="col-sm-2 control-label">Elegir Imagen</label>
    <div class="col-sm-10">
    <input class="btn btn-default" type="file" name="src_img" id="File">
    </div>
  </div>
  <div class="form-group">
                <label for="DUI" class=" col-sm-2 control-label">DUI: </label>
                 <div class="col-sm-10">
                 <input type="text" name="DUI" class="form-control" id="DUI" placeholder="XXXXXXXX-X">
                 </div>
  </div>

    <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Representate</label>
    <div class="col-sm-10">
      <input type="text" name="represent" class="form-control" id="nombre" placeholder="DONA">
    </div>
  </div>
   <input type="hidden" name="admin_id" value="1">
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="btn" >Registrar Nuevo Partido</button>
    </div>
  </div>
</form>
  </div>
</div>

         

      


    </div><!-- /.container -->



<!--Cierre de body-->

<!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>