<?php

namespace App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface;

interface CloudFactory
{
    public function createStorage(): IStorage;
    public function createMessenger(): IMessenger;
}
