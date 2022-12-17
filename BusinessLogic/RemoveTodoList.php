<?php

function removeTodoList(int $getOrder)
{
    global $todoLists;

    if ($getOrder > sizeof($todoLists)) {
        return false;
    }

    for ($i = $getOrder; $i < sizeof($todoLists); $i++) {
        $todoLists[$i] = $todoLists[$i + 1];
    }

    unset($todoLists[sizeof($todoLists)]);

    return true;
}
