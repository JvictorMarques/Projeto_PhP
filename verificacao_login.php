<?php
if(!isset($_SESSION)) {
    session_start();
}
if(!isset($_SESSION["id"])) {
    header('Location: login.php?mensagem=Você precisa estar logado para entrar');
}
?>