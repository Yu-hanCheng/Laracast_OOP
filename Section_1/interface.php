<?php

class CampaignMonitor
{
    public function subscribe($email)
    {
        die("subscribe with monitor");
    }
}
class Drip
{
    public function subscribe($email)
    {
        die("subscribe with drip");
    }

}

class NewsletterSubscriptionController
{
    public function store($newsletter)
    {
        return $newsletter->subscribe("email");
    }
}

$news = new NewsletterSubscriptionController();
echo $news->store(new Drip());
?>