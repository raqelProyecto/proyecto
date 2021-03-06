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
                    <li class="active"><a href="usuario">Home<span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Acción<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            
                            <li><a href="registroVotante">Registrar Votante</a></li>
                           

                            <li class="divider"></li>
                           
                            <li><a href="listaCandidatos">lista de Candidatos</a></li>
                           
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
        Registro de Votante
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      </h1>
    </div>

    <hr class="divider">
<div class="row">
  <div class="col-md-12">
    
  <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="registroVotante">
    <div class="form-group">
                <label for="DUI" class=" col-sm-2 control-label">DUI: </label>
                 <div class="col-sm-10">
                 <input type="text" name="dui" class="form-control" id="DUI" placeholder="XXXXXXXX-X" maxlength="10" required>
                </div>
    </div>
      <div class="form-group">
          <label for="nombre" class="col-sm-2 control-label">Nombres</label>
          <div class="col-sm-10">
              <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Juan" required>
          </div>
      </div>
  <div class="form-group">
    <label for="apellido" class="col-sm-2 control-label">Apellidos</label>
    <div class="col-sm-10">
      <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Pérez" required>
    </div>
  </div>

  <div class="form-group">
    <label for="File" class="col-sm-2 control-label">Foto</label>
    <div class="col-sm-10">

    <input type="file" class="btn btn-default" name="foto" id="File" required>
    </div>
 </div>


 <div class="form-group">
    <label class=" col-sm-2 control-label">Género</label>
    <div class="col-sm-10">
      <div class="radio">
        <label>
        <input type="radio" name="genero" value="F">
         F
        </label>

        <label>
        <input type="radio" name="genero" value="M">
         M
        </label>
      </div>
     </div>
 </div>
  <div class="form-group">
    <label for="fechaNac" class="col-sm-2 control-label">Fecha de Nacimiento</label>
    <div class="col-sm-10">
    <div class="input-group">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
      </span>
      <input type="text" class="form-control" name="fechaNac" id="FechaNac" required>
    </div>
      
    </div>
  </div>
      <div class="form-group">
          <label for="dpto" class=" col-sm-2 control-label">Departamento</label>
          <div class="col-sm-10">
              <select  name="dpto" class="form-control" required>
                  <option value="NULL">--seleccionar--</option>
                  <option value="La Paz">La Paz</option>
                  <option value="San Salvador">San Salvador</option>
                  <option value="Sonsonate">Sonsonate</option>
                  <option value="Cabañas">Cabañas</option>
                  <option value="Usulutan">Usulutan</option>
                  <option value="La Unión">La Unión</option>
                  <option value="La Libertad">La Libertad</option>
                  <option value="Santa Ana">Santa Ana</option>
                  <option value="Morazán">Morazán</option>
                  <option value="San Miguel">San Miguel</option>
                  <option value="Cuscatlan">Cuscatlan</option>
                  <option value="San Vicente">San Vicente</option>
                  <option value="Ahuachapan">Ahuachapan</option>
                  <option value="Chalatenango">Chalatenango</option>
              </select>
          </div>
      </div>
  <div class="form-group">
    <label for="municipio" class="col-sm-2 control-label">Municipio</label>
    <div class="col-sm-10">
      <input type="text" name="municipio" class="form-control" id="municipio" >
    </div>
  </div>



  
  <div class="form-group">
    <label for="direccion" class="col-sm-2 control-label">Dirección</label>
    <div class="col-sm-10">
      <input type="text"name="dir" class="form-control" id="direccion" required>
    </div>
  </div>

  

   
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="btn" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>
  </div>
</div>

         

      


    </div><!-- /.container -->



<!--Cierre de body-->

<!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>