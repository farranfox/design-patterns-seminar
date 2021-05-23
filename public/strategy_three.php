<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Strategy\ContextThree;
use App\Strategy\JsonFormatter;
use App\Strategy\XmlFormatter;
use App\Strategy\StringFormatter;

$data = [
    'name'     => 'Farukh',
    'age'      => 33,
    'position' => 'Junior Web Developer'
];

$context = new ContextThree();
$context->addStrategy('json', new JsonFormatter());
$context->addStrategy('xml', new XmlFormatter());
$context->addStrategy('string', new StringFormatter());

$strategy = $context->getStrategy('json');

dump($strategy->format($data));

