<?php

$arg_1 = $argv[1];

if (empty($arg_1) || !is_numeric($arg_1) || intval($arg_1)<0 || floatval($arg_1)!=intval($arg_1))
{
    echo "ОШИБКА ВО ВХОДНЫХ ДАННЫХ". PHP_EOL;
    return;
}

$year = intval($arg_1);

if ($year % 400 == 0 || $year % 4==0 && $year % 100 != 0)
    echo "ДА". PHP_EOL;
else
    echo "НЕТ". PHP_EOL;  
