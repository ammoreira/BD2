<?php
	include 'connect'

	echo "<html><head><title>InfoTurist</title></head><body>";

	$sql = "SELECT * FROM cidade Where Id = " $_POST["CidadeId"];

	$result = mysql_result($sql,$connect);
 

	while($row =  mysql_fetch_array($result)){
			echo $row["Nome"] + " - "  + $row["estado"] + " - " + $row["populacao"];	
	}
	
	$sql2 = "SELECT * FROM";
	if($_POST[""] == "museu"){
	     $sql2 += "";
	}else if( $_POST[""] == "hotel"){
		$sql2 += "";
	}else if($_POST[""] == "restaurante"){
		$sql2 += "";
	}else if($_POST[""] == "igreja"){
		$sql2 += "";
	}else{
		$sql2 += "";
	}
	&sql2 += " cod_cidade = " + $_POST["CidadeId"];
	
	


?>