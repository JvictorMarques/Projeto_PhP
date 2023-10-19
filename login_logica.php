<?php
include("conexao.php");
if((isset($_POST["email"])) || (isset($_POST["password"]))) {
    if (strlen($_POST["email"])==0) {
        header('Location: login.php?mensagem=Preencha o seu email');
    }
    else if (strlen($_POST["password"])==0) {
        header('Location: login.php?mensagem=Preencha a sua senha');
    }
    else {
        $conexao = getConnection();
        $email = htmlspecialchars($_POST["email"]);
        $senha = htmlspecialchars($_POST["password"]);
        $query = mysqli_query($conexao, "SELECT * FROM cadastros WHERE email = '$email' AND senha = '$senha'") or die("Falha ao conectar ao servidor SQL: " . $conexao->error);
        $rows=$query->num_rows;
        if($rows==1) {
            if(!isset($_SESSION)) {
                session_start();
            }
            $fetch = $query->fetch_assoc();
            $_SESSION["id"] = $fetch["id"];
            header('Location: cadastro_paciente.php');
        }
        else {
            header('Location: login.php?mensagem=Email ou senha invalidos');
        }
    }
}
?>
