<?php

namespace App\Strategy;

final class JsonFormatter implements StrategyInterface
{
	public function format(array $data): string 
	{
		return json_encode($data);
	}
}
