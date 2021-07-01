<?php



require "vendor/autoload.php";

$access_token = 'NSlUiITbt7qumUHo/CnCV0oDsVodeBEN0Ws9FUlDu7OM3lLZLw/vUxWU3y4cher1WeUoJFzGLxWpup4jjIFmfPjIb/hwEn3RfUX8rXuAWJEFD8PUMBHqtuiJqDqA7gy1ZniCPKbPjJlkp4BUbhJfOwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5caff068c15cb67bf3f15e98fe5c2fd2';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







