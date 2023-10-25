<?php
// Inclua o arquivo de configuração do banco de dados
include("../../PHP/config.php");

function lerJogadores() {
    global $mysqli; // Tornando a conexão disponível dentro da função

    $sql = "SELECT id_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols FROM jogador";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        $jogadores = array();
        while ($row = $result->fetch_assoc()) {
            $jogadores[] = $row;
        }
        return $jogadores;
    } else {
        return array(); // Retorna um array vazio se não houver registros
    }
}
?>
