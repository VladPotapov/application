<?php
require_once("db.php");

add_task($link, $_POST['name'], $_POST['task_text'], $_POST['author'], $_POST['email']);



?>