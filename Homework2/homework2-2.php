<?php

function calculate ($arr, $str)
{
    if (!proverka($arr, $str)) return;
    switch ($str) {
        case '+': {
            $result = 0;
            foreach ($arr as $item) {
                $result = $result + $item;
            }
        };
            break;
        case '-': {
            $result = $arr[0];
            for ($i = 1; $i < count($arr); $i++){
                $result = $result - $arr[$i];
            }
        };
            break;
        case '*': {
            $result = 1;
            foreach ($arr as $item) {
                $result = $result * $item;
            }
        };
            break;
        case '/': {
            $result = $arr[0];
            for ($i = 1; $i < count($arr); $i++){
                $result = $result / $arr[$i];
            }
        };
            break;
        case '%': {
            $result = $arr[0];
            for ($i = 1; $i < count($arr); $i++){
                $result = $result % $arr[$i];
            }
        }
    }
    echo $result;
}
function proverka($arr, $str)
{
    foreach ($arr as $item) {
        if (!is_numeric($item)) {
            echo 'Некоректные значения для арифметического действия';
            return false;
        }
    }
    switch ($str) {
        case '+':
        case '*':
        case '-':
        case '/':
        case '%': {
            if (count($arr) < 2) {
                echo 'Для этого действия необходимо не меньше 2-ух аргументов!';
                return false;
            }
        };
            break;
        default: {
            echo 'Неизвестное действие';
            return false;
        }
    }
    return true;
}
$array = [10, 5, 1];
$string = '-';
calculate($array, $string);