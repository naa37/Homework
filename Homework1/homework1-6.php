<?php

$bmw = Array (
    'model' => null,
    'speed' => null,
    'door' => null,
    'year' => null
);
$bmw[model] = "X5";
$bmw[speed] = 120;
$bmw[door] = 5;
$bmw[year] = "2015";

$toyota = Array (
    'model' => null,
    'speed' => null,
    'door' => null,
    'year' => null
);
$toyota[model] = "Corolla";
$toyota[speed] = 110;
$toyota[door] = 4;
$toyota[year] = "2013";

$opel = Array (
    'model' => null,
    'speed' => null,
    'door' => null,
    'year' => null
);
$opel[model] = "Frontera";
$opel[speed] = 80;
$opel[door] = 5;
$opel[year] = "2000";
$car = Array (
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
);
foreach ($car as $key => $value) {
    echo 'CAR ', $key;
    echo '<br>';
    echo join(' ', $value);
    echo '<br>';
}