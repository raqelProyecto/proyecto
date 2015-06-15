<?php


class modelCandidato extends candidatos {

    public function agregarCanditado($con, $objCanditado)
    {
        $variableSql = "INSERT INTO candidato ";
        $variableSql .= "(DUI,apellidos,nombres,dpto,municipio,partido_id,tipoElec_id)";
        $variableSql .= " VALUES (";
        $variableSql .= "'".$objCanditado[0]."',";
        $variableSql .= "'".$objCanditado[1]."',";
        $variableSql .= "'".$objCanditado[2]."',";
        $variableSql .= "'".$objCanditado[3]."',";
        $variableSql .= "'".$objCanditado[4]."',";
        $variableSql .= "'".$objCanditado[5]."',";
        $variableSql .= "'".$objCanditado[6]."');";
        return consultaA($con, $variableSql);
    }

    public function actualizarCandidatot($con, $objCand)
    {
        $query = "UPDATE candidato ";
        $query .= "SET ";
        $query .= "DUI=";
        $query .= "'".$objCand[0]."',";
        $query .= "apellidos=";
        $query .= "'".$objCand[1]."',";
        $query .= "nombres=";
        $query .= "'".$objCand[2]."',";
        $query .= "dpto=";
        $query .= "'".$objCand[3]."',";
        $query .= "municipio=";
        $query .= "'".$objCand[4]."',";
        $query .= "partido_id=";
        $query .= "'".$objCand[5]."',";
        $query .= "tipoElec_id=";
        $query .= "'".$objCand[6]."'";
        $query .= " WHERE id=";
        $query .= "'".$objCand[7]."';";
       return consultaA($con,$query);

    }

}