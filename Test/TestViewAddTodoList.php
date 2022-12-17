<?php

require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/BusinessLogic/AddTodoList.php";

addTodoList("Omi");
addTodoList("Gusty");
addTodoList("Rifani");

viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();
viewAddTodoList();
