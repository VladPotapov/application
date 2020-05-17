<?php
require_once("db.php");

function add_task($link, $name, $text, $author, $email) {
    $sql = 'INSERT INTO tasks VALUES (NULL, "'.$name.'", "'.$text.'", "'.$author.'", "'.$email.'", "perform")';
    mysqli_query($link, $sql);
}

function getTask($link) {
    $arr = [];
    $query = "SELECT * FROM `tasks`";
    $result = mysqli_query($link, $query);
    while($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }
    return $arr;
}

//отвечает за вывод текста в задаче
function item_task($item) {
    echo $item;
}

?>