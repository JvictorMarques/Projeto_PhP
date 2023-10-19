<?php
if(!isset($_SESSION)) {
    session_start();
}
session_destroy();
header('Location: login.php?mensagem=Você foi desconectado com sucesso');
?>