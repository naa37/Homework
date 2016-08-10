<?php

echo '<table border="1px" cellspacing="0" bordercolor="darkblue" bgcolor="#fff8dc">';
for ($x = 1; $x <= 10; $x++)
{
    echo '<tr>';
    for ($y = 1; $y <= 10; $y++)
    {
        echo '<td style="padding: 5px">';
        $mult = $x * $y;
        if ($x % 2 == 0 and $y % 2 == 0) echo "$y x $x = (", $mult, ')', '<br>';
        elseif ($x % 2 <> 0 and $y % 2 <> 0) echo "$y x $x = [", $mult, ']', '<br>';
        else echo "$y x $x = ", $mult, '<br>';
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';