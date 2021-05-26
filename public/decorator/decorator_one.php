<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Decorator\SMS;
use App\Decorator\FacebookDecorator;
use App\Decorator\SlackDecorator;

$sms = new SMS();
$decorator = new FacebookDecorator($sms);
$decorator = new SlackDecorator($decorator);

$decorator->send('Hello, World!');
