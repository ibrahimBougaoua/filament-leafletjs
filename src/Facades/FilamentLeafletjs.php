<?php

namespace IbrahimBougaoua\FilamentLeafletjs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IbrahimBougaoua\FilamentLeafletjs\FilamentLeafletjs
 */
class FilamentLeafletjs extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \IbrahimBougaoua\FilamentLeafletjs\FilamentLeafletjs::class;
    }
}
