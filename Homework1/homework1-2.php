<?php

$allPictures = 80;
$markerPictures = 23;
$pencilPictures = 40;
echo 'Всего рисунков - ', $allPictures, '<br>';
echo 'Выполнено фломастерами - ', $markerPictures, ' рисунка', '<br>';
echo 'Выполнено карандашами - ', $pencilPictures, ' рисунков', '<br>';
echo 'Выполнено красками - ?';
echo '<br>';
echo 'Чтобы узнасть сколько рисунков выполненно красками,  из общего количества рисунков вычитаем количество рисунков выполненных фломастерами и выполненных карандашами:', '<br>';
$paintPictures = $allPictures - $markerPictures - $pencilPictures;
echo "$allPictures - $markerPictures - $pencilPictures = $paintPictures", '<br>';
echo 'Ответ: красками выполнено ', $paintPictures, ' рисунков.';