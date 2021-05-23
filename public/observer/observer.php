<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use App\Observer\EventManager;
use App\Observer\Checkout;
use App\Observer\Order;
use App\Observer\Product;
use App\Observer\Customer;
use App\Observer\Listeners\ThankYouLetterListener;
use App\Observer\Listeners\OfferDiscountListener;
use App\Observer\Listeners\StatsListener;
use App\Observer\Listeners\BackupListener;

$order = new Order();
$order->addProduct(new Product(1, 'Table', 19.0));
$order->addProduct(new Product(2, 'Chair', 9.99));
$order->setCustomer(new Customer(1, 'Farukh', 'farukh.narzullaev@gmail.com'));

// dump($order);

$eventManager = new EventManager();
$eventManager->addListener('checkout', new ThankYouLetterListener());
$eventManager->addListener('checkout', new OfferDiscountListener());
$eventManager->addListener('checkout', new StatsListener());
$eventManager->addListener('drafted', new BackupListener());

dump($eventManager->getListeners());

try {
	$checkout = new Checkout($eventManager);
	$checkout->setOrder($order);

	// $checkout->checkout();

	// $checkout->draft();
} catch(\Exception $e) {
	dump($e->getMessage());
}






