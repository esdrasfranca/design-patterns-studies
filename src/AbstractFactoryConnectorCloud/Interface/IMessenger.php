<?php

namespace App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface;

interface IMessenger
{
    public function send(string $message): string;
}
