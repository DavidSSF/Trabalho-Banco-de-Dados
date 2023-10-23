<?php
// Inclua o arquivo de configuração do banco de dados
require_once 'config.php';

// Consulta SQL para obter dados dos times
$sql = "SELECT nome_time, quantidade_titulos FROM timee";
$result = $mysqli->query($sql);

// Array para armazenar os dados de títulos dos times
$dadosTimes = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nomeTime = $row['nome_time'];
        $quantidadeTitulos = (int) $row['quantidade_titulos'];

        // Adicione os dados ao array
        $dadosTimes[] = [$nomeTime, $quantidadeTitulos];
    }
}

// Feche a consulta anterior
$result->close();

// Consulta SQL para buscar os dados dos jogadores
$sql = "SELECT nome_jogador, jogos_ganhos, jogos_empate, jogos_perdidos FROM jogador";
$result = $mysqli->query($sql);

// Array para armazenar os dados de jogos dos jogadores
$dadosJogadores = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nomeJogador = $row['nome_jogador'];
        $jogosGanhos = (int) $row['jogos_ganhos'];
        $jogosEmpate = (int) $row['jogos_empate'];
        $jogosPerdidos = (int) $row['jogos_perdidos'];

        // Adicione os dados ao array
        $dadosJogadores[] = [$nomeJogador, $jogosGanhos, $jogosEmpate, $jogosPerdidos];
    }
}

// Feche a consulta anterior
$result->close();

// Consulta SQL para buscar os dados dos jogadores, incluindo o total de gols
$sql = "SELECT nome_jogador, total_gols FROM jogador";
$result = $mysqli->query($sql);

// Array para armazenar os dados de total de gols dos jogadores
$dadosGols = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nomeJogador = $row['nome_jogador'];
        $totalGols = (int) $row['total_gols'];

        // Adicione os dados ao array
        $dadosGols[] = [$nomeJogador, $totalGols];
    }
}

// Feche a consulta anterior
$result->close();

// Consulta SQL para obter a contagem de partidas por data
$sql = "SELECT data_partida, COUNT(*) as quantidade_partidas FROM partidas GROUP BY data_partida";
$result = $mysqli->query($sql);

// Array para armazenar os dados
$dadosPartidas = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dataPartida = $row['data_partida'];
        $quantidadePartidas = (int) $row['quantidade_partidas'];

        // Adicione os dados ao array
        $dadosPartidas[] = [$dataPartida, $quantidadePartidas];
    }
}

// Feche a conexão com o banco de dados
$mysqli->close();
?>
