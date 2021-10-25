<?php
require_once 'vendor/autoload.php';
$messagebird = new MessageBird\Client('API Key');
$message = new MessageBird\Objects\Message;
$message->originator = 'OriginName';
$message->recipients = [ '623456789' ];
$message->body = 'Hi! this is your first message';
$response = $messagebird->messages->create($message);
var_dump($response);
