<?php

class Subscription
{
    protected StripeGateway $gateway;
    public function __construct(StripeGateway $gateway)
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
        $this->gateway->findStripeCustomer();
        // find stripe subscription by customer
    }
    public function invoice()
    {

    }
    public function swap()
    {

    }


}

class StripeGateway 
{
    
    public function findStripeCustomer()
    {
        echo"findStripeCustomer";
    }

    public function findStripeSubscriptionByCustomer()
    {

    }
}
$gateway = new StripeGateway();
$obj = new Subscription($gateway);
$obj->cancel();