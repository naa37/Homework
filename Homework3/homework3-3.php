<?php
$data = array();
for ($i = 1; $i <= 50; $i++) {
    array_push($data, rand(1, 100));
};
$fp = fopen('./test.csv', 'w');
fputcsv($fp, $data);
fclose($fp);
echo 'Файл успешно записан';
$fcsv = fopen('./test.csv', 'r');
if ($fcsv) {
    $res = array();
    while (($csvData = fgetcsv($fcsv, 1000, ",")) !== FALSE) {
        $res[] = $csvData;
    }
    echo '<pre>';
    $sum = 0;
    foreach ($res[0] as $item) {
        if ($item % 2 == 0) {
            $sum = $sum + $item;
        }
    }
    echo $sum;
}