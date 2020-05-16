<?php

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "application";
$link = mysqli_connect($host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    printf("Соединение не удалось: %s\n", mysqli_connect_errno());
    exit();
}
?>