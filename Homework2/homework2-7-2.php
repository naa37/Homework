<?php

function infopac($str)
{
    preg_match_all('/[0-9]+/', $str, $arr);
    preg_match_all('/:\)/', $str, $arr1);
//    echo '<pre>';
//    print_r($arr);
//    print_r($arr1);
//    echo '</pre>';
    if ($arr[0][0] > 1000 and $arr1[0][0] == null) echo 'Сеть есть', '<br>';
    elseif ($arr1[0][0] != null) smile();
}
function smile()
{
    echo '____________888888888888888____________', '<br>';
    echo '_________888888888888888888888_________', '<br>';
    echo '_______8888888888888888888888888_______', '<br>';
    echo '_____88888888888888888888888888888_____', '<br>';
    echo '____8888888__8888888888888__8888888____', '<br>';
    echo '__88888888____88888888888____88888888__', '<br>';
    echo '_8888888888__8888888888888__8888888888_', '<br>';
    echo '_8888888888888888888888888888888888888_', '<br>';
    echo '888888888888888888888888888888888888888', '<br>';
    echo '888888888888888888888888888888888888888', '<br>';
    echo '8888888888888888_SMILE_8888888888888888', '<br>';
    echo '888888_8888888888888888888888888__8888_', '<br>';
    echo '_8888__8888888888888888888888888__8888_', '<br>';
    echo '__8888__88888888888888888888888__8888__', '<br>';
    echo '____888__888888888888888888888__888____', '<br>';
    echo '_____8888__88888888888888888__8888_____', '<br>';
    echo '_______88888_______________88888_______', '<br>';
    echo '_________888888888888888888888_________', '<br>';
    echo '____________888888888888888____________', '<br>';
    echo '_______________________________________', '<br>';
}
$str = "RX packets:9876 er:)rors:4 dropped:3 overruns:2 frame:1. ";
infopac($str);