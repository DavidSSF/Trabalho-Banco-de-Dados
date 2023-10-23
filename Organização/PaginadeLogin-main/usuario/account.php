<?php 
    require_once("../PHP/cadastrar_usuarios.php");

    cadas();
?>
<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta</title>

    <!--CSS-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/media.css">

    <!--JS & jQuery-->
    <script type="text/javascript" src="./js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div id="container">
        <div class="banner">
            <img src="../img/cbf.png" alt="imagem-login" width="250px">
            <p style="color: #fff;">
                Seja bem vindo, acesse e aproveite todo o conteúdo,
                <br>somos uma equipe de profissionais empenhados em
                <br>trazer o melhor conteúdo direcionado a você usuário.
            </p>
        </div>

        <div class="box-login">
            <h1>Junte-se a nós,<br>Crie hoje a sua conta!</h1>

            <div class="box-account">
                <form method="post">
                    <h2>informe seus dados</h2>
                    <input type="text" name="username" id="username" placeholder="nome">

                    <input type="password" name="password" id="password" placeholder="senha">
                    <button type="submit" style="margin-top: 5%; margin-left: 29%;">Criar Conta</button>
                </form>
            </div>

            <a href="login.php">
                <p>Login</p>
            </a>
        </div>
    </div>

</body>

</html>