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
    <div class="text-center">
      <h1>
        Registrar Tipo Elecciones
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      </h1>
    </div>

    <hr class="divider">
<form class="form-signin" method="POST">
        <div class="checkbox">
        <h3>
          <label>
            <input type="checkbox" name="id" value="1"> Presidenciales
          </label>
          </h3>
        </div>
                <div class="checkbox">
                <h3>
          <label>
            <input type="checkbox" name="id" value="2"> Consejos Municipales
          </label>
          </h3>
        </div>
                <div class="checkbox">
          <h3>
          <label>
            <input type="checkbox" name="id" value="3"> Diputados
          </label>
          </h3>
        </div>
        <br>
        <br>
        <div class="form-group">
  <label for="DUI" class=" col-sm-2 control-label">Año: </label>
  <div class="col-sm-8">
  <select class="form-control" name="anio">
  <?php
  for ($i=15; $i<40 ; $i+=1) { 
    echo "<option value='20$i'>20".$i."</option>";
  }
   
  ?>
  
  </select>
  </div>
  </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="btn">Registrar</button>
  </form>

         

      


    </div><!-- /.container -->



<!--Cierre de body-->

<!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>