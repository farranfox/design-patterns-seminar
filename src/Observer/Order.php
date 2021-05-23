<?php

namespace App\Observer;

class Order
{
	public $customer;
	public $products;

	public function setCustomer(Customer $customer) 
	{
		$this->customer = $customer;
	}

	public function addProduct(Product $product)
	{
		$this->products[$product->id] = $product;
	}

	public function removeProduct(int $productId)
	{
		if (array_key_exists($productId, $this->products)) {
			unset($this->products[$productId]);
		}
	}

	public function toArray()
	{
		return [
			'customer' => $this->customer,
			'products' => $this->products,
		];
	}
}