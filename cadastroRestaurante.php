<html>
	<head>
	     <title>
		    InforTurist -  Cadastro de Restaurante
		 </title>
	</head>
	<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
		<center>
			<h3>Cadastro de restaurante</h3>
			<form method = "POST" action="" border=1>
		        <h4>Insira os dados para efetuar o cadastro </h4>
		
			    Nome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="restauranteNome"><br>
				Logradouro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="restauranteLogradouro"><br>
			    N&uacute;mero &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="restauranteNumero"><br>
				Bairro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="restauranteBairro"><br>
			    Cep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="restauranteCep"><br>
				Pre&ccedil;o M&eacute;dio &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="float" name="restaurantePreco"><br>
				Especialidade &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="restauranteEspecialidade"><br>
			    Cidade &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='CidadeId'>";
<?php
include '/PHP/connect.php';
			$sql = "SELECT * FROM cidade";
			$result = mysql_query($sql,$connect);
			while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_cidade"]."'>".$row["nome"]."</option>";
			}					 					
?>							
			</select><br><br>
				<input type="submit" text="OK">
			</form>
		</center>
	</body>
</html>