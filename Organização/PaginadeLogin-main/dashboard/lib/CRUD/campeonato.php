<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de Campeonatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h2>Lista de Campeonatos</h2>
        <a href="inserir_campeonato.php" role="button" class="btn btn-primary">Novo Campeonato</a>
        <br>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome do Campeonato</th>
                <th>Opções</th>
            </thead>
            <tbody>
                <?php
                include('config.php');

                $sql = "SELECT * FROM campeonato";
                $result = $mysqli->query($sql);

                if (!$result) {
                    die("Consulta inválida" . $mysqli->error);
                }
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row['id_campeonato'] . "</td>
                    <td>" . $row['nome_campeonato'] . "</td>
                    <td>
                        <a href='editar_campeonato.php?id=" . $row['id_campeonato'] . "' class='btn btn-primary btn-sm'>Editar</a>
                        <a href='deletar_campeonato.php?id=" . $row['id_campeonato'] . "' class='btn btn-primary btn-sm'>Deletar</a>
                    </td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
