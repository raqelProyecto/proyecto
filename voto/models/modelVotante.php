<?php


class modelVotante extends votante
{
   public function agregarVotante($con,$objVotante){
       $variableSql= "INSERT INTO votante ";
       $variableSql.="(DUI,nombres,apellidos,foto,genero,fechnac,dpto,municipio,direccion)";
       $variableSql.= " VALUES (";
       $variableSql.= "'".$objVotante[0]."',";
       $variableSql.= "'".$objVotante[1]."',";
       $variableSql.= "'".$objVotante[2]."',";
       $variableSql.= "'".$objVotante[3]."',";
       $variableSql.= "'".$objVotante[4]."',";
       $variableSql.= "'".$objVotante[5]."',";
       $variableSql.= "'".$objVotante[6]."',";
       $variableSql.= "'".$objVotante[7]."',";
       $variableSql.= "'".$objVotante[8]."');";
       return consultaA($con,$variableSql);

}
    public function actualizarVotante($con,$objV)
    {
     $query= "UPDATE votante ";
     $query.= "SET ";
        $query.= "DUI=";
        $query.= "'".$objV[0]."',";
        $query.="nombres=";
        $query.= "'".$objV[1]."',";
        $query.="apellidos=";
        $query.= "'".$objV[2]."',";
        $query.="foto=";
        $query.= "'".$objV[3]."',";
        $query.="genero=";
        $query.= "'".$objV[4]."',";
        $query.="fechnac=";
        $query.= "'".$objV[5]."',";
        $query.="dpto=";
        $query.= "'".$objV[6]."',";
        $query.="municipio=";
        $query.= "'".$objV[7]."',";
        $query.="direccion=";
        $query.= "'".$objV[8]."'";
        $query.=" WHERE id = ";
        $query.= "'".$objV[9]."';";
        return consultaA($con, $query);
    }
}