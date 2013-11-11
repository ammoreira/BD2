<html>
	<head>
	     <title>
		    InforTurist -  Cadastro de casas de show
		 </title>
	</head>
	<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
		<center>
			<h3>Cadastro de casas de show</h3>
			<form method = "POST" action="PHP/cadastroCasaShowAction.php" border=1>
		        <h4>Insira os dados para efetuar o cadastro </h4>
		
				Nome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="pontoNome"><br>
				Descri&ccedil;&atilde;o &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="pontoDescricao"><br>
				Logradouro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="pontoLogradouro"><br>
			    N&uacute;mero &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="pontoNumero"><br>
				Bairro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="pontoBairro"><br>
			    Cep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="pontoCep"><br>
				Descri&ccedil;&atilde;o do show &nbsp;&nbsp;&nbsp;<input type="Text" name="pontoDescricaoShow"><br>
				Dia de fechamento &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="diaFechamento">
                     <option value="Segunda-Feira">Segunda-Feira</option>
					 <option value="Terça-Feira">Ter&ccedil;a-Feira</option>
                     <option value="Quarta-Feira">Quarta-Feira</option>
				     <option value="Quinta-Feira">Quinta-Feira</option>
                     <option value="Sexta-Feira">Sexta-Feira</option>
				     <option value="Sábado"> S&aacute;bado</option>
                     <option value="Domingo"> Domingo</option>   
					 </select><br>    
				Hor&aacute;rio de in&iacute;cio do show &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" name="horarioShow"><br>					 
			    Cidade &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='CidadeId'>;				
<?php
include '/PHP/connect.php';

			$sql = "SELECT * FROM cidade";
			$result = mysql_query($sql,$connect);
			while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_cidade"]."'>".$row["nome"]."</option>";
			}           			
?>					
            </select><br>
 			Restaurante &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='restauranteId'>;
<?php			
			echo "<option value='0'>Nenhum</option>";
			$sql = "SELECT * FROM restaurante";
			$result = mysql_query($sql,$connect);
			while($row = mysql_fetch_array($result)){
					echo "<option value='".$row["cod_restaurante"]."'>".$row["nome"]."</option>";
				}					 					
?>				
			</select><br><br>
				<input type="submit" text="OK">
			</form>
		</center>
	</body>
</html>

