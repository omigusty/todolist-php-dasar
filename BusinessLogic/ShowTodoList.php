<?php

function showTodoList()
{
    global $todoLists;

    echo "SHOW TODOLIST" . PHP_EOL;

    foreach ($todoLists as $todolist => $value) {
        echo "$todolist $value" . PHP_EOL;
    };
}
