<?php // content="text/plain; charset=utf-8"
require 'config/database.php';
require 'vendor/autoload.php';
require 'vendor/jpgraph/jpgraph/lib/JpGraph/JpGraph.php';
use JpGraph\JpGraph as Graph;
Graph::load();
Graph::module('pie');
Graph::module('pie3d');
$candidatos = "select id, nombres from candidato where tipoElec_id='1'";
$objCandidatos = consultaD($con,$candidatos);
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
// Some data
$data = $votos;

// Create the Pie Graph. 
$graph = new PieGraph(350,250);

$theme_class= new VividTheme;
$graph->SetTheme($theme_class);

// Set A title for the plot
$graph->title->Set("Resultados Preliminares");

// Create
$p1 = new PiePlot3D($data);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->ExplodeSlice(1);
$graph->Stroke();
?>