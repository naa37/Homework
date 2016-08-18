<?php

function tableMult ($param1, $param2)
{
    if (!proverka(func_get_args())) return;
    echo '<table border="1px" cellspacing="0" bordercolor="darkblue" bgcolor="#fff8dc">';
    for ($x = 1; $x <= $param1; $x++) {
        echo '<tr>';
        for ($y = 1; $y <= $param2; $y++) {
            echo '<td style="padding: 5px">', "$y * $x = ", $x * $y, '</td>';
        }
        echo '</tr>';
    }
}
function proverka($arr)
{
    if (count($arr) != 2) {
        echo 'Функция принимает только два параметра!';
        return false;
    }
    foreach ($arr as $item) {
        if (!is_int($item) or $item < 1) {
            echo 'Фукция принимает только целые числа';
            return false;
        }
    }
    return true;
}
tableMult(20, 5);