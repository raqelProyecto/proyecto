<?php 
require 'config/database.php';
$query = "SELECT * FROM partido;";
$objDiputados = consultaD($con, $query);

view('registrarCoaliciones', compact('objDiputados'));
if (isset($_REQUEST['btnCoa']))
{
    require 'models/Coalicion.php';
    require 'models/modelCoalicion.php';
    $coalicion = new modelCoalicion();
    $coalicion->setNombre($_REQUEST['nombreCoalicion']);
    $objCoalicion = array($coalicion->getNombre());

    /*
    *print $coalicion_id = $con->lastInsertId();
     *intento fallido para obtener la ultima coalicion registrada
     */
    $sql = "SELECT id FROM coaliciones WHERE id = (SELECT MAX(id) from coaliciones);";
    $dato = consultaD($con,$sql);
    $sql1 = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'mydb' AND TABLE_NAME = 'coaliciones'";
    $dato1 = consultaD($con,$sql1);
    if ($dato == NULL) {
        // si el objeto esta vacio
        // entonces hago una consulta  ala  base de datos sobre en que numero va el auto_increment
        foreach ($dato1 as $key){
            $auto = $key['AUTO_INCREMENT'];

        }
        $maxid= $auto;
    }else{

        foreach($dato as $value){
            $id = $value['id'];
        }
        foreach ($dato1 as $key) {
            $auto = $key['AUTO_INCREMENT'];

        }
        if ($id<$auto) {
            $maxid= $auto;
        }else{
            $maxid= $id+1;
        }
    }
    $coalicion->agregarCoalicion($con, $objCoalicion);
    $hasta = $_REQUEST['hasta'];

   for($i=1; $i<=$hasta; $i++){
       $candidato_id = $_REQUEST["partido_id".$i];
       $coalicion->setCandidatoId($candidato_id);
       $coalicion->setCoalicionId($maxid);
       $objDetalle = array($coalicion->getCandidatoId(),
           $coalicion->getCoalicionId());

       $coalicion->agregarDetalleCoalicion($con,$objDetalle)."<br/>";
   }
    /*echo "<pre>";
    *print_r($objDetalle);
    *echo "</pre>";
	*echo "<pre>";
	*print_r($_REQUEST);
	*echo "</pre>";
    */
	
}