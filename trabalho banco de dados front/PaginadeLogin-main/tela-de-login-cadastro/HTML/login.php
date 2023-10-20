<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css">
    <!--JS & jQuery-->
    <script type="text/javascript" src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    
    <div id="container">
        <div class="banner">
            <img src="../img/cbf.png" alt="imagem-login" width="250px">
            <p style="color: #fff; font-weight: 400;">
                Seja bem-vindo, acesse e aproveite todo o conteúdo,
                <br>somos uma equipe de profissionais empenhados em
                <br>trazer o melhor conteúdo direcionado a você, usuário.
            </p>
        </div>

        <div class="box-login">
            <h1>
                Olá!<br>
                Seja bem-vindo de volta.
            </h1>

            <div class="box">
                <h2>faça o seu login agora</h2>
                <form method="post" action="./PHP/processar_login.php">
                    <input type="text" name="username" id="username" placeholder="Usuário" required>
                    <input type="password" name="password" id="password" placeholder="Senha" required>
                    <button type="submit" class="butao" style="margin-top: 5%;">Login</button>
                </form>

                <a href="account.php">
                    <p>Criar uma conta</p>
                </a>

                <div class="social">
                    <img src="../img/facebook.png" alt="facebook">
                    <img src="../img/google.png" alt="google">
                    <img src="../img/twitter.png" alt="twitter">
                    <a href="#"><img src="../img/github.png" alt="github"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
