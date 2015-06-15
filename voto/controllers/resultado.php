<?php 
require 'config/database.php';
$candidatos = "select id, nombres from candidato where tipoElec_id='1'";
$objCandidatos = consultaD($con,$candidatos);
$total = count($objCandidatos);
$votos = array();
$candidatos = array();
for ($i=0; $i <$total ; $i++) { 
	$valor = "Select count(candidato_id) from voto where candidato_id='".$objCandidatos[$i]['id']."';";
	
	 $objValor = consultaD($con,$valor);
	if (!empty($objValor)) {
        $candidatos[] = $objCandidatos[$i]['nombres'];
		$votos[] = $objValor[0]['count(candidato_id)'];
	}else{
		echo "no hay nada";
	}
}
 view('result', ['candidatos'=>$objCandidatos,'votos'=>$votos]);