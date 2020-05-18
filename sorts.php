<?php

//сортировка
function sort_name($a, $b) {
    return $a['name'] <=> $b['name'];
}

function sort_email($a, $b) {
    return $a['email'] <=> $b['email'];
}

function sort_status($a, $b) {
    return $a['status_task'] <=> $b['status_task'];
}

?>