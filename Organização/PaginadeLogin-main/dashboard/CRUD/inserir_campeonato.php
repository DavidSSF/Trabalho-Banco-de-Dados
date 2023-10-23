<?php
// Inclua o arquivo de configuração do banco de dados
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifique se o campo "nome_campeonato" foi enviado via POST
    if (isset($_POST["nome_campeonato"])) {
        $nome_campeonato = $_POST["nome_campeonato"];

        // Consulta SQL para inserir o novo campeonato no banco de dados
        $sql = "INSERT INTO campeonato (nome_campeonato) VALUES (?)";

        // Preparar a declaração SQL
        $stmt = $mysqli->prepare($sql);

        if ($stmt) {
            // Vincular o parâmetro e seu tipo
            $stmt->bind_param("s", $nome_campeonato);

            // Executar a declaração
            if ($stmt->execute()) {
                // Redirecionar de volta à página de campeonatos após o cadastro
                header("Location: campeonato.php");
            } else {
                echo "Erro ao salvar o campeonato no banco de dados.";
            }

            // Fechar a declaração
            $stmt->close();
        } else {
            echo "Erro na preparação da declaração SQL: " . $mysqli->error;
        }
    } else {
        echo "O campo 'nome_campeonato' não foi enviado via POST.";
    }
}

// Feche a conexão com o banco de dados
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Campeonato</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Inserir Campeonato</h2>
        <form action="inserir_campeonato.php" method="post">
            <div class="mb-3">
                <label for="nome_campeonato" class="form-label">Nome do Campeonato:</label>
                <input type="text" name="nome_campeonato" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
