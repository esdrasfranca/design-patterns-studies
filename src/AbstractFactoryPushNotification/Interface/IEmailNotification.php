<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface;

interface IEmailNotification
{
    public function sendEmail(string $message): string;
}
