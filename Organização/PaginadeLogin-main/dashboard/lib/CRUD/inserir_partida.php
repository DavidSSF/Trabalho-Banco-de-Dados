<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $campeonato_jogar = $_POST["campeonato_jogar"];
    $data_partida = $_POST["data_partida"];
    $time_um = $_POST["time_um"];
    $time_dois = $_POST["time_dois"];
    $estadio = $_POST["estadio"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];

    // Consulta SQL para inserir a nova partida no banco de dados
    $sql = "INSERT INTO partidas (campeonato_jogar, data_partida, time_um, time_dois, estadio, cidade, uf) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Preparar a declaração SQL
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da declaração SQL: " . $mysqli->error);
    }

    // Vincular os parâmetros e seus tipos
    if (!$stmt->bind_param("sssssss", $campeonato_jogar, $data_partida, $time_um, $time_dois, $estadio, $cidade, $uf)) {
        die("Erro ao vincular parâmetros: " . $stmt->error);
    }

    // Executar a declaração
    if ($stmt->execute()) {
        // Redirecionar para a página de listagem de partidas após a inserção
        header("Location: partidas.php");
    } else {
        echo "Erro ao salvar a partida no banco de dados.";
    }

    // Fechar a declaração
    $stmt->close();
}

// Fechar a conexão com o banco de dados
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Partida</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Inserir Partida</h2>
        <form action="inserir_partida.php" method="post">
            <div class="mb-3">
                <label for="campeonato_jogar" class="form-label">Campeonato</label>
                <input type="text" name="campeonato_jogar" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="data_partida" class="form-label">Data da Partida</label>
                <input type="date" name="data_partida" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="time_um" class="form-label">Time 1</label>
                <input type="text" name="time_um" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="time_dois" class="form-label">Time 2</label>
                <input type="text" name="time_dois" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="estadio" class="form-label">Estádio</label>
                <input type="text" name="estadio" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" name="cidade" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="uf" class="form-label">UF</label>
                <input type="text" name="uf" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Partida</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
