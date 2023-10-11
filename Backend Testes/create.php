<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nome, $email);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Erro ao criar usuário: " . $conn->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD em PHP</title>
</head>
<body>
    <h1>Adicionar Usuário</h1>
    <a href="index.php">Voltar para a lista de usuários</a>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>
