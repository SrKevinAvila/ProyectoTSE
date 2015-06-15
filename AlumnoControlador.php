<?php
include './clases/Alumno.php';
class AlumnoControlador extends Alumno{
	public function guardarDatos($con,$objAlumno) {
		$variableSql = " INSERT INTO candidato "; 
		$variableSql .= "(id,nombre,apellido,dui,";
		$variableSql .= "TipoCandidatura,cargo,departamento,municipio) ";
		$variableSql .= "VALUES (";
		$variableSql .= "'".$objAlumno[0]."',";
		$variableSql .= "'".$objAlumno[1]."',";
		$variableSql .= "'".$objAlumno[2]."',";
		$variableSql .= "'".$objAlumno[3]."',";
		$variableSql .= "'".$objAlumno[4]."',";
		$variableSql .= "'".$objAlumno[5]."',";
		$variableSql .= "'".$objAlumno[6]."',";
		$variableSql .= "'".$objAlumno[7]."');";
		return consultaA($con,$variableSql);
	}

	public function modificarDatos($con,$objAlumno){
		$variableSql = "UPDATE candidato SET ";
		$variableSql .="nombre = '".$objAlumno[1]."'";
		$variableSql .=" ,apellido = '".$objAlumno[2]."'";
		$variableSql .=" ,dui = '".$objAlumno[3]."'";
		$variableSql .=" ,TipoCandidatura = '".$objAlumno[4]."'";
		$variableSql .=" ,cargo = '".$objAlumno[5]."'";
		$variableSql .=" ,departamento = '".$objAlumno[6]."'";
		$variableSql .=" ,municipio = '".$objAlumno[7]."'";
		$variableSql .= " WHERE id = ".$objAlumno[0].";";
		return consultaA($con,$variableSql);
    }
}
?>