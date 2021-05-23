<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Strategy\ContextOne;

$data = [
    'name'     => 'Farukh',
    'age'      => 33,
    'position' => 'Junior Web Developer'
];

$context = new ContextOne('string');

dump($context->format($data));
