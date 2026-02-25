<?php

namespace App\DesignPatternsPhp\UIAbstractFactory\Dark;

use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IButton;
use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IInput;
use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IUIFactory;

class DarkUiFactory implements IUIFactory
{
    public function createButton(): IButton
    {

        return new DarkButton();
    }

    public function createInput(): IInput
    {
        return new DarkInput();
    }
}
