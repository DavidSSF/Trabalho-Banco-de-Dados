<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_jogador = $_POST['id_jogador'];
    $nome_jogador = $_POST['nome_jogador'];
    $posicao = $_POST['posicao'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $altura_jogador = $_POST['altura_jogador'];
    $time_jogador = $_POST['time_jogador'];
    $jogos_ganhos = $_POST['jogos_ganhos'];
    $jogos_empate = $_POST['jogos_empate'];
    $jogos_perdidos = $_POST['jogos_perdidos'];
    $total_gols = $_POST['total_gols'];

    // Atualize os dados do jogador no banco de dados
    $sql = "UPDATE jogador SET nome_jogador=?, posicao=?, idade=?, peso=?, altura_jogador=?, time_jogador=?, jogos_ganhos=?, jogos_empate=?, jogos_perdidos=?, total_gols=? WHERE id_jogador=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ssiiissiiii', $nome_jogador, $posicao, $idade, $peso, $altura_jogador, $time_jogador, $jogos_ganhos, $jogos_empate, $jogos_perdidos, $total_gols, $id_jogador);

    if ($stmt->execute()) {
        header('Location: listar_jogadores.php');
    } else {
        echo 'Erro ao atualizar o jogador: ' . $mysqli->error;
    }

    $stmt->close();
}

if (isset($_GET['id'])) {
    $id_jogador = $_GET['id'];

    // Recupere os dados do jogador do banco de dados
    $sql = "SELECT * FROM jogador WHERE id_jogador=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $id_jogador);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $nome_jogador = $row['nome_jogador'];
        $posicao = $row['posicao'];
        $idade = $row['idade'];
        $peso = $row['peso'];
        $altura_jogador = $row['altura_jogador'];
        $time_jogador = $row['time_jogador'];
        $jogos_ganhos = $row['jogos_ganhos'];
        $jogos_empate = $row['jogos_empate'];
        $jogos_perdidos = $row['jogos_perdidos'];
        $total_gols = $row['total_gols'];
    } else {
        echo 'Jogador não encontrado';
        exit;
    }

    $stmt->close();
} else {
    echo 'ID do jogador não fornecido.';
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Jogador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Editar Jogador</h2>
        <form action="editar_jogador.php" method="post">
            <input type="hidden" name="id_jogador" value="<?php echo $id_jogador; ?>">
            <div class="row mb-3">
                <label for="nome_jogador" class="col-sm-3 col-form-label">Nome do Jogador</label>
                <div class="col-sm-6">
                    <input type="text" name="nome_jogador" class="form-control" value="<?php echo $nome_jogador; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="posicao" class="col-sm-3 col-form-label">Posição</label>
                <div class="col-sm-6">
                    <input type="text" name="posicao" class="form-control" value="<?php echo $posicao; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="idade" class="col-sm-3 col-form-label">Idade</label>
                <div class="col-sm-6">
                    <input type="text" name="idade" class="form-control" value="<?php echo $idade; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="peso" class="col-sm-3 col-form-label">Peso</label>
                <div class="col-sm-6">
                    <input type="text" name="peso" class="form-control" value="<?php echo $peso; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="altura_jogador" class="col-sm-3 col-form-label">Altura</label>
                <div class="col-sm-6">
                    <input type="text" name="altura_jogador" class="form-control" value="<?php echo $altura_jogador; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="time_jogador" class="col-sm-3 col-form-label">Time</label>
                <div class="col-sm-6">
                    <input type="text" name="time_jogador" class="form-control" value="<?php echo $time_jogador; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jogos_ganhos" class="col-sm-3 col-form-label">Jogos Ganhos</label>
                <div class="col-sm-6">
                    <input type="text" name="jogos_ganhos" class="form-control" value="<?php echo $jogos_ganhos; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jogos_empate" class="col-sm-3 col-form-label">Jogos Empatados</label>
                <div class="col-sm-6">
                    <input type="text" name="jogos_empate" class="form-control" value="<?php echo $jogos_empate; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="jogos_perdidos" class="col-sm-3 col-form-label">Jogos Perdidos</label>
                <div class="col-sm-6">
                    <input type="text" name="jogos_perdidos" class="form-control" value="<?php echo $jogos_perdidos; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="total_gols" class="col-sm-3 col-form-label">Total de Gols</label>
                <div class="col-sm-6">
                    <input type="text" name="total_gols" class="form-control" value="<?php echo $total_gols; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="listar_jogadores.php" class="btn btn-outline-primary" role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
