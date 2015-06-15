<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21/05/2015
 * Time: 04:31 PM
 */

class modelVoto extends voto
{
    public function agregarHoja($con, $objHoja)
    {
        $query = "INSERT INTO hoja ";
        $query .= "(candidato_id)";
        $query .= " VALUES (";
        $query .= "'".$objHoja[0]."');";
        #return $query;
        return consultaA($con, $query);
    }

    public function agregarVoto($con, $objVoto)
    {
        $variableSql = "INSERT INTO voto ";
        $variableSql .= "(votante_id,candidato_id,voto_anio)";
        $variableSql .= " VALUES (";
        $variableSql .= "'".$objVoto[0]."',";
        $variableSql .= "'".$objVoto[1]."',";
        $variableSql .= "'".$objVoto[2]."');";
        #return $variableSql;
        return consultaA($con,$variableSql);

    }

}