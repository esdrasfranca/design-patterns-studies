<?php

namespace App\DesignPatternsPhp\AbstractFactoryPushNotification\MobileNotification;

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\IEmailNotification;

class MobileEmail implements IEmailNotification
{
    public function sendEmail(string $message): void
    {
        echo "Enviando Email formatado para telas pequenas: $message";
    }
}
