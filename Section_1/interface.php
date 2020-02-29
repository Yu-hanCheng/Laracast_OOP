<?php
Interface Newsletter
{
   public function subscribe($email);
}
class CampaignMonitor implements Newsletter
{
    public function subscribe($email)
    {
        die("subscribe with monitor");
    }
}
class Drip implements Newsletter
{
    public function subscribe($email)
    {
        die("subscribe with drip");
    }

}

class NewsletterSubscriptionController
{
    public function store(Newsletter $newsletter)
    {
        return $newsletter->subscribe("email");
    }
}

$news = new NewsletterSubscriptionController();
echo $news->store(new Drip());
?>