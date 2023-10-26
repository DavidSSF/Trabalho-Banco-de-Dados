<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imagem_jogador = $_POST["imagem_jogador"];
    $nome_jogador = $_POST["nome_jogador"];
    $posicao = $_POST["posicao"];
    $idade = ($_POST["idade"]);
    $peso = intval($_POST["peso"]);
    $altura_jogador = $_POST["altura_jogador"];
    $time_jogador = $_POST["time_jogador"];
    $jogos_ganhos = $_POST["jogos_ganhos"];
    $jogos_empate = $_POST["jogos_empate"];
    $jogos_perdidos = $_POST["jogos_perdidos"];
    $total_gols = $_POST["total_gols"];



    // Consulta SQL para inserir o novo jogador no banco de dados usando uma instrução preparada
    $sql = "INSERT INTO jogador (imagem_jogador, nome_jogador, posicao, idade, peso, altura_jogador, time_jogador, jogos_ganhos, jogos_empate, jogos_perdidos, total_gols) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Preparar a declaração SQL
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da declaração SQL: " . $mysqli->error);
    }

    // Vincular os parâmetros e seus tipos
    if (!$stmt->bind_param("sssisssiiii", $imagem_jogador, $nome_jogador, $posicao, $idade, $peso, $altura_jogador, $time_jogador, $jogos_ganhos, $jogos_empate, $jogos_perdidos, $total_gols)) {
        die("Erro ao vincular parâmetros: " . $stmt->error);
    }

    // Executar a declaração
    if ($stmt->execute()) {
        // Redirecionar para a página de jogadores após o cadastro
        header("Location: jogador.php");
    } else {
        echo "Erro ao salvar o jogador no banco de dados.";
    }

    // Fechar a declaração
    $stmt->close();

    // Fechar a conexão com o banco de dados
}
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>Inserindo Time</h2>
        <form action="" method="post">
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Imagem Jogador</label>
                <div class="col-sm-6">
                    <input type="text" name="imagem_jogador" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Nome</label>
                <div class="col-sm-6">
                    <input type="text" name="nome_jogador" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Posição</label>
                <div class="col-sm-6">
                    <input type="text" name="posicao" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Idade</label>
                <div class="col-sm-6">
                    <input type="text" name="idade" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Peso</label>
                <div class="col-sm-6">
                    <input type="text" name="peso" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Altura</label>
                <div class="col-sm-6">
                    <input type="text" name="altura_jogador" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Time</label>
                <div class="col-sm-6">
                    <input type="text" name="time_jogador" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Jogos Ganhos</label>
                <div class="col-sm-6">
                    <input type="text" name="jogos_ganhos" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Jogos Empatados</label>
                <div class="col-sm-6">
                    <input type="text" name="jogos_empate" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Jogos Perdidos</label>
                <div class="col-sm-6">
                    <input type="text" name="jogos_perdidos" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Total de Gols</label>
                <div class="col-sm-6">
                    <input type="text" name="total_gols" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="" class="btn btn-outline-primary" href="" role="button">Cancelar</a>
                </div>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>