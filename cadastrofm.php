	<html>
	<head>
	     <title>
		    Inforturismo -  Cadastro de museus
		 </title>
	</head>
	<body>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
		<center>
	    <h3>Cadastro de fundadores de um museu.</h3>
			
			<form method = "POST" action="PHP/cadastrofmAction.php" border=1>
		        <h4>Insira os dados para efetuar o cadastro</h4><br>
				<h4>Apenas o campo 1 &eacute; obrigat&oacute;rio</h4><br>
			    
				Fundador-1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="fundador1">
				<?php
				include '/php/connect.php';
				echo "<option value='0'>Vazio</option>";
				$sql = "select * from fundador";
				$result = mysql_query($sql,$connect);
				while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_fundador"]."'>".$row["nome"]."</option>";
				}					 					
				?>
				</select><br>
				Fundador-2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="fundador2">
				<?php
				include '/php/connect.php';
				echo "<option value='0'>Vazio</option>";
				$sql = "select * from fundador";
				$result = mysql_query($sql,$connect);
				while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_fundador"]."'>".$row["nome"]."</option>";
				}					 					
				?>
				</select><br>
				Fundador-3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="fundador3">
				<?php
				include '/php/connect.php';
				echo "<option value='0'>Vazio</option>";
				$sql = "select * from fundador";
				$result = mysql_query($sql,$connect);
				while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_fundador"]."'>".$row["nome"]."</option>";
				}					 					
				?>
				</select><br>
				Fundador-4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="fundador4">
				<?php
				include '/php/connect.php';
				echo "<option value='0'>Vazio</option>";
				$sql = "select * from fundador";
				$result = mysql_query($sql,$connect);
				while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_fundador"]."'>".$row["nome"]."</option>";
				}					 					
				?>
				</select><br>
				Fundador-5 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="fundador5">
				<?php
				include '/php/connect.php';
				echo "<option value='0'>Vazio</option>";
				$sql = "select * from fundador";
				$result = mysql_query($sql,$connect);
				while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_fundador"]."'>".$row["nome"]."</option>";
				}					 					
				?>			
            	</select><br>		
			<br><br>
				<input type="submit" text="ok">
			</form>
		</center>
	</body>
</html>
	
	
	
