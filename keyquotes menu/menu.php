
	
<nav>
			<ul>
				<a href="index.php"><li>Inicio</li></a>
				<a href="Partido.php"><li>Partidos</li></a>
				<a href="candidato.php"><li>Candidatos</li></a>
			</ul>
			
			<ul>
				<a href="votante.php"><li>Ciudadanos</li></a>
				<a href='http://www.keyquotes.es'><li>Resultados</li></a>
				<a href='http://www.keyquotes.es'><li></li></a>
			</ul>

			echo("<ul class='nav navbar-nav navbar-right'><li><a href='#'><img src='personal.ico' width='20' height='20'>BIENVENIDO ".$_SESSION["nombre_usuario"]."</a></li><li><a href='cerrar_sesion.php'><img src='cerrar.ico' width='20' height='20'>CERRAR SESIÓN</a></li></ul>");
		
		</nav>

