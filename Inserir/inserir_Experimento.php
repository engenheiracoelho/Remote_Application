<?php
  //session_start();
  include "db.php";

  $con=conexao();
  $ID=$_POST['ID'];
  $Nome=$_POST['Nome'];

  $Prioridade=$_POST['Prioridade'];

  $consulta = "INSERT INTO experimento(ID,Nome,Prioridade) VALUES ('$ID','$Nome','$Prioridade')";

  $resultado = $con->query($consulta);

  //$resultado->close();
  //$con->close();

  if($resultado){
    header("Location:..\index.php");
  }else{
    header("Location:error.php");
  }
 ?>
