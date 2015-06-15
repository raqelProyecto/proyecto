<?php



if(isset($_REQUEST['btn'])){
    require 'models/candidato.php';
    require 'models/modelCandidato.php';
    require 'config/database.php';

    $candidato = new modelCandidato();

    $candidato->setDui($_REQUEST['dui']);
    $candidato->setApellidos($_REQUEST['apellidos']);
    $candidato->setNombres($_REQUEST['nombres']);
    $candidato->setDpto($_REQUEST['dpto']);
    $candidato->setMunicipio($_REQUEST['municipio']);
    $candidato->setPatidoId($_REQUEST['partido_id']);
    $candidato->setTipoelecId($_REQUEST['tipoelec_id']);
    $candidato->setId($_REQUEST['candidato_id']);

    $objDatos = array($candidato->getDui(),
        $candidato->getApellidos(),
        $candidato->getNombres(),
        $candidato->getDpto(),
        $candidato->getMunicipio(),
        $candidato->getPatidoId(),
        $candidato->getTipoelecId(),
        $candidato->getId()
    );

    $candidato->actualizarCandidatot($con, $objDatos);
    $query = "SELECT c.id, c.DUI, c.apellidos, c.nombres, c.dpto,c.municipio, p.nombre as partido, t.tipo
          FROM candidato as c
          INNER JOIN partido as p
          ON c.partido_id =  p.id
          INNER JOIN tipoelec as t
          ON c.tipoElec_id = t.id;";
    $objCandidatos = consultaD($con,$query);
    view('listCandidato', ['objCandidatos' => $objCandidatos]);
    echo '<div class="container">';
    echo '<div class="alert alert-info alert-dismissible" role="alert">';
    echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    echo '<strong> Candidato Actulizado!</strong>Verifique fila #id Actualizada '.$_REQUEST['candidato_id'];
    echo '</div>';
    echo '</div>';
}else{
    require 'config/database.php';
    $id_partido = $_REQUEST['id'];
    $query = "SELECT * FROM candidato WHERE id= $id_partido";
    $objCand = consultaD($con,$query);
    $sql1 ="SELECT * FROM partido";
    $datas = consultaD($con, $sql1);
    # segundo objeto
    $sql ="SELECT * FROM tipoelec";
    $datos = consultaD($con, $sql);
    $values = array('La Paz','San Salvador','Sonsonate',
                     'Cabañas','Usulutan','La Unión','La Libertad',
                    'Santa Ana','Morazán','San Miguel','Cuscatlan',
                    'San Vicente','Ahuachapan','Chalatenango');
#echo '<pre>';
#print_r($objPartido);
#echo '</pre>';
    view('cantBuscar', ['objCand' => $objCand,'partido' => $datas, 'tipo' => $datos, 'values' => $values]);
}

