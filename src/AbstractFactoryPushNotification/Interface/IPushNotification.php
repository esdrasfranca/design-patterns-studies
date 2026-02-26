<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface;

interface IPushNotification
{
    public function sendPush(string $message): void;
}
