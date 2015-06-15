<?php
class CandidatoControlador extends Candidato {
	public function guardarDatos($con,$objAlumno) {
		$variableSql = " INSERT INTO candidato"; 
		$variableSql .= "(id,nombre,apellido,dui,independiente";
	    $variableSql .= ",coalision,partidario,cargo,depto,municipio)";		
		$variableSql .= "VALUES (";
		$variableSql .= "'".$objAlumno[0]."',";
		$variableSql .= "'".$objAlumno[1]."',";
		$variableSql .= "'".$objAlumno[2]."',";
		$variableSql .= "'".$objAlumno[3]."',";
		$variableSql .= "'".$objAlumno[4]."',";
		$variableSql .= "'".$objAlumno[5]."',";
		$variableSql .= "'".$objAlumno[6]."',";
		$variableSql .= "'".$objAlumno[7]."',";
		$variableSql .= "'".$objAlumno[8]."',";
		$variableSql .= "'".$objAlumno[9]."');";
//var_dump($variableSql);
		return consultaA($con,$variableSql);
	}

	public function modificarDatos($con,$objAlumno){
		$variableSql = "UPDATE candidato SET ";
		$variableSql .="nombre = '".$objAlumno[1]."'";
		$variableSql .=" ,apellido = '".$objAlumno[2]."'";
		$variableSql .=" ,dui = '".$objAlumno[3]."'";
		$variableSql .=" ,independiente = '".$objAlumno[4]."'";
		$variableSql .=" ,coalision = '".$objAlumno[5]."'";
		$variableSql .=" ,partidario = '".$objAlumno[6]."'";
		$variableSql .=" ,cargos = '".$objAlumno[7]."'";
		$variableSql .=" ,depto = '".$objAlumno[8]."'";
		$variableSql .=" ,municipio = '".$objAlumno[9]."'";
		$variableSql .= " WHERE id = ".$objAlumno[0].";";
		return consultaA($con,$variableSql);
    }
}
?>