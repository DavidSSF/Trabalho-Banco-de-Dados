<?php
// Inclua o arquivo de configuração do banco de dados
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $id_campeonato = $_GET["id"];

    // Consulta SQL para deletar o campeonato
    $sql = "DELETE FROM campeonato WHERE id_campeonato = ?";

    // Preparar a declaração SQL
    $stmt = $mysqli->prepare($sql);

    if ($stmt) {
        // Vincular o parâmetro e seu tipo
        $stmt->bind_param("i", $id_campeonato);

        // Executar a declaração
        if ($stmt->execute()) {
            // Redirecionar de volta à página de campeonatos após a exclusão
            header("Location: campeonato.php");
        } else {
            echo "Erro ao deletar o campeonato no banco de dados.";
        }

        // Fechar a declaração
        $stmt->close();
    } else {
        echo "Erro na preparação da declaração SQL: " . $mysqli->error;
    }
} else {
    echo "Requisição inválida.";
}
?>
