<?php

function addTodoList(string $todo)
{
    global $todoLists;

    $getOrder = sizeof($todoLists) + 1;

    $todoLists[$getOrder] = $todo;
}
