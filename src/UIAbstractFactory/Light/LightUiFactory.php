<?php

namespace App\DesignPatternsPhp\UIAbstractFactory\Light;

use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IButton;
use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IInput;
use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IUIFactory;

class LightUiFactory implements IUIFactory
{

    public function createButton(): IButton
    {
        return new LightButton();
    }

    public function createInput(): IInput
    {
        return new LightInput();
    }
}
