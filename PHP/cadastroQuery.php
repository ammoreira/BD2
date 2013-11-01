<?php

$item = $_POST["item"];
$acao = $_POST["action"];

switch ($item){

    case 1:
      //usuario
	  if($acao == 1){ header("Location:../cadastroUsuarioAdmin.php"); }
	  else if ($acao == 2){ header("Location:../delete.php"); }
	  else { header("Location:../update.php"); }
      break;
   
    case 2:
      //cidade 
	  if($acao == 1){ header("Location:../cadastroCidade.php"); }
	  else if ($acao == 2){ header("Location:../delete.php"); }
	  else { header("Location:../update.php"); }
      break;

    case 3:
      //hotel
	  if($acao == 1){ header("Location:../cadastroHoteis.php"); }
	  else if ($acao == 2){ header("Location:../delete.php"); }
	  else { header("Location:../update.php"); }
      break;
	  
    case 4:
      //quarto de hotel
	  if($acao == 1){ header("Location:../cadastroQuarto.php"); }
	  else if ($acao == 2){ header("Location:../delete.php"); }
	  else { header("Location:../update.php"); }
      break;
	  
    case 5:
      //restaurante      
	  if($acao == 1){ header("Location:../cadastroRestaurante.php"); }
	  else if ($acao == 2){ header("Location:../delete.php"); }
	  else { header("Location:../update.php"); }
      break;
	  
	case 6:
      //igreja
	  if($acao == 1){ header("Location:../cadastroIgreja.php"); }
	  else if ($acao == 2){ header("Location:../delete.php"); }
	  else { header("Location:../update.php"); }
      break;
	  
    case 7:
	  //museu
      if($acao == 1){ header("Location:../cadastroMuseu.php"); }
	  else if ($acao == 2){ header("Location:../delete.php"); }
	  else { header("Location:../update.php"); }
	  break;
	  
    case 8:
	  //fundador de museu
      if($acao == 1){ header("Location:../cadastroFundador.php"); }
	  else if ($acao == 2){ header("Location:../delete.php"); }
	  else { header("Location:../update.php"); }
      break;
	  
    case 9:
      //casa de show   
      if($acao == 1){ header("Location:../cadastroCasaShow.php"); }
	  else if ($acao == 2){ header("Location:../delete.php"); }
	  else { header("Location:../update.php"); }
      break;
  }
?>