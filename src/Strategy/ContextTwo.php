<?php

namespace App\Strategy;

class ContextTwo
{
    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function format(array $data): string
    {
        return $this->strategy->format($data);
    }
}