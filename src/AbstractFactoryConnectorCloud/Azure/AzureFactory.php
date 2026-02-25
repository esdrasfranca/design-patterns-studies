<?php

namespace App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Azure;

use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\CloudFactory;
use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\IMessenger;
use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\IStorage;

class AzureFactory implements CloudFactory
{

    public function createStorage(): IStorage
    {
        return new BlobStorage();
    }

    public function createMessenger(): IMessenger
    {
        return new QueueMessenger();
    }
}
