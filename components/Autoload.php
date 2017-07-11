<?php

function __autoload($class_name)
{
    $array_paths = array(
        '/tasks/task1/',
        '/tasks/task2/',
        '/tasks/task3/',
        '/components/'
    );

    foreach ($array_paths as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}