<?php
$fileName = 'loop-number1.txt';
$loopNumber = file($fileName, FILE_IGNORE_NEW_LINES);
$idArray = [1240231, 1620274, 3001336];
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

file_put_contents('loop-number1.txt', $loopNumber);
