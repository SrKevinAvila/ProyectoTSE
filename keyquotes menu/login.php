<?php




	$name = $_REQUEST['usuario'] ;
	$password = $_REQUEST['pass'] ;

	$conexion = mysql_connect("localhost", "root") or die ("PROBLEMAS AL CONECTAR CON EL SERVIDOR");

	mysql_select_db("william", $conexion) or die ("ERROR AL TRATAR DE CONECTAR CON LA BASE DE DATOS");



	$standar = mysql_query("SELECT * FROM usuarios where login = '".$name."' and password = '".$password."'", $conexion) ;
	
	@$nombre=mysql_result($standar,0,'login');
	@$passw=mysql_result($standar,0,'password');
	@$rango=mysql_result($standar,0,'tipo');




	
	if($name==$nombre && $password==$passw && $rango=="USUARIO"){
		session_start();
		$_SESSION["ok_user"]=true;
		$_SESSION["id_usuario"]= mysql_result($standar,0,'idusuario');
		$_SESSION["nombre_usuario"]= mysql_result($standar,0,'login');
		header("location: Menu-Principal.php");
	}

		
 
 else if($name==$nombre && $password==$passw && $rango=="ADMINISTRADOR"){
		session_start();
		$_SESSION['ok_admin']=true;
		$_SESSION["id_admin"]= mysql_result($standar,0,'idusuario');
		$_SESSION["nombre_admin"]= mysql_result($standar,0,'login');
		header("location: keyquotes menu/index.php ");
		}
		
 else {

	echo ("<script type='text/javascript'> alert('ERROR EN PASSWORD O NOMBRE DE USUARIO INCORRECTO'); window.location='index.php';</script>");
}



?>