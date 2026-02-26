<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\MobileNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\IEmailNotification;
use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\INotificationFactory;
use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\IPushNotification;

class MobileNotificationFactory implements INotificationFactory
{

    public function createPushNotification(): IPushNotification
    {
        return new FirebasePush();
    }

    public function createEmailNotification(): IEmailNotification
    {
        return new MobileEmail();
    }
}
