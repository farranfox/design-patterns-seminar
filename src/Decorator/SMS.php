<?php

namespace App\Decorator;

final class SMS implements NotifierInterface
{
    public function send(string $message): void
    {
        echo "Sending message: {$message} via SMS..." . PHP_EOL;
    }
}
