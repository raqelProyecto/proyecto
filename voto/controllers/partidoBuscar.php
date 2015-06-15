<?php



if(isset($_REQUEST['btn'])){
    include 'config/database.php';
        include 'models/partido.php';
        include 'models/modelPartido.php';
        $partido = new modelPartido();
        $partido->setNombre($_REQUEST['nombre']);
        $partido->setDui($_REQUEST['DUI']);
        $partido->setRepresent($_REQUEST['represent']);
        $partido->setAdminid($_REQUEST['partido_id']);

        $dataObj = array($partido->getNombre(),
            $partido->getDui(),
            $partido->getRepresent(),
            $partido->getAdminid());
           $partido->actualizarPartido($con, $dataObj);
    $query = "SELECT id, nombre, DUI, represent as representante FROM partido";
    $objPartido = consultaD($con,$query);
    view('listPartido', ['objPartido' => $objPartido]);
    echo '<div class="container">';
    echo '<div class="alert alert-info alert-dismissible" role="alert">';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '<strong> Partido Actulizado!</strong>Verifique fila #id Actualizada '.$_REQUEST['partido_id'];
    echo '</div>';
    echo '</div>';
    }else{
    require 'config/database.php';
    $id_partido = $_REQUEST['id'];
    $query = "SELECT * FROM partido WHERE id= $id_partido";
    $objPartido = consultaD($con,$query);
#echo '<pre>';
#print_r($objPartido);
#echo '</pre>';
    view('partBuscar', ['objPartido' => $objPartido]);
}

