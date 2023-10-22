<?php
// Função para ler os registros da tabela 'usuarios'
include("../../PHP/config.php");
function lerTimes() {
    global $mysqli; // Tornando a conexão disponível dentro da função

    $sql = "SELECT id_time, nome_time, estadio, tecnico, quantidade_titulos FROM timee";
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
        $times = array();
        while ($row = $result->fetch_assoc()) {
            $times[] = $row;
        }
        return $times;
    } else {
        return array(); // Retorna um array vazio se não houver registros
    }
}