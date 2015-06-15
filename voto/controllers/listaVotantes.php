<?php
require 'config/database.php';
$query ="SELECT `id`, `DUI`, `nombres`, `apellidos`, `genero`, `fechnac` as fecha_de_nacimiento, `dpto` as departamento, `municipio`, `direccion`
FROM `votante`";

$objVotantes = consultaD($con,$query);
view('listVotantes', compact('objVotantes'));