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

    <title>Resultados</title>

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
            <li class="active"><a href="home">Home<span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
            <li><a href="resultado">Resultados <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>             </li><li><a href="#about">Acerca de<span class="glyphicon glyphicon-book" aria-hidden="true"></span></a></a></li>
            <li><a href="contactos">contactanos <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a></li>
            

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!--fin nav-->
 <!--div contenedor-->
 <div class="container">

   <div class="starter-template">
        <h1>Tú Voto <span class="glyphicon glyphicon-inbox" aria-hidden="true"></span></h1>
        <h1><span class="label label-info">Resultado Preliminares de Presidente</span></h1>
        
      </div>
      <div class="row">
      <div class="col-md-4"></div>
        <div class="col-md-8">
        <img src="http://localhost/voto/grafico" class="img-thumbnail">
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table table-striped">
             <tr class="text-center">
               <th>#</th>
               <th>Nombre</th>
             </tr>
             <?php foreach ($candidatos as $candidato): ?>
               <tr>
                 <td><?= $candidato['id'] ?></td>
                 <td><?= $candidato['nombres'] ?></td>
               </tr>
             <?php endforeach ?>
           </table>
         </div>
           <div class="col-md-6">
              <table class="table table-striped">
                <tr class="text-center">
               <th>#</th>
               <th>votos</th>
             </tr>
             <?php foreach ($votos as $voto): ?>
               <tr>
                 <td><?= $voto ?></td>
                 <td></td>
               </tr>
             <?php endforeach ?>
           </table>
           </div>
        
      </div>

 </div>
 <!--</div> contenedo-->







   <!-- Placed at the end of the document so the pages load faster -->
    <script src="web/js/jquery.js"></script>
    <script src="web/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="web/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>