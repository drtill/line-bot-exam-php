<?php



require "vendor/autoload.php";

$access_token = 'sPjZwBLjd8xSr3iUp7svt4F9e870WRaSnNSz8poR/Rt9c8+2gb3/j7cDxzlrbzGUg+q6DoA/r5LnaIDcRSBbuGtpwHNvgno0LgrZlcfGyprjoz0m/a2qDudNBqAc/iZjJuffpVqlf5RbDA3Qjg7z6gdB04t89/1O/w1cDnyilFU=';

$channelSecret = '11435abfb96894ceda7dd85ce78f3995';

$pushID = 'U620affb938d9def7fda701c4016ac485';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







