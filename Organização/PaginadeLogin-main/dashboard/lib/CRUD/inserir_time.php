<?php
// Verifique se o formulário foi enviado (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclua o arquivo de configuração do banco de dados
    include("config.php");

    // Obtenha os valores do formulário
    $escudo = $_POST["escudo"];
    $nome_time = $_POST["nome_time"];
    $estadio = $_POST["estadio"];
    $tecnico = $_POST["tecnico"];
    $quantidade_titulos = $_POST["quantidade_titulos"];

    // Consulta SQL para inserir o novo time no banco de dados
    $sql = "INSERT INTO timee (escudo, nome_time, estadio, tecnico, quantidade_titulos) VALUES (?, ?, ?, ?, ?)";
    
    // Preparar a declaração SQL
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da declaração SQL: " . $mysqli->error);
    }

    // Vincular os parâmetros e seus tipos
    if (!$stmt->bind_param("ssssi", $escudo, $nome_time, $estadio, $tecnico, $quantidade_titulos)) {
        die("Erro ao vincular parâmetros: " . $stmt->error);
    }

    // Executar a declaração
    if ($stmt->execute()) {
        // Redirecionar para a página de listagem de times após a inserção
        header("Location: times.php");
    } else {
        echo "Erro ao salvar o time no banco de dados.";
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
    <title>Inserir Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Inserindo Time</h2>
        <form  method="post">
            <div class="mb-3">
                <label for="escudo" class="form-label">Escudo</label>
                <input type="text" name="escudo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nome_time" class="form-label">Nome do Time</label>
                <input type="text" name="nome_time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="estadio" class="form-label">Estádio</label>
                <input type="text" name="estadio" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="tecnico" class="form-label">Técnico</label>
                <input type="text" name="tecnico" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="quantidade_titulos" class="form-label">Quantidade de Títulos</label>
                <input type="number" name="quantidade_titulos" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Time</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
