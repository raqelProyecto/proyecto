<?php

if(isset($_REQUEST['btn'])){
    require 'config/database.php';
    $dui =$_REQUEST['dui'];
     $sql = "SELECT * from votante WHERE DUI ='". $dui."'";
    $datos = consultaD($con, $sql);
    #echo '<pre>';
    #print_r($datos);
    #echo '</pre>';
    if(empty($datos[0]["DUI"]))
    {
        echo '<div class="container">';
        echo '<div class="alert alert-danger alert-dismissible" role="alert">';
        echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
        echo '<strong>Votante no Registrado!</strong>Verifique con administrador.';
        echo '</div>';
        echo '</div>';
        view('home');
    }else {
        $sql = "SELECT * FROM tipoelec WHERE estado = 1;";
        $objHoja = consultaD($con, $sql);
        view('hoja', ['datos' => $datos, 'objHoja' => $objHoja]);
    }
}else{
    view('home');
}
