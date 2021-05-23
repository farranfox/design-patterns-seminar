<?php

namespace App\Observer;

class EventManager implements EventManagerInterface
{
	private $listeners = [];

	public function addListener(string $eventName, ListenerInterface $listeners): void
	{
		$this->listeners[$eventName][] = $listeners;
	}

	public function removeListener(string $eventName, ListenerInterface $listeners): void
	{
		if (empty($this->listeners[$eventName])) {
            return;
        }

		foreach ($this->listeners[$eventName] as $key => $item) {
			if ($item === $listeners) {
				unset($this->listeners[$eventName][$key]);
			}
		}
	}

	public function notify(string $eventName, array $data): void
	{
		if (empty($this->listeners[$eventName])) {
			return;
		}

		foreach ($this->listeners[$eventName] as $key => $listeners) {
			$listeners->update($data);
		}
	}

	public function getListeners(string $eventName = null): array
	{
		if (null !== $eventName) {
            if (empty($this->listeners[$eventName])) {
                return [];
            }

            return $this->listeners[$eventName];
        }

        return $this->listeners;
	}
}