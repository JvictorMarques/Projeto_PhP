<?php
function getConnection() {
    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "banco_login";
    $PORT = 3306;

    $mysqli = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DBNAME, $PORT);
    if($mysqli->error) {
        die("Falha ao conectar ao servidor SQL: " . $mysqli->error);
    }
    return $mysqli;
}
?>