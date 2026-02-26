<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\WebNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\ISmsNotification;

class WebSms implements ISmsNotification
{
    public function sendSms(string $message): string
    {
        return "Web SMS sent: " . $message;
    }
}
