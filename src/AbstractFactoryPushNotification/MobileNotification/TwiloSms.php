<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\MobileNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\ISmsNotification;

class TwiloSms implements ISmsNotification
{
    public function sendSms(string $message): string
    {
        return "Twilo SMS sent: " . $message;
    }
}
