<?php
namespace App\Event;

use Symfony\Component\EventDispatcher\Event;

class BasketProductAdded extends Event
{
    const NAME = 'basket.product_added';

    private $product;
    private $customer;

    public function __construct()
    {
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getCustomer()
    {
        return $this->customer;
    }
}