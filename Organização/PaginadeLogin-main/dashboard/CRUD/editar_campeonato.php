<?php
// Inclua o arquivo de configuração do banco de dados
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifique se os campos foram enviados via POST
    if (isset($_POST["id_campeonato"]) && isset($_POST["nome_campeonato"])) {
        $id_campeonato = $_POST["id_campeonato"];
        $nome_campeonato = $_POST["nome_campeonato"];

        // Consulta SQL para atualizar o campeonato no banco de dados
        $sql = "UPDATE campeonato SET nome_campeonato = ? WHERE id_campeonato = ?";

        // Preparar a declaração SQL
        $stmt = $mysqli->prepare($sql);

        if ($stmt) {
            // Vincular os parâmetros e seus tipos
            $stmt->bind_param("si", $nome_campeonato, $id_campeonato);

            // Executar a declaração
            if ($stmt->execute()) {
                // Redirecionar de volta à página de campeonatos após a edição
                header("Location: campeonato.php");
            } else {
                echo "Erro ao atualizar o campeonato no banco de dados.";
            }

            // Fechar a declaração
            $stmt->close();
        } else {
            echo "Erro na preparação da declaração SQL: " . $mysqli->error;
        }
    } else {
        echo "Os campos não foram enviados via POST.";
    }
}

// Feche a conexão com o banco de dados
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Campeonato</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Editar Campeonato</h2>
        <form method="post">
            <?php
            require_once 'config.php';
            $id_campeonato = $_GET['id']; // Obtém o ID do campeonato da URL
            $sql = "SELECT nome_campeonato FROM campeonato WHERE id_campeonato = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("i", $id_campeonato);
            $stmt->execute();
            $stmt->bind_result($nome_campeonato);
            $stmt->fetch();
            $stmt->close();
            ?>
            <input type="hidden" name="id_campeonato" value="<?php echo $id_campeonato; ?>">
            <div class="row mb-3">
                <label for="nome_campeonato" class="col-sm-3 col-form-label">Nome do Campeonato</label>
                <div class="col-sm-6">
                    <input type="text" name="nome_campeonato" class="form-control" value="<?php echo $nome_campeonato; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a href="campeonato.php" class="btn btn-outline-primary" role="button">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
