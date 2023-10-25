<!-- CONCLUIDA -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Times</title>
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
                <a class="active">
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

        <main>
            <h1>Confederação Brasileira de Futebol</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Total de Times Cadastrados:</h3>
                            <?php
                            // Inclua o arquivo de configuração do banco de dados
                            include '../../PHP/config.php';

                            // Consulta SQL para contar o número de times cadastrados
                            $sql = "SELECT COUNT(*) AS total_times FROM timee";

                            // Execute a consulta
                            $result = $mysqli->query($sql);

                            if ($result) {
                                // Obtenha o resultado da consulta
                                $row = mysqli_fetch_assoc($result);

                                // Exiba o número total de times
                                $totalTimes = $row['total_times'];
                                echo "<h3>  $totalTimes </h3>";
                            } else {
                                echo "Erro ao contar os times cadastrados: " . mysqli_error($conn);
                            }

                            // Feche a conexão com o banco de dados
                            ?>

                        </div>

                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Media de Titulos:</h3>
                            <?php
                            // Inclua o arquivo de configuração do banco de dados
                            include '../../PHP/config.php';

                            // Consulta SQL para somar a quantidade total de títulos
                            $sql = "SELECT SUM(quantidade_titulos) AS total_titulos FROM timee";

                            // Execute a consulta
                            $result = $mysqli->query($sql);

                            if ($result) {
                                // Obtenha o resultado da consulta
                                $row = mysqli_fetch_assoc($result);

                                // Calcule a média de títulos
                                $totalTitulos = $row['total_titulos'];
                                $sql = "SELECT COUNT(*) AS total_times FROM timee";
                                $result = $mysqli->query($sql);

                                if ($result) {
                                    $row = mysqli_fetch_assoc($result);
                                    $totalTimes = $row['total_times'];

                                    if ($totalTimes > 0) {
                                        $mediaTitulos = $totalTitulos / $totalTimes;
                                        echo "<h3>";
                                        echo $mediaTitulos;
                                        echo "</h3>";
                                    } else {
                                        echo "Não há times na tabela.";
                                    }
                                } else {
                                    echo "Erro ao obter o número total de times: " . mysqli_error($conn);
                                }
                            }

                            // Feche a conexão com o banco de dados
                            ?>

                        </div>

                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                    <div class="info">
                            <h3>Moda de Titulos:</h3>
                            <?php
                            // Inclua o arquivo de configuração do banco de dados
                            include '../../PHP/config.php';

                            // Consulta SQL para encontrar a moda da quantidade de títulos
                            $sql = "SELECT quantidade_titulos, COUNT(quantidade_titulos) AS total FROM timee GROUP BY quantidade_titulos ORDER BY total DESC LIMIT 1";

                            // Execute a consulta
                            $result = $mysqli->query($sql);

                            if ($result) {
                                // Obtenha o resultado da consulta
                                $row = mysqli_fetch_assoc($result);

                                // Exiba a moda da quantidade de títulos
                                if ($row){
                                    $modaTitulos = $row['quantidade_titulos'];
                                    $totalOcorrencias = $row['total'];
                                    echo "A moda da quantidade de títulos é: " . $modaTitulos . " (aparece " . $totalOcorrencias . " vezes)";
                                }else{
                                    echo "Não há times na tabela.";
                                }

                            } else {
                                echo "Erro ao calcular a moda: " . mysqli_error($conn);
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

            // Consulta para selecionar todos os times da tabela "timee"
            $sql = "SELECT escudo, nome_time FROM timee";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                echo '<div class="new-users">';
                echo '<h2>Times</h2>';
                echo '<div class="user-list">';

                while ($row = $result->fetch_assoc()) {
                    echo '<div class="user">';
                    echo '<img src="' . $row['escudo'] . '">';
                    echo '<h2>' . $row['nome_time'] . '</h2>';
                    echo '</div>';
                }

                echo '</div>';
                echo '</div>';
            } else {
                echo 'Nenhum time encontrado no banco de dados.';
            }

            // Feche a conexão com o banco de dados
            ?>

            <!-- Recent Orders Table -->
            <div class="recent-orders" style="z-index:-1;">
                <h2>Dados</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do time</th>
                            <th>Estadio</th>
                            <th>Tecnico</th>
                            <th>Titulos</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../PHP/ler_times.php");
                        $times = lerTimes();
                        foreach ($times as $time) {
                            echo "<tr>";
                            echo "<td>" . $time['id_time'] . "</td>";
                            echo "<td>" . $time['nome_time'] . "</td>";
                            echo "<td>" . $time['estadio'] . "</td>";
                            echo "<td>" . $time['tecnico'] . "</td>";
                            echo "<td>" . $time['quantidade_titulos'] . "</td>";
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
