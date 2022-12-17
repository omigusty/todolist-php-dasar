<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
require_once __DIR__ . "/BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";

addTodoList("Omi");
addTodoList("Gusty");
addTodoList("Rifani");

showTodoList();

removeTodoList(2);

showTodoList();

removeTodoList(1);

showTodoList();

$success = removeTodoList(3);
var_dump($success);

showTodoList();
