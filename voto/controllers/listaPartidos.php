<?php
require 'config/database.php';
 $query = "SELECT id, nombre, DUI, represent as representante FROM partido";
 $objPartido = consultaD($con,$query);
view('listPartido', ['objPartido' => $objPartido]);