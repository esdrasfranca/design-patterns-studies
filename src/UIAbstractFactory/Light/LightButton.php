<?php

namespace App\DesignPatternsPhp\UIAbstractFactory\Light;

use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IButton;

class LightButton implements IButton
{

    public function render(): string
    {
        return "Renderizando Botão Branco";
    }
}
