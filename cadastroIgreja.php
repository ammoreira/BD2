<html>
	<head>
	     <title>
		    InforTurist -  Cadastro de Igrejas
		 </title>
	</head>
	<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
		<center>
			<h3>Cadastro de ponto tur&iacute;stico - Igreja</h3>
			<form method = "POST" action="PHP/cadastroIgrejaAction.php" border=1>
		        <h4>Insira os dados para efetuar o cadastro </h4>
		
			    Nome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="pontoNome"><br>
				Descri&ccedil;&atilde;o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="pontoDescricao"><br>
				Arquitetura &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="pontoArquitetura"><br>
				Data de Constru&ccedil;&atilde;o &nbsp;&nbsp;&nbsp;<input type="date" name="pontoData"><br>
				Logradouro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="pontoLogradouro"><br>
			    N&uacute;mero &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="pontoNumero"><br>
				Bairro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="pontoBairro"><br>
			    Cep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="pontoCep"><br>         
			    Cidade &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='CidadeId'>";
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