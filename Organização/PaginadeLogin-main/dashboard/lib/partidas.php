<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Responsive Dashboard Design #1 | AsmrProg</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="../images/football-Logo.png">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="../dashboard.php">
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="times.php">
                    <span class="material-symbols-outlined">
                        security
                    </span>
                    <h3>Times</h3>
                </a>
                <a href="jogadores.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Jogadores</h3>
                </a>
                <a href="campeonato.php">
                    <span class="material-symbols-outlined">
                        emoji_events
                    </span>
                    <h3>Campeonatos</h3>
                </a>
                <a class="active">
                    <span class="material-symbols-outlined">
                        scoreboard
                    </span>
                    </span>
                    <h3>Partidas</h3>
                </a>
                <a href="settings.php">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>CRUD</h3>
                </a>
                <a href="../../index.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Sair</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>
            <h1>Confederação Brasileira de Futebol</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                    <div class="info">
                            <h3>Data da proxima partida a ocorrer</h3>
                            <?php
                            // Inclua o arquivo de configuração do banco de dados
                            require_once(__DIR__ . '/../../PHP/config.php');

                            // Obtenha a data atual do sistema
                            $dataAtual = date("Y-m-d");

                            // Consulta SQL para encontrar a data do jogo mais recente
                            $sql = "SELECT MAX(data_partida) AS data_recente FROM partidas WHERE data_partida >=
                            '$dataAtual'";
                            $result = $mysqli->query($sql);

                            if ($result && $result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $dataMaisRecente = $row['data_recente'];

                                if ($dataMaisRecente !== null) {
                                    echo 'A data do jogo mais recente é: ' . $dataMaisRecente;
                                } else {
                                    echo 'Não há jogos futuros no banco de dados.';
                                }
                            } else {
                                echo 'Nenhuma partida encontrada no banco de dados.';
                            }

                            // Feche a conexão com o banco de dados
                            ?>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                    <div class="info">
                            <h3>Quantidade de Partidas Cadastradas </h3>
                            <?php
                            // Inclua o arquivo de configuração do banco de dados
                            require_once(__DIR__ . '/../../PHP/config.php');

                            // Consulta SQL para contar as partidas na tabela "partidas"
                            $sql = "SELECT COUNT(*) AS quantidade_partidas FROM partidas";
                            $result = $mysqli->query($sql);

                            if ($result && $result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $quantidadePartidas = $row['quantidade_partidas'];

                                echo 'Quantidade de partidas cadastradas: ' . $quantidadePartidas;
                            } else {
                                echo 'Nenhuma partida encontrada no banco de dados.';
                            }

                            // Feche a conexão com o banco de dados
                            ?>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                    <div class="info">
                            <h3>Campeonato com Maior Numero de Partidas</h3>
                            <?php
                            // Inclua o arquivo de configuração do banco de dados
                            require_once(__DIR__ . '/../../PHP/config.php');

                            // Consulta SQL para encontrar o campeonato com a maior quantidade de partidas
                            $sql = "SELECT campeonato_jogar, COUNT(*) AS quantidade_partidas
        FROM partidas
        GROUP BY campeonato_jogar
        ORDER BY quantidade_partidas DESC
        LIMIT 1";
                            $result = $mysqli->query($sql);

                            if ($result && $result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                $campeonatoMaiorPartidas = $row['campeonato_jogar'];
                                $quantidadePartidas = $row['quantidade_partidas'];

                                echo "O campeonato com a maior quantidade de partidas é '$campeonatoMaiorPartidas' com $quantidadePartidas partidas.";
                            } else {
                                echo 'Nenhum campeonato encontrado no banco de dados.';
                            }

                            // Feche a conexão com o banco de dados
                            $mysqli->close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="new-users">
                <h2>Copas do Munda da Seleção Brasileira</h2>
                <div class="user-list">
                    <div class="user">
                        <img
                            src="https://upload.wikimedia.org/wikipedia/commons/5/5e/Pele_con_brasil_%28cropped%29.jpg">
                        <h2>Pelé</h2>
                    </div>
                    <div class="user">
                        <img src="https://i.pinimg.com/736x/6e/76/a7/6e76a7e35df25dd7cebaaa90d7d8c22e.jpg">
                        <h2>Zico</h2>
                    </div>
                    <div class="user">
                        <img src="https://i.pinimg.com/736x/5d/d5/6f/5dd56fff3769e6e5e42828ecd0c9a1aa.jpg">
                        <h2>Garrincha</h2>
                    </div>
                </div>
            </div>

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
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
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        include("../PHP/ler_partida.php");
                        $partidas = lerPartidas();
                        foreach ($partidas as $partida) {
                            echo "<tr>";
                            echo "<td>" . $partida['id_partidas'] . "</td>";
                            echo "<td>" . $partida['campeonato_jogar'] . "</td>";
                            echo "<td>" . $partida['data_partida'] . "</td>";
                            echo "<td>" . $partida['time_um'] . "</td>";
                            echo "<td>" . $partida['time_dois'] . "</td>";
                            echo "<td>" . $partida['estadio'] . "</td>";
                            echo "<td>" . $partida['cidade'] . "</td>";
                            echo "<td>" . $partida['uf'] . "</td>";
                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/index.js"></script>
</body>

</html>