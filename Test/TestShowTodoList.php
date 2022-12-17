<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";

$todoLists[1] = " Desain Website";
$todoLists[2] = " Belajar PHP Dasar";
$todoLists[3] = " Belajar PHP OOP";

showTodoList();
