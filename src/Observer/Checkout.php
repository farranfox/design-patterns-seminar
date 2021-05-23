<?php

namespace App\Observer;

class Checkout 
{
	private $order;
	private $drafted;
	private $eventManager;

	public function __construct(EventManagerInterface $eventManager)
	{
		$this->eventManager = $eventManager;
	}

	public function setOrder(Order $order)
	{
		if (true === $this->drafted) {
			throw new \Exception('There is a drafted order. Proceed to checkout or cancel the order.');
		}

		$this->order = $order;
	}

	public function checkout()
	{
		$this->eventManager->notify('checkout', $this->order->toArray());

		$this->order   = null;
		$this->drafted = false;
	}

	public function cancel()
	{
		$order = clone $this->order;

		$this->eventManager->notify('canceled', $order->toArray());

		$this->order   = null;
		$this->drafted = false;
	}

	public function draft()
	{
		if (null === $this->order) {
			throw new \Exception('There is no active order to draft.');
			
		}

		$this->drafted = true;

		$this->eventManager->notify('drafted', $this->order->toArray());
	}
}