<html>
	<head>
	     <title>
		    InforTurist -  Cadastro de quatos de hotéis
		 </title>
	</head>
	<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
		<center>
			<h3>Cadastro de quartos de hot&eacute;is</h3>
			<form method = "POST" action="" border=1>
		        <h4>Insira os dados para efetuar o cadastro </h4>
		
				Valor de Diaria &nbsp;&nbsp;&nbsp;&nbsp;<input type="Text" name="quartoDiaria"><br>
			    N&uacute;mero &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="Text" name="quartoNumero"><br>
				Categoria <select name="hotelCategoria">
                     <option value="simples solteiro"> Simples solteiro</option>
					 <option value="simples casal"> Simples casal </option>
                     <option value="luxo solteiro"> Luxo solteiro</option>
				     <option value="luxo casal"> Luxo casal</option>
                     <option value="super luxo solteiro"> Super luxo solteiro</option>
				     <option value="super luxo casal"> Super luxo casal</option>
                     <option value="cobertura"> Cobertura</option>  
                     <option value="duplo"> Duplo</option> 
                     <option value="triplo"> Triplo</option> 
                     <option value="quadruplo"> Quadruplo</option> 
                     <option value="Presidencial"> Presidencial</option> 					 
					 </select><br>        			 
			    Hotel &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='HotelId'>";
<?php
include '/PHP/connect.php';
			$sql = "SELECT * FROM hotel";
			$result = mysql_query($sql,$connect);
			while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_hotel"]."'>".$row["nome"]."</option>";
			}					 					
?>							
					</select><br><br>
				<input type="submit" text="OK">
			</form>
		</center>
	</body>
</html>