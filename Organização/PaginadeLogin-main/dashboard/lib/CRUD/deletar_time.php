<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_time = $_POST["id_time"];

    // Consulta SQL para excluir o time do banco de dados
    $sql = "DELETE FROM timee WHERE id_time = ?";

    // Preparar a declaração SQL
    $stmt = $mysqli->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da declaração SQL: " . $mysqli->error);
    }

    // Vincular o parâmetro e seu tipo
    if (!$stmt->bind_param("i", $id_time)) {
        die("Erro ao vincular parâmetro: " . $stmt->error);
    }

    // Executar a declaração
    if ($stmt->execute()) {
        // Redirecionar para a página de listagem de times após a exclusão
        header("Location: times.php");
    } else {
        echo "Erro ao excluir o time do banco de dados.";
    }

    // Fechar a declaração
    $stmt->close();
}

// Fechar a conexão com o banco de dados
$mysqli->close();
?>
