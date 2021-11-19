<?php

namespace Alqahtani\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alqahtani\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-example';
    }
}
