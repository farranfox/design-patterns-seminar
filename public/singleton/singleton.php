<?php

require_once __DIR__ . '/../../vendor/autoload.php';

Use App\Singleton\Database;

$dbInstance = Database::getInstance([
    'db'       => 'shopify_dev_0',
    'username' => 'foo',
    'password' => 'bar'
]);

dump($dbInstance);

