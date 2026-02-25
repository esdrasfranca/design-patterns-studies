<?php

namespace App\DesignPatternsPhp\UIAbstractFactory\Dark;

use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IInput;

class DarkInput implements IInput
{

    public function render(): string
    {
        return "Renderizando Input Dark";
    }
}
