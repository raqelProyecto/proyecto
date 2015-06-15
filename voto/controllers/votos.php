<?php 
require 'config/database.php';
$candidatos = "select id, nombres from candidato where tipoElec_id='1'";
$objCandidatos = consultaD($con,$candidatos);
echo "<pre>";
print_r($objCandidatos);
echo "</pre>";
$total = count($objCandidatos);
$votos = array();
for ($i=0; $i <$total ; $i++) { 
	$valor = "Select count(candidato_id) from voto where candidato_id='".$objCandidatos[$i]['id']."';";
	
	 $objValor = consultaD($con,$valor);
	if (!empty($objValor)) {
		$votos[] = $objValor[0]['count(candidato_id)'];
	}else{
		echo "no hay nada";
	}
}
view('votos', ['votos' => $votos])
 ?>