<?php

namespace App\DesignPatternsPhp\UIAbstractFactory\Dark;

use App\DesignPatternsPhp\UIAbstractFactory\Interfaces\IButton;

class DarkButton implements IButton
{

    public function render(): string
    {
        return "Renderizando Botão Dark";
    }
}
