<?php

use Introvert\ApiClient;

require_once(__DIR__ . '/vendor/autoload.php');

$apiKey = "23bc075b710da43f0ffb50ff9e889aed";
$api = new Introvert\ApiClient();
$api->getConfig()->setHost('https://api.s1.yadrocrm.ru/tmp');
$api->getConfig()->setApiKey('key', '23bc075b710da43f0ffb50ff9e889aed');
$responsible = $api->yadro->getResponsible("weightsite", ["bbb@bb.ru", "deemird2@yandex.ru", "olgamooha2212@mail.com"]);

$_POST['responsible_user_id'] = $responsible["result"]["amoid"];

require_once($_SERVER['DOCUMENT_ROOT'] . '/introvert_save.php');
echo '<pre>';
var_dump($_POST);

