<?php

namespace App\Decorator;

class FacebookDecorator extends BaseDecorator
{
    public function send(string $message): void
    {
        echo "Sending message: {$message} via Facebook..." . PHP_EOL;

        $this->notifier->send($message);
    }
}
