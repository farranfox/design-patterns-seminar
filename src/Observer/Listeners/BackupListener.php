<?php

namespace App\Observer\Listeners;

use App\Observer\ListenerInterface;

class BackupListener implements ListenerInterface
{
	public function update(array $data): void
	{
		echo 'Backup the order' . PHP_EOL;
	}
}