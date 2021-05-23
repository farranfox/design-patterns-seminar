<?php

namespace App\Strategy;

class ContextThree
{
    private $strategies = [];

    public function addStrategy(string $name, StrategyInterface $strategy)
    {
    	if (! array_key_exists($name, $this->strategies)) {
    		$this->strategies[$name] = $strategy;
    	}
    }

    public function getStrategy($name)
    {
    	if (! array_key_exists($name, $this->strategies)) {
    		throw new \InvalidArgumentException(sprintf('%s strategy is not supported'));
    	}

    	return $this->strategies[$name];
    }

    public function format(string $name, array $data): string
    {
    	return $this->getStrategy($name)->format($data);
    }
}