<?php

namespace App\Observer\Listeners;

use App\Observer\ListenerInterface;

class OfferDiscountListener implements ListenerInterface
{
	public function update(array $data): void
	{
		echo 'Send discount offers email.' . PHP_EOL;
	}
}