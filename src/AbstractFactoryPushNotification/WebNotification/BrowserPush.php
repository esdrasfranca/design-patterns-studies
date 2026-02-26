<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\WebNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\IPushNotification;

class BrowserPush implements IPushNotification
{

    public function sendPush(string $message): void
    {
        echo "Enviando Push via Service Worker (Web): $message";
    }
}
