<?php

function calculate ($str) {
    $arr = func_get_args();
    unset($arr[0]);
    if (!proverka($str, $arr)) return;
    switch ($str) {
        case '+': {
            $result = 0;
            foreach ($arr as $item) {
                $result = $result + $item;
            }
        };
            break;
        case '-': {
            $result = $arr[1];
            for ($i = 2; $i <= count($arr); $i++){
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
            $result = $arr[1];
            for ($i = 2; $i <= count($arr); $i++){
                $result = $result / $arr[$i];
            }
        };
            break;
        case '%': {
            $result = $arr[1];
            for ($i = 2; $i <= count($arr); $i++){
                $result = $result % $arr[$i];
            }
        }
    }
    echo $result;
}
function proverka($str, $arr) {
    foreach ($arr as $item) {
        if (!is_numeric($item)) {
            echo 'Некоректные значения для арифметического действия';
            return false;
        }
    }
    switch ($str) {
        case '+';
        case '*';
        case '-';
        case '/';
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
calculate('+', 1, 2, 3, 5.2);