<?php

$stringa_Convertita_Todo = file_get_contents('todo.json');
$todo_List = json_decode($stringa_Convertita_Todo, true);


header('Content-Type: application/json');
echo json_encode($todo_List);
