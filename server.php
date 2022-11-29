<?php

$stringa_Convertita_Todo = file_get_contents('todo.json');
$todo_List = json_decode($stringa_Convertita_Todo, true);

// aggiungo quello che ho in axios.post e lo riscrivo nel file 
if (isset($_POST["newTask"])) {
    // aggiungo il valore inserito dall'utente nell'array
    $newTask = $_POST["newTask"];
    $todo_List[] = [
        "text" => $newTask,
        "done" => false
    ];
    // riscrivo il file 
    file_put_contents('todo.json', json_encode($todo_List));
}

header('Content-Type: application/json');
echo json_encode($todo_List);
