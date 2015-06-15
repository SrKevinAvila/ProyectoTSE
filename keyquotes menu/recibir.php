<?php
$conexion=mysql_connect('localhost','root','') or die ('No hay conexion a la base de Datos');
$db=mysql_select_db('tribunal',$conexion) or die ('No existe la base de datos');

$rutaEnServidor='imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$nom=$_POST['nombre'];
$pres=$_POST['presidente'];

$sql="INSERT INTO partido (Nombre,Imagen,Presidente) values ('.$nom','.$rutaDestino','.$pres')";
$res=mysql_query($sql,$conexion);

if ($res) {
	echo "Insercion con exito";
}else{
	echo "No se puede Insertar";
}
?>