 <!DOCTYPE html>
  <html lang="es">
    <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>HOME</title>

    <!-- Bootstrap core CSS -->
    <link href="web/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="web/css/signin.css">
    <!-- Custom styles for this template -->
    <link href="web/css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="web/js/ie-emulation-modes-warning.js"></script>
    </head>
<body>
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
<!--fin nav-->
<div class="container">
       <div class="starter-template">
        <h1>Tú Voto <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span></h1>
        <p class="lead">Bienvenida Raquel .<br>
        Pueden realizar multiples acciones entre ellas estan 
        <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></p>
        
          
       
        
      </div>
      <div class="row">
        <div class="col-md-12">
        <div class="table-responsive">
        <table class="table table-hover">
         <thead>
           <tr class="info">
             <th><h3>Acción</h3></th>
             <th><h3>Descripción</h3></th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <th><a href="inscripcionCan">Registrar Candidato</a></th>
             <th> bla bla bla ...</th>
           </tr>
           <tr>
             <th><a href="inscripcionPart">Registrar Partido</a></th>
             <th> bla bla bla ...</th>
           </tr>
           <tr>
               <th><a href="coalicion">Registrar Coalición</a></th>
               <th> bla bla bla ...</th>
           </tr>
           
           <tr>
             <th><a href="tipoEleccion">Registrar tipo de elecciones</a></th>
             <th> bla bla bla ...</th>
           </tr>
            <tr>
               <th><a href="listaCandidatos">Lista Candidatos</a></th>
               <th> bla bla bla ...</th>
           </tr>
           <tr>
               <th><a href="listaPartidos">Lista Partidos</a></th>
               <th> bla bla bla ...</th>
           </tr>
           
           <tr>
               <th><a href="listaCoaliciones">Lista Coaliciones</a></th>
               <th> bla bla bla ...</th>
           </tr>
         </tbody>
        </table>
        </div>
         </div>
         </div>

            <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
          <blockquote>
  <p>nota: En la sección de acción en el menú contiene estas opciones presentadas en esta tabla.
  </p>
</blockquote>
        </div>
        <div class="col-md-2"></div>
      </div>


    </div><!-- /.container -->
 <!-- Placed at the end of the document so the pages load faster -->
    <script src="web/js/jquery.js"></script>
    <script src="web/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="web/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>