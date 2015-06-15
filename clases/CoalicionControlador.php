<?php
/**
* 
*/
class CoalicionControlador extends Coalicion {
	
	public function guardarDatos($con,$objCoa) {
		$variableSql = "INSERT INTO coalicion";
		$variableSql .= "(id,nombrecoalicion,tipo,depto,municipio";
		$variableSql .= ",partidosCoalicion)";
		$variableSql .= "VALUES (";
		$variableSql .= "'".$objCoa[0]."',";
		$variableSql .= "'".$objCoa[1]."',";
		$variableSql .= "'".$objCoa[2]."',";
		$variableSql .= "'".$objCoa[3]."',";
		$variableSql .= "'".$objCoa[4]."',";
		$variableSql .= "'".$objCoa[5]."');";
		return consultaA($con,$variableSql);
	}
}
?>