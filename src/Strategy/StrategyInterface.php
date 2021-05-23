<?php

namespace App\Strategy;

interface StrategyInterface
{
	public function format(array $data): string;
}
