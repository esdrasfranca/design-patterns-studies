<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface;

interface ISmsNotification
{
    public function sendSms(string $message): string;
}
