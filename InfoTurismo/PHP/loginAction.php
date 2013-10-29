<?php

include 'connect';

$sql = "SELECT * FROM <USER TABLE> WHERE <USER> = '"+$_POST["txtUser"]+"'";
&result = mysql_query(&sql,&connect);


while($row = mysqli_fetch_array($result)){
	if(&row["<camponobandi>"] == $_POST["txtSenha"]){
		header("Location:mainpage.php");
	}
}
?>