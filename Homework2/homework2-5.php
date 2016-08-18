<?php

function check($str)
{
    $str = mb_strtolower(str_replace(' ', '', $str));
    $newStr = stringrev($str);
    if (strcasecmp($str, $newStr) == 0) return true;
    else return false;
}
function printer($bool)
{
    if (is_bool($bool) and $bool) echo 'Строка является палиндромом';
    elseif (is_bool($bool) and !$bool) echo 'Строка не является палиндромом';
    else echo 'Передан неверный параметр!';
}
function stringrev($str)
{
    preg_match_all('/./us', $str, $arr);
    return implode(array_reverse($arr[0]));
}
printer(check('!@ Ах аха   @ !'));