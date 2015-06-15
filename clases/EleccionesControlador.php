<?php
Class EleccionesControlador extends Elecciones {
	public function guardarDatos($con,$objElecciones) {
		$variableSql = "INSERT INTO elecciones ";
		$variableSql .= "(id,presidente,alcalde,diputados,anio)";
		$variableSql .= "VALUES(";
		$variableSql .= "'".$objElecciones[0]."',";
		$variableSql .= "'".$objElecciones[1]."',";
		$variableSql .= "'".$objElecciones[2]."',";
		$variableSql .= "'".$objElecciones[3]."',";
		$variableSql .= "'".$objElecciones[4]."');";
		return consultaA($con,$variableSql);	
	}

	public function modificarDatos($con,$objElecciones){
		$variableSql = "UPDATE elecciones SET ";
		$variableSql .= "presidente = '".$objElecciones[1]."'";
		$variableSql .= "alcalde = '".$objElecciones[2]."'";
		$variableSql .= "diputados = '".$objElecciones[3]."'";
        $variableSql .= "anio = '".$objElecciones[4]."'";
        $variableSql .= " WHERE id = ".$objElecciones[0].";";
        return consultaA($con,$variableSql);
	}
}
?>