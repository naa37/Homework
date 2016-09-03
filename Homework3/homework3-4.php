<?php
$url = 'https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json';
if($curl = curl_init()){
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Запрещаем вывод в браузер
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true); // Убираем проверку SSL
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); // Убираем SSL проверку хоста
    curl_setopt($curl, CURLOPT_URL, $url); // Устанавливаем URL для запроса

    $response = curl_exec($curl);
    curl_close($curl);
    $jsonArray = json_decode($response, true);
    echo '<table><tr><td><b>title: </b></td><td>', $jsonArray[query][pages][15580374][title], '</td></tr>';
    echo '<tr><td><b>page_id:</b></td><td>', $jsonArray[query][pages][15580374][pageid], '</td></tr></table>';
}