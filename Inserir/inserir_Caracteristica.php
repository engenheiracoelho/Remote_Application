<?php
  //session_start();
  include "db.php";

  $con=conexao();
  $ID=$_POST['ID'];
  $Nome=$_POST['Nome'];

  $Tipo=$_POST['Tipo'];
  $Valor_máximo=$_POST['Valor_máximo'];
  $Valor_minimo=$_POST['Valor_minimo'];

  $consulta = "INSERT INTO caracteristica(ID,Nome,Tipo,Valor_máximo,Valor_minimo) VALUES ('$ID','$Nome','$Tipo','$Valor_máximo','$Valor_minimo')";

  $resultado = $con->query($consulta);

  //$resultado->close();
  //$con->close();

  if($resultado){
    header("Location:..\index.php");
  }else{
    header("Location:error.php");
  }
 ?>
