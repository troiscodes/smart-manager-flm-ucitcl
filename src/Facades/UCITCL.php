<?php

namespace AgenceKonig\UCITCL\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AgenceKonig\UCITCL\UCITCL
 */
class UCITCL extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AgenceKonig\UCITCL\UCITCL::class;
    }
}
