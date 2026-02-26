<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\WebNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\ISmsNotification;

class WebSms implements ISmsNotification
{
    public function sendSms(string $message): string
    {
        for ($index = 0; $index < 10; $index++) {
            sleep(3);
        }

        return "Web SMS sent: " . $message;
    }
}
