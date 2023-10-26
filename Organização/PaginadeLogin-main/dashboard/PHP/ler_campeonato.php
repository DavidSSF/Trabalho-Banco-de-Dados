<?php
// Inclua o arquivo de configuração do banco de dados
include("../../PHP/config.php");

// Função para ler os registros da tabela 'campeonato'
function lerCampeonato() {
    global $mysqli; // Tornando a conexão disponível dentro da função

    $sql = "SELECT id_campeonato, nome_campeonato FROM campeonato";
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
        $campeonatos = array();
        while ($row = $result->fetch_assoc()) {
            $campeonatos[] = $row;
        }
        return $campeonatos;
    } else {
        return array(); // Retorna um array vazio se não houver registros
    }
}
?>
