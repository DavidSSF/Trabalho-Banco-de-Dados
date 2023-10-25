<?php
include('config.php');

if (isset($_GET['id'])) {
    $id_jogador = $_GET['id'];

    // Verifique se o jogador existe
    $sql = "SELECT * FROM jogador WHERE id_jogador = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $id_jogador);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Deleta o jogador do banco de dados
        $delete_sql = "DELETE FROM jogador WHERE id_jogador = ?";
        $delete_stmt = $mysqli->prepare($delete_sql);
        $delete_stmt->bind_param('i', $id_jogador);

        if ($delete_stmt->execute()) {
            header('Location: jogador.php');
        } else {
            echo 'Erro ao deletar o jogador: ' . $mysqli->error;
        }
    } else {
        echo 'Jogador não encontrado';
    }
} else {
    echo 'ID do jogador não fornecido.';
}
?>
