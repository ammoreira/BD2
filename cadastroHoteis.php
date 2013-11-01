<html>
	<head>
	     <title>
		    InforTurist -  Cadastro de Hotéis
		 </title>
	</head>
	<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
		<center>
			<h3>Cadastro de hot&eacute;is</h3>
			<form method = "POST" action="" border=1>
		        <h4>Insira os dados para efetuar o cadastro </h4>
		
			    Nome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="hotelNome"><br>
				Logradouro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="hotelLogradouro"><br>
			    N&uacute;mero &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="hotelNumero"><br>
				Bairro &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="hotelBairro"><br>
			    Cep &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="hotelCep"><br>
				N&uacute;mero de quartos &nbsp;&nbsp;&nbsp;<input type="Text" name="hotelQntQuartos"><br>
				Categoria &nbsp;&nbsp;<select name="hotelCategoria">
                     <option value="0"> 0 Estrelas</option>
					 <option value="1"> 1 Estrela </option>
                     <option value="2"> 2 Estrelas</option>
				     <option value="3"> 3 Estrelas</option>
                     <option value="4"> 4 Estrelas</option>
				     <option value="5"> 5 Estrelas</option>
                     <option value="6"> 6 Estrelas</option>   
					 </select><br>            
			    Cidade &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='CidadeId'>; 
<?php
include '/PHP/connect.php';

			$sql = "SELECT * FROM cidade";
			$result = mysql_query($sql,$connect);
			while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_cidade"]."'>".$row["nome"]."</option>";
			}           			
?>					
            </select><br>
 			Restaurante <select name='restauranteId'>;
<?php			
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

