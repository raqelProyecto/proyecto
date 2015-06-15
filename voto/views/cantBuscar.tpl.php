<?php
require 'views/layout/header.php';
?>
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
                Actualizar candidato
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </h1>
        </div>

        <hr class="divider">
        <div class="row">
            <div class="col-md-12">

                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="apellido" class="col-sm-2 control-label">Apellido</label>
                        <div class="col-sm-10">
                            <input type="text" name="apellidos" class="form-control" id="apellido" value="<?= $objCand[0]['apellidos']?>" placeholder="Pérez">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" name="nombres" class="form-control" id="nombre" value="<?= $objCand[0]['nombres']?>"placeholder="Juan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="DUI" class=" col-sm-2 control-label">DUI: </label>
                        <div class="col-sm-10">
                            <input type="text" name="dui" class="form-control" id="DUI" value="<?= $objCand[0]['DUI']?>" placeholder="XXXXXXXX-X">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="dpto" class=" col-sm-2 control-label">Departamento</label>
                        <div class="col-sm-10">
                            <select  name="dpto" class="form-control">
                               
                               <option value="NULL">--seleccionar--</option>

                                <?php foreach ($values as $value): ?>
                                    <?php if ($objCand[0]['dpto']==$value): ?>
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
                            <input type="text" name="municipio" class="form-control" value="<?= $objCand[0]['municipio']?>" id="municipio" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tipo" class=" col-sm-2 control-label">Tipo de candidato: </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="tipoelec_id">
                                <?php foreach ($tipo as $data): ?>
                                    <?php if ($objCand[0]['tipoElec_id']==$data['id']): ?>
                                        <option value="<?= $data['id']; ?>" selected = "selected"><?= $data['tipo'] ?></option> 
                                    <?php else: ?>
                                        <option value="<?= $data['id']; ?>"><?= $data['tipo'] ?></option>
                                    <?php endif ?>                                    
                                <?php endforeach ?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="DUI" class=" col-sm-2 control-label">Partido: </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="partido_id">
                                <?php foreach ($partido as $dat): ?>
                                    <?php if ($objCand[0]['partido_id'] == $dat['id']): ?>
                                        <option value="<?= $dat['id']; ?>" selected = "selected"><?= $dat['nombre'] ?></option>
                                    <?php else: ?>
                                        <option value="<?= $dat['id']; ?>"><?= $dat['nombre'] ?></option>

                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <input type="hidden" name="candidato_id" value="<?= $_REQUEST['id']?>"/>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="btn" class="btn btn-primary">Actualizar candidato</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>






    </div><!-- /.container -->



    <!--Cierre de body-->

    <!--requerimos el pie de pagina-->
<?php require 'views/layout/footer.php'; ?>