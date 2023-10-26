<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Jogadores</title>
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
                <a class="active">
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
                <a href="partidas.php">
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
                            <h3>Total de Gols</h3>
                            <?php
                            // Inclua o arquivo de configuração do banco de dados
                            include("../../PHP/config.php");

                            // Consulta SQL para calcular o total de gols marcados por todos os jogadores
                            $sql = "SELECT SUM(total_gols) AS total_de_gols FROM jogador";
                            $result = $mysqli->query($sql);

                            if ($result) {
                                $row = $result->fetch_assoc();
                                $totalGols = round($row['total_de_gols']);

                                echo 'O total de gols marcados por todos os jogadores é: ' . $totalGols;
                            } else {
                                echo 'Erro ao calcular o total de gols: ' . $mysqli->error;
                            }

                            // Feche a conexão com o banco de dados
                            ?>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                    <div class="info">
                            <h3>Media de Jogos Ganhos</h3>
                            <?php
                            // Inclua o arquivo de configuração do banco de dados
                            include("../../PHP/config.php");

                            // Consulta SQL para calcular a média de jogos ganhos por todos os jogadores
                            $sql = "SELECT AVG(jogos_ganhos) AS media_jogos_ganhos FROM jogador";
                            $result = $mysqli->query($sql);

                            if ($result) {
                                $row = $result->fetch_assoc();
                                $mediaJogosGanhos = round($row['media_jogos_ganhos']);

                                echo 'A média de jogos ganhos por jogadores é: ' . $mediaJogosGanhos;
                            } else {
                                echo 'Erro ao calcular a média de jogos ganhos: ' . $mysqli->error;
                            }

                            // Feche a conexão com o banco de dados
                            ?>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Media de Jogos Perdidos</h3>
                            <?php
                            // Inclua o arquivo de configuração do banco de dados
                            include("../../PHP/config.php");

                            // Consulta SQL para calcular a média de jogos perdidos por todos os jogadores
                            $sql = "SELECT AVG(jogos_perdidos) AS media_jogos_perdidos FROM jogador";
                            $result = $mysqli->query($sql);

                            if ($result) {
                                $row = $result->fetch_assoc();
                                $mediaJogosPerdidos = round($row['media_jogos_perdidos']); // Arredonda a média para um número inteiro
                            
                                echo 'A média de jogos perdidos por jogadores é: ' . $mediaJogosPerdidos;
                            } else {
                                echo 'Erro ao calcular a média de jogos perdidos: ' . $mysqli->error;
                            }

                            // Feche a conexão com o banco de dados
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // Inclua o arquivo de configuração do banco de dados
            require_once(__DIR__ . '/../../PHP/config.php');

            // Consulta para selecionar as imagens dos jogadores e seus nomes da tabela "jogador"
            $sql = "SELECT nome_jogador, imagem_jogador FROM jogador";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                echo '<div class="new-users">';
                echo '<h2>Jogadores</h2>';
                echo '<div class="user-list">';

                while ($row = $result->fetch_assoc()) {
                    echo '<div class="user">';
                    echo '<img src="' . $row['imagem_jogador'] . '">';
                    echo '<h2>' . $row['nome_jogador'] . '</h2>';
                    echo '</div>';
                }

                echo '</div>';
                echo '</div>';
            } else {
                echo 'Nenhum jogador encontrado no banco de dados.';
            }

            // Feche a conexão com o banco de dados
            ?>

<div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do Jogador</th>
                            <th>Posição</th>
                            <th>Idade</th>
                            <th>Peso</th>
                            <th>Altura</th>
                            <th>Time do Jogador</th>
                            <th>Jogos Ganhos</th>
                            <th>Jogos Empate</th>
                            <th>Jogos Perdidos</th>
                            <th>Total de Gols</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../PHP/ler_jogadores.php");
                        $jogadores = lerJogadores();

                        foreach ($jogadores as $jogador) {
                            echo "<tr>";
                            echo "<td>" . $jogador['id_jogador'] . "</td>";
                            echo "<td>" . $jogador['nome_jogador'] . "</td>";
                            echo "<td>" . $jogador['posicao'] . "</td>";
                            echo "<td>" . $jogador['idade'] . "</td>";
                            echo "<td>" . $jogador['peso'] . "</td>";
                            echo "<td>" . $jogador['altura_jogador'] . "</td>";
                            echo "<td>" . $jogador['time_jogador'] . "</td>";
                            echo "<td>" . $jogador['jogos_ganhos'] . "</td>";
                            echo "<td>" . $jogador['jogos_empate'] . "</td>";
                            echo "<td>" . $jogador['jogos_perdidos'] . "</td>";
                            echo "<td>" . $jogador['total_gols'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
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