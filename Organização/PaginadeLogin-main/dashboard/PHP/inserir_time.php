<?php

require_once('../../PHP/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $escudo = $_POST["escudo"];
    $nome_time = $_POST["nome_time"];
    $estadio_time = $_POST["estadio_time"];
    $tecnico_time = $_POST["tecnico_time"];
    $quant_titulos = $_POST["quant_titulos"];

    $insert_query = "INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $mysqli->prepare($insert_query);
    
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $mysqli->error);
    }
    
    $stmt->bind_param("ssssi", $escudo, $nome_time, $estadio_time, $tecnico_time, $quant_titulos);
    
    if ($stmt->execute()) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $stmt->error;
    }
    
    $stmt->close();
}
?>