<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "Menambah Todo: " . PHP_EOL;

    $getTodo = input("Buat todo (tekan x untuk batal): ");

    if ($getTodo == "x") {
    } else {
        addTodoList($getTodo);
    }
}
