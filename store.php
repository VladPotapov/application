<?php
require_once("db.php");

add_task($_POST['name'], $_POST['task_text'], $_POST['author'], $_POST['email']);

?>