<?php
include 'config/database.php';
include 'models/partido.php';
include 'models/modelPartido.php';
 $partido = new modelPartido();

if (isset($_REQUEST['btn'])) {
	$arch = "src_img";
	$img = $_FILES[$arch]['name'];
	$tip = subirMediaM($arch);
	$partido->setNombre($_REQUEST['nombre']);
	$partido->setSrcImg($img);
	$partido->setDui($_REQUEST['DUI']);
	$partido->setRepresent($_REQUEST['represent']);
	$partido->setAdminid($_REQUEST['admin_id']);

	$dataObj = array($partido->getNombre(),
		             $partido->getSrcImg(),
		             $partido->getDui(),
		             $partido->getRepresent());
	 $partido->agregarPartido($con, $dataObj);
	view('inscripcionPart');
    messageExito('Partido Registrado');
}else{

   view('inscripcionPart');
}
