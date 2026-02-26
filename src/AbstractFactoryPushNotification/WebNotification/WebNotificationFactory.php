<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\WebNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\IEmailNotification;
use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\INotificationFactory;
use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\IPushNotification;
use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\ISmsNotification;

class WebNotificationFactory implements INotificationFactory
{

    public function createPushNotification(): IPushNotification
    {
        return new BrowserPush();
    }

    public function createEmailNotification(): IEmailNotification
    {
        return new WebEmail();
    }

    public function createSmsNotification(): ISmsNotification
    {
        return new WebSms();
    }
}
