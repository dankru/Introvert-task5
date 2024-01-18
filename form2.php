<?php
$fileName = 'loop-number2.txt';
$loopNumber = file($fileName, FILE_IGNORE_NEW_LINES);
$idArray = [5917048, 5888863, 6661201];
$_POST['responsible_user_id'] = $idArray[$loopNumber[0] - 1];

require_once($_SERVER['DOCUMENT_ROOT'] . '/introvert_save.php');

echo '<pre>';
var_dump($_POST);

if ($loopNumber[0] == 3) {
    $loopNumber[0] = 0;
}
if ($loopNumber[0] < 3) {
    $loopNumber[0]++;
}

file_put_contents('loop-number2.txt', $loopNumber);
