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

    switch ($_ENV['NOTIFICATION_METHOD']) {
        case 'push':
            echo $factory->createPushNotification()->sendPush("Promoção de Verão!");
            break;
        case 'email':
            echo $factory->createEmailNotification()->sendEmail("Promoção de Verão!");
            break;
        case 'sms':
            echo $factory->createSmsNotification()->sendSms("Promoção de Verão!");
            break;
        default:
            echo "Método de notificação inválido.";
            break;
    }


    $push = $factory->createSmsNotification();
    echo $push->sendSms("Promoção de Verão!");
}
