<?php

class Subscription
{
    protected Gateway $gateway;

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {

    }
   
    public function cancel()
    {
        // api request
        // find stripe customer id
        $this->gateway->findCustomer();
        // find stripe subscription by customer
    }

    public function invoice()
    {

    }

    public function swap()
    {

    }
}

Interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway 
{
    
    public function findCustomer()
    {
        echo"Stripe findCustomer";
    }

    public function findSubscriptionByCustomer()
    {

    }
}

class BraintreeGateway implements Gateway 
{
    
    public function findCustomer()
    {
        echo"Brain findCustomer";
    }

    public function findSubscriptionByCustomer()
    {

    }
}

$obj = new Subscription(new StripeGateway());
$obj->cancel();
$obj = new Subscription(new BraintreeGateway());
$obj->cancel();