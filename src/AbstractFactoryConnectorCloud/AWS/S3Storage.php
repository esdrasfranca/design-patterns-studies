<?php

namespace App\DesignPatternsPhp\AbstractFactoryConnectorCloud\AWS;

use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\IStorage;

class S3Storage implements IStorage
{
    public function upload(string $path): string
    {
        return "Arquivo enviado para o bucket S3 da AWS";
    }
}
