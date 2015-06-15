<?php
require 'config/database.php';
$query = "SELECT c.id, c.DUI, c.apellidos, c.nombres, c.dpto, c.municipio, coap.nombre as nombre_coalicion, p.nombre as Partido FROM candidato as c INNER JOIN partido as p ON c.partido_id = p.id INNER JOIN detalles_coaliciones as det ON det.partido_id = p.id INNER JOIN coaliciones as coap ON coap.id = det.coalicion_id WHERE c.tipoElec_id = '3' ;";
$objCoalicones = consultaD($con,$query);


view('listaCoalisiones', compact('objCoalicones'));