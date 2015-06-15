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
include './clases/Coalicion.php';
include './clases/CoalicionControlador.php';
$alumnoA = new CoalicionControlador();
$accion = $_REQUEST['accion'] ;

$partido=$_POST['partidosCoalicion'];
echo $partido[0];
echo $partido[1];
$coalicionados=$partido[0]."/".$partido[1];
switch ($accion) {
	case 'save':
 		if(isset($_REQUEST['bot'])){
 				$alumnoA->setId('NULL');
 				$alumnoA->setnombrecoalicion($_REQUEST['nombrecoalicion']);
 				$alumnoA->settipo($_REQUEST['tipo']);
 				$alumnoA->setdepto($_REQUEST['depto']);
 				$alumnoA->setmunicipio($_REQUEST['municipio']);
 				$alumnoA->setpartidosCoalicion($coalicionados);
				$datosObj=array($alumnoA->getId(),
 			 					$alumnoA->getnombrecoalicion(),
 								$alumnoA->gettipo(),
								$alumnoA->getdepto(),
								$alumnoA->getmunicipio(),
								$alumnoA->getpartidosCoalicion());
				//var_dump($datosObj);//
			print $alumnoA->guardarDatos($con,$datosObj);
			print '<a href=\'manejadorCoalicion.php?accion=con\'>Ver datos</a>';
		}else{
				print'no se han enviado datos';

				}

		break;
	case 'con':
		$sql = 'SELECT * FROM coalicion';
		$datoss= consultaD($con,$sql);
		print imprimetabla($datoss,"coalicion","table table-bordered",1);
		break;

	default:
		print " no hay que realizar";
		break;

}

?>
</body>
</html>