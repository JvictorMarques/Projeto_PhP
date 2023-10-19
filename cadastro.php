<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
    <header>
        <ul>
            <li><a href="login.php">Login</a></li>
        </ul>
   </header>
    <div class="cadastro">
        <h1>Cadastro</h1>
        <?php 
            if(isset($_GET["mensagem"])){ ?>
            <p style="color:red;">
                <?php echo $_GET['mensagem']; ?>
            </p>
            <?php
            }
        ?>
        <form action="cadastro_logica.php" method="post">
            <input type="email" id="email" name="email" placeholder="Digite o seu email" required><br/><br/>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required><br/><br/>
            <input type="password" id="re_password" name="re_password" placeholder="Confirme a sua senha" required><br/><br/>
            <button>Registrar</button><br/><br/>
        </div>
</body>
</html>