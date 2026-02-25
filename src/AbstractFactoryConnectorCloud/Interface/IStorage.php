<?php

namespace App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface;

interface IStorage
{
    public function upload(string $path): string;
}
