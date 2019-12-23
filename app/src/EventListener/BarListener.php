<?php
// src/EventListener/ExceptionListener.php
namespace App\EventListener;

use App\Event\FooEvent;

class BarListener
{
    public function doSomething(FooEvent $event)
    {
        /* ... */
    }
}