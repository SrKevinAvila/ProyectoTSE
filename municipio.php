<?php
	if(isset($_REQUEST["id"])){
		$cn=mysql_connect("localhost","root","");
		mysql_select_db("tse");
		$c=mysql_query("select * from mun_municipio where dep_mun_id='".$_REQUEST['id']."'");
		if(mysql_num_rows($c)>0){
			echo "<select name='municipio'>";
			for($i=0;$i<mysql_num_rows($c);$i++){
				echo "<option value='".mysql_result($c,$i,'mun_id')."'>".mysql_result($c,$i,'mun_nombre')."</option>";
			}
			echo "</select>";
		}else{
			echo "NO SE ENCONTRO DATOS";
		}
	}
?>