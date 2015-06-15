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
                            <li><a href="registroVotante">Registrar Votante</a></li>
                            <li><a href="coalicion">Registrar Coalición</a></li>
                            <li><a href="tipoEleccion">Registrar tipo de elecciones</a></li>

                            <li class="divider"></li>
                            <li><a href="listaPartidos">lista de Partidos</a></li>
                            <li><a href="listaCandidatos">lista de Candidatos</a></li>
                            <li><a href="listaVotantes">lista de Votantes</a></li>
                            <li><a href="listaCoaliciones">lista de Coaliciones</a></li>
                        </ul>
                    </li><li><a href="#about">Acerca de<span class="glyphicon glyphicon-book" aria-hidden="true"></span></a></a></li>
                    <li><a href="contactos">contactanos <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a></li>

                </ul>
                <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Raquel</a></p>
                <p class="navbar-text navbar-right"><a href="logout" class="btn-danger">Log Out</a></p>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
<!--fin nav-->>



<!--body-->


    <div class="container">
    <div class="text-center">
      <h1>
        Registro de Votación
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      </h1>
    </div>

    <hr class="divider">
<div class="row">
  <div class="col-md-12">
  
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="apellido" placeholder="Juan">
    </div>
  </div>    
  
  <div class="form-group">
    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="apellido" placeholder="Pérez">
    </div>
  </div>


 <div class="form-group">
    <label class=" col-sm-2 control-label">Género</label>
    <div class="col-sm-10">
      <div class="radio">
        <label>
        <input type="radio" name="optionsRadios" value="F" checked>
         F
        </label>

        <label>
        <input type="radio" name="optionsRadios" value="M">
         M
        </label>
      </div>
     </div>
 </div>
  


  
  <div class="form-group">
    <label for="direccion" class="col-sm-2 control-label">Dirección</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="direccion" >
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-primary">
    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> Guardar
    </button>
    </div>
  </div>
</form>
  </div>
</div>

         

      


    </div><!-- /.container -->



<!--Cierre de body-->

<!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>