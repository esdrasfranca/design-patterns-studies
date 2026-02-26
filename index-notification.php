<?php

use App\DesignPatternsPhp\AbstractFactoryPushNotification\Interface\INotificationFactory;
use App\DesignPatternsPhp\AbstractFactoryPushNotification\MobileNotification\MobileNotificationFactory;
use App\DesignPatternsPhp\AbstractFactoryPushNotification\WebNotification\WebNotificationFactory;

require('./vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$tipoAcesso = $_ENV['NOTIFICATION_SERVICE'];

$factory = ($tipoAcesso === 'mobile')
    ? new MobileNotificationFactory()
    : new WebNotificationFactory();

enviarCampanha($factory);

function enviarCampanha(INotificationFactory $factory)
{
    $push = $factory->createPushNotification();
    echo $push->sendPush("Promoção de Verão!");
}
