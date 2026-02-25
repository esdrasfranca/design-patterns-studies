<?php

use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\AWS\AwsFactory;
use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Azure\AzureFactory;
use App\DesignPatternsPhp\AbstractFactoryConnectorCloud\Interface\CloudFactory;

require('./vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$provider = $_ENV['CLOUD_PROVIDER'];

if ($provider == 'aws') {
    $factory = new AwsFactory();
} else {
    $factory = new AzureFactory();
}

executarOperacoesDeNuvem($factory);

function executarOperacoesDeNuvem(CloudFactory $factory)
{
    $storage = $factory->createStorage();
    $messenger = $factory->createMessenger();

    echo $storage->upload('foto.jpg') . '<br>';
    echo $messenger->send('Olá Mundo') . '<br>';
}
