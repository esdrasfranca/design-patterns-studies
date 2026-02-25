<?php

namespace App\DesignPatternsPhp\AbstractFactoryConnectorCloud\AWS;

use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\CloudFactory;
use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\IMessenger;
use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\IStorage;

class AwsFactory implements CloudFactory
{

    public function createStorage(): IStorage
    {
        return new S3Storage();
    }

    public function createMessenger(): IMessenger
    {
        return new SNSMessenger();
    }
}
