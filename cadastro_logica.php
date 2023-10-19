<?php
include_once "conexao.php";
$email = htmlspecialchars($_POST["email"]);
$senha = htmlspecialchars($_POST["password"]);
$conexao = getConnection();
$query = mysqli_query($conexao, "SELECT * FROM cadastros WHERE email = '$email'") or die("Falha ao conectar ao servidor SQL: " . $conexao->error);
$rows=$query->num_rows;
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: cadastro.php?error=Informe uma email válido!");
}
if((isset($_POST["email"])) || (isset($_POST["password"])) || (isset($_POST["re_password"]))) {
    if (strlen($_POST["email"])==0) {
        header('Location: cadastro.php?mensagem=Preencha o seu email');
    }
    else if($rows==1) {
        header('Location: cadastro.php?mensagem=Email existente');
    }
    else if (strlen($_POST["password"])==0) {
        header('Location: cadastro.php?mensagem=preencha a senha');
    }
    else if (strlen($_POST["re_password"])==0) {
        header('Location: cadastro.php?mensagem=Confirme a sua senha');
    }
    else if($_POST["password"]!=$_POST["re_password"]) {
        header('Location: cadastro.php?mensagem=As senhas não se correspondem');
    }
    else {
        mysqli_query($conexao, "INSERT INTO cadastros (email, senha) VALUES ('$email', '$senha')");
        mysqli_close($conexao);
        header('Location: login.php');
    }
}
?>