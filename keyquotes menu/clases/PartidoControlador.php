<?php
#include './clases/Partido.php';
class PartidoControlador extends Partido {
	public function guardarDatos($con,$objPartido) {
		$variableSql = "INSERT INTO partido";
		$variableSql .= "(id,nombre,bandera,dui,presidente)";
		$variableSql .= "VALUES (";
		$variableSql .="'".$objPartido[0]."',";
		$variableSql .="'".$objPartido[1]."',";
		$variableSql .="'".$objPartido[2]."',";
		$variableSql .="'".$objPartido[3]."',";
		$variableSql .="'".$objPartido[4]."');";
        return consultaA($con,$variableSql);
	}

	public function modificarDatos($con,$objPartido) {
		$variableSql = "UPDATE partido SET";
		$variableSql .= "nombre = '".$objPartido[1]."'";
		$variableSql .= ",bandera = '".$objPartido[2]."'";
		$variableSql .= ",dui = '".$objPartido[3]."'";
		$variableSql .= ",presidente = '".$objPartido[4]."'";
		$variableSql .= "WHERE id = '".$objPartido[0].";'";
		return consultaA($con,$variableSql);
	}
}
?>