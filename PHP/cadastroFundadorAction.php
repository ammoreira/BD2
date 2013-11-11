<?php
include 'connect.php';

$nome = $_POST["fundadorNome"];
$nasc = $_POST["fundadorNasc"];
$obito = $_POST["fundadorObito"];
$profissao = $_POST["fundadorProfissao"];
$nacionalidade = $_POST["fundadorNacionalidade"];

$blank = 0;    

	if (empty($nome)){ $blank = 1; }
	if (empty($nasc)){ $blank = 1; }
	if (empty($profissao)){ $blank = 1; }
	if (empty($nacionalidade)){ $blank = 1; }

	if($blank != 0){
		echo "<h3>Campos em Branco</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroFundador.php", true, 303);
	}else{	
		$cadastro = "INSERT INTO fundador (nome, data_nascimento, data_obito, nacionalidade, profissao) VALUES ('$nome', '$nasc', '$obito', '$profissao', '$nacionalidade')";
		$result = mysql_query($cadastro,$connect);
	
		if($result == true){
			echo "<h3>Cadastro efetuado com sucesso! </h3>";
			header( "Refresh:2; url=http://localhost/BD2/PHP/mainpageAdmin.php", true, 303);
		}else{
			echo "<h3>Falha ao cadastrar restaurante</h3>";
			header( "Refresh:2; url=http://localhost/BD2/cadastroFundador.php", true, 303);
		}
	}
	

?>