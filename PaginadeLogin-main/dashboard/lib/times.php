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
                <a href="../dashboard.html">
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" class="active">
                    <span class="material-symbols-outlined">
                        security
                    </span>
                    <h3>Times</h3>
                </a>
                <a href="../lib/jogadores.html">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Jogadores</h3>
                </a>
                <a href="../lib/campeonato.html">
                    <span class="material-symbols-outlined">
                        emoji_events
                    </span>
                    <h3>Campeonatos</h3>
                </a>
                <a href="../lib/partidas.html">
                    <span class="material-symbols-outlined">
                        scoreboard
                    </span>
                    </span>
                    <h3>Partidas</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>New Login</h3>
                </a>
                <a href="#">
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
                            <h3>Total Sales</h3>
                            <h1>$65,024</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Site Visit</h3>
                            <h1>24,981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Searches</h3>
                            <h1>14,147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="new-users">
                <h2>Times</h2>
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
        
        -->

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

            <!-- End of Analyses -->

            <!-- New Users Section -->

            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Dados</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nome do time</th>
                            <th>tecnico</th>
                            <th>titulos</th>
                            <th>estadio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Flex-Box Tutorial</td>
                            <td>36452</td>
                            <td>Paid</td>
                            <td class="primary">Active</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Flex-Box Tutorial</td>
                            <td>36452</td>
                            <td>Paid</td>
                            <td class="primary">Active</td>
                            <td class="primary">Details</td>
                        </tr>
                        <tr>
                            <td>Flex-Box Tutorial</td>
                            <td>36452</td>
                            <td>Paid</td>
                            <td class="primary">Active</td>
                            <td class="primary">Details</td>
                        </tr>
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