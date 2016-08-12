<?php

function calculate ($arr, $str) {
    if (!proverka($arr, $str)) return;
    switch ($str) {
        case '+': {
            $result = 0;
            foreach ($arr as $item) {
                $result = $result + $item;
            }
            echo $result;
        };
            break;
        case '-': {
            $result = 0;
            $result = $arr[0] - $arr[1];
            echo $result;
        };
            break;
        case '*': {
            $result = 1;
            foreach ($arr as $item) {
                $result = $result * $item;
            }
            echo $result;
        };
            break;
        case '/': {
            $result = 0;
            $result = $arr[0] / $arr[1];
            echo $result;
        };
            break;
        case '%': {
            $result = 0;
            $result = $arr[0] % $arr[1];
            echo $result;
        }
    }
}
function proverka($arr, $str) {
    foreach ($arr as $item) {
        if (!is_numeric($item)) {
            echo 'Некоректные значения для арифметического действия';
            return false;
        }
    }
    switch ($str) {
        case '+';
        case '*': {
            if (count($arr) < 2) {
                echo 'Для этого действия необходимо не меньше 2-ух аргументов!';
                return false;
            }
        };
            break;
        case '%';
        case '/';
        case '-': {
            if (count($arr) != 2) {
                echo 'Для этого действия необходимо 2 аргумента!';
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
$array = [10, 4.5];
$string = '+';
calculate($array, $string);