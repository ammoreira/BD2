<?php
include 'connect.php';

$nome = $_POST["cidadeNome"];
$populacao = $_POST["cidadePopulacao"];
$uf = $_POST["Estados"];
$blank = 0;
    
	if (empty($nome)){ $blank = 1; }
	if (empty($populacao)){ $blank = 1; }
	
	if($blank != 0){
		echo "<h3>Campos em Branco</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroUsuarioAdmin.php", true, 303);
	}else{	
		$cadastro = "INSERT INTO cidade (nome, uf, populacao) VALUES ('$nome', '$uf', '$populacao')";
		$result = mysql_query($cadastro,$connect);
		
		if($result == true){
			echo "<h3>Cadastro efetuado com sucesso! </h3>";
			header( "Refresh:2; url=http://localhost/BD2/PHP/mainpageAdmin.php", true, 303);
		}else{
			echo "<h3>Falha ao cadastrar cidade</h3>";
            header( "Refresh:2; url=http://localhost/BD2/cadastroCidade.php", true, 303);
	    }
	}
	
?>