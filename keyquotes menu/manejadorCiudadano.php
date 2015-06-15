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
include './clases/Ciudadano.php';
include './clases/CiudadanoControlador.php';
$alumnoA = new CiudadanoControlador();
$accion = $_REQUEST['accion'] ;
switch ($accion) {
	case 'save':
 	if(isset($_REQUEST['bot'])){
?> 			
 	<?php //me falta agregar el campo  ala tabla y revisar si todo esta bine ahora
    $conexion=mysql_connect('localhost','root','') or die ('No hay conexion a la base de Datos');
    $db=mysql_select_db('tribunal',$conexion) or die ('No existe la base de datos');

   $rutaEnServidor='fotos';
   @$rutaTemporal=$_FILES['imagen']['tmp_name'];
   @$nombreImagen=$_FILES['imagen']['name'];
   $rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
   move_uploaded_file($rutaTemporal,$rutaDestino);

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
?>  

<?php
			print '<a href=\'manejadorCiudadano.php?accion=con\'>Ver datos</a>';
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