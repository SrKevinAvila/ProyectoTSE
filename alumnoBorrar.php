<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-compatible" content="IE-edge">
	<title></title>
	<link rel="stylesheet"  href="./libs/bootstrap/css/bootstrap.css">
	<script src="./libs/jquery-2.1.0.js"></script>
	<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.css">
	<script src="./libs/validacion/jquery.validate.min.js"></script>
	<script src=".libs/validacion/messages.js"></script>
	<script src=".libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
</head>
<body>
<?php
include './clases/coneccion.php';
include './clases/Candidato.php';
include './clases/CandidatoControlador.php';
$sql= "DELETE FROM candidato WHERE id=".$_REQUEST['id'].";";
print "<div id='dialogo' title='Exito' style='display: none;'>";
print '<p>Mensaje: ';
print consultaA($con,$sql);
print '<span class="badge glyphicon glyphicon-ok "></span></p>';
print '<a href=\'manejadorCandidato.php?accion=con\'>ver datos </a>';
print "</div>"; 
 ?>
 <script>
 $(document).ready(function(){
 	$("#dialogo").dialog();
 });

 </script>

</body>
</html>