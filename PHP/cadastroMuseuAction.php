<?php
include 'connect.php';

$nome = $_POST["pontoNome"];
$descricao = $_POST["pontoDescricao"];
$salas = $_POST["pontoSalas"];
$data = $_POST["pontoData"];
$logradouro = $_POST["pontoLogradouro"];
$numero = $_POST["pontoNumero"];
$bairro = $_POST["pontoBairro"];
$cep = $_POST["pontoCep"];
$cidade = $_POST["cidadeId"];

$blank = 0;    

	if (empty($nome)){ $blank = 1; }
	if (empty($descricao)){ $blank = 1; }
	if (empty($salas)){ $blank = 1; }	
	if (empty($data)){ $blank = 1; }	
	if (empty($logradouro)){ $blank = 1; }
	if (empty($numero)){ $blank = 1; }
	if (empty($bairro)){ $blank = 1; }	
	if (empty($cep)){ $blank = 1; }
	
	if($blank != 0){
		echo "<h3>Campos em Branco</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroMuseu.php", true, 303);
	}else{	
		
		$cadastro = "INSERT INTO ponto_turistico (nome, descricao, logradouro, numero, bairro, cep, cod_cidade) VALUES ('$nome','$descricao','$logradouro', '$numero', '$bairro', '$cep', '$cidade')";
		$result = mysql_query($cadastro,$connect);
		if($result == true){
			
			$pontocheck = "SELECT * FROM ponto_turistico";
	        $result2 = mysql_query($pontocheck,$connect);
			while($row = mysql_fetch_array($result2)){
				$cod = $row["cod_ponto_turistico"];
			}
			
			$cadastro = "INSERT INTO museu (cod_ponto_turistico, numero_salas, data_fundacao) VALUES ('$cod','$salas','$data')";
			$result3 = mysql_query($cadastro,$connect);

			if($result3 == true){
				echo "<h3>Cadastro efetuado com sucesso! </h3>";
				header( "Refresh:2; url=http://localhost/BD2/cadastrofm.php", true, 303);
			}else{
				echo "<h3>Falha ao cadastrar</h3>";
				header( "Refresh:2; url=http://localhost/BD2/cadastroMuseu.php", true, 303);
		    }
		}	
	}
?>
