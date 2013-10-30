<?php
	include 'connect.php';

	echo "<html><head><title>InfoTurist</title></head><body><br><br><br><br><div><center>";

	$sql = "SELECT * FROM cidade WHERE cod_cidade=".$_POST["CidadeId"];

	$result = mysql_query($sql,$connect);
 

	while($row =  mysql_fetch_array($result)){
	
			echo "<h2>".$row["nome"]." - ".$row["uf"]." - com popula&ccedil;&atilde;o de  ".$row["populacao"]." pessoas</h2>";	
	}
	echo "</div></center>";
	$sql3 = "SELECT * FROM ponto_turistico WHERE cod_cidade = ".$_POST["CidadeId"];
	$result3 = mysql_query($sql3,$connect);
	while($row = mysql_fetch_array($result3)){
		$sql2 = "SELECT * FROM ".$_POST["Categoria"]." WHERE cod_ponto_turistico = ".$row["cod_ponto_turistico"];
	   
		$result2 = mysql_query($sql2,$connect);
	
		while($row2 = mysql_fetch_array($result2)){
			echo "<p><h4>".$row["nome"]."</h4><br><p><h5>".$row["descricao"]."</h5></p></p>";
			if($row2["cod_restaurante"]!=null){
				$sql3 = "SELECT * FROM restaurante WHERE cod_restaurante = ".$row2["cod_restaurante"];
				$result3 = mysql_query($sql3,$connect);
				while($row3 = mysql_fetch_array($result3)){
					echo"restaurantrenkvnovgbisbsvspn";
				}	
			}
		}
	}
echo "</body></html>";

?>