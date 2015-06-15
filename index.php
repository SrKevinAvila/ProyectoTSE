<html> 
<head> 

<?php

session_start();

if(@$_SESSION["ok_user"]==true){

	header("location:Menu-Principal.php");
}else if(@$_SESSION["ok_admin"]==true){
	header("location:keyquotes menu/Indexx.php");
}
?>
 	<meta charset="UTF-8" /> 
	<title> Sistema de Votos
 	</title>
 	<link rel="stylesheet" type="text/css" href="stylelogin.css" />
 	<link rel="shortcut icon" href="logo.jpg">
 	<script type="text/javascript">
 		document.oncontextmenu=new Function("return false"); /*este codigo ayuda a que no puedan dar click derecho*/
 	</script>

 	<meta http-equiv ="Pragma" content ="no-cache" />
    <script type="text/javascript" >
        {        if (history.forward(1))
            location.replace(history.forward(1))
    }
    </script>
</head>

<div id="wrapper">

<form name="form1" class="login-form" method="post" action="login.php">
		<div class="header">
		<img src="logo.png" width="250" height="90" align="center" hspace="30" vspace="30">
		<center><h1 style="font-family:arial;font-size:25px;font-weight:bold;"></h1></center>
		<center><span style="font-family:calibri;font-size:20px;">Estás en el Sistema de Registros y Control de Candidatos del TSE
		<br><br> 
		<span style="font-size:12px;">Como Administrador se te recomienda recordar siempre tu Contrase&ntilde;a</span></span></center>
		</div>
	
		<div class="content"
>		<input name="usuario" type="text" class="input username" placeholder="Coloca tu Username" />
		<div class="user-icon"></div>
		<input name="pass" type="password" class="input password" placeholder="Introduce tu Password" />
		<div class="pass-icon"></div>		
		</div>

		<div class="footer">
		<center><input type="submit"  value="Iniciar Sesi&oacute;n" onclick="usrpas()" class="button">
         </center>
		</div>
	
	</form>
<br><br>
</div>
<div class="gradient"></div>


</body>
</html>