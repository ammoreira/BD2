<?php
include 'connect.php';

$nome = $_POST["usuarioNome"];
$logradouro = $_POST["usuarioLogradouro"];
$numero = $_POST["usuarioNumero"];
$bairro = $_POST["usuarioBairro"];
$cep = $_POST["usuarioCep"];
$email = $_POST["usuarioEmail"];
$login = $_POST["usuarioLogin"];
$password = $_POST["usuarioSenha"];
$cpassword = $_POST["usuarioSenhaConf"];
$tipo = $_POST["tipoUsuario"];
$blank = 0;
$senhaDivergente = 0;
$loginExistente = 0;	
    
	if (empty($nome)){ $blank = 1; }
	if (empty($logradouro)){ $blank = 1; }
	if (empty($numero)){ $blank = 1; }
	if (empty($bairro)){ $blank = 1; }
	if (empty($email)){ $blank = 1; }
	if (empty($login)){ $blank = 1; }
	if (empty($password)){ $blank = 1; }
	if (empty($cpassword)){ $blank = 1; }
	if($password != $cpassword ){ $senhaDivergente = 1; }
	
    $logincheck = "SELECT * FROM usuario";
    $result = mysql_query($logincheck,$connect);
	while($row = mysql_fetch_array($result)){
		if($row["login"] == $login ){
			$loginExistente = 1;
		}
	}

	if($blank != 0){
		echo "<h3>Campos em Branco</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroUsuarioAdmin.php", true, 303);
	}else if($senhaDivergente != 0){
	    echo "<h3>Password divergente</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroUsuarioAdmin.php", true, 303);
	}else if ($loginExistente != 0){
		echo "<h3>login j&aacute; cadastrada, por favor escolher outro </h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroUsuarioAdmin.php", true, 303);
	}else{	
		$cadastro = "INSERT INTO usuario (nome, logradouro, numero, bairro, cep, tipo, login, senha, email) VALUES ('$nome', '$logradouro', '$numero', '$bairro', '$cep', '$tipo', '$login', '$password', '$email')";
		$result2 = mysql_query($cadastro,$connect);
	}
	
	if($result2 == true){
		echo "<h3>Cadastro efetuado com sucesso! Cadastre telefones para usario</h3>";
		
		href="test_get.php?subject=PHP&web=W3schools.com">Test $GET
		header( "Refresh:2; href=../cadastroUsuarioTelefone.php?subject=$login">$GET, true, 303);
	//	header( "Refresh:2; url=http://localhost/BD2/cadastroUsuarioTelefone.php", true, 303);
		
	}else{
			echo "<h3>Falha ao cadastrar usu&aacute;rio</h3>";
            header( "Refresh:2; url=http://localhost/BD2/cadastroUsuarioAdmin.php", true, 303);
	     }
?>