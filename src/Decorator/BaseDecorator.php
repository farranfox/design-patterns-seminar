<?php

namespace App\Decorator;

abstract class BaseDecorator implements NotifierInterface
{
    protected $notifier;

    public function __construct(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;
    }
}
