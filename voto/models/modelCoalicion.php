<?php


class modelCoalicion extends Coalicion{
 public function agregarCoalicion($con, $objCoalicion)
 {
     $query = "INSERT INTO coaliciones ";
     $query.= "(nombre)";
     $query.= " VALUES (";
     $query.= "'".$objCoalicion[0]."');";
     return consultaA($con,$query);
 }
    public function agregarDetalleCoalicion($con,$objDetalle){
       $variableSql = "INSERT INTO detalles_coaliciones ";
        $variableSql.= "(partido_id,coalicion_id)";
        $variableSql.= " VALUES (";
        $variableSql.= "'".$objDetalle[0]."',";
        $variableSql.= "'".$objDetalle[1]."');";
        return consultaA($con,$variableSql);
    }
}