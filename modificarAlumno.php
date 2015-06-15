<html>
	<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messages.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<head>
	<body>
<?php
include './clases/coneccion.php';
include './clases/CandidatoControlador.php';
$AlumnoA = new CandidatoControlador();

if(isset($_REQUEST['bot'])){
        $alumnoA->setId('NULL');
 		$alumnoA->setnombre($_REQUEST['nombre']);
 		$alumnoA->setapellido($_REQUEST['apellido']);
 		$alumnoA->setdui($_REQUEST['dui']);
 		$alumnoA->setindependientes($_REQUEST['independientes']);
 		$alumnoA->setcoalision($_REQUEST['coalision']);
 		$alumnoA->setcon($_REQUEST['con']);
 		$alumnoA->setpartidario($_REQUEST['partidario']);
 		$alumnoA->setcargo($_REQUEST['cargos']);
 		$alumnoA->setcepartamento($_REQUEST['departamentos']);
 		$alumnoA->setmunicipio($_REQUEST['municipios']); 
		$datosObj=array($alumnoA->getId(),
 			 			$alumnoA->getnombre(),
 						$alumnoA->getapellido(),
						$alumnoA->getdui(),
						$alumnoA->getidependientes(),
						$alumnoA->getcoalision(),
						$alumnoA->getcon(),
						$alumnoA->getpartidario(),
						$alumnoA->getcargo(),
						$alumnoA->getdepartamento(),
						$alumnoA->getmunicipio());	
			print "<div id='dialogo' title='Exito' style='display': none;'>";
			print '<p>Mensaje: ';
			print $AlumnoA->modificarDatos($con,$datosObj);
			print '<span class="badge glyphicon glyphicon-ok"></span></p>';
			print '<a href=\'manejadorCandidato.php?accion=con\'>Ver datos</a>';
			print "</div>";
}
?>
<script >
	$(document).ready(function(){
		$("#dialogo").dialog();
	});
</script>
</body>
</html>