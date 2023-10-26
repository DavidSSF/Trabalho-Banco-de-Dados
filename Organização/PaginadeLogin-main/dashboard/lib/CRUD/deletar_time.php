<?php

require_once 'config.php';

if (isset($_GET['id'])) {
    echo '<script>alert("Nome de usuário já existe. Escolha outro.");</script>';
    $id_time = $_GET["id"];
    
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
        header("Location: time.php");
    } else {
        echo "Erro ao excluir o time do banco de dados.";
    }

    // Fechar a declaração
    $stmt->close();
}

// Fechar a conexão com o banco de dados
$mysqli->close();
?>
