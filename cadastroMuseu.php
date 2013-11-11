<html>
	<head>
	     <title>
		    Inforturismo -  Cadastro de museus
		 </title>
	</head>
	<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
		<center>
			<h3>Cadastro de ponto tur&iacute;stico - museu</h3>
			<form method = "post" action="PHP/cadastroMuseuAction.php" border=1>
		        <h4>Insira os dados para efetuar o cadastro </h4>
		
			    Nome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="pontoNome"><br>
				Descri&ccedil;&atilde;o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pontoDescricao"><br>
				N&uacute;mero de salas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="int" name="pontoSalas"><br>
				Data de funda&ccedil;&atilde;o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="pontoData"><br>
				Logradouro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pontoLogradouro"><br>
			    N&uacute;mero &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="pontoNumero"><br>
				Bairro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pontoBairro"><br>
			    Cep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="pontoCep"><br>         
			    Cidade &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='cidadeId'>";
<?php
include '/PHP/connect.php';
			$sql = "select * from cidade";
			$result = mysql_query($sql,$connect);
			while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_cidade"]."'>".$row["nome"]."</option>";
			}					 					
?>					
			</select><br>
            			
			<br>
				<input type="submit" text="ok">
			</form>
		</center>
	</body>
</html>