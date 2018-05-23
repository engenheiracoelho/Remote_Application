<?php
//  session_start();
  include "db.php";

  $con=conexao();
  $ID=$_POST['ID'];
  $Nome=$_POST['Nome'];
  $Sobrenome=$_POST['Sobrenome'];
  $Email=$_POST['Email'];
  $Login=$_POST['Login'];
  $Senha=$_POST['Senha'];

  $consulta = "INSERT INTO pessoa(ID,Nome,Sobrenome,Email,Login,Senha) VALUES ('$ID','$Nome','$Sobrenome','$Email','$Login','$Senha')";

  print_r($consulta);

  $resultado = $con->query($consulta);

  //$resultado->close();
  //$con->close();

  if($resultado){
    header("Location:..\index.php");
  }else{
    header("Location:error.php");
  }
 ?>
