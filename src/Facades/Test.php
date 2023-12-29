<?php

namespace UnknowSk\Test\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \UnknowSk\Test\Test
 */
class Test extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \UnknowSk\Test\Test::class;
    }
}
