<?php

function outputStrings($arr)
{
    $unitedString = '';
    if (func_num_args() > 1 and is_bool(func_get_arg(1)) and func_get_arg(1)) {
        for ($i = 0; $i < count($arr); $i++) {
            $unitedString = "$unitedString"." $arr[$i]";
        }
        return $unitedString;
    } else {
        for ($i = 0; $i < count($arr); $i++) {
            echo "<p>$arr[$i]</p>";
        }
    }

}
$arrStrings = ["мама мыла раму", "один два три", "show must go on"];
echo outputStrings($arrStrings, true);