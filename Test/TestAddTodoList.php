<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/AddTodoList.php";

addTodoList("Omi");
addTodoList("Gusty");
addTodoList("Rifani");

var_dump($todoLists);
