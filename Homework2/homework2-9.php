<?php

$text = "Hello again!";
$fp = fopen("anothertest.txt", "w");
fwrite($fp, $text);
fclose($fp);