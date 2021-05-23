<?php

namespace App\Observer;

interface ListenerInterface
{
	public function update(array $data): void;
}