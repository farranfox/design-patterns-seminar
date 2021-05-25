<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\OOP\InstagramPostUpdater;
use App\OOP\OopBasics;

$service = new OopBasics(new InstagramPostUpdater());
$service->doSomething();