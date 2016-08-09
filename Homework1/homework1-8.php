<?php

$str = "один два три четыре пять";
echo $str, '<br>';
$arr = explode(' ',$str);
echo '<pre>';
print_r($arr);
echo '</pre><br>';
$i = 0;
while (count($arr) > $i)
{
    $index = count($arr) - $i - 1;
    if ($i + 1 == count($arr)) $newStr = "$newStr"."$arr[$index]";
    else $newStr = "$newStr"."$arr[$index]"."|";
    $i++;
}
echo $newStr;