<?php
echo "<html>";
echo "<head>";
echo "		<title>";
echo "		   InforTurist"; 
echo "		</title>";
echo "</head>" ;
echo "	<body>";
echo "	   <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
		<center><form action='ResultQuery.php' method='post'>
		    <img/><br><br>
			<select name='Categoria'>
                     <option value='museu'>Museus</option>
                     <option value='restaurante'>Restaurantes</option>
					 <option value='hotel'>Hoteis</option>
					 <option value='igreja'>Igrejas</option>
					 <option value='casa_de_show'>Casas de show</option>
			</select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name='CidadeId'>";
			include 'connect.php';
			$sql = "SELECT * FROM cidade";
			$result = mysql_query($sql,$connect);
			while($row = mysql_fetch_array($result)){
				echo "  <option value='".$row["cod_cidade"]."'>".$row["nome"]."</option>";
			}
			echo "</select><br><br><input type='submit'></form>";

	echo"	</center>
	</body>
	
</html>";
?>