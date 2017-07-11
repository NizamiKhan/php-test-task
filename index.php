<?php

//Отображение ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Убрать ограничения на время выполнения и память (для задания 1)
ini_set("memory_limit", -1);
set_time_limit(0);

//Подключение файлов
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');

//Задание 1
PrimeNumbers::run();
//Задание 2
Library::run();
//Задание 3
//...
