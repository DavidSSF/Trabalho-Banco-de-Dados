<?php
// Verifique se o formulário foi enviado (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclua o arquivo de configuração do banco de dados
    include("config.php");

    // Obtenha os valores do formulário
    $id_time = $_POST["id_time"];
    $escudo = $_POST["escudo"];
    $nome_time = $_POST["nome_time"];
    $estadio = $_POST["estadio"];
    $tecnico = $_POST["tecnico"];
    $quantidade_titulos = $_POST["quantidade_titulos"];

    // Consulta SQL para atualizar o time no banco de dados
    $sql = "UPDATE timee SET escudo = ?, nome_time = ?, estadio = ?, tecnico = ?, quantidade_titulos = ? WHERE id_time = ?";
    
    // Preparar a declaração SQL
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da declaração SQL: " . $mysqli->error);
    }

    // Vincular os parâmetros e seus tipos
    if (!$stmt->bind_param("ssssii", $escudo, $nome_time, $estadio, $tecnico, $quantidade_titulos, $id_time)) {
        die("Erro ao vincular parâmetros: " . $stmt->error);
    }

    // Executar a declaração
    if ($stmt->execute()) {
        // Redirecionar para a página de listagem de times após a atualização
        header("Location: listar_times.php");
    } else {
        echo "Erro ao atualizar o time no banco de dados.";
    }

    // Fechar a declaração
    $stmt->close();

    // Fechar a conexão com o banco de dados
} else {
    // Se o formulário não foi enviado por POST, exiba o formulário de edição
    if (isset($_GET["id"])) {
        // Obtenha o ID do time da consulta GET
        $id_time = $_GET["id"];
        
        // Consulta SQL para recuperar os dados do time
        $sql = "SELECT * FROM timee WHERE id_time = ?";
        
        // Preparar a declaração SQL
        $stmt = $mysqli->prepare($sql);

        if ($stmt === false) {
            die("Erro na preparação da declaração SQL: " . $mysqli->error);
        }

        // Vincular o parâmetro
        if (!$stmt->bind_param("i", $id_time)) {
            die("Erro ao vincular parâmetros: " . $stmt->error);
        }

        // Executar a declaração
        if ($stmt->execute()) {
            // Obter resultados
            $result = $stmt->get_result();
            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                // Exibir o formulário de edição preenchido com os dados existentes
            } else {
                echo "Time não encontrado.";
            }
        } else {
            echo "Erro ao buscar o time no banco de dados.";
        }

        // Fechar a declaração
        $stmt->close();
    } else {
        echo "ID do time não fornecido.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Editar Time</h2>
        <form action="editar_time.php" method="post">
            <input type="hidden" name="id_time" value="<?php echo $row["id_time"]; ?>">
            <div class="mb-3">
                <label for="escudo" class="form-label">Escudo</label>
                <input type="text" name="escudo" class="form-control" value="<?php echo $row["escudo"]; ?>">
            </div>
            <div class="mb-3">
                <label for="nome_time" class="form-label">Nome do Time</label>
                <input type="text" name="nome_time" class="form-control" value="<?php echo $row["nome_time"]; ?>">
            </div>
            <div class="mb-3">
                <label for="estadio" class="form-label">Estádio</label>
                <input type="text" name="estadio" class="form-control" value="<?php echo $row["estadio"]; ?>">
            </div>
            <div class="mb-3">
                <label for="tecnico" class="form-label">Técnico</label>
                <input type="text" name="tecnico" class="form-control" value="<?php echo $row["tecnico"]; ?>">
            </div>
            <div class="mb-3">
                <label for="quantidade_titulos" class="form-label">Quantidade de Títulos</label>
                <input type="number" name="quantidade_titulos" class="form-control" value="<?php echo $row["quantidade_titulos"]; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
