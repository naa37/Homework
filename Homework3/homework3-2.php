<?php
$data = array(
    'школьные предметы' => array(
        array('предмет' => 'Русский язык'),
        array('предмет' => 'Литература'),
        array('предмет' => 'Алгебра'),
        array('предмет' => 'Геометрия'),
        array('предмет' => 'Информатика'),
        array('предмет' => 'Физика'),
        array('предмет' => 'Химия'),
        array('предмет' => 'Биология'),
        array('предмет' => 'Астрономия'),
        array('предмет' => 'Физкультура'),
    )
);
saveJson('output.json', $data);
$jsonArray = json_decode(file_get_contents('./output.json'), true);
$count = count($jsonArray['школьные предметы']);
if (rand(1,2) === 1) {
    $quantity = rand(1, $count);//количество изменяемых элементов
    for ($i = 1; $i <= $quantity; $i++) {
        $item = rand(0, $count - 1);
        $jsonArray['школьные предметы'][$item] = array('предмет' => 'Халява');
    }
}
saveJson('output2.json', $jsonArray);
$jsonArray1 = json_decode(file_get_contents('./output.json'), true);
$jsonArray2 = json_decode(file_get_contents('./output2.json'), true);
for($i = 0; $i < $count; $i++) {
    $difArray = array_diff_assoc($jsonArray1['школьные предметы'][$i], $jsonArray2['школьные предметы'][$i]);
    echo '<pre>';
    if ($difArray != null)print_r($difArray);
    echo '</pre>';
}
function saveJson ($file, $arr) {
    $jsonString = json_encode($arr);
    $fp = fopen($file, 'w');
    if (fwrite($fp, $jsonString)) echo 'Данные успешно записаны<br>';
    fclose($fp);
}
