<?php
include 'connect.php';

$fundador1 = $_POST["fundador1"];
$fundador2 = $_POST["fundador2"];
$fundador3 = $_POST["fundador3"];
$fundador4 = $_POST["fundador4"];
$fundador5 = $_POST["fundador5"];

$blank = 0;

	if ($fundador1 == 0){ $blank = 1; }
	
    $museucheck = "SELECT * FROM museu";
	$result = mysql_query($museucheck,$connect);
	while($row = mysql_fetch_array($result)){
		$cod = $row["cod_museu"];
	}
    
	if ($blank != 0){
		echo "<h3>Campos em Branco</h3>";
        header( "Refresh:2; url=http://localhost/BD2/cadastrofm.php", true, 303);
	} else {
		$cadastro = "INSERT INTO fundador_museu (cod_museu, cod_fundador) VALUES ('$cod', '$fundador1')";
		$result2 = mysql_query($cadastro,$connect);
		
		if ($fundador2 != 0){ 
			$cadastro = "INSERT INTO fundador_museu (cod_usuario, telefone) VALUES ('$cod', '$fundador2')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if ($fundador3 != 0){ 
			$cadastro = "INSERT INTO fundador_museu (cod_usuario, telefone) VALUES ('$cod', '$fundador3')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if ($fundador4 != 0){ 
			$cadastro = "INSERT INTO fundador_museu (cod_usuario, telefone) VALUES ('$cod', '$fundador4')";
			$result2 = mysql_query($cadastro,$connect);
			}
		if ($fundador2 != 0){ 
			$cadastro = "INSERT INTO fundador_museu (cod_usuario, telefone) VALUES ('$cod', '$fundador5')";
			$result2 = mysql_query($cadastro,$connect);
			}
				
		if($result2 == true){
		echo "<h3>Cadastro efetuado com sucesso!</h3>";
		header( "Refresh:2; url=http://localhost/BD2/PHP/mainpageAdmin.php", true, 303);
		}else{
			echo "<h3>Falha ao cadastrar</h3>";
            header( "Refresh:2; url=http://localhost/BD2/cadastrofm.php", true, 303);
			 }
		}
?>
