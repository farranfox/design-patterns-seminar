<?php

namespace App\Observer\Listeners;

use App\Observer\ListenerInterface;

class StatsListener implements ListenerInterface
{
	public function update(array $data): void
	{
		echo 'Do and save some stats.' . PHP_EOL;
	}
}