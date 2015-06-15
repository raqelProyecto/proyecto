<?php
require 'config/database.php';
$query = "SELECT c.id, c.DUI, c.apellidos, c.nombres, c.dpto,c.municipio, p.nombre as partido, t.tipo
          FROM candidato as c
          INNER JOIN partido as p
          ON c.partido_id =  p.id
          INNER JOIN tipoelec as t
          ON c.tipoElec_id = t.id;";
$objCandidatos = consultaD($con,$query);
view('listCandidato', ['objCandidatos' => $objCandidatos]);