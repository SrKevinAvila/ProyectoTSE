<head><title>Resultados</title></head><center>


<?php 
   mysql_connect("localhost", "root", "") or die(mysql_error());
   mysql_select_db("tribunal") or die(mysql_error());
   $result=mysql_query("SELECT * FROM  voto_diputado"); 
?>
<body>
        <div id="header">
            
     <li><a href="reporte.php">Volver a Resultados</a></li>
     <li><a href="menu-Principal.php">Volver a Menu</a></li>
</div>
</body>

<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=1> 


<?php 
    

   while($row = mysql_fetch_array($result)) { 
      @printf("<tr><td><BR>&nbsp;<font color='green' size='4'><center><b>por el diputado '%s' se han obtenido:</b> <font color='darkblue'>'%s'</font> votos</font></center></font></td></TR>",$row["cod_candidato"],$row["clicks"]);
}    
   mysql_free_result($result); 

?> 
