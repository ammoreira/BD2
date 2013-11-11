<?php
include 'connect.php';

$fone1 = $_POST["Telefone1"];
$fone2 = $_POST["Telefone2"];
$fone3 = $_POST["Telefone3"];
$fone4 = $_POST["Telefone4"];
$fone5 = $_POST["Telefone5"];
$fone6 = $_POST["Telefone6"];
$fone7 = $_POST["Telefone7"];
$fone8 = $_POST["Telefone8"];
$fone9 = $_POST["Telefone9"];
$fone10 = $_POST["Telefone10"];

$blank = 0;

	if (empty($fone1)){ $blank = 1; }
	
    $usercheck = "SELECT * FROM usuario";
	$result = mysql_query($usercheck,$connect);
	while($row = mysql_fetch_array($result)){
		$cod = $row["cod_usuario"];
	}
    
	if ($blank != 0){
		echo "<h3>Campos em Branco</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastroUsuarioTelefone.php", true, 303);
	} else {
		$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone1')";
		$result2 = mysql_query($cadastro,$connect);
		
		if (!empty($fone2)){ 
			$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone2')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if (!empty($fone3)){ 
			$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone3')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if (!empty($fone4)){ 
			$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone4')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if (!empty($fone5)){ 
			$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone5')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if (!empty($fone6)){ 
			$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone6')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if (!empty($fone7)){ 
			$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone7')";
			$result2 = mysql_query($cadastro,$connect);
			}	
		if (!empty($fone8)){ 
			$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone8')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if (!empty($fone9)){ 
			$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone9')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if (!empty($fone10)){ 
			$cadastro = "INSERT INTO usuario_telefone (cod_usuario, telefone) VALUES ('$cod', '$fone10')";
			$result2 = mysql_query($cadastro,$connect);
			}			
		
		if($result2 == true){
		echo "<h3>Cadastro efetuado com sucesso!</h3>";
		header( "Refresh:2; url=http://localhost/BD2/", true, 303);
		}else{
			echo "<h3>Falha ao cadastrar telefones</h3>";
            header( "Refresh:2; url=http://localhost/BD2/cadastroUsuarioTelefone.php", true, 303);
			 }
		}
?>
