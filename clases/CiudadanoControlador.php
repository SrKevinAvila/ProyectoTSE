<?php
#include './clases/Ciudadano.php';
Class CiudadanoControlador extends Ciudadano {
	public function guardarDatos($con,$objciudadano) {
		$variableSql = "INSERT INTO ciudadano";
		$variableSql .= "(id,apellido,nombre,dui,fotografia";
		$variableSql .= "genero,vencimiento,direccion,depto,municipio";
		$variableSql .= "VALUES (";
		$variableSql .="'".$objciudadano[0]."'";
		$variableSql .="'".$objciudadano[1]."'";
		$variableSql .="'".$objciudadano[2]."'";
		$variableSql .="'".$objciudadano[3]."'";
		$variableSql .="'".$objciudadano[4]."'";
		$variableSql .="'".$objciudadano[5]."'";
		$variableSql .="'".$objciudadano[6]."'";
		$variableSql .="'".$objciudadano[7]."'";
		$variableSql .="'".$objciudadano[8]."'";
		$variableSql .="'".$objciudadano[9]."');";
        return consultaA($con,$variableSql);
	}

	public function modificarDatos($con,$objciudadano) {
		$variableSql = "UPDATE ciudadano SET ";
		$variableSql .= ",apellido = '".$objciudadano[1]."'";
		$variableSql .= ",nombre = '".$objciudadano[2]."'";
		$variableSql .= ",dui = '".$objciudadano[3]."'";
		$variableSql .= ",fotografia = '".$objciudadano[4]."'";
		$variableSql .= ",genero = '".$objciudadano[5]."'";
		$variableSql .= ",vencimiento = '".$objciudadano[6]."'";
		$variableSql .= ",direccion = '".$objciudadano[7]."'";
		$variableSql .= ",depto = '".$objciudadano[8]."'";
		$variableSql .= ",municipio = '".$objciudadano[9]."'";
		$variableSql .= " WHERE id  = '".$objciudadano[0]."'";
		return consultaA($con,$variableSql);
	}
}
?>