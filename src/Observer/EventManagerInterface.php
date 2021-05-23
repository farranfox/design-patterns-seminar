<?php

namespace App\Observer;

interface EventManagerInterface 
{
	public function addListener(string $eventName, ListenerInterface $listeners): void;

	public function removeListener(string $eventName, ListenerInterface $listeners): void;

	public function notify(string $eventName, array $data): void;

	public function getListeners(string $eventName = null): array;
}