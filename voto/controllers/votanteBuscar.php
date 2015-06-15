<?php
if(isset($_REQUEST['btn']))
{
    require 'config/database.php';
    require 'models/votante.php';
    require 'models/modelVotante.php';
    $img = $_FILES['foto']['name'];
    if(empty($img)):
        $img=$_REQUEST['foto'];
        else:

            $tip = subirMediaM('foto');
            endif;
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
    $votante->setId($_REQUEST['votante_id']);
    $objVotante = array($votante->getDui(),
        $votante->getNombres(),
        $votante->getApellidos(),
        $votante->getFoto(),
        $votante->getGenero(),
        $votante->getFechanac(),
        $votante->getDpto(),
        $votante->getMunicipio(),
        $votante->getDir(),
        $votante->getId());
     $votante->actualizarVotante($con,$objVotante);

    $query ="SELECT `id`, `DUI`, `nombres`, `apellidos`, `genero`, `fechnac` as fecha_de_nacimiento, `dpto` as departamento, `municipio`, `direccion`
FROM `votante`";

    $objVotantes = consultaD($con,$query);
    view('listVotantes', compact('objVotantes'));
    echo '<div class="container">';
    echo '<div class="alert alert-info alert-dismissible" role="alert">';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '<strong> votante Actulizado!</strong>Verifique fila #id Actualizada '.$_REQUEST['votante_id'];
    echo '</div>';
    echo '</div>';
   /*echo "<pre>";
    print_r($objVotante);
    echo "</pre>";
   */
}else{
    require 'config/database.php';
    $id_votante = $_REQUEST['id'];
    $query = "SELECT * FROM votante WHERE id= $id_votante";
    $objVotante = consultaD($con,$query);
    $values = array('La Paz','San Salvador','Sonsonate',
        'Cabañas','Usulutan','La Unión','La Libertad',
        'Santa Ana','Morazán','San Miguel','Cuscatlan',
        'San Vicente','Ahuachapan','Chalatenango');
    $generos = array('F','M');
    view('votBuscar',compact('objVotante','values','generos'));
}
