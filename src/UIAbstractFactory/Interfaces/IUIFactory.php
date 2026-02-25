<?php

namespace App\DesignPatternsPhp\UIAbstractFactory\Interfaces;

interface IUIFactory
{
    public function createButton(): IButton;
    public function createInput(): IInput;
}
