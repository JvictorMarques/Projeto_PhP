<?php
include("verificacao_login.php");
include("conexao.php");
$nome = htmlspecialchars($_POST["nome"]);
$idade = htmlspecialchars((int)$_POST["idade"]);
$peso = htmlspecialchars((float)$_POST["peso"]);
$altura =htmlspecialchars((float)$_POST["altura"]);
$conexao = getConnection();
if((isset($_POST["nome"])) || (isset($_POST["idade"])) || (isset($_POST["peso"])) || (isset($_POST["altura"]))) {   
    if(!filter_var($idade, FILTER_VALIDATE_INT)){
        header("location: cadastro_paciente.php?error=Informe uma idade válida!");
    }
    if(!filter_var($peso, FILTER_VALIDATE_FLOAT)){
        header("location: cadastro_paciente.php?error=Informe um peso válido!");
    }
    if(!filter_var($altura, FILTER_VALIDATE_FLOAT)){
        header("location: cadastro_paciente.php?error=Informe uma altura válida!");
    }
    if (strlen($_POST["nome"])==0) {
        header('Location: cadastro_paciente.php?mensagem=Preencha o seu nome');
    }
    else if (strlen($_POST["idade"])==0) {
        header('Location: cadastro_paciente.php?mensagem=Preencha o sua idade');
    }
    else if (strlen($_POST["peso"])==0) {
        header('Location: cadastro_paciente.php?mensagem=Preencha o seu peso');
    }
    else if (strlen($_POST["altura"])==0) {
        header('Location: cadastro_paciente.php?mensagem=Preencha o sua altura');
    }
    else {
        $imc = round($peso / (pow($altura, 2)), 1);
        mysqli_query($conexao, "INSERT INTO cadastro_paciente (nome, idade, peso, altura, imc) VALUES ('$nome', $idade, $peso, $altura, $imc)");
        header('Location: tabela.php');
    }
}
?>