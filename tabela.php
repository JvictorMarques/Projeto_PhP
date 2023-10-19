<?php
include("verificacao_login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
    <div class="main">
        <h1 class="title">Tabela</h1><br>
        <table  class="main-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>IMC</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("conexao.php");
                $conexao = getConnection();
                $rows = mysqli_query($conexao, "SELECT * FROM cadastro_paciente");
                while($row = mysqli_fetch_assoc($rows)) {
                    echo "<tr>
                        <td>" . $row["id"] ." </td>
                        <td>" . $row["nome"] ." </td>
                        <td>" . $row["idade"] . "</td>
                        <td>" . $row["peso"] . "</td>
                        <td>" . $row["altura"] . "</td>
                        <td>" . $row["imc"] . "</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="cadastro_paciente.php" class="lnk1">Cadastro</a>
        <a href="logout.php" class="lnk2">Logout</a>
        </div>
</body>
</html>