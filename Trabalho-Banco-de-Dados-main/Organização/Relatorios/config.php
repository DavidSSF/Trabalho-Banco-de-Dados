<?php

$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "sistemacbf";

global $mysqli; // Tornando a conexão disponível dentro da função


$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_error) {
    die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}

?>