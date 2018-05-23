<?php
  //session_start();
  include "db.php";

  $con=conexao();
  $ID=$_POST['ID'];
  $Marca=$_POST['Marca'];
  $Modelo=$_POST['Modelo'];
  $Experimento_ID=$_POST['Experimento_ID'];
  $Datasheet=$_POST['Datasheet'];

  $consulta = "INSERT INTO placa(ID,Marca,Modelo,Experimento_ID,Datasheet) VALUES ('$ID','$Marca','$Modelo','$Experimento_ID','$Datasheet')";

  $resultado = $con->query($consulta);

  //$resultado->close();
  //$con->close();

  if($resultado){
    header("Location:..\index.php");
  }else{
    header("Location:error.php");
  }
 ?>
