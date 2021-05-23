<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Strategy\ContextTwo;
use App\Strategy\JsonFormatter;
use App\Strategy\XmlFormatter;
use App\Strategy\StringFormatter;

$data = [
    'name'     => 'Farukh',
    'age'      => 33,
    'position' => 'Junior Web Developer'
];

$context = new ContextTwo(new JsonFormatter());

dump($context->format($data));

$context->setStrategy(new XmlFormatter());

dump($context->format($data));

$context->setStrategy(new StringFormatter());

dump($context->format($data));
