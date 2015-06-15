<?php require 'views/layout/header.php'; ?>
<!--requerimos el encabezado-->
<!--body-->
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

    <div class="container">
         <div class="starter-template">
             <h1>Tú Voto <span class="glyphicon glyphicon-erase" aria-hidden="true">
                           </span>
             </h1>
             <p class="lead">Lista de Coaliciones(DIPUTADOS)<br>
                 <span class="glyphicon glyphicon-arrow-down" aria-hidden="true">
                    </span>
             </p>
         </div>

                      <div class="panel panel-warning">
                          <div class="panel-heading">
                            <h3 class="panel-title text-center">Lista Coaliciones</h3>
                          </div>
          <div class="panel-body">
           <?php echo imprimirtabla($objCoalicones,'coalicion','table table-striped',0); ?>

          </div>
</div>



        </div>
    </div>
    <!--Cierre de body-->

    <!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>