
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="conatiner my-5">
        <h2>Listando Times</h2>
        <a href="inserir_time.php" role="button" class="btn btn-primary">Novo Time</a>
        <br>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Escudo</th>
                <th>Nome</th>
                <th>Estadio</th>
                <th>Tecnico</th>
                <th>Quantidade de Titulos</th>
                <th>Funções</th>
            </thead>
            <tbody>
                <?php
                include ('config.php');

                $sql = "SELECT * FROM timee";
                $result = $mysqli->query($sql);

                if (!$result) {
                    die("Consulta Invalida" . $mysql->error);
                }    while($row = $result->fetch_assoc()){
                    echo "<tr>
                    <td>$row[id_time]</td>
                    <td>$row[escudo]</td>
                    <td>$row[nome_time]</td>
                    <td>$row[estadio]</td>
                    <td>$row[tecnico]</td>
                    <td>$row[quantidade_titulos]</td>
                    <td>
                        <a href='editar_time.php?id=$row[id_time]' class='btn btn-primary btn-sm'>Editar</a>
                        <a href='deletar_time.php?id=$row[id_time]' class='btn btn-primary btn-sm'>Deletar</a>

                    </td>
                </tr>";
                }
                ?>
                
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>