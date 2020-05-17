<?php
require_once("db.php");
require_once("task.php");

add_task($link, $_POST['name'], $_POST['task_text'], $_POST['author'], $_POST['email']);

?>