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
include './clases/Candidato.php';
include './clases/CandidatoControlador.php';
$alumnoA = new CandidatoControlador();
$accion = $_REQUEST['accion'] ;
switch ($accion) {
	case 'save':
 		if(isset($_REQUEST['bot'])){
 				$alumnoA->setId('NULL');
 				$alumnoA->setnombre($_REQUEST['nombre']);
 				$alumnoA->setapellido($_REQUEST['apellido']);
 				$alumnoA->setdui($_REQUEST['dui']);
 				$alumnoA->setindependiente($_REQUEST['independiente']);
 				$alumnoA->setcoalision($_REQUEST['coalision']);
 			    $alumnoA->setpartidario($_REQUEST['partidario']);
 				$alumnoA->setcargo($_REQUEST['cargos']);
 				$alumnoA->setdepto($_REQUEST['depto']);
 				$alumnoA->setmunicipio($_REQUEST['municipio']);
				$datosObj=array($alumnoA->getId(),
 			 					$alumnoA->getnombre(),
 								$alumnoA->getapellido(),
								$alumnoA->getdui(),
								$alumnoA->getindependiente(),
								$alumnoA->getcoalision(),
								$alumnoA->getpartidario(),
								$alumnoA->getcargo(),
								$alumnoA->getdepto(),
								$alumnoA->getmunicipio());
				//var_dump($datosObj);//
			print $alumnoA->guardarDatos($con,$datosObj);
			print '<a href=\'manejadorCandidato.php?accion=con\'>Ver datos</a>';
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