<?php

function outputStrings($arr) {
    if (func_num_args() > 1 and is_bool(func_get_arg(1)) and func_get_arg(1)) {
        for ($i = 0; $i < count($arr); $i++) {
            $unitedString = "$unitedString"." $arr[$i]";
        }
        echo $unitedString;
    }
    else {
        for ($i = 0; $i < count($arr); $i++) {
            echo "<p>$arr[$i]</p>";
        }
    }

}
$arrStrings = ["мама мыла раму", "один два три", "show must go on"];
outputStrings($arrStrings, true);