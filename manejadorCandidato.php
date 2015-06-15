<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Candidatos Registrados</title>
	<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messajes.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<script src="estilo-menu/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="personal.css">
	 <link rel="shortcut icon" href="personal.ico">
	<script src="estilo-menu/jquery.js"></script>
</head>
<body>
<?php
        // SE ABREN LAS SESIONES
        session_start();


        // VALIDAMOS QUE SI LA VARIABLE "ok_user" Y "id_usuario" NO EXISTEN......
        if($_SESSION["ok_user"]==false && $_SESSION["id_usuario"]<=0)
        {

            // .... EJECUTE ESTA ACCION....
            header("location:index.php");
        }
?>

<body>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Realizar Registros <b class="caret"></b></a>
              <ul class="dropdown-menu">
                 <li><a href="Menu-Principal.php"> Menu Principal </a></li>
                 <li><a href="Partido.php"> Registrar Partidos </a></li>
                <li><a href="Candidato.php"> Registrar Candidatos </a></li>
                <li><a href="RegistroVotante.php"> Registrar Ciudadanos </a></li>
                 <li><a href="Elecciones.php"> Aperturar Elecciones </a></li>
              </ul>
            </li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas <b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li><a href="http://localhost/Original/manejadorPartido.php?accion=con"> Partidos Registrados </a></li>
                <li><a href="http://localhost/Original/manejadorCiudadano.php?accion=con"> Ciudadanos Registrados </a></li>
              </ul>
            </li>         
            
          </ul>
   <?php       

echo("<ul class='nav navbar-nav navbar-right'><li><a href='#'><img src='personal.ico' width='15' height='20'>BIENVENIDO ".$_SESSION["nombre_usuario"]."</a></li><li><a href='cerrar_sesion.php'><img src='cerrar.ico' width='15' height='20'>CERRAR SESIÓN</a></li></ul>");

?>

        </div>
      </div>
    </div>
    <br><br><br><br>

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
			print '<a href="http://localhost/Original/manejadorCandidato.php?accion=con">Ver datos</a>';
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