<?php
include 'connect.php';

$diaria = $_POST["quartoDiaria"];
$numero = $_POST["quartoNumero"];
$cat = $_POST["quartoCategoria"];
$hotel = $_POST["hotelId"];
$blank = 0;    
		
	if (empty($diaria)){ $blank = 1; }
	if (empty($numero)){ $blank = 1; }
	
	if($blank != 0){
		echo "<h3>Campos em Branco</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroQuarto.php", true, 303);
	}else{	
		$cadastro = "INSERT INTO quarto (cod_hotel, tipo, valor_diaria, numero) VALUES ('$hotel', '$cat', '$diaria', '$numero')";
		$result = mysql_query($cadastro,$connect);
	
		if($result == true){
			echo "<h3>Cadastro efetuado com sucesso! </h3>";
			header( "Refresh:2; url=http://localhost/BD2/PHP/mainpageAdmin.php", true, 303);
		}else{
			echo "<h3>Falha ao cadastrar quarto de hotel</h3>";
			header( "Refresh:2; url=http://localhost/BD2/cadastroQuarto.php", true, 303);
		}
	}
	

?>