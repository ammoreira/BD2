<?php
include 'connect.php';

$nome = $_POST["hotelNome"];
$logradouro = $_POST["hotelLogradouro"];
$numero = $_POST["hotelNumero"];
$bairro = $_POST["hotelBairro"];
$cep = $_POST["hotelCep"];
$nquartos = $_POST["hotelQntQuartos"];
$categoria = $_POST["hotelCategoria"];
$cidade = $_POST["CidadeId"];
$restaurante = $_POST["restauranteId"];
$blank = 0;    
		
	if (empty($nome)){ $blank = 1; }
	if (empty($logradouro)){ $blank = 1; }
	if (empty($numero)){ $blank = 1; }
	if (empty($bairro)){ $blank = 1; }
	if (empty($cep)){ $blank = 1; }
	
	if($blank != 0){
		echo "<h3>Campos em Branco</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroHoteis.php", true, 303);
	}else{	
		if($restaurante == '0'){
			$cadastro = "INSERT INTO hotel (cod_cidade, num_de_quartos, categoria, logradouro, numero, bairro, Cep, nome) VALUES ('$cidade', '$nquartos', '$categoria', '$logradouro', '$numero', '$bairro', '$cep', '$nome')";
			$result = mysql_query($cadastro,$connect);
		
			if($result == true){
				echo "<h3>Cadastro efetuado com sucesso! </h3>";
				header( "Refresh:2; url=http://BD2/PHP/mainpageAdmin.php", true, 303);
			}else{
				echo "<h3>Falha ao cadastrar hotel</h3>";
				header( "Refresh:2; url=http://localhost/BD2/cadastroHotel.php", true, 303);
			}
		}else{
			$cadastro = "INSERT INTO hotel (cod_cidade, num_de_quartos, categoria, logradouro, numero, bairro, Cep, cod_restaurante, nome) VALUES ('$cidade', '$nquartos', '$categoria', '$logradouro', '$numero','$bairro', '$cep', '$restaurante', '$nome')";
			$result = mysql_query($cadastro,$connect);
			if($result == true){
				echo "<h3>Cadastro efetuado com sucesso! </h3>";
				header( "Refresh:2; url=http://localhost/BD2/PHP/mainpageAdmin.php", true, 303);
			}else{
				echo "<h3>Falha ao cadastrar hotel</h3>";
				header( "Refresh:2; url=http://localhost/BD2/cadastroHoteis.php", true, 303);
			}
		}
	}
	

?>