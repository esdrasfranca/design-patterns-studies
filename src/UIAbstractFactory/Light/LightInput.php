<?php

namespace App\DesignPatternsPhp\UIAbstractFactory\Light;

use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IInput;

class LightInput implements IInput
{

    public function render(): string
    {
        return "Renderizando Input Branco";
    }
}
