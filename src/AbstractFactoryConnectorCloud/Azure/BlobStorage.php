<?php

namespace App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Azure;

use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\IStorage;

class BlobStorage implements IStorage
{
    public function upload(string $path): string
    {
        return "Arquivo enviado para o Azure Blob Storage";
    }
}
