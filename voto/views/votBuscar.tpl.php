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
                 <li><a href="listaVotantes">lista de votantes</a></li>
                  
               
                  
              </ul>
            </li><li><a href="#about">Acerca de<span class="glyphicon glyphicon-book" aria-hidden="true"></span></a></a></li>
            <li><a href="contactos">contactanos <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a></li>

          </ul>
            <p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">May</a></p>
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

                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="DUI" class=" col-sm-2 control-label">DUI: </label>
                        <div class="col-sm-5">
                            <input type="text" name="dui" class="form-control" id="DUI" value="<?= $objVotante[0]['DUI']?>" placeholder="XXXXXXXX-X" maxlength="10">
                        </div>
                        <div class="col-sm-5">
                            <img src="web/img/<?= $objVotante[0]['foto']?>" class="img-circle" alt="" style=" height: 150px; width: 150px"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombres</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombre" class="form-control" id="nombre" value="<?= $objVotante[0]['nombres']?>" placeholder="Juan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="apellido" class="col-sm-2 control-label">Apellidos</label>
                        <div class="col-sm-10">
                            <input type="text" name="apellido" class="form-control" id="apellido" value="<?= $objVotante[0]['apellidos']?>" placeholder="Pérez">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="File" class="col-sm-2 control-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="hidden" name="foto" value="<?= $objVotante[0]['foto']?>"/>
                            <input type="file" class="btn btn-default" name="foto" id="File">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class=" col-sm-2 control-label">Género</label>
                        <div class="col-sm-10">
                            <div class="radio">

                                <?php foreach($generos as $genero):?>
                                    <?php if($objVotante[0]['genero']==$genero):?>
                                        <label>
                                            <input type="radio" name="genero" value="<?= $genero?>" checked>
                                            <?= $genero?>
                                        </label>
                                 <?php else: ?>
                                  <label>
                                    <input type="radio" name="genero" value="<?= $genero?>">
                                    <?= $genero?>
                                </label>
                                        <?php endif?>
                                    <?php endforeach?>
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
                                <input type="text" class="form-control" name="fechaNac" id="FechaNac" value="<?= $objVotante[0]['fechnac']?>" >
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dpto" class=" col-sm-2 control-label">Departamento</label>
                        <div class="col-sm-10">
                            <select  name="dpto" class="form-control">

                                <option value="NULL">--seleccionar--</option>

                                <?php foreach ($values as $value): ?>
                                    <?php if (utf8_encode($objVotante[0]['dpto'])==utf8_encode($value)): ?>
                                        <option value="<?= $value ?>" selected = "selected"><?= $value ?></option>
                                    <?php else: ?>
                                        <option value="<?= $value ?>"><?= $value ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="municipio" class="col-sm-2 control-label">Municipio</label>
                        <div class="col-sm-10">
                            <input type="text" name="municipio" class="form-control" id="municipio" value="<?= $objVotante[0]['municipio']?>" >
                        </div>
                    </div>




                    <div class="form-group">
                        <label for="direccion" class="col-sm-2 control-label">Dirección</label>
                        <div class="col-sm-10">
                            <input type="text"name="dir" class="form-control" id="direccion" value="<?= $objVotante[0]['direccion']?>" >
                        </div>
                    </div>


    <input type="hidden" name="votante_id" value="<?= $_REQUEST['id']?>">


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="btn" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>






    </div><!-- /.container -->



    <!--Cierre de body-->

    <!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>