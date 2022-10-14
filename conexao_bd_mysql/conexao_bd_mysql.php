<?php

$local_servidor = "localhost";
$bd_procurado = "form_web";

$usuario = "root";
$senha = "";

$conexao = new mysqli($local_servidor, $usuario, $senha, $bd_procurado);

  if($conexao->connect_errno)
  {
      echo "ERRO";
  }
  else
  {
      echo "CONECTADO";
  }
                     
?>

