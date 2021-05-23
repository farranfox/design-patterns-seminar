<?php

namespace App\Observer;

class Product 
{
	public $id;
	public $name;
	public $price;

	public function __construct(int $id, string $name, float $price)
	{
		$this->id    = $id;
		$this->name  = $name;
		$this->price = $price;
	}
}