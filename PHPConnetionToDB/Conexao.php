<?php

$hostname = "localhost";
$bancodedados = "sistemacbf";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $bancodedados, $usuario, $senha);

if ($mysqli->connecterrno){
  echo "Falha ao Conectar : (" . mysqli->connecterrno . ") " . mysqli->connect_error;
}
else{
  echo "Sucesso ao Conectar DB!";
}

?>
