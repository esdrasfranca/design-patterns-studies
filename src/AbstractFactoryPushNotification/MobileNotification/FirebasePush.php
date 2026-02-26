<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\MobileNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\IPushNotification;

class FirebasePush implements IPushNotification
{

    public function sendPush(string $message): string
    {
        return "Enviando Push via Firebase (Mobile): $message";
    }
}
