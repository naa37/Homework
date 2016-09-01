<?php
header('Content-Type: text/html; charset=utf-8');
$xmlPath = './data.xml';
$xml = simplexml_load_file($xmlPath);
$attrs = $xml->attributes();
echo "<h1>Purchase order number №$attrs[PurchaseOrderNumber]. Order date: $attrs[OrderDate].</h1>";
foreach ($xml -> Address as $item) {
    echo '<h2>';
    outputItem($item, 'Type');
}
echo '<h2>Delivery notes: </h2>', $xml -> DeliveryNotes, '<br><br>';
foreach ($xml -> Items -> Item as $item) {
    echo '<h2>Part number: ';
    outputItem($item, 'PartNumber');
}
function outputItem ($arr, $atr) {
    echo "$arr[$atr]</h2>";
    echo '<table>';
    foreach ($arr as $key => $value) {
        echo '<tr><td><b><b>', $key, '</b></td><td>', $value, '</td></tr>';
    }
    echo "</table>";
}