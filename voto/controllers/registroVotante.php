<?php 

view('registVotante');
if(isset($_REQUEST['btn'])){
    require 'config/database.php';
    require 'models/votante.php';
    require 'models/modelVotante.php';
    $img = $_FILES['foto']['name'];
    $votante = new modelVotante();
    $votante->setDui($_REQUEST['dui']);
    $votante->setNombres($_REQUEST['nombre']);
    $votante->setApellidos($_REQUEST['apellido']);
    $votante->setFoto($img);
    $votante->setGenero($_REQUEST['genero']);
    $votante->setDpto($_REQUEST['dpto']);
    $votante->setMunicipio($_REQUEST['municipio']);
    $votante->setFechanac($_REQUEST['fechaNac']);
    $votante->setDir($_REQUEST['dir']);
    $objVotante = array($votante->getDui(),
                         $votante->getNombres(),
                        $votante->getApellidos(),
                        $votante->getFoto(),
                        $votante->getGenero(),
                        $votante->getFechanac(),
                        $votante->getDpto(),
                        $votante->getMunicipio(),
                        $votante->getDir());
     $votante->agregarVotante($con,$objVotante);
    $tip = subirMediaM('foto');
    //echo "<pre>";
    //var_dump($_REQUEST);
    //echo "</pre>";

}