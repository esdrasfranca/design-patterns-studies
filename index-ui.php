<?php

use App\DesignPatternsPhp\UIAbstractFactory\Dark\DarkUiFactory;
use App\DesignPatternsPhp\UIAbstractFactory\Light\LightUiFactory;

require('./vendor/autoload.php');

$theme = "light";

if ($theme == 'dark') {
    $factory = new DarkUiFactory();
} else {
    $factory = new LightUiFactory();
}

var_dump($factory->createButton()->render());
var_dump($factory->createInput()->render());
