<?php

namespace MltStephane\BladeUi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MltStephane\BladeUi\BladeUi
 */
class BladeUi extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MltStephane\BladeUi\BladeUi::class;
    }
}
