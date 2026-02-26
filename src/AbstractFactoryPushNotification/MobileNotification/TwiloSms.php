<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\MobileNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\ISmsNotification;

class TwiloSms implements ISmsNotification
{
    public function sendSms(string $message): string
    {

        if (true) {
            sleep(2);
        }

        return "Twilo SMS sent: " . $message;
    }
}
