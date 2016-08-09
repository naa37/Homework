<?php

for ($x = 1; $x <= 10; $x++)
{
    for ($y = 1; $y <= 10; $y++)
    {
        $mult = $x * $y;
        if ($x % 2 == 0 and $y % 2 == 0) echo "$x x $y = (", $mult, ')', '<br>';
        elseif ($x % 2 <> 0 and $y % 2 <> 0) echo "$x x $y = [", $mult, ']', '<br>';
        else echo "$x x $y = ", $mult, '<br>';
    }
}