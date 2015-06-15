<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ciudadanos Registrados</title>
	<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet"  href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src="./libs/validacion/messajes.js"></script>
	<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<script src="estilo-menu/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="personal.css">
	<script src="estilo-menu/jquery.js"></script>
    <link rel="shortcut icon" href="personal.ico">
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
                <li><a href="http://localhost/Original/manejadorCandidato.php?accion=con"> Candidatos Regristrados </a></li><br>
                <center><li> -Reporte de Votos- </a></li></center><br>
                <li><a href="reporte.php"> Reporte General </a></li>
                <li><a href="reporteAlcalde.php"> Reporte de Votos Alcalde </a></li>
                <li><a href="reporteDiputado.php"> Reporte de Votos Diputados </a></li>
                <li><a href="reportePresidente.php"> Reporte de Votos Presidenciales </a></li>
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
include './clases/Ciudadano.php';
include './clases/CiudadanoControlador.php';



$dui = $_REQUEST['dui'] ;
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("tribunal") or die (mysql_error());

$alumnoA = new CiudadanoControlador();
$accion = $_REQUEST['accion'] ;
switch ($accion) {
	case 'save':

 	if(isset($_REQUEST['bot'])){

    $consulta = mysql_query("SELECT dui FROM ciudadano where dui ='$dui'");
    
  if (mysql_num_rows($consulta) >0) {
    echo "<script> alert('dui ya existe'); window.location='RegistroVotante.php'; </script>";
  }else{
 //me falta agregar el campo  ala tabla y revisar si todo esta bine ahora
 
    $conexion=mysql_connect('localhost','root','') or die ('No hay conexion a la base de Datos');
    $db=mysql_select_db('tribunal',$conexion) or die ('No existe la base de datos');

    

   $rutaEnServidor='fotos';
   @$rutaTemporal=$_FILES['imagen']['tmp_name'];
   @$nombreImagen=$_FILES['imagen']['name'];
   $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
   @move_uploaded_file($rutaTemporal,$rutaDestino);

   @$ape=$_POST['apellido'];
   @$nom=$_POST['nombre'];
   @$dui=$_POST['dui'];
   @$gen=$_POST['genero'];
   @$ven=$_POST['vencimiento'];
   @$dir=$_POST['direccion'];
   @$dep=$_POST['depto'];
   @$mun=$_POST['municipio'];

   $sql="INSERT INTO ciudadano (apellido,nombre,dui,fotografia,genero,vencimiento,direccion,depto,municipio) values ('$ape','$nom','$dui','$rutaDestino','$gen','$ven','$dir','$dep','$mun')";
   $res=mysql_query($sql,$conexion);

   if ($res) {
	 echo "Insercion con exito";
    }else{		
     echo "No se puede Insertar";
    }

			print '<a href="http://localhost/Original/manejadorCiudadano.php?accion=con">Ver datos</a>';
      }
		}else{
				print'no se han enviado datos';

				}

		break;
	case 'con':
		$sql = 'SELECT * FROM ciudadano';
		$datoss= consultaD($con,$sql);
		print imprimetabla($datoss,"ciudadano","table table-bordered",1);
		break;

	default:
		print " no hay que realizar";
		break;

}

?>
</body>
</html>