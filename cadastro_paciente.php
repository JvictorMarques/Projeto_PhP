<?php
include("verificacao_login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
    <header>
            <ul>
                <li class="litab"><a href="tabela.php">Tabela</a></li>
                <li><a href="logout.php">Logout</a><br><br></li>
            </ul>
        </header>
    <div class="paciente">
        <h1>Cadastro</h1>
        <?php 
            if(isset($_GET["mensagem"])) { ?>
            <p style="color:red;"> <?php echo $_GET['mensagem']; ?></p><?php
            }
        ?>
        <form action="cadastro_paciente_logica.php" method="post">
        <input type="text" id="nome" name="nome" placeholder="Digite o nome do paciente" required><br/><br/>
        <input type="text" id="idade" name="idade" placeholder="Digite a idade do paciente" required><br/><br/>
        <input type="text" id="peso" name="peso" placeholder="Digite o peso do paciente" required><br/><br/>
        <input type="text" id="altura" name="altura" placeholder="Digite a altura do paciente" required><br/><br/>
        <button>Registrar</button><br/><br/>
    </div>
</body>
</html>
