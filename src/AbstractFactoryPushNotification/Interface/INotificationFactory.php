<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface;

interface INotificationFactory
{

    public function createPushNotification(): IPushNotification;
    public function createEmailNotification(): IEmailNotification;
}
