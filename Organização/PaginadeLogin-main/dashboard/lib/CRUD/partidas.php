<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagem de Partidas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <h2>Listagem de Partidas</h2>
    <a href="inserir_partida.php" class="btn btn-primary">Nova Partida</a>
    <br><br>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Campeonato</th>
            <th>Data da Partida</th>
            <th>Time Um</th>
            <th>Time Dois</th>
            <th>Estádio</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'config.php';

        // Consulta SQL para obter as partidas
        $sql = "SELECT * FROM partidas";
        $result = $mysqli->query($sql);

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id_partidas'] . "</td>";
                echo "<td>" . $row['campeonato_jogar'] . "</td>";
                echo "<td>" . $row['data_partida'] . "</td>";
                echo "<td>" . $row['time_um'] . "</td>";
                echo "<td>" . $row['time_dois'] . "</td>";
                echo "<td>" . $row['estadio'] . "</td>";
                echo "<td>" . $row['cidade'] . "</td>";
                echo "<td>" . $row['uf'] . "</td>";
                echo "<td><a href='editar_partida.php?id=" . $row['id_partidas'] . "' class='btn btn-primary btn-sm'>Editar</a> ";
                echo "<a href='excluir_partida.php?id=" . $row['id_partidas'] . "' class='btn btn-danger btn-sm'>Excluir</a></td>";
                echo "</tr>";
                
            }
        }
        ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
