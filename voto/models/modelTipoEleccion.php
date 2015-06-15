<?php 
/**
* 
*/
class modelTipoEleccion extends tipoEleccion
{
	public function actualizarEstadoAnio($con, $objEstado)
	{
		$variableSql = "UPDATE tipoelec ";
		$variableSql .= "SET ";
		$variableSql .="anio=";
		$variableSql .="'".$objEstado[1]."',";
		$variableSql .="estado=";
		$variableSql .="'".$objEstado[2]."'";
		$variableSql .=" WHERE id=";
		$variableSql .="'".$objEstado[0]."';";
		return consultaA($con, $variableSql);
	}
	
}