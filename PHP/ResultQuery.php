<?php
	include 'connect.php';

	echo "<html><head><title>InfoTurist</title></head><body><br><br><br><br><div><center>";

	$sql = "SELECT * FROM cidade WHERE cod_cidade=".$_POST["CidadeId"];
	$result = mysql_query($sql,$connect);
 	while($row =  mysql_fetch_array($result)){
		echo "<h2>".$row["nome"]." - ".$row["uf"]." - com popula&ccedil;&atilde;o de  ".$row["populacao"]." pessoas</h2>";	
	}
	echo "</div></center>";
	
$categoria = $_POST["Categoria"];

/*
switch($categoria){
	case hotel:
//hotel
	$sql = "SELECT * FROM hotel WHERE cod_cidade = ".$_POST["CidadeId"];
    $result = mysql_query($sql,$connect);
	while($row = mysql_fetch_array($result3)){
		echo "<p><h3>".$row["nome"]."</h3></p><br>";
		echo "<p><h4>Logradouro &nbsp;".$row["logradouro"] "&nbsp;&nbsp;Numero&nbsp;&nbsp;".$row["numero"] "&nbsp;&nbsp;Bairro&nbsp;&nbsp;".$row["bairro"] "&nbsp;&nbsp;Cep".$row["Cep"]"<br></h4></p>";
		//echo "<p><h4>Estrelas&nbsp;".$row["categoria"]."&nbsp;&nbsp;Numero de quartos".$row["num_de_quartoso"]"</h4></p><br><br>";
		
	}
		
	//	$sql2 = "SELECT * FROM ".$_POST["Categoria"]." WHERE cod_ponto_turistico = ".$row["cod_ponto_turistico"];
	//   	$result2 = mysql_query($sql2,$connect);
	//	while($row2 = mysql_fetch_array($result2)){
	//		echo "<p><h4>".$row["nome"]."</h4><br><p><h5>".$row["descricao"]."</h5></p></p>";
	//		if($row2["cod_restaurante"]!=null){
	//			$sql3 = "SELECT * FROM restaurante WHERE cod_restaurante = ".$row2["cod_restaurante"];
	//			$result3 = mysql_query($sql3,$connect);
	//			while($row3 = mysql_fetch_array($result3)){
	//				echo"restaurantrenkvnovgbisbsvspn";
	//			}	
	//		}
	//	}
	//}



	break;
   
    case 2:
//restaurante	
    
	break;

    case 3:
//casa de show
	break;
	  
    case 4:
//igreja

	break;
	  
    case 5:
//museu
    
	break;
} 
	
//	$sql3 = "SELECT * FROM ponto_turistico WHERE cod_cidade = ".$_POST["CidadeId"];
//	$result3 = mysql_query($sql3,$connect);
//	while($row = mysql_fetch_array($result3)){
//		$sql2 = "SELECT * FROM ".$_POST["Categoria"]." WHERE cod_ponto_turistico = ".$row["cod_ponto_turistico"];
//	   	$result2 = mysql_query($sql2,$connect);
//		while($row2 = mysql_fetch_array($result2)){
//			echo "<p><h4>".$row["nome"]."</h4><br><p><h5>".$row["descricao"]."</h5></p></p>";
//			if($row2["cod_restaurante"]!=null){
//				$sql3 = "SELECT * FROM restaurante WHERE cod_restaurante = ".$row2["cod_restaurante"];/
//				$result3 = mysql_query($sql3,$connect);
//				while($row3 = mysql_fetch_array($result3)){
//					echo"restaurantrenkvnovgbisbsvspn";
//				}	
//			}
//		}
//	}

*/
?>