<?php



include 'connect.php';

$test = "SELECT * FROM usuario WHERE login = '".$_POST["txtUser"]."'";
echo $test;

$result = mysql_query($test,$connect);


if($result!=null){
	while($row = mysql_fetch_array($result)){
		if($row["senha"] == $_POST["txtSenha"]){
			if($row["tipo"] == 1){
				header("Location:mainpageAdmin.php");
			}else{
				header("Location:mainpageCliente.php");
			}
		}
	}
}
?>