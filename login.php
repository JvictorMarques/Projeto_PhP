<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">

</head>
<body class="bdy">
    <header>
        <ul>
            <li><a href="cadastro.php">Cadastre-se</a></li>
        </ul>
    </header>
    <div class="main">
    <h1>Login</h1>
    <?php if(isset($_GET["mensagem"])) { ?>
        <p style="color:purple;"> <?php echo $_GET["mensagem"]; ?> </p>
    <?php } ?>
        <form action="login_logica.php" method="post">
            <input type="text" id="email" name="email" placeholder="Digite o seu email" required><br/><br/>
            <input type="password" id="password" name="password" placeholder="Digite a sua senha" required><br/><br/>
            <button>Entrar</button><br/><br/>
        </form>
    </div>
</body>
</html>