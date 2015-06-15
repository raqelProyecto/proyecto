<?php 

/**
* 
*/
class modelPartido extends Partido
{
   public function agregarPartido($con, $objPartido)
   {
   	$variableSql = "INSERT INTO partido ";
   	$variableSql .= "(nombre,src_img,DUI,represent) ";
   	$variableSql .= "VALUES (";
    $variableSql .="'".$objPartido[0]."',";  
   	$variableSql .="'".$objPartido[1]."',";
   	$variableSql .="'".$objPartido[2]."',";
   	$variableSql .="'".$objPartido[3]."');";
    return consultaA($con, $variableSql);
   }

    public function actualizarPartido($con, $objPartido1)
    {
        $query = "UPDATE partido ";
        $query .= "SET ";
        $query .=  "nombre=";
        $query .= "'".$objPartido1[0]."',";
        $query .= "DUI=";
        $query .= "'".$objPartido1[1]."',";
        $query .= "represent=";
        $query .= "'".$objPartido1[2]."' ";
        $query .= " WHERE id=";
        $query .= "'".$objPartido1[3]."';";
        return consultaA($con, $query);
    }
}