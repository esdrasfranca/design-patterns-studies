<?php

namespace App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Azure;

use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\IMessenger;

class QueueMessenger implements IMessenger
{
    public function send(string $message): string
    {
        return "Mensagem enviada via Azure Queue";
    }
}
