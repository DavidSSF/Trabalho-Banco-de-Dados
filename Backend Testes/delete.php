<?php
include("config.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $stmt = $conn->prepare("DELETE FROM usuarios WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Erro ao excluir usuário: " . $conn->error;
    }

    $stmt->close();
}
?>
