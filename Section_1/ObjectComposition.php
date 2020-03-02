<?php

class Subscription
{
    public function create()
    {

    }
   
    public function cancel()
    {
        // api request
        // find stripe customer id
        $gateway = new StripeGateway();
        $gateway-> findStripeCustomer();
        // find stripe subscription by customer
    }
    public function invoice()
    {

    }
    public function swap()
    {

    }


}

class StripeGateway extends Subscription
{
    
    protected function findStripeCustomer()
    {
        echo"findStripeCustomer";
    }

    protected function findStripeSubscriptionByCustomer()
    {

    }
}
$obj = new Subscription();
$obj->cancel();