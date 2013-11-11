<?php
include 'connect.php';

$nome = $_POST["restauranteNome"];
$logradouro = $_POST["restauranteLogradouro"];
$numero = $_POST["restauranteNumero"];
$bairro = $_POST["restauranteBairro"];
$cep = $_POST["restauranteCep"];
$preco = $_POST["restaurantePreco"];
$espec = $_POST["restauranteEspecialidade"];
$cidade = $_POST["CidadeId"];
$categoria = $_POST["restauranteCategoria"];

$blank = 0;    

	if (empty($nome)){ $blank = 1; }
	if (empty($logradouro)){ $blank = 1; }
	if (empty($numero)){ $blank = 1; }
	if (empty($bairro)){ $blank = 1; }	
	if (empty($cep)){ $blank = 1; }
	if (empty($preco)){ $blank = 1; }
	if (empty($espec)){ $blank = 1; }
	if (empty($categoria)){ $blank = 1; }
	
	if($blank != 0){
		echo "<h3>Campos em Branco</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroRestaurante.php", true, 303);
	}else{	
		$cadastro = "INSERT INTO restaurante (cod_cidade, categoria, nome, logradouro, numero, bairro, cep, preco_medio, especialidade_cozinha) VALUES ('$cidade', '$categoria', '$nome', '$logradouro', '$numero', '$bairro', '$cep', '$preco', '$espec')";
		$result = mysql_query($cadastro,$connect);
	
		if($result == true){
			echo "<h3>Cadastro efetuado com sucesso! </h3>";
			header( "Refresh:2; url=http://localhost/BD2/PHP/mainpageAdmin.php", true, 303);
		}else{
			echo "<h3>Falha ao cadastrar restaurante</h3>";
			header( "Refresh:2; url=http://localhost/BD2/cadastroRestaurante.php", true, 303);
		}
	}
	

?>