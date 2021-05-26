<?php

namespace App\Decorator;

class SlackDecorator extends BaseDecorator
{
    public function send(string $message): void
    {
        echo "Sending message: {$message} via Slack..." . PHP_EOL;

        $this->notifier->send($message);
    }
}
