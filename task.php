<?php
require_once("db.php");

function add_task($name, $text, $author, $email) {
    $sql = 'INSERT INTO tasks VALUES (NULL, "'.$name.'", "'.$text.'", "'.$author.'", "'.$email.'", "perform")';
    mysqli_query($link, $sql);
}

function getTask($link) {
    $query = "SELECT * FROM `tasks`";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

getTask($link);

?>