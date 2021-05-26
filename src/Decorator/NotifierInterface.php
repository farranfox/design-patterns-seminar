<?php

namespace App\Decorator;

interface NotifierInterface
{
    public function send(string $message): void;
}
