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
                <a href="../lib/times.html">
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
                <a href="#" class="active">
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
            

            <div class="new-users">
                <h2>Principais Campeonatos</h2>
                <div class="user-list">
                    <div class="user">
                        <img
                            src="https://static.wikia.nocookie.net/futebol/images/3/37/Copa_do_Brasil_logo.png/revision/latest?cb=20211214152944">
                        <h2>Copa do Brasil</h2>
                    </div>
                    <div class="user">
                        <img src="https://a4.espncdn.com/combiner/i?img=%2Fi%2Fleaguelogos%2Fsoccer%2F500%2F85.png">
                        <h2>Brasileirão</h2>
                    </div>
                    <div class="user">
                        <img src="https://logodownload.org/wp-content/uploads/2018/10/copa-libertadores-logo.png">
                        <h2>Libertadores</h2>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

            <!-- New Users Section -->

            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome do campeonato</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("../PHP/ler_campeonato.php");
                        $campeonatos = lerCampeonato();
                        foreach ($campeonatos as $campeonato) {
                            echo "<tr>";
                            echo "<td>" . $campeonato['id_campeonato'] . "</td>";
                            echo "<td>" . $campeonato['nome_campeonato'] . "</td>";
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