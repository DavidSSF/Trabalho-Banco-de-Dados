<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $stmt = $conn->prepare("UPDATE usuarios SET nome=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $nome, $email, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
    } else {
        echo "Erro ao atualizar usuário: " . $conn->error;
    }

    $stmt->close();
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $result = $conn->query("SELECT * FROM usuarios WHERE id=$id");

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nome = $row["nome"];
        $email = $row["email"];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD em PHP</title>
</head>
<body>
    <h1>Editar Usuário</h1>
    <a href="index.php">Voltar para a lista de usuários</a>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $nome; ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>" required>
        <br>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
