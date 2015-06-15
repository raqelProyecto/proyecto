<?php
include 'config/database.php';
include 'models/tipoEleccion.php';
include 'models/modelTipoEleccion.php';
 
 $tipoEle = new  modelTipoEleccion();

 if (isset($_REQUEST['btn'])) {
 	$tipoEle->setId($_REQUEST['id']);
 	$tipoEle->setAnio($_REQUEST['anio']);
 	$tipoEle->setEstado(1);


 	$dataObj = array($tipoEle->getId(),
 		             $tipoEle->getAnio(),
 		             $tipoEle->getEstado()
 		             );
 
 	 $tipoEle->actualizarEstadoAnio($con, $dataObj);
    view('tipoEleccion');
     messageExito('eleccion Aperturada');
    
 }else{
 	view('tipoEleccion');
 }
