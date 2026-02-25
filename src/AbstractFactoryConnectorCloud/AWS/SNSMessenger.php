<?php

namespace App\DesignPatternsPhp\AbstractFactoryConnectorCloud\AWS;

use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\IMessenger;

class SNSMessenger implements IMessenger
{

    public function send(string $message): string
    {
        return "Mensagem enviada via SNS da AWS";
    }
}
