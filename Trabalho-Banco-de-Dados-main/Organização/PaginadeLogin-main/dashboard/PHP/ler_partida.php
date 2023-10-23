<?php
// Inclua o arquivo de configuração do banco de dados
include("../../PHP/config.php");

// Função para ler os registros da tabela 'partidas'
function lerPartidas() {
    global $mysqli; // Tornando a conexão disponível dentro da função

    $sql = "SELECT id_partidas, campeonato_jogar, data_partida, time_um, time_dois, estadio, cidade, uf FROM partidas";
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
        $partidas = array();
        while ($row = $result->fetch_assoc()) {
            $partidas[] = $row;
        }
        return $partidas;
    } else {
        return array(); // Retorna um array vazio se não houver registros
    }
}
?>
