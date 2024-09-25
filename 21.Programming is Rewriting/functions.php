<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}


function authorize($connection, $status = Responce ::FORBIDDEN){
    if(! $connection){
        abort($status);
    }
}