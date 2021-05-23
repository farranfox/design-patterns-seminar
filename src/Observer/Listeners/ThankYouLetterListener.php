<?php

namespace App\Observer\Listeners;

use App\Observer\ListenerInterface;

class ThankYouLetterListener implements ListenerInterface
{
	public function update(array $data): void
	{
		echo 'Send thank you email.' . PHP_EOL;
	}
}