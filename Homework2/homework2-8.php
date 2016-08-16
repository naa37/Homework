<?php
function fileread($name) {
    $fp = fopen($name, 'r');
    if ($fp) {
        echo fgets($fp);
        fclose($fp);
    }
    else echo "Ошибка при открытии файла";
}
$filename = 'test.txt';
fileread($filename);


