<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\WebNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\IEmailNotification;

class WebEmail implements IEmailNotification
{

    public function sendEmail(string $message): string
    {
        return "Enviando Email formatado para Desktop: $message";
    }
}
