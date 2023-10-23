<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <title>Confederação Brasileira de Futebol</title>
</head>

<body>

    <div class="container">
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/football-Logo.png">
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a class="active">
                    <span class="material-symbols-outlined">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="lib/times.php">
                    <span class="material-symbols-outlined">
                        security
                    </span>
                    <h3>Times</h3>
                </a>
                <a href="lib/jogadores.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Jogadores</h3>
                </a>
                <a href="lib/campeonato.php">
                    <span class="material-symbols-outlined">
                        emoji_events
                    </span>
                    <h3>Campeonatos</h3>
                </a>
                <a href="lib/partidas.php">
                    <span class="material-symbols-outlined">
                        scoreboard
                    </span>
                    </span>
                    <h3>Partidas</h3>
                </a>
                <a href="lib/settings.php">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>CRUD</h3>
                </a>
                <a href="../index.php">
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

            <!-- New Users Section -->
            <div class="new-users">
                <h2>Homenagem a jogadores</h2>
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
                    <div class="user">
                        <img
                            src="https://lncimg.lance.com.br/cdn-cgi/image/width=1920,quality=75,format=webp/uploads/2018/11/15/5bedcf90501e4.jpeg">
                        <h2>Ronaldo F</h2>
                    </div>
                    <div class="user">
                        <img
                            src="https://www.ogol.com.br/img/jogadores/91/670991_ori__20200504125046_ronaldinho_gaucho.jpg">
                        <h2>Ronaldinho G</h2>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <div class="new-users">
                <h2>Times Cadastrados</h2>
                <div class="user-list">
                <?php
            // Inclua o arquivo de configuração do banco de dados
            require_once(__DIR__ . '/../PHP/config.php');

            // Consulta para selecionar todos os times da tabela "timee"
            $sql = "SELECT escudo, nome_time FROM timee";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                echo '<div class="new-users">';

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
                </div>
            </div>

            <div class="new-users">
                <h2>jogadores Cadastrados</h2>
                <div class="user-list">
                    <?php
                    // Inclua o arquivo de configuração do banco de dados
                    require_once(__DIR__ . '/../PHP/config.php');

                    // Consulta para selecionar as imagens dos jogadores e seus nomes da tabela "jogador"
                    $sql = "SELECT nome_jogador, imagem_jogador FROM jogador";
                    $result = $mysqli->query($sql);

                    if ($result->num_rows > 0) {
                        echo '<div class="new-users">';

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
                </div>
            </div>
        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
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
            <!-- End of Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="../img/cbf.png">
                </div>
            </div>

        </div>


    </div>
    <script src="js/index.js"></script>

</body>

</html>
