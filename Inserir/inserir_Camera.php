<?php
  //session_start();
  include "db.php";

  $con=conexao();
  $ID=$_POST['ID'];
  $IP=$_POST['IP'];
  $Marca=$_POST['Marca'];
  $Modelo=$_POST['Modelo'];
  $Datasheet=$_POST['Datasheet'];
  $Resolucao=$_POST['Resolucao'];
  
  $consulta = "INSERT INTO camera(ID,IP,Modelo,Marca,Resolucao,Datasheet) VALUES ('$ID','$IP','$Modelo','$Marca','$Resolucao','$Datasheet')";
  print_r($consulta);
  /*$resultado = $con->query($consulta);

  //$resultado->close();
  //$con->close();

  if($resultado){
    header("Location:..\index.php");
  }else{
    header("Location:error.php");
  }*/
 ?>
