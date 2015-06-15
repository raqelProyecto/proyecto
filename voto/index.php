<?php 
/*
*el front-end controller se
*encarga de configurar nustra aplicacion
*/
require 'helpers.php';
//llamar controladore indicado
controller($_GET['url']);
//index.php?url=contactos
//hago un var_dump para hacer un debug
 //var_dump($_GET);