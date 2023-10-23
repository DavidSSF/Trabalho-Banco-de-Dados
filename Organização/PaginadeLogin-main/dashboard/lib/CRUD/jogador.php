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
    <div class="container my-5">
        <h2>Listando Jogadores</h2>
        <a href="inserir_jogador.php" role="button" class="btn btn-primary">Novo Jogador</a>
        <br>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Imagem Jogador</th>
                <th>Nome</th>
                <th>Posição</th>
                <th>Idade</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Time</th>
                <th>Jogos Ganhos</th>
                <th>Jogos Empatados</th>
                <th>Jogos Perdidos</th>
                <th>Total de Gols</th>
                <th>Funções</th>
            </thead>
            <tbody>
                <?php
                include('config.php');

                $sql = "SELECT * FROM jogador";
                $result = $mysqli->query($sql);

                if (!$result) {
                    die("Consulta Inválida: " . $mysqli->error);
                }
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>$row[id_jogador]</td>
                    <td>$row[imagem_jogador]</td>
                    <td>$row[nome_jogador]</td>
                    <td>$row[posicao]</td>
                    <td>$row[idade]</td>
                    <td>$row[peso]</td>
                    <td>$row[altura_jogador]</td>
                    <td>$row[time_jogador]</td>
                    <td>$row[jogos_ganhos]</td>
                    <td>$row[jogos_empate]</td>
                    <td>$row[jogos_perdidos]</td>
                    <td>$row[total_gols]</td>
                    <td>
                        <a href='atualizar_jogador.php?id=$row[id_jogador]' class='btn btn-primary btn-sm'>Editar</a>
                        <a href='deletar_jogador.php?id=$row[id_jogador]' class='btn btn-primary btn-sm'>Deletar</a>
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
