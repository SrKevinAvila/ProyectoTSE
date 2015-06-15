<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messajes.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>

<?php
include './clases/coneccion.php';
include './clases/Alumno.php';
include './AlumnoControlador.php';
$alumnoA = new AlumnoControlador();
$accion = $_REQUEST['accion'] ;
switch ($accion) {
	case 'save':
 		if(isset($_REQUEST['bot'])){
 				$alumnoA->setId('NULL');
 				$alumnoA->setNombre($_REQUEST['NOMBRE']);
 				$alumnoA->setApellido($_REQUEST['APELLIDO']);
 				$alumnoA->setDui($_REQUEST['DUI']);
 				$alumnoA->setTipoCandidatura($_REQUEST['TipoCandidatura']);
 				$alumnoA->setCargo($_REQUEST['cargos']);
 				$alumnoA->setDepartamento($_REQUEST['departamentos']);
 				$alumnoA->setMunicipio($_REQUEST['municipios']);
				$datosObj=array($alumnoA->getId(),
 			 					$alumnoA->getNombre(),
 								$alumnoA->getApellido(),
								$alumnoA->getDui(),
								$alumnoA->getTipoCandidatura(),
								$alumnoA->getCargo(),
								$alumnoA->getDepartamento(),
								$alumnoA->getMunicipio());
			print $alumnoA->guardarDatos($con,$datosObj);
			print '<a href=\'manejadorAlumno.php?accion=con\'>Ver datos</a>';
		}else{
				print'no se han enviado datos';

				}

		break;
	case 'con':
		$sql = 'SELECT * FROM candidato';
		$datoss= consultaD($con,$sql);
		print imprimetabla($datoss,"candidato","table table-bordered",1);
		break;

	default:
		print " no hay que realizar";
		break;

}

?>
</body>
</html>